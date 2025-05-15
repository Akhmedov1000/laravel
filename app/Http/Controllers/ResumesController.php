<?php

namespace App\Http\Controllers;

use App\Models\VacancyResume;
use Illuminate\Http\Request;

class ResumesController extends Controller
{
    public function index()
    {
        $resumes = ResumesController::all(); ;
        return view('resumes.index', compact('resumes'));
    }

    public function store(Request $request)
    {
        Resumes::create($request->all());
        return redirect()->route('resumes.index');
    }

    public function show(string $id)
    {
        $resumes = ResumesController::findOrFail($id);
        return view('resumes.show', compact('resumes'));
    }
    public function edit(string $id)
    {
        $resumes = ResumesController::findOrFail($id);
        return view('educations.edit', compact('resumes'));
    }
    public function update(Request $request, string $id)
    {
        return redirect()->route('resumes.index');
    }
    public function destroy(string $id)
    {
        return redirect()->route('resumes.index');
    }
}
