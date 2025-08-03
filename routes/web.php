<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home.index');
Route::view('feature', 'home.feature-form');
Route::view('blog', 'blog-form');

Route::view('blog', 'blog');

Route::view('time', 'school-time-form');
Route::view('schooltime', 'school-time');
Route::view('events', 'events-form');
// Route::view('events', 'events');
Route::view('teachers', 'teacher-community-form');
Route::view('teacher-community', 'teacher-community');

Route::view('tourtext', 'home.tour-content-form');














Route::post('/messages', [TourController::class, 'store']);
Route::get('/', [TourController::class, 'index']);


Route::post('/information', [HomeController::class, 'store']);
Route::get('/', [HomeController::class, 'index']);

Route::post('/schooltime', [TimeController::class, 'store']);
Route::get('school-time', [TimeController::class, 'index']);

Route::post('/events', [EventController::class, 'store']);
Route::get('/school-events', [EventController::class, 'index']);
