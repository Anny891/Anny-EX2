<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'codigo' => fake()->unique()->numerify('EQ-#####'),
            'nombre' => fake()->words(3, true),
            'marca' => fake()->company(),
            'fecha_adquisicion' => fake()->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
            'estado' => fake()->randomElement(['disponible', 'asignado', 'mantenimiento']),
        ];
    }
}
