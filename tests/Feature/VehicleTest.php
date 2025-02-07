<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Vehicle;
use App\Models\Type_Vehicle;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleTest extends TestCase
{
    use RefreshDatabase;
  
    public function test_CheckItDisplaysTheListOfVehicles()
    {
        Type_Vehicle::factory(3)->create();
        Vehicle::factory(3)->create();
        $response = $this->get(route('vehicleList'));
        $response->assertStatus(200);
        $response->assertViewHas('vehicles');
    }

    
    public function test_CheckItDisplaysASingleVehicle()
    {
        Type_Vehicle::factory(3)->create();
        $vehicle = Vehicle::factory()->create();
        $response = $this->get(route('vehicleShow', $vehicle->id));
        $response->assertStatus(200);
        $response->assertViewHas('vehicle', $vehicle);
    }


    public function test_CheckItReturns404ForNonExistingVehicle()
    {
        $response = $this->get(route('vehicleShow', 800));
        $response->assertStatus(404);
    }
}
