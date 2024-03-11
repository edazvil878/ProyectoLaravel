<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\examenes>
 */
class examenesFactory extends Factory
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
            'descripcion' => $this->faker->paragraph,
            'curso_id' => \App\Models\Curso::inRandomOrder()->first()->id,
        ];
    }
}
