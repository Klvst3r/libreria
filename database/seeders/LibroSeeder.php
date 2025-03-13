<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libros')->insert([
            [
                'nombre' => 'El principito',
                'descripcion' => 'Poético, filosófico y conmovedor - Texto',
                'autor' => 'Antoine de Saint Exupery',
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'nombre' => 'La Odisea',
                'descripcion' => 'Epopeya Clasica Griega',
                'autor' => 'Homero',
                'created_at' => now(),
                'updated_at' =>now(),
            ],
        ]);
    }
}
