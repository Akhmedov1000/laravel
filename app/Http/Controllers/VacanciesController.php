<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancy = Vacancy::all(); ;
        return view('vacancy.index', compact('vacancy'));
    }

    public function store(Request $request)
    {
        Vacancy::create($request->all());
        return redirect()->route('vacancy.index');
    }

    public function show(string $id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('vacancy.show', compact('vacancy'));
    }
    public function edit(string $id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('vacancy.edit', compact('vacancy'));
    }
    public function update(Request $request, string $id)
    {
        return redirect()->route('vacancy.index');
    }
    public function destroy(string $id)
    {
        return redirect()->route('vacancy.index');
    }

}
