@extends('layouts.admin')
@section('title', 'Edit Penghapusan Reg')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>FORM EDIT PENGHAPUSAN REGISTRASI</h1>
        <small>Form Teregistrasi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <div id="demoModeEnable"></div>
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
                <form action="{{ route('update_penghapusan.update' ,$item->id_perbaikan_reg) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <label for="id_perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="id_perbaikan_reg" placeholder="Id Perbaikan" value="<?php echo $item['id_perbaikan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="tanggal_perbaikan_reg3" placeholder="Tanggal Perbaikan" value="<?php echo $item['tanggal_perbaikan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_penggudangan_reg" class="col-xs-3 col-form-label">Tanggal Penggudangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_penggudangan_reg" type="text" class="form-control" id="tanggal_penggudangan_reg3" placeholder="Tanggal Penggudangan" value="<?php echo $item['tanggal_penggudangan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="nama_alat_reg" class="form-control" id="nama_alat_reg">
                        @foreach($alats as $alat)
                        <option value="{{ $alat->nama_alat }}" {{ $alat-> nama_alat == $item['nama_alat_reg'] ? 'selected' : ''}}>{{ $alat->nama_alat }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_alat_reg" type="text" class="form-control" id="merek_alat_reg3" placeholder="Merek Alat" value="<?php echo $item['merek_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type_alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_alat_reg" type="text" class="form-control" id="type_alat_reg3" placeholder="Type Alat" value="<?php echo $item['type_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_reg" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number_reg" type="text" class="form-control" id="serial_number_reg3" placeholder="Serial Number" value="<?php echo $item['serial_number_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat_reg" class="form-control" id="lokasi_alat_reg">
                        @foreach($ruangans as $ruangan)
                        <option value="{{ $ruangan->lokasi_alat }}" {{ $ruangan-> lokasi_alat == $item['lokasi_alat_reg'] ? 'selected' : ''}}>{{ $ruangan->lokasi_alat }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="pelapor_reg3" placeholder="Pelapor" value="<?php echo $item['pelapor_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1</label>
                    <div class="col-xs-9">
                      <select name="teknisi_1_reg" class="form-control" id="teknisi_1_reg">
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_1_reg'] ? 'selected' : '' }}>{{$teknisi->nama_teknisi}} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <select name="teknisi_2_reg" class="form-control" id="teknisi_2_reg">
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_2_reg'] ? 'selected' : '' }}>{{$teknisi->nama_teknisi}} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9">
                      <select name="teknisi_3_reg" class="form-control" id="teknisi_3_reg">
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_3_reg'] ? 'selected' : '' }}>{{$teknisi->nama_teknisi}} </option>
                        @endforeach
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="ka_instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="ka_instalasi_reg3" placeholder="Kepala Ruangan" value="<?php echo $item['ka_instalasi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan_pengguna_reg" class="col-xs-3 col-form-label">Keterangan Pengguna<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="keterangan_pengguna_reg" type="text" class="form-control" id="keterangan_pengguna_reg3" placeholder="Keterangan Pengguna" value="<?php echo $item['keterangan_pengguna_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Edit</button>
                        <div class="or"></div>
                        <button type="button" class="ui button" type="reset">Kembali</button>
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
  </div>

</div> <!-- /.content -->

@endsection