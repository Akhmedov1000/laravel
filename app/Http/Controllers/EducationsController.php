<?php

namespace App\Http\Controllers;
use App\Models\Educations;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    public function index()
    {
        $educations = Educations::all();
        return view('educations.index', compact('educations'));
    }

    public function store(Request $request)
    {
        $education = Educations::create($request->validate([
            'institution_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study'=>'required|string|max:255',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'description'=>'required|string|max:255',
        ]));
        $education = Educations::create($validated);
        return redirect()->route('educations.index');
    }

    public function show(Educations $education)
    {
return view('educations.show', compact('education'));

}
    public function update(Request $request, Educations $education)
    {
        $education->update($request->all());
        return redirect()->route('educations.index');
    }
    public function edit(Educations $education)
    {
        return view('educations.edit', compact('education'));
    }
    public function destroy(Educations $education)
    {
        $education->delete();
        return redirect()->route('educations.index');
    }
}
