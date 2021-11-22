<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function show()
    {
        $exams = Course::all();
        
        return view('welcome', [
            'exam' => $exams,
        ]);
    }
}
