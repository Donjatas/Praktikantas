<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VartotojasStudentasController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    phpinfo();
});

Route::get('/register', [VartotojasStudentasController::class, 'showRegistrationForm'])->name('register');
Route::post('/register.store', [VartotojasStudentasController::class, 'store'])->name('register.custom');

Route::get('/post/{slug}', [PostController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    // Routes that require authentication
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
