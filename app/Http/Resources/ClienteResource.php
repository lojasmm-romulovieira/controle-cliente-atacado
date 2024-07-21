<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $ramos = $this->ramos->map(function ($ramo) {
            return [
                'id' => $ramo->idramo,
                'descricao' => $ramo->descricao
            ];
        });

        return [
            'id' => $this->idcliente,
            'cnpj' => $this->cnpj,
            'razaosocial' => $this->razaosocial,
            'ramos' => $ramos,
            'classificacao' => [
                'id' => $this->classificacao->idclassificacao,
                'descricao' => $this->classificacao->descricao
            ],
            'cidade' => [
                'id' => $this->cidade->idcidade,
                'nome' => $this->cidade->nome,
                'estado' => [
                    'id' => $this->cidade->estado->idestado,
                    'nome' => $this->cidade->estado->nome,
                    'uf' => $this->cidade->estado->uf
                ]
            ],
            'nome' => $this->nome,
            'datanascimento' => $this->datanascimento,
            'uf' => $this->uf,
            'ddd' => $this->ddd,
            'telefone' => $this->telefone,
            'fone1' => $this->fone1,
            'fone2' => $this->fone2,
            'celular' => $this->celular,
            'email' => $this->email,
            'email2' => $this->email2,
            'observacoes' => $this->observacoes,
            'cnpjagrupador' => $this->cnpjagrupador,
            'streetview' => $this->streetview,
            'limitecredito' => $this->limitecredito,
            'enviaremail' => $this->enviaremail,
            'possuidividapendente' => $this->possuidividapendente,
            'possuicompra' => $this->possuicompra,
            'ativo' => $this->ativo,
            'datacriacao' => $this->created_at,
            'dataultimoupdate' => $this->updated_at
        ];
    }
}
