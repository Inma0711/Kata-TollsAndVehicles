<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Toll_Station;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Toll_StationTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfRecieveAllEntryOfToll_StationInJsonFile()
    {
        Toll_Station::factory(1)->create();

        $response = $this->get(route('apiStationHome'));

        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckThatAStationEntryIsDeletedProperly()
    {

        $stations = Toll_Station::factory(2)->create();

        $stationId = $stations->first()->id;

        $response = $this->delete(route('apiDestroyStation', $stationId));

        $this->assertDatabaseCount('toll_stations', 1);

        $response = $this->get(route('apiStationHome'));
        $response->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateNewEntryInToll_StationWithJsonFile()
    {
        $data = [
            'name' => 'Estacion central',
            'city' => 'Malaga',
            'total_toll_collected' => 10000
        ];

    
        $response = $this->post(route('apiStoreStation'), $data);

        $response->assertStatus(201)
            ->assertJsonFragment(['name' => 'Estacion central']);

     
        $response = $this->get(route('apiStationHome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckThatValidationFailsWhenCreatingStationWithMissingFields()
    {

        $data = [
            'name' => 'Estacion sin peaje',
            'city' => 'Barcelona'
        ];

        $response = $this->post(route('apiStoreStation'), $data);

        $response->assertStatus(400);

        $response->assertJsonValidationErrors(['total_toll_collected']);
    }


    public function test_CheckThatDeletingNonExistentStationReturnsError()
    {

        $response = $this->delete(route('apiDestroyStation', 800));

        $response->assertStatus(404);
    }

    
    public function test_CheckThatRetrievingNonExistentStationReturnsError(){

        $response = $this->get(route('apiStationShow', 800));

        $response->assertStatus(404);
    }

}

