<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Race;
use App\Models\Driver;
use App\Models\GrandPrix;
use App\Models\Winner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Driver::factory()->count(22)->create();
        Race::factory()->has(
            Winner::factory()->count(1)->state(function ($attributes, Race $race) {
                return ['race_id' => $race->id];
            })
        )->count(2)->create();
        // GrandPrix::factory()->count(2)->create();
        // GrandPrix::factory()->count(5)->state(function ($attributes, Race $race) {
        //     foreach (Driver::all() as $driver) {
        //         return ['race_id' => $race->id, 'driver_id' => $driver->id];
        //     }
        // })->count(1)->create();
        // Winner::factory()->count(5)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
