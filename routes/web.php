<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home.index');
Route::view('blog-form', 'blog-form');
Route::view('blog', 'blog');
Route::view('timeform', 'school-time-form');
Route::view('schooltime', 'school-time');
Route::view('eventsform', 'events-form');
Route::view('events', 'events');

