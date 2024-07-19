<?php

namespace App\Services;


use App\DTO\ClienteDTO;
use App\Models\ClienteModel;
use App\Repositories\ClienteRepository;

class ClienteService
{
    public function __construct(private ClienteRepository $clientRepository)
    {
    }

    public function create(ClienteDTO $cliente): ClienteModel
    {
        return $this->clientRepository->create($cliente);
    }
}
