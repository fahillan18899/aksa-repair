@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Ubah ALat</h1>
        <small>Form ALat </small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">

    <!--Form ALat-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form ALat</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('alat.update' ,$item->id_alat) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <input type="hidden" name="kode_rs" value="RS0001" />

                  <div class="form-group row">
                    <label for="id_alat" class="col-xs-3 col-form-label">id alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_alat" type="text" class="form-control" id="id_alat" placeholder="id gedung" value="<?= $item['id_alat'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">nama gedung <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" type="text" class="form-control" id="nama_alat" placeholder="nama gedung" value="<?= $item['nama_alat'] ?>">
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