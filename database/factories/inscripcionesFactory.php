<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\inscripciones>
 */
class inscripcionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usuario_id' => \App\Models\Usuario::factory(),
            'curso_id' => \App\Models\Curso::factory(),
            'fecha_inscripcion' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
