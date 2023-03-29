<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class RealtorCourseAcceptOfferController extends Controller
{
    public function __invoke(Offer $offer)
    {
        $course = $offer->course;
        $this->authorize('update', $course);

        $offer->update(['accepted_at' => now()]);

        $course->sold_at = now();
        $course->save();
        $course->offers()->except($offer)
            ->update(['rejected_at' => now()]);

        return redirect()->route('realtor.course.index')
            ->with(
                'success',
                "Offer #{$offer->id} accepted, other offers rejected"
            );
    }
}
