@extends('layouts.marketing')
@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Dashboard</h1>
        <small>Dashboard Repair Aksa Marketing</small>
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
              <span class="info-box-text"><?= "JUMLAH BARANG SELESAI REPAIR" ?></span>
              <span class="info-box-number">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Alat end -->

      <!-- Box Jumlah Aset Perbaikan Regis -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class=" info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">
                <a href="#" style="color: white"><?= "JUMLAH BARANG PROSES REPAIR" ?></a>
              </span>
              <span class="info-box-number" id="count_perbaikan">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Aset Perbaikan Regis End -->
      <!-- CARD -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">
              <div class="panel-heading no-print">
                <div class="row">
                  <div class="col-md-5">
                    <h2>Daftar barang repair</h2>
                  </div>
                </div>
              </div>
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <!-- TABEL -->
                    <table class="datatable table table-striped table-bordered" style="width: 100%">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Serial Number</th>
                          <th scope="col">Pelapor</th>
                          <th scope="col">Tanggal</th>
                        </tr>
                      </thead>
                      <tbody id="permintaanUserBody">
                        <!-- DATA AJAX -->
                      </tbody>
                    </table> 
                    <!-- TABEL -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- CARD N-->

      <!-- CARD -->
       <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">
            <div class="panel-heading no-print">
              <div class="row">
                <div class="col-md-5">
                  <h2>Daftar barang proses repair</h2>
                </div>
              </div>
            </div>
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!-- TABEL -->
                   <table class="datatable table table-striped table-bordered" style="width: 100%">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Type</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody id="perbaikanTabelBody">
                      <!-- DATA AJAX -->
                    </tbody>
                   </table>
                  <!-- TABEL -->
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
      <!-- CARD N-->
    </div>
  </div>
  <!-- /.content -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</div>
@endsection
