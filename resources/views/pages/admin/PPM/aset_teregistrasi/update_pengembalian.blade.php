@extends('layouts.admin')
@section('title', 'Edit Pengembalian Reg')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>FORM EDIT PENGEMBALIAN REGISTRASI</h1>
        <small>Form Teregistrasi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    <!-- content -->

    <!-- content -->
    <div class="row">
      <div class="col-sm-3">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Pengembalian Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('update_pengembalian.update' ,$item->id_perbaikan_reg) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                    <label for="id_perbaikan_reg" class="col-xs-3 col-form-label">Id Perbaikan</label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="id_perbaikan_reg2" 
                      placeholder="id perbaikan" value="{{ $item->id_perbaikan_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat </label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control" id="nama_alat_reg" 
                      value="{{ $item->nama_alat_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_reg" class="col-xs-3 col-form-label">Merek</label>
                    <div class="col-xs-9">
                      <input name="merek_reg" type="text" class="form-control" id="merek_reg2" 
                      placeholder="merek" value="{{ $item->merek_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tipe_reg" class="col-xs-3 col-form-label">Type</label>
                    <div class="col-xs-9">
                      <input name="tipe_reg" type="text" class="form-control" id="tipe_reg2" 
                      placeholder="Type" value="{{ $item->tipe_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_reg" class="col-xs-3 col-form-label">Serial Number</label>
                    <div class="col-xs-9">
                      <input name="serial_number_reg" type="text" class="form-control" id="serial_number_reg2" 
                      placeholder="serial number" value="{{ $item->serial_number_reg }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_reg" type="text" class="form-control" id="lokasi_alat_reg" 
                      value="{{ $item->lokasi_alat_reg }}" readonly >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penerima_reg" class="col-xs-3 col-form-label">Peneriman</label>
                    <div class="col-xs-9">
                      <input name="penerima_reg" type="text" class="form-control" id="penerima_reg2" 
                      placeholder="penerima" value="{{ $item->penerima_reg }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_perbaikan_reg" class="col-xs-3 col-form-label">Harga Perbaikan</label>
                    <div class="col-xs-9">
                      <input name="harga_perbaikan_reg" type="text" class="form-control" id="harga_perbaikan_reg2" 
                      placeholder="harga perbaikan" value="{{ $item->harga_perbaikan_reg }}">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="penyebab_kerusakan_reg" class="col-xs-3 col-form-label">Penyebab Kerusakan </label>
                    <div class="col-xs-9">
                      <input name="penyebab_kerusakan_reg" type="text" class="form-control" id="penyebab_kerusakan_reg2" 
                      placeholder="Penyebab Kerusakan" value="{{ $item->penyebab_kerusakan_reg }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="solusi_perbaikan_reg" class="col-xs-3 col-form-label">Solusi_Perbaikan </label>
                    <div class="col-xs-9">
                      <input name="solusi_perbaikan_reg" type="text" class="form-control" id="solusi_perbaikan_reg2" 
                      placeholder="Solusi_Perbaikan" value="{{ $item->solusi_perbaikan_reg }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penguji_suku_cadang_reg" class="col-xs-3 col-form-label">Penguji Suku Cadang </label>
                    <div class="col-xs-9">
                      <input name="penguji_suku_cadang_reg" type="text" class="form-control" id="penguji_suku_cadang_reg2" 
                      placeholder="Penguji Suku Cadang" value="{{ $item->penguji_suku_cadang_reg }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hasil_verifikasi_reg" class="col-xs-3 col-form-label">Hasil Verifikasi </label>
                    <div class="col-xs-9">
                      <input name="hasil_verifikasi_reg" type="text" class="form-control" id="hasil_verifikasi_reg2" 
                      placeholder="Hasil_Verifikasi" value="{{ $item->hasil_verifikasi_reg }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hasil_fungsi_reg" class="col-xs-3 col-form-label">Hasil Fungsi</label>
                    <div class="col-xs-9">
                      <input name="hasil_fungsi_reg" type="text" class="form-control" id="hasil_fungsi_reg2" 
                      placeholder="Hasil Fungsi" value="{{ $item->hasil_fungsi_reg }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pengganti_suku_cadang_reg" class="col-xs-3 col-form-label"> Pengganti_Suku_Cadang</label>
                    <div class="col-xs-9">
                      <input name="pengganti_suku_cadang_reg" type="text" class="form-control" id="pengganti_suku_cadang_reg2" 
                      placeholder="Pengganti_Suku_Cadang" value="{{ $item->pengganti_suku_cadang_reg }}">
                    </div>
                  </div>

                  <!-- <div class="form-group row">
                    <label for="Id_Aset_reg" class="col-xs-3 col-form-label">Id Aset</label>
                    <div class="col-xs-9"> -->
                      <input name="id_aset_reg" type="hidden" class="form-control" id="Id_Aset_reg2" 
                      placeholder="Id Aset" value="{{ $item->id_aset_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="tanggal_perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan</label>
                    <div class="col-xs-9"> -->
                      <input name="tanggal_perbaikan_reg" type="hidden" class="form-control" id="tanggal_perbaikan_reg2"
                      placeholder="tanggal perbaikan" value="{{ $item->tanggal_perbaikan_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="tanggal_pengembalian_reg" class="col-xs-3 col-form-label">Tanggal Pengembalian</label>
                    <div class="col-xs-9"> -->
                      <input name="tanggal_pengembalian_reg" type="hidden" class="form-control" id="tanggal_pengembalian_reg2" 
                      placeholder="tanggal pengembalian" value="{{ $item->tanggal_pengembalian_reg }}" readonly>
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="pelapor_reg" class="col-xs-3 col-form-label">Pelapor</label>
                    <div class="col-xs-9"> -->
                      <input name="pelapor_reg" type="hidden" class="form-control" id="pelapor_reg2" 
                      placeholder="Pelapor" value="{{ $item->pelapor_reg }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi1_reg" class="col-xs-3 col-form-label">Teknisi 1</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi1_reg" type="hidden" class="form-control" id="teknisi1_reg" 
                      value="{{ $item->teknisi1_reg }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi2_reg" type="hidden" class="form-control" id="teknisi2_reg"
                      value="{{ $item->teknisi2_reg }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi3_reg" type="hidden" class="form-control" id="teknisi3_reg" 
                      value="{{ $item->teknisi3_reg }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi4_reg" class="col-xs-3 col-form-label">Teknisi 4</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi4_reg" type="hidden" class="form-control" id="teknisi4_reg"
                      value="{{ $item->teknisi4_reg }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="teknisi5_reg" class="col-xs-3 col-form-label">Teknisi 5</label>
                    <div class="col-xs-9"> -->
                      <input name="teknisi5_reg" type="hidden" class="form-control" id="teknisi5_reg"
                      value="{{ $item->teknisi5_reg }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="ka_instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan </label>
                    <div class="col-xs-9"> -->
                      <input name="ka_instalasi_reg" type="hidden" class="form-control" id="ka_instalasi_reg2" 
                      placeholder="Kepala Ruangan" value="{{ $item->ka_instalasi_reg }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sperpart</label>
                    <div class="col-xs-9"> -->
                      <input name="suku_cadang" type="hidden" class="form-control"
                        id="nama_sukucadang2" value="{{ $item->suku_cadang }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart</label>
                    <div class="col-xs-9"> -->
                      <input name="volume" type="hidden" class="form-control" id="volume2"
                        value="{{ $item->volume }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan Sperpart</label>
                    <div class="col-xs-9"> -->
                      <input name="harga_satuan" type="hidden" class="form-control"
                        id="harga_satuan2" value="{{ $item->harga_satuan }}">
                    <!-- </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart</label>
                    <div class="col-xs-9"> -->
                      <input name="jumlah_harga" type="hidden" class="form-control"
                        id="jumlah_harga2" value="{{ $item->jumlah_harga }}">
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
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->

@endsection