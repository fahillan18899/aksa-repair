@extends('layouts.admin')

@section('content')
@section('title', 'Edit Rekap')
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
        <h1>MENU EDIT REKAP</h1>
        <small>Edit Rekap</small>
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
            <h1>Edit Rekap</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('rekap.update', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                    <label for="tanggal" class="col-xs-3 col-form-label">Tanggal<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal" type="date" class="form-control" value="{{ $item->tanggal }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="marketing" class="col-xs-3 col-form-label">instansi</label>
                    <div class="col-xs-9">
                      <input name="marketing" type="text" class="form-control" value="{{ $item->marketing }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">instansi</label>
                    <div class="col-xs-9">
                      <input name="instansi" type="text" class="form-control" value="{{ $item->instansi }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="akomodasi" class="col-xs-3 col-form-label">Akomodasi</label>
                    <div class="col-xs-9">
                      <input name="akomodasi" type="text" class="form-control" value="{{ $item->akomodasi }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="sperpart" class="col-xs-3 col-form-label">Sperpart</label>
                    <div class="col-xs-9">
                      <input name="sperpart" type="text" class="form-control" value="{{ $item->sperpart }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="sph" class="col-xs-3 col-form-label">SPH</label>
                    <div class="col-xs-9">
                      <input name="sph" type="text" class="form-control" value="{{ $item->sph }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="invoice" class="col-xs-3 col-form-label">Invoice</label>
                    <div class="col-xs-9">
                      <input name="invoice" type="text" class="form-control" value="{{ $item->invoice }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nominal" class="col-xs-3 col-form-label">Nominal</label>
                    <div class="col-xs-9">
                      <input name="nominal" type="text" class="form-control" value="{{ $item->nominal }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ppn" class="col-xs-3 col-form-label">PPN</label>
                    <div class="col-xs-9">
                      <input name="ppn" type="text" class="form-control" value="{{ $item->ppn }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pph3" class="col-xs-3 col-form-label">PPH3</label>
                    <div class="col-xs-9">
                      <input name="pph3" type="text" class="form-control" value="{{ $item->pph3 }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="admin" class="col-xs-3 col-form-label">Admin</label>
                    <div class="col-xs-9">
                      <input name="admin" type="text" class="form-control" value="{{ $item->admin }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="status" class="col-xs-3 col-form-label">Status</label>
                    <div class="col-xs-9">
                      <input name="status" type="text" class="form-control" value="{{ $item->status }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keuntungan" class="col-xs-3 col-form-label">Keuntungan</label>
                    <div class="col-xs-9">
                      <input name="keuntungan" type="text" class="form-control" value="{{ $item->keuntungan }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ket" class="col-xs-3 col-form-label">Ket</label>
                    <div class="col-xs-9">
                      <input name="ket" type="text" class="form-control" value="{{ $item->ket }}">
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