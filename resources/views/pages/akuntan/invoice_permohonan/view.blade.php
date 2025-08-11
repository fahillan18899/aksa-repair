@extends('layouts.akuntan')

@section('content')
@section('title', 'Pembuatan SPH')
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
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>Invoice</h1>
        <small>Buat Invoice</small>
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
              <!-- <img src="{{ url('assets/images/kop_aksa.png') }}" alt="kop" style="width: 250px; margin-left: 700px;"> -->
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('akuntan.post.invoicePermohonan') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <div class="col-xs-4">
                      <label for="yth" class="form-label">Kepada Yth :</label>
                      <input name="yth" id="yth" class="form-control" type="text" value="{{ $item->yth }}" readonly>
                    </div>
                    <div class="col-xs-4">
                      <label for="tgl_invoice" class="form-label">Tanggal</label>
                      <input name="tgl_invoice" id="tgl_invoice" type="date" class="form-control">
                    </div>
                    <div class="col-xs-4">
                      <label for="no_invoice" class="form-label">No Invoice</label>
                      <input name="no_invoice" id="no_invoice" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-4">
                      <label for="no_pesanan" class="form-label">Nomor Pesanan</label>
                      <input name="no_pesanan" id="no_pesanan" type="text" class="form-control">
                    </div>
                    <div class="col-xs-4">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input name="alamat" id="alamat" type="text" class="form-control">
                    </div>
                  </div>
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center"><b>PENGAJUAN</b></th>
                        <th class="text-center"><b>HARGA / ITEM / KM</b></th>
                        <th class="text-center"><b>JUMLAH / BELI</b></th>
                        <th class="text-center"><b>SUB TOTAL</b></th>
                        <th class="text-center"><b>HARGA YANG DITAWARKAN</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td rowspan="4" class="text-center">AKOMODASI</td>
                        <td class="text-center">Motor</td>
                        <td class="text-center"><input name="akom[1]" id="motor_1" type="text" class="form-control" value="{{ $item->akom[1] }}" readonly ></td>
                        <td class="text-center"><input name="akom[2]" id="motor_2" type="text" class="form-control" value="{{ $item->akom[2] }}" readonly ></td>
                        <td class="text-center"><input name="akom[3]" id="motor_3" type="text" class="form-control" value="{{ $item->akom[3] }}" readonly ></td>
                        <td class="text-center"><input name="akom[4]" id="motor_4" type="text" class="form-control" value="{{ $item->akom[4] }}" readonly ></td>
                      </tr>
                      <tr>
                        <td class="text-center">Mobil</td>
                        <td class="text-center"><input name="akom[5]" id="mobil_1" type="text" class="form-control" value="{{ $item->akom[5] }}" readonly ></td>
                        <td class="text-center"><input name="akom[6]" id="mobil_2" type="text" class="form-control" value="{{ $item->akom[6] }}" readonly ></td>
                        <td class="text-center"><input name="akom[7]" id="mobil_3" type="text" class="form-control" value="{{ $item->akom[7] }}" readonly ></td>
                        <td class="text-center"><input name="akom[8]" id="mobil_4" type="text" class="form-control" value="{{ $item->akom[8] }}" readonly ></td>
                      </tr>
                      <tr>
                        <td class="text-center">Uang Makan</td>
                        <td colspan="3" class="text-center"><input name="akom[9]" id="uang_makan_1" type="text" class="form-control" value="{{ $item->akom[9] }}" readonly></td>
                        <td class="text-center"><input name="akom[10]" id="uang_makan_2" type="text" class="form-control" value="{{ $item->akom[10] }}" readonly></td>
                      </tr>
                      <tr>
                        <td class="text-center">Tol</td>
                        <td colspan="3" class="text-center"><input name="akom[11]" id="tol_1" type="text" class="form-control" value="{{ $item->akom[11] }}" readonly></td>
                        <td class="text-center"><input name="akom[12]" id="tol_2" type="text" class="form-control" value="{{ $item->akom[12] }}" readonly></td>
                      </tr>
                      <tr>
                        <td colspan="5" class="text-center">Total Biaya Akomodasi</td>
                        <td colspan="" class="text-center"><input name="akom[13]" id="total_akom" type="text" class="form-control" value="{{ $item->akom[13] }}" readonly></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-striped table-bordered">
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
                        <td class="text-center"><input name="part[1]" id="part_1" type="text" class="form-control" value="{{ $item->part[1] }}" readonly></td>
                        <td class="text-center"><input name="part[2]" id="harga_1" type="text" class="form-control" value="{{ $item->part[2] }}" readonly></td>
                        <td class="text-center"><input name="part[3]" id="jumlah_1" type="text" class="form-control" value="{{ $item->part[3] }}" readonly></td>
                        <td class="text-center"><input name="part[4]" id="total_part_1" type="text" class="form-control" value="{{ $item->part[4] }}" readonly></td>
                        <td class="text-center"><input name="part[5]" id="biaya_part_1" type="text" class="form-control" value="{{ $item->part[5] }}" readonly></td>
                      </tr>
                      <tr>
                        <td class="text-center"><input name="part[6]" id="part_2" type="text" class="form-control" value="{{ $item->part[6] }}" readonly></td>
                        <td class="text-center"><input name="part[7]" id="harga_2" type="text" class="form-control" value="{{ $item->part[7] }}" readonly></td>
                        <td class="text-center"><input name="part[8]" id="jumlah_2" type="text" class="form-control" value="{{ $item->part[8] }}" readonly></td>
                        <td class="text-center"><input name="part[9]" id="total_part_2" type="text" class="form-control" value="{{ $item->part[9] }}" readonly></td>
                        <td class="text-center"><input name="part[10]" id="biaya_part_2" type="text" class="form-control" value="{{ $item->part[10] }}" readonly></td>
                      </tr>
                      <tr>
                        <td class="text-center"><input name="part[11]" id="part_3" type="text" class="form-control" value="{{ $item->part[11] }}" readonly></td>
                        <td class="text-center"><input name="part[12]" id="harga_3" type="text" class="form-control" value="{{ $item->part[12] }}" readonly></td>
                        <td class="text-center"><input name="part[13]" id="jumlah_3" type="text" class="form-control" value="{{ $item->part[13] }}" readonly></td>
                        <td class="text-center"><input name="part[14]" id="total_part_3" type="text" class="form-control" value="{{ $item->part[14] }}" readonly></td>
                        <td class="text-center"><input name="part[15]" id="biaya_part_3" type="text" class="form-control" value="{{ $item->part[15] }}" readonly></td>
                      </tr>
                      <tr>
                        <td colspan="4" class="text-center">Total Biaya Part</td>
                        <td class="text-center"><input name="part[16]" id="total_biaya_part" type="text" class="form-control" value="{{ $item->part[16] }}" readonly></td>
                      </tr>
                      <tr>
                        <td colspan="2" class="text-center">Biaya Service</td>
                        <td colspan="2" class="text-center"><input name="part[17]" id="service" type="text" class="form-control" value="{{ $item->part[17] }}" readonly></td>
                        <td class="text-center"><input name="part[18]" id="serviceT" type="text" class="form-control" value="{{ $item->part[18] }}" readonly></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-striped table-bordered" id="dinamic">
                    <thead>
                      <tr>
                        <th class="text-center"><b>NAMA ALAT</b></th>
                        <th class="text-center"><b>KETERANGAN</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($item->nama_alat as $index => $nama)
                      <tr>
                        <td><input name="nama_alat[{{ $index }}]" type="text" class="form-control" value="{{ $nama }}" readonly></td>
                        <td><textarea name="keterangan[{{ $index }}]" type="text" class="form-control" readonly>{{ $item->keterangan[$index] ?? '' }}</textarea></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <table class="table table-striped table-bordered">
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
                        <td><input name="jumlah" id="jumlah" class="form-control" type="text" value="{{ $item->jumlah }}" readonly></td>
                        <td><input name="harga" id="harga" class="form-control" type="text" value="{{ $item->harga }}" readonly></td>
                        <td><input name="diskon" id="diskon" type="text" class="form-control" value="{{ $item->diskon }}" readonly></td>
                        <td><input name="harga_diskon" id="harga_diskon" type="text" class="form-control" value="{{ $item->harga_diskon }}" readonly></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center">PERHITUNGAN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><b>Harga Tanpa Pajak</b></td>
                        <td><input name="harga_tanpa_pajak" id="harga_tanpa_pajak" type="text" class="form-control" value="{{ $item->harga_tanpa_pajak }}" readonly></td>
                      </tr>
                      <tr>
                        <td><b>Pajak 11%</b></td>
                        <td><input name="pajak" id="pajak" class="form-control" type="text" value="{{ $item->pajak }}" readonly></td>
                      </tr>
                      <tr>
                        <td><b>Total</b></td>
                        <td><input name="total" id="total" class="form-control" type="text" value="{{ $item->total }}" readonly></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="form-group row">
                    <div class="col-sm-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Buat Invoice</button>
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