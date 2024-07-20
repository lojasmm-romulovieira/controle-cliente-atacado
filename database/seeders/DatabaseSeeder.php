<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RamoSeeder::class,
            PerfilSeeder::class,
            ClassificacaoSeeder::class,
            UserSeeder::class,
            EstadoSeeder::class,
            CidadeSeeder::class,
        ]);
    }
}
