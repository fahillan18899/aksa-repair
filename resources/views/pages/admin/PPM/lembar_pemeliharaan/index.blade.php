@extends('layouts.admin')

@section('content')
@section('title', 'Lembar Pemeliharaan')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="p-l-30 p-r-30">
            <div class="header-icon"><i class="fa fa-cogs"></i></div>
            <div class="header-title">
                <h1>Pemeliharaan Alat</h1>
                <small>Form Pemeliharaan Alat</small>
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
            <div class="col-sm-3">
                <div class="panel panel-default thumbnail">
                    <div class="panel-heading no-print">
                        <h2 class="text-center">Scan QR Code</h2>
                    </div>
                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div id="app">
                                    <div class="preview-container">
                                        <video id="preview_lembar_admin"></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default thumbnail">

                    <div class="panel-heading no-print">
                        <h1>Form Pemeliharaan Alat</h1>
                    </div>

                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <form action="{{ route('lembar_pemeliharaan.store') }}" class="form-inner"
                                    enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    @csrf
                                    @method('POST')

                                    <input name="id_ppm" type="hidden" class="form-control" id="id_ppm"
                                        placeholder="id">

                                    <div class="form-group row">
                                        <label for="tanggal" class="col-xs-3 col-form-label">Tanggal Pemeliharaan <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="tanggal" type="text" class="form-control" id="tanggal"
                                                placeholder="Tanggal Pemeliharaan" value="<?php echo date('Y-m-d'); ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kegiatan" class="col-xs-3 col-form-label">Kegiatan <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="kegiatan" type="text" class="form-control" id="kegiatan"
                                                placeholder="Kegiatan" value="Pemeliharaan" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="engineer" class="col-xs-3 col-form-label">Nama Teknisi </label>
                                        <div class="col-xs-9">
                                            <select name="engineer" class="form-control" id="engineer">
                                                <option>-- Pilih Teknisi --</option>
                                                @foreach ($teknisis as $teknisi)
                                                    <option value="<?= $teknisi['nama_teknisi'] ?>">
                                                        <?= $teknisi['nama_teknisi'] ?></option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <center>
                                        <div class="row" style="border-style: groove;">
                                            <h3>DATA ALAT</h3>
                                        </div>
                                        <br>
                                    </center>

                                    <div class="form-group row">
                                        <label for="id_aset" class="col-xs-3 col-form-label">ID Aset <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="id_aset" type="text" class="form-control" id="id_ase1t"
                                                placeholder="ID Aset" onkeyup="autofillPemelihara()">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat </label>
                                        <div class="col-xs-9">
                                            <input name="nama_alat" type="text" class="form-control" id="nama_alat1"
                                                placeholder="Nama Alat">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="serial_number" class="col-xs-3 col-form-label">Serial Number <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="serial_number" type="text" class="form-control"
                                                id="serial_number1" placeholder="Serial Number">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="merek" class="col-xs-3 col-form-label">Merek <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="merek" type="text" class="form-control" id="merek1"
                                                placeholder="Merek">
                                        </div>
                                    </div>

                                    <!--<div class="form-group row">
                    <label for="instalasi" class="col-xs-3 col-form-label">Ka Instalasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="instalasi" type="text" class="form-control" id="instalasi" placeholder="Ka Instalasi">
                    </div>
                  </div>-->

                                    <div class="form-group row">
                                        <label for="tipe" class="col-xs-3 col-form-label">Type <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="tipe" type="text" class="form-control" id="tipe1"
                                                placeholder="Type">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="ruangan" class="col-xs-3 col-form-label">Ruangan <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="ruangan" type="text" class="form-control" id="ruangan1"
                                                placeholder="Ruangan">
                                        </div>
                                    </div>

                                    <center>
                                        <div class="row" style="border-style: groove;">
                                            <h3>PERSIAPAN</h3>
                                        </div>
                                        <br>
                                    </center>

                                    <div class="form-group row">
                                        <label for="hand_hygiene" class="col-xs-3 col-form-label">Hand Hygiene
                                        </label>
                                        <div class="col-xs-9">
                                            <select name="hand_hygiene" class="form-control" id="hand_hygiene">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="menyiapkan_alat_dan_bahan"
                                            class="col-xs-3 col-form-label">Menyiapkan Alat & Bahan </label>
                                        <div class="col-xs-9">
                                            <select name="menyiapkan_alat_dan_bahan" class="form-control"
                                                id="menyiapkan_alat_dan_bahan">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alat_pelindung_diri" class="col-xs-3 col-form-label">Alat
                                            Pelindung Diri </label>
                                        <div class="col-xs-9">
                                            <select name="alat_pelindung_diri" class="form-control"
                                                id="alat_pelindung_diri">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mengoprasikan_alat_kalibrasi"
                                            class="col-xs-3 col-form-label">Mengoprasikan Alat Kalibrasi </label>
                                        <div class="col-xs-9">
                                            <select name="mengoprasikan_alat_kalibrasi" class="form-control"
                                                id="mengoprasikan_alat_kalibrasi">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="ktd" class="col-xs-3 col-form-label">KTD </label>
                                        <div class="col-xs-9">
                                            <select name="ktd" class="form-control" id="ktd">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mengoprasikan_alat" class="col-xs-3 col-form-label">Mengoprasikan
                                            Alat </label>
                                        <div class="col-xs-9">
                                            <select name="mengoprasikan_alat" class="form-control"
                                                id="mengoprasikan_alat">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="identifikasi_bahaya" class="col-xs-3 col-form-label">Identifikasi
                                            Bahaya </label>
                                        <div class="col-xs-9">
                                            <select name="identifikasi_bahaya" class="form-control"
                                                id="identifikasi_bahaya">
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <center>
                                        <div class="row" style="border-style: groove;">
                                            <h3>PEMANTAUAN FISIK DAN FUNGSI</h3>
                                        </div>
                                        <br>
                                    </center>
                                    <!---->
                                    <div class="form-group row">
                                        <label for="badan_selungkup" class="col-xs-3 col-form-label">Badan / Selungkup
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="badan_selungkup1" class="col-xs-3 col-form-label">Fisik </label>
                                        <div class="col-xs-9">
                                            <select name="badan_selungkup1" class="form-control"
                                                id="badan_selungkup1">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan1"
                                                id="catatan1" placeholder="Catatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="badan_selungkup2" class="col-xs-3 col-form-label">Fungsi </label>
                                        <div class="col-xs-9">
                                            <select name="badan_selungkup2" class="form-control"
                                                id="badan_selungkup2">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan2"
                                                id="catatan2" placeholder="Catatan">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="form-group row">
                                        <label for="alat_sistem_interlock1" class="col-xs-3 col-form-label">Alat
                                            Sistem Interlock </label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alat_sistem_interlock1" class="col-xs-3 col-form-label">Fisik
                                        </label>
                                        <div class="col-xs-9">
                                            <select name="alat_sistem_interlock1" class="form-control"
                                                id="alat_sistem_interlock1">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan3"
                                                id="catatan3" placeholder="Catatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alat_sistem_interlock2" class="col-xs-3 col-form-label">Fungsi
                                        </label>
                                        <div class="col-xs-9">
                                            <select name="alat_sistem_interlock2" class="form-control"
                                                id="alat_sistem_interlock2">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan4"
                                                id="catatan4" placeholder="Catatan">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="form-group row">
                                        <label for="kabel_kelenturan1" class="col-xs-3 col-form-label">Kabel
                                            Kelenturan </label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kabel_kelenturan1" class="col-xs-3 col-form-label">Fisik </label>
                                        <div class="col-xs-9">
                                            <select name="kabel_kelenturan1" class="form-control"
                                                id="kabel_kelenturan1">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan5"
                                                id="catatan5" placeholder="Catatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kabel_kelenturan2" class="col-xs-3 col-form-label">Fungsi </label>
                                        <div class="col-xs-9">
                                            <select name="kabel_kelenturan2" class="form-control"
                                                id="kabel_kelenturan2">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan6"
                                                id="catatan6" placeholder="Catatan">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="form-group row">
                                        <label for="sistem_pengunci1" class="col-xs-3 col-form-label">Sistem
                                            Pengunci</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sistem_pengunci1" class="col-xs-3 col-form-label">Fisik </label>
                                        <div class="col-xs-9">
                                            <select name="sistem_pengunci1" class="form-control"
                                                id="sistem_pengunci1">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan7"
                                                id="catatan7" placeholder="Catatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sistem_pengunci2" class="col-xs-3 col-form-label">Fungsi </label>
                                        <div class="col-xs-9">
                                            <select name="sistem_pengunci2" class="form-control"
                                                id="sistem_pengunci2">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan8"
                                                id="catatan8" placeholder="Catatan">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="form-group row">
                                        <label for="tombol_saklar1" class="col-xs-3 col-form-label">Tombol
                                            Saklar</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tombol_saklar1" class="col-xs-3 col-form-label">Fisik </label>
                                        <div class="col-xs-9">
                                            <select name="tombol_saklar1" class="form-control" id="tombol_saklar1">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan9"
                                                id="catatan9" placeholder="Catatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tombol_saklar2" class="col-xs-3 col-form-label">Fungsi </label>
                                        <div class="col-xs-9">
                                            <select name="tombol_saklar2" class="form-control" id="tombol_saklar2">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan10"
                                                id="catatan10" placeholder="Catatan">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="form-group row">
                                        <label for="label_penandaan1" class="col-xs-3 col-form-label">Label
                                            Penandaan</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="label_penandaan1" class="col-xs-3 col-form-label">Fisik </label>
                                        <div class="col-xs-9">
                                            <select name="label_penandaan1" class="form-control"
                                                id="label_penandaan1">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan11"
                                                id="catatan11" placeholder="Catatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="label_penandaan2" class="col-xs-3 col-form-label">Fungsi </label>
                                        <div class="col-xs-9">
                                            <select name="label_penandaan2" class="form-control"
                                                id="label_penandaan2">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan12"
                                                id="catatan12" placeholder="Catatan">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="form-group row">
                                        <label for="display_layar1" class="col-xs-3 col-form-label">Display
                                            Layar</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="display_layar1" class="col-xs-3 col-form-label">Fisik </label>
                                        <div class="col-xs-9">
                                            <select name="display_layar1" class="form-control" id="display_layar1">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan13"
                                                id="catatan13" placeholder="Catatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="display_layar2" class="col-xs-3 col-form-label">Fungsi </label>
                                        <div class="col-xs-9">
                                            <select name="display_layar2" class="form-control" id="display_layar2">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan14"
                                                id="catatan14" placeholder="Catatan">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="form-group row">
                                        <label for="aksesoris1" class="col-xs-3 col-form-label">Aksesoris</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aksesoris1" class="col-xs-3 col-form-label">Fisik </label>
                                        <div class="col-xs-9">
                                            <select name="aksesoris1" class="form-control" id="aksesoris1">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan15"
                                                id="catatan15" placeholder="Catatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="aksesoris2" class="col-xs-3 col-form-label">Fungsi </label>
                                        <div class="col-xs-9">
                                            <select name="aksesoris2" class="form-control" id="aksesoris2">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan16"
                                                id="catatan16" placeholder="Catatan">
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="form-group row">
                                        <label for="indikator_bunyi1" class="col-xs-3 col-form-label">Indikator
                                            Bunyi</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="indikator_bunyi1" class="col-xs-3 col-form-label">Fisik </label>
                                        <div class="col-xs-9">
                                            <select name="indikator_bunyi1" class="form-control"
                                                id="indikator_bunyi1">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan17"
                                                id="catatan17" placeholder="Catatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="indikator_bunyi2" class="col-xs-3 col-form-label">Fungsi </label>
                                        <div class="col-xs-9">
                                            <select name="indikator_bunyi2" class="form-control"
                                                id="indikator_bunyi2">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value='lainya'>Lainya</option>
                                            </select>
                                            <input class="form-control" type="text" name="catatan18"
                                                id="catatan18" placeholder="Catatan">
                                        </div>
                                    </div>
                                    <!---->
                                    <center>
                                        <div class="row" style="border-style: groove;">
                                            <h3>PEMELIHARAAN PREVERENTIF </h3>
                                        </div>
                                        <br>
                                    </center>

                                    <div class="form-group row">
                                        <label for="pembersihan" class="col-xs-3 col-form-label">Pembersihan</label>
                                        <div class="col-xs-9">
                                            <select name="pembersihan" class="form-control" id="pembersihan">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="pengencangan_bagian_alat"
                                            class="col-xs-3 col-form-label">Pengencangan Bagian Alat</label>
                                        <div class="col-xs-9">
                                            <select name="pengencangan_bagian_alat" class="form-control"
                                                id="pengencangan_bagian_alat">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="pelumasan" class="col-xs-3 col-form-label">Pelumasan</label>
                                        <div class="col-xs-9">
                                            <select name="pelumasan" class="form-control" id="pelumasan">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kalibrasi_berkala" class="col-xs-3 col-form-label">Kalibrasi
                                            Berkala</label>
                                        <div class="col-xs-9">
                                            <select name="kalibrasi_berkala" class="form-control"
                                                id="kalibrasi_berkala">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="penggantian_bahan_habis_pakai"
                                            class="col-xs-3 col-form-label">Penggantian Bahan Habis Pakai</label>
                                        <div class="col-xs-9">
                                            <select name="penggantian_bahan_habis_pakai" class="form-control"
                                                id="penggantian_bahan_habis_pakai">
                                                <option value="Baik">Baik</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <center>
                                        <div class="row" style="border-style: groove;">
                                            <h3>TINDAKAN </h3>
                                        </div>
                                        <br>
                                    </center>

                                    <div class="form-group row">
                                        <label for="cek_alat" class="col-xs-3 col-form-label">Cek Alat<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <textarea name="cek_alat" class="form-control" placeholder="Cek Alat" id="cek_alat" maxlength="255"
                                                rows="5"></textarea>
                                        </div>
                                    </div>

                                    <center>
                                        <div class="row" style="border-style: groove;">
                                            <h3>SUKU CADANG </h3>
                                        </div>
                                        <br>
                                    </center>

                                    <div class="form-group row">
                                        <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sukucadang<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="nama_sukucadang" type="text" class="form-control"
                                                id="nama_sukucadang" placeholder="Nama Sukucadang">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="volume" class="col-xs-3 col-form-label">Volume <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="volume" type="text" class="form-control" id="volume"
                                                placeholder="Volume">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="harga_satuan" type="text" class="form-control"
                                                id="harga_satuan" placeholder="Harga Satuan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="jumlah_harga" type="text" class="form-control"
                                                id="jumlah_harga" placeholder="Jumlah Harga">
                                        </div>
                                    </div>

                                    <center>
                                        <div class="row" style="border-style: groove;">
                                            <h3>EVALUASI & REKOMENDASI</h3>
                                        </div>
                                        <br>
                                    </center>

                                    <div class="form-group row">
                                        <label for="evaluasi" class="col-xs-3 col-form-label">Evaluasi<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <textarea name="evaluasi" class="form-control" placeholder="Evaluasi" id="evaluasi" maxlength="255"
                                                rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-xs-3 col-form-label">Status</label>
                                        <div class="col-xs-9">
                                            <select name="status" class="form-control" id="status">
                                                <option value="Selesai Bisa Digunakan">Selesai Bisa Digunakan</option>
                                                <option value="Selesai Penggantian Aksesoris">Selesai Penggantian
                                                    Aksesoris</option>
                                            </select>
                                            <input name="status1" type="text" class="form-control" id="status1"
                                                placeholder="Keterangan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mulai_bekerja" class="col-xs-3 col-form-label">Mulai Bekerja <i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="mulai_bekerja" type="date" class="form-control"
                                                id="mulai_bekerja" placeholder="Maulai Bekerja">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="selesai_kerja" class="col-xs-3 col-form-label">Selesai Bekerja<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="selesai_kerja" type="date" class="form-control"
                                                id="selesai_kerja" placeholder="Selesai Bekerja">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="durasi" class="col-xs-3 col-form-label">Durasi<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="durasi" type="text" class="form-control" id="durasi"
                                                placeholder="Durasi">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user" class="col-xs-3 col-form-label">User<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="user" type="text" class="form-control" id="user"
                                                placeholder="User">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="engginer" class="col-xs-3 col-form-label">Teknisi<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="engginer" type="text" class="form-control"
                                                id="engginer" placeholder="Teknisi">
                                        </div>
                                    </div>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="panel panel-default thumbnail">
                    <div class="panel-body panel-form">
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <td class="table-primary" rowspan="3"><b>No</b></td>
                                    <td class="table-primary" rowspan="3"><b>Tanggal_Pemeliharaan</b></td>
                                    <td class="table-primary" rowspan="3"><b>Kegiatan</b></td>
                                    <td class="table-primary" rowspan="3"><b>Engineer</b></td>
                                    <td class="table-info" colspan="6" align="center"><b>Data_Alat</b></td>
                                    <td class="table-success" colspan="7" align="center"><b>Persiapan</b></td>
                                    <td class="table-active" colspan="36" align="center">
                                        <b>pemantauan_fisik_&_fungsi</b>
                                    </td>
                                    <td class="table-danger" colspan="5" align="center">
                                        <b>pemeliharaan_preventife</b>
                                    </td>
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
                                    <td class="table-primary" rowspan="3"><b>Tombol_Aksi</b></td>

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
                                    <td class="table-dark" colspan="4" align="center"><b>Badan/Selungkup</b></td>
                                    <td class="table-dark" colspan="4" align="center">
                                        <b>Alarm_&_Sistem_Interlock</b>
                                    </td>
                                    <td class="table-dark" colspan="4" align="center"><b>Kabel_&_Kelenturannya</b>
                                    </td>
                                    <td class="table-dark" colspan="4" align="center"><b>Sistem_Pengunci</b></td>
                                    <td class="table-dark" colspan="4" align="center"><b>Tombol_&_Saklar</b></td>
                                    <td class="table-dark" colspan="4" align="center"><b>Label/Penandaan</b></td>
                                    <td class="table-dark" colspan="4" align="center"><b>Display/Layar</b></td>
                                    <td class="table-dark" colspan="4" align="center"><b>Aksesoris</b></td>
                                    <td class="table-dark" colspan="4" align="center"><b>Indikator_Bunyi</b></td>
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
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fungsi</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fisik</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fungsi</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fisik</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fungsi</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fisik</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fungsi</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fisik</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fungsi</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fisik</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fungsi</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fisik</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fungsi</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fisik</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fungsi</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fisik</b></td>
                                    <td class="light"><b>catatan</b></td>
                                    <td class="light"><b>Fungsi</b></td>
                                    <td class="light"><b>catatan</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($lembarPemeliharaans as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->kegiatan }}</td>
                                        <td>{{ $item->engineer }}</td>
                                        <td>{{ $item->id_aset }}</td>
                                        <td>{{ $item->nama_alat }}</td>
                                        <td>{{ $item->serial_number }}</td>
                                        <td>{{ $item->merek }}</td>
                                        <td>{{ $item->tipe }}</td>
                                        <td>{{ $item->ruangan }}</td>
                                        <td>{{ $item->hand_hygiene }}</td>
                                        <td>{{ $item->menyiapkan_alat_dan_bahan }}</td>
                                        <td>{{ $item->alat_pelindung_diri }}</td>
                                        <td>{{ $item->mengoprasikan_alat_kalibrasi }}</td>
                                        <td>{{ $item->ktd }}</td>
                                        <td>{{ $item->mengoprasikan_alat }}</td>
                                        <td>{{ $item->identifikasi_bahaya }}</td>
                                        <td>{{ $item->badan_selungkup1 }}</td>
                                        <td>{{ $item->catatan1 }}</td>
                                        <td>{{ $item->badan_selungkup2 }}</td>
                                        <td>{{ $item->catatan2 }}</td>
                                        <td>{{ $item->alat_sistem_interlock1 }}</td>
                                        <td>{{ $item->catatan3 }}</td>
                                        <td>{{ $item->alat_sistem_interlock2 }}</td>
                                        <td>{{ $item->catatan4 }}</td>
                                        <td>{{ $item->kabel_kelenturan1 }}</td>
                                        <td>{{ $item->catatan5 }}</td>
                                        <td>{{ $item->kabel_kelenturan2 }}</td>
                                        <td>{{ $item->catatan6 }}</td>
                                        <td>{{ $item->sistem_pengunci1 }}</td>
                                        <td>{{ $item->catatan7 }}</td>
                                        <td>{{ $item->sistem_pengunci2 }}</td>
                                        <td>{{ $item->catatan8 }}</td>
                                        <td>{{ $item->tombol_saklar1 }}</td>
                                        <td>{{ $item->catatan9 }}</td>
                                        <td>{{ $item->tombol_saklar2 }}</td>
                                        <td>{{ $item->catatan10 }}</td>
                                        <td>{{ $item->label_penandaan1 }}</td>
                                        <td>{{ $item->catatan11 }}</td>
                                        <td>{{ $item->label_penandaan2 }}</td>
                                        <td>{{ $item->catatan12 }}</td>
                                        <td>{{ $item->display_layar1 }}</td>
                                        <td>{{ $item->catatan13 }}</td>
                                        <td>{{ $item->display_layar2 }}</td>
                                        <td>{{ $item->catatan14 }}</td>
                                        <td>{{ $item->aksesoris1 }}</td>
                                        <td>{{ $item->catatan15 }}</td>
                                        <td>{{ $item->aksesoris2 }}</td>
                                        <td>{{ $item->catatan16 }}</td>
                                        <td>{{ $item->indikator_bunyi1 }}</td>
                                        <td>{{ $item->catatan17 }}</td>
                                        <td>{{ $item->indikator_bunyi2 }}</td>
                                        <td>{{ $item->catatan18 }}</td>
                                        <td>{{ $item->pembersihan }}</td>
                                        <td>{{ $item->pengencangan_bagian_alat }}</td>
                                        <td>{{ $item->pelumasan }}</td>
                                        <td>{{ $item->kalibrasi_berkala }}</td>
                                        <td>{{ $item->penggantian_bahan_habis_pakai }}</td>
                                        <td>{{ $item->cek_alat }}</td>
                                        <td>{{ $item->nama_sukucadang }}</td>
                                        <td>{{ $item->volume }}</td>
                                        <td>{{ $item->harga_satuan }}</td>
                                        <td>{{ $item->jumlah_harga }}</td>
                                        <td>{{ $item->evaluasi }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->status1 }}</td>
                                        <td>{{ $item->mulai_bekerja }}</td>
                                        <td>{{ $item->selesai_kerja }}</td>
                                        <td>{{ $item->durasi }}</td>
                                        <td>{{ $item->user }}</td>
                                        <td>{{ $item->engginer }}</td>
                                        <td>
                                            <a data-toggle="tooltip" data-placement="right" title="Cetak"
                                                href="/dashboard/ppm/lembar_pemeliharaan/cetak_pemeliharaan/{{ $item->id_ppm }}"
                                                class="btn btn-xs btn-primary" target="_blank"><i class="fa fa-print"></i></a>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="7">Data Kosong</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!--TABEL-->


        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@push('addon-script')
    <script>

        let scanner_teknisi = new Instascan.Scanner({
            video: document.getElementById('preview_lembar_admin'),
            mirror: false
        });
        scanner_teknisi.addListener('scan', function(content) {
            const fruits = content.split(',');
            $("#id_aset_reg").val(fruits[0]);
            $("#Merek_Alat_reg").val(fruits[3]);
            $("#Nama_Alat_reg").val(fruits[2]);
            $("#Serial_Number_reg").val(fruits[5]);
            $("#Lokasi_Alat_reg").val(fruits[6]);
            $("#Type_Alat_reg").val(fruits[4]);
        });

        Instascan.Camera.getCameras().then(cameras => {
            if (cameras.length > 0) {
                scanner_teknisi.start(cameras[1]);
            } else {
                console.error("Please enable Camera!");
            }
        });

        function autofillPemelihara() {
            let idars = $("#id_ase1t").val();
            $.ajax({
                url: '{{ url('/dashboard/ppm/autofill/') }}/' + idars,
                method: 'GET', // HTTP method (e.g., GET, POST)
                data: {
                    idars: idars
                },
                dataType: 'json',
                success: function(data) {
                    $("#nama_alat1").val(data.nama_alat_reg);
                    $("#merek1").val(data.merek_alat_reg);
                    $("#serial_number1").val(data.serial_number_reg);
                    $("#tipe1").val(data.type);
                    $("#ruangan1").val(data.lokasi_alat_reg);

                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
        


        /*badan_selungkup1*/
        $("input[id=catatan1]").hide();
        $('#badan_selungkup1').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan1]").show();
                $("select[id=badan_selungkup1]").hide();
            } else {
                $("input[id=catatan1]").hide();
            }
        });

        // create script select wirh id badan_selungkup1?

        var getSelect = document.querySelectorAll('.form-control');

        getSelect.forEach(function(option) {
            option.addEventListener('change', function(e) {
                var target = e.target.id;
                console.log(target);
            })
        });

        /*badan_selungkup2*/
        $("input[id=catatan2]").hide();
        $('#badan_selungkup2').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan2]").show();
                $("select[id=badan_selungkup2]").hide();
            } else {
                $("input[id=catatan2]").hide();
            }
        });
        /*alat_sistem_interlock1*/
        $("input[id=catatan3]").hide();
        $('#alat_sistem_interlock1').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan3]").show();
                $("select[id=alat_sistem_interlock1]").hide();
            } else {
                $("input[id=catatan3]").hide();
            }
        });
        /*alat_sistem_interlock2*/
        $("input[id=catatan4]").hide();
        $('#alat_sistem_interlock2').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan4]").show();
                $("select[id=alat_sistem_interlock2]").hide();
            } else {
                $("input[id=catatan4]").hide();
            }
        });
        /*kabel_kelenturan1*/
        $("input[id=catatan5]").hide();
        $('#kabel_kelenturan1').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan5]").show();
                $("select[id=kabel_kelenturan1]").hide();
            } else {
                $("input[id=catatan5]").hide();
            }
        });
        /*kabel_kelenturan2*/
        $("input[id=catatan6]").hide();
        $('#kabel_kelenturan2').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan6]").show();
                $("select[id=kabel_kelenturan2]").hide();
            } else {
                $("input[id=catatan6]").hide();
            }
        });
        /*sistem_pengunci1*/
        $("input[id=catatan7]").hide();
        $('#sistem_pengunci1').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan7]").show();
                $("select[id=sistem_pengunci1]").hide();
            } else {
                $("input[id=catatan7]").hide();
            }
        });
        /*sistem_pengunci2*/
        $("input[id=catatan8]").hide();
        $('#sistem_pengunci2').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan8]").show();
                $("select[id=sistem_pengunci2]").hide();
            } else {
                $("input[id=catatan8]").hide();
            }
        });
        /*tombol_saklar1*/
        $("input[id=catatan9]").hide();
        $('#tombol_saklar1').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan9]").show();
                $("select[id=tombol_saklar1]").hide();
            } else {
                $("input[id=catatan9]").hide();
            }
        });
        /*tombol_saklar2*/
        $("input[id=catatan10]").hide();
        $('#tombol_saklar2').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan10]").show();
                $("select[id=tombol_saklar2]").hide();
            } else {
                $("input[id=catatan10]").hide();
            }
        });
        /*label_penandaan1*/
        $("input[id=catatan11]").hide();
        $('#label_penandaan1').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan11]").show();
                $("select[id=label_penandaan1]").hide();
            } else {
                $("input[id=catatan11]").hide();
            }
        });
        /*label_penandaan2*/
        $("input[id=catatan12]").hide();
        $('#label_penandaan2').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan12]").show();
                $("select[id=label_penandaan2]").hide();
            } else {
                $("input[id=catatan12]").hide();
            }
        });
        /*display_layar1*/
        $("input[id=catatan13]").hide();
        $('#display_layar1').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan13]").show();
                $("select[id=display_layar1]").hide();
            } else {
                $("input[id=catatan13]").hide();
            }
        });
        /*display_layar2*/
        $("input[id=catatan14]").hide();
        $('#display_layar2').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan14]").show();
                $("select[id=display_layar2]").hide();
            } else {
                $("input[id=catatan14]").hide();
            }
        });
        /*aksesoris1*/
        $("input[id=catatan15]").hide();
        $('#aksesoris1').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan15]").show();
                $("select[id=aksesoris1]").hide();
            } else {
                $("input[id=catatan15]").hide();
            }
        });
        /*aksesoris2*/
        $("input[id=catatan16]").hide();
        $('#aksesoris2').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan16]").show();
                $("select[id=aksesoris2]").hide();
            } else {
                $("input[id=catatan16]").hide();
            }
        });
        /*indikator_bunyi1*/
        $("input[id=catatan17]").hide();
        $('#indikator_bunyi1').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan17]").show();
                $("select[id=indikator_bunyi1]").hide();
            } else {
                $("input[id=catatan17]").hide();
            }
        });
        /*indikator_bunyi2*/
        $("input[id=catatan18]").hide();
        $('#indikator_bunyi2').on('change', function() {
            if ((this.value) == 'lainya') {
                $("input[id=catatan18]").show();
                $("select[id=indikator_bunyi2]").hide();
            } else {
                $("input[id=catatan18]").hide();
            }
        });
    </script>
@endpush
@endsection
