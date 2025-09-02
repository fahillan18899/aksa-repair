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

    // SPH //
        Route::get('link_sph', [SphController::class, 'index'])->name('data.sph');
        Route::get('link_sph_history', [SphController::class, 'history'])->name('history.sph');
        Route::get('link_sph/sph_old', [SphController::class, 'sphOld'])->name('sphOld.sph');
        Route::post('link_sph', [SphController::class, 'post'])->name('post.sph');
        Route::post('link_sph/upload', [SphController::class, 'upload'])->name('upload.sph');
        Route::get('link_sph/edit/{id}', [SphController::class, 'edit'])->name('edit.sph');
        Route::put('link_sph/update/{id}', [SphController::class, 'update'])->name('update.sph');
        Route::get('link_sph/print/{id}', [SphController::class, 'print'])->name('print.sph');
        Route::get('link_sph/part/{nama}', [SphController::class, 'part'])->name('part.sph');
        Route::get('link_sph_history/view/{id}', [SphController::class, 'view'])->name('view.sph');
        Route::delete('link_sph/{id}', [SphController::class, 'delete'])->name('delete.sph');
        Route::delete('link_sph/sph_old/{id}', [SphController::class, 'deleteDoc'])->name('delete.sph_old');
    // SPH end//

    //Invoice //
        Route::get('link_invoice', [InvoiceController::class, 'index'])->name('data.invoice');
        Route::get('link_invoice/view/{id}', [InvoiceController::class, 'view'])->name('view.invoice');
    //Invoice end//
});

Route::name('teknisi.')->prefix('dashboard_teknisi')->middleware(['auth'])->group(function () {
    Route::get('link_dashboard_teknisi', [DashboardTeknisiController::class, 'dashboard_teknisi'])->name('dashboard');
    // Repair //
        Route::get('link_repair', [RepairController::class, 'index'])->name('data.repair');
        Route::post('link_repair', [RepairController::class, 'post'])->name('post.repair');
        Route::get('link_repair/ba_repair/{id}', [RepairController::class, 'repairBa'])->name('ba.repair');
        Route::get('link_repair/st_repair/{id}', [RepairController::class, 'repairSt'])->name('st.repair');
        Route::get('link_repair/edit/{id}', [RepairController::class, 'edit'])->name('edit.repair');
        Route::put('link_repair/update/{id}', [RepairController::class, 'update'])->name('update.repair');
        Route::put('link_repair/status/{id}', [RepairController::class, 'status'])->name('status.repair');
        Route::put('link_repair/ket/{id}', [RepairController::class, 'ket'])->name('ket.repair');
        Route::delete('link_repair/{id}', [RepairController::class, 'delete'])->name('delete.repair');
        Route::delete('link_repair/delete/{id}', [RepairController::class, 'deleteI'])->name('deleteI.repair');
        Route::get('link_repair/data_pekerjaan/{id}', [RepairController::class, 'fetch'])->name('fetch.repair');
    // Repair end//

    //Serah Terima //
        Route::get('link_surat_terima', [SuratTerimaController::class, 'index'])->name('data.suratTerima');
        Route::post('link_surat_terima', [SuratTerimaController::class, 'post'])->name('post.suratTerima');
        Route::get('link_surat_terima/view/{id}', [SuratTerimaController::class, 'view'])->name('view.suratTerima');
        Route::get('link_surat_terima/edit/{id}', [SuratTerimaController::class, 'edit'])->name('edit.suratTerima');
        Route::put('link_surat_terima/update/{id}', [SuratTerimaController::class, 'update'])->name('update.suratTerima');
        Route::delete('link_surat_terima/{id}', [SuratTerimaController::class, 'delete'])->name('delete.suratTerima');
    //Serah Terima End //

    //Informasi //
        Route::get('link_informasi', [InformasiController::class, 'index'])->name('data.informasi');
        Route::post('link_informasi', [InformasiController::class, 'post'])->name('post.informasi');
        Route::get('link_informasi/edit/{id}', [InformasiController::class, 'edit'])->name('edit.informasi');
        Route::put('link_informasi/update/{id}', [InformasiController::class, 'update'])->name('update.informasi');
        Route::delete('link_informasi/{id}', [InformasiController::class, 'delete'])->name('delete.informasi');
    //Informasi end//

    //Berita Acara //
        Route::get('link_ba', [BeritaAcaraController::class, 'index'])->name('data.ba');
        Route::get('link_ba/ba_old', [BeritaAcaraController::class, 'baOld'])->name('data.baOld');
        Route::post('link_ba', [BeritaAcaraController::class, 'post'])->name('post.ba');
        Route::get('link_ba/view/{id}', [BeritaAcaraController::class, 'view'])->name('view.ba');
        Route::get('link_ba/edit/{id}', [BeritaAcaraController::class, 'edit'])->name('edit.ba');
        Route::put('link_ba/update/{id}', [BeritaAcaraController::class, 'update'])->name('update.ba');
        Route::post('link_ba/upload', [BeritaAcaraController::class, 'upload'])->name('upload.ba');
        Route::delete('link_ba/{id}', [BeritaAcaraController::class, 'delete'])->name('delete.ba');
        Route::delete('link_ba/ba_old/{id}', [BeritaAcaraController::class, 'deleteDoc'])->name('delete.baOld');
    //Berita Acara end//

    //Qr Generate //
        Route::get('link_qr', [QrController::class, 'index'])->name('data.qr');
        Route::post('link_qr_generate', [QrController::class, 'generate'])->name('generate.qr');
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
        Route::get('link_invoice_permohonan/data_sph/{id}', [InvoicePermohonanController::class, 'fetch'])->name('fetch.invoicePermohonan')->where('id', '.*');
        Route::get('link_invoice_permohonan', [InvoicePermohonanController::class, 'index'])->name('data.invoicePermohonan');
        Route::get('link_invoice_permohonan/invoice_old', [InvoicePermohonanController::class, 'invoiceOld'])->name('invoiceOld.invoicePermohonan');
        Route::get('link_invoice_permohonan/view/{id}', [InvoicePermohonanController::class, 'view'])->name('view.invoicePermohonan');
        Route::post('link_invoice_permohonan', [InvoicePermohonanController::class, 'post'])->name('post.invoicePermohonan');
        Route::post('link_invoice_permohonan/upload', [InvoicePermohonanController::class, 'upload'])->name('upload.invoicePermohonan');
        Route::get('link_invoice_permohonan/edit/{id}', [InvoicePermohonanController::class, 'edit'])->name('edit.invoicePermohonan');
        Route::put('link_invoice_permohonan/update/{id}', [InvoicePermohonanController::class, 'update'])->name('update.invoicePermohonan');
        Route::put('link_invoice_permohonan/status/{id}', [InvoicePermohonanController::class, 'status'])->name('status.invoicePermohonan');
        Route::get('link_invoice_permohonan/print{id}', [InvoicePermohonanController::class, 'print'])->name('print.invoicePermohonan');
        Route::delete('link_invoice_permohonan/{id}', [InvoicePermohonanController::class, 'delete'])->name('delete.invoicePermohonan');
        Route::delete('link_invoice_permohonan/invoice_old/{id}', [InvoicePermohonanController::class, 'deleteDoc'])->name('delete.invoice_old');
    //invoice permohonan end//

    //Fakture //
        Route::get('link_upload_fakture', [UploadFaktureController::class, 'index'])->name('data.uploadFakture');
        Route::post('link_upload_fakture/upload', [UploadFaktureController::class, 'upload'])->name('upload.uploadFakture');
        Route::delete('link_upload_fakture/{id}', [UploadFaktureController::class, 'delete'])->name('delete.uploadFakture');
    //Fakture end//
});

Route::get('asd', [PPMController::class, 'notifyUser']);

require __DIR__ . '/other/user_route.php';
