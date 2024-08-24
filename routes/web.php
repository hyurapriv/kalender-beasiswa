<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('/auth/login');
})->name('login');

Route::get('/register', function () {
    return view('/auth/register');
})->name('register');

Route::get('/', function () {
    return view('/pages/app/index');
})->name('home');

Route::get('/program-kami', function () {
    return view('/pages/app/program-kami');
})->name('program-kami');

Route::get('/kalender-beasiswa', function () {
    return view('/pages/app/beasiswa');
})->name('kalender-beasiswa');

Route::get('/bimbingan-belajar', function () {
    return view('/pages/app/bimbingan-belajar');
})->name('bimbingan-belajar');
