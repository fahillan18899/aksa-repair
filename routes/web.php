<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataKelengkapanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PPM\HomeController as PPMController;
use App\Http\Controllers\Admin\PPM\RegistrasiAsetController;
use App\Http\Controllers\Admin\PPM\PerbaikanRegistrasiController;
use App\Http\Controllers\Admin\PPM\PengirimanRegistrasiController;
use App\Http\Controllers\Admin\PPM\PengembalianRegistrasiController;
use App\Http\Controllers\Admin\PPM\PenghapusanRegistrasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('dashboard')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('ppm')->group(function () {
        Route::get('/home', [DashboardController::class, 'index']);
        Route::get('/data_kelengkapan', [DashboardController::class, 'index']);
        
        Route::get('/data_inventaris', [PPMController::class, 'dataInventaris']);
        Route::get('/data_inventaris/cetak_aset/{id}', [PPMController::class, 'printDataInventaris']);
        Route::get('/data_inventaris/qr_qode/{id}', [PPMController::class, 'qrCodeGenerate']);

        Route::get('/registrasi', [RegistrasiAsetController::class, 'index'])->name('registrasi.index');
        Route::post('/registrasi', [RegistrasiAsetController::class, 'store']);
        Route::get('/registrasi/{registrasi}/edit', [RegistrasiAsetController::class, 'edit'])->name('registrasi');
        Route::put('/registrasi/{registrasi}', [RegistrasiAsetController::class, 'update']);
        Route::delete('/registrasi/{registrasi}', [RegistrasiAsetController::class, 'destroy']);


        Route::get('/aset_teregistrasi', [PerbaikanRegistrasiController::class, 'index'])->name('aset_teregistrasi.index');
        Route::post('/aset_teregistrasi', [PerbaikanRegistrasiController::class, 'store']);
        
        Route::get('/update_perbaikan/{id}/edit', [PerbaikanRegistrasiController::class, 'edit'])->name('update_perbaikan.edit');
        Route::put('/aset_teregistrasi/{id}', [PerbaikanRegistrasiController::class, 'update'])->name('update_perbaikan.update');
        Route::delete('/aset_teregistrasi/{id}', [PerbaikanRegistrasiController::class, 'destroy']);
        Route::get('/aset_teregistrasi/cetak_perbaikan/{id}', [PerbaikanRegistrasiController::class, 'cetak']);

        /**
         * pengembalian Aset Teregistrasi
         */
        Route::post('/tambah_pengiriman', [PengirimanRegistrasiController::class, 'store']);
        Route::get('/update_pengiriman/{id}/edit', [PengirimanRegistrasiController::class, 'edit'])->name('update_pengiriman.edit');
        Route::put('/update_pengiriman/{id}', [PengirimanRegistrasiController::class, 'update'])->name('update_pengiriman.update');
        Route::get('/aset_teregistrasi/cetak_pengiriman/{id}', [PengirimanRegistrasiController::class, 'cetak']);

        /**
         * pengembalian Aset Teregistrasi
         */     
        Route::post('/tambah_pengembalian', [PengembalianRegistrasiController::class, 'store']);
        Route::get('/update_pengembalian/{id}/edit', [PengembalianRegistrasiController::class, 'edit'])->name('update_pengembalian.edit');
        Route::put('/update_pengembalian/{id}', [PengembalianRegistrasiController::class, 'update'])->name('update_pengembalian.update');
        Route::get('/aset_teregistrasi/cetak_pengembalian/{id}', [PengembalianRegistrasiController::class, 'cetak']);

        /**
         * Penghapusan Aset Teregistrasi
         */
        Route::post('/tambah_penghapusan', [PenghapusanRegistrasiController::class, 'store']);
        Route::get('/update_penghapusan/{id}/edit', [PenghapusanRegistrasiController::class, 'edit'])->name('update_penghapusan.edit');
        Route::put('/update_penghapusan/{id}', [PenghapusanRegistrasiController::class, 'update'])->name('update_penghapusan.update');
        Route::get('/aset_teregistrasi/cetak_penghapusan/{id}', [PenghapusanRegistrasiController::class, 'cetak']);

        /**
         * Autofill
         */
        Route::get('/autofill/{idars}', [PPMController::class, 'autofill'])->name('autofill');
        Route::get('/autofill_pengiriman/{idars}', [PPMController::class, 'autofillPengiriman'])->name('autofillPengiriman');


        Route::get('/aset_unregistrasi', [DashboardController::class, 'index']);
        Route::get('/aset_non_alkes', [DashboardController::class, 'index']);
        Route::get('/lembar_pemeliharaan', [DashboardController::class, 'index']);
        Route::get('/jadwal_pemeliharaan', [DashboardController::class, 'index']);
        Route::get('/laporan_kegiatan', [DashboardController::class, 'index']);
        Route::get('/operator', [DashboardController::class, 'index']);
        Route::get('/stock_opname', [DashboardController::class, 'index']);
        Route::get('/analisis_data', [DashboardController::class, 'index']);
    });
});


Route::get('/', [AuthController::class, 'index'])->name('login');