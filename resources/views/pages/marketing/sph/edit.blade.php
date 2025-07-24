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
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>EDIT SPH</h1>
        <small>Edit SPH</small>
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
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('marketing.update.sph', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <div class="col-xs-4" style="margin-left: 700px;">
                    <input name="lokasi_tanggal" id="lokasi_tanggal" class="form-control" type="text" value="{{ $item->lokasi_tanggal }}" readonly>
                  </div>
                  <div class="form-group row">
                    <label for="no_surat" class="col-xs-2 form-label"><b>No.Surat :</b></label>
                    <div class="col-xs-5">
                      <input name="no_surat" id="no_surat" type="text" class="form-control" value="{{ $item->no_surat }}" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hal" class="form-label col-xs-2"><b>Hal.</b> :</label>
                    <div class="col-xs-5">
                      <input name="hal" id="hal" type="text" class="form-control" value="{{ $item->hal }}" readonly>
                    </div>
                  </div>
                  <br>
                  <p><b>Kepada Yth. :</b></p>
                  <div class="col-xs-4 ml-2">
                    <input name="yth" id="yth" type="text" class="form-control" value="{{ $item->yth }}">
                  </div>
                  <br>
                  <br>
                  <p>Di Tempat.</p><br>
                  <p>Dengan Hormat,</p><br>
                  <p>Berdasarkan hasil dari pemeriksaan kerusakan peralatan medik di bawah ini oleh teknisi dari PT. Aksa 
                    Jaya Sentosa, maka dengan ini kami menyampaikan surat penawaran harga jasa perbaikan sebagai berikut :
                  </p>
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
                        <td><input name="nama_alat[{{ $index }}]" type="text" class="form-control" value="{{ $nama }}"></td>
                        <td><textarea name="keterangan[{{ $index }}]" type="text" class="form-control">{{ $item->keterangan[$index] ?? '' }}</textarea></td>
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
                      <td><input name="jumlah" id="jumlah" class="form-control" type="text" placeholder="isi kembali"></td>
                      <td><input name="harga" id="harga" class="form-control" type="text" placeholder="isi kembali" onkeyup="rp(this)"></td>
                      <td><input name="diskon" id="diskon" type="text" class="form-control" placeholder="isi kembali" onkeyup="ppn()"></td>
                      <td><input name="harga_diskon" id="harga_diskon" type="text" class="form-control" onkeyup="ppn()" placeholder="terisi otomatis" readonly></td>
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
                      <td><input name="harga_tanpa_pajak" id="harga_tanpa_pajak" type="text" class="form-control" placeholder="terisi otomatis" readonly onkeyup="ppn()"></td>
                    </tr>
                    <tr>
                      <td><b>Pajak 11%</b></td>
                      <td><input name="pajak" id="pajak" class="form-control" type="text" placeholder="terisi otomatis" readonly onkeyup="ppn()"></td>
                    </tr>
                    <tr>
                      <td><b>Total</b></td>
                      <td><input name="total" id="total" class="form-control" type="text" placeholder="terisi otomatis" readonly onkeyup="ppn()"></td>
                    </tr>
                    </tbody>
                  </table>
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
  function rp(input){
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
<script>
  function ppn() {
    // Ambil nilai harga sebagai angka murni
    const harga = document.getElementById('harga').value.replace(/[^0-9]/g, '');
    const hargac = parseFloat(harga) || 0;

    // Ambil diskon (dari input diskon)
    const diskonPersen = parseFloat(document.getElementById('diskon')?.value) || 0;
    const diskon = hargac * (diskonPersen / 100);

    // Hitung harga setelah diskon
    const hargaDiskon = hargac - diskon;

    // Hitung PPN (11%)
    const ppn = hargaDiskon * 0.11;

    // Hitung total
    const total = hargaDiskon + ppn;

    // Format hasil sebagai rupiah
    const hargaRp = hargaDiskon.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
    const pajakRp = ppn.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
    const totalRp = total.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});

    // Tampilkan hasil
    document.getElementById('harga_diskon').value = hargaRp;
    
    // Berikut tiga input tambahan (pastikan ada di HTML, atau beri pengecekan jika belum dipakai)
    const hargaTanpaPajak = document.getElementById('harga_tanpa_pajak');
    const pajak = document.getElementById('pajak');
    const totalElement = document.getElementById('total');

    if (hargaTanpaPajak) hargaTanpaPajak.value = hargaRp;
    if (pajak) pajak.value = pajakRp;
    if (totalElement) totalElement.value = totalRp;
  }
</script>

@endpush