@extends('layouts.admin')

@section('content')<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>MENU FORM TEREGISTRASI</h1>
        <small>Form Teregistrasi</small>
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
                    <video id="preview"></video>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Perbaikan Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/aset_teregistrasi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf

                  <input type="hidden" name="kode_rs" value="as" />


                  <div class="form-group row">
                    <label for="ID_Aset_reg" class="col-xs-3 col-form-label">ID Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ID_Aset_reg" type="text" class="form-control" id="id_aset_reg" placeholder="ID Aset" onkeyup="autofill()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Id_Perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Id_Perbaikan_reg" type="text" class="form-control" id="Id_Perbaikan_reg" placeholder="Id Perbaikan" value="123" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Tanggal_Perbaikan_reg" type="text" class="form-control" id="Tanggal_Perbaikan_reg" placeholder="Tanggal Perbaikan" value="<?php echo date(now()) ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Nama_Alat_reg" type="text" class="form-control" id="Nama_Alat_reg" placeholder="Nama Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Merek_Alat_reg" type="text" class="form-control" id="Merek_Alat_reg" placeholder="Merek Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Type_Alat_reg" type="text" class="form-control" id="Type_Alat_reg" placeholder="Type Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Serial_Number_reg" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Serial_Number_reg" type="text" class="form-control" id="Serial_Number_reg" placeholder="Serial Number" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Lokasi_Alat_reg" type="text" class="form-control" id="Lokasi_Alat_reg" placeholder="Lokasi Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Pelapor_reg" type="text" class="form-control" id="Pelapor_reg" placeholder="Pelapor">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keterangan_Kondisi_Alat_reg" class="col-xs-3 col-form-label">Keterangan Kondisi Alat</label>
                    <div class="col-xs-9">
                      <select name="Keterangan_Kondisi_Alat_reg" class="form-control" id="Keterangan_Kondisi_Alat_reg">
                        <option value="as">asd</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Ka_Instalasi_reg" class="col-xs-3 col-form-label">Ka Instalasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Ka_Instalasi_reg" type="text" class="form-control" id="Ka_Instalasi_reg" placeholder="Ka Instalasi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1</label>
                    <div class="col-xs-9">
                      <select name="Teknisi_1_reg" class="form-control" id="Teknisi_1_reg">
                        <option value="as" selected="selected">Select Teknisi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Teknisi_2_reg" type="text" class="form-control" id="Teknisi_2_reg" placeholder="Teknisi 2">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Teknisi_3_reg" type="text" class="form-control" id="Teknisi_3_reg" placeholder="Teknisi 3">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keluhan_Dari_alat_reg" class="col-xs-3 col-form-label">Keluhan Dari Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Keluhan_Dari_alat_reg" type="text" class="form-control" id="Keluhan_Dari_alat_reg" placeholder="Keluhan Dari Alat">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Korektif_reg" class="col-xs-3 col-form-label">Korektif<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Korektif_reg" type="text" class="form-control" id="Korektif_reg" placeholder="Korektif">
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
    <!--TABEL-->
    <table class="datatable table table-striped table-bordered" style="width:100%">
      <thead class="table-light">
        <th scope="col">Id_Perbaikan</th>
        <th scope="col">ID_Aset</th>
        <th scope="col">Tanggal_Perbaikan</th>
        <th scope="col">Nama_Alat</th>
        <th scope="col">Merek_Alat</th>
        <th scope="col">Type_Alat</th>
        <th scope="col">Serial_Number</th>
        <th scope="col">Lokasi_Alat</th>
        <th scope="col">Pelapor</th>
        <th scope="col">Keterangan_Kondisi_Alat</th>
        <th scope="col">Instalasi</th>
        <th scope="col">Teknisi_1</th>
        <th scope="col">Teknisi_2</th>
        <th scope="col">Teknisi_3</th>
        <th scope="col">Keluhan_Dari_alat</th>
        <th scope="col">Korektif</th>
        <th scope="col">Tombol_Eksekusi</th>
        <th scope="col">Tombol_Eksekusi</th>
      </thead>
      <tbody>
        @forelse ($items as $item)
        <tr class="odd gradeX">
          <td><?php echo $item['id_perbaikan_reg'] ?></td>
          <td><?php echo $item['id_aset_reg'] ?></td>
          <td><?php echo $item['tanggal_perbaikan_reg'] ?></td>
          <td><?php echo $item['nama_alat_reg'] ?></td>
          <td><?php echo $item['merek_alat_reg'] ?></td>
          <td><?php echo $item['type_alat_reg'] ?></td>
          <td><?php echo $item['serial_number_reg'] ?></td>
          <td><?php echo $item['lokasi_alat_reg'] ?></td>
          <td><?php echo $item['pelapor_reg'] ?></td>
          <td><?php echo $item['keterangan_kondisi_alat_reg'] ?></td>
          <td><?php echo $item['ka_instalasi_reg'] ?></td>
          <td><?php echo $item['teknisi_1_reg'] ?></td>
          <td><?php echo $item['teknisi_2_reg'] ?></td>
          <td><?php echo $item['teknisi_3_reg'] ?></td>
          <td><?php echo $item['keluhan_dari_alat_reg'] ?></td>
          <td><?php echo $item['korektif_reg'] ?></td>
          <td><?php echo $item['kode_rs'] ?></td>
          <td>
            <a href="{{ route('update_perbaikan.edit', $item->id_perbaikan_reg) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

            <a href="/dashboard/ppm/aset_teregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_reg }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
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

    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Pengiriman Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/tambah_pengiriman') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf

                  <input type="hidden" name="kode_rs" value="rsc" />

                  <div class="form-group row">
                    <label for="Id_Perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="Perbaikan_reg" placeholder="Id Perbaikan" onkeyup="autofill_Pengiriman()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="Tanggal_Perbaikan_reg1" placeholder="Tanggal Perbaikan" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Pengiriman_reg" class="col-xs-3 col-form-label">Tanggal Pengiriman<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_pengiriman_reg" type="text" class="form-control" id="Tanggal_Pengiriman_reg" placeholder="Tanggal Pengiriman" value="<?php echo date('Y-m-d') ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Id_Aset_reg" class="col-xs-3 col-form-label">Id Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_reg" type="text" class="form-control" id="Id_Aset_reg1" placeholder="Id Aset" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control" id="Nama_Alat_reg1" placeholder="Nama Alat" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_alat_reg" type="text" class="form-control" id="Merek_Alat_reg1" placeholder="Merek Alat" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_alat_reg" type="text" class="form-control" id="Type_Alat_reg1" placeholder="Type Alat" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Seri_Number_reg" class="col-xs-3 col-form-label">Seri Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="seri_number_reg" type="text" class="form-control" id="Seri_Number_reg1" placeholder="Seri Number" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_reg" type="text" class="form-control" id="Lokasi_Alat_reg1" placeholder="Lokasi Alat" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="Pelapor_reg1" placeholder="Pelapor" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_1_reg" type="text" class="form-control" id="Teknisi_1_reg1" placeholder="Teknisi 1" readonly>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="Teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_2_reg" type="text" class="form-control" id="Teknisi_2_reg1" placeholder="Teknisi 2" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_3_reg" type="text" class="form-control" id="Teknisi_3_reg1" placeholder="Teknisi 3" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keterangan_Kondisi_Alat_reg" class="col-xs-3 col-form-label">Keterangan Kondisi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="keterangan_kondisi_alat_reg" type="text" class="form-control" id="Keterangan_Kondisi_Alat_reg1" placeholder="Keterangan Kondisi Alat" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="KA_Instalasi_reg" class="col-xs-3 col-form-label">KA Instalasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="KA_Instalasi_reg1" placeholder="KA Instalasi" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Rekan_reg" class="col-xs-3 col-form-label">Nama Rekan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_rekan_reg" type="text" class="form-control" id="Nama_Rekan_reg" placeholder="Nama Rekan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Alamat_Rekan_reg" class="col-xs-3 col-form-label">Alamat Rekan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="alamat_rekan_reg" type="text" class="form-control" id="Alamat_Rekan_reg" placeholder="Alamat Rekan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_Rekanan_reg" class="col-xs-3 col-form-label">Teknisi Rekanan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_rekanan_reg" type="text" class="form-control" id="Teknisi_Rekanan_reg" placeholder="Teknisi Rekanan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Telp_Teknisi_Rekanan_reg" class="col-xs-3 col-form-label">Telp_Teknisi_Rekanan_reg<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="telp_teknisi_rekanan_reg" type="text" class="form-control" id="Telp_Teknisi_Rekanan_reg" placeholder="Telp_Teknisi_Rekanan_reg">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button">Save</button>
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

    <!--TABEL-->
    <table class="datatable table table-striped table-bordered" style="width:100%">
      <thead class="table-light">
        <th scope="col">Id_Perbaikan</th>
        <th scope="col">Tanggal_Perbaikan</th>
        <th scope="col">Tanggal_Pengiriman</th>
        <th scope="col">ID Aset</th>
        <th scope="col">Nama_Alat</th>
        <th scope="col">Merek_Alat</th>
        <th scope="col">Type_Alat</th>
        <th scope="col">Seri_Number</th>
        <th scope="col">Lokasi_Alat</th>
        <th scope="col">Teknisi_1</th>
        <th scope="col">Teknisi_2</th>
        <th scope="col">Teknisi_3</th>
        <th scope="col">Pelapor</th>
        <th scope="col">Keterangan_Kondisi_Alat</th>
        <th scope="col">KA_Instalasi</th>
        <th scope="col">Nama_Rekan</th>
        <th scope="col">Alamat_Rekan</th>
        <th scope="col">Teknisi_Rekanan</th>
        <th scope="col">Telp_Teknisi_Rekanan</th>
        <th scope="col">Tombol_Aksi_Tabel</th>
      </thead>
      <tbody>
        @forelse ($result_pengiriman as $item)

        <tr class="odd gradeX">
          <td><?php echo $item->id_perbaikan_reg ?></td>
          <td><?php echo $item->tanggal_perbaikan_reg ?></td>
          <td><?php echo $item->tanggal_pengiriman_reg ?></td>
          <td><?php echo $item->id_aset_reg ?></td>
          <td><?php echo $item->nama_alat_reg ?></td>
          <td><?php echo $item->merek_alat_reg ?></td>
          <td><?php echo $item->type_alat_reg ?></td>
          <td><?php echo $item->seri_number_reg ?></td>
          <td><?php echo $item->lokasi_alat_reg ?></td>
          <td><?php echo $item->teknisi_1_reg ?></td>
          <td><?php echo $item->teknisi_2_reg ?></td>
          <td><?php echo $item->teknisi_3_reg ?></td>
          <td><?php echo $item->pelapor_reg ?></td>
          <td><?php echo $item->keterangan_kondisi_alat_reg ?></td>
          <td><?php echo $item->ka_instalasi_reg ?></td>
          <td><?php echo $item->nama_rekan_reg ?></td>
          <td><?php echo $item->alamat_rekan_reg ?></td>
          <td><?php echo $item->teknisi_rekanan_reg ?></td>
          <td><?php echo $item->telp_teknisi_rekanan_reg ?></td>
          <td>
            <a href="{{ route('update_pengiriman.edit', $item->id_perbaikan_reg) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
            <a href="/dashboard/ppm/aset_teregistrasi/cetak_pengiriman/{{ $item->id_perbaikan_reg }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>

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

    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Pengembalian Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/tambah_pengembalian') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf

                  <input type="hidden" name="kode_rs" value="a" />

                  <div class="form-group row">
                    <label for="id_perbaikan_reg" class="col-xs-3 col-form-label">id perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="id_perbaikan_reg2" placeholder="id perbaikan" value="" onkeyup="autofill_Pengembalian()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Id_Aset_reg" class="col-xs-3 col-form-label">Id Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Id_Aset_reg" type="text" class="form-control" id="Id_Aset_reg2" placeholder="Id Aset" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat_reg" class="col-xs-3 col-form-label">nama alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control" id="nama_alat_reg2" placeholder="nama alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_perbaikan_reg" class="col-xs-3 col-form-label">tanggal perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="tanggal_perbaikan_reg2" placeholder="tanggal perbaikan" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_reg" class="col-xs-3 col-form-label">merek<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_reg" type="text" class="form-control" id="merek_reg2" placeholder="merek" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tipe_reg" class="col-xs-3 col-form-label">Type<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tipe_reg" type="text" class="form-control" id="tipe_reg2" placeholder="Type" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_pengembalian_reg" class="col-xs-3 col-form-label">tanggal pengembalian<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_pengembalian_reg" type="text" class="form-control" id="tanggal_pengembalian_reg2" placeholder="tanggal pengembalian" value="<?php echo date('Y-m-d') ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_reg" class="col-xs-3 col-form-label">serial number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number_reg" type="text" class="form-control" id="serial_number_reg2" placeholder="serial number" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="pelapor_reg2" placeholder="Pelapor" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">lokasi alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_reg" type="text" class="form-control" id="lokasi_alat_reg2" placeholder="lokasi alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan_reg" class="col-xs-3 col-form-label">keterangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="keterangan_reg" type="text" class="form-control" id="keterangan_reg2" placeholder="keterangan" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penerima_reg" class="col-xs-3 col-form-label">peneriman<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penerima_reg" type="text" class="form-control" id="penerima_reg2" placeholder="penerima" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_perbaikan_reg" class="col-xs-3 col-form-label">harga perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="harga_perbaikan_reg" type="text" class="form-control" id="harga_perbaikan_reg2" placeholder="harga perbaikan" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi1_reg" type="text" class="form-control" id="teknisi1_reg2" placeholder="Teknisi 1" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <input name="teknisi2_reg" type="text" class="form-control" id="teknisi2_reg2" placeholder="Teknisi 2" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi3_reg" class="col-xs-3 col-form-label">Teknisi 3 </label>
                    <div class="col-xs-9">
                      <input name="teknisi3_reg" type="text" class="form-control" id="teknisi3_reg2" placeholder="Teknisi 3" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ka_instalasi_reg" class="col-xs-3 col-form-label">KA Instalasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="ka_instalasi_reg2" placeholder="KA Instalasi" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penyebab_kerusakan_reg" class="col-xs-3 col-form-label">Penyebab Kerusakan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penyebab_kerusakan_reg" type="text" class="form-control" id="penyebab_kerusakan_reg2" placeholder="Penyebab Kerusakan" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="solusi_perbaikan_reg" class="col-xs-3 col-form-label">Solusi_Perbaikan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="solusi_perbaikan_reg" type="text" class="form-control" id="solusi_perbaikan_reg2" placeholder="Solusi_Perbaikan" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penguji_suku_cadang_reg" class="col-xs-3 col-form-label">Penguji Suku Cadang <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penguji_suku_cadang_reg" type="text" class="form-control" id="penguji_suku_cadang_reg2" placeholder="Penguji Suku Cadang" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hasil_verifikasi_reg" class="col-xs-3 col-form-label">Hasil Verifikasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="hasil_verifikasi_reg" type="text" class="form-control" id="hasil_verifikasi_reg2" placeholder="Hasil_Verifikasi" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hasil_fungsi_reg" class="col-xs-3 col-form-label">Hasil Fungsi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="hasil_fungsi_reg" type="text" class="form-control" id="hasil_fungsi_reg2" placeholder="Hasil Fungsi" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pengganti_suku_cadang_reg" class="col-xs-3 col-form-label"> Pengganti_Suku_Cadang<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pengganti_suku_cadang_reg" type="text" class="form-control" id="pengganti_suku_cadang_reg2" placeholder="Pengganti_Suku_Cadang" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button">Save</button>
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
    <!--TABEL-->
    <table class="datatable table table-striped table-bordered" style="width:100%">
      <thead class="table-light">
        <th scope="col">Id_Perbaikan</th>
        <th scope="col">Nama_Alat</th>
        <th scope="col">Tanggal_Perbaikan</th>
        <th scope="col">Merek</th>
        <th scope="col">Id_Aset</th>
        <th scope="col">Type_Alat</th>
        <th scope="col">Tanggal_Pengembalian</th>
        <th scope="col">Serial_Number</th>
        <th scope="col">Pelapor</th>
        <th scope="col">Lokasi_Alat</th>
        <th scope="col">Keterangan_Kondisi_Alat</th>
        <th scope="col">Penerima</th>
        <th scope="col">Harga_Perbaikan</th>
        <th scope="col">Teknisi_2</th>
        <th scope="col">Teknisi_1</th>
        <th scope="col">KA_Instalasi</th>
        <th scope="col">Penyebab_Kerusakan</th>
        <th scope="col">Solusi_Perbaikan</th>
        <th scope="col">Penguji_Suku_Cadang</th>
        <th scope="col">Hasil_Verifikasi</th>
        <th scope="col">Hasil_Fungsi</th>
        <th scope="col">Pengganti_Suku_Cadang</th>
        <th scope="col">Tombol_Aksi_Tabel</th>
      </thead>
      <tbody>
        @forelse ($result_pengembalian as $item)
        <tr class="odd gradeX">
          <td>{{ $item->id_aset_reg }}</td>
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
          <td>{{ $item->ka_instalasi_reg }}</td>
          <td>{{ $item->penyebab_kerusakan_reg }}</td>
          <td>{{ $item->solusi_perbaikan_reg }}</td>
          <td>{{ $item->penguji_suku_cadang_reg }}</td>
          <td>{{ $item->hasil_verifikasi_reg }}</td>
          <td>{{ $item->hasil_fungsi_reg }}</td>
          <td>{{ $item->pengganti_suku_cadang_reg }}</td>
          <td>
            <a href="{{ route('update_pengembalian.edit', $item->id_perbaikan_reg) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
            <a href="/dashboard/ppm/aset_teregistrasi/cetak_pengembalian/{{ $item->id_perbaikan_reg }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
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

    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Penghapusan Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/tambah_penghapusan') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <input type="hidden" name="kode_rs" value="asd" />


                  <div class="form-group row">
                    <label for="Id_Perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="Id_Perbaikan_reg3" placeholder="Id Perbaikan" onkeyup="autofill_Penghapusan()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="Tanggal_Perbaikan_reg3" placeholder="Tanggal Perbaikan" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Penggudangan_reg" class="col-xs-3 col-form-label">Tanggal Penggudangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_penggudangan_reg" type="text" class="form-control" id="Tanggal_Penggudangan_reg3" placeholder="Tanggal Penggudangan" value="<?php echo date('Y-m-d') ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control" id="Nama_Alat_reg3" placeholder="Nama Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_alat_reg" type="text" class="form-control" id="Merek_Alat_reg3" placeholder="Merek Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_alat_reg" type="text" class="form-control" id="Type_Alat_reg3" placeholder="Type Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Serial_Number_reg" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number_reg" type="text" class="form-control" id="Serial_Number_reg3" placeholder="Serial Number" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_reg" type="text" class="form-control" id="Lokasi_Alat_reg3" placeholder="Lokasi Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="Pelapor_reg3" placeholder="Pelapor" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_1_reg" type="text" class="form-control" id="Teknisi_1_reg3" placeholder="Teknisi 1" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_2_reg" type="text" class="form-control" id="Teknisi_2_reg3" placeholder="Teknisi 2" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_3_reg" type="text" class="form-control" id="Teknisi_3_reg3" placeholder="Teknisi 3" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="KA_Instalasi_reg" class="col-xs-3 col-form-label">KA Instalasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="KA_Instalasi_reg3" placeholder="KA Instalasi" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keterangan_Pengguna_reg" class="col-xs-3 col-form-label">Keterangan Pengguna<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="keterangan_pengguna_reg" type="text" class="form-control" id="Keterangan_Pengguna_reg3" placeholder="Keterangan Pengguna" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button">Save</button>
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
    <!--TABEL-->
    <table class="datatable table table-striped table-bordered" style="width:100%">
      <thead class="table-light">
        <th scope="col">Id_Perbaikan</th>
        <th scope="col">Tanggal_Perbaikan</th>
        <th scope="col">Tanggal_Penggudangan</th>
        <th scope="col">Nama_Alat</th>
        <th scope="col">Merek_Alat</th>
        <th scope="col">Type_Alat</th>
        <th scope="col">Serial_Number</th>
        <th scope="col">Lokasi_Alat</th>
        <th scope="col">Pelapor</th>
        <th scope="col">Teknisi_1</th>
        <th scope="col">Teknisi_2</th>
        <th scope="col">Teknisi_3</th>
        <th scope="col">KA_Instalasi</th>
        <th scope="col">Keterangan_Pengguna</th>
        <th scope="col">Tombol_Aksi_Tabel</th>
      </thead>
      <tbody>
        @forelse ($result_penghapusan as $item)
        <tr class="odd gradeX">
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
          <td>{{ $item->ka_instalasi_reg }}</td>
          <td>{{ $item->keterangan_pengguna_reg }}</td>
          <td>
            <a href="{{ route('update_penghapusan.edit', $item->id_perbaikan_reg) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
            <a href="/dashboard/ppm/aset_teregistrasi/cetak_penghapusan/{{ $item->id_perbaikan_reg }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>

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
  </div> <!-- /.content -->




</div> <!-- /.content-wrapper -->

<!-- <script src="./assets/js/bs-5.js"></script>
<script src="../js/scripts.js"></script>
<script src="./assets/libraries/jquery.min.js"></script> -->
@endsection