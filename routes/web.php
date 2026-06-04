<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);