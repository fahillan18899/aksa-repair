<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PPM\DataAlatController;
use App\Http\Controllers\Admin\PPM\HomeController;
use App\Http\Controllers\Admin\PPM\HomeController as PPMController;
use App\Http\Controllers\Admin\PPM\PermintaanBarangAdmin;
use App\Http\Controllers\Admin\PPM\RegistrasiAsetController;
use App\Http\Controllers\Admin\PPM\ScannerQrController;
use App\Http\Controllers\Admin\PPM\UmurAlatController;
use App\Http\Controllers\Admin\PPM\StockOpnameController;
use App\Http\Controllers\Admin\PPM\TambahJenisAlatController;
use App\Http\Controllers\Admin\PPM\TambahDistributorController;
use App\Http\Controllers\Admin\PPM\PesananController;
use App\Http\Controllers\Admin\PPM\ViewTableController;
use App\Http\Controllers\Admin\PPM\ViewTableController2;
use App\Http\Controllers\Admin\PPM\ViewTableController3;
use App\Http\Controllers\Admin\PPM\QrController;
use App\Http\Controllers\AuthController;
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

    // menu human serource
    Route::get('export', [RegistrasiAsetController::class, 'export']);
    Route::post('import', [RegistrasiAsetController::class, 'import']);

    // menu PPM
    Route::prefix('ppm')->group(function () {
    // ROUTE DASHBOARD
        Route::get('home', [PPMController::class, 'dashboard']);
        Route::resource('data_inventaris', DashboardController::class);
        Route::resource('aset_non_alkes', DashboardController::class);
        Route::resource('scanner_qr', ScannerQrController::class);
        Route::get('data_alat/{id}', [DataAlatController::class, 'index']);
        Route::resource('view_tabel', ViewTableController::class);
        Route::resource('view_tabel2', ViewTableController2::class);
        Route::resource('view_tabel3', ViewTableController3::class);
        Route::get('/dashboard/qr/form', [QrController::class, 'form'])->name('qr.form');
        Route::post('qr/generate', [QrController::class, 'generate'])->name('qr.generate');

        //Fetch  data realtime table dashboard
        Route::get('data_perbaikan', [PPMController::class, 'getPerbaikan'])->name('perbaikan.data');
        Route::get('data_pemeliharaan', [PPMController::class, 'getPemeliharaan'])->name('pemeliharaan.data');
        Route::get('data_permintaan', [PPMController::class, 'getPermintaan'])->name('permintaan.data');
        Route::get('count_permintaan', [PPMController::class, 'countPermintaan'])->name('permintaan.count');
        Route::get('count_perbaikan', [PPMController::class, 'countPerbaikan'])->name('perbaikan.count');

        // Monitoring Marketing //
        Route::get('link_input_pekerjaan', [MonitoringMarketingController::class, 'getInputPekerjaan'])->name('inputPekerjaan.data');
        Route::get('link_data_barang', [MonitoringMarketingController::class, 'getDataBarang'])->name('dataBarang.data');
        Route::get('link_sph', [MonitoringMarketingController::class, 'getSph'])->name('sph.data');
        Route::get('link_invoice', [MonitoringMarketingController::class, 'getInvoice'])->name('invoice.data');

        // Monitoring Teknisi //
        Route::get('link_approval', [MonitoringTeknisiController::class, 'getApproval'])->name('approval.data');
        Route::get('link_alat_kembali', [MonitoringTeknisiController::class, 'getAlatKembali'])->name('alatKembali.data');
        Route::get('link_informasi', [MOnitoringTeknisiController::class, 'getInformasi'])->name('informasi.data');
        Route::get('link_cetak_qr', [MonitoringTeknisiController::class, 'getQr'])->name('qrGenerate.data');
        
        //Monitoring Akuntan //
        Route::get('link_invoice_akun', [MonitoringAkuntanController::class, 'getInvoiceAkun'])->name('invoiceAkuntan.data');
        Route::get('link_vakture', [MonitoringAkuntanController::class, 'getVakture'])->name('vakture.data');

        // menu registrasi
        Route::get('registrasi', [RegistrasiAsetController::class, 'oldIndex']);
        Route::get('registrasi-aset', [RegistrasiAsetController::class, 'index'])->name('registrasi.index');
        Route::post('registrasi', [RegistrasiAsetController::class, 'store']);
        Route::get('registrasi/{registrasi}/edit', [RegistrasiAsetController::class, 'edit'])->name('registrasi');
        Route::put('registrasi/{registrasi}', [RegistrasiAsetController::class, 'update']);
        Route::delete('registrasi/{registrasi}', [RegistrasiAsetController::class, 'destroy']);
        Route::get('/registrasi-aset/getNomklatur/{id}', [RegistrasiAsetController::class, 'getNomklatur']);

        // menu data inventaris
        Route::resource('data_inventaris', DashboardController::class);
        Route::get('data_inventaris', [PPMController::class, 'dataInventaris']);
        Route::get('data_inventaris/cetak_aset/{id}', [PPMController::class, 'printDataInventaris']);
        Route::get('data_inventaris/detail/{id}', [PPMController::class, 'detailData']);
        Route::get('data_inventaris/tabel_perbaikan/{id}', [PPMController::class, 'tabelKerusakan']);
        Route::get('data_inventaris/qr_qode/{id}', [PPMController::class, 'qrCodeGenerate']);

        // Autofill
        Route::get('autofill/{idars}', [PPMController::class, 'autofill'])->name('autofill');
        Route::get('autofill_pelihara/{idars}', [PPMController::class, 'autofill_pelihara']);
        Route::get('autofillpart/{idars}', [PPMController::class, 'autofillpart'])->name('autofillpart');
        Route::get('autofill_pengiriman/{idars}', [PPMController::class, 'autofillPengiriman'])->name('autofillPengiriman');
        Route::get('autofill_pengirimanUn/{id_perbaikan_un}', [PPMController::class, 'autofillPengirimanUn'])->name('autofillPengirimanUn');

        //  stock opname
        Route::resource('stock_opname', StockOpnameController::class);
        Route::resource('permintaan_barang_admin', PermintaanBarangAdmin::class);

        //Data Umur Alat
        Route::resource('data_umur_alat', UmurAlatController::class);

        // Tambah Jenis Alat
        Route::resource('/tambah_jenis_alat', TambahJenisAlatController::class);

        // Tambah Distributor
        Route::resource('/tambah_distributor', TambahDistributorController::class);
        Route::get('/getDistributor/{id}', [RegistrasiAsetController::class, 'getDistributor'])->name('getDistributor');


        // Request Perbaikan
         Route::resource('/pesanan', PesananController::class);
         Route::get('/getPesanan/{id}', [PesananController::class, 'getPesanan']);

        // API internal datatable
        Route::get('aset', [RegistrasiAsetController::class, 'json'])->name('dataAset');


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

    // API internal datatable
    // Route::get('/aset', [DashboardTeknisiController::class, 'json'])->name('api-aset-teknisi');

});

Route::get('asd', [HomeController::class, 'notifyUser']);

require __DIR__ . '/other/user_route.php';
