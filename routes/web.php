<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/course', [CourseController::class, 'index']);
Route::resource('courses', CourseController::class);
Route::get('/student', [StudentController::class, 'index']);
Route::resource('students', StudentController::class);