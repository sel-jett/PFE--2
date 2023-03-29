<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Course::class, 'course');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {

        $filters = $request->only([
            'priceFrom', 'priceTo', 'category'
        ]);


        return inertia(
            'Course/Index',
            [
                'filters' => $filters,
                'courses' => Course::mostRecent()
                    ->filter($filters)
                    ->paginate(12)
                    ->withQueryString()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {

        $course->load(['images']);
        $offer = !Auth::user() ?
            null : $course->offers()->byMe()->first();
        return inertia(
            'Course/Show',
            [
                'course' => $course,
                'offerMade' => $offer
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
