@extends('layouts.marketing')

@section('content')
@section('title', 'Kegiatan Kalibrasi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
      <div class="header-title">
        <h1>Kegiatan Kalibrasi</h1>
        <small>Daftar Kegiatan Kalibrasi</small>
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
            <h1>Daftar Kegiatan Kalibrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>Instansi</th>
                      <th>Jadwal</th>
                      <th>Proses</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($item as $items)
                    <tr>
                      <td>{{ $items->instansi }}</td>
                      <td>{{ $items->jadwal }}</td>
                      <td>{{ $items->proses }}</td>
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