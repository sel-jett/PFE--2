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
                'video.*' => 'mimes:mp4,ogx,oga,ogv,ogg,webm|max:20000'
            ], [
                'video.required' => 'Please select a video to upload.',
                'video.*.mimes' => 'The file should be in one of the formats: mp4'
            ]);
            $path = $request->file('video')->store('video', 'public');

            $course->video()->create([
                'filename' => $path
            ]);
        }
        return redirect()->back()->with('success', 'Video was Uploaded!');
    }
}
