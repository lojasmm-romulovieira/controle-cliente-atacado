<?php

namespace App\Http\Controllers\Api;

use App\DTO\HistoricoLigacaoDTO;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\HistoricoLigacaoRequest;
use App\Http\Resources\HistoricoLigacaoResource;
use App\Services\HistoricoLigacaoService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class HistoricoLigacaoController extends Controller
{
    public function __construct(private HistoricoLigacaoService $service)
    {
    }

    public function store(HistoricoLigacaoRequest $request): JsonResponse
    {
        try {
            $historicoLigacao = $this->service->create(
                HistoricoLigacaoDTO::getInstanciaDTO($request->validated())
            );

            return (new HistoricoLigacaoResource($historicoLigacao))
                ->response()
                ->setStatusCode(Response::HTTP_CREATED);
        } catch (Exception $e) {
            return ResponseHelper::respondWithInternalError('Falha ao salvar histórico de ligação.');
        }
    }
}
