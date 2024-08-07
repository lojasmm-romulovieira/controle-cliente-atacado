<?php

namespace App\Http\Controllers\Web;

use App\DTO\HistoricoLigacaoDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\HistoricoLigacaoRequest;
use App\Models\HistoricoLigacaoModel;
use App\Services\HistoricoLigacaoService;
use Exception;
use Illuminate\Http\RedirectResponse;

class WebHistoricoLigacaoController extends Controller
{
    public function __construct(private HistoricoLigacaoService $service)
    {
    }

    public function store(HistoricoLigacaoRequest $request): RedirectResponse
    {
        try {
            $this->service->create(
                HistoricoLigacaoDTO::getInstanciaDTO($request->validated())
            );

            return redirect()
                ->back()
                ->withInput()
                ->with('success', 'Histórico de ligação salvo com sucesso.');
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao salvar histórico de ligação.');
        }
    }

    public function destroy(HistoricoLigacaoModel $historicoLigacao): RedirectResponse
    {
        try {
            $this->service->destroy($historicoLigacao);

            return redirect()
                ->back()
                ->withInput()
                ->with('success', 'Histórico de ligação excluído com sucesso.');
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao excluir histórico de ligação.');
        }
    }
}
