<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GrandPrix>
 */
class GrandPrixFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'race_id' => $this->faker->randomNumber(),
            'driver_id' => $this->faker->randomNumber(),
        ];
    }
}
