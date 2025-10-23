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
                <form action="{{ route('akuntan.invoice.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <input name="user" type="hidden" value="{{ $item->user }}">
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
                      <input name="no_invoice" id="no_invoice" type="text" class="form-control" value="{{ $noUrut.'/5.308/AJS-FIN/'.$bulanRomawi.'/INV/'.$tahun }}" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-4">
                      <label for="no_pesanan" class="form-label">Nomor Pesanan</label>
                      <input name="no_pesanan" id="no_pesanan" type="text" class="form-control" value="{{ $item->no_surat }}" readonly>
                    </div>
                    <div class="col-xs-4">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input name="alamat" id="alamat" type="text" class="form-control">
                    </div>
                  </div>
                  <!-- TABLE -->
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
                          <td class="text-center"><input name="akom[1]" type="text" class="form-control" value="{{ $item->akom[1] }}" readonly></td>
                          <td class="text-center"><input name="akom[2]" type="text" class="form-control" value="{{ $item->akom[2] }}" readonly></td>
                          <td class="text-center"><input name="akom[3]" type="text" class="form-control" value="{{ $item->akom[3] }}" readonly></td>
                          <td class="text-center"><input name="akom[4]" type="text" class="form-control" value="{{ $item->akom[4] }}" readonly></td>
                        </tr>
                        <tr>
                          <td class="text-center">Mobil</td>
                          <td class="text-center"><input name="akom[5]" type="text" class="form-control" value="{{ $item->akom[5] }}" readonly></td>
                          <td class="text-center"><input name="akom[6]" type="text" class="form-control" value="{{ $item->akom[6] }}" readonly></td>
                          <td class="text-center"><input name="akom[7]" type="text" class="form-control" value="{{ $item->akom[7] }}" readonly></td>
                          <td class="text-center"><input name="akom[8]" type="text" class="form-control" value="{{ $item->akom[8] }}" readonly></td>
                        </tr>
                        <tr>
                          <td class="text-center">Uang Makan</td>
                          <td colspan="3" class="text-center"><input name="akom[9]" type="text" class="form-control" value="{{ $item->akom[9] }}" readonly></td>
                          <td class="text-center"><input name="akom[10]" type="text" class="form-control" value="{{ $item->akom[10] }}" readonly></td>
                        </tr>
                        <tr>
                          <td class="text-center">Tol</td>
                          <td colspan="3" class="text-center"><input name="akom[11]" type="text" class="form-control" value="{{ $item->akom[11] }}" readonly></td>
                          <td class="text-center"><input name="akom[12]" type="text" class="form-control" value="{{ $item->akom[12] }}" readonly></td>
                        </tr>
                        <tr>
                          <td colspan="5" class="text-center">Total Biaya Akomodasi</td>
                          <td colspan="" class="text-center"><input name="akom[13]" type="text" class="form-control" value="{{ $item->akom[13] }}" readonly></td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-striped table-bordered" id="dinamic2">
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
                        @foreach($item->part as $index => $partt)
                        <tr>
                          <td class="text-center"><input name="part[{{ $index }}]" id="part_{{$index}}" type="text" class="form-control" value="{{ $partt }}" readonly></td>
                          <td class="text-center"><input name="harga_part[{{ $index }}]"  type="text" class="form-control" value="{{ $item->harga_part[$index] }}" readonly></td>
                          <td class="text-center"><input name="jumlah_part[{{ $index }}]" type="number" class="form-control" value="{{ $item->jumlah_part[$index] }}" readonly></td>
                          <td class="text-center"><input name="total_part[{{ $index }}]"  type="text" class="form-control" value="{{ $item->total_part[$index] }}" readonly></td>
                          <td class="text-center"><input name="biaya_part[{{ $index }}]"  type="text" class="form-control" value="{{ $item->biaya_part[$index] }}" readonly></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Total Biaya Part</th>
                          <th>Biaya Service</th>
                          <th>Harga Service</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input name="part_total[1]" class="form-control" type="text" value="{{ $item->part_total[1] }}" readonly></td>
                          <td><input name="part_total[2]" class="form-control" type="text" value="{{ $item->part_total[2] }}" readonly></td>
                          <td><input name="part_total[3]" class="form-control" type="text" value="{{ $item->part_total[3] }}" readonly></td>
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
                          <td><input name="keterangan[{{ $index }}]" type="text" class="form-control" value="{{ $item->keterangan[$index] }}" readonly></td>
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
                          <td><input name="jumlah" class="form-control" type="text" value="{{ $item->jumlah }}" readonly></td>
                          <td><input name="harga"  class="form-control" type="text" value="{{ $item->harga }}" readonly></td>
                          <td><input name="diskon" class="form-control" type="text" value="{{ $item->diskon }}%" readonly></td>
                          <td><input name="harga_diskon" class="form-control" type="text" value="{{ $item->harga_diskon }}" readonly></td>
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
                          <td><input name="harga_tanpa_pajak" type="text" class="form-control" value="{{ $item->harga_tanpa_pajak }}" readonly></td>
                        </tr>
                        <tr>
                          <td><b>Pajak 11%</b></td>
                          <td><input name="pajak" class="form-control" type="text" value="{{ $item->pajak }}" readonly></td>
                        </tr>
                        <tr>
                          <td><b>Total</b></td>
                          <td><input name="total" class="form-control" type="text" value="{{ $item->total }}" readonly></td>
                        </tr>
                      </tbody>
                    </table>
                  <!-- TABLE -->
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