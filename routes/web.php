<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/login', function () {
    return view('pages.RNL.login');
});
Route::get('/register', function () {
    return view('pages.RNL.register');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});



Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dishes', function () {
    return view('pages.dishes');
});

Route::get('/soups', function () {
    return view('pages.soups');
});

Route::get('/all-food', function () {
    return view('pages.all-food');
});

Route::get('/grilled', function () {
    return view('pages.grilled');
});

Route::get('/desserts', function () {
    return view('pages.desserts');
});

Route::get('/rice-noodles', function () {
    return view('pages.rice-noodles');
});

Route::get('/aboutus', function () {
    return view('pages.aboutus');
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/register', [AuthController::class, 'register']);

// please make a route about the dashboard like create post and edit