<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Course;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return inertia(
            'Index/Index',
            [
                'notifications' => $request->user()
                    ->notifications()->paginate(10)
            ]
        );
    }

    public function show()
    {
        return inertia('Index/About');
    }
    public function faq(){
        return inertia('Index/FAQ');
    }
}
