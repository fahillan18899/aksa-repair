@extends('layouts.monitoring')

@section('content')
@section('title', 'Rekap Pemeliharaan')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-archive"></i></div>
      <div class="header-title">
        <h1>Rekap Laporan Bulanan</h1>
        <small>Laporan</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!-- content -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Rekap Laporan Bulanan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Bulan</th>
                                    <th style="width: 180px;">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($daftarBulan as $item)
                                    <tr>
                                        <td>
                                            {{ $item['nama_bulan'] }}
                                        </td>
                                        <td>

                                          <a href="{{ route('monitoring.downloadRekapBulan', [
                                              'tahun' => $item['tahun'],
                                              'bulan' => $item['bulan']
                                          ]) }}" class="btn btn-success btn-sm">
                                              <i class="fas fa-file-excel"></i> Export Excel
                                          </a>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            Belum ada data laporan perbaikan
                                            atau pemeliharaan.
                                        </td>
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
  </div>
</div> <!-- /.content -->
@endsection
@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endpush