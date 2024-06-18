<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::orderBy('created_at', 'desc')
            ->with('user')
            ->with('flight')
            ->where('user_id', 1) //change this to auth user
            ->get();
        return response()->json(['success' => true, 'bookings' => $bookings]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'flight_id' => 'required|integer',
            'no_of_tickets' => 'required|integer',
        ]);
        $request['user_id'] = 1; //update this to auth user

        $booking = Booking::create($request->all());

        return response()->json(['success' => true, 'message' => 'Booking created successfully', 'booking' => $booking]);
    }


    public function show($id)
    {
        $booking = Booking::where('id', $id)->with('user')
            ->with('flight');
        return response()->json(['success' => true, 'booking' => $booking]);
    }


    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'flight_id' => 'required|integer',
            'no_of_tickets' => 'required|integer',
        ]);

        $booking->update($request->all());

        return response()->json(['success' => true, 'message' => 'Booking updated successfully', 'booking' => $booking]);
    }


    public function destroy(Booking $booking)
    {
        $booking->delete();

        return response()->json(['success' => true, 'message' => 'Booking deleted successfully']);
    }
}
