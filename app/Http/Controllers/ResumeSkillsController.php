<?php

namespace App\Http\Controllers;

use App\Models\ResumeSkills;
use Illuminate\Http\Request;

class ResumeSkillsController extends Controller
{
    public function index()
    {
        return response()->json(ResumeSkills::all(), 200);
    }

    public function store(Request $request)
    {
         $resume_skills = ResumeSkills::create($request->validate([
             'resumes_id' => 'required',
             'skills_id' => 'required',
             'level' => 'required'
         ]));
         return response()->json($resume_skills, 201);
    }

    public function show($id)
    {
        $resume_skills = ResumeSkills::with('resumes','skills')->find($id);
        return $resume_skills ? response()->json($resume_skills, 200) : response()
        >json(['message' => 'Not Found'], 404);
    }

    public function update(Request $request, $id)
    {
        $resume_skills = ResumeSkills::find($id);
        if (!$resume_skills) return response()->json(['message' => 'Not Found'],
            404);
        $resume_skills->update($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($resume_skills, 200);
    }

    public function destroy($id)
    {
        $resume_skills = ResumeSkills::find($id);
        if (!$resume_skills) return response()->json(['message' => 'Not Found'],
            404);
        $resume_skills->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
