@extends('layouts.admin')

@section('content')
@section('title', 'Edit Perbaikan Reg')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>FORM EDIT PERBAIKAN REGISTRASI</h1>
        <small>Form Teregistrasi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Perbaikan Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('update_perbaikan.update' ,$item->id_perbaikan_reg) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <label for="ID_Aset_reg" class="col-xs-3 col-form-label">ID Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_reg" type="text" class="form-control" id="id_aset_reg" placeholder="ID Aset" value="<?php echo $item['id_aset_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="date" class="form-control" id="Tanggal_Perbaikan_reg" placeholder="Tanggal Perbaikan" value="<?php echo $item['tanggal_perbaikan_reg'] ?>" readonly>
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
                    <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_alat_reg" type="text" class="form-control" id="Merek_Alat_reg" placeholder="Merek Alat" value="<?php echo $item['merek_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_alat_reg" type="text" class="form-control" id="Type_Alat_reg" placeholder="Type Alat" value="<?php echo $item['type_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Serial_Number_reg" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number_reg" type="text" class="form-control" id="Serial_Number_reg" placeholder="Serial Number" value="<?php echo $item['serial_number_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat_reg" class="form-control" id="Lokasi_Alat_reg">
                        @foreach($ruangans as $ruangan)
                        <option value="{{ $ruangan->lokasi_alat }}" {{ $ruangan-> lokasi_alat == $item['lokasi_alat_reg'] ? 'selected' : ''}}>{{ $ruangan->lokasi_alat }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="Pelapor_reg" placeholder="Pelapor" value="<?php echo $item['pelapor_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keterangan_Kondisi_Alat_reg" class="col-xs-3 col-form-label">Keterangan Kondisi Alat</label>
                    <div class="col-xs-9">
                      <select name="keterangan_kondisi_alat_reg" class="form-control" id="Keterangan_Kondisi_Alat_reg">
                        <option selected="selected">Pilih Keterangan</option>
                        <option value="Selesai Alat Dikembalikan" <?php if ($item['keterangan_kondisi_alat_reg'] == 'Selesai Alat Dikembalikan') echo "selected" ?>>Selesai Alat Dikembalikan</option>
                        <option value="Alat Dalam Perbaikan" <?php if ($item['keterangan_kondisi_alat_reg'] == 'Alat Dalam Perbaikan') echo "selected" ?>>Alat Dalam Perbaikan</option>
                        <option value="Alat Dilanjutkan Ke Rekanan" <?php if ($item['keterangan_kondisi_alat_reg'] == 'Alat Dilanjutkan Ke Rekanan') echo "selected" ?>>Alat Dilanjutkan Ke Rekanan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ka_instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="Ka_Instalasi_reg" placeholder="Kepala Ruangan" value="<?php echo $item['ka_instalasi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1</label>
                    <div class="col-xs-9">
                      <select name="teknisi_1_reg" class="form-control" id="Teknisi_1_reg">
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_1_reg'] ? 'selected' : '' }}>{{$teknisi->nama_teknisi}} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <select name="teknisi_2_reg" class="form-control" id="Teknisi_2_reg">
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_2_reg'] ? 'selected' : '' }}>{{$teknisi->nama_teknisi}} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9">
                      <select name="teknisi_3_reg" class="form-control" id="Teknisi_3_reg">
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_3_reg'] ? 'selected' : '' }}>{{$teknisi->nama_teknisi}} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keluhan_Dari_alat_reg" class="col-xs-3 col-form-label">Keluhan Dari Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="keluhan_dari_alat_reg" type="text" class="form-control" id="Keluhan_Dari_alat_reg" placeholder="Keluhan Dari Alat" value="<?php echo $item['keluhan_dari_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Korektif_reg" class="col-xs-3 col-form-label">Korektif<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="korektif_reg" type="text" class="form-control" id="Korektif_reg" placeholder="Korektif" value="<?php echo $item['korektif_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Edit</button>
                        <div class="or"></div>
                        <a href=""><button type="button" class="ui button">Kembali</button></a>
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
  </div>

</div> <!-- /.content -->
@endsection




<!-- <script src="./assets/js/bs-5.js"></script>
<script src="../js/scripts.js"></script>
<script src="./assets/libraries/jquery.min.js"></script> -->