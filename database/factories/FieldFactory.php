<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Field>
 */
class FieldFactory extends Factory
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
            'field_no' => fake()->randomNumber(5,true),
            'field_bantu' => fake()->word(),
            'hektar' => fake()->randomFloat(1, 20, 30),
            'treess' => fake()->randomNumber(5,false),
        ];
    }
}
