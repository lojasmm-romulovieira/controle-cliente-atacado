<?php

namespace App\Repositories;

use App\DTO\ClienteDTO;
use App\Filters\ClienteFilter;
use App\Models\ClienteModel;
use App\Models\RecadoModel;
use App\Models\UsuarioClienteModel;
use Illuminate\Pagination\LengthAwarePaginator;

class ClienteRepository
{
    public function getAll(ClienteFilter $filter): LengthAwarePaginator
    {
        $clientes = ClienteModel::filter($filter)
            ->with([
                'ramos:idramo,descricao',
                'classificacao:idclassificacao,descricao',
                'cidade:idcidade,nome,idestado',
                'cidade.estado:idestado,nome,uf',
                'historicoligacao:idhistoricoligacao,idcliente,observacao,fezpedido,atendeuligacao,created_at',
                'usuariocliente:id,name,email'
            ])
            ->whereHas('usuariocliente', function ($query) {
                $query->where('idusuario', auth()->id());
            })
            ->paginate(10)
            ->withQueryString();

        $clientes->each(function ($cliente) {
            $cliente->ramos->each(function ($ramo) {
                $ramo->makeHidden('pivot');
            });

            $cliente->usuariocliente->each(function ($usuario) {
                $usuario->makeHidden('pivot');
            });
        });

        return $clientes;
    }

    public function create(ClienteDTO $clienteDTO): ClienteModel
    {
        $cliente = ClienteModel::create((array)$clienteDTO);

        $cliente->ramos()->sync($clienteDTO->ramos);
        $cliente->perfis()->sync($clienteDTO->perfis);
        $cliente->cnpjagrupador()->createMany($clienteDTO->cnpjagrupador);

        UsuarioClienteModel::create([
            'idcliente' => $cliente->idcliente,
            'idusuario' => auth()->id()
        ]);

        return $cliente;
    }

    public function update(ClienteModel $cliente, ClienteDTO $clienteDTO): ClienteModel
    {
        $cliente->update((array)$clienteDTO);

        $cliente->ramos()->sync($clienteDTO->ramos);
        $cliente->perfis()->sync($clienteDTO->perfis);
        $cliente->cnpjagrupador()->delete();
        $cliente->cnpjagrupador()->createMany($clienteDTO->cnpjagrupador);

        return $cliente;
    }

    public function delete(ClienteModel $cliente): void
    {
        $cliente->historicoligacao()->delete();
        $cliente->usuariocliente()->detach();
        RecadoModel::where('idcliente', $cliente->idcliente)->delete();
        $cliente->ramos()->detach();
        $cliente->perfis()->detach();
        $cliente->delete();
    }
}
