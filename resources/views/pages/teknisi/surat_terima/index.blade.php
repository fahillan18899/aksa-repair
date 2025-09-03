@extends('layouts.teknisi')

@section('content')
@section('title', 'Pengerjaan Kalibrasi')
<style>
  input[readonly] {
    cursor: not-allowed;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>Pengerjaan Kalibrasi</h1>
        <small>Pengerjaan Kalibrasi</small>
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
            <div class="row">
              <div class="col-md-4">
              </div>
              <h1>Daftar Pengerjaan Kalibrasi</h1>
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
                        <th>Instansi</th>
                        <th>Jadwal</th>
                        <th>Proses Kalibrasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($item as $items)
                      <tr>
                        <td>{{ $items->instansi }}</td>
                        <td>{{ $items->jadwal }}</td>
                        <td>
                          <form action="{{ route('teknisi.pengerjaan.kalibrasi', $items->id) }}" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-{{ $items->pengerjaan == 0 ? 'danger' : 'success'}}" type="submit">
                              {{ $items->pengerjaan == 0 ? 'Pengerjaan' : 'Selesai' }}
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
@push('addon-script')

@endpush