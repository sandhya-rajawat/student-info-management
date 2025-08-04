<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;



Route::view('/', 'home.index');




//home_tour_message
Route::get('tourtext', [TourController::class, 'create']);
Route::post('/messages', [TourController::class, 'store']);
Route::get('/', [TourController::class, 'index']);

// home_key_feature
Route::get('key-features', [HomeController::class, 'create']);
Route::post('features', [HomeController::class, 'store']);
Route::get('/', [HomeController::class, 'index']);

// school-time
Route::get('time', [TimeController::class, 'create']);
Route::post('schooltime', [TimeController::class, 'store']);
Route::get('school-time', [TimeController::class, 'index']);

// school-events
Route::get('events', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/school-events', [EventController::class, 'index']);

//school-teachers
Route::get('teachers', [TeacherController::class, 'create']);
Route::post('teachers', [TeacherController::class, 'store']);
Route::get('school-teachers', [TeacherController::class, 'index']);

//school-blog
Route::get('blog', [BlogController::class, 'create']);
Route::post('school-blog', [BlogController::class, 'store']);
Route::get('school-blog', [BlogController::class, 'index']);

// Auth
Route::get('signUp', [AuthController::class, 'createSignUp']);
Route::post('signup', [AuthController::class, 'store']);

Route::get('signin', [AuthController::class, 'createSignIn']);
Route::post('signin', [AuthController::class, 'loginUser']);

Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])->name('showOtpForm');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verifyOtp');


Route::get('signout', [AuthController::class, 'logoutUser']);