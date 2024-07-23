<?php

namespace Database\Seeders;

use App\Models\ClassificacaoModel;
use Illuminate\Database\Seeder;

class ClassificacaoSeeder extends Seeder
{
    public function run(): void
    {
        ClassificacaoModel::create(['descricao' => 'A']);
        ClassificacaoModel::create(['descricao' => 'B']);
        ClassificacaoModel::create(['descricao' => 'C']);
        ClassificacaoModel::create(['descricao' => 'EM PROSPECÇÃO']);
    }
}
