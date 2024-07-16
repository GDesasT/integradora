<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UsuariosController;

Route::get('/dfshgdf', function () {
    return view('welcome');
})->name('wini');

Route::get('/dashboard', [GameController::class, 'dashboard'])->name('dashboard');
Route::post('/game/create', [GameController::class, 'createGame'])->name('game.create');
Route::get('/game/{id}', [GameController::class, 'showGame'])->name('game.show');
Route::post('/game/{id}/move', [GameController::class, 'makeMove'])->name('game.move');

Route::get('/', [UsuariosController::class, 'vistaLogin'])->name('login.vista');
Route::post('/login', [UsuariosController::class, 'logear'])->name('login.post');
Route::post('logout', [UsuariosController::class, 'logout'])->name('logout');


Route::get('/registro/vista', [UsuariosController::class, 'vistaRegistro'])->name('registro.vista');
Route::post('/registro', [UsuariosController::class, 'registrar'])->name('registro.post');

Route::get('/perfil/vista', [UsuariosController::class, 'vistaPerfil'])->name('perfil.vista');  
Route::get('/history', [GameController::class, 'history'])->name('history');
Route::delete('/game/{id}', [GameController::class, 'delete'])->name('game.delete');



