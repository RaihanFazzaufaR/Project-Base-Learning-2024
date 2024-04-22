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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home1');
});

Route::get('/login', function () {
    return view('Login.index');
});
Route::get('/login/forgot-password', function () {
    return view('Login.forgot_password');
})->name('forgot-password');
Route::get('/login/recovery-code', function () {
    return view('Login.recovery_code');
})->name('recovery-code');
Route::get('/login/change-password', function () {
    return view('Login.change_password');
})->name('change-password');
