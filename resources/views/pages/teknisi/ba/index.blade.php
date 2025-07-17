@extends('layouts.teknisi')

@section('content')
@section('title', 'Berita Acara')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Berita Acara</h1>
        <small>Daftar Berita Acara</small>
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
            <form action="{{ route('teknisi.upload.ba') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-sm-3">
                  <input name="ba" class="form-control" type="file" required>
                </div>
                <div class="col-sm-1">
                  <button class="btn btn-primary btn-sm" type="submit">
                    <i class="fa fa-upload" aria-hidden="true">Upload</i>
                  </button>
                </div>
              </div>
            </form>
            <h1>Daftar Berita Acara</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>No</th>
                      <th>Instansi</th>
                      <th>Link Download</th>
                      <th>Tanggal Upload</th>
                      <th>Tombol</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $index => $items)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $items->instansi }}</td>
                      <td><a href="{{ URL::asset('storage/'.$items->path) }}" target="_blank">Download</a></td>
                      <td>{{ $items->created_at->format('d-m-Y') }}</td>
                      <td>
                        <form action="{{ route('teknisi.delete.ba', $items->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-xs btn-danger" data-toggle="tooltip" data-placemnet="top" title="Hapus">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
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