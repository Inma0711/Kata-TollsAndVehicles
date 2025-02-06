<?php

namespace App\Http\Controllers\Api;
use App\Models\Vehicle;
use App\Models\Type_Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::with('type')->get();

        return response()->json($vehicles, 200);
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
            'plate' => 'required',
            'axles' => 'nullable | integer | between:1,3',
            'type' => 'required | exists:type,type | string',
        ]);
    
        if($validator->fails()) {
            return response()->json([
                'message' => 'Introduced data is not correct',
                'errors' => $validator->errors(),
            ], 400);
        }
    
        $validated = $validator->validate();
    
        $vehicleType = Type_Vehicle::where('type', $validated['type'])->first();
    
        if($vehicleType->type == 'truck' && empty($validated['axles'])) {
            return response()->json([
                'message' => 'Number of axles is required for trucks',
            ], 400);
        }
    
        $vehicle = Vehicle::create([
            'place' => $validated['place'],
            'axles' => $vehicleType->type === 'truck' ? $validated['axles'] : null,
            'type_vehicle_id' => $vehicleType->id,
            
        ]);
    
        $vehicle->save();
    
        return response()->json($vehicle, 201);
    
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
