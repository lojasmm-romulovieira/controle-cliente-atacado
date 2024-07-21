<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    public function run(): void
    {
        $cidades = [
            [
                "idestado" => 11,
                "nome" => "Alta Floresta D'Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Alto Alegre dos Parecis",
            ],
            [
                "idestado" => 11,
                "nome" => "Alto Paraíso",
            ],
            [
                "idestado" => 11,
                "nome" => "Alvorada D'Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Ariquemes",
            ],
            [
                "idestado" => 11,
                "nome" => "Buritis",
            ],
            [
                "idestado" => 11,
                "nome" => "Cabixi",
            ],
            [
                "idestado" => 11,
                "nome" => "Cacaulândia",
            ],
            [
                "idestado" => 11,
                "nome" => "Cacoal",
            ],
            [
                "idestado" => 11,
                "nome" => "Campo Novo de Rondônia",
            ],
            [
                "idestado" => 11,
                "nome" => "Candeias do Jamari",
            ],
            [
                "idestado" => 11,
                "nome" => "Castanheiras",
            ],
            [
                "idestado" => 11,
                "nome" => "Cerejeiras",
            ],
            [
                "idestado" => 11,
                "nome" => "Chupinguaia",
            ],
            [
                "idestado" => 11,
                "nome" => "Colorado do Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Corumbiara",
            ],
            [
                "idestado" => 11,
                "nome" => "Costa Marques",
            ],
            [
                "idestado" => 11,
                "nome" => "Cujubim",
            ],
            [
                "idestado" => 11,
                "nome" => "Espigão D'Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Governador Jorge Teixeira",
            ],
            [
                "idestado" => 11,
                "nome" => "Guajará-Mirim",
            ],
            [
                "idestado" => 11,
                "nome" => "Itapuã do Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Jaru",
            ],
            [
                "idestado" => 11,
                "nome" => "Ji-Paraná",
            ],
            [
                "idestado" => 11,
                "nome" => "Machadinho D'Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Ministro Andreazza",
            ],
            [
                "idestado" => 11,
                "nome" => "Mirante da Serra",
            ],
            [
                "idestado" => 11,
                "nome" => "Monte Negro",
            ],
            [
                "idestado" => 11,
                "nome" => "Nova Brasilândia D'Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Nova Mamoré",
            ],
            [
                "idestado" => 11,
                "nome" => "Nova União",
            ],
            [
                "idestado" => 11,
                "nome" => "Novo Horizonte do Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Ouro Preto do Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Parecis",
            ],
            [
                "idestado" => 11,
                "nome" => "Pimenta Bueno",
            ],
            [
                "idestado" => 11,
                "nome" => "Pimenteiras do Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "Porto Velho",
            ],
            [
                "idestado" => 11,
                "nome" => "Presidente Médici",
            ],
            [
                "idestado" => 11,
                "nome" => "Primavera de Rondônia",
            ],
            [
                "idestado" => 11,
                "nome" => "Rio Crespo",
            ],
            [
                "idestado" => 11,
                "nome" => "Rolim de Moura",
            ],
            [
                "idestado" => 11,
                "nome" => "Santa Luzia D'Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "São Felipe D'Oeste",
            ],
            [
                "idestado" => 11,
                "nome" => "São Francisco do Guaporé",
            ],
            [
                "idestado" => 11,
                "nome" => "São Miguel do Guaporé",
            ],
            [
                "idestado" => 11,
                "nome" => "Seringueiras",
            ],
            [
                "idestado" => 11,
                "nome" => "Teixeirópolis",
            ],
            [
                "idestado" => 11,
                "nome" => "Theobroma",
            ],
            [
                "idestado" => 11,
                "nome" => "Urupá",
            ],
            [
                "idestado" => 11,
                "nome" => "Vale do Anari",
            ],
            [
                "idestado" => 11,
                "nome" => "Vale do Paraíso",
            ],
            [
                "idestado" => 11,
                "nome" => "Vilhena",
            ],
            [
                "idestado" => 12,
                "nome" => "Acrelândia",
            ],
            [
                "idestado" => 12,
                "nome" => "Assis Brasil",
            ],
            [
                "idestado" => 12,
                "nome" => "Brasiléia",
            ],
            [
                "idestado" => 12,
                "nome" => "Bujari",
            ],
            [
                "idestado" => 12,
                "nome" => "Capixaba",
            ],
            [
                "idestado" => 12,
                "nome" => "Cruzeiro do Sul",
            ],
            [
                "idestado" => 12,
                "nome" => "Epitaciolândia",
            ],
            [
                "idestado" => 12,
                "nome" => "Feijó",
            ],
            [
                "idestado" => 12,
                "nome" => "Jordão",
            ],
            [
                "idestado" => 12,
                "nome" => "Mâncio Lima",
            ],
            [
                "idestado" => 12,
                "nome" => "Manoel Urbano",
            ],
            [
                "idestado" => 12,
                "nome" => "Marechal Thaumaturgo",
            ],
            [
                "idestado" => 12,
                "nome" => "Plácido de Castro",
            ],
            [
                "idestado" => 12,
                "nome" => "Porto Acre",
            ],
            [
                "idestado" => 12,
                "nome" => "Porto Walter",
            ],
            [
                "idestado" => 12,
                "nome" => "Rio Branco",
            ],
            [
                "idestado" => 12,
                "nome" => "Rodrigues Alves",
            ],
            [
                "idestado" => 12,
                "nome" => "Santa Rosa do Purus",
            ],
            [
                "idestado" => 12,
                "nome" => "Sena Madureira",
            ],
            [
                "idestado" => 12,
                "nome" => "Senador Guiomard",
            ],
            [
                "idestado" => 12,
                "nome" => "Tarauacá",
            ],
            [
                "idestado" => 12,
                "nome" => "Xapuri",
            ],
            [
                "idestado" => 13,
                "nome" => "Alvarães",
            ],
            [
                "idestado" => 13,
                "nome" => "Amaturá",
            ],
            [
                "idestado" => 13,
                "nome" => "Anamã",
            ],
            [
                "idestado" => 13,
                "nome" => "Anori",
            ],
            [
                "idestado" => 13,
                "nome" => "Apuí",
            ],
            [
                "idestado" => 13,
                "nome" => "Atalaia do Norte",
            ],
            [
                "idestado" => 13,
                "nome" => "Autazes",
            ],
            [
                "idestado" => 13,
                "nome" => "Barcelos",
            ],
            [
                "idestado" => 13,
                "nome" => "Barreirinha",
            ],
            [
                "idestado" => 13,
                "nome" => "Benjamin Constant",
            ],
            [
                "idestado" => 13,
                "nome" => "Beruri",
            ],
            [
                "idestado" => 13,
                "nome" => "Boa Vista do Ramos",
            ],
            [
                "idestado" => 13,
                "nome" => "Boca do Acre",
            ],
            [
                "idestado" => 13,
                "nome" => "Borba",
            ],
            [
                "idestado" => 13,
                "nome" => "Caapiranga",
            ],
            [
                "idestado" => 13,
                "nome" => "Canutama",
            ],
            [
                "idestado" => 13,
                "nome" => "Carauari",
            ],
            [
                "idestado" => 13,
                "nome" => "Careiro",
            ],
            [
                "idestado" => 13,
                "nome" => "Careiro da Várzea",
            ],
            [
                "idestado" => 13,
                "nome" => "Coari",
            ],
            [
                "idestado" => 13,
                "nome" => "Codajás",
            ],
            [
                "idestado" => 13,
                "nome" => "Eirunepé",
            ],
            [
                "idestado" => 13,
                "nome" => "Envira",
            ],
            [
                "idestado" => 13,
                "nome" => "Fonte Boa",
            ],
            [
                "idestado" => 13,
                "nome" => "Guajará",
            ],
            [
                "idestado" => 13,
                "nome" => "Humaitá",
            ],
            [
                "idestado" => 13,
                "nome" => "Ipixuna",
            ],
            [
                "idestado" => 13,
                "nome" => "Iranduba",
            ],
            [
                "idestado" => 13,
                "nome" => "Itacoatiara",
            ],
            [
                "idestado" => 13,
                "nome" => "Itamarati",
            ],
            [
                "idestado" => 13,
                "nome" => "Itapiranga",
            ],
            [
                "idestado" => 13,
                "nome" => "Japurá",
            ],
            [
                "idestado" => 13,
                "nome" => "Juruá",
            ],
            [
                "idestado" => 13,
                "nome" => "Jutaí",
            ],
            [
                "idestado" => 13,
                "nome" => "Lábrea",
            ],
            [
                "idestado" => 13,
                "nome" => "Manacapuru",
            ],
            [
                "idestado" => 13,
                "nome" => "Manaquiri",
            ],
            [
                "idestado" => 13,
                "nome" => "Manaus",
            ],
            [
                "idestado" => 13,
                "nome" => "Manicoré",
            ],
            [
                "idestado" => 13,
                "nome" => "Maraã",
            ],
            [
                "idestado" => 13,
                "nome" => "Maués",
            ],
            [
                "idestado" => 13,
                "nome" => "Nhamundá",
            ],
            [
                "idestado" => 13,
                "nome" => "Nova Olinda do Norte",
            ],
            [
                "idestado" => 13,
                "nome" => "Novo Airão",
            ],
            [
                "idestado" => 13,
                "nome" => "Novo Aripuanã",
            ],
            [
                "idestado" => 13,
                "nome" => "Parintins",
            ],
            [
                "idestado" => 13,
                "nome" => "Pauini",
            ],
            [
                "idestado" => 13,
                "nome" => "Presidente Figueiredo",
            ],
            [
                "idestado" => 13,
                "nome" => "Rio Preto da Eva",
            ],
            [
                "idestado" => 13,
                "nome" => "Santa Isabel do Rio Negro",
            ],
            [
                "idestado" => 13,
                "nome" => "Santo Antônio do Içá",
            ],
            [
                "idestado" => 13,
                "nome" => "São Gabriel da Cachoeira",
            ],
            [
                "idestado" => 13,
                "nome" => "São Paulo de Olivença",
            ],
            [
                "idestado" => 13,
                "nome" => "São Sebastião do Uatumã",
            ],
            [
                "idestado" => 13,
                "nome" => "Silves",
            ],
            [
                "idestado" => 13,
                "nome" => "Tabatinga",
            ],
            [
                "idestado" => 13,
                "nome" => "Tapauá",
            ],
            [
                "idestado" => 13,
                "nome" => "Tefé",
            ],
            [
                "idestado" => 13,
                "nome" => "Tonantins",
            ],
            [
                "idestado" => 13,
                "nome" => "Uarini",
            ],
            [
                "idestado" => 13,
                "nome" => "Urucará",
            ],
            [
                "idestado" => 13,
                "nome" => "Urucurituba",
            ],
            [
                "idestado" => 14,
                "nome" => "Alto Alegre",
            ],
            [
                "idestado" => 14,
                "nome" => "Amajari",
            ],
            [
                "idestado" => 14,
                "nome" => "Boa Vista",
            ],
            [
                "idestado" => 14,
                "nome" => "Bonfim",
            ],
            [
                "idestado" => 14,
                "nome" => "Cantá",
            ],
            [
                "idestado" => 14,
                "nome" => "Caracaraí",
            ],
            [
                "idestado" => 14,
                "nome" => "Caroebe",
            ],
            [
                "idestado" => 14,
                "nome" => "Iracema",
            ],
            [
                "idestado" => 14,
                "nome" => "Mucajaí",
            ],
            [
                "idestado" => 14,
                "nome" => "Normandia",
            ],
            [
                "idestado" => 14,
                "nome" => "Pacaraima",
            ],
            [
                "idestado" => 14,
                "nome" => "Rorainópolis",
            ],
            [
                "idestado" => 14,
                "nome" => "São João da Baliza",
            ],
            [
                "idestado" => 14,
                "nome" => "São Luiz",
            ],
            [
                "idestado" => 14,
                "nome" => "Uiramutã",
            ],
            [
                "idestado" => 15,
                "nome" => "Abaetetuba",
            ],
            [
                "idestado" => 15,
                "nome" => "Abel Figueiredo",
            ],
            [
                "idestado" => 15,
                "nome" => "Acará",
            ],
            [
                "idestado" => 15,
                "nome" => "Afuá",
            ],
            [
                "idestado" => 15,
                "nome" => "Água Azul do Norte",
            ],
            [
                "idestado" => 15,
                "nome" => "Alenquer",
            ],
            [
                "idestado" => 15,
                "nome" => "Almeirim",
            ],
            [
                "idestado" => 15,
                "nome" => "Altamira",
            ],
            [
                "idestado" => 15,
                "nome" => "Anajás",
            ],
            [
                "idestado" => 15,
                "nome" => "Ananindeua",
            ],
            [
                "idestado" => 15,
                "nome" => "Anapu",
            ],
            [
                "idestado" => 15,
                "nome" => "Augusto Corrêa",
            ],
            [
                "idestado" => 15,
                "nome" => "Aurora do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Aveiro",
            ],
            [
                "idestado" => 15,
                "nome" => "Bagre",
            ],
            [
                "idestado" => 15,
                "nome" => "Baião",
            ],
            [
                "idestado" => 15,
                "nome" => "Bannach",
            ],
            [
                "idestado" => 15,
                "nome" => "Barcarena",
            ],
            [
                "idestado" => 15,
                "nome" => "Belém",
            ],
            [
                "idestado" => 15,
                "nome" => "Belterra",
            ],
            [
                "idestado" => 15,
                "nome" => "Benevides",
            ],
            [
                "idestado" => 15,
                "nome" => "Bom Jesus do Tocantins",
            ],
            [
                "idestado" => 15,
                "nome" => "Bonito",
            ],
            [
                "idestado" => 15,
                "nome" => "Bragança",
            ],
            [
                "idestado" => 15,
                "nome" => "Brasil Novo",
            ],
            [
                "idestado" => 15,
                "nome" => "Brejo Grande do Araguaia",
            ],
            [
                "idestado" => 15,
                "nome" => "Breu Branco",
            ],
            [
                "idestado" => 15,
                "nome" => "Breves",
            ],
            [
                "idestado" => 15,
                "nome" => "Bujaru",
            ],
            [
                "idestado" => 15,
                "nome" => "Cachoeira do Arari",
            ],
            [
                "idestado" => 15,
                "nome" => "Cachoeira do Piriá",
            ],
            [
                "idestado" => 15,
                "nome" => "Cametá",
            ],
            [
                "idestado" => 15,
                "nome" => "Canaã dos Carajás",
            ],
            [
                "idestado" => 15,
                "nome" => "Capanema",
            ],
            [
                "idestado" => 15,
                "nome" => "Capitão Poço",
            ],
            [
                "idestado" => 15,
                "nome" => "Castanhal",
            ],
            [
                "idestado" => 15,
                "nome" => "Chaves",
            ],
            [
                "idestado" => 15,
                "nome" => "Colares",
            ],
            [
                "idestado" => 15,
                "nome" => "Conceição do Araguaia",
            ],
            [
                "idestado" => 15,
                "nome" => "Concórdia do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Cumaru do Norte",
            ],
            [
                "idestado" => 15,
                "nome" => "Curionópolis",
            ],
            [
                "idestado" => 15,
                "nome" => "Curralinho",
            ],
            [
                "idestado" => 15,
                "nome" => "Curuá",
            ],
            [
                "idestado" => 15,
                "nome" => "Curuçá",
            ],
            [
                "idestado" => 15,
                "nome" => "Dom Eliseu",
            ],
            [
                "idestado" => 15,
                "nome" => "Eldorado do Carajás",
            ],
            [
                "idestado" => 15,
                "nome" => "Faro",
            ],
            [
                "idestado" => 15,
                "nome" => "Floresta do Araguaia",
            ],
            [
                "idestado" => 15,
                "nome" => "Garrafão do Norte",
            ],
            [
                "idestado" => 15,
                "nome" => "Goianésia do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Gurupá",
            ],
            [
                "idestado" => 15,
                "nome" => "Igarapé-Açu",
            ],
            [
                "idestado" => 15,
                "nome" => "Igarapé-Miri",
            ],
            [
                "idestado" => 15,
                "nome" => "Inhangapi",
            ],
            [
                "idestado" => 15,
                "nome" => "Ipixuna do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Irituia",
            ],
            [
                "idestado" => 15,
                "nome" => "Itaituba",
            ],
            [
                "idestado" => 15,
                "nome" => "Itupiranga",
            ],
            [
                "idestado" => 15,
                "nome" => "Jacareacanga",
            ],
            [
                "idestado" => 15,
                "nome" => "Jacundá",
            ],
            [
                "idestado" => 15,
                "nome" => "Juruti",
            ],
            [
                "idestado" => 15,
                "nome" => "Limoeiro do Ajuru",
            ],
            [
                "idestado" => 15,
                "nome" => "Mãe do Rio",
            ],
            [
                "idestado" => 15,
                "nome" => "Magalhães Barata",
            ],
            [
                "idestado" => 15,
                "nome" => "Marabá",
            ],
            [
                "idestado" => 15,
                "nome" => "Maracanã",
            ],
            [
                "idestado" => 15,
                "nome" => "Marapanim",
            ],
            [
                "idestado" => 15,
                "nome" => "Marituba",
            ],
            [
                "idestado" => 15,
                "nome" => "Medicilândia",
            ],
            [
                "idestado" => 15,
                "nome" => "Melgaço",
            ],
            [
                "idestado" => 15,
                "nome" => "Mocajuba",
            ],
            [
                "idestado" => 15,
                "nome" => "Moju",
            ],
            [
                "idestado" => 15,
                "nome" => "Mojuí dos Campos",
            ],
            [
                "idestado" => 15,
                "nome" => "Monte Alegre",
            ],
            [
                "idestado" => 15,
                "nome" => "Muaná",
            ],
            [
                "idestado" => 15,
                "nome" => "Nova Esperança do Piriá",
            ],
            [
                "idestado" => 15,
                "nome" => "Nova Ipixuna",
            ],
            [
                "idestado" => 15,
                "nome" => "Nova Timboteua",
            ],
            [
                "idestado" => 15,
                "nome" => "Novo Progresso",
            ],
            [
                "idestado" => 15,
                "nome" => "Novo Repartimento",
            ],
            [
                "idestado" => 15,
                "nome" => "Óbidos",
            ],
            [
                "idestado" => 15,
                "nome" => "Oeiras do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Oriximiná",
            ],
            [
                "idestado" => 15,
                "nome" => "Ourém",
            ],
            [
                "idestado" => 15,
                "nome" => "Ourilândia do Norte",
            ],
            [
                "idestado" => 15,
                "nome" => "Pacajá",
            ],
            [
                "idestado" => 15,
                "nome" => "Palestina do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Paragominas",
            ],
            [
                "idestado" => 15,
                "nome" => "Parauapebas",
            ],
            [
                "idestado" => 15,
                "nome" => "Pau D'Arco",
            ],
            [
                "idestado" => 15,
                "nome" => "Peixe-Boi",
            ],
            [
                "idestado" => 15,
                "nome" => "Piçarra",
            ],
            [
                "idestado" => 15,
                "nome" => "Placas",
            ],
            [
                "idestado" => 15,
                "nome" => "Ponta de Pedras",
            ],
            [
                "idestado" => 15,
                "nome" => "Portel",
            ],
            [
                "idestado" => 15,
                "nome" => "Porto de Moz",
            ],
            [
                "idestado" => 15,
                "nome" => "Prainha",
            ],
            [
                "idestado" => 15,
                "nome" => "Primavera",
            ],
            [
                "idestado" => 15,
                "nome" => "Quatipuru",
            ],
            [
                "idestado" => 15,
                "nome" => "Redenção",
            ],
            [
                "idestado" => 15,
                "nome" => "Rio Maria",
            ],
            [
                "idestado" => 15,
                "nome" => "Rondon do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Rurópolis",
            ],
            [
                "idestado" => 15,
                "nome" => "Salinópolis",
            ],
            [
                "idestado" => 15,
                "nome" => "Salvaterra",
            ],
            [
                "idestado" => 15,
                "nome" => "Santa Bárbara do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Santa Cruz do Arari",
            ],
            [
                "idestado" => 15,
                "nome" => "Santa Izabel do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Santa Luzia do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Santa Maria das Barreiras",
            ],
            [
                "idestado" => 15,
                "nome" => "Santa Maria do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "Santana do Araguaia",
            ],
            [
                "idestado" => 15,
                "nome" => "Santarém",
            ],
            [
                "idestado" => 15,
                "nome" => "Santarém Novo",
            ],
            [
                "idestado" => 15,
                "nome" => "Santo Antônio do Tauá",
            ],
            [
                "idestado" => 15,
                "nome" => "São Caetano de Odivelas",
            ],
            [
                "idestado" => 15,
                "nome" => "São Domingos do Araguaia",
            ],
            [
                "idestado" => 15,
                "nome" => "São Domingos do Capim",
            ],
            [
                "idestado" => 15,
                "nome" => "São Félix do Xingu",
            ],
            [
                "idestado" => 15,
                "nome" => "São Francisco do Pará",
            ],
            [
                "idestado" => 15,
                "nome" => "São Geraldo do Araguaia",
            ],
            [
                "idestado" => 15,
                "nome" => "São João da Ponta",
            ],
            [
                "idestado" => 15,
                "nome" => "São João de Pirabas",
            ],
            [
                "idestado" => 15,
                "nome" => "São João do Araguaia",
            ],
            [
                "idestado" => 15,
                "nome" => "São Miguel do Guamá",
            ],
            [
                "idestado" => 15,
                "nome" => "São Sebastião da Boa Vista",
            ],
            [
                "idestado" => 15,
                "nome" => "Sapucaia",
            ],
            [
                "idestado" => 15,
                "nome" => "Senador José Porfírio",
            ],
            [
                "idestado" => 15,
                "nome" => "Soure",
            ],
            [
                "idestado" => 15,
                "nome" => "Tailândia",
            ],
            [
                "idestado" => 15,
                "nome" => "Terra Alta",
            ],
            [
                "idestado" => 15,
                "nome" => "Terra Santa",
            ],
            [
                "idestado" => 15,
                "nome" => "Tomé-Açu",
            ],
            [
                "idestado" => 15,
                "nome" => "Tracuateua",
            ],
            [
                "idestado" => 15,
                "nome" => "Trairão",
            ],
            [
                "idestado" => 15,
                "nome" => "Tucumã",
            ],
            [
                "idestado" => 15,
                "nome" => "Tucuruí",
            ],
            [
                "idestado" => 15,
                "nome" => "Ulianópolis",
            ],
            [
                "idestado" => 15,
                "nome" => "Uruará",
            ],
            [
                "idestado" => 15,
                "nome" => "Vigia",
            ],
            [
                "idestado" => 15,
                "nome" => "Viseu",
            ],
            [
                "idestado" => 15,
                "nome" => "Vitória do Xingu",
            ],
            [
                "idestado" => 15,
                "nome" => "Xinguara",
            ],
            [
                "idestado" => 16,
                "nome" => "Amapá",
            ],
            [
                "idestado" => 16,
                "nome" => "Calçoene",
            ],
            [
                "idestado" => 16,
                "nome" => "Cutias",
            ],
            [
                "idestado" => 16,
                "nome" => "Ferreira Gomes",
            ],
            [
                "idestado" => 16,
                "nome" => "Itaubal",
            ],
            [
                "idestado" => 16,
                "nome" => "Laranjal do Jari",
            ],
            [
                "idestado" => 16,
                "nome" => "Macapá",
            ],
            [
                "idestado" => 16,
                "nome" => "Mazagão",
            ],
            [
                "idestado" => 16,
                "nome" => "Oiapoque",
            ],
            [
                "idestado" => 16,
                "nome" => "Pedra Branca do Amapari",
            ],
            [
                "idestado" => 16,
                "nome" => "Porto Grande",
            ],
            [
                "idestado" => 16,
                "nome" => "Pracuúba",
            ],
            [
                "idestado" => 16,
                "nome" => "Santana",
            ],
            [
                "idestado" => 16,
                "nome" => "Serra do Navio",
            ],
            [
                "idestado" => 16,
                "nome" => "Tartarugalzinho",
            ],
            [
                "idestado" => 16,
                "nome" => "Vitória do Jari",
            ],
            [
                "idestado" => 17,
                "nome" => "Abreulândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Aguiarnópolis",
            ],
            [
                "idestado" => 17,
                "nome" => "Aliança do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Almas",
            ],
            [
                "idestado" => 17,
                "nome" => "Alvorada",
            ],
            [
                "idestado" => 17,
                "nome" => "Ananás",
            ],
            [
                "idestado" => 17,
                "nome" => "Angico",
            ],
            [
                "idestado" => 17,
                "nome" => "Aparecida do Rio Negro",
            ],
            [
                "idestado" => 17,
                "nome" => "Aragominas",
            ],
            [
                "idestado" => 17,
                "nome" => "Araguacema",
            ],
            [
                "idestado" => 17,
                "nome" => "Araguaçu",
            ],
            [
                "idestado" => 17,
                "nome" => "Araguaína",
            ],
            [
                "idestado" => 17,
                "nome" => "Araguanã",
            ],
            [
                "idestado" => 17,
                "nome" => "Araguatins",
            ],
            [
                "idestado" => 17,
                "nome" => "Arapoema",
            ],
            [
                "idestado" => 17,
                "nome" => "Arraias",
            ],
            [
                "idestado" => 17,
                "nome" => "Augustinópolis",
            ],
            [
                "idestado" => 17,
                "nome" => "Aurora do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Axixá do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Babaçulândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Bandeirantes do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Barra do Ouro",
            ],
            [
                "idestado" => 17,
                "nome" => "Barrolândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Bernardo Sayão",
            ],
            [
                "idestado" => 17,
                "nome" => "Bom Jesus do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Brasilândia do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Brejinho de Nazaré",
            ],
            [
                "idestado" => 17,
                "nome" => "Buriti do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Cachoeirinha",
            ],
            [
                "idestado" => 17,
                "nome" => "Campos Lindos",
            ],
            [
                "idestado" => 17,
                "nome" => "Cariri do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Carmolândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Carrasco Bonito",
            ],
            [
                "idestado" => 17,
                "nome" => "Caseara",
            ],
            [
                "idestado" => 17,
                "nome" => "Centenário",
            ],
            [
                "idestado" => 17,
                "nome" => "Chapada da Natividade",
            ],
            [
                "idestado" => 17,
                "nome" => "Chapada de Areia",
            ],
            [
                "idestado" => 17,
                "nome" => "Colinas do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Colméia",
            ],
            [
                "idestado" => 17,
                "nome" => "Combinado",
            ],
            [
                "idestado" => 17,
                "nome" => "Conceição do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Couto Magalhães",
            ],
            [
                "idestado" => 17,
                "nome" => "Cristalândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Crixás do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Darcinópolis",
            ],
            [
                "idestado" => 17,
                "nome" => "Dianópolis",
            ],
            [
                "idestado" => 17,
                "nome" => "Divinópolis do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Dois Irmãos do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Dueré",
            ],
            [
                "idestado" => 17,
                "nome" => "Esperantina",
            ],
            [
                "idestado" => 17,
                "nome" => "Fátima",
            ],
            [
                "idestado" => 17,
                "nome" => "Figueirópolis",
            ],
            [
                "idestado" => 17,
                "nome" => "Filadélfia",
            ],
            [
                "idestado" => 17,
                "nome" => "Formoso do Araguaia",
            ],
            [
                "idestado" => 17,
                "nome" => "Goianorte",
            ],
            [
                "idestado" => 17,
                "nome" => "Goiatins",
            ],
            [
                "idestado" => 17,
                "nome" => "Guaraí",
            ],
            [
                "idestado" => 17,
                "nome" => "Gurupi",
            ],
            [
                "idestado" => 17,
                "nome" => "Ipueiras",
            ],
            [
                "idestado" => 17,
                "nome" => "Itacajá",
            ],
            [
                "idestado" => 17,
                "nome" => "Itaguatins",
            ],
            [
                "idestado" => 17,
                "nome" => "Itapiratins",
            ],
            [
                "idestado" => 17,
                "nome" => "Itaporã do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Jaú do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Juarina",
            ],
            [
                "idestado" => 17,
                "nome" => "Lagoa da Confusão",
            ],
            [
                "idestado" => 17,
                "nome" => "Lagoa do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Lajeado",
            ],
            [
                "idestado" => 17,
                "nome" => "Lavandeira",
            ],
            [
                "idestado" => 17,
                "nome" => "Lizarda",
            ],
            [
                "idestado" => 17,
                "nome" => "Luzinópolis",
            ],
            [
                "idestado" => 17,
                "nome" => "Marianópolis do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Mateiros",
            ],
            [
                "idestado" => 17,
                "nome" => "Maurilândia do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Miracema do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Miranorte",
            ],
            [
                "idestado" => 17,
                "nome" => "Monte do Carmo",
            ],
            [
                "idestado" => 17,
                "nome" => "Monte Santo do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Muricilândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Natividade",
            ],
            [
                "idestado" => 17,
                "nome" => "Nazaré",
            ],
            [
                "idestado" => 17,
                "nome" => "Nova Olinda",
            ],
            [
                "idestado" => 17,
                "nome" => "Nova Rosalândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Novo Acordo",
            ],
            [
                "idestado" => 17,
                "nome" => "Novo Alegre",
            ],
            [
                "idestado" => 17,
                "nome" => "Novo Jardim",
            ],
            [
                "idestado" => 17,
                "nome" => "Oliveira de Fátima",
            ],
            [
                "idestado" => 17,
                "nome" => "Palmas",
            ],
            [
                "idestado" => 17,
                "nome" => "Palmeirante",
            ],
            [
                "idestado" => 17,
                "nome" => "Palmeiras do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Palmeirópolis",
            ],
            [
                "idestado" => 17,
                "nome" => "Paraíso do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Paranã",
            ],
            [
                "idestado" => 17,
                "nome" => "Pau D'Arco",
            ],
            [
                "idestado" => 17,
                "nome" => "Pedro Afonso",
            ],
            [
                "idestado" => 17,
                "nome" => "Peixe",
            ],
            [
                "idestado" => 17,
                "nome" => "Pequizeiro",
            ],
            [
                "idestado" => 17,
                "nome" => "Pindorama do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Piraquê",
            ],
            [
                "idestado" => 17,
                "nome" => "Pium",
            ],
            [
                "idestado" => 17,
                "nome" => "Ponte Alta do Bom Jesus",
            ],
            [
                "idestado" => 17,
                "nome" => "Ponte Alta do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Porto Alegre do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Porto Nacional",
            ],
            [
                "idestado" => 17,
                "nome" => "Praia Norte",
            ],
            [
                "idestado" => 17,
                "nome" => "Presidente Kennedy",
            ],
            [
                "idestado" => 17,
                "nome" => "Pugmil",
            ],
            [
                "idestado" => 17,
                "nome" => "Recursolândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Riachinho",
            ],
            [
                "idestado" => 17,
                "nome" => "Rio da Conceição",
            ],
            [
                "idestado" => 17,
                "nome" => "Rio dos Bois",
            ],
            [
                "idestado" => 17,
                "nome" => "Rio Sono",
            ],
            [
                "idestado" => 17,
                "nome" => "Sampaio",
            ],
            [
                "idestado" => 17,
                "nome" => "Sandolândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Santa Fé do Araguaia",
            ],
            [
                "idestado" => 17,
                "nome" => "Santa Maria do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Santa Rita do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Santa Rosa do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Santa Tereza do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Santa Terezinha do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "São Bento do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "São Félix do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "São Miguel do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "São Salvador do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "São Sebastião do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "São Valério",
            ],
            [
                "idestado" => 17,
                "nome" => "Silvanópolis",
            ],
            [
                "idestado" => 17,
                "nome" => "Sítio Novo do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Sucupira",
            ],
            [
                "idestado" => 17,
                "nome" => "Tabocão",
            ],
            [
                "idestado" => 17,
                "nome" => "Taguatinga",
            ],
            [
                "idestado" => 17,
                "nome" => "Taipas do Tocantins",
            ],
            [
                "idestado" => 17,
                "nome" => "Talismã",
            ],
            [
                "idestado" => 17,
                "nome" => "Tocantínia",
            ],
            [
                "idestado" => 17,
                "nome" => "Tocantinópolis",
            ],
            [
                "idestado" => 17,
                "nome" => "Tupirama",
            ],
            [
                "idestado" => 17,
                "nome" => "Tupiratins",
            ],
            [
                "idestado" => 17,
                "nome" => "Wanderlândia",
            ],
            [
                "idestado" => 17,
                "nome" => "Xambioá",
            ],
            [
                "idestado" => 21,
                "nome" => "Açailândia",
            ],
            [
                "idestado" => 21,
                "nome" => "Afonso Cunha",
            ],
            [
                "idestado" => 21,
                "nome" => "Água Doce do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Alcântara",
            ],
            [
                "idestado" => 21,
                "nome" => "Aldeias Altas",
            ],
            [
                "idestado" => 21,
                "nome" => "Altamira do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Alto Alegre do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Alto Alegre do Pindaré",
            ],
            [
                "idestado" => 21,
                "nome" => "Alto Parnaíba",
            ],
            [
                "idestado" => 21,
                "nome" => "Amapá do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Amarante do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Anajatuba",
            ],
            [
                "idestado" => 21,
                "nome" => "Anapurus",
            ],
            [
                "idestado" => 21,
                "nome" => "Apicum-Açu",
            ],
            [
                "idestado" => 21,
                "nome" => "Araguanã",
            ],
            [
                "idestado" => 21,
                "nome" => "Araioses",
            ],
            [
                "idestado" => 21,
                "nome" => "Arame",
            ],
            [
                "idestado" => 21,
                "nome" => "Arari",
            ],
            [
                "idestado" => 21,
                "nome" => "Axixá",
            ],
            [
                "idestado" => 21,
                "nome" => "Bacabal",
            ],
            [
                "idestado" => 21,
                "nome" => "Bacabeira",
            ],
            [
                "idestado" => 21,
                "nome" => "Bacuri",
            ],
            [
                "idestado" => 21,
                "nome" => "Bacurituba",
            ],
            [
                "idestado" => 21,
                "nome" => "Balsas",
            ],
            [
                "idestado" => 21,
                "nome" => "Barão de Grajaú",
            ],
            [
                "idestado" => 21,
                "nome" => "Barra do Corda",
            ],
            [
                "idestado" => 21,
                "nome" => "Barreirinhas",
            ],
            [
                "idestado" => 21,
                "nome" => "Bela Vista do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Belágua",
            ],
            [
                "idestado" => 21,
                "nome" => "Benedito Leite",
            ],
            [
                "idestado" => 21,
                "nome" => "Bequimão",
            ],
            [
                "idestado" => 21,
                "nome" => "Bernardo do Mearim",
            ],
            [
                "idestado" => 21,
                "nome" => "Boa Vista do Gurupi",
            ],
            [
                "idestado" => 21,
                "nome" => "Bom Jardim",
            ],
            [
                "idestado" => 21,
                "nome" => "Bom Jesus das Selvas",
            ],
            [
                "idestado" => 21,
                "nome" => "Bom Lugar",
            ],
            [
                "idestado" => 21,
                "nome" => "Brejo",
            ],
            [
                "idestado" => 21,
                "nome" => "Brejo de Areia",
            ],
            [
                "idestado" => 21,
                "nome" => "Buriti",
            ],
            [
                "idestado" => 21,
                "nome" => "Buriti Bravo",
            ],
            [
                "idestado" => 21,
                "nome" => "Buriticupu",
            ],
            [
                "idestado" => 21,
                "nome" => "Buritirana",
            ],
            [
                "idestado" => 21,
                "nome" => "Cachoeira Grande",
            ],
            [
                "idestado" => 21,
                "nome" => "Cajapió",
            ],
            [
                "idestado" => 21,
                "nome" => "Cajari",
            ],
            [
                "idestado" => 21,
                "nome" => "Campestre do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Cândido Mendes",
            ],
            [
                "idestado" => 21,
                "nome" => "Cantanhede",
            ],
            [
                "idestado" => 21,
                "nome" => "Capinzal do Norte",
            ],
            [
                "idestado" => 21,
                "nome" => "Carolina",
            ],
            [
                "idestado" => 21,
                "nome" => "Carutapera",
            ],
            [
                "idestado" => 21,
                "nome" => "Caxias",
            ],
            [
                "idestado" => 21,
                "nome" => "Cedral",
            ],
            [
                "idestado" => 21,
                "nome" => "Central do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Centro do Guilherme",
            ],
            [
                "idestado" => 21,
                "nome" => "Centro Novo do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Chapadinha",
            ],
            [
                "idestado" => 21,
                "nome" => "Cidelândia",
            ],
            [
                "idestado" => 21,
                "nome" => "Codó",
            ],
            [
                "idestado" => 21,
                "nome" => "Coelho Neto",
            ],
            [
                "idestado" => 21,
                "nome" => "Colinas",
            ],
            [
                "idestado" => 21,
                "nome" => "Conceição do Lago-Açu",
            ],
            [
                "idestado" => 21,
                "nome" => "Coroatá",
            ],
            [
                "idestado" => 21,
                "nome" => "Cururupu",
            ],
            [
                "idestado" => 21,
                "nome" => "Davinópolis",
            ],
            [
                "idestado" => 21,
                "nome" => "Dom Pedro",
            ],
            [
                "idestado" => 21,
                "nome" => "Duque Bacelar",
            ],
            [
                "idestado" => 21,
                "nome" => "Esperantinópolis",
            ],
            [
                "idestado" => 21,
                "nome" => "Estreito",
            ],
            [
                "idestado" => 21,
                "nome" => "Feira Nova do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Fernando Falcão",
            ],
            [
                "idestado" => 21,
                "nome" => "Formosa da Serra Negra",
            ],
            [
                "idestado" => 21,
                "nome" => "Fortaleza dos Nogueiras",
            ],
            [
                "idestado" => 21,
                "nome" => "Fortuna",
            ],
            [
                "idestado" => 21,
                "nome" => "Godofredo Viana",
            ],
            [
                "idestado" => 21,
                "nome" => "Gonçalves Dias",
            ],
            [
                "idestado" => 21,
                "nome" => "Governador Archer",
            ],
            [
                "idestado" => 21,
                "nome" => "Governador Edison Lobão",
            ],
            [
                "idestado" => 21,
                "nome" => "Governador Eugênio Barros",
            ],
            [
                "idestado" => 21,
                "nome" => "Governador Luiz Rocha",
            ],
            [
                "idestado" => 21,
                "nome" => "Governador Newton Bello",
            ],
            [
                "idestado" => 21,
                "nome" => "Governador Nunes Freire",
            ],
            [
                "idestado" => 21,
                "nome" => "Graça Aranha",
            ],
            [
                "idestado" => 21,
                "nome" => "Grajaú",
            ],
            [
                "idestado" => 21,
                "nome" => "Guimarães",
            ],
            [
                "idestado" => 21,
                "nome" => "Humberto de Campos",
            ],
            [
                "idestado" => 21,
                "nome" => "Icatu",
            ],
            [
                "idestado" => 21,
                "nome" => "Igarapé do Meio",
            ],
            [
                "idestado" => 21,
                "nome" => "Igarapé Grande",
            ],
            [
                "idestado" => 21,
                "nome" => "Imperatriz",
            ],
            [
                "idestado" => 21,
                "nome" => "Itaipava do Grajaú",
            ],
            [
                "idestado" => 21,
                "nome" => "Itapecuru Mirim",
            ],
            [
                "idestado" => 21,
                "nome" => "Itinga do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Jatobá",
            ],
            [
                "idestado" => 21,
                "nome" => "Jenipapo dos Vieiras",
            ],
            [
                "idestado" => 21,
                "nome" => "João Lisboa",
            ],
            [
                "idestado" => 21,
                "nome" => "Joselândia",
            ],
            [
                "idestado" => 21,
                "nome" => "Junco do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Lago da Pedra",
            ],
            [
                "idestado" => 21,
                "nome" => "Lago do Junco",
            ],
            [
                "idestado" => 21,
                "nome" => "Lago dos Rodrigues",
            ],
            [
                "idestado" => 21,
                "nome" => "Lago Verde",
            ],
            [
                "idestado" => 21,
                "nome" => "Lagoa do Mato",
            ],
            [
                "idestado" => 21,
                "nome" => "Lagoa Grande do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Lajeado Novo",
            ],
            [
                "idestado" => 21,
                "nome" => "Lima Campos",
            ],
            [
                "idestado" => 21,
                "nome" => "Loreto",
            ],
            [
                "idestado" => 21,
                "nome" => "Luís Domingues",
            ],
            [
                "idestado" => 21,
                "nome" => "Magalhães de Almeida",
            ],
            [
                "idestado" => 21,
                "nome" => "Maracaçumé",
            ],
            [
                "idestado" => 21,
                "nome" => "Marajá do Sena",
            ],
            [
                "idestado" => 21,
                "nome" => "Maranhãozinho",
            ],
            [
                "idestado" => 21,
                "nome" => "Mata Roma",
            ],
            [
                "idestado" => 21,
                "nome" => "Matinha",
            ],
            [
                "idestado" => 21,
                "nome" => "Matões",
            ],
            [
                "idestado" => 21,
                "nome" => "Matões do Norte",
            ],
            [
                "idestado" => 21,
                "nome" => "Milagres do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Mirador",
            ],
            [
                "idestado" => 21,
                "nome" => "Miranda do Norte",
            ],
            [
                "idestado" => 21,
                "nome" => "Mirinzal",
            ],
            [
                "idestado" => 21,
                "nome" => "Monção",
            ],
            [
                "idestado" => 21,
                "nome" => "Montes Altos",
            ],
            [
                "idestado" => 21,
                "nome" => "Morros",
            ],
            [
                "idestado" => 21,
                "nome" => "Nina Rodrigues",
            ],
            [
                "idestado" => 21,
                "nome" => "Nova Colinas",
            ],
            [
                "idestado" => 21,
                "nome" => "Nova Iorque",
            ],
            [
                "idestado" => 21,
                "nome" => "Nova Olinda do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Olho d'Água das Cunhãs",
            ],
            [
                "idestado" => 21,
                "nome" => "Olinda Nova do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Paço do Lumiar",
            ],
            [
                "idestado" => 21,
                "nome" => "Palmeirândia",
            ],
            [
                "idestado" => 21,
                "nome" => "Paraibano",
            ],
            [
                "idestado" => 21,
                "nome" => "Parnarama",
            ],
            [
                "idestado" => 21,
                "nome" => "Passagem Franca",
            ],
            [
                "idestado" => 21,
                "nome" => "Pastos Bons",
            ],
            [
                "idestado" => 21,
                "nome" => "Paulino Neves",
            ],
            [
                "idestado" => 21,
                "nome" => "Paulo Ramos",
            ],
            [
                "idestado" => 21,
                "nome" => "Pedreiras",
            ],
            [
                "idestado" => 21,
                "nome" => "Pedro do Rosário",
            ],
            [
                "idestado" => 21,
                "nome" => "Penalva",
            ],
            [
                "idestado" => 21,
                "nome" => "Peri Mirim",
            ],
            [
                "idestado" => 21,
                "nome" => "Peritoró",
            ],
            [
                "idestado" => 21,
                "nome" => "Pindaré-Mirim",
            ],
            [
                "idestado" => 21,
                "nome" => "Pinheiro",
            ],
            [
                "idestado" => 21,
                "nome" => "Pio XII",
            ],
            [
                "idestado" => 21,
                "nome" => "Pirapemas",
            ],
            [
                "idestado" => 21,
                "nome" => "Poção de Pedras",
            ],
            [
                "idestado" => 21,
                "nome" => "Porto Franco",
            ],
            [
                "idestado" => 21,
                "nome" => "Porto Rico do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Presidente Dutra",
            ],
            [
                "idestado" => 21,
                "nome" => "Presidente Juscelino",
            ],
            [
                "idestado" => 21,
                "nome" => "Presidente Médici",
            ],
            [
                "idestado" => 21,
                "nome" => "Presidente Sarney",
            ],
            [
                "idestado" => 21,
                "nome" => "Presidente Vargas",
            ],
            [
                "idestado" => 21,
                "nome" => "Primeira Cruz",
            ],
            [
                "idestado" => 21,
                "nome" => "Raposa",
            ],
            [
                "idestado" => 21,
                "nome" => "Riachão",
            ],
            [
                "idestado" => 21,
                "nome" => "Ribamar Fiquene",
            ],
            [
                "idestado" => 21,
                "nome" => "Rosário",
            ],
            [
                "idestado" => 21,
                "nome" => "Sambaíba",
            ],
            [
                "idestado" => 21,
                "nome" => "Santa Filomena do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Santa Helena",
            ],
            [
                "idestado" => 21,
                "nome" => "Santa Inês",
            ],
            [
                "idestado" => 21,
                "nome" => "Santa Luzia",
            ],
            [
                "idestado" => 21,
                "nome" => "Santa Luzia do Paruá",
            ],
            [
                "idestado" => 21,
                "nome" => "Santa Quitéria do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Santa Rita",
            ],
            [
                "idestado" => 21,
                "nome" => "Santana do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Santo Amaro do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Santo Antônio dos Lopes",
            ],
            [
                "idestado" => 21,
                "nome" => "São Benedito do Rio Preto",
            ],
            [
                "idestado" => 21,
                "nome" => "São Bento",
            ],
            [
                "idestado" => 21,
                "nome" => "São Bernardo",
            ],
            [
                "idestado" => 21,
                "nome" => "São Domingos do Azeitão",
            ],
            [
                "idestado" => 21,
                "nome" => "São Domingos do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "São Félix de Balsas",
            ],
            [
                "idestado" => 21,
                "nome" => "São Francisco do Brejão",
            ],
            [
                "idestado" => 21,
                "nome" => "São Francisco do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "São João Batista",
            ],
            [
                "idestado" => 21,
                "nome" => "São João do Carú",
            ],
            [
                "idestado" => 21,
                "nome" => "São João do Paraíso",
            ],
            [
                "idestado" => 21,
                "nome" => "São João do Soter",
            ],
            [
                "idestado" => 21,
                "nome" => "São João dos Patos",
            ],
            [
                "idestado" => 21,
                "nome" => "São José de Ribamar",
            ],
            [
                "idestado" => 21,
                "nome" => "São José dos Basílios",
            ],
            [
                "idestado" => 21,
                "nome" => "São Luís",
            ],
            [
                "idestado" => 21,
                "nome" => "São Luís Gonzaga do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "São Mateus do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "São Pedro da Água Branca",
            ],
            [
                "idestado" => 21,
                "nome" => "São Pedro dos Crentes",
            ],
            [
                "idestado" => 21,
                "nome" => "São Raimundo das Mangabeiras",
            ],
            [
                "idestado" => 21,
                "nome" => "São Raimundo do Doca Bezerra",
            ],
            [
                "idestado" => 21,
                "nome" => "São Roberto",
            ],
            [
                "idestado" => 21,
                "nome" => "São Vicente Ferrer",
            ],
            [
                "idestado" => 21,
                "nome" => "Satubinha",
            ],
            [
                "idestado" => 21,
                "nome" => "Senador Alexandre Costa",
            ],
            [
                "idestado" => 21,
                "nome" => "Senador La Rocque",
            ],
            [
                "idestado" => 21,
                "nome" => "Serrano do Maranhão",
            ],
            [
                "idestado" => 21,
                "nome" => "Sítio Novo",
            ],
            [
                "idestado" => 21,
                "nome" => "Sucupira do Norte",
            ],
            [
                "idestado" => 21,
                "nome" => "Sucupira do Riachão",
            ],
            [
                "idestado" => 21,
                "nome" => "Tasso Fragoso",
            ],
            [
                "idestado" => 21,
                "nome" => "Timbiras",
            ],
            [
                "idestado" => 21,
                "nome" => "Timon",
            ],
            [
                "idestado" => 21,
                "nome" => "Trizidela do Vale",
            ],
            [
                "idestado" => 21,
                "nome" => "Tufilândia",
            ],
            [
                "idestado" => 21,
                "nome" => "Tuntum",
            ],
            [
                "idestado" => 21,
                "nome" => "Turiaçu",
            ],
            [
                "idestado" => 21,
                "nome" => "Turilândia",
            ],
            [
                "idestado" => 21,
                "nome" => "Tutóia",
            ],
            [
                "idestado" => 21,
                "nome" => "Urbano Santos",
            ],
            [
                "idestado" => 21,
                "nome" => "Vargem Grande",
            ],
            [
                "idestado" => 21,
                "nome" => "Viana",
            ],
            [
                "idestado" => 21,
                "nome" => "Vila Nova dos Martírios",
            ],
            [
                "idestado" => 21,
                "nome" => "Vitória do Mearim",
            ],
            [
                "idestado" => 21,
                "nome" => "Vitorino Freire",
            ],
            [
                "idestado" => 21,
                "nome" => "Zé Doca",
            ],
            [
                "idestado" => 22,
                "nome" => "Acauã",
            ],
            [
                "idestado" => 22,
                "nome" => "Agricolândia",
            ],
            [
                "idestado" => 22,
                "nome" => "Água Branca",
            ],
            [
                "idestado" => 22,
                "nome" => "Alagoinha do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Alegrete do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Alto Longá",
            ],
            [
                "idestado" => 22,
                "nome" => "Altos",
            ],
            [
                "idestado" => 22,
                "nome" => "Alvorada do Gurguéia",
            ],
            [
                "idestado" => 22,
                "nome" => "Amarante",
            ],
            [
                "idestado" => 22,
                "nome" => "Angical do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Anísio de Abreu",
            ],
            [
                "idestado" => 22,
                "nome" => "Antônio Almeida",
            ],
            [
                "idestado" => 22,
                "nome" => "Aroazes",
            ],
            [
                "idestado" => 22,
                "nome" => "Aroeiras do Itaim",
            ],
            [
                "idestado" => 22,
                "nome" => "Arraial",
            ],
            [
                "idestado" => 22,
                "nome" => "Assunção do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Avelino Lopes",
            ],
            [
                "idestado" => 22,
                "nome" => "Baixa Grande do Ribeiro",
            ],
            [
                "idestado" => 22,
                "nome" => "Barra D'Alcântara",
            ],
            [
                "idestado" => 22,
                "nome" => "Barras",
            ],
            [
                "idestado" => 22,
                "nome" => "Barreiras do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Barro Duro",
            ],
            [
                "idestado" => 22,
                "nome" => "Batalha",
            ],
            [
                "idestado" => 22,
                "nome" => "Bela Vista do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Belém do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Beneditinos",
            ],
            [
                "idestado" => 22,
                "nome" => "Bertolínia",
            ],
            [
                "idestado" => 22,
                "nome" => "Betânia do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Boa Hora",
            ],
            [
                "idestado" => 22,
                "nome" => "Bocaina",
            ],
            [
                "idestado" => 22,
                "nome" => "Bom Jesus",
            ],
            [
                "idestado" => 22,
                "nome" => "Bom Princípio do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Bonfim do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Boqueirão do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Brasileira",
            ],
            [
                "idestado" => 22,
                "nome" => "Brejo do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Buriti dos Lopes",
            ],
            [
                "idestado" => 22,
                "nome" => "Buriti dos Montes",
            ],
            [
                "idestado" => 22,
                "nome" => "Cabeceiras do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Cajazeiras do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Cajueiro da Praia",
            ],
            [
                "idestado" => 22,
                "nome" => "Caldeirão Grande do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Campinas do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Campo Alegre do Fidalgo",
            ],
            [
                "idestado" => 22,
                "nome" => "Campo Grande do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Campo Largo do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Campo Maior",
            ],
            [
                "idestado" => 22,
                "nome" => "Canavieira",
            ],
            [
                "idestado" => 22,
                "nome" => "Canto do Buriti",
            ],
            [
                "idestado" => 22,
                "nome" => "Capitão de Campos",
            ],
            [
                "idestado" => 22,
                "nome" => "Capitão Gervásio Oliveira",
            ],
            [
                "idestado" => 22,
                "nome" => "Caracol",
            ],
            [
                "idestado" => 22,
                "nome" => "Caraúbas do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Caridade do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Castelo do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Caxingó",
            ],
            [
                "idestado" => 22,
                "nome" => "Cocal",
            ],
            [
                "idestado" => 22,
                "nome" => "Cocal de Telha",
            ],
            [
                "idestado" => 22,
                "nome" => "Cocal dos Alves",
            ],
            [
                "idestado" => 22,
                "nome" => "Coivaras",
            ],
            [
                "idestado" => 22,
                "nome" => "Colônia do Gurguéia",
            ],
            [
                "idestado" => 22,
                "nome" => "Colônia do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Conceição do Canindé",
            ],
            [
                "idestado" => 22,
                "nome" => "Coronel José Dias",
            ],
            [
                "idestado" => 22,
                "nome" => "Corrente",
            ],
            [
                "idestado" => 22,
                "nome" => "Cristalândia do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Cristino Castro",
            ],
            [
                "idestado" => 22,
                "nome" => "Curimatá",
            ],
            [
                "idestado" => 22,
                "nome" => "Currais",
            ],
            [
                "idestado" => 22,
                "nome" => "Curral Novo do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Curralinhos",
            ],
            [
                "idestado" => 22,
                "nome" => "Demerval Lobão",
            ],
            [
                "idestado" => 22,
                "nome" => "Dirceu Arcoverde",
            ],
            [
                "idestado" => 22,
                "nome" => "Dom Expedito Lopes",
            ],
            [
                "idestado" => 22,
                "nome" => "Dom Inocêncio",
            ],
            [
                "idestado" => 22,
                "nome" => "Domingos Mourão",
            ],
            [
                "idestado" => 22,
                "nome" => "Elesbão Veloso",
            ],
            [
                "idestado" => 22,
                "nome" => "Eliseu Martins",
            ],
            [
                "idestado" => 22,
                "nome" => "Esperantina",
            ],
            [
                "idestado" => 22,
                "nome" => "Fartura do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Flores do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Floresta do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Floriano",
            ],
            [
                "idestado" => 22,
                "nome" => "Francinópolis",
            ],
            [
                "idestado" => 22,
                "nome" => "Francisco Ayres",
            ],
            [
                "idestado" => 22,
                "nome" => "Francisco Macedo",
            ],
            [
                "idestado" => 22,
                "nome" => "Francisco Santos",
            ],
            [
                "idestado" => 22,
                "nome" => "Fronteiras",
            ],
            [
                "idestado" => 22,
                "nome" => "Geminiano",
            ],
            [
                "idestado" => 22,
                "nome" => "Gilbués",
            ],
            [
                "idestado" => 22,
                "nome" => "Guadalupe",
            ],
            [
                "idestado" => 22,
                "nome" => "Guaribas",
            ],
            [
                "idestado" => 22,
                "nome" => "Hugo Napoleão",
            ],
            [
                "idestado" => 22,
                "nome" => "Ilha Grande",
            ],
            [
                "idestado" => 22,
                "nome" => "Inhuma",
            ],
            [
                "idestado" => 22,
                "nome" => "Ipiranga do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Isaías Coelho",
            ],
            [
                "idestado" => 22,
                "nome" => "Itainópolis",
            ],
            [
                "idestado" => 22,
                "nome" => "Itaueira",
            ],
            [
                "idestado" => 22,
                "nome" => "Jacobina do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Jaicós",
            ],
            [
                "idestado" => 22,
                "nome" => "Jardim do Mulato",
            ],
            [
                "idestado" => 22,
                "nome" => "Jatobá do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Jerumenha",
            ],
            [
                "idestado" => 22,
                "nome" => "João Costa",
            ],
            [
                "idestado" => 22,
                "nome" => "Joaquim Pires",
            ],
            [
                "idestado" => 22,
                "nome" => "Joca Marques",
            ],
            [
                "idestado" => 22,
                "nome" => "José de Freitas",
            ],
            [
                "idestado" => 22,
                "nome" => "Juazeiro do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Júlio Borges",
            ],
            [
                "idestado" => 22,
                "nome" => "Jurema",
            ],
            [
                "idestado" => 22,
                "nome" => "Lagoa Alegre",
            ],
            [
                "idestado" => 22,
                "nome" => "Lagoa de São Francisco",
            ],
            [
                "idestado" => 22,
                "nome" => "Lagoa do Barro do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Lagoa do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Lagoa do Sítio",
            ],
            [
                "idestado" => 22,
                "nome" => "Lagoinha do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Landri Sales",
            ],
            [
                "idestado" => 22,
                "nome" => "Luís Correia",
            ],
            [
                "idestado" => 22,
                "nome" => "Luzilândia",
            ],
            [
                "idestado" => 22,
                "nome" => "Madeiro",
            ],
            [
                "idestado" => 22,
                "nome" => "Manoel Emídio",
            ],
            [
                "idestado" => 22,
                "nome" => "Marcolândia",
            ],
            [
                "idestado" => 22,
                "nome" => "Marcos Parente",
            ],
            [
                "idestado" => 22,
                "nome" => "Massapê do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Matias Olímpio",
            ],
            [
                "idestado" => 22,
                "nome" => "Miguel Alves",
            ],
            [
                "idestado" => 22,
                "nome" => "Miguel Leão",
            ],
            [
                "idestado" => 22,
                "nome" => "Milton Brandão",
            ],
            [
                "idestado" => 22,
                "nome" => "Monsenhor Gil",
            ],
            [
                "idestado" => 22,
                "nome" => "Monsenhor Hipólito",
            ],
            [
                "idestado" => 22,
                "nome" => "Monte Alegre do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Morro Cabeça no Tempo",
            ],
            [
                "idestado" => 22,
                "nome" => "Morro do Chapéu do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Murici dos Portelas",
            ],
            [
                "idestado" => 22,
                "nome" => "Nazaré do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Nazária",
            ],
            [
                "idestado" => 22,
                "nome" => "Nossa Senhora de Nazaré",
            ],
            [
                "idestado" => 22,
                "nome" => "Nossa Senhora dos Remédios",
            ],
            [
                "idestado" => 22,
                "nome" => "Nova Santa Rita",
            ],
            [
                "idestado" => 22,
                "nome" => "Novo Oriente do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Novo Santo Antônio",
            ],
            [
                "idestado" => 22,
                "nome" => "Oeiras",
            ],
            [
                "idestado" => 22,
                "nome" => "Olho D'Água do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Padre Marcos",
            ],
            [
                "idestado" => 22,
                "nome" => "Paes Landim",
            ],
            [
                "idestado" => 22,
                "nome" => "Pajeú do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Palmeira do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Palmeirais",
            ],
            [
                "idestado" => 22,
                "nome" => "Paquetá",
            ],
            [
                "idestado" => 22,
                "nome" => "Parnaguá",
            ],
            [
                "idestado" => 22,
                "nome" => "Parnaíba",
            ],
            [
                "idestado" => 22,
                "nome" => "Passagem Franca do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Patos do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Pau D'Arco do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Paulistana",
            ],
            [
                "idestado" => 22,
                "nome" => "Pavussu",
            ],
            [
                "idestado" => 22,
                "nome" => "Pedro II",
            ],
            [
                "idestado" => 22,
                "nome" => "Pedro Laurentino",
            ],
            [
                "idestado" => 22,
                "nome" => "Picos",
            ],
            [
                "idestado" => 22,
                "nome" => "Pimenteiras",
            ],
            [
                "idestado" => 22,
                "nome" => "Pio IX",
            ],
            [
                "idestado" => 22,
                "nome" => "Piracuruca",
            ],
            [
                "idestado" => 22,
                "nome" => "Piripiri",
            ],
            [
                "idestado" => 22,
                "nome" => "Porto",
            ],
            [
                "idestado" => 22,
                "nome" => "Porto Alegre do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Prata do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Queimada Nova",
            ],
            [
                "idestado" => 22,
                "nome" => "Redenção do Gurguéia",
            ],
            [
                "idestado" => 22,
                "nome" => "Regeneração",
            ],
            [
                "idestado" => 22,
                "nome" => "Riacho Frio",
            ],
            [
                "idestado" => 22,
                "nome" => "Ribeira do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Ribeiro Gonçalves",
            ],
            [
                "idestado" => 22,
                "nome" => "Rio Grande do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Santa Cruz do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Santa Cruz dos Milagres",
            ],
            [
                "idestado" => 22,
                "nome" => "Santa Filomena",
            ],
            [
                "idestado" => 22,
                "nome" => "Santa Luz",
            ],
            [
                "idestado" => 22,
                "nome" => "Santa Rosa do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Santana do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Santo Antônio de Lisboa",
            ],
            [
                "idestado" => 22,
                "nome" => "Santo Antônio dos Milagres",
            ],
            [
                "idestado" => 22,
                "nome" => "Santo Inácio do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São Braz do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São Félix do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São Francisco de Assis do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São Francisco do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São Gonçalo do Gurguéia",
            ],
            [
                "idestado" => 22,
                "nome" => "São Gonçalo do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São João da Canabrava",
            ],
            [
                "idestado" => 22,
                "nome" => "São João da Fronteira",
            ],
            [
                "idestado" => 22,
                "nome" => "São João da Serra",
            ],
            [
                "idestado" => 22,
                "nome" => "São João da Varjota",
            ],
            [
                "idestado" => 22,
                "nome" => "São João do Arraial",
            ],
            [
                "idestado" => 22,
                "nome" => "São João do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São José do Divino",
            ],
            [
                "idestado" => 22,
                "nome" => "São José do Peixe",
            ],
            [
                "idestado" => 22,
                "nome" => "São José do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São Julião",
            ],
            [
                "idestado" => 22,
                "nome" => "São Lourenço do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São Luis do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São Miguel da Baixa Grande",
            ],
            [
                "idestado" => 22,
                "nome" => "São Miguel do Fidalgo",
            ],
            [
                "idestado" => 22,
                "nome" => "São Miguel do Tapuio",
            ],
            [
                "idestado" => 22,
                "nome" => "São Pedro do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "São Raimundo Nonato",
            ],
            [
                "idestado" => 22,
                "nome" => "Sebastião Barros",
            ],
            [
                "idestado" => 22,
                "nome" => "Sebastião Leal",
            ],
            [
                "idestado" => 22,
                "nome" => "Sigefredo Pacheco",
            ],
            [
                "idestado" => 22,
                "nome" => "Simões",
            ],
            [
                "idestado" => 22,
                "nome" => "Simplício Mendes",
            ],
            [
                "idestado" => 22,
                "nome" => "Socorro do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Sussuapara",
            ],
            [
                "idestado" => 22,
                "nome" => "Tamboril do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Tanque do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Teresina",
            ],
            [
                "idestado" => 22,
                "nome" => "União",
            ],
            [
                "idestado" => 22,
                "nome" => "Uruçuí",
            ],
            [
                "idestado" => 22,
                "nome" => "Valença do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Várzea Branca",
            ],
            [
                "idestado" => 22,
                "nome" => "Várzea Grande",
            ],
            [
                "idestado" => 22,
                "nome" => "Vera Mendes",
            ],
            [
                "idestado" => 22,
                "nome" => "Vila Nova do Piauí",
            ],
            [
                "idestado" => 22,
                "nome" => "Wall Ferraz",
            ],
            [
                "idestado" => 23,
                "nome" => "Abaiara",
            ],
            [
                "idestado" => 23,
                "nome" => "Acarape",
            ],
            [
                "idestado" => 23,
                "nome" => "Acaraú",
            ],
            [
                "idestado" => 23,
                "nome" => "Acopiara",
            ],
            [
                "idestado" => 23,
                "nome" => "Aiuaba",
            ],
            [
                "idestado" => 23,
                "nome" => "Alcântaras",
            ],
            [
                "idestado" => 23,
                "nome" => "Altaneira",
            ],
            [
                "idestado" => 23,
                "nome" => "Alto Santo",
            ],
            [
                "idestado" => 23,
                "nome" => "Amontada",
            ],
            [
                "idestado" => 23,
                "nome" => "Antonina do Norte",
            ],
            [
                "idestado" => 23,
                "nome" => "Apuiarés",
            ],
            [
                "idestado" => 23,
                "nome" => "Aquiraz",
            ],
            [
                "idestado" => 23,
                "nome" => "Aracati",
            ],
            [
                "idestado" => 23,
                "nome" => "Aracoiaba",
            ],
            [
                "idestado" => 23,
                "nome" => "Ararendá",
            ],
            [
                "idestado" => 23,
                "nome" => "Araripe",
            ],
            [
                "idestado" => 23,
                "nome" => "Aratuba",
            ],
            [
                "idestado" => 23,
                "nome" => "Arneiroz",
            ],
            [
                "idestado" => 23,
                "nome" => "Assaré",
            ],
            [
                "idestado" => 23,
                "nome" => "Aurora",
            ],
            [
                "idestado" => 23,
                "nome" => "Baixio",
            ],
            [
                "idestado" => 23,
                "nome" => "Banabuiú",
            ],
            [
                "idestado" => 23,
                "nome" => "Barbalha",
            ],
            [
                "idestado" => 23,
                "nome" => "Barreira",
            ],
            [
                "idestado" => 23,
                "nome" => "Barro",
            ],
            [
                "idestado" => 23,
                "nome" => "Barroquinha",
            ],
            [
                "idestado" => 23,
                "nome" => "Baturité",
            ],
            [
                "idestado" => 23,
                "nome" => "Beberibe",
            ],
            [
                "idestado" => 23,
                "nome" => "Bela Cruz",
            ],
            [
                "idestado" => 23,
                "nome" => "Boa Viagem",
            ],
            [
                "idestado" => 23,
                "nome" => "Brejo Santo",
            ],
            [
                "idestado" => 23,
                "nome" => "Camocim",
            ],
            [
                "idestado" => 23,
                "nome" => "Campos Sales",
            ],
            [
                "idestado" => 23,
                "nome" => "Canindé",
            ],
            [
                "idestado" => 23,
                "nome" => "Capistrano",
            ],
            [
                "idestado" => 23,
                "nome" => "Caridade",
            ],
            [
                "idestado" => 23,
                "nome" => "Cariré",
            ],
            [
                "idestado" => 23,
                "nome" => "Caririaçu",
            ],
            [
                "idestado" => 23,
                "nome" => "Cariús",
            ],
            [
                "idestado" => 23,
                "nome" => "Carnaubal",
            ],
            [
                "idestado" => 23,
                "nome" => "Cascavel",
            ],
            [
                "idestado" => 23,
                "nome" => "Catarina",
            ],
            [
                "idestado" => 23,
                "nome" => "Catunda",
            ],
            [
                "idestado" => 23,
                "nome" => "Caucaia",
            ],
            [
                "idestado" => 23,
                "nome" => "Cedro",
            ],
            [
                "idestado" => 23,
                "nome" => "Chaval",
            ],
            [
                "idestado" => 23,
                "nome" => "Choró",
            ],
            [
                "idestado" => 23,
                "nome" => "Chorozinho",
            ],
            [
                "idestado" => 23,
                "nome" => "Coreaú",
            ],
            [
                "idestado" => 23,
                "nome" => "Crateús",
            ],
            [
                "idestado" => 23,
                "nome" => "Crato",
            ],
            [
                "idestado" => 23,
                "nome" => "Croatá",
            ],
            [
                "idestado" => 23,
                "nome" => "Cruz",
            ],
            [
                "idestado" => 23,
                "nome" => "Deputado Irapuan Pinheiro",
            ],
            [
                "idestado" => 23,
                "nome" => "Ereré",
            ],
            [
                "idestado" => 23,
                "nome" => "Eusébio",
            ],
            [
                "idestado" => 23,
                "nome" => "Farias Brito",
            ],
            [
                "idestado" => 23,
                "nome" => "Forquilha",
            ],
            [
                "idestado" => 23,
                "nome" => "Fortaleza",
            ],
            [
                "idestado" => 23,
                "nome" => "Fortim",
            ],
            [
                "idestado" => 23,
                "nome" => "Frecheirinha",
            ],
            [
                "idestado" => 23,
                "nome" => "General Sampaio",
            ],
            [
                "idestado" => 23,
                "nome" => "Graça",
            ],
            [
                "idestado" => 23,
                "nome" => "Granja",
            ],
            [
                "idestado" => 23,
                "nome" => "Granjeiro",
            ],
            [
                "idestado" => 23,
                "nome" => "Groaíras",
            ],
            [
                "idestado" => 23,
                "nome" => "Guaiúba",
            ],
            [
                "idestado" => 23,
                "nome" => "Guaraciaba do Norte",
            ],
            [
                "idestado" => 23,
                "nome" => "Guaramiranga",
            ],
            [
                "idestado" => 23,
                "nome" => "Hidrolândia",
            ],
            [
                "idestado" => 23,
                "nome" => "Horizonte",
            ],
            [
                "idestado" => 23,
                "nome" => "Ibaretama",
            ],
            [
                "idestado" => 23,
                "nome" => "Ibiapina",
            ],
            [
                "idestado" => 23,
                "nome" => "Ibicuitinga",
            ],
            [
                "idestado" => 23,
                "nome" => "Icapuí",
            ],
            [
                "idestado" => 23,
                "nome" => "Icó",
            ],
            [
                "idestado" => 23,
                "nome" => "Iguatu",
            ],
            [
                "idestado" => 23,
                "nome" => "Independência",
            ],
            [
                "idestado" => 23,
                "nome" => "Ipaporanga",
            ],
            [
                "idestado" => 23,
                "nome" => "Ipaumirim",
            ],
            [
                "idestado" => 23,
                "nome" => "Ipu",
            ],
            [
                "idestado" => 23,
                "nome" => "Ipueiras",
            ],
            [
                "idestado" => 23,
                "nome" => "Iracema",
            ],
            [
                "idestado" => 23,
                "nome" => "Irauçuba",
            ],
            [
                "idestado" => 23,
                "nome" => "Itaiçaba",
            ],
            [
                "idestado" => 23,
                "nome" => "Itaitinga",
            ],
            [
                "idestado" => 23,
                "nome" => "Itapajé",
            ],
            [
                "idestado" => 23,
                "nome" => "Itapipoca",
            ],
            [
                "idestado" => 23,
                "nome" => "Itapiúna",
            ],
            [
                "idestado" => 23,
                "nome" => "Itarema",
            ],
            [
                "idestado" => 23,
                "nome" => "Itatira",
            ],
            [
                "idestado" => 23,
                "nome" => "Jaguaretama",
            ],
            [
                "idestado" => 23,
                "nome" => "Jaguaribara",
            ],
            [
                "idestado" => 23,
                "nome" => "Jaguaribe",
            ],
            [
                "idestado" => 23,
                "nome" => "Jaguaruana",
            ],
            [
                "idestado" => 23,
                "nome" => "Jardim",
            ],
            [
                "idestado" => 23,
                "nome" => "Jati",
            ],
            [
                "idestado" => 23,
                "nome" => "Jijoca de Jericoacoara",
            ],
            [
                "idestado" => 23,
                "nome" => "Juazeiro do Norte",
            ],
            [
                "idestado" => 23,
                "nome" => "Jucás",
            ],
            [
                "idestado" => 23,
                "nome" => "Lavras da Mangabeira",
            ],
            [
                "idestado" => 23,
                "nome" => "Limoeiro do Norte",
            ],
            [
                "idestado" => 23,
                "nome" => "Madalena",
            ],
            [
                "idestado" => 23,
                "nome" => "Maracanaú",
            ],
            [
                "idestado" => 23,
                "nome" => "Maranguape",
            ],
            [
                "idestado" => 23,
                "nome" => "Marco",
            ],
            [
                "idestado" => 23,
                "nome" => "Martinópole",
            ],
            [
                "idestado" => 23,
                "nome" => "Massapê",
            ],
            [
                "idestado" => 23,
                "nome" => "Mauriti",
            ],
            [
                "idestado" => 23,
                "nome" => "Meruoca",
            ],
            [
                "idestado" => 23,
                "nome" => "Milagres",
            ],
            [
                "idestado" => 23,
                "nome" => "Milhã",
            ],
            [
                "idestado" => 23,
                "nome" => "Miraíma",
            ],
            [
                "idestado" => 23,
                "nome" => "Missão Velha",
            ],
            [
                "idestado" => 23,
                "nome" => "Mombaça",
            ],
            [
                "idestado" => 23,
                "nome" => "Monsenhor Tabosa",
            ],
            [
                "idestado" => 23,
                "nome" => "Morada Nova",
            ],
            [
                "idestado" => 23,
                "nome" => "Moraújo",
            ],
            [
                "idestado" => 23,
                "nome" => "Morrinhos",
            ],
            [
                "idestado" => 23,
                "nome" => "Mucambo",
            ],
            [
                "idestado" => 23,
                "nome" => "Mulungu",
            ],
            [
                "idestado" => 23,
                "nome" => "Nova Olinda",
            ],
            [
                "idestado" => 23,
                "nome" => "Nova Russas",
            ],
            [
                "idestado" => 23,
                "nome" => "Novo Oriente",
            ],
            [
                "idestado" => 23,
                "nome" => "Ocara",
            ],
            [
                "idestado" => 23,
                "nome" => "Orós",
            ],
            [
                "idestado" => 23,
                "nome" => "Pacajus",
            ],
            [
                "idestado" => 23,
                "nome" => "Pacatuba",
            ],
            [
                "idestado" => 23,
                "nome" => "Pacoti",
            ],
            [
                "idestado" => 23,
                "nome" => "Pacujá",
            ],
            [
                "idestado" => 23,
                "nome" => "Palhano",
            ],
            [
                "idestado" => 23,
                "nome" => "Palmácia",
            ],
            [
                "idestado" => 23,
                "nome" => "Paracuru",
            ],
            [
                "idestado" => 23,
                "nome" => "Paraipaba",
            ],
            [
                "idestado" => 23,
                "nome" => "Parambu",
            ],
            [
                "idestado" => 23,
                "nome" => "Paramoti",
            ],
            [
                "idestado" => 23,
                "nome" => "Pedra Branca",
            ],
            [
                "idestado" => 23,
                "nome" => "Penaforte",
            ],
            [
                "idestado" => 23,
                "nome" => "Pentecoste",
            ],
            [
                "idestado" => 23,
                "nome" => "Pereiro",
            ],
            [
                "idestado" => 23,
                "nome" => "Pindoretama",
            ],
            [
                "idestado" => 23,
                "nome" => "Piquet Carneiro",
            ],
            [
                "idestado" => 23,
                "nome" => "Pires Ferreira",
            ],
            [
                "idestado" => 23,
                "nome" => "Poranga",
            ],
            [
                "idestado" => 23,
                "nome" => "Porteiras",
            ],
            [
                "idestado" => 23,
                "nome" => "Potengi",
            ],
            [
                "idestado" => 23,
                "nome" => "Potiretama",
            ],
            [
                "idestado" => 23,
                "nome" => "Quiterianópolis",
            ],
            [
                "idestado" => 23,
                "nome" => "Quixadá",
            ],
            [
                "idestado" => 23,
                "nome" => "Quixelô",
            ],
            [
                "idestado" => 23,
                "nome" => "Quixeramobim",
            ],
            [
                "idestado" => 23,
                "nome" => "Quixeré",
            ],
            [
                "idestado" => 23,
                "nome" => "Redenção",
            ],
            [
                "idestado" => 23,
                "nome" => "Reriutaba",
            ],
            [
                "idestado" => 23,
                "nome" => "Russas",
            ],
            [
                "idestado" => 23,
                "nome" => "Saboeiro",
            ],
            [
                "idestado" => 23,
                "nome" => "Salitre",
            ],
            [
                "idestado" => 23,
                "nome" => "Santa Quitéria",
            ],
            [
                "idestado" => 23,
                "nome" => "Santana do Acaraú",
            ],
            [
                "idestado" => 23,
                "nome" => "Santana do Cariri",
            ],
            [
                "idestado" => 23,
                "nome" => "São Benedito",
            ],
            [
                "idestado" => 23,
                "nome" => "São Gonçalo do Amarante",
            ],
            [
                "idestado" => 23,
                "nome" => "São João do Jaguaribe",
            ],
            [
                "idestado" => 23,
                "nome" => "São Luís do Curu",
            ],
            [
                "idestado" => 23,
                "nome" => "Senador Pompeu",
            ],
            [
                "idestado" => 23,
                "nome" => "Senador Sá",
            ],
            [
                "idestado" => 23,
                "nome" => "Sobral",
            ],
            [
                "idestado" => 23,
                "nome" => "Solonópole",
            ],
            [
                "idestado" => 23,
                "nome" => "Tabuleiro do Norte",
            ],
            [
                "idestado" => 23,
                "nome" => "Tamboril",
            ],
            [
                "idestado" => 23,
                "nome" => "Tarrafas",
            ],
            [
                "idestado" => 23,
                "nome" => "Tauá",
            ],
            [
                "idestado" => 23,
                "nome" => "Tejuçuoca",
            ],
            [
                "idestado" => 23,
                "nome" => "Tianguá",
            ],
            [
                "idestado" => 23,
                "nome" => "Trairi",
            ],
            [
                "idestado" => 23,
                "nome" => "Tururu",
            ],
            [
                "idestado" => 23,
                "nome" => "Ubajara",
            ],
            [
                "idestado" => 23,
                "nome" => "Umari",
            ],
            [
                "idestado" => 23,
                "nome" => "Umirim",
            ],
            [
                "idestado" => 23,
                "nome" => "Uruburetama",
            ],
            [
                "idestado" => 23,
                "nome" => "Uruoca",
            ],
            [
                "idestado" => 23,
                "nome" => "Varjota",
            ],
            [
                "idestado" => 23,
                "nome" => "Várzea Alegre",
            ],
            [
                "idestado" => 23,
                "nome" => "Viçosa do Ceará",
            ],
            [
                "idestado" => 24,
                "nome" => "Acari",
            ],
            [
                "idestado" => 24,
                "nome" => "Açu",
            ],
            [
                "idestado" => 24,
                "nome" => "Afonso Bezerra",
            ],
            [
                "idestado" => 24,
                "nome" => "Água Nova",
            ],
            [
                "idestado" => 24,
                "nome" => "Alexandria",
            ],
            [
                "idestado" => 24,
                "nome" => "Almino Afonso",
            ],
            [
                "idestado" => 24,
                "nome" => "Alto do Rodrigues",
            ],
            [
                "idestado" => 24,
                "nome" => "Angicos",
            ],
            [
                "idestado" => 24,
                "nome" => "Antônio Martins",
            ],
            [
                "idestado" => 24,
                "nome" => "Apodi",
            ],
            [
                "idestado" => 24,
                "nome" => "Areia Branca",
            ],
            [
                "idestado" => 24,
                "nome" => "Arês",
            ],
            [
                "idestado" => 24,
                "nome" => "Baía Formosa",
            ],
            [
                "idestado" => 24,
                "nome" => "Baraúna",
            ],
            [
                "idestado" => 24,
                "nome" => "Barcelona",
            ],
            [
                "idestado" => 24,
                "nome" => "Bento Fernandes",
            ],
            [
                "idestado" => 24,
                "nome" => "Bodó",
            ],
            [
                "idestado" => 24,
                "nome" => "Bom Jesus",
            ],
            [
                "idestado" => 24,
                "nome" => "Brejinho",
            ],
            [
                "idestado" => 24,
                "nome" => "Caiçara do Norte",
            ],
            [
                "idestado" => 24,
                "nome" => "Caiçara do Rio do Vento",
            ],
            [
                "idestado" => 24,
                "nome" => "Caicó",
            ],
            [
                "idestado" => 24,
                "nome" => "Campo Grande",
            ],
            [
                "idestado" => 24,
                "nome" => "Campo Redondo",
            ],
            [
                "idestado" => 24,
                "nome" => "Canguaretama",
            ],
            [
                "idestado" => 24,
                "nome" => "Caraúbas",
            ],
            [
                "idestado" => 24,
                "nome" => "Carnaúba dos Dantas",
            ],
            [
                "idestado" => 24,
                "nome" => "Carnaubais",
            ],
            [
                "idestado" => 24,
                "nome" => "Ceará-Mirim",
            ],
            [
                "idestado" => 24,
                "nome" => "Cerro Corá",
            ],
            [
                "idestado" => 24,
                "nome" => "Coronel Ezequiel",
            ],
            [
                "idestado" => 24,
                "nome" => "Coronel João Pessoa",
            ],
            [
                "idestado" => 24,
                "nome" => "Cruzeta",
            ],
            [
                "idestado" => 24,
                "nome" => "Currais Novos",
            ],
            [
                "idestado" => 24,
                "nome" => "Doutor Severiano",
            ],
            [
                "idestado" => 24,
                "nome" => "Encanto",
            ],
            [
                "idestado" => 24,
                "nome" => "Equador",
            ],
            [
                "idestado" => 24,
                "nome" => "Espírito Santo",
            ],
            [
                "idestado" => 24,
                "nome" => "Extremoz",
            ],
            [
                "idestado" => 24,
                "nome" => "Felipe Guerra",
            ],
            [
                "idestado" => 24,
                "nome" => "Fernando Pedroza",
            ],
            [
                "idestado" => 24,
                "nome" => "Florânia",
            ],
            [
                "idestado" => 24,
                "nome" => "Francisco Dantas",
            ],
            [
                "idestado" => 24,
                "nome" => "Frutuoso Gomes",
            ],
            [
                "idestado" => 24,
                "nome" => "Galinhos",
            ],
            [
                "idestado" => 24,
                "nome" => "Goianinha",
            ],
            [
                "idestado" => 24,
                "nome" => "Governador Dix-Sept Rosado",
            ],
            [
                "idestado" => 24,
                "nome" => "Grossos",
            ],
            [
                "idestado" => 24,
                "nome" => "Guamaré",
            ],
            [
                "idestado" => 24,
                "nome" => "Ielmo Marinho",
            ],
            [
                "idestado" => 24,
                "nome" => "Ipanguaçu",
            ],
            [
                "idestado" => 24,
                "nome" => "Ipueira",
            ],
            [
                "idestado" => 24,
                "nome" => "Itajá",
            ],
            [
                "idestado" => 24,
                "nome" => "Itaú",
            ],
            [
                "idestado" => 24,
                "nome" => "Jaçanã",
            ],
            [
                "idestado" => 24,
                "nome" => "Jandaíra",
            ],
            [
                "idestado" => 24,
                "nome" => "Janduís",
            ],
            [
                "idestado" => 24,
                "nome" => "Januário Cicco",
            ],
            [
                "idestado" => 24,
                "nome" => "Japi",
            ],
            [
                "idestado" => 24,
                "nome" => "Jardim de Angicos",
            ],
            [
                "idestado" => 24,
                "nome" => "Jardim de Piranhas",
            ],
            [
                "idestado" => 24,
                "nome" => "Jardim do Seridó",
            ],
            [
                "idestado" => 24,
                "nome" => "João Câmara",
            ],
            [
                "idestado" => 24,
                "nome" => "João Dias",
            ],
            [
                "idestado" => 24,
                "nome" => "José da Penha",
            ],
            [
                "idestado" => 24,
                "nome" => "Jucurutu",
            ],
            [
                "idestado" => 24,
                "nome" => "Jundiá",
            ],
            [
                "idestado" => 24,
                "nome" => "Lagoa d'Anta",
            ],
            [
                "idestado" => 24,
                "nome" => "Lagoa de Pedras",
            ],
            [
                "idestado" => 24,
                "nome" => "Lagoa de Velhos",
            ],
            [
                "idestado" => 24,
                "nome" => "Lagoa Nova",
            ],
            [
                "idestado" => 24,
                "nome" => "Lagoa Salgada",
            ],
            [
                "idestado" => 24,
                "nome" => "Lajes",
            ],
            [
                "idestado" => 24,
                "nome" => "Lajes Pintadas",
            ],
            [
                "idestado" => 24,
                "nome" => "Lucrécia",
            ],
            [
                "idestado" => 24,
                "nome" => "Luís Gomes",
            ],
            [
                "idestado" => 24,
                "nome" => "Macaíba",
            ],
            [
                "idestado" => 24,
                "nome" => "Macau",
            ],
            [
                "idestado" => 24,
                "nome" => "Major Sales",
            ],
            [
                "idestado" => 24,
                "nome" => "Marcelino Vieira",
            ],
            [
                "idestado" => 24,
                "nome" => "Martins",
            ],
            [
                "idestado" => 24,
                "nome" => "Maxaranguape",
            ],
            [
                "idestado" => 24,
                "nome" => "Messias Targino",
            ],
            [
                "idestado" => 24,
                "nome" => "Montanhas",
            ],
            [
                "idestado" => 24,
                "nome" => "Monte Alegre",
            ],
            [
                "idestado" => 24,
                "nome" => "Monte das Gameleiras",
            ],
            [
                "idestado" => 24,
                "nome" => "Mossoró",
            ],
            [
                "idestado" => 24,
                "nome" => "Natal",
            ],
            [
                "idestado" => 24,
                "nome" => "Nísia Floresta",
            ],
            [
                "idestado" => 24,
                "nome" => "Nova Cruz",
            ],
            [
                "idestado" => 24,
                "nome" => "Olho d'Água do Borges",
            ],
            [
                "idestado" => 24,
                "nome" => "Ouro Branco",
            ],
            [
                "idestado" => 24,
                "nome" => "Paraná",
            ],
            [
                "idestado" => 24,
                "nome" => "Paraú",
            ],
            [
                "idestado" => 24,
                "nome" => "Parazinho",
            ],
            [
                "idestado" => 24,
                "nome" => "Parelhas",
            ],
            [
                "idestado" => 24,
                "nome" => "Parnamirim",
            ],
            [
                "idestado" => 24,
                "nome" => "Passa e Fica",
            ],
            [
                "idestado" => 24,
                "nome" => "Passagem",
            ],
            [
                "idestado" => 24,
                "nome" => "Patu",
            ],
            [
                "idestado" => 24,
                "nome" => "Pau dos Ferros",
            ],
            [
                "idestado" => 24,
                "nome" => "Pedra Grande",
            ],
            [
                "idestado" => 24,
                "nome" => "Pedra Preta",
            ],
            [
                "idestado" => 24,
                "nome" => "Pedro Avelino",
            ],
            [
                "idestado" => 24,
                "nome" => "Pedro Velho",
            ],
            [
                "idestado" => 24,
                "nome" => "Pendências",
            ],
            [
                "idestado" => 24,
                "nome" => "Pilões",
            ],
            [
                "idestado" => 24,
                "nome" => "Poço Branco",
            ],
            [
                "idestado" => 24,
                "nome" => "Portalegre",
            ],
            [
                "idestado" => 24,
                "nome" => "Porto do Mangue",
            ],
            [
                "idestado" => 24,
                "nome" => "Pureza",
            ],
            [
                "idestado" => 24,
                "nome" => "Rafael Fernandes",
            ],
            [
                "idestado" => 24,
                "nome" => "Rafael Godeiro",
            ],
            [
                "idestado" => 24,
                "nome" => "Riacho da Cruz",
            ],
            [
                "idestado" => 24,
                "nome" => "Riacho de Santana",
            ],
            [
                "idestado" => 24,
                "nome" => "Riachuelo",
            ],
            [
                "idestado" => 24,
                "nome" => "Rio do Fogo",
            ],
            [
                "idestado" => 24,
                "nome" => "Rodolfo Fernandes",
            ],
            [
                "idestado" => 24,
                "nome" => "Ruy Barbosa",
            ],
            [
                "idestado" => 24,
                "nome" => "Santa Cruz",
            ],
            [
                "idestado" => 24,
                "nome" => "Santa Maria",
            ],
            [
                "idestado" => 24,
                "nome" => "Santana do Matos",
            ],
            [
                "idestado" => 24,
                "nome" => "Santana do Seridó",
            ],
            [
                "idestado" => 24,
                "nome" => "Santo Antônio",
            ],
            [
                "idestado" => 24,
                "nome" => "São Bento do Norte",
            ],
            [
                "idestado" => 24,
                "nome" => "São Bento do Trairí",
            ],
            [
                "idestado" => 24,
                "nome" => "São Fernando",
            ],
            [
                "idestado" => 24,
                "nome" => "São Francisco do Oeste",
            ],
            [
                "idestado" => 24,
                "nome" => "São Gonçalo do Amarante",
            ],
            [
                "idestado" => 24,
                "nome" => "São João do Sabugi",
            ],
            [
                "idestado" => 24,
                "nome" => "São José de Mipibu",
            ],
            [
                "idestado" => 24,
                "nome" => "São José do Campestre",
            ],
            [
                "idestado" => 24,
                "nome" => "São José do Seridó",
            ],
            [
                "idestado" => 24,
                "nome" => "São Miguel",
            ],
            [
                "idestado" => 24,
                "nome" => "São Miguel do Gostoso",
            ],
            [
                "idestado" => 24,
                "nome" => "São Paulo do Potengi",
            ],
            [
                "idestado" => 24,
                "nome" => "São Pedro",
            ],
            [
                "idestado" => 24,
                "nome" => "São Rafael",
            ],
            [
                "idestado" => 24,
                "nome" => "São Tomé",
            ],
            [
                "idestado" => 24,
                "nome" => "São Vicente",
            ],
            [
                "idestado" => 24,
                "nome" => "Senador Elói de Souza",
            ],
            [
                "idestado" => 24,
                "nome" => "Senador Georgino Avelino",
            ],
            [
                "idestado" => 24,
                "nome" => "Serra Caiada",
            ],
            [
                "idestado" => 24,
                "nome" => "Serra de São Bento",
            ],
            [
                "idestado" => 24,
                "nome" => "Serra do Mel",
            ],
            [
                "idestado" => 24,
                "nome" => "Serra Negra do Norte",
            ],
            [
                "idestado" => 24,
                "nome" => "Serrinha",
            ],
            [
                "idestado" => 24,
                "nome" => "Serrinha dos Pintos",
            ],
            [
                "idestado" => 24,
                "nome" => "Severiano Melo",
            ],
            [
                "idestado" => 24,
                "nome" => "Sítio Novo",
            ],
            [
                "idestado" => 24,
                "nome" => "Taboleiro Grande",
            ],
            [
                "idestado" => 24,
                "nome" => "Taipu",
            ],
            [
                "idestado" => 24,
                "nome" => "Tangará",
            ],
            [
                "idestado" => 24,
                "nome" => "Tenente Ananias",
            ],
            [
                "idestado" => 24,
                "nome" => "Tenente Laurentino Cruz",
            ],
            [
                "idestado" => 24,
                "nome" => "Tibau",
            ],
            [
                "idestado" => 24,
                "nome" => "Tibau do Sul",
            ],
            [
                "idestado" => 24,
                "nome" => "Timbaúba dos Batistas",
            ],
            [
                "idestado" => 24,
                "nome" => "Touros",
            ],
            [
                "idestado" => 24,
                "nome" => "Triunfo Potiguar",
            ],
            [
                "idestado" => 24,
                "nome" => "Umarizal",
            ],
            [
                "idestado" => 24,
                "nome" => "Upanema",
            ],
            [
                "idestado" => 24,
                "nome" => "Várzea",
            ],
            [
                "idestado" => 24,
                "nome" => "Venha-Ver",
            ],
            [
                "idestado" => 24,
                "nome" => "Vera Cruz",
            ],
            [
                "idestado" => 24,
                "nome" => "Viçosa",
            ],
            [
                "idestado" => 24,
                "nome" => "Vila Flor",
            ],
            [
                "idestado" => 25,
                "nome" => "Água Branca",
            ],
            [
                "idestado" => 25,
                "nome" => "Aguiar",
            ],
            [
                "idestado" => 25,
                "nome" => "Alagoa Grande",
            ],
            [
                "idestado" => 25,
                "nome" => "Alagoa Nova",
            ],
            [
                "idestado" => 25,
                "nome" => "Alagoinha",
            ],
            [
                "idestado" => 25,
                "nome" => "Alcantil",
            ],
            [
                "idestado" => 25,
                "nome" => "Algodão de Jandaíra",
            ],
            [
                "idestado" => 25,
                "nome" => "Alhandra",
            ],
            [
                "idestado" => 25,
                "nome" => "Amparo",
            ],
            [
                "idestado" => 25,
                "nome" => "Aparecida",
            ],
            [
                "idestado" => 25,
                "nome" => "Araçagi",
            ],
            [
                "idestado" => 25,
                "nome" => "Arara",
            ],
            [
                "idestado" => 25,
                "nome" => "Araruna",
            ],
            [
                "idestado" => 25,
                "nome" => "Areia",
            ],
            [
                "idestado" => 25,
                "nome" => "Areia de Baraúnas",
            ],
            [
                "idestado" => 25,
                "nome" => "Areial",
            ],
            [
                "idestado" => 25,
                "nome" => "Aroeiras",
            ],
            [
                "idestado" => 25,
                "nome" => "Assunção",
            ],
            [
                "idestado" => 25,
                "nome" => "Baía da Traição",
            ],
            [
                "idestado" => 25,
                "nome" => "Bananeiras",
            ],
            [
                "idestado" => 25,
                "nome" => "Baraúna",
            ],
            [
                "idestado" => 25,
                "nome" => "Barra de Santa Rosa",
            ],
            [
                "idestado" => 25,
                "nome" => "Barra de Santana",
            ],
            [
                "idestado" => 25,
                "nome" => "Barra de São Miguel",
            ],
            [
                "idestado" => 25,
                "nome" => "Bayeux",
            ],
            [
                "idestado" => 25,
                "nome" => "Belém",
            ],
            [
                "idestado" => 25,
                "nome" => "Belém do Brejo do Cruz",
            ],
            [
                "idestado" => 25,
                "nome" => "Bernardino Batista",
            ],
            [
                "idestado" => 25,
                "nome" => "Boa Ventura",
            ],
            [
                "idestado" => 25,
                "nome" => "Boa Vista",
            ],
            [
                "idestado" => 25,
                "nome" => "Bom Jesus",
            ],
            [
                "idestado" => 25,
                "nome" => "Bom Sucesso",
            ],
            [
                "idestado" => 25,
                "nome" => "Bonito de Santa Fé",
            ],
            [
                "idestado" => 25,
                "nome" => "Boqueirão",
            ],
            [
                "idestado" => 25,
                "nome" => "Borborema",
            ],
            [
                "idestado" => 25,
                "nome" => "Brejo do Cruz",
            ],
            [
                "idestado" => 25,
                "nome" => "Brejo dos Santos",
            ],
            [
                "idestado" => 25,
                "nome" => "Caaporã",
            ],
            [
                "idestado" => 25,
                "nome" => "Cabaceiras",
            ],
            [
                "idestado" => 25,
                "nome" => "Cabedelo",
            ],
            [
                "idestado" => 25,
                "nome" => "Cachoeira dos Índios",
            ],
            [
                "idestado" => 25,
                "nome" => "Cacimba de Areia",
            ],
            [
                "idestado" => 25,
                "nome" => "Cacimba de Dentro",
            ],
            [
                "idestado" => 25,
                "nome" => "Cacimbas",
            ],
            [
                "idestado" => 25,
                "nome" => "Caiçara",
            ],
            [
                "idestado" => 25,
                "nome" => "Cajazeiras",
            ],
            [
                "idestado" => 25,
                "nome" => "Cajazeirinhas",
            ],
            [
                "idestado" => 25,
                "nome" => "Caldas Brandão",
            ],
            [
                "idestado" => 25,
                "nome" => "Camalaú",
            ],
            [
                "idestado" => 25,
                "nome" => "Campina Grande",
            ],
            [
                "idestado" => 25,
                "nome" => "Capim",
            ],
            [
                "idestado" => 25,
                "nome" => "Caraúbas",
            ],
            [
                "idestado" => 25,
                "nome" => "Carrapateira",
            ],
            [
                "idestado" => 25,
                "nome" => "Casserengue",
            ],
            [
                "idestado" => 25,
                "nome" => "Catingueira",
            ],
            [
                "idestado" => 25,
                "nome" => "Catolé do Rocha",
            ],
            [
                "idestado" => 25,
                "nome" => "Caturité",
            ],
            [
                "idestado" => 25,
                "nome" => "Conceição",
            ],
            [
                "idestado" => 25,
                "nome" => "Condado",
            ],
            [
                "idestado" => 25,
                "nome" => "Conde",
            ],
            [
                "idestado" => 25,
                "nome" => "Congo",
            ],
            [
                "idestado" => 25,
                "nome" => "Coremas",
            ],
            [
                "idestado" => 25,
                "nome" => "Coxixola",
            ],
            [
                "idestado" => 25,
                "nome" => "Cruz do Espírito Santo",
            ],
            [
                "idestado" => 25,
                "nome" => "Cubati",
            ],
            [
                "idestado" => 25,
                "nome" => "Cuité",
            ],
            [
                "idestado" => 25,
                "nome" => "Cuité de Mamanguape",
            ],
            [
                "idestado" => 25,
                "nome" => "Cuitegi",
            ],
            [
                "idestado" => 25,
                "nome" => "Curral de Cima",
            ],
            [
                "idestado" => 25,
                "nome" => "Curral Velho",
            ],
            [
                "idestado" => 25,
                "nome" => "Damião",
            ],
            [
                "idestado" => 25,
                "nome" => "Desterro",
            ],
            [
                "idestado" => 25,
                "nome" => "Diamante",
            ],
            [
                "idestado" => 25,
                "nome" => "Dona Inês",
            ],
            [
                "idestado" => 25,
                "nome" => "Duas Estradas",
            ],
            [
                "idestado" => 25,
                "nome" => "Emas",
            ],
            [
                "idestado" => 25,
                "nome" => "Esperança",
            ],
            [
                "idestado" => 25,
                "nome" => "Fagundes",
            ],
            [
                "idestado" => 25,
                "nome" => "Frei Martinho",
            ],
            [
                "idestado" => 25,
                "nome" => "Gado Bravo",
            ],
            [
                "idestado" => 25,
                "nome" => "Guarabira",
            ],
            [
                "idestado" => 25,
                "nome" => "Gurinhém",
            ],
            [
                "idestado" => 25,
                "nome" => "Gurjão",
            ],
            [
                "idestado" => 25,
                "nome" => "Ibiara",
            ],
            [
                "idestado" => 25,
                "nome" => "Igaracy",
            ],
            [
                "idestado" => 25,
                "nome" => "Imaculada",
            ],
            [
                "idestado" => 25,
                "nome" => "Ingá",
            ],
            [
                "idestado" => 25,
                "nome" => "Itabaiana",
            ],
            [
                "idestado" => 25,
                "nome" => "Itaporanga",
            ],
            [
                "idestado" => 25,
                "nome" => "Itapororoca",
            ],
            [
                "idestado" => 25,
                "nome" => "Itatuba",
            ],
            [
                "idestado" => 25,
                "nome" => "Jacaraú",
            ],
            [
                "idestado" => 25,
                "nome" => "Jericó",
            ],
            [
                "idestado" => 25,
                "nome" => "João Pessoa",
            ],
            [
                "idestado" => 25,
                "nome" => "Joca Claudino",
            ],
            [
                "idestado" => 25,
                "nome" => "Juarez Távora",
            ],
            [
                "idestado" => 25,
                "nome" => "Juazeirinho",
            ],
            [
                "idestado" => 25,
                "nome" => "Junco do Seridó",
            ],
            [
                "idestado" => 25,
                "nome" => "Juripiranga",
            ],
            [
                "idestado" => 25,
                "nome" => "Juru",
            ],
            [
                "idestado" => 25,
                "nome" => "Lagoa",
            ],
            [
                "idestado" => 25,
                "nome" => "Lagoa de Dentro",
            ],
            [
                "idestado" => 25,
                "nome" => "Lagoa Seca",
            ],
            [
                "idestado" => 25,
                "nome" => "Lastro",
            ],
            [
                "idestado" => 25,
                "nome" => "Livramento",
            ],
            [
                "idestado" => 25,
                "nome" => "Logradouro",
            ],
            [
                "idestado" => 25,
                "nome" => "Lucena",
            ],
            [
                "idestado" => 25,
                "nome" => "Mãe d'Água",
            ],
            [
                "idestado" => 25,
                "nome" => "Malta",
            ],
            [
                "idestado" => 25,
                "nome" => "Mamanguape",
            ],
            [
                "idestado" => 25,
                "nome" => "Manaíra",
            ],
            [
                "idestado" => 25,
                "nome" => "Marcação",
            ],
            [
                "idestado" => 25,
                "nome" => "Mari",
            ],
            [
                "idestado" => 25,
                "nome" => "Marizópolis",
            ],
            [
                "idestado" => 25,
                "nome" => "Massaranduba",
            ],
            [
                "idestado" => 25,
                "nome" => "Mataraca",
            ],
            [
                "idestado" => 25,
                "nome" => "Matinhas",
            ],
            [
                "idestado" => 25,
                "nome" => "Mato Grosso",
            ],
            [
                "idestado" => 25,
                "nome" => "Maturéia",
            ],
            [
                "idestado" => 25,
                "nome" => "Mogeiro",
            ],
            [
                "idestado" => 25,
                "nome" => "Montadas",
            ],
            [
                "idestado" => 25,
                "nome" => "Monte Horebe",
            ],
            [
                "idestado" => 25,
                "nome" => "Monteiro",
            ],
            [
                "idestado" => 25,
                "nome" => "Mulungu",
            ],
            [
                "idestado" => 25,
                "nome" => "Natuba",
            ],
            [
                "idestado" => 25,
                "nome" => "Nazarezinho",
            ],
            [
                "idestado" => 25,
                "nome" => "Nova Floresta",
            ],
            [
                "idestado" => 25,
                "nome" => "Nova Olinda",
            ],
            [
                "idestado" => 25,
                "nome" => "Nova Palmeira",
            ],
            [
                "idestado" => 25,
                "nome" => "Olho d'Água",
            ],
            [
                "idestado" => 25,
                "nome" => "Olivedos",
            ],
            [
                "idestado" => 25,
                "nome" => "Ouro Velho",
            ],
            [
                "idestado" => 25,
                "nome" => "Parari",
            ],
            [
                "idestado" => 25,
                "nome" => "Passagem",
            ],
            [
                "idestado" => 25,
                "nome" => "Patos",
            ],
            [
                "idestado" => 25,
                "nome" => "Paulista",
            ],
            [
                "idestado" => 25,
                "nome" => "Pedra Branca",
            ],
            [
                "idestado" => 25,
                "nome" => "Pedra Lavrada",
            ],
            [
                "idestado" => 25,
                "nome" => "Pedras de Fogo",
            ],
            [
                "idestado" => 25,
                "nome" => "Pedro Régis",
            ],
            [
                "idestado" => 25,
                "nome" => "Piancó",
            ],
            [
                "idestado" => 25,
                "nome" => "Picuí",
            ],
            [
                "idestado" => 25,
                "nome" => "Pilar",
            ],
            [
                "idestado" => 25,
                "nome" => "Pilões",
            ],
            [
                "idestado" => 25,
                "nome" => "Pilõezinhos",
            ],
            [
                "idestado" => 25,
                "nome" => "Pirpirituba",
            ],
            [
                "idestado" => 25,
                "nome" => "Pitimbu",
            ],
            [
                "idestado" => 25,
                "nome" => "Pocinhos",
            ],
            [
                "idestado" => 25,
                "nome" => "Poço Dantas",
            ],
            [
                "idestado" => 25,
                "nome" => "Poço de José de Moura",
            ],
            [
                "idestado" => 25,
                "nome" => "Pombal",
            ],
            [
                "idestado" => 25,
                "nome" => "Prata",
            ],
            [
                "idestado" => 25,
                "nome" => "Princesa Isabel",
            ],
            [
                "idestado" => 25,
                "nome" => "Puxinanã",
            ],
            [
                "idestado" => 25,
                "nome" => "Queimadas",
            ],
            [
                "idestado" => 25,
                "nome" => "Quixaba",
            ],
            [
                "idestado" => 25,
                "nome" => "Remígio",
            ],
            [
                "idestado" => 25,
                "nome" => "Riachão",
            ],
            [
                "idestado" => 25,
                "nome" => "Riachão do Bacamarte",
            ],
            [
                "idestado" => 25,
                "nome" => "Riachão do Poço",
            ],
            [
                "idestado" => 25,
                "nome" => "Riacho de Santo Antônio",
            ],
            [
                "idestado" => 25,
                "nome" => "Riacho dos Cavalos",
            ],
            [
                "idestado" => 25,
                "nome" => "Rio Tinto",
            ],
            [
                "idestado" => 25,
                "nome" => "Salgadinho",
            ],
            [
                "idestado" => 25,
                "nome" => "Salgado de São Félix",
            ],
            [
                "idestado" => 25,
                "nome" => "Santa Cecília",
            ],
            [
                "idestado" => 25,
                "nome" => "Santa Cruz",
            ],
            [
                "idestado" => 25,
                "nome" => "Santa Helena",
            ],
            [
                "idestado" => 25,
                "nome" => "Santa Inês",
            ],
            [
                "idestado" => 25,
                "nome" => "Santa Luzia",
            ],
            [
                "idestado" => 25,
                "nome" => "Santa Rita",
            ],
            [
                "idestado" => 25,
                "nome" => "Santa Teresinha",
            ],
            [
                "idestado" => 25,
                "nome" => "Santana de Mangueira",
            ],
            [
                "idestado" => 25,
                "nome" => "Santana dos Garrotes",
            ],
            [
                "idestado" => 25,
                "nome" => "Santo André",
            ],
            [
                "idestado" => 25,
                "nome" => "São Bentinho",
            ],
            [
                "idestado" => 25,
                "nome" => "São Bento",
            ],
            [
                "idestado" => 25,
                "nome" => "São Domingos",
            ],
            [
                "idestado" => 25,
                "nome" => "São Domingos do Cariri",
            ],
            [
                "idestado" => 25,
                "nome" => "São Francisco",
            ],
            [
                "idestado" => 25,
                "nome" => "São João do Cariri",
            ],
            [
                "idestado" => 25,
                "nome" => "São João do Rio do Peixe",
            ],
            [
                "idestado" => 25,
                "nome" => "São João do Tigre",
            ],
            [
                "idestado" => 25,
                "nome" => "São José da Lagoa Tapada",
            ],
            [
                "idestado" => 25,
                "nome" => "São José de Caiana",
            ],
            [
                "idestado" => 25,
                "nome" => "São José de Espinharas",
            ],
            [
                "idestado" => 25,
                "nome" => "São José de Piranhas",
            ],
            [
                "idestado" => 25,
                "nome" => "São José de Princesa",
            ],
            [
                "idestado" => 25,
                "nome" => "São José do Bonfim",
            ],
            [
                "idestado" => 25,
                "nome" => "São José do Brejo do Cruz",
            ],
            [
                "idestado" => 25,
                "nome" => "São José do Sabugi",
            ],
            [
                "idestado" => 25,
                "nome" => "São José dos Cordeiros",
            ],
            [
                "idestado" => 25,
                "nome" => "São José dos Ramos",
            ],
            [
                "idestado" => 25,
                "nome" => "São Mamede",
            ],
            [
                "idestado" => 25,
                "nome" => "São Miguel de Taipu",
            ],
            [
                "idestado" => 25,
                "nome" => "São Sebastião de Lagoa de Roça",
            ],
            [
                "idestado" => 25,
                "nome" => "São Sebastião do Umbuzeiro",
            ],
            [
                "idestado" => 25,
                "nome" => "São Vicente do Seridó",
            ],
            [
                "idestado" => 25,
                "nome" => "Sapé",
            ],
            [
                "idestado" => 25,
                "nome" => "Serra Branca",
            ],
            [
                "idestado" => 25,
                "nome" => "Serra da Raiz",
            ],
            [
                "idestado" => 25,
                "nome" => "Serra Grande",
            ],
            [
                "idestado" => 25,
                "nome" => "Serra Redonda",
            ],
            [
                "idestado" => 25,
                "nome" => "Serraria",
            ],
            [
                "idestado" => 25,
                "nome" => "Sertãozinho",
            ],
            [
                "idestado" => 25,
                "nome" => "Sobrado",
            ],
            [
                "idestado" => 25,
                "nome" => "Solânea",
            ],
            [
                "idestado" => 25,
                "nome" => "Soledade",
            ],
            [
                "idestado" => 25,
                "nome" => "Sossêgo",
            ],
            [
                "idestado" => 25,
                "nome" => "Sousa",
            ],
            [
                "idestado" => 25,
                "nome" => "Sumé",
            ],
            [
                "idestado" => 25,
                "nome" => "Tacima",
            ],
            [
                "idestado" => 25,
                "nome" => "Taperoá",
            ],
            [
                "idestado" => 25,
                "nome" => "Tavares",
            ],
            [
                "idestado" => 25,
                "nome" => "Teixeira",
            ],
            [
                "idestado" => 25,
                "nome" => "Tenório",
            ],
            [
                "idestado" => 25,
                "nome" => "Triunfo",
            ],
            [
                "idestado" => 25,
                "nome" => "Uiraúna",
            ],
            [
                "idestado" => 25,
                "nome" => "Umbuzeiro",
            ],
            [
                "idestado" => 25,
                "nome" => "Várzea",
            ],
            [
                "idestado" => 25,
                "nome" => "Vieirópolis",
            ],
            [
                "idestado" => 25,
                "nome" => "Vista Serrana",
            ],
            [
                "idestado" => 25,
                "nome" => "Zabelê",
            ],
            [
                "idestado" => 26,
                "nome" => "Abreu e Lima",
            ],
            [
                "idestado" => 26,
                "nome" => "Afogados da Ingazeira",
            ],
            [
                "idestado" => 26,
                "nome" => "Afrânio",
            ],
            [
                "idestado" => 26,
                "nome" => "Agrestina",
            ],
            [
                "idestado" => 26,
                "nome" => "Água Preta",
            ],
            [
                "idestado" => 26,
                "nome" => "Águas Belas",
            ],
            [
                "idestado" => 26,
                "nome" => "Alagoinha",
            ],
            [
                "idestado" => 26,
                "nome" => "Aliança",
            ],
            [
                "idestado" => 26,
                "nome" => "Altinho",
            ],
            [
                "idestado" => 26,
                "nome" => "Amaraji",
            ],
            [
                "idestado" => 26,
                "nome" => "Angelim",
            ],
            [
                "idestado" => 26,
                "nome" => "Araçoiaba",
            ],
            [
                "idestado" => 26,
                "nome" => "Araripina",
            ],
            [
                "idestado" => 26,
                "nome" => "Arcoverde",
            ],
            [
                "idestado" => 26,
                "nome" => "Barra de Guabiraba",
            ],
            [
                "idestado" => 26,
                "nome" => "Barreiros",
            ],
            [
                "idestado" => 26,
                "nome" => "Belém de Maria",
            ],
            [
                "idestado" => 26,
                "nome" => "Belém do São Francisco",
            ],
            [
                "idestado" => 26,
                "nome" => "Belo Jardim",
            ],
            [
                "idestado" => 26,
                "nome" => "Betânia",
            ],
            [
                "idestado" => 26,
                "nome" => "Bezerros",
            ],
            [
                "idestado" => 26,
                "nome" => "Bodocó",
            ],
            [
                "idestado" => 26,
                "nome" => "Bom Conselho",
            ],
            [
                "idestado" => 26,
                "nome" => "Bom Jardim",
            ],
            [
                "idestado" => 26,
                "nome" => "Bonito",
            ],
            [
                "idestado" => 26,
                "nome" => "Brejão",
            ],
            [
                "idestado" => 26,
                "nome" => "Brejinho",
            ],
            [
                "idestado" => 26,
                "nome" => "Brejo da Madre de Deus",
            ],
            [
                "idestado" => 26,
                "nome" => "Buenos Aires",
            ],
            [
                "idestado" => 26,
                "nome" => "Buíque",
            ],
            [
                "idestado" => 26,
                "nome" => "Cabo de Santo Agostinho",
            ],
            [
                "idestado" => 26,
                "nome" => "Cabrobó",
            ],
            [
                "idestado" => 26,
                "nome" => "Cachoeirinha",
            ],
            [
                "idestado" => 26,
                "nome" => "Caetés",
            ],
            [
                "idestado" => 26,
                "nome" => "Calçado",
            ],
            [
                "idestado" => 26,
                "nome" => "Calumbi",
            ],
            [
                "idestado" => 26,
                "nome" => "Camaragibe",
            ],
            [
                "idestado" => 26,
                "nome" => "Camocim de São Félix",
            ],
            [
                "idestado" => 26,
                "nome" => "Camutanga",
            ],
            [
                "idestado" => 26,
                "nome" => "Canhotinho",
            ],
            [
                "idestado" => 26,
                "nome" => "Capoeiras",
            ],
            [
                "idestado" => 26,
                "nome" => "Carnaíba",
            ],
            [
                "idestado" => 26,
                "nome" => "Carnaubeira da Penha",
            ],
            [
                "idestado" => 26,
                "nome" => "Carpina",
            ],
            [
                "idestado" => 26,
                "nome" => "Caruaru",
            ],
            [
                "idestado" => 26,
                "nome" => "Casinhas",
            ],
            [
                "idestado" => 26,
                "nome" => "Catende",
            ],
            [
                "idestado" => 26,
                "nome" => "Cedro",
            ],
            [
                "idestado" => 26,
                "nome" => "Chã de Alegria",
            ],
            [
                "idestado" => 26,
                "nome" => "Chã Grande",
            ],
            [
                "idestado" => 26,
                "nome" => "Condado",
            ],
            [
                "idestado" => 26,
                "nome" => "Correntes",
            ],
            [
                "idestado" => 26,
                "nome" => "Cortês",
            ],
            [
                "idestado" => 26,
                "nome" => "Cumaru",
            ],
            [
                "idestado" => 26,
                "nome" => "Cupira",
            ],
            [
                "idestado" => 26,
                "nome" => "Custódia",
            ],
            [
                "idestado" => 26,
                "nome" => "Dormentes",
            ],
            [
                "idestado" => 26,
                "nome" => "Escada",
            ],
            [
                "idestado" => 26,
                "nome" => "Exu",
            ],
            [
                "idestado" => 26,
                "nome" => "Feira Nova",
            ],
            [
                "idestado" => 26,
                "nome" => "Fernando de Noronha",
            ],
            [
                "idestado" => 26,
                "nome" => "Ferreiros",
            ],
            [
                "idestado" => 26,
                "nome" => "Flores",
            ],
            [
                "idestado" => 26,
                "nome" => "Floresta",
            ],
            [
                "idestado" => 26,
                "nome" => "Frei Miguelinho",
            ],
            [
                "idestado" => 26,
                "nome" => "Gameleira",
            ],
            [
                "idestado" => 26,
                "nome" => "Garanhuns",
            ],
            [
                "idestado" => 26,
                "nome" => "Glória do Goitá",
            ],
            [
                "idestado" => 26,
                "nome" => "Goiana",
            ],
            [
                "idestado" => 26,
                "nome" => "Granito",
            ],
            [
                "idestado" => 26,
                "nome" => "Gravatá",
            ],
            [
                "idestado" => 26,
                "nome" => "Iati",
            ],
            [
                "idestado" => 26,
                "nome" => "Ibimirim",
            ],
            [
                "idestado" => 26,
                "nome" => "Ibirajuba",
            ],
            [
                "idestado" => 26,
                "nome" => "Igarassu",
            ],
            [
                "idestado" => 26,
                "nome" => "Iguaracy",
            ],
            [
                "idestado" => 26,
                "nome" => "Ilha de Itamaracá",
            ],
            [
                "idestado" => 26,
                "nome" => "Inajá",
            ],
            [
                "idestado" => 26,
                "nome" => "Ingazeira",
            ],
            [
                "idestado" => 26,
                "nome" => "Ipojuca",
            ],
            [
                "idestado" => 26,
                "nome" => "Ipubi",
            ],
            [
                "idestado" => 26,
                "nome" => "Itacuruba",
            ],
            [
                "idestado" => 26,
                "nome" => "Itaíba",
            ],
            [
                "idestado" => 26,
                "nome" => "Itambé",
            ],
            [
                "idestado" => 26,
                "nome" => "Itapetim",
            ],
            [
                "idestado" => 26,
                "nome" => "Itapissuma",
            ],
            [
                "idestado" => 26,
                "nome" => "Itaquitinga",
            ],
            [
                "idestado" => 26,
                "nome" => "Jaboatão dos Guararapes",
            ],
            [
                "idestado" => 26,
                "nome" => "Jaqueira",
            ],
            [
                "idestado" => 26,
                "nome" => "Jataúba",
            ],
            [
                "idestado" => 26,
                "nome" => "Jatobá",
            ],
            [
                "idestado" => 26,
                "nome" => "João Alfredo",
            ],
            [
                "idestado" => 26,
                "nome" => "Joaquim Nabuco",
            ],
            [
                "idestado" => 26,
                "nome" => "Jucati",
            ],
            [
                "idestado" => 26,
                "nome" => "Jupi",
            ],
            [
                "idestado" => 26,
                "nome" => "Jurema",
            ],
            [
                "idestado" => 26,
                "nome" => "Lagoa de Itaenga",
            ],
            [
                "idestado" => 26,
                "nome" => "Lagoa do Carro",
            ],
            [
                "idestado" => 26,
                "nome" => "Lagoa do Ouro",
            ],
            [
                "idestado" => 26,
                "nome" => "Lagoa dos Gatos",
            ],
            [
                "idestado" => 26,
                "nome" => "Lagoa Grande",
            ],
            [
                "idestado" => 26,
                "nome" => "Lajedo",
            ],
            [
                "idestado" => 26,
                "nome" => "Limoeiro",
            ],
            [
                "idestado" => 26,
                "nome" => "Macaparana",
            ],
            [
                "idestado" => 26,
                "nome" => "Machados",
            ],
            [
                "idestado" => 26,
                "nome" => "Manari",
            ],
            [
                "idestado" => 26,
                "nome" => "Maraial",
            ],
            [
                "idestado" => 26,
                "nome" => "Mirandiba",
            ],
            [
                "idestado" => 26,
                "nome" => "Moreilândia",
            ],
            [
                "idestado" => 26,
                "nome" => "Moreno",
            ],
            [
                "idestado" => 26,
                "nome" => "Nazaré da Mata",
            ],
            [
                "idestado" => 26,
                "nome" => "Olinda",
            ],
            [
                "idestado" => 26,
                "nome" => "Orobó",
            ],
            [
                "idestado" => 26,
                "nome" => "Orocó",
            ],
            [
                "idestado" => 26,
                "nome" => "Ouricuri",
            ],
            [
                "idestado" => 26,
                "nome" => "Palmares",
            ],
            [
                "idestado" => 26,
                "nome" => "Palmeirina",
            ],
            [
                "idestado" => 26,
                "nome" => "Panelas",
            ],
            [
                "idestado" => 26,
                "nome" => "Paranatama",
            ],
            [
                "idestado" => 26,
                "nome" => "Parnamirim",
            ],
            [
                "idestado" => 26,
                "nome" => "Passira",
            ],
            [
                "idestado" => 26,
                "nome" => "Paudalho",
            ],
            [
                "idestado" => 26,
                "nome" => "Paulista",
            ],
            [
                "idestado" => 26,
                "nome" => "Pedra",
            ],
            [
                "idestado" => 26,
                "nome" => "Pesqueira",
            ],
            [
                "idestado" => 26,
                "nome" => "Petrolândia",
            ],
            [
                "idestado" => 26,
                "nome" => "Petrolina",
            ],
            [
                "idestado" => 26,
                "nome" => "Poção",
            ],
            [
                "idestado" => 26,
                "nome" => "Pombos",
            ],
            [
                "idestado" => 26,
                "nome" => "Primavera",
            ],
            [
                "idestado" => 26,
                "nome" => "Quipapá",
            ],
            [
                "idestado" => 26,
                "nome" => "Quixaba",
            ],
            [
                "idestado" => 26,
                "nome" => "Recife",
            ],
            [
                "idestado" => 26,
                "nome" => "Riacho das Almas",
            ],
            [
                "idestado" => 26,
                "nome" => "Ribeirão",
            ],
            [
                "idestado" => 26,
                "nome" => "Rio Formoso",
            ],
            [
                "idestado" => 26,
                "nome" => "Sairé",
            ],
            [
                "idestado" => 26,
                "nome" => "Salgadinho",
            ],
            [
                "idestado" => 26,
                "nome" => "Salgueiro",
            ],
            [
                "idestado" => 26,
                "nome" => "Saloá",
            ],
            [
                "idestado" => 26,
                "nome" => "Sanharó",
            ],
            [
                "idestado" => 26,
                "nome" => "Santa Cruz",
            ],
            [
                "idestado" => 26,
                "nome" => "Santa Cruz da Baixa Verde",
            ],
            [
                "idestado" => 26,
                "nome" => "Santa Cruz do Capibaribe",
            ],
            [
                "idestado" => 26,
                "nome" => "Santa Filomena",
            ],
            [
                "idestado" => 26,
                "nome" => "Santa Maria da Boa Vista",
            ],
            [
                "idestado" => 26,
                "nome" => "Santa Maria do Cambucá",
            ],
            [
                "idestado" => 26,
                "nome" => "Santa Terezinha",
            ],
            [
                "idestado" => 26,
                "nome" => "São Benedito do Sul",
            ],
            [
                "idestado" => 26,
                "nome" => "São Bento do Una",
            ],
            [
                "idestado" => 26,
                "nome" => "São Caitano",
            ],
            [
                "idestado" => 26,
                "nome" => "São João",
            ],
            [
                "idestado" => 26,
                "nome" => "São Joaquim do Monte",
            ],
            [
                "idestado" => 26,
                "nome" => "São José da Coroa Grande",
            ],
            [
                "idestado" => 26,
                "nome" => "São José do Belmonte",
            ],
            [
                "idestado" => 26,
                "nome" => "São José do Egito",
            ],
            [
                "idestado" => 26,
                "nome" => "São Lourenço da Mata",
            ],
            [
                "idestado" => 26,
                "nome" => "São Vicente Férrer",
            ],
            [
                "idestado" => 26,
                "nome" => "Serra Talhada",
            ],
            [
                "idestado" => 26,
                "nome" => "Serrita",
            ],
            [
                "idestado" => 26,
                "nome" => "Sertânia",
            ],
            [
                "idestado" => 26,
                "nome" => "Sirinhaém",
            ],
            [
                "idestado" => 26,
                "nome" => "Solidão",
            ],
            [
                "idestado" => 26,
                "nome" => "Surubim",
            ],
            [
                "idestado" => 26,
                "nome" => "Tabira",
            ],
            [
                "idestado" => 26,
                "nome" => "Tacaimbó",
            ],
            [
                "idestado" => 26,
                "nome" => "Tacaratu",
            ],
            [
                "idestado" => 26,
                "nome" => "Tamandaré",
            ],
            [
                "idestado" => 26,
                "nome" => "Taquaritinga do Norte",
            ],
            [
                "idestado" => 26,
                "nome" => "Terezinha",
            ],
            [
                "idestado" => 26,
                "nome" => "Terra Nova",
            ],
            [
                "idestado" => 26,
                "nome" => "Timbaúba",
            ],
            [
                "idestado" => 26,
                "nome" => "Toritama",
            ],
            [
                "idestado" => 26,
                "nome" => "Tracunhaém",
            ],
            [
                "idestado" => 26,
                "nome" => "Trindade",
            ],
            [
                "idestado" => 26,
                "nome" => "Triunfo",
            ],
            [
                "idestado" => 26,
                "nome" => "Tupanatinga",
            ],
            [
                "idestado" => 26,
                "nome" => "Tuparetama",
            ],
            [
                "idestado" => 26,
                "nome" => "Venturosa",
            ],
            [
                "idestado" => 26,
                "nome" => "Verdejante",
            ],
            [
                "idestado" => 26,
                "nome" => "Vertente do Lério",
            ],
            [
                "idestado" => 26,
                "nome" => "Vertentes",
            ],
            [
                "idestado" => 26,
                "nome" => "Vicência",
            ],
            [
                "idestado" => 26,
                "nome" => "Vitória de Santo Antão",
            ],
            [
                "idestado" => 26,
                "nome" => "Xexéu",
            ],
            [
                "idestado" => 27,
                "nome" => "Água Branca",
            ],
            [
                "idestado" => 27,
                "nome" => "Anadia",
            ],
            [
                "idestado" => 27,
                "nome" => "Arapiraca",
            ],
            [
                "idestado" => 27,
                "nome" => "Atalaia",
            ],
            [
                "idestado" => 27,
                "nome" => "Barra de Santo Antônio",
            ],
            [
                "idestado" => 27,
                "nome" => "Barra de São Miguel",
            ],
            [
                "idestado" => 27,
                "nome" => "Batalha",
            ],
            [
                "idestado" => 27,
                "nome" => "Belém",
            ],
            [
                "idestado" => 27,
                "nome" => "Belo Monte",
            ],
            [
                "idestado" => 27,
                "nome" => "Boca da Mata",
            ],
            [
                "idestado" => 27,
                "nome" => "Branquinha",
            ],
            [
                "idestado" => 27,
                "nome" => "Cacimbinhas",
            ],
            [
                "idestado" => 27,
                "nome" => "Cajueiro",
            ],
            [
                "idestado" => 27,
                "nome" => "Campestre",
            ],
            [
                "idestado" => 27,
                "nome" => "Campo Alegre",
            ],
            [
                "idestado" => 27,
                "nome" => "Campo Grande",
            ],
            [
                "idestado" => 27,
                "nome" => "Canapi",
            ],
            [
                "idestado" => 27,
                "nome" => "Capela",
            ],
            [
                "idestado" => 27,
                "nome" => "Carneiros",
            ],
            [
                "idestado" => 27,
                "nome" => "Chã Preta",
            ],
            [
                "idestado" => 27,
                "nome" => "Coité do Nóia",
            ],
            [
                "idestado" => 27,
                "nome" => "Colônia Leopoldina",
            ],
            [
                "idestado" => 27,
                "nome" => "Coqueiro Seco",
            ],
            [
                "idestado" => 27,
                "nome" => "Coruripe",
            ],
            [
                "idestado" => 27,
                "nome" => "Craíbas",
            ],
            [
                "idestado" => 27,
                "nome" => "Delmiro Gouveia",
            ],
            [
                "idestado" => 27,
                "nome" => "Dois Riachos",
            ],
            [
                "idestado" => 27,
                "nome" => "Estrela de Alagoas",
            ],
            [
                "idestado" => 27,
                "nome" => "Feira Grande",
            ],
            [
                "idestado" => 27,
                "nome" => "Feliz Deserto",
            ],
            [
                "idestado" => 27,
                "nome" => "Flexeiras",
            ],
            [
                "idestado" => 27,
                "nome" => "Girau do Ponciano",
            ],
            [
                "idestado" => 27,
                "nome" => "Ibateguara",
            ],
            [
                "idestado" => 27,
                "nome" => "Igaci",
            ],
            [
                "idestado" => 27,
                "nome" => "Igreja Nova",
            ],
            [
                "idestado" => 27,
                "nome" => "Inhapi",
            ],
            [
                "idestado" => 27,
                "nome" => "Jacaré dos Homens",
            ],
            [
                "idestado" => 27,
                "nome" => "Jacuípe",
            ],
            [
                "idestado" => 27,
                "nome" => "Japaratinga",
            ],
            [
                "idestado" => 27,
                "nome" => "Jaramataia",
            ],
            [
                "idestado" => 27,
                "nome" => "Jequiá da Praia",
            ],
            [
                "idestado" => 27,
                "nome" => "Joaquim Gomes",
            ],
            [
                "idestado" => 27,
                "nome" => "Jundiá",
            ],
            [
                "idestado" => 27,
                "nome" => "Junqueiro",
            ],
            [
                "idestado" => 27,
                "nome" => "Lagoa da Canoa",
            ],
            [
                "idestado" => 27,
                "nome" => "Limoeiro de Anadia",
            ],
            [
                "idestado" => 27,
                "nome" => "Maceió",
            ],
            [
                "idestado" => 27,
                "nome" => "Major Isidoro",
            ],
            [
                "idestado" => 27,
                "nome" => "Mar Vermelho",
            ],
            [
                "idestado" => 27,
                "nome" => "Maragogi",
            ],
            [
                "idestado" => 27,
                "nome" => "Maravilha",
            ],
            [
                "idestado" => 27,
                "nome" => "Marechal Deodoro",
            ],
            [
                "idestado" => 27,
                "nome" => "Maribondo",
            ],
            [
                "idestado" => 27,
                "nome" => "Mata Grande",
            ],
            [
                "idestado" => 27,
                "nome" => "Matriz de Camaragibe",
            ],
            [
                "idestado" => 27,
                "nome" => "Messias",
            ],
            [
                "idestado" => 27,
                "nome" => "Minador do Negrão",
            ],
            [
                "idestado" => 27,
                "nome" => "Monteirópolis",
            ],
            [
                "idestado" => 27,
                "nome" => "Murici",
            ],
            [
                "idestado" => 27,
                "nome" => "Novo Lino",
            ],
            [
                "idestado" => 27,
                "nome" => "Olho d'Água das Flores",
            ],
            [
                "idestado" => 27,
                "nome" => "Olho d'Água do Casado",
            ],
            [
                "idestado" => 27,
                "nome" => "Olho d'Água Grande",
            ],
            [
                "idestado" => 27,
                "nome" => "Olivença",
            ],
            [
                "idestado" => 27,
                "nome" => "Ouro Branco",
            ],
            [
                "idestado" => 27,
                "nome" => "Palestina",
            ],
            [
                "idestado" => 27,
                "nome" => "Palmeira dos Índios",
            ],
            [
                "idestado" => 27,
                "nome" => "Pão de Açúcar",
            ],
            [
                "idestado" => 27,
                "nome" => "Pariconha",
            ],
            [
                "idestado" => 27,
                "nome" => "Paripueira",
            ],
            [
                "idestado" => 27,
                "nome" => "Passo de Camaragibe",
            ],
            [
                "idestado" => 27,
                "nome" => "Paulo Jacinto",
            ],
            [
                "idestado" => 27,
                "nome" => "Penedo",
            ],
            [
                "idestado" => 27,
                "nome" => "Piaçabuçu",
            ],
            [
                "idestado" => 27,
                "nome" => "Pilar",
            ],
            [
                "idestado" => 27,
                "nome" => "Pindoba",
            ],
            [
                "idestado" => 27,
                "nome" => "Piranhas",
            ],
            [
                "idestado" => 27,
                "nome" => "Poço das Trincheiras",
            ],
            [
                "idestado" => 27,
                "nome" => "Porto Calvo",
            ],
            [
                "idestado" => 27,
                "nome" => "Porto de Pedras",
            ],
            [
                "idestado" => 27,
                "nome" => "Porto Real do Colégio",
            ],
            [
                "idestado" => 27,
                "nome" => "Quebrangulo",
            ],
            [
                "idestado" => 27,
                "nome" => "Rio Largo",
            ],
            [
                "idestado" => 27,
                "nome" => "Roteiro",
            ],
            [
                "idestado" => 27,
                "nome" => "Santa Luzia do Norte",
            ],
            [
                "idestado" => 27,
                "nome" => "Santana do Ipanema",
            ],
            [
                "idestado" => 27,
                "nome" => "Santana do Mundaú",
            ],
            [
                "idestado" => 27,
                "nome" => "São Brás",
            ],
            [
                "idestado" => 27,
                "nome" => "São José da Laje",
            ],
            [
                "idestado" => 27,
                "nome" => "São José da Tapera",
            ],
            [
                "idestado" => 27,
                "nome" => "São Luís do Quitunde",
            ],
            [
                "idestado" => 27,
                "nome" => "São Miguel dos Campos",
            ],
            [
                "idestado" => 27,
                "nome" => "São Miguel dos Milagres",
            ],
            [
                "idestado" => 27,
                "nome" => "São Sebastião",
            ],
            [
                "idestado" => 27,
                "nome" => "Satuba",
            ],
            [
                "idestado" => 27,
                "nome" => "Senador Rui Palmeira",
            ],
            [
                "idestado" => 27,
                "nome" => "Tanque d'Arca",
            ],
            [
                "idestado" => 27,
                "nome" => "Taquarana",
            ],
            [
                "idestado" => 27,
                "nome" => "Teotônio Vilela",
            ],
            [
                "idestado" => 27,
                "nome" => "Traipu",
            ],
            [
                "idestado" => 27,
                "nome" => "União dos Palmares",
            ],
            [
                "idestado" => 27,
                "nome" => "Viçosa",
            ],
            [
                "idestado" => 28,
                "nome" => "Amparo do São Francisco",
            ],
            [
                "idestado" => 28,
                "nome" => "Aquidabã",
            ],
            [
                "idestado" => 28,
                "nome" => "Aracaju",
            ],
            [
                "idestado" => 28,
                "nome" => "Arauá",
            ],
            [
                "idestado" => 28,
                "nome" => "Areia Branca",
            ],
            [
                "idestado" => 28,
                "nome" => "Barra dos Coqueiros",
            ],
            [
                "idestado" => 28,
                "nome" => "Boquim",
            ],
            [
                "idestado" => 28,
                "nome" => "Brejo Grande",
            ],
            [
                "idestado" => 28,
                "nome" => "Campo do Brito",
            ],
            [
                "idestado" => 28,
                "nome" => "Canhoba",
            ],
            [
                "idestado" => 28,
                "nome" => "Canindé de São Francisco",
            ],
            [
                "idestado" => 28,
                "nome" => "Capela",
            ],
            [
                "idestado" => 28,
                "nome" => "Carira",
            ],
            [
                "idestado" => 28,
                "nome" => "Carmópolis",
            ],
            [
                "idestado" => 28,
                "nome" => "Cedro de São João",
            ],
            [
                "idestado" => 28,
                "nome" => "Cristinápolis",
            ],
            [
                "idestado" => 28,
                "nome" => "Cumbe",
            ],
            [
                "idestado" => 28,
                "nome" => "Divina Pastora",
            ],
            [
                "idestado" => 28,
                "nome" => "Estância",
            ],
            [
                "idestado" => 28,
                "nome" => "Feira Nova",
            ],
            [
                "idestado" => 28,
                "nome" => "Frei Paulo",
            ],
            [
                "idestado" => 28,
                "nome" => "Gararu",
            ],
            [
                "idestado" => 28,
                "nome" => "General Maynard",
            ],
            [
                "idestado" => 28,
                "nome" => "Gracho Cardoso",
            ],
            [
                "idestado" => 28,
                "nome" => "Ilha das Flores",
            ],
            [
                "idestado" => 28,
                "nome" => "Indiaroba",
            ],
            [
                "idestado" => 28,
                "nome" => "Itabaiana",
            ],
            [
                "idestado" => 28,
                "nome" => "Itabaianinha",
            ],
            [
                "idestado" => 28,
                "nome" => "Itabi",
            ],
            [
                "idestado" => 28,
                "nome" => "Itaporanga d'Ajuda",
            ],
            [
                "idestado" => 28,
                "nome" => "Japaratuba",
            ],
            [
                "idestado" => 28,
                "nome" => "Japoatã",
            ],
            [
                "idestado" => 28,
                "nome" => "Lagarto",
            ],
            [
                "idestado" => 28,
                "nome" => "Laranjeiras",
            ],
            [
                "idestado" => 28,
                "nome" => "Macambira",
            ],
            [
                "idestado" => 28,
                "nome" => "Malhada dos Bois",
            ],
            [
                "idestado" => 28,
                "nome" => "Malhador",
            ],
            [
                "idestado" => 28,
                "nome" => "Maruim",
            ],
            [
                "idestado" => 28,
                "nome" => "Moita Bonita",
            ],
            [
                "idestado" => 28,
                "nome" => "Monte Alegre de Sergipe",
            ],
            [
                "idestado" => 28,
                "nome" => "Muribeca",
            ],
            [
                "idestado" => 28,
                "nome" => "Neópolis",
            ],
            [
                "idestado" => 28,
                "nome" => "Nossa Senhora Aparecida",
            ],
            [
                "idestado" => 28,
                "nome" => "Nossa Senhora da Glória",
            ],
            [
                "idestado" => 28,
                "nome" => "Nossa Senhora das Dores",
            ],
            [
                "idestado" => 28,
                "nome" => "Nossa Senhora de Lourdes",
            ],
            [
                "idestado" => 28,
                "nome" => "Nossa Senhora do Socorro",
            ],
            [
                "idestado" => 28,
                "nome" => "Pacatuba",
            ],
            [
                "idestado" => 28,
                "nome" => "Pedra Mole",
            ],
            [
                "idestado" => 28,
                "nome" => "Pedrinhas",
            ],
            [
                "idestado" => 28,
                "nome" => "Pinhão",
            ],
            [
                "idestado" => 28,
                "nome" => "Pirambu",
            ],
            [
                "idestado" => 28,
                "nome" => "Poço Redondo",
            ],
            [
                "idestado" => 28,
                "nome" => "Poço Verde",
            ],
            [
                "idestado" => 28,
                "nome" => "Porto da Folha",
            ],
            [
                "idestado" => 28,
                "nome" => "Propriá",
            ],
            [
                "idestado" => 28,
                "nome" => "Riachão do Dantas",
            ],
            [
                "idestado" => 28,
                "nome" => "Riachuelo",
            ],
            [
                "idestado" => 28,
                "nome" => "Ribeirópolis",
            ],
            [
                "idestado" => 28,
                "nome" => "Rosário do Catete",
            ],
            [
                "idestado" => 28,
                "nome" => "Salgado",
            ],
            [
                "idestado" => 28,
                "nome" => "Santa Luzia do Itanhy",
            ],
            [
                "idestado" => 28,
                "nome" => "Santa Rosa de Lima",
            ],
            [
                "idestado" => 28,
                "nome" => "Santana do São Francisco",
            ],
            [
                "idestado" => 28,
                "nome" => "Santo Amaro das Brotas",
            ],
            [
                "idestado" => 28,
                "nome" => "São Cristóvão",
            ],
            [
                "idestado" => 28,
                "nome" => "São Domingos",
            ],
            [
                "idestado" => 28,
                "nome" => "São Francisco",
            ],
            [
                "idestado" => 28,
                "nome" => "São Miguel do Aleixo",
            ],
            [
                "idestado" => 28,
                "nome" => "Simão Dias",
            ],
            [
                "idestado" => 28,
                "nome" => "Siriri",
            ],
            [
                "idestado" => 28,
                "nome" => "Telha",
            ],
            [
                "idestado" => 28,
                "nome" => "Tobias Barreto",
            ],
            [
                "idestado" => 28,
                "nome" => "Tomar do Geru",
            ],
            [
                "idestado" => 28,
                "nome" => "Umbaúba",
            ],
            [
                "idestado" => 29,
                "nome" => "Abaíra",
            ],
            [
                "idestado" => 29,
                "nome" => "Abaré",
            ],
            [
                "idestado" => 29,
                "nome" => "Acajutiba",
            ],
            [
                "idestado" => 29,
                "nome" => "Adustina",
            ],
            [
                "idestado" => 29,
                "nome" => "Água Fria",
            ],
            [
                "idestado" => 29,
                "nome" => "Aiquara",
            ],
            [
                "idestado" => 29,
                "nome" => "Alagoinhas",
            ],
            [
                "idestado" => 29,
                "nome" => "Alcobaça",
            ],
            [
                "idestado" => 29,
                "nome" => "Almadina",
            ],
            [
                "idestado" => 29,
                "nome" => "Amargosa",
            ],
            [
                "idestado" => 29,
                "nome" => "Amélia Rodrigues",
            ],
            [
                "idestado" => 29,
                "nome" => "América Dourada",
            ],
            [
                "idestado" => 29,
                "nome" => "Anagé",
            ],
            [
                "idestado" => 29,
                "nome" => "Andaraí",
            ],
            [
                "idestado" => 29,
                "nome" => "Andorinha",
            ],
            [
                "idestado" => 29,
                "nome" => "Angical",
            ],
            [
                "idestado" => 29,
                "nome" => "Anguera",
            ],
            [
                "idestado" => 29,
                "nome" => "Antas",
            ],
            [
                "idestado" => 29,
                "nome" => "Antônio Cardoso",
            ],
            [
                "idestado" => 29,
                "nome" => "Antônio Gonçalves",
            ],
            [
                "idestado" => 29,
                "nome" => "Aporá",
            ],
            [
                "idestado" => 29,
                "nome" => "Apuarema",
            ],
            [
                "idestado" => 29,
                "nome" => "Araçás",
            ],
            [
                "idestado" => 29,
                "nome" => "Aracatu",
            ],
            [
                "idestado" => 29,
                "nome" => "Araci",
            ],
            [
                "idestado" => 29,
                "nome" => "Aramari",
            ],
            [
                "idestado" => 29,
                "nome" => "Arataca",
            ],
            [
                "idestado" => 29,
                "nome" => "Aratuípe",
            ],
            [
                "idestado" => 29,
                "nome" => "Aurelino Leal",
            ],
            [
                "idestado" => 29,
                "nome" => "Baianópolis",
            ],
            [
                "idestado" => 29,
                "nome" => "Baixa Grande",
            ],
            [
                "idestado" => 29,
                "nome" => "Banzaê",
            ],
            [
                "idestado" => 29,
                "nome" => "Barra",
            ],
            [
                "idestado" => 29,
                "nome" => "Barra da Estiva",
            ],
            [
                "idestado" => 29,
                "nome" => "Barra do Choça",
            ],
            [
                "idestado" => 29,
                "nome" => "Barra do Mendes",
            ],
            [
                "idestado" => 29,
                "nome" => "Barra do Rocha",
            ],
            [
                "idestado" => 29,
                "nome" => "Barreiras",
            ],
            [
                "idestado" => 29,
                "nome" => "Barro Alto",
            ],
            [
                "idestado" => 29,
                "nome" => "Barro Preto",
            ],
            [
                "idestado" => 29,
                "nome" => "Barrocas",
            ],
            [
                "idestado" => 29,
                "nome" => "Belmonte",
            ],
            [
                "idestado" => 29,
                "nome" => "Belo Campo",
            ],
            [
                "idestado" => 29,
                "nome" => "Biritinga",
            ],
            [
                "idestado" => 29,
                "nome" => "Boa Nova",
            ],
            [
                "idestado" => 29,
                "nome" => "Boa Vista do Tupim",
            ],
            [
                "idestado" => 29,
                "nome" => "Bom Jesus da Lapa",
            ],
            [
                "idestado" => 29,
                "nome" => "Bom Jesus da Serra",
            ],
            [
                "idestado" => 29,
                "nome" => "Boninal",
            ],
            [
                "idestado" => 29,
                "nome" => "Bonito",
            ],
            [
                "idestado" => 29,
                "nome" => "Boquira",
            ],
            [
                "idestado" => 29,
                "nome" => "Botuporã",
            ],
            [
                "idestado" => 29,
                "nome" => "Brejões",
            ],
            [
                "idestado" => 29,
                "nome" => "Brejolândia",
            ],
            [
                "idestado" => 29,
                "nome" => "Brotas de Macaúbas",
            ],
            [
                "idestado" => 29,
                "nome" => "Brumado",
            ],
            [
                "idestado" => 29,
                "nome" => "Buerarema",
            ],
            [
                "idestado" => 29,
                "nome" => "Buritirama",
            ],
            [
                "idestado" => 29,
                "nome" => "Caatiba",
            ],
            [
                "idestado" => 29,
                "nome" => "Cabaceiras do Paraguaçu",
            ],
            [
                "idestado" => 29,
                "nome" => "Cachoeira",
            ],
            [
                "idestado" => 29,
                "nome" => "Caculé",
            ],
            [
                "idestado" => 29,
                "nome" => "Caém",
            ],
            [
                "idestado" => 29,
                "nome" => "Caetanos",
            ],
            [
                "idestado" => 29,
                "nome" => "Caetité",
            ],
            [
                "idestado" => 29,
                "nome" => "Cafarnaum",
            ],
            [
                "idestado" => 29,
                "nome" => "Cairu",
            ],
            [
                "idestado" => 29,
                "nome" => "Caldeirão Grande",
            ],
            [
                "idestado" => 29,
                "nome" => "Camacan",
            ],
            [
                "idestado" => 29,
                "nome" => "Camaçari",
            ],
            [
                "idestado" => 29,
                "nome" => "Camamu",
            ],
            [
                "idestado" => 29,
                "nome" => "Campo Alegre de Lourdes",
            ],
            [
                "idestado" => 29,
                "nome" => "Campo Formoso",
            ],
            [
                "idestado" => 29,
                "nome" => "Canápolis",
            ],
            [
                "idestado" => 29,
                "nome" => "Canarana",
            ],
            [
                "idestado" => 29,
                "nome" => "Canavieiras",
            ],
            [
                "idestado" => 29,
                "nome" => "Candeal",
            ],
            [
                "idestado" => 29,
                "nome" => "Candeias",
            ],
            [
                "idestado" => 29,
                "nome" => "Candiba",
            ],
            [
                "idestado" => 29,
                "nome" => "Cândido Sales",
            ],
            [
                "idestado" => 29,
                "nome" => "Cansanção",
            ],
            [
                "idestado" => 29,
                "nome" => "Canudos",
            ],
            [
                "idestado" => 29,
                "nome" => "Capela do Alto Alegre",
            ],
            [
                "idestado" => 29,
                "nome" => "Capim Grosso",
            ],
            [
                "idestado" => 29,
                "nome" => "Caraíbas",
            ],
            [
                "idestado" => 29,
                "nome" => "Caravelas",
            ],
            [
                "idestado" => 29,
                "nome" => "Cardeal da Silva",
            ],
            [
                "idestado" => 29,
                "nome" => "Carinhanha",
            ],
            [
                "idestado" => 29,
                "nome" => "Casa Nova",
            ],
            [
                "idestado" => 29,
                "nome" => "Castro Alves",
            ],
            [
                "idestado" => 29,
                "nome" => "Catolândia",
            ],
            [
                "idestado" => 29,
                "nome" => "Catu",
            ],
            [
                "idestado" => 29,
                "nome" => "Caturama",
            ],
            [
                "idestado" => 29,
                "nome" => "Central",
            ],
            [
                "idestado" => 29,
                "nome" => "Chorrochó",
            ],
            [
                "idestado" => 29,
                "nome" => "Cícero Dantas",
            ],
            [
                "idestado" => 29,
                "nome" => "Cipó",
            ],
            [
                "idestado" => 29,
                "nome" => "Coaraci",
            ],
            [
                "idestado" => 29,
                "nome" => "Cocos",
            ],
            [
                "idestado" => 29,
                "nome" => "Conceição da Feira",
            ],
            [
                "idestado" => 29,
                "nome" => "Conceição do Almeida",
            ],
            [
                "idestado" => 29,
                "nome" => "Conceição do Coité",
            ],
            [
                "idestado" => 29,
                "nome" => "Conceição do Jacuípe",
            ],
            [
                "idestado" => 29,
                "nome" => "Conde",
            ],
            [
                "idestado" => 29,
                "nome" => "Condeúba",
            ],
            [
                "idestado" => 29,
                "nome" => "Contendas do Sincorá",
            ],
            [
                "idestado" => 29,
                "nome" => "Coração de Maria",
            ],
            [
                "idestado" => 29,
                "nome" => "Cordeiros",
            ],
            [
                "idestado" => 29,
                "nome" => "Coribe",
            ],
            [
                "idestado" => 29,
                "nome" => "Coronel João Sá",
            ],
            [
                "idestado" => 29,
                "nome" => "Correntina",
            ],
            [
                "idestado" => 29,
                "nome" => "Cotegipe",
            ],
            [
                "idestado" => 29,
                "nome" => "Cravolândia",
            ],
            [
                "idestado" => 29,
                "nome" => "Crisópolis",
            ],
            [
                "idestado" => 29,
                "nome" => "Cristópolis",
            ],
            [
                "idestado" => 29,
                "nome" => "Cruz das Almas",
            ],
            [
                "idestado" => 29,
                "nome" => "Curaçá",
            ],
            [
                "idestado" => 29,
                "nome" => "Dário Meira",
            ],
            [
                "idestado" => 29,
                "nome" => "Dias d'Ávila",
            ],
            [
                "idestado" => 29,
                "nome" => "Dom Basílio",
            ],
            [
                "idestado" => 29,
                "nome" => "Dom Macedo Costa",
            ],
            [
                "idestado" => 29,
                "nome" => "Elísio Medrado",
            ],
            [
                "idestado" => 29,
                "nome" => "Encruzilhada",
            ],
            [
                "idestado" => 29,
                "nome" => "Entre Rios",
            ],
            [
                "idestado" => 29,
                "nome" => "Érico Cardoso",
            ],
            [
                "idestado" => 29,
                "nome" => "Esplanada",
            ],
            [
                "idestado" => 29,
                "nome" => "Euclides da Cunha",
            ],
            [
                "idestado" => 29,
                "nome" => "Eunápolis",
            ],
            [
                "idestado" => 29,
                "nome" => "Fátima",
            ],
            [
                "idestado" => 29,
                "nome" => "Feira da Mata",
            ],
            [
                "idestado" => 29,
                "nome" => "Feira de Santana",
            ],
            [
                "idestado" => 29,
                "nome" => "Filadélfia",
            ],
            [
                "idestado" => 29,
                "nome" => "Firmino Alves",
            ],
            [
                "idestado" => 29,
                "nome" => "Floresta Azul",
            ],
            [
                "idestado" => 29,
                "nome" => "Formosa do Rio Preto",
            ],
            [
                "idestado" => 29,
                "nome" => "Gandu",
            ],
            [
                "idestado" => 29,
                "nome" => "Gavião",
            ],
            [
                "idestado" => 29,
                "nome" => "Gentio do Ouro",
            ],
            [
                "idestado" => 29,
                "nome" => "Glória",
            ],
            [
                "idestado" => 29,
                "nome" => "Gongogi",
            ],
            [
                "idestado" => 29,
                "nome" => "Governador Mangabeira",
            ],
            [
                "idestado" => 29,
                "nome" => "Guajeru",
            ],
            [
                "idestado" => 29,
                "nome" => "Guanambi",
            ],
            [
                "idestado" => 29,
                "nome" => "Guaratinga",
            ],
            [
                "idestado" => 29,
                "nome" => "Heliópolis",
            ],
            [
                "idestado" => 29,
                "nome" => "Iaçu",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibiassucê",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibicaraí",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibicoara",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibicuí",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibipeba",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibipitanga",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibiquera",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibirapitanga",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibirapuã",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibirataia",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibitiara",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibititá",
            ],
            [
                "idestado" => 29,
                "nome" => "Ibotirama",
            ],
            [
                "idestado" => 29,
                "nome" => "Ichu",
            ],
            [
                "idestado" => 29,
                "nome" => "Igaporã",
            ],
            [
                "idestado" => 29,
                "nome" => "Igrapiúna",
            ],
            [
                "idestado" => 29,
                "nome" => "Iguaí",
            ],
            [
                "idestado" => 29,
                "nome" => "Ilhéus",
            ],
            [
                "idestado" => 29,
                "nome" => "Inhambupe",
            ],
            [
                "idestado" => 29,
                "nome" => "Ipecaetá",
            ],
            [
                "idestado" => 29,
                "nome" => "Ipiaú",
            ],
            [
                "idestado" => 29,
                "nome" => "Ipirá",
            ],
            [
                "idestado" => 29,
                "nome" => "Ipupiara",
            ],
            [
                "idestado" => 29,
                "nome" => "Irajuba",
            ],
            [
                "idestado" => 29,
                "nome" => "Iramaia",
            ],
            [
                "idestado" => 29,
                "nome" => "Iraquara",
            ],
            [
                "idestado" => 29,
                "nome" => "Irará",
            ],
            [
                "idestado" => 29,
                "nome" => "Irecê",
            ],
            [
                "idestado" => 29,
                "nome" => "Itabela",
            ],
            [
                "idestado" => 29,
                "nome" => "Itaberaba",
            ],
            [
                "idestado" => 29,
                "nome" => "Itabuna",
            ],
            [
                "idestado" => 29,
                "nome" => "Itacaré",
            ],
            [
                "idestado" => 29,
                "nome" => "Itaeté",
            ],
            [
                "idestado" => 29,
                "nome" => "Itagi",
            ],
            [
                "idestado" => 29,
                "nome" => "Itagibá",
            ],
            [
                "idestado" => 29,
                "nome" => "Itagimirim",
            ],
            [
                "idestado" => 29,
                "nome" => "Itaguaçu da Bahia",
            ],
            [
                "idestado" => 29,
                "nome" => "Itaju do Colônia",
            ],
            [
                "idestado" => 29,
                "nome" => "Itajuípe",
            ],
            [
                "idestado" => 29,
                "nome" => "Itamaraju",
            ],
            [
                "idestado" => 29,
                "nome" => "Itamari",
            ],
            [
                "idestado" => 29,
                "nome" => "Itambé",
            ],
            [
                "idestado" => 29,
                "nome" => "Itanagra",
            ],
            [
                "idestado" => 29,
                "nome" => "Itanhém",
            ],
            [
                "idestado" => 29,
                "nome" => "Itaparica",
            ],
            [
                "idestado" => 29,
                "nome" => "Itapé",
            ],
            [
                "idestado" => 29,
                "nome" => "Itapebi",
            ],
            [
                "idestado" => 29,
                "nome" => "Itapetinga",
            ],
            [
                "idestado" => 29,
                "nome" => "Itapicuru",
            ],
            [
                "idestado" => 29,
                "nome" => "Itapitanga",
            ],
            [
                "idestado" => 29,
                "nome" => "Itaquara",
            ],
            [
                "idestado" => 29,
                "nome" => "Itarantim",
            ],
            [
                "idestado" => 29,
                "nome" => "Itatim",
            ],
            [
                "idestado" => 29,
                "nome" => "Itiruçu",
            ],
            [
                "idestado" => 29,
                "nome" => "Itiúba",
            ],
            [
                "idestado" => 29,
                "nome" => "Itororó",
            ],
            [
                "idestado" => 29,
                "nome" => "Ituaçu",
            ],
            [
                "idestado" => 29,
                "nome" => "Ituberá",
            ],
            [
                "idestado" => 29,
                "nome" => "Iuiu",
            ],
            [
                "idestado" => 29,
                "nome" => "Jaborandi",
            ],
            [
                "idestado" => 29,
                "nome" => "Jacaraci",
            ],
            [
                "idestado" => 29,
                "nome" => "Jacobina",
            ],
            [
                "idestado" => 29,
                "nome" => "Jaguaquara",
            ],
            [
                "idestado" => 29,
                "nome" => "Jaguarari",
            ],
            [
                "idestado" => 29,
                "nome" => "Jaguaripe",
            ],
            [
                "idestado" => 29,
                "nome" => "Jandaíra",
            ],
            [
                "idestado" => 29,
                "nome" => "Jequié",
            ],
            [
                "idestado" => 29,
                "nome" => "Jeremoabo",
            ],
            [
                "idestado" => 29,
                "nome" => "Jiquiriçá",
            ],
            [
                "idestado" => 29,
                "nome" => "Jitaúna",
            ],
            [
                "idestado" => 29,
                "nome" => "João Dourado",
            ],
            [
                "idestado" => 29,
                "nome" => "Juazeiro",
            ],
            [
                "idestado" => 29,
                "nome" => "Jucuruçu",
            ],
            [
                "idestado" => 29,
                "nome" => "Jussara",
            ],
            [
                "idestado" => 29,
                "nome" => "Jussari",
            ],
            [
                "idestado" => 29,
                "nome" => "Jussiape",
            ],
            [
                "idestado" => 29,
                "nome" => "Lafaiete Coutinho",
            ],
            [
                "idestado" => 29,
                "nome" => "Lagoa Real",
            ],
            [
                "idestado" => 29,
                "nome" => "Laje",
            ],
            [
                "idestado" => 29,
                "nome" => "Lajedão",
            ],
            [
                "idestado" => 29,
                "nome" => "Lajedinho",
            ],
            [
                "idestado" => 29,
                "nome" => "Lajedo do Tabocal",
            ],
            [
                "idestado" => 29,
                "nome" => "Lamarão",
            ],
            [
                "idestado" => 29,
                "nome" => "Lapão",
            ],
            [
                "idestado" => 29,
                "nome" => "Lauro de Freitas",
            ],
            [
                "idestado" => 29,
                "nome" => "Lençóis",
            ],
            [
                "idestado" => 29,
                "nome" => "Licínio de Almeida",
            ],
            [
                "idestado" => 29,
                "nome" => "Livramento de Nossa Senhora",
            ],
            [
                "idestado" => 29,
                "nome" => "Luís Eduardo Magalhães",
            ],
            [
                "idestado" => 29,
                "nome" => "Macajuba",
            ],
            [
                "idestado" => 29,
                "nome" => "Macarani",
            ],
            [
                "idestado" => 29,
                "nome" => "Macaúbas",
            ],
            [
                "idestado" => 29,
                "nome" => "Macururé",
            ],
            [
                "idestado" => 29,
                "nome" => "Madre de Deus",
            ],
            [
                "idestado" => 29,
                "nome" => "Maetinga",
            ],
            [
                "idestado" => 29,
                "nome" => "Maiquinique",
            ],
            [
                "idestado" => 29,
                "nome" => "Mairi",
            ],
            [
                "idestado" => 29,
                "nome" => "Malhada",
            ],
            [
                "idestado" => 29,
                "nome" => "Malhada de Pedras",
            ],
            [
                "idestado" => 29,
                "nome" => "Manoel Vitorino",
            ],
            [
                "idestado" => 29,
                "nome" => "Mansidão",
            ],
            [
                "idestado" => 29,
                "nome" => "Maracás",
            ],
            [
                "idestado" => 29,
                "nome" => "Maragogipe",
            ],
            [
                "idestado" => 29,
                "nome" => "Maraú",
            ],
            [
                "idestado" => 29,
                "nome" => "Marcionílio Souza",
            ],
            [
                "idestado" => 29,
                "nome" => "Mascote",
            ],
            [
                "idestado" => 29,
                "nome" => "Mata de São João",
            ],
            [
                "idestado" => 29,
                "nome" => "Matina",
            ],
            [
                "idestado" => 29,
                "nome" => "Medeiros Neto",
            ],
            [
                "idestado" => 29,
                "nome" => "Miguel Calmon",
            ],
            [
                "idestado" => 29,
                "nome" => "Milagres",
            ],
            [
                "idestado" => 29,
                "nome" => "Mirangaba",
            ],
            [
                "idestado" => 29,
                "nome" => "Mirante",
            ],
            [
                "idestado" => 29,
                "nome" => "Monte Santo",
            ],
            [
                "idestado" => 29,
                "nome" => "Morpará",
            ],
            [
                "idestado" => 29,
                "nome" => "Morro do Chapéu",
            ],
            [
                "idestado" => 29,
                "nome" => "Mortugaba",
            ],
            [
                "idestado" => 29,
                "nome" => "Mucugê",
            ],
            [
                "idestado" => 29,
                "nome" => "Mucuri",
            ],
            [
                "idestado" => 29,
                "nome" => "Mulungu do Morro",
            ],
            [
                "idestado" => 29,
                "nome" => "Mundo Novo",
            ],
            [
                "idestado" => 29,
                "nome" => "Muniz Ferreira",
            ],
            [
                "idestado" => 29,
                "nome" => "Muquém do São Francisco",
            ],
            [
                "idestado" => 29,
                "nome" => "Muritiba",
            ],
            [
                "idestado" => 29,
                "nome" => "Mutuípe",
            ],
            [
                "idestado" => 29,
                "nome" => "Nazaré",
            ],
            [
                "idestado" => 29,
                "nome" => "Nilo Peçanha",
            ],
            [
                "idestado" => 29,
                "nome" => "Nordestina",
            ],
            [
                "idestado" => 29,
                "nome" => "Nova Canaã",
            ],
            [
                "idestado" => 29,
                "nome" => "Nova Fátima",
            ],
            [
                "idestado" => 29,
                "nome" => "Nova Ibiá",
            ],
            [
                "idestado" => 29,
                "nome" => "Nova Itarana",
            ],
            [
                "idestado" => 29,
                "nome" => "Nova Redenção",
            ],
            [
                "idestado" => 29,
                "nome" => "Nova Soure",
            ],
            [
                "idestado" => 29,
                "nome" => "Nova Viçosa",
            ],
            [
                "idestado" => 29,
                "nome" => "Novo Horizonte",
            ],
            [
                "idestado" => 29,
                "nome" => "Novo Triunfo",
            ],
            [
                "idestado" => 29,
                "nome" => "Olindina",
            ],
            [
                "idestado" => 29,
                "nome" => "Oliveira dos Brejinhos",
            ],
            [
                "idestado" => 29,
                "nome" => "Ouriçangas",
            ],
            [
                "idestado" => 29,
                "nome" => "Ourolândia",
            ],
            [
                "idestado" => 29,
                "nome" => "Palmas de Monte Alto",
            ],
            [
                "idestado" => 29,
                "nome" => "Palmeiras",
            ],
            [
                "idestado" => 29,
                "nome" => "Paramirim",
            ],
            [
                "idestado" => 29,
                "nome" => "Paratinga",
            ],
            [
                "idestado" => 29,
                "nome" => "Paripiranga",
            ],
            [
                "idestado" => 29,
                "nome" => "Pau Brasil",
            ],
            [
                "idestado" => 29,
                "nome" => "Paulo Afonso",
            ],
            [
                "idestado" => 29,
                "nome" => "Pé de Serra",
            ],
            [
                "idestado" => 29,
                "nome" => "Pedrão",
            ],
            [
                "idestado" => 29,
                "nome" => "Pedro Alexandre",
            ],
            [
                "idestado" => 29,
                "nome" => "Piatã",
            ],
            [
                "idestado" => 29,
                "nome" => "Pilão Arcado",
            ],
            [
                "idestado" => 29,
                "nome" => "Pindaí",
            ],
            [
                "idestado" => 29,
                "nome" => "Pindobaçu",
            ],
            [
                "idestado" => 29,
                "nome" => "Pintadas",
            ],
            [
                "idestado" => 29,
                "nome" => "Piraí do Norte",
            ],
            [
                "idestado" => 29,
                "nome" => "Piripá",
            ],
            [
                "idestado" => 29,
                "nome" => "Piritiba",
            ],
            [
                "idestado" => 29,
                "nome" => "Planaltino",
            ],
            [
                "idestado" => 29,
                "nome" => "Planalto",
            ],
            [
                "idestado" => 29,
                "nome" => "Poções",
            ],
            [
                "idestado" => 29,
                "nome" => "Pojuca",
            ],
            [
                "idestado" => 29,
                "nome" => "Ponto Novo",
            ],
            [
                "idestado" => 29,
                "nome" => "Porto Seguro",
            ],
            [
                "idestado" => 29,
                "nome" => "Potiraguá",
            ],
            [
                "idestado" => 29,
                "nome" => "Prado",
            ],
            [
                "idestado" => 29,
                "nome" => "Presidente Dutra",
            ],
            [
                "idestado" => 29,
                "nome" => "Presidente Jânio Quadros",
            ],
            [
                "idestado" => 29,
                "nome" => "Presidente Tancredo Neves",
            ],
            [
                "idestado" => 29,
                "nome" => "Queimadas",
            ],
            [
                "idestado" => 29,
                "nome" => "Quijingue",
            ],
            [
                "idestado" => 29,
                "nome" => "Quixabeira",
            ],
            [
                "idestado" => 29,
                "nome" => "Rafael Jambeiro",
            ],
            [
                "idestado" => 29,
                "nome" => "Remanso",
            ],
            [
                "idestado" => 29,
                "nome" => "Retirolândia",
            ],
            [
                "idestado" => 29,
                "nome" => "Riachão das Neves",
            ],
            [
                "idestado" => 29,
                "nome" => "Riachão do Jacuípe",
            ],
            [
                "idestado" => 29,
                "nome" => "Riacho de Santana",
            ],
            [
                "idestado" => 29,
                "nome" => "Ribeira do Amparo",
            ],
            [
                "idestado" => 29,
                "nome" => "Ribeira do Pombal",
            ],
            [
                "idestado" => 29,
                "nome" => "Ribeirão do Largo",
            ],
            [
                "idestado" => 29,
                "nome" => "Rio de Contas",
            ],
            [
                "idestado" => 29,
                "nome" => "Rio do Antônio",
            ],
            [
                "idestado" => 29,
                "nome" => "Rio do Pires",
            ],
            [
                "idestado" => 29,
                "nome" => "Rio Real",
            ],
            [
                "idestado" => 29,
                "nome" => "Rodelas",
            ],
            [
                "idestado" => 29,
                "nome" => "Ruy Barbosa",
            ],
            [
                "idestado" => 29,
                "nome" => "Salinas da Margarida",
            ],
            [
                "idestado" => 29,
                "nome" => "Salvador",
            ],
            [
                "idestado" => 29,
                "nome" => "Santa Bárbara",
            ],
            [
                "idestado" => 29,
                "nome" => "Santa Brígida",
            ],
            [
                "idestado" => 29,
                "nome" => "Santa Cruz Cabrália",
            ],
            [
                "idestado" => 29,
                "nome" => "Santa Cruz da Vitória",
            ],
            [
                "idestado" => 29,
                "nome" => "Santa Inês",
            ],
            [
                "idestado" => 29,
                "nome" => "Santa Luzia",
            ],
            [
                "idestado" => 29,
                "nome" => "Santa Maria da Vitória",
            ],
            [
                "idestado" => 29,
                "nome" => "Santa Rita de Cássia",
            ],
            [
                "idestado" => 29,
                "nome" => "Santa Terezinha",
            ],
            [
                "idestado" => 29,
                "nome" => "Santaluz",
            ],
            [
                "idestado" => 29,
                "nome" => "Santana",
            ],
            [
                "idestado" => 29,
                "nome" => "Santanópolis",
            ],
            [
                "idestado" => 29,
                "nome" => "Santo Amaro",
            ],
            [
                "idestado" => 29,
                "nome" => "Santo Antônio de Jesus",
            ],
            [
                "idestado" => 29,
                "nome" => "Santo Estêvão",
            ],
            [
                "idestado" => 29,
                "nome" => "São Desidério",
            ],
            [
                "idestado" => 29,
                "nome" => "São Domingos",
            ],
            [
                "idestado" => 29,
                "nome" => "São Felipe",
            ],
            [
                "idestado" => 29,
                "nome" => "São Félix",
            ],
            [
                "idestado" => 29,
                "nome" => "São Félix do Coribe",
            ],
            [
                "idestado" => 29,
                "nome" => "São Francisco do Conde",
            ],
            [
                "idestado" => 29,
                "nome" => "São Gabriel",
            ],
            [
                "idestado" => 29,
                "nome" => "São Gonçalo dos Campos",
            ],
            [
                "idestado" => 29,
                "nome" => "São José da Vitória",
            ],
            [
                "idestado" => 29,
                "nome" => "São José do Jacuípe",
            ],
            [
                "idestado" => 29,
                "nome" => "São Miguel das Matas",
            ],
            [
                "idestado" => 29,
                "nome" => "São Sebastião do Passé",
            ],
            [
                "idestado" => 29,
                "nome" => "Sapeaçu",
            ],
            [
                "idestado" => 29,
                "nome" => "Sátiro Dias",
            ],
            [
                "idestado" => 29,
                "nome" => "Saubara",
            ],
            [
                "idestado" => 29,
                "nome" => "Saúde",
            ],
            [
                "idestado" => 29,
                "nome" => "Seabra",
            ],
            [
                "idestado" => 29,
                "nome" => "Sebastião Laranjeiras",
            ],
            [
                "idestado" => 29,
                "nome" => "Senhor do Bonfim",
            ],
            [
                "idestado" => 29,
                "nome" => "Sento Sé",
            ],
            [
                "idestado" => 29,
                "nome" => "Serra do Ramalho",
            ],
            [
                "idestado" => 29,
                "nome" => "Serra Dourada",
            ],
            [
                "idestado" => 29,
                "nome" => "Serra Preta",
            ],
            [
                "idestado" => 29,
                "nome" => "Serrinha",
            ],
            [
                "idestado" => 29,
                "nome" => "Serrolândia",
            ],
            [
                "idestado" => 29,
                "nome" => "Simões Filho",
            ],
            [
                "idestado" => 29,
                "nome" => "Sítio do Mato",
            ],
            [
                "idestado" => 29,
                "nome" => "Sítio do Quinto",
            ],
            [
                "idestado" => 29,
                "nome" => "Sobradinho",
            ],
            [
                "idestado" => 29,
                "nome" => "Souto Soares",
            ],
            [
                "idestado" => 29,
                "nome" => "Tabocas do Brejo Velho",
            ],
            [
                "idestado" => 29,
                "nome" => "Tanhaçu",
            ],
            [
                "idestado" => 29,
                "nome" => "Tanque Novo",
            ],
            [
                "idestado" => 29,
                "nome" => "Tanquinho",
            ],
            [
                "idestado" => 29,
                "nome" => "Taperoá",
            ],
            [
                "idestado" => 29,
                "nome" => "Tapiramutá",
            ],
            [
                "idestado" => 29,
                "nome" => "Teixeira de Freitas",
            ],
            [
                "idestado" => 29,
                "nome" => "Teodoro Sampaio",
            ],
            [
                "idestado" => 29,
                "nome" => "Teofilândia",
            ],
            [
                "idestado" => 29,
                "nome" => "Teolândia",
            ],
            [
                "idestado" => 29,
                "nome" => "Terra Nova",
            ],
            [
                "idestado" => 29,
                "nome" => "Tremedal",
            ],
            [
                "idestado" => 29,
                "nome" => "Tucano",
            ],
            [
                "idestado" => 29,
                "nome" => "Uauá",
            ],
            [
                "idestado" => 29,
                "nome" => "Ubaíra",
            ],
            [
                "idestado" => 29,
                "nome" => "Ubaitaba",
            ],
            [
                "idestado" => 29,
                "nome" => "Ubatã",
            ],
            [
                "idestado" => 29,
                "nome" => "Uibaí",
            ],
            [
                "idestado" => 29,
                "nome" => "Umburanas",
            ],
            [
                "idestado" => 29,
                "nome" => "Una",
            ],
            [
                "idestado" => 29,
                "nome" => "Urandi",
            ],
            [
                "idestado" => 29,
                "nome" => "Uruçuca",
            ],
            [
                "idestado" => 29,
                "nome" => "Utinga",
            ],
            [
                "idestado" => 29,
                "nome" => "Valença",
            ],
            [
                "idestado" => 29,
                "nome" => "Valente",
            ],
            [
                "idestado" => 29,
                "nome" => "Várzea da Roça",
            ],
            [
                "idestado" => 29,
                "nome" => "Várzea do Poço",
            ],
            [
                "idestado" => 29,
                "nome" => "Várzea Nova",
            ],
            [
                "idestado" => 29,
                "nome" => "Varzedo",
            ],
            [
                "idestado" => 29,
                "nome" => "Vera Cruz",
            ],
            [
                "idestado" => 29,
                "nome" => "Vereda",
            ],
            [
                "idestado" => 29,
                "nome" => "Vitória da Conquista",
            ],
            [
                "idestado" => 29,
                "nome" => "Wagner",
            ],
            [
                "idestado" => 29,
                "nome" => "Wanderley",
            ],
            [
                "idestado" => 29,
                "nome" => "Wenceslau Guimarães",
            ],
            [
                "idestado" => 29,
                "nome" => "Xique-Xique",
            ],
            [
                "idestado" => 31,
                "nome" => "Abadia dos Dourados",
            ],
            [
                "idestado" => 31,
                "nome" => "Abaeté",
            ],
            [
                "idestado" => 31,
                "nome" => "Abre Campo",
            ],
            [
                "idestado" => 31,
                "nome" => "Acaiaca",
            ],
            [
                "idestado" => 31,
                "nome" => "Açucena",
            ],
            [
                "idestado" => 31,
                "nome" => "Água Boa",
            ],
            [
                "idestado" => 31,
                "nome" => "Água Comprida",
            ],
            [
                "idestado" => 31,
                "nome" => "Aguanil",
            ],
            [
                "idestado" => 31,
                "nome" => "Águas Formosas",
            ],
            [
                "idestado" => 31,
                "nome" => "Águas Vermelhas",
            ],
            [
                "idestado" => 31,
                "nome" => "Aimorés",
            ],
            [
                "idestado" => 31,
                "nome" => "Aiuruoca",
            ],
            [
                "idestado" => 31,
                "nome" => "Alagoa",
            ],
            [
                "idestado" => 31,
                "nome" => "Albertina",
            ],
            [
                "idestado" => 31,
                "nome" => "Além Paraíba",
            ],
            [
                "idestado" => 31,
                "nome" => "Alfenas",
            ],
            [
                "idestado" => 31,
                "nome" => "Alfredo Vasconcelos",
            ],
            [
                "idestado" => 31,
                "nome" => "Almenara",
            ],
            [
                "idestado" => 31,
                "nome" => "Alpercata",
            ],
            [
                "idestado" => 31,
                "nome" => "Alpinópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Alterosa",
            ],
            [
                "idestado" => 31,
                "nome" => "Alto Caparaó",
            ],
            [
                "idestado" => 31,
                "nome" => "Alto Jequitibá",
            ],
            [
                "idestado" => 31,
                "nome" => "Alto Rio Doce",
            ],
            [
                "idestado" => 31,
                "nome" => "Alvarenga",
            ],
            [
                "idestado" => 31,
                "nome" => "Alvinópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Alvorada de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Amparo do Serra",
            ],
            [
                "idestado" => 31,
                "nome" => "Andradas",
            ],
            [
                "idestado" => 31,
                "nome" => "Andrelândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Angelândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Antônio Carlos",
            ],
            [
                "idestado" => 31,
                "nome" => "Antônio Dias",
            ],
            [
                "idestado" => 31,
                "nome" => "Antônio Prado de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Araçaí",
            ],
            [
                "idestado" => 31,
                "nome" => "Aracitaba",
            ],
            [
                "idestado" => 31,
                "nome" => "Araçuaí",
            ],
            [
                "idestado" => 31,
                "nome" => "Araguari",
            ],
            [
                "idestado" => 31,
                "nome" => "Arantina",
            ],
            [
                "idestado" => 31,
                "nome" => "Araponga",
            ],
            [
                "idestado" => 31,
                "nome" => "Araporã",
            ],
            [
                "idestado" => 31,
                "nome" => "Arapuá",
            ],
            [
                "idestado" => 31,
                "nome" => "Araújos",
            ],
            [
                "idestado" => 31,
                "nome" => "Araxá",
            ],
            [
                "idestado" => 31,
                "nome" => "Arceburgo",
            ],
            [
                "idestado" => 31,
                "nome" => "Arcos",
            ],
            [
                "idestado" => 31,
                "nome" => "Areado",
            ],
            [
                "idestado" => 31,
                "nome" => "Argirita",
            ],
            [
                "idestado" => 31,
                "nome" => "Aricanduva",
            ],
            [
                "idestado" => 31,
                "nome" => "Arinos",
            ],
            [
                "idestado" => 31,
                "nome" => "Astolfo Dutra",
            ],
            [
                "idestado" => 31,
                "nome" => "Ataléia",
            ],
            [
                "idestado" => 31,
                "nome" => "Augusto de Lima",
            ],
            [
                "idestado" => 31,
                "nome" => "Baependi",
            ],
            [
                "idestado" => 31,
                "nome" => "Baldim",
            ],
            [
                "idestado" => 31,
                "nome" => "Bambuí",
            ],
            [
                "idestado" => 31,
                "nome" => "Bandeira",
            ],
            [
                "idestado" => 31,
                "nome" => "Bandeira do Sul",
            ],
            [
                "idestado" => 31,
                "nome" => "Barão de Cocais",
            ],
            [
                "idestado" => 31,
                "nome" => "Barão de Monte Alto",
            ],
            [
                "idestado" => 31,
                "nome" => "Barbacena",
            ],
            [
                "idestado" => 31,
                "nome" => "Barra Longa",
            ],
            [
                "idestado" => 31,
                "nome" => "Barroso",
            ],
            [
                "idestado" => 31,
                "nome" => "Bela Vista de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Belmiro Braga",
            ],
            [
                "idestado" => 31,
                "nome" => "Belo Horizonte",
            ],
            [
                "idestado" => 31,
                "nome" => "Belo Oriente",
            ],
            [
                "idestado" => 31,
                "nome" => "Belo Vale",
            ],
            [
                "idestado" => 31,
                "nome" => "Berilo",
            ],
            [
                "idestado" => 31,
                "nome" => "Berizal",
            ],
            [
                "idestado" => 31,
                "nome" => "Bertópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Betim",
            ],
            [
                "idestado" => 31,
                "nome" => "Bias Fortes",
            ],
            [
                "idestado" => 31,
                "nome" => "Bicas",
            ],
            [
                "idestado" => 31,
                "nome" => "Biquinhas",
            ],
            [
                "idestado" => 31,
                "nome" => "Boa Esperança",
            ],
            [
                "idestado" => 31,
                "nome" => "Bocaina de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Bocaiúva",
            ],
            [
                "idestado" => 31,
                "nome" => "Bom Despacho",
            ],
            [
                "idestado" => 31,
                "nome" => "Bom Jardim de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Bom Jesus da Penha",
            ],
            [
                "idestado" => 31,
                "nome" => "Bom Jesus do Amparo",
            ],
            [
                "idestado" => 31,
                "nome" => "Bom Jesus do Galho",
            ],
            [
                "idestado" => 31,
                "nome" => "Bom Repouso",
            ],
            [
                "idestado" => 31,
                "nome" => "Bom Sucesso",
            ],
            [
                "idestado" => 31,
                "nome" => "Bonfim",
            ],
            [
                "idestado" => 31,
                "nome" => "Bonfinópolis de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Bonito de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Borda da Mata",
            ],
            [
                "idestado" => 31,
                "nome" => "Botelhos",
            ],
            [
                "idestado" => 31,
                "nome" => "Botumirim",
            ],
            [
                "idestado" => 31,
                "nome" => "Brás Pires",
            ],
            [
                "idestado" => 31,
                "nome" => "Brasilândia de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Brasília de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Braúnas",
            ],
            [
                "idestado" => 31,
                "nome" => "Brazópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Brumadinho",
            ],
            [
                "idestado" => 31,
                "nome" => "Bueno Brandão",
            ],
            [
                "idestado" => 31,
                "nome" => "Buenópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Bugre",
            ],
            [
                "idestado" => 31,
                "nome" => "Buritis",
            ],
            [
                "idestado" => 31,
                "nome" => "Buritizeiro",
            ],
            [
                "idestado" => 31,
                "nome" => "Cabeceira Grande",
            ],
            [
                "idestado" => 31,
                "nome" => "Cabo Verde",
            ],
            [
                "idestado" => 31,
                "nome" => "Cachoeira da Prata",
            ],
            [
                "idestado" => 31,
                "nome" => "Cachoeira de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Cachoeira de Pajeú",
            ],
            [
                "idestado" => 31,
                "nome" => "Cachoeira Dourada",
            ],
            [
                "idestado" => 31,
                "nome" => "Caetanópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Caeté",
            ],
            [
                "idestado" => 31,
                "nome" => "Caiana",
            ],
            [
                "idestado" => 31,
                "nome" => "Cajuri",
            ],
            [
                "idestado" => 31,
                "nome" => "Caldas",
            ],
            [
                "idestado" => 31,
                "nome" => "Camacho",
            ],
            [
                "idestado" => 31,
                "nome" => "Camanducaia",
            ],
            [
                "idestado" => 31,
                "nome" => "Cambuí",
            ],
            [
                "idestado" => 31,
                "nome" => "Cambuquira",
            ],
            [
                "idestado" => 31,
                "nome" => "Campanário",
            ],
            [
                "idestado" => 31,
                "nome" => "Campanha",
            ],
            [
                "idestado" => 31,
                "nome" => "Campestre",
            ],
            [
                "idestado" => 31,
                "nome" => "Campina Verde",
            ],
            [
                "idestado" => 31,
                "nome" => "Campo Azul",
            ],
            [
                "idestado" => 31,
                "nome" => "Campo Belo",
            ],
            [
                "idestado" => 31,
                "nome" => "Campo do Meio",
            ],
            [
                "idestado" => 31,
                "nome" => "Campo Florido",
            ],
            [
                "idestado" => 31,
                "nome" => "Campos Altos",
            ],
            [
                "idestado" => 31,
                "nome" => "Campos Gerais",
            ],
            [
                "idestado" => 31,
                "nome" => "Cana Verde",
            ],
            [
                "idestado" => 31,
                "nome" => "Canaã",
            ],
            [
                "idestado" => 31,
                "nome" => "Canápolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Candeias",
            ],
            [
                "idestado" => 31,
                "nome" => "Cantagalo",
            ],
            [
                "idestado" => 31,
                "nome" => "Caparaó",
            ],
            [
                "idestado" => 31,
                "nome" => "Capela Nova",
            ],
            [
                "idestado" => 31,
                "nome" => "Capelinha",
            ],
            [
                "idestado" => 31,
                "nome" => "Capetinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Capim Branco",
            ],
            [
                "idestado" => 31,
                "nome" => "Capinópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Capitão Andrade",
            ],
            [
                "idestado" => 31,
                "nome" => "Capitão Enéas",
            ],
            [
                "idestado" => 31,
                "nome" => "Capitólio",
            ],
            [
                "idestado" => 31,
                "nome" => "Caputira",
            ],
            [
                "idestado" => 31,
                "nome" => "Caraí",
            ],
            [
                "idestado" => 31,
                "nome" => "Caranaíba",
            ],
            [
                "idestado" => 31,
                "nome" => "Carandaí",
            ],
            [
                "idestado" => 31,
                "nome" => "Carangola",
            ],
            [
                "idestado" => 31,
                "nome" => "Caratinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Carbonita",
            ],
            [
                "idestado" => 31,
                "nome" => "Careaçu",
            ],
            [
                "idestado" => 31,
                "nome" => "Carlos Chagas",
            ],
            [
                "idestado" => 31,
                "nome" => "Carmésia",
            ],
            [
                "idestado" => 31,
                "nome" => "Carmo da Cachoeira",
            ],
            [
                "idestado" => 31,
                "nome" => "Carmo da Mata",
            ],
            [
                "idestado" => 31,
                "nome" => "Carmo de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Carmo do Cajuru",
            ],
            [
                "idestado" => 31,
                "nome" => "Carmo do Paranaíba",
            ],
            [
                "idestado" => 31,
                "nome" => "Carmo do Rio Claro",
            ],
            [
                "idestado" => 31,
                "nome" => "Carmópolis de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Carneirinho",
            ],
            [
                "idestado" => 31,
                "nome" => "Carrancas",
            ],
            [
                "idestado" => 31,
                "nome" => "Carvalhópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Carvalhos",
            ],
            [
                "idestado" => 31,
                "nome" => "Casa Grande",
            ],
            [
                "idestado" => 31,
                "nome" => "Cascalho Rico",
            ],
            [
                "idestado" => 31,
                "nome" => "Cássia",
            ],
            [
                "idestado" => 31,
                "nome" => "Cataguases",
            ],
            [
                "idestado" => 31,
                "nome" => "Catas Altas",
            ],
            [
                "idestado" => 31,
                "nome" => "Catas Altas da Noruega",
            ],
            [
                "idestado" => 31,
                "nome" => "Catuji",
            ],
            [
                "idestado" => 31,
                "nome" => "Catuti",
            ],
            [
                "idestado" => 31,
                "nome" => "Caxambu",
            ],
            [
                "idestado" => 31,
                "nome" => "Cedro do Abaeté",
            ],
            [
                "idestado" => 31,
                "nome" => "Central de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Centralina",
            ],
            [
                "idestado" => 31,
                "nome" => "Chácara",
            ],
            [
                "idestado" => 31,
                "nome" => "Chalé",
            ],
            [
                "idestado" => 31,
                "nome" => "Chapada do Norte",
            ],
            [
                "idestado" => 31,
                "nome" => "Chapada Gaúcha",
            ],
            [
                "idestado" => 31,
                "nome" => "Chiador",
            ],
            [
                "idestado" => 31,
                "nome" => "Cipotânea",
            ],
            [
                "idestado" => 31,
                "nome" => "Claraval",
            ],
            [
                "idestado" => 31,
                "nome" => "Claro dos Poções",
            ],
            [
                "idestado" => 31,
                "nome" => "Cláudio",
            ],
            [
                "idestado" => 31,
                "nome" => "Coimbra",
            ],
            [
                "idestado" => 31,
                "nome" => "Coluna",
            ],
            [
                "idestado" => 31,
                "nome" => "Comendador Gomes",
            ],
            [
                "idestado" => 31,
                "nome" => "Comercinho",
            ],
            [
                "idestado" => 31,
                "nome" => "Conceição da Aparecida",
            ],
            [
                "idestado" => 31,
                "nome" => "Conceição da Barra de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Conceição das Alagoas",
            ],
            [
                "idestado" => 31,
                "nome" => "Conceição das Pedras",
            ],
            [
                "idestado" => 31,
                "nome" => "Conceição de Ipanema",
            ],
            [
                "idestado" => 31,
                "nome" => "Conceição do Mato Dentro",
            ],
            [
                "idestado" => 31,
                "nome" => "Conceição do Pará",
            ],
            [
                "idestado" => 31,
                "nome" => "Conceição do Rio Verde",
            ],
            [
                "idestado" => 31,
                "nome" => "Conceição dos Ouros",
            ],
            [
                "idestado" => 31,
                "nome" => "Cônego Marinho",
            ],
            [
                "idestado" => 31,
                "nome" => "Confins",
            ],
            [
                "idestado" => 31,
                "nome" => "Congonhal",
            ],
            [
                "idestado" => 31,
                "nome" => "Congonhas",
            ],
            [
                "idestado" => 31,
                "nome" => "Congonhas do Norte",
            ],
            [
                "idestado" => 31,
                "nome" => "Conquista",
            ],
            [
                "idestado" => 31,
                "nome" => "Conselheiro Lafaiete",
            ],
            [
                "idestado" => 31,
                "nome" => "Conselheiro Pena",
            ],
            [
                "idestado" => 31,
                "nome" => "Consolação",
            ],
            [
                "idestado" => 31,
                "nome" => "Contagem",
            ],
            [
                "idestado" => 31,
                "nome" => "Coqueiral",
            ],
            [
                "idestado" => 31,
                "nome" => "Coração de Jesus",
            ],
            [
                "idestado" => 31,
                "nome" => "Cordisburgo",
            ],
            [
                "idestado" => 31,
                "nome" => "Cordislândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Corinto",
            ],
            [
                "idestado" => 31,
                "nome" => "Coroaci",
            ],
            [
                "idestado" => 31,
                "nome" => "Coromandel",
            ],
            [
                "idestado" => 31,
                "nome" => "Coronel Fabriciano",
            ],
            [
                "idestado" => 31,
                "nome" => "Coronel Murta",
            ],
            [
                "idestado" => 31,
                "nome" => "Coronel Pacheco",
            ],
            [
                "idestado" => 31,
                "nome" => "Coronel Xavier Chaves",
            ],
            [
                "idestado" => 31,
                "nome" => "Córrego Danta",
            ],
            [
                "idestado" => 31,
                "nome" => "Córrego do Bom Jesus",
            ],
            [
                "idestado" => 31,
                "nome" => "Córrego Fundo",
            ],
            [
                "idestado" => 31,
                "nome" => "Córrego Novo",
            ],
            [
                "idestado" => 31,
                "nome" => "Couto de Magalhães de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Crisólita",
            ],
            [
                "idestado" => 31,
                "nome" => "Cristais",
            ],
            [
                "idestado" => 31,
                "nome" => "Cristália",
            ],
            [
                "idestado" => 31,
                "nome" => "Cristiano Otoni",
            ],
            [
                "idestado" => 31,
                "nome" => "Cristina",
            ],
            [
                "idestado" => 31,
                "nome" => "Crucilândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Cruzeiro da Fortaleza",
            ],
            [
                "idestado" => 31,
                "nome" => "Cruzília",
            ],
            [
                "idestado" => 31,
                "nome" => "Cuparaque",
            ],
            [
                "idestado" => 31,
                "nome" => "Curral de Dentro",
            ],
            [
                "idestado" => 31,
                "nome" => "Curvelo",
            ],
            [
                "idestado" => 31,
                "nome" => "Datas",
            ],
            [
                "idestado" => 31,
                "nome" => "Delfim Moreira",
            ],
            [
                "idestado" => 31,
                "nome" => "Delfinópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Delta",
            ],
            [
                "idestado" => 31,
                "nome" => "Descoberto",
            ],
            [
                "idestado" => 31,
                "nome" => "Desterro de Entre Rios",
            ],
            [
                "idestado" => 31,
                "nome" => "Desterro do Melo",
            ],
            [
                "idestado" => 31,
                "nome" => "Diamantina",
            ],
            [
                "idestado" => 31,
                "nome" => "Diogo de Vasconcelos",
            ],
            [
                "idestado" => 31,
                "nome" => "Dionísio",
            ],
            [
                "idestado" => 31,
                "nome" => "Divinésia",
            ],
            [
                "idestado" => 31,
                "nome" => "Divino",
            ],
            [
                "idestado" => 31,
                "nome" => "Divino das Laranjeiras",
            ],
            [
                "idestado" => 31,
                "nome" => "Divinolândia de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Divinópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Divisa Alegre",
            ],
            [
                "idestado" => 31,
                "nome" => "Divisa Nova",
            ],
            [
                "idestado" => 31,
                "nome" => "Divisópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Dom Bosco",
            ],
            [
                "idestado" => 31,
                "nome" => "Dom Cavati",
            ],
            [
                "idestado" => 31,
                "nome" => "Dom Joaquim",
            ],
            [
                "idestado" => 31,
                "nome" => "Dom Silvério",
            ],
            [
                "idestado" => 31,
                "nome" => "Dom Viçoso",
            ],
            [
                "idestado" => 31,
                "nome" => "Dona Euzébia",
            ],
            [
                "idestado" => 31,
                "nome" => "Dores de Campos",
            ],
            [
                "idestado" => 31,
                "nome" => "Dores de Guanhães",
            ],
            [
                "idestado" => 31,
                "nome" => "Dores do Indaiá",
            ],
            [
                "idestado" => 31,
                "nome" => "Dores do Turvo",
            ],
            [
                "idestado" => 31,
                "nome" => "Doresópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Douradoquara",
            ],
            [
                "idestado" => 31,
                "nome" => "Durandé",
            ],
            [
                "idestado" => 31,
                "nome" => "Elói Mendes",
            ],
            [
                "idestado" => 31,
                "nome" => "Engenheiro Caldas",
            ],
            [
                "idestado" => 31,
                "nome" => "Engenheiro Navarro",
            ],
            [
                "idestado" => 31,
                "nome" => "Entre Folhas",
            ],
            [
                "idestado" => 31,
                "nome" => "Entre Rios de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Ervália",
            ],
            [
                "idestado" => 31,
                "nome" => "Esmeraldas",
            ],
            [
                "idestado" => 31,
                "nome" => "Espera Feliz",
            ],
            [
                "idestado" => 31,
                "nome" => "Espinosa",
            ],
            [
                "idestado" => 31,
                "nome" => "Espírito Santo do Dourado",
            ],
            [
                "idestado" => 31,
                "nome" => "Estiva",
            ],
            [
                "idestado" => 31,
                "nome" => "Estrela Dalva",
            ],
            [
                "idestado" => 31,
                "nome" => "Estrela do Indaiá",
            ],
            [
                "idestado" => 31,
                "nome" => "Estrela do Sul",
            ],
            [
                "idestado" => 31,
                "nome" => "Eugenópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Ewbank da Câmara",
            ],
            [
                "idestado" => 31,
                "nome" => "Extrema",
            ],
            [
                "idestado" => 31,
                "nome" => "Fama",
            ],
            [
                "idestado" => 31,
                "nome" => "Faria Lemos",
            ],
            [
                "idestado" => 31,
                "nome" => "Felício dos Santos",
            ],
            [
                "idestado" => 31,
                "nome" => "Felisburgo",
            ],
            [
                "idestado" => 31,
                "nome" => "Felixlândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Fernandes Tourinho",
            ],
            [
                "idestado" => 31,
                "nome" => "Ferros",
            ],
            [
                "idestado" => 31,
                "nome" => "Fervedouro",
            ],
            [
                "idestado" => 31,
                "nome" => "Florestal",
            ],
            [
                "idestado" => 31,
                "nome" => "Formiga",
            ],
            [
                "idestado" => 31,
                "nome" => "Formoso",
            ],
            [
                "idestado" => 31,
                "nome" => "Fortaleza de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Fortuna de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Francisco Badaró",
            ],
            [
                "idestado" => 31,
                "nome" => "Francisco Dumont",
            ],
            [
                "idestado" => 31,
                "nome" => "Francisco Sá",
            ],
            [
                "idestado" => 31,
                "nome" => "Franciscópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Frei Gaspar",
            ],
            [
                "idestado" => 31,
                "nome" => "Frei Inocêncio",
            ],
            [
                "idestado" => 31,
                "nome" => "Frei Lagonegro",
            ],
            [
                "idestado" => 31,
                "nome" => "Fronteira",
            ],
            [
                "idestado" => 31,
                "nome" => "Fronteira dos Vales",
            ],
            [
                "idestado" => 31,
                "nome" => "Fruta de Leite",
            ],
            [
                "idestado" => 31,
                "nome" => "Frutal",
            ],
            [
                "idestado" => 31,
                "nome" => "Funilândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Galiléia",
            ],
            [
                "idestado" => 31,
                "nome" => "Gameleiras",
            ],
            [
                "idestado" => 31,
                "nome" => "Glaucilândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Goiabeira",
            ],
            [
                "idestado" => 31,
                "nome" => "Goianá",
            ],
            [
                "idestado" => 31,
                "nome" => "Gonçalves",
            ],
            [
                "idestado" => 31,
                "nome" => "Gonzaga",
            ],
            [
                "idestado" => 31,
                "nome" => "Gouveia",
            ],
            [
                "idestado" => 31,
                "nome" => "Governador Valadares",
            ],
            [
                "idestado" => 31,
                "nome" => "Grão Mogol",
            ],
            [
                "idestado" => 31,
                "nome" => "Grupiara",
            ],
            [
                "idestado" => 31,
                "nome" => "Guanhães",
            ],
            [
                "idestado" => 31,
                "nome" => "Guapé",
            ],
            [
                "idestado" => 31,
                "nome" => "Guaraciaba",
            ],
            [
                "idestado" => 31,
                "nome" => "Guaraciama",
            ],
            [
                "idestado" => 31,
                "nome" => "Guaranésia",
            ],
            [
                "idestado" => 31,
                "nome" => "Guarani",
            ],
            [
                "idestado" => 31,
                "nome" => "Guarará",
            ],
            [
                "idestado" => 31,
                "nome" => "Guarda-Mor",
            ],
            [
                "idestado" => 31,
                "nome" => "Guaxupé",
            ],
            [
                "idestado" => 31,
                "nome" => "Guidoval",
            ],
            [
                "idestado" => 31,
                "nome" => "Guimarânia",
            ],
            [
                "idestado" => 31,
                "nome" => "Guiricema",
            ],
            [
                "idestado" => 31,
                "nome" => "Gurinhatã",
            ],
            [
                "idestado" => 31,
                "nome" => "Heliodora",
            ],
            [
                "idestado" => 31,
                "nome" => "Iapu",
            ],
            [
                "idestado" => 31,
                "nome" => "Ibertioga",
            ],
            [
                "idestado" => 31,
                "nome" => "Ibiá",
            ],
            [
                "idestado" => 31,
                "nome" => "Ibiaí",
            ],
            [
                "idestado" => 31,
                "nome" => "Ibiracatu",
            ],
            [
                "idestado" => 31,
                "nome" => "Ibiraci",
            ],
            [
                "idestado" => 31,
                "nome" => "Ibirité",
            ],
            [
                "idestado" => 31,
                "nome" => "Ibitiúra de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Ibituruna",
            ],
            [
                "idestado" => 31,
                "nome" => "Icaraí de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Igarapé",
            ],
            [
                "idestado" => 31,
                "nome" => "Igaratinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Iguatama",
            ],
            [
                "idestado" => 31,
                "nome" => "Ijaci",
            ],
            [
                "idestado" => 31,
                "nome" => "Ilicínea",
            ],
            [
                "idestado" => 31,
                "nome" => "Imbé de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Inconfidentes",
            ],
            [
                "idestado" => 31,
                "nome" => "Indaiabira",
            ],
            [
                "idestado" => 31,
                "nome" => "Indianópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Ingaí",
            ],
            [
                "idestado" => 31,
                "nome" => "Inhapim",
            ],
            [
                "idestado" => 31,
                "nome" => "Inhaúma",
            ],
            [
                "idestado" => 31,
                "nome" => "Inimutaba",
            ],
            [
                "idestado" => 31,
                "nome" => "Ipaba",
            ],
            [
                "idestado" => 31,
                "nome" => "Ipanema",
            ],
            [
                "idestado" => 31,
                "nome" => "Ipatinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Ipiaçu",
            ],
            [
                "idestado" => 31,
                "nome" => "Ipuiúna",
            ],
            [
                "idestado" => 31,
                "nome" => "Iraí de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Itabira",
            ],
            [
                "idestado" => 31,
                "nome" => "Itabirinha",
            ],
            [
                "idestado" => 31,
                "nome" => "Itabirito",
            ],
            [
                "idestado" => 31,
                "nome" => "Itacambira",
            ],
            [
                "idestado" => 31,
                "nome" => "Itacarambi",
            ],
            [
                "idestado" => 31,
                "nome" => "Itaguara",
            ],
            [
                "idestado" => 31,
                "nome" => "Itaipé",
            ],
            [
                "idestado" => 31,
                "nome" => "Itajubá",
            ],
            [
                "idestado" => 31,
                "nome" => "Itamarandiba",
            ],
            [
                "idestado" => 31,
                "nome" => "Itamarati de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Itambacuri",
            ],
            [
                "idestado" => 31,
                "nome" => "Itambé do Mato Dentro",
            ],
            [
                "idestado" => 31,
                "nome" => "Itamogi",
            ],
            [
                "idestado" => 31,
                "nome" => "Itamonte",
            ],
            [
                "idestado" => 31,
                "nome" => "Itanhandu",
            ],
            [
                "idestado" => 31,
                "nome" => "Itanhomi",
            ],
            [
                "idestado" => 31,
                "nome" => "Itaobim",
            ],
            [
                "idestado" => 31,
                "nome" => "Itapagipe",
            ],
            [
                "idestado" => 31,
                "nome" => "Itapecerica",
            ],
            [
                "idestado" => 31,
                "nome" => "Itapeva",
            ],
            [
                "idestado" => 31,
                "nome" => "Itatiaiuçu",
            ],
            [
                "idestado" => 31,
                "nome" => "Itaú de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Itaúna",
            ],
            [
                "idestado" => 31,
                "nome" => "Itaverava",
            ],
            [
                "idestado" => 31,
                "nome" => "Itinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Itueta",
            ],
            [
                "idestado" => 31,
                "nome" => "Ituiutaba",
            ],
            [
                "idestado" => 31,
                "nome" => "Itumirim",
            ],
            [
                "idestado" => 31,
                "nome" => "Iturama",
            ],
            [
                "idestado" => 31,
                "nome" => "Itutinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Jaboticatubas",
            ],
            [
                "idestado" => 31,
                "nome" => "Jacinto",
            ],
            [
                "idestado" => 31,
                "nome" => "Jacuí",
            ],
            [
                "idestado" => 31,
                "nome" => "Jacutinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Jaguaraçu",
            ],
            [
                "idestado" => 31,
                "nome" => "Jaíba",
            ],
            [
                "idestado" => 31,
                "nome" => "Jampruca",
            ],
            [
                "idestado" => 31,
                "nome" => "Janaúba",
            ],
            [
                "idestado" => 31,
                "nome" => "Januária",
            ],
            [
                "idestado" => 31,
                "nome" => "Japaraíba",
            ],
            [
                "idestado" => 31,
                "nome" => "Japonvar",
            ],
            [
                "idestado" => 31,
                "nome" => "Jeceaba",
            ],
            [
                "idestado" => 31,
                "nome" => "Jenipapo de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Jequeri",
            ],
            [
                "idestado" => 31,
                "nome" => "Jequitaí",
            ],
            [
                "idestado" => 31,
                "nome" => "Jequitibá",
            ],
            [
                "idestado" => 31,
                "nome" => "Jequitinhonha",
            ],
            [
                "idestado" => 31,
                "nome" => "Jesuânia",
            ],
            [
                "idestado" => 31,
                "nome" => "Joaíma",
            ],
            [
                "idestado" => 31,
                "nome" => "Joanésia",
            ],
            [
                "idestado" => 31,
                "nome" => "João Monlevade",
            ],
            [
                "idestado" => 31,
                "nome" => "João Pinheiro",
            ],
            [
                "idestado" => 31,
                "nome" => "Joaquim Felício",
            ],
            [
                "idestado" => 31,
                "nome" => "Jordânia",
            ],
            [
                "idestado" => 31,
                "nome" => "José Gonçalves de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "José Raydan",
            ],
            [
                "idestado" => 31,
                "nome" => "Josenópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Juatuba",
            ],
            [
                "idestado" => 31,
                "nome" => "Juiz de Fora",
            ],
            [
                "idestado" => 31,
                "nome" => "Juramento",
            ],
            [
                "idestado" => 31,
                "nome" => "Juruaia",
            ],
            [
                "idestado" => 31,
                "nome" => "Juvenília",
            ],
            [
                "idestado" => 31,
                "nome" => "Ladainha",
            ],
            [
                "idestado" => 31,
                "nome" => "Lagamar",
            ],
            [
                "idestado" => 31,
                "nome" => "Lagoa da Prata",
            ],
            [
                "idestado" => 31,
                "nome" => "Lagoa dos Patos",
            ],
            [
                "idestado" => 31,
                "nome" => "Lagoa Dourada",
            ],
            [
                "idestado" => 31,
                "nome" => "Lagoa Formosa",
            ],
            [
                "idestado" => 31,
                "nome" => "Lagoa Grande",
            ],
            [
                "idestado" => 31,
                "nome" => "Lagoa Santa",
            ],
            [
                "idestado" => 31,
                "nome" => "Lajinha",
            ],
            [
                "idestado" => 31,
                "nome" => "Lambari",
            ],
            [
                "idestado" => 31,
                "nome" => "Lamim",
            ],
            [
                "idestado" => 31,
                "nome" => "Laranjal",
            ],
            [
                "idestado" => 31,
                "nome" => "Lassance",
            ],
            [
                "idestado" => 31,
                "nome" => "Lavras",
            ],
            [
                "idestado" => 31,
                "nome" => "Leandro Ferreira",
            ],
            [
                "idestado" => 31,
                "nome" => "Leme do Prado",
            ],
            [
                "idestado" => 31,
                "nome" => "Leopoldina",
            ],
            [
                "idestado" => 31,
                "nome" => "Liberdade",
            ],
            [
                "idestado" => 31,
                "nome" => "Lima Duarte",
            ],
            [
                "idestado" => 31,
                "nome" => "Limeira do Oeste",
            ],
            [
                "idestado" => 31,
                "nome" => "Lontra",
            ],
            [
                "idestado" => 31,
                "nome" => "Luisburgo",
            ],
            [
                "idestado" => 31,
                "nome" => "Luislândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Luminárias",
            ],
            [
                "idestado" => 31,
                "nome" => "Luz",
            ],
            [
                "idestado" => 31,
                "nome" => "Machacalis",
            ],
            [
                "idestado" => 31,
                "nome" => "Machado",
            ],
            [
                "idestado" => 31,
                "nome" => "Madre de Deus de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Malacacheta",
            ],
            [
                "idestado" => 31,
                "nome" => "Mamonas",
            ],
            [
                "idestado" => 31,
                "nome" => "Manga",
            ],
            [
                "idestado" => 31,
                "nome" => "Manhuaçu",
            ],
            [
                "idestado" => 31,
                "nome" => "Manhumirim",
            ],
            [
                "idestado" => 31,
                "nome" => "Mantena",
            ],
            [
                "idestado" => 31,
                "nome" => "Mar de Espanha",
            ],
            [
                "idestado" => 31,
                "nome" => "Maravilhas",
            ],
            [
                "idestado" => 31,
                "nome" => "Maria da Fé",
            ],
            [
                "idestado" => 31,
                "nome" => "Mariana",
            ],
            [
                "idestado" => 31,
                "nome" => "Marilac",
            ],
            [
                "idestado" => 31,
                "nome" => "Mário Campos",
            ],
            [
                "idestado" => 31,
                "nome" => "Maripá de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Marliéria",
            ],
            [
                "idestado" => 31,
                "nome" => "Marmelópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Martinho Campos",
            ],
            [
                "idestado" => 31,
                "nome" => "Martins Soares",
            ],
            [
                "idestado" => 31,
                "nome" => "Mata Verde",
            ],
            [
                "idestado" => 31,
                "nome" => "Materlândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Mateus Leme",
            ],
            [
                "idestado" => 31,
                "nome" => "Mathias Lobato",
            ],
            [
                "idestado" => 31,
                "nome" => "Matias Barbosa",
            ],
            [
                "idestado" => 31,
                "nome" => "Matias Cardoso",
            ],
            [
                "idestado" => 31,
                "nome" => "Matipó",
            ],
            [
                "idestado" => 31,
                "nome" => "Mato Verde",
            ],
            [
                "idestado" => 31,
                "nome" => "Matozinhos",
            ],
            [
                "idestado" => 31,
                "nome" => "Matutina",
            ],
            [
                "idestado" => 31,
                "nome" => "Medeiros",
            ],
            [
                "idestado" => 31,
                "nome" => "Medina",
            ],
            [
                "idestado" => 31,
                "nome" => "Mendes Pimentel",
            ],
            [
                "idestado" => 31,
                "nome" => "Mercês",
            ],
            [
                "idestado" => 31,
                "nome" => "Mesquita",
            ],
            [
                "idestado" => 31,
                "nome" => "Minas Novas",
            ],
            [
                "idestado" => 31,
                "nome" => "Minduri",
            ],
            [
                "idestado" => 31,
                "nome" => "Mirabela",
            ],
            [
                "idestado" => 31,
                "nome" => "Miradouro",
            ],
            [
                "idestado" => 31,
                "nome" => "Miraí",
            ],
            [
                "idestado" => 31,
                "nome" => "Miravânia",
            ],
            [
                "idestado" => 31,
                "nome" => "Moeda",
            ],
            [
                "idestado" => 31,
                "nome" => "Moema",
            ],
            [
                "idestado" => 31,
                "nome" => "Monjolos",
            ],
            [
                "idestado" => 31,
                "nome" => "Monsenhor Paulo",
            ],
            [
                "idestado" => 31,
                "nome" => "Montalvânia",
            ],
            [
                "idestado" => 31,
                "nome" => "Monte Alegre de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Monte Azul",
            ],
            [
                "idestado" => 31,
                "nome" => "Monte Belo",
            ],
            [
                "idestado" => 31,
                "nome" => "Monte Carmelo",
            ],
            [
                "idestado" => 31,
                "nome" => "Monte Formoso",
            ],
            [
                "idestado" => 31,
                "nome" => "Monte Santo de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Monte Sião",
            ],
            [
                "idestado" => 31,
                "nome" => "Montes Claros",
            ],
            [
                "idestado" => 31,
                "nome" => "Montezuma",
            ],
            [
                "idestado" => 31,
                "nome" => "Morada Nova de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Morro da Garça",
            ],
            [
                "idestado" => 31,
                "nome" => "Morro do Pilar",
            ],
            [
                "idestado" => 31,
                "nome" => "Munhoz",
            ],
            [
                "idestado" => 31,
                "nome" => "Muriaé",
            ],
            [
                "idestado" => 31,
                "nome" => "Mutum",
            ],
            [
                "idestado" => 31,
                "nome" => "Muzambinho",
            ],
            [
                "idestado" => 31,
                "nome" => "Nacip Raydan",
            ],
            [
                "idestado" => 31,
                "nome" => "Nanuque",
            ],
            [
                "idestado" => 31,
                "nome" => "Naque",
            ],
            [
                "idestado" => 31,
                "nome" => "Natalândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Natércia",
            ],
            [
                "idestado" => 31,
                "nome" => "Nazareno",
            ],
            [
                "idestado" => 31,
                "nome" => "Nepomuceno",
            ],
            [
                "idestado" => 31,
                "nome" => "Ninheira",
            ],
            [
                "idestado" => 31,
                "nome" => "Nova Belém",
            ],
            [
                "idestado" => 31,
                "nome" => "Nova Era",
            ],
            [
                "idestado" => 31,
                "nome" => "Nova Lima",
            ],
            [
                "idestado" => 31,
                "nome" => "Nova Módica",
            ],
            [
                "idestado" => 31,
                "nome" => "Nova Ponte",
            ],
            [
                "idestado" => 31,
                "nome" => "Nova Porteirinha",
            ],
            [
                "idestado" => 31,
                "nome" => "Nova Resende",
            ],
            [
                "idestado" => 31,
                "nome" => "Nova Serrana",
            ],
            [
                "idestado" => 31,
                "nome" => "Nova União",
            ],
            [
                "idestado" => 31,
                "nome" => "Novo Cruzeiro",
            ],
            [
                "idestado" => 31,
                "nome" => "Novo Oriente de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Novorizonte",
            ],
            [
                "idestado" => 31,
                "nome" => "Olaria",
            ],
            [
                "idestado" => 31,
                "nome" => "Olhos-d'Água",
            ],
            [
                "idestado" => 31,
                "nome" => "Olímpio Noronha",
            ],
            [
                "idestado" => 31,
                "nome" => "Oliveira",
            ],
            [
                "idestado" => 31,
                "nome" => "Oliveira Fortes",
            ],
            [
                "idestado" => 31,
                "nome" => "Onça de Pitangui",
            ],
            [
                "idestado" => 31,
                "nome" => "Oratórios",
            ],
            [
                "idestado" => 31,
                "nome" => "Orizânia",
            ],
            [
                "idestado" => 31,
                "nome" => "Ouro Branco",
            ],
            [
                "idestado" => 31,
                "nome" => "Ouro Fino",
            ],
            [
                "idestado" => 31,
                "nome" => "Ouro Preto",
            ],
            [
                "idestado" => 31,
                "nome" => "Ouro Verde de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Padre Carvalho",
            ],
            [
                "idestado" => 31,
                "nome" => "Padre Paraíso",
            ],
            [
                "idestado" => 31,
                "nome" => "Pai Pedro",
            ],
            [
                "idestado" => 31,
                "nome" => "Paineiras",
            ],
            [
                "idestado" => 31,
                "nome" => "Pains",
            ],
            [
                "idestado" => 31,
                "nome" => "Paiva",
            ],
            [
                "idestado" => 31,
                "nome" => "Palma",
            ],
            [
                "idestado" => 31,
                "nome" => "Palmópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Papagaios",
            ],
            [
                "idestado" => 31,
                "nome" => "Pará de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Paracatu",
            ],
            [
                "idestado" => 31,
                "nome" => "Paraguaçu",
            ],
            [
                "idestado" => 31,
                "nome" => "Paraisópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Paraopeba",
            ],
            [
                "idestado" => 31,
                "nome" => "Passa Quatro",
            ],
            [
                "idestado" => 31,
                "nome" => "Passa Tempo",
            ],
            [
                "idestado" => 31,
                "nome" => "Passa Vinte",
            ],
            [
                "idestado" => 31,
                "nome" => "Passabém",
            ],
            [
                "idestado" => 31,
                "nome" => "Passos",
            ],
            [
                "idestado" => 31,
                "nome" => "Patis",
            ],
            [
                "idestado" => 31,
                "nome" => "Patos de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Patrocínio",
            ],
            [
                "idestado" => 31,
                "nome" => "Patrocínio do Muriaé",
            ],
            [
                "idestado" => 31,
                "nome" => "Paula Cândido",
            ],
            [
                "idestado" => 31,
                "nome" => "Paulistas",
            ],
            [
                "idestado" => 31,
                "nome" => "Pavão",
            ],
            [
                "idestado" => 31,
                "nome" => "Peçanha",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedra Azul",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedra Bonita",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedra do Anta",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedra do Indaiá",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedra Dourada",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedralva",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedras de Maria da Cruz",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedrinópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedro Leopoldo",
            ],
            [
                "idestado" => 31,
                "nome" => "Pedro Teixeira",
            ],
            [
                "idestado" => 31,
                "nome" => "Pequeri",
            ],
            [
                "idestado" => 31,
                "nome" => "Pequi",
            ],
            [
                "idestado" => 31,
                "nome" => "Perdigão",
            ],
            [
                "idestado" => 31,
                "nome" => "Perdizes",
            ],
            [
                "idestado" => 31,
                "nome" => "Perdões",
            ],
            [
                "idestado" => 31,
                "nome" => "Periquito",
            ],
            [
                "idestado" => 31,
                "nome" => "Pescador",
            ],
            [
                "idestado" => 31,
                "nome" => "Piau",
            ],
            [
                "idestado" => 31,
                "nome" => "Piedade de Caratinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Piedade de Ponte Nova",
            ],
            [
                "idestado" => 31,
                "nome" => "Piedade do Rio Grande",
            ],
            [
                "idestado" => 31,
                "nome" => "Piedade dos Gerais",
            ],
            [
                "idestado" => 31,
                "nome" => "Pimenta",
            ],
            [
                "idestado" => 31,
                "nome" => "Pingo-d'Água",
            ],
            [
                "idestado" => 31,
                "nome" => "Pintópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Piracema",
            ],
            [
                "idestado" => 31,
                "nome" => "Pirajuba",
            ],
            [
                "idestado" => 31,
                "nome" => "Piranga",
            ],
            [
                "idestado" => 31,
                "nome" => "Piranguçu",
            ],
            [
                "idestado" => 31,
                "nome" => "Piranguinho",
            ],
            [
                "idestado" => 31,
                "nome" => "Pirapetinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Pirapora",
            ],
            [
                "idestado" => 31,
                "nome" => "Piraúba",
            ],
            [
                "idestado" => 31,
                "nome" => "Pitangui",
            ],
            [
                "idestado" => 31,
                "nome" => "Piumhi",
            ],
            [
                "idestado" => 31,
                "nome" => "Planura",
            ],
            [
                "idestado" => 31,
                "nome" => "Poço Fundo",
            ],
            [
                "idestado" => 31,
                "nome" => "Poços de Caldas",
            ],
            [
                "idestado" => 31,
                "nome" => "Pocrane",
            ],
            [
                "idestado" => 31,
                "nome" => "Pompéu",
            ],
            [
                "idestado" => 31,
                "nome" => "Ponte Nova",
            ],
            [
                "idestado" => 31,
                "nome" => "Ponto Chique",
            ],
            [
                "idestado" => 31,
                "nome" => "Ponto dos Volantes",
            ],
            [
                "idestado" => 31,
                "nome" => "Porteirinha",
            ],
            [
                "idestado" => 31,
                "nome" => "Porto Firme",
            ],
            [
                "idestado" => 31,
                "nome" => "Poté",
            ],
            [
                "idestado" => 31,
                "nome" => "Pouso Alegre",
            ],
            [
                "idestado" => 31,
                "nome" => "Pouso Alto",
            ],
            [
                "idestado" => 31,
                "nome" => "Prados",
            ],
            [
                "idestado" => 31,
                "nome" => "Prata",
            ],
            [
                "idestado" => 31,
                "nome" => "Pratápolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Pratinha",
            ],
            [
                "idestado" => 31,
                "nome" => "Presidente Bernardes",
            ],
            [
                "idestado" => 31,
                "nome" => "Presidente Juscelino",
            ],
            [
                "idestado" => 31,
                "nome" => "Presidente Kubitschek",
            ],
            [
                "idestado" => 31,
                "nome" => "Presidente Olegário",
            ],
            [
                "idestado" => 31,
                "nome" => "Prudente de Morais",
            ],
            [
                "idestado" => 31,
                "nome" => "Quartel Geral",
            ],
            [
                "idestado" => 31,
                "nome" => "Queluzito",
            ],
            [
                "idestado" => 31,
                "nome" => "Raposos",
            ],
            [
                "idestado" => 31,
                "nome" => "Raul Soares",
            ],
            [
                "idestado" => 31,
                "nome" => "Recreio",
            ],
            [
                "idestado" => 31,
                "nome" => "Reduto",
            ],
            [
                "idestado" => 31,
                "nome" => "Resende Costa",
            ],
            [
                "idestado" => 31,
                "nome" => "Resplendor",
            ],
            [
                "idestado" => 31,
                "nome" => "Ressaquinha",
            ],
            [
                "idestado" => 31,
                "nome" => "Riachinho",
            ],
            [
                "idestado" => 31,
                "nome" => "Riacho dos Machados",
            ],
            [
                "idestado" => 31,
                "nome" => "Ribeirão das Neves",
            ],
            [
                "idestado" => 31,
                "nome" => "Ribeirão Vermelho",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Acima",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Casca",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio do Prado",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Doce",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Espera",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Manso",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Novo",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Paranaíba",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Pardo de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Piracicaba",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Pomba",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Preto",
            ],
            [
                "idestado" => 31,
                "nome" => "Rio Vermelho",
            ],
            [
                "idestado" => 31,
                "nome" => "Ritápolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Rochedo de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Rodeiro",
            ],
            [
                "idestado" => 31,
                "nome" => "Romaria",
            ],
            [
                "idestado" => 31,
                "nome" => "Rosário da Limeira",
            ],
            [
                "idestado" => 31,
                "nome" => "Rubelita",
            ],
            [
                "idestado" => 31,
                "nome" => "Rubim",
            ],
            [
                "idestado" => 31,
                "nome" => "Sabará",
            ],
            [
                "idestado" => 31,
                "nome" => "Sabinópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Sacramento",
            ],
            [
                "idestado" => 31,
                "nome" => "Salinas",
            ],
            [
                "idestado" => 31,
                "nome" => "Salto da Divisa",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Bárbara",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Bárbara do Leste",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Bárbara do Monte Verde",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Bárbara do Tugúrio",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Cruz de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Cruz de Salinas",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Cruz do Escalvado",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Efigênia de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Fé de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Helena de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Juliana",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Luzia",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Margarida",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Maria de Itabira",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Maria do Salto",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Maria do Suaçuí",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Rita de Caldas",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Rita de Ibitipoca",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Rita de Jacutinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Rita de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Rita do Itueto",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Rita do Sapucaí",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Rosa da Serra",
            ],
            [
                "idestado" => 31,
                "nome" => "Santa Vitória",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana da Vargem",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana de Cataguases",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana de Pirapama",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana do Deserto",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana do Garambéu",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana do Jacaré",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana do Manhuaçu",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana do Paraíso",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana do Riacho",
            ],
            [
                "idestado" => 31,
                "nome" => "Santana dos Montes",
            ],
            [
                "idestado" => 31,
                "nome" => "Santo Antônio do Amparo",
            ],
            [
                "idestado" => 31,
                "nome" => "Santo Antônio do Aventureiro",
            ],
            [
                "idestado" => 31,
                "nome" => "Santo Antônio do Grama",
            ],
            [
                "idestado" => 31,
                "nome" => "Santo Antônio do Itambé",
            ],
            [
                "idestado" => 31,
                "nome" => "Santo Antônio do Jacinto",
            ],
            [
                "idestado" => 31,
                "nome" => "Santo Antônio do Monte",
            ],
            [
                "idestado" => 31,
                "nome" => "Santo Antônio do Retiro",
            ],
            [
                "idestado" => 31,
                "nome" => "Santo Antônio do Rio Abaixo",
            ],
            [
                "idestado" => 31,
                "nome" => "Santo Hipólito",
            ],
            [
                "idestado" => 31,
                "nome" => "Santos Dumont",
            ],
            [
                "idestado" => 31,
                "nome" => "São Bento Abade",
            ],
            [
                "idestado" => 31,
                "nome" => "São Brás do Suaçuí",
            ],
            [
                "idestado" => 31,
                "nome" => "São Domingos das Dores",
            ],
            [
                "idestado" => 31,
                "nome" => "São Domingos do Prata",
            ],
            [
                "idestado" => 31,
                "nome" => "São Félix de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "São Francisco",
            ],
            [
                "idestado" => 31,
                "nome" => "São Francisco de Paula",
            ],
            [
                "idestado" => 31,
                "nome" => "São Francisco de Sales",
            ],
            [
                "idestado" => 31,
                "nome" => "São Francisco do Glória",
            ],
            [
                "idestado" => 31,
                "nome" => "São Geraldo",
            ],
            [
                "idestado" => 31,
                "nome" => "São Geraldo da Piedade",
            ],
            [
                "idestado" => 31,
                "nome" => "São Geraldo do Baixio",
            ],
            [
                "idestado" => 31,
                "nome" => "São Gonçalo do Abaeté",
            ],
            [
                "idestado" => 31,
                "nome" => "São Gonçalo do Pará",
            ],
            [
                "idestado" => 31,
                "nome" => "São Gonçalo do Rio Abaixo",
            ],
            [
                "idestado" => 31,
                "nome" => "São Gonçalo do Rio Preto",
            ],
            [
                "idestado" => 31,
                "nome" => "São Gonçalo do Sapucaí",
            ],
            [
                "idestado" => 31,
                "nome" => "São Gotardo",
            ],
            [
                "idestado" => 31,
                "nome" => "São João Batista do Glória",
            ],
            [
                "idestado" => 31,
                "nome" => "São João da Lagoa",
            ],
            [
                "idestado" => 31,
                "nome" => "São João da Mata",
            ],
            [
                "idestado" => 31,
                "nome" => "São João da Ponte",
            ],
            [
                "idestado" => 31,
                "nome" => "São João das Missões",
            ],
            [
                "idestado" => 31,
                "nome" => "São João del Rei",
            ],
            [
                "idestado" => 31,
                "nome" => "São João do Manhuaçu",
            ],
            [
                "idestado" => 31,
                "nome" => "São João do Manteninha",
            ],
            [
                "idestado" => 31,
                "nome" => "São João do Oriente",
            ],
            [
                "idestado" => 31,
                "nome" => "São João do Pacuí",
            ],
            [
                "idestado" => 31,
                "nome" => "São João do Paraíso",
            ],
            [
                "idestado" => 31,
                "nome" => "São João Evangelista",
            ],
            [
                "idestado" => 31,
                "nome" => "São João Nepomuceno",
            ],
            [
                "idestado" => 31,
                "nome" => "São Joaquim de Bicas",
            ],
            [
                "idestado" => 31,
                "nome" => "São José da Barra",
            ],
            [
                "idestado" => 31,
                "nome" => "São José da Lapa",
            ],
            [
                "idestado" => 31,
                "nome" => "São José da Safira",
            ],
            [
                "idestado" => 31,
                "nome" => "São José da Varginha",
            ],
            [
                "idestado" => 31,
                "nome" => "São José do Alegre",
            ],
            [
                "idestado" => 31,
                "nome" => "São José do Divino",
            ],
            [
                "idestado" => 31,
                "nome" => "São José do Goiabal",
            ],
            [
                "idestado" => 31,
                "nome" => "São José do Jacuri",
            ],
            [
                "idestado" => 31,
                "nome" => "São José do Mantimento",
            ],
            [
                "idestado" => 31,
                "nome" => "São Lourenço",
            ],
            [
                "idestado" => 31,
                "nome" => "São Miguel do Anta",
            ],
            [
                "idestado" => 31,
                "nome" => "São Pedro da União",
            ],
            [
                "idestado" => 31,
                "nome" => "São Pedro do Suaçuí",
            ],
            [
                "idestado" => 31,
                "nome" => "São Pedro dos Ferros",
            ],
            [
                "idestado" => 31,
                "nome" => "São Romão",
            ],
            [
                "idestado" => 31,
                "nome" => "São Roque de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "São Sebastião da Bela Vista",
            ],
            [
                "idestado" => 31,
                "nome" => "São Sebastião da Vargem Alegre",
            ],
            [
                "idestado" => 31,
                "nome" => "São Sebastião do Anta",
            ],
            [
                "idestado" => 31,
                "nome" => "São Sebastião do Maranhão",
            ],
            [
                "idestado" => 31,
                "nome" => "São Sebastião do Oeste",
            ],
            [
                "idestado" => 31,
                "nome" => "São Sebastião do Paraíso",
            ],
            [
                "idestado" => 31,
                "nome" => "São Sebastião do Rio Preto",
            ],
            [
                "idestado" => 31,
                "nome" => "São Sebastião do Rio Verde",
            ],
            [
                "idestado" => 31,
                "nome" => "São Tiago",
            ],
            [
                "idestado" => 31,
                "nome" => "São Tomás de Aquino",
            ],
            [
                "idestado" => 31,
                "nome" => "São Tomé das Letras",
            ],
            [
                "idestado" => 31,
                "nome" => "São Vicente de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Sapucaí-Mirim",
            ],
            [
                "idestado" => 31,
                "nome" => "Sardoá",
            ],
            [
                "idestado" => 31,
                "nome" => "Sarzedo",
            ],
            [
                "idestado" => 31,
                "nome" => "Sem-Peixe",
            ],
            [
                "idestado" => 31,
                "nome" => "Senador Amaral",
            ],
            [
                "idestado" => 31,
                "nome" => "Senador Cortes",
            ],
            [
                "idestado" => 31,
                "nome" => "Senador Firmino",
            ],
            [
                "idestado" => 31,
                "nome" => "Senador José Bento",
            ],
            [
                "idestado" => 31,
                "nome" => "Senador Modestino Gonçalves",
            ],
            [
                "idestado" => 31,
                "nome" => "Senhora de Oliveira",
            ],
            [
                "idestado" => 31,
                "nome" => "Senhora do Porto",
            ],
            [
                "idestado" => 31,
                "nome" => "Senhora dos Remédios",
            ],
            [
                "idestado" => 31,
                "nome" => "Sericita",
            ],
            [
                "idestado" => 31,
                "nome" => "Seritinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Serra Azul de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Serra da Saudade",
            ],
            [
                "idestado" => 31,
                "nome" => "Serra do Salitre",
            ],
            [
                "idestado" => 31,
                "nome" => "Serra dos Aimorés",
            ],
            [
                "idestado" => 31,
                "nome" => "Serrania",
            ],
            [
                "idestado" => 31,
                "nome" => "Serranópolis de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Serranos",
            ],
            [
                "idestado" => 31,
                "nome" => "Serro",
            ],
            [
                "idestado" => 31,
                "nome" => "Sete Lagoas",
            ],
            [
                "idestado" => 31,
                "nome" => "Setubinha",
            ],
            [
                "idestado" => 31,
                "nome" => "Silveirânia",
            ],
            [
                "idestado" => 31,
                "nome" => "Silvianópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Simão Pereira",
            ],
            [
                "idestado" => 31,
                "nome" => "Simonésia",
            ],
            [
                "idestado" => 31,
                "nome" => "Sobrália",
            ],
            [
                "idestado" => 31,
                "nome" => "Soledade de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Tabuleiro",
            ],
            [
                "idestado" => 31,
                "nome" => "Taiobeiras",
            ],
            [
                "idestado" => 31,
                "nome" => "Taparuba",
            ],
            [
                "idestado" => 31,
                "nome" => "Tapira",
            ],
            [
                "idestado" => 31,
                "nome" => "Tapiraí",
            ],
            [
                "idestado" => 31,
                "nome" => "Taquaraçu de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Tarumirim",
            ],
            [
                "idestado" => 31,
                "nome" => "Teixeiras",
            ],
            [
                "idestado" => 31,
                "nome" => "Teófilo Otoni",
            ],
            [
                "idestado" => 31,
                "nome" => "Timóteo",
            ],
            [
                "idestado" => 31,
                "nome" => "Tiradentes",
            ],
            [
                "idestado" => 31,
                "nome" => "Tiros",
            ],
            [
                "idestado" => 31,
                "nome" => "Tocantins",
            ],
            [
                "idestado" => 31,
                "nome" => "Tocos do Moji",
            ],
            [
                "idestado" => 31,
                "nome" => "Toledo",
            ],
            [
                "idestado" => 31,
                "nome" => "Tombos",
            ],
            [
                "idestado" => 31,
                "nome" => "Três Corações",
            ],
            [
                "idestado" => 31,
                "nome" => "Três Marias",
            ],
            [
                "idestado" => 31,
                "nome" => "Três Pontas",
            ],
            [
                "idestado" => 31,
                "nome" => "Tumiritinga",
            ],
            [
                "idestado" => 31,
                "nome" => "Tupaciguara",
            ],
            [
                "idestado" => 31,
                "nome" => "Turmalina",
            ],
            [
                "idestado" => 31,
                "nome" => "Turvolândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Ubá",
            ],
            [
                "idestado" => 31,
                "nome" => "Ubaí",
            ],
            [
                "idestado" => 31,
                "nome" => "Ubaporanga",
            ],
            [
                "idestado" => 31,
                "nome" => "Uberaba",
            ],
            [
                "idestado" => 31,
                "nome" => "Uberlândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Umburatiba",
            ],
            [
                "idestado" => 31,
                "nome" => "Unaí",
            ],
            [
                "idestado" => 31,
                "nome" => "União de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Uruana de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Urucânia",
            ],
            [
                "idestado" => 31,
                "nome" => "Urucuia",
            ],
            [
                "idestado" => 31,
                "nome" => "Vargem Alegre",
            ],
            [
                "idestado" => 31,
                "nome" => "Vargem Bonita",
            ],
            [
                "idestado" => 31,
                "nome" => "Vargem Grande do Rio Pardo",
            ],
            [
                "idestado" => 31,
                "nome" => "Varginha",
            ],
            [
                "idestado" => 31,
                "nome" => "Varjão de Minas",
            ],
            [
                "idestado" => 31,
                "nome" => "Várzea da Palma",
            ],
            [
                "idestado" => 31,
                "nome" => "Varzelândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Vazante",
            ],
            [
                "idestado" => 31,
                "nome" => "Verdelândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Veredinha",
            ],
            [
                "idestado" => 31,
                "nome" => "Veríssimo",
            ],
            [
                "idestado" => 31,
                "nome" => "Vermelho Novo",
            ],
            [
                "idestado" => 31,
                "nome" => "Vespasiano",
            ],
            [
                "idestado" => 31,
                "nome" => "Viçosa",
            ],
            [
                "idestado" => 31,
                "nome" => "Vieiras",
            ],
            [
                "idestado" => 31,
                "nome" => "Virgem da Lapa",
            ],
            [
                "idestado" => 31,
                "nome" => "Virgínia",
            ],
            [
                "idestado" => 31,
                "nome" => "Virginópolis",
            ],
            [
                "idestado" => 31,
                "nome" => "Virgolândia",
            ],
            [
                "idestado" => 31,
                "nome" => "Visconde do Rio Branco",
            ],
            [
                "idestado" => 31,
                "nome" => "Volta Grande",
            ],
            [
                "idestado" => 31,
                "nome" => "Wenceslau Braz",
            ],
            [
                "idestado" => 32,
                "nome" => "Afonso Cláudio",
            ],
            [
                "idestado" => 32,
                "nome" => "Água Doce do Norte",
            ],
            [
                "idestado" => 32,
                "nome" => "Águia Branca",
            ],
            [
                "idestado" => 32,
                "nome" => "Alegre",
            ],
            [
                "idestado" => 32,
                "nome" => "Alfredo Chaves",
            ],
            [
                "idestado" => 32,
                "nome" => "Alto Rio Novo",
            ],
            [
                "idestado" => 32,
                "nome" => "Anchieta",
            ],
            [
                "idestado" => 32,
                "nome" => "Apiacá",
            ],
            [
                "idestado" => 32,
                "nome" => "Aracruz",
            ],
            [
                "idestado" => 32,
                "nome" => "Atílio Vivácqua",
            ],
            [
                "idestado" => 32,
                "nome" => "Baixo Guandu",
            ],
            [
                "idestado" => 32,
                "nome" => "Barra de São Francisco",
            ],
            [
                "idestado" => 32,
                "nome" => "Boa Esperança",
            ],
            [
                "idestado" => 32,
                "nome" => "Bom Jesus do Norte",
            ],
            [
                "idestado" => 32,
                "nome" => "Brejetuba",
            ],
            [
                "idestado" => 32,
                "nome" => "Cachoeiro de Itapemirim",
            ],
            [
                "idestado" => 32,
                "nome" => "Cariacica",
            ],
            [
                "idestado" => 32,
                "nome" => "Castelo",
            ],
            [
                "idestado" => 32,
                "nome" => "Colatina",
            ],
            [
                "idestado" => 32,
                "nome" => "Conceição da Barra",
            ],
            [
                "idestado" => 32,
                "nome" => "Conceição do Castelo",
            ],
            [
                "idestado" => 32,
                "nome" => "Divino de São Lourenço",
            ],
            [
                "idestado" => 32,
                "nome" => "Domingos Martins",
            ],
            [
                "idestado" => 32,
                "nome" => "Dores do Rio Preto",
            ],
            [
                "idestado" => 32,
                "nome" => "Ecoporanga",
            ],
            [
                "idestado" => 32,
                "nome" => "Fundão",
            ],
            [
                "idestado" => 32,
                "nome" => "Governador Lindenberg",
            ],
            [
                "idestado" => 32,
                "nome" => "Guaçuí",
            ],
            [
                "idestado" => 32,
                "nome" => "Guarapari",
            ],
            [
                "idestado" => 32,
                "nome" => "Ibatiba",
            ],
            [
                "idestado" => 32,
                "nome" => "Ibiraçu",
            ],
            [
                "idestado" => 32,
                "nome" => "Ibitirama",
            ],
            [
                "idestado" => 32,
                "nome" => "Iconha",
            ],
            [
                "idestado" => 32,
                "nome" => "Irupi",
            ],
            [
                "idestado" => 32,
                "nome" => "Itaguaçu",
            ],
            [
                "idestado" => 32,
                "nome" => "Itapemirim",
            ],
            [
                "idestado" => 32,
                "nome" => "Itarana",
            ],
            [
                "idestado" => 32,
                "nome" => "Iúna",
            ],
            [
                "idestado" => 32,
                "nome" => "Jaguaré",
            ],
            [
                "idestado" => 32,
                "nome" => "Jerônimo Monteiro",
            ],
            [
                "idestado" => 32,
                "nome" => "João Neiva",
            ],
            [
                "idestado" => 32,
                "nome" => "Laranja da Terra",
            ],
            [
                "idestado" => 32,
                "nome" => "Linhares",
            ],
            [
                "idestado" => 32,
                "nome" => "Mantenópolis",
            ],
            [
                "idestado" => 32,
                "nome" => "Marataízes",
            ],
            [
                "idestado" => 32,
                "nome" => "Marechal Floriano",
            ],
            [
                "idestado" => 32,
                "nome" => "Marilândia",
            ],
            [
                "idestado" => 32,
                "nome" => "Mimoso do Sul",
            ],
            [
                "idestado" => 32,
                "nome" => "Montanha",
            ],
            [
                "idestado" => 32,
                "nome" => "Mucurici",
            ],
            [
                "idestado" => 32,
                "nome" => "Muniz Freire",
            ],
            [
                "idestado" => 32,
                "nome" => "Muqui",
            ],
            [
                "idestado" => 32,
                "nome" => "Nova Venécia",
            ],
            [
                "idestado" => 32,
                "nome" => "Pancas",
            ],
            [
                "idestado" => 32,
                "nome" => "Pedro Canário",
            ],
            [
                "idestado" => 32,
                "nome" => "Pinheiros",
            ],
            [
                "idestado" => 32,
                "nome" => "Piúma",
            ],
            [
                "idestado" => 32,
                "nome" => "Ponto Belo",
            ],
            [
                "idestado" => 32,
                "nome" => "Presidente Kennedy",
            ],
            [
                "idestado" => 32,
                "nome" => "Rio Bananal",
            ],
            [
                "idestado" => 32,
                "nome" => "Rio Novo do Sul",
            ],
            [
                "idestado" => 32,
                "nome" => "Santa Leopoldina",
            ],
            [
                "idestado" => 32,
                "nome" => "Santa Maria de Jetibá",
            ],
            [
                "idestado" => 32,
                "nome" => "Santa Teresa",
            ],
            [
                "idestado" => 32,
                "nome" => "São Domingos do Norte",
            ],
            [
                "idestado" => 32,
                "nome" => "São Gabriel da Palha",
            ],
            [
                "idestado" => 32,
                "nome" => "São José do Calçado",
            ],
            [
                "idestado" => 32,
                "nome" => "São Mateus",
            ],
            [
                "idestado" => 32,
                "nome" => "São Roque do Canaã",
            ],
            [
                "idestado" => 32,
                "nome" => "Serra",
            ],
            [
                "idestado" => 32,
                "nome" => "Sooretama",
            ],
            [
                "idestado" => 32,
                "nome" => "Vargem Alta",
            ],
            [
                "idestado" => 32,
                "nome" => "Venda Nova do Imigrante",
            ],
            [
                "idestado" => 32,
                "nome" => "Viana",
            ],
            [
                "idestado" => 32,
                "nome" => "Vila Pavão",
            ],
            [
                "idestado" => 32,
                "nome" => "Vila Valério",
            ],
            [
                "idestado" => 32,
                "nome" => "Vila Velha",
            ],
            [
                "idestado" => 32,
                "nome" => "Vitória",
            ],
            [
                "idestado" => 33,
                "nome" => "Angra dos Reis",
            ],
            [
                "idestado" => 33,
                "nome" => "Aperibé",
            ],
            [
                "idestado" => 33,
                "nome" => "Araruama",
            ],
            [
                "idestado" => 33,
                "nome" => "Areal",
            ],
            [
                "idestado" => 33,
                "nome" => "Armação dos Búzios",
            ],
            [
                "idestado" => 33,
                "nome" => "Arraial do Cabo",
            ],
            [
                "idestado" => 33,
                "nome" => "Barra do Piraí",
            ],
            [
                "idestado" => 33,
                "nome" => "Barra Mansa",
            ],
            [
                "idestado" => 33,
                "nome" => "Belford Roxo",
            ],
            [
                "idestado" => 33,
                "nome" => "Bom Jardim",
            ],
            [
                "idestado" => 33,
                "nome" => "Bom Jesus do Itabapoana",
            ],
            [
                "idestado" => 33,
                "nome" => "Cabo Frio",
            ],
            [
                "idestado" => 33,
                "nome" => "Cachoeiras de Macacu",
            ],
            [
                "idestado" => 33,
                "nome" => "Cambuci",
            ],
            [
                "idestado" => 33,
                "nome" => "Campos dos Goytacazes",
            ],
            [
                "idestado" => 33,
                "nome" => "Cantagalo",
            ],
            [
                "idestado" => 33,
                "nome" => "Carapebus",
            ],
            [
                "idestado" => 33,
                "nome" => "Cardoso Moreira",
            ],
            [
                "idestado" => 33,
                "nome" => "Carmo",
            ],
            [
                "idestado" => 33,
                "nome" => "Casimiro de Abreu",
            ],
            [
                "idestado" => 33,
                "nome" => "Comendador Levy Gasparian",
            ],
            [
                "idestado" => 33,
                "nome" => "Conceição de Macabu",
            ],
            [
                "idestado" => 33,
                "nome" => "Cordeiro",
            ],
            [
                "idestado" => 33,
                "nome" => "Duas Barras",
            ],
            [
                "idestado" => 33,
                "nome" => "Duque de Caxias",
            ],
            [
                "idestado" => 33,
                "nome" => "Engenheiro Paulo de Frontin",
            ],
            [
                "idestado" => 33,
                "nome" => "Guapimirim",
            ],
            [
                "idestado" => 33,
                "nome" => "Iguaba Grande",
            ],
            [
                "idestado" => 33,
                "nome" => "Itaboraí",
            ],
            [
                "idestado" => 33,
                "nome" => "Itaguaí",
            ],
            [
                "idestado" => 33,
                "nome" => "Italva",
            ],
            [
                "idestado" => 33,
                "nome" => "Itaocara",
            ],
            [
                "idestado" => 33,
                "nome" => "Itaperuna",
            ],
            [
                "idestado" => 33,
                "nome" => "Itatiaia",
            ],
            [
                "idestado" => 33,
                "nome" => "Japeri",
            ],
            [
                "idestado" => 33,
                "nome" => "Laje do Muriaé",
            ],
            [
                "idestado" => 33,
                "nome" => "Macaé",
            ],
            [
                "idestado" => 33,
                "nome" => "Macuco",
            ],
            [
                "idestado" => 33,
                "nome" => "Magé",
            ],
            [
                "idestado" => 33,
                "nome" => "Mangaratiba",
            ],
            [
                "idestado" => 33,
                "nome" => "Maricá",
            ],
            [
                "idestado" => 33,
                "nome" => "Mendes",
            ],
            [
                "idestado" => 33,
                "nome" => "Mesquita",
            ],
            [
                "idestado" => 33,
                "nome" => "Miguel Pereira",
            ],
            [
                "idestado" => 33,
                "nome" => "Miracema",
            ],
            [
                "idestado" => 33,
                "nome" => "Natividade",
            ],
            [
                "idestado" => 33,
                "nome" => "Nilópolis",
            ],
            [
                "idestado" => 33,
                "nome" => "Niterói",
            ],
            [
                "idestado" => 33,
                "nome" => "Nova Friburgo",
            ],
            [
                "idestado" => 33,
                "nome" => "Nova Iguaçu",
            ],
            [
                "idestado" => 33,
                "nome" => "Paracambi",
            ],
            [
                "idestado" => 33,
                "nome" => "Paraíba do Sul",
            ],
            [
                "idestado" => 33,
                "nome" => "Paraty",
            ],
            [
                "idestado" => 33,
                "nome" => "Paty do Alferes",
            ],
            [
                "idestado" => 33,
                "nome" => "Petrópolis",
            ],
            [
                "idestado" => 33,
                "nome" => "Pinheiral",
            ],
            [
                "idestado" => 33,
                "nome" => "Piraí",
            ],
            [
                "idestado" => 33,
                "nome" => "Porciúncula",
            ],
            [
                "idestado" => 33,
                "nome" => "Porto Real",
            ],
            [
                "idestado" => 33,
                "nome" => "Quatis",
            ],
            [
                "idestado" => 33,
                "nome" => "Queimados",
            ],
            [
                "idestado" => 33,
                "nome" => "Quissamã",
            ],
            [
                "idestado" => 33,
                "nome" => "Resende",
            ],
            [
                "idestado" => 33,
                "nome" => "Rio Bonito",
            ],
            [
                "idestado" => 33,
                "nome" => "Rio Claro",
            ],
            [
                "idestado" => 33,
                "nome" => "Rio das Flores",
            ],
            [
                "idestado" => 33,
                "nome" => "Rio das Ostras",
            ],
            [
                "idestado" => 33,
                "nome" => "Rio de Janeiro",
            ],
            [
                "idestado" => 33,
                "nome" => "Santa Maria Madalena",
            ],
            [
                "idestado" => 33,
                "nome" => "Santo Antônio de Pádua",
            ],
            [
                "idestado" => 33,
                "nome" => "São Fidélis",
            ],
            [
                "idestado" => 33,
                "nome" => "São Francisco de Itabapoana",
            ],
            [
                "idestado" => 33,
                "nome" => "São Gonçalo",
            ],
            [
                "idestado" => 33,
                "nome" => "São João da Barra",
            ],
            [
                "idestado" => 33,
                "nome" => "São João de Meriti",
            ],
            [
                "idestado" => 33,
                "nome" => "São José de Ubá",
            ],
            [
                "idestado" => 33,
                "nome" => "São José do Vale do Rio Preto",
            ],
            [
                "idestado" => 33,
                "nome" => "São Pedro da Aldeia",
            ],
            [
                "idestado" => 33,
                "nome" => "São Sebastião do Alto",
            ],
            [
                "idestado" => 33,
                "nome" => "Sapucaia",
            ],
            [
                "idestado" => 33,
                "nome" => "Saquarema",
            ],
            [
                "idestado" => 33,
                "nome" => "Seropédica",
            ],
            [
                "idestado" => 33,
                "nome" => "Silva Jardim",
            ],
            [
                "idestado" => 33,
                "nome" => "Sumidouro",
            ],
            [
                "idestado" => 33,
                "nome" => "Tanguá",
            ],
            [
                "idestado" => 33,
                "nome" => "Teresópolis",
            ],
            [
                "idestado" => 33,
                "nome" => "Trajano de Moraes",
            ],
            [
                "idestado" => 33,
                "nome" => "Três Rios",
            ],
            [
                "idestado" => 33,
                "nome" => "Valença",
            ],
            [
                "idestado" => 33,
                "nome" => "Varre-Sai",
            ],
            [
                "idestado" => 33,
                "nome" => "Vassouras",
            ],
            [
                "idestado" => 33,
                "nome" => "Volta Redonda",
            ],
            [
                "idestado" => 35,
                "nome" => "Adamantina",
            ],
            [
                "idestado" => 35,
                "nome" => "Adolfo",
            ],
            [
                "idestado" => 35,
                "nome" => "Aguaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Águas da Prata",
            ],
            [
                "idestado" => 35,
                "nome" => "Águas de Lindóia",
            ],
            [
                "idestado" => 35,
                "nome" => "Águas de Santa Bárbara",
            ],
            [
                "idestado" => 35,
                "nome" => "Águas de São Pedro",
            ],
            [
                "idestado" => 35,
                "nome" => "Agudos",
            ],
            [
                "idestado" => 35,
                "nome" => "Alambari",
            ],
            [
                "idestado" => 35,
                "nome" => "Alfredo Marcondes",
            ],
            [
                "idestado" => 35,
                "nome" => "Altair",
            ],
            [
                "idestado" => 35,
                "nome" => "Altinópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Alto Alegre",
            ],
            [
                "idestado" => 35,
                "nome" => "Alumínio",
            ],
            [
                "idestado" => 35,
                "nome" => "Álvares Florence",
            ],
            [
                "idestado" => 35,
                "nome" => "Álvares Machado",
            ],
            [
                "idestado" => 35,
                "nome" => "Álvaro de Carvalho",
            ],
            [
                "idestado" => 35,
                "nome" => "Alvinlândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Americana",
            ],
            [
                "idestado" => 35,
                "nome" => "Américo Brasiliense",
            ],
            [
                "idestado" => 35,
                "nome" => "Américo de Campos",
            ],
            [
                "idestado" => 35,
                "nome" => "Amparo",
            ],
            [
                "idestado" => 35,
                "nome" => "Analândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Andradina",
            ],
            [
                "idestado" => 35,
                "nome" => "Angatuba",
            ],
            [
                "idestado" => 35,
                "nome" => "Anhembi",
            ],
            [
                "idestado" => 35,
                "nome" => "Anhumas",
            ],
            [
                "idestado" => 35,
                "nome" => "Aparecida",
            ],
            [
                "idestado" => 35,
                "nome" => "Aparecida d'Oeste",
            ],
            [
                "idestado" => 35,
                "nome" => "Apiaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Araçariguama",
            ],
            [
                "idestado" => 35,
                "nome" => "Araçatuba",
            ],
            [
                "idestado" => 35,
                "nome" => "Araçoiaba da Serra",
            ],
            [
                "idestado" => 35,
                "nome" => "Aramina",
            ],
            [
                "idestado" => 35,
                "nome" => "Arandu",
            ],
            [
                "idestado" => 35,
                "nome" => "Arapeí",
            ],
            [
                "idestado" => 35,
                "nome" => "Araraquara",
            ],
            [
                "idestado" => 35,
                "nome" => "Araras",
            ],
            [
                "idestado" => 35,
                "nome" => "Arco-Íris",
            ],
            [
                "idestado" => 35,
                "nome" => "Arealva",
            ],
            [
                "idestado" => 35,
                "nome" => "Areias",
            ],
            [
                "idestado" => 35,
                "nome" => "Areiópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Ariranha",
            ],
            [
                "idestado" => 35,
                "nome" => "Artur Nogueira",
            ],
            [
                "idestado" => 35,
                "nome" => "Arujá",
            ],
            [
                "idestado" => 35,
                "nome" => "Aspásia",
            ],
            [
                "idestado" => 35,
                "nome" => "Assis",
            ],
            [
                "idestado" => 35,
                "nome" => "Atibaia",
            ],
            [
                "idestado" => 35,
                "nome" => "Auriflama",
            ],
            [
                "idestado" => 35,
                "nome" => "Avaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Avanhandava",
            ],
            [
                "idestado" => 35,
                "nome" => "Avaré",
            ],
            [
                "idestado" => 35,
                "nome" => "Bady Bassitt",
            ],
            [
                "idestado" => 35,
                "nome" => "Balbinos",
            ],
            [
                "idestado" => 35,
                "nome" => "Bálsamo",
            ],
            [
                "idestado" => 35,
                "nome" => "Bananal",
            ],
            [
                "idestado" => 35,
                "nome" => "Barão de Antonina",
            ],
            [
                "idestado" => 35,
                "nome" => "Barbosa",
            ],
            [
                "idestado" => 35,
                "nome" => "Bariri",
            ],
            [
                "idestado" => 35,
                "nome" => "Barra Bonita",
            ],
            [
                "idestado" => 35,
                "nome" => "Barra do Chapéu",
            ],
            [
                "idestado" => 35,
                "nome" => "Barra do Turvo",
            ],
            [
                "idestado" => 35,
                "nome" => "Barretos",
            ],
            [
                "idestado" => 35,
                "nome" => "Barrinha",
            ],
            [
                "idestado" => 35,
                "nome" => "Barueri",
            ],
            [
                "idestado" => 35,
                "nome" => "Bastos",
            ],
            [
                "idestado" => 35,
                "nome" => "Batatais",
            ],
            [
                "idestado" => 35,
                "nome" => "Bauru",
            ],
            [
                "idestado" => 35,
                "nome" => "Bebedouro",
            ],
            [
                "idestado" => 35,
                "nome" => "Bento de Abreu",
            ],
            [
                "idestado" => 35,
                "nome" => "Bernardino de Campos",
            ],
            [
                "idestado" => 35,
                "nome" => "Bertioga",
            ],
            [
                "idestado" => 35,
                "nome" => "Bilac",
            ],
            [
                "idestado" => 35,
                "nome" => "Birigui",
            ],
            [
                "idestado" => 35,
                "nome" => "Biritiba Mirim",
            ],
            [
                "idestado" => 35,
                "nome" => "Boa Esperança do Sul",
            ],
            [
                "idestado" => 35,
                "nome" => "Bocaina",
            ],
            [
                "idestado" => 35,
                "nome" => "Bofete",
            ],
            [
                "idestado" => 35,
                "nome" => "Boituva",
            ],
            [
                "idestado" => 35,
                "nome" => "Bom Jesus dos Perdões",
            ],
            [
                "idestado" => 35,
                "nome" => "Bom Sucesso de Itararé",
            ],
            [
                "idestado" => 35,
                "nome" => "Borá",
            ],
            [
                "idestado" => 35,
                "nome" => "Boracéia",
            ],
            [
                "idestado" => 35,
                "nome" => "Borborema",
            ],
            [
                "idestado" => 35,
                "nome" => "Borebi",
            ],
            [
                "idestado" => 35,
                "nome" => "Botucatu",
            ],
            [
                "idestado" => 35,
                "nome" => "Bragança Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Braúna",
            ],
            [
                "idestado" => 35,
                "nome" => "Brejo Alegre",
            ],
            [
                "idestado" => 35,
                "nome" => "Brodowski",
            ],
            [
                "idestado" => 35,
                "nome" => "Brotas",
            ],
            [
                "idestado" => 35,
                "nome" => "Buri",
            ],
            [
                "idestado" => 35,
                "nome" => "Buritama",
            ],
            [
                "idestado" => 35,
                "nome" => "Buritizal",
            ],
            [
                "idestado" => 35,
                "nome" => "Cabrália Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Cabreúva",
            ],
            [
                "idestado" => 35,
                "nome" => "Caçapava",
            ],
            [
                "idestado" => 35,
                "nome" => "Cachoeira Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Caconde",
            ],
            [
                "idestado" => 35,
                "nome" => "Cafelândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Caiabu",
            ],
            [
                "idestado" => 35,
                "nome" => "Caieiras",
            ],
            [
                "idestado" => 35,
                "nome" => "Caiuá",
            ],
            [
                "idestado" => 35,
                "nome" => "Cajamar",
            ],
            [
                "idestado" => 35,
                "nome" => "Cajati",
            ],
            [
                "idestado" => 35,
                "nome" => "Cajobi",
            ],
            [
                "idestado" => 35,
                "nome" => "Cajuru",
            ],
            [
                "idestado" => 35,
                "nome" => "Campina do Monte Alegre",
            ],
            [
                "idestado" => 35,
                "nome" => "Campinas",
            ],
            [
                "idestado" => 35,
                "nome" => "Campo Limpo Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Campos do Jordão",
            ],
            [
                "idestado" => 35,
                "nome" => "Campos Novos Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Cananéia",
            ],
            [
                "idestado" => 35,
                "nome" => "Canas",
            ],
            [
                "idestado" => 35,
                "nome" => "Cândido Mota",
            ],
            [
                "idestado" => 35,
                "nome" => "Cândido Rodrigues",
            ],
            [
                "idestado" => 35,
                "nome" => "Canitar",
            ],
            [
                "idestado" => 35,
                "nome" => "Capão Bonito",
            ],
            [
                "idestado" => 35,
                "nome" => "Capela do Alto",
            ],
            [
                "idestado" => 35,
                "nome" => "Capivari",
            ],
            [
                "idestado" => 35,
                "nome" => "Caraguatatuba",
            ],
            [
                "idestado" => 35,
                "nome" => "Carapicuíba",
            ],
            [
                "idestado" => 35,
                "nome" => "Cardoso",
            ],
            [
                "idestado" => 35,
                "nome" => "Casa Branca",
            ],
            [
                "idestado" => 35,
                "nome" => "Cássia dos Coqueiros",
            ],
            [
                "idestado" => 35,
                "nome" => "Castilho",
            ],
            [
                "idestado" => 35,
                "nome" => "Catanduva",
            ],
            [
                "idestado" => 35,
                "nome" => "Catiguá",
            ],
            [
                "idestado" => 35,
                "nome" => "Cedral",
            ],
            [
                "idestado" => 35,
                "nome" => "Cerqueira César",
            ],
            [
                "idestado" => 35,
                "nome" => "Cerquilho",
            ],
            [
                "idestado" => 35,
                "nome" => "Cesário Lange",
            ],
            [
                "idestado" => 35,
                "nome" => "Charqueada",
            ],
            [
                "idestado" => 35,
                "nome" => "Chavantes",
            ],
            [
                "idestado" => 35,
                "nome" => "Clementina",
            ],
            [
                "idestado" => 35,
                "nome" => "Colina",
            ],
            [
                "idestado" => 35,
                "nome" => "Colômbia",
            ],
            [
                "idestado" => 35,
                "nome" => "Conchal",
            ],
            [
                "idestado" => 35,
                "nome" => "Conchas",
            ],
            [
                "idestado" => 35,
                "nome" => "Cordeirópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Coroados",
            ],
            [
                "idestado" => 35,
                "nome" => "Coronel Macedo",
            ],
            [
                "idestado" => 35,
                "nome" => "Corumbataí",
            ],
            [
                "idestado" => 35,
                "nome" => "Cosmópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Cosmorama",
            ],
            [
                "idestado" => 35,
                "nome" => "Cotia",
            ],
            [
                "idestado" => 35,
                "nome" => "Cravinhos",
            ],
            [
                "idestado" => 35,
                "nome" => "Cristais Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Cruzália",
            ],
            [
                "idestado" => 35,
                "nome" => "Cruzeiro",
            ],
            [
                "idestado" => 35,
                "nome" => "Cubatão",
            ],
            [
                "idestado" => 35,
                "nome" => "Cunha",
            ],
            [
                "idestado" => 35,
                "nome" => "Descalvado",
            ],
            [
                "idestado" => 35,
                "nome" => "Diadema",
            ],
            [
                "idestado" => 35,
                "nome" => "Dirce Reis",
            ],
            [
                "idestado" => 35,
                "nome" => "Divinolândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Dobrada",
            ],
            [
                "idestado" => 35,
                "nome" => "Dois Córregos",
            ],
            [
                "idestado" => 35,
                "nome" => "Dolcinópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Dourado",
            ],
            [
                "idestado" => 35,
                "nome" => "Dracena",
            ],
            [
                "idestado" => 35,
                "nome" => "Duartina",
            ],
            [
                "idestado" => 35,
                "nome" => "Dumont",
            ],
            [
                "idestado" => 35,
                "nome" => "Echaporã",
            ],
            [
                "idestado" => 35,
                "nome" => "Eldorado",
            ],
            [
                "idestado" => 35,
                "nome" => "Elias Fausto",
            ],
            [
                "idestado" => 35,
                "nome" => "Elisiário",
            ],
            [
                "idestado" => 35,
                "nome" => "Embaúba",
            ],
            [
                "idestado" => 35,
                "nome" => "Embu das Artes",
            ],
            [
                "idestado" => 35,
                "nome" => "Embu-Guaçu",
            ],
            [
                "idestado" => 35,
                "nome" => "Emilianópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Engenheiro Coelho",
            ],
            [
                "idestado" => 35,
                "nome" => "Espírito Santo do Pinhal",
            ],
            [
                "idestado" => 35,
                "nome" => "Espírito Santo do Turvo",
            ],
            [
                "idestado" => 35,
                "nome" => "Estiva Gerbi",
            ],
            [
                "idestado" => 35,
                "nome" => "Estrela do Norte",
            ],
            [
                "idestado" => 35,
                "nome" => "Estrela d'Oeste",
            ],
            [
                "idestado" => 35,
                "nome" => "Euclides da Cunha Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Fartura",
            ],
            [
                "idestado" => 35,
                "nome" => "Fernando Prestes",
            ],
            [
                "idestado" => 35,
                "nome" => "Fernandópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Fernão",
            ],
            [
                "idestado" => 35,
                "nome" => "Ferraz de Vasconcelos",
            ],
            [
                "idestado" => 35,
                "nome" => "Flora Rica",
            ],
            [
                "idestado" => 35,
                "nome" => "Floreal",
            ],
            [
                "idestado" => 35,
                "nome" => "Flórida Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Florínea",
            ],
            [
                "idestado" => 35,
                "nome" => "Franca",
            ],
            [
                "idestado" => 35,
                "nome" => "Francisco Morato",
            ],
            [
                "idestado" => 35,
                "nome" => "Franco da Rocha",
            ],
            [
                "idestado" => 35,
                "nome" => "Gabriel Monteiro",
            ],
            [
                "idestado" => 35,
                "nome" => "Gália",
            ],
            [
                "idestado" => 35,
                "nome" => "Garça",
            ],
            [
                "idestado" => 35,
                "nome" => "Gastão Vidigal",
            ],
            [
                "idestado" => 35,
                "nome" => "Gavião Peixoto",
            ],
            [
                "idestado" => 35,
                "nome" => "General Salgado",
            ],
            [
                "idestado" => 35,
                "nome" => "Getulina",
            ],
            [
                "idestado" => 35,
                "nome" => "Glicério",
            ],
            [
                "idestado" => 35,
                "nome" => "Guaiçara",
            ],
            [
                "idestado" => 35,
                "nome" => "Guaimbê",
            ],
            [
                "idestado" => 35,
                "nome" => "Guaíra",
            ],
            [
                "idestado" => 35,
                "nome" => "Guapiaçu",
            ],
            [
                "idestado" => 35,
                "nome" => "Guapiara",
            ],
            [
                "idestado" => 35,
                "nome" => "Guará",
            ],
            [
                "idestado" => 35,
                "nome" => "Guaraçaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Guaraci",
            ],
            [
                "idestado" => 35,
                "nome" => "Guarani d'Oeste",
            ],
            [
                "idestado" => 35,
                "nome" => "Guarantã",
            ],
            [
                "idestado" => 35,
                "nome" => "Guararapes",
            ],
            [
                "idestado" => 35,
                "nome" => "Guararema",
            ],
            [
                "idestado" => 35,
                "nome" => "Guaratinguetá",
            ],
            [
                "idestado" => 35,
                "nome" => "Guareí",
            ],
            [
                "idestado" => 35,
                "nome" => "Guariba",
            ],
            [
                "idestado" => 35,
                "nome" => "Guarujá",
            ],
            [
                "idestado" => 35,
                "nome" => "Guarulhos",
            ],
            [
                "idestado" => 35,
                "nome" => "Guatapará",
            ],
            [
                "idestado" => 35,
                "nome" => "Guzolândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Herculândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Holambra",
            ],
            [
                "idestado" => 35,
                "nome" => "Hortolândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Iacanga",
            ],
            [
                "idestado" => 35,
                "nome" => "Iacri",
            ],
            [
                "idestado" => 35,
                "nome" => "Iaras",
            ],
            [
                "idestado" => 35,
                "nome" => "Ibaté",
            ],
            [
                "idestado" => 35,
                "nome" => "Ibirá",
            ],
            [
                "idestado" => 35,
                "nome" => "Ibirarema",
            ],
            [
                "idestado" => 35,
                "nome" => "Ibitinga",
            ],
            [
                "idestado" => 35,
                "nome" => "Ibiúna",
            ],
            [
                "idestado" => 35,
                "nome" => "Icém",
            ],
            [
                "idestado" => 35,
                "nome" => "Iepê",
            ],
            [
                "idestado" => 35,
                "nome" => "Igaraçu do Tietê",
            ],
            [
                "idestado" => 35,
                "nome" => "Igarapava",
            ],
            [
                "idestado" => 35,
                "nome" => "Igaratá",
            ],
            [
                "idestado" => 35,
                "nome" => "Iguape",
            ],
            [
                "idestado" => 35,
                "nome" => "Ilha Comprida",
            ],
            [
                "idestado" => 35,
                "nome" => "Ilha Solteira",
            ],
            [
                "idestado" => 35,
                "nome" => "Ilhabela",
            ],
            [
                "idestado" => 35,
                "nome" => "Indaiatuba",
            ],
            [
                "idestado" => 35,
                "nome" => "Indiana",
            ],
            [
                "idestado" => 35,
                "nome" => "Indiaporã",
            ],
            [
                "idestado" => 35,
                "nome" => "Inúbia Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Ipaussu",
            ],
            [
                "idestado" => 35,
                "nome" => "Iperó",
            ],
            [
                "idestado" => 35,
                "nome" => "Ipeúna",
            ],
            [
                "idestado" => 35,
                "nome" => "Ipiguá",
            ],
            [
                "idestado" => 35,
                "nome" => "Iporanga",
            ],
            [
                "idestado" => 35,
                "nome" => "Ipuã",
            ],
            [
                "idestado" => 35,
                "nome" => "Iracemápolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Irapuã",
            ],
            [
                "idestado" => 35,
                "nome" => "Irapuru",
            ],
            [
                "idestado" => 35,
                "nome" => "Itaberá",
            ],
            [
                "idestado" => 35,
                "nome" => "Itaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Itajobi",
            ],
            [
                "idestado" => 35,
                "nome" => "Itaju",
            ],
            [
                "idestado" => 35,
                "nome" => "Itanhaém",
            ],
            [
                "idestado" => 35,
                "nome" => "Itaoca",
            ],
            [
                "idestado" => 35,
                "nome" => "Itapecerica da Serra",
            ],
            [
                "idestado" => 35,
                "nome" => "Itapetininga",
            ],
            [
                "idestado" => 35,
                "nome" => "Itapeva",
            ],
            [
                "idestado" => 35,
                "nome" => "Itapevi",
            ],
            [
                "idestado" => 35,
                "nome" => "Itapira",
            ],
            [
                "idestado" => 35,
                "nome" => "Itapirapuã Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Itápolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Itaporanga",
            ],
            [
                "idestado" => 35,
                "nome" => "Itapuí",
            ],
            [
                "idestado" => 35,
                "nome" => "Itapura",
            ],
            [
                "idestado" => 35,
                "nome" => "Itaquaquecetuba",
            ],
            [
                "idestado" => 35,
                "nome" => "Itararé",
            ],
            [
                "idestado" => 35,
                "nome" => "Itariri",
            ],
            [
                "idestado" => 35,
                "nome" => "Itatiba",
            ],
            [
                "idestado" => 35,
                "nome" => "Itatinga",
            ],
            [
                "idestado" => 35,
                "nome" => "Itirapina",
            ],
            [
                "idestado" => 35,
                "nome" => "Itirapuã",
            ],
            [
                "idestado" => 35,
                "nome" => "Itobi",
            ],
            [
                "idestado" => 35,
                "nome" => "Itu",
            ],
            [
                "idestado" => 35,
                "nome" => "Itupeva",
            ],
            [
                "idestado" => 35,
                "nome" => "Ituverava",
            ],
            [
                "idestado" => 35,
                "nome" => "Jaborandi",
            ],
            [
                "idestado" => 35,
                "nome" => "Jaboticabal",
            ],
            [
                "idestado" => 35,
                "nome" => "Jacareí",
            ],
            [
                "idestado" => 35,
                "nome" => "Jaci",
            ],
            [
                "idestado" => 35,
                "nome" => "Jacupiranga",
            ],
            [
                "idestado" => 35,
                "nome" => "Jaguariúna",
            ],
            [
                "idestado" => 35,
                "nome" => "Jales",
            ],
            [
                "idestado" => 35,
                "nome" => "Jambeiro",
            ],
            [
                "idestado" => 35,
                "nome" => "Jandira",
            ],
            [
                "idestado" => 35,
                "nome" => "Jardinópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Jarinu",
            ],
            [
                "idestado" => 35,
                "nome" => "Jaú",
            ],
            [
                "idestado" => 35,
                "nome" => "Jeriquara",
            ],
            [
                "idestado" => 35,
                "nome" => "Joanópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "João Ramalho",
            ],
            [
                "idestado" => 35,
                "nome" => "José Bonifácio",
            ],
            [
                "idestado" => 35,
                "nome" => "Júlio Mesquita",
            ],
            [
                "idestado" => 35,
                "nome" => "Jumirim",
            ],
            [
                "idestado" => 35,
                "nome" => "Jundiaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Junqueirópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Juquiá",
            ],
            [
                "idestado" => 35,
                "nome" => "Juquitiba",
            ],
            [
                "idestado" => 35,
                "nome" => "Lagoinha",
            ],
            [
                "idestado" => 35,
                "nome" => "Laranjal Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Lavínia",
            ],
            [
                "idestado" => 35,
                "nome" => "Lavrinhas",
            ],
            [
                "idestado" => 35,
                "nome" => "Leme",
            ],
            [
                "idestado" => 35,
                "nome" => "Lençóis Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Limeira",
            ],
            [
                "idestado" => 35,
                "nome" => "Lindóia",
            ],
            [
                "idestado" => 35,
                "nome" => "Lins",
            ],
            [
                "idestado" => 35,
                "nome" => "Lorena",
            ],
            [
                "idestado" => 35,
                "nome" => "Lourdes",
            ],
            [
                "idestado" => 35,
                "nome" => "Louveira",
            ],
            [
                "idestado" => 35,
                "nome" => "Lucélia",
            ],
            [
                "idestado" => 35,
                "nome" => "Lucianópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Luís Antônio",
            ],
            [
                "idestado" => 35,
                "nome" => "Luiziânia",
            ],
            [
                "idestado" => 35,
                "nome" => "Lupércio",
            ],
            [
                "idestado" => 35,
                "nome" => "Lutécia",
            ],
            [
                "idestado" => 35,
                "nome" => "Macatuba",
            ],
            [
                "idestado" => 35,
                "nome" => "Macaubal",
            ],
            [
                "idestado" => 35,
                "nome" => "Macedônia",
            ],
            [
                "idestado" => 35,
                "nome" => "Magda",
            ],
            [
                "idestado" => 35,
                "nome" => "Mairinque",
            ],
            [
                "idestado" => 35,
                "nome" => "Mairiporã",
            ],
            [
                "idestado" => 35,
                "nome" => "Manduri",
            ],
            [
                "idestado" => 35,
                "nome" => "Marabá Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Maracaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Marapoama",
            ],
            [
                "idestado" => 35,
                "nome" => "Mariápolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Marília",
            ],
            [
                "idestado" => 35,
                "nome" => "Marinópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Martinópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Matão",
            ],
            [
                "idestado" => 35,
                "nome" => "Mauá",
            ],
            [
                "idestado" => 35,
                "nome" => "Mendonça",
            ],
            [
                "idestado" => 35,
                "nome" => "Meridiano",
            ],
            [
                "idestado" => 35,
                "nome" => "Mesópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Miguelópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Mineiros do Tietê",
            ],
            [
                "idestado" => 35,
                "nome" => "Mira Estrela",
            ],
            [
                "idestado" => 35,
                "nome" => "Miracatu",
            ],
            [
                "idestado" => 35,
                "nome" => "Mirandópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Mirante do Paranapanema",
            ],
            [
                "idestado" => 35,
                "nome" => "Mirassol",
            ],
            [
                "idestado" => 35,
                "nome" => "Mirassolândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Mococa",
            ],
            [
                "idestado" => 35,
                "nome" => "Mogi das Cruzes",
            ],
            [
                "idestado" => 35,
                "nome" => "Mogi Guaçu",
            ],
            [
                "idestado" => 35,
                "nome" => "Mogi Mirim",
            ],
            [
                "idestado" => 35,
                "nome" => "Mombuca",
            ],
            [
                "idestado" => 35,
                "nome" => "Monções",
            ],
            [
                "idestado" => 35,
                "nome" => "Mongaguá",
            ],
            [
                "idestado" => 35,
                "nome" => "Monte Alegre do Sul",
            ],
            [
                "idestado" => 35,
                "nome" => "Monte Alto",
            ],
            [
                "idestado" => 35,
                "nome" => "Monte Aprazível",
            ],
            [
                "idestado" => 35,
                "nome" => "Monte Azul Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Monte Castelo",
            ],
            [
                "idestado" => 35,
                "nome" => "Monte Mor",
            ],
            [
                "idestado" => 35,
                "nome" => "Monteiro Lobato",
            ],
            [
                "idestado" => 35,
                "nome" => "Morro Agudo",
            ],
            [
                "idestado" => 35,
                "nome" => "Morungaba",
            ],
            [
                "idestado" => 35,
                "nome" => "Motuca",
            ],
            [
                "idestado" => 35,
                "nome" => "Murutinga do Sul",
            ],
            [
                "idestado" => 35,
                "nome" => "Nantes",
            ],
            [
                "idestado" => 35,
                "nome" => "Narandiba",
            ],
            [
                "idestado" => 35,
                "nome" => "Natividade da Serra",
            ],
            [
                "idestado" => 35,
                "nome" => "Nazaré Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Neves Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Nhandeara",
            ],
            [
                "idestado" => 35,
                "nome" => "Nipoã",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Aliança",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Campina",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Canaã Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Castilho",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Europa",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Granada",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Guataporanga",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Independência",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Luzitânia",
            ],
            [
                "idestado" => 35,
                "nome" => "Nova Odessa",
            ],
            [
                "idestado" => 35,
                "nome" => "Novais",
            ],
            [
                "idestado" => 35,
                "nome" => "Novo Horizonte",
            ],
            [
                "idestado" => 35,
                "nome" => "Nuporanga",
            ],
            [
                "idestado" => 35,
                "nome" => "Ocauçu",
            ],
            [
                "idestado" => 35,
                "nome" => "Óleo",
            ],
            [
                "idestado" => 35,
                "nome" => "Olímpia",
            ],
            [
                "idestado" => 35,
                "nome" => "Onda Verde",
            ],
            [
                "idestado" => 35,
                "nome" => "Oriente",
            ],
            [
                "idestado" => 35,
                "nome" => "Orindiúva",
            ],
            [
                "idestado" => 35,
                "nome" => "Orlândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Osasco",
            ],
            [
                "idestado" => 35,
                "nome" => "Oscar Bressane",
            ],
            [
                "idestado" => 35,
                "nome" => "Osvaldo Cruz",
            ],
            [
                "idestado" => 35,
                "nome" => "Ourinhos",
            ],
            [
                "idestado" => 35,
                "nome" => "Ouro Verde",
            ],
            [
                "idestado" => 35,
                "nome" => "Ouroeste",
            ],
            [
                "idestado" => 35,
                "nome" => "Pacaembu",
            ],
            [
                "idestado" => 35,
                "nome" => "Palestina",
            ],
            [
                "idestado" => 35,
                "nome" => "Palmares Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Palmeira d'Oeste",
            ],
            [
                "idestado" => 35,
                "nome" => "Palmital",
            ],
            [
                "idestado" => 35,
                "nome" => "Panorama",
            ],
            [
                "idestado" => 35,
                "nome" => "Paraguaçu Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Paraibuna",
            ],
            [
                "idestado" => 35,
                "nome" => "Paraíso",
            ],
            [
                "idestado" => 35,
                "nome" => "Paranapanema",
            ],
            [
                "idestado" => 35,
                "nome" => "Paranapuã",
            ],
            [
                "idestado" => 35,
                "nome" => "Parapuã",
            ],
            [
                "idestado" => 35,
                "nome" => "Pardinho",
            ],
            [
                "idestado" => 35,
                "nome" => "Pariquera-Açu",
            ],
            [
                "idestado" => 35,
                "nome" => "Parisi",
            ],
            [
                "idestado" => 35,
                "nome" => "Patrocínio Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Paulicéia",
            ],
            [
                "idestado" => 35,
                "nome" => "Paulínia",
            ],
            [
                "idestado" => 35,
                "nome" => "Paulistânia",
            ],
            [
                "idestado" => 35,
                "nome" => "Paulo de Faria",
            ],
            [
                "idestado" => 35,
                "nome" => "Pederneiras",
            ],
            [
                "idestado" => 35,
                "nome" => "Pedra Bela",
            ],
            [
                "idestado" => 35,
                "nome" => "Pedranópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Pedregulho",
            ],
            [
                "idestado" => 35,
                "nome" => "Pedreira",
            ],
            [
                "idestado" => 35,
                "nome" => "Pedrinhas Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Pedro de Toledo",
            ],
            [
                "idestado" => 35,
                "nome" => "Penápolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Pereira Barreto",
            ],
            [
                "idestado" => 35,
                "nome" => "Pereiras",
            ],
            [
                "idestado" => 35,
                "nome" => "Peruíbe",
            ],
            [
                "idestado" => 35,
                "nome" => "Piacatu",
            ],
            [
                "idestado" => 35,
                "nome" => "Piedade",
            ],
            [
                "idestado" => 35,
                "nome" => "Pilar do Sul",
            ],
            [
                "idestado" => 35,
                "nome" => "Pindamonhangaba",
            ],
            [
                "idestado" => 35,
                "nome" => "Pindorama",
            ],
            [
                "idestado" => 35,
                "nome" => "Pinhalzinho",
            ],
            [
                "idestado" => 35,
                "nome" => "Piquerobi",
            ],
            [
                "idestado" => 35,
                "nome" => "Piquete",
            ],
            [
                "idestado" => 35,
                "nome" => "Piracaia",
            ],
            [
                "idestado" => 35,
                "nome" => "Piracicaba",
            ],
            [
                "idestado" => 35,
                "nome" => "Piraju",
            ],
            [
                "idestado" => 35,
                "nome" => "Pirajuí",
            ],
            [
                "idestado" => 35,
                "nome" => "Pirangi",
            ],
            [
                "idestado" => 35,
                "nome" => "Pirapora do Bom Jesus",
            ],
            [
                "idestado" => 35,
                "nome" => "Pirapozinho",
            ],
            [
                "idestado" => 35,
                "nome" => "Pirassununga",
            ],
            [
                "idestado" => 35,
                "nome" => "Piratininga",
            ],
            [
                "idestado" => 35,
                "nome" => "Pitangueiras",
            ],
            [
                "idestado" => 35,
                "nome" => "Planalto",
            ],
            [
                "idestado" => 35,
                "nome" => "Platina",
            ],
            [
                "idestado" => 35,
                "nome" => "Poá",
            ],
            [
                "idestado" => 35,
                "nome" => "Poloni",
            ],
            [
                "idestado" => 35,
                "nome" => "Pompéia",
            ],
            [
                "idestado" => 35,
                "nome" => "Pongaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Pontal",
            ],
            [
                "idestado" => 35,
                "nome" => "Pontalinda",
            ],
            [
                "idestado" => 35,
                "nome" => "Pontes Gestal",
            ],
            [
                "idestado" => 35,
                "nome" => "Populina",
            ],
            [
                "idestado" => 35,
                "nome" => "Porangaba",
            ],
            [
                "idestado" => 35,
                "nome" => "Porto Feliz",
            ],
            [
                "idestado" => 35,
                "nome" => "Porto Ferreira",
            ],
            [
                "idestado" => 35,
                "nome" => "Potim",
            ],
            [
                "idestado" => 35,
                "nome" => "Potirendaba",
            ],
            [
                "idestado" => 35,
                "nome" => "Pracinha",
            ],
            [
                "idestado" => 35,
                "nome" => "Pradópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Praia Grande",
            ],
            [
                "idestado" => 35,
                "nome" => "Pratânia",
            ],
            [
                "idestado" => 35,
                "nome" => "Presidente Alves",
            ],
            [
                "idestado" => 35,
                "nome" => "Presidente Bernardes",
            ],
            [
                "idestado" => 35,
                "nome" => "Presidente Epitácio",
            ],
            [
                "idestado" => 35,
                "nome" => "Presidente Prudente",
            ],
            [
                "idestado" => 35,
                "nome" => "Presidente Venceslau",
            ],
            [
                "idestado" => 35,
                "nome" => "Promissão",
            ],
            [
                "idestado" => 35,
                "nome" => "Quadra",
            ],
            [
                "idestado" => 35,
                "nome" => "Quatá",
            ],
            [
                "idestado" => 35,
                "nome" => "Queiroz",
            ],
            [
                "idestado" => 35,
                "nome" => "Queluz",
            ],
            [
                "idestado" => 35,
                "nome" => "Quintana",
            ],
            [
                "idestado" => 35,
                "nome" => "Rafard",
            ],
            [
                "idestado" => 35,
                "nome" => "Rancharia",
            ],
            [
                "idestado" => 35,
                "nome" => "Redenção da Serra",
            ],
            [
                "idestado" => 35,
                "nome" => "Regente Feijó",
            ],
            [
                "idestado" => 35,
                "nome" => "Reginópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Registro",
            ],
            [
                "idestado" => 35,
                "nome" => "Restinga",
            ],
            [
                "idestado" => 35,
                "nome" => "Ribeira",
            ],
            [
                "idestado" => 35,
                "nome" => "Ribeirão Bonito",
            ],
            [
                "idestado" => 35,
                "nome" => "Ribeirão Branco",
            ],
            [
                "idestado" => 35,
                "nome" => "Ribeirão Corrente",
            ],
            [
                "idestado" => 35,
                "nome" => "Ribeirão do Sul",
            ],
            [
                "idestado" => 35,
                "nome" => "Ribeirão dos Índios",
            ],
            [
                "idestado" => 35,
                "nome" => "Ribeirão Grande",
            ],
            [
                "idestado" => 35,
                "nome" => "Ribeirão Pires",
            ],
            [
                "idestado" => 35,
                "nome" => "Ribeirão Preto",
            ],
            [
                "idestado" => 35,
                "nome" => "Rifaina",
            ],
            [
                "idestado" => 35,
                "nome" => "Rincão",
            ],
            [
                "idestado" => 35,
                "nome" => "Rinópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Rio Claro",
            ],
            [
                "idestado" => 35,
                "nome" => "Rio das Pedras",
            ],
            [
                "idestado" => 35,
                "nome" => "Rio Grande da Serra",
            ],
            [
                "idestado" => 35,
                "nome" => "Riolândia",
            ],
            [
                "idestado" => 35,
                "nome" => "Riversul",
            ],
            [
                "idestado" => 35,
                "nome" => "Rosana",
            ],
            [
                "idestado" => 35,
                "nome" => "Roseira",
            ],
            [
                "idestado" => 35,
                "nome" => "Rubiácea",
            ],
            [
                "idestado" => 35,
                "nome" => "Rubinéia",
            ],
            [
                "idestado" => 35,
                "nome" => "Sabino",
            ],
            [
                "idestado" => 35,
                "nome" => "Sagres",
            ],
            [
                "idestado" => 35,
                "nome" => "Sales",
            ],
            [
                "idestado" => 35,
                "nome" => "Sales Oliveira",
            ],
            [
                "idestado" => 35,
                "nome" => "Salesópolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Salmourão",
            ],
            [
                "idestado" => 35,
                "nome" => "Saltinho",
            ],
            [
                "idestado" => 35,
                "nome" => "Salto",
            ],
            [
                "idestado" => 35,
                "nome" => "Salto de Pirapora",
            ],
            [
                "idestado" => 35,
                "nome" => "Salto Grande",
            ],
            [
                "idestado" => 35,
                "nome" => "Sandovalina",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Adélia",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Albertina",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Bárbara d'Oeste",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Branca",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Clara d'Oeste",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Cruz da Conceição",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Cruz da Esperança",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Cruz das Palmeiras",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Cruz do Rio Pardo",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Ernestina",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Fé do Sul",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Gertrudes",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Isabel",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Lúcia",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Maria da Serra",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Mercedes",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Rita do Passa Quatro",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Rita d'Oeste",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Rosa de Viterbo",
            ],
            [
                "idestado" => 35,
                "nome" => "Santa Salete",
            ],
            [
                "idestado" => 35,
                "nome" => "Santana da Ponte Pensa",
            ],
            [
                "idestado" => 35,
                "nome" => "Santana de Parnaíba",
            ],
            [
                "idestado" => 35,
                "nome" => "Santo Anastácio",
            ],
            [
                "idestado" => 35,
                "nome" => "Santo André",
            ],
            [
                "idestado" => 35,
                "nome" => "Santo Antônio da Alegria",
            ],
            [
                "idestado" => 35,
                "nome" => "Santo Antônio de Posse",
            ],
            [
                "idestado" => 35,
                "nome" => "Santo Antônio do Aracanguá",
            ],
            [
                "idestado" => 35,
                "nome" => "Santo Antônio do Jardim",
            ],
            [
                "idestado" => 35,
                "nome" => "Santo Antônio do Pinhal",
            ],
            [
                "idestado" => 35,
                "nome" => "Santo Expedito",
            ],
            [
                "idestado" => 35,
                "nome" => "Santópolis do Aguapeí",
            ],
            [
                "idestado" => 35,
                "nome" => "Santos",
            ],
            [
                "idestado" => 35,
                "nome" => "São Bento do Sapucaí",
            ],
            [
                "idestado" => 35,
                "nome" => "São Bernardo do Campo",
            ],
            [
                "idestado" => 35,
                "nome" => "São Caetano do Sul",
            ],
            [
                "idestado" => 35,
                "nome" => "São Carlos",
            ],
            [
                "idestado" => 35,
                "nome" => "São Francisco",
            ],
            [
                "idestado" => 35,
                "nome" => "São João da Boa Vista",
            ],
            [
                "idestado" => 35,
                "nome" => "São João das Duas Pontes",
            ],
            [
                "idestado" => 35,
                "nome" => "São João de Iracema",
            ],
            [
                "idestado" => 35,
                "nome" => "São João do Pau d'Alho",
            ],
            [
                "idestado" => 35,
                "nome" => "São Joaquim da Barra",
            ],
            [
                "idestado" => 35,
                "nome" => "São José da Bela Vista",
            ],
            [
                "idestado" => 35,
                "nome" => "São José do Barreiro",
            ],
            [
                "idestado" => 35,
                "nome" => "São José do Rio Pardo",
            ],
            [
                "idestado" => 35,
                "nome" => "São José do Rio Preto",
            ],
            [
                "idestado" => 35,
                "nome" => "São José dos Campos",
            ],
            [
                "idestado" => 35,
                "nome" => "São Lourenço da Serra",
            ],
            [
                "idestado" => 35,
                "nome" => "São Luiz do Paraitinga",
            ],
            [
                "idestado" => 35,
                "nome" => "São Manuel",
            ],
            [
                "idestado" => 35,
                "nome" => "São Miguel Arcanjo",
            ],
            [
                "idestado" => 35,
                "nome" => "São Paulo",
            ],
            [
                "idestado" => 35,
                "nome" => "São Pedro",
            ],
            [
                "idestado" => 35,
                "nome" => "São Pedro do Turvo",
            ],
            [
                "idestado" => 35,
                "nome" => "São Roque",
            ],
            [
                "idestado" => 35,
                "nome" => "São Sebastião",
            ],
            [
                "idestado" => 35,
                "nome" => "São Sebastião da Grama",
            ],
            [
                "idestado" => 35,
                "nome" => "São Simão",
            ],
            [
                "idestado" => 35,
                "nome" => "São Vicente",
            ],
            [
                "idestado" => 35,
                "nome" => "Sarapuí",
            ],
            [
                "idestado" => 35,
                "nome" => "Sarutaiá",
            ],
            [
                "idestado" => 35,
                "nome" => "Sebastianópolis do Sul",
            ],
            [
                "idestado" => 35,
                "nome" => "Serra Azul",
            ],
            [
                "idestado" => 35,
                "nome" => "Serra Negra",
            ],
            [
                "idestado" => 35,
                "nome" => "Serrana",
            ],
            [
                "idestado" => 35,
                "nome" => "Sertãozinho",
            ],
            [
                "idestado" => 35,
                "nome" => "Sete Barras",
            ],
            [
                "idestado" => 35,
                "nome" => "Severínia",
            ],
            [
                "idestado" => 35,
                "nome" => "Silveiras",
            ],
            [
                "idestado" => 35,
                "nome" => "Socorro",
            ],
            [
                "idestado" => 35,
                "nome" => "Sorocaba",
            ],
            [
                "idestado" => 35,
                "nome" => "Sud Mennucci",
            ],
            [
                "idestado" => 35,
                "nome" => "Sumaré",
            ],
            [
                "idestado" => 35,
                "nome" => "Suzanápolis",
            ],
            [
                "idestado" => 35,
                "nome" => "Suzano",
            ],
            [
                "idestado" => 35,
                "nome" => "Tabapuã",
            ],
            [
                "idestado" => 35,
                "nome" => "Tabatinga",
            ],
            [
                "idestado" => 35,
                "nome" => "Taboão da Serra",
            ],
            [
                "idestado" => 35,
                "nome" => "Taciba",
            ],
            [
                "idestado" => 35,
                "nome" => "Taguaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Taiaçu",
            ],
            [
                "idestado" => 35,
                "nome" => "Taiúva",
            ],
            [
                "idestado" => 35,
                "nome" => "Tambaú",
            ],
            [
                "idestado" => 35,
                "nome" => "Tanabi",
            ],
            [
                "idestado" => 35,
                "nome" => "Tapiraí",
            ],
            [
                "idestado" => 35,
                "nome" => "Tapiratiba",
            ],
            [
                "idestado" => 35,
                "nome" => "Taquaral",
            ],
            [
                "idestado" => 35,
                "nome" => "Taquaritinga",
            ],
            [
                "idestado" => 35,
                "nome" => "Taquarituba",
            ],
            [
                "idestado" => 35,
                "nome" => "Taquarivaí",
            ],
            [
                "idestado" => 35,
                "nome" => "Tarabai",
            ],
            [
                "idestado" => 35,
                "nome" => "Tarumã",
            ],
            [
                "idestado" => 35,
                "nome" => "Tatuí",
            ],
            [
                "idestado" => 35,
                "nome" => "Taubaté",
            ],
            [
                "idestado" => 35,
                "nome" => "Tejupá",
            ],
            [
                "idestado" => 35,
                "nome" => "Teodoro Sampaio",
            ],
            [
                "idestado" => 35,
                "nome" => "Terra Roxa",
            ],
            [
                "idestado" => 35,
                "nome" => "Tietê",
            ],
            [
                "idestado" => 35,
                "nome" => "Timburi",
            ],
            [
                "idestado" => 35,
                "nome" => "Torre de Pedra",
            ],
            [
                "idestado" => 35,
                "nome" => "Torrinha",
            ],
            [
                "idestado" => 35,
                "nome" => "Trabiju",
            ],
            [
                "idestado" => 35,
                "nome" => "Tremembé",
            ],
            [
                "idestado" => 35,
                "nome" => "Três Fronteiras",
            ],
            [
                "idestado" => 35,
                "nome" => "Tuiuti",
            ],
            [
                "idestado" => 35,
                "nome" => "Tupã",
            ],
            [
                "idestado" => 35,
                "nome" => "Tupi Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Turiúba",
            ],
            [
                "idestado" => 35,
                "nome" => "Turmalina",
            ],
            [
                "idestado" => 35,
                "nome" => "Ubarana",
            ],
            [
                "idestado" => 35,
                "nome" => "Ubatuba",
            ],
            [
                "idestado" => 35,
                "nome" => "Ubirajara",
            ],
            [
                "idestado" => 35,
                "nome" => "Uchoa",
            ],
            [
                "idestado" => 35,
                "nome" => "União Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Urânia",
            ],
            [
                "idestado" => 35,
                "nome" => "Uru",
            ],
            [
                "idestado" => 35,
                "nome" => "Urupês",
            ],
            [
                "idestado" => 35,
                "nome" => "Valentim Gentil",
            ],
            [
                "idestado" => 35,
                "nome" => "Valinhos",
            ],
            [
                "idestado" => 35,
                "nome" => "Valparaíso",
            ],
            [
                "idestado" => 35,
                "nome" => "Vargem",
            ],
            [
                "idestado" => 35,
                "nome" => "Vargem Grande do Sul",
            ],
            [
                "idestado" => 35,
                "nome" => "Vargem Grande Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Várzea Paulista",
            ],
            [
                "idestado" => 35,
                "nome" => "Vera Cruz",
            ],
            [
                "idestado" => 35,
                "nome" => "Vinhedo",
            ],
            [
                "idestado" => 35,
                "nome" => "Viradouro",
            ],
            [
                "idestado" => 35,
                "nome" => "Vista Alegre do Alto",
            ],
            [
                "idestado" => 35,
                "nome" => "Vitória Brasil",
            ],
            [
                "idestado" => 35,
                "nome" => "Votorantim",
            ],
            [
                "idestado" => 35,
                "nome" => "Votuporanga",
            ],
            [
                "idestado" => 35,
                "nome" => "Zacarias",
            ],
            [
                "idestado" => 41,
                "nome" => "Abatiá",
            ],
            [
                "idestado" => 41,
                "nome" => "Adrianópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Agudos do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Almirante Tamandaré",
            ],
            [
                "idestado" => 41,
                "nome" => "Altamira do Paraná",
            ],
            [
                "idestado" => 41,
                "nome" => "Alto Paraíso",
            ],
            [
                "idestado" => 41,
                "nome" => "Alto Paraná",
            ],
            [
                "idestado" => 41,
                "nome" => "Alto Piquiri",
            ],
            [
                "idestado" => 41,
                "nome" => "Altônia",
            ],
            [
                "idestado" => 41,
                "nome" => "Alvorada do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Amaporã",
            ],
            [
                "idestado" => 41,
                "nome" => "Ampére",
            ],
            [
                "idestado" => 41,
                "nome" => "Anahy",
            ],
            [
                "idestado" => 41,
                "nome" => "Andirá",
            ],
            [
                "idestado" => 41,
                "nome" => "Ângulo",
            ],
            [
                "idestado" => 41,
                "nome" => "Antonina",
            ],
            [
                "idestado" => 41,
                "nome" => "Antônio Olinto",
            ],
            [
                "idestado" => 41,
                "nome" => "Apucarana",
            ],
            [
                "idestado" => 41,
                "nome" => "Arapongas",
            ],
            [
                "idestado" => 41,
                "nome" => "Arapoti",
            ],
            [
                "idestado" => 41,
                "nome" => "Arapuã",
            ],
            [
                "idestado" => 41,
                "nome" => "Araruna",
            ],
            [
                "idestado" => 41,
                "nome" => "Araucária",
            ],
            [
                "idestado" => 41,
                "nome" => "Ariranha do Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "Assaí",
            ],
            [
                "idestado" => 41,
                "nome" => "Assis Chateaubriand",
            ],
            [
                "idestado" => 41,
                "nome" => "Astorga",
            ],
            [
                "idestado" => 41,
                "nome" => "Atalaia",
            ],
            [
                "idestado" => 41,
                "nome" => "Balsa Nova",
            ],
            [
                "idestado" => 41,
                "nome" => "Bandeirantes",
            ],
            [
                "idestado" => 41,
                "nome" => "Barbosa Ferraz",
            ],
            [
                "idestado" => 41,
                "nome" => "Barra do Jacaré",
            ],
            [
                "idestado" => 41,
                "nome" => "Barracão",
            ],
            [
                "idestado" => 41,
                "nome" => "Bela Vista da Caroba",
            ],
            [
                "idestado" => 41,
                "nome" => "Bela Vista do Paraíso",
            ],
            [
                "idestado" => 41,
                "nome" => "Bituruna",
            ],
            [
                "idestado" => 41,
                "nome" => "Boa Esperança",
            ],
            [
                "idestado" => 41,
                "nome" => "Boa Esperança do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Boa Ventura de São Roque",
            ],
            [
                "idestado" => 41,
                "nome" => "Boa Vista da Aparecida",
            ],
            [
                "idestado" => 41,
                "nome" => "Bocaiúva do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Bom Jesus do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Bom Sucesso",
            ],
            [
                "idestado" => 41,
                "nome" => "Bom Sucesso do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Borrazópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Braganey",
            ],
            [
                "idestado" => 41,
                "nome" => "Brasilândia do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Cafeara",
            ],
            [
                "idestado" => 41,
                "nome" => "Cafelândia",
            ],
            [
                "idestado" => 41,
                "nome" => "Cafezal do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Califórnia",
            ],
            [
                "idestado" => 41,
                "nome" => "Cambará",
            ],
            [
                "idestado" => 41,
                "nome" => "Cambé",
            ],
            [
                "idestado" => 41,
                "nome" => "Cambira",
            ],
            [
                "idestado" => 41,
                "nome" => "Campina da Lagoa",
            ],
            [
                "idestado" => 41,
                "nome" => "Campina do Simão",
            ],
            [
                "idestado" => 41,
                "nome" => "Campina Grande do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Campo Bonito",
            ],
            [
                "idestado" => 41,
                "nome" => "Campo do Tenente",
            ],
            [
                "idestado" => 41,
                "nome" => "Campo Largo",
            ],
            [
                "idestado" => 41,
                "nome" => "Campo Magro",
            ],
            [
                "idestado" => 41,
                "nome" => "Campo Mourão",
            ],
            [
                "idestado" => 41,
                "nome" => "Cândido de Abreu",
            ],
            [
                "idestado" => 41,
                "nome" => "Candói",
            ],
            [
                "idestado" => 41,
                "nome" => "Cantagalo",
            ],
            [
                "idestado" => 41,
                "nome" => "Capanema",
            ],
            [
                "idestado" => 41,
                "nome" => "Capitão Leônidas Marques",
            ],
            [
                "idestado" => 41,
                "nome" => "Carambeí",
            ],
            [
                "idestado" => 41,
                "nome" => "Carlópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Cascavel",
            ],
            [
                "idestado" => 41,
                "nome" => "Castro",
            ],
            [
                "idestado" => 41,
                "nome" => "Catanduvas",
            ],
            [
                "idestado" => 41,
                "nome" => "Centenário do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Cerro Azul",
            ],
            [
                "idestado" => 41,
                "nome" => "Céu Azul",
            ],
            [
                "idestado" => 41,
                "nome" => "Chopinzinho",
            ],
            [
                "idestado" => 41,
                "nome" => "Cianorte",
            ],
            [
                "idestado" => 41,
                "nome" => "Cidade Gaúcha",
            ],
            [
                "idestado" => 41,
                "nome" => "Clevelândia",
            ],
            [
                "idestado" => 41,
                "nome" => "Colombo",
            ],
            [
                "idestado" => 41,
                "nome" => "Colorado",
            ],
            [
                "idestado" => 41,
                "nome" => "Congonhinhas",
            ],
            [
                "idestado" => 41,
                "nome" => "Conselheiro Mairinck",
            ],
            [
                "idestado" => 41,
                "nome" => "Contenda",
            ],
            [
                "idestado" => 41,
                "nome" => "Corbélia",
            ],
            [
                "idestado" => 41,
                "nome" => "Cornélio Procópio",
            ],
            [
                "idestado" => 41,
                "nome" => "Coronel Domingos Soares",
            ],
            [
                "idestado" => 41,
                "nome" => "Coronel Vivida",
            ],
            [
                "idestado" => 41,
                "nome" => "Corumbataí do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Cruz Machado",
            ],
            [
                "idestado" => 41,
                "nome" => "Cruzeiro do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Cruzeiro do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Cruzeiro do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Cruzmaltina",
            ],
            [
                "idestado" => 41,
                "nome" => "Curitiba",
            ],
            [
                "idestado" => 41,
                "nome" => "Curiúva",
            ],
            [
                "idestado" => 41,
                "nome" => "Diamante do Norte",
            ],
            [
                "idestado" => 41,
                "nome" => "Diamante do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Diamante D'Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Dois Vizinhos",
            ],
            [
                "idestado" => 41,
                "nome" => "Douradina",
            ],
            [
                "idestado" => 41,
                "nome" => "Doutor Camargo",
            ],
            [
                "idestado" => 41,
                "nome" => "Doutor Ulysses",
            ],
            [
                "idestado" => 41,
                "nome" => "Enéas Marques",
            ],
            [
                "idestado" => 41,
                "nome" => "Engenheiro Beltrão",
            ],
            [
                "idestado" => 41,
                "nome" => "Entre Rios do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Esperança Nova",
            ],
            [
                "idestado" => 41,
                "nome" => "Espigão Alto do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Farol",
            ],
            [
                "idestado" => 41,
                "nome" => "Faxinal",
            ],
            [
                "idestado" => 41,
                "nome" => "Fazenda Rio Grande",
            ],
            [
                "idestado" => 41,
                "nome" => "Fênix",
            ],
            [
                "idestado" => 41,
                "nome" => "Fernandes Pinheiro",
            ],
            [
                "idestado" => 41,
                "nome" => "Figueira",
            ],
            [
                "idestado" => 41,
                "nome" => "Flor da Serra do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Floraí",
            ],
            [
                "idestado" => 41,
                "nome" => "Floresta",
            ],
            [
                "idestado" => 41,
                "nome" => "Florestópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Flórida",
            ],
            [
                "idestado" => 41,
                "nome" => "Formosa do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Foz do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Foz do Jordão",
            ],
            [
                "idestado" => 41,
                "nome" => "Francisco Alves",
            ],
            [
                "idestado" => 41,
                "nome" => "Francisco Beltrão",
            ],
            [
                "idestado" => 41,
                "nome" => "General Carneiro",
            ],
            [
                "idestado" => 41,
                "nome" => "Godoy Moreira",
            ],
            [
                "idestado" => 41,
                "nome" => "Goioerê",
            ],
            [
                "idestado" => 41,
                "nome" => "Goioxim",
            ],
            [
                "idestado" => 41,
                "nome" => "Grandes Rios",
            ],
            [
                "idestado" => 41,
                "nome" => "Guaíra",
            ],
            [
                "idestado" => 41,
                "nome" => "Guairaçá",
            ],
            [
                "idestado" => 41,
                "nome" => "Guamiranga",
            ],
            [
                "idestado" => 41,
                "nome" => "Guapirama",
            ],
            [
                "idestado" => 41,
                "nome" => "Guaporema",
            ],
            [
                "idestado" => 41,
                "nome" => "Guaraci",
            ],
            [
                "idestado" => 41,
                "nome" => "Guaraniaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Guarapuava",
            ],
            [
                "idestado" => 41,
                "nome" => "Guaraqueçaba",
            ],
            [
                "idestado" => 41,
                "nome" => "Guaratuba",
            ],
            [
                "idestado" => 41,
                "nome" => "Honório Serpa",
            ],
            [
                "idestado" => 41,
                "nome" => "Ibaiti",
            ],
            [
                "idestado" => 41,
                "nome" => "Ibema",
            ],
            [
                "idestado" => 41,
                "nome" => "Ibiporã",
            ],
            [
                "idestado" => 41,
                "nome" => "Icaraíma",
            ],
            [
                "idestado" => 41,
                "nome" => "Iguaraçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Iguatu",
            ],
            [
                "idestado" => 41,
                "nome" => "Imbaú",
            ],
            [
                "idestado" => 41,
                "nome" => "Imbituva",
            ],
            [
                "idestado" => 41,
                "nome" => "Inácio Martins",
            ],
            [
                "idestado" => 41,
                "nome" => "Inajá",
            ],
            [
                "idestado" => 41,
                "nome" => "Indianópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Ipiranga",
            ],
            [
                "idestado" => 41,
                "nome" => "Iporã",
            ],
            [
                "idestado" => 41,
                "nome" => "Iracema do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Irati",
            ],
            [
                "idestado" => 41,
                "nome" => "Iretama",
            ],
            [
                "idestado" => 41,
                "nome" => "Itaguajé",
            ],
            [
                "idestado" => 41,
                "nome" => "Itaipulândia",
            ],
            [
                "idestado" => 41,
                "nome" => "Itambaracá",
            ],
            [
                "idestado" => 41,
                "nome" => "Itambé",
            ],
            [
                "idestado" => 41,
                "nome" => "Itapejara d'Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Itaperuçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Itaúna do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "Ivaiporã",
            ],
            [
                "idestado" => 41,
                "nome" => "Ivaté",
            ],
            [
                "idestado" => 41,
                "nome" => "Ivatuba",
            ],
            [
                "idestado" => 41,
                "nome" => "Jaboti",
            ],
            [
                "idestado" => 41,
                "nome" => "Jacarezinho",
            ],
            [
                "idestado" => 41,
                "nome" => "Jaguapitã",
            ],
            [
                "idestado" => 41,
                "nome" => "Jaguariaíva",
            ],
            [
                "idestado" => 41,
                "nome" => "Jandaia do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Janiópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Japira",
            ],
            [
                "idestado" => 41,
                "nome" => "Japurá",
            ],
            [
                "idestado" => 41,
                "nome" => "Jardim Alegre",
            ],
            [
                "idestado" => 41,
                "nome" => "Jardim Olinda",
            ],
            [
                "idestado" => 41,
                "nome" => "Jataizinho",
            ],
            [
                "idestado" => 41,
                "nome" => "Jesuítas",
            ],
            [
                "idestado" => 41,
                "nome" => "Joaquim Távora",
            ],
            [
                "idestado" => 41,
                "nome" => "Jundiaí do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Juranda",
            ],
            [
                "idestado" => 41,
                "nome" => "Jussara",
            ],
            [
                "idestado" => 41,
                "nome" => "Kaloré",
            ],
            [
                "idestado" => 41,
                "nome" => "Lapa",
            ],
            [
                "idestado" => 41,
                "nome" => "Laranjal",
            ],
            [
                "idestado" => 41,
                "nome" => "Laranjeiras do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Leópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Lidianópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Lindoeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Loanda",
            ],
            [
                "idestado" => 41,
                "nome" => "Lobato",
            ],
            [
                "idestado" => 41,
                "nome" => "Londrina",
            ],
            [
                "idestado" => 41,
                "nome" => "Luiziana",
            ],
            [
                "idestado" => 41,
                "nome" => "Lunardelli",
            ],
            [
                "idestado" => 41,
                "nome" => "Lupionópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Mallet",
            ],
            [
                "idestado" => 41,
                "nome" => "Mamborê",
            ],
            [
                "idestado" => 41,
                "nome" => "Mandaguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Mandaguari",
            ],
            [
                "idestado" => 41,
                "nome" => "Mandirituba",
            ],
            [
                "idestado" => 41,
                "nome" => "Manfrinópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Mangueirinha",
            ],
            [
                "idestado" => 41,
                "nome" => "Manoel Ribas",
            ],
            [
                "idestado" => 41,
                "nome" => "Marechal Cândido Rondon",
            ],
            [
                "idestado" => 41,
                "nome" => "Maria Helena",
            ],
            [
                "idestado" => 41,
                "nome" => "Marialva",
            ],
            [
                "idestado" => 41,
                "nome" => "Marilândia do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Marilena",
            ],
            [
                "idestado" => 41,
                "nome" => "Mariluz",
            ],
            [
                "idestado" => 41,
                "nome" => "Maringá",
            ],
            [
                "idestado" => 41,
                "nome" => "Mariópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Maripá",
            ],
            [
                "idestado" => 41,
                "nome" => "Marmeleiro",
            ],
            [
                "idestado" => 41,
                "nome" => "Marquinho",
            ],
            [
                "idestado" => 41,
                "nome" => "Marumbi",
            ],
            [
                "idestado" => 41,
                "nome" => "Matelândia",
            ],
            [
                "idestado" => 41,
                "nome" => "Matinhos",
            ],
            [
                "idestado" => 41,
                "nome" => "Mato Rico",
            ],
            [
                "idestado" => 41,
                "nome" => "Mauá da Serra",
            ],
            [
                "idestado" => 41,
                "nome" => "Medianeira",
            ],
            [
                "idestado" => 41,
                "nome" => "Mercedes",
            ],
            [
                "idestado" => 41,
                "nome" => "Mirador",
            ],
            [
                "idestado" => 41,
                "nome" => "Miraselva",
            ],
            [
                "idestado" => 41,
                "nome" => "Missal",
            ],
            [
                "idestado" => 41,
                "nome" => "Moreira Sales",
            ],
            [
                "idestado" => 41,
                "nome" => "Morretes",
            ],
            [
                "idestado" => 41,
                "nome" => "Munhoz de Melo",
            ],
            [
                "idestado" => 41,
                "nome" => "Nossa Senhora das Graças",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Aliança do Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova América da Colina",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Aurora",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Cantu",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Esperança",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Esperança do Sudoeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Fátima",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Laranjeiras",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Londrina",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Olímpia",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Prata do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Santa Bárbara",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Santa Rosa",
            ],
            [
                "idestado" => 41,
                "nome" => "Nova Tebas",
            ],
            [
                "idestado" => 41,
                "nome" => "Novo Itacolomi",
            ],
            [
                "idestado" => 41,
                "nome" => "Ortigueira",
            ],
            [
                "idestado" => 41,
                "nome" => "Ourizona",
            ],
            [
                "idestado" => 41,
                "nome" => "Ouro Verde do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Paiçandu",
            ],
            [
                "idestado" => 41,
                "nome" => "Palmas",
            ],
            [
                "idestado" => 41,
                "nome" => "Palmeira",
            ],
            [
                "idestado" => 41,
                "nome" => "Palmital",
            ],
            [
                "idestado" => 41,
                "nome" => "Palotina",
            ],
            [
                "idestado" => 41,
                "nome" => "Paraíso do Norte",
            ],
            [
                "idestado" => 41,
                "nome" => "Paranacity",
            ],
            [
                "idestado" => 41,
                "nome" => "Paranaguá",
            ],
            [
                "idestado" => 41,
                "nome" => "Paranapoema",
            ],
            [
                "idestado" => 41,
                "nome" => "Paranavaí",
            ],
            [
                "idestado" => 41,
                "nome" => "Pato Bragado",
            ],
            [
                "idestado" => 41,
                "nome" => "Pato Branco",
            ],
            [
                "idestado" => 41,
                "nome" => "Paula Freitas",
            ],
            [
                "idestado" => 41,
                "nome" => "Paulo Frontin",
            ],
            [
                "idestado" => 41,
                "nome" => "Peabiru",
            ],
            [
                "idestado" => 41,
                "nome" => "Perobal",
            ],
            [
                "idestado" => 41,
                "nome" => "Pérola",
            ],
            [
                "idestado" => 41,
                "nome" => "Pérola d'Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Piên",
            ],
            [
                "idestado" => 41,
                "nome" => "Pinhais",
            ],
            [
                "idestado" => 41,
                "nome" => "Pinhal de São Bento",
            ],
            [
                "idestado" => 41,
                "nome" => "Pinhalão",
            ],
            [
                "idestado" => 41,
                "nome" => "Pinhão",
            ],
            [
                "idestado" => 41,
                "nome" => "Piraí do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Piraquara",
            ],
            [
                "idestado" => 41,
                "nome" => "Pitanga",
            ],
            [
                "idestado" => 41,
                "nome" => "Pitangueiras",
            ],
            [
                "idestado" => 41,
                "nome" => "Planaltina do Paraná",
            ],
            [
                "idestado" => 41,
                "nome" => "Planalto",
            ],
            [
                "idestado" => 41,
                "nome" => "Ponta Grossa",
            ],
            [
                "idestado" => 41,
                "nome" => "Pontal do Paraná",
            ],
            [
                "idestado" => 41,
                "nome" => "Porecatu",
            ],
            [
                "idestado" => 41,
                "nome" => "Porto Amazonas",
            ],
            [
                "idestado" => 41,
                "nome" => "Porto Barreiro",
            ],
            [
                "idestado" => 41,
                "nome" => "Porto Rico",
            ],
            [
                "idestado" => 41,
                "nome" => "Porto Vitória",
            ],
            [
                "idestado" => 41,
                "nome" => "Prado Ferreira",
            ],
            [
                "idestado" => 41,
                "nome" => "Pranchita",
            ],
            [
                "idestado" => 41,
                "nome" => "Presidente Castelo Branco",
            ],
            [
                "idestado" => 41,
                "nome" => "Primeiro de Maio",
            ],
            [
                "idestado" => 41,
                "nome" => "Prudentópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Quarto Centenário",
            ],
            [
                "idestado" => 41,
                "nome" => "Quatiguá",
            ],
            [
                "idestado" => 41,
                "nome" => "Quatro Barras",
            ],
            [
                "idestado" => 41,
                "nome" => "Quatro Pontes",
            ],
            [
                "idestado" => 41,
                "nome" => "Quedas do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Querência do Norte",
            ],
            [
                "idestado" => 41,
                "nome" => "Quinta do Sol",
            ],
            [
                "idestado" => 41,
                "nome" => "Quitandinha",
            ],
            [
                "idestado" => 41,
                "nome" => "Ramilândia",
            ],
            [
                "idestado" => 41,
                "nome" => "Rancho Alegre",
            ],
            [
                "idestado" => 41,
                "nome" => "Rancho Alegre D'Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Realeza",
            ],
            [
                "idestado" => 41,
                "nome" => "Rebouças",
            ],
            [
                "idestado" => 41,
                "nome" => "Renascença",
            ],
            [
                "idestado" => 41,
                "nome" => "Reserva",
            ],
            [
                "idestado" => 41,
                "nome" => "Reserva do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Ribeirão Claro",
            ],
            [
                "idestado" => 41,
                "nome" => "Ribeirão do Pinhal",
            ],
            [
                "idestado" => 41,
                "nome" => "Rio Azul",
            ],
            [
                "idestado" => 41,
                "nome" => "Rio Bom",
            ],
            [
                "idestado" => 41,
                "nome" => "Rio Bonito do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Rio Branco do Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "Rio Branco do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Rio Negro",
            ],
            [
                "idestado" => 41,
                "nome" => "Rolândia",
            ],
            [
                "idestado" => 41,
                "nome" => "Roncador",
            ],
            [
                "idestado" => 41,
                "nome" => "Rondon",
            ],
            [
                "idestado" => 41,
                "nome" => "Rosário do Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "Sabáudia",
            ],
            [
                "idestado" => 41,
                "nome" => "Salgado Filho",
            ],
            [
                "idestado" => 41,
                "nome" => "Salto do Itararé",
            ],
            [
                "idestado" => 41,
                "nome" => "Salto do Lontra",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Amélia",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Cecília do Pavão",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Cruz de Monte Castelo",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Fé",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Helena",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Inês",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Isabel do Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Izabel do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Lúcia",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Maria do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Mariana",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Mônica",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Tereza do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Santa Terezinha de Itaipu",
            ],
            [
                "idestado" => 41,
                "nome" => "Santana do Itararé",
            ],
            [
                "idestado" => 41,
                "nome" => "Santo Antônio da Platina",
            ],
            [
                "idestado" => 41,
                "nome" => "Santo Antônio do Caiuá",
            ],
            [
                "idestado" => 41,
                "nome" => "Santo Antônio do Paraíso",
            ],
            [
                "idestado" => 41,
                "nome" => "Santo Antônio do Sudoeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Santo Inácio",
            ],
            [
                "idestado" => 41,
                "nome" => "São Carlos do Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "São Jerônimo da Serra",
            ],
            [
                "idestado" => 41,
                "nome" => "São João",
            ],
            [
                "idestado" => 41,
                "nome" => "São João do Caiuá",
            ],
            [
                "idestado" => 41,
                "nome" => "São João do Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "São João do Triunfo",
            ],
            [
                "idestado" => 41,
                "nome" => "São Jorge do Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "São Jorge do Patrocínio",
            ],
            [
                "idestado" => 41,
                "nome" => "São Jorge d'Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "São José da Boa Vista",
            ],
            [
                "idestado" => 41,
                "nome" => "São José das Palmeiras",
            ],
            [
                "idestado" => 41,
                "nome" => "São José dos Pinhais",
            ],
            [
                "idestado" => 41,
                "nome" => "São Manoel do Paraná",
            ],
            [
                "idestado" => 41,
                "nome" => "São Mateus do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "São Miguel do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "São Pedro do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "São Pedro do Ivaí",
            ],
            [
                "idestado" => 41,
                "nome" => "São Pedro do Paraná",
            ],
            [
                "idestado" => 41,
                "nome" => "São Sebastião da Amoreira",
            ],
            [
                "idestado" => 41,
                "nome" => "São Tomé",
            ],
            [
                "idestado" => 41,
                "nome" => "Sapopema",
            ],
            [
                "idestado" => 41,
                "nome" => "Sarandi",
            ],
            [
                "idestado" => 41,
                "nome" => "Saudade do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Sengés",
            ],
            [
                "idestado" => 41,
                "nome" => "Serranópolis do Iguaçu",
            ],
            [
                "idestado" => 41,
                "nome" => "Sertaneja",
            ],
            [
                "idestado" => 41,
                "nome" => "Sertanópolis",
            ],
            [
                "idestado" => 41,
                "nome" => "Siqueira Campos",
            ],
            [
                "idestado" => 41,
                "nome" => "Sulina",
            ],
            [
                "idestado" => 41,
                "nome" => "Tamarana",
            ],
            [
                "idestado" => 41,
                "nome" => "Tamboara",
            ],
            [
                "idestado" => 41,
                "nome" => "Tapejara",
            ],
            [
                "idestado" => 41,
                "nome" => "Tapira",
            ],
            [
                "idestado" => 41,
                "nome" => "Teixeira Soares",
            ],
            [
                "idestado" => 41,
                "nome" => "Telêmaco Borba",
            ],
            [
                "idestado" => 41,
                "nome" => "Terra Boa",
            ],
            [
                "idestado" => 41,
                "nome" => "Terra Rica",
            ],
            [
                "idestado" => 41,
                "nome" => "Terra Roxa",
            ],
            [
                "idestado" => 41,
                "nome" => "Tibagi",
            ],
            [
                "idestado" => 41,
                "nome" => "Tijucas do Sul",
            ],
            [
                "idestado" => 41,
                "nome" => "Toledo",
            ],
            [
                "idestado" => 41,
                "nome" => "Tomazina",
            ],
            [
                "idestado" => 41,
                "nome" => "Três Barras do Paraná",
            ],
            [
                "idestado" => 41,
                "nome" => "Tunas do Paraná",
            ],
            [
                "idestado" => 41,
                "nome" => "Tuneiras do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Tupãssi",
            ],
            [
                "idestado" => 41,
                "nome" => "Turvo",
            ],
            [
                "idestado" => 41,
                "nome" => "Ubiratã",
            ],
            [
                "idestado" => 41,
                "nome" => "Umuarama",
            ],
            [
                "idestado" => 41,
                "nome" => "União da Vitória",
            ],
            [
                "idestado" => 41,
                "nome" => "Uniflor",
            ],
            [
                "idestado" => 41,
                "nome" => "Uraí",
            ],
            [
                "idestado" => 41,
                "nome" => "Ventania",
            ],
            [
                "idestado" => 41,
                "nome" => "Vera Cruz do Oeste",
            ],
            [
                "idestado" => 41,
                "nome" => "Verê",
            ],
            [
                "idestado" => 41,
                "nome" => "Virmond",
            ],
            [
                "idestado" => 41,
                "nome" => "Vitorino",
            ],
            [
                "idestado" => 41,
                "nome" => "Wenceslau Braz",
            ],
            [
                "idestado" => 41,
                "nome" => "Xambrê",
            ],
            [
                "idestado" => 42,
                "nome" => "Abdon Batista",
            ],
            [
                "idestado" => 42,
                "nome" => "Abelardo Luz",
            ],
            [
                "idestado" => 42,
                "nome" => "Agrolândia",
            ],
            [
                "idestado" => 42,
                "nome" => "Agronômica",
            ],
            [
                "idestado" => 42,
                "nome" => "Água Doce",
            ],
            [
                "idestado" => 42,
                "nome" => "Águas de Chapecó",
            ],
            [
                "idestado" => 42,
                "nome" => "Águas Frias",
            ],
            [
                "idestado" => 42,
                "nome" => "Águas Mornas",
            ],
            [
                "idestado" => 42,
                "nome" => "Alfredo Wagner",
            ],
            [
                "idestado" => 42,
                "nome" => "Alto Bela Vista",
            ],
            [
                "idestado" => 42,
                "nome" => "Anchieta",
            ],
            [
                "idestado" => 42,
                "nome" => "Angelina",
            ],
            [
                "idestado" => 42,
                "nome" => "Anita Garibaldi",
            ],
            [
                "idestado" => 42,
                "nome" => "Anitápolis",
            ],
            [
                "idestado" => 42,
                "nome" => "Antônio Carlos",
            ],
            [
                "idestado" => 42,
                "nome" => "Apiúna",
            ],
            [
                "idestado" => 42,
                "nome" => "Arabutã",
            ],
            [
                "idestado" => 42,
                "nome" => "Araquari",
            ],
            [
                "idestado" => 42,
                "nome" => "Araranguá",
            ],
            [
                "idestado" => 42,
                "nome" => "Armazém",
            ],
            [
                "idestado" => 42,
                "nome" => "Arroio Trinta",
            ],
            [
                "idestado" => 42,
                "nome" => "Arvoredo",
            ],
            [
                "idestado" => 42,
                "nome" => "Ascurra",
            ],
            [
                "idestado" => 42,
                "nome" => "Atalanta",
            ],
            [
                "idestado" => 42,
                "nome" => "Aurora",
            ],
            [
                "idestado" => 42,
                "nome" => "Balneário Arroio do Silva",
            ],
            [
                "idestado" => 42,
                "nome" => "Balneário Barra do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Balneário Camboriú",
            ],
            [
                "idestado" => 42,
                "nome" => "Balneário Gaivota",
            ],
            [
                "idestado" => 42,
                "nome" => "Balneário Piçarras",
            ],
            [
                "idestado" => 42,
                "nome" => "Balneário Rincão",
            ],
            [
                "idestado" => 42,
                "nome" => "Bandeirante",
            ],
            [
                "idestado" => 42,
                "nome" => "Barra Bonita",
            ],
            [
                "idestado" => 42,
                "nome" => "Barra Velha",
            ],
            [
                "idestado" => 42,
                "nome" => "Bela Vista do Toldo",
            ],
            [
                "idestado" => 42,
                "nome" => "Belmonte",
            ],
            [
                "idestado" => 42,
                "nome" => "Benedito Novo",
            ],
            [
                "idestado" => 42,
                "nome" => "Biguaçu",
            ],
            [
                "idestado" => 42,
                "nome" => "Blumenau",
            ],
            [
                "idestado" => 42,
                "nome" => "Bocaina do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Bom Jardim da Serra",
            ],
            [
                "idestado" => 42,
                "nome" => "Bom Jesus",
            ],
            [
                "idestado" => 42,
                "nome" => "Bom Jesus do Oeste",
            ],
            [
                "idestado" => 42,
                "nome" => "Bom Retiro",
            ],
            [
                "idestado" => 42,
                "nome" => "Bombinhas",
            ],
            [
                "idestado" => 42,
                "nome" => "Botuverá",
            ],
            [
                "idestado" => 42,
                "nome" => "Braço do Norte",
            ],
            [
                "idestado" => 42,
                "nome" => "Braço do Trombudo",
            ],
            [
                "idestado" => 42,
                "nome" => "Brunópolis",
            ],
            [
                "idestado" => 42,
                "nome" => "Brusque",
            ],
            [
                "idestado" => 42,
                "nome" => "Caçador",
            ],
            [
                "idestado" => 42,
                "nome" => "Caibi",
            ],
            [
                "idestado" => 42,
                "nome" => "Calmon",
            ],
            [
                "idestado" => 42,
                "nome" => "Camboriú",
            ],
            [
                "idestado" => 42,
                "nome" => "Campo Alegre",
            ],
            [
                "idestado" => 42,
                "nome" => "Campo Belo do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Campo Erê",
            ],
            [
                "idestado" => 42,
                "nome" => "Campos Novos",
            ],
            [
                "idestado" => 42,
                "nome" => "Canelinha",
            ],
            [
                "idestado" => 42,
                "nome" => "Canoinhas",
            ],
            [
                "idestado" => 42,
                "nome" => "Capão Alto",
            ],
            [
                "idestado" => 42,
                "nome" => "Capinzal",
            ],
            [
                "idestado" => 42,
                "nome" => "Capivari de Baixo",
            ],
            [
                "idestado" => 42,
                "nome" => "Catanduvas",
            ],
            [
                "idestado" => 42,
                "nome" => "Caxambu do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Celso Ramos",
            ],
            [
                "idestado" => 42,
                "nome" => "Cerro Negro",
            ],
            [
                "idestado" => 42,
                "nome" => "Chapadão do Lageado",
            ],
            [
                "idestado" => 42,
                "nome" => "Chapecó",
            ],
            [
                "idestado" => 42,
                "nome" => "Cocal do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Concórdia",
            ],
            [
                "idestado" => 42,
                "nome" => "Cordilheira Alta",
            ],
            [
                "idestado" => 42,
                "nome" => "Coronel Freitas",
            ],
            [
                "idestado" => 42,
                "nome" => "Coronel Martins",
            ],
            [
                "idestado" => 42,
                "nome" => "Correia Pinto",
            ],
            [
                "idestado" => 42,
                "nome" => "Corupá",
            ],
            [
                "idestado" => 42,
                "nome" => "Criciúma",
            ],
            [
                "idestado" => 42,
                "nome" => "Cunha Porã",
            ],
            [
                "idestado" => 42,
                "nome" => "Cunhataí",
            ],
            [
                "idestado" => 42,
                "nome" => "Curitibanos",
            ],
            [
                "idestado" => 42,
                "nome" => "Descanso",
            ],
            [
                "idestado" => 42,
                "nome" => "Dionísio Cerqueira",
            ],
            [
                "idestado" => 42,
                "nome" => "Dona Emma",
            ],
            [
                "idestado" => 42,
                "nome" => "Doutor Pedrinho",
            ],
            [
                "idestado" => 42,
                "nome" => "Entre Rios",
            ],
            [
                "idestado" => 42,
                "nome" => "Ermo",
            ],
            [
                "idestado" => 42,
                "nome" => "Erval Velho",
            ],
            [
                "idestado" => 42,
                "nome" => "Faxinal dos Guedes",
            ],
            [
                "idestado" => 42,
                "nome" => "Flor do Sertão",
            ],
            [
                "idestado" => 42,
                "nome" => "Florianópolis",
            ],
            [
                "idestado" => 42,
                "nome" => "Formosa do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Forquilhinha",
            ],
            [
                "idestado" => 42,
                "nome" => "Fraiburgo",
            ],
            [
                "idestado" => 42,
                "nome" => "Frei Rogério",
            ],
            [
                "idestado" => 42,
                "nome" => "Galvão",
            ],
            [
                "idestado" => 42,
                "nome" => "Garopaba",
            ],
            [
                "idestado" => 42,
                "nome" => "Garuva",
            ],
            [
                "idestado" => 42,
                "nome" => "Gaspar",
            ],
            [
                "idestado" => 42,
                "nome" => "Governador Celso Ramos",
            ],
            [
                "idestado" => 42,
                "nome" => "Grão-Pará",
            ],
            [
                "idestado" => 42,
                "nome" => "Gravatal",
            ],
            [
                "idestado" => 42,
                "nome" => "Guabiruba",
            ],
            [
                "idestado" => 42,
                "nome" => "Guaraciaba",
            ],
            [
                "idestado" => 42,
                "nome" => "Guaramirim",
            ],
            [
                "idestado" => 42,
                "nome" => "Guarujá do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Guatambú",
            ],
            [
                "idestado" => 42,
                "nome" => "Herval d'Oeste",
            ],
            [
                "idestado" => 42,
                "nome" => "Ibiam",
            ],
            [
                "idestado" => 42,
                "nome" => "Ibicaré",
            ],
            [
                "idestado" => 42,
                "nome" => "Ibirama",
            ],
            [
                "idestado" => 42,
                "nome" => "Içara",
            ],
            [
                "idestado" => 42,
                "nome" => "Ilhota",
            ],
            [
                "idestado" => 42,
                "nome" => "Imaruí",
            ],
            [
                "idestado" => 42,
                "nome" => "Imbituba",
            ],
            [
                "idestado" => 42,
                "nome" => "Imbuia",
            ],
            [
                "idestado" => 42,
                "nome" => "Indaial",
            ],
            [
                "idestado" => 42,
                "nome" => "Iomerê",
            ],
            [
                "idestado" => 42,
                "nome" => "Ipira",
            ],
            [
                "idestado" => 42,
                "nome" => "Iporã do Oeste",
            ],
            [
                "idestado" => 42,
                "nome" => "Ipuaçu",
            ],
            [
                "idestado" => 42,
                "nome" => "Ipumirim",
            ],
            [
                "idestado" => 42,
                "nome" => "Iraceminha",
            ],
            [
                "idestado" => 42,
                "nome" => "Irani",
            ],
            [
                "idestado" => 42,
                "nome" => "Irati",
            ],
            [
                "idestado" => 42,
                "nome" => "Irineópolis",
            ],
            [
                "idestado" => 42,
                "nome" => "Itá",
            ],
            [
                "idestado" => 42,
                "nome" => "Itaiópolis",
            ],
            [
                "idestado" => 42,
                "nome" => "Itajaí",
            ],
            [
                "idestado" => 42,
                "nome" => "Itapema",
            ],
            [
                "idestado" => 42,
                "nome" => "Itapiranga",
            ],
            [
                "idestado" => 42,
                "nome" => "Itapoá",
            ],
            [
                "idestado" => 42,
                "nome" => "Ituporanga",
            ],
            [
                "idestado" => 42,
                "nome" => "Jaborá",
            ],
            [
                "idestado" => 42,
                "nome" => "Jacinto Machado",
            ],
            [
                "idestado" => 42,
                "nome" => "Jaguaruna",
            ],
            [
                "idestado" => 42,
                "nome" => "Jaraguá do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Jardinópolis",
            ],
            [
                "idestado" => 42,
                "nome" => "Joaçaba",
            ],
            [
                "idestado" => 42,
                "nome" => "Joinville",
            ],
            [
                "idestado" => 42,
                "nome" => "José Boiteux",
            ],
            [
                "idestado" => 42,
                "nome" => "Jupiá",
            ],
            [
                "idestado" => 42,
                "nome" => "Lacerdópolis",
            ],
            [
                "idestado" => 42,
                "nome" => "Lages",
            ],
            [
                "idestado" => 42,
                "nome" => "Laguna",
            ],
            [
                "idestado" => 42,
                "nome" => "Lajeado Grande",
            ],
            [
                "idestado" => 42,
                "nome" => "Laurentino",
            ],
            [
                "idestado" => 42,
                "nome" => "Lauro Müller",
            ],
            [
                "idestado" => 42,
                "nome" => "Lebon Régis",
            ],
            [
                "idestado" => 42,
                "nome" => "Leoberto Leal",
            ],
            [
                "idestado" => 42,
                "nome" => "Lindóia do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Lontras",
            ],
            [
                "idestado" => 42,
                "nome" => "Luiz Alves",
            ],
            [
                "idestado" => 42,
                "nome" => "Luzerna",
            ],
            [
                "idestado" => 42,
                "nome" => "Macieira",
            ],
            [
                "idestado" => 42,
                "nome" => "Mafra",
            ],
            [
                "idestado" => 42,
                "nome" => "Major Gercino",
            ],
            [
                "idestado" => 42,
                "nome" => "Major Vieira",
            ],
            [
                "idestado" => 42,
                "nome" => "Maracajá",
            ],
            [
                "idestado" => 42,
                "nome" => "Maravilha",
            ],
            [
                "idestado" => 42,
                "nome" => "Marema",
            ],
            [
                "idestado" => 42,
                "nome" => "Massaranduba",
            ],
            [
                "idestado" => 42,
                "nome" => "Matos Costa",
            ],
            [
                "idestado" => 42,
                "nome" => "Meleiro",
            ],
            [
                "idestado" => 42,
                "nome" => "Mirim Doce",
            ],
            [
                "idestado" => 42,
                "nome" => "Modelo",
            ],
            [
                "idestado" => 42,
                "nome" => "Mondaí",
            ],
            [
                "idestado" => 42,
                "nome" => "Monte Carlo",
            ],
            [
                "idestado" => 42,
                "nome" => "Monte Castelo",
            ],
            [
                "idestado" => 42,
                "nome" => "Morro da Fumaça",
            ],
            [
                "idestado" => 42,
                "nome" => "Morro Grande",
            ],
            [
                "idestado" => 42,
                "nome" => "Navegantes",
            ],
            [
                "idestado" => 42,
                "nome" => "Nova Erechim",
            ],
            [
                "idestado" => 42,
                "nome" => "Nova Itaberaba",
            ],
            [
                "idestado" => 42,
                "nome" => "Nova Trento",
            ],
            [
                "idestado" => 42,
                "nome" => "Nova Veneza",
            ],
            [
                "idestado" => 42,
                "nome" => "Novo Horizonte",
            ],
            [
                "idestado" => 42,
                "nome" => "Orleans",
            ],
            [
                "idestado" => 42,
                "nome" => "Otacílio Costa",
            ],
            [
                "idestado" => 42,
                "nome" => "Ouro",
            ],
            [
                "idestado" => 42,
                "nome" => "Ouro Verde",
            ],
            [
                "idestado" => 42,
                "nome" => "Paial",
            ],
            [
                "idestado" => 42,
                "nome" => "Painel",
            ],
            [
                "idestado" => 42,
                "nome" => "Palhoça",
            ],
            [
                "idestado" => 42,
                "nome" => "Palma Sola",
            ],
            [
                "idestado" => 42,
                "nome" => "Palmeira",
            ],
            [
                "idestado" => 42,
                "nome" => "Palmitos",
            ],
            [
                "idestado" => 42,
                "nome" => "Papanduva",
            ],
            [
                "idestado" => 42,
                "nome" => "Paraíso",
            ],
            [
                "idestado" => 42,
                "nome" => "Passo de Torres",
            ],
            [
                "idestado" => 42,
                "nome" => "Passos Maia",
            ],
            [
                "idestado" => 42,
                "nome" => "Paulo Lopes",
            ],
            [
                "idestado" => 42,
                "nome" => "Pedras Grandes",
            ],
            [
                "idestado" => 42,
                "nome" => "Penha",
            ],
            [
                "idestado" => 42,
                "nome" => "Peritiba",
            ],
            [
                "idestado" => 42,
                "nome" => "Pescaria Brava",
            ],
            [
                "idestado" => 42,
                "nome" => "Petrolândia",
            ],
            [
                "idestado" => 42,
                "nome" => "Pinhalzinho",
            ],
            [
                "idestado" => 42,
                "nome" => "Pinheiro Preto",
            ],
            [
                "idestado" => 42,
                "nome" => "Piratuba",
            ],
            [
                "idestado" => 42,
                "nome" => "Planalto Alegre",
            ],
            [
                "idestado" => 42,
                "nome" => "Pomerode",
            ],
            [
                "idestado" => 42,
                "nome" => "Ponte Alta",
            ],
            [
                "idestado" => 42,
                "nome" => "Ponte Alta do Norte",
            ],
            [
                "idestado" => 42,
                "nome" => "Ponte Serrada",
            ],
            [
                "idestado" => 42,
                "nome" => "Porto Belo",
            ],
            [
                "idestado" => 42,
                "nome" => "Porto União",
            ],
            [
                "idestado" => 42,
                "nome" => "Pouso Redondo",
            ],
            [
                "idestado" => 42,
                "nome" => "Praia Grande",
            ],
            [
                "idestado" => 42,
                "nome" => "Presidente Castello Branco",
            ],
            [
                "idestado" => 42,
                "nome" => "Presidente Getúlio",
            ],
            [
                "idestado" => 42,
                "nome" => "Presidente Nereu",
            ],
            [
                "idestado" => 42,
                "nome" => "Princesa",
            ],
            [
                "idestado" => 42,
                "nome" => "Quilombo",
            ],
            [
                "idestado" => 42,
                "nome" => "Rancho Queimado",
            ],
            [
                "idestado" => 42,
                "nome" => "Rio das Antas",
            ],
            [
                "idestado" => 42,
                "nome" => "Rio do Campo",
            ],
            [
                "idestado" => 42,
                "nome" => "Rio do Oeste",
            ],
            [
                "idestado" => 42,
                "nome" => "Rio do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Rio dos Cedros",
            ],
            [
                "idestado" => 42,
                "nome" => "Rio Fortuna",
            ],
            [
                "idestado" => 42,
                "nome" => "Rio Negrinho",
            ],
            [
                "idestado" => 42,
                "nome" => "Rio Rufino",
            ],
            [
                "idestado" => 42,
                "nome" => "Riqueza",
            ],
            [
                "idestado" => 42,
                "nome" => "Rodeio",
            ],
            [
                "idestado" => 42,
                "nome" => "Romelândia",
            ],
            [
                "idestado" => 42,
                "nome" => "Salete",
            ],
            [
                "idestado" => 42,
                "nome" => "Saltinho",
            ],
            [
                "idestado" => 42,
                "nome" => "Salto Veloso",
            ],
            [
                "idestado" => 42,
                "nome" => "Sangão",
            ],
            [
                "idestado" => 42,
                "nome" => "Santa Cecília",
            ],
            [
                "idestado" => 42,
                "nome" => "Santa Helena",
            ],
            [
                "idestado" => 42,
                "nome" => "Santa Rosa de Lima",
            ],
            [
                "idestado" => 42,
                "nome" => "Santa Rosa do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Santa Terezinha",
            ],
            [
                "idestado" => 42,
                "nome" => "Santa Terezinha do Progresso",
            ],
            [
                "idestado" => 42,
                "nome" => "Santiago do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Santo Amaro da Imperatriz",
            ],
            [
                "idestado" => 42,
                "nome" => "São Bento do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "São Bernardino",
            ],
            [
                "idestado" => 42,
                "nome" => "São Bonifácio",
            ],
            [
                "idestado" => 42,
                "nome" => "São Carlos",
            ],
            [
                "idestado" => 42,
                "nome" => "São Cristóvão do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "São Domingos",
            ],
            [
                "idestado" => 42,
                "nome" => "São Francisco do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "São João Batista",
            ],
            [
                "idestado" => 42,
                "nome" => "São João do Itaperiú",
            ],
            [
                "idestado" => 42,
                "nome" => "São João do Oeste",
            ],
            [
                "idestado" => 42,
                "nome" => "São João do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "São Joaquim",
            ],
            [
                "idestado" => 42,
                "nome" => "São José",
            ],
            [
                "idestado" => 42,
                "nome" => "São José do Cedro",
            ],
            [
                "idestado" => 42,
                "nome" => "São José do Cerrito",
            ],
            [
                "idestado" => 42,
                "nome" => "São Lourenço do Oeste",
            ],
            [
                "idestado" => 42,
                "nome" => "São Ludgero",
            ],
            [
                "idestado" => 42,
                "nome" => "São Martinho",
            ],
            [
                "idestado" => 42,
                "nome" => "São Miguel da Boa Vista",
            ],
            [
                "idestado" => 42,
                "nome" => "São Miguel do Oeste",
            ],
            [
                "idestado" => 42,
                "nome" => "São Pedro de Alcântara",
            ],
            [
                "idestado" => 42,
                "nome" => "Saudades",
            ],
            [
                "idestado" => 42,
                "nome" => "Schroeder",
            ],
            [
                "idestado" => 42,
                "nome" => "Seara",
            ],
            [
                "idestado" => 42,
                "nome" => "Serra Alta",
            ],
            [
                "idestado" => 42,
                "nome" => "Siderópolis",
            ],
            [
                "idestado" => 42,
                "nome" => "Sombrio",
            ],
            [
                "idestado" => 42,
                "nome" => "Sul Brasil",
            ],
            [
                "idestado" => 42,
                "nome" => "Taió",
            ],
            [
                "idestado" => 42,
                "nome" => "Tangará",
            ],
            [
                "idestado" => 42,
                "nome" => "Tigrinhos",
            ],
            [
                "idestado" => 42,
                "nome" => "Tijucas",
            ],
            [
                "idestado" => 42,
                "nome" => "Timbé do Sul",
            ],
            [
                "idestado" => 42,
                "nome" => "Timbó",
            ],
            [
                "idestado" => 42,
                "nome" => "Timbó Grande",
            ],
            [
                "idestado" => 42,
                "nome" => "Três Barras",
            ],
            [
                "idestado" => 42,
                "nome" => "Treviso",
            ],
            [
                "idestado" => 42,
                "nome" => "Treze de Maio",
            ],
            [
                "idestado" => 42,
                "nome" => "Treze Tílias",
            ],
            [
                "idestado" => 42,
                "nome" => "Trombudo Central",
            ],
            [
                "idestado" => 42,
                "nome" => "Tubarão",
            ],
            [
                "idestado" => 42,
                "nome" => "Tunápolis",
            ],
            [
                "idestado" => 42,
                "nome" => "Turvo",
            ],
            [
                "idestado" => 42,
                "nome" => "União do Oeste",
            ],
            [
                "idestado" => 42,
                "nome" => "Urubici",
            ],
            [
                "idestado" => 42,
                "nome" => "Urupema",
            ],
            [
                "idestado" => 42,
                "nome" => "Urussanga",
            ],
            [
                "idestado" => 42,
                "nome" => "Vargeão",
            ],
            [
                "idestado" => 42,
                "nome" => "Vargem",
            ],
            [
                "idestado" => 42,
                "nome" => "Vargem Bonita",
            ],
            [
                "idestado" => 42,
                "nome" => "Vidal Ramos",
            ],
            [
                "idestado" => 42,
                "nome" => "Videira",
            ],
            [
                "idestado" => 42,
                "nome" => "Vitor Meireles",
            ],
            [
                "idestado" => 42,
                "nome" => "Witmarsum",
            ],
            [
                "idestado" => 42,
                "nome" => "Xanxerê",
            ],
            [
                "idestado" => 42,
                "nome" => "Xavantina",
            ],
            [
                "idestado" => 42,
                "nome" => "Xaxim",
            ],
            [
                "idestado" => 42,
                "nome" => "Zortéa",
            ],
            [
                "idestado" => 43,
                "nome" => "Aceguá",
            ],
            [
                "idestado" => 43,
                "nome" => "Água Santa",
            ],
            [
                "idestado" => 43,
                "nome" => "Agudo",
            ],
            [
                "idestado" => 43,
                "nome" => "Ajuricaba",
            ],
            [
                "idestado" => 43,
                "nome" => "Alecrim",
            ],
            [
                "idestado" => 43,
                "nome" => "Alegrete",
            ],
            [
                "idestado" => 43,
                "nome" => "Alegria",
            ],
            [
                "idestado" => 43,
                "nome" => "Almirante Tamandaré do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Alpestre",
            ],
            [
                "idestado" => 43,
                "nome" => "Alto Alegre",
            ],
            [
                "idestado" => 43,
                "nome" => "Alto Feliz",
            ],
            [
                "idestado" => 43,
                "nome" => "Alvorada",
            ],
            [
                "idestado" => 43,
                "nome" => "Amaral Ferrador",
            ],
            [
                "idestado" => 43,
                "nome" => "Ametista do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "André da Rocha",
            ],
            [
                "idestado" => 43,
                "nome" => "Anta Gorda",
            ],
            [
                "idestado" => 43,
                "nome" => "Antônio Prado",
            ],
            [
                "idestado" => 43,
                "nome" => "Arambaré",
            ],
            [
                "idestado" => 43,
                "nome" => "Araricá",
            ],
            [
                "idestado" => 43,
                "nome" => "Aratiba",
            ],
            [
                "idestado" => 43,
                "nome" => "Arroio do Meio",
            ],
            [
                "idestado" => 43,
                "nome" => "Arroio do Padre",
            ],
            [
                "idestado" => 43,
                "nome" => "Arroio do Sal",
            ],
            [
                "idestado" => 43,
                "nome" => "Arroio do Tigre",
            ],
            [
                "idestado" => 43,
                "nome" => "Arroio dos Ratos",
            ],
            [
                "idestado" => 43,
                "nome" => "Arroio Grande",
            ],
            [
                "idestado" => 43,
                "nome" => "Arvorezinha",
            ],
            [
                "idestado" => 43,
                "nome" => "Augusto Pestana",
            ],
            [
                "idestado" => 43,
                "nome" => "Áurea",
            ],
            [
                "idestado" => 43,
                "nome" => "Bagé",
            ],
            [
                "idestado" => 43,
                "nome" => "Balneário Pinhal",
            ],
            [
                "idestado" => 43,
                "nome" => "Barão",
            ],
            [
                "idestado" => 43,
                "nome" => "Barão de Cotegipe",
            ],
            [
                "idestado" => 43,
                "nome" => "Barão do Triunfo",
            ],
            [
                "idestado" => 43,
                "nome" => "Barra do Guarita",
            ],
            [
                "idestado" => 43,
                "nome" => "Barra do Quaraí",
            ],
            [
                "idestado" => 43,
                "nome" => "Barra do Ribeiro",
            ],
            [
                "idestado" => 43,
                "nome" => "Barra do Rio Azul",
            ],
            [
                "idestado" => 43,
                "nome" => "Barra Funda",
            ],
            [
                "idestado" => 43,
                "nome" => "Barracão",
            ],
            [
                "idestado" => 43,
                "nome" => "Barros Cassal",
            ],
            [
                "idestado" => 43,
                "nome" => "Benjamin Constant do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Bento Gonçalves",
            ],
            [
                "idestado" => 43,
                "nome" => "Boa Vista das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "Boa Vista do Buricá",
            ],
            [
                "idestado" => 43,
                "nome" => "Boa Vista do Cadeado",
            ],
            [
                "idestado" => 43,
                "nome" => "Boa Vista do Incra",
            ],
            [
                "idestado" => 43,
                "nome" => "Boa Vista do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Bom Jesus",
            ],
            [
                "idestado" => 43,
                "nome" => "Bom Princípio",
            ],
            [
                "idestado" => 43,
                "nome" => "Bom Progresso",
            ],
            [
                "idestado" => 43,
                "nome" => "Bom Retiro do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Boqueirão do Leão",
            ],
            [
                "idestado" => 43,
                "nome" => "Bossoroca",
            ],
            [
                "idestado" => 43,
                "nome" => "Bozano",
            ],
            [
                "idestado" => 43,
                "nome" => "Braga",
            ],
            [
                "idestado" => 43,
                "nome" => "Brochier",
            ],
            [
                "idestado" => 43,
                "nome" => "Butiá",
            ],
            [
                "idestado" => 43,
                "nome" => "Caçapava do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Cacequi",
            ],
            [
                "idestado" => 43,
                "nome" => "Cachoeira do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Cachoeirinha",
            ],
            [
                "idestado" => 43,
                "nome" => "Cacique Doble",
            ],
            [
                "idestado" => 43,
                "nome" => "Caibaté",
            ],
            [
                "idestado" => 43,
                "nome" => "Caiçara",
            ],
            [
                "idestado" => 43,
                "nome" => "Camaquã",
            ],
            [
                "idestado" => 43,
                "nome" => "Camargo",
            ],
            [
                "idestado" => 43,
                "nome" => "Cambará do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Campestre da Serra",
            ],
            [
                "idestado" => 43,
                "nome" => "Campina das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "Campinas do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Campo Bom",
            ],
            [
                "idestado" => 43,
                "nome" => "Campo Novo",
            ],
            [
                "idestado" => 43,
                "nome" => "Campos Borges",
            ],
            [
                "idestado" => 43,
                "nome" => "Candelária",
            ],
            [
                "idestado" => 43,
                "nome" => "Cândido Godói",
            ],
            [
                "idestado" => 43,
                "nome" => "Candiota",
            ],
            [
                "idestado" => 43,
                "nome" => "Canela",
            ],
            [
                "idestado" => 43,
                "nome" => "Canguçu",
            ],
            [
                "idestado" => 43,
                "nome" => "Canoas",
            ],
            [
                "idestado" => 43,
                "nome" => "Canudos do Vale",
            ],
            [
                "idestado" => 43,
                "nome" => "Capão Bonito do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Capão da Canoa",
            ],
            [
                "idestado" => 43,
                "nome" => "Capão do Cipó",
            ],
            [
                "idestado" => 43,
                "nome" => "Capão do Leão",
            ],
            [
                "idestado" => 43,
                "nome" => "Capela de Santana",
            ],
            [
                "idestado" => 43,
                "nome" => "Capitão",
            ],
            [
                "idestado" => 43,
                "nome" => "Capivari do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Caraá",
            ],
            [
                "idestado" => 43,
                "nome" => "Carazinho",
            ],
            [
                "idestado" => 43,
                "nome" => "Carlos Barbosa",
            ],
            [
                "idestado" => 43,
                "nome" => "Carlos Gomes",
            ],
            [
                "idestado" => 43,
                "nome" => "Casca",
            ],
            [
                "idestado" => 43,
                "nome" => "Caseiros",
            ],
            [
                "idestado" => 43,
                "nome" => "Catuípe",
            ],
            [
                "idestado" => 43,
                "nome" => "Caxias do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Centenário",
            ],
            [
                "idestado" => 43,
                "nome" => "Cerrito",
            ],
            [
                "idestado" => 43,
                "nome" => "Cerro Branco",
            ],
            [
                "idestado" => 43,
                "nome" => "Cerro Grande",
            ],
            [
                "idestado" => 43,
                "nome" => "Cerro Grande do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Cerro Largo",
            ],
            [
                "idestado" => 43,
                "nome" => "Chapada",
            ],
            [
                "idestado" => 43,
                "nome" => "Charqueadas",
            ],
            [
                "idestado" => 43,
                "nome" => "Charrua",
            ],
            [
                "idestado" => 43,
                "nome" => "Chiapetta",
            ],
            [
                "idestado" => 43,
                "nome" => "Chuí",
            ],
            [
                "idestado" => 43,
                "nome" => "Chuvisca",
            ],
            [
                "idestado" => 43,
                "nome" => "Cidreira",
            ],
            [
                "idestado" => 43,
                "nome" => "Ciríaco",
            ],
            [
                "idestado" => 43,
                "nome" => "Colinas",
            ],
            [
                "idestado" => 43,
                "nome" => "Colorado",
            ],
            [
                "idestado" => 43,
                "nome" => "Condor",
            ],
            [
                "idestado" => 43,
                "nome" => "Constantina",
            ],
            [
                "idestado" => 43,
                "nome" => "Coqueiro Baixo",
            ],
            [
                "idestado" => 43,
                "nome" => "Coqueiros do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Coronel Barros",
            ],
            [
                "idestado" => 43,
                "nome" => "Coronel Bicaco",
            ],
            [
                "idestado" => 43,
                "nome" => "Coronel Pilar",
            ],
            [
                "idestado" => 43,
                "nome" => "Cotiporã",
            ],
            [
                "idestado" => 43,
                "nome" => "Coxilha",
            ],
            [
                "idestado" => 43,
                "nome" => "Crissiumal",
            ],
            [
                "idestado" => 43,
                "nome" => "Cristal",
            ],
            [
                "idestado" => 43,
                "nome" => "Cristal do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Cruz Alta",
            ],
            [
                "idestado" => 43,
                "nome" => "Cruzaltense",
            ],
            [
                "idestado" => 43,
                "nome" => "Cruzeiro do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "David Canabarro",
            ],
            [
                "idestado" => 43,
                "nome" => "Derrubadas",
            ],
            [
                "idestado" => 43,
                "nome" => "Dezesseis de Novembro",
            ],
            [
                "idestado" => 43,
                "nome" => "Dilermando de Aguiar",
            ],
            [
                "idestado" => 43,
                "nome" => "Dois Irmãos",
            ],
            [
                "idestado" => 43,
                "nome" => "Dois Irmãos das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "Dois Lajeados",
            ],
            [
                "idestado" => 43,
                "nome" => "Dom Feliciano",
            ],
            [
                "idestado" => 43,
                "nome" => "Dom Pedrito",
            ],
            [
                "idestado" => 43,
                "nome" => "Dom Pedro de Alcântara",
            ],
            [
                "idestado" => 43,
                "nome" => "Dona Francisca",
            ],
            [
                "idestado" => 43,
                "nome" => "Doutor Maurício Cardoso",
            ],
            [
                "idestado" => 43,
                "nome" => "Doutor Ricardo",
            ],
            [
                "idestado" => 43,
                "nome" => "Eldorado do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Encantado",
            ],
            [
                "idestado" => 43,
                "nome" => "Encruzilhada do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Engenho Velho",
            ],
            [
                "idestado" => 43,
                "nome" => "Entre Rios do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Entre-Ijuís",
            ],
            [
                "idestado" => 43,
                "nome" => "Erebango",
            ],
            [
                "idestado" => 43,
                "nome" => "Erechim",
            ],
            [
                "idestado" => 43,
                "nome" => "Ernestina",
            ],
            [
                "idestado" => 43,
                "nome" => "Erval Grande",
            ],
            [
                "idestado" => 43,
                "nome" => "Erval Seco",
            ],
            [
                "idestado" => 43,
                "nome" => "Esmeralda",
            ],
            [
                "idestado" => 43,
                "nome" => "Esperança do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Espumoso",
            ],
            [
                "idestado" => 43,
                "nome" => "Estação",
            ],
            [
                "idestado" => 43,
                "nome" => "Estância Velha",
            ],
            [
                "idestado" => 43,
                "nome" => "Esteio",
            ],
            [
                "idestado" => 43,
                "nome" => "Estrela",
            ],
            [
                "idestado" => 43,
                "nome" => "Estrela Velha",
            ],
            [
                "idestado" => 43,
                "nome" => "Eugênio de Castro",
            ],
            [
                "idestado" => 43,
                "nome" => "Fagundes Varela",
            ],
            [
                "idestado" => 43,
                "nome" => "Farroupilha",
            ],
            [
                "idestado" => 43,
                "nome" => "Faxinal do Soturno",
            ],
            [
                "idestado" => 43,
                "nome" => "Faxinalzinho",
            ],
            [
                "idestado" => 43,
                "nome" => "Fazenda Vilanova",
            ],
            [
                "idestado" => 43,
                "nome" => "Feliz",
            ],
            [
                "idestado" => 43,
                "nome" => "Flores da Cunha",
            ],
            [
                "idestado" => 43,
                "nome" => "Floriano Peixoto",
            ],
            [
                "idestado" => 43,
                "nome" => "Fontoura Xavier",
            ],
            [
                "idestado" => 43,
                "nome" => "Formigueiro",
            ],
            [
                "idestado" => 43,
                "nome" => "Forquetinha",
            ],
            [
                "idestado" => 43,
                "nome" => "Fortaleza dos Valos",
            ],
            [
                "idestado" => 43,
                "nome" => "Frederico Westphalen",
            ],
            [
                "idestado" => 43,
                "nome" => "Garibaldi",
            ],
            [
                "idestado" => 43,
                "nome" => "Garruchos",
            ],
            [
                "idestado" => 43,
                "nome" => "Gaurama",
            ],
            [
                "idestado" => 43,
                "nome" => "General Câmara",
            ],
            [
                "idestado" => 43,
                "nome" => "Gentil",
            ],
            [
                "idestado" => 43,
                "nome" => "Getúlio Vargas",
            ],
            [
                "idestado" => 43,
                "nome" => "Giruá",
            ],
            [
                "idestado" => 43,
                "nome" => "Glorinha",
            ],
            [
                "idestado" => 43,
                "nome" => "Gramado",
            ],
            [
                "idestado" => 43,
                "nome" => "Gramado dos Loureiros",
            ],
            [
                "idestado" => 43,
                "nome" => "Gramado Xavier",
            ],
            [
                "idestado" => 43,
                "nome" => "Gravataí",
            ],
            [
                "idestado" => 43,
                "nome" => "Guabiju",
            ],
            [
                "idestado" => 43,
                "nome" => "Guaíba",
            ],
            [
                "idestado" => 43,
                "nome" => "Guaporé",
            ],
            [
                "idestado" => 43,
                "nome" => "Guarani das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "Harmonia",
            ],
            [
                "idestado" => 43,
                "nome" => "Herval",
            ],
            [
                "idestado" => 43,
                "nome" => "Herveiras",
            ],
            [
                "idestado" => 43,
                "nome" => "Horizontina",
            ],
            [
                "idestado" => 43,
                "nome" => "Hulha Negra",
            ],
            [
                "idestado" => 43,
                "nome" => "Humaitá",
            ],
            [
                "idestado" => 43,
                "nome" => "Ibarama",
            ],
            [
                "idestado" => 43,
                "nome" => "Ibiaçá",
            ],
            [
                "idestado" => 43,
                "nome" => "Ibiraiaras",
            ],
            [
                "idestado" => 43,
                "nome" => "Ibirapuitã",
            ],
            [
                "idestado" => 43,
                "nome" => "Ibirubá",
            ],
            [
                "idestado" => 43,
                "nome" => "Igrejinha",
            ],
            [
                "idestado" => 43,
                "nome" => "Ijuí",
            ],
            [
                "idestado" => 43,
                "nome" => "Ilópolis",
            ],
            [
                "idestado" => 43,
                "nome" => "Imbé",
            ],
            [
                "idestado" => 43,
                "nome" => "Imigrante",
            ],
            [
                "idestado" => 43,
                "nome" => "Independência",
            ],
            [
                "idestado" => 43,
                "nome" => "Inhacorá",
            ],
            [
                "idestado" => 43,
                "nome" => "Ipê",
            ],
            [
                "idestado" => 43,
                "nome" => "Ipiranga do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Iraí",
            ],
            [
                "idestado" => 43,
                "nome" => "Itaara",
            ],
            [
                "idestado" => 43,
                "nome" => "Itacurubi",
            ],
            [
                "idestado" => 43,
                "nome" => "Itapuca",
            ],
            [
                "idestado" => 43,
                "nome" => "Itaqui",
            ],
            [
                "idestado" => 43,
                "nome" => "Itati",
            ],
            [
                "idestado" => 43,
                "nome" => "Itatiba do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Ivorá",
            ],
            [
                "idestado" => 43,
                "nome" => "Ivoti",
            ],
            [
                "idestado" => 43,
                "nome" => "Jaboticaba",
            ],
            [
                "idestado" => 43,
                "nome" => "Jacuizinho",
            ],
            [
                "idestado" => 43,
                "nome" => "Jacutinga",
            ],
            [
                "idestado" => 43,
                "nome" => "Jaguarão",
            ],
            [
                "idestado" => 43,
                "nome" => "Jaguari",
            ],
            [
                "idestado" => 43,
                "nome" => "Jaquirana",
            ],
            [
                "idestado" => 43,
                "nome" => "Jari",
            ],
            [
                "idestado" => 43,
                "nome" => "Jóia",
            ],
            [
                "idestado" => 43,
                "nome" => "Júlio de Castilhos",
            ],
            [
                "idestado" => 43,
                "nome" => "Lagoa Bonita do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Lagoa dos Três Cantos",
            ],
            [
                "idestado" => 43,
                "nome" => "Lagoa Vermelha",
            ],
            [
                "idestado" => 43,
                "nome" => "Lagoão",
            ],
            [
                "idestado" => 43,
                "nome" => "Lajeado",
            ],
            [
                "idestado" => 43,
                "nome" => "Lajeado do Bugre",
            ],
            [
                "idestado" => 43,
                "nome" => "Lavras do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Liberato Salzano",
            ],
            [
                "idestado" => 43,
                "nome" => "Lindolfo Collor",
            ],
            [
                "idestado" => 43,
                "nome" => "Linha Nova",
            ],
            [
                "idestado" => 43,
                "nome" => "Maçambará",
            ],
            [
                "idestado" => 43,
                "nome" => "Machadinho",
            ],
            [
                "idestado" => 43,
                "nome" => "Mampituba",
            ],
            [
                "idestado" => 43,
                "nome" => "Manoel Viana",
            ],
            [
                "idestado" => 43,
                "nome" => "Maquiné",
            ],
            [
                "idestado" => 43,
                "nome" => "Maratá",
            ],
            [
                "idestado" => 43,
                "nome" => "Marau",
            ],
            [
                "idestado" => 43,
                "nome" => "Marcelino Ramos",
            ],
            [
                "idestado" => 43,
                "nome" => "Mariana Pimentel",
            ],
            [
                "idestado" => 43,
                "nome" => "Mariano Moro",
            ],
            [
                "idestado" => 43,
                "nome" => "Marques de Souza",
            ],
            [
                "idestado" => 43,
                "nome" => "Mata",
            ],
            [
                "idestado" => 43,
                "nome" => "Mato Castelhano",
            ],
            [
                "idestado" => 43,
                "nome" => "Mato Leitão",
            ],
            [
                "idestado" => 43,
                "nome" => "Mato Queimado",
            ],
            [
                "idestado" => 43,
                "nome" => "Maximiliano de Almeida",
            ],
            [
                "idestado" => 43,
                "nome" => "Minas do Leão",
            ],
            [
                "idestado" => 43,
                "nome" => "Miraguaí",
            ],
            [
                "idestado" => 43,
                "nome" => "Montauri",
            ],
            [
                "idestado" => 43,
                "nome" => "Monte Alegre dos Campos",
            ],
            [
                "idestado" => 43,
                "nome" => "Monte Belo do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Montenegro",
            ],
            [
                "idestado" => 43,
                "nome" => "Mormaço",
            ],
            [
                "idestado" => 43,
                "nome" => "Morrinhos do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Morro Redondo",
            ],
            [
                "idestado" => 43,
                "nome" => "Morro Reuter",
            ],
            [
                "idestado" => 43,
                "nome" => "Mostardas",
            ],
            [
                "idestado" => 43,
                "nome" => "Muçum",
            ],
            [
                "idestado" => 43,
                "nome" => "Muitos Capões",
            ],
            [
                "idestado" => 43,
                "nome" => "Muliterno",
            ],
            [
                "idestado" => 43,
                "nome" => "Não-Me-Toque",
            ],
            [
                "idestado" => 43,
                "nome" => "Nicolau Vergueiro",
            ],
            [
                "idestado" => 43,
                "nome" => "Nonoai",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Alvorada",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Araçá",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Bassano",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Boa Vista",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Bréscia",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Candelária",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Esperança do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Hartz",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Pádua",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Palma",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Petrópolis",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Prata",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Ramada",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Roma do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Nova Santa Rita",
            ],
            [
                "idestado" => 43,
                "nome" => "Novo Barreiro",
            ],
            [
                "idestado" => 43,
                "nome" => "Novo Cabrais",
            ],
            [
                "idestado" => 43,
                "nome" => "Novo Hamburgo",
            ],
            [
                "idestado" => 43,
                "nome" => "Novo Machado",
            ],
            [
                "idestado" => 43,
                "nome" => "Novo Tiradentes",
            ],
            [
                "idestado" => 43,
                "nome" => "Novo Xingu",
            ],
            [
                "idestado" => 43,
                "nome" => "Osório",
            ],
            [
                "idestado" => 43,
                "nome" => "Paim Filho",
            ],
            [
                "idestado" => 43,
                "nome" => "Palmares do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Palmeira das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "Palmitinho",
            ],
            [
                "idestado" => 43,
                "nome" => "Panambi",
            ],
            [
                "idestado" => 43,
                "nome" => "Pantano Grande",
            ],
            [
                "idestado" => 43,
                "nome" => "Paraí",
            ],
            [
                "idestado" => 43,
                "nome" => "Paraíso do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Pareci Novo",
            ],
            [
                "idestado" => 43,
                "nome" => "Parobé",
            ],
            [
                "idestado" => 43,
                "nome" => "Passa Sete",
            ],
            [
                "idestado" => 43,
                "nome" => "Passo do Sobrado",
            ],
            [
                "idestado" => 43,
                "nome" => "Passo Fundo",
            ],
            [
                "idestado" => 43,
                "nome" => "Paulo Bento",
            ],
            [
                "idestado" => 43,
                "nome" => "Paverama",
            ],
            [
                "idestado" => 43,
                "nome" => "Pedras Altas",
            ],
            [
                "idestado" => 43,
                "nome" => "Pedro Osório",
            ],
            [
                "idestado" => 43,
                "nome" => "Pejuçara",
            ],
            [
                "idestado" => 43,
                "nome" => "Pelotas",
            ],
            [
                "idestado" => 43,
                "nome" => "Picada Café",
            ],
            [
                "idestado" => 43,
                "nome" => "Pinhal",
            ],
            [
                "idestado" => 43,
                "nome" => "Pinhal da Serra",
            ],
            [
                "idestado" => 43,
                "nome" => "Pinhal Grande",
            ],
            [
                "idestado" => 43,
                "nome" => "Pinheirinho do Vale",
            ],
            [
                "idestado" => 43,
                "nome" => "Pinheiro Machado",
            ],
            [
                "idestado" => 43,
                "nome" => "Pinto Bandeira",
            ],
            [
                "idestado" => 43,
                "nome" => "Pirapó",
            ],
            [
                "idestado" => 43,
                "nome" => "Piratini",
            ],
            [
                "idestado" => 43,
                "nome" => "Planalto",
            ],
            [
                "idestado" => 43,
                "nome" => "Poço das Antas",
            ],
            [
                "idestado" => 43,
                "nome" => "Pontão",
            ],
            [
                "idestado" => 43,
                "nome" => "Ponte Preta",
            ],
            [
                "idestado" => 43,
                "nome" => "Portão",
            ],
            [
                "idestado" => 43,
                "nome" => "Porto Alegre",
            ],
            [
                "idestado" => 43,
                "nome" => "Porto Lucena",
            ],
            [
                "idestado" => 43,
                "nome" => "Porto Mauá",
            ],
            [
                "idestado" => 43,
                "nome" => "Porto Vera Cruz",
            ],
            [
                "idestado" => 43,
                "nome" => "Porto Xavier",
            ],
            [
                "idestado" => 43,
                "nome" => "Pouso Novo",
            ],
            [
                "idestado" => 43,
                "nome" => "Presidente Lucena",
            ],
            [
                "idestado" => 43,
                "nome" => "Progresso",
            ],
            [
                "idestado" => 43,
                "nome" => "Protásio Alves",
            ],
            [
                "idestado" => 43,
                "nome" => "Putinga",
            ],
            [
                "idestado" => 43,
                "nome" => "Quaraí",
            ],
            [
                "idestado" => 43,
                "nome" => "Quatro Irmãos",
            ],
            [
                "idestado" => 43,
                "nome" => "Quevedos",
            ],
            [
                "idestado" => 43,
                "nome" => "Quinze de Novembro",
            ],
            [
                "idestado" => 43,
                "nome" => "Redentora",
            ],
            [
                "idestado" => 43,
                "nome" => "Relvado",
            ],
            [
                "idestado" => 43,
                "nome" => "Restinga Sêca",
            ],
            [
                "idestado" => 43,
                "nome" => "Rio dos Índios",
            ],
            [
                "idestado" => 43,
                "nome" => "Rio Grande",
            ],
            [
                "idestado" => 43,
                "nome" => "Rio Pardo",
            ],
            [
                "idestado" => 43,
                "nome" => "Riozinho",
            ],
            [
                "idestado" => 43,
                "nome" => "Roca Sales",
            ],
            [
                "idestado" => 43,
                "nome" => "Rodeio Bonito",
            ],
            [
                "idestado" => 43,
                "nome" => "Rolador",
            ],
            [
                "idestado" => 43,
                "nome" => "Rolante",
            ],
            [
                "idestado" => 43,
                "nome" => "Ronda Alta",
            ],
            [
                "idestado" => 43,
                "nome" => "Rondinha",
            ],
            [
                "idestado" => 43,
                "nome" => "Roque Gonzales",
            ],
            [
                "idestado" => 43,
                "nome" => "Rosário do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Sagrada Família",
            ],
            [
                "idestado" => 43,
                "nome" => "Saldanha Marinho",
            ],
            [
                "idestado" => 43,
                "nome" => "Salto do Jacuí",
            ],
            [
                "idestado" => 43,
                "nome" => "Salvador das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "Salvador do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Sananduva",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Bárbara do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Cecília do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Clara do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Cruz do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Margarida do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Maria",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Maria do Herval",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Rosa",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Tereza",
            ],
            [
                "idestado" => 43,
                "nome" => "Santa Vitória do Palmar",
            ],
            [
                "idestado" => 43,
                "nome" => "Santana da Boa Vista",
            ],
            [
                "idestado" => 43,
                "nome" => "Sant'Ana do Livramento",
            ],
            [
                "idestado" => 43,
                "nome" => "Santiago",
            ],
            [
                "idestado" => 43,
                "nome" => "Santo Ângelo",
            ],
            [
                "idestado" => 43,
                "nome" => "Santo Antônio da Patrulha",
            ],
            [
                "idestado" => 43,
                "nome" => "Santo Antônio das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "Santo Antônio do Palma",
            ],
            [
                "idestado" => 43,
                "nome" => "Santo Antônio do Planalto",
            ],
            [
                "idestado" => 43,
                "nome" => "Santo Augusto",
            ],
            [
                "idestado" => 43,
                "nome" => "Santo Cristo",
            ],
            [
                "idestado" => 43,
                "nome" => "Santo Expedito do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "São Borja",
            ],
            [
                "idestado" => 43,
                "nome" => "São Domingos do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "São Francisco de Assis",
            ],
            [
                "idestado" => 43,
                "nome" => "São Francisco de Paula",
            ],
            [
                "idestado" => 43,
                "nome" => "São Gabriel",
            ],
            [
                "idestado" => 43,
                "nome" => "São Jerônimo",
            ],
            [
                "idestado" => 43,
                "nome" => "São João da Urtiga",
            ],
            [
                "idestado" => 43,
                "nome" => "São João do Polêsine",
            ],
            [
                "idestado" => 43,
                "nome" => "São Jorge",
            ],
            [
                "idestado" => 43,
                "nome" => "São José das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "São José do Herval",
            ],
            [
                "idestado" => 43,
                "nome" => "São José do Hortêncio",
            ],
            [
                "idestado" => 43,
                "nome" => "São José do Inhacorá",
            ],
            [
                "idestado" => 43,
                "nome" => "São José do Norte",
            ],
            [
                "idestado" => 43,
                "nome" => "São José do Ouro",
            ],
            [
                "idestado" => 43,
                "nome" => "São José do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "São José dos Ausentes",
            ],
            [
                "idestado" => 43,
                "nome" => "São Leopoldo",
            ],
            [
                "idestado" => 43,
                "nome" => "São Lourenço do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "São Luiz Gonzaga",
            ],
            [
                "idestado" => 43,
                "nome" => "São Marcos",
            ],
            [
                "idestado" => 43,
                "nome" => "São Martinho",
            ],
            [
                "idestado" => 43,
                "nome" => "São Martinho da Serra",
            ],
            [
                "idestado" => 43,
                "nome" => "São Miguel das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "São Nicolau",
            ],
            [
                "idestado" => 43,
                "nome" => "São Paulo das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "São Pedro da Serra",
            ],
            [
                "idestado" => 43,
                "nome" => "São Pedro das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "São Pedro do Butiá",
            ],
            [
                "idestado" => 43,
                "nome" => "São Pedro do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "São Sebastião do Caí",
            ],
            [
                "idestado" => 43,
                "nome" => "São Sepé",
            ],
            [
                "idestado" => 43,
                "nome" => "São Valentim",
            ],
            [
                "idestado" => 43,
                "nome" => "São Valentim do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "São Valério do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "São Vendelino",
            ],
            [
                "idestado" => 43,
                "nome" => "São Vicente do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Sapiranga",
            ],
            [
                "idestado" => 43,
                "nome" => "Sapucaia do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Sarandi",
            ],
            [
                "idestado" => 43,
                "nome" => "Seberi",
            ],
            [
                "idestado" => 43,
                "nome" => "Sede Nova",
            ],
            [
                "idestado" => 43,
                "nome" => "Segredo",
            ],
            [
                "idestado" => 43,
                "nome" => "Selbach",
            ],
            [
                "idestado" => 43,
                "nome" => "Senador Salgado Filho",
            ],
            [
                "idestado" => 43,
                "nome" => "Sentinela do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Serafina Corrêa",
            ],
            [
                "idestado" => 43,
                "nome" => "Sério",
            ],
            [
                "idestado" => 43,
                "nome" => "Sertão",
            ],
            [
                "idestado" => 43,
                "nome" => "Sertão Santana",
            ],
            [
                "idestado" => 43,
                "nome" => "Sete de Setembro",
            ],
            [
                "idestado" => 43,
                "nome" => "Severiano de Almeida",
            ],
            [
                "idestado" => 43,
                "nome" => "Silveira Martins",
            ],
            [
                "idestado" => 43,
                "nome" => "Sinimbu",
            ],
            [
                "idestado" => 43,
                "nome" => "Sobradinho",
            ],
            [
                "idestado" => 43,
                "nome" => "Soledade",
            ],
            [
                "idestado" => 43,
                "nome" => "Tabaí",
            ],
            [
                "idestado" => 43,
                "nome" => "Tapejara",
            ],
            [
                "idestado" => 43,
                "nome" => "Tapera",
            ],
            [
                "idestado" => 43,
                "nome" => "Tapes",
            ],
            [
                "idestado" => 43,
                "nome" => "Taquara",
            ],
            [
                "idestado" => 43,
                "nome" => "Taquari",
            ],
            [
                "idestado" => 43,
                "nome" => "Taquaruçu do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Tavares",
            ],
            [
                "idestado" => 43,
                "nome" => "Tenente Portela",
            ],
            [
                "idestado" => 43,
                "nome" => "Terra de Areia",
            ],
            [
                "idestado" => 43,
                "nome" => "Teutônia",
            ],
            [
                "idestado" => 43,
                "nome" => "Tio Hugo",
            ],
            [
                "idestado" => 43,
                "nome" => "Tiradentes do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Toropi",
            ],
            [
                "idestado" => 43,
                "nome" => "Torres",
            ],
            [
                "idestado" => 43,
                "nome" => "Tramandaí",
            ],
            [
                "idestado" => 43,
                "nome" => "Travesseiro",
            ],
            [
                "idestado" => 43,
                "nome" => "Três Arroios",
            ],
            [
                "idestado" => 43,
                "nome" => "Três Cachoeiras",
            ],
            [
                "idestado" => 43,
                "nome" => "Três Coroas",
            ],
            [
                "idestado" => 43,
                "nome" => "Três de Maio",
            ],
            [
                "idestado" => 43,
                "nome" => "Três Forquilhas",
            ],
            [
                "idestado" => 43,
                "nome" => "Três Palmeiras",
            ],
            [
                "idestado" => 43,
                "nome" => "Três Passos",
            ],
            [
                "idestado" => 43,
                "nome" => "Trindade do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Triunfo",
            ],
            [
                "idestado" => 43,
                "nome" => "Tucunduva",
            ],
            [
                "idestado" => 43,
                "nome" => "Tunas",
            ],
            [
                "idestado" => 43,
                "nome" => "Tupanci do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Tupanciretã",
            ],
            [
                "idestado" => 43,
                "nome" => "Tupandi",
            ],
            [
                "idestado" => 43,
                "nome" => "Tuparendi",
            ],
            [
                "idestado" => 43,
                "nome" => "Turuçu",
            ],
            [
                "idestado" => 43,
                "nome" => "Ubiretama",
            ],
            [
                "idestado" => 43,
                "nome" => "União da Serra",
            ],
            [
                "idestado" => 43,
                "nome" => "Unistalda",
            ],
            [
                "idestado" => 43,
                "nome" => "Uruguaiana",
            ],
            [
                "idestado" => 43,
                "nome" => "Vacaria",
            ],
            [
                "idestado" => 43,
                "nome" => "Vale do Sol",
            ],
            [
                "idestado" => 43,
                "nome" => "Vale Real",
            ],
            [
                "idestado" => 43,
                "nome" => "Vale Verde",
            ],
            [
                "idestado" => 43,
                "nome" => "Vanini",
            ],
            [
                "idestado" => 43,
                "nome" => "Venâncio Aires",
            ],
            [
                "idestado" => 43,
                "nome" => "Vera Cruz",
            ],
            [
                "idestado" => 43,
                "nome" => "Veranópolis",
            ],
            [
                "idestado" => 43,
                "nome" => "Vespasiano Corrêa",
            ],
            [
                "idestado" => 43,
                "nome" => "Viadutos",
            ],
            [
                "idestado" => 43,
                "nome" => "Viamão",
            ],
            [
                "idestado" => 43,
                "nome" => "Vicente Dutra",
            ],
            [
                "idestado" => 43,
                "nome" => "Victor Graeff",
            ],
            [
                "idestado" => 43,
                "nome" => "Vila Flores",
            ],
            [
                "idestado" => 43,
                "nome" => "Vila Lângaro",
            ],
            [
                "idestado" => 43,
                "nome" => "Vila Maria",
            ],
            [
                "idestado" => 43,
                "nome" => "Vila Nova do Sul",
            ],
            [
                "idestado" => 43,
                "nome" => "Vista Alegre",
            ],
            [
                "idestado" => 43,
                "nome" => "Vista Alegre do Prata",
            ],
            [
                "idestado" => 43,
                "nome" => "Vista Gaúcha",
            ],
            [
                "idestado" => 43,
                "nome" => "Vitória das Missões",
            ],
            [
                "idestado" => 43,
                "nome" => "Westfália",
            ],
            [
                "idestado" => 43,
                "nome" => "Xangri-lá",
            ],
            [
                "idestado" => 50,
                "nome" => "Água Clara",
            ],
            [
                "idestado" => 50,
                "nome" => "Alcinópolis",
            ],
            [
                "idestado" => 50,
                "nome" => "Amambai",
            ],
            [
                "idestado" => 50,
                "nome" => "Anastácio",
            ],
            [
                "idestado" => 50,
                "nome" => "Anaurilândia",
            ],
            [
                "idestado" => 50,
                "nome" => "Angélica",
            ],
            [
                "idestado" => 50,
                "nome" => "Antônio João",
            ],
            [
                "idestado" => 50,
                "nome" => "Aparecida do Taboado",
            ],
            [
                "idestado" => 50,
                "nome" => "Aquidauana",
            ],
            [
                "idestado" => 50,
                "nome" => "Aral Moreira",
            ],
            [
                "idestado" => 50,
                "nome" => "Bandeirantes",
            ],
            [
                "idestado" => 50,
                "nome" => "Bataguassu",
            ],
            [
                "idestado" => 50,
                "nome" => "Batayporã",
            ],
            [
                "idestado" => 50,
                "nome" => "Bela Vista",
            ],
            [
                "idestado" => 50,
                "nome" => "Bodoquena",
            ],
            [
                "idestado" => 50,
                "nome" => "Bonito",
            ],
            [
                "idestado" => 50,
                "nome" => "Brasilândia",
            ],
            [
                "idestado" => 50,
                "nome" => "Caarapó",
            ],
            [
                "idestado" => 50,
                "nome" => "Camapuã",
            ],
            [
                "idestado" => 50,
                "nome" => "Campo Grande",
            ],
            [
                "idestado" => 50,
                "nome" => "Caracol",
            ],
            [
                "idestado" => 50,
                "nome" => "Cassilândia",
            ],
            [
                "idestado" => 50,
                "nome" => "Chapadão do Sul",
            ],
            [
                "idestado" => 50,
                "nome" => "Corguinho",
            ],
            [
                "idestado" => 50,
                "nome" => "Coronel Sapucaia",
            ],
            [
                "idestado" => 50,
                "nome" => "Corumbá",
            ],
            [
                "idestado" => 50,
                "nome" => "Costa Rica",
            ],
            [
                "idestado" => 50,
                "nome" => "Coxim",
            ],
            [
                "idestado" => 50,
                "nome" => "Deodápolis",
            ],
            [
                "idestado" => 50,
                "nome" => "Dois Irmãos do Buriti",
            ],
            [
                "idestado" => 50,
                "nome" => "Douradina",
            ],
            [
                "idestado" => 50,
                "nome" => "Dourados",
            ],
            [
                "idestado" => 50,
                "nome" => "Eldorado",
            ],
            [
                "idestado" => 50,
                "nome" => "Fátima do Sul",
            ],
            [
                "idestado" => 50,
                "nome" => "Figueirão",
            ],
            [
                "idestado" => 50,
                "nome" => "Glória de Dourados",
            ],
            [
                "idestado" => 50,
                "nome" => "Guia Lopes da Laguna",
            ],
            [
                "idestado" => 50,
                "nome" => "Iguatemi",
            ],
            [
                "idestado" => 50,
                "nome" => "Inocência",
            ],
            [
                "idestado" => 50,
                "nome" => "Itaporã",
            ],
            [
                "idestado" => 50,
                "nome" => "Itaquiraí",
            ],
            [
                "idestado" => 50,
                "nome" => "Ivinhema",
            ],
            [
                "idestado" => 50,
                "nome" => "Japorã",
            ],
            [
                "idestado" => 50,
                "nome" => "Jaraguari",
            ],
            [
                "idestado" => 50,
                "nome" => "Jardim",
            ],
            [
                "idestado" => 50,
                "nome" => "Jateí",
            ],
            [
                "idestado" => 50,
                "nome" => "Juti",
            ],
            [
                "idestado" => 50,
                "nome" => "Ladário",
            ],
            [
                "idestado" => 50,
                "nome" => "Laguna Carapã",
            ],
            [
                "idestado" => 50,
                "nome" => "Maracaju",
            ],
            [
                "idestado" => 50,
                "nome" => "Miranda",
            ],
            [
                "idestado" => 50,
                "nome" => "Mundo Novo",
            ],
            [
                "idestado" => 50,
                "nome" => "Naviraí",
            ],
            [
                "idestado" => 50,
                "nome" => "Nioaque",
            ],
            [
                "idestado" => 50,
                "nome" => "Nova Alvorada do Sul",
            ],
            [
                "idestado" => 50,
                "nome" => "Nova Andradina",
            ],
            [
                "idestado" => 50,
                "nome" => "Novo Horizonte do Sul",
            ],
            [
                "idestado" => 50,
                "nome" => "Paraíso das Águas",
            ],
            [
                "idestado" => 50,
                "nome" => "Paranaíba",
            ],
            [
                "idestado" => 50,
                "nome" => "Paranhos",
            ],
            [
                "idestado" => 50,
                "nome" => "Pedro Gomes",
            ],
            [
                "idestado" => 50,
                "nome" => "Ponta Porã",
            ],
            [
                "idestado" => 50,
                "nome" => "Porto Murtinho",
            ],
            [
                "idestado" => 50,
                "nome" => "Ribas do Rio Pardo",
            ],
            [
                "idestado" => 50,
                "nome" => "Rio Brilhante",
            ],
            [
                "idestado" => 50,
                "nome" => "Rio Negro",
            ],
            [
                "idestado" => 50,
                "nome" => "Rio Verde de Mato Grosso",
            ],
            [
                "idestado" => 50,
                "nome" => "Rochedo",
            ],
            [
                "idestado" => 50,
                "nome" => "Santa Rita do Pardo",
            ],
            [
                "idestado" => 50,
                "nome" => "São Gabriel do Oeste",
            ],
            [
                "idestado" => 50,
                "nome" => "Selvíria",
            ],
            [
                "idestado" => 50,
                "nome" => "Sete Quedas",
            ],
            [
                "idestado" => 50,
                "nome" => "Sidrolândia",
            ],
            [
                "idestado" => 50,
                "nome" => "Sonora",
            ],
            [
                "idestado" => 50,
                "nome" => "Tacuru",
            ],
            [
                "idestado" => 50,
                "nome" => "Taquarussu",
            ],
            [
                "idestado" => 50,
                "nome" => "Terenos",
            ],
            [
                "idestado" => 50,
                "nome" => "Três Lagoas",
            ],
            [
                "idestado" => 50,
                "nome" => "Vicentina",
            ],
            [
                "idestado" => 51,
                "nome" => "Acorizal",
            ],
            [
                "idestado" => 51,
                "nome" => "Água Boa",
            ],
            [
                "idestado" => 51,
                "nome" => "Alta Floresta",
            ],
            [
                "idestado" => 51,
                "nome" => "Alto Araguaia",
            ],
            [
                "idestado" => 51,
                "nome" => "Alto Boa Vista",
            ],
            [
                "idestado" => 51,
                "nome" => "Alto Garças",
            ],
            [
                "idestado" => 51,
                "nome" => "Alto Paraguai",
            ],
            [
                "idestado" => 51,
                "nome" => "Alto Taquari",
            ],
            [
                "idestado" => 51,
                "nome" => "Apiacás",
            ],
            [
                "idestado" => 51,
                "nome" => "Araguaiana",
            ],
            [
                "idestado" => 51,
                "nome" => "Araguainha",
            ],
            [
                "idestado" => 51,
                "nome" => "Araputanga",
            ],
            [
                "idestado" => 51,
                "nome" => "Arenápolis",
            ],
            [
                "idestado" => 51,
                "nome" => "Aripuanã",
            ],
            [
                "idestado" => 51,
                "nome" => "Barão de Melgaço",
            ],
            [
                "idestado" => 51,
                "nome" => "Barra do Bugres",
            ],
            [
                "idestado" => 51,
                "nome" => "Barra do Garças",
            ],
            [
                "idestado" => 51,
                "nome" => "Bom Jesus do Araguaia",
            ],
            [
                "idestado" => 51,
                "nome" => "Brasnorte",
            ],
            [
                "idestado" => 51,
                "nome" => "Cáceres",
            ],
            [
                "idestado" => 51,
                "nome" => "Campinápolis",
            ],
            [
                "idestado" => 51,
                "nome" => "Campo Novo do Parecis",
            ],
            [
                "idestado" => 51,
                "nome" => "Campo Verde",
            ],
            [
                "idestado" => 51,
                "nome" => "Campos de Júlio",
            ],
            [
                "idestado" => 51,
                "nome" => "Canabrava do Norte",
            ],
            [
                "idestado" => 51,
                "nome" => "Canarana",
            ],
            [
                "idestado" => 51,
                "nome" => "Carlinda",
            ],
            [
                "idestado" => 51,
                "nome" => "Castanheira",
            ],
            [
                "idestado" => 51,
                "nome" => "Chapada dos Guimarães",
            ],
            [
                "idestado" => 51,
                "nome" => "Cláudia",
            ],
            [
                "idestado" => 51,
                "nome" => "Cocalinho",
            ],
            [
                "idestado" => 51,
                "nome" => "Colíder",
            ],
            [
                "idestado" => 51,
                "nome" => "Colniza",
            ],
            [
                "idestado" => 51,
                "nome" => "Comodoro",
            ],
            [
                "idestado" => 51,
                "nome" => "Confresa",
            ],
            [
                "idestado" => 51,
                "nome" => "Conquista D'Oeste",
            ],
            [
                "idestado" => 51,
                "nome" => "Cotriguaçu",
            ],
            [
                "idestado" => 51,
                "nome" => "Cuiabá",
            ],
            [
                "idestado" => 51,
                "nome" => "Curvelândia",
            ],
            [
                "idestado" => 51,
                "nome" => "Denise",
            ],
            [
                "idestado" => 51,
                "nome" => "Diamantino",
            ],
            [
                "idestado" => 51,
                "nome" => "Dom Aquino",
            ],
            [
                "idestado" => 51,
                "nome" => "Feliz Natal",
            ],
            [
                "idestado" => 51,
                "nome" => "Figueirópolis D'Oeste",
            ],
            [
                "idestado" => 51,
                "nome" => "Gaúcha do Norte",
            ],
            [
                "idestado" => 51,
                "nome" => "General Carneiro",
            ],
            [
                "idestado" => 51,
                "nome" => "Glória D'Oeste",
            ],
            [
                "idestado" => 51,
                "nome" => "Guarantã do Norte",
            ],
            [
                "idestado" => 51,
                "nome" => "Guiratinga",
            ],
            [
                "idestado" => 51,
                "nome" => "Indiavaí",
            ],
            [
                "idestado" => 51,
                "nome" => "Ipiranga do Norte",
            ],
            [
                "idestado" => 51,
                "nome" => "Itanhangá",
            ],
            [
                "idestado" => 51,
                "nome" => "Itaúba",
            ],
            [
                "idestado" => 51,
                "nome" => "Itiquira",
            ],
            [
                "idestado" => 51,
                "nome" => "Jaciara",
            ],
            [
                "idestado" => 51,
                "nome" => "Jangada",
            ],
            [
                "idestado" => 51,
                "nome" => "Jauru",
            ],
            [
                "idestado" => 51,
                "nome" => "Juara",
            ],
            [
                "idestado" => 51,
                "nome" => "Juína",
            ],
            [
                "idestado" => 51,
                "nome" => "Juruena",
            ],
            [
                "idestado" => 51,
                "nome" => "Juscimeira",
            ],
            [
                "idestado" => 51,
                "nome" => "Lambari D'Oeste",
            ],
            [
                "idestado" => 51,
                "nome" => "Lucas do Rio Verde",
            ],
            [
                "idestado" => 51,
                "nome" => "Luciara",
            ],
            [
                "idestado" => 51,
                "nome" => "Marcelândia",
            ],
            [
                "idestado" => 51,
                "nome" => "Matupá",
            ],
            [
                "idestado" => 51,
                "nome" => "Mirassol d'Oeste",
            ],
            [
                "idestado" => 51,
                "nome" => "Nobres",
            ],
            [
                "idestado" => 51,
                "nome" => "Nortelândia",
            ],
            [
                "idestado" => 51,
                "nome" => "Nossa Senhora do Livramento",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Bandeirantes",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Brasilândia",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Canaã do Norte",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Guarita",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Lacerda",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Marilândia",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Maringá",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Monte Verde",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Mutum",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Nazaré",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Olímpia",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Santa Helena",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Ubiratã",
            ],
            [
                "idestado" => 51,
                "nome" => "Nova Xavantina",
            ],
            [
                "idestado" => 51,
                "nome" => "Novo Horizonte do Norte",
            ],
            [
                "idestado" => 51,
                "nome" => "Novo Mundo",
            ],
            [
                "idestado" => 51,
                "nome" => "Novo Santo Antônio",
            ],
            [
                "idestado" => 51,
                "nome" => "Novo São Joaquim",
            ],
            [
                "idestado" => 51,
                "nome" => "Paranaíta",
            ],
            [
                "idestado" => 51,
                "nome" => "Paranatinga",
            ],
            [
                "idestado" => 51,
                "nome" => "Pedra Preta",
            ],
            [
                "idestado" => 51,
                "nome" => "Peixoto de Azevedo",
            ],
            [
                "idestado" => 51,
                "nome" => "Planalto da Serra",
            ],
            [
                "idestado" => 51,
                "nome" => "Poconé",
            ],
            [
                "idestado" => 51,
                "nome" => "Pontal do Araguaia",
            ],
            [
                "idestado" => 51,
                "nome" => "Ponte Branca",
            ],
            [
                "idestado" => 51,
                "nome" => "Pontes e Lacerda",
            ],
            [
                "idestado" => 51,
                "nome" => "Porto Alegre do Norte",
            ],
            [
                "idestado" => 51,
                "nome" => "Porto dos Gaúchos",
            ],
            [
                "idestado" => 51,
                "nome" => "Porto Esperidião",
            ],
            [
                "idestado" => 51,
                "nome" => "Porto Estrela",
            ],
            [
                "idestado" => 51,
                "nome" => "Poxoréu",
            ],
            [
                "idestado" => 51,
                "nome" => "Primavera do Leste",
            ],
            [
                "idestado" => 51,
                "nome" => "Querência",
            ],
            [
                "idestado" => 51,
                "nome" => "Reserva do Cabaçal",
            ],
            [
                "idestado" => 51,
                "nome" => "Ribeirão Cascalheira",
            ],
            [
                "idestado" => 51,
                "nome" => "Ribeirãozinho",
            ],
            [
                "idestado" => 51,
                "nome" => "Rio Branco",
            ],
            [
                "idestado" => 51,
                "nome" => "Rondolândia",
            ],
            [
                "idestado" => 51,
                "nome" => "Rondonópolis",
            ],
            [
                "idestado" => 51,
                "nome" => "Rosário Oeste",
            ],
            [
                "idestado" => 51,
                "nome" => "Salto do Céu",
            ],
            [
                "idestado" => 51,
                "nome" => "Santa Carmem",
            ],
            [
                "idestado" => 51,
                "nome" => "Santa Cruz do Xingu",
            ],
            [
                "idestado" => 51,
                "nome" => "Santa Rita do Trivelato",
            ],
            [
                "idestado" => 51,
                "nome" => "Santa Terezinha",
            ],
            [
                "idestado" => 51,
                "nome" => "Santo Afonso",
            ],
            [
                "idestado" => 51,
                "nome" => "Santo Antônio do Leste",
            ],
            [
                "idestado" => 51,
                "nome" => "Santo Antônio do Leverger",
            ],
            [
                "idestado" => 51,
                "nome" => "São Félix do Araguaia",
            ],
            [
                "idestado" => 51,
                "nome" => "São José do Povo",
            ],
            [
                "idestado" => 51,
                "nome" => "São José do Rio Claro",
            ],
            [
                "idestado" => 51,
                "nome" => "São José do Xingu",
            ],
            [
                "idestado" => 51,
                "nome" => "São José dos Quatro Marcos",
            ],
            [
                "idestado" => 51,
                "nome" => "São Pedro da Cipa",
            ],
            [
                "idestado" => 51,
                "nome" => "Sapezal",
            ],
            [
                "idestado" => 51,
                "nome" => "Serra Nova Dourada",
            ],
            [
                "idestado" => 51,
                "nome" => "Sinop",
            ],
            [
                "idestado" => 51,
                "nome" => "Sorriso",
            ],
            [
                "idestado" => 51,
                "nome" => "Tabaporã",
            ],
            [
                "idestado" => 51,
                "nome" => "Tangará da Serra",
            ],
            [
                "idestado" => 51,
                "nome" => "Tapurah",
            ],
            [
                "idestado" => 51,
                "nome" => "Terra Nova do Norte",
            ],
            [
                "idestado" => 51,
                "nome" => "Tesouro",
            ],
            [
                "idestado" => 51,
                "nome" => "Torixoréu",
            ],
            [
                "idestado" => 51,
                "nome" => "União do Sul",
            ],
            [
                "idestado" => 51,
                "nome" => "Vale de São Domingos",
            ],
            [
                "idestado" => 51,
                "nome" => "Várzea Grande",
            ],
            [
                "idestado" => 51,
                "nome" => "Vera",
            ],
            [
                "idestado" => 51,
                "nome" => "Vila Bela da Santíssima Trindade",
            ],
            [
                "idestado" => 51,
                "nome" => "Vila Rica",
            ],
            [
                "idestado" => 52,
                "nome" => "Abadia de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Abadiânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Acreúna",
            ],
            [
                "idestado" => 52,
                "nome" => "Adelândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Água Fria de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Água Limpa",
            ],
            [
                "idestado" => 52,
                "nome" => "Águas Lindas de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Alexânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Aloândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Alto Horizonte",
            ],
            [
                "idestado" => 52,
                "nome" => "Alto Paraíso de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Alvorada do Norte",
            ],
            [
                "idestado" => 52,
                "nome" => "Amaralina",
            ],
            [
                "idestado" => 52,
                "nome" => "Americano do Brasil",
            ],
            [
                "idestado" => 52,
                "nome" => "Amorinópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Anápolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Anhanguera",
            ],
            [
                "idestado" => 52,
                "nome" => "Anicuns",
            ],
            [
                "idestado" => 52,
                "nome" => "Aparecida de Goiânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Aparecida do Rio Doce",
            ],
            [
                "idestado" => 52,
                "nome" => "Aporé",
            ],
            [
                "idestado" => 52,
                "nome" => "Araçu",
            ],
            [
                "idestado" => 52,
                "nome" => "Aragarças",
            ],
            [
                "idestado" => 52,
                "nome" => "Aragoiânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Araguapaz",
            ],
            [
                "idestado" => 52,
                "nome" => "Arenópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Aruanã",
            ],
            [
                "idestado" => 52,
                "nome" => "Aurilândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Avelinópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Baliza",
            ],
            [
                "idestado" => 52,
                "nome" => "Barro Alto",
            ],
            [
                "idestado" => 52,
                "nome" => "Bela Vista de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Bom Jardim de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Bom Jesus de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Bonfinópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Bonópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Brazabrantes",
            ],
            [
                "idestado" => 52,
                "nome" => "Britânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Buriti Alegre",
            ],
            [
                "idestado" => 52,
                "nome" => "Buriti de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Buritinópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Cabeceiras",
            ],
            [
                "idestado" => 52,
                "nome" => "Cachoeira Alta",
            ],
            [
                "idestado" => 52,
                "nome" => "Cachoeira de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Cachoeira Dourada",
            ],
            [
                "idestado" => 52,
                "nome" => "Caçu",
            ],
            [
                "idestado" => 52,
                "nome" => "Caiapônia",
            ],
            [
                "idestado" => 52,
                "nome" => "Caldas Novas",
            ],
            [
                "idestado" => 52,
                "nome" => "Caldazinha",
            ],
            [
                "idestado" => 52,
                "nome" => "Campestre de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Campinaçu",
            ],
            [
                "idestado" => 52,
                "nome" => "Campinorte",
            ],
            [
                "idestado" => 52,
                "nome" => "Campo Alegre de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Campo Limpo de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Campos Belos",
            ],
            [
                "idestado" => 52,
                "nome" => "Campos Verdes",
            ],
            [
                "idestado" => 52,
                "nome" => "Carmo do Rio Verde",
            ],
            [
                "idestado" => 52,
                "nome" => "Castelândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Catalão",
            ],
            [
                "idestado" => 52,
                "nome" => "Caturaí",
            ],
            [
                "idestado" => 52,
                "nome" => "Cavalcante",
            ],
            [
                "idestado" => 52,
                "nome" => "Ceres",
            ],
            [
                "idestado" => 52,
                "nome" => "Cezarina",
            ],
            [
                "idestado" => 52,
                "nome" => "Chapadão do Céu",
            ],
            [
                "idestado" => 52,
                "nome" => "Cidade Ocidental",
            ],
            [
                "idestado" => 52,
                "nome" => "Cocalzinho de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Colinas do Sul",
            ],
            [
                "idestado" => 52,
                "nome" => "Córrego do Ouro",
            ],
            [
                "idestado" => 52,
                "nome" => "Corumbá de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Corumbaíba",
            ],
            [
                "idestado" => 52,
                "nome" => "Cristalina",
            ],
            [
                "idestado" => 52,
                "nome" => "Cristianópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Crixás",
            ],
            [
                "idestado" => 52,
                "nome" => "Cromínia",
            ],
            [
                "idestado" => 52,
                "nome" => "Cumari",
            ],
            [
                "idestado" => 52,
                "nome" => "Damianópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Damolândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Davinópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Diorama",
            ],
            [
                "idestado" => 52,
                "nome" => "Divinópolis de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Doverlândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Edealina",
            ],
            [
                "idestado" => 52,
                "nome" => "Edéia",
            ],
            [
                "idestado" => 52,
                "nome" => "Estrela do Norte",
            ],
            [
                "idestado" => 52,
                "nome" => "Faina",
            ],
            [
                "idestado" => 52,
                "nome" => "Fazenda Nova",
            ],
            [
                "idestado" => 52,
                "nome" => "Firminópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Flores de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Formosa",
            ],
            [
                "idestado" => 52,
                "nome" => "Formoso",
            ],
            [
                "idestado" => 52,
                "nome" => "Gameleira de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Goianápolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Goiandira",
            ],
            [
                "idestado" => 52,
                "nome" => "Goianésia",
            ],
            [
                "idestado" => 52,
                "nome" => "Goiânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Goianira",
            ],
            [
                "idestado" => 52,
                "nome" => "Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Goiatuba",
            ],
            [
                "idestado" => 52,
                "nome" => "Gouvelândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Guapó",
            ],
            [
                "idestado" => 52,
                "nome" => "Guaraíta",
            ],
            [
                "idestado" => 52,
                "nome" => "Guarani de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Guarinos",
            ],
            [
                "idestado" => 52,
                "nome" => "Heitoraí",
            ],
            [
                "idestado" => 52,
                "nome" => "Hidrolândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Hidrolina",
            ],
            [
                "idestado" => 52,
                "nome" => "Iaciara",
            ],
            [
                "idestado" => 52,
                "nome" => "Inaciolândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Indiara",
            ],
            [
                "idestado" => 52,
                "nome" => "Inhumas",
            ],
            [
                "idestado" => 52,
                "nome" => "Ipameri",
            ],
            [
                "idestado" => 52,
                "nome" => "Ipiranga de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Iporá",
            ],
            [
                "idestado" => 52,
                "nome" => "Israelândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Itaberaí",
            ],
            [
                "idestado" => 52,
                "nome" => "Itaguari",
            ],
            [
                "idestado" => 52,
                "nome" => "Itaguaru",
            ],
            [
                "idestado" => 52,
                "nome" => "Itajá",
            ],
            [
                "idestado" => 52,
                "nome" => "Itapaci",
            ],
            [
                "idestado" => 52,
                "nome" => "Itapirapuã",
            ],
            [
                "idestado" => 52,
                "nome" => "Itapuranga",
            ],
            [
                "idestado" => 52,
                "nome" => "Itarumã",
            ],
            [
                "idestado" => 52,
                "nome" => "Itauçu",
            ],
            [
                "idestado" => 52,
                "nome" => "Itumbiara",
            ],
            [
                "idestado" => 52,
                "nome" => "Ivolândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Jandaia",
            ],
            [
                "idestado" => 52,
                "nome" => "Jaraguá",
            ],
            [
                "idestado" => 52,
                "nome" => "Jataí",
            ],
            [
                "idestado" => 52,
                "nome" => "Jaupaci",
            ],
            [
                "idestado" => 52,
                "nome" => "Jesúpolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Joviânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Jussara",
            ],
            [
                "idestado" => 52,
                "nome" => "Lagoa Santa",
            ],
            [
                "idestado" => 52,
                "nome" => "Leopoldo de Bulhões",
            ],
            [
                "idestado" => 52,
                "nome" => "Luziânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Mairipotaba",
            ],
            [
                "idestado" => 52,
                "nome" => "Mambaí",
            ],
            [
                "idestado" => 52,
                "nome" => "Mara Rosa",
            ],
            [
                "idestado" => 52,
                "nome" => "Marzagão",
            ],
            [
                "idestado" => 52,
                "nome" => "Matrinchã",
            ],
            [
                "idestado" => 52,
                "nome" => "Maurilândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Mimoso de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Minaçu",
            ],
            [
                "idestado" => 52,
                "nome" => "Mineiros",
            ],
            [
                "idestado" => 52,
                "nome" => "Moiporá",
            ],
            [
                "idestado" => 52,
                "nome" => "Monte Alegre de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Montes Claros de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Montividiu",
            ],
            [
                "idestado" => 52,
                "nome" => "Montividiu do Norte",
            ],
            [
                "idestado" => 52,
                "nome" => "Morrinhos",
            ],
            [
                "idestado" => 52,
                "nome" => "Morro Agudo de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Mossâmedes",
            ],
            [
                "idestado" => 52,
                "nome" => "Mozarlândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Mundo Novo",
            ],
            [
                "idestado" => 52,
                "nome" => "Mutunópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Nazário",
            ],
            [
                "idestado" => 52,
                "nome" => "Nerópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Niquelândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Nova América",
            ],
            [
                "idestado" => 52,
                "nome" => "Nova Aurora",
            ],
            [
                "idestado" => 52,
                "nome" => "Nova Crixás",
            ],
            [
                "idestado" => 52,
                "nome" => "Nova Glória",
            ],
            [
                "idestado" => 52,
                "nome" => "Nova Iguaçu de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Nova Roma",
            ],
            [
                "idestado" => 52,
                "nome" => "Nova Veneza",
            ],
            [
                "idestado" => 52,
                "nome" => "Novo Brasil",
            ],
            [
                "idestado" => 52,
                "nome" => "Novo Gama",
            ],
            [
                "idestado" => 52,
                "nome" => "Novo Planalto",
            ],
            [
                "idestado" => 52,
                "nome" => "Orizona",
            ],
            [
                "idestado" => 52,
                "nome" => "Ouro Verde de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Ouvidor",
            ],
            [
                "idestado" => 52,
                "nome" => "Padre Bernardo",
            ],
            [
                "idestado" => 52,
                "nome" => "Palestina de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Palmeiras de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Palmelo",
            ],
            [
                "idestado" => 52,
                "nome" => "Palminópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Panamá",
            ],
            [
                "idestado" => 52,
                "nome" => "Paranaiguara",
            ],
            [
                "idestado" => 52,
                "nome" => "Paraúna",
            ],
            [
                "idestado" => 52,
                "nome" => "Perolândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Petrolina de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Pilar de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Piracanjuba",
            ],
            [
                "idestado" => 52,
                "nome" => "Piranhas",
            ],
            [
                "idestado" => 52,
                "nome" => "Pirenópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Pires do Rio",
            ],
            [
                "idestado" => 52,
                "nome" => "Planaltina",
            ],
            [
                "idestado" => 52,
                "nome" => "Pontalina",
            ],
            [
                "idestado" => 52,
                "nome" => "Porangatu",
            ],
            [
                "idestado" => 52,
                "nome" => "Porteirão",
            ],
            [
                "idestado" => 52,
                "nome" => "Portelândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Posse",
            ],
            [
                "idestado" => 52,
                "nome" => "Professor Jamil",
            ],
            [
                "idestado" => 52,
                "nome" => "Quirinópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Rialma",
            ],
            [
                "idestado" => 52,
                "nome" => "Rianápolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Rio Quente",
            ],
            [
                "idestado" => 52,
                "nome" => "Rio Verde",
            ],
            [
                "idestado" => 52,
                "nome" => "Rubiataba",
            ],
            [
                "idestado" => 52,
                "nome" => "Sanclerlândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Bárbara de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Cruz de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Fé de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Helena de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Isabel",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Rita do Araguaia",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Rita do Novo Destino",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Rosa de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Tereza de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Santa Terezinha de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Santo Antônio da Barra",
            ],
            [
                "idestado" => 52,
                "nome" => "Santo Antônio de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Santo Antônio do Descoberto",
            ],
            [
                "idestado" => 52,
                "nome" => "São Domingos",
            ],
            [
                "idestado" => 52,
                "nome" => "São Francisco de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "São João da Paraúna",
            ],
            [
                "idestado" => 52,
                "nome" => "São João d'Aliança",
            ],
            [
                "idestado" => 52,
                "nome" => "São Luís de Montes Belos",
            ],
            [
                "idestado" => 52,
                "nome" => "São Luiz do Norte",
            ],
            [
                "idestado" => 52,
                "nome" => "São Miguel do Araguaia",
            ],
            [
                "idestado" => 52,
                "nome" => "São Miguel do Passa Quatro",
            ],
            [
                "idestado" => 52,
                "nome" => "São Patrício",
            ],
            [
                "idestado" => 52,
                "nome" => "São Simão",
            ],
            [
                "idestado" => 52,
                "nome" => "Senador Canedo",
            ],
            [
                "idestado" => 52,
                "nome" => "Serranópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Silvânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Simolândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Sítio d'Abadia",
            ],
            [
                "idestado" => 52,
                "nome" => "Taquaral de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Teresina de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Terezópolis de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Três Ranchos",
            ],
            [
                "idestado" => 52,
                "nome" => "Trindade",
            ],
            [
                "idestado" => 52,
                "nome" => "Trombas",
            ],
            [
                "idestado" => 52,
                "nome" => "Turvânia",
            ],
            [
                "idestado" => 52,
                "nome" => "Turvelândia",
            ],
            [
                "idestado" => 52,
                "nome" => "Uirapuru",
            ],
            [
                "idestado" => 52,
                "nome" => "Uruaçu",
            ],
            [
                "idestado" => 52,
                "nome" => "Uruana",
            ],
            [
                "idestado" => 52,
                "nome" => "Urutaí",
            ],
            [
                "idestado" => 52,
                "nome" => "Valparaíso de Goiás",
            ],
            [
                "idestado" => 52,
                "nome" => "Varjão",
            ],
            [
                "idestado" => 52,
                "nome" => "Vianópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Vicentinópolis",
            ],
            [
                "idestado" => 52,
                "nome" => "Vila Boa",
            ],
            [
                "idestado" => 52,
                "nome" => "Vila Propício",
            ],
            [
                "idestado" => 53,
                "nome" => "Brasília",
            ]
        ];
        DB::table('cidade')->insert($cidades);
    }
}
