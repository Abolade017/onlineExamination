<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function show()
    {
        $exams = Exam::all();
        
        return view('welcome', [
            'exams' => $exams,
        ]);
    }
}
