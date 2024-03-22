@extends('layouts.admin')

@section('title', 'Edit Stock opname')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-drawer"></i></div>
      <div class="header-title">
        <h1>Form</h1>
        <small>Form Stock Opname</small>
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
                <form action="{{ route('stock_opname.update', $item->id) }}" class="form-inner" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="id" value="<?= $item['id'] ?>" />

                  <div class="form-group row">
                    <label for="nama" class="col-xs-3 col-form-label">Nama Sperpart </label>
                    <div class="col-xs-9">
                      <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Sperpart" value="<?= $item['nama'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type SparePart </label>
                    <div class="col-xs-9">
                      <input name="type" type="text" class="form-control" id="type" placeholder="Type Alat" value="<?= $item['type'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_masuk" class="col-xs-3 col-form-label">jumlah masuk </label>
                    <div class="col-xs-9">
                      <input name="jumlah_masuk" class="form-control" type="number" placeholder="jumlah masuk" id="jumlah_masuk" value="<?= $item['jumlah_masuk'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_sekarang" class="col-xs-3 col-form-label">jumlah sekarang </label>
                    <div class="col-xs-9">
                      <input name="jumlah_sekarang" class="form-control" type="number" placeholder="jumlah sekarang" id="jumlah_sekarang" value="<?= $item['jumlah_sekarang'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_keluar" class="col-xs-3 col-form-label">jumlah keluar </label>
                    <div class="col-xs-9">
                      <input name="jumlah_keluar" class="form-control" type="number" placeholder="jumlah keluar" id="jumlah_keluar" value="<?= $item['jumlah_keluar'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_pemakaian" class="col-xs-3 col-form-label">Lokasi Pemakaian </label>
                    <div class="col-xs-9">
                      <input name="lokasi_pemakaian" class="form-control" type="text" placeholder="Lokasi Pemakaian" id="lokasi_pemakaian" value="<?= $item['lokasi_pemakaian'] ?>">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="tanggal_masuk" class="col-xs-3 col-form-label">Tanggal Masuk </label>
                    <div class="col-xs-9">
                      <input name="tanggal_masuk" class="form-control" type="date" placeholder="Tanggal Masuk" id="tanggal_masuk" value="<?= $item['tanggal_masuk'] ?>">
                    </div>
                  </div>

                  <div class=" form-group row">
                    <label for="tanggal_keluar" class="col-xs-3 col-form-label">Tanggal Kelar </label>
                    <div class="col-xs-9">
                      <input name="tanggal_keluar" class="form-control" type="date" placeholder="Tanggal Kelar" id="tanggal_keluar" value="<?= $item['tanggal_keluar'] ?>">
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
              <div class="col-md-3">
                @if($selisih_jumlah_terakhir === null)
                  <h3>tidak ada data selisih terakhir, edit data anda</h3>
                @else
                  <h3>Selisih Jumlah Masuk/Keluar Terakhir</h3>
                  <h1 class="text-center">{{ $selisih_jumlah_terakhir->selisih_jumlah_masuk_keluar_terakhir}}</h1>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection