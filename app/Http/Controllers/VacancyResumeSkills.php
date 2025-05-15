<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeSkills extends Controller
{
    public function index()
    {
        return response()->json(ResumeSkills::all(), 200);
    }
    public function store(Request $request)
    {
        $resumeskills = ResumeSkills::create($request->validate([
            'resume_id' => 'required',
            'skill_id' => 'required',
        ]));
        return response()->json($resumeskills, 201);
    }

    public function show($id)
    {
        $resumeskills = ResumeSkills::with('Skills')->find($id);
        return $resumeskills ? response()->json($resumeskills, 200) : response()
            >json(['message' => 'Not Found'], 404);
    }

    public function update(Request $request, $id)
    {
        $resumeskills = ResumeSkills::find($id);
        if (!$resumeskills) return response()->json(['message' => 'Not Found'],
            404);

        $resumeskills->update($request->validate([
            'name' => 'required|string|max:255',
        ]));

        return response()->json($resumeskills, 200);
    }

    public function destroy($id)
    {
        $resumeskills = ResumeSkills::find($id);
        if (!$resumeskills) return response()->json(['message' => 'Not Found'],
            404);

        $resumeskills->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
