<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Companies::all();
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'contact'=>'required'
        ]);

        return Companies::create($validated);
    }


    public function show(Companies $id)
    {
        return Companies::findOrFail($id);
    }

    public function update(Request $request, Companies $id)
    {
        $companies = Companies::findOrFail($id);
        $companies->update($request->only(['name', 'description', 'contact']));
        return $companies;
    }

    public function destroy(Companies $id)
    {
        Companies::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
