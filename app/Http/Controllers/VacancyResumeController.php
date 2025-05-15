<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\VacancyResume;
use Illuminate\Http\Request;

class VacancyResumeController extends Controller
{
    public function index()
    {
        $vacancyresume = VacancyResume::all(); ;
        return view('vacancyresume.index', compact('vacancyresume'));
    }

    public function store(Request $request)
    {
        VacancyResume::create($request->all());
        return redirect()->route('vacancyresume.index');
    }

    public function show(string $id)
    {
        $vacancyresume = VacancyResume::findOrFail($id);
        return view('vacancyresume.show', compact('vacancyresume'));
    }
    public function edit(string $id)
    {
        $vacancyresume = VacancyResume::findOrFail($id);
        return view('vacancyresume.edit', compact('vacancyresume'));
    }
    public function update(Request $request, string $id)
    {
        return redirect()->route('vacancyresume.index');
    }
    public function destroy(string $id)
    {
        return redirect()->route('vacancyresume.index');
    }

}
