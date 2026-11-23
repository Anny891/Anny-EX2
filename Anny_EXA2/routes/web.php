<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipo', [EquipoController::class, 'index'])
    ->middleware('auth')
    ->name('equipo.index');

 Route::get('/login', [LoginController::class, 'showLogin'])
    ->name('login');
 Route::post('/login', [LoginController::class, 'login'])
     ->name('login.submit');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/equipo/create', [EquipoController::class, 'create'])
    ->middleware('auth')
    ->name('equipo.create');
Route::post('/equipo', [EquipoController::class, 'store'])
    ->middleware('auth')
    ->name('equipo.store');