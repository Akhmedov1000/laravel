<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('experiences.index', compact('experiences'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'responsibility' => 'required|string',
        ]);

        $experience = Experience::create($validated);
        return view('experiences.show', compact('experience'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $experience = Experience::find($id);
        return view('experiences.show', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'company_name' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'responsibility' => 'required|string' . $experience->id,
        ]);

        $experience->update($validated);

        return view('experiences.show', compact('experience'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return view ('experiences.show', compact('experience'));
    }
}
