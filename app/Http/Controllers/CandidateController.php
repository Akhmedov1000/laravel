<?php

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Can;

class CandidateController extends Controller
{
    public function index()
    {
        $candidate  = Candidate::all();
        return view('candidaties.index', compact('candidate'));
    }
    public function create()
    {
        return view('candidaties.create');
    }
    public function store(Request $request)
    {

        Candidate::create($request->all());
        return redirect()->route('candidaties.index');
    }
    public function show(Candidate $candidate)
    {
        return view('candidaties.show', compact('candidate'));
    }
    public function edit(Candidate $candidate)
    {
        return view('candidaties.edit', compact('candidate'));
    }
    public function update(Request $request, Candidate $candidate)
    {
        $candidate->update($request->all());
        return redirect()->route('candidaties.index');
    }
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();
        return redirect()->route('candidaties.index');
    }
}
