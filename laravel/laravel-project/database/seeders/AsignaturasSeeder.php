<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asignaturas')->insert([
            ['nombre' => 'Matemáticas', 'descripcion' => 'Asignatura de matemáticas'],
            ['nombre' => 'Historia', 'descripcion' => 'Asignatura de historia'],
            ['nombre' => 'Ciencias', 'descripcion' => 'Asignatura de ciencias'],
        ]);
    }
}
