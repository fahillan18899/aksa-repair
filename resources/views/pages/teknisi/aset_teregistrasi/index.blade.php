@extends('layouts.teknisi')

@section('content')
@section('title', 'Aset Teregistrasi')
<style>
    input[readonly] {
    cursor: not-allowed;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>MENU FORM TEREGISTRASI</h1>
        <small>Form Teregistrasi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <!--Tabel Permintaan Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-md-5">
                <h2>Tabel Permintaan Perbaikan</h2>
              </div>
            </div>
          </div>
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Id Aset</th>
                      <th scope="col">Nama Alat</th>
                      <th scope="col">Merek Alat</th>
                      <th scope="col">Type Alat</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Pelapor</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Tombol_Aksi_Table</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($itemPesanan as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td title="klik untuk copy ke form" style="cursor: pointer;" onclick="copy(this)"><span>{{ $item->id }}<span></td>
                      <td>{{ $item->nama_req }}</td>
                      <td>{{ $item->merek_req }}</td>
                      <td>{{ $item->type_req }}</td>
                      <td>{{ $item->sn_req }}</td>
                      <td>{{ $item->pelapor_req }}</td>
                      <td>{{ $item->tanggal_req }}</td>
                      <td>
                        <form action="{{ url('/dashboard_teknisi/perbaikan_teregistrasi', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="validasi" disabled> Validasi perbaikan</button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    @endforelse
                  </tbody>
                </table>
                <!--TABEL-->
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tabel Permintaan Perbaikan end-->
    <!--Tabel Sperpart Stock opname 
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-md-5">
                <h2>Tabel Sperpart</h2>
              </div>
            </div>
          </div>
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                 TABEL 
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">No</th>
                      <th class="">Nama Sperpart</th>
                      <th class="">Type Sperpart</th>
                      <th class="">Lokasi Pemakaian</th>
                      <th class="">Jumlah Masuk</th>
                      <th class="">Jumlah keluar</th>
                      <th class="">Tanggal Masuk</th>
                      <th class="">Tanggal Keluar</th>
                      <th class="">Sisa Stock</th>
                      <th class="none">Harga Part</th>
                      <th class="none">Jumlah harga</th>
                      <th class="none">Id Aset Alat Pengguna</th>
                      <th class="none">Nama Alat Pengguna</th>
                      <th class="none">Lokasi Alat Pengguna</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($itemSperpart as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->type }}</td>
                      <td>{{ $item->lokasi_pemakaian }}</td>
                      <td>{{ $item->jumlah_masuk }}</td>
                      <td>{{ $item->jumlah_keluar }}</td>
                      <td>{{ $item->tanggal_masuk }}</td>
                      <td>{{ $item->tanggal_keluar }}</td>
                      <td>{{ $item->jumlah_sekarang - $item->jumlah_keluar }}</td>
                      <td>{{ $item->harga_part }}</td>
                      <td>{{ $item->jumlah_harga_part }}</td>
                      <td>{{ $item->id_aset_part }}</td>
                      <td>{{ $item->nama_alat_pengguna_part }}</td>
                      <td>{{ $item->lokasi_alat_pengguna_part }}</td>
                    </tr>
                    @empty
                    @endforelse
                  </tbody>
                </table>
                 TABEL
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    Tabel Sperpart Stock opname end-->
    <!--Form Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>Form Perbaikan Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard_teknisi/perbaikan_teregistrasi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <label for="ID_Aset_reg" class="col-xs-3 col-form-label">ID Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_reg" type="text" class="form-control" id="id_aset_reg" placeholder="Klik id aset untuk copy ke sini" readonly data-toggle="tooltip" data-palcement="top" title="klik disini untuk load data alat" style="cursor: pointer;">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="Id_Perbaikan_reg" placeholder="Id Perbaikan" value="{{ $kode_aset }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="Tanggal_Perbaikan_reg" placeholder="Tanggal Perbaikan" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control" id="Nama_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_alat_reg" type="text" class="form-control" id="Merek_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_alat_reg" type="text" class="form-control" id="Type_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_reg" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Serial_Number_reg" type="text" class="form-control" id="Serial_Number_reg" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_reg" type="text" class="form-control" id="Lokasi_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor</label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="Pelapor_reg" placeholder="Pelapor (user yang melaporkan kerusakan alat)">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keterangan_Kondisi_Alat_reg" class="col-xs-3 col-form-label">Keterangan Kondisi Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="keterangan_kondisi_alat_reg" class="form-control" id="keterangan_kondisi_alat_reg">
                        <option>-- Pilih Keterangan --</option>
                        <option value="Selesai, Alat Dikembalikan">Selesai, Alat Dikembalikan
                        </option>
                        <option value="Alat Dalam Perbaikan">Alat Dalam Perbaikan</option>
                        <option value="Alat Dilanjutkan Perbaikan Kerekanan">Alat Dilanjutkan Perbaikan Kerekanan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Ka_Instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan</label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="Ka_Instalasi_reg" placeholder="Kepala Ruangan yang betanggung jawab">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="teknisi_1_reg" class="form-control" id="Teknisi_1_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <select name="teknisi_2_reg" class="form-control" id="Teknisi_2_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9">
                      <select name="teknisi_3_reg" class="form-control" id="Teknisi_3_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_4_reg" class="col-xs-3 col-form-label">Teknisi 4</label>
                    <div class="col-xs-9">
                      <select name="teknisi_4_reg" class="form-control" id="Teknisi_4_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_5_reg" class="col-xs-3 col-form-label">Teknisi 5</label>
                    <div class="col-xs-9">
                      <select name="teknisi_5_reg" class="form-control" id="Teknisi_5_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sperpart</label>
                    <div class="col-xs-9">
                      <input name="suku_cadang" type="text" class="form-control" id="nama_sukucadang1" placeholder="Nama Sperpart yang digunakan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart</label>
                    <div class="col-xs-9">
                      <input name="volume" type="text" class="form-control" id="volume1" placeholder="Volume sperpart/ banyak yang digunakan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan Sperpart
                    </label>
                    <div class="col-xs-9">
                      <input name="harga_satuan" type="text" class="form-control" id="harga_satuan1" placeholder="Harga Satuan dari sperpart">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart
                    </label>
                    <div class="col-xs-9">
                      <input name="jumlah_harga" type="text" class="form-control" id="jumlah_harga1" placeholder="Jumlah Harga Sperpart">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keluhan_Dari_alat_reg" class="col-xs-3 col-form-label">Keluhan Dari Alat</label>
                    <div class="col-xs-9">
                      <input name="keluhan_dari_alat_reg" type="text" class="form-control" id="Keluhan_Dari_alat_reg" placeholder="Keluhan Dari Alat">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Korektif_reg" class="col-xs-3 col-form-label">Korektif</label>
                    <div class="col-xs-9">
                      <input name="korektif_reg" type="text" class="form-control" id="Korektif_reg" placeholder="Korektif">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="foto_perbaikan" class="col-xs-3 col-form-label">Foto Pendukung </label>
                    <div class="col-xs-9">
                      <input name="foto_perbaikan" class="form-control" type="file" id="foto_perbaikan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
                        <div class="or"></div>
                        <button type="reset" class="ui button" type="submit">Reset</button>
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
    <!--Form Perbaikan end-->
    <!--Form Sperpart Stock opname 
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Sperpart Yang digunakan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard_teknisi/penggunaan_sperpart') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf

                  <div class="form-group row">
                    <label for="nama" class="col-xs-3 col-form-label">Nama Sperpart<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama" type="text" class="form-control" id="nama" placeholder="Contoh : Selang">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type Sperpart<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type" type="text" class="form-control" id="type" placeholder="Isi sesuai dengan data alat">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_pemakaian" class="col-xs-3 col-form-label">Lokasi Pemakaian<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_pemakaian" type="text" class="form-control" id="lokasi_pemakaian2" placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_masuk" class="col-xs-3 col-form-label">Jumlah Masuk<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jumlah_masuk" type="text" class="form-control" id="jumlah_masuk" value="" placeholder="jumlah stock pertama kali masuk">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_sekarang" class="col-xs-3 col-form-label">Sisa Stock<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jumlah_sekarang" type="text" class="form-control" id="jumlah_sekarang" placeholder="Jumlah sisa stock di gudang">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_keluar" class="col-xs-3 col-form-label">Jumlah keluar
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jumlah_keluar" type="text" class="form-control" id="jumlah_keluar" placeholder="Jumlah stock yang digunakan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_masuk" class="col-xs-3 col-form-label">Tanggal Masuk<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_masuk" type="date" class="form-control" id="tanggal_masuk" placeholder="-" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_keluar" class="col-xs-3 col-form-label">Tanggal Keluar<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_keluar" type="text" class="form-control" id="tanggal_keluar" placeholder="-" value="<?php echo date(now()); ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_part" class="col-xs-3 col-form-label">Harga Part<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="harga_part" type="text" class="form-control" id="harga_part" placeholder="Contoh: Rp.1.000.000" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_harga_part" class="col-xs-3 col-form-label">Jumlah harga<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jumlah_harga_part" type="text" class="form-control" id="jumlah_harga_part" placeholder="Contoh: Rp.2.000.000" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="id_aset_part" class="col-xs-3 col-form-label">Id Aset Alat Pengguna<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_part" type="text" class="form-control" id="id_aset_part2" placeholder="Paste id aset alat disini" onkeyup="autofillpart2()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat_pengguna_part" class="col-xs-3 col-form-label">Nama Alat Pengguna<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_pengguna_part" type="text" class="form-control" id="nama_alat_pengguna_part2" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_pengguna_part" class="col-xs-3 col-form-label">Lokasi Alat Pengguna<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_pengguna_part" type="text" class="form-control" id="lokasi_alat_pengguna_part2" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Ambil</button>
                        <div class="or"></div>
                        <button type="reset" class="ui button" type="submit">Reset</button>
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
    Form Sperpart Stock opname end-->
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Tabel Perbaikan</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th class="">No</th>
                      <th class="">Id Perbaikan</th>
                      <th class="none">ID_Aset :</th>
                      <th class="none">Tanggal_Perbaikan :</th>
                      <th class="">Nama Alat</th>
                      <th class="">Merek Alat</th>
                      <th class="">Type Alat</th>
                      <th class="">Serial Number</th>
                      <th class="">Lokasi Alat</th>
                      <th class="">Status</th>
                      <th class="none">Pelapor :</th>
                      <th class="none">Keterangan Kondisi Alat :</th>
                      <th class="none">Kepala Ruangan :</th>
                      <th class="none">Teknisi 1 :</th>
                      <th class="none">Teknisi 2 :</th>
                      <th class="none">Teknisi 3 :</th>
                      <th class="none">Teknisi 4 :</th>
                      <th class="none">Teknisi 5 :</th>
                      <th class="none">Nama Sperpart :</th>
                      <th class="none">Volume Sperpart :</th>
                      <th class="none">Harga Satuan Sperpart :</th>
                      <th class="none">Jumlah Harga Sperpart :</th>
                      <th class="none">Keluhan Dari alat :</th>
                      <th class="none">Korektif :</th>
                      <th scope="col" class="none">Foto Perbaikan :</th>
                      <!--<th scope="col">Tombol_Eksekusi</th>-->
                      <th class="">Tombol Eksekusi</th>
                    </thead>
                    <tbody>
                      @forelse ($items as $index => $item)
                      <tr class="odd gradeX">
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo $item['id_perbaikan_reg']; ?></td>
                        <td><?php echo $item['id_aset_reg']; ?></td>
                        <td><?php echo $item['tanggal_perbaikan_reg']; ?></td>
                        <td><?php echo $item['nama_alat_reg']; ?></td>
                        <td><?php echo $item['merek_alat_reg']; ?></td>
                        <td><?php echo $item['type_alat_reg']; ?></td>
                        <td><?php echo $item['serial_number_reg']; ?></td>
                        <td><?php echo $item['lokasi_alat_reg']; ?></td>
                        <td>
                          <form action="{{ url('/dashboard_teknisi/perbaikan_teregistrasi/update', $item->id_perbaikan_reg) }}" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-{{ $item->status == 0 ? 'warning' : 'danger' }}" type="submit">{{ $item->status == 0 ? 'Sudah di Setujui' : 'Belum di Setujui' }}</button>
                          </form>
                        </td>
                        <td><?php echo $item['pelapor_reg']; ?></td>
                        <td><?php echo $item['keterangan_kondisi_alat_reg']; ?></td>
                        <td><?php echo $item['ka_instalasi_reg']; ?></td>
                        <td><?php echo $item['teknisi_1_reg']; ?></td>
                        <td><?php echo $item['teknisi_2_reg']; ?></td>
                        <td><?php echo $item['teknisi_3_reg']; ?></td>
                        <td><?php echo $item['teknisi_4_reg']; ?></td>
                        <td><?php echo $item['teknisi_5_reg']; ?></td>
                        <td><?php echo $item['suku_cadang']; ?></td>
                        <td><?php echo $item['volume']; ?></td>
                        <td><?php echo $item['harga_satuan']; ?></td>
                        <td><?php echo $item['jumlah_harga']; ?></td>
                        <td><?php echo $item['keluhan_dari_alat_reg']; ?></td>
                        <td><?php echo $item['korektif_reg']; ?></td>
                        <td><img style="width: 80px; height: 80px;" alt='No Image' src="{{ URL::asset('storage/'.$item->foto_perbaikan) }}"></td>
                        <!--<td><?php echo $item['kode_rs']; ?></td>-->
                        <td>
                          <a href="/dashboard_teknisi/perbaikan_teregistrasi/update_perbaikan/{{ $item->id_perbaikan_reg }}/edit" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>

                          <a href="/dashboard_teknisi/perbaikan_teregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_reg }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></a>
                        </td>
                      </tr>

                      @empty
                      @endforelse
                    </tbody>
                  </table>
                  <!--TABEL-->
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tabel Perbaikan-->
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection

@push('addon-script')
<script type="text/javascript">
  // *Function scanner camera* //
  let scanner_teknisi = new Instascan.Scanner({
    video: document.getElementById('preview_teknisi'),
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
  // *Function scanner camera* //

  // *Function autofill form perbaikan* // 
  $('#id_aset_reg').mouseup(function() {
    if ($(this).val().length > 0) {
      let idars = $("#id_aset_reg").val();
      $.ajax({
        url: '{{ url(' /dashboard_user/autofill/') }}/'+idars,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          $("#Nama_Alat_reg").val(data.nama_alat_reg);
          $("#Merek_Alat_reg").val(data.merek_alat_reg);
          $("#Serial_Number_reg").val(data.serial_number_reg);
          $("#Lokasi_Alat_reg").val(data.lokasi_alat_reg);
          $("#Type_Alat_reg").val(data.type);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    }
  })
  // *Function autofill form perbaikan end* //    

  // *Function autofill from sperpart* //
  function autofillpart2() {
    let idarspart = $("#id_aset_part2").val();
    $.ajax({
      url: '{{ url('/dashboard_teknisi/autofillpart/') }}/'+idarspart,
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        $("#nama_alat_pengguna_part2").val(data.nama_alat);
        $("#lokasi_alat_pengguna_part2").val(data.lokasi_alat);
        $("#lokasi_pemakaian2").val(data.lokasi_alat);
        console.log(data);
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
  // *Function autofill from sperpart end* //   
</script>

<script>
  // *fucntion copy id aset* //
  function copy(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
    document.getElementById('id_aset_reg').value = inp.value = that.textContent;
    // *fucntion copy id aset end* //
  }
</script>
@endpush