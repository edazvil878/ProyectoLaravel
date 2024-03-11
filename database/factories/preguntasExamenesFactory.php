<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PreguntasExamenes>
 */
class preguntasExamenesFactory extends Factory
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
            'opciones_respuesta' => json_encode($this->faker->words(4)),
            'respuesta_correcta' => $this->faker->randomElement($this->faker->words(1)),
        ];
    }
}
