<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HistoricoLigacaoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'idhistoricoligacao' => $this->idhistoricoligacao,
            'cliente' => [
                'nome' => $this->cliente->nome,
                'cnpj' => $this->cliente->cnpj,
                'razaosocial' => $this->cliente->razaosocial
            ],
            'fezpedido' => $this->fezpedido,
            'atendeuligacao' => $this->atendeuligacao,
            'observacao' => $this->observacao,
            'datacriacao' => $this->created_at,
            'dataultimoupdate' => $this->updated_at
        ];
    }
}
