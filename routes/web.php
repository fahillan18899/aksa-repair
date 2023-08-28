<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataKelengkapanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PPM\RegistrasiAset;

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
        Route::get('/data_kelengkapan', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/registrasi', RegistrasiAset::class);
        Route::get('/data_inventaris', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/aset_teregistrasi', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/aset_unregistrasi', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/aset_non_alkes', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/lembar_pemeliharaan', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/jadwal_pemeliharaan', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/laporan_kegiatan', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/operator', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/stock_opname', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/analisis_data', [DashboardController::class, 'index'])->name('dashboard');
    });
});


Route::get('/', [AuthController::class, 'index'])->name('login');