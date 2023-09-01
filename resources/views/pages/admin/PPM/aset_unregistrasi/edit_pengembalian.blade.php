@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Form Edit Pengembalian Unregistrasi</h1>
        <small>Form Pengembalian</small>
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
            <h1>Form Pengembalian Alat Unregistrasi</h1>
          </div>

          <div class="panel-body panel-form">

            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                  <input type="hidden" name="kodeRs" value="src" />

                  <div class="form-group row">
                     <label for="id_perbaikan_un" class="col-xs-3 col-form-label">id pengembalian<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un" placeholder="id pengembalian" value="<?= $item ['id_perbaikan_un'] ?>">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_perbaikan_un" type="text" class="form-control" id="tanggal_perbaikan_un" placeholder="Tanggal Perbaikan" value="<?= $item ['tanggal_perbaikan_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="tanggal_pengembalian_un" class="col-xs-3 col-form-label">Tanggal Pengembalian<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_pengembalian_un" type="text" class="form-control" id="tanggal_pengembalian_un" placeholder="Tanggal Pengembalian" value="<?= $item ['tanggal_pengembalian_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un" placeholder="Nama Alat" value="<?= $item ['nama_alat_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="peneriama_alat_un" class="col-xs-3 col-form-label">Peneriama Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="peneriama_alat_un" type="text" class="form-control" id="peneriama_alat_un" placeholder="Peneriama Alat" value="<?= $item ['peneriama_alat_un'] ?>">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un" placeholder="Merek" value="<?= $item ['merek_alat_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="ka_instalasi_un" class="col-xs-3 col-form-label">Ka Instalasi<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un" placeholder="Ka Instalasi" value="<?= $item ['ka_instalasi_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="type_alat_un" type="text" class="form-control" id="type_alat_un" placeholder="Type Alat" value="<?= $item ['type_alat_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="teknisi_1_un" type="text" class="form-control" id="teknisi_1_un" placeholder="Teknisi 1" value="<?= $item ['teknisi_1_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="serial_number_un" type="text" class="form-control" id="serial_number_un" placeholder="Serial Number" value="<?= $item ['serial_number_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                     <div class="col-xs-9">
                       <input name="teknisi_2_un" type="text" class="form-control" id="teknisi_2_un" placeholder="Teknisi 2" value="<?= $item ['teknisi_2_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                     <div class="col-xs-9">
                       <input name="teknisi_3_un" type="text" class="form-control" id="teknisi_3_un" placeholder="Teknisi 3" value="<?= $item ['teknisi_3_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="lokasi_alat_un" type="text" class="form-control" id="lokasi_alat_un" placeholder="Lokasi Alat" value="<?= $item ['lokasi_alat_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="keterangan_un" type="text" class="form-control" id="keterangan_un" placeholder="Keterangan" value="<?= $item ['keterangan_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="pelapor_un" type="text" class="form-control" id="pelapor_un" placeholder="Pelapor" value="<?= $item ['pelapor_un'] ?>" >
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="harga_perbaikan_un" class="col-xs-3 col-form-label">Harga Perbaikan <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="harga_perbaikan_un" type="text" class="form-control" id="harga_perbaikan_un" placeholder="Harga Perbaikan" value="<?= $item ['harga_perbaikan_un'] ?>">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="penyebab_kerusakan_un" class="col-xs-3 col-form-label">Penyebab Kerusakan <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="penyebab_kerusakan_un" type="text" class="form-control" id="penyebab_kerusakan_un" placeholder="Penyebab Kerusakan" value="<?= $item ['penyebab_kerusakan_un'] ?>">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="pengujian_suku_cadang_un" class="col-xs-3 col-form-label">Pengujian Suku Cadang<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="pengujian_suku_cadang_un" type="text" class="form-control" id="pengujian_suku_cadang_un" placeholder="Pengujian Suku Cadang" value="<?= $item ['pengujian_suku_cadang_un'] ?>">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="uji_fungsi_setelah_perbaikan_un" class="col-xs-3 col-form-label">Uji Fungsi Setelah Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="uji_fungsi_setelah_perbaikan_un" type="text" class="form-control" id="uji_fungsi_setelah_perbaikan_un" placeholder="Uji Fungsi Setelah Perbaikan" value="<?= $item ['uji_fungsi_setelah_perbaikan_un'] ?>">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="solusi_perbaikan_un" class="col-xs-3 col-form-label">Solusi Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="solusi_perbaikan_un" type="text" class="form-control" id="solusi_perbaikan_un" placeholder="Solusi Perbaikan" value="<?= $item ['solusi_perbaikan_un'] ?>">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="penggantian_suku_cadang_un" class="col-xs-3 col-form-label">Penggantian Suku Cadang<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="penggantian_suku_cadang_un" type="text" class="form-control" id="penggantian_suku_cadang_un" placeholder="Penggantian Suku Cadang" value="<?= $item ['penggantian_suku_cadang_un'] ?>">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="hasil_verifikasi_un" class="col-xs-3 col-form-label">Hasil Verifikasi<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="hasil_verifikasi_un" type="text" class="form-control" id="hasil_verifikasi_un" placeholder="Hasil Verifikasi" value="<?= $item ['hasil_verifikasi_un'] ?>">
                     </div>
                   </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button" name="ubah_pengembalian_un">Save</button>
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