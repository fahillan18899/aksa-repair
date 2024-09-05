<!-- Content Wrapper. Contains page content -->
@extends('layouts.admin')

@section('content')
@section('title', 'Edit Pengiriman Reg')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>FORM EDIT PENGIRIMAN REGISTRASI</h1>
        <small>Form Teregistrasi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- content -->
    <div class="row">
      <div class="col-sm-3">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Pengiriman Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('update_pengiriman.update' ,$item->id_perbaikan_reg) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <label for="id_perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="Perbaikan_reg" placeholder="Id Perbaikan" value="{{ $item->id_perbaikan_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="tanggal_perbaikan_reg1" placeholder="Tanggal Perbaikan" value="<?= $item['tanggal_perbaikan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_pengiriman_reg" class="col-xs-3 col-form-label">Tanggal Pengiriman<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_pengiriman_reg" type="text" class="form-control" id="tanggal_pengiriman_reg" placeholder="Tanggal Pengiriman" value="<?= $item['tanggal_pengiriman_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="id_aset_reg" class="col-xs-3 col-form-label">Id Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_reg" type="text" class="form-control" id="id_aset_reg1" placeholder="Id Aset" value="<?= $item['id_aset_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="nama_alat_reg" class="form-control" id="nama_alat_reg">
                        @foreach ($alats as $alat)
                        <option value="{{ $alat->nama_alat }}" {{ $alat-> nama_alat == $item['nama_alat_reg'] ? 'selected' : '' }}>{{ $alat->nama_alat }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_alat_reg" type="text" class="form-control" id="merek_alat_reg1" placeholder="Merek Alat" value="<?= $item['merek_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type_alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_alat_reg" type="text" class="form-control" id="type_alat_reg1" placeholder="Type Alat" value="<?= $item['type_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="seri_number_reg" class="col-xs-3 col-form-label">Seri Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="seri_number_reg" type="text" class="form-control" id="seri_number_reg1" placeholder="Seri Number" value="<?= $item['seri_number_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat_reg" class="form-control" id="lokasi_alat_reg">
                        @foreach ($ruangans as $ruangan)
                        <option value="{{ $ruangan->lokasi_alat }}" {{ $ruangan-> lokasi_alat == $item['lokasi_alat_reg'] ? 'selected' : '' }}>{{ $ruangan->lokasi_alat }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="pelapor_reg1" placeholder="Pelapor" value="<?= $item['pelapor_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1</label>
                    <div class="col-xs-9">
                      <select name="teknisi_1_reg" class="form-control" id="teknisi_1_reg">
                        @foreach ($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_1_reg'] ? 'selected' : '' }}>{{ $teknisi->nama_teknisi }} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <select name="teknisi_2_reg" class="form-control" id="teknisi_2_reg">
                        @foreach ($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_2_reg'] ? 'selected' : '' }}>{{ $teknisi->nama_teknisi }} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9">
                      <select name="teknisi_3_reg" class="form-control" id="teknisi_3_reg">
                        @foreach ($teknisis as $teknisi)
                        <option value="{{ $teknisi->nama_teknisi }}" {{ $teknisi->nama_teknisi ==  $item['teknisi_3_reg'] ? 'selected' : '' }}>{{ $teknisi->nama_teknisi }} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama
                      Sperpart</label>
                    <div class="col-xs-9">
                      <input name="suku_cadang" type="text" class="form-control"
                        id="nama_sukucadang" value="<?= $item['suku_cadang'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart</label>
                    <div class="col-xs-9">
                      <input name="volume" type="text" class="form-control" id="volume"
                        value="<?= $item['volume'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan Sperpart
                    </label>
                    <div class="col-xs-9">
                      <input name="harga_satuan" type="text" class="form-control"
                        id="harga_satuan" value="<?= $item['harga_satuan'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart
                    </label>
                    <div class="col-xs-9">
                      <input name="jumlah_harga" type="text" class="form-control"
                        id="jumlah_harga" value="<?= $item['jumlah_harga'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan_kondisi_alat_reg" class="col-xs-3 col-form-label">Keterangan Kondisi Alat</label>
                    <div class="col-xs-9">
                      <select name="keterangan_kondisi_alat_reg" class="form-control" id="keterangan_kondisi_alat_reg">
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
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="ka_instalasi_reg1" placeholder="Kepala Ruangan" value="<?= $item['ka_instalasi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_rekan_reg" class="col-xs-3 col-form-label">Nama Rekan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_rekan_reg" type="text" class="form-control" id="nama_rekan_reg1" placeholder="Nama Rekan" value="<?= $item['nama_rekan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat_rekan_reg" class="col-xs-3 col-form-label">Alamat Rekan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="alamat_rekan_reg" type="text" class="form-control" id="alamat_rekan_reg1" placeholder="Alamat Rekan" value="<?= $item['alamat_rekan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_rekanan_reg" class="col-xs-3 col-form-label">Teknisi Rekanan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_rekanan_reg" type="text" class="form-control" id="teknisi_rekanan_reg1" placeholder="Teknisi Rekanan" value="<?= $item['teknisi_rekanan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="telp_teknisi_rekanan_reg" class="col-xs-3 col-form-label">Telp_Teknisi_Rekanan_reg<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="telp_teknisi_rekanan_reg" type="text" class="form-control" id="telp_teknisi_rekanan_reg1" placeholder="Telp_Teknisi_Rekanan_reg" value="<?= $item['telp_teknisi_rekanan_reg'] ?>">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Edit</button>
                        <div class="or"></div>
                        <a href="/dashboard/ppm/aset_teregistrasi"><button type="button" class="ui button">Kembali</button></a>
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



    </div> <!-- /.content -->




  </div> <!-- /.content-wrapper -->
</div> <!-- /.content-wrapper -->
@endsection
<!-- <script src="./assets/js/bs-5.js"></script>
<script src="../js/scripts.js"></script>
<script src="./assets/libraries/jquery.min.js"></script> -->