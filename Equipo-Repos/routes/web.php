<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EquipoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipos', [App\Http\Controllers\EquipoController::class, 'index'])
    ->name('equipo.index');

Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');


Route::post('/login', [LoginController::class, 'login'])
    ->name('login.submit');


Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
