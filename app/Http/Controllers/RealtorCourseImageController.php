<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RealtorCourseImageController extends Controller
{
    public function create(Course $course)
    {
        $course->load(['images']);
        return inertia(
            'Realtor/CourseImage/Create',
            ['course' => $course]
        );
    }

    public function store(Course $course, Request $request)
    {
        if ($request->hasFile('images')) {
            $request->validate([
                'images.*' => 'mimes:jpg,png,jpeg,webp|max:5000'
            ], [
                'images.*.mimes' => 'The file should be in one of the formats: jpg, png, jpeg, webp'
            ]);
            foreach ($request->file('images') as $file) {
                $path = $file->store('images', 'public');

                $course->images()->save(new CourseImage([
                    'filename' => $path
                ]));
            }
        }

        return redirect()->back()->with('success', 'Images uploaded!');
    }

    public function destroy($course, CourseImage $image)
    {
        Storage::disk('public')->delete($image->filename);
        $image->delete();

        return redirect()->back()->with('success', 'Image was deleted!');
    }
}
