<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAccountController extends Controller
{
    public function create()
    {
        return inertia('UserAccount/Create');
    }
    public function store(Request $request)
    {
        $user = User::make($request->validate([
            'name' => 'required',
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'teacher' => 'required'
        ]));
        $user->password = Hash::make($user->password);
        $user->save();
        Auth::login($user);

        return redirect()->route('course.index')
            ->with('success', 'Account created!');
    }
}
