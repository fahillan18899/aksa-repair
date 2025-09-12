@extends('layouts.akuntan')

@section('content')
@section('title', 'Edit Keuangan Customer')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>MENU EDIT CUSTOMER</h1>
        <small>Edit Customer</small>
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
    <!--Form Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>EDIT CUSTOMER</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('akuntan.update.CsKeuangan', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="instansi" type="text" class="form-control" value="{{ $item->instansi }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah" class="col-xs-3 col-form-label">Jumlah alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jumlah" type="number" class="form-control" value="{{ $item->jumlah }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="wilayah" class="col-xs-3 col-form-label">Wilayah <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="wilayah" type="text" class="form-control" value="{{ $item->wilayah }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="marketing" class="col-xs-3 col-form-label">Marketing <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="marketing" type="text" class="form-control" value="{{ $item->marketing }}" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ba" class="col-xs-3 col-form-label">Berita Acara <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ba" type="file" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Edit</button>
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
<script>
  function ppn(input) {

    let angka = input.value.replace(/[^\d]/g, ''); //Hapus semua kecuali angka

    if (!angka) {
      input.value = '';
      return;
    }

    const formatter = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0
    });

    const angkaFloat = parseFloat(angka);
    input.value = formatter.format(angkaFloat);
    // ----------------------------------------------------------- //
    const unit = document.getElementById('unit').value;
    const hargaSatuan = document.getElementById('harga_satuan').value;
    const hargaSatuanR = parseFloat(hargaSatuan.replace(/[^\d]/g, ''));
    const totalHarga = unit * hargaSatuanR;
    document.getElementById('harga').value = totalHarga;
    const harga = document.getElementById('harga').value;
    const hargac = parseFloat(harga.replace(/[^\d]/g, ''));
    const ppn = hargac * 11 / 100;
    const total = hargac + ppn;

    const totalHargaRp = totalHarga.toLocaleString('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0
    });
    const hargaRp = hargac.toLocaleString('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0
    });
    const pajakRp = ppn.toLocaleString('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0
    });
    const totalRp = total.toLocaleString('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0
    });

    document.getElementById('harga').value = totalHargaRp;
    document.getElementById('harga_tanpa_pajak').value = hargaRp;
    document.getElementById('pajak').value = pajakRp;
    document.getElementById('total').value = totalRp;
  }
</script>

@endpush