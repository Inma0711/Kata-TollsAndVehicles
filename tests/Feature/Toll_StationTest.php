<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Toll_Station;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Toll_StationTest extends TestCase
{
    use RefreshDatabase;


    public function test_CheckItDisplaysTheListOfStations()
    {

        Toll_Station::factory(3)->create();

        $response = $this->get(route('stationList'));

        $response->assertStatus(200);

        $response->assertViewHas('stations');
    }


    public function test_CheckItDisplaysASingleStation()
    {

        $station = Toll_Station::factory()->create();

        $response = $this->get(route('stationShow', $station->id));


        $response->assertStatus(200);


        $response->assertViewHas('station', $station);
    }

    public function test_CheckItReturns404ForNonExistingStation()
    {
        
        $response = $this->get(route('stationShow', 800));

      
        $response->assertStatus(404);
    }
}
