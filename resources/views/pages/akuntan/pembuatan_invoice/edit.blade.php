@extends('layouts.akuntan')

@section('content')
@section('title', 'Edit Invoice')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Edit Invoice</h1>
        <small>Edit Invoice</small>
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
    <!-- FORM -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print" id="form1">
            <h1>Edit Invoice</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('akuntan.update.pembuatanInvo', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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
                    <label for="harga" class="col-xs-3 col-form-label">Harga <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="harga" type="text" class="form-control" value="{{ $item->harga }}" onkeyup="rp(this)" required>
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
    <!-- FORM END-->
  </div>
</div> <!-- /.content -->
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