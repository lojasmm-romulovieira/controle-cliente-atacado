<?php

namespace App\Http\Controllers\Api;

use App\DTO\RecadoDTO;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\RecadoRequest;
use App\Http\Resources\RecadoResource;
use App\Models\RecadoModel;
use App\Services\RecadoService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class RecadoController extends Controller
{
    public function __construct(
        private RecadoService $service
    )
    {
    }

    public function index(): JsonResponse
    {
        try {
            $recados = $this->service->getAll();

            return RecadoResource::collection($recados)
                ->response()
                ->setStatusCode(Response::HTTP_OK);
        } catch (Exception $e) {
            return ResponseHelper::respondWithInternalError('Falha ao buscar recados.');
        }
    }

    public function store(RecadoRequest $request): JsonResponse
    {
        try {
            $recado = $this->service->create(
                RecadoDTO::getInstanciaDTO($request->validated())
            );

            return (new RecadoResource($recado))
                ->response()
                ->setStatusCode(Response::HTTP_CREATED);
        } catch (Exception $e) {
            return ResponseHelper::respondWithInternalError('Falha aon salvar recado.');
        }
    }

    public function update(RecadoRequest $request, RecadoModel $recadocliente): JsonResponse
    {
        try {
            $recadoCliente = $this->service->update(
                RecadoDTO::getInstanciaDTO($request->validated()),
                $recadocliente
            );

            return (new RecadoResource($recadoCliente))
                ->response()
                ->setStatusCode(Response::HTTP_OK);

        } catch (Exception $e) {
            ResponseHelper::respondWithInternalError('Falha ao atualizar recado.');
        }
    }

    public function destroy(RecadoModel $recadocliente): JsonResponse
    {
        try {
            if (!$recadocliente->exists) {
                return ResponseHelper::respondWithNotFound('Recado não encontrado.');
            }

            $this->service->destroy($recadocliente);

            return response()->json(['mensagem' => 'Recado deletado com sucesso.'], Response::HTTP_OK);
        } catch (Exception $e) {
            return ResponseHelper::respondWithInternalError('Falha ao deletar recado.');
        }
    }
}
