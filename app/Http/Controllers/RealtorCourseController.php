<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class RealtorCourseController extends Controller
{
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
    public function __construct()
    {
        $this->authorizeResource(Course::class, 'course');
    }

    public function destroy(Course $course)
    {
        $course->deleteOrFail();

        return redirect()->back()
            ->with('success', 'course was deleted!');
    }
}
