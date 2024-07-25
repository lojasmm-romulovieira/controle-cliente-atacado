<?php

namespace App\Http\Controllers\Web;

use App\Filters\ClienteFilter;
use App\Http\Controllers\Controller;
use App\Models\EstadoModel;
use App\Models\RamoModel;
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

    private function filtersOptions()
    {
        $estadosOptions = EstadoModel::selectRaw("idestado as value, CONCAT(uf, ' - ', nome) AS label")->get();
        $ramosOptions = RamoModel::selectRaw('idramo as value, descricao as label')->get();
        $situacoesUsuariosOptions = [
            [
                'value' => 1,
                'label' => 'Ativo'
            ],
            [
                'value' => 0,
                'label' => 'Inativo'
            ]
        ];

        return compact(
            'estadosOptions',
            'ramosOptions',
            'situacoesUsuariosOptions'
        );
    }

    public function index(Request $request, ClienteFilter $filter): Response|RedirectResponse
    {
        try {
            $clientes = $this->clienteService->getAll($filter);
            $filters = $request->all();
            $filtersOptions = $this->filtersOptions();

            return Inertia::render('Cliente/ClienteIndex', compact(
                'clientes',
                'filters',
                'filtersOptions'
            ));
        } catch (Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao carregar página. Tente novamente.');
        }
    }
}
