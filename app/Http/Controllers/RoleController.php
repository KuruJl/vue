<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return response()->json(Role::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required|string|unique:roles']);
        $role = Role::create($validated);
        return response()->json($role, 201);
    }

    public function show($id)
    {
        $role = Role::find($id);
        return $role ? response()->json($role) : response()->json(['error' => 'Not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        if (!$role) return response()->json(['error' => 'Not found'], 404);

        $role->update($request->only('name'));
        return response()->json($role);
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        if (!$role) return response()->json(['error' => 'Not found'], 404);

        $role->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
