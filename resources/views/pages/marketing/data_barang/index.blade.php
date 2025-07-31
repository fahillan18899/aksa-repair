@extends('layouts.marketing')

@section('content')
@section('title', 'Data Barang')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-archive"></i></div>
      <div class="header-title">
        <h1>Data Barang</h1>
        <small>Daftar Data Barang</small>
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
            <h1>Daftar Data Barang</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>No Urut</th>
                      <th>Nama</th>
                      <th>No Seri</th>
                      <th>Type</th>
                      <th>Kerusakan</th>
                      <th>Instansi</th>
                      <th>Status</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($item as $items)
                    <tr>
                      <td>{{ $items->no_urut }}</td>
                      <td>{{ $items->nama_alat }}</td>
                      <td>{{ $items->no_seri }}</td>
                      <td>{{ $items->type }}</td>
                      <td>{{ $items->kerusakan_alat }}</td>
                      <td>{{ $items->instansi }}</td>
                      <td>
                        <button class="btn btn-sm btn-{{ $items->status == 0 ? 'danger' : 'success' }}" disabled>
                          {{ $items->status == 0 ? 'Kembali' : 'Approve' }}
                        </button>
                      </td>
                      <td>
                        <form action="{{ route('teknisi.ket.repair', $items->id) }}" class="form-inner" method="post">
                          @csrf
                          @method('PUT')
                          <button type="submit" class="btn btn-sm
                            @switch ($items->ket)
                              @case(1) btn-danger @break
                              @case(2) btn-warning @break
                              @case(3) btn-info @break
                              @case(4) btn-secondary @break
                              @case(5) btn-success @break
                            @endswitch" disabled>
                            @switch($items->ket)
                            @case(1) troble @break
                            @case(2) proses @break
                            @case(3) dalam perbaikan @break
                            @case(4) rusak @break
                            @case(5) selesai @break
                            @default Tidak diketahui
                            @endswitch
                          </button>
                        </form>
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
</div> <!-- /.content -->
@endsection