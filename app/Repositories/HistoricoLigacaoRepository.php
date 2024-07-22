<?php

namespace App\Repositories;

use App\DTO\HistoricoLigacaoDTO;
use App\Models\HistoricoLigacaoModel;

class HistoricoLigacaoRepository
{
    public function create(HistoricoLigacaoDTO $historicoLigacaoDTO): HistoricoLigacaoModel
    {
        return HistoricoLigacaoModel::create((array)$historicoLigacaoDTO);
    }

    public function destroy(HistoricoLigacaoModel $historicoLigacao): void
    {
        $historicoLigacao->delete();
    }
}
