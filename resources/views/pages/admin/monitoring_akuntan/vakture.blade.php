@extends('layouts.admin')

@section('content')
@section('title', 'Vakture')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Vakture</h1>
        <small>Daftar Vakture</small>
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
            <h1>Daftar Vakture</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Link Download</th>
                      <th>Tanggal Upload</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $index => $datas)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $datas->nama }}</td>
                      <td><a href="{{ URL::asset('storage/'.$datas->path) }}" target="_blank">Download</a></td>
                      <td>{{ $datas->created_at->format('d-m-Y') }}</td>
                    </tr>
                    @endforeach
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