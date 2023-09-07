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

                  <input name="id_ppm" type="hidden" class="form-control" id="id_ppm" placeholder="id">
                  <input name="kode_rs" type="hidden" class="form-control" value="123">

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PELAKSANA KALIBRASI</h3>
                    </div>
                    <br>
                  </center>

                  <div class="form-group row">
                    <label for="nama_instansi" class="col-xs-3 col-form-label">Nama Instansi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_instansi" type="text" class="form-control" id="nama_instansi" placeholder="Nama Instansi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tempat_kalibrasi" class="col-xs-3 col-form-label">Tempat Kalibrasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tempat_kalibrasi" type="text" class="form-control" id="tempat_kalibrasi" placeholder="Tempat Kalibrasi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal" class="col-xs-3 col-form-label">Tanggal <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal" type="date" class="form-control" id="tanggal" placeholder="Tanggal">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_petugas" class="col-xs-3 col-form-label">Nama Petugas<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_petugas" type="text" class="form-control" id="nama_petugas" placeholder="Nama Petugas">
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PENDATAAN ALAT</h3>
                    </div>
                    <br>
                  </center>
                  <div class="my-4">
                    <h4>DAFTAR ALAT YANG DIGUNAKAN</h4>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number" class="col-xs-3 col-form-label">Nama </label>
                    <label for="serial_number" class="col-xs-3 col-form-label">Merek </label>
                    <label for="serial_number" class="col-xs-3 col-form-label">Type </label>
                    <label for="serial_number" class="col-xs-3 col-form-label">Serial Number </label>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" placeholder="Serial Number" value="Digital Manometer">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                  </div>

                  <div class="form-group row">

                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Rigid Silinder">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1">
                    </div>
                  </div>
                  <div class="form-group row">

                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Stopwatch">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1">
                    </div>
                  </div>
                  <div class="form-group row">

                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Thermohygrometer">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1">
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PELAKSANA KALIBRASI</h3>
                    </div>
                    <br>
                  </center>





                  <div class="form-group row">
                    <label for="nama_instansi" class="col-xs-3 col-form-label">Nama Alat</label>
                    <div class="col-xs-6">
                      <input name="nama_instansi" type="text" class="form-control" id="nama_instansi" placeholder="Nama Instansi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tempat_kalibrasi" class="col-xs-3 col-form-label">Merek/Tipe </label>
                    <div class="col-xs-6">
                      <input name="tempat_kalibrasi" type="text" class="form-control" id="tempat_kalibrasi" placeholder="Tempat Kalibrasi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal" class="col-xs-3 col-form-label">Nomor Seri </label>
                    <div class="col-xs-6">
                      <input name="tanggal" type="text" class="form-control" id="tanggal" placeholder="Tanggal">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_petugas" class="col-xs-3 col-form-label">Resolusi</label>
                    <div class="col-xs-9">
                      <input name="nama_petugas" type="text" class="form-control" id="nama_petugas" placeholder="Nama Petugas">
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PENGUKURAN KONDISI LINGKUNGAN</h3>
                    </div>
                    <br>
                  </center>

                  <div class="form-group row">
                    <label for="serial_number" class="col-xs-4 col-form-label">Parameter </label>
                    <label for="serial_number" class="col-xs-4 col-form-label">Sebelum Kalibrasi </label>
                    <label for="serial_number" class="col-xs-4 col-form-label">Sesudah Kalibrasi </label>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-4">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Suhu" value="Digital Manometer">
                    </div>
                    <div class="col-xs-4">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-4">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-4">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kelembapan" value="Digital Manometer">
                    </div>
                    <div class="col-xs-4">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-4">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                  </div>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT PELANGGAN</h3>
                    </div>
                    <br>
                  </center>


                  <div>
                    <div class="form-group row">
                      <label for="serial_number" class="col-xs-3 col-form-label">Parameter </label>
                      <label for="serial_number" class="col-xs-3 col-form-label">Hasil Pemeriksaan Fisik </label>
                      <label for="serial_number" class="col-xs-3 col-form-label">Hasil Pemeriksaan Fungsi </label>
                      <label for="serial_number" class="col-xs-3 col-form-label">Keterangan </label>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Badan dan Permukaan" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Balon Tensi, Tabung, Selang	" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Bantalan/Rem" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Filter" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Gauge/Tabung" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Indikator	" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Konektor" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Label	" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Manset" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Pengaturan Titik 0" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Pengencang	" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Valve Penutup" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PENGUKURAN KINERJA </h3>
                    </div>
                    <br>
                  </center>
                  <h3>1. Kebocoran Tekanan </h3>
                  <div>

                    <div class="form-group row">
                      <label for="serial_number" class="col-xs-3 col-form-label">Parameter </label>
                      <label for="serial_number" class="col-xs-3 col-form-label">Titik Setting UUT (mmHg) </label>
                      <label for="serial_number" class="col-xs-3 col-form-label">Hasil Pemeriksaan Fungsi </label>
                      <label for="serial_number" class="col-xs-3 col-form-label">Keterangan </label>
                    </div>

                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kelembapan" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kelembapan" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kelembapan" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kelembapan" value="Digital Manometer">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                      <div class="col-xs-3">
                        <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                      </div>
                    </div>
                  </div>
                  <h3>2. Laju buang cepat</h3>


                  <div class="form-group row">
                    <label for="serial_number" class="col-xs-4 col-form-label">Parameter </label>
                    <label for="serial_number" class="col-xs-4 col-form-label">Hasil Pemeriksaan Fisik </label>
                    <label for="serial_number" class="col-xs-4 col-form-label">Hasil Pemeriksaan Fungsi </label>
                  </div>

                  <div class="form-group row">
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kelembapan" value="Digital Manometer">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                  </div>

                  <h3>3. Akurasi Tekanan</h3>

                  <div class="form-group row">
                    <label for="serial_number" class="col-xs-3 col-form-label">Parameter </label>
                    <label for="serial_number" class="col-xs-3 col-form-label">Hasil Pemeriksaan Fisik </label>
                    <label for="serial_number" class="col-xs-3 col-form-label">Hasil Pemeriksaan Fungsi </label>
                    <label for="serial_number" class="col-xs-3 col-form-label">Hasil Pemeriksaan Fungsi </label>
                  </div>

                  <div class="form-group row">
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kelembapan" value="Digital Manometer">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                  </div>


                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>Akurasi Tekanan</h3>
                    </div>
                    <br>
                  </center>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>Kebocoran Tekanan
                      </h3>
                    </div>
                    <br>
                  </center>
                  <div class="form-group row">
                    <label for="serial_number" class="col-xs-4 col-form-label">Setting MMhg </label>
                    <label for="serial_number" class="col-xs-4 col-form-label">Hasil Pemeriksaan </label>
                    <label for="serial_number" class="col-xs-2 col-form-label">mean</label>
                    <label for="serial_number" class="col-xs-2 col-form-label">Stdv </label>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kondisi Lingkungan" value="Digital Manometer">
                    </div>
                    <div class="col-xs-1">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-1">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-1">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-1">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-1">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-1">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-1">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-1">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-1">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                  </div>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h1>Laju Buang Cepat
                        </h3>
                    </div>
                    <br>
                  </center>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>Akurasi Tekanan
                      </h3>
                    </div>
                    <br>
                  </center>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>KESIMPULAN DAN TELAAH TEKNIS

                      </h3>
                    </div>
                    <br>
                  </center>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>REKOMENDASI</h3>
                    </div>
                    <br>
                  </center>

                  <div class="form-group row">
                    <label for="serial_number" class="col-xs-3 col-form-label">Parameter </label>
                    <label for="serial_number" class="col-xs-3 col-form-label">Pemeriksaan dan Pengukuran</label>
                    <label for="serial_number" class="col-xs-3 col-form-label">Rekomendasi</label>
                    <label for="serial_number" class="col-xs-3 col-form-label">Keterangan </label>
                  </div>

                  <div class="form-group row">
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kondisi Lingkungan" value="Digital Manometer">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="Kondisi Fisik dan Komponen" value="Digital Manometer">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                    <div class="col-xs-3">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" value="">
                    </div>
                  </div>


                  <table class="table table-hover table-bordered " id="scollDatatable" style="width:100%">
                    <thead class="table-light">
                      <tr>
                        <td class="table-info" colspan="1" align="center"><b>Data_Alat</b></td>
                        <td class="table-success" colspan="3" align="center"><b>Persiapan</b></td>
                        <td class="table-info" colspan="2" rowspan="2" align="center"><b>Data_Alat</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" rowspan="2"><b>Id_Aset_Registrasi</b></td>
                        <td class="table-success" rowspan="2"><b>Hand_Hygiene</b></td>
                        <td class="table-success" rowspan="2"><b>Menyiapkan_Alat_&_Bahan_Kerja</b></td>
                        <td class="table-success" rowspan="1"><b>Menyiapkan_Alat_&_Bahan_Kerja</b></td>
                        <td class="table-success" rowspan="1"></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text"  style="border: 0" placeholder="id"></td>
                        <td><input type="text"  style="border: 0" placeholder="id"></td>
                        <td><input type="text"  style="border: 0" placeholder="id"></td>
                        <td><input type="text"  style="border: 0" placeholder="id"></td>
                        <td><input type="text"  style="border: 0" placeholder="id"></td>+
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