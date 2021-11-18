<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Exam;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ExamController::class, 'show']);
Route::get('/exam/{course-name}', [ExamController::class, 'create']);
Route::get('/reg', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/reg', [RegisterController::class, 'store'])->middleware('guest');

//login and logout session
Route::get('/log-in', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->name('sessions')->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
//exam question
Route::get('/admin/question/create', [QuestionController::class, 'create'])->middleware('admin');
Route::post('/admin/questions',[QuestionController::class, 'store'])->middleware('admin')->name('questions');
//course list page
Route::get('/admin/course',[CourseController::class, 'create'])->middleware('admin')->name('course');
