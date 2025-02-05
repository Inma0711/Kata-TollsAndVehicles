<?php

namespace Database\Factories;

use App\Models\Toll_Station;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toll_Station>
 */
class Toll_StationFactory extends Factory
{
   
    protected $model = Toll_Station::class;

    public function definition(): array
    {

        return [
            'name' => $this->faker->company(),
            'city' => $this->faker->city(),
            'total_toll_collected' => $this->faker->randomNumber(),
        ];
    }
}
