<?php

namespace App\Http\Controllers\Api\Api;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Experience::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'responsibility' => 'required|string',
        ]);

        $experience = Experience::create($validated);
        return response()->json($experience, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $experience = Experience::find($id);
        return $experience ? response()->json($experience, 200): response()->json(['message' => 'Not Found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'company_name' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'responsibility' => 'required|string' . $experience->id,
        ]);

        $experience->update($validated);

        return response()->json($experience, 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return response()->json(['message' => 'Кандидат удалён'], 204);
    }
}
