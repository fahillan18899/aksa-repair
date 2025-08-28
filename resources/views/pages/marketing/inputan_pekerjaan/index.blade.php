@extends('layouts.marketing')

@section('content')
@section('title', 'Inputan Pekerjaan')
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
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>INPUTAN PEKERJAAN</h1>
        <small>Form Inputan Pekerjaan</small>
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

    <!--Form Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>Form Inputan Pekerjaan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('marketing.post.inputanPekerjaan') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <input class="form-control" type="hidden" name="no_urut">
                  <input class="form-control" type="hidden" name="user" value="{{ Auth::user()->username }}">
                  <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" id="nama_alat" type="text" class="form-control" placeholder="Masukan nama alat" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek" id="merek" type="text" class="form-control" placeholder="Masukan merek alat" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type" id="type" type="text" class="form-control" placeholder="Masukan type alat" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_seri" class="col-xs-3 col-form-label">No Seri <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="no_seri" id="no_seri" type="text" class="form-control" placeholder="Masukan no seri alat" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="instansi" id="instansi" class="form-control" required>
                        <option>Pilih Instansi</option>
                        @foreach($ins as $inss)
                        <option value="{{ $inss->instansi }}">{{ $inss->instansi }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kerusakan" class="col-xs-3 form-lable">Kerusakan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="kerusakan" id="kerusakan" type="text" class="form-control" placeholder="Masukan kerusakan alat" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="foto" class="col-xs-3 col-form-lable">Foto / Video</label>
                    <div class="col-xs-9">
                      <input name="foto" id="foto" type="file" class="form-control">
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
                        <th>No Urut</th>
                        <th>Nama Alat</th>
                        <th>Merek</th>
                        <th>Type</th>
                        <th>No Seri</th>
                        <th>Instansi</th>
                        <th>Kerusakan</th>
                        <th>Foto</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($item as $items)
                      <tr>
                        <td>{{ $items->no_urut }}</td>
                        <td>{{ $items->nama_alat }}</td>
                        <td>{{ $items->merek }}</td>
                        <td>{{ $items->type }}</td>
                        <td>{{ $items->no_seri }}</td>
                        <td>{{ $items->instansi }}</td>
                        <td>{{ $items->kerusakan }}</td>
                        <td>
                          @if($items->foto && file_exists(storage_path('app/public/'.$items->foto)))
                          <a href="{{ URL::asset('storage/'.$items->foto) }}" target="_blank">Download</a>
                          @else
                          <a href="#" onclick="alert('Foto tidak ada'); return false;">Download</a>
                          @endif
                        </td>
                        <td>
                          <a href="{{ route('marketing.edit.inputanPekerjaan', $items->id) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <form action="{{ route('marketing.delete.inputanPekerjaan', $items->id) }}" method="POST" class="d-inline">
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