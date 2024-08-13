<?php

namespace App\Http\Controllers\Web;

use App\DTO\ClienteDTO;
use App\Filters\ClienteFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ClienteRequest;
use App\Models\CidadeModel;
use App\Models\ClassificacaoModel;
use App\Models\ClienteModel;
use App\Models\EstadoModel;
use App\Models\PerfilModel;
use App\Models\RamoModel;
use App\Services\ClienteService;
use App\Services\RecadoService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Throwable;

class WebClienteController extends Controller
{
    public function __construct(private ClienteService $clienteService, private RecadoService $recadoService)
    {
    }

    private function filtersOptions()
    {
        $estadosOptions = EstadoModel::selectRaw("idestado as value, CONCAT(uf, ' - ', nome) AS label")->get();
        $ramosOptions = RamoModel::selectRaw('idramo as value, descricao as label')->get();
        $situacoesUsuariosOptions = [
            [
                'value' => true,
                'label' => 'Ativo'
            ],
            [
                'value' => false,
                'label' => 'Inativo'
            ]
        ];
        $cidadesOptions = CidadeModel::selectRaw('idcidade as value, CONCAT(cidade.nome, " - ", estado.uf) as label')
            ->join('estado', 'estado.idestado', '=', 'cidade.idestado')
            ->get();
        $classificacoesOptions = ClassificacaoModel::selectRaw('idclassificacao as value, descricao as label')->get();
        $perfisOptions = PerfilModel::selectRaw('idperfil as value, descricao as label')->get();
        $clientesOptions = ClienteModel::selectRaw('idcliente as value, razaosocial as label')->whereHas('usuariocliente', function ($query) {
            $query->where('idusuario', auth()->id());
        })
            ->get();

        return compact(
            'estadosOptions',
            'ramosOptions',
            'situacoesUsuariosOptions',
            'cidadesOptions',
            'classificacoesOptions',
            'perfisOptions',
            'clientesOptions'
        );
    }

    public function index(Request $request, ClienteFilter $filter): Response|RedirectResponse
    {
        try {
            $clientes = $this->clienteService->getAll($filter);
            $filters = $request->all();
            $filtersOptions = $this->filtersOptions();
            $recados = $this->recadoService->getAll();

            return Inertia::render('Cliente/ClienteIndex', compact(
                'clientes',
                'recados',
                'filters',
                'filtersOptions'
            ));
        } catch (Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao carregar página contate o suporte.');
        }
    }

    public function create(): Response|RedirectResponse
    {
        try {
            $filtersOptions = $this->filtersOptions();

            return Inertia::render('Cliente/ClienteCreate', compact(
                'filtersOptions'
            ));
        } catch (Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao carregar página contate o suporte.');
        }
    }

    public function store(ClienteRequest $request): RedirectResponse
    {
        try {
            $this->clienteService->create(
                clienteDTO::getInstanciaDTO($request->validated())
            );

            return redirect()
                ->route('web.cliente.index')
                ->with('success', 'Cliente cadastrado com sucesso.');
        } catch (Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao cadastrar cliente entre em contato com o suporte.');
        }
    }

    public function edit(ClienteModel $cliente): Response|RedirectResponse
    {
        try {
            $cliente = $cliente->load([
                'ramos:idramo,descricao',
                'classificacao:idclassificacao,descricao',
                'cidade:idcidade,nome,idestado',
                'cidade.estado:idestado,nome,uf',
                'perfis:idperfil,descricao',
                'historicoligacao:idhistoricoligacao,idcliente,observacao,fezpedido,atendeuligacao,created_at',
                'cnpjagrupador:idclientecnpjagrupador,idcliente,cnpjagrupador'
            ]);

            $filtersOptions = $this->filtersOptions();

            return Inertia::render('Cliente/ClienteEdit', compact(
                'cliente',
                'filtersOptions'
            ));
        } catch (Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao carregar página contate o suporte.');
        }
    }

    public function update(ClienteRequest $request, ClienteModel $cliente): RedirectResponse
    {
        try {
            $this->clienteService->update(
                $cliente,
                ClienteDTO::getInstanciaDTO($request->validated())
            );

            return redirect()
                ->route('web.cliente.index')
                ->with('success', 'Cliente atualizado com sucesso.');
        } catch (Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Falha ao atualizar cliente entre em contato com o suporte.');
        }
    }

    public function destroy(ClienteModel $cliente): RedirectResponse
    {
        try {
            $this->clienteService->delete($cliente);

            return redirect()
                ->route('web.cliente.index')
                ->with('success', 'Cliente excluído com sucesso.');
        } catch (Throwable $e) {
            return redirect()
                ->back()
                ->with('error', 'Falha ao excluir cliente entre em contato com o suporte.');
        }
    }
}
