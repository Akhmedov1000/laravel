<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Pest\Laravel\json;

class VacancySkillsController extends Controller
{
    public function index()
    {
        return response()->json(VacancySkillsController::all(), 200);
    }
    public function store(Request $request)
    {
        $skills = VacancySkillsController::create($request->validate([
            'name'=>'required | string',
        ]));
        return response()->json($skills, 201);
    }

    public function show($id)
    {
        $skills = VacancySkillsController::with('ResumesSkills')->find($id);
        return $skills ? response()->json($skills, 200) : response()
            >json(['message' => 'Not Found'], 404);
    }

    public function update(Request $request, $id)
    {
        $skills = VacancySkillsController::find($id);
        if (!$skills) return response()->json(['message' => 'Not Found'],
            404);

        $skills->update($request->validate([
            'name' => 'required|string|max:255',
        ]));

        return response()->json($skills, 200);
    }

    public function destroy($id)
    {
        $skills = VacancySkillsController::find($id);
        if (!$skills) return response()->json(['message' => 'Not Found'],
            404);

        $skills->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
