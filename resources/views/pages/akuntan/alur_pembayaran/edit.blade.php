@extends('layouts.akuntan')

@section('content')
@section('title', 'Edit Alur Pembayaran')
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
        <h1>Edit Alur Pembayaran</h1>
        <small>Edit Alur Pembayaran</small>
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
            <h1>Edit Alur Pembayaran</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('akuntan.update.alurPembayaran', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                    <label for="marketing" class="col-xs-3 col-form-label">Marketing <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="marketing" type="text" class="form-control" value="{{ $item->marketing }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="instansi" type="text" class="form-control" value="{{ $item->instansi }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah" class="col-xs-3 col-form-label">Jumlah Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jumlah" type="number" class="form-control" value="{{ $item->jumlah }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nominal" class="col-xs-3 col-form-label">Nominal <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nominal" type="text" class="form-control" value="{{ $item->nominal }}" onkeyup="rp(this)" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="document" class="col-xs-3 col-form-label">Document <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="document" type="file" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal" class="col-xs-3 col-form-label">Tanggal Bayar <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal" type="date" class="form-control" value="{{ $item->tanggal }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="sistem" class="col-xs-3 col-form-label">System Pembayaran <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="sistem" type="text" class="form-control" value="{{ $item->sistem }}" required>
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
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection
@push('addon-script')
<!-- RUPIAH 1-->
<script>
  function rp(input) {
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

    // Setelah format, jalankan perhitungan
    ppn();
  }
</script>
<!-- RUPIAH 1-->
@endpush