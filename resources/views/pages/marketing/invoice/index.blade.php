@extends('layouts.marketing')

@section('content')
@section('title', 'Invoice')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Invoice</h1>
        <small>Daftar Invoice</small>
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
            <h1>Daftar Invoice</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>Instansi</th>
                      <th>Tanggal</th>
                      <th>Nomer Invoice</th>
                      <th>Nomer Pesanan</th>
                      <th>Status</th>
                      <th>Tombol Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($item as $items)
                      <tr>
                        <td>{{ $items->yth }}</td>
                        <td>{{ $items->tgl_invoice }}</td>
                        <td>{{ $items->no_invoice }}</td>
                        <td>{{ $items->no_pesanan }}</td>
                        <td>
                          <button class="btn btn-sm btn-{{ $items->status == 0 ? 'success' : 'danger' }}" type="submit" disabled>
                            {{ $items->status == 0 ? 'Lunas' : 'Belum Lunas' }}
                          </button>
                        </td>
                        <td>
                          <a href="{{ route('marketing.view.invoice', $items->id) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="View">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                          </a>
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
@endsection