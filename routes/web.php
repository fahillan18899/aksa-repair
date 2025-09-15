<?php


use App\Http\Controllers\Admin\HomeController as PPMController;
use Illuminate\Support\Facades\Route;
// Repair Aksa //
use App\Http\Controllers\DataAlatController;
// Admin
use App\Http\Controllers\Admin\MonitoringMarketingController;
use App\Http\Controllers\Admin\MonitoringTeknisiController;
use App\Http\Controllers\Admin\MonitoringKeuanganController;
use App\Http\Controllers\Admin\PekerjaanSelesaiController;
use App\Http\Controllers\Admin\OperatorController;
// Marketing
use App\Http\Controllers\Marketing\DashboardMarketingController;
use App\Http\Controllers\Marketing\DataInvoiceController;
use App\Http\Controllers\Marketing\InputCustomerController;
use App\Http\Controllers\Marketing\KegiatanKalibrasiController;
use App\Http\Controllers\Marketing\PembayaranController;
// Teknisi //
use App\Http\Controllers\Teknisi\DashboardTeknisiController;
use App\Http\Controllers\Teknisi\DataCustomerController;
use App\Http\Controllers\Teknisi\PengerjaanKalibrasiController;
use App\Http\Controllers\Teknisi\DocumenKalibrasiController;
// Akuntan //
use App\Http\Controllers\Akuntan\DashboardAkuntanController;
use App\Http\Controllers\Akuntan\CsKeuanganController;
use App\Http\Controllers\Akuntan\PembuatanInvoiceController;
use Matrix\Operators\Operator;

//Data Scan
Route::get('data_alat/{id}', [DataAlatController::class, 'index'])->name('scan.dataAlat');

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    // menu dashboard SIMRS

    // menu PPM
    Route::prefix('ppm')->group(function () {
    // ROUTE DASHBOARD
        Route::get('home', [PPMController::class, 'dashboard']);

        //Fetch Dashboard
        Route::get('api_repair_selesai', [PPMController::class, 'repair_selesai'])->name('api1');
        Route::get('api_repair_proses', [PPMController::class, 'repair_proses'])->name('api2');
        Route::get('api_rapair_count1', [PPMController::class, 'count1'])->name('count.selesai');
        Route::get('api_repair_count2', [PPMController::class, 'count2'])->name('count.proses');

        // Monitoring Marketing //
        Route::get('link_input_customer', [MonitoringMarketingController::class, 'index'])->name('index.inputCs');
        Route::get('link_input_pekerjaan/edit/{id}', [MonitoringMarketingController::class, 'edit'])->name('edit.data');
        Route::put('link_input_pekerjaan/update/{id}', [MonitoringMarketingController::class, 'update'])->name('update.data');
        Route::delete('link_input_pekerjaan/{id}', [MonitoringMarketingController::class, 'delete'])->name('delete.inputPekerjaan');
        // --- //
        Route::get('link_data_invoice', [MonitoringMarketingController::class, 'index2'])->name('index.invoice');
        // --- //
        Route::get('link_kegiatan_kalibrasi', [MonitoringMarketingController::class, 'index3'])->name('index.kegiatanKalibrasi');
        // Route::get('link_sph/sph_doc', [MonitoringMarketingController::class, 'sphDoc'])->name('sph.doc');
        // Route::get('link_sph/view/{id}', [MonitoringMarketingController::class, 'viewSph'])->name('sph.view');
        // --- //
        Route::get('link_pembayaran', [MonitoringMarketingController::class, 'index4'])->name('index.pembayaran');
        Route::get('link_invoice/view/{id}', [MonitoringMarketingController::class, 'viewInvo'])->name('invoice.view');
        Route::get('link_invoice/invoice_doc', [MonitoringMarketingController::class, 'invoiceDoc'])->name('invoice.doc');

        // Monitoring Teknisi //
        Route::get('link_data_cs', [MonitoringTeknisiController::class, 'index5'])->name('index.dataCs');
        Route::get('link_pengerjaan_kalibrasi', [MonitoringTeknisiController::class, 'index6'])->name('index.pengerjaan');
        Route::get('link_document_kalibrasi', [MonitoringTeknisiController::class, 'index7'])->name('index.docKal');
        Route::get('link_berita_acara', [MonitoringTeknisiController::class, 'getBeritaAcara'])->name('beritaAcara.data');
        Route::get('link_berita_acara/view/{id}', [MonitoringTeknisiController::class, 'viewBa'])->name('beritaAcara.view');
        Route::get('link_berita_acara/ba_doc', [MonitoringTeknisiController::class, 'baDoc'])->name('ba.doc');
        
        //Monitoring Keuangan //
        Route::get('link_data_cutomers', [MonitoringKeuanganController::class, 'index8'])->name('index.dataCustomer');
        Route::get('link_invoice_monitoring', [MonitoringKeuanganController::class, 'index9'])->name('index.monitorInvoice');
        Route::get('link_alur_pembayaran', [MonitoringKeuanganController::class, 'index10'])->name('index.alurBayar');
        Route::get('link_chas_back', [MonitoringKeuanganController::class, 'index11'])->name('index.chasBack');

        // Pekerjaan Selesai // 
        Route::get('link_pekerjaan_selesai', [PekerjaanSelesaiController::class, 'index'])->name('index.persai');

        //Operator//
        Route::get('link_operator', [OperatorController::class, 'index'])->name('operator.data');
        Route::post('link_operator', [OperatorController::class, 'post'])->name('operator.post');
        Route::get('link_operator/edit/{user_id}', [OperatorController::class, 'edit'])->name('operator.edit');
        Route::put('link_operator/update/{user_id}', [OperatorController::class, 'update'])->name('operator.update');
        Route::delete('link_operator/{user_id}', [OperatorController::class, 'delete'])->name('operator.delete');
    });
});

Route::name('marketing.')->prefix('dashboard_marketing')->middleware(['auth'])->group(function() {
    Route::get('link_dashboard_marketing', [DashboardMarketingController::class, 'dashboard_marketing'])->name('dashboard');
    //Fetch dashboard marketing //
        Route::get('fetch_selsai', [DashboardMarketingController::class, 'fetch_selesai'])->name('fetch.selesai');
        Route::get('fetch_proses', [DashboardMarketingController::class, 'fetch_proses'])->name('fetch.proses');
        Route::get('count_selesai', [DashboardMarketingController::class, 'count_selesai'])->name('count.selesaiM');
        Route::get('count_proses', [DashboardMarketingController::class, 'count_proses'])->name('count.prosesM');
    //Fetch dashboard marketing end//

    // Input Pekerjaan //
        Route::get('link_input_customer', [InputCustomerController::class, 'index'])->name('data.inputCs');
        Route::post('link_input_customer', [InputCustomerController::class, 'post'])->name('post.inputCs');
        Route::get('link_input_customer/edit/{id}', [InputCustomerController::class, 'edit'])->name('edit.inputCs');
        Route::put('link_input_customer/update/{id}', [InputCustomerController::class, 'update'])->name('update.inputCs');
        Route::delete('link_inputan_pekerjaan/{id}', [InputCustomerController::class, 'delete'])->name('delete.inputCs');
    // Input Pekerjaan end//

    // Data invoice //
        Route::get('link_data_invo', [DataInvoiceController::class, 'index'])->name('data.dataInvo');
    // Data invoice end//

    // Kegiatan Kalibrasi //
        Route::get('kegiatan_kalibrasi', [KegiatanKalibrasiController::class, 'index'])->name('data.kegiatanKalibrasi');
        Route::get('link_sph_history', [KegiatanKalibrasiController::class, 'history'])->name('history.sph');
        Route::get('link_sph/sph_old', [KegiatanKalibrasiController::class, 'sphOld'])->name('sphOld.sph');
        Route::post('link_sph', [KegiatanKalibrasiController::class, 'post'])->name('post.sph');
        Route::post('link_sph/upload', [KegiatanKalibrasiController::class, 'upload'])->name('upload.sph');
        Route::get('link_sph/edit/{id}', [KegiatanKalibrasiController::class, 'edit'])->name('edit.sph');
        Route::put('link_sph/update/{id}', [KegiatanKalibrasiController::class, 'update'])->name('update.sph');
        Route::get('link_sph/print/{id}', [KegiatanKalibrasiController::class, 'print'])->name('print.sph');
        Route::get('link_sph/part/{nama}', [KegiatanKalibrasiController::class, 'part'])->name('part.sph');
        Route::get('link_sph_history/view/{id}', [KegiatanKalibrasiController::class, 'view'])->name('view.sph');
        Route::delete('link_sph/{id}', [KegiatanKalibrasiController::class, 'delete'])->name('delete.sph');
        Route::delete('link_sph/sph_old/{id}', [KegiatanKalibrasiController::class, 'deleteDoc'])->name('delete.sph_old');
    // Kegiatan Kalibrasi end//

    //Pembayaran //
        Route::get('link_pembayaran', [PembayaranController::class, 'index'])->name('data.pembayaran');
        Route::get('link_invoice/view/{id}', [PembayaranController::class, 'view'])->name('view.invoice');
    //Pembayaran end//
});

Route::name('teknisi.')->prefix('dashboard_teknisi')->middleware(['auth'])->group(function () {
    Route::get('link_dashboard_teknisi', [DashboardTeknisiController::class, 'dashboard_teknisi'])->name('dashboard');
    // Data Customer //
        Route::get('data_customer', [DataCustomerController::class, 'index'])->name('data.dataCs');
        Route::post('data_customer', [DataCustomerController::class, 'post'])->name('post.dataCs');
        Route::get('data_customer/edit/{id}', [DataCustomerController::class, 'edit'])->name('edit.dataCs');
        Route::put('data_customer/update/{id}', [DataCustomerController::class, 'update'])->name('update.dataCs');
        Route::delete('data_customer/{id}', [DataCustomerController::class, 'delete'])->name('delete.dataCs');
        Route::delete('data_customer/delete/{id}', [DataCustomerController::class, 'deleteI'])->name('deleteI.dataCs');
        Route::get('data_customer/data_pekerjaan/{id}', [DataCustomerController::class, 'fetch'])->name('fetch.dataCs');
    // Data Customer end//

    //Pengerjaan kalibrasi //
        Route::get('link_pengerjaan_kalibrasi', [PengerjaanKalibrasiController::class, 'index'])->name('data.kalibrasi');
        Route::put('link_pengerjaan_kalibrasi/pengerjaan/{id}', [PengerjaanKalibrasiController::class, 'pengerjaan'])->name('pengerjaan.kalibrasi');
    //Pengerjaan kalibrasi End //

    //Dokumen kalibrasi //
        Route::get('link_dokumen_kalibrasi', [DocumenKalibrasiController::class, 'index'])->name('data.dokumen'); 
        Route::post('link_dokumen_kalibrasi', [DocumenKalibrasiController::class, 'post'])->name('post.dokumen');
        Route::get('link_dokumen_kalibrasi/edit/{id}', [DocumenKalibrasiController::class, 'edit'])->name('edit.dokumen');
        Route::put('link_dokumen_kalibrasi/update/{id}', [DocumenKalibrasiController::class, 'update'])->name('update.dokumen');
        Route::delete('link_dokumen_kalibrasi/{id}', [DocumenKalibrasiController::class, 'delete'])->name('delete.dokumen');
    //Dokumen kalibrasi end//

});

Route::name('akuntan.')->prefix('dashboard_akuntan')->middleware(['auth'])->group(function () {
    Route::get('link_dashboard_akuntan', [DashboardAkuntanController::class, 'dashboard_akuntan'])->name('dashboard');
    //Fetch akuntan //
        Route::get('real_selesai', [DashboardAkuntanController::class, 'real_selesai'])->name('real.selesai');
        Route::get('real_proses', [DashboardAkuntanController::class, 'real_proses'])->name('real.proses');
        Route::get('count_selesaiA', [DashboardAkuntanController::class, 'count_selesaiA'])->name('count.selesaiA');
        Route::get('count_prosesA', [DashboardAkuntanController::class, 'count_prosesA'])->name('count.prosesA');
    //Fetch akuntan end//

    // Data Customer Keuangan //
    Route::get('link_dataCs_keuangan', [CsKeuanganController::class, 'index'])->name('data.CsKeuangan');
    Route::post('link_dataCs_keuangan', [CsKeuanganController::class, 'post'])->name('post.CsKeuangan');
    Route::get('link_dataCs_keuangan/edit/{id}', [CsKeuanganController::class, 'edit'])->name('edit.CsKeuangan');
    Route::put('link_dataCs_keuangan/update/{id}', [CsKeuanganController::class, 'update'])->name('update.CsKeuangan');
    Route::delete('link_dataCs_keuangan/{id}', [CsKeuanganController::class, 'delete'])->name('delete.CsKeuangan');
    Route::get('link_invoice_permohonan/data_sph/{id}', [CsKeuanganController::class, 'fetch'])->name('fetch.invoicePermohonan')->where('id', '.*');
    // Data Customer Keuangan end//

    // Pembuatan Invoice //
        Route::get('link_pembuatan_invoice', [PembuatanInvoiceController::class, 'index'])->name('data.pembuatanInvo');
        Route::post('link_pembuatan_invoice', [PembuatanInvoiceController::class, 'post'])->name('post.pembuatanInvo');
        Route::get('link_pembuatan_invoice/edit/{id}', [PembuatanInvoiceController::class, 'edit'])->name('edit.pembuatanInvo');
        Route::put('link_pembuatan_invoice/update/{id}', [PembuatanInvoiceController::class, 'update'])->name('update.pembuatanInvo');
        Route::delete('link_pembuatan_invoice/{id}', [PembuatanInvoiceController::class, 'delete'])->name('delete.pembuatanInvo');
    // Pembuatan Invoice end //
});

Route::get('asd', [PPMController::class, 'notifyUser']);

require __DIR__ . '/other/user_route.php';
