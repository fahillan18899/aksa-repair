@extends('layouts.teknisi')

@section('content')
@section('title', 'Surat Terima Edit')
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

          <div class="panel-body panel-form">
            <div class="row">
              <img src="{{ url('assets/images/kop_aksa.png') }}" alt="kop" style="width: 300px; margin-left: 600px;">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.update.suratTerima', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <h2>PIHAK PERTAMA</h2>
                  <div class="form-group row">
                    <label for="nama_1" class="col-xs-2 form-label"><b>Nama :</b></label>
                    <div class="col-xs-5">
                      <input name="nama_1" id="nama_1" type="text" class="form-control" value="{{ $item->nama_1 }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan_1" class="col-xs-2 form-label">Jabatan :</label>
                    <div class="col-xs-5">
                      <input name="jabatan_1" id="jabatan_1" type="text" class="form-control" value="{{ $item->jabatan_1 }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bagian_1" class="col-xs-2 form-label">Departement / Bagian :</label>
                    <div class="col-xs-5">
                      <input name="bagian_1" id="bagian_1" type="text" class="form-control" value="{{ $item->bagian_1 }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kontak_1" class="col-xs-2 form-label">Kontak :</label>
                    <div class="col-xs-5">
                      <input name="kontak_1" id="kontak_1" type="text" class="form-control" value="{{ $item->kontak_1 }}">
                    </div>
                  </div>
                  <h2>PIHAK KEDUA</h2>
                  <div class="form-group row">
                    <label for="nama_2" class="col-xs-2 form-label">Nama :</label>
                    <div class="col-xs-5">
                      <input name="nama_2" id="nama_2" type="text" class="form-control" value="{{ $item->nama_2 }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan_2" class="col-xs-2 form-label">Jabatan :</label>
                    <div class="col-xs-5">
                      <input name="jabatan_2" id="jabatan_2" type="text" class="form-control" value="{{ $item->jabatan_2 }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bagian_2" class="col-xs-2 form-label">Departemen / Bagian :</label>
                    <div class="col-xs-5">
                      <input name="bagian_2" id="bagian_2" type="text" class="form-control" value="{{ $item->bagian_2 }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kontak_2" class="col-xs-2 form-label">Kontak :</label>
                    <div class="col-xs-5">
                      <input name="kontak_2" id="konta_2" type="text" class="form-control" value="{{ $item->kontak_2 }}">
                    </div>
                  </div>
                  <br>
                  <h2>RINCIAN ALAT YANG DISERAHKAN</h2>
                  <table class="table-striped">
                    <thead>
                      <tr>
                        <th class="text-center"><b>Nama alat</b></th>
                        <th class="text-center"><b>Merk / Type</b></th>
                        <th class="text-center"><b>No seri</b></th>
                        <th class="text-center"><b>kondisi</b></th>
                        <th class="text-center"><b>kelengkapan</b></th>
                        <th class="text-center"><b>jumlah</b></th>
                        <th class="tex-center"><b>keterangan</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($item->nama_alat as $index => $nama)
                      <tr>
                        <td><input name="nama_alat[{{ $index }}]" type="text" class="form-control" value="{{ $nama }}"></td>
                        <td><input name="merek_type[{{ $index }}]" type="text" class="form-control" value="{{ $item->merek_type[$index] ?? '' }}"></td>
                        <td><input name="no_seri[{{ $index }}]" type="text" class="form-control" value="{{ $item->no_seri[$index] ?? '' }}"></td>
                        <td><input name="kondisi[{{ $index }}]" type="text" class="form-control" value="{{ $item->kondisi[$index] ?? '' }}"></td>
                        <td><input name="kelengkapan[{{ $index }}]" type="text" class="form-control" value="{{ $item->kelengkapan[$index] ?? '' }}"></td>
                        <td><input name="jumlah[{{ $index }}]" type="text" class="form-control" value="{{ $item->jumlah[$index] ?? '' }}"></td>
                        <td><input name="keterangan[{{ $index }}]" type="text" class="form-control" value="{{ $item->keterangan[$index] ?? '' }}"></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <br>
                  <div class="row">
                    <div class="col-sm-12">
                      <h2>PERNYATAAN DAN KETENTUAN</h2>
                      <p>1. Kelengkapan yang tertera dengan kondisi yang sebenarnya</p>
                      <p>2. Dari pihak pertama tidak menerima kehilangan alat jikalau alat tersebut tidak tertera</p>
                      <p>3. Dari pihak kedua dapat menagih kepada pihak pertama jikalau ada kehilangan kelengkapan yang sudah tertera pada surat</p>
                    </div>
                  </div><br>
                  <div class="form-group row">
                    <div class="col-xs-6">
                      <table class="table" style="width: 60%;">
                        <thead>
                          <tr>
                            <th class="text-center">Pihak yang menyerahkan,</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td align="center"><img src="{{ url('assets/images/aksa.png') }}" width="30%" alt="Ttd" style="opacity: 0.3;"></td>
                          </tr>
                          <tr>
                            <td align="center"><b><u>.....................</u></b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-xs-6">
                      <table class="table" style="width: 60%; margin-left: 210px">
                        <thead>
                          <tr>
                            <th class="text-center">Pihak yang menerima,</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td align="center"><img src="{{ url('assets/images/aksa.png') }}" width="30%" alt="Ttd" style="opacity: 0.3;"></td>
                          </tr>
                          <tr>
                            <td align="center"><b><u>.....................</u></b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><br>
                  <p>*Catatan: Formulir ini berlaku sebagai bukti sah serah terima alat dan dibuat dalam 2(dua) rangkap,</p>
                  <p>masing masing untk pihak yang menyerahkan dan menerima</p>
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