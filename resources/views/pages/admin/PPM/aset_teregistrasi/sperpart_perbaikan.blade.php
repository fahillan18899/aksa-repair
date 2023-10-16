@extends('layouts.admin')

@section('content')
@section('title', 'Stock Opname')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-drawer"></i></div>
      <div class="header-title">
        <h1>History Perbaikan</h1>
        <small>Tabel History</small>
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
            <div class="btn-group">
              <a class="btn btn-success" href="{{ route('aset_teregistrasi.index') }}"><i class="fa fa-plus"></i> Tambah Perbaikan Teregistrasi </a>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
    <table class="datatable table table-striped table-bordered" style="width:100%">
      <thead class="table-light">
        <th scope="col">No</th>
        <th scope="col">Id_Perbaikan</th>
        <th scope="col">ID_Aset</th>
        <th scope="col">Tanggal_Perbaikan</th>
        <th scope="col">Nama_Alat</th>
        
        <th scope="col">suku Cadang</th>
        <th scope="col">volume</th>
        <th scope="col">Harga Satuan</th>
        <th scope="col">Jumlah Harga</th>
        
      </thead>
      <tbody>
        @forelse ($items as $index => $item)
        <tr class="odd gradeX">
          <td><?php echo $index  + 1 ?></td>
          <td><?php echo $item['id_perbaikan_reg'] ?></td>
          <td><?php echo $item['id_aset_reg'] ?></td>
          <td><?php echo $item['tanggal_perbaikan_reg'] ?></td>
          <td><?php echo $item['nama_alat_reg'] ?></td>
          <td><?php echo $item['suku_cadang'] ?></td>
          <td><?php echo $item['volume'] ?></td>
          <td><?php echo $item['harga_satuan'] ?></td>
          <td><?php echo $item['jumlah_harga'] ?></td>
        </tr>

        @empty
        <tr>
          <td class="text-center" colspan="7">Data Kosong</td>
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