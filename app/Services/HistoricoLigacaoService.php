<?php

namespace App\Services;

use App\DTO\HistoricoLigacaoDTO;
use App\Models\HistoricoLigacaoModel;
use App\Repositories\HistoricoLigacaoRepository;

class HistoricoLigacaoService
{
    public function __construct(private HistoricoLigacaoRepository $repository)
    {
    }

    public function create(HistoricoLigacaoDTO $historicoLigacaoDTO): HistoricoLigacaoModel
    {
        return $this->repository->create($historicoLigacaoDTO);
    }

    public function destroy(HistoricoLigacaoModel $historicoLigacao): void
    {
        $this->repository->destroy($historicoLigacao);
    }
}
