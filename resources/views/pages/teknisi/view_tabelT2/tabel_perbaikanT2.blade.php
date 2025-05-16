@extends('layouts.teknisi')

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
                  <a class="btn btn-success" href="/dashboard_teknisi/perbaikan_unregistrasi#form2"
                    data-toggle="tooltip" data-placement="right" title="Tambah Daftar Perbaikan">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-body">

            <div class="panel-heading no-print">
              <div class="">
                <h1>Daftar Perbaikan Aset Unregistrasi</h1>
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
                        <th scope="col">Nama_Alat</th>
                        <th scope="col">Merek_Alat</th>
                        <th scope="col">Type_Alat</th>
                        <th scope="col">Serial_Number</th>
                        <th scope="col">Lokasi_Alat</th>
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
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection