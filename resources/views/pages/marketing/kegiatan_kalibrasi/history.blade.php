@extends('layouts.marketing')

@section('content')
@section('title', 'Pembuatan SPH')
<style>
  input[readonly] {
    cursor: not-allowed;
  }

  .modal-body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    /* Pastikan modal body penuh */
  }

  .modal-dialog2 {
    width: 100%;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-content2 {
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .modal-body2 {
    flex: 1;
    overflow-y: auto;
    color: black;
    background-color: white;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>MENU PEMBUATAN SPH</h1>
        <small>Pembuatan SPH</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Daftar SPH</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                    <tr>
                      <th>User</th>
                      <th>Tanggal Edit</th>
                      <th>Instansi</th>
                      <th>No Surat</th>
                      <th>Lokasi, Tanggal</th>
                      <th>Tombol</th>
                    </tr>
                    </thead>
                    <tbody>
                      @forelse($item as $items)
                      <tr>
                        <td>{{ $items->user }}</td>
                        <td>{{ $items->created_at->format('d-m-Y') }}</td>
                        <td>{{ $items->yth }}</td>
                        <td>{{ $items->no_surat }}</td>
                        <td>{{ $items->lokasi_tanggal }}</td>
                        <td>
                          <a href="{{ route('marketing.view.sph', $items->id) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="View">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                          </a>
                          <!-- <a href="{{ route('marketing.edit.sph', $items->id) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a> -->
                          <form action="{{ route('marketing.delete.sph', $items->id) }}" method="POST" class="d-inline">
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
    <!--Tabel Perbaikan-->
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection