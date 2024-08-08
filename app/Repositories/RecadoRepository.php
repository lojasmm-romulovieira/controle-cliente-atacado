<?php

namespace App\Repositories;

use App\DTO\RecadoDTO;
use App\Models\RecadoModel;
use Illuminate\Database\Eloquent\Collection;

class RecadoRepository
{
    public function getAll(): Collection
    {
        return RecadoModel::with('cliente')
            ->where('idusuario', auth()->id())
            ->orderBy('created_at', 'desc')->get();
    }

    public function create(RecadoDTO $recadoDTO): RecadoModel
    {
        return RecadoModel::create((array)$recadoDTO);
    }

    public function update(RecadoDTO $recadoDTO, RecadoModel $recadocliente): RecadoModel
    {
        $recadocliente->update((array)$recadoDTO);

        return RecadoModel::find($recadocliente->idrecadocliente);
    }

    public function destroy(RecadoModel $recadocliente): void
    {
        $recadocliente->delete();
    }
}
