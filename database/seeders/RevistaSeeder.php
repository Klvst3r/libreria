<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RevistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('revistas')->insert([
            [
                'nombre' => 'revista Internacional de Estudios Migratorios',
                'descripcion' => 'estudios migratorios',
                'editorial' => 'Universidad de Almería',
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'nombre' => 'Revista Internacional de Comunicación',
                'descripcion' => 'comunicacioin internacional',
                'editorial' => 'consejo editorial',
                'created_at' => now(),
                'updated_at' =>now(),
            ],
        ]);
    }
}
