@extends('layouts.admin')

@section('content')
@section('title', 'Data Alat Korektif')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-tools"></i></div>
      <div class="header-title">
        <h1>Data Alat Korektif</h1>
        <small>Tabel Data Alat Korektif</small>
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

          <div class="panel-heading no-print">
            <h2>Tabel Alat Perbaikan Teregistrasi</h2>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">Id Perbaikan</th>
                      <th scope="col">Nama Alat</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Type</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Lokasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($perbaikanReg as $perbaikanReg)
                    <tr>
                      <td>{{ $perbaikanReg->id_perbaikan_reg }}</td>
                      <td>{{ $perbaikanReg->nama_alat_reg }}</td>
                      <td>{{ $perbaikanReg->merek_alat_reg }}</td>
                      <td>{{ $perbaikanReg->type_alat_reg }}</td>
                      <td>{{ $perbaikanReg->serial_number_reg}}</td>
                      <td>{{ $perbaikanReg->lokasi_alat_reg }}</td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="10">Data Kosong</td>
                    </tr>
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

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h2>Tabel Alat Perbaikan Unregistrasi</h2>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">Id Perbaikan</th>
                      <th scope="col">Nama Alat</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Type</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Lokasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($perbaikanUn as $perbaikanUn)
                    <tr>
                      <td>{{ $perbaikanUn->id_perbaikan_un }}</td>
                      <td>{{ $perbaikanUn->nama_alat_un }}</td>
                      <td>{{ $perbaikanUn->merek_alat_un }}</td>
                      <td>{{ $perbaikanUn->type_alat_un }}</td>
                      <td>{{ $perbaikanUn->serial_number_un}}</td>
                      <td>{{ $perbaikanUn->lokasi_alat_un }}</td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="10">Data Kosong</td>
                    </tr>
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

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h2>Tabel Alat Registrasi</h2>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">Id Aset</th>
                      <th scope="col">Nama Alat</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Type</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Lokasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($totalAlat as $totalAlat)
                    <tr>
                      <td>{{ $totalAlat->id_aset }}</td>
                      <td>{{ $totalAlat->nama_alat }}</td>
                      <td>{{ $totalAlat->merek }}</td>
                      <td>{{ $totalAlat->type }}</td>
                      <td>{{ $totalAlat->serial_number}}</td>
                      <td>{{ $totalAlat->lokasi_alat }}</td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="10">Data Kosong</td>
                    </tr>
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


</div> <!-- /.content -->
@endsection