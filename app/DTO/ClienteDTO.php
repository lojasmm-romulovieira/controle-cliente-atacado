<?php

namespace App\DTO;

use App\Models\ClassificacaoModel;

class ClienteDTO
{
    public function __construct(
        public string  $cnpj,
        public string  $razaosocial,
        public array   $ramos,
        public int     $idclassificacao,
        public int     $numeroloja,
        public int     $numerovendedor,
        public float   $limitecredito,
        public bool    $enviaremail,
        public bool    $possuidividapendente,
        public bool    $possuicompra,
        public bool    $ativo,
        public ?string $nome,
        public ?string $datanascimento,
        public ?string $cidade,
        public ?string $uf,
        public ?string $ddd,
        public ?string $telefone,
        public ?string $fone1,
        public ?string $fone2,
        public ?string $celular,
        public ?string $email,
        public ?string $email2,
        public ?string $observacoes,
        public ?string $cnpjagrupador,
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
            idclassificacao: $data->get('idclassificacao') ?? ClassificacaoModel::BRONZE,
            numeroloja: $data->get('numeroloja') ?? 0,
            numerovendedor: $data->get('numerovendedor') ?? 0,
            limitecredito: $data->get('limitecredito') ?? 0,
            enviaremail: $data->get('enviaremail') ?? false,
            possuidividapendente: $data->get('possuidividapendente') ?? false,
            possuicompra: $data->get('possuicompra') ?? false,
            ativo: $data->get('ativo') ?? true,
            nome: $data->get('nome') ?? null,
            datanascimento: $data->get('datanascimento') ?? null,
            cidade: $data->get('cidade') ?? null,
            uf: $data->get('uf') ?? null,
            ddd: $data->get('ddd') ?? null,
            telefone: $data->get('telefone') ?? null,
            fone1: $data->get('fone1') ?? null,
            fone2: $data->get('fone2') ?? null,
            celular: $data->get('celular') ?? null,
            email: $data->get('email') ?? null,
            email2: $data->get('email2') ?? null,
            observacoes: $data->get('observacoes') ?? null,
            cnpjagrupador: $data->get('cnpjagrupador') ?? null,
            streetview: $data->get('streetview') ?? null
        );
    }
}
