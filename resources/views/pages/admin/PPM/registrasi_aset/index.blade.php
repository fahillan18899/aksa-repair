@extends('layouts.admin')

@section('content')
<!--Fungsi-->
<?php
/*
  $kodeRs_ = "RS0001";
  //  pembuatan kode
  $query = mysqli_query($db, "SELECT max(Id_Aset) as maxIDARS  from registrasi WHERE kode_rs = '$kodeRs_'");
  $data = mysqli_fetch_array($query);
  $kode = $data['maxIDARS'];
  $urutan = (int)substr($kode, 12, 13);
  $urutan++;

  $date  = date('dmy');
  $kode_  = $kodeRs_ . $date . sprintf("%05s", $urutan);

  $alert = "";

  if (isset($_GET['hapus_aset'])) {
    $sql_hapus = "DELETE FROM `registrasi` WHERE Id_Aset='{$_GET['hapus_aset']}'";
    mysqli_query($db, $sql_hapus);

    $alert = "hapus";
  }

  if (isset($_POST['tambah_registrasi'])) {
    $sql_tambah = "INSERT INTO registrasi (Id_Aset, Jenis_Alat, Nama_Alat,
  Merek, Type, Serial_Number,
  Lokasi_Alat, Tanggal_Kalibrasi, Distributor,
  Alamat_Distributor, TLP_Distributor, Email_Distributor,
  Teknisi_Distributor, TLP_T_Distributor, No_Sertifikat_Kalibrasi,
  Teknisi_PPM, Harga_Perolehan, Sumber_Dana, Tahun_Pembuatan, kode_rs,
  Tahun_Perolehan, jadwal_pemeliharaan, umur_alat,
  no_inventaris_1, no_inventaris_2, penyusutan_aset) VALUES 
    ('{$_POST['Id_Aset']}', '{$_POST['Jenis_Alat']}', '{$_POST['Nama_Alat']}',
    '{$_POST['Merek']}', '{$_POST['Type']}', '{$_POST['Serial_Number']}',
    '{$_POST['Lokasi_Alat']}','{$_POST['Tanggal_Kalibrasi']}','{$_POST['Distributor']}',
    '{$_POST['Alamat_Distributor']}','{$_POST['TLP_Distributor']}','{$_POST['Email_Distributor']}',
    '{$_POST['Teknisi_Distributor']}','{$_POST['TLP_T_Distributor']}','{$_POST['No_Sertifikat_Kalibrasi']}',
    '{$_POST['Teknisi_PPM']}','{$_POST['Harga_Perolehan']}','{$_POST['Sumber_Dana']}','{$_POST['Tahun_Pembuatan']}','{$_POST['kodeRs']}',
    '{$_POST['Tahun_Perolehan']}','{$_POST['jadwal_pemeliharaan']}','{$_POST['umur_alat']}',
    '{$_POST['no_inventaris_1']}','{$_POST['no_inventaris_2']}','{$_POST['penyusutan_aset']}')";

    mysqli_query($db, $sql_tambah);

    $alert = "tambah";
  }

  $sql = "SELECT * FROM registrasi";
  $result = mysqli_query($db, $sql);
  ?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">

     <div class="p-l-30 p-r-30">
       <div class="header-icon"><i class="pe-7s-world"></i></div>
       <div class="header-title">
         <h1>Registrasi</h1>
         <small>Registrasi Alat</small>
       </div>
     </div>
   </section>
   <!-- Main content -->
   <div class="content">
     <!-- demo mode enable alert -->
     <div id="demoModeEnable"></div>
     <!-- alert message -->



     <?php if ($alert == "tambah") { ?>
       <div class="alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5> Berhasil</h5>
         Data sudah ditambahkan.
       </div>
     <?php } else if ($alert == "hapus") { ?>
       <div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5> Berhasil</h5>
         Data sudah dihapus.
       </div>
     <?php } else if ($alert == "ubah") { ?>
       <div class="alert alert-warning alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5> Berhasil</h5>
         Data sudah diubah.
       </div>
     <?php } 
     */
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Registrasi</h1>
        <small>Registrasi Alat</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Registrasi Alat</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="/?hal=registrasi&fun=registrasi" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">



                  <input type="hidden" name="kodeRs" value="" />

                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">ID Aset <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Id_Aset" type="text" class="form-control" id="firstname" placeholder="ID Aset" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jenis alat" class="col-xs-3 col-form-label">Jenis Alat </label>
                    <div class="col-xs-9">
                      <select name="Jenis_Alat" class="form-control" id="Jenis_Alat">
                        <option value="" selected="selected">Pilih Jenis Alat</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat </label>
                    <div class="col-xs-9">
                      <select name="Nama_Alat" class="form-control" id="Nama_Alat">
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Merek" class="form-control" type="text" placeholder="Merek" id="Merek" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Type" class="form-control" type="text" placeholder="Type" id="Type">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Serial_Number" class="col-xs-3 col-form-label">Serial Number <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Serial_Number" class="form-control" type="text" placeholder="Serial Number" id="Serial_Number">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <select name="Lokasi_Alat" class="form-control" id="Lokasi_Alat">
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Kalibrasi" class="col-xs-3 col-form-label">Tanggal Kalibrasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jadwal_pemeliharaan" type="date" class="form-control" id="jadwal_pemeliharaan" placeholder="jadwal_pemeliharaan" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jadwal_pemeliharaan" class="col-xs-3 col-form-label">jadwal pemeliharaan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Tanggal_Kalibrasi" type="date" class="form-control" id="Tanggal_Kalibrasi" placeholder="Tanggal_Kalibrasi" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Distributor" class="col-xs-3 col-form-label">Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Distributor" type="text" class="form-control" id="Distributor" placeholder="Distributor" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Alamat_Distributor" class="col-xs-3 col-form-label">Alamat Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Alamat_Distributor" type="text" class="form-control" id="Alamat_Distributor" placeholder="Alamat Distributor" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="TLP_Distributor" class="col-xs-3 col-form-label">Telphone_Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="TLP_Distributor" type="text" class="form-control" id="TLP_Distributor" placeholder="Telphone Distributor" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Email_Distributor" class="col-xs-3 col-form-label">Email Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Email_Distributor" type="text" class="form-control" id="Email_Distributor" placeholder="Email Distributor" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_Distributor" class="col-xs-3 col-form-label">Teknisi Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Teknisi_Distributor" type="text" class="form-control" id="Teknisi_Distributor" placeholder="Teknisi Distributor" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="TLP_T_Distributor" class="col-xs-3 col-form-label">Telephone Teknisi Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="TLP_T_Distributor" type="text" class="form-control" id="TLP_T_Distributor" placeholder="Telephone Teknisi Distributor" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="No_Sertifikat_Kalibrasi" class="col-xs-3 col-form-label">No Sertifikat Kalibrasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="No_Sertifikat_Kalibrasi" type="text" class="form-control" id="No_Sertifikat_Kalibrasi" placeholder="No Sertifikat Kalibrasi" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_PPM" class="col-xs-3 col-form-label">Teknisi PPM <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Teknisi_PPM" type="text" class="form-control" id="Teknisi_PPM" placeholder="Teknisi PPM" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Harga_Perolehan" class="col-xs-3 col-form-label">Harga Perolehan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Harga_Perolehan" type="text" class="form-control" id="Harga_Perolehan" placeholder="Harga Perolehan" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Sumber_Dana" class="col-xs-3 col-form-label">Sumber Dana <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Sumber_Dana" type="text" class="form-control" id="Sumber_Dana" placeholder="Sumber Dana" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tahun_Pembuatan" class="col-xs-3 col-form-label">Tahun Pembuatan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Tahun_Pembuatan" type="text" class="form-control" id="Tahun_Pembuatan" placeholder="Tahun Pembuatan" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tahun_Perolehan" class="col-xs-3 col-form-label">Tahun Perolehan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Tahun_Perolehan" type="text" class="form-control" id="Tahun_Perolehan" placeholder="Tahun Perolehan" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="umur_alat" class="col-xs-3 col-form-label">umur alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="umur_alat" type="text" class="form-control" id="umur_alat" placeholder="umur alat" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_inventaris_1" class="col-xs-3 col-form-label">no inventaris 1 <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="no_inventaris_1" type="text" class="form-control" id="no_inventaris_1" placeholder="no inventaris 1" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_inventaris_2" class="col-xs-3 col-form-label">no inventaris 2 <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="no_inventaris_2" type="text" class="form-control" id="no_inventaris_2" placeholder="no inventaris 2" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penyusutan_aset" class="col-xs-3 col-form-label">penyusutan aset <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penyusutan_aset" type="text" class="form-control" id="penyusutan_aset" placeholder="penyusutan aset" value="">
                    </div>
                  </div>

                  <!-- if representative picture is already uploaded -->

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button" name="tambah_registrasi">Save</button>
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
        <th>No</th>
        <th>Id_Aset</th>
        <th>Jenis_Alat</th>
        <th>Nama_Alat</th>
        <th>Merek</th>
        <th>Type</th>
        <th>Serial_Number</th>
        <th>Ruangan</th>
        <th>Tanggal_Kalibrasi</th>
        <th>Distributor</th>
        <th>Alamat_Distributor</th>
        <th>TLP_Distributor</th>
        <th>Email_Distributor</th>
        <th>Teknisi_Distributor</th>
        <th>TLP_T_Distributor</th>
        <th>No_Sertifikat_Kalibrasi</th>
        <th>Teknisi PPM</th>
        <th>Harga Perolehan</th>
        <th>Sumber_Dana</th>
        <th>Tahun_Pembuatan</th>
        <th>Tahun_Perolehan</th>
        <th>No._Inventaris </th>
        <th>umur_alat</th>
        <th>QR</th>
        <th>Tombol_Aksi_Tabel</th>
      </thead>
      <tbody>

      </tbody>
    </table>
    <!--TABEL-->
    <script type="text/javascript">

    </script>

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->

@endsection