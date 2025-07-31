@extends('layouts.admin')

@section('content')
@section('title', 'SPH')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>SPH</h1>
        <small>Daftar SPH</small>
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
            <h1>Daftar SPH</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>Lokasi, Tanggal</th>
                      <th>No Surat</th>
                      <th>Instansi</th>
                      <th>Tombol</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($data as $datas)
                    <tr>
                      <td>{{ $datas->lokasi_tanggal }}</td>
                      <td>{{ $datas->no_surat }}</td>
                      <td>{{ $datas->yth }}</td>
                      <td>
                        <a href="{{ route('sph.view', $datas->id) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="View">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
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
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection