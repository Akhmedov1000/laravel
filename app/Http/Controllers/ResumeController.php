<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use App\Models\VacancyResume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumes = VacancyResume::all();
        return view('resume.show', compact('resumes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "candidate_id" => "required",
            "experience_id" => "required",
            "title" => "required|string",
            "summary" => "required",
            "salary_expectation" => "required",
            "city" => "required",
        ]);
    $resumes = VacancyResume::all();
    return view('resume.show', compact('resumes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $resumes = VacancyResume::all();
        return view('resume.show', compact('resumes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'company_name' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'responsibility' => 'required|string',
        ]);
        $resumes = VacancyResume::all();
        return view('resume.show', compact('resumes'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();
        return view('resume.show', compact('resume'));
    }
}
