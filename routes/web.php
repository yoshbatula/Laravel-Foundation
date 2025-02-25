<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcomepage', function () {
    return view('welcome');
});

Route::get('/aboutpage', function () {
    return view('about');
});

Route::get('/contactpage', function () {
    return view('contact');
});