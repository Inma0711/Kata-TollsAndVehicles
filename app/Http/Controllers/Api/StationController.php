<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Toll_Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'total_toll_collected' => 'required|array', 
        ]);

        $totalCollected = array_sum($request->total_toll_colected);

        $station = Toll_Station::create([
            'name' => $request->name,
            'city' => $request->city,
            'total_collected' => $totalCollected,
        ]);

        return response()->json([
            'message' => 'Estación creada con éxito',
            'station' => $station
        ], 201);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
