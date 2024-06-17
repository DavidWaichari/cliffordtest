<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DestinationClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DestinationClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destination_classes = DestinationClass::orderBy('created_at', 'desc')->with('destination')->get();
        return response()->json(['success' => true, 'destination_classes' => $destination_classes], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'current_price' => 'nullable|numeric',
            'destination_id' => 'required|integer',
            'status' => 'nullable|string',
        ]);

        $destinationClass = DestinationClass::create($request->all());

        return response()->json(['success' => true, 'message' => 'Destination class created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $destinationClass = DestinationClass::findOrFail($id);
            return response()->json(['success' => true, 'destinationClass' => $destinationClass], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'nullable|string|max:255',
                'price' => 'nullable|numeric',
                'current_price' => 'nullable|numeric',
                'destination_id' => 'required|integer',
                'status' => 'nullable|string',
            ]);

            $destinationClass = DestinationClass::findOrFail($id);

            // Update destination class fields
            $destinationClass->update($request->all());

            return response()->json(['success' => true, 'destinationClass' => $destinationClass], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $destinationClass = DestinationClass::findOrFail($id);
            $destinationClass->delete();
            return response()->json(['success' => true], 204);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 404);
        }
    }
}
