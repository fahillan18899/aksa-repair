@extends('layouts.monitoring')

@section('content')
@section('title', 'Rekap Perbaikan')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-archive"></i></div>
      <div class="header-title">
        <h1>Rekap Perbaikan</h1>
        <small>Perbaikan</small>
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
            <h1>Rekap Perbaikan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th>Id</th>
                      <th>Date</th>
                      <th>Nama</th>
                      <th>Merek</th>
                      <th>Type</th>
                      <th>Serial Number</th>
                      <th>Lokasi</th>
                      <th>Kepala Ruang</th>
                      <th>Teknisi</th>
                      <th>Korektif</th>
                      <th>Catatan</th>
                      <th>Foto</th>
                    </thead>
                    <tbody>
                      @forelse($items as $item)
                      <tr>
                        <td>{{ $item->id_alat }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->merek }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->seri }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->kepala }}</td>
                        <td>{{ $item->teknisi }}</td>
                        <td>{{ $item->korektif }}</td>
                        <td>{{ $item->catatan }}</td>
                        <td>
                          @if($item->foto)
                          <img src="{{ asset('storage/' . $item->foto) }}"
                              class="img-thumbnail"
                              style="width:90px">
                          @endif
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