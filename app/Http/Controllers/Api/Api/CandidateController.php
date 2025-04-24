<?php

namespace App\Http\Controllers\Api\Api;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        return response()->json(Candidate::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'birthday' => 'required|date',
            'email' => 'required|email|unique:candidates,email',
        ]);

        $candidate = Candidate::create($validated);

        return response()->json($candidate, 201);
    }

    public function show(string $id)
    {
        $candidate = Candidate::find($id);
        return $candidate ? response()->json($candidate, 200) : response()->json(['message' => 'Not Found'], 404);
    }

    public function update(Request $request, Candidate $candidate)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string',
            'surname' => 'sometimes|required|string',
            'birthday' => 'sometimes|required|date',
            'email' => 'sometimes|required|email|unique:candidates,email,' . $candidate->id,
        ]);

        $candidate->update($validated);

        return response()->json($candidate);
    }

    public function destroy(Candidate $candidate)
    {
        $candidate->delete();

        return response()->json(['message' => 'Кандидат удалён']);
    }
}
