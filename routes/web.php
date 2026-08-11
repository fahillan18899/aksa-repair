<?php


use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// Repair Aksa //
use App\Http\Controllers\DataAlatController;
// Admin
use App\Http\Controllers\Admin\MonitoringMarketingController;
use App\Http\Controllers\Admin\MonitoringTeknisiController;
use App\Http\Controllers\Admin\MonitoringAkuntanController;
use App\Http\Controllers\Admin\RekapController;
use App\Http\Controllers\Admin\OperatorController;
// Marketing
use App\Http\Controllers\Marketing\DashboardMarketingController;
use App\Http\Controllers\Marketing\DataBarangController;
use App\Http\Controllers\Marketing\InputanPekerjaanController;
use App\Http\Controllers\Marketing\SphController;
use App\Http\Controllers\Marketing\InvoiceController;
// Teknisi //
use App\Http\Controllers\Teknisi\DashboardTeknisiController;
use App\Http\Controllers\Teknisi\RepairController;
use App\Http\Controllers\Teknisi\SuratTerimaController;
use App\Http\Controllers\Teknisi\InformasiController;
use App\Http\Controllers\Teknisi\BeritaAcaraController;
use App\Http\Controllers\Teknisi\QrController;
// Akuntan //
use App\Http\Controllers\Akuntan\DashboardAkuntanController;
use App\Http\Controllers\Akuntan\InvoicePermohonanController;
use App\Http\Controllers\Akuntan\UploadFaktureController;
//PPM//
use App\Http\Controllers\PPM\InventarisController;
use App\Http\Controllers\PPM\PerbaikanController;
use App\Http\Controllers\PPM\PeliharaController;
use App\Http\Controllers\PPM\MonitoringController;
//PPM//MASTER//
use App\Http\Controllers\PPM\Master\DashboardController;

//Data Scan
Route::get('data_alat/{id}', [DataAlatController::class, 'index'])->name('scan.dataAlat');
Route::get('scan', [QrController::class, 'scan'])->name('scan');
Route::get('/qr-menu/{id}', [QrController::class, 'menu'])->name('qr.menu');
Route::resource('inventaris', InventarisController::class);
Route::get('/inventaris/edit/{qr}', [InventarisController::class, 'editInv'])->name('editInv');
Route::get('perbaikan/data/{qr}',[PerbaikanController::class, 'data'])->name('perbaikan.data');
Route::put('perbaikan/status/{id}', [PerbaikanController::class, 'status'])->name('perbaikan.status');
Route::resource('perbaikan', PerbaikanController::class);
Route::get('pelihara/data/{qr}', [PeliharaController::class, 'data'])->name('pelihara.data');
Route::resource('pelihara', PeliharaController::class);

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    // menu dashboard SIMRS

    // menu PPM
    Route::prefix('ppm')->group(function () {
    // ROUTE DASHBOARD
        Route::get('home', [HomeController::class, 'dashboard']);
        Route::get('instansi_detail/{instansi}', [HomeController::class, 'insDetail'])->name('ins.detail');

        //Fetch Dashboard
        Route::get('api_repair_selesai', [HomeController::class, 'repair_selesai'])->name('api1');
        Route::get('api_repair_proses', [HomeController::class, 'repair_proses'])->name('api2');
        Route::get('api_rapair_count1', [HomeController::class, 'count1'])->name('count.selesai');
        Route::get('api_repair_count2', [HomeController::class, 'count2'])->name('count.proses');

        // Monitoring Marketing //
        Route::resource('monitoring_marketing', MonitoringMarketingController::class);
        Route::get('data_barang', [MonitoringMarketingController::class, 'index2'])->name('monitoring_marketing.index2');
        Route::get('monitoring_sph', [MonitoringMarketingController::class, 'index3'])->name('monitoring_marketing.index3');
        Route::get('link_sph/sph_doc', [MonitoringMarketingController::class, 'sphDoc'])->name('sph.doc');
        Route::get('link_sph/view/{id}', [MonitoringMarketingController::class, 'viewSph'])->name('sph.view');
        Route::get('monitoring_invoice', [MonitoringMarketingController::class, 'index4'])->name('monitoring_marketing.index4');
        Route::get('link_invoice/view/{id}', [MonitoringMarketingController::class, 'viewInvo'])->name('invoice.view');
        Route::get('link_invoice/invoice_doc', [MonitoringMarketingController::class, 'invoiceDoc'])->name('invoice.doc');

        // Monitoring Teknisi //
        Route::get('link_approval', [MonitoringTeknisiController::class, 'getApproval'])->name('approval.data');
        Route::get('link_alat_kembali', [MonitoringTeknisiController::class, 'getAlatKembali'])->name('alatKembali.data');
        Route::get('link_informasi', [MonitoringTeknisiController::class, 'getInformasi'])->name('informasi.data');
        Route::get('link_berita_acara', [MonitoringTeknisiController::class, 'getBeritaAcara'])->name('beritaAcara.data');
        Route::get('link_berita_acara/view/{id}', [MonitoringTeknisiController::class, 'viewBa'])->name('beritaAcara.view');
        Route::get('link_berita_acara/ba_doc', [MonitoringTeknisiController::class, 'baDoc'])->name('ba.doc');
        
        //Monitoring Akuntan //
        Route::get('link_invoice_akun', [MonitoringAkuntanController::class, 'getInvoiceAkun'])->name('invoiceAkuntan.data');
        Route::get('link_invoice_akun/view/{id}', [MonitoringAkuntanController::class, 'viewInv'])->name('invoiceAkuntan.viewInv');
        Route::get('link_invoice_akun/invoice_akun_doc', [MonitoringAkuntanController::class, 'invoDoc'])->name('invo.doc');
        Route::get('link_vakture', [MonitoringAkuntanController::class, 'getVakture'])->name('vakture.data');

        //Report Rekap//
        Route::resource('rekap', RekapController::class);

        //Operator//
        Route::resource('operator', OperatorController::class);


    });
});

Route::name('marketing.')->prefix('dashboard_marketing')->middleware(['auth'])->group(function() {
    Route::get('link_dashboard_marketing', [DashboardMarketingController::class, 'dashboard_marketing'])->name('dashboard');
    Route::get('link_data_barang', [DataBarangController::class, 'index'])->name('data.dataBarang');
    //Fetch dashboard marketing //
        Route::get('fetch_selsai', [DashboardMarketingController::class, 'fetch_selesai'])->name('fetch.selesai');
        Route::get('fetch_proses', [DashboardMarketingController::class, 'fetch_proses'])->name('fetch.proses');
        Route::get('count_selesai', [DashboardMarketingController::class, 'count_selesai'])->name('count.selesaiM');
        Route::get('count_proses', [DashboardMarketingController::class, 'count_proses'])->name('count.prosesM');
    //Fetch dashboard marketing end//

    // Input Pekerjaan //
        Route::resource('input_pekerjaan', InputanPekerjaanController::class);
        Route::get('tambah_instansi', [InputanPekerjaanController::class, 'instansi'])->name('data.instansi');
        Route::post('tambah_instansi', [InputanPekerjaanController::class, 'postIns'])->name('post.ins');
        Route::get('tambah_instansi/edit/{id}', [InputanPekerjaanController::class, 'editIns'])->name('edit.ins');
        Route::put('tambah_instansi/update/{id}', [InputanPekerjaanController::class, 'updateIns'])->name('update.ins');
        Route::delete('tambah_instansi/{id}', [InputanPekerjaanController::class, 'deleteIns'])->name('delete.ins');
    // Input Pekerjaan end//
    
    // SPH //
        Route::resource('sph', SphController::class);
        Route::get('link_sph_history', [SphController::class, 'history'])->name('history.sph');
        Route::get('link_sph_history/view/{id}', [SphController::class, 'view'])->name('view.sph');
        Route::get('link_sph/sph_old', [SphController::class, 'sphOld'])->name('sphOld.sph');
        Route::post('link_sph/upload', [SphController::class, 'upload'])->name('upload.sph');
        Route::get('link_sph/part/{nama}', [SphController::class, 'part'])->name('part.sph');
        Route::delete('link_sph/sph_old/{id}', [SphController::class, 'deleteDoc'])->name('delete.sph_old');
    // SPH end//

    //Invoice //
        Route::resource('invoice_merketing', InvoiceController::class);
    //Invoice end//
});

Route::name('teknisi.')->prefix('dashboard_teknisi')->middleware(['auth'])->group(function () {
    Route::get('link_dashboard_teknisi', [DashboardTeknisiController::class, 'dashboard_teknisi'])->name('dashboard');
    // Repair //
        Route::resource('repair', RepairController::class);
        Route::get('link_repair/ba_repair/{id}', [RepairController::class, 'repairBa'])->name('ba.repair');
        Route::get('link_repair/st_repair/{id}', [RepairController::class, 'repairSt'])->name('st.repair');
        Route::put('link_repair/status/{id}', [RepairController::class, 'status'])->name('status.repair');
        Route::put('link_repair/ket/{id}', [RepairController::class, 'ket'])->name('ket.repair');
        Route::delete('link_repair/delete/{id}', [RepairController::class, 'deleteI'])->name('deleteI.repair');
        Route::get('link_repair/data_pekerjaan/{id}', [RepairController::class, 'fetch'])->name('fetch.repair');
    // Repair end//

    //Serah Terima //
        Route::resource('surat_terima', SuratTerimaController::class);
    //Serah Terima End //

    //Informasi //
        Route::resource('informasi', InformasiController::class);
    //Informasi end//

    //Berita Acara //
        Route::resource('ba', BeritaAcaraController::class);
        Route::get('link_ba/ba_old', [BeritaAcaraController::class, 'baOld'])->name('data.baOld');
        Route::post('link_ba/upload', [BeritaAcaraController::class, 'upload'])->name('upload.ba');
        Route::delete('link_ba/ba_old/{id}', [BeritaAcaraController::class, 'deleteDoc'])->name('delete.baOld');
    //Berita Acara end//

    //Qr Generate //
        Route::resource('qr', QrController::class);
    //Qr Generate end//
});

Route::name('akuntan.')->prefix('dashboard_akuntan')->middleware(['auth'])->group(function () {
    Route::get('link_dashboard_akuntan', [DashboardAkuntanController::class, 'dashboard_akuntan'])->name('dashboard');
    //Fetch akuntan //
        Route::get('real_selesai', [DashboardAkuntanController::class, 'real_selesai'])->name('real.selesai');
        Route::get('real_proses', [DashboardAkuntanController::class, 'real_proses'])->name('real.proses');
        Route::get('count_selesaiA', [DashboardAkuntanController::class, 'count_selesaiA'])->name('count.selesaiA');
        Route::get('count_prosesA', [DashboardAkuntanController::class, 'count_prosesA'])->name('count.prosesA');
    //Fetch akuntan end//

    //invoice permohonan //
        Route::resource('invoice', InvoicePermohonanController::class);
        Route::get('link_invoice_permohonan/data_sph/{id}', [InvoicePermohonanController::class, 'fetch'])->name('fetch.invoicePermohonan')->where('id', '.*');
        Route::get('link_invoice_permohonan/invoice_old', [InvoicePermohonanController::class, 'invoiceOld'])->name('invoiceOld.invoicePermohonan');
        Route::get('link_invoice_permohonan/view/{id}', [InvoicePermohonanController::class, 'view'])->name('view.invoicePermohonan');
        Route::post('link_invoice_permohonan/upload', [InvoicePermohonanController::class, 'upload'])->name('upload.invoicePermohonan');
        Route::put('link_invoice_permohonan/status/{id}', [InvoicePermohonanController::class, 'status'])->name('status.invoicePermohonan');
        Route::delete('link_invoice_permohonan/invoice_old/{id}', [InvoicePermohonanController::class, 'deleteDoc'])->name('delete.invoice_old');
    //invoice permohonan end//

    //Fakture //
        Route::resource('fakture', UploadFaktureController::class);
    //Fakture end//
});

Route::name('monitoring.')->prefix('dashboard_monitoring')->middleware(['auth'])->group(function () {
    //Monitoring//
    Route::get('dashboard_ppm', [MonitoringController::class, 'dashboardPpm'])->name('dashboardPpm');
    Route::get('rekap_inv/data', [MonitoringController::class, 'rekapInvData'])->name('rekapInv.data');
    Route::get('rekap_inv', [MonitoringController::class, 'rekapInv'])->name('rekapInv');
    Route::delete('rekap_inv/{id}', [MonitoringController::class, 'deleteInv'])->name('deleteInv');
    Route::get('/rekap/export-excel', [MonitoringController::class,'exportExcel'])->name('exportExcel');
    Route::get('rekap_perbaikan/data', [MonitoringController::class, 'rekapPerbaikanData'])->name('rekapPerbaikan.data');
    Route::get('rekap_perbaikan', [MonitoringController::class, 'rekapPerbaikan'])->name('rekapPerbaikan');
    Route::delete('rekap_perbaikan/{id}', [MonitoringController::class, 'deletePerbaikan'])->name('deletePerbaikan');
    Route::get('rekap_pelihara/data', [MonitoringController::class, 'rekapPeliharaData'])->name('rekanPelihara.data');
    Route::get('rekap_pelihara', [MonitoringController::class, 'rekapPelihara'])->name('rekapPelihara');
    Route::delete('rekap_pelihara/{id}', [MonitoringController::class, 'deletePelihara'])->name('deletePelihara');
    });

Route::name('master.')->prefix('dashboard_master')->middleware(['auth'])->group(function () {
    //MASTER//
    Route::get('dashboard_master', [DashboardController::class, 'dashboardMaster'])->name('dashboardMaster');
    });

Route::name('ppm.')->prefix('dashboard_ppm')->middleware(['auth'])->group(function () {
    //PPM//
    
    });

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');


Route::get('asd', [HomeController::class, 'notifyUser']);

require __DIR__ . '/other/user_route.php';
