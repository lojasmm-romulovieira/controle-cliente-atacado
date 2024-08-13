<?php

namespace App\DTO;

use App\Models\ClassificacaoModel;

class ClienteDTO
{
    public function __construct(
        public string  $cnpj,
        public string  $razaosocial,
        public array   $ramos,
        public array   $perfis,
        public int     $idclassificacao,
        public int     $numeroloja,
        public int     $numerovendedor,
        public ?float  $arealoja,
        public float   $limitecredito,
        public bool    $enviaremail,
        public bool    $possuidividapendente,
        public bool    $possuicompra,
        public bool    $possuiblu,
        public bool    $ativo,
        public ?string $nome,
        public ?string $datanascimento,
        public ?int    $idcidade,
        public ?string $ddd,
        public ?string $telefone,
        public ?string $telefone2,
        public ?string $celular,
        public ?string $email,
        public ?string $email2,
        public ?string $observacoes,
        public ?array $cnpjagrupador,
        public ?string $streetview
    )
    {
    }

    public static function getInstanciaDTO(array $data): ClienteDTO
    {
        $data = collect($data);

        return new ClienteDTO(
            cnpj: $data->get('cnpj'),
            razaosocial: $data->get('razaosocial'),
            ramos: $data->get('ramos') ?? [],
            perfis: $data->get('perfis') ?? [],
            idclassificacao: $data->get('idclassificacao') ?? ClassificacaoModel::EM_PROSPECCAO,
            numeroloja: $data->get('numeroloja') ?? 0,
            numerovendedor: $data->get('numerovendedor') ?? 0,
            arealoja: $data->get('arealoja') ?? 0,
            limitecredito: $data->get('limitecredito') ?? 0,
            enviaremail: $data->get('enviaremail') ?? false,
            possuidividapendente: $data->get('possuidividapendente') ?? false,
            possuicompra: $data->get('possuicompra') ?? false,
            possuiblu: $data->get('possuiblu') ?? false,
            ativo: $data->get('ativo') ?? true,
            nome: $data->get('nome') ?? null,
            datanascimento: $data->get('datanascimento') ?? null,
            idcidade: $data->get('idcidade') ?? null,
            ddd: $data->get('ddd') ?? null,
            telefone: $data->get('telefone') ?? null,
            telefone2: $data->get('telefone2') ?? null,
            celular: $data->get('celular') ?? null,
            email: $data->get('email') ?? null,
            email2: $data->get('email2') ?? null,
            observacoes: $data->get('observacoes') ?? null,
            cnpjagrupador: $data->get('cnpjagrupador') ?? null,
            streetview: $data->get('streetview') ?? null
        );
    }
}
