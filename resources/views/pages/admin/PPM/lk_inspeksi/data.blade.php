@extends('layouts.admin')

@section('content')
@section('title', 'Lembar Kerja Inspeksi')

<!-- Content Wrapper. Contains page content -->
<style>
  input.form-check-input {
    width: 30px;
    height: 30px;
  }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-cogs"></i></div>
      <div class="header-title">
        <h1>Data inspeksi</h1>
        <small>Form Data inspeksi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th rowspan="2" align="center">No</th>
                      <th style="width: 20%;" rowspan="2" align="center" class="text-center">Bulan / Tahun</th>
                      <th style="width: 20%;" rowspan="2" align="center" class="text-center">Lokasi</th>
                      <th style="width: 20%;" rowspan="2" align="center" class="text-center">Nama Alat</th>
                      <th style="width: 20%;" rowspan="2" align="center" class="text-center">No Seri</th>
                      <th style="width: 10%;" align="center" class="text-center">Pemeriksaan Fisik</th>
                      <th style="width: 10%;" align="center" class="text-center">Kelengkapan Alat</th>
                      <th style="width: 10%;" align="center" class="text-center">Fungsi Alat</th>
                      <th scope="col" rowspan="2">Catatan</th>
                    </tr>
                    <tr>
                      <th scope="col">Baik / Rusak</th>
                      <th scope="col">Lengkap / Tidak Lengkap</th>
                      <th scope="col">Baik / Rusak</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($data as $index => $data)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $data->bulan_tahun }}</td>
                      <td>{{ $data->lokasi_alat }}</td>
                      <td>{{ $data->nama_alat }}</td>
                      <td>{{ $data->nomer_seri }}</td>
                      <td>{{ $data->periksa_fisik }}</td>
                      <td>{{ $data->lengkap_alat }}</td>
                      <td>{{ $data->fungsi_alat }}</td>
                      <td>{{ $data->catatan }}</td>
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
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection