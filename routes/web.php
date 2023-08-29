<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PPM\DataKelengkapanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PPM\RegistrasiAset;
use App\Http\Controllers\Admin\PPM\StockOpnameController;
use App\Http\Controllers\Admin\PPM\Operator;
use App\Http\Controllers\Admin\PPM\LaporanKegiatanController;
use App\Http\Controllers\Admin\PPM\AnalisisDataController;

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
        Route::resource('/lembar_pemeliharaan', DashboardController::class);
        Route::resource('/jadwal_pemeliharaan', DashboardController::class);
        Route::resource('/laporan_kegiatan', LaporanKegiatanController::class);
        Route::resource('/operator', Operator::class);
        Route::resource('/stock_opname', StockOpnameController::class);
        Route::resource('/analisis_data', AnalisisDataController::class);
    });
});


Route::get('/', [AuthController::class, 'index'])->name('login');