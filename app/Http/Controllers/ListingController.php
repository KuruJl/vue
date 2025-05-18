<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return response()->json(Listing::with('images')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price_per_night' => 'required|numeric',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'nullable|string',
            'country' => 'required|string',
            'max_guests' => 'required|integer',
        ]);

        $listing = Listing::create($validated);
        return response()->json($listing, 201);
    }

    public function show($id)
    {
        $listing = Listing::with('images')->find($id);
        return $listing ? response()->json($listing) : response()->json(['error' => 'Not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::find($id);
        if (!$listing) return response()->json(['error' => 'Not found'], 404);

        $listing->update($request->all());
        return response()->json($listing);
    }

    public function destroy($id)
    {
        $listing = Listing::find($id);
        if (!$listing) return response()->json(['error' => 'Not found'], 404);

        $listing->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
