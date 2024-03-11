<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\calificaciones>
 */
class calificacionesFactory extends Factory
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
            'examen_id' => \App\Models\examenes::factory(),
            'puntuacion_obtenida' => $this->faker->numberBetween(0, 100),
        ];
    }
}
