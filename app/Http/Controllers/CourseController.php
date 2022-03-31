<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show()
    {
        $courses = Course::all();
        // dd($courses);
        return view('welcome', [
            'courses' => $courses
        ]);
    }
    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());

        $request->validate([
            'title' => 'required|max:255',
            'unit' => 'required|max:255',
            'code' => 'required|max:255',
            'duration' => 'required|max:255'
        ]);

        $cc = new Course();
        $cc->title = $request->get('title');
        $cc->duration = $request->get('duration');
        $cc->course_code = $request->get('code');
        $cc->unit = $request->get('unit');
        $cc->save();

        // return view('welcome');
        return redirect('/')->with('success', 'Course updated successfully');
    }
}
