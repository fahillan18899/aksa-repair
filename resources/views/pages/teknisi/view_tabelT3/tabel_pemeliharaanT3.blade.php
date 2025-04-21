@extends('layouts.teknisi')

@section('content')
@section('title', 'Data Aset Terpelihara')
<?php

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-note2"></i></div>
      <div class="header-title">
        <h1>Aset Terpelihara</h1>
        <small>Tabel Aset Terpelihara</small>
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
                  <a class="btn btn-success" href="/dashboard_teknisi/lembar_pemeliharaan#form3"
                    data-toggle="toltip" data-placement="right" title="Tambah Daftar Aser Terpelihara">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-body">

            <div class="panel-heading no-print">
              <div class="">
                <h1>Daftar Aset Terpelihara</h1>
              </div>
            </div>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-hover table-bordered " id="scollDatatable" style="width:100%">
                      <thead class="table-light">
                        <th scope="col">No</th>
                        <th scope="col">Id Aset</th>
                        <th scope="col">Nama Alat</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Lokasi</th>
                      </thead>
                      <tbody>
                        @forelse ($asetPemeliharaanT as $index => $item)
                        <tr>
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $item->id_aset }}</td>
                          <td>{{ $item->nama_alat }}</td>
                          <td>{{ $item->merek }}</td>
                          <td>{{ $item->tipe }}</td>
                          <td>{{ $item->serial_number }}</td>
                          <td>{{ $item->ruangan }}</td>
                        </tr>
                        @empty
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
      <!--Tabel Perbaikan aset regis end-->

    </div> <!-- /.content -->
  </div> <!-- /.content-wrapper -->
  @endsection