<?php

namespace App\DTO;

class HistoricoLigacaoDTO
{
    public function __construct(
        public int    $idcliente,
        public bool   $fezpedido,
        public bool   $atendeuligacao,
        public string $observacao
    )
    {
    }

    public static function getInstanciaDTO(array $data): HistoricoLigacaoDTO
    {
        return new HistoricoLigacaoDTO(
            idcliente: $data['idcliente'],
            fezpedido: $data['fezpedido'],
            atendeuligacao: $data['atendeuligacao'],
            observacao: $data['observacao'] ?? ''
        );
    }
}
