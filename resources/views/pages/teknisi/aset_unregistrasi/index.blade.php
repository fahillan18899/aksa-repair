@extends('layouts.teknisi')

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
    <!--Form Perbaikan -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print">
              <h1>Form Perbaikan Alat Unregistrasi</h1>
            </div>

            <div class="panel-body panel-form">

              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="{{ url('/dashboard_teknisi/perbaikan_unregistrasi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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

                    <!--<div class="form-group row">
                      <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un" placeholder="Nama Alat" value="">
                      </div>
                    </div>-->

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
                      <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek </label>
                      <div class="col-xs-9">
                        <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un" placeholder="Isi Sesuai Data Alat" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="type_alat_un" class="col-xs-3 col-form-label">Type</label>
                      <div class="col-xs-9">
                        <input name="type_alat_un" type="text" class="form-control" id="type_alat_un" placeholder="Isi Sesuai Data Alat" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number</label>
                      <div class="col-xs-9">
                        <input name="serial_number_un" type="text" class="form-control" id="serial_number_un" placeholder="Isi Sesuai Data Alat" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <select name="lokasi_alat_un" class="form-control" id="lokasi_alat_un">
                          <option>Pilih Lokasi</option>
                          @foreach ($ruangans as $alat)
                            <option value="<?= $alat['lokasi_alat']; ?>"><?= $alat['lokasi_alat']; ?></option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor</label>
                      <div class="col-xs-9">
                        <input name="pelapor_un" type="text" class="form-control" id="pelapor_un" placeholder="User Pelapor Kerusakan Alat" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan Kondisi Alat <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <select name="keterangan_un" class="form-control" id="keterangan_un">
                          <option>Pilih Keterangan</option>
                          <option value="Selesai Alat Dikembalikan">Selesai Alat Dikembalikan</option>
                          <option value="Alat Dalam Perbaikan" >Alat Dalam Perbaikan</option>
                          <option value="Alat Dilanjutkan Ke Rekanan" >Alat Dilanjutkan Ke Rekanan</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="ka_instalasi_un" class="col-xs-3 col-form-label">Kepala Ruangan</label>
                      <div class="col-xs-9">
                        <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un" placeholder="Kepala Ruangan Yang Bertanggung Jawab" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1 <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <select name="teknisi_1_un" class="form-control" id="teknisi_1_un">
                          <option>Pilih Teknisi 1</option>
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
                          <option>Pilih Teknisi 2</option>
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
                          <option>Pilih Teknisi 3</option>
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
                      <label for="keluhan_dari_alat_un" class="col-xs-3 col-form-label">Keluhan Dari Alat</label>
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
                  <form action="{{ url('/dashboard_teknisi/penggunaan_sperpart') }}" class="form-inner"
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
                      <label for="lokasi_pemakaian_un" class="col-xs-3 col-form-label">Lokasi Pemakaian<i
                          class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="lokasi_pemakaian" type="text" class="form-control"
                          id="lokasi_pemakaian_un3" placeholder="Lokasi Alat yang menggunakan Sperpart ini" >
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
                          id="id_aset_part_un3" placeholder="Paste id aset alat disini" onkeyup="autofillpart()">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_alat_pengguna_part" class="col-xs-3 col-form-label">Nama Alat Pengguna<i
                          class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="nama_alat_pengguna_part" type="text" class="form-control"
                          id="nama_alat_pengguna_part_un3" placeholder="Alat yang menggunakan Sperpart ini" value="" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi_alat_pengguna_part" class="col-xs-3 col-form-label">Lokasi Alat Pengguna<i
                          class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="lokasi_alat_pengguna_part" type="text" class="form-control"
                          id="lokasi_alat_pengguna_part_un3" placeholder=" Lokasi Alat yang menggunakan Sperpart ini" value="" >
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
    <!--Tabel Perbaikan -->
     <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Tabel Perbaikan</h1>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th class="">No</th>
                      <th class="">Id Perbaikan</th>
                      <th class="none">Tanggal Perbaikan</th>
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
                      <td><?php echo $item ['id_perbaikan_un'] ?></td>
                      <td><?php echo $item ['tanggal_perbaikan_un'] ?></td>
                      <td><?php echo $item ['nama_alat_un'] ?></td>
                      <td><?php echo $item ['merek_alat_un'] ?></td>
                      <td><?php echo $item ['type_alat_un'] ?></td>
                      <td><?php echo $item ['serial_number_un'] ?></td>
                      <td><?php echo $item ['lokasi_alat_un'] ?></td>
                      <td>
                          <form action="{{ url('/dashboard_teknisi/perbaikan_unregistrasi/update', $item->id_perbaikan_un) }}" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-{{ $item->status == 0 ?  'warning' : 'danger' }}" type="submit">{{ $item->status == 0 ? 'Sudah di Setujui' : 'Belum di Setujui'}}</button>
                          </form>
                        </td>
                      <td><?php echo $item ['pelapor_un'] ?></td>
                      <td><?php echo $item ['keterangan_un'] ?></td>
                      <td><?php echo $item ['ka_instalasi_un'] ?></td>
                      <td><?php echo $item ['teknisi_1_un'] ?></td>
                      <td><?php echo $item ['teknisi_2_un'] ?></td>
                      <td><?php echo $item ['teknisi_3_un'] ?></td>
                      <td><?php echo $item ['suku_cadang_un'] ?></td>
                      <td><?php echo $item ['volume_un'] ?></td>
                      <td><?php echo $item ['harga_satuan_un'] ?></td>
                      <td><?php echo $item ['jumlah_harga_un'] ?></td>
                      <td><?php echo $item ['keluhan_dari_alat_un'] ?></td>
                      <td>
                        <a href="/dashboard_teknisi/perbaikan_unregistrasi/edit_perbaikan/{{ $item->id_perbaikan_un }}/edit" 
                              class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" 
                              title="Edit"> <i class="fa fa-edit"></i></a>

                         <a href="/dashboard_teknisi/perbaikan_unregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_un }}"
                            class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="7">Data Kosong</td>
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
    <!--Tabel Perbaikan end-->


   </div> <!-- /.content -->
 </div> <!-- /.content-wrapper -->
 @endsection
