<?php
$kodeRs = "RS0001";
/**Fungsi Perbaikan reg */
$alert = "";

if (isset($_POST['ubah_pengembalian_reg'])) {
  $sql_ubah = "UPDATE pengembalian_reg SET Id_Aset_reg='{$_POST['Id_Aset_reg']}', nama_alat_reg='{$_POST['nama_alat_reg']}',
  tanggal_perbaikan_reg='{$_POST['tanggal_perbaikan_reg']}',merek_reg='{$_POST['merek_reg']}',
  tipe_reg='{$_POST['tipe_reg']}',tanggal_pengembalian_reg='{$_POST['tanggal_pengembalian_reg']}',
  serial_number_reg='{$_POST['serial_number_reg']}',pelapor_reg='{$_POST['pelapor_reg']}',
  lokasi_alat_reg='{$_POST['lokasi_alat_reg']}',keterangan_reg='{$_POST['keterangan_reg']}',
  penerima_reg='{$_POST['penerima_reg']}',harga_perbaikan_reg='{$_POST['harga_perbaikan_reg']}',
  teknisi1_reg='{$_POST['teknisi1_reg']}',teknisi2_reg='{$_POST['teknisi2_reg']}',teknisi3_reg='{$_POST['teknisi3_reg']}',
  ka_instalasi_reg='{$_POST['ka_instalasi_reg']}',penyebab_kerusakan_reg='{$_POST['penyebab_kerusakan_reg']}',
  solusi_perbaikan_reg='{$_POST['solusi_perbaikan_reg']}',penguji_suku_cadang_reg='{$_POST['penguji_suku_cadang_reg']}',
  hasil_verifikasi_reg='{$_POST['hasil_verifikasi_reg']}',hasil_fungsi_reg='{$_POST['hasil_fungsi_reg']}',
  pengganti_suku_cadang_reg='{$_POST['pengganti_suku_cadang_reg']}'
   WHERE id_perbaikan_reg ='{$_POST['id_perbaikan_reg']}'";

  mysqli_query($db, $sql_ubah);

  $alert = "ubah";
}


$sql = "SELECT * FROM pengembalian_reg WHERE id_perbaikan_reg ='$_GET[id_aset]'";
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
        <h1>FORM EDIT PENGEMBALIAN REGISTRASI</h1>
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
            <h1>Form Pengembalian Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="<?= BASE_URL ?>/?hal=aset_teregistrasi&fun=update_pengembalian" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                  <input type="hidden" name="kodeRs" value="<?php echo $kodeRs ?>" />

                  <div class="form-group row">
                    <label for="id_perbaikan_reg" class="col-xs-3 col-form-label">id perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="id_perbaikan_reg2" placeholder="id perbaikan" value="<?php echo $_GET['id_aset'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Id_Aset_reg" class="col-xs-3 col-form-label">Id Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Id_Aset_reg" type="text" class="form-control" id="Id_Aset_reg2" placeholder="Id Aset" value="<?= $row['Id_Aset_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat_reg" class="col-xs-3 col-form-label">nama alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control" id="nama_alat_reg2" placeholder="nama alat" value="<?= $row['nama_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_perbaikan_reg" class="col-xs-3 col-form-label">tanggal perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="tanggal_perbaikan_reg2" placeholder="tanggal perbaikan" value="<?= $row['tanggal_perbaikan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_reg" class="col-xs-3 col-form-label">merek<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_reg" type="text" class="form-control" id="merek_reg2" placeholder="merek" value="<?= $row['merek_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tipe_reg" class="col-xs-3 col-form-label">Type<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tipe_reg" type="text" class="form-control" id="tipe_reg2" placeholder="Type" value="<?= $row['tipe_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_pengembalian_reg" class="col-xs-3 col-form-label">tanggal pengembalian<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_pengembalian_reg" type="text" class="form-control" id="tanggal_pengembalian_reg2" placeholder="tanggal pengembalian" value="<?= $row['tanggal_pengembalian_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_reg" class="col-xs-3 col-form-label">serial number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number_reg" type="text" class="form-control" id="serial_number_reg2" placeholder="serial number" value="<?= $row['serial_number_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="pelapor_reg2" placeholder="Pelapor" value="<?= $row['pelapor_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">lokasi alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_reg" type="text" class="form-control" id="lokasi_alat_reg2" placeholder="lokasi alat" value="<?= $row['lokasi_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan_reg" class="col-xs-3 col-form-label">keterangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="keterangan_reg" type="text" class="form-control" id="keterangan_reg2" placeholder="keterangan" value="<?= $row['keterangan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penerima_reg" class="col-xs-3 col-form-label">peneriman<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penerima_reg" type="text" class="form-control" id="penerima_reg2" placeholder="penerima" value="<?= $row['penerima_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_perbaikan_reg" class="col-xs-3 col-form-label">harga perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="harga_perbaikan_reg" type="text" class="form-control" id="harga_perbaikan_reg2" placeholder="harga perbaikan" value="<?= $row['harga_perbaikan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi1_reg" type="text" class="form-control" id="teknisi1_reg2" placeholder="Teknisi 1" value="<?= $row['teknisi1_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi2_reg" class="col-xs-3 col-form-label">Teknisi 2 </label>
                    <div class="col-xs-9">
                      <input name="teknisi2_reg" type="text" class="form-control" id="teknisi2_reg2" placeholder="Teknisi 2" value="<?= $row['teknisi2_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi3_reg" class="col-xs-3 col-form-label">Teknisi 3 </label>
                    <div class="col-xs-9">
                      <input name="teknisi3_reg" type="text" class="form-control" id="teknisi3_reg2" placeholder="Teknisi 3" value="<?= $row['teknisi3_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ka_instalasi_reg" class="col-xs-3 col-form-label">KA Instalasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="ka_instalasi_reg2" placeholder="KA Instalasi" value="<?= $row['ka_instalasi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penyebab_kerusakan_reg" class="col-xs-3 col-form-label">Penyebab Kerusakan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penyebab_kerusakan_reg" type="text" class="form-control" id="penyebab_kerusakan_reg2" placeholder="Penyebab Kerusakan" value="<?= $row['penyebab_kerusakan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="solusi_perbaikan_reg" class="col-xs-3 col-form-label">Solusi_Perbaikan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="solusi_perbaikan_reg" type="text" class="form-control" id="solusi_perbaikan_reg2" placeholder="Solusi_Perbaikan" value="<?= $row['solusi_perbaikan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penguji_suku_cadang_reg" class="col-xs-3 col-form-label">Penguji Suku Cadang <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penguji_suku_cadang_reg" type="text" class="form-control" id="penguji_suku_cadang_reg2" placeholder="Penguji Suku Cadang" value="<?= $row['penguji_suku_cadang_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hasil_verifikasi_reg" class="col-xs-3 col-form-label">Hasil Verifikasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="hasil_verifikasi_reg" type="text" class="form-control" id="hasil_verifikasi_reg2" placeholder="Hasil_Verifikasi" value="<?= $row['hasil_verifikasi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hasil_fungsi_reg" class="col-xs-3 col-form-label">Hasil Fungsi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="hasil_fungsi_reg" type="text" class="form-control" id="hasil_fungsi_reg2" placeholder="Hasil Fungsi" value="<?= $row['hasil_fungsi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pengganti_suku_cadang_reg" class="col-xs-3 col-form-label"> Pengganti_Suku_Cadang<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pengganti_suku_cadang_reg" type="text" class="form-control" id="pengganti_suku_cadang_reg2" placeholder="Pengganti_Suku_Cadang" value="<?= $row['pengganti_suku_cadang_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button" name="ubah_pengembalian_reg">Edit</button>
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



  </div> <!-- /.content -->




</div> <!-- /.content-wrapper -->

<!-- <script src="./assets/js/bs-5.js"></script>
<script src="../js/scripts.js"></script>
<script src="./assets/libraries/jquery.min.js"></script> -->