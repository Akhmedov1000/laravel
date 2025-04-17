<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class  SkillController extends Controller
{
    public function index()
    {
        return response()->json(Skill::all(), 200);
    }

    public function store(Request $request)
    {

        $skill = Skill::create($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($skill, 201);
    }
    public function show($id)
    {
        $skill = Skill::with('skills')->find($id);
        return $skill ? response()->json($skill, 200) : response()
            ->json(['message' => 'Not Found'], 404);

    }


    public function update(Request $request, $id)
    {
        $skill = Skill::find($id);
        if (!$skill) return response()->json(['message' => 'Not Found'],
            404);
        $skill->update($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($skill, 200);
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        if (!$skill) return response()->json(['message' => 'Not Found'],
            404);
        $skill->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }

}
