<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show()
    {
        $courses = Course::all();
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
            'course_name' => 'required|max:255',
            'course_unit' => 'required',
            'duration'=>'required'
        ]);

       $cc = new Course();
       $cc->name = $request->get('course_name');
       $cc->duration = $request->get('duration');
       $cc->unit = $request->get('course_unit');
       $cc->save();

    // return view('welcome');
        return redirect('/')->with('success', 'Course updated successfully');
    }
}
