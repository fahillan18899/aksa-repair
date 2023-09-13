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
              <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Sphygmomanometer</a>
              </li>
              <li role="presentation">
                <a href="#language" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> ECG</a>
              </li>
              <li role="presentation">
                <a href="#centrifuge" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Centrifuge</a>
              </li>
              <li role="presentation">
                <a href="#inkubator" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> inkubator</a>
              </li>
              <!-- <li role="presentation">
                <a href="#blood" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Blood Presure monitor digital</a>
              </li> -->
              <li role="presentation">
                <a href="#uv" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> UV</a>
              </li>
              <li role="presentation">
                <a href="#amasthesi" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Amasthesi</a>
              </li>
              <li role="presentation">
                <a href="#patient_monitor" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Patient Monitor</a>
              </li>
              <li role="presentation">
                <a href="#vital_monitor" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Presentation</a>
              </li>
              <li role="presentation">
                <a href="#chemistry" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Chemistr</a>
              </li>
              <li role="presentation">
                <a href="#cardiotocograph" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Cardiotocograph</a>
              </li>
              <li role="presentation">
                <a href="#Defibrilator" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Defibrilator</a>
              </li>
              <li role="presentation">
                <a href="#DefibrilatorMonitor" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Defibrilator Monitor</a>
              </li>
              <li role="presentation">
                <a href="#DentralUnit" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Dentral Unit</a>
              </li>
              <li role="presentation">
                <a href="#Electrolit" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> Electrolit</a>
              </li>
              <li role="presentation">
                <a href="#ENT" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> ENT Treatment</a>
              </li>
            </ul>

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
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
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
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b> Nama Alat</b></td>
                                    <td><input name="nama_alat" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
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
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
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
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Badan dan Permukaan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Balon Tensi, Tabung, Selang</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bantalan/Rem</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Filter</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Gauge/Tabung</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>6</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Indikator</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>7</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Konektor</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_7" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>8</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Label</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_8" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_8" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_8" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>9</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Manset</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_9" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_9" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_9" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>10</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Pengaturan Titik 0</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_10" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_10" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_10" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>11</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Pengencang</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_11" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_11" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_11" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>12</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Valve Penutup</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>PENGUKURAN KINERJA </h3>
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" rowspan="2" align="center"><b>titik setting</b></td>
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
                                    <td><input name="pengukuran_titik_50_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_50_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_50_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_50_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_50_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_50_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="5" class="text-center">20mmHg/300 Sec</td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>100</b></td>
                                    <td><input name="pengukuran_titik_100_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_100_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_100_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_100_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_100_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_100_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>150</b></td>
                                    <td><input name="pengukuran_titik_150_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_150_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_150_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_150_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_150_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_150_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>200</b></td>
                                    <td><input name="pengukuran_titik_200_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_200_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_200_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_200_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_200_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_200_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>250</b></td>
                                    <td><input name="pengukuran_titik_250_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_250_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_250_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_250_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_250_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_titik_250_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>LAJU BUANG CEPAT </h3>
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" rowspan="2" align="center"><b>Setting mmHg</b></td>
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
                                    <td><input name="pengukuran_setting_mmhg_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_setting_mmhg_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_setting_mmhg_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_setting_mmhg_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_setting_mmhg_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pengukuran_setting_mmhg_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="5" class="text-center">20mmHg/300 Sec</td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>Akurasi Tekanan </h3>
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="2" rowspan="2" align="center"><b>titik setting</b></td>
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
                                    <td><input name="pembacaan_alat_naik_0_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_0_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_0_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_0_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_0_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_0_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">50</td>
                                    <td><input name="pembacaan_alat_naik_50_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_50_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_50_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_50_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_50_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_50_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">100</td>
                                    <td><input name="pembacaan_alat_naik_100_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_100_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_100_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_100_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_100_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_100_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">150</td>
                                    <td><input name="pembacaan_alat_naik_150_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_150_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_150_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_150_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_150_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_150_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">200</td>
                                    <td><input name="pembacaan_alat_naik_200_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_200_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_200_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_200_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_200_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_200_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">250</td>
                                    <td><input name="pembacaan_alat_naik_250_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_250_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_250_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_250_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_250_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_250_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="6" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" rowspan="6" align="left"><b>Turun </b></td>
                                    <td rowspan="1" class="text-center">0</td>
                                    <td><input name="pembacaan_alat_turun_0_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_0_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_0_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_0_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_0_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_0_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">50</td>

                                    <td><input name="pembacaan_alat_turun_50_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_50_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_50_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_50_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_50_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_50_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">100</td>

                                    <td><input name="pembacaan_alat_turun_100_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_100_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_100_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_100_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_100_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_100_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">150</td>

                                    <td><input name="pembacaan_alat_turun_150_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_150_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_150_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_150_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_150_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_150_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">200</td>

                                    <td><input name="pembacaan_alat_turun_200_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_200_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_200_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_200_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_200_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_200_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                                  </tr>
                                  <tr>
                                    <td rowspan="1" class="text-center">250</td>

                                    <td><input name="pembacaan_alat_turun_250_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_250_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_250_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_250_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_250_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_250_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
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
              <div role="tabpanel" class="tab-pane" id="language">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Electrocardiograph</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')
                              <h3>Pelaksanaan Kalibrasi</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Instansi</b></td>
                                    <td><input name="nama_instansi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b> Nama Alat</b></td>
                                    <td><input name="nama_alat" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
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


                              <h3>Alat yang digunakan</h3>
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
                                    <td class="table-info" colspan="1" align="left">1. Safety Analyzer with ECG Simulator, Merek : Fluke, Model/Type : 615,S/N 2463004 ( tertelusur ke LK-172-IDN)</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left">2. Thermohygrometer, Merk: Sunroud , Model/Type: -, S/N - (Tertelusur ke LK-031-IDN) </td>
                                    <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left">3. Digital Caliper, Merk: Krisbow , Model/Type: KW06-422, S/N kw 0600422 (Tertelusur ke LK-032-IDN) </td>
                                    <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
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
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
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
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Power Cord</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Switch On/Off</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>LED/Back Light</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Lead Cable/Patient Cable</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Printer</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. Hasil Pengukuran Kinerja Alat</h3>
                              <h4>1. Lead</h4>
                              <table class="table table-hover table-bordered style=" width:"100%">
                                <tr>
                                  <td class="table-info" colspan="1" rowspan="6" align="left"><b>1</b></td>
                                  <td class="table-info" colspan="1" rowspan="6" align="left"><b>12 Lead </b></td>
                                  <td rowspan="1" colspan="5" class="text-center">Hasil Perekaman Lead (Perhatikan Vibrasi pada setiap Lead)</td>
                                </tr>
                                <tr>
                                  <td rowspan="1" class="text-center"><b>II</b></td>
                                  <td rowspan="1" class="text-center"><b>III</b></td>
                                  <td rowspan="1" class="text-center"><b>aVr</b></td>
                                  <td rowspan="1" class="text-center"><b>aVR</b></td>
                                  <td rowspan="1" class="text-center"><b>aVL</b></td>
                                </tr>
                                <tr>
                                  <td><input name="II" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="III" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="aVr" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="aVR" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="aVL" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                </tr>
                                <tr>
                                  <td rowspan="1" class="text-center"><b>V2</b></td>
                                  <td rowspan="1" class="text-center"><b>V3</b></td>
                                  <td rowspan="1" class="text-center"><b>V4</b></td>
                                  <td rowspan="1" class="text-center"><b>V5</b></td>
                                  <td rowspan="1" class="text-center"><b>V6</b></td>
                                </tr>
                                <tr>
                                  <td><input name="V2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="V3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="V4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="V5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="V6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                </tr>

                                </tbody>
                              </table>
                              <h4>2. Hasil Pengukuran Kinerja ECG*</h4>
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Setting Pada Standar</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Terukur Rata Rata Pada Standar</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Koreksi</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Kesalahan Maksimal Yang Diijinkan</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="3" align="center"><b>Sensitivitas ( mV )</b></td>
                                    <td><input name="setting_pada_standar_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td class="table-info" colspan="1" rowspan="3" align="center"><input name="kesalahan_aksimal_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="setting_pada_standar_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="setting_pada_standar_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="2" align="left"><b>Kecepatan Kertas (mm/s)</b></td>
                                    <td><input name="setting_pada_standar_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="2"><input name="kesalahan_aksimal_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="setting_pada_standar_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                </tbody>
                              </table>
                              <h4>3. Hasil Pengukuran Frekuensi Heart (BPM)*</h4>
                              <table class="table table-hover table-bordered style=" width:"100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Setting Pada Standar</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Terukur Rata Rata Pada Standar</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Koreksi</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Kesalahan Maksimal Yang Diijinkan</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="5" align="center"><b>Frekuensi
                                        Heart Rate (BPM)</b></td>
                                    <td><input name="BPM_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td class="table-info" colspan="1" rowspan="3" align="center"><input name="BPM_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="BPM_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_7" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_8" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_9" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="BPM_10" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_11" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_12" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_13" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="BPM_14" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_15" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_16" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td class="table-info" colspan="1" rowspan="2" align="center"><input name="BPM_17" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_18" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="BPM_19" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_20" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_21" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_22" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
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
              <div role="tabpanel" class="tab-pane" id="centrifuge">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Centrfiuge</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')
                              <h3>Pelaksanaan Kalibrasi</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Alamat Pemilik</b></td>
                                    <td><input name="nama_instansi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal Penerimaan</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal Kalibrasi</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered style=" width:"100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b> Nama Alat</b></td>
                                    <td><input name="nama_alat" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
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


                              <h3>Alat yang digunakan</h3>
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
                                    <td class="table-info" colspan="1" align="left">Tachometer </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left">Electro Safety Analyzer </td>
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
                                    <td class="table-info" colspan="1" align="left">Termohygrometer </td>
                                    <td><input name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_4" type="text" style="border: 0" placeholder="-"></td>

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
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
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
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Alarm</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Badan dan Permukaan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Kabel Catu Utama</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Kotak Kontak</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Label </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>6</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Motor</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>7</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Rem </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_7" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>8</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>LSaklar/Kontrol </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_8" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_8" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_8" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>9</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sekring (Fuse) </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_9" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_9" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_9" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>10</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tampilan/Indikator </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_10" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_10" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_10" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>



                              <h3>G. Hasil Pengukuran Kinerja Alat</h3>
                              <h4>1. Lead</h4>
                              <table class="table table-hover table-bordered style=" width:"100%">
                                <tr>
                                  <td class="table-info" colspan="1" rowspan="6" align="left"><b>1</b></td>
                                  <td class="table-info" colspan="1" rowspan="6" align="left"><b>12 Lead </b></td>
                                  <td rowspan="1" colspan="5" class="text-center">Hasil Perekaman Lead (Perhatikan Vibrasi pada setiap Lead)</td>
                                </tr>
                                <tr>
                                  <td rowspan="1" class="text-center"><b>II</b></td>
                                  <td rowspan="1" class="text-center"><b>III</b></td>
                                  <td rowspan="1" class="text-center"><b>aVr</b></td>
                                  <td rowspan="1" class="text-center"><b>aVR</b></td>
                                  <td rowspan="1" class="text-center"><b>aVL</b></td>
                                </tr>
                                <tr>
                                  <td><input name="II" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="III" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="aVr" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="aVR" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="aVL" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                </tr>
                                <tr>
                                  <td rowspan="1" class="text-center"><b>V2</b></td>
                                  <td rowspan="1" class="text-center"><b>V3</b></td>
                                  <td rowspan="1" class="text-center"><b>V4</b></td>
                                  <td rowspan="1" class="text-center"><b>V5</b></td>
                                  <td rowspan="1" class="text-center"><b>V6</b></td>
                                </tr>
                                <tr>
                                  <td><input name="V2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="V3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="V4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="V5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="V6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                </tr>

                                </tbody>
                              </table>
                              <h4>2. Hasil Pengukuran Kinerja Centrifuge*</h4>
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Setting Pada Standar</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Terukur Rata Rata Pada Standar</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Koreksi</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Kesalahan Maksimal Yang Diijinkan</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="3" align="center"><b>Sensitivitas ( mV )</b></td>
                                    <td><input name="setting_pada_standar_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td class="table-info" colspan="1" rowspan="3" align="center"><input name="kesalahan_aksimal_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="setting_pada_standar_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="setting_pada_standar_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="2" align="left"><b>Kecepatan Kertas (mm/s)</b></td>
                                    <td><input name="setting_pada_standar_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td rowspan="2"><input name="kesalahan_aksimal_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="setting_pada_standar_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="terukur_rata_rata_pada_standar_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                </tbody>
                              </table>
                              <h4>3. Hasil Pengukuran Frekuensi Heart (BPM)*</h4>
                              <table class="table table-hover table-bordered style=" width:"100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Setting Pada Standar</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Terukur Rata Rata Pada Standar</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Koreksi</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Kesalahan Maksimal Yang Diijinkan</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="5" align="center"><b>Frekuensi
                                        Heart Rate (BPM)</b></td>
                                    <td><input name="BPM_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td class="table-info" colspan="1" rowspan="3" align="center"><input name="BPM_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="BPM_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_7" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_8" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_9" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="BPM_10" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_11" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_12" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_13" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="BPM_14" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_15" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_16" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td class="table-info" colspan="1" rowspan="3" align="center"><input name="BPM_17" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_18" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="BPM_19" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_20" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_21" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="BPM_22" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
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
              <div role="tabpanel" class="tab-pane" id="inkubator">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Timbangan Bayi</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. DATA ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b> Nama Alat</b></td>
                                    <td><input name="nama_alat" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
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


                              <h3>B. PELAKSANA KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Instansi</b></td>
                                    <td><input name="nama_instansi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal diterima</b></td>
                                    <td><input name="tanggal1" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal Kalibrasi</b></td>
                                    <td><input name="tanggal2" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>C. KONDISI RUANG</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>D. ALAT YANG DIGUNAKAN</h3>
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
                                    <td class="table-info" colspan="1" align="left">Anak Timbangan 10Kg </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left">Anak Timbangan 20Kg </td>
                                    <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left">Anak Timbangan 20Kg </td>
                                    <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left">Anak Timbangan 20Kg </td>
                                    <td><input name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left">Anak Timbangan 20Kg </td>
                                    <td><input name="merek_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left">Termohygrometer </td>
                                    <td><input name="merek_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_6" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>





                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Badan dan Permukaan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tampilan dan Indikator</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>F. HASIL PENGUKURAN KINERJA ALAT</h3>

                              <h4>1. <b>Daya ulang pembacaan</b></h4>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Beban / Load Kg</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Standar Devisia Kg</b></td>
                                  </tr>
                                  <tr>
                                    <td><input name="beban_load1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="standar_devisia1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="beban_load2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="standar_devisia2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h4>2. <b>Penyimpangan Penunjukan</b></h4>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nilai Referensi Kg</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Pembacaan Timbangan Kg</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Koreksi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Ketidak pastian (95% CL, k=2)</b></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian6" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian7" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi8" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan8" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi8" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian8" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi9" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan9" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi9" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian9" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi10" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan10" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi10" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian10" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="nilai_referensi11" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_timbangan11" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="koreksi11" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="ketidakpastian11" type="text" style="border: 0" placeholder="-"></td>
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
              <div role="tabpanel" class="tab-pane" id="uv">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi UV Sterialsator</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')
                              <h3>PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Instansi</b></td>
                                    <td><input name="nama_instansi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b> Nama Alat</b></td>
                                    <td><input name="nama_alat" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
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

                              <h3>Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
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



                              <h3>Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Badan dan permukaan alat </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Kontak kontak alat/b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Kabel catu utama </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tombol, Saklar dan kontrol</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Pelabelan dan aksesoris </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>6</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Timer Waktu tunda </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. PENGUKURAN KINERJA </h3>
                              <h4>1. 1. Irradiance pada jarak 200 cm* </h4>

                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Pembacaan rata-rata</b></td>
                                    <td><b>Presisi(%)</b></td>
                                    <td><b>Toleransi</b></td>
                                  </tr>
                                  <tr>
                                    <td>Intensitas Cahaya ( μW/cm²/nm)</td>
                                    <td>45,00</td>
                                    <td>0,00</td>
                                    <td>> 40 μW/cm²/nm</td>
                                  </tr>
                                </tbody>
                              </table>
                              <h4>2. Waktu tunda ( delay time)* </h4>

                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Display uut</b></td>
                                    <td><b>Terukur Rata-rata</b></td>
                                    <td><b>Koreksi</b></td>
                                    <td><b>KetidakpastianPengukuran</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
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
              <div role="tabpanel" class="tab-pane" id="amasthesi">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Anasthesi Ventilator</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>

                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                                  </tr>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left">Safety Analyzer</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left">Thermohygrometer </td>
                                    <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left">Flow Analyzer </td>
                                    <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Badan Dan permukaan </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Kotak kotak alat </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Kabel catu utama </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sekering (Fuse) </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tombol, Saklar dan kontrol </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Baterai/Charger </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Selang pernapasan </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Konektor gas </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keberlangsungnan Catu Daya </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Alarm </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Pelabelan dan Aksesoris </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. PENGUKURAN KINERJA </h3>
                              <h4>1. 1. Irradiance pada jarak 200 cm* </h4>

                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>NO</b></td>
                                    <td><b>Parameter</b></td>
                                    <td><b>Satuan </b></td>
                                    <td><b>Setting Alat</b></td>
                                    <td><b>Pembacaan Standa</b></td>
                                    <td><b>Koreksi </b></td>
                                    <td><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="12" colspan=""><b>1</b></td>
                                    <td><b>Tidal Volume </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Minute Volume </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Breath Rate </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>I : E Ratio </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>PIP </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>MAP </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>PEEP </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Ti </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Te </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>PEF </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>PIF </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>FiO2 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                              </table>

                              <table class="table table-hover table-bordered">
                                <thead>
                                  <tr>
                                    <th>NO</th>
                                    <th>Parameter </th>
                                    <th>Satuan </th>
                                    <th>Setting Alat </th>
                                    <th>Pembacaan Standar </th>
                                    <th>Koreksi </th>
                                    <th>Ketidakpastian ( 95% CL, k=2)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th rowspan="12">2</th>
                                    <td><b>Minute Volume</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>Breath Rate</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>I : E Ratio</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>PIP</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>MAP</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>PEEP</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>Ti</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>Te</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>PEF</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>PIF</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>FiO2</b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <table class="table table-hover table-bordered">
                                <thead>
                                  <tr>
                                    <th>NO</th>
                                    <th>Parameter </th>
                                    <th>Satuan </th>
                                    <th>Setting Alat </th>
                                    <th>Pembacaan Standar </th>
                                    <th>Koreksi </th>
                                    <th>Ketidakpastian ( 95% CL, k=2)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th rowspan="12">3</th>
                                    <td><b>Tidal Volume </b></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>Minute Volume</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>Breath Rate</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>I : E Ratio</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>PIP</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>MAP</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>PEEP</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>Ti</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>Te</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>PEF</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>PIF</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><b>FiO2</b> </td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
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
              <div role="tabpanel" class="tab-pane" id="patient_monitor">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Patient Monitor</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>

                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> Safety Analyzer with ECG Simulator</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left">Thermohygrometer, Merk: Sanfix</td>
                                    <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left">NIBP Simulator</td>
                                    <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left">SPO2 Simulator</td>
                                    <td><input name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Badan dan Permukaan Alat</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kotak Kontak Alat</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kabel Catu Utama</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Sekering Pengaman</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kabel Tranduser</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tombol Saklar dan Kontrol</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_6" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tampilan dan indikator</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_7" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_7" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. PENGUKURAN KINERJA </h3>
                              <h4>1. 1. Irradiance pada jarak 200 cm* </h4>

                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Setting Standar </b></td>
                                    <td><b>Rata-rata Hasil Ukur</b></td>
                                    <td><b>Koreksi</b></td>
                                    <td><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="12" colspan=""><b>Saturasi Oksigen ( % ) O2 </b></td>
                                    <td><b>98 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_1" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_1" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_1" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>93 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_2" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_2" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_2" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>92 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_3" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_3" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_3" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>85 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_4" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_4" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_4" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>30 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_5" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_5" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_5" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>90 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_6" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_6" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_6" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>70 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_7" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_7" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_7" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>88 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_8" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_8" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_8" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>90 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_9" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_9" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_9" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>

                                </tbody>
                                <tbody>
                                  <tr>
                                    <td rowspan="6" colspan=""><b>Respirasi (BrPM)</b></td>
                                    <td><b>30 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_brmp_1" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_brmp_1" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_brmp_1" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>60 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_brmp_2" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_brmp_2" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_brmp_2" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>80 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_brmp_3" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_brmp_3" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_brmp_3" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>120 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_brmp_4" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_brmp_4" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_brmp_4" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>180 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_brmp_5" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_brmp_5" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_brmp_5" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>240 </b></td>
                                    <td><b><input name="rata-rata_hasil_ukur_brmp_6" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="koreksi_brmp_6" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="ketidakpastian_brmp_6" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>

                                  <h4>1. 1. Irradiance pada jarak 200 cm* </h4>

                                  <table class="table table-hover table-bordered">
                                    <tbody>
                                      <tr>
                                        <td><b>Parameter</b></td>
                                        <td><b>Setting Standar </b></td>
                                        <td><b>Rata-rata Hasil Ukur</b></td>
                                        <td><b>Koreksi</b></td>
                                        <td><b>Pengukuran Ketidakpastian</b></td>
                                      </tr>
                                      <tr>
                                        <td rowspan="12" colspan=""><b>Heart Rate </b></td>
                                        <td><b>30 </b></td>
                                        <td><b><input name="heart_rate30_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate30_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate30_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>60 </b></td>
                                        <td><b><input name="heart_rate60_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate60_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate60_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>120 </b></td>
                                        <td><b><input name="heart_rate120_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate120_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate120_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>180 </b></td>
                                        <td><b><input name="heart_rate180_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate180_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate180_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>240 </b></td>
                                        <td><b><input name="heart_rate240_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate240_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="heart_rate240_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table class="table table-hover table-bordered">
                                    <tbody>
                                      <tr>
                                        <td><b>Parameter</b></td>
                                        <td><b>Setting Standar </b></td>
                                        <td><b>Rata-rata Hasil Ukur</b></td>
                                        <td><b>Koreksi</b></td>
                                        <td><b>Pengukuran Ketidakpastian</b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>120 </b></td>
                                        <td><b><input name="systole120_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole120_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole120_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>93 </b></td>
                                        <td><b><input name="mean93_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean93_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean93_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>80 </b></td>
                                        <td><b><input name="diastole80_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole80_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole80_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>150 </b></td>
                                        <td><b><input name="systole150_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole150_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole150_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>116 </b></td>
                                        <td><b><input name="mean116_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean116_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean116_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>100 </b></td>
                                        <td><b><input name="diastole100_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole100_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole100_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>200 </b></td>
                                        <td><b><input name="systole200_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole200_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole200_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>166 </b></td>
                                        <td><b><input name="mean160_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean160_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean160_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>150 </b></td>
                                        <td><b><input name="diastole150_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole150_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole150_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>255 </b></td>
                                        <td><b><input name="systole255_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole255_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole255_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>215 </b></td>
                                        <td><b><input name="mean215_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean215_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean215_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>195 </b></td>
                                        <td><b><input name="diastole195_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole195_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole195_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>60 </b></td>
                                        <td><b><input name="systole60_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole60_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole60_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>40 </b></td>
                                        <td><b><input name="mean40_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean40_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean40_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>30 </b></td>
                                        <td><b><input name="diastole30_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole30_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole30_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>80 </b></td>
                                        <td><b><input name="systole80_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole80_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole80_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>60 </b></td>
                                        <td><b><input name="mean60_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean60_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean60_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>50 </b></td>
                                        <td><b><input name="diastole50_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole50_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole50_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>100 </b></td>
                                        <td><b><input name="systole100_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole100_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="systole100_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>76 </b></td>
                                        <td><b><input name="mean76_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean76_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="mean76_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>65 </b></td>
                                        <td><b><input name="diastole65_1" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole65_2" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="diastole65_3" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table class="table table-hover table-bordered">
                                    <tbody>
                                      <tr>
                                        <td><b>Parameter</b></td>
                                        <td><b>Setting Standar </b></td>
                                        <td><b>Rata-rata Hasil Ukur</b></td>
                                        <td><b>Koreksi</b></td>
                                        <td><b>Pengukuran Ketidakpastian</b></td>
                                      </tr>
                                      <tr>
                                        <td rowspan="12" colspan=""><b>Heart Rate </b></td>
                                        <td><b>30 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>60 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>120 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>180 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>240 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table class="table table-hover table-bordered">
                                    <tbody>
                                      <tr>
                                        <td><b>Parameter</b></td>
                                        <td><b>Setting Standar </b></td>
                                        <td><b>Rata-rata Hasil Ukur</b></td>
                                        <td><b>Koreksi</b></td>
                                        <td><b>Pengukuran Ketidakpastian</b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>120 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>93 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>80 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>150 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>116 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>100 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>200 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>166 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>150 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>255 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>215 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>195 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>60 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>40 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>30 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>80 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>60 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>50 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                    </tbody>
                                    <tbody>
                                      <tr>
                                        <td><b>Systole </b></td>
                                        <td><b>100 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>mean </b></td>
                                        <td><b>76 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Diastole </b></td>
                                        <td><b>65 </b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                        <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
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
              <div role="tabpanel" class="tab-pane" id="vital_monitor">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi BSM - Vital Sign Monitor</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>

                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> Thermohygrometer, Merk: Sanfix , Model/Type: TH-303, S/N 1409688 (Tertelusur ke LK-031-IDN)</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left">NIBP Simulator, Merk: Accupulse, Model/Type: -, S/N HH12080322 (-)</td>
                                    <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left">SPO2 Simulator, Merk: Fluke , Model/Type: Index 2, S/N 9859005 (-)</td>
                                    <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Badan dan Permukaan Alat</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kotak Kontak Alat</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kabel Catu Utama</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Sekering Pengaman</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kabel Tranduser</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tombol Saklar dan Kontrol</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tampilan dan indikator</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                              <h4>1.SPO2*</h4>

                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Setting Standar </b></td>
                                    <td><b>Rata-rata Hasil Ukur</b></td>
                                    <td><b>Koreksi</b></td>
                                    <td><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="12" colspan=""><b>Saturasi Oksigen ( % ) O2 </b></td>
                                    <td><b>98 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>93 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>92 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>85 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>30 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>90 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>70 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>88 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>90 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>

                                </tbody>
                                <tbody>
                                  <tr>
                                    <td rowspan="6" colspan=""><b>Respirasi (BrPM)</b></td>
                                    <td><b>30 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>60 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>80 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>120 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>180 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>240 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>

                                </tbody>
                              </table>
                              <h4>1. 1. Irradiance pada jarak 200 cm* </h4>

                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Setting Standar </b></td>
                                    <td><b>Rata-rata Hasil Ukur</b></td>
                                    <td><b>Koreksi</b></td>
                                    <td><b>Pengukuran Ketidakpastian</b></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="12" colspan=""><b>Heart Rate </b></td>
                                    <td><b>30 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>60 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>120 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>180 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>240 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                              </table>
                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Setting Standar </b></td>
                                    <td><b>Rata-rata Hasil Ukur</b></td>
                                    <td><b>Koreksi</b></td>
                                    <td><b>Pengukuran Ketidakpastian</b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Systole </b></td>
                                    <td><b>120 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>mean </b></td>
                                    <td><b>93 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Diastole </b></td>
                                    <td><b>80 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td><b>Systole </b></td>
                                    <td><b>150 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>mean </b></td>
                                    <td><b>116 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Diastole </b></td>
                                    <td><b>100 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td><b>Systole </b></td>
                                    <td><b>200 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>mean </b></td>
                                    <td><b>166 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Diastole </b></td>
                                    <td><b>150 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td><b>Systole </b></td>
                                    <td><b>255 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>mean </b></td>
                                    <td><b>215 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Diastole </b></td>
                                    <td><b>195 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td><b>Systole </b></td>
                                    <td><b>60 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>mean </b></td>
                                    <td><b>40 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Diastole </b></td>
                                    <td><b>30 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td><b>Systole </b></td>
                                    <td><b>80 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>mean </b></td>
                                    <td><b>60 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Diastole </b></td>
                                    <td><b>50 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td><b>Systole </b></td>
                                    <td><b>100 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>mean </b></td>
                                    <td><b>76 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td><b>Diastole </b></td>
                                    <td><b>65 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
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
              <div role="tabpanel" class="tab-pane" id="chemistry">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Chemistry Analaizer</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>

                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> 1. Safety Analyzer </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> 2. Thermohygrometer</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> 3. Tachometer Counter</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> 4. Stopwatch</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Badan dan Permukaan </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kabel Catu Utama </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kotak Kontak </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Saklar/Kontrol </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Sekring (Fuse)</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>6</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tampilan/Indikator </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                              <h4>1.SPO2*</h4>

                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Nilai</b></td>
                                    <td><b>Result</b></td>
                                    <td><b>Range</b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Absorbance </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Dark Level </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Temperature </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Gain amp (vis.) </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Total Protein </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Triglycerides </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Urea </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Urid Acid </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Glucosa </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>SGOT </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>SGPT </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Creatinine </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
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
              <div role="tabpanel" class="tab-pane" id="cardiotocograph">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Cardiotocograph</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>

                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                                  </tr>

                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> Safety Analyzer with ECG Simulator</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> Thermohygrometer</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> Fetal Simulator</td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kabel Power/Adaptor/Battery </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tombol On Off </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Display/Monitor </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Probe Doppler </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Speaker </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                              <h4>1.SPO2*</h4>

                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Setting Standar </b></td>
                                    <td><b>Rata-rata Hasil Ukur</b></td>
                                    <td><b>Koreksi</b></td>
                                    <td><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="5"><b>"Frekuensi Heart Rate (BPM)*</b></td>
                                    <td colspan=""><b>40 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>60</b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>T120 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>180 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>240 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
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
              <div role="tabpanel" class="tab-pane" id="Defibrilator">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Defibrilator DC Shock</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                                  </tr>

                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> Safety Analyzer with ECG Simulator </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> Thermohygrometer </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> Defibrilator Analyzer </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> Stopwatch </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Badan dan Permukaan Alat </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Kotak Kontak Alat </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>kabel catu utama </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sekering pengaman </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tombol ,Saklar dan Kontrol </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Periksa tombol -tombol fungsi defibrilator </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tampilan dan indikator </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                              <h4>1.SPO2*</h4>

                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Setting Standar </b></td>
                                    <td><b>Rata-rata Hasil Ukur</b></td>
                                    <td><b>Koreksi</b></td>
                                    <td><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="8"><b>Energi (joule) </b></td>
                                    <td colspan=""><b>10 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>20</b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>30 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>50 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>100 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>150 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>200 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>300 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                                <table class="table table-hover table-bordered">
                                  <tbody>
                                    <tr>
                                      <td><b>Parameter</b></td>
                                      <td><b>"Setting Max Pada Alat </b></td>
                                      <td><b>Rata-rata Hasil Ukur</b></td>
                                      <td><b>Koreksi</b></td>
                                      <td><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                                    </tr>
                                    <tr>
                                      <td rowspan="8"><b>Energi (joule) </b></td>
                                      <td colspan=""><b>300 </b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="table table-hover table-bordered">
                                  <tbody>
                                    <tr>
                                      <td><b>Setting Energi Max Pada Alat </b></td>
                                      <td><b>pembacaan Waktu pengisian pada standar </b></td>
                                      <td><b>Toleransi</b></td>
                                    </tr>
                                    <tr>
                                      <td colspan=""><b>300 </b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    </tr>
                                  </tbody>
                                </table>
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
              <div role="tabpanel" class="tab-pane" id="DefibrilatorMonitor">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Defibrilator Monitor</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                                  </tr>

                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>Safety Analyzer with ECG Simulator </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>Thermohygrometer </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>Defibrilator Analyzer </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>Stopwatch </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>



                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Badan dan Permukaan Alat </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kotak Kontak Alat </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> kabel catu utama </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Sekering pengaman </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tombol ,Saklar dan Kontrol </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Periksa tombol -tombol fungsi defibrilator Whit monitor </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tampilan dan indikator </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                              <h4>1.SPO2*</h4>

                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Setting Standar </b></td>
                                    <td><b>Rata-rata Hasil Ukur</b></td>
                                    <td><b>Koreksi</b></td>
                                    <td><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="8"><b>Energi (joule) </b></td>
                                    <td colspan=""><b>10 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>20</b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>30 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>50 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>100 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>150 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>200 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>300 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                                <table class="table table-hover table-bordered">
                                  <tbody>
                                    <tr>
                                      <td><b>Parameter</b></td>
                                      <td><b>"Setting Max Pada Alat </b></td>
                                      <td><b>Rata-rata Hasil Ukur</b></td>
                                      <td><b>Koreksi</b></td>
                                      <td><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                                    </tr>
                                    <tr>
                                      <td rowspan="8"><b>Energi (joule) </b></td>
                                      <td colspan=""><b>300 </b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="table table-hover table-bordered">
                                  <tbody>
                                    <tr>
                                      <td><b>Setting Energi Max Pada Alat </b></td>
                                      <td><b>pembacaan Waktu pengisian pada standar </b></td>
                                      <td><b>Toleransi</b></td>
                                    </tr>
                                    <tr>
                                      <td colspan=""><b>300 </b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                      <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    </tr>
                                  </tbody>
                                </table>
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
              <div role="tabpanel" class="tab-pane" id="DentralUnit">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Dentral Unit</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                                  </tr>

                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>Electro Safety Analyzer </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                  <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                  <td class="table-info" colspan="1" align="left"> <b>Thermohygrometer </b> </td>
                                  <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                  <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                  <td class="table-info" colspan="1" align="left"> <b>Lux Meter </b> </td>
                                  <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                  <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                  <td class="table-info" colspan="1" align="left"> <b>Tachometer </b> </td>
                                  <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                  <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                  <td class="table-info" colspan="1" align="left"> <b>Digital Pressure Meter </b> </td>
                                  <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                  <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                  <td class="table-info" colspan="1" align="left"> <b>Meteran </b> </td>
                                  <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                  <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>



                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Badan dan permukaan </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kabel power </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Aksesoris </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tombol dan control </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Lampu dan reflektor </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Handle dan pengaturan mekanik lampu </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Lengan Pivot dan Nampan/Meja Alat </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Spitton Bowl </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kursi Hidrolis </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                              <h4>2. Pengukuran Illumination (Klux) * </h4>

                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Terukur Rata-rata Pada Standar</b></td>
                                    <td><b>Toleransi</b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Maximum illuminance (Klux) </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>

                                </tbody>
                              </table>
                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Terukur Rata-rata Pada Standar</b></td>
                                    <td><b>Toleransi</b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Kecepatan low Speed (rpm) </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Kecepatan High Speed (rpm) </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>

                                </tbody>
                              </table>
                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Display Alat</b></td>
                                    <td><b>Terukur Rata-rata Pada Standar</b></td>
                                    <td><b>Toleransi</b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Tekanan Semprot Udara (psi) </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                </tbody>
                              </table>
                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Parameter</b></td>
                                    <td><b>Terukur Rata-rata Pada Standar</b></td>
                                    <td><b>Toleransi</b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Saliva Suction (mmHg) </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>Blood Suction (mmHg) </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
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
              <div role="tabpanel" class="tab-pane" id="Electrolit">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi Electrolit</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>1. Thermohygrometer,
                                      </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>Water Bash</b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>


                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Display Unit</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tombol On/Off</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Panel Kontrol</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                              <h4>2. Pengukuran Illumination (Klux) * </h4>


                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>LOT</b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>

                                </tbody>
                              </table>
                              <table class="table table-hover table-bordered">
                                <tbody>
                                  <tr>

                                    <td><b>No</b></td>
                                    <td><b>Parameter</b></td>
                                    <td><b>Range Normal</b></td>
                                    <td><b>Result</b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>1</b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>2 </b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                  </tr>
                                  <tr>
                                    <td colspan=""><b>3</b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                                    <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
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
              <div role="tabpanel" class="tab-pane" id="ENT">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                      <div class="panel-heading no-print">
                        <h1>Lembar Kerja Pengujian dan Kalibrasi ENT Treatment</h1>
                      </div>

                      <div class="panel-body panel-form">
                        <div class="row">
                          <div class="col-md-10 col-sm-12">
                            <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                              @csrf
                              @method('POST')

                              <h3>A. Data Alat Pelanggan</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                                    <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                                    <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                              <h3>B. PELAKSANAAN KALIBRASI</h3>

                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                                    <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                                    <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                                    <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>

                              </table>

                              <h3>C. Alat Yang digunakan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>Digital Pressure Meter
                                      </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>Electro Safety Analyzer
                                      </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>Termohygrometer
                                      </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"> <b>LUX Meter
                                      </b> </td>
                                    <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                </tbody>
                              </table>

                              <h3>D. Pengukuran Kondisi Ruangan</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                                    <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                                    <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>


                              <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                              <table class="table table-hover table-bordered" style=" width:100%">
                                <tbody>


                                  <tr>

                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Badan dan permukaan alat </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kotak kontak alat </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Kabel catu utama </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Sekering pengaman </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tombol, saklar dan kontrol </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tabung dan selang </b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>

                                </tbody>
                              </table>

                              <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                              <table class="table table-hover table-bordered" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>3</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>4</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>


                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>5</b></td>
                                    <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                                    <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                </tbody>
                              </table>

                              <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                              <h4>2. Pengukuran Illumination (Klux) * </h4>


                              <h3>Akurasi Tekanan </h3>
                              <table class="table table-hover table-bordered style=" width:100%">
                                <tbody>
                                  <tr>
                                    <td class="table-info" colspan="1" align="left"><b>No</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                                    <td class="table-info text-center" align="left"><b>Setting Alat (mmHg) </b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Pembacaan Standar (mmHg)</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Koreksi (mmHg)</b></td>
                                    <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran (mmHg)</b></td>
                                  </tr>
                                  <tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="5" align="left"><b>1</b></td>
                                    <td class="table-info" colspan="1" rowspan="5" align="left"><b>Tekanan Naik </b></td>
                                    <td><input name="pembacaan_alat_naik_0_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_0_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_0_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_0_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="pembacaan_alat_naik_50_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_50_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_50_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_50_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="pembacaan_alat_naik_100_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_100_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_100_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_100_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="pembacaan_alat_naik_150_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_150_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_150_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_150_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td><input name="pembacaan_alat_naik_200_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_200_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_200_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_naik_200_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>
                                    <td class="table-info" colspan="1" rowspan="6" align="left"><b>2</b></td>
                                    <td class="table-info" colspan="1" rowspan="6" align="left"><b>Tekanan Turun </b></td>
                                    <td><input name="pembacaan_alat_turun_0_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_0_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_0_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_0_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>

                                    <td><input name="pembacaan_alat_turun_50_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_50_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_50_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_50_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>

                                    <td><input name="pembacaan_alat_turun_100_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_100_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_100_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_100_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>

                                    <td><input name="pembacaan_alat_turun_150_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_150_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_150_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_150_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                  </tr>
                                  <tr>

                                    <td><input name="pembacaan_alat_turun_200_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_200_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_200_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                                    <td><input name="pembacaan_alat_turun_200_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
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



    <div class="row">
      <div class="col">
        <div class="panel panel-default thumbnail">
          <div class="panel-body panel-form">
            <table class="table table-hover table-bordered " id="scollDatatable" style="width:100%">
              <thead class="table-light">
                <tr>
                  <td class="table-primary" rowspan="3"><b>No</b></td>
                  <td class="table-primary" rowspan="3"><b>Tanggal_Pemeliharaan</b></td>
                  <td class="table-primary" rowspan="3"><b>Kegiatan</b></td>
                  <td class="table-primary" rowspan="3"><b>Engineer</b></td>
                  <td class="table-info" colspan="6" align="center"><b>Data_Alat</b></td>
                  <td class="table-success" colspan="7" align="center"><b>Persiapan</b></td>
                  <td class="table-active" colspan="18" align="center"><b>pemantauan_fisik_&_fungsi</b></td>
                  <td class="table-danger" colspan="5" align="center"><b>pemeliharaan_preventife</b></td>
                  <td class="table-info" rowspan="3" align="center"><b>tindakan</b></td>
                  <td class="table-warning" colspan="4" align="center"><b>Suku_Cadang</b></td>
                  <td class="table-primary" rowspan="3"><b>Evaluasi_Dan_Rekomendasi</b></td>
                  <td class="table-primary" rowspan="3"><b>Status</b></td>
                  <td class="table-primary" rowspan="3"><b>Status2</b></td>
                  <td class="table-primary" rowspan="3"><b>Mulai_Bekerja</b></td>
                  <td class="table-primary" rowspan="3"><b>Selesai_Kerja</b></td>
                  <td class="table-primary" rowspan="3"><b>Durasi</b></td>
                  <td class="table-primary" rowspan="3"><b>User</b></td>
                  <td class="table-primary" rowspan="3"><b>Engineer</b></td>

                </tr>

                <tr>
                  <td class="table-info" rowspan="2"><b>Id_Aset_Registrasi</b></td>
                  <td class="table-info" rowspan="2"><b>Nama_Alat</b></td>
                  <td class="table-info" rowspan="2"><b>Serial_Number</b></td>
                  <td class="table-info" rowspan="2"><b>Merek</b></td>
                  <td class="table-info" rowspan="2"><b>Tipe</b></td>
                  <td class="table-info" rowspan="2"><b>Ruangan</b></td>
                  <td class="table-success" rowspan="2"><b>Hand_Hygiene</b></td>
                  <td class="table-success" rowspan="2"><b>Menyiapkan_Alat_&_Bahan_Kerja</b></td>
                  <td class="table-success" rowspan="2"><b>Alat_Pelindung_Diri</b></td>
                  <td class="table-success" rowspan="2"><b>Mengoprasikan_Alat_Kalibrasi</b></td>
                  <td class="table-success" rowspan="2"><b>KTD</b></td>
                  <td class="table-success" rowspan="2"><b>Mengoprasikan_Alat</b></td>
                  <td class="table-success" rowspan="2"><b>Idntifikasi_Bahaya</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Badan/Selungkup</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Alarm_&_Sistem_Interlock</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Kabel_&_Kelenturannya</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Sistem_Pengunci</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Tombol_&_Saklar</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Label/Penandaan</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Display/Layar</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Aksesoris</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Indikator_Bunyi</b></td>
                  <td class="table-danger" rowspan="2"><b>Pembersihan</b></td>
                  <td class="table-danger" rowspan="2"><b>Pengencangan_Bagian_Alat</b></td>
                  <td class="table-danger" rowspan="2"><b>Pelumasan</b></td>
                  <td class="table-danger" rowspan="2"><b>Kalibrasi_Berkala</b></td>
                  <td class="table-danger" rowspan="2"><b>Penggantian_Bahan_Habis_Pakai</b></td>
                  <td class="table-warning" rowspan="2"><b>Nama_Suku_Cadang</b></td>
                  <td class="table-warning" rowspan="2"><b>Volume</b></td>
                  <td class="table-warning" rowspan="2"><b>Harga_Satuan</b></td>
                  <td class="table-warning" rowspan="2"><b>Jumlah_Harga</b></td>
                </tr>

                <tr class="text-center">
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                </tr>
              </thead>

            </table>
          </div>

        </div>
      </div>
    </div>
    <!--TABEL-->

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection