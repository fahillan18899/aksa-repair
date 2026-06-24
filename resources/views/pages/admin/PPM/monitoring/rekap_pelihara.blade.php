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
        <h1>Rekap Pemeliharaan</h1>
        <small>Pemeliharaan</small>
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
            <h1>Rekap Pemeliharaan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Nama</th>
                            <th>Merek</th>
                            <th>Type</th>
                            <th>SN</th>
                            <th>Lokasi</th>
                            <th>Tombol Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($items as $item)
                      <tr>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->merek }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->seri }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>
                          <a href="{{ route('pelihara.show', $item->id) }}" class="btn btn-success btn-xs">
                              <i class="fa fa-eye"></i>
                          </a>
                         <form action="{{ route('monitoring.deletePelihara', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash-o" aria-hidden="hidden"></i>
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