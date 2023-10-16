@extends('layouts.admin')

@section('content')
@section('title', 'Stock Opname')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-drawer"></i></div>
      <div class="header-title">
        <h1>History Perbaikan</h1>
        <small>Tabel History</small>
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
            <div class="btn-group">
              <a class="btn btn-success" href="{{ route('aset_teregistrasi.index') }}"><i class="fa fa-plus"></i> Tambah Perbaikan Teregistrasi </a>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama SparePart</th>
                      <th scope="col">Type</th>
                      <th scope="col">Lokasi Pemakaian</th>
                      <th scope="col">Jumlah Masuk</th>
                      <th scope="col">Jumlah Keluar</th>
                      <th scope="col">Tanggal Masuk</th>
                      <th scope="col">Tanggal Keluar</th>
                      <th scope="col">Total</th>
                      <th scope="col">Tombol_Aksi_Table</th>
                    </tr>
                  </thead>
                  <tbody>
                    
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