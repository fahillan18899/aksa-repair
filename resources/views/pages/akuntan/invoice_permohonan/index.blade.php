@extends('layouts.akuntan')

@section('content')
@section('title', 'Permohonan Invoice')
<style>
  input[readonly] {
    cursor: not-allowed;
  }

  .invoice-header {
    position: relative;
  }

  .invoice-bg {
    position: absolute;
    top: 0;
    right: 0;
    width: 250px;
    z-index: 0;
  }

  .invoice-header .form-group,
  .invoice-header label,
  .invoice-header input,
  .invoice-header textarea {
    position: relative;
    z-index: 1;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>MENU PEMBUATAN INVOICE</h1>
        <small>Pembuatan invoice</small>
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
                <h1>Daftar SPH</h1>
              </div>
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
                        <th>Marketing</th>
                        <th>No Surat</th>
                        <th>Instansi</th>
                        <th>Lokasi, Tanggal</th>
                        <th>Status</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($sph as $sphs)
                      <tr>
                        <td>{{ $sphs->user }}</td>
                        <td>{{ $sphs->no_surat }}</td>
                        <td>{{ $sphs->yth }}</td>
                        <td>{{ $sphs->lokasi_tanggal }}</td>
                        <td>
                          <button class="btn btn-sm btn-{{ $sphs->status == 0 ? 'danger' : 'success'}}" type="submit" disabled>
                            {{ $sphs->status == 0 ? 'Belum terinput' : 'Terinput Invoice' }}
                          </button>
                        </td>
                        <td>
                          <a href="{{ route('akuntan.view.invoicePermohonan', $sphs->id) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Buat Invoice">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
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
    <!--Tabel Perbaikan-->
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Daftar Invoice</h1>
            </div>
            <form id="uploadForm" action="{{ route('akuntan.upload.invoicePermohonan') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-sm-3">
                  <input name="invoice" class="form-control" type="file" required>
                </div>
                <div class="col-sm-1">
                  <button id="uploadBtn" class="btn btn-primary btn-sm" type="submit">
                    <i class="fa fa-upload" aria-hidden="true">Upload</i>
                  </button>
                </div>
                <div class="col-sm-1">
                  <a class="btn btn-success" href="{{ route('akuntan.invoiceOld.invoicePermohonan') }}">Document Invoice</a>
                </div>
              </div>
            </form>
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
                        <th>Tanggal</th>
                        <th>Nomer Invoice</th>
                        <th>Nomer Pesanan</th>
                        <th>Status</th>
                        <th>Tombol</th>
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
                          <form action="{{ route('akuntan.status.invoicePermohonan', $items->id) }}" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-{{ $items->status == 0 ? 'success' : 'danger' }}" type="submit">
                              {{ $items->status == 0 ? 'Lunas' : 'Belum Lunas' }}
                            </button>
                          </form>
                        </td>
                        <td>
                          <a href="{{ route('akuntan.invoice.show', $items->id) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="View">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                          </a>
                          <a href="{{ route('akuntan.invoice.edit', $items->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <form action="{{ route('akuntan.invoice.destroy', $items->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash" aria-hidden="true"></i>
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
<script>
    document.getElementById('uploadBtn').addEventListener('click', function () {
    const confirmation = confirm("Pastikan dokumen yang di upload benar");
    if (confirmation) {
      document.getElementById('uploadForm').submit();
    }
  });
</script>
@endpush