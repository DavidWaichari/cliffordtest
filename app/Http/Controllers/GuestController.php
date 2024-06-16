<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function destinations()
    {
        $destinations = Destination::orderBy('created_at', 'desc')->get();
        return response()->json(['success' => true, 'destinations' => $destinations], 200);
    }
}
