@extends('layouts.teknisi')

@section('content')
@section('title', 'Informasi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-info"></i></div>
      <div class="header-title">
        <h1>Informasi Sperpart</h1>
        <small>Daftar Informasi Sperpart</small>
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
            <h1>Form Sperpart</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.post.informasi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <label for="nama" class="col-xs-3 col-form-label">Nama<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama" id="nama" type="text" class="form-control" placeholder="isi nama sperpart di sini" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek</label>
                    <div class="col-xs-9">
                      <input name="merek" id="merek" class="form-control" type="text" placeholder="isi merek di sini" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 form-label">Type</label>
                    <div class="col-xs-9">
                      <input name="type" id="type" class="form-control" type="text" placeholder="isi type alat di sini">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_seri" class="col-xs-3 form-label">Nomer Seri</label>
                    <div class="col-xs-9">
                      <input name="no_seri" id="no_seri" class="form-control" type="text" placeholder="isi kerusakan alat di sini">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga" class="col-xs-3 form-label">Harga</label>
                    <div class="col-xs-9">
                      <input name="harga" id="harga" class="form-control" type="text" placeholder="isi harga part" onkeyup="rp(this)">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="toko" class="col-xs-3 form-label">Toko</label>
                    <div class="col-xs-9">
                      <input name="toko" id="toko" class="form-control" type="text" placeholder="isi nama toko sperpart">
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
                      <th>Nama</th>
                      <th>Merek</th>
                      <th>Type</th>
                      <th>No Seri</th>
                      <th>Toko</th>
                      <th>Harga</th>
                      <th>Tombol Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($item as $items)
                    <tr>
                      <td>{{ $items->nama }}</td>
                      <td>{{ $items->merek }}</td>
                      <td>{{ $items->type }}</td>
                      <td>{{ $items->no_seri }}</td>
                      <td>{{ $items->harga }}</td>
                      <td>{{ $items->toko }}</td>
                      <td>
                        <a href="{{ route('teknisi.edit.informasi', $items->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <form action="{{ route('teknisi.delete.informasi', $items->id) }}" method="POST" class="d-inline">
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
@push('addon-script')
<!-- RUPIAH 1-->
  <script>
    function rp(input){
      let angka = input.value.replace(/[^,\d]/g, '');
      let split = angka.split(',');
      let sisa = split[0].length % 3;
      let rupiah = split[0].substr(0, sisa);
      let ribuan = split[0].substr(sisa).match(/\d{3}/g);

      if (ribuan) {
          let separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
      }

      rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
      input.value = 'Rp ' + rupiah;
    }
  </script>
<!-- RUPIAH 1-->
@endpush