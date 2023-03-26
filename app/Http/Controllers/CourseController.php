<?php

namespace App\Http\Controllers;

use App\Models\Course;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia(
            'Course/Index',
            [
                'courses' => Course::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Course/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Course::create(
            $request->validate([
                'Course_name' => 'required',
                'Category' => 'required',
                'Description' => 'required',
                'Price' => 'required|integer|min:1|max:1000',
            ])
        );

        return redirect()->route('course.index')
            ->with('success', 'course was created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return inertia(
            'Course/Show',
            [
                'course' => $course,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return inertia(
            'Course/Edit',
            [
                'course' => $course,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->update(
            $request->validate([
                'Course_name' => 'required',
                'Category' => 'required',
                'Description' => 'required',
                'Price' => 'required|integer|min:1|max:1000',
            ])
        );

        return redirect()->route('course.index')
            ->with('success', 'course was changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
