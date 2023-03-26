<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigningController extends Controller
{
    public function signin(){
        return inertia('Signing/signin');
    }
    public function signup(){
        return inertia('Signing/signup');
    }
}
