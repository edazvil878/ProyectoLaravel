<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\curso>
 */
class cursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'descripcion' => $this->faker->paragraph,
            'dificultad' => $this->faker->randomElement(['Básico', 'Intermedio', 'Avanzado']),
            'duracion' => $this->faker->numberBetween(1, 100),
        ];
    }
}
