<?php

namespace App\Http\Controllers\Api\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RoolesController;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class VacancyRoolesController extends Controller
{
    public function index()
    {
        return response()->json(VacancyRoolesController::all(), 200);
    }
    public function store(Request $request)
    {
        $vacancyrooles = VacancyRoolesController::create($request->validate([
           'name'=>'required | string',
        ]));
        return response()->json($vacancyrooles, 201);
    }

    public function show($id)
    {
        $vacancyrooles = VacancyRoolesController::with('Users')->find($id);
        return $vacancyrooles ? response()->json($vacancyrooles, 200) : response()
            >json(['message' => 'Not Found'], 404);
    }

    public function update(Request $request, $id)
    {
        $vacancyrooles = VacancyRoolesController::find($id);
        if (!$vacancyrooles) return response()->json(['message' => 'Not Found'],
            404);

        $vacancyrooles->update($request->validate([
            'name' => 'required|string|max:255',
        ]));

        return response()->json($vacancyrooles, 200);
    }

    public function destroy($id)
    {
        $vacancyrooles = VacancyRoolesController::find($id);
        if (!$vacancyrooles) return response()->json(['message' => 'Not Found'],
            404);

        $vacancyrooles->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
