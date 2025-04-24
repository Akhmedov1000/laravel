<?php

namespace App\Http\Controllers\Api\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class VacncyCompaniesController extends Controller
{
    public function index()
    {
        return response()->json(VacncyCompaniesController::all(), 200);
    }
    public function store(Request $request)
    {
        $companies = VacncyCompaniesController::create($request->validate([
            'name'=>'required | string',
            'description'=>'required | string',
            'contact'=>'required | string',
        ]));
        return response()->json($companies, 201);
    }

    public function show($id)
    {
        $companies = VacncyCompaniesController::with('Vacancies')->find($id);
        return $companies ? response()->json($companies, 200) : response()
            >json(['message' => 'Not Found'], 404);
    }

    public function update(Request $request, $id)
    {
        $companies = VacncyCompaniesController::find($id);
        if (!$companies) return response()->json(['message' => 'Not Found'],
            404);

        $companies->update($request->validate([
            'name' => 'required|string|max:255',
        ]));

        return response()->json($companies, 200);
    }

    public function destroy($id)
    {
        $companies = VacncyCompaniesController::find($id);
        if (!$companies) return response()->json(['message' => 'Not Found'],
            404);

        $companies->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
