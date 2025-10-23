@extends('layouts.teknisi')

@section('content')
@section('title', 'Berita Acara')
<style>
  .table-striped {
    width: 100%;
    border-collapse: collapse;
  }

  .table-striped th,
  .table-striped td {
    border: 2px solid black;
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
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Berita Acara</h1>
        <small>Daftar Berita Acara</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!-- content -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>BERITA ACARA BEKERJAAN</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-sm-12">
                <form action="{{ route('teknisi.ba.update', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <!-- Berita Acara -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b style="color: blue;">No.Berita Acara</b></td>
                        <td class="text-center"><input name="ba[1]" id="" type="text" class="form-control" value="{{ $item->ba[1] ?? '-' }}"></td>
                        <td class="text-center" width="20%"><b>No.Urut dari</b></td>
                        <td class="text-center"><input name="ba[2]" id="" type="text" class="form-control" value="{{ $item->ba[2] ?? '-' }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Tanggal BA</b></td>
                        <td class="text-center"><input name="ba[3]" id="" type="date" class="form-control" value="{{ $item->ba[3] ?? '-' }}"></td>
                        <td class="text-center" width="20%"><b>No.Referensi</b></td>
                        <td class="text-center"><input name="ba[4]" id="" type="text" class="form-control" value="{{ $item->ba[4] ?? '-' }}"></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Berita Acara -->
                  <!-- Rs -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b style="color: blue;">Nama Instansi</b></td>
                        <td class="text-center" colspan="3"><input name="rs[1]" id="" type="text" class="form-control" value="{{ $item->rs[1] ?? '-' }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" rowspan="3" width="20%"><b>Alamat</b></td>
                        <td class="text-center" rowspan="3"><input name="rs[2]" id="" type="text" class="form-control" value="{{ $item->rs[2] ?? '-' }}"></td>
                        <td class="text-center" width="20%"><b>Jenis Instansi</b></td>
                        <td class="text-center"><input name="rs[3]" id="" type="text" class="form-control" value="{{ $item->rs[3] ?? '-' }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Telepon</b></td>
                        <td class="text-center"><input name="rs[4]" id="" type="text" class="form-control" value="{{ $item->rs[4] ?? '-' }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Email</b></td>
                        <td class="text-center"><input name="rs[5]" id="" type="text" class="form-control" value="{{ $item->rs[5] ?? '-' }}"></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Rs -->
                  <!-- Kontak -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b style="color: blue;">Nama Kontak</b></td>
                        <td class="text-center" colspan="3"><input name="kontak[1]" id="" type="text" class="form-control" value="{{ $item->kontak[1] ?? '-' }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Bagian</b></td>
                        <td class="text-center"><input name="kontak[2]" id="" type="text" class="form-control" value="{{ $item->kontak[2] ?? '-' }}"></td>
                        <td class="text-center" width="20%"><b>No.HP</b></td>
                        <td class="text-center"><input name="kontak[3]" id="" type="text" class="form-control" value="{{ $item->kontak[3] ?? '-' }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Jabatan</b></td>
                        <td class="text-center"><input name="kontak[4]" id="" type="text" class="form-control" value="{{ $item->kontak[4] ?? '-' }}"></td>
                        <td class="text-center" width="20%"><b>Email</b></td>
                        <td class="text-center"><input name="kontak[5]" id="" type="text" class="form-control" value="{{ $item->kontak[5] ?? '-' }}"></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Kontak -->
                  <!-- Alat -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b style="color: blue;">Nama Alat</b></td>
                        <td class="text-center" colspan="3"><input name="alat[1]" id="" type="text" class="form-control" value="{{ $item->alat[1] ?? '-' }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Merk</b></td>
                        <td class="text-center"><input name="alat[2]" id="" type="text" class="form-control" value="{{ $item->alat[2] ?? '-' }}"></td>
                        <td class="text-center" width="20%"><b>Lokasi</b></td>
                        <td class="text-center"><input name="alat[3]" id="" type="text" class="form-control" value="{{ $item->alat[3] ?? '-' }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Tipe</b></td>
                        <td class="text-center"><input name="alat[4]" id="" type="text" class="form-control" value="{{ $item->alat[4] ?? '-' }}"></td>
                        <td class="text-center" width="20%"><b>Tahun</b></td>
                        <td class="text-center"><input name="alat[5]" id="" type="text" class="form-control" value="{{ $item->alat[5] ?? '-' }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>No.Seri</b></td>
                        <td class="text-center"><input name="alat[6]" id="" type="text" class="form-control" value="{{ $item->alat[6] ?? '-' }}"></td>
                        <td class="text-center" width="20%"><b>Vendor</b></td>
                        <td class="text-center"><input name="alat[7]" id="" type="text" class="form-control" value="{{ $item->alat[7] ?? '-' }}"></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Alat -->
                  <!-- Jenis -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Jenis Panggilan</b></td>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Jenis Layanan</b></td>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Lokasi Pekerjaan</b></td>
                      </tr>
                      <tr>
                        <td class="text-center"><input name="jenis[1]" id="" type="checkbox" class="form-control" value="Ya"></td>
                        <td class="text-center" width="15%"><b>Kontrak Servis/PPM</b></td>
                        <td class="text-center"><input name="jenis[2]" id="" type="checkbox" class="form-control" value="Ya"></td>
                        <td class="text-center" width="15%"><b>Pemeliharaan / Perbaikan</b></td>
                        <td class="text-center"><input name="jenis[3]" id="" type="checkbox" class="form-control" value="Ya"></td>
                        <td class="text-center" width="15%"><b>di tempat instansi</b></td>
                      </tr>
                      <tr>
                        <td class="text-center"><input name="jenis[4]" id="" type="checkbox" class="form-control" value="Ya"></td>
                        <td class="text-center" width="15%"><b>Panggilan (on call)</b></td>
                        <td class="text-center"><input name="jenis[5]" id="" type="checkbox" class="form-control" value="Ya"></td>
                        <td class="text-center" width="15%"><b>Instalasi / Uji Fungsi</b></td>
                        <td class="text-center"><input name="jenis[6]" id="" type="checkbox" class="form-control" value="Ya"></td>
                        <td class="text-center" width="15%"><b>di Workshop kantor</b></td>
                      </tr>
                      <tr>
                        <td class="text-center"><input name="jenis[7]" id="" type="checkbox" class="form-control" value="Ya"></td>
                        <td class="text-center" width="15%"><b>Garansi</b></td>
                        <td class="text-center"><input name="jenis[8]" id="" type="checkbox" class="form-control" value="Ya"></td>
                        <td class="text-center" width="15%"><b>Kalibrasi</b></td>
                        <td class="text-center"><input name="jenis[9]" id="" type="checkbox" class="form-control" value="Ya"></td>
                        <td class="text-center" width="15%"><b>Pihak ke-3</b></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Jenis -->
                  <!-- SKC -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td colspan="4" class="text-center" width="20%"><b style="color: blue;">SKC</b></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="15%"><b>Ya</b></td>
                        <td class="text-center"><input name="skc[1]" id="" type="checkbox" class="form-control" value="{{ $item->skc[1] ?? '-' }}"></td>
                        <td class="text-center" width="15%"><b>Tidak</b></td>
                        <td class="text-center"><input name="skc[2]" id="" type="checkbox" class="form-control" value="{{ $item->skc[2] ?? '-' }}"></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- SKC -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b>Keluhan / Kondisi Sekarang</b></td>
                      </tr>
                      <tr>
                        <td><textarea name="keluhan" id="keluhan" type="text" class="form-control">{{ $item->keluhan }}</textarea></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b>Aksi / Tindakan</b></td>
                      </tr>
                      <tr>
                        <td><textarea name="aksi" id="aksi" type="text" class="form-control">{{ $item->aksi }}</textarea></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b>Hasil / Kondisi Akhir</b></td>
                      </tr>
                      <tr>
                        <td><textarea name="hasil" id="hasil" type="text" class="form-control">{{ $item->hasil }}</textarea></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" colspan="2"><img src="{{ url('assets/images/aksa.png') }}" width="10%" alt="Ttd" style="opacity:  0.3;"></td>
                        <td class="text-center" colspan="2"><img src="{{ url('assets/images/aksa.png') }}" width="10%" alt="Ttd" style="opacity:  0.3;"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>PJ ALAT / RUANGAN</b></td>
                        <td class="text-center"><input name="pj" id="pj" type="text" class="form-control" value="{{ $item->pj }}"></td>
                        <td class="text-center" width="20%"><b>TEKNISI AJS</b></td>
                        <td class="text-center"><input name="teknisi" id="teknisi" type="text" class="form-control" value="{{ $item->teknisi }}"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>TANGGAL</b></td>
                        <td class="text-center"><input name="tanggal_1" id="tanggal_1" type="date" class="form-control"></td>
                        <td class="text-center" width="20%"><b>TANGGAL</b></td>
                        <td class="text-center"><input name="tanggal_2" id="tanggal_2" type="date" class="form-control"></td>
                      </tr>
                    </tbody>
                  </table><br>

                  <div class="form-group row">
                    <div class="col-sm-3 col-sm-6">
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
  </div>
</div> <!-- /.content -->

@endsection