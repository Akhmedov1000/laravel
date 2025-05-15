<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all(); ;
        return view('user.index', compact('user'));
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('user.index');
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }
    public function update(Request $request, string $id)
    {
        return redirect()->route('user.index');
    }
    public function destroy(string $id)
    {
        return redirect()->route('user.index');
    }
}
