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

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('marketing.post.sph') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="col-xs-4" style="margin-left: 700px;">
                    <input name="lokasi_tanggal" id="lokasi_tanggal" class="form-control" type="text" value="Boyolali, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}" readonly>
                  </div>
                  <div class="form-group row">
                    <label for="no_surat" class="col-xs-2 form-label"><b>No.Surat :</b></label>
                    <div class="col-xs-5">
                      <input name="no_surat" id="no_surat" type="text" class="form-control" value="{{ $noUrut.'/1.306/AJS-MKT/'.$user.'/'.$bulanRomawi.'/SPH-REP/'.$tahun}}" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hal" class="form-label col-xs-2"><b>Hal.</b> :</label>
                    <div class="col-xs-5">
                      <input name="hal" id="hal" type="text" class="form-control" value="Surat Penawaran Harga" readonly>
                    </div>
                  </div>
                  <br>
                  <p><b>Kepada Yth. :</b></p>
                  <div class="col-xs-4 ml-2">
                    <input name="yth" id="yth" type="text" class="form-control" placeholder="isi nama orang yang dituju">
                  </div>
                  <br>
                  <br>
                  <p>Di Tempat.</p><br>
                  <p>Dengan Hormat,</p><br>
                  <p>Berdasarkan hasil dari pemeriksaan kerusakan peralatan medik di bawah ini oleh teknisi dari PT. Aksa 
                    Jaya Sentosa, maka dengan ini kami menyampaikan surat penawaran harga jasa perbaikan sebagai berikut :
                  </p>
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
                        <td class="text-center"><input name="akom[1]" id="motor_1" type="text" class="form-control" onkeyup="rp2(this)"></td>
                        <td class="text-center"><input name="akom[2]" id="motor_2" type="text" class="form-control" onkeyup="akom1()"></td>
                        <td class="text-center"><input name="akom[3]" id="motor_3" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                        <td class="text-center"><input name="akom[4]" id="motor_4" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td class="text-center">Mobil</td>
                        <td class="text-center"><input name="akom[5]" id="mobil_1" type="text" class="form-control" onkeyup="rp2(this)"></td>
                        <td class="text-center"><input name="akom[6]" id="mobil_2" type="text" class="form-control" onkeyup="akom2()"></td>
                        <td class="text-center"><input name="akom[7]" id="mobil_3" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                        <td class="text-center"><input name="akom[8]" id="mobil_4" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td class="text-center">Uang Makan</td>
                        <td colspan="3" class="text-center"><input name="akom[9]" id="uang_makan_1" type="text" class="form-control" onkeyup="rp3(this)"></td>
                        <td class="text-center"><input name="akom[10]" id="uang_makan_2" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td class="text-center">Tol</td>
                        <td colspan="3" class="text-center"><input name="akom[11]" id="tol_1" type="text" class="form-control" onkeyup="rp4(this)"></td>
                        <td class="text-center"><input name="akom[12]" id="tol_2" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td colspan="5" class="text-center">Total Biaya Akomodasi</td>
                        <td colspan="" class="text-center"><input name="akom[13]" id="total_akom" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center"><b>NAMA PART</b></th>
                        <th class="text-center"><b>HARGA</b></th>
                        <th class="text-center"><b>JUMLAH</b></th>
                        <th class="text-center"><b>TOTAL  HARGA PART</b></th>
                        <th class="text-center"><b>BIAYA</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <select name="part[1]" id="part_1" type="text" class="form-control">
                            <option >Pilih Part</option>
                            @foreach($part as $parts)
                              <option value="{{ $parts->nama }}">{{ $parts->nama }}</option>
                            @endforeach
                          </select>
                        </td>
                        <td class="text-center"><input name="part[2]" id="harga_1" type="text" class="form-control" onkeyup="rp2(this)"></td>
                        <td class="text-center"><input name="part[3]" id="jumlah_1" type="text" class="form-control" onkeyup="part1()"></td>
                        <td class="text-center"><input name="part[4]" id="total_part_1" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                        <td class="text-center"><input name="part[5]" id="biaya_part_1" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <select name="part[6]" id="part_2" type="text" class="form-control">
                            <option >Pilih Part</option>
                            @foreach($part as $parts)
                              <option value="{{ $parts->nama }}">{{ $parts->nama }}</option>
                            @endforeach
                          </select>
                        </td>
                        <td class="text-center"><input name="part[7]" id="harga_2" type="text" class="form-control" onkeyup="rp2(this)"></td>
                        <td class="text-center"><input name="part[8]" id="jumlah_2" type="text" class="form-control" onkeyup="part2()"></td>
                        <td class="text-center"><input name="part[9]" id="total_part_2" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                        <td class="text-center"><input name="part[10]" id="biaya_part_2" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <select name="part[11]" id="part_3" type="text" class="form-control">
                            <option >Pilih Part</option>
                            @foreach($part as $parts)
                              <option value="{{ $parts->nama }}">{{ $parts->nama }}</option>
                            @endforeach
                          </select>
                        </td>
                        <td class="text-center"><input name="part[12]" id="harga_3" type="text" class="form-control" onkeyup="rp2(this)"></td>
                        <td class="text-center"><input name="part[13]" id="jumlah_3" type="text" class="form-control" onkeyup="part3()"></td>
                        <td class="text-center"><input name="part[14]" id="total_part_3" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                        <td class="text-center"><input name="part[15]" id="biaya_part_3" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td colspan="4" class="text-center">Total Biaya Part</td>
                        <td class="text-center"><input name="part[16]" id="total_biaya_part" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td colspan="2" class="text-center">Biaya Service</td>
                        <td colspan="2" class="text-center"><input name="part[17]" id="service" type="text" class="form-control" onkeyup="rp5(this)"></td>
                        <td class="text-center"><input name="part[18]" id="serviceT" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                    </tbody>
                  </table>
                  <a class="btn btn-primary" id="add" style="margin-bottom: 5px;">Tambah Alat</a>
                  <table class="table table-striped table-bordered" id="dinamic">
                    <thead>
                      <tr>
                        <th class="text-center"><b>NAMA ALAT</b></th>
                        <th class="text-center"><b>KETERANGAN</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- DATA DINAMIS -->
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
                      <td><input name="jumlah" id="jumlah" class="form-control" type="text" placeholder="jumlah alat"></td>
                      <td><input name="harga" id="harga" class="form-control" type="text" placeholder="terisi otomatis" readonly></td>
                      <td><input name="diskon" id="diskon" type="text" class="form-control" placeholder="isi diskon" onkeyup="ppn()"></td>
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
                  <p>Demikian, suatu penghargaan  yang besar bagi kami segera mendapatkan respone yang terbaik atas informasi yang kami sampaikan
                    ini semoga bermanfaat dan terimakasih atas kerja samanya, sukses untuk kita bersama.
                  </p>
                   <div class="form-group row">
                    <div class="col-sm-6">
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
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-md-4">
                <div class="btn-group">
                  <a class="btn btn-success" href="{{ route('marketing.history.sph') }}"> History Edit SPH </a>
                </div>
              </div>
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
                      <tr>
                        <th>Instansi</th>
                        <th>No Surat</th>
                        <th>Lokasi, Tanggal</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($item as $items)
                      <tr>
                        <td>{{ $items->yth }}</td>
                        <td>{{ $items->no_surat }}</td>
                        <td>{{ $items->lokasi_tanggal }}</td>
                        <td>
                          <a href="{{ route('marketing.print.sph', $items->id) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="View">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                          </a>
                          <a href="{{ route('marketing.edit.sph', $items->id) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <form action="{{ route('marketing.delete.sph', $items->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @empty
                      @endforelse
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
<!-- RUPIAH 1-->
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
<!-- RUPIAH 1-->

<!-- PERHITUNGAN -->
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
<!-- PERHITUNGAN -->

<!-- RUPIAH 2-->
 <script>
    function rp2(input){
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
    }
 </script>
<!-- RUPIAH 2-->
<!-- RUPIAH 3-->
 <script>
    function rp3(input){
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
      akom3()
    }
    
 </script>
<!-- RUPIAH 3-->
<!-- RUPIAH 4-->
 <script>
    function rp4(input){
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
      akom4()
    }
    
 </script>
<!-- RUPIAH 4-->
<!-- RUPIAH 5-->
 <script>
    function rp5(input){
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
      service()
    }
    
 </script>
<!-- RUPIAH 5-->

<!-- AKOMODASI -->
  <script>
    function akom1() {
      // hapus rupiah
      const motor = document.getElementById('motor_1').value.replace(/[^0-9]/g, '');
      const motorc = parseFloat(motor) || 0;

      // ambil jumlah
      const jumlah = parseFloat(document.getElementById('motor_2').value)

      //hitung sub total
      const subTotal = motorc * jumlah;
      const subTotalRp = subTotal.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
      document.getElementById('motor_3').value = subTotalRp;
      document.getElementById('motor_4').value = subTotalRp;
    }
  </script>
  <script>
    function akom2() {
      // hapus rupiah
      const mobil = document.getElementById('mobil_1').value.replace(/[^0-9]/g, '');
      const mobilc = parseFloat(mobil) || 0;

      // ambil jumlah
      const jumlah = parseFloat(document.getElementById('mobil_2').value)

      //hitung sub total
      const subTotal = mobilc * jumlah;
      const subTotalRp = subTotal.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
      document.getElementById('mobil_3').value = subTotalRp;
      document.getElementById('mobil_4').value = subTotalRp;
    }
  </script>
  <script>
    function akom3(){
      const uangMakan = document.getElementById('uang_makan_1').value //ambil nilai dari input
      document.getElementById('uang_makan_2').value = uangMakan //ambil nilai dari uangMakan letak di uang_makan_2
    }
  </script>
  <script>
    function akom4(){
      const tol = document.getElementById('tol_1').value //ambil nilai dari input
      document.getElementById('tol_2').value = tol //ambil nilai dari tol letak di tol_2
      totalAkom()
    }
  </script>
  <script>
    function totalAkom() {
      //bersihkan rupiah 
      const motorT = document.getElementById('motor_4').value.replace(/[^0-9]/g, '');
      const motorTc = parseFloat(motorT) || 0
      const mobilT = document.getElementById('mobil_4').value.replace(/[^0-9]/g, '');
      const mobilTc = parseFloat(mobilT) || 0
      const uangT = document.getElementById('uang_makan_2').value.replace(/[^0-9]/g, '');
      const uangTc = parseFloat(uangT) || 0
      const tolT = document.getElementById('tol_2').value.replace(/[^0-9]/g, '');
      const tolTc = parseFloat(tolT) || 0

      //menghitung total biaya akomodasi
      const totalBA = motorTc + mobilTc + uangTc + tolTc;
      //mengambil nilai total biaya akomodasi dan dijadikan rupiah
      const  totalRp = totalBA.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
      document.getElementById('total_akom').value = totalRp;
    }
  </script>
<!-- AKOMODASI -->

<!-- PERHITUNGAN PART -->
 <script>
  function part1() {
    const harga1 = document.getElementById('harga_1').value.replace(/[^0-9]/g, '');
    const harga1c = parseFloat(harga1) || 0
    const jumlah1 = parseFloat(document.getElementById('jumlah_1').value);
    const total1 = harga1c * jumlah1;
    const total1Rp = total1.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
    document.getElementById('total_part_1').value = total1Rp;
    document.getElementById('biaya_part_1').value = total1Rp;
  }
 </script>
 <script>
  function part2() {
    const harga2 = document.getElementById('harga_2').value.replace(/[^0-9]/g, '');
    const harga2c = parseFloat(harga2) || 0
    const jumlah2 = parseFloat(document.getElementById('jumlah_2').value);
    const total2 = harga2c * jumlah2;
    const total2Rp = total2.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
    document.getElementById('total_part_2').value = total2Rp;
    document.getElementById('biaya_part_2').value = total2Rp;
  }
 </script>
 <script>
  function part3() {
    const harga3 = document.getElementById('harga_3').value.replace(/[^0-9]/g, '');
    const harga3c = parseFloat(harga3) || 0
    const jumlah3 = parseFloat(document.getElementById('jumlah_3').value);
    const total3 = harga3c * jumlah3;
    const total3Rp = total3.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
    document.getElementById('total_part_3').value = total3Rp;
    document.getElementById('biaya_part_3').value = total3Rp;
    totalPart()
  }
 </script>
 <script>
  function totalPart() {
    const biaya1 = document.getElementById('biaya_part_1').value.replace(/[^0-9]/g, '');
    const biaya1c = parseFloat(biaya1) || 0
    const biaya2 = document.getElementById('biaya_part_2').value.replace(/[^0-9]/g, '');
    const biaya2c = parseFloat(biaya2) || 0
    const biaya3 = document.getElementById('biaya_part_3').value.replace(/[^0-9]/g, '');
    const biaya3c = parseFloat(biaya3) || 0
    const totalBiaya = biaya1c + biaya2c + biaya3c;
    const totalBiayaRp = totalBiaya.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
    document.getElementById('total_biaya_part').value = totalBiayaRp;
  } 
 </script>
  <script>
    function service(){
      const service = document.getElementById('service').value //ambil nilai dari input
      document.getElementById('serviceT').value = service //ambil nilai dari tol letak di tol_2
      const totalBiayaAkom = document.getElementById('total_akom').value.replace(/[^0-9]/g, '');
      const totalBiayaAkomC = parseFloat(totalBiayaAkom) || 0
      const totalBiayaPart = document.getElementById('total_biaya_part').value.replace(/[^0-9]/g, '');
      const totalBiayaPartC = parseFloat(totalBiayaPart) || 0
      const serviceC = document.getElementById('serviceT').value.replace(/[^0-9]/g, '');
      const serviceCl = parseFloat(serviceC) || 0
      const totalAll = totalBiayaAkomC + totalBiayaPartC + serviceCl;
      const totalAllRp = totalAll.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
      document.getElementById('harga').value = totalAllRp;
    }
  </script>
<!-- PERHITUNGAN PART -->

<!-- PART AUTOFILL SELECT -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('select[id="part_1"]').on('change', function() {
        var stateID = $(this).val();
        console.log(stateID);
        if (stateID) {
          $.ajax({
            url: 'link_sph/part/' + stateID,
            type: "GET",
            dataType: "json",
            success: function(data) {
              console.log(data);
              $.each(data, function(key, value) {
                $('input[id="harga_1"]').val(value.harga);
              });
            }
          });
        } else {
          $('input[id="harga_1"]').empty();
        }
      })
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('select[id="part_2"]').on('change', function() {
        var stateID = $(this).val();
        console.log(stateID);
        if (stateID) {
          $.ajax({
            url: 'link_sph/part/' + stateID,
            type: "GET",
            dataType: "json",
            success: function(data) {
              console.log(data);
              $.each(data, function(key, value) {
                $('input[id="harga_2"]').val(value.harga);
              });
            }
          });
        } else {
          $('input[id="harga_2"]').empty();
        }
      })
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('select[id="part_3"]').on('change', function() {
        var stateID = $(this).val();
        console.log(stateID);
        if (stateID) {
          $.ajax({
            url: 'link_sph/part/' + stateID,
            type: "GET",
            dataType: "json",
            success: function(data) {
              console.log(data);
              $.each(data, function(key, value) {
                $('input[id="harga_3"]').val(value.harga);
              });
            }
          });
        } else {
          $('input[id="harga_3"]').empty();
        }
      })
    });
  </script>
<!-- PART AUTOFILL SELECT -->

<script>
  $(document).ready(function() {
    let row = 1; //Menyimpan jumlah baris

    //Fungsi menambah baris
    $("#add").click(function() {
      let newRow = 
      `
      <tr>
        <td><input name="nama_alat[${row}]" type="text" class="form-control" placeholder="isi nama alat"></td>
        <td><textarea name="keterangan[${row}]" class="form-control" placeholder="keterangan perbaikan"></textarea></td>
      </tr>
      `;

      //Menambah baris baru ke tbody
      $("#dinamic tbody").append(newRow);
      row++;
    });
    
  })
</script>

@endpush