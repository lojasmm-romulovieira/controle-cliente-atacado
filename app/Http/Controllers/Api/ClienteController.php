<?php

namespace App\Http\Controllers\Api;

use App\DTO\ClienteDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Services\ClienteService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ClienteController extends Controller
{
    public function __construct(private ClienteService $clienteService)
    {
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
        } catch (Exception $e) {
            dd($e);
            return response()->json(['error' => 'Erro ao criar cliente'], 500);
        }
    }
}
