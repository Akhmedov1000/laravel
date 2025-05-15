<?php

namespace App\Http\Controllers;
use App\Models\Educations;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    public function index()
    {
        $education = Educations::all(); ;
        return view('education.index', compact('education'));
    }

    public function store(Request $request)
    {
        Educations::create($request->all());
        return redirect()->route('educations.index');
    }

    public function show(string $id)
    {
        $educations = Educations::findOrFail($id);
        return view('educations.show', compact('educations'));
    }
    public function edit(string $id)
    {
        $educations = Educations::findOrFail($id);
        return view('educations.edit', compact('educations'));
    }
    public function update(Request $request, string $id)
    {
        return redirect()->route('educations.index');
    }
    public function destroy(string $id)
    {
        return redirect()->route('educations.index');
    }
}
