<?php

namespace Database\Factories;

use App\Models\Vehicle;
use App\Models\Toll_Station;
use App\Models\Vehicle_Toll_Station;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Vehicle_Toll_StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        {
            $vehicle = Vehicle::all()->random();
            $toll_value = $vehicle->type->type === 'camion' ? $vehicle->axles*50 : $vehicle->type->value;
    
            return [
                'toll_station_id' => Toll_Station::all()->random()->id,
                'vehicle_id' => $vehicle->id,
                'toll_value' => $toll_value,
            ];
        }
    }
}
