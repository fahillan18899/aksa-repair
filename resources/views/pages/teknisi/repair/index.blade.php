@extends('layouts.teknisi')

@section('content')
@section('title', 'Repair')
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
        <h1>MENU FORM Repair</h1>
        <small>Form Repair</small>
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
              <h1>Daftar Pekerjaan</h1>
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
                        <th>No Urut</th>
                        <th>Tanggal</th>
                        <th>Marketing</th>
                        <th>Nama Alat</th>
                        <th>Instansi</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($data as $datas)
                      <tr>
                        <td onclick="paste(this)" title="Klik untuk kirim no urut" style="cursor: pointer;">{{ $datas->no_urut }}</td>
                        <td>{{ $datas->created_at->timezone('Asia/Jakarta')->format('d-m-Y / H:i') }}</td>
                        <td>{{ $datas->user }}</td>
                        <td>{{ $datas->nama_alat }}</td>
                        <td>{{ $datas->instansi }}</td>
                        <td>
                          <form action="{{ route('teknisi.deleteI.repair', $datas->id) }}" method="POST" class="d-inline">
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
            <h1>Form Repair</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('teknisi.post.repair') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <input name="no_urut" id="no_urut" class="form-control" type="hidden">
                  <div class="form-group row">
                    <label for="" class="col-xs-3 col-form-label">No Urut <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input id="no_urut2" type="text" class="form-control" placeholder="Klik no urut di table untuk kirim disini" 
                      data-toggle="tooltip" data-placement="top" title="Klik untuk isi data alat" style="cursor: pointer;" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" id="nama_alat" type="text" class="form-control" placeholder="Terisi otomatis" required readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_seri" class="col-xs-3 col-form-label">No Seri</label>
                    <div class="col-xs-9">
                      <input name="no_seri" id="no_seri" class="form-control" type="text" placeholder="Terisi otomatis" required readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 form-label">Type</label>
                    <div class="col-xs-9">
                      <input name="type" id="type" class="form-control" type="text" placeholder="Terisi otomatis" required readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kerusakan_alat" class="col-xs-3 form-label">Kerusakan Alat</label>
                    <div class="col-xs-9">
                      <input name="kerusakan_alat" id="kerusakan_alat" class="form-control" type="text" placeholder="Terisi otomatis" required readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="instansi" id="instansi" type="text" class="form-control" placeholder="Terisi otomatis" readonly required>
                    </div>
                  </div>

                  <input name="user" id="user" type="hidden">

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
              <h1>Daftar Repair alat</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th>No Urut</th>
                      <th>Tanggal</th>
                      <th>Nama</th>
                      <th>Serial Number</th>
                      <th>Type</th>
                      <th>Kerusakan</th>
                      <th>Instansi</th>
                      <th>Status</th>
                      <th>Keterangan</th>
                      <th>Tombol</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      @forelse($item as $items)
                      <tr>
                        <td>{{ $items->no_urut }}</td>
                        <td>{{ $items->created_at->timezone('Asia/Jakarta')->format('d-m-Y / H:i') }}</td>
                        <td>{{ $items->nama_alat }}</td>
                        <td>{{ $items->no_seri }}</td>
                        <td>{{ $items->type }}</td>
                        <td>{{ $items->kerusakan_alat }}</td>
                        <td>{{ $items->instansi }}</td>
                        <td>
                          <form action="{{ route('teknisi.status.repair', $items->id) }}" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-{{ $items->status == 0 ? 'danger' : 'success'}}" type="submit">
                              {{ $items->status == 0 ? 'Kembali' : 'Approve' }}
                            </button>
                          </form>
                        </td>
                        <td>
                          <form action="{{ route('teknisi.ket.repair', $items->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <select name="ket" class="form-select form-select-sm
                              @switch ($items->ket)
                                @case(1) border-danger text-danger @break
                                @case(2) border-warning text-warning @break
                                @case(3) border-info text-info @break
                                @case(4) border-secondary text-secondary @break
                                @case(5) border-success text-success @break
                              @endswitch"
                              onchange="this.form.submit()">
                              
                              <option value="1" {{ $items->ket == 1 ? 'selected' : '' }}>trouble</option>
                              <option value="2" {{ $items->ket == 2 ? 'selected' : '' }}>proses</option>
                              <option value="3" {{ $items->ket == 3 ? 'selected' : '' }}>dalam perbaikan</option>
                              <option value="4" {{ $items->ket == 4 ? 'selected' : '' }}>rusak</option>
                              <option value="5" {{ $items->ket == 5 ? 'selected' : '' }}>selesai</option>
                            </select>
                          </form>
                        </td>

                        <td>
                          <a href="{{ route('teknisi.edit.repair', $items->id) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <form action="{{ route('teknisi.delete.repair', $items->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash-o" aria-hidden="hidden"></i>
                            </button>
                          </form>
                        </td>
                        <td>
                          <a href="{{ route('teknisi.ba.repair', $items->id) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="BA">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                          </a>
                          <a href="{{ route('teknisi.st.repair', $items->id) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Serah Terima">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
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
    document.getElementById('no_urut2').value = inp.value = that.textContent;
  }
</script>
<script>
  $(document).ready(function(){
    $('#no_urut2').on('click', function(){
      let noUrut = $(this).val().trim();
      console.log("ID yang dimasukan :", noUrut);

      if(!noUrut) return;


      fetch(`/dashboard_teknisi/link_repair/data_pekerjaan/${encodeURIComponent(noUrut)}`)
      .then(response => response.json())
      .then(data => {
        console.log("Data dari server :", data);
        let item = Array.isArray(data) ? data[0] : data || {};
        $('#nama_alat').val(item.nama_alat || '');
        $('#no_seri').val(item.no_seri || '');
        $('#type').val(item.type || '');
        $('#kerusakan_alat').val(item.kerusakan || '');
        $('#instansi').val(item.instansi || '');
        $('#user').val(item.user || '');
      })
      .catch(error => console.error("Error AJAX", error));
    });
  });
</script>
@endpush