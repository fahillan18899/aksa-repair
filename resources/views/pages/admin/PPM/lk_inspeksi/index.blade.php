@extends('layouts.admin')

@section('content')
@section('title', 'Lembar Kerja Monitoring')

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
        <h1>LK Monitoring</h1>
        <small>Form LK Monitoring</small>
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

          <div class="panel-heading no-print" id="formp1">
            <h1>Form LK Monitoring</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-md-12">
                <button class="ui button" id="addRow">Tambah Colom</button>
                <form action="{{ url('/dashboard/ppm/lk_inspeksi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')

                  <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                  <div class="form-group row">
                    <label for="bulan_tahun" class="col-sm-2 col-form-label">Bulan / Tahun :</label>
                    <div class="col-sm-2">
                      <input name="bulan_tahun" type="text" class="form-control" id="bulan_tahun" placeholder="Bulan / Tahun" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi_alat" class="col-xs-3 col-form-label">Lokasi Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat" class="form-control" id="lokasi_alat">
                        <option value="">Pilih Lokasi Alat</option>
                        @foreach ($states as $key => $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <table class="table table-hover table-bordered" id="dynamicTable" style="width:100%">
                    <thead>
                      <tr>
                        <td rowspan="2" align="center"><b>No</b></td>
                        <td style="width: 20%;" rowspan="2" align="center"><b>Nama Alat</b></td>
                        <td style="width: 20%;" rowspan="2" align="center"><b>No Seri</b></td>
                        <td style="width: 10%;" align="center"><b>Pemeriksaan Fisik</b></td>
                        <td style="width: 10%;" align="center"><b>Kelengkapan Alat</b></td>
                        <td style="width: 10%;" align="center"><b>Fungsi Alat</b></td>
                        <td rowspan="2" align="center"><b>Catatan</b></td>
                      </tr>
                      <tr>
                        <td align="center"><b>Baik / Rusak</b></td>
                        <td align="center"><b>Lengkap / Kurang Lengkap</b></td>
                        <td align="center"><b>Baik / Rusak</b></td>
                      </tr>
                    </thead>
                    <tbody id="optionA">
                      <input name="kode_rs" id="kode_rs" type="hidden" class="form-control" value="{{ Auth::user()->kode_rs }}"></input>
                      <!---->
                      <!---->
                    </tbody>
                  </table>
                  <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->
                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button" type="submit">Save</button>
                        <div class="or"></div>
                        <a class="btn btn-primary" href="/dashboard/ppm/lk_inspeksi/data"> View Data </a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@push('addon-script')
<script src="{{ asset('js/lkInspeksi_index.js') }}"></script>
@endpush
@endsection