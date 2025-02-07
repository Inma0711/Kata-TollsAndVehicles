<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckHomePageLoadsSuccessfully()
    {
    
        $response = $this->get(route('home'));

        
        $response->assertStatus(200);

       
        $response->assertViewIs('home');
    }
}
