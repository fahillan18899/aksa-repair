@extends('layouts.teknisi')

@section('content')
@section('title', 'Dokumentasi Kalibrasi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
      <div class="header-title">
        <h1>Dokumentasi Kalibrasi</h1>
        <small>Daftar Dokumentasi Kalibrasi</small>
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
    <!--Form Sperpart-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>Form Dokumentasi Kalibrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.post.dokumen') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi</label>
                    <div class="col-xs-9">
                      <input name="instansi" id="instansi" type="text" class="form-control" placeholder="Isi nama Instansi" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="marketing" class="col-xs-3 col-form-label">Marketing</label>
                    <div class="col-xs-9">
                      <input name="marketing" id="marketing" class="form-control" type="text" placeholder="Isi nama Marketing" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah" class="col-xs-3 form-label">Jumlah Alat</label>
                    <div class="col-xs-9">
                      <input name="jumlah" id="jumlah" class="form-control" type="text" placeholder="isi jumlah alat">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="document" class="col-xs-3 form-label">Dokumen Kalibrasi</label>
                    <div class="col-xs-9">
                      <input name="document" id="document" class="form-control" type="file" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Form Sperpart end-->
    <!-- Card tabel -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Daftar Informasi Sperpart</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>Instansi</th>
                      <th>Marketing</th>
                      <th>Jumlah Alat</th>
                      <th>Dokument</th>
                      <th>Tombol Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($item as $items)
                    <tr>
                      <td>{{ $items->instansi }}</td>
                      <td>{{ $items->marketing }}</td>
                      <td>{{ $items->jumlah }}</td>
                      <td><a class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="top" title="View" href="{{ URL::asset('storage/'.$items->document) }}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                      <td>
                        <a href="{{ route('teknisi.edit.dokumen', $items->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <form action="{{ route('teknisi.delete.dokumen', $items->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus">
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
    <!-- Card tabel -->
  </div>
</div> <!-- /.content -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection