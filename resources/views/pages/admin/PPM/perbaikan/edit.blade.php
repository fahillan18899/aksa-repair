@extends('layouts.ppm')

@section('content')
@section('title', 'Dedit Perbaikan')
<style>
  .panel {
    border-radius: 12px;
  }

  .panel-heading h1 {
    margin: 0;
    font-size: 22px;
    font-weight: 600;
  }

  .form-control {
    height: 45px;
    font-size: 14px;
  }

  textarea.form-control {
    height: auto;
  }

  .btn-mobile {
    width: 100%;
    height: 48px;
    font-size: 16px;
    font-weight: 600;
  }

  .input-rounded {
    border-radius: 12px;
    padding: 10px 14px;
    height: 45px;
    font-size: 14px;
    border: 1px solid #ddd;
    box-shadow: none;
    transition: all 0.2s ease-in-out;
}

/* efek saat fokus */
.input-rounded:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 3px rgba(40,167,69,0.15);
    outline: none;
}

/* optional: tombol juga dibikin rounded */
.btn-rounded {
    border-radius: 12px;
}

  @media (max-width: 768px) {

    .content-header {
      text-align: center;
    }

    .header-title h1 {
      font-size: 24px;
    }

    .header-title small {
      font-size: 14px;
    }

    .form-group.row {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      width: 100%;
      margin-bottom: 5px;
      text-align: left;
      font-weight: 600;
    }

    .form-group .col-xs-9,
    .form-group .col-sm-9,
    .form-group .col-md-9 {
      width: 100%;
    }

    .form-group .col-xs-3 {
      width: 100%;
    }

    .panel-body {
      padding: 15px;
    }

    .table {
      font-size: 12px;
    }

    .table img {
      width: 60px !important;
    }
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
    <!--Form Perbaikan-->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print" id="form1">
              <h1>Form Edit Inventaris</h1>
            </div>

            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="{{route('perbaikan.update', $item->id)}}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    @method('PUT')

                      <!-- Nama Alat -->
                      <div class="form-group">
                          <label>Nama Alat <i class="text-danger">*</i></label>
                          <input name="nama_alat" id="nama_alat" type="text" class="form-control input-rounded" value="{{ $item->nama_alat }}" required>
                      </div>

                      <!-- Merek -->
                      <div class="form-group">
                          <label>Merek <i class="text-danger">*</i></label>
                          <input name="merek" id="merek" type="text" class="form-control input-rounded" value="{{ $item->merek }}" required>
                      </div>

                      <!-- Type -->
                      <div class="form-group">
                          <label>Type <i class="text-danger">*</i></label>
                          <input name="type" id="type" type="text" class="form-control input-rounded" value="{{ $item->type }}" required>
                      </div>

                      <!-- No Seri -->
                      <div class="form-group">
                          <label>No Seri <i class="text-danger">*</i></label>
                          <input name="seri" id="seri" type="text" class="form-control input-rounded" value="{{ $item->seri }}" required>
                      </div>

                      <!-- Lokasi -->
                      <div class="form-group">
                          <label>Lokasi <i class="text-danger">*</i></label>
                          <input name="lokasi" id="lokasi" type="text" class="form-control input-rounded" value="{{ $item->lokasi }}" required>
                      </div>

                      <!-- Kepala Ruang -->
                      <div class="form-group">
                          <label>Kepala Ruang <i class="text-danger">*</i></label>
                          <input name="kepala" id="kepala" type="text" class="form-control input-rounded" value="{{ $item->kepala }}" required>
                      </div>

                      <!-- Teknisi -->
                      <div class="form-group">
                        <label>Teknisi</label>
                        <input name="teknisi" id="teknisi" type="text" class="form-control input-rounded" value="{{ $item->teknisi }}" required>
                      </div>

                      <!-- Korektif -->
                      <div class="form-group">
                          <label>Korektif <i class="text-danger">*</i></label>
                          <input name="korektif" id="korektif" type="text" class="form-control input-rounded" value="{{ $item->korektif }}" required>
                      </div>

                      <!-- Catatan -->
                      <div class="form-group">
                          <label>Catatan <i class="text-danger">*</i></label>
                          <input name="catatan" id="catatan" type="text" class="form-control input-rounded" value="{{ $item->catatan }}" required>
                      </div>

                      <!-- Button -->
                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-block btn-mobile btn-rounded">
                              <i class="fa fa-save"></i> Simpan
                          </button>
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
@endsection
