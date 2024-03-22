@extends('layouts.admin')

@section('content')
@section('title', 'Permintaan Barang User')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-drawer"></i></div>
      <div class="header-title">
        <h1>Tabel</h1>
        <small> Tabel Permintaan Barang User</small>
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
            <h1>Tabel Permintaan Barang </h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Type Pemakaian</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Tombol_Aksi_Table</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->merek }}</td>
                      <td>{{ $item->type }}</td>
                      <td>{{ $item->jumlah}}</td>
                      <td>
                        <a href="{{ route('permintaan_barang_admin.edit', $item->id) }}" class="btn btn-info  btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit "></i> </a>
                        <form action="{{ route('permintaan_barang_admin.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
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

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection