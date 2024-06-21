<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\Booking;
use App\Models\Destination;
use App\Models\Flight;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('flight')->with('user')->count();
        $flights = Flight::all()->count();
        $destinations = Destination::all()->count();
        $airlines = Airline::all()->count();
        $data = [
            'bookings' => $bookings,
            'destinations' => $destinations,
            'flights' => $flights,
            'airlines' => $airlines
        ];
        return response()->json(['success' => true, 'data'=>$data], 200);
    }

    public function bookings(Request $request)
    {

        $bookings = Booking::with('flight')->with('user')->get();
        if ($request->filter != ''){
            $bookings  =  Booking::with('flight')->with('user')->where('status', $request->filter)->get();
        }
        return response()->json(['success' => true, 'bookings' => $bookings], 200);
    }
}
