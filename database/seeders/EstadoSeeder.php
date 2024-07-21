<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    public function run()
    {
        $estados = [
            [
                "idestado" => 11,
                "uf" => "RO",
                "nome" => "Rondônia",
            ],
            [
                "idestado" => 12,
                "uf" => "AC",
                "nome" => "Acre",
            ],
            [
                "idestado" => 13,
                "uf" => "AM",
                "nome" => "Amazonas",
            ],
            [
                "idestado" => 14,
                "uf" => "RR",
                "nome" => "Roraima",
            ],
            [
                "idestado" => 15,
                "uf" => "PA",
                "nome" => "Pará",
            ],
            [
                "idestado" => 16,
                "uf" => "AP",
                "nome" => "Amapá",
            ],
            [
                "idestado" => 17,
                "uf" => "TO",
                "nome" => "Tocantins",
            ],
            [
                "idestado" => 21,
                "uf" => "MA",
                "nome" => "Maranhão",
            ],
            [
                "idestado" => 22,
                "uf" => "PI",
                "nome" => "Piauí",
            ],
            [
                "idestado" => 23,
                "uf" => "CE",
                "nome" => "Ceará",
            ],
            [
                "idestado" => 24,
                "uf" => "RN",
                "nome" => "Rio Grande do Norte",
            ],
            [
                "idestado" => 25,
                "uf" => "PB",
                "nome" => "Paraíba",
            ],
            [
                "idestado" => 26,
                "uf" => "PE",
                "nome" => "Pernambuco",
            ],
            [
                "idestado" => 27,
                "uf" => "AL",
                "nome" => "Alagoas",
            ],
            [
                "idestado" => 28,
                "uf" => "SE",
                "nome" => "Sergipe",
            ],
            [
                "idestado" => 29,
                "uf" => "BA",
                "nome" => "Bahia",
            ],
            [
                "idestado" => 31,
                "uf" => "MG",
                "nome" => "Minas Gerais",
            ],
            [
                "idestado" => 32,
                "uf" => "ES",
                "nome" => "Espírito Santo",
            ],
            [
                "idestado" => 33,
                "uf" => "RJ",
                "nome" => "Rio de Janeiro",
            ],
            [
                "idestado" => 35,
                "uf" => "SP",
                "nome" => "São Paulo",
            ],
            [
                "idestado" => 41,
                "uf" => "PR",
                "nome" => "Paraná",
            ],
            [
                "idestado" => 42,
                "uf" => "SC",
                "nome" => "Santa Catarina",
            ],
            [
                "idestado" => 43,
                "uf" => "RS",
                "nome" => "Rio Grande do Sul",
            ],
            [
                "idestado" => 50,
                "uf" => "MS",
                "nome" => "Mato Grosso do Sul",
            ],
            [
                "idestado" => 51,
                "uf" => "MT",
                "nome" => "Mato Grosso",
            ],
            [
                "idestado" => 52,
                "uf" => "GO",
                "nome" => "Goiás",
            ],
            [
                "idestado" => 53,
                "uf" => "DF",
                "nome" => "Distrito Federal",
            ],
        ];
        DB::table('estado')->insert($estados);

    }
}
