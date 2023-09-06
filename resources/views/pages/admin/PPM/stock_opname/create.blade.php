@extends('layouts.admin')

@section('title', 'Stock Opname Tambah')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Form</h1>
        <small>Form Stock Opname</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->




    <!-- content -->
    <div class="row">
      <div class="col-sm-12 ">
        <div class="panel panel-default thumbnail">
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('stock_opname.store') }}" class="form-inner" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')


                  <input type="hidden" name="kode_rs" value="as" />

                  <div class="form-group row">
                    <label for="nama" class="col-xs-3 col-form-label">Nama Sperpart <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Sperpart" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type SparePart <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type" type="text" class="form-control" id="type" placeholder="Type Alat" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_masuk" class="col-xs-3 col-form-label">jumlah masuk <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jumlah_masuk" class="form-control" type="number" placeholder="jumlah masuk" id="jumlah_masuk" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_pemakaian" class="col-xs-3 col-form-label">Lokasi Pemakaian</label>
                    <div class="col-xs-9">
                      <input name="lokasi_pemakaian" class="form-control" type="text" placeholder="Lokasi Pemakaian" id="lokasi_pemakaian">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_keluar" class="col-xs-3 col-form-label">jumlah keluar </label>
                    <div class="col-xs-9">
                      <input name="jumlah_keluar" class="form-control" type="number" placeholder="jumlah keluar" id="jumlah_keluar" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_masuk" class="col-xs-3 col-form-label">Tanggal Masuk <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_masuk" class="form-control" type="date" placeholder="Tanggal Masuk" id="tanggal_masuk" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_keluar" class="col-xs-3 col-form-label">Tanggal Keluar </label>
                    <div class="col-xs-9">
                      <input name="tanggal_keluar" class="form-control" type="date" placeholder="Tanggal Kelar" id="tanggal_keluar">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">Save</button>
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

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection