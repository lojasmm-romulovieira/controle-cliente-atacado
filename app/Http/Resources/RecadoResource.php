<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecadoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'idrecadocliente' => $this->idrecadocliente,
            'cliente' => [
                'id' => $this->cliente->idcliente,
                'nome' => $this->cliente->nome
            ],
            'recado' => $this->recado,
            'datahoraretorno' => $this->datahoraretorno
        ];
    }
}
