<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PPM\DataKelengkapanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HumanResourceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PPM\StockOpnameController;
use App\Http\Controllers\Admin\PPM\LaporanKegiatanController;
use App\Http\Controllers\Admin\PPM\AnalisisDataController;
use App\Http\Controllers\Admin\PPM\LembarPemeliharaanController;
use App\Http\Controllers\Admin\PPM\JadwalPemeliharaanController;
use App\Http\Controllers\Admin\PPM\AsetUnregistrasiController;

use App\Http\Controllers\Admin\PPM\HomeController as PPMController;
use App\Http\Controllers\Admin\PPM\RegistrasiAsetController;
use App\Http\Controllers\Admin\PPM\PerbaikanRegistrasiController;
use App\Http\Controllers\Admin\PPM\PengirimanRegistrasiController;
use App\Http\Controllers\Admin\PPM\PengembalianRegistrasiController;
use App\Http\Controllers\Admin\PPM\PenghapusanRegistrasiController;
use App\Http\Controllers\Admin\PPM\PerbaikanUnregistrasiController;
use App\Http\Controllers\Admin\PPM\PengirimanUnregistrasiController;
use App\Http\Controllers\Admin\PPM\PengembalianUnregistrasiController;
use App\Http\Controllers\Admin\PPM\PenghapusanUnregistrasiController;
use App\Http\Controllers\Admin\PPM\GedungController;
use App\Http\Controllers\Admin\PPM\AlatController;
use App\Http\Controllers\Admin\PPM\RuanganController;
use App\Http\Controllers\Admin\PPM\TeknisiController;
use App\Http\Controllers\Admin\PPM\OperatorController;

use App\Http\Controllers\Admin\HumanResourcesController;
use App\Http\Controllers\User\PPM\DashboardUserController;
use App\Http\Controllers\User\PPM\PerbaikanTeregistrasiController;
use App\Http\Controllers\User\PPM\PerbaikanUserUnregistrasiController;
use App\Http\Controllers\User\PPM\StockOpnameUserController;

use App\Http\Controllers\AdminKalibrasi\BeritaAcaraController;
use App\Http\Controllers\AdminKalibrasi\HasilKalibrasi;
use App\Http\Controllers\AdminKalibrasi\HomeKalibrasiController;
use App\Http\Controllers\AdminKalibrasi\LembarKerjaController;


use App\Http\Controllers\AdminKalibrasi\TimbanganBayiController;



use App\Http\Controllers\AdminKalibrasi\PesananController;
use App\Http\Controllers\AdminKalibrasi\SertifikatController;
use App\Http\Controllers\AuthKalibrasiController;
use App\Http\Controllers\TeknisiController as ControllersTeknisiController;
use App\Http\Controllers\UserController;
use App\Models\LembarPemeliharaan;

// kalibrasi
use App\Http\Controllers\TeknisiKalibrasi\HomeController as Teknisi;
use App\Models\Admin\HumanResource;

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


Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('ppm')->group(function () {

        Route::get('/home', [PPMController::class, 'dashboard']);
        Route::resource('/data_inventaris', DashboardController::class);
        Route::resource('/aset_unregistrasi', AsetUnregistrasiController::class);
        Route::resource('/aset_non_alkes', DashboardController::class);
        Route::resource('/laporan_kegiatan', LaporanKegiatanController::class);
        Route::resource('/analisis_data', AnalisisDataController::class);

        // Route::resource('/jadwal_pemeliharaan', JadwalPemeliharaanController::class);
        Route::get('jadwal_pemeliharaan', [JadwalPemeliharaanController::class, 'state']);
        Route::post('jadwal_pemeliharaan', [JadwalPemeliharaanController::class, 'store'])->name('jadwal_pemeliharaan.store');
        Route::get('jadwal_pemeliharaan/{id}', [JadwalPemeliharaanController::class, 'city']);
        
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
         * Pengiriman Aset Teregistrasi
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
        Route::get('/autofill_pengirimanUn/{id_perbaikan_un}', [PPMController::class, 'autofillPengirimanUn'])->name('autofillPengirimanUn');

        /**
         * Analis Data
         */
        Route::get('/analisis_data', [AnalisisDataController::class, 'index']);

        /**
         * Data Kelengkapan
         */
        Route::get('/data_kelengkapan', [DataKelengkapanController::class, 'index']);
        Route::resource('gedung', GedungController::class);
        Route::resource('/alat', AlatController::class);
        Route::resource('/teknisi', TeknisiController::class);
        Route::resource('/ruangan', RuanganController::class);


        Route::get('/laporan_kegiatan', [LaporanKegiatanController::class, 'index']);
        
        /**
         * perbaikan unregistrasi
         */
        Route::get('/aset_unregistrasi', [PerbaikanUnregistrasiController::class, 'index'])->name('aset_unregistrasi.index');/*Tampilan*/
        Route::get('/aset_unregistrasi/edit_perbaikan/{id}/edit', [PerbaikanUnregistrasiController::class, 'edit']);/*Tampilan Edit*/
        Route::put('/aset_unregistrasi/edit_perbaikan/{id}', [PerbaikanUnregistrasiController::class, 'update'])->name('update_perbaikan_un.update');/*Update data */
        Route::post('/tambah_unregistrasi', [PerbaikanUnregistrasiController::class, 'store']);/*fungsi tambah*/
        Route::get('/aset_unregistrasi/cetak_perbaikan/{id}', [PerbaikanUnregistrasiController::class, 'cetak']);/*fungsi print*/

        /**
         * pengiriman unregistrasi
         */
        Route::post('/tambah_pengiriman_un', [PengirimanUnregistrasiController::class, 'store']);/*fungsi tambah*/
        Route::get('/aset_unregistrasi/edit_pengiriman/{id}/edit', [PengirimanUnregistrasiController::class, 'edit']);/*Tampilan Edit*/
        Route::put('/aset_unregistrasi/edit_pengiriman/{id}', [PengirimanUnregistrasiController::class, 'update'])->name('update_pengiriman_un.update');/*Fungsi Edit*/
        Route::get('/aset_unregistrasi/cetak_pengiriman/{id}', [PengirimanUnregistrasiController::class, 'cetak']);/*fungsi print*/
        
        
        /**
         * pengembalian unregistrasi
         */
        Route::post('/tambah_pengembalian_un', [PengembalianUnregistrasiController::class, 'store']);/*fungsi tambah*/
        Route::get('/aset_unregistrasi/edit_pengembalian/{id}/edit', [PengembalianUnregistrasiController::class, 'edit']);/*Tampilan Edit*/
        Route::put('/aset_unregistrasi/edit_pengembalian/{id}', [PengembalianUnregistrasiController::class, 'update'])->name('update_pengembalian_un.update');/*Fungsi Edit*/

        Route::get('/aset_unregistrasi/cetak_pengembalian/{id}', [PengembalianUnregistrasiController::class, 'cetak']);/*fungsi print*/
        /**
         * penghapusan unregistrasi
         */
        Route::post('/tambah_penghapusan_un', [PenghapusanUnregistrasiController::class, 'store']);
        Route::get('/aset_unregistrasi/edit_penghapusan/{id}/edit', [PenghapusanUnregistrasiController::class, 'edit']);/*Tampilan Edit*/
        Route::put('/aset_unregistrasi/edit_penghapusan/{id}', [PenghapusanUnregistrasiController::class, 'update'])->name('update_penghapusan_un.update');/*Update data */
        Route::get('/aset_unregistrasi/cetak_penggudangan/{id}', [PenghapusanUnregistrasiController::class, 'cetak']);/*fungsi print*/
        
        /**
         * stock opname
         */
        Route::resource('/stock_opname', StockOpnameController::class);

        /**

         * operator
         */
        Route::resource('operator', OperatorController::class);

        /**
         * penghapusan unregistrasi
         */
        Route::resource('lembar_pemeliharaan', LembarPemeliharaanController::class);
        
        
    });


    Route::resource('human_resource', HumanResourcesController::class);

    /**
     * penghapusan unregistrasi
     */
    Route::resource('human_resource', HumanResourceController::class);

});

Route::prefix('dashboard_user')
->middleware(['auth'])
    ->group(function () {
        Route::get('/', [DashboardUserController::class, 'index'])->name('user.dashboard');

        Route::resource('perbaikan_teregistrasi', PerbaikanTeregistrasiController::class);

        Route::resource('perbaikan_unregistrasi', PerbaikanUserUnregistrasiController::class);
        Route::get('/qr_qode/{id}', [PerbaikanTeregistrasiController::class, 'qrCodeGenerate']);
        Route::resource('stock_opname_user', StockOpnameUserController::class);

    Route::get('/autofill/{idars}', [PPMController::class, 'autofill']);

    });


Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'processLogin'])->name('login-proccess');
Route::get('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/register', [AuthController::class, 'processRegistration']);

Route::post('logout', [AuthController::class, 'logout'])
->name('logout')
->middleware('auth');

/**Kalibrasi */
Route::prefix('kalibrasi')
->middleware(['auth'])
    ->group(function () {

    Route::get('/home', [HomeKalibrasiController::class, 'index']);
    Route::get('/alat_ukur', [HomeKalibrasiController::class, 'alatUkur']);
    Route::post('/alat_ukur', [HomeKalibrasiController::class, 'store']);
    Route::resource('berita_acara', BeritaAcaraController::class);
    Route::resource('lembar_kerja', LembarKerjaController::class);
    Route::resource('timbangan_bayi', TimbanganBayiController::class);
    Route::get('cetak/{id}', [LembarKerjaController::class, 'cetak']);/*fungsi print*/

    Route::resource('pesanan', PesananController::class);
    Route::resource('teknisi_k', ControllersTeknisiController::class);
    Route::get('/sertifikat', [SertifikatController::class, 'index']);
    Route::post('sphygmomanometer', [LembarKerjaController::class, 'sphygmomanometer']);
});
Route::prefix('dashboard_teknisi')->middleware(['auth'])->group(function () {

    Route::get('/', [Teknisi::class, 'index']);
});

Route::prefix('kalibrasi')->group(function () {
    Route::get('/', [AuthKalibrasiController::class, 'index'])->name('login-kalibrasi');
    Route::post('/', [AuthController::class, 'processLogin'])->name('login-proccess-kalibrasi');
    Route::get('/register', [AuthController::class, 'registration'])->name('register-kalibrasi');
    Route::post('/register', [AuthController::class, 'processRegistration-kalibrasi']);
});