<?php

namespace Database\Seeders;

use App\Models\PerfilModel;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    public function run(): void
    {
        PerfilModel::create(['descricao' => 'Ref/Lavad/Freezer']);
        PerfilModel::create(['descricao' => 'Fogao/Forno/Microon']);
        PerfilModel::create(['descricao' => 'Ar Cond']);
        PerfilModel::create(['descricao' => 'Ventilação']);
        PerfilModel::create(['descricao' => 'Televisores']);
        PerfilModel::create(['descricao' => 'Antenas']);
        PerfilModel::create(['descricao' => 'Mini System/DVD']);
        PerfilModel::create(['descricao' => 'Centrifuga/Depurador']);
        PerfilModel::create(['descricao' => 'Esporte/Lazer']);
        PerfilModel::create(['descricao' => 'Móveis']);
        PerfilModel::create(['descricao' => 'Portáteis UD']);
        PerfilModel::create(['descricao' => 'Impressoras']);
        PerfilModel::create(['descricao' => 'Monitores']);
        PerfilModel::create(['descricao' => 'Notebook']);
        PerfilModel::create(['descricao' => 'Celulares']);
    }
}
