<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Course;
use App\Models\ExamQuestion;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class QuestionController extends Controller
{
    public function create()
    {
        $courses = Course::all();
        // dd($courses);
        return view('questions.create', [
            'courses' => $courses
        ]);
    }
    public function store(Request $request)
    {
        // dd($request()->all());
        $request->validate([
            'question' => 'required',
            'course_id' => 'required',
        ]);

        $ee = new ExamQuestion();

        $ee->question = $request->get('question');
        $ee->course_id = $request->get('course_id');
        $ee->save();
        return redirect()->back()->with('success', 'question updated');

        // return view('questions.load-question')->with('success', 'question updated');
    }

    public function show()
    {
        $examQuestions = ExamQuestion::with(['options'])->get();

        // dd($examQuestions);
        return view('questions.load-question', [
            'exam_questions' => $examQuestions
        ]);
    }
}
