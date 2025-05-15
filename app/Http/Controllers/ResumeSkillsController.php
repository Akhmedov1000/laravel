<?php

namespace App\Http\Controllers;

use App\Models\ResumeSkills;
use Illuminate\Http\Request;

class ResumeSkillsController extends Controller
{
    public function index()
    {
        $resumeskills = ResumeSkills::all(); ;
        return view('resumeskills.index', compact('resumeskills'));
    }

    public function store(Request $request)
    {
        ResumeSkills::create($request->all());
        return redirect()->route('resumeskills.index');
    }

    public function show(string $id)
    {
        $resumeskills = ResumeSkills::findOrFail($id);
        return view('resumeskills.show', compact('resumeskills'));
    }
    public function edit(string $id)
    {
        $resumeskills = ResumeSkills::findOrFail($id);
        return view('resumeskills.edit', compact('resumeskills'));
    }
    public function update(Request $request, string $id)
    {
        return redirect()->route('resumeskills.index');
    }
    public function destroy(string $id)
    {
        return redirect()->route('resumeskills.index');
    }
}
