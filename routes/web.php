<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FishController;
use App\Http\Controllers\FishTypeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\FishTypeController;

// Route::get('/', function () {
//     return view('catalogue', ['title' => 'Catalogue']);
// });
Route::get('/', [FishController::class, 'index'])->name('catalogue');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/fish/create', [FishController::class, 'create'])->name('addfish'); // Menampilkan form
Route::post('/fish/store', [FishController::class, 'store'])->name('storefish');  // Menyimpan data
Route::get('/fish/{id}/edit', [FishController::class, 'edit'])->name('editfish');
Route::put('/fish/{id}/updatefish', [FishController::class, 'update'])->name('updatefish');
Route::get('/fishtype/create', [FishTypeController::class, 'create'])->name('addtype'); // Menampilkan form
Route::post('/fishtype/store', [FishTypeController::class, 'store'])->name('storetype');  // Menyimpan data
Route::get('/fishtype/{id}/edit', [FishTypeController::class, 'edit'])->name('edittype');
Route::put('/fishtype/{id}/updatetype', [FishTypeController::class, 'update'])->name('updatetype');
Route::delete('/fish/{id}', [FishController::class, 'delete'])->name('deletefish');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/{data}', [DashboardController::class, 'show'])->name('show')->middleware('auth');
// Route::get('/fish', [DashboardController::class, 'fish'])->name('fish')->middleware('auth');
// Route::get('/fishtype', [DashboardController::class, 'fishtype',])->name('fishtype')->middleware('auth');
Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('logout')->middleware('auth');
Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
})->name('about');
// Route::get('/fish', [FishController::class, 'index'])->name('fish');
// Route::get('/fish-types', [FishTypeController::class, 'index'])->name('dashboard');
// Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'fishtype'])->name('dashboard');
Route::get('/welcome', function () {
    return view('welcome');
});
