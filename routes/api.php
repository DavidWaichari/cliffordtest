<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return response()->json(['success' => true, 'user' => $request->user()]);
    });
    Route::post('/auth/logout',[\App\Http\Controllers\AuthController::class, 'logout']);

    //user
    Route::prefix('/user')->group(function (){
        Route::resource('/booking', \App\Http\Controllers\User\BookingController::class);
        Route::get('/user_has_booked/{flight_id}',[\App\Http\Controllers\User\BookingController::class, 'userHasBookedFlight']);
    });
});

Route::prefix('auth')->group(function (){
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
});

Route::prefix('admin')->group(function () {
    Route::apiResource('/destinations', \App\Http\Controllers\Admin\DestinationController::class);
    Route::apiResource('/destination_classes',\App\Http\Controllers\Admin\DestinationClassController::class);
    Route::apiResource('/airlines',\App\Http\Controllers\Admin\AirlineController::class);
    Route::apiResource('/flights',\App\Http\Controllers\Admin\FlightController::class);
    Route::get('/bookings',[\App\Http\Controllers\Admin\DashboardController::class, 'bookings']);
    Route::get('/dashboard',[\App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

Route::prefix('guest')->group(function () {
    Route::get('destinations', [\App\Http\Controllers\GuestController::class, 'destinations']);
    Route::get('active_flights', [\App\Http\Controllers\GuestController::class, 'flights']);
    Route::get('active_flights/{id}', [\App\Http\Controllers\GuestController::class, 'fetchFlightDetails']);
    Route::get('search_flights', [\App\Http\Controllers\GuestController::class, 'searchFlights']);
});

