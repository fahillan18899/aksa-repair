@extends('layouts.teknisi')

@section('content')
@section('title', 'Edit Repair')
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
        <h1>Edit Repair</h1>
        <small>Edit Repair</small>
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
            <h1>Edit Repair</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.update.repair', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <input name="no_urut" id="no_urut" class="form-control" type="hidden" value="{{ $item->no_urut }}">
                  <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" id="nama_alat" type="text" class="form-control" value="{{ $item->nama_alat }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_seri" class="col-xs-3 col-form-label">No Seri</label>
                    <div class="col-xs-9">
                      <input name="no_seri" id="no_seri" class="form-control" type="text" value="{{ $item->no_seri }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 form-label">Type</label>
                    <div class="col-xs-9">
                      <input name="type" id="type" class="form-control" type="text" value="{{ $item->type }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kerusakan_alat" class="col-xs-3 form-label">Kerusakan Alat</label>
                    <div class="col-xs-9">
                      <input name="kerusakan_alat" id="kerusakan_alat" class="form-control" type="text" value="{{ $item->kerusakan_alat }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="instansi" id="instansi" type="text" class="form-control" value="{{ $item->instansi }}" required>
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
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection