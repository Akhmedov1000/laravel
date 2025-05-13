<?php

namespace App\Http\Controllers;
use App\Models\Educations;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    public function index()
    {
        $educations = Educations::all();
        return view('educations.index', compact('educations'));
    }

    public function store(Request $request)
    {
        $education = Educations::create($request->validate([            'name' => 'required|string|max:255',

        ]));
        return response()->json($education, 201);
    }

    public function show($id)
    {
        $education = Educations::with('resumes')->find($id);
        return $education ? response()->json($education, 200) : response()
        ->json(['message' => 'Not Found'], 404);
}
    public function update(Request $request, $id)
    {
        $education = Educations::find($id);
        if (!$education) return response()->json(['message' => 'Not Found'],
            404);
        $education->update($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($education, 200);
    }
    public function destroy($id)
    {
        $education = Educations::find($id);
        if (!$education) return response()->json(['message' => 'Not Found'],
            404);
        $education->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
