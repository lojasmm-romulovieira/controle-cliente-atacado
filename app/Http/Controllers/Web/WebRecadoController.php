<?php

namespace App\Http\Controllers\Web;

use App\DTO\RecadoDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\RecadoRequest;
use App\Models\RecadoModel;
use App\Services\RecadoService;
use Exception;
use Illuminate\Http\RedirectResponse;

class WebRecadoController extends Controller
{
    public function __construct(private RecadoService $service)
    {
    }

    public function store(RecadoRequest $request): RedirectResponse
    {
        try {
            $this->service->create(
                RecadoDTO::getInstanciaDTO($request->validated())
            );

            return redirect()
                ->back()
                ->withInput()
                ->with('success', 'Recado salvo com sucesso.');
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao salvar recado.');
        }
    }

    public function destroy(RecadoModel $recado): RedirectResponse
    {
        try {
            $this->service->destroy($recado);

            return redirect()
                ->back()
                ->withInput()
                ->with('success', 'Recado excluído com sucesso.');
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao excluir recado.');
        }
    }
}
