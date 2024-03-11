<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreacionDatos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Usuario::factory(20)->create();
        \App\Models\Curso::factory(10)->create();
        \App\Models\Lecciones::factory(50)->create();
        \App\Models\ejercicios::factory(100)->create();
        \App\Models\progresos::factory(50)->create();
        \App\Models\examenes::factory(20)->create();
        \App\Models\PreguntasExamenes::factory(100)->create();
        \App\Models\calificaciones::factory(50)->create();
        \App\Models\inscripciones::factory(100)->create();
        \App\Models\examenTienePreguntas::factory(100)->create();

    }
}
