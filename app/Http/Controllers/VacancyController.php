<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
class VacanciesController extends Controller
{
    public function index()
    {
        $vacancies = vacancy::all();
        return view('vacancies.index', compact('vacancies'));
    }
    public function create()
    {
        return view('vacancies.create');
    }
    public function store(Request $request)
    {
        vacancy::create($request->all());
        return redirect()->route('vacancies.index');
    }
    public function show(string $vacancy)
    {
        return view('vacancies.show', compact('vacancy'));
    }
    public function edit(string $vacancy)
    {
        return view('vacancies.edit', compact('vacancy'));
    }
    public function update(Request $request, string $vacancy)
    {
        $vacancy->update($request->all());
        return redirect()->route('vacancies.index');
    }
    public function destroy(string $vacancy)
    {
        $vacancy->delete();
        return redirect()->route('vacancies.index');
    }
}
