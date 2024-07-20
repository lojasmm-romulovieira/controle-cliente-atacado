<?php

namespace App\Repositories;

use App\DTO\ClienteDTO;
use App\Filters\ClienteFilter;
use App\Models\ClienteModel;
use Illuminate\Pagination\LengthAwarePaginator;

class ClienteRepository
{
    public function getAll(ClienteFilter $filter): LengthAwarePaginator
    {
        $clientes = ClienteModel::filter($filter)
            ->with(['ramos:idramo,descricao', 'classificacao:idclassificacao,descricao'])
            ->paginate(5)
            ->withQueryString();

        $clientes->each(function($cliente) {
            $cliente->ramos->each(function($ramo) {
                $ramo->makeHidden('pivot');
            });
        });

        return $clientes;
    }

    public function create(ClienteDTO $clienteDTO): ClienteModel
    {
        $cliente = ClienteModel::create((array)$clienteDTO);

        $cliente->ramos()->sync($clienteDTO->ramos);

        return $cliente;
    }
}
