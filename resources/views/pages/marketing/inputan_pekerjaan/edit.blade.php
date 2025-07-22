@extends('layouts.marketing')

@section('content')
@section('title', 'Edit Inputan Pekerjaan')
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
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>EDIT INPUTAN PEKERJAAN</h1>
        <small>Edit Inputan Pekerjaan</small>
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
            <h1>Edit Inputan Pekerjaan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('marketing.update.inputanPekerjaan', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" id="nama_alat" type="text" class="form-control" value="{{ $item->nama_alat }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek" id="merek" type="text" class="form-control" value="{{ $item->merek }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type" id="type" type="text" class="form-control" value="{{ $item->type }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_seri" class="col-xs-3 col-form-label">No Seri <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="no_seri" id="no_seri" type="text" class="form-control" value="{{ $item->no_seri }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="instansi" id="instansi" type="text" class="form-control" value="{{ $item->instansi }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kerusakan" class="col-xs-3 col-form-label">Kerusakan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="kerusakan" id="kerusakan" type="text" class="form-control" value="{{ $item->kerusakan }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="foto" class="col-xs-3 col-form-label">Foto</label>
                    <div class="col-xs-9">
                      <input name="foto" id="foto" type="file" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Edit</button>
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
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection