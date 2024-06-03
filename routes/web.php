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
use App\Http\Controllers\ProfilkuController;
use App\Http\Controllers\User\ProfilController;

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
Route::group(['prefix' => 'umkm'], function () {
    Route::get('/', [UmkmController::class, 'index'])->name('umkm');
    Route::get('/category/{category}', [UmkmController::class, 'getDataByCategory'])->name('umkm.category');
    Route::get('/search', [UmkmController::class, 'search'])->name('umkm.search');
    Route::get('/detail/{umkm_id}', [UmkmController::class, 'getDetailUmkm'])->name('umkm.detail');
});
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['loginCheck:3']], function () {
        // Route Penduduk
        Route::group(['prefix' => 'penduduk'], function () {
            Route::get('/', [PendudukController::class, 'index'])->name('penduduk');
            Route::get('/RT/{rt}', [PendudukController::class, 'getDataByRT'])->name('penduduk-rt');
            Route::get('/search', [PendudukController::class, 'search'])->name('penduduk-search');
            // Route::get('/', [PendudukController::class, 'index'])->name('penduduk');

        });

        // Route Bansos
        Route::group(['prefix' => 'bansos'], function () {
            Route::get('/', [UserBansosController::class, 'index'])->name('bansos');
            Route::post('/ajuan', [UserBansosController::class, 'storeBansos'])->name('store.bansos');
            Route::post('/filter-bansos', [userBansosController::class, 'filterBansos'])->name('filter-bansos');
        });

        //Route Aduan
        Route::group(['prefix' => 'aduan'], function () {
            Route::get('/', [AduanController::class, 'index'])->name('aduan');
            Route::get('/aduanku', [AduanController::class, 'indexAduanku'])->name('aduanku');
            Route::post('/aduanku', [AduanController::class, 'addResponse'])->name('add-response');
            Route::delete('/aduanku/delete/{id}', [AduanController::class, 'destroyAduan'])->name('aduan.destroy');
            Route::post('/aduanku/store', [AduanController::class, 'storeAduan'])->name('aduan.store');
        });


        //Route Surat
        Route::group(['prefix' => 'surat'], function () {
            Route::get('/', [SuratController::class, 'index'])->name('surat');
            // suratSk
            Route::get('/sk', [SuratController::class, 'sk'])->name('sk');
            Route::get('/suratSK', [SuratController::class, 'suratSK'])->name('suratSK');
            Route::post('/storeSk', [SuratController::class, 'storeSk'])->name('storeSk');
            Route::get('/showSk/{id}', [SuratController::class, 'showSk'])->name('showSk');

            // suratPindah
            Route::get('/sk-pindah', [SuratController::class, 'skPindah'])->name('sk-pindah');
            Route::post('/storeSkPindah', [SuratController::class, 'storeSkPindah'])->name('storeSkPindah');

            // suratKematian
            Route::get('/sk-kematian', [SuratController::class, 'skKematian'])->name('sk-kematian');
            Route::post('/storeSkKematian', [SuratController::class, 'storeSkKematian'])->name('storeSkKematian');
            Route::get('/showSkKematian/{id}', [SuratController::class, 'showSkKematian'])->name('showSkKematian');

            Route::get('/suratPindah', [SuratController::class, 'suratPindah'])->name('suratPindah');
            Route::get('/suratKematian', [SuratController::class, 'suratKematian'])->name('suratKematian');
            Route::get('/suratku', [SuratController::class, 'suratku'])->name('suratku');
            Route::get('/search', [SuratController::class, 'search'])->name('surat.search');
        });
        // Route::group(['prefix' => 'surat'], function () {
        //     Route::get('/', [SuratController::class, 'index'])->name('surat');
        //     Route::get('/sk-pindah', [SuratController::class, 'skPindah'])->name('sk-pindah');
        //     Route::get('/suratku', [SuratController::class, 'suratku'])->name('suratku');
        // });


        Route::group(['prefix' => 'umkm'], function () {
            // Route::get('/', [UmkmController::class, 'index'])->name('umkm');
            // Route::get('/category/{category}', [UmkmController::class, 'getDataByCategory'])->name('umkm.category');
            // Route::get('/search', [UmkmController::class, 'search'])->name('umkm.search');
            // Route::get('/detail/{umkm_id}', [UmkmController::class, 'getDetailUmkm'])->name('umkm.detail');

            Route::post('/edit/{umkm_id}', [UmkmController::class, 'editUmkm'])->name('umkm.edit');
            Route::post('/store', [UmkmController::class, 'storeUmkm'])->name('umkm.store');
            Route::get('/umkmku/{id_penduduk}', [UmkmController::class, 'umkmku'])->name('umkmku');
            Route::delete('/delete/{umkm_id}', [UmkmController::class, 'destroyUmkm'])->name('umkm.destroy');
            Route::post('/cancel/{umkm_id}', [UmkmController::class, 'cancelPengajuan'])->name('umkm.cancel');
            Route::get('/search-umkm', [UmkmController::class, 'umkmkuSearch'])->name('umkmku.search');

        });
    });

    Route::group(['middleware' => ['loginCheck:2']], function () {
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
                Route::post('/ajuan-umkm/reject', [AdminUmkmController::class, 'umkmReject'])->name('umkm.reject');
                Route::post('/ajuan-umkm/Accept', [AdminUmkmController::class, 'umkmAccept'])->name('umkm.accept');
                Route::post('/search-umkm', [AdminUmkmController::class, 'searchList'])->name('umkm-search');
                Route::post('/search-umkmA', [AdminUmkmController::class, 'searchAjuan'])->name('umkm-search-A');
                Route::post('/edit/{umkm_id}', [AdminUmkmController::class, 'editUmkm'])->name('umkm-edit');
                Route::delete('/delete/{umkm_id}', [AdminUmkmController::class, 'destroyUmkm'])->name('umkm-destroy');
                Route::get('/category', [AdminUmkmController::class, 'getDataByCategoryDaftar'])->name('filter-umkm-category');
                Route::post('/store-umkm', [AdminUmkmController::class, 'storeUmkmAdmin'])->name('store-umkm');
            });
            Route::prefix('persuratan')->group(function () {
                Route::get('/', [AdminPersuratanController::class, 'index'])->name('persuratan-admin');
                Route::get('/ajuan-persuratan', [AdminPersuratanController::class, 'ajuanPersuratan'])->name('ajuan-persuratan-admin');
                Route::get('/template-surat', [AdminPersuratanController::class, 'templateSurat'])->name('template-surat-admin');
            });
            Route::prefix('akun-admin')->group(function () {
                Route::get('/', [AdminAkunAdminController::class, 'index'])->name('akun-admin');
                Route::post('/', [AdminAkunAdminController::class, 'store'])->name('storeAkun-admin');
                Route::put('/{username}', [AdminAkunAdminController::class, 'update'])->name('updateAkun-admin');
                Route::delete('/{username}', [AdminAkunAdminController::class, 'destroy'])->name('destroyAkun-admin');
                Route::post('/filter-akun-admin', [AdminAkunAdminController::class, 'filter'])->name('filterAkun-admin');
                Route::post('/search-akun-admin', [AdminAkunAdminController::class, 'search'])->name('searchAkun-admin');
                Route::get('/kelola-level', [AdminAkunAdminController::class, 'indexAkun'])->name('akun-level');
                Route::post('/store-level', [AdminAkunAdminController::class, 'storeAkun'])->name('storeAkun-level');
                Route::put('/update-level/{username}', [AdminAkunAdminController::class, 'updateAkun'])->name('updateAkun-level');
                Route::delete('/destroy-level/{username}', [AdminAkunAdminController::class, 'destroyAkun'])->name('destroyAkun-level');
                Route::post('/search-level', [AdminAkunAdminController::class, 'searchAkun'])->name('searchAkun-level');
                Route::post('/filter-level', [AdminAkunAdminController::class, 'filterAkun'])->name('filterAkun-level');
            });
            Route::prefix('jadwal-kegiatan')->group(function () {
                Route::get('/', [AdminKegiatanController::class, 'index'])->name('jadwal-kegiatan-admin');
                Route::post('/', [AdminKegiatanController::class, 'storeKegiatan'])->name('storeKegiatan');
                Route::put('/{id}', [AdminKegiatanController::class, 'updateKegiatan'])->name('updateKegiatan');
                Route::delete('/{id}', [AdminKegiatanController::class, 'destroyKegiatan'])->name('destroyKegiatan');
                Route::get('/ajuan-kegiatan', [AdminKegiatanController::class, 'ajuanKegiatan'])->name('ajuan-kegiatan-admin');
                Route::get('/ajuan-kegiatan/accept', [AdminKegiatanController::class, 'acceptKegiatan'])->name('acceptKegiatan');
                Route::post('/ajuan-kegiatan/reject/{id}', [AdminKegiatanController::class, 'rejectKegiatan'])->name('rejectKegiatan');
            });
            Route::prefix('pengumuman')->group(function () {
                Route::get('/', [AdminPengumumanController::class, 'index'])->name('pengumuman-admin');
                Route::post('/', [AdminPengumumanController::class, 'tambahPengumuman'])->name('kirim-pengumuman');
                Route::put('/{id}', [AdminPengumumanController::class, 'updatePengumuman'])->name('update-pengumuman');
                Route::delete('/{id}', [AdminPengumumanController::class, 'destroyPengumuman'])->name('destroy-pengumuman');
            });
            Route::prefix('pengaduan')->group(function () {
                Route::get('/', [AdminPengaduanController::class, 'index'])->name('pengaduan-admin');
                Route::post('/', [AdminPengaduanController::class, 'addResponse'])->name('add-response-admin');
                Route::put('/{id}', [AdminPengaduanController::class, 'updateStatusOutside'])->name('update-status-outside');
                Route::delete('/delete/{id}', [AdminPengaduanController::class, 'destroyAduan'])->name('destroy-aduan-admin');
            });
        });
    });
    Route::group(['middleware' => ['loginCheck:1']], function () {
        Route::prefix('admin')->group(function () {
            Route::prefix('akun-admin')->group(function () {
                Route::get('/', [AdminAkunAdminController::class, 'index'])->name('akun-admin');
                Route::post('/', [AdminAkunAdminController::class, 'store'])->name('storeAkun-admin');
                Route::put('/{username}', [AdminAkunAdminController::class, 'update'])->name('updateAkun-admin');
                Route::delete('/{username}', [AdminAkunAdminController::class, 'destroy'])->name('destroyAkun-admin');
                Route::post('/filter-akun-admin', [AdminAkunAdminController::class, 'filter'])->name('filterAkun-admin');
                Route::post('/search-akun-admin', [AdminAkunAdminController::class, 'search'])->name('searchAkun-admin');
                Route::get('/kelola-level', [AdminAkunAdminController::class, 'indexAkun'])->name('akun-level');
                Route::post('/store-level', [AdminAkunAdminController::class, 'storeAkun'])->name('storeAkun-level');
                Route::put('/update-level/{username}', [AdminAkunAdminController::class, 'updateAkun'])->name('updateAkun-level');
                Route::delete('/destroy-level/{username}', [AdminAkunAdminController::class, 'destroyAkun'])->name('destroyAkun-level');
                Route::post('/search-level', [AdminAkunAdminController::class, 'searchAkun'])->name('searchAkun-level');
                Route::post('/filter-level', [AdminAkunAdminController::class, 'filterAkun'])->name('filterAkun-level');
            });
        });
    });
});

// Route::get('/token', function() {
//     return ['token' => csrf_token()];
// })->middleware('auth');

Route::group(['prefix' => 'profil'], function () {
    Route::get('/', [ProfilController::class, 'index'])->name('profil');
});

Route::group(['prefix' => 'profilku'], function () {
    Route::get('/', [ProfilkuController::class, 'index'])->name('profilku');
    Route::post('/', [ProfilkuController::class, 'updateAccount'])->name('update');
});
//Route Jadwal
Route::group(['prefix' => 'jadwal'], function () {
    Route::get('/', [JadwalController::class, 'index'])->name('jadwal');
    Route::post('/', [JadwalController::class, 'ajuanKegiatan'])->name('ajuanKegiatan');
});