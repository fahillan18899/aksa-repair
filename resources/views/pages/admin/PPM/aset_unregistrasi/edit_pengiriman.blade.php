@extends('layouts.admin')
@section('title', 'Edit Pengiriman Un')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>Form Edit Pengiriman Unregistrasi</h1>
        <small>Form Unregistrasi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    <!-- content -->

    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Edit Pengiriman Alat Unregistrasi</h1>
          </div>

          <div class="panel-body panel-form">

            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('update_pengiriman_un.update', $item->id_perbaikan_un) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan</label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un" placeholder="Id Perbaikan" value="<?= $item['id_perbaikan_un'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan</label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_un" type="date" class="form-control" id="tanggal_perbaikan_un" placeholder="Tanggal Perbaikan" value="<?= $item['tanggal_perbaikan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_pengiriman_un" class="col-xs-3 col-form-label">Tanggal Pengiriman</label>
                    <div class="col-xs-9">
                      <input name="tanggal_pengiriman_un" type="date" class="form-control" id="tanggal_pengiriman_un" placeholder="Tanggal Pengiriman" value="<?= $item['tanggal_pengiriman_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat </label>
                    <div class="col-xs-9">
                      <select name="nama_alat_un" class="form-control" id="nama_alat_un">
                      @foreach($alats as $alat)
                      <option value="{{ $alat->nama_alat }}" {{ $alat-> nama_alat == $item['nama_alat_un'] ? 'selected' : ''}}>{{ $alat->nama_alat }}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek Alat</label>
                    <div class="col-xs-9">
                      <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un" placeholder="Merek Alat" value="<?= $item['merek_alat_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat</label>
                    <div class="col-xs-9">
                      <input name="type_alat_un" type="text" class="form-control" id="type_alat_un" placeholder="Type Alat" value="<?= $item['type_alat_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_un" class="col-xs-3 col-form-label">Seri Number</label>
                    <div class="col-xs-9">
                      <input name="serial_number_un" type="text" class="form-control" id="serial_number_un" placeholder="Seri Number" value="<?= $item['serial_number_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat_un" class="form-control" id="lokasi_alat_un">
                        @foreach($ruangans as $ruangan)
                        <option value="{{ $ruangan->lokasi_alat }}" {{ $ruangan-> lokasi_alat == $item['lokasi_alat_un'] ? 'selected' : ''}}>{{ $ruangan->lokasi_alat }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor</label>
                    <div class="col-xs-9">
                      <input name="pelapor_un" type="text" class="form-control" id="pelapor_un" placeholder="Teknisi 1" value="<?= $item['pelapor_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan Kondisi Alat</label>
                    <div class="col-xs-9">
                      <select name="keterangan_un" class="form-control" id="keterangan_un">
                        <option value="" selected="selected">Select Keterangan</option>
                        <option value="Selesai Alat Dikembalikan" <?php if ($item['keterangan_un'] == 'Selesai Alat Dikembalikan') echo "selected" ?>>Selesai Alat Dikembalikan</option>
                        <option value="Alat Dalam Perbaikan" <?php if ($item['keterangan_un'] == 'Alat Dalam Perbaikan') echo "selected" ?>>Alat Dalam Perbaikan</option>
                        <option value="Alat Dilanjutkan Ke Rekanan" <?php if ($item['keterangan_un'] == 'Alat Dilanjutkan Ke Rekanan') echo "selected" ?>>Alat Dilanjutkan Ke Rekanan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1</label>
                    <div class="col-xs-9">
                      <select name="teknisi_1_un" class="form-control" id="teknisi_1_un">
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_1_un'] ? 'selected' : '' }}>{{$teknisi->nama_teknisi}} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <select name="teknisi_2_un" class="form-control" id="teknisi_2_un">
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_2_un'] ? 'selected' : '' }}>{{$teknisi->nama_teknisi}} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 1</label>
                    <div class="col-xs-9">
                      <select name="teknisi_3_un" class="form-control" id="teknisi_3_un">
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_3_un'] ? 'selected' : '' }}>{{$teknisi->nama_teknisi}} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_rekanan_un" class="col-xs-3 col-form-label">Nama Rekan</label>
                    <div class="col-xs-9">
                      <input name="nama_rekanan_un" type="text" class="form-control" id="nama_rekanan_un" placeholder="Nama Rekan" value="<?= $item['nama_rekanan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat_rekanan_un" class="col-xs-3 col-form-label">Alamat Rekan</label>
                    <div class="col-xs-9">
                      <input name="alamat_rekanan_un" type="text" class="form-control" id="alamat_rekanan_un" placeholder="Alamat Rekan" value="<?= $item['alamat_rekanan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_rekanan_un" class="col-xs-3 col-form-label">Teknisi Rekanan</label>
                    <div class="col-xs-9">
                      <input name="teknisi_rekanan_un" type="text" class="form-control" id="teknisi_rekanan_un" placeholder="Teknisi Rekanan" value="<?= $item['teknisi_rekanan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="telphone_teknisi_rek_un" class="col-xs-3 col-form-label">Telp_Teknisi_Rekanan_reg</label>
                    <div class="col-xs-9">
                      <input name="telphone_teknisi_rek_un" type="text" class="form-control" id="telphone_teknisi_rek_un" placeholder="Telp_Teknisi_Rekanan_reg" value="<?= $item['telphone_teknisi_rek_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ka_instalasi_un" class="col-xs-3 col-form-label">KA Instalasi</label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un" placeholder="KA Instalasi" value="<?= $item['ka_instalasi_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Save</button>
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
  </div>

</div> <!-- /.content -->
@endsection





<!-- <script src="./assets/js/bs-5.js"></script>
<script src="../js/scripts.js"></script>
<script src="./assets/libraries/jquery.min.js"></script> -->