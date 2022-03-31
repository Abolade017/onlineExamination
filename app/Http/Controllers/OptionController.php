<?php

namespace App\Http\Controllers;

use App\Models\ExamQuestion;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    //

    public function create()
    {
        $questions = ExamQuestion::all();
        return view('options.create', [
            'questions' => $questions
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'value' => 'required',
            'is_correct' => 'required',
            'question_id' => 'required',
        ]);
        $options = new Option();
        $options->value = $request->get('value');
        $options->is_correct = $request->get('is_correct');
        $options->question_id = $request->get('question_id');
        $options->save();
        return redirect()->back()->with('success', 'option updated');
    }
    public function show()
    {
        // $options = Option::get();
        $exam_questions = ExamQuestion::get();

        dd($exam_questions);


        return view('options.load', [
            'exam_questions' => $exam_questions
        ]);
    }
}
