<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/about", [HomeController::class, 'about'])->name('about');
Route::get("/login", [HomeController::class, 'login'])->name('login');
