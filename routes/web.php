<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home.index');
Route::view('blog-form', 'blog.blog-form');
Route::view('blog', 'blog.blog');

