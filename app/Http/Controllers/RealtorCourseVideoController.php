<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseVideo;

class RealtorCourseVideoController extends Controller
{
    public function create(Course $course)
    {
        $course->load(['video']);
        return inertia(
            'Realtor/CourseVideo/Create',
            ['course' => $course]
        );
    }

    public function store(Course $course, Request $request)
    {
        
        if ($request->hasFile('video')) {
            $request->validate([
                'video.*' => 'mimes:mp4,ogx,oga,ogv,ogg,webm'
            ], [
                'video.*.mimes' => 'The file should be in one of the formats: mp4'
            ]);
            foreach ($request->file('video') as $file) {
                $path = $file->store('video', 'public');

                $course->video()->save(new CourseVideo([
                    'filename' => $path
                ]));
            }
        }
    }
}
