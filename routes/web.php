<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController as PPMController;
use App\Http\Controllers\Teknisi\PPM\DashboardUserController as DashboardTeknisiController;
use App\Http\Controllers\Teknisi\PPM\JadwalPemeliharaanController as JadwalPemeliharaanTeknisiController;
use App\Http\Controllers\Teknisi\PPM\LembarPemeliharaanController as LembarPemeliharaanTeknisiController;
use App\Http\Controllers\Teknisi\PPM\PerbaikanTeregistrasiController as PerbaikanTeregistrasiTeknisiController;
use App\Http\Controllers\Teknisi\PPM\StockOpnameUserController as StockOpnameUserTeknisiController;
use App\Http\Controllers\Teknisi\PPM\PengambilanSperpartTeknisiController;
use App\Http\Controllers\Teknisi\PPM\PesananTeknisiController;
use App\Http\Controllers\Teknisi\PPM\ViewTabelController;
use App\Http\Controllers\Teknisi\PPM\ViewTabelController2;
use App\Http\Controllers\Teknisi\PPM\ViewTabelController3;
use App\Http\Controllers\User\PPM\DashboardUserController;
use App\Http\Controllers\User\PPM\PerbaikanTeregistrasiController;
use App\Http\Controllers\User\PPM\PermintaanBarangController;
use App\Http\Controllers\User\PPM\PesananUserController;
use App\Http\Controllers\User\PPM\StockOpnameUserController;
use Illuminate\Support\Facades\Route;
// Repair Aksa
use App\Http\Controllers\Admin\MonitoringMarketingController;
use App\Http\Controllers\Admin\MonitoringTeknisiController;
use App\Http\Controllers\Admin\MonitoringAkuntanController;

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    // menu dashboard SIMRS

    // menu PPM
    Route::prefix('ppm')->group(function () {
    // ROUTE DASHBOARD
        Route::get('home', [PPMController::class, 'dashboard']);

        // Monitoring Marketing //
        Route::get('link_input_pekerjaan', [MonitoringMarketingController::class, 'getInputPekerjaan'])->name('inputPekerjaan.data');
        Route::get('link_data_barang', [MonitoringMarketingController::class, 'getDataBarang'])->name('dataBarang.data');
        Route::get('link_sph', [MonitoringMarketingController::class, 'getSph'])->name('sph.data');
        Route::get('link_invoice', [MonitoringMarketingController::class, 'getInvoice'])->name('invoice.data');

        // Monitoring Teknisi //
        Route::get('link_approval', [MonitoringTeknisiController::class, 'getApproval'])->name('approval.data');
        Route::get('link_alat_kembali', [MonitoringTeknisiController::class, 'getAlatKembali'])->name('alatKembali.data');
        Route::get('link_informasi', [MonitoringTeknisiController::class, 'getInformasi'])->name('informasi.data');
        Route::get('link_cetak_qr', [MonitoringTeknisiController::class, 'getQr'])->name('qrGenerate.data');
        
        //Monitoring Akuntan //
        Route::get('link_invoice_akun', [MonitoringAkuntanController::class, 'getInvoiceAkun'])->name('invoiceAkuntan.data');
        Route::get('link_vakture', [MonitoringAkuntanController::class, 'getVakture'])->name('vakture.data');

    });

    // menu generate QR
    Route::get('genarete_qr', [DashboardController::class, "qrGen"]);
    Route::get('create-generete-qr', [DashboardController::class, "createQrGen"]);
    Route::post('create-generete-qr', [DashboardController::class, "storeQrGen"]);
});

Route::prefix('dashboard_user')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardUserController::class, 'index'])->name('user.dashboard');
    Route::resource('perbaikan_teregistrasi', PerbaikanTeregistrasiController::class);
    Route::delete('perbaikan_teregistrasi/{id}', [PerbaikanTeregistrasiController::class, 'destroy']);
    Route::resource('permintaan_barang', PermintaanBarangController::class);
    Route::get('qr_qode/{id}', [PerbaikanTeregistrasiController::class, 'qrCodeGenerate']);
    Route::resource('stock_opname_user', StockOpnameUserController::class);
    Route::get('autofill/{idars}', [PPMController::class, 'autofill']);
    Route::resource('/pesanan_user', PesananUserController::class);
    Route::get('/getPesanan_user/{id}', [PesananUserController::class, 'getPesanan_user']);

    //Fetch
    Route::get('data_perbaikan_user', [DashboardUserController::class, 'getPerbaikanUser'])->name('perbaikanUser.data');
    Route::get('count_permintaan_user', [DashboardUserController::class, 'countPermintaan'])->name('permintaanUser.count');
    Route::get('count_perbaikan_user', [DashboardUserController::class, 'countPerbaikan'])->name('perbaikanUser.count');

    // API internal datatable
    Route::get('aset', [DashboardUserController::class, 'json'])->name('api-aset-user');

});

Route::name('teknisi.')->prefix('dashboard_teknisi')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardTeknisiController::class, 'dashboard_teknisi'])->name('dashboard');
    Route::resource('view_tabelT', ViewTabelController::class);
    Route::resource('view_tabelT2', ViewTabelController2::class);
    Route::resource('view_tabelT3', ViewTabelController3::class);

    //Fetch
    Route::get('data_permintaan_user', [DashboardTeknisiController::class, 'getPermintaanUser'])->name('permintaanUser.data');
    Route::get('data_perbaikan_teknisi', [DashboardTeknisiController::class, 'getPerbaikanTeknisi'])->name('perbaikanTeknisi.data');
    Route::get('count_permintaan_teknisi', [DashboardTeknisiController::class, 'countPermintaan'])->name('permintaanTeknisi.count');
    Route::get('count_perbaikan_teknisi', [DashboardTeknisiController::class, 'countPerbaikan'])->name('perbaikanTeknisi.count');

    Route::get('perbaikan_teknisi', [PerbaikanTeregistrasiTeknisiController::class, 'index'])->name('perbaikan_teknisi.index');
    Route::post('perbaikan_teknisi/store', [PerbaikanTeregistrasiTeknisiController::class, 'store'])->name('perbaikan_teknisi.store');
    Route::post('perbaikan_teknisi/create', [PerbaikanTeregistrasiTeknisiController::class, 'create'])->name('perbaikan_teknisi.create');
    Route::get('perbaikan_teknisi/update_perbaikan/{id}/edit', [PerbaikanTeregistrasiTeknisiController::class, 'edit_teknisi']);
    Route::put('perbaikan_teknisi/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'update_teknisi']);   
    Route::get('perbaikan_teregistrasi/cetak_perbaikan/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'cetak_teknisi']);
    Route::get('/qr_qode/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'qrCodeGenerate']);
    Route::put('perbaikan_teknisi/update/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'updateStatusPerbaikanTeknisi']);
    Route::put('perbaikan_teknisi/kondisi/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'updateKondisiAlat']);

    Route::get('jadwal_pemeliharaan', [JadwalPemeliharaanTeknisiController::class, 'state']);
    Route::post('jadwal_pemeliharaan', [JadwalPemeliharaanTeknisiController::class, 'store']);
    Route::get('jadwal_pemeliharaan/{id}', [JadwalPemeliharaanTeknisiController::class, 'city']);
    Route::put('jadwal_pemeliharaan/update/{id}', [JadwalPemeliharaanTeknisiController::class, 'updateStatusTeknisi']);
    Route::get('lembar_pemeliharaan', [LembarPemeliharaanTeknisiController::class, 'index']);
    Route::get('/lembar_pemeliharaan/cetak/{id}', [LembarPemeliharaanTeknisiController::class, 'cetak']);/*fungsi print*/
    Route::post('/lembar_pemeliharaan', [LembarPemeliharaanTeknisiController::class, 'store']);

    //Fetch data pesanan user
    Route::get('/dashboard_teknisi/perbaikan_teknisi/data', [PesananTeknisiController::class, 'getPesanan'])->name('pesanan.data');

    // Penggunaan Sperpart Gudang / Stock opname (Teknisi)
    Route::post('penggunaan_sperpart', [PengambilanSperpartTeknisiController::class, 'store']);

    Route::get('/autofill/{idars}', [PPMController::class, 'autofill']);
    Route::get('autofillpart/{idars}', [PPMController::class, 'autofillpart'])->name('autofillpart');
    Route::get('autofill_pelihara/{idars}', [PPMController::class, 'autofill_pelihara']);

    Route::resource('stock_opname_teknisi', StockOpnameUserTeknisiController::class);

});

Route::get('asd', [PPMController::class, 'notifyUser']);

require __DIR__ . '/other/user_route.php';
