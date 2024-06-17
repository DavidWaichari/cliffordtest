<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{

    public function index()
    {
        $flights = Flight::orderBy('created_at', 'desc')
            ->with('destination')
            ->with('destinationClass')
            ->with('airline')
            ->get();
        return response()->json(['success' => true, 'flights' => $flights]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'destination_id' => 'nullable|integer',
            'destination_class_id' => 'nullable|integer',
            'airline_id' => 'nullable|integer',
            'flight_type' => 'nullable|string|max:100',
            'no_of_passengers' => 'nullable|integer',
            'current_price' => 'nullable|numeric',
            'departure' => 'nullable|date',
            'arrival' => 'nullable|date',
            'status' => 'nullable|string|max:50',
            'extras' => 'nullable|array',
        ]);

        $flight = Flight::create($request->all());

        return response()->json(['success' => true, 'message' => 'Flight created successfully', 'flight' => $flight]);
    }


    public function show($id)
    {
        $flight = Flight::where('id', $id)->with('destination')
            ->with('destinationClass')
            ->with('airline')->first();
        return response()->json(['success' => true, 'flight' => $flight]);
    }


    public function update(Request $request, Flight $flight)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'destination_id' => 'nullable|integer',
            'destination_class_id' => 'nullable|integer',
            'airline_id' => 'nullable|integer',
            'flight_type' => 'nullable|string|max:100',
            'no_of_passengers' => 'nullable|integer',
            'current_price' => 'nullable|numeric',
            'departure' => 'nullable|date',
            'arrival' => 'nullable|date',
            'status' => 'nullable|string|max:50',
            'extras' => 'nullable|array',
        ]);

        $flight->update($request->all());

        return response()->json(['success' => true, 'message' => 'Flight updated successfully', 'flight' => $flight]);
    }


    public function destroy(Flight $flight)
    {
        $flight->delete();

        return response()->json(['success' => true, 'message' => 'Flight deleted successfully']);
    }
}
