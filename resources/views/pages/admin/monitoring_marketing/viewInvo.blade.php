@extends('layouts.admin')

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

  .table-striped{
    width: 100%;
    border-collapse: collapse;
  }

  .table-striped th,
  .table-striped td {
    border: 1px solid black;
    padding: 8px;
  }

  .panel { border: 1px solid black }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>MENU PEMBUATAN INVOICE</h1>
        <small>Pembuatan invoice</small>
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

          <div class="panel-heading" id="form1">
            <h1>INVOICE</h1>
          </div>

          <div class="panel-body panel-form" id="print_me">
            <div class="row">
              <div class="col-sm-12">
                <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="invoice-header">
                    <div class="form-group row">
                      <div class="col-xs-4">
                        <label class="form-label" for="">Kepada Yth :</label>
                        <p>{{ $item->yth }}</p>
                      </div>
                      <div class="col-xs-4">
                        <label class="form-label" for="">Tanggal Invoice :</label>
                        <p>{{ $item->tgl_invoice }}</p>
                      </div>
                      <img src="{{ url('assets/images/kop_invoice.png') }}" alt="kop" class="invoice-bg" style="margin-top: -40px">
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-4">
                        <label class="form-label" for="">Alamat :</label>
                        <p>{{ $item->alamat }}</p>
                      </div>
                      <div class="col-xs-4">
                        <label class="form-label" for="">Nomor Invoice :</label>
                        <p>{{ $item->no_invoice }}</p>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-4"></div>
                      <div class="col-xs-4">
                        <label class="form-label" for="">Nomor Pesanan :</label>
                        <p>{{ $item->no_pesanan }}</p>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-4"></div>
                      <div class="col-xs-4">
                        
                      </div>
                    </div>
                  </div><br><br>
                  <table class="table-striped">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center"><b>PENGAJUAN</b></th>
                        <th class="text-center"><b>HARGA_/_ITEM_/_KM</b></th>
                        <th class="text-center"><b>JUMLAH_/_BELI</b></th>
                        <th class="text-center"><b>SUB_TOTAL</b></th>
                        <th class="text-center"><b>HARGA_YANG_DITAWARKAN</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td rowspan="4" class="text-center">AKOMODASI</td>
                        <td class="text-center">Motor</td>
                        <td class="text-center">{{ $item->akom[1] ?? '-' }}</td>
                        <td class="text-center">{{ $item->akom[2] ?? '-' }}</td>
                        <td class="text-center">{{ $item->akom[3] ?? '-' }}</td>
                        <td class="text-center">{{ $item->akom[4] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center">Mobil</td>
                        <td class="text-center">{{ $item->akom[5] ?? '-' }}</td>
                        <td class="text-center">{{ $item->akom[6] ?? '-' }}</td>
                        <td class="text-center">{{ $item->akom[7] ?? '-' }}</td>
                        <td class="text-center">{{ $item->akom[8] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center">Uang Makan</td>
                        <td colspan="3" class="text-center">{{ $item->akom[9] ?? '-' }}</td>
                        <td class="text-center">{{ $item->akom[10] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center">Tol</td>
                        <td colspan="3" class="text-center">{{ $item->akom[11] ?? '-' }}</td>
                        <td class="text-center">{{ $item->akom[12] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td colspan="5" class="text-center">Total Biaya Akomodasi</td>
                        <td colspan="" class="text-center">{{ $item->akom[13] ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped">
                    <thead>
                      <tr>
                        <th class="text-center"><b>NAMA PART</b></th>
                        <th class="text-center"><b>HARGA</b></th>
                        <th class="text-center"><b>JUMLAH</b></th>
                        <th class="text-center"><b>TOTAL HARGA PART</b></th>
                        <th class="text-center"><b>BIAYA</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">{{ $item->part[1] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[2] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[3] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[4] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[5] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center">{{ $item->part[6] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[7] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[8] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[9] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[10] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center">{{ $item->part[11] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[12] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[13] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[14] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[15] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td colspan="4" class="text-center">Total Biaya Part</td>
                        <td class="text-center">{{ $item->part[16] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td colspan="2" class="text-center">Biaya Service</td>
                        <td colspan="2" class="text-center">{{ $item->part[17] ?? '-' }}</td>
                        <td class="text-center">{{ $item->part[18] ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped" id="dinamic">
                    <thead>
                      <tr>
                        <th class="text-center"><b>NAMA ALAT</b></th>
                        <th class="text-center"><b>KETERANGAN</b></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($item->nama_alat as $index => $nama)
                            <tr>
                                <td align="center">{{ is_array($nama) ? implode(', ', $nama) : $nama }}</td>
                                <td align="center">{{ is_array($item->keterangan[$index] ?? '') ? implode(', ', $item->keterangan[$index]) : ($item->keterangan[$index] ?? '') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table><br>
                  <table class="table-striped">
                    <thead>
                      <tr>
                        <th class="text-center"><b>JUMLAH</b></th>
                        <th class="text-center"><b>HARGA</b></th>
                        <th class="text-center"><b>DISKON</b></th>
                        <th class="text-center"><b>HARGA DISKON</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td align="center">{{ $item->jumlah }}</td>
                        <td align="center">{{ $item->harga }}</td>
                        <td align="center">{{ $item->diskon }} %</td>
                        <td align="center">{{ $item->harga_diskon }}</td>
                      </tr>
                    </tbody>
                  </table><br><br>
                  <table class="table-striped">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center">PERHITUNGAN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center"><b>Harga Tanpa Pajak</b></td>
                        <td align="center" width="50%">{{ $item->harga_tanpa_pajak }}</td>
                      </tr>
                      <tr>
                        <td class="text-center"><b>Pajak 11%</b></td>
                        <td align="center">{{ $item->pajak }}</td>
                      </tr>
                      <tr>
                        <td class="text-center"><b>Total</b></td>
                        <td align="center">{{ $item->total }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="panel panel-default thumbnail">
                        <div class="panel-heading">
                          <p><u><b>Catatan</b></u></p><br>
                          <p>Harga Sudah Termasuk Pajak</p>
                          <p>Transfer melalui Rekening BNI</p>
                          <p>A/C : 1783871355</p>
                          <p>A/N : Aksa Jaya Sentosa</p>
                          <p>Mohon kirim bukti pembayaran dan bukti potong PPh 23/22</p>
                          <p>(jika ada) ke alamat e-mail pt.aksajayasentosa@gmail.com</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <table class="table" style="width: 20%; margin-left: 600px;">
                    <thead>
                      <tr>
                        <th class="text-center">Hormat Kami</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td align="center"><img src="{{ url('assets/images/signature.png') }}" width="50%" alt="Ttd"></td>
                      </tr>
                      <tr>
                        <td class="text-center"><b><u>Najwa Alfia R</u></b></td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-offset-3 col-sm-6">
            <button type="button" onclick="printMy('print_me')"
              class="btn btn-primary" style="margin-left: 200px"><i class="fa fa-print"></i>Print</button>
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
  function printMy(print_me) {
    var printContent = document.getElementById('print_me').outerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML =
      `
    <html>
    <style>
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

    .table-striped {
      width: 100%;
      border-collapse : collapse;
    }

    .table-striped th,
    .table-striped td {
    border: 1px solid black;
    padding: 8px;
    }

    .panel { border: 1px solid black }
    </style>
      <head>
        <title>Print Invoice</title>
      </head>
      <body>
      <h1>INVOICE</h1>
        ${printContent}
      </body>
    </html>`;
    window.print();
    document.body.innerHTML = originalContent;
  }
</script>
@endpush