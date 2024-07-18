<?php

namespace Database\Seeders;

use App\Models\RamoModel;
use Illuminate\Database\Seeder;

class RamoSeeder extends Seeder
{
    public function run(): void
    {
        RamoModel::create(['descricao' => 'LOJISTA']);
        RamoModel::create(['descricao' => 'PROSPECÇÃO']);
        RamoModel::create(['descricao' => 'USO/CONSUMO']);
    }
}
