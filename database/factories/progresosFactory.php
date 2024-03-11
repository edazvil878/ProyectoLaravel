<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\progresos>
 */
class progresosFactory extends Factory
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
            'porcentaje_completado' => $this->faker->numberBetween(0, 100),
            'ultima_leccion_completada' => \App\Models\Lecciones::factory(),
        ];
    }
}
