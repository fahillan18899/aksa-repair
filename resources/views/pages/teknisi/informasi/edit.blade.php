@extends('layouts.teknisi')

@section('content')
@section('title', 'Edit Informasi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-info"></i></div>
      <div class="header-title">
        <h1>Edit Informasi Sperpart</h1>
        <small>Edit Informasi Sperpart</small>
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
            <h1>Form Sperpart</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.update.informasi', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                    <label for="nama" class="col-xs-3 col-form-label">Nama<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama" id="nama" type="text" class="form-control" placeholder="isi nama sperpart di sini" value="{{ $item->nama }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek</label>
                    <div class="col-xs-9">
                      <input name="merek" id="merek" class="form-control" type="text" placeholder="isi merek di sini" value="{{ $item->merek }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 form-label">Type</label>
                    <div class="col-xs-9">
                      <input name="type" id="type" class="form-control" type="text" placeholder="isi type alat di sini" value="{{ $item->type }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_seri" class="col-xs-3 form-label">Nomer Seri</label>
                    <div class="col-xs-9">
                      <input name="no_seri" id="no_seri" class="form-control" type="text" placeholder="isi kerusakan alat di sini" value="{{ $item->no_seri }}">
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