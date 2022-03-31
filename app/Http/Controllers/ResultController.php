<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\ExamQuestion;
use App\Models\Option;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function show()
    {
        $results = Result::get();
        return view('results.load', [
            'results' => $results
        ]);
    }
    public function list()
    {
        $results =  Result::where('user_id', auth()->user()->id)->get();
        return view(
            'results.student-load',
            [
                'results' => $results
            ]
        );
    }
}
