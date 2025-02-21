<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Home route
Route::get('/', [HomeController::class, 'Login'])->name('Login');

Route::get('/signup', [HomeController::class, 'signup'])->name('signup');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/support', [HomeController::class, 'support'])->name('support');

Route::get('/posts', [HomeController::class, 'posts'])->name('posts');

Route::get('/community', [HomeController::class, 'community'])->name('community');

