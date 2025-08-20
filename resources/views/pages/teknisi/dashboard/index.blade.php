@extends('layouts.teknisi')
@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa ti-home"></i></div>
      <div class="header-title">
        <h1>Dashboard</h1>
        <small>Dashboard Repair Aksa Teknisi</small>
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
            <span class="info-box-number">{{ $countSelesai }}</span>
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
            <span class="info-box-number" id="count_perbaikan">{{ $countPerbaikan }}</span>
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
                  <h2>Daftar Pekerjaan</h2>
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
                        <th>No</th>
                        <th>Nama Alat</th>
                        <th>Instansi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($itemPekerjaan as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->instansi }}</td>
                      </tr>
                      @empty
                      @endforelse
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
                  <h2>Daftar barang selesai repair</h2>
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
                        <th>No Urut</th>
                        <th>Nama</th>
                        <th>Serial Number</th>
                        <th>Type</th>
                        <th>Kerusakan</th>
                        <th>Instansi</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($itemSelesai as $item)
                      <tr>
                        <td>{{ $item->no_urut }}</td>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->no_seri }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->kerusakan_alat }}</td>
                        <td>{{ $item->instansi }}</td>
                        <td>
                          <button class="btn btn-sm btn-{{ $item->status == 0 ? 'danger' : 'success' }}" disabled>
                            {{ $item->status == 0 ? 'Kembali' : 'Approve' }}
                          </button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-{{ $item->ket == 5 ? 'primary' : 'primary' }}" disabled>
                            {{ $item->ket == 0 ? 'Selesai' : 'Selesai' }}
                          </button>
                        </td>
                      </tr>
                      @empty
                      @endforelse
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
                        <th>No Urut</th>
                        <th>Nama</th>
                        <th>Serial Number</th>
                        <th>Type</th>
                        <th>Kerusakan</th>
                        <th>Instansi</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($itemPerbaikan as $item2)
                      <tr>
                        <td>{{ $item2->no_urut }}</td>
                        <td>{{ $item2->nama_alat }}</td>
                        <td>{{ $item2->no_seri }}</td>
                        <td>{{ $item2->type }}</td>
                        <td>{{ $item2->kerusakan_alat }}</td>
                        <td>{{ $item2->instansi }}</td>
                        <td>
                          <button class="btn btn-sm btn-{{ $item2->status == 0 ? 'danger' : 'success' }}" disabled>
                            {{ $item2->status == 0 ? 'Kembali' : 'Approve' }}
                          </button>
                        </td>
                        <td>
                          @php
                            $class = 'btn-light';
                            $label = 'Tidak diketahui';

                            switch($item2->ket) {
                              case 1: $class = 'btn-danger'; $label = 'Trouble'; break;
                              case 2: $class = 'btn-warning'; $label = 'Proses'; break;
                              case 3: $class = 'btn-info'; $label = 'Dalam Perbaikan'; break;
                              case 4: $class = 'btn-secondary'; $label = 'Rusak'; break;
                              case 5: $class = 'btn-success'; $label = 'Selesai'; break;
                            }
                          @endphp
                          <button class="btn btn-sm {{ $class }}" disabled>{{ $label }}</button>
                        </td>

                      </tr>
                      @empty
                      @endforelse
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