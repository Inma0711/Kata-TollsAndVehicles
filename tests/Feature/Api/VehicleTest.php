<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Vehicle;
use App\Models\Type_Vehicle;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfRecieveAllEntryOfVehicleInJsonFile()
    {
        Type_Vehicle::factory(3)->create();
        Vehicle::factory(1)->create();
        $response = $this->get(route('apiVehicleHome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }


    public function test_CheckCannotRetrieveVehicleWithInvalidId()
    {
        $response = $this->get(route('apiVehicleShow', 99999));
        $response->assertStatus(404)
            ->assertJson(['message' => 'vehicle not found']);
    }
    
    
    public function test_CheckThatAVehicleEntryIsDeletedProperly()
    {
        Type_Vehicle::factory(3)->create();
        $vehicles = Vehicle::factory(2)->create();
        $vehicleId = $vehicles->first()->id;
        $response = $this->delete(route('apiDestroyVehicle', $vehicleId));
        $this->assertDatabaseCount('vehicles', 1);
        $response = $this->get(route('apiVehicleHome'));
        $response->assertJsonCount(1);
    }

    public function test_CheckThatDeletingNonExistentVehicleReturnsError()
    {
        $response = $this->delete(route('apiDestroyVehicle', 800));
        $response->assertStatus(404);
    }

    
    public function test_CheckThatRetrievingNonExistentVehicleReturnsError()
    {
        $response = $this->get(route('apiVehicleShow', 800));
        $response->assertStatus(404);
    }
}

