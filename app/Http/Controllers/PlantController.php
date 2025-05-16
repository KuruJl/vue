<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $plants = auth()->user()->plants()->with('growthEntries')->latest()->get();
    return view('plants.index', compact('plants'));
}

public function create()
{
    return view('plants.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'species' => 'required|string|max:255',
        'description' => 'nullable|string',
        'planting_date' => 'required|date'
    ]);

    auth()->user()->plants()->create($validated);

    return redirect()->route('plants.index')->with('success', 'Растение добавлено!');
}
}
