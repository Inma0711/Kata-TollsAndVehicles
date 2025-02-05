<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::with('type')->get();

        return view('vehicles', compact('vehicles'));
    }

    public function show(string $id)
    {
        $vehicle = Vehicle::with('tolls.station', 'type')->findOrFail($id);

        return view('vehicleShow', compact('vehicle'));
    }
}
