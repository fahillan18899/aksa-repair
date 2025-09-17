@extends('layouts.admin')

@section('content')
@section('title', 'Pekerjaan Selesai')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Pekerjaan Selesai</h1>
        <small>Daftar Pekerjaan Selesai</small>
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
            <h1>Daftar Pekerjaan Selesai</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>Marketing</th>
                      <th>Instansi</th>
                      <th>Jumlah Alat</th>
                      <th>Nominal</th>
                      <th>Tanggal</th>
                      <th>Pembayaran</th>
                      <th>Status</th>
                      <th>Document</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($data as $datas)
                    <tr>
                      <td>{{ $datas->marketing }}</td>
                        <td>{{ $datas->instansi }}</td>
                        <td>{{ $datas->jumlah }}</td>
                        <td>{{ $datas->nominal }}</td>
                        <td>{{ $datas->tanggal }}</td>
                        <td>{{ $datas->sistem }}</td>
                        <td><button class="btn btn-sm btn-{{ $datas->status == 0 ? 'danger' : 'success'}}" type="submit" disabled>{{ $datas->status == 0 ? 'Proses / Termin' : 'Selesai / Lunas' }}</button>
                        </td>
                        <td><a class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="top" title="View" href="{{ URL::asset('storage/'.$datas->document) }}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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