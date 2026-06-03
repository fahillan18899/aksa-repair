@extends('layouts.ppm')

@section('content')
@section('title', 'Inventaris')
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
    <!--Form Inventaris-->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print" id="form1">
              <h1>Form Inventaris</h1>
            </div>

            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="form-group row">
                      <label for="" class="col-xs-3 col-form-label">ID Alat</label>
                      <div class="col-xs-9">
                        <input name="id_alat" id="id_alat" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="nama_alat" id="nama_alat" type="text" class="form-control"  required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="merek" class="col-xs-3 form-label">Merek <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="merek" id="merek" class="form-control" type="text" required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="type" class="col-xs-3 form-label">Type <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="type" id="type" class="form-control" type="text" required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="seri" class="col-xs-3 col-form-label">No Seri <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="seri" id="seri" class="form-control" type="text" required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi" class="col-xs-3 form-label">Lokasi <i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="lokasi" id="lokasi" class="form-control" type="text"  required >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="jadwal" class="col-xs-3 col-form-label">Jadwal Pemeliharaan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="jadwal" id="jadwal" type="text" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="foto" class="col-xs-3 col-form-label">Foto Pendukung<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="foto" id="foto" type="file" class="form-control"   required>
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
    <!--Form Inventaris end-->

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
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama</th>
                      <th>Merek</th>
                      <th>Type</th>
                      <th>Serial Number</th>
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
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $items->created_at->timezone('Asia/Jakarta')->format('d-m-Y / H:i') }}</td>
                        <td>{{ $items->nama_alat }}</td>
                        <td>{{ $items->merek }}</td>
                        <td>{{ $items->type }}</td>
                        <td>{{ $items->no_seri }}</td>
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
                          <a href="{{ route('teknisi.repair.edit', $items->id) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <form action="{{ route('teknisi.repair.destroy', $items->id) }}" method="POST" class="d-inline">
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
        $('#no_urut').val(item.no_urut || '');
        $('#nama_alat').val(item.nama_alat || '');
        $('#merek').val(item.merek || '');
        $('#type').val(item.type || '');
        $('#no_seri').val(item.no_seri || '');
        $('#kerusakan_alat').val(item.kerusakan || '');
        $('#instansi').val(item.instansi || '');
        $('#user').val(item.user || '');
      })
      .catch(error => console.error("Error AJAX", error));
    });
  });
</script>
@endpush