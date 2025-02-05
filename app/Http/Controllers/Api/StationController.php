<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use App\Models\Toll_Station;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StationController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Toll_Station::all();

        return response()->json($stations, 200);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required | string',
            'city' => 'required | string',
            'total_toll_collected' => 'required | integer',
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Introduced data is not correct',
                'errors' => $validator->errors(),
            ], 400);
        }

        $validated = $validator->validate();

        $station = Toll_Station::create([
            'name' => $validated['name'],
            'city' => $validated['city'],
            'total_toll_collected' => $validated['total_toll_collected'],
        ]);
        $station->save();

        return response()->json($station, 201);
        
       
  

    /*
    $station = Toll_Station::create([
        'name' => $request->name,
        'city' => $request->city,
        'total_toll_collected' => $request->total_toll_collected,
    ]);
    $station->save();
    return response()->json($station, 200);
    */
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
