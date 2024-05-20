<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\studentController;


use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome.welcome');


Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');


Route::get('/student', [studentController::class, 'student'])->name('student.student');



// Route::get('/', [DashboardController::class, 'index']);
// Route::get('/profile', [ProfileController::class, 'profile']);




