<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use App\Models\Toll_Station;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StationController extends Controller
{

    public function index()
    {
        $stations = Toll_Station::all();

        return response()->json($stations, 200);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required | string',
            'city' => 'required | string',
            'total_toll_collected' => 'required | integer',
        ]);

        if ($validator->fails()) {
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
    }

    public function show(string $id)
    {
        $station = Toll_Station::find($id);


        if (!$station) {
            return response()->json(['message' => 'station not found'], 404);
        }

        return response()->json($station);
    }

    public function destroy(string $id)
    {

        $station = Toll_Station::find($id);

        if (!$station) {
            return response()->json(['message' => 'station not found'], 404);
        }


        $station->delete();


        return response()->json(['message' => 'station correctly deleted']);
    }
}
