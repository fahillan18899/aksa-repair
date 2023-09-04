@extends('layouts.admin')

@section('content')
<?php
$alert = "";

if (isset($_POST['tambah_opname'])) {
  $stock = $_POST['jumlah_masuk'] - $_POST['jumlah_keluar'];
  $sql_tambah = "INSERT INTO stock_opname (`id`, `nama`, `jenis`, `lokasi_pemakaian`, `jumlah_masuk`, `jumlah_keluar`, `stock`, `kode_rs`) VALUES ('{$_POST['id']}', '{$_POST['nama']}', '{$_POST['jenis']}','{$_POST['lokasi_pemakaian']}','{$_POST['jumlah_masuk']}','{$_POST['jumlah_keluar']}','$stock','{$_POST['kodeRs']}')";
  mysqli_query($db, $sql_tambah);

  $alert = "tambah";
}

if (isset($_POST['update_opname'])) {
  $stock = $_POST['jumlah_masuk'] - $_POST['jumlah_keluar'];
  $sql_ubah = "UPDATE stock_opname SET 
    nama='{$_POST['nama']}', 
    jenis='{$_POST['jenis']}', 
    lokasi_pemakaian='{$_POST['lokasi_pemakaian']}', 
    jumlah_masuk='{$_POST['jumlah_masuk']}', 
    stock='$stock', 
    jumlah_keluar='{$_POST['jumlah_keluar']}'
    WHERE id='{$_POST['id']}'";
  mysqli_query($db, $sql_ubah);

  $alert = "ubah";
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Stock Opname</h1>
        <small>Tabel Stock Opname</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-success" href="{{ route('stock_opname.create') }}"><i class="fa fa-plus"></i> Tambah Stock Opname </a>
            </div>
          </div>

          <div class="panel-body panel-form">
            <?php if ($alert == "tambah") { ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5> Berhasil</h5>
                Data sudah ditambahkan.
              </div>
            <?php } else if ($alert == "hapus") { ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5> Berhasil</h5>
                Data sudah dihapus.
              </div>
            <?php } else if ($alert == "ubah") { ?>
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5> Berhasil</h5>
                Data sudah diubah.
              </div>
            <?php } ?>
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama SparePart</th>
                      <th scope="col">Type</th>
                      <th scope="col">Lokasi Pemakaian</th>
                      <th scope="col">Jumlah Masuk</th>
                      <th scope="col">Jumlah Keluar</th>
                      <th scope="col">Tanggal Masuk</th>
                      <th scope="col">Tanggal Keluar</th>
                      <th scope="col">Total</th>
                      <th scope="col">Tombol_Aksi_Table</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->type }}</td>
                      <td>{{ $item->lokasi_pemakaian }}</td>
                      <td>{{ $item->jumlah_masuk}}</td>
                      <td>{{ $item->jumlah_keluar}}</td>
                      <td>{{ $item->tanggal_masuk}}</td>
                      <td>{{ $item->tanggal_keluar}}</td>
                      <td>{{ $item->stock}}</td>
                      <td>
                        <a href="{{ route('stock_opname.edit', $item->id) }}" class="btn btn-info"> <i class="fa fa-edit  "></i> </a>
                        <form action="{{ route('stock_opname.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
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


  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection