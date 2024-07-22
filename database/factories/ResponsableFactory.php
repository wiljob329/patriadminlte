<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responsable>
 */
class ResponsableFactory extends Factory
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
            'nombre' => fake()->name(),
            'apellido' => fake()->lastName(),
            'cedula' => fake()->numerify('########'),
            'cargo_id' => fake()->numberBetween(1,81),
            'division_id' => fake()->numberBetween(1,54)
        ];
    }
}
