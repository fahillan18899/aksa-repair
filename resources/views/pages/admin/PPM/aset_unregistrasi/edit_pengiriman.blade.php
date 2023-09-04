@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
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
                <form action="{{ route('update_perbaikan_un.update', $item->id_perbaikan_un) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="kode_rs" value="src" />

                  <div class="form-group row">
                    <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un" placeholder="Id Perbaikan" value="<?= $item['id_perbaikan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_un" type="text" class="form-control" id="tanggal_perbaikan_un" placeholder="Tanggal Perbaikan" value="<?= $item['tanggal_perbaikan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_pengiriman_un" class="col-xs-3 col-form-label">Tanggal Pengiriman<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_pengiriman_un" type="text" class="form-control" id="tanggal_pengiriman_un" placeholder="Tanggal Pengiriman" value="<?= $item['tanggal_pengiriman_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un" placeholder="Nama Alat" value="<?= $item['nama_alat_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un" placeholder="Merek Alat" value="<?= $item['merek_alat_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_alat_un" type="text" class="form-control" id="type_alat_un" placeholder="Type Alat" value="<?= $item['type_alat_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_un" class="col-xs-3 col-form-label">Seri Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number_un" type="text" class="form-control" id="serial_number_un" placeholder="Seri Number" value="<?= $item['serial_number_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_un" type="text" class="form-control" id="lokasi_alat_un" placeholder="Lokasi Alat" value="<?= $item['lokasi_alat_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_un" type="text" class="form-control" id="pelapor_un" placeholder="Teknisi 1" value="<?= $item['pelapor_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="keterangan_un" type="text" class="form-control" id="keterangan_un" placeholder="Pelapor" value="<?= $item['keterangan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_1_un" type="text" class="form-control" id="teknisi_1_un" placeholder="Teknisi 2" value="<?= $item['teknisi_1_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <input name="teknisi_2_un" type="text" class="form-control" id="teknisi_2_un" placeholder="Teknisi 2" value="<?= $item['teknisi_2_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9">
                      <input name="teknisi_3_un" type="text" class="form-control" id="teknisi_3_un" placeholder="Teknisi 3" value="<?= $item['teknisi_3_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_rekanan_un" class="col-xs-3 col-form-label">Nama Rekan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_rekanan_un" type="text" class="form-control" id="nama_rekanan_un" placeholder="Nama Rekan" value="<?= $item['nama_rekanan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat_rekanan_un" class="col-xs-3 col-form-label">Alamat Rekan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="alamat_rekanan_un" type="text" class="form-control" id="alamat_rekanan_un" placeholder="Alamat Rekan" value="<?= $item['alamat_rekanan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi_rekanan_un" class="col-xs-3 col-form-label">Teknisi Rekanan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_rekanan_un" type="text" class="form-control" id="teknisi_rekanan_un" placeholder="Teknisi Rekanan" value="<?= $item['teknisi_rekanan_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="telphone_teknisi_rek_un" class="col-xs-3 col-form-label">Telp_Teknisi_Rekanan_reg<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="telphone_teknisi_rek_un" type="text" class="form-control" id="telphone_teknisi_rek_un" placeholder="Telp_Teknisi_Rekanan_reg" value="<?= $item['telphone_teknisi_rek_un'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ka_instalasi_un" class="col-xs-3 col-form-label">KA Instalasi<i class="text-danger">*</i></label>
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