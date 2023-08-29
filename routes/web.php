<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataKelengkapanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PPM\RegistrasiAsetController;
use App\Http\Controllers\Admin\PPM\PerbaikanRegistrasiController;
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
        Route::get('/home', [DashboardController::class, 'index']);
        Route::get('/data_kelengkapan', [DashboardController::class, 'index']);
        Route::resource('/registrasi', RegistrasiAset::class);

        Route::get('/data_inventaris', [PPMController::class, 'dataInventaris']);
        Route::get('/data_inventaris/cetak_aset/{id}', [PPMController::class, 'printDataInventaris']);
        Route::get('/data_inventaris/qr_qode/{id}', [PPMController::class, 'qrCodeGenerate']);


        Route::get('/aset_teregistrasi', [PerbaikanRegistrasiController::class, 'index']);
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