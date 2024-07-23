<?php

namespace App\Filters;

use App\Models\ClassificacaoModel;

class ClienteFilter extends AbstractFilter
{
    public function idestado(string $idestado): void
    {
        $this->builder->whereHas('cidade', function ($query) use ($idestado) {
            $query->whereHas('estado', function ($query) use ($idestado) {
                $query->where('idestado', $idestado);
            });
        });
    }

    public function somenteClientesSemEmail(string $sememail): void
    {
        if ($sememail === "true") {
            $this->builder->whereNull('email');
            return;
        }

        $this->builder->whereNotNull('email');
    }

    public function ativo(string $ativo): void
    {
        $this->builder->where('ativo', strtolower($ativo === 'true'));
    }

    public function ramos(array $ramos): void
    {
        $this->builder->whereHas('ramos', function ($query) use ($ramos) {
            $query->whereIn('ramocliente.idramo', $ramos);
        });
    }

    public function idclassificacao(string $idclassificacao): void
    {
        $this->builder->where('idclassificacao', $idclassificacao);
    }

    public function ultimos30DiasComPedido(string $filtrar): void
    {
        $this->builder->whereHas('historicoligacao', function ($query) {
            $query->whereBetween('created_at', [
                now()->subDays(30)->startOfDay(),
                now()->endOfDay()
            ])->where('fezpedido', true);
        });
    }

    public function maior31DiasSemPedido(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder
                // Excluir clientes que fizeram pedido nos últimos 44 dias
                ->whereDoesntHave('historicoligacao', function ($query) {
                    $query->where('created_at', '>=', now()->subDays(31)->startOfDay());
                })
                // Filtrar clientes que não fizeram pedido entre 31 e 44 dias atrás
                ->whereDoesntHave('historicoligacao', function ($query) {
                    $query->whereBetween('created_at', [
                        now()->subDays(44)->startOfDay(),
                        now()->subDays(31)->endOfDay()
                    ])
                        ->where('fezpedido', true);
                })
                ->whereHas('historicoligacao');
        }
    }

    public function maior45DiasSemPedido(string $filtrar): void
    {
        if ($filtrar === 'true') {

            $this->builder
                ->whereDoesntHave('historicoligacao', function ($query) {
                    $query->where('created_at', '>=', now()->subDays(45)->startOfDay());
                })
                ->whereDoesntHave('historicoligacao', function ($query) {
                    $query->whereBetween('created_at', [
                        now()->subDays(60)->startOfDay(),
                        now()->subDays(45)->endOfDay()
                    ])->where('fezpedido', true);
                })->whereHas('historicoligacao');
        }
    }

    public function maior61DiasSemPedido(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder
                ->whereDoesntHave('historicoligacao', function ($query) {
                    $query->where('created_at', '>=', now()->subDays(61)->startOfDay());
                })
                ->whereDoesntHave('historicoligacao', function ($query) {
                    $query->where('created_at', '<=', now()->subDays(61)->endOfDay())
                        ->where('fezpedido', true);
                })->whereHas('historicoligacao');
        }
    }

    public function prospeccaoSemPedido(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->where('idclassificacao', ClassificacaoModel::EM_PROSPECCAO)
                ->where(function ($query) {
                    $query->whereDoesntHave('historicoligacao')
                        ->orWhereHas('historicoligacao', function ($subQuery) {
                            $subQuery->where('fezpedido', false);
                        });
                });
        }
    }

    public function semPedidoEsteMes(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->whereDoesntHave('historicoligacao', function ($query) {
                $query->whereBetween('created_at', [
                    now()->startOfMonth()->startOfDay(),
                    now()->endOfMonth()->endOfDay()
                ])->where('fezpedido', true);
            });
        }
    }

    public function inativosSemEmail(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->where('ativo', false)
                ->whereNull('email');
        }
    }

    public function aniversariantesMes(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->whereMonth('datanascimento', now()->month);
        }
    }

    public function search(string $search): void
    {

        $this->builder->where(function ($query) use ($search) {
            $query->where('cnpj', 'like', "%{$search}%")
                ->orWhere('razaosocial', 'like', "%{$search}%")
                ->orWhere('nome', 'like', "%{$search}%")
                ->orWhereHas('cidade', function ($query) use ($search) {
                    $query->where('nome', 'like', "%{$search}%");
                    $query->orWhereHas('estado', function ($query) use ($search) {
                        $query->where('nome', 'like', "%{$search}%");
                    });
                });

        });
    }

    public function somenteClientesComClassificacaoA(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->where('idclassificacao', ClassificacaoModel::A);
        }
    }

    public function somenteClientesComClassificacaoB(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->where('idclassificacao', ClassificacaoModel::B);
        }
    }

    public function somenteClientesComClassificacaoC(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->where('idclassificacao', ClassificacaoModel::C);
        }
    }

    public function somenteClientesComClassificacaoEmProspeccao(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->where('idclassificacao', ClassificacaoModel::EM_PROSPECCAO);
        }
    }
}
