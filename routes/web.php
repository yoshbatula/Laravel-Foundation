<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcomepage', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});