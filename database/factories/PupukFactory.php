<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pupuk>
 */
class PupukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pupuk' => fake()->unique()->randomElement(['Urea', 'NPK', 'RP', 'Klos', 'Borato', 'CuSO4'])
        ];
    }
}
