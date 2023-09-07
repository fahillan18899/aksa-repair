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

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Sphygmomanometer</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-10 col-sm-12">
                <form action="{{ route('lembar_pemeliharaan.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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
                        <td><input name="tanggal" type="text" style="border: 0" placeholder="-"></td>
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