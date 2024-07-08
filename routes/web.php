<?php

use App\Http\Controllers\HomeController; 
use App\Http\Controllers\UserController;

// Ruta GET para mostrar el formulario de creación de usuarios
Route::get('/users/create', function () {
    return view('users.create'); // Asegúrate de que 'users.create' sea el nombre correcto de tu vista
})->name('users.create_form');

// Ruta POST para procesar el formulario
Route::post('/users/create', [UserController::class, 'createUser'])->name('users.create');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::get('/users', [UserController::class, 'index']);



