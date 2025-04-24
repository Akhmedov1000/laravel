<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\VacancyResume;
use Illuminate\Http\Request;

class VacancyResumeController extends Controller
{
    public function index()
    {
        return response()->json(VacancyResume::all(), 200);
    }
    public function store(Request $request)
    {
        $VacancyResume = VacancyResume::create($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($VacancyResume, 201);
    }
    public function show($id)
    {
        $VacancyResume = VacancyResume::with('Users','Application')->find($id);
        return $VacancyResume ? response()->json($VacancyResume, 200) : response()->json(['message' => 'Not Found'], 404);
 }
    public function update(Request $request, $id)
    {
        $VacancyResume = VacancyResume::find($id);
        if (!$VacancyResume) return response()->json(['message' => 'Not Found'],
            404);
        $VacancyResume->update($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($VacancyResume, 200);
    }
    public function destroy($id)
    {
        $VacancyResume = VacancyResume::find($id);
        if (!$VacancyResume) return response()->json(['message' => 'Not Found'],
            404);
        $VacancyResume->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }

}
