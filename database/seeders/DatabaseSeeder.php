<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama al seeder que quieres ejecutar - Libros
        $this->call(LibroSeeder::class);  

        // Seeder de Revistas
        $this->call(RevistaSeeder::class);
    }
}
