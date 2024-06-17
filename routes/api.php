<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('admin')->group(function () {
    Route::apiResource('/destinations', \App\Http\Controllers\Admin\DestinationController::class);
    Route::apiResource('/destination_classes',\App\Http\Controllers\Admin\DestinationClassController::class);
    Route::apiResource('/airlines',\App\Http\Controllers\Admin\AirlineController::class);
    Route::apiResource('/flights',\App\Http\Controllers\Admin\FlightController::class);
});

Route::prefix('guest')->group(function () {
    Route::get('destinations', [\App\Http\Controllers\GuestController::class, 'destinations']);
});
