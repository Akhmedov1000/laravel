<?php

namespace App\Http\Controllers\Api\Api;

use App\Http\Controllers\Application;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VacancyApplicationController extends Controller
{
    public function index()
    {
        return response()->json(Application::all(), 200);
    }
    public function store(Request $request)
    {
        $application = Application::create($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($application, 201);
    }

    public function show($id)
    {
        $application = Application::with('books')->find($id);
        return $application ? response()->json($application, 200) : response()
            >json(['message' => 'Not Found'], 404);
    }

    public function update(Request $request, $id)
    {
        $application = Application::find($id);
        if (!$application) return response()->json(['message' => 'Not Found'],
            404);

        $application->update($request->validate([
            'resumes_id' => 'required',
            'vacancies_id' => 'required',
            'application_date' => 'required | date_format:d-m-Y',
            'status_application' => 'required | string',
        ]));

        return response()->json($application, 200);
    }

    public function destroy($id)
    {
        $application = Application::find($id);
        if (!$application) return response()->json(['message' => 'Not Found'],
            404);

        $application->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
