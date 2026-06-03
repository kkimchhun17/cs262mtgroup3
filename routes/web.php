<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('pages.RNL.login');
});
Route::get('/register', function () {
    return view('pages.RNL.register');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});