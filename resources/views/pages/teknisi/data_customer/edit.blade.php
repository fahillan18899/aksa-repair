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
                <form action="{{ route('teknisi.update.dataCs', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <label for="jadwal" class="col-xs-3 col-form-label">Jadwal<i class="text-danger">*</i></label>
                    <div class="col-xs-4">
                      <input name="jadwal1" id="jadwal1" type="date" class="form-control" value="{{ $item->jadwal }}" required>
                    </div>
                    <div class="col-xs-1">
                      sd
                    </div>
                    <div class="col-xs-4">
                      <input name="jadwal2" id="jadwal2" type="date" class="form-control" value="{{ $item->jadwal }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="realisasi" class="col-xs-3 form-label">Realisasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="realisasi" id="realisasi" class="form-control" type="text" value="{{ $item->realisasi }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="mobil" class="col-xs-3 col-form-label">Mobil<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="mobil" id="mobil" type="text" class="form-control" value="{{ $item->mobil }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi" class="col-xs-3 col-form-label">Teknisi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi" id="teknisi" type="text" class="form-control" value="{{ $item->teknisi }}" required>
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