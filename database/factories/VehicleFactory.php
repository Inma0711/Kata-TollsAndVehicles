<?php

namespace Database\Factories;

use App\Models\Type_Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        {
            $type = Type_Vehicle::all()->random();
            $axles = $type->type == 'camion' ? $this->faker->numberBetween(1, 5) : 0;
    
            return [
                'plate' => $this->faker->randomNumber(),
                'axles' => $axles,
                'type_vehicle_id' => $type->id,
            ];
        }
    }
}
