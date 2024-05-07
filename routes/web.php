<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\UmkmController;
use App\Http\Controllers\User\PendudukController;
use App\Http\Controllers\User\BansosController as UserBansosController;
use App\Http\Controllers\User\AduanController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\JadwalController;
use App\Http\Controllers\User\SuratController;
use App\Http\Controllers\Admin\PendudukController as AdminPendudukController;
use App\Http\Controllers\Admin\BansosController as AdminBansosController;
use App\Http\Controllers\Admin\UmkmController as AdminUmkmController;
use App\Http\Controllers\Admin\PengaduanController as AdminPengaduanController;
use App\Http\Controllers\Admin\PersuratanController as AdminPersuratanController;
use App\Http\Controllers\Admin\PengumumanController as AdminPengumumanController;
use App\Http\Controllers\Admin\AkunAdminController as AdminAkunAdminController;
use App\Http\Controllers\Admin\JadwalKegiatanController as AdminKegiatanController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'login'], function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::get('/forgot-password', [LoginController::class, 'forgotPassword'])->middleware('guest')->name('password.forgot');
    Route::post('/forgot-password', [LoginController::class, 'sendResetLinkEmail'])->middleware('guest')->name('sendResetLinkEmail');
    Route::get('/change-password/{token}', [LoginController::class, 'changePassword'])->middleware('guest')->name('password.reset');
    Route::post('/changing-password', [LoginController::class, 'updatePassword'])->middleware('guest')->name('password.update');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['loginCheck:1']], function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('admin');
            Route::prefix('kependudukan')->group(function () {
                Route::get('/', [AdminPendudukController::class, 'index'])->name('daftar-penduduk');
                Route::post('/', [AdminPendudukController::class, 'storePenduduk'])->name('storePenduduk');
                Route::put('/{nik}', [AdminPendudukController::class, 'updatePenduduk'])->name('updatePenduduk');
                Route::delete('/{nik}', [AdminPendudukController::class, 'destroyPenduduk'])->name('destroyPenduduk');
                Route::post('/filter-penduduk', [AdminPendudukController::class, 'filterPenduduk'])->name('filterPenduduk');
                Route::post('/search-penduduk', [AdminPendudukController::class, 'searchPenduduk'])->name('searchPenduduk');
                Route::get('/daftar-akun', [AdminPendudukController::class, 'daftarAkunViewAdmin'])->name('daftar-akun');
                Route::get('/daftar-nkk', [AdminPendudukController::class, 'daftarNkkViewAdmin'])->name('daftar-nkk');
                Route::post('/daftar-nkk', [AdminPendudukController::class, 'storeKartuKeluarga'])->name('storeKartuKeluarga');
                Route::put('/daftar-nkk/{id}', [AdminPendudukController::class, 'updateKartuKeluarga'])->name('updateKartuKeluarga');
                Route::delete('/daftar-nkk/{id}', [AdminPendudukController::class, 'destroyKartuKeluarga'])->name('destroyKartuKeluarga');
                Route::post('/filter-nkk', [AdminPendudukController::class, 'filterKartuKeluarga'])->name('filterKartuKeluarga');
                Route::post('/search-nkk', [AdminPendudukController::class, 'searchKartuKeluarga'])->name('searchKartuKeluarga');
                Route::post('/open-modal-penduduk', [AdminPendudukController::class, 'openModalPenduduk'])->name('openModalPenduduk');
            });
            Route::prefix('bansos')->group(function () {
                Route::get('/', [AdminBansosController::class, 'index'])->name('bansos-admin');
                Route::get('/rekomendasi-bansos', [AdminBansosController::class, 'rekomendasiBansos'])->name('rekomendasi-bansos');
            });
            Route::prefix('umkm')->group(function () {
                Route::get('/', [AdminUmkmController::class, 'index'])->name('umkm-admin');
                Route::get('/ajuan-umkm', [AdminUmkmController::class, 'ajuanUmkm'])->name('ajuan-umkm-admin');
            });
            Route::prefix('persuratan')->group(function () {
                Route::get('/', [AdminPersuratanController::class, 'index'])->name('persuratan-admin');
            });
            Route::prefix('akun-admin')->group(function () {
                Route::get('/', [AdminAkunAdminController::class, 'index'])->name('akun-admin');
            });
            Route::prefix('jadwal-kegiatan')->group(function () {
                Route::get('/', [AdminKegiatanController::class, 'index'])->name('jadwal-kegiatan-admin');
            });
            Route::prefix('pengumuman')->group(function () {
                Route::get('/', [AdminPengumumanController::class, 'index'])->name('pengumuman-admin');
            });
            Route::prefix('pengaduan')->group(function () {
                Route::get('/', [AdminPengaduanController::class, 'index'])->name('pengaduan-admin');
            });
        });
    });
    Route::group(['middleware' => ['loginCheck:2']], function () {
        // Route Penduduk
        Route::group(['prefix' => 'penduduk'], function () {
            Route::get('/', [PendudukController::class, 'index'])->name('penduduk');
        });

        // Route Bansos
        Route::group(['prefix' => 'bansos'], function () {
            Route::get('/', [UserBansosController::class, 'index'])->name('bansos');
        });

        //Route Aduan
        Route::group(['prefix' => 'aduan'], function () {
            Route::get('/', [PendudukController::class, 'index'])->name('aduan');
        });

        //Route Jadwal
        Route::group(['prefix' => 'jadwal'], function () {
            Route::get('/', [PendudukController::class, 'index'])->name('jadwal');
        });

        //Route Surat
        Route::group(['prefix' => 'surat'], function () {
            Route::get('/', [PendudukController::class, 'index'])->name('surat');
        });
        Route::group(['middleware' => ['auth']], function () {
            Route::group(['prefix' => 'umkm'], function () {
                Route::get('/', [UmkmController::class, 'index'])->name('umkm');
                Route::get('/umkmku/{id_penduduk}', [UmkmController::class, 'umkmku'])->name('umkmku');
                Route::get('/category/{category}', [UmkmController::class, 'getDataByCategory'])->name('umkm.category');
                Route::get('/search', [UmkmController::class, 'search'])->name('umkm.search');
                Route::post('/store', [UmkmController::class, 'storeUmkm'])->name('umkm.store');
                Route::get('/detail/{umkm_id}', [UmkmController::class, 'getDetailUmkm'])->name('umkm.detail');
                Route::delete('/delete/{umkm_id}', [UmkmController::class, 'destroyUmkm'])->name('umkm.destroy');
            });
        });
    });
});