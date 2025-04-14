@extends('layouts.admin')

@section('content')
@section('title', 'Laporan Kegiatan')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-note2"></i></div>
      <div class="header-title">
        <h1>Laporan Kegiatan</h1>
        <small>Tabel Laporan Kegiatan</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!--Tabel Perbaikan aset regis-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">

            <div class="panel-heading no-print">
              <div class="">
                <h1>History Tabel Perbaikan Aset Teregistrasi</h1>
              </div>
            </div>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                    <!-- /.table-responsive -->
                    <table class="datatable table table-striped table-bordered" style="width:100%">
                      <thead class="table-light">
                        <th scope="col">Id_Perbaikan</th>
                        <th scope="col">Nama_Alat</th>
                        <th scope="col">Merek_Alat</th>
                        <th scope="col">Type_Alat</th>
                        <th scope="col">Serial_Number</th>
                        <th scope="col">Lokasi_Alat</th>
                      </thead>
                      <tbody>
                        @forelse ($regsitrasi as $index => $item)
                        <tr class="odd gradeX">
                          <td>{{ $item->id_perbaikan_reg }}</td>
                          <td>{{ $item->nama_alat_reg }}</td>
                          <td>{{ $item->merek_alat_reg }}</td>
                          <td>{{ $item->type_alat_reg }}</td>
                          <td>{{ $item->serial_number_reg }}</td>
                          <td>{{ $item->lokasi_alat_reg }}</td>
                        </tr>
                        @empty
                        @endforelse
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--Tabel Perbaikan aset regis end-->

    <!--Tabel Perbaikan aset unregis -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">
            <div class="panel-heading no-print">
              <div class="">
                <h1>History Tabel Perbaikan Aset Unregistrasi</h1>
              </div>
            </div>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                    <!-- /.table-responsive -->
                    <table class="datatable table table-striped table-bordered" style="width:100%">
                      <thead class="table-light">
                        <th scope="col">Id_Perbaikan</th>
                        <th scope="col">Nama_Alat</th>
                        <th scope="col">Merek_Alat</th>
                        <th scope="col">Type_Alat</th>
                        <th scope="col">Serial_Number</th>
                        <th scope="col">Lokasi_Alat</th>
                      </thead>
                      <tbody>
                        @forelse ($unregsitrasi as $index => $item)
                        <tr>
                          <td>{{ $item->id_perbaikan_un }}</td>
                          <td>{{ $item->nama_alat_un }}</td>
                          <td>{{ $item->merek_alat_un }}</td>
                          <td>{{ $item->type_alat_un }}</td>
                          <td>{{ $item->serial_number_un }}</td>
                          <td>{{ $item->lokasi_alat_un  }}</td>
                        </tr>
                        @empty
                        @endforelse
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tabel Perbaikan aset unregis end-->

    <!--Tabel Pemeliharaan -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">
            <div class="panel-heading no-print">
              <div class="">
                <h1>History Tabel Pemeliharaan Aset Teregistrasi</h1>
              </div>
            </div>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                    <!--TABEL-->
                    <table class="datatable table table-striped table-bordered" id="scollDatatable" style="width:100%">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Tanggal Pemeliharaan</th>
                          <th scope="col">Id Aset</th>
                          <th scope="col">Nama Alat</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Tipe</th>
                          <th scope="col">Serial Number</th>
                          <th scope="col">Ruangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($lembarpemeliharaan as $index => $item)
                        <tr>
                          <td> {{ $index + 1 }}</td>
                          <td>{{ $item->tanggal }}</td>
                          <td>{{ $item->id_aset }}</td>
                          <td>{{ $item->nama_alat }}</td>
                          <td>{{ $item->merek }}</td>
                          <td>{{ $item->tipe }}</td>
                          <td>{{ $item->serial_number }}</td>
                          <td>{{ $item->ruangan }}</td>
                        </tr>
                        @empty
                        @endforelse
                      </tbody>
                    </table>
                    <!--TABEL-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tabel Pemeliharaan-->
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection