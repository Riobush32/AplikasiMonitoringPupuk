<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataPemupukan>
 */
class DataPemupukanFactory extends Factory
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
            'semester_id' => fake()->numberBetween(1,100),
            'status' => fake()->randomElement(['actual', 'recomendation']),
            'pupuk_id' => fake()->numberBetween(1,6),
            'total' => fake()->randomFloat(1, 20, 30),
        ];
    }
}
