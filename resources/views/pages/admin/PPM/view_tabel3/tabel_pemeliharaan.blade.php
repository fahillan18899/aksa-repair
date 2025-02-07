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
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h2>Tabel Alat Terkalibrasi</h2>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nama Alat</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Type</th>
                      <th scope="col">Lokasi</th>
                      <th scope="col">Tanggal Kalibrasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id_aset }}</td>
                      <td>{{ $item->nama_alat }}</td>
                      <td>{{ $item->merek }}</td>
                      <td>{{ $item->type }}</td>
                      <td>{{ $item->lokasi_alat}}</td>
                      <td>{{ $item->tanggal_kalibrasi }}</td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="10">Data Kosong</td>
                    </tr>
                    @endforelse
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
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection