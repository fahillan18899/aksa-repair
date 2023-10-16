@extends('layouts.user')

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
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Perbaikan Alat Unregistrasi</h1>
          </div>

          <div class="panel-body panel-form">

            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard_user/perbaikan_unregistrasi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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
                      <input name="tanggal_perbaikan_un" type="date" class="form-control" id="tanggal_perbaikan_un" placeholder="Tanggal Perbaikan" value="<?php echo date('Y-m-d') ?>" readonly>
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
                        @foreach($alats as $alat)
                        <option value="<?= $alat['nama_alat']; ?>"><?= $alat['nama_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek Alat</label>
                    <div class="col-xs-9">
                      <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un" placeholder="Merek Alat" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat</label>
                    <div class="col-xs-9">
                      <input name="type_alat_un" type="text" class="form-control" id="type_alat_un" placeholder="Type Alat" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number</label>
                    <div class="col-xs-9">
                      <input name="serial_number_un" type="text" class="form-control" id="serial_number_un" placeholder="Serial Number" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat_un" class="form-control" id="lokasi_alat_un">
                        <option selected="selected">Pilih Lokasi</option>
                        @foreach($ruangans as $alat)
                        <option value="<?= $alat['lokasi_alat']; ?>"><?= $alat['lokasi_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor</label>
                    <div class="col-xs-9">
                      <input name="pelapor_un" type="text" class="form-control" id="pelapor_un" placeholder="Pelapor" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan Kondisi Alat <i class="text-danger">*</i></label>
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
    <!--TABEL-->
    <table class="datatable table table-striped table-bordered" style="width:100%">
      <thead class="table-light">
        <th scope="col">No</th>
        <th scope="col">Id_Perbaikan</th>
        <th scope="col">Tanggal_Perbaikan</th>
        <th scope="col">Nama_Alat</th>
        <th scope="col">Merek_Alat</th>
        <th scope="col">Type_Alat</th>
        <th scope="col">Serial_Number</th>
        <th scope="col">Lokasi_Alat</th>
        <th scope="col">Pelapor</th>
        <th scope="col">Keterangan</th>
        <th scope="col">KA_Instalasi</th>
        <th scope="col">Teknisi_1</th>
        <th scope="col">Teknisi_2</th>
        <th scope="col">Teknisi_3</th>
        <th scope="col">Keluhan_Dari_Alat</th>
        <th scope="col">Tombol_Aksi</th>
      </thead>
      <tbody>
        @forelse ($perbaikan as $index => $item)
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
          <td><?php echo $item['keterangan_un'] ?></td>
          <td><?php echo $item['ka_instalasi_un'] ?></td>
          <td><?php echo $item['teknisi_1_un'] ?></td>
          <td><?php echo $item['teknisi_2_un'] ?></td>
          <td><?php echo $item['teknisi_3_un'] ?></td>
          <td><?php echo $item['keluhan_dari_alat_un'] ?></td>
          <td>
            <a data-toggle="tooltip" data-placement="top" title="Edit" href="/dashboard/ppm/aset_unregistrasi/edit_perbaikan/{{ $item->id_perbaikan_un }}/edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

            <a data-toggle="tooltip" data-placement="top" title="Print" href="/dashboard/ppm/aset_unregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_un }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
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
@endsection