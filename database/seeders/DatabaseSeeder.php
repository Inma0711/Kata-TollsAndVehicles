<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vehicle;
use App\Models\Toll_Station;
use App\Models\Type_Vehicle;
use App\Models\Vehicle_Toll_Station;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        Toll_Station::factory(10)->create();
        Type_Vehicle::factory(3)->create();
        Vehicle::factory(10)->create();
        Vehicle_Toll_Station::factory(10)->create();
    }
}
