@extends('layouts.admin_kalibrasi')

@section('content')
@section('title', 'Lembar Kerja')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Lembar Kerja</h1>
        <small>Form Lembar Kerja Alat</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
    
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="col-xs-12 nav nav-tabs" role="tablist">
              
            </ul>
            <br>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
    
                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">
    
                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Sphygmomanometer</h1>
                      </div>
    
                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ url('/kalibrasi/sphygmomanometer') }}" class="form-inner"
                              enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')
                              <h3>PELAKSANA KALIBRASI</h3>
    
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Instansi</b></td>
                                    <td><input name="nama_instansi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="ruangan_kalibrasi" type="text" style="border: 0" placeholder="-">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal_kalibrasi" type="date" style="border: 0" placeholder="-">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No Label</b></td>
                                    <td><input name="no_label" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
    
                              </table>
    
    
                              <h3>PELAKSANA KALIBRASI</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                                  </tr>
                                  <tr>
    
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left">Digital Manometer </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left">Rigid Silinder </td>
                                    <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left">Stopwatch </td>
                                    <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left">Thermohygrometer </td>
                                    <td><input name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>
    
    
                              <h3>PELAKSANA KALIBRASI</h3>
    
                              <h3>Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="merek" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b> Type</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nomor Seri</b></td>
                                    <td><input name="no_seri" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Rentang Ukur</b></td>
                                    <td><input name="rentang_ukur" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Resolusi</b></td>
                                    <td><input name="resolusi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>
    
                              <h3>PENGUKURAN KONDISI LINGKUNGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_sebelum" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_sesudah" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_sebelum" type="text" style="border: 0" placeholder="-">
                                    </td>
                                    <td><input name="kelembapan_sesudah" type="text" style="border: 0" placeholder="-">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
    
                              <h3>PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
    
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b>
                                    </td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Badan dan Permukaan</b></td>
                                    <td><input name="hasil_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Balon Tensi, Tabung, Selang</b>
                                    </td>
                                    <td><input name="hasil_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bantalan/Rem</b></td>
                                    <td><input name="hasil_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Filter</b></td>
                                    <td><input name="hasil_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Gauge/Tabung</b></td>
                                    <td><input name="hasil_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>6</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Indikator</b></td>
                                    <td><input name="hasil_fisik_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>7</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Konektor</b></td>
                                    <td><input name="hasil_fisik_7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_7" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>8</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Label</b></td>
                                    <td><input name="hasil_fisik_8" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_8" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_8" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>9</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Manset</b></td>
                                    <td><input name="hasil_fisik_9" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_9" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_9" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>10</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Pengaturan Titik 0</b></td>
                                    <td><input name="hasil_fisik_10" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_10" type="text" style="border: 0" placeholder="-">
                                    </td>
                                    <td><input name="keterangan_10" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>11</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Pengencang</b></td>
                                    <td><input name="hasil_fisik_11" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_11" type="text" style="border: 0" placeholder="-">
                                    </td>
                                    <td><input name="keterangan_11" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>12</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Valve Penutup</b></td>
                                    <td><input name="hasil_fisik_12" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_fungsi_12" type="text" style="border: 0" placeholder="-">
                                    </td>
                                    <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>
    
                              <h3>PENGUKURAN KINERJA </h3>
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" rowspan="2" align="center"><b>titik setting</b>
                                    </td>
                                    <td class="table-info text-center" colspan="6" align="left"><b>Pengukuran</b></td>
                                    <td class="table-info" colspan="1" rowspan="2" align="center"><b>Toleransi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>6</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>50</b></td>
                                    <td><input name="pengukuran_50_1" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_50_2" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_50_3" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_50_4" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_50_5" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_50_6" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td rowspan="5" class="text-center">20mmHg/300 Sec</td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>100</b></td>
                                    <td><input name="pengukuran_100_1" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_100_2" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_100_3" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_100_4" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_100_5" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_100_6" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>150</b></td>
                                    <td><input name="pengukuran_150_1" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_150_2" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_150_3" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_150_4" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_150_5" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_150_6" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>200</b></td>
                                    <td><input name="pengukuran_200_1" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_200_2" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_200_3" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_200_4" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_200_5" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_200_6" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>250</b></td>
                                    <td><input name="pengukuran_250_1" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_250_2" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_250_3" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_250_4" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_250_5" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_250_6" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>
    
                              <h3>LAJU BUANG CEPAT </h3>
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" rowspan="2" align="center"><b>Setting mmHg</b>
                                    </td>
                                    <td class="table-info text-center" colspan="6" align="left"><b>Pengukuran</b></td>
                                    <td class="table-info" colspan="1" rowspan="2" align="center"><b>Toleransi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>6</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>260</b></td>
                                    <td><input name="pengukuran_260_1" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_260_2" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_260_3" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_260_4" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_260_5" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td><input name="pengukuran_260_6" maxlength="4" size="4" type="text" style="border: 0"
                                        placeholder="-"></td>
                                    <td rowspan="5" class="text-center">20mmHg/300 Sec</td>
                                  </tr>
                                </tbody>
                              </table>
    
                              <h3>Akurasi Tekanan </h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="2" rowspan="2" align="center"><b>titik setting</b>
                                    </td>
                                    <td class="table-info text-center" colspan="6" align="left"><b>Pengukuran</b></td>
                                    <td class="table-info" colspan="1" rowspan="2" align="center"><b>Toleransi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>6</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="6" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" rowspan="6" align="left"><b>Naik </b></td>
                                    <td rowspan="1" class="text-center">0</td>
                                    <td><input name="pengukuran_naik_0_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_0_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_0_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_0_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_0_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_0_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">50</td>
                                    <td><input name="pengukuran_naik_50_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_50_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_50_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_50_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_50_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_50_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">100</td>
                                    <td><input name="pengukuran_naik_100_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_100_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_100_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_100_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_100_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_100_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">150</td>
                                    <td><input name="pengukuran_naik_150_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_150_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_150_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_150_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_150_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_150_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">200</td>
                                    <td><input name="pengukuran_naik_200_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_200_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_200_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_200_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_200_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_200_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">250</td>
                                    <td><input name="pengukuran_naik_250_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_250_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_250_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_250_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_250_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_naik_250_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="6" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" rowspan="6" align="left"><b>Turun </b></td>
                                    <td rowspan="1" class="text-center">0</td>
                                    <td><input name="pengukuran_turun_0_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_0_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_0_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_0_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_0_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_0_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">50</td>
    
                                    <td><input name="pengukuran_turun_50_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_50_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_50_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_50_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_50_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_50_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">100</td>
    
                                    <td><input name="pengukuran_turun_100_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_100_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_100_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_100_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_100_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_100_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">150</td>
    
                                    <td><input name="pengukuran_turun_150_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_150_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_150_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_150_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_150_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_150_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">200</td>
    
                                    <td><input name="pengukuran_turun_200_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_200_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_200_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_200_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_200_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_200_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">250</td>
                                    <td><input name="pengukuran_turun_250_1" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_250_2" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_250_3" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_250_4" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_250_5" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_turun_250_6" maxlength="4" size="4" type="text"
                                        style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                </tbody>
                              </table>
    
    
                              <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                  <div class="ui buttons">
                                    <button type="reset" class="ui button">Reset</button>
                                    <div class="or"></div>
                                    <button class="ui positive button" type="submit">Save</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="col-md-3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection