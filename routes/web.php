<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\norts;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/feedback', [norts::class, 'feedback'])->name('feedback');
Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::get('/users', [norts::class, 'index']);

