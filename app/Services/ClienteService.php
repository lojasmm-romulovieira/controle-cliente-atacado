<?php

namespace App\Services;


use App\DTO\ClienteDTO;
use App\Filters\ClienteFilter;
use App\Models\ClienteModel;
use App\Repositories\ClienteRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class ClienteService
{
    public function __construct(private ClienteRepository $clientRepository)
    {
    }

    public function getAll(ClienteFilter $filter): LengthAwarePaginator
    {
        return $this->clientRepository->getAll($filter);
    }

    public function create(ClienteDTO $cliente): ClienteModel
    {
        return $this->clientRepository->create($cliente);
    }

    public function update(ClienteModel $cliente, ClienteDTO $clienteDTO): ClienteModel
    {
        return $this->clientRepository->update($cliente, $clienteDTO);
    }

    public function delete(ClienteModel $cliente): void
    {
        $this->clientRepository->delete($cliente);
    }
}
