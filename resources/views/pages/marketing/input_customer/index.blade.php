@extends('layouts.marketing')

@section('content')
@section('title', 'Inputan Customer')
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
      <div class="header-icon"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
      <div class="header-title">
        <h1>Input Customer</h1>
        <small>Form Input Customer</small>
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
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <!-- Form -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>Form Inputan Pekerjaan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('marketing.post.inputCs') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <input class="form-control" name="marketing" type="hidden" value="{{ Auth::user()->username }}">
                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="instansi" type="text" class="form-control" placeholder="Masukan nama instansi" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah" class="col-xs-3 col-form-label">Jumlah alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jumlah" type="number" class="form-control" placeholder="Masukan jumlah alat" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="wilayah" class="col-xs-3 col-form-label">Wilayah <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="wilayah" type="text" class="form-control" placeholder="Masukan wilayah / alamat isntansi" required>
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
    <!--Form Perbaikan end-->
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Daftar Inputan Pekerjaan</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!-- TABEL -->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <tr>
                        <th>Marketing</th>
                        <th>Instansi</th>
                        <th>Jumlah</th>
                        <th>Wilayah</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($item as $items)
                      <tr>
                        <td>{{ $items->marketing }}</td>
                        <td>{{ $items->instansi }}</td>
                        <td>{{ $items->jumlah }}</td>
                        <td>{{ $items->wilayah }}</td>
                        <td>
                          <a href="{{ route('marketing.edit.inputCs', $items->id) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <form action="{{ route('marketing.delete.inputCs', $items->id) }}" method="POST" class="d-inline">
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
                  <!-- TABEL -->
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