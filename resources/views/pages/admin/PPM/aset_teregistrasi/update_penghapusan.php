<?php
$kodeRs = "RS0001";
/**Fungsi Perbaikan reg */
$alert = "";

if (isset($_POST['ubah_penghapusan_reg'])) {
  $sql_ubah = "UPDATE penggudangan_reg SET Tanggal_Perbaikan_reg='{$_POST['Tanggal_Perbaikan_reg']}', 
  Tanggal_Penggudangan_reg='{$_POST['Tanggal_Penggudangan_reg']}',
  Nama_Alat_reg='{$_POST['Nama_Alat_reg']}',Merek_Alat_reg='{$_POST['Merek_Alat_reg']}',
  Type_Alat_reg='{$_POST['Type_Alat_reg']}',Serial_Number_reg='{$_POST['Serial_Number_reg']}',
  Lokasi_Alat_reg='{$_POST['Lokasi_Alat_reg']}',Pelapor_reg='{$_POST['Pelapor_reg']}',
  Teknisi_1_reg='{$_POST['Teknisi_1_reg']}',Teknisi_2_reg='{$_POST['Teknisi_2_reg']}',Teknisi_3_reg='{$_POST['Teknisi_3_reg']}',
  KA_Instalasi_reg='{$_POST['KA_Instalasi_reg']}',Keterangan_Pengguna_reg='{$_POST['Keterangan_Pengguna_reg']}'
   WHERE Id_Perbaikan_reg ='{$_POST['Id_Perbaikan_reg']}'";

  mysqli_query($db, $sql_ubah);

  $alert = "ubah";
}


$sql = "SELECT * FROM penggudangan_reg WHERE Id_Perbaikan_reg ='$_GET[Id_Perbaikan_reg3]'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>FORM EDIT PENGHAPUSAN REGISTRASI</h1>
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
    <?php } ?>
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
                <form action="<?= BASE_URL ?>/?hal=aset_teregistrasi&fun=update_penghapusan" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                  <input type="hidden" name="kodeRs" value="<?php echo $kodeRs ?>" />


                  <div class="form-group row">
                    <label for="Id_Perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Id_Perbaikan_reg" type="text" class="form-control" id="Id_Perbaikan_reg3" placeholder="Id Perbaikan" value="<?php echo $_GET['Id_Perbaikan_reg3'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Tanggal_Perbaikan_reg" type="text" class="form-control" id="Tanggal_Perbaikan_reg3" placeholder="Tanggal Perbaikan" value="<?= $row['Tanggal_Perbaikan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Penggudangan_reg" class="col-xs-3 col-form-label">Tanggal Penggudangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Tanggal_Penggudangan_reg" type="text" class="form-control" id="Tanggal_Penggudangan_reg3" placeholder="Tanggal Penggudangan" value="<?= $row['Tanggal_Penggudangan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Nama_Alat_reg" type="text" class="form-control" id="Nama_Alat_reg3" placeholder="Nama Alat" value="<?= $row['Nama_Alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Merek_Alat_reg" type="text" class="form-control" id="Merek_Alat_reg3" placeholder="Merek Alat" value="<?= $row['Merek_Alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Type_Alat_reg" type="text" class="form-control" id="Type_Alat_reg3" placeholder="Type Alat" value="<?= $row['Type_Alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Serial_Number_reg" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Serial_Number_reg" type="text" class="form-control" id="Serial_Number_reg3" placeholder="Serial Number" value="<?= $row['Serial_Number_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Lokasi_Alat_reg" type="text" class="form-control" id="Lokasi_Alat_reg3" placeholder="Lokasi Alat" value="<?= $row['Lokasi_Alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Pelapor_reg" type="text" class="form-control" id="Pelapor_reg3" placeholder="Pelapor" value="<?= $row['Pelapor_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Teknisi_1_reg" type="text" class="form-control" id="Teknisi_1_reg3" placeholder="Teknisi 1" value="<?= $row['Teknisi_1_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <input name="Teknisi_2_reg" type="text" class="form-control" id="Teknisi_2_reg3" placeholder="Teknisi 2" value="<?= $row['Teknisi_2_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9">
                      <input name="Teknisi_3_reg" type="text" class="form-control" id="Teknisi_3_reg3" placeholder="Teknisi 3" value="<?= $row['Teknisi_3_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="KA_Instalasi_reg" class="col-xs-3 col-form-label">KA Instalasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="KA_Instalasi_reg" type="text" class="form-control" id="KA_Instalasi_reg3" placeholder="KA Instalasi" value="<?= $row['KA_Instalasi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keterangan_Pengguna_reg" class="col-xs-3 col-form-label">Keterangan Pengguna<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Keterangan_Pengguna_reg" type="text" class="form-control" id="Keterangan_Pengguna_reg3" placeholder="Keterangan Pengguna" value="<?= $row['Keterangan_Pengguna_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button" name="ubah_penghapusan_reg">Edit</button>
                        <div class="or"></div>
                        <a href="<?= BASE_URL ?>/?hal=aset_teregistrasi&fun=index"><button type="button" class="ui button">Kembali</button></a>
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





<!-- <script src="./assets/js/bs-5.js"></script>
<script src="../js/scripts.js"></script>
<script src="./assets/libraries/jquery.min.js"></script> -->