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
            'codigo'=>fake()->unique()->randomNumber(5, true),
            'nombre'=>fake()->name(),
            'marca'=>fake()->company(),
            'fecha_adquisicion'=>fake()->date(),
            'estado'=>fake()->randomElement(['disponible', 'asignado', 'mantenimiento']),
        ];
    }
}
