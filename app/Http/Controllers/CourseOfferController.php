<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Notifications\OfferMade;

class CourseOfferController extends Controller
{
    public function store(Course $course, Request $request)
    {
        $this->authorize('view', $course);

        $offer = $course->offers()->save(
            Offer::make(
                $request->validate([
                    'amount' => 'required|integer|min:1|max:2000'
                ])
            )->bidder()->associate($request->user())
        );
        $course->owner->notify(
            new OfferMade($offer)
        );

        return redirect()->route('realtor.course.index')->with(
            'success',
            'Offer was made!'
        );
    }

    public function pay()
    {
        return inertia('Course/Show/Payments');
    }
}
