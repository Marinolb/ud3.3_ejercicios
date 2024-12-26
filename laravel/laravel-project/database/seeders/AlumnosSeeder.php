<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnos')->insert([
            ['nombre' => 'Juan Pérez', 'email' => 'juan.perez@example.com'],
            ['nombre' => 'María González', 'email' => 'maria.gonzalez@example.com'],
            ['nombre' => 'Carlos López', 'email' => 'carlos.lopez@example.com'],
        ]);
    }
}