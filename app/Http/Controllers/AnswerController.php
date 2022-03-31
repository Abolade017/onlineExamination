<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\ExamQuestion;
use App\Models\Option;
use App\Models\Result;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //
    // public function create()
    // {
    //     $questions = ExamQuestion::all();
    //     return view('answers.create', [
    //         'questions' => $questions
    //     ]);
    // }
    public function store(Request $request)
    {
        $user = request()->user();
        $questions = $request->get('question_id');

        $score = 0;
        foreach ($questions as $q_id) {
            $option_id = $request->get("answer_" . $q_id, 0);

            $option = Option::find($option_id);
            if ($option) {
                $correct = $option->is_correct;
                $score++;
            } else {
                $correct = 0;
            }
            $ans = new Answer();
            $ans->user_id = $user->id;
            $ans->option_id = $option_id;
            $ans->question_id = $q_id;
            $ans->is_correct = $correct;
            $ans->save();
        }
        $question = ExamQuestion::find($questions[1]);
        $result = new Result();
        $result->course_id = $question->course->id;
        $result->course_name = $question->course->title;
        $result->course_code = $question->course->course_code;
        $result->attempted_question = $question->count();
        $result->user_id = $user->id;
        $result->correct_answer = $score;
        $result->score = $score * 2;
        $result->save();
        return view('answers.show', [
            'exam_questions' => $question
        ]);
    }
    public function show()
    {
        $questions = Answer::get();
        return view(
            'answers.show',
            [
                'answers' => $questions
            ]
        );
    }
}
