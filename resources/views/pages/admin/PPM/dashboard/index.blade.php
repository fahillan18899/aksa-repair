@extends('layouts.admin')

@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-home"></i></div>
      <div class="header-title">
        <h1>Dashboard</h1>
        <small>Dashboard Repair</small>
      </div>
    </div>
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content container-fluid">
    <div class="row">
      <!--Box Jumlah Alat -->
        <div class="col-12 col-md-6 mb-4">
          <div class="info-box bg-olive">
            <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">
                <a href="data_inventaris" style="color :white"><?= "JUMLAH BARANG SELESAI REPAIR" ?></a></span>
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
      <!--Box Jumlah Alat end-->

      <!--Box Jumlah Aset Perbaikan Regis -->
        <div class="col-12 col-md-6 mb-4">
          <div class=" info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">
                <a href="view_tabel"
                  style="color :white"><?= "JUMLAH BARANG PROSES REPAIR" ?></a>
              </span>
              <span class="info-box-number" id="count_perbaikan">{{ $countPerbaikan }}</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
      <!--Box Jumlah Aset Perbaikan Regis end-->

      <!-- Card Tabel Permintaan Perbaikan -->
       <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">
            <div class="panel-heading no-print">
              <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-5">
                  <h2>Daftar Barang Selesai Repair</h2>
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
                            <button class="btn btn-sm btn-{{ $item->ket == 0 ? 'primary' : 'warning' }}" disabled>
                              {{ $item->ket == 0 ? 'Selesai' : 'Dalam Perbaikan' }}
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

      <!--Card Tabel Perbaikan-->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">

              <div class="panel-heading no-print">
                <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-5">
                    <h2>Daftar Barang Proses Repair</h2>
                  </div>
                </div>
              </div>
              <div style="overflow-x:auto;">
                <div class="panel-body panel-form">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 table-responsive">
                      <!--TABEL-->
                      <table class="datatable table table-striped table-bordered">
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
                              <button class="btn btn-sm btn-{{ $item2->ket == 0 ? 'primary' : 'warning' }}" disabled>
                                {{ $item2->ket == 0 ? 'Selesai' : 'Dalam Perbaikan' }}
                              </button>
                            </td>
                          </tr>
                          @empty
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
      <!--Card Tabel Perbaikan-->
    </div>
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection
@push('addon-script')
<script>
  $('.datatable').DataTable({
    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "All"]
    ],
    buttons: [{
        extend: 'copy',
        className: 'btn-sm'
      },
      {
        extend: 'csv',
        title: 'ExampleFile',
        className: 'btn-sm'
      },
      {
        extend: 'excel',
        title: 'ExampleFile',
        className: 'btn-sm',
        title: 'exportTitle'
      },
      {
        extend: 'pdf',
        title: 'ExampleFile',
        className: 'btn-sm'
      },
      {
        extend: 'print',
        className: 'btn-sm'
      }
    ]
  });
</script>
@endpush