@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Data Inventaris</h1>
        <small>Inventaris</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-lg-7">
                <div class="btn-group">
                  <a class="btn btn-success" href="/dashboard/ppm/registrasi"> <i class="fa fa-plus"></i> Add Alat </a>
                </div>
              </div>

            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
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
                    <?php
                    $no = 1;
                    foreach ($items as $item) {
                      # code...

                      $Id_Aset                   = $item['Id_Aset'];
                      $Jenis_Alat                = $item['Jenis_Alat'];
                      $Nama_Alat                 = $item['Nama_Alat'];
                      $Merek                     = $item['Merek'];
                      $Type                      = $item['Type'];
                      $Serial_Number             = $item['Serial_Number'];
                      $Lokasi_Alat               = $item['Lokasi_Alat'];
                      $Tanggal_Kalibrasi         = $item['Tanggal_Kalibrasi'];
                      $Distributor               = $item['Distributor'];
                      $Alamat_Distributor        = $item['Alamat_Distributor'];
                      $TLP_Distributor           = $item['TLP_Distributor'];
                      $Email_Distributor         = $item['Email_Distributor'];
                      $Teknisi_Distributor       = $item['Teknisi_Distributor'];
                      $TLP_T_Distributor         = $item['TLP_T_Distributor'];
                      $No_Sertifikat_Kalibrasi   = $item['No_Sertifikat_Kalibrasi'];
                      $Teknisi_PPM               = $item['Teknisi_PPM'];
                      $Harga_Perolehan           = $item['Harga_Perolehan'];
                      $Sumber_Dana               = $item['Sumber_Dana'];
                      $Tahun_Pembuatan           = $item['Tahun_Pembuatan'];
                      $Tahun_Perolehan           = $item['Tahun_Perolehan'];
                    ?>

                      <tr class="odd gradeX">
                        <td><?php echo $no++;    ?></td>
                        <td><?php echo $Id_Aset;                ?></td>
                        <td><?php echo $Jenis_Alat;             ?></td>
                        <td><?php echo $Nama_Alat;              ?></td>
                        <td><?php echo $Merek;                  ?></td>
                        <td><?php echo $Type;                   ?></td>
                        <td><?php echo $Serial_Number;          ?></td>
                        <td><?php echo $Lokasi_Alat;            ?></td>
                        <td><?php echo $Tanggal_Kalibrasi;      ?></td>
                        <td><?php echo $TLP_Distributor;        ?></td>
                        <td><?php echo $Distributor;            ?></td>
                        <td><?php echo $Alamat_Distributor;     ?></td>
                        <td><?php echo $Email_Distributor;      ?></td>
                        <td><?php echo $Teknisi_Distributor;    ?></td>
                        <td><?php echo $TLP_T_Distributor;      ?></td>
                        <td><?php echo $No_Sertifikat_Kalibrasi; ?></td>
                        <td><?php echo $Teknisi_PPM;            ?></td>
                        <td><?php echo $Harga_Perolehan;        ?></td>
                        <td><?php echo $Sumber_Dana;           ?></td>
                        <td><?php echo $Tahun_Pembuatan;        ?></td>
                        <td><?php echo $Tahun_Perolehan;        ?></td>
                        <td><?php echo $item['no_inventaris_1']; ?> <br> <?php echo $item['no_inventaris_2']; ?> </td>
                        <td><?php echo $item['umur_alat'];       ?></td>
                        <td>
                          <a href="/dashboard/ppm/data_inventaris/qr_qode/<?php echo $Id_Aset ?>" target="_blank"><button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" title="Buat QR">Buat</button></a>
                        </td>
                        <td scope="row">
                          <a href="/dashboard/ppm/data_inventaris/cetak_aset/<?php echo $Id_Aset ?>" target="_blank"><button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Buat QR"><i class="fa fa-print"></i> print</button></a>
                        </td>
                      </tr>

                    <?php
                    }
                    ?>
                  </tbody>
                </table>
                <!--TABEL-->
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      new DataTable('#example', {
        scrollX: true
      });
    </script>

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection