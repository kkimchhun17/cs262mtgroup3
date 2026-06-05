<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.RNL.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.RNL.register');
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/all-food', [FoodController::class, 'index']);
Route::get('/dishes', [FoodController::class, 'index'])->defaults('category', 'dish');
Route::get('/soups', [FoodController::class, 'index'])->defaults('category', 'soup');
Route::get('/grilled', [FoodController::class, 'index'])->defaults('category', 'grilled');
Route::get('/desserts', [FoodController::class, 'index'])->defaults('category', 'dessert');
Route::get('/rice-noodles', [FoodController::class, 'index'])->defaults('category', 'rice-noodles');

Route::get('/aboutus', function () {
    return view('pages.aboutus');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    });
    Route::post('/create-dish', [FoodController::class, 'createDish']);
    Route::get('/edit-dish/{food}', [FoodController::class, 'showEditScreen']);
    Route::post('/edit-dish/{food}', [FoodController::class, 'actuallyUpdateDish']);
    Route::post('/delete-dish/{food}', [FoodController::class, 'deleteDish']);
});



