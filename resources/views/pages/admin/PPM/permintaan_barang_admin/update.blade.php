@extends('layouts.admin')

@section('title', 'Edit Permintaan Barang')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-drawer"></i></div>
      <div class="header-title">
        <h1>Form Edit</h1>
        <small>Form Permintaan Barang</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->




    <!-- content -->
    <div class="row">
      <div class="col-sm-12 ">
        <div class="panel panel-default thumbnail">
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('permintaan_barang_admin.update', $item->id) }}" class="form-inner" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="id" value="<?= $item['id'] ?>" />

                  <div class="form-group row">
                    <label for="nama" class="col-xs-3 col-form-label">Nama </label>
                    <div class="col-xs-9">
                      <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="<?= $item['nama'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek</label>
                    <div class="col-xs-9">
                      <input name="merek" type="text" class="form-control" id="merek" placeholder="Merek" value="<?= $item['merek'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type</label>
                    <div class="col-xs-9">
                      <input name="type" type="text" class="form-control" id="type" placeholder="Type" value="<?= $item['type'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_masuk" class="col-xs-3 col-form-label">jumlah</label>
                    <div class="col-xs-9">
                      <input name="jumlah" class="form-control" type="number" placeholder="jumlah" id="jumlah" value="<?= $item['jumlah'] ?>">
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
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection