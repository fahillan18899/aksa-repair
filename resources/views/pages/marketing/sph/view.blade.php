@extends('layouts.marketing')

@section('content')
@section('title', 'Pembuatan SPH')
<style>
  input[readonly] {
    cursor: not-allowed;
  }

  p {
    font-size: large;
  }

  label {
    font-size: large;
  }

  .table-striped {
    width: 100%;
    border-collapse: collapse;
  }

  .table-striped th,
  .table-striped td {
    border: 1px solid black;
    padding: 8px;
  }

  .panel {
    border: 1px solid black;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>MENU PEMBUATAN SPH</h1>
        <small>Pembuatan SPH</small>
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
            <h1>SURAT PENAWARAN HARGA</h1>
          </div>

          <div class="panel-body panel-form" id="print_me">
            <div class="row">
              <img src="{{ url('assets/images/kop_aksa.png') }}" alt="kop" style="width: 400px; margin-left: 700px;">
              <div class="col-md-9 col-sm-12">
                <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="col-xs-4" style="margin-left: 700px;">
                    <p>{{ $item->lokasi_tanggal }}</p>
                  </div>
                  <div class="form-group row">
                    <label for="no_surat" class="col-xs-2 form-label"><b>No.Surat :</b></label>
                    <div class="col-xs-5">
                      <p>{{ $item->no_surat }}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hal" class="form-label col-xs-2"><b>Hal.</b> :</label>
                    <div class="col-xs-5">
                      <p>{{ $item->hal }}</p>
                    </div>
                  </div>
                  <br>
                  <p><b>Kepada Yth. :</b></p>
                  <div class="col-xs-4 ml-2">
                    <p>{{ $item->yth }}</p>
                  </div>
                  <br>
                  <br>
                  <p>Di Tempat.</p><br>
                  <p>Dengan Hormat,</p><br>
                  <p>Berdasarkan hasil dari pemeriksaan kerusakan peralatan medik di bawah ini oleh teknisi dari PT. Aksa
                    Jaya Sentosa, maka dengan ini kami menyampaikan surat penawaran harga jasa perbaikan sebagai berikut :
                  </p>
                  <table class="table-striped">
                    <thead>
                      <th class="text-center">NAMA ALAT</th>
                      <th class="text-center">KETERANGAN</th>
                    </thead>
                    <tbody>
                      @foreach($item->nama_alat as $index => $alat)
                      <tr>
                        <td align="center">{{ $alat }}</td>
                        <td align="center">{{ $item->keterangan[$index] ?? '-' }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table><br>
                  <table class="table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">JUMLAH</th>
                        <th class="text-center">HARGA</th>
                        <th class="text-center">DISKON</th>
                        <th class="text-center">HARGA DISKON</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td align="center">{{ $item->jumlah }}</td>
                        <td align="center">{{ $item->harga }}</td>
                        <td align="center">{{ $item->diskon }}%</td>
                        <td align="center">{{ $item->harga_diskon }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped">
                    <thead>
                      <tr>
                        <th colspan="2" class="text-center">PERHITUNGAN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center"><b>Harga tanpa pajak</b></td>
                        <td align="center">{{ $item->harga_tanpa_pajak }}</td>
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
                          <p><u><b>Kondisi Penawaran</b></u></p>
                          <p>1. <b>Harga Sudah Termasuk :</b> PPn 11%</p>
                          <p>2. <b>Sistem Pembayaran :</b>100% Lunas diawal <i>(Chas in Advance),</i> ditransfer ke :</p>
                          <p style="margin-left: 15px; color: blue;"><b>Bank BNI | a.n.: PT. Aksa Jaya Sentosa | No.Rek.: 1783871355.</b></p>
                          <p>3. <b>Masa Berlaku Penawaran:</b> 30(tiga-puluh) hari sejak tanggal penawaran / dapat berubah sewaktu-wakut.</p>
                          <p>4. Garansi Perbaikan : 1(satu) minggu</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p>Demikian, suatu penghargaan yang besar bagi kami segera mendapatkan respone yang terbaik atas informasi yang kami sampaikan
                    ini semoga bermanfaat dan terimakasih atas kerja samanya, sukses untuk kita bersama.
                  </p>
                  <table class="table" style="width: 20%;">
                    <thead>
                      <tr>
                        <th class="text-center">Hormat Kami</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td align="center"><img src="{{ url('assets/images/signature.png') }}" width="60%" alt="Ttd"></td>
                      </tr>
                      <tr>
                        <td align="center"><b><u>Najwa Alfia R</u></b></td>
                      </tr>
                    </tbody>
                  </table>
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