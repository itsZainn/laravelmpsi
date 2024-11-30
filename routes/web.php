<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FishController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\FishTypeController;

Route::get('/', function () {
    return view('catalogue', ['title' => 'Catalogue']);
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/dashboard', [DashboardController::class, 'fishtype', 'fish'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/{data}', [LoginController::class, 'show'])->name('show')->middleware('auth');
// Route::get('/fish', [DashboardController::class, 'fish'])->name('fish')->middleware('auth');
// Route::get('/fishtype', [DashboardController::class, 'fishtype',])->name('fishtype')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});
// Route::get('/fish', [FishController::class, 'index'])->name('fish');
// Route::get('/fish-types', [FishTypeController::class, 'index'])->name('dashboard');
// Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'fishtype'])->name('dashboard');
Route::get('/welcome', function () {
    return view('welcome');
});
