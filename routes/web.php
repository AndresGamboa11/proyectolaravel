<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Controller\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Crear una ruta para la vista welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Crear una ruta para la vista login.blade.php
// Ruta para el inicio de sesión
Route::get('/login', function () {
    return view('auth.passwords.login');
})->name('login');
Route::post('/login', [LoginController::class, 'auth.passwords.login'])->name('login.post');

// Ruta registro
Route::get('/register', function () {
    return view('auth.passwords.register');
})->name('register');
Route::post('/register', [RegisterController::class, 'auth.passwords.register'])->name('register.post');

// Ruta para cerrar sesión
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta para el perfil
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
