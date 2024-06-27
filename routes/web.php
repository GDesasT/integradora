<?php

use App\Http\Controllers\HomeController; 
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::get('/users1', [UserController::class, 'index']);
Route::get('/users2', [UserController::class, 'usersByGenderM']);
Route::get('/users3', [UserController::class, 'usersByGenderH']);
Route::get('/users4', [UserController::class, 'usersByLevel2']);
Route::get('/users5', [UserController::class, 'usersByLevel3']);
Route::get('/users6', [UserController::class, 'usersByEmailGmail']);
Route::get('/users7', [UserController::class, 'usersByEmailOutlook']);
Route::get('/users8', [UserController::class, 'usersByPhonePrefix655']);
Route::get('/users9', [UserController::class, 'usersByBrandSamsung']);
Route::get('/users10', [UserController::class, 'usersByBrandLG']);
Route::get('/users11', [UserController::class, 'usersByCompanyTelcel']);
Route::get('/users12', [UserController::class, 'usersByCompanyMovistar']);
Route::get('/users13', [UserController::class, 'usersByBalanceGreaterThan100']);
Route::get('/users14', [UserController::class, 'usersByBalanceLessThan50']);
Route::get('/users15', [UserController::class, 'activeUsers']);
Route::get('/users16', [UserController::class, 'inactiveUsers']);
Route::get('/users17', [UserController::class, 'usersWithNameLuis']);
Route::get('/users18', [UserController::class, 'usersWithNameJessica']);
Route::get('/users19', [UserController::class, 'usersWithPhoneContains143']);
Route::get('/users20', [UserController::class, 'usersWithEmailLive']);


