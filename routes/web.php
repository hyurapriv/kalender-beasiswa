<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('send.otp');

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
