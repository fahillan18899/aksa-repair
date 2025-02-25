@extends('layouts.admin')

@section('content')
@section('title', 'Edit Nomklatur')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-drawer"></i></div>
      <div class="header-title">
        <h1>Ubah Nomklatur</h1>
        <small>Form Nomklatur </small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">

    <!--Form Nomklatur-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Nomklatur</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{route('nomklatur.update',$item->id)}}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                      <label for="id_nomklatur" class="col-xs-3 col-form-label">ID Alat
                      </label>
                      <div class="col-xs-9">
                        <input name="id_nomklatur" type="text" class="form-control" id="id_nomklatur" value="{{ $item['id_nomklatur'] }}" />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_nomklatur" class="col-xs-3 col-form-label">Nama Alat
                        <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="nama_nomklatur" type="text" class="form-control" id="nama_nomklatur" value="{{ $item['nama_nomklatur'] }}" />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="kode_nomklatur" class="col-xs-3 col-form-label">Kode Nomklatur
                        <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="kode_nomklatur" type="text" class="form-control" id="kode_nomklatur" value="{{ $item['kode_nomklatur'] }}" />
                      </div>
                    </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Form Nomklatur End-->
@endsection