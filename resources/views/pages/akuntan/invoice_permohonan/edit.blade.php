@extends('layouts.akuntan')

@section('content')
@section('title', 'Permohonan Invoice')
<style>
  input[readonly] {
    cursor: not-allowed;
  }

  .invoice-header {
    position: relative;
  }

  .invoice-bg {
    position: absolute;
    top: 0;
    right: 0;
    width: 250px;
    z-index: 0;
  }

  .invoice-header .form-group,
  .invoice-header label,
  .invoice-header input,
  .invoice-header textarea {
    position: relative;
    z-index: 1;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>MENU EDIT INVOICE</h1>
        <small>Edit invoice</small>
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
            <h1>INVOICE</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-sm-12">
                <form action="{{ route('akuntan.invoice.update', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <div class="invoice-header">
                    <div class="form-group row">
                      <div class="col-xs-4">
                        <label class="form-label" for="">Kepada Yth :</label>
                        <input name="yth" id="yth" class="form-control" type="text" value="{{ $item->yth }}">
                      </div>
                      <div class="col-xs-4">
                        <label class="form-label" for="">Tanggal Invoice :</label>
                        <input name="tgl_invoice" class="form-control" type="date" value="{{ $item->tgl_invoice }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-4">
                        <label class="form-label" for="">Nomor Invoice :</label>
                        <input name="no_invoice" id="no_invoice" class="form-control" type="text" value="{{ $item->no_invoice }}">
                      </div>
                      <div class="col-xs-4">
                        <label class="form-label" for="">Nomor Pesanan :</label>
                        <input name="no_pesanan" id="no_pesanan" class="form-control" type="text" value="{{ $item->no_pesanan }}">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-3 col-sm-6">
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