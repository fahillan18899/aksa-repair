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
                    <input type="hidden" name="id_alat" id="id_alat" class="form-control" value="{{ $qr }}">
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