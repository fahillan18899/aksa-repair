<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController as PPMController;
use App\Http\Controllers\User\PPM\DashboardUserController;
use App\Http\Controllers\User\PPM\PerbaikanTeregistrasiController;
use App\Http\Controllers\User\PPM\PermintaanBarangController;
use App\Http\Controllers\User\PPM\PesananUserController;
use App\Http\Controllers\User\PPM\StockOpnameUserController;
use Illuminate\Support\Facades\Route;
// Repair Aksa //
// Admin
use App\Http\Controllers\Admin\MonitoringMarketingController;
use App\Http\Controllers\Admin\MonitoringTeknisiController;
use App\Http\Controllers\Admin\MonitoringAkuntanController;
// Marketing
use App\Http\Controllers\Marketing\DashboardMarketingController;
use App\Http\Controllers\Marketing\DataBarangController;
use App\Http\Controllers\Marketing\InputanPekerjaanController;
use App\Http\Controllers\Marketing\SphController;
use App\Http\Controllers\Marketing\InvoiceController;
// Teknisi //
use App\Http\Controllers\Teknisi\DashboardTeknisiController;
use App\Http\Controllers\Teknisi\RepairController;
use App\Http\Controllers\Teknisi\InformasiController;
use App\Http\Controllers\Teknisi\QrController;
// Akuntan //
use App\Http\Controllers\Akuntan\DashboardAkuntanController;
use App\Http\Controllers\Akuntan\InvoicePermohonanController;
use App\Http\Controllers\Akuntan\UploadFaktureController;

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

Route::name('marketing.')->prefix('dashboard_marketing')->middleware(['auth'])->group(function() {
    Route::get('link_dashboard_marketing', [DashboardMarketingController::class, 'dashboard_marketing'])->name('dashboard');
    Route::get('link_inputan_pekerjaan', [InputanPekerjaanController::class, 'index'])->name('data.inputanPekerjaan');
    Route::get('link_data_barang', [DataBarangController::class, 'index'])->name('data.dataBarang');
    Route::get('link_sph', [SphController::class, 'index'])->name('data.sph');
    Route::get('link_invoice', [InvoiceController::class, 'index'])->name('data.invoice');
});

Route::name('teknisi.')->prefix('dashboard_teknisi')->middleware(['auth'])->group(function () {
    Route::get('link_dashboard_teknisi', [DashboardTeknisiController::class, 'dashboard_teknisi'])->name('dashboard');
    Route::get('link_repair', [RepairController::class, 'index'])->name('data.repair');
    Route::get('link_informasi', [InformasiController::class, 'index'])->name('data.informasi');
    Route::get('link_qr', [QrController::class, 'index'])->name('data.qr');

});

Route::name('akuntan.')->prefix('dashboard_akuntan')->middleware(['auth'])->group(function () {
    Route::get('link_dashboard_akuntan', [DashboardAkuntanController::class, 'dashboard_akuntan'])->name('dashboard');
    Route::get('link_invoice_permohonan', [InvoicePermohonanController::class, 'index'])->name('data.invoicePermohonan');
    Route::get('link_upload_fakture', [UploadFaktureController::class, 'index'])->name('data.uploadFakture');
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



Route::get('asd', [PPMController::class, 'notifyUser']);

require __DIR__ . '/other/user_route.php';
