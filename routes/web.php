<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;

// Home Page
Route::view('/', 'home.index');

// ✅ Auth Routes (Register, Login, OTP, Logout)
Route::get('signUp', [AuthController::class, 'createSignUp']);
Route::post('signup', [AuthController::class, 'store']);

Route::get('signin', [AuthController::class, 'createSignIn']);
Route::post('signin', [AuthController::class, 'loginUser']);

Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])->name('showOtpForm');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verifyOtp');

Route::get('signout', [AuthController::class, 'logoutUser']);


// ✅ Protected Routes – Only accessible after login
Route::middleware('auth')->group(function () {

    // Tour Message
    Route::get('tourtext', [TourController::class, 'create']);
    Route::post('/messages', [TourController::class, 'store']);

    // Key Features
    Route::get('key-features', [HomeController::class, 'create']);
    Route::post('features', [HomeController::class, 'store']);

    // School Time
    Route::get('time', [TimeController::class, 'create']);
    Route::post('schooltime', [TimeController::class, 'store']);

    // Events
    Route::get('events', [EventController::class, 'create']);
    Route::post('/events', [EventController::class, 'store']);

    // Teachers
    Route::get('teachers', [TeacherController::class, 'create']);
    Route::post('teachers', [TeacherController::class, 'store']);

    // Blog
    Route::get('blog', [BlogController::class, 'create']);
    Route::post('school-blog', [BlogController::class, 'store']);
});

// Public Index Pages
Route::get('/school-time', [TimeController::class, 'index']);
Route::get('/school-events', [EventController::class, 'index']);
Route::get('school-teachers', [TeacherController::class, 'index']);
Route::get('school-blog', [BlogController::class, 'index']);

// Optional - API Key Test
Route::get('/check-resend-key', function () {
    return config('services.resend.key') ?? 'API key is NULL';
});

