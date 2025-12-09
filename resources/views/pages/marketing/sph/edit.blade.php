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
                <form action="{{ route('marketing.sph.update', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <input name="user" type="hidden" value="{{ $item->user }}">
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
                        <td class="text-center">
                          <input name="part[{{ $index }}]" id="part_{{$index}}" type="text" class="form-control" required value="{{ $partt }}">
                        </td>
                        <td class="text-center"><input name="harga_part[{{ $index }}]" id="harga_{{ $index }}" type="text" class="form-control" onkeyup="rp2(this)" placeholder="terisi otomatis" value="{{ $item->harga_part[$index] }}" required></td>
                        <td class="text-center"><input name="jumlah_part[{{ $index }}]" id="jumlah_{{ $index }}" type="number" class="form-control" onkeyup="part1(event)" required></td>
                        <td class="text-center"><input name="total_part[{{ $index }}]" id="total_part_{{ $index }}" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                        <td class="text-center"><input name="biaya_part[{{ $index }}]" id="biaya_part_{{ $index }}" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
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
                        <td><input name="part_total[1]" id="total_biaya_part" class="form-control" type="text" placeholder="Terisi Otomatis" readonly></td>
                        <td><input name="part_total[2]" id="service" class="form-control" type="text" onkeyup="rp5(this)" placeholder="isi kembali" required></td>
                        <td><input name="part_total[3]" id="serviceT" class="form-control" type="text" placeholder="Terisi Otomatis" readonly></td>
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
      const hargaRp = hargaDiskon.toLocaleString('id-ID', {
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
    function rp2(input) {
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
    function rp3(input) {
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
    function rp4(input) {
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
    function rp5(input) {
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

<!-- PERHITUNGAN PART -->
  <script>
    function part1(event) {
      let input = event.target;
      let rowId = input.id.split('_')[1]; // ambil nomor baris dari id "jumlah_1", "jumlah_2", dst.

      const harga1 = document.getElementById('harga_' + rowId).value.replace(/[^0-9]/g, '');
      const harga1c = parseFloat(harga1) || 0
      const jumlah1 = parseFloat(document.getElementById('jumlah_' + rowId).value) || 0;
      const total1 = harga1c * jumlah1;
      const total1Rp = total1.toLocaleString('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      });
      document.getElementById('total_part_' + rowId).value = total1Rp;
      document.getElementById('biaya_part_' + rowId).value = total1Rp;

      totalPart(); // update total semua baris
    }
  </script>

  <script>
    function totalPart() {
      let totalBiaya = 0;

      document.querySelectorAll('[id^="biaya_part_"]').forEach(input => {
        const value = input.value.replace(/[^0-9]/g, '');
        const biaya = parseFloat(value) || 0;
        totalBiaya += biaya;
      });

      const totalBiayaRp = totalBiaya.toLocaleString('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      });

      document.getElementById('total_biaya_part').value = totalBiayaRp;
    }
  </script>
<!-- PERHITUNGAN PART -->

<!--Service-->
  <script>
    function service() {
      const service = document.getElementById('service').value //ambil nilai dari input
      document.getElementById('serviceT').value = service //ambil nilai dari tol letak di tol_2
      const totalBiayaPart = document.getElementById('total_biaya_part').value.replace(/[^0-9]/g, '');
      const totalBiayaPartC = parseFloat(totalBiayaPart) || 0
      const serviceC = document.getElementById('serviceT').value.replace(/[^0-9]/g, '');
      const serviceCl = parseFloat(serviceC) || 0
      const totalAll = totalBiayaPartC + serviceCl;
      const totalAllRp = totalAll.toLocaleString('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      });
      document.getElementById('harga').value = totalAllRp;
    }
  </script>
<!--Service-->

<!-- PART AUTOFILL SELECT -->
<script type="text/javascript">
  $(document).on('change', 'select[id^="part_"]', function() {
    let id = $(this).attr('id').split('_')[1]; // ambil angka dari id, misal: part_2 -> 2
    let partValue = $(this).val();

    if (partValue) {
      $.ajax({
        url: 'link_sph/part/' + partValue,
        type: "GET",
        dataType: "json",
        success: function(data) {
          $.each(data, function(key, value) {
            $('#harga_' + id).val(value.harga);
          });
        }
      });
    } else {
      $('#harga_' + id).val('');
    }
  });
</script>
<!-- PART AUTOFILL SELECT -->

<script>
  $(document).ready(function() {
    let row = 2; //Menyimpan jumlah baris

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

<script>
  $(document).ready(function() {
    let row2 = 2; //Menyimpan jumlah baris

    //Fungsi menambah baris
    $("#add2").click(function() {
      let newRow =
        `
          <tr>
            <td class="text-center">
              <select name="part[${row2}]" id="part_${row2}" type="text" class="form-control">
                <option value="-">Pilih Part</option>
                @foreach($part as $parts)
                <option value="{{ $parts->nama }}">{{ $parts->nama }}</option>
                @endforeach
              </select>
            </td>
            <td class="text-center"><input name="harga_part[${row2}]" id="harga_${row2}" type="text" class="form-control" onkeyup="rp2(this)" placeholder="terisi otomatis" value="0" readonly required></td>
            <td class="text-center"><input name="jumlah_part[${row2}]" id="jumlah_${row2}" type="number" class="form-control" onkeyup="part1(event)" required></td>
            <td class="text-center"><input name="total_part[${row2}]" id="total_part_${row2}" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
            <td class="text-center"><input name="biaya_part[${row2}]" id="biaya_part_${row2}" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
          </tr>
      `;

      //Menambah baris baru ke tbody
      $("#dinamic2 tbody").append(newRow);
      row2++;
    });

  })
</script>

@endpush