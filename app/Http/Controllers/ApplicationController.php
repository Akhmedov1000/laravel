<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('application.index', compact('applications'));
    }
    public function create()
    {
        return view('application.create');
    }
    public function store(Request $request)
    {
        Application::create($request->all());
        return redirect()->route('applications.index');
    }
    public function show(string $id)
    {
        $application = Application::findOrFail($id);
        return view('application.show', compact('application'));
    }
    public function edit(string $id)
    {
        $application = Application::findOrFail($id);
        return view('application.edit', compact('application'));
    }
    public function update(Request $request, string $id)
    {
        return redirect()->route('application.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect()->route('application.index');
    }
}
