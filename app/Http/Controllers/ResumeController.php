<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();
        return view('resume.index', compact('resumes'));
    }

    public function create()
    {
        return view('resume.create');
    }

    public function store(Request $request)
    {
        Resume::create($request->all());
        return redirect()->route('resumes.index');
    }

    public function show(string $id)
    {
        $resume = Resume::findOrFail($id);
        return view('resumes.show', compact('resume'));
    }

    public function edit(string $id)
    {
        $resume = Resume::findOrFail($id);
        return view('resumes.edit', compact('resume'));
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('resume.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect()->route('resume.index');
    }
}
