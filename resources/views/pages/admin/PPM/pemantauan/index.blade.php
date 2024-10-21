@extends('layouts.admin')

@section('content')
@section('title', 'Lembar Pemantauan')

<!-- Content Wrapper. Contains page content -->
 <style>
    input.form-check-input {
    width: 30px;
    height: 30px;
}
 </style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-cogs"></i></div>
      <div class="header-title">
        <h1>Pemantauan Alat</h1>
        <small>Form Pemantauan Alat</small>
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

    <!-- <div class="row">
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
    </div> -->

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="formp1">
            <h1>Form Pemantauan Alat</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <form action="{{ route('pemantauan.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')

                  <input name="id_pemantauan" type="hidden" class="form-control" id="id_pemantauan" placeholder="id">

                  <div class="form-group row">
                    <label for="tanggal" class="col-xs-3 col-form-label">Tanggal pemantauan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal" type="text" class="form-control" id="tanggal" placeholder="Tanggal Pemeliharaan" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kegiatan" class="col-xs-3 col-form-label">Kegiatan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="kegiatan" type="text" class="form-control" id="kegiatan" placeholder="Kegiatan" value="Pemantauan" readonly>
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
                    <label for="data_alat" class="col-xs-3 col-form-label">Data Alat </label>
                    <div class="col-xs-9">
                      <select name="data_alat" class="form-control" id="data_alat">
                        <option>-- Pilih Data Alat --</option>
                        @foreach($Inv as $Inv)
                        <option value=
                       "<?= $Inv['id_aset']; ?>">
                        <?= $Inv['id_aset']; ?>_<?= $Inv['nama_alat']; ?>_<?= $Inv['serial_number']; ?>_<?= $Inv['lokasi_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="idInv_pemantauan" class="col-xs-3 col-form-label">ID Aset 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="idInv_pemantauan" type="text" class="form-control" id="idInv_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat_pemantauan" class="col-xs-3 col-form-label">Nama Alat 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_pemantauan" type="text" class="form-control" id="nama_alat_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_pemantauan" class="col-xs-3 col-form-label">Serial Number 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number_pemantauan" type="text" class="form-control" id="serial_number_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_pemantauan" class="col-xs-3 col-form-label">Merek 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_pemantauan" type="text" class="form-control" id="merek_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type_pemantauan" class="col-xs-3 col-form-label">Type 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_pemantauan" type="text" class="form-control" id="type_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ruangan_pemantauan" class="col-xs-3 col-form-label">Ruangan 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ruangan_pemantauan" type="text" class="form-control" id="ruangan_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PERSIAPAN</h3>
                    </div>
                    <br>
                  </center>
                    <div class="row">
                        <div class="col">
                            <label for="hand_hygiene" class="col-xs-6 col-form-label">Hand Hygiene</label>
                            <input name="hand_hygiene" class="form-check-input" type="hidden" value="Tidak" id="hand_hygiene">
                            <input name="hand_hygiene" class="form-check-input" type="checkbox" value="Ya" checked id="hand_hygiene">
                        </div>
                        <div class="col">
                            <label for="menyiapkan_alat_dan_bahan" class="col-xs-6 col-form-label">Menyiapkan Alat & Bahan </label>
                            <input name="menyiapkan_alat_dan_bahan" class="form-check-input" type="hidden" value="Tidak" id="menyiapkan_alat_dan_bahan">
                            <input name="menyiapkan_alat_dan_bahan" class="form-check-input" type="checkbox" value="Ya" checked id="menyiapkan_alat_dan_bahan">
                        </div>
                        <div class="col">
                            <label for="alat_pelindung_diri" class="col-xs-6 col-form-label">Alat Pelindung Diri </label>
                            <input name="alat_pelindung_diri" class="form-check-input" type="hidden" value="Tidak" id="alat_pelindung_diri">
                            <input name="alat_pelindung_diri" class="form-check-input" type="checkbox" value="Ya" checked id="alat_pelindung_diri">
                        </div>
                        <div class="col">
                            <label for="mengoprasikan_alat_kalibrasi" class="col-xs-6 col-form-label">Mengoprasikan Alat Kalibrasi </label>
                            <input name="mengoprasikan_alat_kalibrasi" class="form-check-input" type="hidden" value="Tidak" id="mengoprasikan_alat_kalibrasi">
                            <input name="mengoprasikan_alat_kalibrasi" class="form-check-input" type="checkbox" value="Ya" checked id="mengoprasikan_alat_kalibrasi">
                        </div>
                        <div class="col">
                            <label for="ktd" class="col-xs-6 col-form-label">KTD </label>
                            <input name="ktd" class="form-check-input" type="hidden" value="Tidak" id="ktd">
                            <input name="ktd" class="form-check-input" type="checkbox" value="Ya" checked id="ktd">
                        </div>
                        <div class="col">
                            <label for="mengoprasikan_alat" class="col-xs-6 col-form-label">Mengoprasikan Alat </label>
                            <input name="mengoprasikan_alat" class="form-check-input" type="hidden" value="Tidak" id="mengoprasikan_alat">
                            <input name="mengoprasikan_alat" class="form-check-input" type="checkbox" value="Ya" checked id="mengoprasikan_alat">
                        </div>
                        <div class="col">
                            <label for="identifikasi_bahaya" class="col-xs-6 col-form-label">Identifikasi Bahaya </label>
                            <input name="identifikasi_bahaya" class="form-check-input" type="hidden" value="Tidak" id="identifikasi_bahaya">
                            <input name="identifikasi_bahaya" class="form-check-input" type="checkbox" value="Ya" checked id="identifikasi_bahaya">
                        </div>
                    </div>
                  <br>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PEMANTAUAN FISIK DAN FUNGSI</h3>
                    </div>
                  </center>

                <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                    <tr>
                        <td align="center"><label for="label">Part Alat</label></td>
                        <td align="center"><label for="fisik">Fisik</label></td>
                        <td align="center"><label for="fungsi">Fungsi</label></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="badan/selungkup">Badan / Selungkup</label></td>
                        <td align="center"><input name="badan_selungkup1" class="form-check-input" type="checkbox" value="Baik" checked id="badan_selungkup1"></td>
                        <td align="center"><input name="badan_selungkup2" class="form-check-input" type="checkbox" value="Baik" checked id="badan_selungkup2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="kabel_kelenturan">Kabel Kelenturan </label></td>
                        <td align="center"><input name="kabel_kelenturan1" class="form-check-input" type="checkbox" value="Baik" checked id="kabel_kelenturan1"></td>
                        <td align="center"><input name="kabel_kelenturan2" class="form-check-input" type="checkbox" value="Baik" checked id="kabel_kelenturan2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="tombol_saklar">Tombol Saklar</label></td>
                        <td align="center"><input name="tombol_saklar1" class="form-check-input" type="checkbox" value="Baik" checked id="tombol_saklar1"></td>
                        <td align="center"><input name="tombol_saklar2" class="form-check-input" type="checkbox" value="Baik" checked id="tombol_saklar2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="display_layar">Display Layar</label></td>
                        <td align="center"><input name="display_layar1" class="form-check-input" type="checkbox" value="Baik" checked id="display_layar1"></td>
                        <td align="center"><input name="display_layar2" class="form-check-input" type="checkbox" value="Baik" checked id="display_layar2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="indikator_bunyi">Indikator Bunyi</label></td>
                        <td align="center"><input name="indikator_bunyi1" class="form-check-input" type="checkbox" value="Baik" checked id="indikator_bunyi1"></td>
                        <td align="center"><input name="indikator_bunyi2" class="form-check-input" type="checkbox" value="Baik" checked id="indikator_bunyi2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="alarm_sistem_interlock">Alarm Sistem Interlock </label></td>
                        <td align="center"><input name="alarm_sistem_interlock1" class="form-check-input" type="checkbox" value="Baik" checked id="alarm_sistem_interlock1"></td>
                        <td align="center"><input name="alarm_sistem_interlock2" class="form-check-input" type="checkbox" value="Baik" checked id="alarm_sistem_interlock2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="sistem_pengunci"> Sistem Pengunci</label></td>
                        <td align="center"><input name="sistem_pengunci1" class="form-check-input" type="checkbox" value="Baik" checked id="sistem_pengunci1"></td>
                        <td align="center"><input name="sistem_pengunci2" class="form-check-input" type="checkbox" value="Baik" checked id="sistem_pengunci2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="label_penandaan">Label Penandaan</label></td>
                        <td align="center"><input name="label_penandaan1" class="form-check-input" type="checkbox" value="Baik" checked id="label_penandaan1"></td>
                        <td align="center"><input name="label_penandaan2" class="form-check-input" type="checkbox" value="Baik" checked id="label_penandaan2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="aksesoris">Aksesoris</label></td>
                        <td align="center"><input name="aksesoris1" class="form-check-input" type="checkbox" value="Baik" checked id="aksesoris1"></td>
                        <td align="center"><input name="aksesoris2" class="form-check-input" type="checkbox" value="Baik" checked id="aksesoris2"></td>
                    </tr>   
                </table>
                <br>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>TINDAKAN </h3>
                    </div>
                    <br>
                  </center>

                  <div class="form-group row">
                    <label for="cek_alat" class="col-xs-3 col-form-label">Cek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <textarea name="cek_alat" class="form-control" placeholder="Cek Alat" id="cek_alat" maxlength="255" rows="5"></textarea>
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>SUKU CADANG </h3>
                    </div>
                    <br>
                  </center>

                  <div class="form-group row">
                    <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sukucadang<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_sukucadang" type="text" class="form-control" id="nama_sukucadang" placeholder="Nama Sukucadang">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="volume" class="col-xs-3 col-form-label">Volume <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="volume" type="text" class="form-control" id="volume" placeholder="Volume">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="harga_satuan" type="text" class="form-control" id="harga_satuan" placeholder="Harga Satuan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jumlah_harga" type="text" class="form-control" id="jumlah_harga" placeholder="Jumlah Harga">
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>EVALUASI & REKOMENDASI</h3>
                    </div>
                    <br>
                  </center>

                  <div class="form-group row">
                    <label for="evaluasi" class="col-xs-3 col-form-label">Evaluasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <textarea name="evaluasi" class="form-control" placeholder="Evaluasi" id="evaluasi" maxlength="255" rows="5"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="status" class="col-xs-3 col-form-label">Status</label>
                    <div class="col-xs-9">
                      <select name="status" class="form-control" id="status">
                        <option value="Selesai Bisa Digunakan">Selesai Bisa Digunakan</option>
                        <option value="Dalam Proses Pengerjaan">Dalam Proses Pengerjaan</option>
                      </select>
                      <input name="status1" type="text" class="form-control" id="status1" placeholder="Keterangan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="foto_pendukung" class="col-xs-3 col-form-label">Foto Pendukung </label>
                    <div class="col-xs-9">
                      <input name="foto_pendukung" class="form-control" type="file" id="foto_pendukung">
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
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                <thead>
                  <tr>
                    <td rowspan="3" class="text-center"><b>No</b></td>
                    <td rowspan="3" class="text-center"><b>Tanggal Pemantauan</b></td>
                    <td rowspan="3" class="text-center"><b>Kegiatan</b></td>
                    <td rowspan="3" class="text-center"><b>Nama Teknisi</b></td>
                    <td colspan="6" class="text-center"><b>Data Alat</b></td>
                    <td colspan="7" class="text-center"><b>Persiapan</b></td>
                    <td colspan="18" class="text-center"><b>Pemantauan fisik fungsi</b></td>
                    <td rowspan="3" class="text-center"><b>Tindakan</b></td>
                    <td colspan="4" class="text-center"><b>Suku Cadang</b></td>
                    <td colspan="4" class="text-center"><b>Evaluasi & Rekomendesi</b></td>
                  </tr>
                  <tr>
                    <!-- Data alat -->
                    <td rowspan="2" class="text-center"><b>ID Aset</b></td>
                    <td rowspan="2" class="text-center"><b>Nama Alat</b></td>
                    <td rowspan="2" class="text-center"><b>Serial Number</b></td>
                    <td rowspan="2" class="text-center"><b>Merek</b></td>
                    <td rowspan="2" class="text-center"><b>Type</b></td>
                    <td rowspan="2" class="text-center"><b>Ruangan</b></td>
                    <!-- Data alat N-->
                    <!-- Persiapan -->
                    <td rowspan="2" class="text-center"><b>Hand Hygiene</b></td>
                    <td rowspan="2" class="text-center"><b>Menyiapkan Alat & Bahan</b></td>
                    <td rowspan="2" class="text-center"><b>Alat Pelindung Diri</b></td>
                    <td rowspan="2" class="text-center"><b>Mengoprasikan Alat Kalibrasi</b></td>
                    <td rowspan="2" class="text-center"><b>KTD</b></td>
                    <td rowspan="2" class="text-center"><b>Mengoprasikan Alat</b></td>
                    <td rowspan="2" class="text-center"><b>Identifikasi Bahaya</b></td>
                    <!-- Persiapan N-->
                    <!-- Pemantauan fisik fungsi -->
                    <td colspan="2" class="text-center"><b>Badan / Selungkup</b></td>
                    <td colspan="2" class="text-center"><b>Kabel Kelenturan</b></td>
                    <td colspan="2" class="text-center"><b>Tombol Saklar</b></td>
                    <td colspan="2" class="text-center"><b>Display Layar</b></td>
                    <td colspan="2" class="text-center"><b>Indikator Bunyi</b></td>
                    <td colspan="2" class="text-center"><b>Alarm Sistem Interlock</b></td>
                    <td colspan="2" class="text-center"><b>Sistem Pengunci</b></td>
                    <td colspan="2" class="text-center"><b>Label Penandaan</b></td>
                    <td colspan="2" class="text-center"><b>Aksesoris</b></td>
                    <!-- Pemantauan fisik fungsi N-->
                    <!-- Suku cadang -->
                    <td rowspan="2" class="text-center"><b>Nama Suku Cadang</b></td>
                    <td rowspan="2" class="text-center"><b>Volume</b></td>
                    <td rowspan="2" class="text-center"><b>Harga Satuan</b></td>
                    <td rowspan="2" class="text-center"><b>Jumlah Harga</b></td>
                    <!-- Suku cadang N-->
                    <!-- Evaluasi -->
                    <td rowspan="2" class="text-center"><b>Evaluasi</b></td>
                    <td rowspan="2" class="text-center"><b>Status</b></td>
                    <td rowspan="2" class="text-center"><b>Keterangan Status</b></td>
                    <td rowspan="2" class="text-center"><b>Foto Pendukung</b></td>
                    <!-- Evaluasi N-->
                  </tr>
                  <tr>
                    <td><b>fisik</b></td>
                    <td><b>fungsi</b></td>
                    <td><b>fisik</b></td>
                    <td><b>fungsi</b></td>
                    <td><b>fisik</b></td>
                    <td><b>fungsi</b></td>
                    <td><b>fisik</b></td>
                    <td><b>fungsi</b></td>
                    <td><b>fisik</b></td>
                    <td><b>fungsi</b></td>
                    <td><b>fisik</b></td>
                    <td><b>fungsi</b></td>
                    <td><b>fisik</b></td>
                    <td><b>fungsi</b></td>
                    <td><b>fisik</b></td>
                    <td><b>fungsi</b></td>
                    <td><b>fisik</b></td>
                    <td><b>fungsi</b></td>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($invPemantauan as $index => $item)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->kegiatan }}</td>
                    <td>{{ $item->engineer }}</td>
                    <td>{{ $item->idInv_pemantauan }}</td>
                    <td>{{ $item->nama_alat_pemantauan }}</td>
                    <td>{{ $item->serial_number_pemantauan }}</td>
                    <td>{{ $item->merek_pemantauan }}</td>
                    <td>{{ $item->type_pemantauan }}</td>
                    <td>{{ $item->ruangan_pemantauan }}</td>
                    <td>{{ $item->hand_hygiene }}</td>
                    <td>{{ $item->menyiapkan_alat_dan_bahan }}</td>
                    <td>{{ $item->alat_pelindung_diri }}</td>
                    <td>{{ $item->mengoprasikan_alat_kalibrasi }}</td>
                    <td>{{ $item->ktd }}</td>
                    <td>{{ $item->mengoprasikan_alat }}</td>
                    <td>{{ $item->identifikasi_bahaya }}</td>
                    <td>{{ $item->badan_selungkup1 }}</td>
                    <td>{{ $item->badan_selungkup2 }}</td>
                    <td>{{ $item->kabel_kelenturan1 }}</td>
                    <td>{{ $item->kabel_kelenturan2 }}</td>
                    <td>{{ $item->tombol_saklar1 }}</td>
                    <td>{{ $item->tombol_saklar2 }}</td>
                    <td>{{ $item->display_layar1 }}</td>
                    <td>{{ $item->display_layar2 }}</td>
                    <td>{{ $item->indikator_bunyi1 }}</td>
                    <td>{{ $item->indikator_bunyi2 }}</td>
                    <td>{{ $item->alarm_sistem_interlock1 }}</td>
                    <td>{{ $item->alarm_sistem_interlock2 }}</td>
                    <td>{{ $item->sistem_pengunci1 }}</td>
                    <td>{{ $item->sistem_pengunci2 }}</td>
                    <td>{{ $item->label_penandaan1 }}</td>
                    <td>{{ $item->label_penandaan2 }}</td>
                    <td>{{ $item->aksesoris1 }}</td>
                    <td>{{ $item->aksesoris2 }}</td>
                    <td>{{ $item->cek_alat }}</td>
                    <td>{{ $item->nama_sukucadang }}</td>
                    <td>{{ $item->volume }}</td>
                    <td>{{ $item->harga_satuan }}</td>
                    <td>{{ $item->jumlah_harga }}</td>
                    <td>{{ $item->evaluasi }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->status1 }}</td>
                    <td><img style="width: 80px; height: 80px;"  alt='No Image' src="{{ URL::asset('storage/'.$item->foto_pendukung) }}"></td>
                    
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
            </div>
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

$('select[name="data_alat"]').on('change', function(){
    var pemantauanInv = $(this).val();
    console.log(pemantauanInv);
    if (pemantauanInv) {
      $.ajax({
        url: '/dashboard/ppm/getPemantauan/' + pemantauanInv,
        type: "GET",
        dataType: "json",
        success: function(data) {
          console.log(data);
          $.each(data, function(key, value){
            $('input[id="idInv_pemantauan"]').val(value.id_aset );
            $('input[id="nama_alat_pemantauan"]').val(value.nama_alat);
            $('input[id="serial_number_pemantauan"]').val(value.serial_number);
            $('input[id="merek_pemantauan"]').val(value.merek);
            $('input[id="type_pemantauan"]').val(value.type);
            $('input[id="ruangan_pemantauan"]').val(value.lokasi_alat);
          });
              }
            });
    } else {
            $('input[id="idInv_pemantauan"]').empty();
            $('input[id="nama_alat_pemantauan"]').empty();
            $('input[id="serial_number_pemantauan"]').empty();
            $('input[id="merek_pemantauan"]').empty();
            $('input[id="type_pemantauan"]').empty();
            $('input[id="ruangan_pemantauan"]').empty();
          }
  })

//   let scanner_teknisi = new Instascan.Scanner({
//     video: document.getElementById('preview_lembar_admin'),
//     mirror: false
//   });
//   scanner_teknisi.addListener('scan', function(content) {
//     const fruits = content.split(',');
//     $("#id_aset_reg").val(fruits[0]);
//     $("#Merek_Alat_reg").val(fruits[3]);
//     $("#Nama_Alat_reg").val(fruits[2]);
//     $("#Serial_Number_reg").val(fruits[5]);
//     $("#Lokasi_Alat_reg").val(fruits[6]);
//     $("#Type_Alat_reg").val(fruits[4]);
//   });

//   Instascan.Camera.getCameras().then(cameras => {
//     if (cameras.length > 0) {
//       scanner_teknisi.start(cameras[1]);
//     } else {
//       console.error("Please enable Camera!");
//     }
//   });
</script>

@endpush
@endsection