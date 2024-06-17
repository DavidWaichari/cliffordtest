<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::orderBy('created_at', 'desc')->get();
        return response()->json(['success' => true, 'destinations' => $destinations], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'landmark' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destination = Destination::create($request->all());

        if ($request->hasFile('image')) {
            $destination->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return response()->json(['success' => true, 'message' => 'Destination created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $destination = Destination::where('id', $id)->with('destclasses')->first();
            return response()->json(['success' => true, 'destination' => $destination], 200);
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
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'landmark' => 'nullable|string',
                'status' => 'nullable|string',
                'image' => 'nullable|image|max:2048', // Assuming image upload
            ]);

            $destination = Destination::findOrFail($id);

            // Clear existing media (if any)
            $destination->clearMediaCollection('images');

            // Update destination fields
            $destination->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'landmark' => $request->input('landmark'),
                'status' => $request->input('status'),
            ]);

            // Handle image upload if provided
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $media = $destination->addMedia($image)->toMediaCollection('images');
            }

            return response()->json(['success' => true, 'destination' => $destination], 200);
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
            $destination = Destination::findOrFail($id);
            // Delete all media associated with the destination
            $destination->clearMediaCollection();
            $destination->delete();
            return response()->json(['success' => true], 204);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 404);
        }
    }
}
