<?php

namespace Database\Seeders;

use App\Models\Toll_Station;
use App\Models\User;
use Database\Factories\Toll_StationsFactory;
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

        Toll_Station::factory(20)->create();
    }
}
