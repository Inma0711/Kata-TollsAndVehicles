<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type_Vehicle>
 */
class Type_VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $vehicleTypes = [
                'coche' => 100,
                'moto' => 50,
                'camion' => 50,
            ];
    
            $type = $this->faker->unique()->randomElement(array_keys($vehicleTypes));
    
            return [
                'type' => $type,
                'value'=> $vehicleTypes[$type],
            ];
    }
}
