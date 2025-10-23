@extends('layouts.teknisi')

@section('content')
@section('title', 'Generate QR')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-qrcode"></i></div>
      <div class="header-title">
        <h1>Generate QR</h1>
        <small>Add Generate QR</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!-- display when error in laravel -->
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}
          @endforeach
      </ul>
    </div>
    @endif
    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <h2>Generate QR</h2>
                <form method="POST" action="{{ route('teknisi.qr.store') }}">
                  @csrf
                  <div class="form-group row">
                    <label for="id_pertama" class="col-xs-3 form-label">no urut awal</label>
                    <div class="col-xs-4">
                      <input name="id_pertama" id="id_pertama" class="form-control" type="text" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="id_terakhir" class="col-xs-3 form-label">no urut akhir</label>
                    <div class="col-xs-4">
                      <input name="id_terakhir" id="id_terakhir" class="form-control" type="text" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button" type="submit">Generate QR</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Daftar Alat</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th>No</th>
                      <th>No Urut</th>
                      <th>Nama</th>
                      <th>Merek</th>
                      <th>Type</th>
                      <th>Serial Number</th>
                      <th>Instansi</th>
                    </thead>
                    <tbody>
                      @forelse($items as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->merek }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->no_seri }}</td>
                        <td>{{ $item->instansi }}</td>
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
    <!--Tabel Perbaikan-->
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection