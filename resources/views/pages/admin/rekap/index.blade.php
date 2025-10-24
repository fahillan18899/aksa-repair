@extends('layouts.admin')

@section('content')
@section('title', 'Input Data')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Report Rekap Data</h1>
        <small>Daftar Report Rekap Data</small>
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
            <h1>Daftar Report Rekap Data</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Marketing</th>
                      <th>Instansi</th>
                      <th>Akomodasi</th>
                      <th>Sperpart</th>
                      <th>SPH</th>
                      <th>Invoice</th>
                      <th>Nominal</th>
                      <th>PPN</th>
                      <th>PPH3</th>
                      <th>Admin</th>
                      <th>Keuntungan</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($items as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->tanggal }}</td>
                      <td>{{ $item->marketing }}</td>
                      <td>{{ $item->instansi }}</td>
                      <td>{{ $item->akomodasi }}</td>
                      <td>{{ $item->sperpart }}</td>
                      <td>{{ $item->sph }}</td>
                      <td>{{ $item->invoice }}</td>
                      <td>{{ $item->nominal }}</td>
                      <td>{{ $item->ppn }}</td>
                      <td>{{ $item->pph3 }}</td>
                      <td>{{ $item->admin }}</td>
                      <td>{{ $item->status }}</td>
                      <td>{{ $item->keuntungan }}</td>
                      <td>{{ $item->ket }}</td>
                      <td>
                        <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                          <form action="#" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                          </form>
                      </td>
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
  </div>
</div> <!-- /.content -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection