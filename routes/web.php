<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HumanResourceController;
use App\Http\Controllers\Admin\PPM\AlatController;
use App\Http\Controllers\Admin\PPM\AnalisisDataController;
use App\Http\Controllers\Admin\PPM\AsetUnregistrasiController;
use App\Http\Controllers\Admin\PPM\DataAlatController;
use App\Http\Controllers\Admin\PPM\DataKelengkapanController;
use App\Http\Controllers\Admin\PPM\GedungController;
use App\Http\Controllers\Admin\PPM\HomeController;
use App\Http\Controllers\Admin\PPM\HomeController as PPMController;
use App\Http\Controllers\Admin\PPM\JadwalPemeliharaanController;
use App\Http\Controllers\Admin\PPM\LaporanKegiatanController;
use App\Http\Controllers\Admin\PPM\LembarPemeliharaanController;
use App\Http\Controllers\Admin\PPM\OperatorController;
use App\Http\Controllers\Admin\PPM\PengembalianRegistrasiController;
use App\Http\Controllers\Admin\PPM\PengembalianUnregistrasiController;
use App\Http\Controllers\Admin\PPM\PenghapusanRegistrasiController;
use App\Http\Controllers\Admin\PPM\PenghapusanUnregistrasiController;
use App\Http\Controllers\Admin\PPM\PengirimanRegistrasiController;
use App\Http\Controllers\Admin\PPM\PengirimanUnregistrasiController;
use App\Http\Controllers\Admin\PPM\PerbaikanRegistrasiController;
use App\Http\Controllers\Admin\PPM\PerbaikanUnregistrasiController;
use App\Http\Controllers\Admin\PPM\PermintaanBarangAdmin;
use App\Http\Controllers\Admin\PPM\RegistrasiAsetController;
use App\Http\Controllers\Admin\PPM\RuanganController;
use App\Http\Controllers\Admin\PPM\ScannerQrController;
use App\Http\Controllers\Admin\PPM\SOPAdministrasi;
use App\Http\Controllers\Admin\PPM\SOPPemakaianController;
use App\Http\Controllers\Admin\PPM\SOPPemeliharaanController;
use App\Http\Controllers\Admin\PPM\SOPPerbaikanController;
use App\Http\Controllers\Admin\PPM\UmurAlatController;
use App\Http\Controllers\Admin\PPM\AlatTerkalibrasiController;
use App\Http\Controllers\Admin\PPM\AlatKorektifController;
use App\Http\Controllers\Admin\PPM\StockOpnameController;
use App\Http\Controllers\Admin\PPM\TeknisiController;
use App\Http\Controllers\Admin\PPM\TambahJenisAlatController;
use App\Http\Controllers\Admin\PPM\TambahDistributorController;
use App\Http\Controllers\Admin\PPM\PesananController;
use App\Http\Controllers\Admin\PPM\PengggunaanSperpartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Teknisi\PPM\DashboardUserController as DashboardTeknisiController;
use App\Http\Controllers\Teknisi\PPM\JadwalPemeliharaanController as JadwalPemeliharaanTeknisiController;
use App\Http\Controllers\Teknisi\PPM\LembarPemeliharaanController as LembarPemeliharaanTeknisiController;
use App\Http\Controllers\Teknisi\PPM\PerbaikanTeregistrasiController as PerbaikanTeregistrasiTeknisiController;
use App\Http\Controllers\Teknisi\PPM\PerbaikanUserUnregistrasiController as PerbaikanUserUnregistrasiTeknisiController;
use App\Http\Controllers\Teknisi\PPM\StockOpnameUserController as StockOpnameUserTeknisiController;
use App\Http\Controllers\Teknisi\PPM\PengambilanSperpartTeknisiController;
use App\Http\Controllers\User\PPM\DashboardUserController;
use App\Http\Controllers\User\PPM\PerbaikanTeregistrasiController;
use App\Http\Controllers\User\PPM\PerbaikanUserUnregistrasiController;
use App\Http\Controllers\User\PPM\PermintaanBarangController;
use App\Http\Controllers\User\PPM\PesananUserController;
use App\Http\Controllers\User\PPM\StockOpnameUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    // menu dashboard SIMRS
    Route::get('home', [DashboardController::class, 'index'])->name('dashboard');

    // menu human serource
    Route::resource('human_resource', HumanResourceController::class);
    Route::get('export', [RegistrasiAsetController::class, 'export']);
    Route::post('import', [RegistrasiAsetController::class, 'import']);

    // menu PPM
    Route::prefix('ppm')->group(function () {
        // menu dashboard SIMRS
        Route::get('home', [PPMController::class, 'dashboard']);
        Route::resource('data_inventaris', DashboardController::class);
        Route::resource('aset_unregistrasi', AsetUnregistrasiController::class);
        Route::resource('aset_non_alkes', DashboardController::class);
        Route::resource('laporan_kegiatan', LaporanKegiatanController::class);
        Route::resource('scanner_qr', ScannerQrController::class);
        Route::resource('analisis_data', AnalisisDataController::class);
        Route::get('data_alat/{id}', [DataAlatController::class, 'index']);

        // menu SOP
        Route::resource('sop_pemakaian', SOPPemakaianController::class);
        Route::resource('sop_pemeliharaan', SOPPemeliharaanController::class);
        Route::resource('sop_perbaikan', SOPPerbaikanController::class);
        Route::resource('sop_administrasi', SOPAdministrasi::class);

        // menu data kelengkapan
        Route::get('data_kelengkapan', [DataKelengkapanController::class, 'index']);

        Route::resource('gedung', GedungController::class);
        Route::resource('alat', AlatController::class);
        Route::resource('teknisi', TeknisiController::class);
        Route::resource('ruangan', RuanganController::class);

        // menu registrasi
        Route::get('registrasi', [RegistrasiAsetController::class, 'oldIndex'])->name('registrasi.index');
        Route::get('registrasi-aset', [RegistrasiAsetController::class, 'index']);
        Route::post('registrasi', [RegistrasiAsetController::class, 'store']);
        Route::get('registrasi/{registrasi}/edit', [RegistrasiAsetController::class, 'edit'])->name('registrasi');
        Route::put('registrasi/{registrasi}', [RegistrasiAsetController::class, 'update']);
        Route::delete('registrasi/{registrasi}', [RegistrasiAsetController::class, 'destroy']);

        // menu data inventaris
        Route::resource('data_inventaris', DashboardController::class);
        Route::get('data_inventaris', [PPMController::class, 'dataInventaris']);
        Route::get('data_inventaris/cetak_aset/{id}', [PPMController::class, 'printDataInventaris']);
        Route::get('data_inventaris/detail/{id}', [PPMController::class, 'detailData']);
        Route::get('data_inventaris/qr_qode/{id}', [PPMController::class, 'qrCodeGenerate']);

        // menu pemeliharaan korektif
        Route::resource('aset_unregistrasi', AsetUnregistrasiController::class);
        Route::resource('aset_non_alkes', DashboardController::class);
        Route::get('aset_teregistrasi', [PerbaikanRegistrasiController::class, 'index'])->name('aset_teregistrasi.index');
        Route::post('aset_teregistrasi', [PerbaikanRegistrasiController::class, 'store']);
        Route::get('aset_teregistrasi/sperpart_perbaikan', [PerbaikanRegistrasiController::class, 'sperpart'])->name('sperpart_perbaikan.sperpart');

        // perbaikansan aset teregistrasi
        Route::get('update_perbaikan/{id}/edit', [PerbaikanRegistrasiController::class, 'edit'])->name('update_perbaikan.edit');
        Route::put('aset_teregistrasi/{id}', [PerbaikanRegistrasiController::class, 'update'])->name('update_perbaikan.update');
        Route::get('aset_teregistrasi/cetak_perbaikan/{id}', [PerbaikanRegistrasiController::class, 'cetak']);
        Route::delete('perbaikan_teregistrasi/{id}', [PerbaikanRegistrasiController::class, 'destroy']);
        Route::put('aset_teregistrasi/update/{id}', [PerbaikanRegistrasiController::class, 'updateStatusPerbaikan']);

        // Pengiriman Aset Teregistrasi
        Route::post('tambah_pengiriman', [PengirimanRegistrasiController::class, 'store']);
        Route::get('update_pengiriman/{id}/edit', [PengirimanRegistrasiController::class, 'edit'])->name('update_pengiriman.edit');
        Route::put('update_pengiriman/{id}', [PengirimanRegistrasiController::class, 'update'])->name('update_pengiriman.update');
        Route::get('aset_teregistrasi/cetak_pengiriman/{id}', [PengirimanRegistrasiController::class, 'cetak']);
        Route::delete('pengiriman_teregistrasi/{id}', [PengirimanRegistrasiController::class, 'destroy']);

        // pengembalian Aset Teregistrasi
        Route::post('tambah_pengembalian', [PengembalianRegistrasiController::class, 'store']);
        Route::get('update_pengembalian/{id}/edit', [PengembalianRegistrasiController::class, 'edit'])->name('update_pengembalian.edit');
        Route::put('update_pengembalian/{id}', [PengembalianRegistrasiController::class, 'update'])->name('update_pengembalian.update');
        Route::get('aset_teregistrasi/cetak_pengembalian/{id}', [PengembalianRegistrasiController::class, 'cetak']);
        Route::delete('pengembalian_teregistrasi/{id}', [PengembalianRegistrasiController::class, 'destroy']);

        // Penghapusan Aset Teregistrasi
        Route::post('/tambah_penghapusan', [PenghapusanRegistrasiController::class, 'store']);
        Route::get('/aset_teregistrasi/update_penghapusan/{id}/edit', [PenghapusanRegistrasiController::class, 'edit']);
        Route::put('/aset_teregistrasi/update_penghapusan/{id}', [PenghapusanRegistrasiController::class, 'update'])->name('update_penghapusan.update');
        Route::get('/aset_teregistrasi/cetak_penghapusan/{id}', [PenghapusanRegistrasiController::class, 'cetak']);
        Route::delete('penghapusan_teregistrasi/{id}', [PenghapusanRegistrasiController::class, 'destroy']);

        // Autofill
        Route::get('autofill/{idars}', [PPMController::class, 'autofill'])->name('autofill');
        Route::get('autofillpart/{idars}', [PPMController::class, 'autofillpart'])->name('autofillpart');
        Route::get('autofill_pengiriman/{idars}', [PPMController::class, 'autofillPengiriman'])->name('autofillPengiriman');
        Route::get('autofill_pengirimanUn/{id_perbaikan_un}', [PPMController::class, 'autofillPengirimanUn'])->name('autofillPengirimanUn');

        // perbaikan unregistrasi
        Route::get('aset_unregistrasi', [PerbaikanUnregistrasiController::class, 'index'])->name('aset_unregistrasi.index'); /*Tampilan*/
        Route::get('aset_unregistrasi/edit_perbaikan/{id}/edit', [PerbaikanUnregistrasiController::class, 'edit']); /*Tampilan Edit*/
        Route::put('aset_unregistrasi/edit_perbaikan/{id}', [PerbaikanUnregistrasiController::class, 'update'])->name('update_perbaikan_un.update');
        Route::post('tambah_unregistrasi', [PerbaikanUnregistrasiController::class, 'store']); /*fungsi tambah*/
        Route::get('aset_unregistrasi/cetak_perbaikan/{id}', [PerbaikanUnregistrasiController::class, 'cetak']); /*fungsi print*/
        Route::delete('perbaikan_unegistrasi/{id}', [PerbaikanUnregistrasiController::class, 'destroy']);
        Route::put('aset_unregistrasi/update/{id}', [PerbaikanUnregistrasiController::class, 'updateStatusPerbaikanUn']);

        //  pengiriman unregistrasi
        Route::post('tambah_pengiriman_un', [PengirimanUnregistrasiController::class, 'store']); /*fungsi tambah*/
        Route::get('aset_unregistrasi/edit_pengiriman/{id}/edit', [PengirimanUnregistrasiController::class, 'edit']); /*Tampilan Edit*/
        Route::put('aset_unregistrasi/edit_pengiriman/{id}', [PengirimanUnregistrasiController::class, 'update'])->name('update_pengiriman_un.update');
        Route::get('aset_unregistrasi/cetak_pengiriman/{id}', [PengirimanUnregistrasiController::class, 'cetak']); /*fungsi print*/
        Route::delete('pengiriman_unegistrasi/{id}', [PengirimanUnregistrasiController::class, 'destroy']);

        // pengembalian unregistrasi
        Route::post('tambah_pengembalian_un', [PengembalianUnregistrasiController::class, 'store']); /*fungsi tambah*/
        Route::get('aset_unregistrasi/edit_pengembalian/{id}/edit', [PengembalianUnregistrasiController::class, 'edit']); /*Tampilan Edit*/
        Route::put('aset_unregistrasi/edit_pengembalian/{id}', [PengembalianUnregistrasiController::class, 'update'])->name('update_pengembalian_un.update');
        Route::get('aset_unregistrasi/cetak_pengembalian/{id}', [PengembalianUnregistrasiController::class, 'cetak']); /*fungsi print*/
        Route::delete('pengembalian_unegistrasi/{id}', [PengembalianUnregistrasiController::class, 'destroy']);

        // penghapusan unregistrasi
        Route::post('/tambah_penghapusan_un', [PenghapusanUnregistrasiController::class, 'store']);
        Route::get('/aset_unregistrasi/edit_penghapusan/{id}/edit', [PenghapusanUnregistrasiController::class, 'edit']);/*Tampilan Edit*/
        Route::put('/aset_unregistrasi/edit_penghapusan/{id}', [PenghapusanUnregistrasiController::class, 'update'])->name('update_penghapusan_un.update');
        Route::get('/aset_unregistrasi/cetak_penggudangan/{id}', [PenghapusanUnregistrasiController::class, 'cetak']);/*fungsi print*/
        Route::delete('penghapusan_unregistrasi/{id}', [PenghapusanUnregistrasiController::class, 'destroy']);

        // menu pemeliharaan preventive
        Route::get('jadwal_pemeliharaan', [JadwalPemeliharaanController::class, 'index']);
        Route::get('jadwal_pemeliharaan', [JadwalPemeliharaanController::class, 'state']);
        Route::post('jadwal_pemeliharaan', [JadwalPemeliharaanController::class, 'store'])->name('jadwal_pemeliharaan.store');
        Route::get('jadwal_pemeliharaan/{id}', [JadwalPemeliharaanController::class, 'city']);
        Route::put('jadwal_pemeliharaan/update/{id}', [JadwalPemeliharaanController::class, 'updateStatus']);

        // lembar_pemeliharaan
        Route::resource('lembar_pemeliharaan', LembarPemeliharaanController::class);
        Route::get('lembar_pemeliharaan/cetak_pemeliharaan/{id}', [LembarPemeliharaanController::class, 'cetak']); /*fungsi print*/

        // menu laporan
        Route::get('laporan_kegiatan', [LaporanKegiatanController::class, 'index']);

        //  stock opname
        Route::resource('stock_opname', StockOpnameController::class);
        Route::resource('permintaan_barang_admin', PermintaanBarangAdmin::class);

        // operator
        Route::resource('operator', OperatorController::class);

        // Analis Data
        Route::get('analisis_data', [AnalisisDataController::class, 'index']);

        //Data Umur Alat
        Route::resource('data_umur_alat', UmurAlatController::class);

        //Data Alat Terkalibrasi
        Route::resource('data_alat_terkalibrasi', AlatTerkalibrasiController::class);

        //Data Alat Korektif
        Route::resource('data_alat_korektif', AlatKorektifController::class);

        // Tambah Jenis Alat
        Route::resource('/tambah_jenis_alat', TambahJenisAlatController::class);

        // Tambah Distributor
        Route::resource('/tambah_distributor', TambahDistributorController::class);
        Route::get('/getDistributor/{id}', [RegistrasiAsetController::class, 'getDistributor']);

        // Request Perbaikan
         Route::resource('/pesanan', PesananController::class);
         Route::get('/getPesanan/{id}', [PesananController::class, 'getPesanan']);

        // Penggunaan Sperpart Gudang / Stock opname
        Route::post('penggunaan_sperpart', [PengggunaanSperpartController::class, 'store']);

        // API internal datatable
        Route::get('aset', [RegistrasiAsetController::class, 'json'])->name('aa');


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
    Route::resource('perbaikan_unregistrasi', PerbaikanUserUnregistrasiController::class);
    Route::resource('permintaan_barang', PermintaanBarangController::class);
    Route::get('qr_qode/{id}', [PerbaikanTeregistrasiController::class, 'qrCodeGenerate']);
    Route::resource('stock_opname_user', StockOpnameUserController::class);
    Route::get('autofill/{idars}', [PPMController::class, 'autofill']);
    Route::resource('/pesanan_user', PesananUserController::class);
    Route::get('/getPesanan_user/{id}', [PesananUserController::class, 'getPesanan_user']);

    // API internal datatable
    Route::get('aset', [DashboardUserController::class, 'json'])->name('api-aset-user');

});

Route::name('teknisi.')->prefix('dashboard_teknisi')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardTeknisiController::class, 'dashboard_teknisi'])->name('dashboard');

    Route::resource('perbaikan_teregistrasi', PerbaikanTeregistrasiTeknisiController::class);
    Route::get('perbaikan_teregistrasi/update_perbaikan/{id}/edit', [PerbaikanTeregistrasiTeknisiController::class, 'edit_teknisi']);
    // Route::put('perbaikan_teregistrasi/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'update_teknisi']);   
    Route::get('perbaikan_teregistrasi/cetak_perbaikan/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'cetak_teknisi']);
    Route::get('/qr_qode/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'qrCodeGenerate']);
    Route::put('perbaikan_teregistrasi/update/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'updateStatusPerbaikanTeknisi']);
    Route::delete('perbaikan_teregistrasi/{id}', [PerbaikanTeregistrasiTeknisiController::class, 'destroy']);

    Route::resource('perbaikan_unregistrasi', PerbaikanUserUnregistrasiTeknisiController::class);
    Route::get('perbaikan_unregistrasi/edit_perbaikan/{id}/edit', [PerbaikanUserUnregistrasiTeknisiController::class, 'editun_teknisi']);
    // Route::put('perbaikan_unregistrasi/{id}', [PerbaikanUserUnregistrasiTeknisiController::class, 'update']);
    Route::get('perbaikan_unregistrasi/cetak_perbaikan/{id}', [PerbaikanUserUnregistrasiTeknisiController::class, 'cetak_teknisi']);
    Route::put('perbaikan_unregistrasi/update/{id}', [PerbaikanUserUnregistrasiTeknisiController::class, 'updateStatusPerbaikanUnTeknisi']);
    

    Route::get('jadwal_pemeliharaan', [JadwalPemeliharaanTeknisiController::class, 'state']);
    Route::post('jadwal_pemeliharaan', [JadwalPemeliharaanTeknisiController::class, 'store']);
    Route::get('jadwal_pemeliharaan/{id}', [JadwalPemeliharaanTeknisiController::class, 'city']);
    Route::put('jadwal_pemeliharaan/update/{id}', [JadwalPemeliharaanTeknisiController::class, 'updateStatusTeknisi']);
    Route::get('lembar_pemeliharaan', [LembarPemeliharaanTeknisiController::class, 'index']);
    Route::get('/lembar_pemeliharaan/cetak_pemeliharaan/{id}', [LembarPemeliharaanTeknisiController::class, 'cetak']);/*fungsi print*/
    Route::post('/lembar_pemeliharaan', [LembarPemeliharaanController::class, 'store']);

    // Penggunaan Sperpart Gudang / Stock opname (Teknisi)
    Route::post('penggunaan_sperpart', [PengambilanSperpartTeknisiController::class, 'store']);

    Route::get('/autofill/{idars}', [PPMController::class, 'autofill']);
    Route::get('autofillpart/{idars}', [PPMController::class, 'autofillpart'])->name('autofillpart');

    Route::resource('stock_opname_teknisi', StockOpnameUserTeknisiController::class);

    // API internal datatable
    Route::get('/aset', [DashboardTeknisiController::class, 'json'])->name('api-aset-teknisi');

});

Route::get('asd', [HomeController::class, 'notifyUser']);

require __DIR__ . '/other/user_route.php';
