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

Route::get('/equipos/create', [EquipoController::class, 'create'])
    ->middleware('auth')
    ->name('equipo.create');

Route::post('/equipos', [EquipoController::class, 'store'])
    ->middleware('auth')
    ->name('equipo.store');

Route::get('/equipos/{id}/edit', [EquipoController::class, 'edit'])
    ->middleware('auth')
    ->name('equipo.edit');

Route::put('/equipos/{id}', [EquipoController::class, 'update'])
    ->middleware('auth')
    ->name('equipo.update');

Route::delete('/equipos/{id}', [EquipoController::class, 'destroy'])
    ->middleware('auth')
    ->name('equipo.destroy');
