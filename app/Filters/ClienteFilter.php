<?php

namespace App\Filters;

class ClienteFilter extends AbstractFilter
{
    public function uf(string $uf): void
    {
        $this->builder->where('uf', $uf);
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
