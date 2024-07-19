<?php

namespace App\Repositories;

use App\DTO\ClienteDTO;
use App\Models\ClienteModel;

class ClienteRepository
{
    public function create(ClienteDTO $clienteDTO): ClienteModel
    {
        return ClienteModel::create((array)$clienteDTO);
    }
}
