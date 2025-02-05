<?php

namespace App\Http\Controllers;

use App\Models\Toll_Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()
    {
        $stations = Toll_Station::all();

        return view('stations', compact('stations'));
    }

    public function show(string $id)
    {
        $station = Toll_Station::with('tolls.vehicle.type')->findOrFail($id);

        return view('stationShow', compact('station'));
    }
}
