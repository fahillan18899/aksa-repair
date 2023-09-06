@extends('layouts.admin')

@section('content')
@section('title', 'Edit Gedung')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Ubah Gedung</h1>
        <small>Form Gedung </small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">

    <!--Form Gedung-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Gedung</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('gedung.update' ,$item->id_gedung) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')


                  <input type="hidden" name="kode_rs" value="RS0001" />

                  <div class="form-group row">
                    <label for="id_gedung" class="col-xs-3 col-form-label">id gedung <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_gedung" type="text" class="form-control" id="id_gedung" placeholder="id gedung" value="<?= $item['id_gedung'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_gedung" class="col-xs-3 col-form-label">nama gedung <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_gedung" type="text" class="form-control" id="nama_gedung" placeholder="nama gedung" value="<?= $item['nama_gedung'] ?>">
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
<!-- /Form Gedung-->
@endsection