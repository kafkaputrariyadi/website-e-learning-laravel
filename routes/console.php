<?php

use Illuminate\Support\Facades\Route;

// 🔹 Halaman utama
Route::get('/', function () {
    return view('index'); // Tampilkan file resources/views/index.blade.php
})->name('home');

// 🔹 Halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// 🔹 Halaman register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// 🔹 Halaman reset password
Route::get('/reset', function () {
    return view('auth.reset');
})->name('password.request');

// 🔹 Dashboard (hanya bisa diakses setelah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');