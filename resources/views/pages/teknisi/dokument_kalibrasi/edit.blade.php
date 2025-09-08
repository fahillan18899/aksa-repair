@extends('layouts.teknisi')

@section('content')
@section('title', 'Edit Dokumentasi Kalibrasi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-info"></i></div>
      <div class="header-title">
        <h1>Edit Dokumentasi Kalibrasi</h1>
        <small>Edit Dokumentasi Kalibrasi</small>
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
    <!--Form Sperpart-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>Edit Dokumentasi Kalibrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.update.dokumen', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi</label>
                    <div class="col-xs-9">
                      <input name="instansi" id="instansi" type="text" class="form-control" value="{{ $item->instansi }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="marketing" class="col-xs-3 col-form-label">Marketing</label>
                    <div class="col-xs-9">
                      <input name="marketing" id="marketing" class="form-control" type="text" value="{{ $item->marketing }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah" class="col-xs-3 form-label">Jumlah Alat</label>
                    <div class="col-xs-9">
                      <input name="jumlah" id="jumlah" class="form-control" type="text" value="{{ $item->jumlah }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="document" class="col-xs-3 form-label">Dokumen Kalibrasi</label>
                    <div class="col-xs-9">
                      <input name="document" id="document" class="form-control" type="file" required>
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
    <!--Form Sperpart end-->
  </div>
</div> <!-- /.content -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection