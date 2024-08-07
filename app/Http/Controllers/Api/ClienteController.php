<?php

namespace App\Http\Controllers\Api;

use App\DTO\ClienteDTO;
use App\Filters\ClienteFilter;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Services\ClienteService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class ClienteController extends Controller
{
    public function __construct(private ClienteService $clienteService)
    {
    }

    public function index(Request $request, ClienteFilter $filter): JsonResponse
    {
        try {
            $clientes = $this->clienteService->getAll($filter);

            return response()->json($clientes->toArray());
        } catch (Throwable $e) {
            return ResponseHelper::respondWithInternalError('Erro ao buscar clientes.');
        }
    }

    public function store(ClienteRequest $request): JsonResponse
    {
        try {
            $cliente = $this->clienteService->create(
                ClienteDTO::getInstanciaDTO($request->validated())
            );
            return (new ClienteResource($cliente))
                ->response()
                ->setStatusCode(Response::HTTP_CREATED);
        } catch (Throwable $e) {
            return ResponseHelper::respondWithInternalError('Erro ao criar cliente.');
        }
    }
}
