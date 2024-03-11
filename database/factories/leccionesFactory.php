<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\lecciones>
 */
class leccionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence,
            'contenido' => $this->faker->paragraph,
            'curso_id' => Curso::factory(),
            'orden' => $this->faker->numberBetween(1, 100),
        ];
    }
}


