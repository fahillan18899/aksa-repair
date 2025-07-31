@extends('layouts.admin')

@section('content')
@section('title', 'Repair')
<style>
  input[readonly] {
    cursor: not-allowed;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>MENU FORM OPERATOR</h1>
        <small>Form operator</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <!--Form Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>Form Operator</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">Username<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" id="nama_alat" type="text" class="form-control" placeholder="Terisi otomatis" required >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_seri" class="col-xs-3 col-form-label">PT</label>
                    <div class="col-xs-9">
                      <input name="no_seri" id="no_seri" class="form-control" type="text" placeholder="Terisi otomatis" required value="Aksa" readonly >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 form-label">Divisi</label>
                    <div class="col-xs-9">
                      <input name="type" id="type" class="form-control" type="text" placeholder="Terisi otomatis" required >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kerusakan_alat" class="col-xs-3 form-label">Kerusakan Alat</label>
                    <div class="col-xs-9">
                      <input name="kerusakan_alat" id="kerusakan_alat" class="form-control" type="text" placeholder="Terisi otomatis" required >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="instansi" id="instansi" type="text" class="form-control" placeholder="Terisi otomatis"  required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
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
    <!--Form Perbaikan end-->
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Daftar Repair alat</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th>No Urut</th>
                      <th>Nama</th>
                      <th>Serial Number</th>
                      <th>Type</th>
                      <th>Kerusakan</th>
                      <th>Instansi</th>
                      <th>Status</th>
                      <th>Keterangan</th>
                      <th>Tombol</th>
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
    <!--Tabel Perbaikan-->
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection