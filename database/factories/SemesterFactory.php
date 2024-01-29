<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Semester>
 */
class SemesterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'estate_id' => fake()->numberBetween(1,5),
            'divisi_id' => fake()->numberBetween(1,25),
            'field_id' => fake()->numberBetween(1,50),
            'semester' => fake()->numberBetween(1,2),
            'date' => fake()->date(),
            'sph' => fake()->randomFloat(1, 20, 30),
            'matherial' => fake()->randomElement(['Costa Rica', 'Nigeria', 'Evolution', 'MT Gano', 'Bina Soc', 'Ghana', 'Clone']),
            'type_of_soil' => fake()->randomElement(['Regusol', 'Alluvial']),
            'slu' => fake()->randomNumber(1,99),
        ];
    }
}
