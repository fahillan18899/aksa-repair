<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PPM\DataKelengkapanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PPM\RegistrasiAset;
use App\Http\Controllers\Admin\PPM\StockOpnameController;
use App\Http\Controllers\Admin\PPM\OperatorController;
use App\Http\Controllers\Admin\PPM\LaporanKegiatanController;
use App\Http\Controllers\Admin\PPM\AnalisisDataController;
use App\Http\Controllers\Admin\PPM\RegistrasiAsetController;
use App\Http\Controllers\Admin\PPM\PerbaikanRegistrasiController;
use App\Http\Controllers\Admin\PPM\LembarPemeliharaanController;
use App\Http\Controllers\Admin\PPM\JadwalPemeliharaanController;
use App\Http\Controllers\Admin\PPM\HomeController as PPMController;

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

        Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/data_kelengkapan', DataKelengkapanController::class);
        Route::resource('/registrasi', RegistrasiAset::class);
        Route::resource('/data_inventaris', DashboardController::class);
        Route::resource('/aset_teregistrasi', DashboardController::class);
        Route::resource('/aset_unregistrasi', DashboardController::class);
        Route::resource('/aset_non_alkes', DashboardController::class);
        Route::resource('/lembar_pemeliharaan', LembarPemeliharaanController::class);
        Route::resource('/jadwal_pemeliharaan', JadwalPemeliharaanController::class);
        Route::resource('/laporan_kegiatan', LaporanKegiatanController::class);
        Route::resource('/operator', OperatorController::class);
        Route::resource('/stock_opname', StockOpnameController::class);
        Route::resource('/analisis_data', AnalisisDataController::class);

        Route::get('/home', [DashboardController::class, 'index']);
        Route::resource('/registrasi', RegistrasiAset::class);

        Route::get('/data_inventaris', [PPMController::class, 'dataInventaris']);
        Route::get('/data_inventaris/cetak_aset/{id}', [PPMController::class, 'printDataInventaris']);
        Route::get('/data_inventaris/qr_qode/{id}', [PPMController::class, 'qrCodeGenerate']);


        Route::get('/aset_teregistrasi', [PerbaikanRegistrasiController::class, 'index']);
        Route::get('/aset_unregistrasi', [DashboardController::class, 'index']);
        Route::get('/aset_non_alkes', [DashboardController::class, 'index']);
        Route::get('/laporan_kegiatan', [LaporanKegiatanController::class, 'index']);
        Route::get('/operator', [OperatorController::class, 'index']);


    });
});


Route::get('/', [AuthController::class, 'index'])->name('login');