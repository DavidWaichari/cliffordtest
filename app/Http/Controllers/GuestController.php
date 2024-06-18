<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Flight;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function destinations()
    {
        $destinations = Destination::orderBy('created_at', 'desc')->get();
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
}
