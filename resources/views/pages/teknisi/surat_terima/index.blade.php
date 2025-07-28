@extends('layouts.teknisi')

@section('content')
@section('title', 'Surat Terima')
<style>
  input[readonly] {
    cursor: not-allowed;
  }

  .modal-body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    /* Pastikan modal body penuh */
  }

  .modal-dialog2 {
    width: 100%;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-content2 {
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .modal-body2 {
    flex: 1;
    overflow-y: auto;
    color: black;
    background-color: white;
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
              <img src="{{ url('assets/images/kop_aksa.png') }}" alt="kop" style="width: 250px; margin-left: 700px;">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.post.suratTerima') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <h2>PIHAK PERTAMA</h2>
                  <div class="form-group row">
                    <label for="nama_1" class="col-xs-2 form-label"><b>Nama :</b></label>
                    <div class="col-xs-5">
                      <input name="nama_1" id="nama_1" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan_1" class="col-xs-2 form-label">Jabatan</label>
                    <div class="col-xs-5">
                      <input name="jabatan_1" id="jabatan_1" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bagian_1" class="col-xs-2 form-label">Departement / Bagian</label>
                    <div class="col-xs-5">
                      <input name="bagian_1" id="bagian_1" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kontak_1" class="col-xs-2 form-label">Kontak</label>
                    <div class="col-xs-5">
                      <input name="kontak_1" id="kontak_1" type="text" class="form-control">
                    </div>
                  </div>
                  <h2>PIHAK KEDUA</h2>
                  <div class="form-group row">
                    <label for="nama_2" class="col-xs-2 form-label">Nama</label>
                    <div class="col-xs-5">
                      <input name="nama_2" id="nama_2" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan_2" class="col-xs-2 form-label">Jabatan</label>
                    <div class="col-xs-5">
                      <input name="jabatan_2" id="jabatan_2" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bagian_2" class="col-xs-2 form-label">Departemen / Bagian</label>
                    <div class="col-xs-5">
                      <input name="bagian_2" id="bagian_2" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kontak_2" class="col-xs-2 form-label">Kontak</label>
                    <div class="col-xs-5">
                      <input name="kontak_2" id="konta_2" type="text" class="form-control">
                    </div>
                  </div>
                  <a class="btn btn-primary" id="add" style="margin-bottom: 5px;">Tambah Alat</a>
                  <h2>RINCIAN ALAT YANG DISERAHKAN</h2>
                  <table class="table table-striped table-bordered" id="dinamic">
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
                      <!-- DATA DINAMIS -->
                    </tbody>
                  </table>

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
                      <table class="table" style="width: 60%; margin-left: 300px">
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
                        <button class="ui positive button">Tambah</button>
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
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-md-5">
              </div>
              <h1>Daftar SPH</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Bagian</th>
                        <th>Kontak</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($item as $items)
                      <tr>
                        <td>{{ $items->nama_2 }}</td>
                        <td>{{ $items->jabatan_2 }}</td>
                        <td>{{ $items->bagian_2 }}</td>
                        <td>{{ $items->kontak_2 }}</td>
                        <td>
                          <a href="{{ route('teknisi.view.suratTerima', $items->id) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="View">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                          </a>
                          <a href="{{ route('teknisi.edit.suratTerima', $items->id) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <form action="{{ route('teknisi.delete.suratTerima', $items->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @empty
                      @endforelse
                    </tbody>
                  </table>
                  <!--TABEL-->
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tabel Perbaikan-->
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection
@push('addon-script')

<script>
  $(document).ready(function() {
    let row = 1; //Menyimpan jumlah baris

    //Fungsi menambah baris
    $("#add").click(function() {
      let newRow =
        `
      <tr>
        <td><input name="nama_alat[${row}]" type="text" class="form-control" placeholder="isi nama alat"></td>
        <td><input name="merek_type[${row}]" type="text" class="form-control" placeholder="keterangan perbaikan"></td>
        <td><input name="no_seri[${row}]" type="text" class="form-control" placeholder="no seri"></td>
        <td><input name="kondisi[${row}]" type="text" class="form-control" placeholder="kondisi alat"></td>
        <td><input name="kelengkapan[${row}]" type="text" class="form-control" placeholder="kelengkapan"></td>
        <td><input name="jumlah[${row}]" type="text" class="form-control" placeholder="jumlah alat"></td>
        <td><input name="keterangan[${row}]" type="text" class="form-control" placeholder="keterangan alat"></td>
      </tr>
      `;

      //Menambah baris baru ke tbody
      $("#dinamic tbody").append(newRow);
      row++;
    });

  })
</script>

@endpush