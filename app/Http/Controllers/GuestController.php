<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Flight;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function destinations()
    {
        $destinations = Destination::withCount('flights')
            ->orderBy('flights_count', 'desc')
            ->orderBy('created_at', 'desc')
            ->with('flights')
            ->get();
        return response()->json(['success' => true, 'destinations' => $destinations], 200);
    }

    public function flights()
    {
        $flights = Flight::orderBy('created_at', 'desc')
            ->where('status', 'Active')
            ->with('destination')
            ->with('destinationClass')
            ->with('airline')
            ->get();
        return response()->json(['success' => true, 'flights' => $flights]);
    }

    public function fetchFlightDetails($id)
    {
        $flight = Flight::where('id', $id)
            ->with('destination')
            ->with('destinationClass')
            ->with('airline')
            ->first();
        return response()->json(['success' => true, 'flight' => $flight]);
    }

    public function searchFlights(Request $request)
    {
        $query = Flight::query();

        if ($request->filled('flightType')) {
            $query->where('flight_type', $request->flightType);
        }

        if ($request->filled('destination')) {
            $query->whereHas('destination', function($q) use ($request) {
                $q->where('name', $request->destination);
            });
        }

        if ($request->filled('departure')) {
            $query->where('departure_time', '>=', $request->departure);
        }

        if ($request->filled('arrival')) {
            $query->where('arrival_time', '<=', $request->arrival);
        }

        if ($request->filled('travelClass')) {
            $query->where('travel_class', $request->travelClass);
        }

        $flights = $query->with('destination')
            ->with('destinationClass')
            ->with('airline')->get();

        return response()->json(['success' => true, 'flights' => $flights], 200);
    }

}
