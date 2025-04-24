<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        return response()->json(Vacancy::all(), 200);
    }
    public function store(Request $request)
    {
        $Vacancy = Vacancy::create($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($Vacancy, 201);
    }
    public function show($id)
    {
        $Vacancy = Vacancy::with('Companies','Applications')->find($id);
        return $Vacancy ? response()->json($Vacancy, 200) : response()->json(['message' => 'Not Found'], 404);
 }
    public function update(Request $request, $id)
    {
        $Vacancy = Vacancy::find($id);
        if (!$Vacancy) return response()->json(['message' => 'Not Found'],
            404);
        $Vacancy->update($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($Vacancy, 200);
    }
    public function destroy($id)
    {
        $Vacancy = Vacancy::find($id);
        if (!$Vacancy) return response()->json(['message' => 'Not Found'],
            404);
        $Vacancy->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }

}
