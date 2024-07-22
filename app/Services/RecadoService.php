<?php

namespace App\Services;

use App\DTO\RecadoDTO;
use App\Models\RecadoModel;
use App\Repositories\RecadoRepository;
use Illuminate\Database\Eloquent\Collection;

class RecadoService
{
    public function __construct(
        private RecadoRepository $recadoRepository
    )
    {
    }

    public function getAll(): Collection
    {
        return $this->recadoRepository->getAll();
    }

    public function create(RecadoDTO $recadoDTO): RecadoModel
    {
        return $this->recadoRepository->create($recadoDTO);
    }

    public function update(RecadoDTO $recadoDTO, RecadoModel $recadocliente): RecadoModel
    {
        return $this->recadoRepository->update($recadoDTO, $recadocliente);
    }

    public function destroy(RecadoModel $recadocliente): void
    {
        $this->recadoRepository->destroy($recadocliente);
    }
}
