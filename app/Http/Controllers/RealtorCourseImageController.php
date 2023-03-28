<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class RealtorCourseImageController extends Controller
{
    public function create(Course $course)
    {
        return inertia(
            'Realtor/CourseImage/Create',
            ['course' => $course]
        );
    }

    public function store(Course $course, Request $request)
    {
        dd('Works!');
    }
}
