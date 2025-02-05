<?php

namespace Database\Factories;

use App\Models\Toll_Stations;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toll_Stations>
 */
class Toll_StationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Toll_Stations::class;

    public function definition(): array
    {

        return [
            'name' => $this->faker->company(),
            'city' => $this->faker->city(),
            'total_toll_collected' => $this->faker->randomNumber(),
        ];
    }
}
