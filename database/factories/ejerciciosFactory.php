<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ejercicios>
 */
class ejerciciosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'enunciado' => $this->faker->sentence,
            'solucion' => $this->faker->text,
            'leccion_id' => \App\Models\Lecciones::inRandomOrder()->first()->id,
        ];
    }
}
