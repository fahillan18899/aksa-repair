@extends('layouts.monitoring')

@section('content')
@section('title', 'Rekap Inventaris')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-archive"></i></div>
      <div class="header-title">
        <h1>Rekap Inventaris</h1>
        <small>Inventaris</small>
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
            <h1>Rekap Inventaris</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Merek</th>
                      <th>Type</th>
                      <th>Serial Number</th>
                      <th>Lokasi</th>
                      <th>Jadwal</th>
                      <th>Foto</th>
                    </thead>
                    <tbody>
                      @forelse($items as $item)
                      <tr>
                        <td>{{ $item->id_alat }}</td>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->merek }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->seri }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->jadwal }}</td>
                        <td>
                          @if($item->foto && file_exists(storage_path('app/public/'.$item->foto)))
                            <a href="{{ asset('storage/'.$item->foto) }}" class="btn btn-xs btn-warning"
                            target="_blank" data-toggle="tooltip" data-placement="top" title="Lihat Gambar">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                            </a>
                          @else
                            <a href="#" class="btn btn-xs btn-warning" data-toggle="tooltip"
                              data-placement="top" title="Gambar"
                              onclick="alert('Gambar tidak ada'); return false;">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                            </a>
                          @endif
                         <form action="{{ route('monitoring.deleteInv', $item->id) }}" method="POST" class="d-inline">
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