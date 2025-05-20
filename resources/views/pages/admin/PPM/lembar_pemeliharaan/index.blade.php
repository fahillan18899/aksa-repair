@extends('layouts.admin')

@section('content')
@section('title', 'Lembar Pemeliharaan')
<style>
  .modal-body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    /* Pastikan modal body penuh */
  }

  input[readonly] {
    cursor: not-allowed;
  }
</style>
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
      <div class="col-sm-9">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="formp1">
            <h1>Form Pemeliharaan Alat</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <form action="{{ route('lembar_pemeliharaan.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')

                  <input name="id_ppm" type="hidden" class="form-control" id="id_ppm" placeholder="id">
                  <div class="form-group row">
                    <button type="button" class="btn btn-primary mt-2" id="startScan" data-toggle="modal" data-target="#exampleModal">Scan QR</button>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal" class="col-xs-3 col-form-label">Tanggal Pemeliharaan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal" type="text" class="form-control" id="tanggal" placeholder="Tanggal Pemeliharaan" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kegiatan" class="col-xs-3 col-form-label">Kegiatan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="kegiatan" type="text" class="form-control" id="kegiatan" placeholder="Kegiatan" value="Pemeliharaan" readonly>
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
                  <i class="text-danger">*</i><p>Klik input id untuk load data</p>
                  <div class="form-group row">
                    <label for="id_aset" class="col-xs-3 col-form-label">ID Aset <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset" type="text" class="form-control" id="id_ase1t" placeholder="ID Aset"
                      style="cursor: pointer;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" type="text" class="form-control" id="nama_alat1" placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number" class="col-xs-3 col-form-label">Serial Number <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number" type="text" class="form-control" id="serial_number1" placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek" type="text" class="form-control" id="merek1" placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tipe" class="col-xs-3 col-form-label">Type <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tipe" type="text" class="form-control" id="tipe1" placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ruangan" class="col-xs-3 col-form-label">Ruangan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ruangan" type="text" class="form-control" id="ruangan1" placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PERSIAPAN</h3>
                    </div>
                    <br>
                  </center>

                  @php
                  $persiapan = [
                    'hand_hygiene'  => 'Hand Hygiene',
                    'menyiapkan_alat_dan_bahan' => 'Menyiapkan Alat & Bahan',
                    'alat_pelindung_diri' => 'Alat Pelindung Diri',
                    'mengoprasikan_alat_kalibrasi' => 'Mengoprasikan Alat Kalibrasi',
                    'ktd' => 'KTD',
                    'mengoprasikan_alat' => 'Mengoprasikan Alat',
                    'identifikasi_bahaya' => 'Identifikasi Bahaya'
                    ]
                  @endphp
                  @foreach($persiapan as $name => $label)
                  <div class="form-group row">
                    <label for="{{ $name }}" class="col-xs-3 col-form-label">{{ $label }}</label>
                    <div class="col-xs-9">
                      <select name="persiapan[{{ $name }}]" class="form-control">
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                    </div>
                  </div>
                  @endforeach
                
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PEMANTAUAN FISIK DAN FUNGSI</h3>
                    </div>
                    <br>
                  </center>
                  <!---->
                  <div class="form-group row">
                    <label for="badan_selungkup" class="col-xs-3 col-form-label">Badan / Selungkup</label>
                  </div>
                  <div class="form-group row">
                    <label for="badan_selungkup1" class="col-xs-3 col-form-label">Fisik</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[badan_selungkup1]" class="form-control" id="badan_selungkup1">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan1]" id="catatan1" placeholder="Catatan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="badan_selungkup2" class="col-xs-3 col-form-label">Fungsi</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[badan_selungkup2]" class="form-control" id="badan_selungkup2">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan2]" id="catatan2" placeholder="Catatan">
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="alat_sistem_interlock1" class="col-xs-3 col-form-label">Alat Sistem Interlock</label>
                  </div>
                  <div class="form-group row">
                    <label for="alat_sistem_interlock1" class="col-xs-3 col-form-label">Fisik</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[alat_sistem_interlock1]" class="form-control" id="alat_sistem_interlock1">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan3]" id="catatan3" placeholder="Catatan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alat_sistem_interlock2" class="col-xs-3 col-form-label">Fungsi</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[alat_sistem_interlock2]" class="form-control" id="alat_sistem_interlock2">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan4]" id="catatan4" placeholder="Catatan">
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="kabel_kelenturan1" class="col-xs-3 col-form-label">Kabel Kelenturan</label>
                  </div>
                  <div class="form-group row">
                    <label for="kabel_kelenturan1" class="col-xs-3 col-form-label">Fisik</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[kabel_kelenturan1]" class="form-control" id="kabel_kelenturan1">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan5]" id="catatan5" placeholder="Catatan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kabel_kelenturan2" class="col-xs-3 col-form-label">Fungsi</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[kabel_kelenturan2]" class="form-control" id="kabel_kelenturan2">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan6]" id="catatan6" placeholder="Catatan">
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="sistem_pengunci1" class="col-xs-3 col-form-label">Sistem Pengunci</label>
                  </div>
                  <div class="form-group row">
                    <label for="sistem_pengunci1" class="col-xs-3 col-form-label">Fisik</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[sistem_pengunci1]" class="form-control" id="sistem_pengunci1">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan7]" id="catatan7" placeholder="Catatan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="sistem_pengunci2" class="col-xs-3 col-form-label">Fungsi</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[sistem_pengunci2]" class="form-control" id="sistem_pengunci2">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan8]" id="catatan8" placeholder="Catatan">
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="tombol_saklar1" class="col-xs-3 col-form-label">Tombol Saklar</label>
                  </div>
                  <div class="form-group row">
                    <label for="tombol_saklar1" class="col-xs-3 col-form-label">Fisik</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[tombol_saklar1]" class="form-control" id="tombol_saklar1">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan9]" id="catatan9" placeholder="Catatan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tombol_saklar2" class="col-xs-3 col-form-label">Fungsi</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[tombol_saklar2]" class="form-control" id="tombol_saklar2">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan10]" id="catatan10" placeholder="Catatan">
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="label_penandaan1" class="col-xs-3 col-form-label">Label Penandaan</label>
                  </div>
                  <div class="form-group row">
                    <label for="label_penandaan1" class="col-xs-3 col-form-label">Fisik</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[label_penandaan1]" class="form-control" id="label_penandaan1">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan11]" id="catatan11" placeholder="Catatan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="label_penandaan2" class="col-xs-3 col-form-label">Fungsi</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[label_penandaan2]" class="form-control" id="label_penandaan2">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan12]" id="catatan12" placeholder="Catatan">
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="display_layar1" class="col-xs-3 col-form-label">Display Layar</label>
                  </div>
                  <div class="form-group row">
                    <label for="display_layar1" class="col-xs-3 col-form-label">Fisik</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[display_layar1]" class="form-control" id="display_layar1">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan13]" id="catatan13" placeholder="Catatan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="display_layar2" class="col-xs-3 col-form-label">Fungsi</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[display_layar2]" class="form-control" id="display_layar2">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan14]" id="catatan14" placeholder="Catatan">
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="aksesoris1" class="col-xs-3 col-form-label">Aksesoris</label>
                  </div>
                  <div class="form-group row">
                    <label for="aksesoris1" class="col-xs-3 col-form-label">Fisik</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[aksesoris1]" class="form-control" id="aksesoris1">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan15]" id="catatan15" placeholder="Catatan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="aksesoris2" class="col-xs-3 col-form-label">Fungsi</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[aksesoris2]" class="form-control" id="aksesoris2">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan16]" id="catatan16" placeholder="Catatan">
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="indikator_bunyi1" class="col-xs-3 col-form-label">Indikator Bunyi</label>
                  </div>
                  <div class="form-group row">
                    <label for="indikator_bunyi1" class="col-xs-3 col-form-label">Fisik</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[indikator_bunyi1]" class="form-control" id="indikator_bunyi1">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan17]" id="catatan17" placeholder="Catatan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="indikator_bunyi2" class="col-xs-3 col-form-label">Fungsi</label>
                    <div class="col-xs-9">
                      <select name="pemantauan[indikator_bunyi2]" class="form-control" id="indikator_bunyi2">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                        <option value='lainya'>Lainya</option>
                      </select>
                      <input class="form-control" type="text" name="pemantauan[catatan18]" id="catatan18" placeholder="Catatan">
                    </div>
                  </div>
                  <!---->
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PEMELIHARAAN PREVERENTIF </h3>
                    </div>
                    <br>
                  </center>

                  @php
                  $preventif = [
                    'pembersihan' => 'Pembersihan',
                    'pengencangan_bagian_alat' => 'Pengencangan Bagian Alat',
                    'pelumasan' => 'Pelumasan',
                    'kalibrasi_berkala' => 'Kalibrasi Berkala',
                    'penggantian_bahan_habis_pakai' => 'Penggantian Bahan Habis Pakai',
                    ]
                  @endphp
                  @foreach($preventif as $name2 => $label2)
                  <div class="form-group row">
                    <label for="{{ $name2 }}" class="col-xs-3 col-form-label">{{ $label2 }}</label>
                    <div class="col-xs-9">
                      <select name="preverentif[{{ $name2 }}]" class="form-control">
                        <option value="Baik">Baik</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                    </div>
                  </div>
                  @endforeach

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
                    <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sukucadang</label>
                    <div class="col-xs-9">
                      <input name="nama_sukucadang" type="text" class="form-control" id="nama_sukucadang" placeholder="Nama Sukucadang">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="volume" class="col-xs-3 col-form-label">Volume </label>
                    <div class="col-xs-9">
                      <input name="volume" type="text" class="form-control" id="volume" placeholder="Volume">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan </label>
                    <div class="col-xs-9">
                      <input name="harga_satuan" type="text" class="form-control" id="harga_satuan" placeholder="Harga Satuan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga </label>
                    <div class="col-xs-9">
                      <input name="jumlah_harga" type="text" class="form-control" id="jumlah_harga" placeholder="Jumlah Harga" readonly>
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
                        <option value="Selesai Penggantian Aksesoris">Selesai Penggantian
                          Aksesoris</option>
                      </select>
                      <input name="status1" type="text" class="form-control" id="status1" placeholder="Keterangan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="mulai_bekerja" class="col-xs-3 col-form-label">Mulai Bekerja <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="mulai_bekerja" type="text" class="form-control" id="start-time" placeholder="Maulai Bekerja" onkeyup="hitungSelisih()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="selesai_kerja" class="col-xs-3 col-form-label">Selesai Bekerja<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="selesai_kerja" type="text" class="form-control" id="end-time" placeholder="Selesai Bekerja" onkeyup="hitungSelisih()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="durasi" class="col-xs-3 col-form-label">Durasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="durasi" type="text" class="form-control" id="hasil" placeholder="Durasi" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_selesai" class="col-xs-3 col-form-label">Tanggal Selesai<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_selesai" type="date" class="form-control" placeholder="tanggal_selesai">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="user" class="col-xs-3 col-form-label">User<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="user" type="text" class="form-control" id="user" placeholder="User">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="engginer" class="col-xs-3 col-form-label">Teknisi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="engginer" type="text" class="form-control" id="engginer" placeholder="Teknisi">
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
              
              <!--TABEL-->
              <table class="datatable table table-striped table-bordered" id="scollDatatable" style="width:100%">
                <thead class="table-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Pemeliharaan</th>
                    <th scope="col">Id Aset</th>
                    <th scope="col">Nama Alat</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Tombol Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($lembarPemeliharaans as $index => $item)
                  <tr>
                    <td> {{ $index + 1 }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->id_aset }}</td>
                    <td>{{ $item->nama_alat }}</td>
                    <td>{{ $item->merek }}</td>
                    <td>{{ $item->tipe }}</td>
                    <td>{{ $item->serial_number }}</td>
                    <td>{{ $item->ruangan }}</td>
                    <td>
                      <a data-toggle="tooltip" data-placement="right" title="View Detail" href="/dashboard/ppm/lembar_pemeliharaan/{{ $item->id_ppm }}" class="btn btn-xs btn-primary" target="_blank"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--TABEL-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color:white; background-color:#042a4a;">
        <h5 class="modal-title" id="exampleModalLabel">Camera</h5>
      </div>
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">
          <!-- Area scanner -->
          <div id="qr-reader" style="width: 300px; display: none;"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
@push('addon-script')
<script>
  // *Function autofill form perbaikan* //
  $(document).ready(function() {
    $('#id_ase1t').on('click', function() {
      let idAset = $(this).val().trim(); //masukin nilai id yang dipilih ke variabel 
      console.log("ID yang dimasukan :", idAset); // cek id 

      if (!idAset) return; //Kalo kosong proses berhenti

      //Ambil data pake API dan kirim ke masing-masing field / input        
      fetch(`/dashboard/ppm/autofill_pelihara/${encodeURIComponent(idAset)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server: ", data);
          let item = Array.isArray(data) ? data[0] : data || {};
          $('#nama_alat1').val(item.nama_alat || '');
          $('#merek1').val(item.merek || '');
          $('#serial_number1').val(item.serial_number || '');
          $('#tipe1').val(item.type || '');
          $('#ruangan1').val(item.lokasi_alat || '');
        })
        .catch(error => console.error("Error AJAX:", error));
    });
  });
  // *Function autofill form perbaikan* //
</script>
<script src="https://unpkg.com/html5-qrcode"></script>
<script>
  //FUNGSI CAMERA
  document.addEventListener("DOMContentLoaded", function() {
    const qrScanner = document.getElementById("qr-reader");
    const inputField = document.getElementById("id_ase1t");
    const startScanButton = document.getElementById("startScan");

    let scannerActive = false;
    let html5QrCode;

    startScanButton.addEventListener("click", function() {
      if (!scannerActive) {
        qrScanner.style.display = "block"; // Tampilkan scanner
        scannerActive = true;

        html5QrCode = new Html5Qrcode("qr-reader");
        Html5Qrcode.getCameras().then(devices => {
          if (devices.length > 0) {
            let backCamera = devices.find(device => device.label.toLowerCase().includes("back")) || devices[0];

            html5QrCode.start(
              backCamera.id, // Pilih kamera belakang jika tersedia
              {
                fps: 10,
                qrbox: {
                  width: 250,
                  height: 250
                },
                rememberLastUsedCamera: true
              },
              function(decodedText) {
                inputField.value = decodedText; // Isi input dengan hasil scan
                html5QrCode.stop(); // Hentikan scanner setelah berhasil scan
                qrScanner.style.display = "none"; // Sembunyikan scanner
                scannerActive = false;
              },
              function(errorMessage) {
                console.log(errorMessage); // Debug jika gagal scan
              }
            ).catch(err => {
              console.log("Error memulai scanner: ", err);
            });
          }
        }).catch(err => {
          console.log("Tidak dapat mengakses kamera: ", err);
        });
      }
    });
  });
  //FUNGSI CAMERA

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

<script>
    // Menampilkan waktu saat ini di kolom input waktu mulai
    var currentTime = new Date();
    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();
    var currentTimeString = ("0" + currentHours).slice(-2) + ":" + ("0" + currentMinutes).slice(-2);
    document.getElementById("start-time").value = currentTimeString;
     document.getElementById("end-time").value = currentTimeString;
    function hitungSelisih() {
      var startTime = document.getElementById("start-time").value;
      var endTime = document.getElementById("end-time").value;

      var start = new Date("1970-01-01 " + startTime);
      var end = new Date("1970-01-01 " + endTime);

      var diff = end - start;
      var diffHours = Math.floor(diff / (1000 * 60 * 60));
 var diffMinutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
      document.getElementById("hasil").value = diffHours + " jam " + diffMinutes + " menit";
    }
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const hargaInput = document.getElementById("harga_satuan");

    hargaInput.addEventListener("input", function(e) {
        let value = e.target.value.replace(/[^0-9]/g, ""); // Hanya angka
        if (value) {
            e.target.value = formatRupiah(value);
        } else {
            e.target.value = "";
        }
    });

    function formatRupiah(angka) {
        return "Rp " + angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
});
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const volumeInput = document.getElementById("volume");
    const hargaSatuanInput = document.getElementById("harga_satuan");
    const jumlahHargaInput = document.getElementById("jumlah_harga");

    const formatRupiah = (angka) => "Rp " + angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    const cleanRupiah = (angka) => angka.replace(/[^0-9]/g, "");

    const hitungJumlahHarga = () => {
        const volume = parseFloat(volumeInput.value) || 0;
        const hargaSatuan = parseFloat(cleanRupiah(hargaSatuanInput.value)) || 0;
        jumlahHargaInput.value = volume * hargaSatuan ? formatRupiah((volume * hargaSatuan).toString()) : "";
    };

    [hargaSatuanInput, volumeInput].forEach(input => {
        input.addEventListener("input", () => {
            if (input === hargaSatuanInput) input.value = formatRupiah(cleanRupiah(input.value));
            hitungJumlahHarga();
        });
    });
});

</script>
@endpush
@endsection