@extends('layouts.admin')

@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-home"></i></div>
      <div class="header-title">
        <h1>Detail Data Instansi</h1>
      </div>
    </div>
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content container-fluid">
    <div class="row">

      <!-- Card Tabel Permintaan Perbaikan -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">
            <div class="panel-heading no-print">
              <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-5">
                  <h2>Data Detail</h2>
                </div>
              </div>
            </div>
            <div class="overflow-x:auto">
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12 table-responsive">
                    <!-- TABEL -->
                      <table class="datatable table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th>Instansi</th>
                            <th>Nama Alat</th>
                            <th>Merek</th>
                            <th>Type</th>
                            <th>Serial Number</th>
                            <th>Kerusakan</th>
                            <th>Marketing</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($dataBarang as $item)
                            <tr>
                              <td>{{ $item->instansi }}</td>
                              <td>{{ $item->nama_alat }}</td>
                              <td>{{ $item->merek }}</td>
                              <td>{{ $item->type }}</td>
                              <td>{{ $item->no_seri }}</td>
                              <td>{{ $item->kerusakan_alat }}</td>
                              <td>{{ $item->user }}</td>
                              <td>
                                <button class="btn btn-sm btn-{{ $item->status == 0 ? 'success' : 'primary'}}" type="submit" disabled>
                                  {{ $item->status == 0 ? 'Kembali' : 'Approve' }}
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
      </div>
      <!-- Card Tabel Permintaan Perbaikan -->
    </div>
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection
