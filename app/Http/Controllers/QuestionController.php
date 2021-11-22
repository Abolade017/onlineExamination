<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ExamQuestions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QuestionController extends Controller
{
    public function create()
    {
        return view('questions.create');
    }
    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'question' => 'required',
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'required',
            'answer4' => 'required',
            'correctAnswer' => 'required',
        ]);

        $ee = new ExamQuestions();

        $ee->question = $request->get('question');
        $ee->option_one = $request->get('answer1');
        $ee->option_two = $request->get('answer2');
        $ee->option_three = $request->get('answer3');
        $ee->option_four = $request->get('answer4');
        $ee->answer = $request->get('correctAnswer');
        $ee->save();

        return back()->with('success', 'question updated');
    }
}
