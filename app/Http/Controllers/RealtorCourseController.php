<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class RealtorCourseController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Course::class, 'course');
    }
    public function index(Request $request)
    {
        $filters = [
            'deleted' => $request->boolean('deleted'),
            ...$request->only(['by', 'order'])
        ];
        return Inertia(
            'Realtor/Index',
            [
                'filters' => $filters,
                'courses' => Auth::user()
                    ->courses()
                    //->mostRecent()
                    ->filter($filters)
                    ->paginate(5)
                    ->withQueryString()
            ]
        );
    }
    public function create()
    {
        return inertia('Realtor/Create');
    }

    /**
     * Store a newly created resource in storage.\Contracts
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->courses()->create(
            $request->validate([
                'Course_name' => 'required|string',
                'Category' => 'required|string',
                'Description' => 'required',
                'Price' => 'required|integer|min:1|max:1000',
            ])
        );

        return redirect()->route('realtor.course.index')
            ->with('success', 'course was created!');
    }

    public function edit(Course $course)
    {
        return inertia(
            'Realtor/Edit',
            [
                'course' => $course,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *Course
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

        return redirect()->route('realtor.course.index')
            ->with('success', 'course was changed!');
    }


    public function destroy(Course $course)
    {
        $course->deleteOrFail();

        return redirect()->back()
            ->with('success', 'course was deleted!');
    }
}
