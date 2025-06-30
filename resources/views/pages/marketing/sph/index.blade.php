@extends('layouts.marketing')

@section('content')
@section('title', 'Pembuatan SPH')
<style>
  input[readonly] {
    cursor: not-allowed;
  }

  .modal-body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    /* Pastikan modal body penuh */
  }

  .modal-dialog2 {
    width: 100%;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-content2 {
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .modal-body2 {
    flex: 1;
    overflow-y: auto;
    color: black;
    background-color: white;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
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
            <h1>SPH</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <img src="{{ url('assets/images/kop_aksa.png') }}" alt="kop" style="width: 250px; margin-left: 700px;">
              <div class="col-xs-3" style="margin-left: 700px;">
                <input name="tempat" id="tempat" class="form-control" type="text" placeholder="lokasi, tanggal">
              </div>
              <div class="col-md-9 col-sm-12">
                <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <label for="no_surat" class="col-xs-2 form-label"><b>No.Surat :</b></label>
                    <div class="col-xs-5">
                      <input name="no_surat" id="no_surat" type="text" class="form-control" placeholder="isi dengan nomer surat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hal" class="form-label col-xs-2"><b>Hal.</b> :</label>
                    <div class="col-xs-5">
                      <input name="hal" id="hal" type="text" class="form-control" placeholder="isi dengan perihal surat">
                    </div>
                  </div>
                  <br>
                  <p><b>Kepada Yth. :</b></p>
                  <div class="col-xs-4 ml-2">
                    <input name="kepada" id="kepada" type="text" class="form-control" placeholder="isi nama orang yang dituju">
                  </div>
                  <br>
                  <br>
                  <p>Di Tempat.</p><br>
                  <p>Dengan Hormat,</p><br>
                  <p>Berdasarkan hasil dari pemeriksaan kerusakan peralatan medik di bawah ini oleh teknisi dari PT. Aksa 
                    Jaya Sentosa, maka dengan ini kami menyampaikan surat penawaran harga jasa perbaikan sebagai berikut :</p>

                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center"><b>NAMA ALAT</b></th>
                        <th class="text-center"><b>KETERANGAN</b></th>
                        <th class="text-center"><b>JUMLAH</b></th>
                        <th class="text-center"><b>HARGA</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1</td>
                        <td><input name="nama_alat" id="nama_alat" type="text" class="form-control" placeholder="isi nama alat"></td>
                        <td><textarea name="keterangan" id="keterangan" class="form-control" placeholder="keterangan perbaikan"></textarea></td>
                        <td><input name="jumlah" id="jumlah" class="form-control" type="text" placeholder="jumlah alat"></td>
                        <td><input name="harga" id="harga" class="form-control" type="text" placeholder="harga perbaikan" onkeyup="ppn(this)"></td>
                      </tr>
                      <tr>
                        <td colspan="4"><b>Harga Tanpa Pajak</b></td>
                        <td><input name="harga_tanpa_pajak" id="harga_tanpa_pajak" type="text" class="form-control" placeholder="terisi otomatis" readonly onkeyup="ppn()"></td>
                      </tr>
                      <tr>
                        <td colspan="4"><b>Pajak 11%</b></td>
                        <td><input name="pajak" id="pajak" class="form-control" type="text" placeholder="terisi otomatis" readonly onkeyup="ppn()"></td>
                      </tr>
                      <tr>
                        <td colspan="4"><b>Total</b></td>
                        <td><input name="total" id="total" class="form-control" type="text" placeholder="terisi otomatis" readonly onkeyup="ppn()"></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="panel panel-default thumbnail">
                        <div class="panel-heading no-print">
                          <p><u><b>Kondisi Penawaran</b></u></p><br>
                          <p>1. <b>Harga Sudah Termasuk :</b></p>
                          <p style="margin-left: 15px;">PPn 11%</p>
                          <p>2. <b>Sistem Pembayaran :</b>100% Lunas diawal <i>(Chas in Advance),</i> ditransfer ke :</p>
                          <p style="margin-left: 15px; color: blue;"><b>Bank BNI | a.n.: PT. Aksa Jaya Sentosa | No.Rek.: 1783871355.</b></p>
                          <p>3. <b>Masa Berlaku Penawaran:</b> 30(tiga-puluh) hari sejak tanggal penawaran / dapat berubah sewaktu-wakut.</p>
                          <p>4. Garansi Perbaikan : 1(satu) minggu</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p>Demikian, suatu penghargaan  yang besar bagi kami segera mendapatkan respone yang terbaik atas informasi yang kami sampaikan
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
                        <td align="center"><img src="{{ url('assets/images/aksa.png') }}" alt="Ttd"></td>
                      </tr>
                      <tr>
                        <td><b><u>Najwa Alfia R</u></b></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" id="nama_alat" type="text" class="form-control" placeholder="Masukan nama alat disini">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="instansi" class="col-xs-3 col-form-label">Instansi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="instansi" id="instansi" type="text" class="form-control" placeholder="Masukan Instansi disini">
                    </div>
                  </div> -->

                  <!-- <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
                      </div>
                    </div>
                  </div> -->
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Form Perbaikan end-->
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Daftar SPH</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th class="">No</th>
                      <th class="">Nama Alat</th>
                      <th class="">Instansi</th>
                      <th class="">Tombol</th>
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
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection
@push('addon-script')
<script>
  function ppn(input) {

    let angka = input.value.replace(/[^\d]/g, ''); //Hapus semua kecuali angka

    if(!angka) {
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

    const harga = document.getElementById('harga').value;
    const hargac = parseFloat(harga.replace(/[^\d]/g, ''));
    const ppn = hargac * 11 / 100;
    const total = hargac + ppn;

    const hargaRp = hargac.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
    const pajakRp = ppn.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
    const totalRp = total.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});

    document.getElementById('harga_tanpa_pajak').value = hargaRp;
    document.getElementById('pajak').value = pajakRp;
    document.getElementById('total').value = totalRp;
  }
</script>
@endpush