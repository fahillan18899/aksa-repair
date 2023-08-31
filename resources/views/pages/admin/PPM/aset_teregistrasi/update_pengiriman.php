<?php
$kodeRs = "RS0001";
/**Fungsi Perbaikan reg */
$alert = "";

if (isset($_POST['ubah_pengiriman_reg'])) {
  $sql_ubah = "UPDATE pengiriman_reg SET Tanggal_Perbaikan_reg='{$_POST['Tanggal_Perbaikan_reg']}', Tanggal_Pengiriman_reg='{$_POST['Tanggal_Pengiriman_reg']}',
  Id_Aset_reg='{$_POST['Id_Aset_reg']}',Nama_Alat_reg='{$_POST['Nama_Alat_reg']}',
  Merek_Alat_reg='{$_POST['Merek_Alat_reg']}',Type_Alat_reg='{$_POST['Type_Alat_reg']}',
  Seri_Number_reg='{$_POST['Seri_Number_reg']}',Lokasi_Alat_reg='{$_POST['Lokasi_Alat_reg']}',
  Teknisi_1_reg='{$_POST['Teknisi_1_reg']}',Pelapor_reg='{$_POST['Pelapor_reg']}',
  Teknisi_2_reg='{$_POST['Teknisi_2_reg']}', Teknisi_3_reg='{$_POST['Teknisi_3_reg']}',Keterangan_Kondisi_Alat_reg='{$_POST['Keterangan_Kondisi_Alat_reg']}',
  KA_Instalasi_reg='{$_POST['KA_Instalasi_reg']}',Nama_Rekan_reg='{$_POST['Nama_Rekan_reg']}',
  Alamat_Rekan_reg='{$_POST['Alamat_Rekan_reg']}',Teknisi_Rekanan_reg='{$_POST['Teknisi_Rekanan_reg']}',
  Telp_Teknisi_Rekanan_reg='{$_POST['Telp_Teknisi_Rekanan_reg']}'
   WHERE Id_Perbaikan_reg ='{$_POST['Id_Perbaikan_reg']}'";

  mysqli_query($db, $sql_ubah);

  $alert = "ubah";
}


$sql = "SELECT * FROM pengiriman_reg WHERE Id_Perbaikan_reg ='$_GET[Id_Perbaikan_reg1]'";
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
        <h1>FORM EDIT PENGIRIMAN REGISTRASI</h1>
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
                <form action="<?= BASE_URL ?>/?hal=aset_teregistrasi&fun=update_pengiriman" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                  <input type="hidden" name="kodeRs" value="<?= $kodeRs_ ?>" />

                  <div class="form-group row">
                    <label for="Id_Perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Id_Perbaikan_reg" type="text" class="form-control" id="Perbaikan_reg" placeholder="Id Perbaikan" value="<?php echo $_GET['Id_Perbaikan_reg1'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Tanggal_Perbaikan_reg" type="text" class="form-control" id="Tanggal_Perbaikan_reg1" placeholder="Tanggal Perbaikan" value="<?= $row['Tanggal_Perbaikan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Pengiriman_reg" class="col-xs-3 col-form-label">Tanggal Pengiriman<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Tanggal_Pengiriman_reg" type="text" class="form-control" id="Tanggal_Pengiriman_reg" placeholder="Tanggal Pengiriman" value="<?= $row['Tanggal_Pengiriman_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Id_Aset_reg" class="col-xs-3 col-form-label">Id Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Id_Aset_reg" type="text" class="form-control" id="Id_Aset_reg1" placeholder="Id Aset" value="<?= $row['Id_Aset_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Nama_Alat_reg" type="text" class="form-control" id="Nama_Alat_reg1" placeholder="Nama Alat" value="<?= $row['Nama_Alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Merek_Alat_reg" type="text" class="form-control" id="Merek_Alat_reg1" placeholder="Merek Alat" value="<?= $row['Merek_Alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Type_Alat_reg" type="text" class="form-control" id="Type_Alat_reg1" placeholder="Type Alat" value="<?= $row['Type_Alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Seri_Number_reg" class="col-xs-3 col-form-label">Seri Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Seri_Number_reg" type="text" class="form-control" id="Seri_Number_reg1" placeholder="Seri Number" value="<?= $row['Seri_Number_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Lokasi_Alat_reg" type="text" class="form-control" id="Lokasi_Alat_reg1" placeholder="Lokasi Alat" value="<?= $row['Lokasi_Alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Teknisi_1_reg" type="text" class="form-control" id="Teknisi_1_reg1" placeholder="Teknisi 1" value="<?= $row['Teknisi_1_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Pelapor_reg" type="text" class="form-control" id="Pelapor_reg1" placeholder="Pelapor" value="<?= $row['Pelapor_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <input name="Teknisi_2_reg" type="text" class="form-control" id="Teknisi_2_reg1" placeholder="Teknisi 2" value="<?= $row['Teknisi_2_reg'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9">
                      <input name="Teknisi_3_reg" type="text" class="form-control" id="Teknisi_3_reg1" placeholder="Teknisi 3" value="<?= $row['Teknisi_3_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keterangan_Kondisi_Alat_reg" class="col-xs-3 col-form-label">Keterangan Kondisi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Keterangan_Kondisi_Alat_reg" type="text" class="form-control" id="Keterangan_Kondisi_Alat_reg1" placeholder="Keterangan Kondisi Alat" value="<?= $row['Keterangan_Kondisi_Alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="KA_Instalasi_reg" class="col-xs-3 col-form-label">KA Instalasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="KA_Instalasi_reg" type="text" class="form-control" id="KA_Instalasi_reg1" placeholder="KA Instalasi" value="<?= $row['KA_Instalasi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Rekan_reg" class="col-xs-3 col-form-label">Nama Rekan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Nama_Rekan_reg" type="text" class="form-control" id="Nama_Rekan_reg" placeholder="Nama Rekan" value="<?= $row['Nama_Rekan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Alamat_Rekan_reg" class="col-xs-3 col-form-label">Alamat Rekan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Alamat_Rekan_reg" type="text" class="form-control" id="Alamat_Rekan_reg" placeholder="Alamat Rekan" value="<?= $row['Alamat_Rekan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_Rekanan_reg" class="col-xs-3 col-form-label">Teknisi Rekanan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Teknisi_Rekanan_reg" type="text" class="form-control" id="Teknisi_Rekanan_reg" placeholder="Teknisi Rekanan" value="<?= $row['Teknisi_Rekanan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Telp_Teknisi_Rekanan_reg" class="col-xs-3 col-form-label">Telp_Teknisi_Rekanan_reg<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Telp_Teknisi_Rekanan_reg" type="text" class="form-control" id="Telp_Teknisi_Rekanan_reg" placeholder="Telp_Teknisi_Rekanan_reg" value="<?= $row['Telp_Teknisi_Rekanan_reg'] ?>">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <a href="<?= BASE_URL ?>/?hal=aset_teregistrasi&fun=index"><button type="button" class="ui button">Kembali</button></a>
                        <div class="or"></div>
                        <button class="ui positive button" name="ubah_pengiriman_reg">Save</button>
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

<!-- <script src="./assets/js/bs-5.js"></script>
<script src="../js/scripts.js"></script>
<script src="./assets/libraries/jquery.min.js"></script> -->