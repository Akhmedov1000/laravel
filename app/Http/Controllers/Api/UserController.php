<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all(), 200);
    }
    public function store(Request $request)
    {
        $user = User::create($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($user, 201);
    }
    public function show($id)
    {
        $user = User::with('books')->find($id);
        return $user ? response()->json($user, 200) : response()->json(['message' => 'Not Found'], 404);
 }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) return response()->json(['message' => 'Not Found'],
            404);
        $user->update($request->validate([
            'name' => 'required|string|max:255',
        ]));
        return response()->json($user, 200);
    }
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) return response()->json(['message' => 'Not Found'],
            404);
        $user->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
