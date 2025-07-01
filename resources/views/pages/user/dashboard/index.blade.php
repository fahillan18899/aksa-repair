@extends('layouts.user')

@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Dashboard</h1>
        <small>Dashboard PPM USER</small>
      </div>
    </div>
  </section>
  <!-- /.content-header -->
<!-- Main content -->
  <div class="content">
    <div class="row">

      <!-- Box Jumlah Alat -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-olive">
            <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><?= 'JUMLAH ALAT TERGESITRASI' ?></span>
              <span class="info-box-number">0</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y') ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Alat end-->

      <!-- Box Jumlah Aset Perbaikan Regis -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class=" info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><?= 'JUMLAH ASSET PERBAIKAN TERGESITRASI' ?></span>
              <span class="info-box-number" id="count_perbaikan">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y') ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Aset Perbaikan Regis end-->

      <!-- Box Permintaan perbaiian user -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-navy-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">JUMLAH PERMINTAAN PERBAIKAN USER</span>
              <span class="info-box-number" id="count_permintaan">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y') ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Permintaan perbaiian user end -->

      <!-- Box Jumlah Aset Terkalibrasi -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-light-green">
            <span class="info-box-icon"><i class="fa fa-cogs"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><?= 'JUMLAH ALAT TERPELIHARA' ?></span>
              <span class="info-box-number">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y') ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Aset Terkalibrasi end -->

      <!-- CARD TABEL PERMINTAAN -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">

              <div class="panel-heading no-print">
                <div class="row">
                  <div class="col-md-5">
                    <div class="btn-group">
                      <a class="btn btn-success" href="/dashboard_user/pesanan_user"> <i class="fa fa-plus"></i> Request Perbaikan </a>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <h2>Tabel Perbaikan</h2>
                  </div>
                </div>
              </div>
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <!--TABEL-->
                    <table class="datatable table table-striped table-bordered" style="width:100%">
                      <thead class="table-light">
                        <th class="">Tanggal</th>
                        <th class="">Nama</th>
                        <th class="">Merek</th>
                        <th class="">Type</th>
                        <th class="">Serial_Number</th>
                        <th class="">Lokasi</th>
                        <th class="">Status</th>
                        <th class="">Keterangan</th>
                      </thead>
                      <tbody id="perbaikanUser">
                        <!-- DATA AJAX -->
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
      <!-- CARD TABEL PERMINTAAN N-->
      
      <!-- CARD TABEL PERBAIKAN -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">
              <div class="panel-heading no-print">
                <div class="row">
                  <div class="col-md-5">
                    <h2>Tabel Permintaan Perbaikan</h2>
                  </div>
                </div>
              </div>
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <!--TABEL-->
                    <table class="datatable table table-striped table-bordered" style="width:100%">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Id</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Serial Number</th>
                          <th scope="col">Pelapor</th>
                          <th scope="col">Tanggal</th>
                          <th scope="col">Tombol_Aksi_Table</th>
                        </tr>
                      </thead>
                      <tbody>
                        
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
      <!-- CARD TABEL PERBAIKAN -->
    </div>
  </div>
<!-- /.content -->
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection