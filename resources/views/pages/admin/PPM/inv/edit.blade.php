@extends('layouts.ppm')

@section('content')
@section('title', 'Inventaris')
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
        <h1>MENU Edit Inventraris</h1>
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
    <!--Form Inventaris-->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print" id="form1">
              <h1>Form Edit Inventaris</h1>
            </div>

            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="{{route('inventaris.update', $item->id)}}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                      <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="nama_alat" id="nama_alat" type="text" class="form-control" value="{{ $item->nama_alat }}"  required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="merek" class="col-xs-3 form-label">Merek <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="merek" id="merek" class="form-control" type="text" value="{{ $item->merek }}" required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="type" class="col-xs-3 form-label">Type <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="type" id="type" class="form-control" type="text" value="{{ $item->type }}" required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="seri" class="col-xs-3 col-form-label">No Seri <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="seri" id="seri" class="form-control" type="text" value="{{ $item->seri }}" required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi" class="col-xs-3 form-label">Lokasi <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="lokasi" id="lokasi" class="form-control" type="text" value="{{ $item->lokasi }}" required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="jadwal" class="col-xs-3 col-form-label">Jadwal Pemeliharaan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="jadwal" id="jadwal" type="date" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-offset-3 col-sm-6">
                        <div class="ui buttons">
                          <button class="ui positive button">Save</button>
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
    <!--Form Inventaris end-->
  </div>
</div>
@endsection
