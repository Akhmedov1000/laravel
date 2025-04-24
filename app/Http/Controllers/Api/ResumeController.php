<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Resume::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "candidate_id" => "required",
            "experience_id" => "required",
            "title" => "required|string",
            "summary" => "required",
            "salary_expectation" => "required",
            "city" => "required",
        ]);

        $resume = Resume::create($validated);

        return response()->json($resume, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $resume = Resume::find($id);
        return $resume ? response()->json($resume, 200): response()->json(['message' => 'Not Found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        $validated = $request->validate([
            "candidate_id" => "required",
            "experience_id" => "required",
            "title" => "required|string",
            "summary" => "required",
            "salary_expectation" => "required",
            "city" => "required" . $resume->id,
        ]);

        $resume->update($validated);

        return response()->json($resume, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();

        return response()->json(['message' => 'Deleted'], 204);
    }
}
