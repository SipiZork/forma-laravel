<?php

namespace Database\Factories;

use App\Models\Race;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Winner>
 */
class WinnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first' => Driver::pluck('id')->random(),
            'second' => Driver::pluck('id')->random(),
            'third' => Driver::pluck('id')->random(),
            'fastest' => Driver::pluck('id')->random(),
            'race_id' => Race::pluck('id')->random(),
        ];
    }
}
