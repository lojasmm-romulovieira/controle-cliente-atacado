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

    public function sememail(string $sememail): void
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
            $this->builder->whereHas('historicoligacao', function ($query) {
                $query->whereBetween('created_at', [
                    now()->subDays(44)->startOfDay(),
                    now()->subDays(31)->endOfDay()
                ])->where('fezpedido', false);
            });
        }
    }

    public function maior45DiasSemPedido(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->whereHas('historicoligacao', function ($query) {
                $query->whereBetween('created_at', [
                    now()->subDays(60)->startOfDay(),
                    now()->subDays(45)->endOfDay()
                ])->where('fezpedido', false);
            });
        }
    }

    public function maior61DiasSemPedido(string $filtrar): void
    {
        if ($filtrar === 'true') {
            $this->builder->whereHas('historicoligacao', function ($query) {
                $query->where('created_at', '<=', now()->subDays(61)->endOfDay())
                    ->where('fezpedido', false);
            });
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
            $this->builder->whereDoesntHave('historicoligacao')
                ->orWhereHas('historicoligacao', function ($query) {
                    $query->whereBetween('created_at', [
                        now()->startOfMonth()->startOfDay(),
                        now()->endOfMonth()->endOfDay()
                    ])->where('fezpedido', false)
                        ->orWhereNull('fezpedido');
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
}
