<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;


// Get All Courses
Route::get('/', [CourseController::class, 'index']);

// View Courses
Route::get('/courses/view', [CourseController::class, 'view'])->middleware('auth');

// Add a Course
Route::post('/courses/{course}', [CourseController::class, 'store'])->middleware('auth');

// Remove a Course 
Route::delete('/courses/{course}', [CourseController::class, 'remove'])->middleware('auth');

// Display a Course
Route::get('/courses/{course}', [CourseController::class, 'show']);

// Display Registration Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// User Registration
Route::post('/students', [UserController::class, 'store']);

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Display Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/students/validate', [UserController::class, 'validateUser']);

