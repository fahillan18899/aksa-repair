@extends('layouts.admin')

@section('content')
@section('title', 'Data Kerusakan')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-gift"></i></div>
      <div class="header-title">
        <h1>Data Kerusakan</h1>
        <small>Tabel Data Kerusakan</small>
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
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col" class="" >No</th>
                      <th scope="col" class="" >Id Aset</th>
                      <th scope="col" class="" >Id Perbaikan</th>
                      <th scope="col" class="" >Nama Alat</th>
                      <th scope="col" class="" >Merek</th>
                      <th scope="col" class="" >Type</th>
                      <th scope="col" class="" >Serial Number</th>
                      <th scope="col" class="" >Lokasi</th>
                      <th scope="col" class="" >Kerusakan Alat</th>
                      <th scope="col" class="" >Korektif</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($itemPerbaikan as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $item['id_aset_reg'] }}</td>
                      <td>{{ $item->id_perbaikan_reg }}</td>
                      <td>{{ $item->nama_alat_reg }}</td>
                      <td>{{ $item->merek_alat_reg }}</td>
                      <td>{{ $item->type_alat_reg }}</td>
                      <td>{{ $item->serial_number_reg }}</td>
                      <td>{{ $item->lokasi_alat_reg }}</td>
                      <td>{{ $item->keluhan_dari_alat_reg }}</td>
                      <td>{{ $item->korektif_reg }}</td>
                    </tr>
                    @endforeach
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