<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()
    {
        $stations = Station::all();

        return view('stations', compact('stations'));
    }

    public function show(string $id)
    {
        $station = Station::with('tolls.vehicle.type')->findOrFail($id);

        return view('stationShow', compact('station'));
    }
}
