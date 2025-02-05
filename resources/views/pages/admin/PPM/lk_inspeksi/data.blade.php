@extends('layouts.admin')

@section('content')
@section('title', 'Lembar Kerja Inspeksi')

<!-- Content Wrapper. Contains page content -->
<style>
  input.form-check-input {
    width: 30px;
    height: 30px;
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

                <!-- TABEL -->
                <table id="printContent" class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th colspan="9" class="text-center">FORM MONITORING</th>
                    </tr>
                    <tr>
                      <th rowspan="2" align="center">No</th>
                      <th style="width: 20%;" rowspan="2" align="center" class="text-center">Bulan_/_Tahun</th>
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
                    <tr class="text-center">
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
                  <thead>
                    <tr>
                      <th></th>
                      <th colspan="3">
                        
                      </th>
                      <th colspan="4">
                        
                      </th>
                      <th></th>
                    </tr>
                    <tr>
                      <th colspan="4">
                        <h5 class="text-center">Paraf Elektromedis</h5>
                      </th>
                      <th colspan="5">
                        <h5 class="text-center">Paraf Penanggung jawab / ruangan</h5>
                      </th>
                    </tr>
                    <tr>
                      <th colspan="4">
                        <!-- Tandatangan -->
                        <img style="margin-left: 100px;" id="ttd_image1" src="" alt="Tanda tangan akan muncul disini" />
                        <!-- Tandatangan N-->
                      </th>
                      <th colspan="5">
                        <!-- Tandatangan -->
                        <img style="margin-left: 100px;" id="ttd_image2" src="" alt="Tanda tangan akan muncul disini" />
                        <!-- Tandatangan N-->
                      </th>
                    </tr>
                  </thead>
                </table>
                <!-- Tombol Print -->
                <button class="btn btn-primary mb-3" onclick="printTableMonitoring()">Print</button>
                <!-- TABEL -->
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <table>
    <tr>
      <!-- ttd 1-->
      <!-- Content -->
        <td>
          <div class="row" style="margin-left: 5px;">
            <div class="col-md-12">
              <h1>E-Signature</h1>
              <p>Tanda tangan Teknisi</p>
            </div>
          </div>
          <div class="row" style="margin-left: 5px;">
            <div class="col-md-12">
              <canvas id="ttd_canvas1" width="150" height="100">
                Get a better browser, bro.
              </canvas>
            </div>
          </div>
          <div class="row" style="margin-left: 5px;">
            <div class="col-md-12">
              <button class="btn btn-primary" id="ttd_submitBtn1">Submit Signature</button>
              <button class="btn btn-default" id="ttd_clearBtn1">Clear Signature</button>
            </div>
          </div>
          <br />
          <div class="row hidden">
            <div class="col-md-12">
              <textarea id="ttd_dataUrl1" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
            </div>
          </div>
          <br />
          <div class="row" style="margin-left: 5px;">
            <div class="col-md-12">
            </div>
          </div>
        </td>
      <!-- ttd 1N-->
      <!-- ttd 2-->
      <!-- Content -->
        <td>
          <div class="row" style="margin-left: 5px;">
            <div class="col-md-12">
              <h1>E-Signature</h1>
              <p>Tanda tangan Pelapor</p>
            </div>
          </div>
          <div class="row" style="margin-left: 5px;">
            <div class="col-md-12">
              <canvas id="ttd_canvas2" width="150" height="100">
                Get a better browser, bro.
              </canvas>
            </div>
          </div>
          <div class="row" style="margin-left: 5px;">
            <div class="col-md-12">
              <button class="btn btn-primary" id="ttd_submitBtn2">Submit Signature</button>
              <button class="btn btn-default" id="ttd_clearBtn2">Clear Signature</button>
            </div>
          </div>
          <br />
          <div class="row hidden">
            <div class="col-md-12">
              <textarea id="ttd_dataUrl2" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
            </div>
          </div>
          <br />
          <div class="row" style="margin-left: 5px;">
            <div class="col-md-12">

            </div>
          </div>
        </td>
      <!-- ttd 2N-->
    </tr>
  </table>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection
@push('addon-script')
<script src="{{ asset('js/lkInspeksi_dataView.js') }}"></script>
@endpush