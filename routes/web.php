<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/aboutus', function () {
    return view('about');
});
Route::get('/contactus', function () {
    return view('contactus');
});


