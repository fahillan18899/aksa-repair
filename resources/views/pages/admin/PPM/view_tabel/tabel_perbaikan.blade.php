@extends('layouts.admin')

@section('content')
@section('title', 'Data Aset Perbaikan')
<?php

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-note2"></i></div>
      <div class="header-title">
        <h1>Aset Perbaikan</h1>
        <small>Tabel Aset Perbaikan</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!--Tabel Perbaikan aset regis-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-md-6">
                <div class="btn-group">
                  <a class="btn btn-success" href="/dashboard/ppm/aset_teregistrasi#form1"> <i class="fa fa-plus"></i> Form Perbaikan Aset Teregistrasi</a>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-body">

            <div class="panel-heading no-print">
              <div class="">
                <h1>Tabel Perbaikan Aset Teregistrasi</h1>
              </div>
            </div>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                    <!-- /.table-responsive -->
                    <table class="datatable table table-striped table-bordered" style="width:100%">
                      <thead class="table-light">
                        <th scope="col">No</th>
                        <th scope="col">Id_Perbaikan</th>
                        <th scope="col">ID_Aset</th>
                        <th scope="col">Tanggal_Perbaikan</th>
                        <th scope="col">Nama_Alat</th>
                        <th scope="col">Merek_Alat</th>
                        <th scope="col">Type_Alat</th>
                        <th scope="col">Serial_Number</th>
                        <th scope="col">Lokasi_Alat</th>
                        <th scope="col">Pelapor</th>
                        <th scope="col">Keterangan_Kondisi_Alat</th>
                        <th scope="col">Instalasi</th>
                        <th scope="col">Teknisi_1</th>
                        <th scope="col">Teknisi_2</th>
                        <th scope="col">Teknisi_3</th>
                        <th scope="col">Keluhan_Dari_alat</th>
                        <th scope="col">Korektif</th>
                      </thead>
                      <tbody>
                        @forelse ($asetPerbaikan as $index => $item)
                        <tr class="odd gradeX">
                          <td><?php echo $index  + 1 ?></td>
                          <td title="klik untuk copy ke form"
                            onclick="copyv1(this)"><?php echo $item['id_perbaikan_reg'] ?></td>
                          <td><?php echo $item['id_aset_reg'] ?></td>
                          <td><?php echo $item['tanggal_perbaikan_reg'] ?></td>
                          <td><?php echo $item['nama_alat_reg'] ?></td>
                          <td><?php echo $item['merek_alat_reg'] ?></td>
                          <td><?php echo $item['type_alat_reg'] ?></td>
                          <td><?php echo $item['serial_number_reg'] ?></td>
                          <td><?php echo $item['lokasi_alat_reg'] ?></td>
                          <td><?php echo $item['pelapor_reg'] ?></td>
                          <td><?php echo $item['keterangan_kondisi_alat_reg'] ?></td>
                          <td><?php echo $item['ka_instalasi_reg'] ?></td>
                          <td><?php echo $item['teknisi_1_reg'] ?></td>
                          <td><?php echo $item['teknisi_2_reg'] ?></td>
                          <td><?php echo $item['teknisi_3_reg'] ?></td>
                          <td><?php echo $item['keluhan_dari_alat_reg'] ?></td>
                          <td><?php echo $item['korektif_reg'] ?></td>
                        </tr>
                        @empty
                        <tr>
                          <td class="text-center" colspan="7">Data Kosong</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--Tabel Perbaikan aset regis end-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection