<?php

namespace App\Filters;

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
}
