<?php

namespace Database\Seeders;

use App\Models\ClassificacaoModel;
use Illuminate\Database\Seeder;

class ClassificacaoSeeder extends Seeder
{
    public function run(): void
    {
        ClassificacaoModel::create(['descricao' => 'BRONZE']);
        ClassificacaoModel::create(['descricao' => 'PRATA']);
        ClassificacaoModel::create(['descricao' => 'OURO']);
        ClassificacaoModel::create(['descricao' => 'PLATINA']);
        ClassificacaoModel::create(['descricao' => 'DIAMANTE']);
        ClassificacaoModel::create(['descricao' => 'PROSPECÇÃO']);
    }
}
