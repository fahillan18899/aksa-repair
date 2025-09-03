@extends('layouts.teknisi')

@section('content')
@section('title', 'Data Customer')
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
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>Data Customer</h1>
        <small>Form Data Customer</small>
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
              <h1>Daftar Customer</h1>
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
                        <th>ID</th>
                        <th>Marketing</th>
                        <th>Instansi</th>
                        <th>Jumlah</th>
                        <th>Wilayah</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($data as $datas)
                      <tr>
                        <td onclick="paste(this)" title="Klik untuk kirim ID ke form" style="cursor: pointer;">{{ $datas->id }}</td>
                        <td>{{ $datas->marketing }}</td>
                        <td>{{ $datas->instansi }}</td>
                        <td>{{ $datas->jumlah }}</td>
                        <td>{{ $datas->wilayah }}</td>
                        <td>
                          <form action="{{ route('teknisi.deleteI.dataCs', $datas->id) }}" method="POST" class="d-inline">
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
    </div>
    <!--Tabel Perbaikan-->
    <!--Form Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>Form Data Customer</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.post.dataCs') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <label for="" class="col-xs-3 col-form-label">ID <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input id="id_cs" type="text" class="form-control" placeholder="Klik no urut di table untuk kirim disini"
                        data-toggle="tooltip" data-placement="top" title="Klik untuk isi data alat" style="cursor: pointer;" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instanasi</label>
                    <div class="col-xs-9">
                      <input name="instansi" id="instansi" class="form-control" type="text" placeholder="Terisi otomatis" required readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah" class="col-xs-3 form-label">Jumlah alat</label>
                    <div class="col-xs-9">
                      <input name="jumlah" id="jumlah" class="form-control" type="text" placeholder="Terisi otomatis" required readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="marketing" class="col-xs-3 col-form-label">Marketing</label>
                    <div class="col-xs-9">
                      <input name="marketing" id="marketing" type="text" class="form-control" placeholder="Terisi otomatis" readonly required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="wilayah" class="col-xs-3 col-form-label">Wilayah</label>
                    <div class="col-xs-9">
                      <input name="wilayah" id="wilayah" type="text" class="form-control" placeholder="Terisi Otomatis" readonly required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jadwal" class="col-xs-3 col-form-label">Jadwal<i class="text-danger">*</i></label>
                    <div class="col-xs-4">
                      <input name="jadwal1" id="jadwal1" type="date" class="form-control" required>
                    </div>
                    <div class="col-xs-1">
                      sd
                    </div>
                    <div class="col-xs-4">
                      <input name="jadwal2" id="jadwal2" type="date" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="realisasi" class="col-xs-3 form-label">Realisasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="realisasi" id="realisasi" class="form-control" type="text" placeholder="-" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="mobil" class="col-xs-3 col-form-label">Mobil<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="mobil" id="mobil" type="text" class="form-control" placeholder="-" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi" class="col-xs-3 col-form-label">Teknisi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi" id="teknisi" type="text" class="form-control" placeholder="-" required>
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
              <h1>Daftar Data Customer</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th>Instansi</th>
                      <th>Jumlah_Alat</th>
                      <th>Marketing</th>
                      <th>Wilayah</th>
                      <th>Jadwal</th>
                      <th>Realisasi</th>
                      <th>Mobil</th>
                      <th>Teknisi</th>
                      <th>Tombol</th>
                    </thead>
                    <tbody>
                      @forelse($item as $items)
                      <tr>
                        <td>{{ $items->instansi }}</td>
                        <td>{{ $items->jumlah }}</td>
                        <td>{{ $items->marketing }}</td>
                        <td>{{ $items->wilayah }}</td>
                        <td>{{ $items->jadwal }}</td>
                        <td>{{ $items->realisasi }}</td>
                        <td>{{ $items->mobil }}</td>
                        <td>{{ $items->teknisi }}</td>
                        <td>
                          <a href="{{ route('teknisi.edit.dataCs', $items->id) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <form action="{{ route('teknisi.delete.dataCs', $items->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash-o" aria-hidden="hidden"></i>
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
  function paste(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
    document.getElementById('id_cs').value = inp.value = that.textContent;
  }
</script>
<script>
  $(document).ready(function() {
    $('#id_cs').on('click', function() {
      let noUrut = $(this).val().trim();
      console.log("ID yang dimasukan :", noUrut);

      if (!noUrut) return;


      fetch(`/dashboard_teknisi/data_customer/data_pekerjaan/${encodeURIComponent(noUrut)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server :", data);
          let item = Array.isArray(data) ? data[0] : data || {};
          $('#instansi').val(item.instansi || '');
          $('#jumlah').val(item.jumlah || '');
          $('#marketing').val(item.marketing || '');
          $('#wilayah').val(item.wilayah || '');
        })
        .catch(error => console.error("Error AJAX", error));
    });
  });
</script>
@endpush