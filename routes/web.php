<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\UmkmController;
use App\Http\Controllers\User\PendudukController;
use App\Http\Controllers\User\BansosController;
use App\Http\Controllers\User\AduanController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\JadwalController;
use App\Http\Controllers\User\SuratController;

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
})->name('home');

Route::group(['prefix'=>'login'], function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate'); 
    Route::get('/forgot-password', [LoginController::class, 'forgotPassword'])->name('forgot-password');
    Route::get('/recovery-code', [LoginController::class, 'recoveryCode'])->name('recovery-code');
    Route::get('/change-password', [LoginController::class, 'changePassword'])->name('change-password');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware'=>['auth']], function(){
    Route::group(['middleware'=>['loginCheck:1']], function(){
        Route::get('/admin', function(){
            return view('admin.dashboard');
        });
    });
    Route::group(['middleware'=>['loginCheck:2']], function(){
        Route::get('/home', [HomeController::class, 'index']);
    });
});

//route UMKM
Route::group(['prefix'=>'umkm'], function(){
    Route::get('/', [UmkmController::class, 'index'])->name('umkm');
});

// Route Penduduk
Route::group(['prefix'=>'penduduk'], function(){
    Route::get('/', [PendudukController::class, 'index'])->name('penduduk');
});

// Route Bansos
Route::group(['prefix'=>'bansos'], function(){
    Route::get('/', [PendudukController::class, 'index'])->name('bansos');
});

//Route Aduan
Route::group(['prefix'=>'aduan'], function(){
    Route::get('/', [PendudukController::class, 'index'])->name('aduan');
});

//Route Jadwal
Route::group(['prefix'=>'jadwal'], function(){
    Route::get('/', [PendudukController::class, 'index'])->name('jadwal');
});

//Route Surat
Route::group(['prefix'=>'surat'], function(){
    Route::get('/', [PendudukController::class, 'index'])->name('surat');
});