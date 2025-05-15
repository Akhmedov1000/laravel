<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('experiences.index', compact('experiences'));
    }

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
        return redirect()->route('experiences.index');
    }
    public function show( Experience $experience)
    {
        return view('experiences.show', compact('experience'));
    }

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
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return view('experiences.show', compact('experience'));
    }
}
