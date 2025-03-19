@extends('layouts.admin')
@section('title', 'Edit Penghapusan Reg')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>FORM EDIT PENGHAPUSAN REGISTRASI</h1>
        <small>Form Teregistrasi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <div id="demoModeEnable"></div>
    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Penghapusan Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('update_penghapusan.update' ,$item->id_perbaikan_reg) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <label for="id_perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan</label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="id_perbaikan_reg" 
                      placeholder="Id Perbaikan" value="{{ $item->id_perbaikan_reg }}" readonly>
                    </div>
                  </div>

                  <!-- <div class="form-group row">
                    <label for="tanggal_perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan</label>
                    <div class="col-xs-9"> -->
                      <input name="tanggal_perbaikan_reg" type="hidden" class="form-control" id="tanggal_perbaikan_reg3" 
                      placeholder="Tanggal Perbaikan" value="{{ $item->tanggal_perbaikan_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="tanggal_penggudangan_reg" class="col-xs-3 col-form-label">Tanggal Penggudangan</label>
                    <div class="col-xs-9"> -->
                      <input name="tanggal_penggudangan_reg" type="hidden" class="form-control" id="tanggal_penggudangan_reg3" 
                      placeholder="Tanggal Penggudangan" value="{{ $item->tanggal_penggudangan_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat</label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control" id="nama_alat_reg"
                      value="{{ $item->nama_alat_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_alat_reg" class="col-xs-3 col-form-label">Merek Alat</label>
                    <div class="col-xs-9">
                      <input name="merek_alat_reg" type="text" class="form-control" id="merek_alat_reg3" 
                      placeholder="Merek Alat" value="{{ $item->merek_alat_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type_alat_reg" class="col-xs-3 col-form-label">Type Alat</label>
                    <div class="col-xs-9">
                      <input name="type_alat_reg" type="text" class="form-control" id="type_alat_reg3" 
                      placeholder="Type Alat" value="{{ $item->type_alat_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_reg" class="col-xs-3 col-form-label">Serial Number</label>
                    <div class="col-xs-9">
                      <input name="serial_number_reg" type="text" class="form-control" id="serial_number_reg3" 
                      placeholder="Serial Number" value="{{ $item->serial_number_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_reg" type="text" class="form-control" id="lokasi_alat_reg" 
                      value="{{ $item->lokasi_alat_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan_pengguna_reg" class="col-xs-3 col-form-label">Keterangan Pengguna</label>
                    <div class="col-xs-9">
                      <input name="keterangan_pengguna_reg" type="text" class="form-control" id="keterangan_pengguna_reg3" 
                      placeholder="Keterangan Pengguna" value="{{ $item->keterangan_pengguna_reg }}">
                    </div>
                  </div>

                  <!-- <div class="form-group row">
                    <label for="pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9"> -->
                      <input name="pelapor_reg" type="hidden" class="form-control" id="pelapor_reg3" 
                      placeholder="Pelapor" value="{{ $item->pelapor_reg }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi_1_reg" type="hidden" class="form-control" id="teknisi_1_reg" 
                      value="{{ $item->teknisi_1_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi_2_reg" type="hidden" class="form-control" id="teknisi_2_reg" 
                      value="{{ $item->teknisi_2_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi_3_reg" type="hidden" class="form-control" id="teknisi_3_reg" 
                      value="{{ $item->teknisi_3_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi_4_reg" class="col-xs-3 col-form-label">Teknisi 4</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi_4_reg" type="hidden" class="form-control" id="teknisi_4_reg" 
                      value="{{ $item->teknisi_4_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi_5_reg" class="col-xs-3 col-form-label">Teknisi 5</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi_5_reg" type="hidden" class="form-control" id="teknisi_5_reg" 
                      value="{{ $item->teknisi_5_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sperpart</label>
                    <div class="col-xs-9"> -->
                      <input name="suku_cadang" type="hidden" class="form-control"
                        id="nama_sukucadang3" value="{{ $item->suku_cadang }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart </label>
                    <div class="col-xs-9"> -->
                      <input name="volume" type="hidden" class="form-control"
                        id="volume3" value="{{ $item->volume }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan Sperpart</label>
                    <div class="col-xs-9"> -->
                      <input name="harga_satuan" type="hidden" class="form-control"
                        id="harga_satuan3" value="{{ $item->harga_satuan }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart</label>
                    <div class="col-xs-9"> -->
                      <input name="jumlah_harga" type="hidden" class="form-control"
                        id="jumlah_harga3" value="{{ $item->jumlah_harga }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="ka_instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan</label>
                    <div class="col-xs-9"> -->
                      <input name="ka_instalasi_reg" type="hidden" class="form-control" id="ka_instalasi_reg3" 
                      placeholder="Kepala Ruangan" value="{{ $item->ka_instalasi_reg }}">
                    <!-- </div>
                  </div> -->

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Edit</button>
                        <div class="or"></div>
                        <a href="/dashboard/ppm/aset_teregistrasi"><button type="button" class="ui button">Kembali</button></a>
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
  </div>
</div> <!-- /.content -->
@endsection