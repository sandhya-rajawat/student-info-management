<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::view('/header', 'partials.header');
// Route::view('/footer', 'partials.footer');


