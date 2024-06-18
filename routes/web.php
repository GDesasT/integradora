<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::get('/examen', [HomeController::class, 'examen'])->name('examen');
Route::get('/practica1', [HomeController::class, 'practica1'])->name('practica1');
Route::get('/practica2', [HomeController::class, 'practica2'])->name('practica2');