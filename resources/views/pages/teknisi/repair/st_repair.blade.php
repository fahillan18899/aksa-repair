@extends('layouts.teknisi')

@section('content')
@section('title', 'Surat Terima View')
<style>
  input[readonly] {
    cursor: not-allowed;
  }

  .table-striped {
    width: 100%;
    border-collapse: collapse;
  }

  .table-striped th,
  .table-striped td {
    border: 1px solid black;
    padding: 8px;
  }

  .panel {
    border: 1px solid black;
  }

  #ttd_canvas1 {
    border: 2px dotted rgb(21, 20, 20);
    border-radius: 15px;
    cursor: crosshair;
  }

  #ttd_canvas2 {
    border: 2px dotted rgb(21, 20, 20);
    border-radius: 15px;
    cursor: crosshair;
  }

  #ttd_canvas3 {
    border: 2px dotted rgb(21, 20, 20);
    border-radius: 15px;
    cursor: crosshair;
  }

  .modal-dialog {
    width: 100%;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-content {
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .modal-body {
    flex: 1;
    overflow-y: auto;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>MENU PEMBUATAN SERAH TERIMA ALAT</h1>
        <small>Pembuatan serah terima alat</small>
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
            <h1>SERAH TERIMA ALAT</h1>
          </div>

          <div class="panel-body panel-form" id="print_me">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.post.suratTerima') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <h2>PIHAK PERTAMA</h2>
                  <div class="form-group row">
                    <label for="nama_1" class="col-xs-5 form-label"><b>Nama :</b></label>
                    <div class="col-xs-5">
                      <input name="nama_1" id="nama_1" type="text" class="form-control" placeholder="isi dengan nama pihak pertama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan_1" class="col-xs-5 form-label">Jabatan :</label>
                    <div class="col-xs-5">
                      <input name="jabatan_1" id="jabatan_1" type="text" class="form-control" placeholder="isi dengan jabatan pihak pertama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bagian_1" class="col-xs-5 form-label">Departement / Bagian :</label>
                    <div class="col-xs-5">
                      <input name="bagian_1" id="bagian_1" type="text" class="form-control" placeholder="isi dengan departement dari pihak pertama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kontak_1" class="col-xs-5 form-label">Kontak :</label>
                    <div class="col-xs-5">
                      <input name="kontak_1" id="kontak_1" type="text" class="form-control" placeholder="isi dengan kontak person pihak pertama">
                    </div>
                  </div>
                  <h2>PIHAK KEDUA</h2>
                  <div class="form-group row">
                    <label for="nama_2" class="col-xs-5 form-label">Nama :</label>
                    <div class="col-xs-5">
                      <input name="nama_2" id="nama_2" type="text" class="form-control" placeholder="isi dengan nama pihak kedua">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan_2" class="col-xs-5 form-label">Jabatan :</label>
                    <div class="col-xs-5">
                      <input name="jabatan_2" id="jabatan_2" type="text" class="form-control" placeholder="isi dengan jabatan pihak kedua">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bagian_2" class="col-xs-5 form-label">Departemen / Bagian :</label>
                    <div class="col-xs-5">
                      <input name="bagian_2" id="bagian_2" type="text" class="form-control" placeholder="isi dengan departement dari pihak kedua">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kontak_2" class="col-xs-5 form-label">Kontak :</label>
                    <div class="col-xs-5">
                      <input name="kontak_2" id="konta_2" type="text" class="form-control" placeholder="isi dengan kontak person pihak kedua">
                    </div>
                  </div>
                  <h2>RINCIAN ALAT YANG DISERAHKAN</h2>
                  <table class="table-striped">
                    <thead>
                      <tr>
                        <th class="text-center"><b>Nama alat</b></th>
                        <th class="text-center"><b>Merk / Type</b></th>
                        <th class="text-center"><b>No seri</b></th>
                        <th class="text-center"><b>kondisi</b></th>
                        <th class="tex-center"><b>kelengkapan</b></th>
                        <th class="text-center"><b>jumlah</b></th>
                        <th class="tex-center"><b>keterangan</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input class="form-control" type="text" name="nama_alat[1]" value="{{ $item->nama_alat }}"></td>
                        <td><input class="form-control" type="text" name="merek_type[1]" value="{{ $item->merek }}"></td>
                        <td><input class="form-control" type="text" name="no_seri[1]" value="{{ $item->no_seri }}"></td>
                        <td><input class="form-control" type="text" name="kondisi[1]" value="{{ $item->kerusakan }}"></td>
                        <td><input class="form-control" type="text" name="kelengkapan[1]" placeholder="Kelengkapan"></td>
                        <td><input class="form-control" type="text" name="jumlah[1]"  placeholder="jumlah alat"></td>
                        <td><input class="form-control" type="text" name="keterangan[1]" placeholder="keterangan"></td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <div class="ui buttons">
                        <button class="btn btn-success mb-3">Tambah</button>
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