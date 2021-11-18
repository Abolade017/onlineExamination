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
        $request->validate([
            'question' => 'required',
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'required',
            'answer4' => 'required',
            'correctAnswer' => 'required',
        ]);

        $ee = new ExamQuestions;

        $ee->question = $request->get('question');
        $ee->correct_answer = $request->get('correctAnswer');
        $ee->answer1 = $request->get('answer1');
        $ee->answer2 = $request->get('answer2');
        $ee->answer3 = $request->get('answer3');
        $ee->answer4 = $request->get('answer4');
        $ee->save();
        
        return back()->with('success', 'question updated');
    }
}
