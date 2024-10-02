@extends('layouts.admin')

@section('content')
@section('title', 'Aset Unregistrasi')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>MENU FORM UNREGISTRASI</h1>
        <small>Form Unregistrasi</small>
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
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <!-- content -->
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
    <!-- Form Perbaikan -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print">
              <h1>Form Perbaikan Alat Unregistrasi</h1>
            </div>

            <div class="panel-body panel-form">

              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="{{ url('/dashboard/ppm/tambah_unregistrasi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    @method('post')

                    <div class="form-group row">
                      <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un" placeholder="Id Perbaikan" value="{{ $kode_aset }}" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="tanggal_perbaikan_un" type="text" class="form-control" id="tanggal_perbaikan_un" placeholder="Tanggal Perbaikan" value="<?php echo date('Y-m-d') ?>" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <select name="nama_alat_un" class="form-control" id="nama_alat_un">
                          <option>Pilih Alat</option>
                          @foreach ($alats as $alat)
                          <option value="<?= $alat['nama_alat']; ?>"><?= $alat['nama_alat']; ?></option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un" placeholder="Merek Alat" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="type_alat_un" type="text" class="form-control" id="type_alat_un" placeholder="Type Alat" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="serial_number_un" type="text" class="form-control" id="serial_number_un" placeholder="Serial Number" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat</label>
                      <div class="col-xs-9">
                        <select name="lokasi_alat_un" class="form-control" id="lokasi_alat_un">
                          <option value="" selected="selected">Pilih Lokasi</option>
                          @foreach ($ruangans as $alat)
                          <option value="<?= $alat['lokasi_alat']; ?>"><?= $alat['lokasi_alat']; ?></option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="pelapor_un" type="text" class="form-control" id="pelapor_un" placeholder="Pelapor" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan Kondisi Alat</label>
                      <div class="col-xs-9">
                        <select name="keterangan_un" class="form-control" id="keterangan_un">
                          <option value="" selected="selected">Select Keterangan</option>
                          <option value="Selesai Alat Dikembalikan">Selesai Alat Dikembalikan</option>
                          <option value="Alat Dalam Perbaikan">Alat Dalam Perbaikan</option>
                          <option value="Alat Dilanjutkan Ke Rekanan">Alat Dilanjutkan Ke Rekanan</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="ka_instalasi_un" class="col-xs-3 col-form-label">Kepala Ruangan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un" placeholder="Kepala Ruangan" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1 <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <select name="teknisi_1_un" class="form-control" id="teknisi_1_un">
                          <option value="" selected="selected">Select Teknisi </option>
                          @foreach ($teknisis as $teknisi)
                          <option value="<?= $teknisi['nama_teknisi']; ?>"><?= $teknisi['nama_teknisi']; ?></option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                      <div class="col-xs-9">
                        <select name="teknisi_2_un" class="form-control" id="teknisi_2_un">
                          <option value="" selected="selected">Select Teknisi</option>
                          @foreach ($teknisis as $teknisi)
                          <option value="<?= $teknisi['nama_teknisi']; ?>"><?= $teknisi['nama_teknisi']; ?></option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                      <div class="col-xs-9">
                        <select name="teknisi_3_un" class="form-control" id="teknisi_3_un">
                          <option value="" selected="selected">Select Teknisi</option>
                          @foreach ($teknisis as $teknisi)
                          <option value="<?= $teknisi['nama_teknisi']; ?>"><?= $teknisi['nama_teknisi']; ?></option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sperpart</label>
                      <div class="col-xs-9">
                        <input name="suku_cadang_un" type="text" class="form-control"
                          id="nama_sukucadang_un" placeholder="Nama Sperpart yang digunakan">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="volume_un" class="col-xs-3 col-form-label">Volume Sperpart</label>
                      <div class="col-xs-9">
                        <input name="volume_un" type="text" class="form-control" id="volume_un"
                          placeholder="Volume sperpart/ banyak yang digunakan">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="harga_satuan_un" class="col-xs-3 col-form-label">Harga Satuan Sperpart
                      </label>
                      <div class="col-xs-9">
                        <input name="harga_satuan_un" type="text" class="form-control"
                          id="harga_satuan_un" placeholder="Harga Satuan dari sperpart">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="jumlah_harga_un" class="col-xs-3 col-form-label">Jumlah Harga Sperpart
                      </label>
                      <div class="col-xs-9">
                        <input name="jumlah_harga_un" type="text" class="form-control"
                          id="jumlah_harga_un" placeholder="Jumlah Harga Sperpart">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="keluhan_dari_alat_un" class="col-xs-3 col-form-label">Keluhan Dari Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="keluhan_dari_alat_un" type="text" class="form-control" id="keluhan_dari_alat_un" placeholder="Keluhan Dari Alat" value="">
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
    <!-- Form Perbaikan end-->
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
                          id="lokasi_pemakaian" placeholder="Lokasi Alat yang menggunakan Sperpart ini" >
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
                          id="jumlah_keluar" placeholder="Jumlah stock yang digunakan">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tanggal_masuk" class="col-xs-3 col-form-label">Tanggal Masuk<i
                          class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="tanggal_masuk" type="date" class="form-control"
                          id="tanggal_masuk" placeholder="-" value="">
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
                          id="harga_part" placeholder="Contoh: Rp.1.000.000" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="jumlah_harga_part" class="col-xs-3 col-form-label">Jumlah harga<i
                          class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="jumlah_harga_part" type="text" class="form-control"
                          id="jumlah_harga_part" placeholder="Contoh: Rp.2.000.000" value="">
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
                          id="nama_alat_pengguna_part" placeholder="Alat yang menggunakan Sperpart ini" value="" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi_alat_pengguna_part" class="col-xs-3 col-form-label">Lokasi Alat Pengguna<i
                          class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="lokasi_alat_pengguna_part" type="text" class="form-control"
                          id="lokasi_alat_pengguna_part" placeholder=" Lokasi Alat yang menggunakan Sperpart ini" value="" >
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
    <!-- Tabel Perbaikan-->
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
                        <th class="none">Tanggal_Perbaikan</th>
                        <th class="">Nama Alat</th>
                        <th class="">Merek Alat</th>
                        <th class="">Type Alat</th>
                        <th class="">Serial Number</th>
                        <th class="">Lokasi Alat</th>
                        <th class="">Status</th>
                        <th class="none">Pelapor</th>
                        <th class="none">Keterangan</th>
                        <th class="none">Kepala Ruangan</th>
                        <th class="none">Teknisi_1</th>
                        <th class="none">Teknisi_2</th>
                        <th class="none">Teknisi_3</th>
                        <th class="none">Nama Sperpart</th>
                        <th class="none">Volume Sperpart</th>
                        <th class="none">Harga Satuan Sperpart</th>
                        <th class="none">Jumlah Harga Sperpart</th>
                        <th class="none">Keluhan_Dari_Alat</th>
                        <th class="">Tombol_Aksi</th>
                      </thead>
                      <tbody>
                        @forelse ($perbaikan as $index => $item)
                        <tr>
                          <td>{{ $index + 1 }}</td>
                          <td title="klik disini untuk copy ke form"
                          onclick="copyun(this)"><?php echo $item['id_perbaikan_un'] ?></td>
                          <td><?php echo $item['tanggal_perbaikan_un'] ?></td>
                          <td><?php echo $item['nama_alat_un'] ?></td>
                          <td><?php echo $item['merek_alat_un'] ?></td>
                          <td><?php echo $item['type_alat_un'] ?></td>
                          <td><?php echo $item['serial_number_un'] ?></td>
                          <td><?php echo $item['lokasi_alat_un'] ?></td>
                          <td>
                            <form action="{{ url('/dashboard/ppm/aset_unregistrasi/update', $item->id_perbaikan_un) }}" class="form-inner" method="post">
                              @csrf
                              @method('PUT')
                              <button class="btn btn-sm btn-{{ $item->status == 0 ? 'warning' : 'danger'}}" type="submit">{{ $item->status == 0 ? 'Sudah di Setujui' : 'Belum di Setujui'}}</button>
                            </form>
                          </td>
                          <td><?php echo $item['pelapor_un'] ?></td>
                          <td><?php echo $item['keterangan_un'] ?></td>
                          <td><?php echo $item['ka_instalasi_un'] ?></td>
                          <td><?php echo $item['teknisi_1_un'] ?></td>
                          <td><?php echo $item['teknisi_2_un'] ?></td>
                          <td><?php echo $item['teknisi_3_un'] ?></td>
                          <td><?php echo $item['suku_cadang_un'] ?></td>
                          <td><?php echo $item['volume_un'] ?></td>
                          <td><?php echo $item['harga_satuan_un'] ?></td>
                          <td><?php echo $item['jumlah_harga_un'] ?></td>
                          <td><?php echo $item['keluhan_dari_alat_un'] ?></td>
                          <td>
                            <a data-toggle="tooltip" data-placement="top" title="Edit" href="/dashboard/ppm/aset_unregistrasi/edit_perbaikan/{{ $item->id_perbaikan_un }}/edit" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>

                            <a data-toggle="tooltip" data-placement="top" title="Cetak" href="/dashboard/ppm/aset_unregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_un }}" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>

                            <form action="{{ url('/dashboard/ppm/perbaikan_unegistrasi',$item->id_perbaikan_un) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                                <i class="fa fa-trash "></i>
                              </button>
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
      </div>
    <!-- Tabel Perbaikan end-->
    <!-- Form Pengiriman -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print">
              <h1>Form Pengiriman Alat Unregistrasi</h1>
            </div>

            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="{{ url('/dashboard/ppm/tambah_pengiriman_un') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf

                    <div class="form-group row">
                      <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un1" placeholder="klik id perbaikan di tabel untuk mengisi form" readonly
                        data-toggle="tooltip" data-placement="top" title="klik disini untuk load data alat">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="tanggal_perbaikan_un" type="text" class="form-control" id="tanggal_perbaikan_un1" placeholder="Tanggal Perbaikan" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tanggal_pengiriman_un" class="col-xs-3 col-form-label">Tanggal Pengiriman<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="tanggal_pengiriman_un" type="text" class="form-control" id="tanggal_pengiriman_un" placeholder="Tanggal Pengiriman" value="<?php echo date('Y-m-d') ?>" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un1" placeholder="Nama Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un1" placeholder="Merek Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="type_alat_un" type="text" class="form-control" id="type_alat_un1" placeholder="Type Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="serial_number_un" type="text" class="form-control" id="serial_number_un1" placeholder="Seri Number" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="lokasi_alat_un" type="text" class="form-control" id="lokasi_alat_un1" placeholder="Lokasi Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="pelapor_un" type="text" class="form-control" id="pelapor_un1" placeholder="Teknisi 1" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="keterangan_un" type="text" class="form-control" id="keterangan_un1" placeholder="Keterangan" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="teknisi_1_un" type="text" class="form-control" id="teknisi_1_un1" placeholder="Teknisi 2" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                      <div class="col-xs-9">
                        <input name="teknisi_2_un" type="text" class="form-control" id="teknisi_2_un1" placeholder="Teknisi 2" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                      <div class="col-xs-9">
                        <input name="teknisi_3_un" type="text" class="form-control" id="teknisi_3_un1" placeholder="Teknisi 3" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="suku_cadang_un" class="col-xs-3 col-form-label">Nama Sperpart</label>
                      <div class="col-xs-9">
                        <input name="suku_cadang_un" type="text" class="form-control" id="suku_cadang_un1" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="volume_un" class="col-xs-3 col-form-label">Volume Sperpart</label>
                      <div class="col-xs-9">
                        <input name="volume_un" type="text" class="form-control" id="volume_un1" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="harga_satuan_un" class="col-xs-3 col-form-label">Harga Satuan Sperpart</label>
                      <div class="col-xs-9">
                        <input name="harga_satuan_un" type="text" class="form-control" id="harga_satuan_un1" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="jumlah_harga_un" class="col-xs-3 col-form-label">Jumlah Harga Sperpart</label>
                      <div class="col-xs-9">
                        <input name="jumlah_harga_un" type="text" class="form-control" id="jumlah_harga_un1" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_rekanan_un" class="col-xs-3 col-form-label">Nama Rekan</label>
                      <div class="col-xs-9">
                        <input name="nama_rekanan_un" type="text" class="form-control" id="nama_rekanan_un" placeholder="Nama Rekan" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="alamat_rekanan_un" class="col-xs-3 col-form-label">Alamat Rekan</label>
                      <div class="col-xs-9">
                        <input name="alamat_rekanan_un" type="text" class="form-control" id="alamat_rekanan_un" placeholder="Alamat Rekan" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_rekanan_un" class="col-xs-3 col-form-label">Teknisi Rekanan</label>
                      <div class="col-xs-9">
                        <input name="teknisi_rekanan_un" type="text" class="form-control" id="teknisi_rekanan_un" placeholder="Teknisi Rekanan" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="telphone_teknisi_rek_un" class="col-xs-3 col-form-label">Telp_Teknisi_Rekanan_reg</label>
                      <div class="col-xs-9">
                        <input name="telphone_teknisi_rek_un" type="text" class="form-control" id="telphone_teknisi_rek_un" placeholder="Telp_Teknisi_Rekanan_reg" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="ka_instalasi_un" class="col-xs-3 col-form-label">Kepala Ruangan</label>
                      <div class="col-xs-9">
                        <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un1" placeholder="Kepala Ruangan" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-offset-3 col-sm-6">
                        <div class="ui buttons">
                          <button class="ui positive button">Tambah</button>
                          <div class="or"></div>
                          <button type="reset" class="ui button">Reset</button>
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
    <!-- Form Pengiriman end-->
    <!-- Tabel Pengiriman -->
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
                        <th scope="col" class="">No</th>
                        <th scope="col" class="">Id_perbaikan</th>
                        <th scope="col" class="none">Tanggal_Perbaikan</th>
                        <th scope="col" class="none">Tanggal_Pengiriman</th>
                        <th scope="col" class="">Nama Alat</th>
                        <th scope="col" class="">Merek Alat</th>
                        <th scope="col" class="">Type Alat</th>
                        <th scope="col" class="">Serial Number</th>
                        <th scope="col" class="">Lokasi Alat</th>
                        <th scope="col" class="none">Pelapor</th>
                        <th scope="col" class="none">Keterangan</th>
                        <th scope="col" class="none">Teknisi_1</th>
                        <th scope="col" class="none">Teknisi_2</th>
                        <th scope="col" class="none">Teknisi_3</th>
                        <th scope="col" class="none">Nama Sperpart</th>
                        <th scope="col" class="none">Volume Sperpart</th>
                        <th scope="col" class="none">Harga Satuan Sperpart</th>
                        <th scope="col" class="none">Jumlah Harga Satuan</th>
                        <th scope="col" class="none">Nama_Rekanan</th>
                        <th scope="col" class="none">Alamat_Rekanan</th>
                        <th scope="col" class="none">Teknisi_Rekanan</th>
                        <th scope="col" class="none">Telphone_Teknisi_REK</th>
                        <th scope="col" class="none">Kepala Ruangan</th>
                        <th scope="col" class="">Tombol_Aksi_Tabel</th>
                      </thead>
                      <tbody>
                        @forelse ($pengiriman as $index => $item)
                        <tr>
                          <td>{{ $index + 1 }}</td>
                          <td title="klik disini untuk copy id ke form"
                          onclick="copyun2(this)"><?php echo $item['id_perbaikan_un'] ?></td>
                          <td><?php echo $item['tanggal_perbaikan_un'] ?></td>
                          <td><?php echo $item['tanggal_pengiriman_un'] ?></td>
                          <td><?php echo $item['nama_alat_un'] ?></td>
                          <td><?php echo $item['merek_alat_un'] ?></td>
                          <td><?php echo $item['type_alat_un'] ?></td>
                          <td><?php echo $item['serial_number_un'] ?></td>
                          <td><?php echo $item['lokasi_alat_un'] ?></td>
                          <td><?php echo $item['pelapor_un'] ?></td>
                          <td><?php echo $item['keterangan_un'] ?></td>
                          <td><?php echo $item['teknisi_1_un'] ?></td>
                          <td><?php echo $item['teknisi_2_un'] ?></td>
                          <td><?php echo $item['teknisi_3_un'] ?></td>
                          <td><?php echo $item['suku_cadang_un'] ?></td>
                          <td><?php echo $item['volume_un'] ?></td>
                          <td><?php echo $item['harga_satuan_un'] ?></td>
                          <td><?php echo $item['jumlah_harga_un'] ?></td>
                          <td><?php echo $item['nama_rekanan_un'] ?></td>
                          <td><?php echo $item['alamat_rekanan_un'] ?></td>
                          <td><?php echo $item['teknisi_rekanan_un'] ?></td>
                          <td><?php echo $item['telphone_teknisi_rek_un'] ?></td>
                          <td><?php echo $item['ka_instalasi_un'] ?></td>
                          <td>
                            <a data-toggle="tooltip" data-placement="top" title="Edit" href="/dashboard/ppm/aset_unregistrasi/edit_pengiriman/{{ $item->id_perbaikan_un }}/edit" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>

                            <a data-toggle="tooltip" data-placement="top" title="Cetak" href="/dashboard/ppm/aset_unregistrasi/cetak_pengiriman/{{ $item->id_perbaikan_un }}" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
                            <form action="{{ url('/dashboard/ppm/pengiriman_unegistrasi',$item->id_perbaikan_un) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                                <i class="fa fa-trash "></i>
                              </button>
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
      </div>
    <!-- Tabel Pengiriman end-->
    <!-- Form Pengembalian -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print">
              <h1>Form Pengembalian Alat Unregistrasi</h1>
            </div>

            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="{{ url('/dashboard/ppm/tambah_pengembalian_un') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf

                    <div class="form-group row">
                      <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un2" placeholder="klik id perbaikan di tabel untuk mengisi form" readonly
                        data-toggle="tooltip" data-placement="top" title="klik disini untuk load data">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="tanggal_perbaikan_un" type="text" class="form-control" id="tanggal_perbaikan_un2" placeholder="Tanggal Perbaikan" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tanggal_pengembalian_un" class="col-xs-3 col-form-label">Tanggal Pengembalian<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="tanggal_pengembalian_un" type="text" class="form-control" id="tanggal_pengembalian_un2" placeholder="Tanggal Pengembalian" value="<?php echo date('Y-m-d') ?>" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un2" placeholder="Nama Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="peneriama_alat_un" class="col-xs-3 col-form-label">Peneriama Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="peneriama_alat_un" type="text" class="form-control" id="peneriama_alat_un" placeholder="Peneriama Alat" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un2" placeholder="Merek" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="ka_instalasi_un" class="col-xs-3 col-form-label">Kepala Ruangan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un2" placeholder="Kepala ruangan" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="type_alat_un" type="text" class="form-control" id="type_alat_un2" placeholder="Type Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="teknisi_1_un" type="text" class="form-control" id="teknisi_1_un2" placeholder="Teknisi 1" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="serial_number_un" type="text" class="form-control" id="serial_number_un2" placeholder="Serial Number" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                      <div class="col-xs-9">
                        <input name="teknisi_2_un" type="text" class="form-control" id="teknisi_2_un2" placeholder="Teknisi 2" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                      <div class="col-xs-9">
                        <input name="teknisi_3_un" type="text" class="form-control" id="teknisi_3_un2" placeholder="Teknisi 3" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="lokasi_alat_un" type="text" class="form-control" id="lokasi_alat_un2" placeholder="Lokasi Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="keterangan_un" type="text" class="form-control" id="keterangan_un2" placeholder="Keterangan" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="pelapor_un" type="text" class="form-control" id="pelapor_un2" placeholder="Pelapor" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="suku_cadang_un" class="col-xs-3 col-form-label">Nama Sperpart</label>
                      <div class="col-xs-9">
                        <input name="suku_cadang_un" type="text" class="form-control" id="suku_cadang_un2" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="volume_un" class="col-xs-3 col-form-label">Volume Sperpart</label>
                      <div class="col-xs-9">
                        <input name="volume_un" type="text" class="form-control" id="volume_un2" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="harga_satuan_un" class="col-xs-3 col-form-label">Harga Satuan Sperpart</label>
                      <div class="col-xs-9">
                        <input name="harga_satuan_un" type="text" class="form-control" id="harga_satuan_un2" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="jumlah_harga_un" class="col-xs-3 col-form-label">Jumlah Harga Sperpart</label>
                      <div class="col-xs-9">
                        <input name="jumlah_harga_un" type="text" class="form-control" id="jumlah_harga_un2" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="harga_perbaikan_un" class="col-xs-3 col-form-label">Harga Perbaikan </label>
                      <div class="col-xs-9">
                        <input name="harga_perbaikan_un" type="text" class="form-control" id="harga_perbaikan_un" placeholder="Harga Perbaikan" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="penyebab_kerusakan_un" class="col-xs-3 col-form-label">Penyebab Kerusakan</label>
                      <div class="col-xs-9">
                        <input name="penyebab_kerusakan_un" type="text" class="form-control" id="penyebab_kerusakan_un" placeholder="Penyebab Kerusakan" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="pengujian_suku_cadang_un" class="col-xs-3 col-form-label">Pengujian Suku Cadang</label>
                      <div class="col-xs-9">
                        <input name="pengujian_suku_cadang_un" type="text" class="form-control" id="pengujian_suku_cadang_un" placeholder="Pengujian Suku Cadang" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="uji_fungsi_setelah_perbaikan_un" class="col-xs-3 col-form-label">Uji Fungsi Setelah Perbaikan</label>
                      <div class="col-xs-9">
                        <input name="uji_fungsi_setelah_perbaikan_un" type="text" class="form-control" id="uji_fungsi_setelah_perbaikan_un" placeholder="Uji Fungsi Setelah Perbaikan" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="solusi_perbaikan_un" class="col-xs-3 col-form-label">Solusi Perbaikan</label>
                      <div class="col-xs-9">
                        <input name="solusi_perbaikan_un" type="text" class="form-control" id="solusi_perbaikan_un" placeholder="Solusi Perbaikan" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="penggantian_suku_cadang_un" class="col-xs-3 col-form-label">Penggantian Suku Cadang</label>
                      <div class="col-xs-9">
                        <input name="penggantian_suku_cadang_un" type="text" class="form-control" id="penggantian_suku_cadang_un" placeholder="Penggantian Suku Cadang" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="hasil_verifikasi_un" class="col-xs-3 col-form-label">Hasil Verifikasi</label>
                      <div class="col-xs-9">
                        <input name="hasil_verifikasi_un" type="text" class="form-control" id="hasil_verifikasi_un" placeholder="Hasil Verifikasi" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-offset-3 col-sm-6">
                        <div class="ui buttons">
                          <button class="ui positive button" type="submit">Tambah</button>
                          <div class="or"></div>
                          <button type="reset" class="ui button">Reset</button>
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
    <!-- Form Pengembalian end-->
    <!-- Tabel Pengembalian -->
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
                        <th scope="col" class="">Id Perbaikan</th>
                        <th scope="col" class="none">Tanggal_Perbaikan</th>
                        <th scope="col" class="none">Tanggal_Pengembalian</th>
                        <th scope="col" class="">Nama Alat</th>
                        <th scope="col" class="none">Peneriama_Alat</th>
                        <th scope="col" class="">Merek Alat</th>
                        <th scope="col" class="none">Kepala Ruangan</th>
                        <th scope="col" class="">Type Alat</th>
                        <th scope="col" class="none">Teknisi_1</th>
                        <th scope="col" class="">Serial Number</th>
                        <th scope="col" class="none">Teknisi_2</th>
                        <th scope="col" class="none">Teknisi_3</th>
                        <th scope="col" class="">Lokasi Alat</th>
                        <th scope="col" class="none">Keterangan</th>
                        <th scope="col" class="none">Pelapor</th>
                        <th scope="col" class="none">Nama Sperpart</th>
                        <th scope="col" class="none">Volume Sperpart</th>
                        <th scope="col" class="none">Harga Satuan Sperpart</th>
                        <th scope="col" class="none">Jumlah Harga Sperpart</th>
                        <th scope="col" class="none">Harga_Perbaikan</th>
                        <th scope="col" class="none">Penyebab_Kerusakan</th>
                        <th scope="col" class="none">Pengujian_Suku_cadang</th>
                        <th scope="col" class="none">Uji_Fungsi_Setelah_Perbaikan</th>
                        <th scope="col" class="none">Solusi_Perbaikan</th>
                        <th scope="col" class="none">Penggantian_Suku_cadang</th>
                        <th scope="col" class="none">Hasil_Verifikasi</th>
                        <th scope="col" class="">Tombol_Aksi_Tabel</th>
                      </thead>
                      <tbody>
                        @forelse ($pengembalian as $index => $item)
                        <tr>
                          <td>{{ $index + 1 }}</td>
                          <td data-toogle="tooltip" data-placement="right" title="klik disini untuk copy id ke form"
                          onclick="copyun3(this)"><?php echo $item['id_perbaikan_un']  ?></td>
                          <td><?php echo $item['tanggal_perbaikan_un']  ?></td>
                          <td><?php echo $item['tanggal_pengembalian_un']  ?></td>
                          <td><?php echo $item['nama_alat_un']  ?></td>
                          <td><?php echo $item['peneriama_alat_un']  ?></td>
                          <td><?php echo $item['merek_alat_un']  ?></td>
                          <td><?php echo $item['ka_instalasi_un']  ?></td>
                          <td><?php echo $item['type_alat_un']  ?></td>
                          <td><?php echo $item['teknisi_1_un']  ?></td>
                          <td><?php echo $item['serial_number_un']  ?></td>
                          <td><?php echo $item['teknisi_2_un']  ?></td>
                          <td><?php echo $item['teknisi_3_un']  ?></td>
                          <td><?php echo $item['lokasi_alat_un']  ?></td>
                          <td><?php echo $item['keterangan_un']  ?></td>
                          <td><?php echo $item['pelapor_un']  ?></td>
                          <td><?php echo $item['suku_cadang_un'] ?></td>
                          <td><?php echo $item['volume_un'] ?></td>
                          <td><?php echo $item['harga_satuan_un'] ?></td>
                          <td><?php echo $item['jumlah_harga_un'] ?></td>
                          <td><?php echo $item['harga_perbaikan_un']  ?></td>
                          <td><?php echo $item['penyebab_kerusakan_un']  ?></td>
                          <td><?php echo $item['pengujian_suku_cadang_un']  ?></td>
                          <td><?php echo $item['uji_fungsi_setelah_perbaikan_un']  ?></td>
                          <td><?php echo $item['solusi_perbaikan_un']  ?></td>
                          <td><?php echo $item['penggantian_suku_cadang_un']  ?></td>
                          <td><?php echo $item['hasil_verifikasi_un']  ?></td>
                          <td>
                            <a data-toggle="tooltip" data-placement="top" title="Edit" href="/dashboard/ppm/aset_unregistrasi/edit_pengembalian/{{ $item->id_perbaikan_un }}/edit" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="Cetak" href="/dashboard/ppm/aset_unregistrasi/cetak_pengembalian/{{ $item->id_perbaikan_un }}" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
                            <form action="{{ url('/dashboard/ppm/pengembalian_unegistrasi',$item->id_perbaikan_un) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                                <i class="fa fa-trash "></i>
                              </button>
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
      </div>
    <!-- Tabel Pengembalian -->
    <!-- Form Penghapusan -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print">
              <h1>Form Penghapusan Alat Unregistrasi</h1>
            </div>

            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="{{ url('/dashboard/ppm/tambah_penghapusan_un') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf

                    <div class="form-group row">
                      <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un3" placeholder="klik id perbaikan di tabel untuk mengisi form" readonly
                        data-toggle="tooltip" data-placement="top" title="klik disini untuk load data">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="tanggal_perbaikan_un" type="text" class="form-control" id="tanggal_perbaikan_un3" placeholder="Tanggal Perbaikan" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un3" placeholder="Nama Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un3" placeholder="Merek Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="type_alat_un" type="text" class="form-control" id="type_alat_un3" placeholder="Type Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="serial_number_un" type="text" class="form-control" id="serial_number_un3" placeholder="Serial Number" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="lokasi_alat_un" type="text" class="form-control" id="lokasi_alat_un3" placeholder="Lokasi Alat" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="pelapor_un" type="text" class="form-control" id="pelapor_un3" placeholder="Pelapor" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="teknisi_1_un" type="text" class="form-control" id="teknisi_1_un3" placeholder="Teknisi 1" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                      <div class="col-xs-9">
                        <input name="teknisi_2_un" type="text" class="form-control" id="teknisi_2_un3" placeholder="Teknisi 2" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                      <div class="col-xs-9">
                        <input name="teknisi_3_un" type="text" class="form-control" id="teknisi_3_un3" placeholder="Teknisi 3" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="suku_cadang_un" class="col-xs-3 col-form-label">Nama Sperpart</label>
                      <div class="col-xs-9">
                        <input name="suku_cadang_un" type="text" class="form-control" id="suku_cadang_un3" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="volume_un" class="col-xs-3 col-form-label">Volume Sperpart</label>
                      <div class="col-xs-9">
                        <input name="volume_un" type="text" class="form-control" id="volume_un3" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="harga_satuan_un" class="col-xs-3 col-form-label">Harga Satuan Sperpart</label>
                      <div class="col-xs-9">
                        <input name="harga_satuan_un" type="text" class="form-control" id="harga_satuan_un3" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="jumlah_harga_un" class="col-xs-3 col-form-label">Jumlah Harga Sperpart</label>
                      <div class="col-xs-9">
                        <input name="jumlah_harga_un" type="text" class="form-control" id="jumlah_harga_un3" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tanggal_penggudangan_un" class="col-xs-3 col-form-label">Tanggal Penggudangan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="tanggal_penggudangan_un" type="text" class="form-control" id="tanggal_penggudangan_un" placeholder="Tanggal Penggudangan" value="<?php echo date('Y-m-d') ?>" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="ka_instalasi_un" class="col-xs-3 col-form-label">Kepala Ruangan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un3" placeholder="Kepala Ruangan" value="" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="keterangan_penggudangan_un" class="col-xs-3 col-form-label">Keterangan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="keterangan_penggudangan_un" type="text" class="form-control" id="keterangan_penggudangan_un" placeholder="Keterangan" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-offset-3 col-sm-6">
                        <div class="ui buttons">
                          <button class="ui positive button" type="submit">Tambah</button>
                          <div class="or"></div>
                          <button type="reset" class="ui button">Reset</button>
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
    <!-- Form Penghapusan end-->
    <!-- Tabel Penghapusan -->
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
                        <th scope="col" class="">No</th>
                        <th scope="col" class="">Id Perbaikan</th>
                        <th scope="col" class="none">Tanggal_Perbaikan</th>
                        <th scope="col" class="">Nama Alat</th>
                        <th scope="col" class="">Merek Alat</th>
                        <th scope="col" class="">Type Alat</th>
                        <th scope="col" class="">Serial Number</th>
                        <th scope="col" class="">Lokasi Alat</th>
                        <th scope="col" class="none">Pelapor</th>
                        <th scope="col" class="none">Teknisi_1</th>
                        <th scope="col" class="none">Teknisi_2</th>
                        <th scope="col" class="none">Teknisi_3</th>
                        <th scope="col" class="none">Nama Sperpart</th>
                        <th scope="col" class="none">Volume Sperpart</th>
                        <th scope="col" class="none">Harga Satuan Sperpart</th>
                        <th scope="col" class="none">Jumlah Harga Serpart</th>
                        <th scope="col" class="none">Tanggal_Penggudangan</th>
                        <th scope="col" class="none">Kepala Ruangan</th>
                        <th scope="col" class="none">Keterangan</th>
                        <th scope="col" class="">Tombol_Aksi_Tabel</th>
                      </thead>
                      <tbody>
                        @forelse ($penghapusan as $index => $item)
                        <tr>
                          <td>{{ $index + 1 }}</td>
                          <td><?php echo $item['id_perbaikan_un'] ?></td>
                          <td><?php echo $item['tanggal_perbaikan_un'] ?></td>
                          <td><?php echo $item['nama_alat_un'] ?></td>
                          <td><?php echo $item['merek_alat_un'] ?></td>
                          <td><?php echo $item['type_alat_un'] ?></td>
                          <td><?php echo $item['serial_number_un'] ?></td>
                          <td><?php echo $item['lokasi_alat_un'] ?></td>
                          <td><?php echo $item['pelapor_un'] ?></td>
                          <td><?php echo $item['teknisi_1_un'] ?></td>
                          <td><?php echo $item['teknisi_2_un'] ?></td>
                          <td><?php echo $item['teknisi_3_un'] ?></td>
                          <td><?php echo $item['suku_cadang_un'] ?></td>
                          <td><?php echo $item['volume_un'] ?></td>
                          <td><?php echo $item['harga_satuan_un'] ?></td>
                          <td><?php echo $item['jumlah_harga_un'] ?></td>
                          <td><?php echo $item['tanggal_penggudangan_un'] ?></td>
                          <td><?php echo $item['ka_instalasi_un'] ?></td>
                          <td><?php echo $item['keterangan_penggudangan_un'] ?></td>
                          <td>
                            <a data-toggle="tooltip" data-placement="top" title="Edit" href="/dashboard/ppm/aset_unregistrasi/edit_penghapusan/{{ $item->id_perbaikan_un }}/edit" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="Cetak" href="/dashboard/ppm/aset_unregistrasi/cetak_penggudangan/{{ $item->id_perbaikan_un }}" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
                            <form action="{{ url('/dashboard/ppm/penghapusan_unregistrasi',$item->id_perbaikan_un) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                                <i class="fa fa-trash "></i>
                              </button>
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
      </div>
    <!-- Tabel Penghapusan -->

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection

@push('addon-script')
<script>

// *Fucntion autofill form sperpart* //
  function autofillpart_un() {
    let idarspart = $("#id_aset_part_un").val();

    $.ajax({
      url: '{{ url(' / dashboard / ppm / autofillpart / ') }}/' + idarspart,
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        $("#nama_alat_pengguna_part_un").val(data.nama_alat);
        $("#lokasi_alat_pengguna_part_un").val(data.lokasi_alat);
        $("#lokasi_pemakaian_un").val(data.lokasi_alat);
        console.log(data);
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
// *Fucntion autofill form sperpart end* //

// *Function autofill form pengiriman* //  
  $('#id_perbaikan_un1').mouseup(function(){
    if($(this).val().length > 0){
      let Id_Perbaikan_un = $("#id_perbaikan_un1").val();
      $.ajax({
        url: '{{ url("dashboard/ppm/autofill_pengirimanUn/") }}/' + Id_Perbaikan_un,
        method: 'GET', // HTTP method (e.g., GET, POST)
        data: {
          Id_Perbaikan_un: Id_Perbaikan_un
        },
        dataType: 'json',
        success: function(data) {
          $("#tanggal_perbaikan_un1").val(data.tanggal_perbaikan_un);
          $("#nama_alat_un1").val(data.nama_alat_un);
          $("#merek_alat_un1").val(data.merek_alat_un);
          $("#type_alat_un1").val(data.type_alat_un);
          $("#serial_number_un1").val(data.serial_number_un);
          $("#lokasi_alat_un1").val(data.lokasi_alat_un);
          $("#pelapor_un1").val(data.pelapor_un);
          $("#teknisi_1_un1").val(data.teknisi_1_un);
          $("#keterangan_un1").val(data.keterangan_un);
          $("#teknisi_2_un1").val(data.teknisi_2_un);
          $("#teknisi_3_un1").val(data.teknisi_3_un);
          $("#suku_cadang_un1").val(data.suku_cadang_un);
          $("#volume_un1").val(data.volume_un);
          $("#harga_satuan_un1").val(data.harga_satuan_un);
          $("#jumlah_harga_un1").val(data.jumlah_harga_un);
          $("#ka_instalasi_un1").val(data.ka_instalasi_un);

        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    }
  });
// *Function autofill form pengiriman end* //

// *Fuction autofill form pengembalian *//
  $('#id_perbaikan_un2').mouseup(function(){
    if($(this).val().length > 0){
      let Id_Perbaikan_un = $("#id_perbaikan_un2").val();
      $.ajax({
        url: '{{ url("/dashboard/ppm/autofill_pengirimanUn/") }}/' + Id_Perbaikan_un,
        method: 'GET', // HTTP method (e.g., GET, POST)
        data: {
          Id_Perbaikan_un: Id_Perbaikan_un
        },
        dataType: 'json',
        success: function(data) {
          console.log(data.Nama_Alat_reg)
          $("#tanggal_perbaikan_un2").val(data.tanggal_perbaikan_un);
          $("#nama_alat_un2").val(data.nama_alat_un);
          $("#merek_alat_un2").val(data.merek_alat_un);
          $("#type_alat_un2").val(data.type_alat_un);
          $("#serial_number_un2").val(data.serial_number_un);
          $("#lokasi_alat_un2").val(data.lokasi_alat_un);
          $("#pelapor_un2").val(data.pelapor_un);
          $("#teknisi_1_un2").val(data.teknisi_1_un);
          $("#keterangan_un2").val(data.keterangan_un);
          $("#teknisi_2_un2").val(data.teknisi_2_un);
          $("#teknisi_3_un2").val(data.teknisi_3_un);
          $("#suku_cadang_un2").val(data.suku_cadang_un);
          $("#volume_un2").val(data.volume_un);
          $("#harga_satuan_un2").val(data.harga_satuan_un);
          $("#jumlah_harga_un2").val(data.jumlah_harga_un);
          $("#ka_instalasi_un2").val(data.ka_instalasi_un);

        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    }
  });
// *Fuction autofill form pengembalian end*//

// *Fuction autofill form penghapusan *//
  $('#id_perbaikan_un3').mouseup(function(){
    if($(this).val().length > 0){
      let Id_Perbaikan_un = $("#id_perbaikan_un3").val();
      $.ajax({
        url: '{{ url("/dashboard/ppm/autofill_pengirimanUn/") }}/' + Id_Perbaikan_un,
        method: 'GET', // HTTP method (e.g., GET, POST)
        data: {
          Id_Perbaikan_un: Id_Perbaikan_un
        },
        dataType: 'json',
        success: function(data) {
          $("#tanggal_perbaikan_un3").val(data.tanggal_perbaikan_un);
          $("#nama_alat_un3").val(data.nama_alat_un);
          $("#merek_alat_un3").val(data.merek_alat_un);
          $("#type_alat_un3").val(data.type_alat_un);
          $("#serial_number_un3").val(data.serial_number_un);
          $("#lokasi_alat_un3").val(data.lokasi_alat_un);
          $("#pelapor_un3").val(data.pelapor_un);
          $("#teknisi_1_un3").val(data.teknisi_1_un);
          $("#teknisi_2_un3").val(data.teknisi_2_un);
          $("#teknisi_3_un3").val(data.teknisi_3_un);
          $("#suku_cadang_un3").val(data.suku_cadang_un);
          $("#volume_un3").val(data.volume_un);
          $("#harga_satuan_un3").val(data.harga_satuan_un);
          $("#jumlah_harga_un3").val(data.jumlah_harga_un);
          $("#ka_instalasi_un3").val(data.ka_instalasi_un);

        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    }
  })
// *Fuction autofill form penghapusan end*//
</script>

<script>
// *function copy id perbaikan untuk form pengiriman *//
  function copyun(that){
    var inp =document.createElement('input');
    document.body.appendChild(inp)
    inp.value =that.textContent
    inp.select();
    document.execCommand('copy',false)
    inp.remove();
    document.getElementById('id_perbaikan_un1').value = inp.value =that.textContent;
  }
// *function copy id perbaikan untuk form pengiriman end *//

// *function copy id perbaikan untuk form pengembalian *//
  function copyun2(that){
    var inp =document.createElement('input');
    document.body.appendChild(inp)
    inp.value =that.textContent
    inp.select();
    document.execCommand('copy',false)
    inp.remove();
    document.getElementById('id_perbaikan_un2').value = inp.value = that.textContent;
  }
// *function copy id perbaikan untuk form pengembalian end *//

// *function copy id perbaikan untuk form penghapusan *//
  function copyun3(that){
    var inp =document.createElement('input');
    document.body.appendChild(inp)
    inp.value =that.textContent
    inp.select();
    document.execCommand('copy',false)
    inp.remove();
    document.getElementById('id_perbaikan_un3').value = inp.value = that.textContent;
  }
// *function copy id perbaikan untuk form penghapusan end *//
</script>
@endpush