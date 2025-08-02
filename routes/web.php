<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home.index');
Route::view('feature-form', 'home.feature-form');
Route::view('blog-form', 'blog-form');
Route::view('blog', 'blog');
Route::view('timeform', 'school-time-form');
Route::view('schooltime', 'school-time');
Route::view('eventsform', 'events-form');
Route::view('events', 'events');
Route::view('teacher-community-form', 'teacher-community-form');
Route::view('teacher-community', 'teacher-community');

Route::view('tour-content-form', 'home.tour-content-form');













Route::post('/messages', [TourController::class, 'store']);
Route::get('/', [TourController::class, 'index']);


Route::post('/information', [HomeController::class, 'store']);
Route::get('/', [HomeController::class, 'index']);