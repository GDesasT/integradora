<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
<<<<<<< Updated upstream
=======
Route::get('/users', [UserController::class, 'index']);


>>>>>>> Stashed changes
