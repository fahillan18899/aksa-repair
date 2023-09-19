@extends('layouts.admin')

@section('content')
@section('title', 'Edit Teknisi')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-drawer"></i></div>
      <div class="header-title">
        <h1>Ubah Teknisi</h1>
        <small>Form Teknisi </small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">

    <!--Form Teknisi-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Teknisi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi_k.update' , $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <div class="col-xs-9">
                      <input name="id" type="hidden" class="form-control" id="id" placeholder="id gedung" value="<?= $item['id'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_teknisi" class="col-xs-3 col-form-label">nama Teknisi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_teknisi" type="text" class="form-control" id="nama_teknisi" placeholder="nama Teknisi" value="<?= $item['nama_teknisi'] ?>">
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
<!-- /Form Gedung-->@endsection