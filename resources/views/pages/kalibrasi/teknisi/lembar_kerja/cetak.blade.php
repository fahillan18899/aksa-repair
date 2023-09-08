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

                  <input name="id_ppm" type="hidden" class="form-control" id="id_ppm" placeholder="-">
                  <input name="kode_rs" type="hidden" class="form-control" value="123">

                  <h3>PELAKSANA KALIBRASI</h3>

                  <table class="table table-hover table-bordered style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nama Instansi</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>

                  </table>


                  <h3>PELAKSANA KALIBRASI</h3>
                  <table class="table table-hover table-bordered style=" width:100%">
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
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left">Rigid Silinder </td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left">Stopwatch </td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left">Thermohygrometer </td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>


                  <h3>PELAKSANA KALIBRASI</h3>

                  <h3>Data Alat Pelanggan</h3>
                  <table class="table table-hover table-bordered style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b> Nama Alat</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nomor Seri</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Rentang Ukur</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Resolusi</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>PENGUKURAN KONDISI LINGKUNGAN</h3>
                  <table class="table table-hover table-bordered style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT PELANGGAN</h3>
                  <table class="table table-hover table-bordered style=" width:100%">
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
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Balon Tensi, Tabung, Selang</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Bantalan/Rem</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Filter</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>


                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Gauge/Tabung</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Indikator</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Konektor</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Label</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Manset</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Pengaturan Titik 0</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Pengencang</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Valve Penutup</b></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
                        <td><input type="text" style="border: 0" placeholder="-"></td>
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
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="5" class="text-center">20mmHg/300 Sec</td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>100</b></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>150</b></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>200</b></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>5</b></td>
                        <td class="table-info" colspan="1" align="left"><b>250</b></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
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
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
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
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">50</td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">100</td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">150</td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">200</td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">250</td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" rowspan="6" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" rowspan="6" align="left"><b>Turun </b></td>
                        <td rowspan="1" class="text-center">0</td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">50</td>

                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">100</td>

                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">150</td>

                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">200</td>

                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">≤ 3 mmHg </td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">250</td>

                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
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