<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Exam;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Helper\QuestionHelper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CourseController::class, 'show'])->middleware('auth');
Route::get('/dashboard',function(){
    return view('dashboard');
})->middleware('admin')->name('dashboard');
//course list page
Route::get('/admin/course/create', [CourseController::class, 'create'])->middleware('admin')->name('create-course');
Route::post('/admin/courses', [CourseController::class, 'store'])->middleware('admin')->name('course');

Route::get('/reg', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/reg', [RegisterController::class, 'store'])->middleware('guest');

//login and logout session
Route::get('/log-in', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->name('sessions')->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

//exam question
Route::get('/admin/question/create', [QuestionController::class, 'create'])->middleware('admin');
Route::post('/admin/questions', [QuestionController::class, 'store'])->middleware('admin')->name('questions');

//load exam question for student
Route::get('/exam-questions', [QuestionController::class, 'show'])->middleware('auth')->name('load-question');
