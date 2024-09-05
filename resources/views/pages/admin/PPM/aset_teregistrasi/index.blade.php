@extends('layouts.admin')

@section('content')
@section('title', 'Aset Teregistrasi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="p-l-30 p-r-30">
            <div class="header-icon"><i class="fa fa-wrench"></i></div>
            <div class="header-title">
                <h1>MENU FORM ASET TEREGISTRASI</h1>
                <small>Form Aset Teregistrasi</small>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <div class="content">
        <!-- demo mode enable alert -->
        <div id="demoModeEnable"></div>
        <!-- alert message -->
        <!-- content -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--Scanner QR Code-->
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
                                            <video id="preview_admin"></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--Scanner QR Code end-->
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
                                                    <td onclick="copy(this)">{{ $item->id }}</td>
                                                    <td>{{ $item->nama_req }}</td>
                                                    <td>{{ $item->merek_req }}</td>
                                                    <td>{{ $item->type_req }}</td>
                                                    <td>{{ $item->sn_req }}</td>
                                                    <td>{{ $item->pelapor_req }}</td>
                                                    <td>{{ $item->tanggal_req }}</td>
                                                    <td>
                                                        <form action="{{ route('pesanan.destroy', $item->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-xs" data-toggle="tooltip"
                                                                data-placement="top" title="Validasi">
                                                                Validasi Perbaikan
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="text-center" colspan="9">Data Kosong</td>
                                                </tr>
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
        <!--Tabel Sperpart Stock opname-->
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

                                    <!--TABEL-->
                                    <table class="datatable table table-striped table-bordered" style="width:100%">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th class="">Nama Sperpart</th>
                                                <th class="">Type Sperpart</th>
                                                <th class="">Lokasi Pemakaian</th>
                                                <th class="">Jumlah Masuk</th>
                                                <!-- <th class="">Jumlah Sekarang</th> -->
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
                                                    <!-- <td>{{ $item->jumlah_sekarang }}</td> -->
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
                                                <tr>
                                                    <td class="text-center" colspan="9">Data Kosong</td>
                                                </tr>
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
        <!--Tabel Sperpart Stock opname end-->
        <!--Form Perbaikan-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                        <div class="panel-heading no-print">
                            <h1>Form Perbaikan Alat Teregistrasi</h1>
                        </div>

                        <div class="panel-body panel-form">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <form action="{{ url('/dashboard/ppm/aset_teregistrasi') }}" class="form-inner"
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        @csrf


                                        <div class="form-group row">
                                            <label for="ID_Aset_reg" class="col-xs-3 col-form-label">ID Aset<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="id_aset_reg" type="text" class="form-control"
                                                    id="id_aset_reg" placeholder="Copy dan paste id aset di tabel ke sini" onkeyup="autofill()">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-xs-3 col-form-label">Id Perbaikan<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="id_perbaikan_reg" type="text" class="form-control"
                                                    id="Id_Perbaikan_reg" placeholder="Id Perbaikan"
                                                    value="{{ $kode_aset }}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal
                                                Perbaikan<i class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tanggal_perbaikan_reg" type="text" class="form-control"
                                                    id="Tanggal_Perbaikan_reg" placeholder="Tanggal Perbaikan"
                                                    value="<?php echo date(now()); ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="nama_alat_reg" type="text" class="form-control"
                                                    id="Nama_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="merek_alat_reg" type="text" class="form-control"
                                                    id="Merek_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="type_alat_reg" type="text" class="form-control"
                                                    id="Type_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="serial_number_reg" class="col-xs-3 col-form-label">Serial Number<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="Serial_Number_reg" type="text" class="form-control"
                                                    id="Serial_Number_reg" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="lokasi_alat_reg" type="text" class="form-control"
                                                    id="Lokasi_Alat_reg" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor</label>
                                            <div class="col-xs-9">
                                                <input name="pelapor_reg" type="text" class="form-control"
                                                    id="Pelapor_reg" placeholder="Pelapor (user yang melaporkan kerusakan alat)">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Keterangan_Kondisi_Alat_reg"
                                                class="col-xs-3 col-form-label">Keterangan Kondisi Alat</label>
                                            <div class="col-xs-9">
                                                <select name="keterangan_kondisi_alat_reg" class="form-control"
                                                    id="keterangan_kondisi_alat_reg">
                                                    <option>-- Pilih Keterangan --</option>
                                                    <option value="Selesai, Alat Dikembalikan">Selesai, Alat Dikembalikan
                                                    </option>
                                                    <option value="Alat Dalam Perbaikan">Alat Dalam Perbaikan</option>
                                                    <option value="Alat Dilanjutkan Perbaikan Kerekanan">Alat Dilanjutkan
                                                        Perbaikan Kerekanan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Ka_Instalasi_reg" class="col-xs-3 col-form-label">Kepala
                                                Ruangan</label>
                                            <div class="col-xs-9">
                                                <input name="ka_instalasi_reg" type="text" class="form-control"
                                                    id="Ka_Instalasi_reg" placeholder="Kepala Ruangan yang betanggung jawab">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i
                                                    class="text-danger">*</i></label>
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
                                            <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sperpart</label>
                                            <div class="col-xs-9">
                                                <input name="suku_cadang" type="text" class="form-control"
                                                    id="nama_sukucadang1" placeholder="Nama Sperpart yang digunakan">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart</label>
                                            <div class="col-xs-9">
                                                <input name="volume" type="text" class="form-control" id="volume1"
                                                    placeholder="Volume sperpart/ banyak yang digunakan">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan Sperpart
                                            </label>
                                            <div class="col-xs-9">
                                                <input name="harga_satuan" type="text" class="form-control"
                                                    id="harga_satuan1" placeholder="Harga Satuan dari sperpart">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart
                                            </label>
                                            <div class="col-xs-9">
                                                <input name="jumlah_harga" type="text" class="form-control"
                                                    id="jumlah_harga1" placeholder="Jumlah Harga Sperpart">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Keluhan_Dari_alat_reg" class="col-xs-3 col-form-label">Keluhan
                                                Dari Alat</label>
                                            <div class="col-xs-9">
                                                <input name="keluhan_dari_alat_reg" type="text" class="form-control"
                                                    id="Keluhan_Dari_alat_reg" placeholder="Kerusakan yang ada dialat">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Korektif_reg" class="col-xs-3 col-form-label">Korektif</label>
                                            <div class="col-xs-9">
                                                <input name="korektif_reg" type="text" class="form-control"
                                                    id="Korektif_reg" placeholder="Solusi yang harus dilakukan">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <div class="ui buttons">
                                                    <button class="ui positive button">Tambah</button>
                                                    <div class="or"></div>
                                                    <button type="reset" class="ui button"
                                                        type="submit">Reset</button>
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
        <!--Form Sperpart Stock opname-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                        <div class="panel-heading no-print">
                            <h1>Sperpart Yang digunakan</h1>
                        </div>

                        <div class="panel-body panel-form">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <form action="{{ url('/dashboard/ppm/penggunaan_sperpart') }}" class="form-inner"
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="nama" class="col-xs-3 col-form-label">Nama Sperpart<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="nama" type="text" class="form-control"
                                                    id="nama" placeholder="Contoh : Selang">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="type" class="col-xs-3 col-form-label">Type Sperpart<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="type" type="text" class="form-control"
                                                    id="type" placeholder="Isi sesuai dengan data alat">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lokasi_pemakaian" class="col-xs-3 col-form-label">Lokasi Pemakaian<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="lokasi_pemakaian" type="text" class="form-control"
                                                    id="lokasi_pemakaian" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_masuk" class="col-xs-3 col-form-label">Jumlah Masuk<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="jumlah_masuk" type="text" class="form-control"
                                                    id="jumlah_masuk" value="" placeholder="jumlah stock pertama kali masuk">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_sekarang" class="col-xs-3 col-form-label">Sisa Stock<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="jumlah_sekarang" type="text" class="form-control"
                                                    id="jumlah_sekarang" placeholder="Jumlah sisa stock di gudang">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_keluar" class="col-xs-3 col-form-label">Jumlah keluar
                                            <i class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="jumlah_keluar" type="text" class="form-control"
                                                    id="jumlah_keluar" placeholder="Jumlah stock yang digunakan" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tanggal_masuk" class="col-xs-3 col-form-label">Tanggal Masuk<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tanggal_masuk" type="date" class="form-control"
                                                    id="tanggal_masuk" placeholder="-" value="" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tanggal_keluar" class="col-xs-3 col-form-label">Tanggal Keluar<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tanggal_keluar" type="text" class="form-control"
                                                    id="tanggal_keluar" placeholder="-" value="<?php echo date(now()); ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="harga_part" class="col-xs-3 col-form-label">Harga Part<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="harga_part" type="text" class="form-control"
                                                    id="harga_part" placeholder="Contoh: Rp.1.000.000" value="" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_harga_part" class="col-xs-3 col-form-label">Jumlah harga<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="jumlah_harga_part" type="text" class="form-control"
                                                    id="jumlah_harga_part" placeholder="Contoh: Rp.2.000.000" value="" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="id_aset_part" class="col-xs-3 col-form-label">Id Aset Alat Pengguna<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="id_aset_part" type="text" class="form-control"
                                                    id="id_aset_part" placeholder="Paste id aset alat disini" onkeyup="autofillpart()">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="nama_alat_pengguna_part" class="col-xs-3 col-form-label">Nama Alat Pengguna<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="nama_alat_pengguna_part" type="text" class="form-control"
                                                    id="nama_alat_pengguna_part" placeholder="Terisi Otomatis" value="" readonly >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="lokasi_alat_pengguna_part" class="col-xs-3 col-form-label">Lokasi Alat Pengguna<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="lokasi_alat_pengguna_part" type="text" class="form-control"
                                                    id="lokasi_alat_pengguna_part" placeholder="Terisi Otomatis" value="" readonly >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <div class="ui buttons">
                                                    <button class="ui positive button">Ambil</button>
                                                    <div class="or"></div>
                                                    <button type="reset" class="ui button"
                                                        type="submit">Reset</button>
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
        <!--Form Sperpart Stock opname end-->
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
                                                <th scope="col" class="">No</th>
                                                <th scope="col" class="">Id Perbaikan</th>
                                                <th scope="col" class="none">ID Aset :</th>
                                                <th scope="col" class="none">Tanggal Perbaikan :</th>
                                                <th scope="col" class="">Nama Alat</th>
                                                <th scope="col" class="">Merek Alat</th>
                                                <th scope="col" class="">Type Alat</th>
                                                <th scope="col" class="">Serial Number</th>
                                                <th scope="col" class="">Lokasi Alat</th>
                                                <th scope="col" class="">Status</th>
                                                <th scope="col" class="none">Pelapor :</th>
                                                <th scope="col" class="none">Keterangan Kondisi Alat :</th>
                                                <th scope="col" class="none">Kepala Ruangan :</th>
                                                <th scope="col" class="none">Teknisi 1 :</th>
                                                <th scope="col" class="none">Teknisi 2 :</th>
                                                <th scope="col" class="none">Teknisi 3 :</th>
                                                <th scope="col" class="none">Nama Sperpart :</th>
                                                <th scope="col" class="none">Volume Sperpart :</th>
                                                <th scope="col" class="none">Harga Satuan Sperpart :</th>
                                                <th scope="col" class="none">Jumlah Harga Sperpart :</th>
                                                <th scope="col" class="none">Keluhan Dari alat :</th>
                                                <th scope="col" class="none">Korektif :</th>
                                                <th scope="col" class="">Tombol Eksekusi</th>
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
                                                            <form
                                                                action="{{ url('/dashboard/ppm/aset_teregistrasi/update', $item->id_perbaikan_reg) }}"
                                                                class="form-inner" method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button
                                                                    class="btn btn-sm btn-{{ $item->status == 0 ? 'warning' : 'danger' }}"
                                                                    type="submit">{{ $item->status == 0 ? 'Sudah di Setujui' : 'Belum di Setujui' }}</button>
                                                            </form>
                                                        </td>
                                                        <td><?php echo $item['pelapor_reg']; ?></td>
                                                        <td><?php echo $item['keterangan_kondisi_alat_reg']; ?></td>
                                                        <td><?php echo $item['ka_instalasi_reg']; ?></td>
                                                        <td><?php echo $item['teknisi_1_reg']; ?></td>
                                                        <td><?php echo $item['teknisi_2_reg']; ?></td>
                                                        <td><?php echo $item['teknisi_3_reg']; ?></td>
                                                        <td><?php echo $item['suku_cadang']; ?></td>
                                                        <td><?php echo $item['volume']; ?></td>
                                                        <td><?php echo $item['harga_satuan']; ?></td>
                                                        <td><?php echo $item['jumlah_harga']; ?></td>
                                                        <td><?php echo $item['keluhan_dari_alat_reg']; ?></td>
                                                        <td><?php echo $item['korektif_reg']; ?></td>
                                                        <td>
                                                            <a href="{{ route('update_perbaikan.edit', $item->id_perbaikan_reg) }}"
                                                                class="btn btn-xs btn-success" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i
                                                                    class="fa fa-edit"></i></a>

                                                            <a href="/dashboard/ppm/aset_teregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_reg }}"
                                                                class="btn btn-xs btn-primary" target="_blank"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Cetak"><i class="fa fa-print"></i></a>

                                                            <form
                                                                action="{{ url('/dashboard/ppm/perbaikan_teregistrasi', $item->id_perbaikan_reg) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-xs"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Hapus">
                                                                    <i class="fa fa-trash "></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                @empty
                                                    <tr>
                                                        <td class="text-center" colspan="23">Data Kosong</td>
                                                    </tr>
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
        <!--Tabel Perbaikan end-->
        <!--Form Pengiriman-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                        <div class="panel-heading no-print">
                            <h1>Form Pengiriman Alat Teregistrasi</h1>
                        </div>

                        <div class="panel-body panel-form">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <form action="{{ url('/dashboard/ppm/tambah_pengiriman') }}" class="form-inner"
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="Id_Perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="id_perbaikan_reg" type="text" class="form-control"
                                                    id="Perbaikan_reg" placeholder="Copy dan paste id perbaikan ke sini"
                                                    onkeyup="autofill_Pengiriman()">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal
                                                Perbaikan<i class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tanggal_perbaikan_reg" type="text" class="form-control"
                                                    id="Tanggal_Perbaikan_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Tanggal_Pengiriman_reg" class="col-xs-3 col-form-label">Tanggal
                                                Pengiriman<i class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tanggal_pengiriman_reg" type="text" class="form-control"
                                                    id="Tanggal_Pengiriman_reg" placeholder="Tanggal Pengiriman"
                                                    value="<?php echo date('Y-m-d'); ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Id_Aset_reg" class="col-xs-3 col-form-label">Id Aset<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="id_aset_reg" type="text" class="form-control"
                                                    id="Id_Aset_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="nama_alat_reg" type="text" class="form-control"
                                                    id="Nama_Alat_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="merek_alat_reg" type="text" class="form-control"
                                                    id="Merek_Alat_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="type_alat_reg" type="text" class="form-control"
                                                    id="Type_Alat_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Seri_Number_reg" class="col-xs-3 col-form-label">Seri Number<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="seri_number_reg" type="text" class="form-control"
                                                    id="Seri_Number_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="lokasi_alat_reg" type="text" class="form-control"
                                                    id="Lokasi_Alat_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="pelapor_reg" type="text" class="form-control"
                                                    id="Pelapor_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="teknisi_1_reg" type="text" class="form-control"
                                                    id="Teknisi_1_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="Teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                                            <div class="col-xs-9">
                                                <input name="teknisi_2_reg" type="text" class="form-control"
                                                    id="Teknisi_2_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                                            <div class="col-xs-9">
                                                <input name="teknisi_3_reg" type="text" class="form-control"
                                                    id="Teknisi_3_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama
                                                Sperpart</label>
                                            <div class="col-xs-9">
                                                <input name="suku_cadang" type="text" class="form-control"
                                                    id="nama_sukucadang" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart</label>
                                            <div class="col-xs-9">
                                                <input name="volume" type="text" class="form-control" id="volume"
                                                    placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan Sperpart
                                            </label>
                                            <div class="col-xs-9">
                                                <input name="harga_satuan" type="text" class="form-control"
                                                    id="harga_satuan" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart
                                            </label>
                                            <div class="col-xs-9">
                                                <input name="jumlah_harga" type="text" class="form-control"
                                                    id="jumlah_harga" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Keterangan_Kondisi_Alat_reg"
                                                class="col-xs-3 col-form-label">Keterangan Kondisi Alat</label>
                                            <div class="col-xs-9">
                                                <input name="keterangan_kondisi_alat_reg" type="text"
                                                    class="form-control" id="Keterangan_Kondisi_Alat_reg1"
                                                    placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="KA_Instalasi_reg" class="col-xs-3 col-form-label">Kepala
                                                Ruangan</label>
                                            <div class="col-xs-9">
                                                <input name="ka_instalasi_reg" type="text" class="form-control"
                                                    id="KA_Instalasi_reg1" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Nama_Rekan_reg" class="col-xs-3 col-form-label">Nama Rekan</label>
                                            <div class="col-xs-9">
                                                <input name="nama_rekan_reg" type="text" class="form-control"
                                                    id="Nama_Rekan_reg" placeholder="Nama PT / Perusahaan rekanan / pihak ke-3">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Alamat_Rekan_reg" class="col-xs-3 col-form-label">Alamat Rekan
                                            </label>
                                            <div class="col-xs-9">
                                                <input name="alamat_rekan_reg" type="text" class="form-control"
                                                    id="Alamat_Rekan_reg" placeholder="Alamat PT / Perusahaan rekanan / pihak ke-3">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Teknisi_Rekanan_reg" class="col-xs-3 col-form-label">Teknisi
                                                Rekanan </label>
                                            <div class="col-xs-9">
                                                <input name="teknisi_rekanan_reg" type="text" class="form-control"
                                                    id="Teknisi_Rekanan_reg" placeholder="Teknisi PT / Perusahaan rekanan / pihak ke-3">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Telp_Teknisi_Rekanan_reg"
                                                class="col-xs-3 col-form-label">Telp_Teknisi_Rekanan_reg </label>
                                            <div class="col-xs-9">
                                                <input name="telp_teknisi_rekanan_reg" type="text"
                                                    class="form-control" id="Telp_Teknisi_Rekanan_reg"
                                                    placeholder="Telp Teknisi PT / Perusahaan rekanan / pihak ke-3">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <div class="ui buttons">
                                                    <button class="ui positive button">Tambah</button>
                                                    <div class="or"></div>
                                                    <button type="reset" class="ui button"
                                                        type="submit">Reset</button>
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
        <!--Form Pengiriman end-->
        <!--Tabel Pengiriman-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                        <div class="panel-heading no-print">
                            <div class="">
                                <h1>Tabel Pengiriman</h1>
                            </div>
                        </div>
                        <div style="overflow-x:auto;">
                            <div class="panel-body panel-form">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <!--TABEL-->
                                        <table class="datatable table table-striped table-bordered" style="width:100%">
                                            <thead class="table-light">
                                                <th scope="col">No</th>
                                                <th scope="col" class="">Id_Perbaikan</th>
                                                <th scope="col" class="none">Tanggal_Perbaikan :</th>
                                                <th scope="col" class="none">Tanggal_Pengiriman :</th>
                                                <th scope="col" class="none">ID Aset</th>
                                                <th scope="col" class="">Nama Alat</th>
                                                <th scope="col" class="">Merek Alat</th>
                                                <th scope="col" class="">Type Alat</th>
                                                <th scope="col" class="">Seri Number</th>
                                                <th scope="col" class="">Lokasi Alat</th>
                                                <th scope="col" class="none">Teknisi 1 :</th>
                                                <th scope="col" class="none">Teknisi 2 :</th>
                                                <th scope="col" class="none">Teknisi 3 :</th>
                                                <th scope="col" class="none">Nama Sperpart :</th>
                                                <th scope="col" class="none">Volume Sperpart :</th>
                                                <th scope="col" class="none">Harga Satuan Sperpart :</th>
                                                <th scope="col" class="none">Jumlah Harga Sperpart :</th>
                                                <th scope="col" class="none">Pelapor :</th>
                                                <th scope="col" class="none">Keterangan Kondisi Alat :</th>
                                                <th scope="col" class="none">Kepala Ruangan :</th>
                                                <th scope="col" class="none">Nama Rekan :</th>
                                                <th scope="col" class="none">Alamat Rekan :</th>
                                                <th scope="col" class="none">Teknisi Rekanan :</th>
                                                <th scope="col" class="none">Telp Teknisi Rekanan :</th>
                                                <th scope="col" class="">Tombol_Aksi_Tabel</th>
                                            </thead>
                                            <tbody>
                                                @forelse ($result_pengiriman as $index => $item)
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $index + 1; ?></td>
                                                        <td><?php echo $item->id_perbaikan_reg; ?></td>
                                                        <td><?php echo $item->tanggal_perbaikan_reg; ?></td>
                                                        <td><?php echo $item->tanggal_pengiriman_reg; ?></td>
                                                        <td><?php echo $item->id_aset_reg; ?></td>
                                                        <td><?php echo $item->nama_alat_reg; ?></td>
                                                        <td><?php echo $item->merek_alat_reg; ?></td>
                                                        <td><?php echo $item->type_alat_reg; ?></td>
                                                        <td><?php echo $item->seri_number_reg; ?></td>
                                                        <td><?php echo $item->lokasi_alat_reg; ?></td>
                                                        <td><?php echo $item->teknisi_1_reg; ?></td>
                                                        <td><?php echo $item->teknisi_2_reg; ?></td>
                                                        <td><?php echo $item->teknisi_3_reg; ?></td>
                                                        <td><?php echo $item['suku_cadang']; ?></td>
                                                        <td><?php echo $item['volume']; ?></td>
                                                        <td><?php echo $item['harga_satuan']; ?></td>
                                                        <td><?php echo $item['jumlah_harga']; ?></td>
                                                        <td><?php echo $item->pelapor_reg; ?></td>
                                                        <td><?php echo $item->keterangan_kondisi_alat_reg; ?></td>
                                                        <td><?php echo $item->ka_instalasi_reg; ?></td>
                                                        <td><?php echo $item->nama_rekan_reg; ?></td>
                                                        <td><?php echo $item->alamat_rekan_reg; ?></td>
                                                        <td><?php echo $item->teknisi_rekanan_reg; ?></td>
                                                        <td><?php echo $item->telp_teknisi_rekanan_reg; ?></td>
                                                        <td>
                                                            <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                                href="{{ route('update_pengiriman.edit', $item->id_perbaikan_reg) }}"
                                                                class="btn btn-xs btn-success"><i
                                                                    class="fa fa-edit"></i></a>
                                                            <a data-toggle="tooltip" data-placement="top" title="Cetak"
                                                                href="/dashboard/ppm/aset_teregistrasi/cetak_pengiriman/{{ $item->id_perbaikan_reg }}"
                                                                target="_blank" class="btn btn-xs btn-primary"><i
                                                                    class="fa fa-print"></i></a>

                                                            <form
                                                                action="{{ url('/dashboard/ppm/pengiriman_teregistrasi', $item->id_perbaikan_reg) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-xs"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Hapus">
                                                                    <i class="fa fa-trash "></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                @empty
                                                    <tr>
                                                        <td class="text-center" colspan="25">Data Kosong</td>
                                                    </tr>
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
        <!--Tabel Pengiriman end-->
        <!--Form Pengembalian-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                        <div class="panel-heading no-print">
                            <h1>Form Pengembalian Alat Teregistrasi</h1>
                        </div>

                        <div class="panel-body panel-form">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <form action="{{ url('/dashboard/ppm/tambah_pengembalian') }}" class="form-inner"
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="id_perbaikan_reg" class="col-xs-3 col-form-label">id perbaikan<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="id_perbaikan_reg" type="text" class="form-control"
                                                    id="id_perbaikan_reg2" placeholder="Copy dan paste id perbaikan ke sini" value=""
                                                    onkeyup="autofill_Pengembalian()">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Id_Aset_reg" class="col-xs-3 col-form-label">Id Aset<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="Id_Aset_reg" type="text" class="form-control"
                                                    id="Id_Aset_reg2" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_alat_reg" class="col-xs-3 col-form-label">nama alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="nama_alat_reg" type="text" class="form-control"
                                                    id="nama_alat_reg2" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tanggal_perbaikan_reg" class="col-xs-3 col-form-label">tanggal
                                                perbaikan<i class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tanggal_perbaikan_reg" type="text" class="form-control"
                                                    id="tanggal_perbaikan_reg2" placeholder="Terisi Otomatis"
                                                    value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="merek_reg" class="col-xs-3 col-form-label">merek<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="merek_reg" type="text" class="form-control"
                                                    id="merek_reg2" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tipe_reg" class="col-xs-3 col-form-label">Type<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tipe_reg" type="text" class="form-control"
                                                    id="tipe_reg2" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tanggal_pengembalian_reg" class="col-xs-3 col-form-label">tanggal
                                                pengembalian<i class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tanggal_pengembalian_reg" type="text"
                                                    class="form-control" id="tanggal_pengembalian_reg2"
                                                    placeholder="tanggal pengembalian" value="<?php echo date('Y-m-d'); ?>"
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="serial_number_reg" class="col-xs-3 col-form-label">serial number<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="serial_number_reg" type="text" class="form-control"
                                                    id="serial_number_reg2" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="pelapor_reg" type="text" class="form-control"
                                                    id="pelapor_reg2" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">lokasi alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="lokasi_alat_reg" type="text" class="form-control"
                                                    id="lokasi_alat_reg2" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="keterangan_reg" class="col-xs-3 col-form-label">keterangan<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="keterangan_reg" type="text" class="form-control"
                                                    id="keterangan_reg2" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="penerima_reg" class="col-xs-3 col-form-label">Penerima</label>
                                            <div class="col-xs-9">
                                                <input name="penerima_reg" type="text" class="form-control"
                                                    id="penerima_reg2" placeholder="penerima barang kembali" value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="harga_perbaikan_reg" class="col-xs-3 col-form-label">harga
                                                perbaikan</label>
                                            <div class="col-xs-9">
                                                <input name="harga_perbaikan_reg" type="text" class="form-control"
                                                    id="harga_perbaikan_reg2" placeholder="Biaya yang dihabiskan / yang digunakan"
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="teknisi1_reg" class="col-xs-3 col-form-label">Teknisi 1<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="teknisi1_reg" type="text" class="form-control"
                                                    id="teknisi1_reg2" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="teknisi2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                                            <div class="col-xs-9">
                                                <input name="teknisi2_reg" type="text" class="form-control"
                                                    id="teknisi2_reg2" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="teknisi3_reg" class="col-xs-3 col-form-label">Teknisi 3 </label>
                                            <div class="col-xs-9">
                                                <input name="teknisi3_reg" type="text" class="form-control"
                                                    id="teknisi3_reg2" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="ka_instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan
                                                <i class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="ka_instalasi_reg" type="text" class="form-control"
                                                    id="ka_instalasi_reg2" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama
                                                Sperpart</label>
                                            <div class="col-xs-9">
                                                <input name="suku_cadang" type="text" class="form-control"
                                                    id="nama_sukucadang2" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart</label>
                                            <div class="col-xs-9">
                                                <input name="volume" type="text" class="form-control" id="volume2"
                                                    placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan Sperpart
                                            </label>
                                            <div class="col-xs-9">
                                                <input name="harga_satuan" type="text" class="form-control"
                                                    id="harga_satuan2" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart
                                            </label>
                                            <div class="col-xs-9">
                                                <input name="jumlah_harga" type="text" class="form-control"
                                                    id="jumlah_harga2" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="penyebab_kerusakan_reg" class="col-xs-3 col-form-label">Penyebab
                                                Kerusakan </label>
                                            <div class="col-xs-9">
                                                <input name="penyebab_kerusakan_reg" type="text" class="form-control"
                                                    id="penyebab_kerusakan_reg2" placeholder="Penyebab rusaknya alat"
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="solusi_perbaikan_reg"
                                                class="col-xs-3 col-form-label">Solusi Perbaikan </label>
                                            <div class="col-xs-9">
                                                <input name="solusi_perbaikan_reg" type="text" class="form-control"
                                                    id="solusi_perbaikan_reg2" placeholder="Solusi yang diambil"
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="penguji_suku_cadang_reg" class="col-xs-3 col-form-label">Penguji
                                                Sperpart </label>
                                            <div class="col-xs-9">
                                                <input name="penguji_suku_cadang_reg" type="text" class="form-control"
                                                    id="penguji_suku_cadang_reg2" placeholder="Penguji Pada Sperpart"
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="hasil_verifikasi_reg" class="col-xs-3 col-form-label">Hasil
                                                Verifikasi</label>
                                            <div class="col-xs-9">
                                                <input name="hasil_verifikasi_reg" type="text" class="form-control"
                                                    id="hasil_verifikasi_reg2" placeholder="Hasil Dari Verifikasi"
                                                    value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="hasil_fungsi_reg" class="col-xs-3 col-form-label">Hasil Fungsi
                                            </label>
                                            <div class="col-xs-9">
                                                <input name="hasil_fungsi_reg" type="text" class="form-control"
                                                    id="hasil_fungsi_reg2" placeholder="Hasil Fungsi Dari Alat" value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="pengganti_suku_cadang_reg" class="col-xs-3 col-form-label">
                                                Pengganti Sperpart</label>
                                            <div class="col-xs-9">
                                                <input name="pengganti_suku_cadang_reg" type="text"
                                                    class="form-control" id="pengganti_suku_cadang_reg2"
                                                    placeholder="Penggantian sperpart yang digunakan dialat" value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <div class="ui buttons">
                                                    <button class="ui positive button">Tambah</button>
                                                    <div class="or"></div>
                                                    <button type="reset" class="ui button"
                                                        type="submit">Reset</button>
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
        <!--Form Pengembalian end-->
        <!--Tabel Pengembalian-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                        <div class="panel-heading no-print">
                            <div class="">
                                <h1>Tabel Pengembalian</h1>
                            </div>
                        </div>
                        <div style="overflow-x:auto;">
                            <div class="panel-body panel-form">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <!--TABEL-->
                                        <table class="datatable table table-striped table-bordered" style="width:100%">
                                            <thead class="table-light">
                                                <th scope="col" class="">No</th>
                                                <th scope="col" class="">Id_Perbaikan</th>
                                                <th scope="col" class="">Nama Alat</th>
                                                <th scope="col" class="none">Tanggal Perbaikan :</th>
                                                <th scope="col" class="">Merek</th>
                                                <th scope="col" class="none">Id Aset :</th>
                                                <th scope="col" class="">Type Alat</th>
                                                <th scope="col" class="none">Tanggal Pengembalian :</th>
                                                <th scope="col" class="">Serial Number</th>
                                                <th scope="col" class="none">Pelapor :</th>
                                                <th scope="col" class="">Lokasi Alat</th>
                                                <th scope="col" class="none">Keterangan Kondisi Alat :</th>
                                                <th scope="col" class="none">Penerima :</th>
                                                <th scope="col" class="none">Harga Perbaikan :</th>
                                                <th scope="col" class="none">Teknisi 1 :</th>
                                                <th scope="col" class="none">Teknisi 2 :</th>
                                                <th scope="col" class="none">Teknisi 3 :</th>
                                                <th scope="col" class="none">Nama Sperpart :</th>
                                                <th scope="col" class="none">Volume Sperpart :</th>
                                                <th scope="col" class="none">Harga Satuan Sperpart :</th>
                                                <th scope="col" class="none">Jumlah Harga Sperpart :</th>
                                                <th scope="col" class="none">Kepala Ruangan :</th>
                                                <th scope="col" class="none">Penyebab Kerusakan :</th>
                                                <th scope="col" class="none">Solusi Perbaikan :</th>
                                                <th scope="col" class="none">Penguji Suku Cadang :</th>
                                                <th scope="col" class="none">Hasil Verifikasi :</th>
                                                <th scope="col" class="none">Hasil Fungsi :</th>
                                                <th scope="col" class="none">Pengganti Suku Cadang :</th>
                                                <th scope="col" class="">Tombol_Aksi_Tabel</th>
                                            </thead>
                                            <tbody>
                                                @forelse ($result_pengembalian as $index => $item)
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $index + 1; ?></td>
                                                        <td>{{ $item->id_perbaikan_reg }}</td>
                                                        <td>{{ $item->nama_alat_reg }}</td>
                                                        <td>{{ $item->tanggal_perbaikan_reg }}</td>
                                                        <td>{{ $item->merek_reg }}</td>
                                                        <td>{{ $item->id_perbaikan_reg }}</td>
                                                        <td>{{ $item->tipe_reg }}</td>
                                                        <td>{{ $item->tanggal_pengembalian_reg }}</td>
                                                        <td>{{ $item->serial_number_reg }}</td>
                                                        <td>{{ $item->pelapor_reg }}</td>
                                                        <td>{{ $item->lokasi_alat_reg }}</td>
                                                        <td>{{ $item->keterangan_reg }}</td>
                                                        <td>{{ $item->penerima_reg }}</td>
                                                        <td>{{ $item->harga_perbaikan_reg }}</td>
                                                        <td>{{ $item->teknisi1_reg }}</td>
                                                        <td>{{ $item->teknisi2_reg }}</td>
                                                        <td>{{ $item->teknisi3_reg }}</td>
                                                        <td><?php echo $item['suku_cadang']; ?></td>
                                                        <td><?php echo $item['volume']; ?></td>
                                                        <td><?php echo $item['harga_satuan']; ?></td>
                                                        <td><?php echo $item['jumlah_harga']; ?></td>
                                                        <td>{{ $item->ka_instalasi_reg }}</td>
                                                        <td>{{ $item->penyebab_kerusakan_reg }}</td>
                                                        <td>{{ $item->solusi_perbaikan_reg }}</td>
                                                        <td>{{ $item->penguji_suku_cadang_reg }}</td>
                                                        <td>{{ $item->hasil_verifikasi_reg }}</td>
                                                        <td>{{ $item->hasil_fungsi_reg }}</td>
                                                        <td>{{ $item->pengganti_suku_cadang_reg }}</td>
                                                        <td>
                                                            <a data-toggle="tooltip" data-placement="top"
                                                                title="Edit"
                                                                href="{{ route('update_pengembalian.edit', $item->id_perbaikan_reg) }}"
                                                                class="btn btn-xs btn-success"><i
                                                                    class="fa fa-edit"></i></a>
                                                            <a data-toggle="tooltip" data-placement="top"
                                                                title="Cetak"
                                                                href="/dashboard/ppm/aset_teregistrasi/cetak_pengembalian/{{ $item->id_perbaikan_reg }}"
                                                                target="_blank" class="btn btn-xs btn-primary"><i
                                                                    class="fa fa-print"></i></a>
                                                            <form
                                                                action="{{ url('/dashboard/ppm/pengembalian_teregistrasi', $item->id_perbaikan_reg) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-xs"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Hapus">
                                                                    <i class="fa fa-trash "></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                @empty
                                                    <tr>
                                                        <td class="text-center" colspan="29">Data Kosong</td>
                                                    </tr>
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
        <!--Tabel Pengembalian end-->
        <!--Form Penghapusan-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                        <div class="panel-heading no-print">
                            <h1>Form Penghapusan Alat Teregistrasi</h1>
                        </div>

                        <div class="panel-body panel-form">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <form action="{{ url('/dashboard/ppm/tambah_penghapusan') }}" class="form-inner"
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="Id_Perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="id_perbaikan_reg" type="text" class="form-control"
                                                    id="Id_Perbaikan_reg3" placeholder="Copy dan paste id perbaikan ke sini"
                                                    onkeyup="autofill_Penghapusan()">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal
                                                Perbaikan<i class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tanggal_perbaikan_reg" type="text"
                                                    class="form-control" id="Tanggal_Perbaikan_reg3"
                                                    placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Tanggal_Penggudangan_reg"
                                                class="col-xs-3 col-form-label">Tanggal Penggudangan<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="tanggal_penggudangan_reg" type="text"
                                                    class="form-control" id="Tanggal_Penggudangan_reg3"
                                                    placeholder="Tanggal Penggudangan" value="<?php echo date('Y-m-d'); ?>"
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="nama_alat_reg" type="text" class="form-control"
                                                    id="Nama_Alat_reg3" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="merek_alat_reg" type="text" class="form-control"
                                                    id="Merek_Alat_reg3" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="type_alat_reg" type="text" class="form-control"
                                                    id="Type_Alat_reg3" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Serial_Number_reg" class="col-xs-3 col-form-label">Serial
                                                Number<i class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="serial_number_reg" type="text" class="form-control"
                                                    id="Serial_Number_reg3" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="lokasi_alat_reg" type="text" class="form-control"
                                                    id="Lokasi_Alat_reg3" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="pelapor_reg" type="text" class="form-control"
                                                    id="Pelapor_reg3" placeholder="Terisi Otomatis" value="" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="teknisi_1_reg" type="text" class="form-control"
                                                    id="Teknisi_1_reg3" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                                            <div class="col-xs-9">
                                                <input name="teknisi_2_reg" type="text" class="form-control"
                                                    id="Teknisi_2_reg3" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                                            <div class="col-xs-9">
                                                <input name="teknisi_3_reg" type="text" class="form-control"
                                                    id="Teknisi_3_reg3" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama
                                            Sperpart</label>
                                            <div class="col-xs-9">
                                                <input name="suku_cadang" type="text" class="form-control"
                                                    id="nama_sukucadang3" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart </label>
                                            <div class="col-xs-9">
                                                <input name="volume" type="text" class="form-control"
                                                    id="volume3" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="harga_satuan" class="col-xs-3 col-form-label">Harga
                                                Satuan Sperpart</label>
                                            <div class="col-xs-9">
                                                <input name="harga_satuan" type="text" class="form-control"
                                                    id="harga_satuan3" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart
                                            </label>
                                            <div class="col-xs-9">
                                                <input name="jumlah_harga" type="text" class="form-control"
                                                    id="jumlah_harga3" placeholder="Terisi Otomatis" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="KA_Instalasi_reg" class="col-xs-3 col-form-label">Kepala
                                                Ruangan</label>
                                            <div class="col-xs-9">
                                                <input name="ka_instalasi_reg" type="text" class="form-control"
                                                    id="KA_Instalasi_reg3" placeholder="Terisi Otomatis" value=""
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Keterangan_Pengguna_reg"
                                                class="col-xs-3 col-form-label">Keterangan Pengguna</label>
                                            <div class="col-xs-9">
                                                <input name="keterangan_pengguna_reg" type="text"
                                                    class="form-control" id="Keterangan_Pengguna_reg3"
                                                    placeholder="Keterangan Pengguna terhadap alat, contoh : mati total" value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <div class="ui buttons">
                                                    <button class="ui positive button">Tambah</button>
                                                    <div class="or"></div>
                                                    <button type="reset" class="ui button"
                                                        type="submit">Reset</button>
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
        <!--Form Penghapusan end-->
        <!--Tabel Penghapusan-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">

                        <div class="panel-heading no-print">
                            <div class="">
                                <h1>Tabel Penghapusan</h1>
                            </div>
                        </div>
                        <div style="overflow-x:auto;">
                            <div class="panel-body panel-form">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <!--TABEL-->
                                        <table class="datatable table table-striped table-bordered" style="width:100%">
                                            <thead class="table-light">
                                                <th scope="col">No</th>
                                                <th class="">Id_Perbaikan</th>
                                                <th class="none">Tanggal_Perbaikan</th>
                                                <th class="none">Tanggal_Penggudangan</th>
                                                <th class="">Nama Alat</th>
                                                <th class="">Merek Alat</th>
                                                <th class="">Type Alat</th>
                                                <th class="">Serial Number</th>
                                                <th class="">Lokasi Alat</th>
                                                <th class="none">Pelapor</th>
                                                <th class="none">Teknisi_1</th>
                                                <th class="none">Teknisi_2</th>
                                                <th class="none">Teknisi_3</th>
                                                <th class="none">Nama Sperpart</th>
                                                <th class="none">Volume Sperpart</th>
                                                <th class="none">Harga Satuan Sperpart</th>
                                                <th class="none">Jumlah Harga Sperpart</th>
                                                <th class="none">Kepala Ruangan</th>
                                                <th class="none">Keterangan_Pengguna</th>
                                                <th class="">Tombol_Aksi_Tabel</th>
                                            </thead>
                                            <tbody>
                                                @forelse ($result_penghapusan as $index => $item)
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $index + 1; ?></td>
                                                        <td>{{ $item->id_perbaikan_reg }}</td>
                                                        <td>{{ $item->tanggal_perbaikan_reg }}</td>
                                                        <td>{{ $item->tanggal_penggudangan_reg }}</td>
                                                        <td>{{ $item->nama_alat_reg }}</td>
                                                        <td>{{ $item->merek_alat_reg }}</td>
                                                        <td>{{ $item->type_alat_reg }}</td>
                                                        <td>{{ $item->serial_number_reg }}</td>
                                                        <td>{{ $item->lokasi_alat_reg }}</td>
                                                        <td>{{ $item->pelapor_reg }}</td>
                                                        <td>{{ $item->teknisi_1_reg }}</td>
                                                        <td>{{ $item->teknisi_2_reg }}</td>
                                                        <td>{{ $item->teknisi_3_reg }}</td>
                                                        <td>{{ $item['suku_cadang'] }}</td>
                                                        <td>{{ $item['volume'] }}</td>
                                                        <td>{{ $item['harga_satuan'] }}</td>
                                                        <td>{{ $item['jumlah_harga'] }}</td>
                                                        <td>{{ $item->ka_instalasi_reg }}</td>
                                                        <td>{{ $item->keterangan_pengguna_reg }}</td>
                                                        <td>
                                                            <a data-toggle="tooltip" data-placement="top"
                                                                title="Edit"
                                                                href="/dashboard/ppm/aset_teregistrasi/update_penghapusan/{{ $item->id_perbaikan_reg }}/edit"
                                                                class="btn btn-xs btn-success"><i
                                                                    class="fa fa-edit"></i></a>
                                                            <a data-toggle="tooltip" data-placement="top"
                                                                title="Cetak"
                                                                href="/dashboard/ppm/aset_teregistrasi/cetak_penghapusan/{{ $item->id_perbaikan_reg }}"
                                                                target="_blank" class="btn btn-xs btn-primary"><i
                                                                    class="fa fa-print"></i></a>
                                                            <form
                                                                action="{{ url('/dashboard/ppm/penghapusan_teregistrasi', $item->id_perbaikan_reg) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-xs"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Hapus">
                                                                    <i class="fa fa-trash "></i>
                                                                </button>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td class="text-center" colspan="20">Data Kosong</td>
                                                    </tr>
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
                <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            </div>
        <!--Tabel Penghapusan end-->
    </div>
</div> <!-- /.content-wrapper -->

@endsection

@push('addon-script')
<script>
    let scanner_teknisi = new Instascan.Scanner({
        video: document.getElementById('preview_admin'),
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

    function autofillpart() {
      let idarspart = $("#id_aset_part").val();

      $.ajax({
        url: '{{ url('/dashboard/ppm/autofillpart/') }}/' + idarspart,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            $("#nama_alat_pengguna_part").val(data.nama_alat);
            $("#lokasi_alat_pengguna_part").val(data.lokasi_alat);
            $("#lokasi_pemakaian").val(data.lokasi_alat);
            console.log(data);
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
    }

    let idars = $("#id_aset_reg").val();

    function autofill() {
        let idars = $("#id_aset_reg").val();


        $.ajax({
            url: '{{ url('/dashboard_user/autofill/') }}/' + idars,
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
    function autofill_Pengiriman() {
        let Id_Perbaikan_reg = $("#Perbaikan_reg").val();
        $.ajax({
            url: '{{ url('/dashboard/ppm/autofill_pengiriman/') }}/' + Id_Perbaikan_reg,
            method: 'GET', // HTTP method (e.g., GET, POST)
            data: {
                Id_Perbaikan_reg: Id_Perbaikan_reg
            },
            dataType: 'json',
            success: function(data) {
                console.log(data.Nama_Alat_reg)
                $("#Tanggal_Perbaikan_reg1").val(data.Tanggal_Perbaikan_reg);
                $("#Id_Aset_reg1").val(data.ID_Aset_reg);
                $("#Nama_Alat_reg1").val(data.Nama_Alat_reg);
                $("#Merek_Alat_reg1").val(data.Merek_Alat_reg);
                $("#Type_Alat_reg1").val(data.Type_Alat_reg);
                $("#Seri_Number_reg1").val(data.Serial_Number_reg);
                $("#Lokasi_Alat_reg1").val(data.Lokasi_Alat_reg);
                $("#Teknisi_1_reg1").val(data.Teknisi_1_reg);
                $("#Pelapor_reg1").val(data.Pelapor_reg);
                $("#Teknisi_2_reg1").val(data.Teknisi_2_reg);
                $("#Teknisi_3_reg1").val(data.Teknisi_3_reg);
                $("#Keterangan_Kondisi_Alat_reg1").val(data.Keterangan_Kondisi_Alat_reg);
                $("#KA_Instalasi_reg1").val(data.Ka_Instalasi_reg);
                $("#nama_sukucadang").val(data.suku_cadang);
                $("#volume").val(data.volume);
                $("#harga_satuan").val(data.harga_satuan);
                $("#jumlah_harga").val(data.jumlah_harga);

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    }

    function autofill_Pengembalian() {
        let Id_Perbaikan_reg = $("#id_perbaikan_reg2").val();
        $.ajax({
            url: '{{ url('/dashboard/ppm/autofill_pengiriman/') }}/' + Id_Perbaikan_reg,
            method: 'GET', // HTTP method (e.g., GET, POST)
            data: {
                Id_Perbaikan_reg: Id_Perbaikan_reg
            },
            dataType: 'json',
            success: function(data) {
                console.log(data.Nama_Alat_reg)
                $("#tanggal_perbaikan_reg2").val(data.Tanggal_Perbaikan_reg);
                $("#Id_Aset_reg2").val(data.ID_Aset_reg);
                $("#nama_alat_reg2").val(data.Nama_Alat_reg);
                $("#merek_reg2").val(data.Merek_Alat_reg);
                $("#tipe_reg2").val(data.Type_Alat_reg);
                $("#serial_number_reg2").val(data.Serial_Number_reg);
                $("#lokasi_alat_reg2").val(data.Lokasi_Alat_reg);
                $("#teknisi1_reg2").val(data.Teknisi_1_reg);
                $("#pelapor_reg2").val(data.Pelapor_reg);
                $("#teknisi2_reg2").val(data.Teknisi_2_reg);
                $("#teknisi3_reg2").val(data.Teknisi_3_reg);
                $("#keterangan_reg2").val(data.Keterangan_Kondisi_Alat_reg);
                $("#ka_instalasi_reg2").val(data.Ka_Instalasi_reg);
                $("#nama_sukucadang2").val(data.suku_cadang);
                $("#volume2").val(data.volume);
                $("#harga_satuan2").val(data.harga_satuan);
                $("#jumlah_harga2").val(data.jumlah_harga);

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    }

    function autofill_Penghapusan() {
        let Id_Perbaikan_reg = $("#Id_Perbaikan_reg3").val();
        $.ajax({
            url: '{{ url('/dashboard/ppm/autofill_pengiriman/') }}/' + Id_Perbaikan_reg,
            method: 'GET', // HTTP method (e.g., GET, POST)
            data: {
                Id_Perbaikan_reg: Id_Perbaikan_reg
            },
            dataType: 'json',
            success: function(data) {
                console.log(data.Nama_Alat_reg)
                $("#Tanggal_Perbaikan_reg3").val(data.Tanggal_Perbaikan_reg);
                $("#Nama_Alat_reg3").val(data.Nama_Alat_reg);
                $("#Merek_Alat_reg3").val(data.Merek_Alat_reg);
                $("#Type_Alat_reg3").val(data.Type_Alat_reg);
                $("#Serial_Number_reg3").val(data.Serial_Number_reg);
                $("#Lokasi_Alat_reg3").val(data.Lokasi_Alat_reg);
                $("#Teknisi_1_reg3").val(data.Teknisi_1_reg);
                $("#Pelapor_reg3").val(data.Pelapor_reg);
                $("#Teknisi_2_reg3").val(data.Teknisi_2_reg);
                $("#Teknisi_3_reg3").val(data.Teknisi_3_reg);
                $("#KA_Instalasi_reg3").val(data.Ka_Instalasi_reg);
                $("#nama_sukucadang3").val(data.suku_cadang);
                $("#volume3").val(data.volume);
                $("#harga_satuan3").val(data.harga_satuan);
                $("#jumlah_harga3").val(data.jumlah_harga);

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    }
    
</script>

<script>
function copy(that){
    var inp =document.createElement('input');
    document.body.appendChild(inp)
    inp.value =that.textContent
    inp.select();
    document.execCommand('copy',false);
    inp.remove();

    const tooltip = document.createElement('p');
    tooltip.textContent = 'Teks berhasil disalin';
    tooltip.style.position = 'absolute';
    tooltip.style.top = event.clientY + 'px';
    tooltip.style.left = event.clientX + 'px';
    tooltip.style.background = 'rgba(0, 0, 0, 0.7)';
    tooltip.style.color = '#fff';
    tooltip.style.padding = '5px 10px';
    tooltip.style.borderRadius = '5px';
    tooltip.style.zIndex = '9999';
    document.body.appendChild(tooltip);

    // Menghilangkan tooltip setelah beberapa detik
    setTimeout(() => {
        document.body.removeChild(tooltip);
    }, 2000);
}
</script>
@endpush
