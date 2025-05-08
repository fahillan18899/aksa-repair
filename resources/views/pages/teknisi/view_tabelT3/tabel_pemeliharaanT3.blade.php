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
              <div class="">
                <h1>Daftar Aset Terkalibrasi</h1>
              </div>
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
                    <table class="table table-hover table-bordered " id="scollDatatable" style="width:100%">
                      <thead class="table-light">
                        <th scope="col">No</th>
                        <th scope="col">Id Aset</th>
                        <th scope="col">Nama Alat</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tanggal Kalibrasi</th>
                      </thead>
                      <tbody>
                        @forelse ($asetPemeliharaanT as $index => $item)
                        @php
                        $warna = ''; // Default tanpa warna

                        // Pastikan tanggal_kalibrasi tidak "-" dan merupakan tanggal valid
                        if ($item->tanggal_kalibrasi != '-' && strtotime($item->tanggal_kalibrasi)) {
                          $hariTersisa = now()->diffInDays($item->tanggal_kalibrasi, false);

                          if ($hariTersisa < 0) {
                            $warna='background-color: #ffcccc; color: red;' ; // Merah (sudah lewat)
                          } elseif ($hariTersisa < 15) {
                            $warna='background-color: #fff3cd; color: #856404;' ; //Kuning (Sudah mendekati)
                          }
                        }
                        @endphp
                        <tr style="{{ $warna }}">
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $item->id_aset }}</td>
                          <td>{{ $item->nama_alat }}</td>
                          <td>{{ $item->merek }}</td>
                          <td>{{ $item->type }}</td>
                          <td>{{ $item->serial_number }}</td>
                          <td>{{ $item->lokasi_alat }}</td>
                          <td>{{ $item->tanggal_kalibrasi }}</td>
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