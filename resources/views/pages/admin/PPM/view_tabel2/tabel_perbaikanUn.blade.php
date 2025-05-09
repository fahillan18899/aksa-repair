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
        <h1>Aset Unregistered</h1>
        <small>Tabel Aset Unregistered</small>
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
              <h1>DAFTAR UNREGITERED</h1>
              </div>
            </div>
          </div>
          <div class="panel-body">
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

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection