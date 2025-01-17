<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('registro');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/', function () {
    return view('sobre');
});


Route::get('/login', [UsuarioController::class, 'showLogin'])->name('login.form');

Route::get('/registro', [UsuarioController::class, 'showForm'])->name('register.form');


Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/sobre', [UsuarioController::class, 'showSobre'])->name('sobre.form');


Route::get('/home', [HomeController::class, 'home'])->name('home.form');
