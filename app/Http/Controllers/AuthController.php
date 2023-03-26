<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function create()
    {
        return inertia('Auth/Login');
    }

    public function store(Request $request)
    {
        if (!Auth::attempt($request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]), true)) {
            throw ValidationException::withMessages([
                'username' => 'Authentication failed'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended('/course');
    }

    public function destroy()
    {
    }
}
