@extends('layouts.admin')

@section('content')
@section('title', 'Edit Ruangan')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-drawer"></i></div>
      <div class="header-title">
        <h1>Ubah Ruangan</h1>
        <small>Form Ruangan </small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">

    <!--Form Ruangan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Ruangan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('ruangan.update' ,$item->id_ruangan) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <label for="id_ruangan" class="col-xs-3 col-form-label">Id Ruangan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_ruangan" type="text" class="form-control" id="id_ruangan" placeholder="id gedung" value="<?= $item['id_ruangan'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ruangan_alat" class="col-xs-3 col-form-label">nama Ruangan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ruangan_alat" type="text" class="form-control" id="ruangan_alat" placeholder="nama gedung" value="<?= $item['ruangan_alat'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ruangan" class="col-xs-3 col-form-label">Gedung </label>
                    <div class="col-xs-9">
                      <select name="ruangan" class="form-control" id="ruangan">
                        @foreach($gedungs as $gedung)
                        <option value="<?= $gedung['nama_gedung']; ?>"><?= $gedung['nama_gedung']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kepala_ruangan" class="col-xs-3 col-form-label">kepala ruangan </label>
                    <div class="col-xs-9">
                      <select name="kepala_ruangan" class="form-control" id="kepala_ruangan">
                        @foreach($teknisis as $data)
                        <option value="<?= $data['nama_teknisi']; ?>"><?= $data['nama_teknisi']; ?></option>
                        @endforeach
                      </select>
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