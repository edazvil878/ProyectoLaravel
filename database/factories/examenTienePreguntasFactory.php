<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\examenTienePreguntas>
 */
class examenTienePreguntasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'examen_id' => \App\Models\examenes::factory(),
            'pregunta_id' => \App\Models\PreguntasExamenes::factory(),
        ];
    }
}
