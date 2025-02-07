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

    public function store(Request $request)
    {
        $vehicleType = Type_Vehicle::where('type', $request->type)->first();

        if ($vehicleType->type == 'camion' && empty($request->axles)) {
            return response()->json([
                'message' => 'Number of axles is required for trucks',
            ], 400);
        }

        $vehicle = Vehicle::create([
            'plate' => $request->plate,
            'axles' => $request->axles,
            'type_vehicle_id' => $vehicleType->id,

        ]);

        $vehicle->save();

        return response()->json($vehicle, 201);
    }

    public function show(string $id)
    {
        $vehicle = Vehicle::find($id);


        if (!$vehicle) {
            return response()->json(['message' => 'vehicle not found'], 404);
        }

        return response()->json($vehicle);
    }

    public function destroy(string $id)
    {
        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            return response()->json(['message' => 'vehicle not found'], 404);
        }


        $vehicle->delete();


        return response()->json(['message' => 'vehicle correctly deleted']);
    }
}
