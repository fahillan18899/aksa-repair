@extends('layouts.ppm')

@section('content')
@section('title', 'Inventaris')
<style>
  .panel {border-radius: 12px;}
  .panel-heading h1 {margin: 0;font-size: 22px;font-weight: 600;}
  .form-control {height: 45px;font-size: 14px;}
  textarea.form-control {height: auto;}
  .btn-mobile {width: 100%;height: 48px;font-size: 16px;font-weight: 600;}
  .input-rounded {border-radius: 12px;padding: 10px 14px;height: 45px;font-size: 14px;border: 1px solid #ddd;
    box-shadow: none;transition: all 0.2s ease-in-out;}
/* efek saat fokus */
  .input-rounded:focus {border-color: #28a745;box-shadow: 0 0 0 3px rgba(40,167,69,0.15);outline: none;}
/* optional: tombol juga dibikin rounded */
  .btn-rounded {border-radius: 12px;}
  #suggestion-alat {position: absolute;top: 100%;left: 0;right: 0;background: #fff;border: 1px solid #ddd;
      z-index: 9999;display: none;max-height: 250px;overflow-y: auto;}
  .suggestion-item {padding: 10px 12px;cursor: pointer;border-bottom: 1px solid #eee;}
  .suggestion-item:hover {background: #f5f5f5;}
  @media (max-width: 768px) {
    .content-header {text-align: center;}
    .header-title h1 {font-size: 24px;}
    .header-title small {font-size: 14px;}
    .form-group.row {margin-bottom: 15px;}
    .form-group label {display: block;width: 100%;margin-bottom: 5px;text-align: left;font-weight: 600;}
    .form-group .col-xs-9,.form-group .col-sm-9,.form-group .col-md-9 {width: 100%;}
    .form-group .col-xs-3 {width: 100%;}
    .panel-body {padding: 15px;}
    .table {font-size: 12px;}
    .table img {width: 60px !important;}
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>MENU Edit Inventraris</h1>
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
              <h1>Form Edit Inventaris</h1>
            </div>

            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="{{route('inventaris.update', $item->id)}}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    @method('PUT')

                      <!-- Nama Alat -->
                      <div class="form-group">
                          <label>Nama Alat <i class="text-danger">*</i></label>
                          <input name="nama_alat" id="nama_alat" type="text" class="form-control input-rounded" style="text-transform: uppercase" oninput="this.value.toUpperCase()" value="{{ old('nama_alat', $item->nama_alat) }}" required>
                          <div id="suggestion_alat"></div>
                      </div>

                      <!-- Merek -->
                      <div class="form-group">
                          <label>Merek <i class="text-danger">*</i></label>
                          <input name="merek" id="merek" type="text" class="form-control input-rounded" value="{{ old('merek', $item->merek) }}" required>
                      </div>

                      <!-- Type -->
                      <div class="form-group">
                          <label>Type <i class="text-danger">*</i></label>
                          <input name="type" id="type" type="text" class="form-control input-rounded" value="{{ old('type', $item->type) }}" required>
                      </div>

                      <!-- No Seri -->
                      <div class="form-group">
                          <label>No Seri <i class="text-danger">*</i></label>
                          <input name="seri" id="seri" type="text" class="form-control input-rounded" value="{{ old('seri', $item->seri) }}" required>
                      </div>

                      <!-- Lokasi -->
                      <div class="form-group">
                          <label>Lokasi <i class="text-danger">*</i></label>
                          <input name="lokasi" id="lokasi" type="text" class="form-control input-rounded" style="text-transform: uppercase" oninput="this.value.toUpperCase()" value="{{ old('lokasi', $item->lokasi) }}" required>
                      </div>

                      <!-- Jadwal -->
                      <div class="form-group">
                          <label>Jadwal Pemeliharaan <i class="text-danger">*</i></label>
                          <input name="jadwal" id="jadwal" type="date" class="form-control input-rounded" value="{{ old('jadwal', $item->jadwal) }}" required>
                      </div>

                      <!-- Button -->
                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-block btn-mobile btn-rounded">
                              <i class="fa fa-save"></i> Simpan
                          </button>
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
  </div>
</div>
@endsection
@push('addon-script')
<script>
$(document).ready(function () {
    // Ketika teknisi mengetik nama alat
    $('#nama_alat').on('keyup', function () {
        let keyword = $(this).val();
        let suggestion = $('#suggestion_alat');

        // Kalau kurang dari 2 karakter
        if (keyword.length < 2) {
            suggestion.hide().html('');
            return;
        }

        // AJAX pencarian
        $.ajax({
            url: "{{ route('masterAlat') }}",
            type: "GET",
            data: {q: keyword},

            success: function (data) {
                suggestion.html('');
                // Tidak ada hasil
                if (data.length === 0) {
                    suggestion.hide();
                    return;
                }

                // Tampilkan hasil
                $.each(data, function (index, alat) {
                    let item = $('<div>')
                        .addClass('suggestion-item')
                        .text(alat.alat)
                        .attr('data-alat', alat.alat);
                    suggestion.append(item);
                });
                suggestion.show();
            },
            error: function (xhr) {
                console.log(xhr.responseText);
                suggestion.hide();
            }
        });
    });


    // Ketika suggestion diklik
    $(document).on('click', '.suggestion-item', function () {
        let namaAlat = $(this).attr('data-alat');
        $('#nama_alat').val(namaAlat);
        $('#suggestion_alat')
            .hide()
            .html('');
    });


    // Klik di luar suggestion
    $(document).on('click', function (e) {
        if (
            !$(e.target).closest('#nama_alat').length &&
            !$(e.target).closest('#suggestion_alat').length
        ) {$('#suggestion_alat').hide();}
    });
});

</script>
@endpush