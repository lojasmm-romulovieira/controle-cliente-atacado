<?php

namespace App\Http\Controllers\Web;

use App\Filters\ClienteFilter;
use App\Http\Controllers\Controller;
use App\Services\ClienteService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Throwable;

class ClienteControllerWeb extends Controller
{
    public function __construct(private ClienteService $clienteService)
    {
    }

    public function index(Request $request, ClienteFilter $filter): Response|RedirectResponse
    {
        try {
            $clientes = $this->clienteService->getAll($filter);
            $filters = $request->all();

            return Inertia::render('Cliente/ClienteIndex', compact(
                'clientes',
                'filters'
            ));
        } catch (Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao carregar página. Tente novamente.');
        }
    }
}
