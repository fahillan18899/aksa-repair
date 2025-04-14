@extends('layouts.admin')

@section('content')
@section('title', 'Lembar Pemantauan')

<!-- Content Wrapper. Contains page content -->
 <style>
    input.form-check-input {
    width: 30px;
    height: 30px;
}
  .modal-body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    /* Pastikan modal body penuh */
  }

  input[readonly] {
    cursor: not-allowed;
  }
 </style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-cogs"></i></div>
      <div class="header-title">
        <h1>Pemantauan Alat</h1>
        <small>Form Pemantauan Alat</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="formp1">
            <h1>Form Pemantauan Alat</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <form action="{{ route('pemantauan.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')

                  <input name="id_pemantauan" type="hidden" class="form-control" id="id_pemantauan" placeholder="id">
                  <div class="form-group row">
                    <button type="button" class="btn btn-primary mt-2" id="startScan" data-toggle="modal" data-target="#exampleModal">Scan QR</button>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal" class="col-xs-3 col-form-label">Tanggal pemantauan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal" type="text" class="form-control" id="tanggal" placeholder="Tanggal Pemeliharaan" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kegiatan" class="col-xs-3 col-form-label">Kegiatan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="kegiatan" type="text" class="form-control" id="kegiatan" placeholder="Kegiatan" value="Pemantauan" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="engineer" class="col-xs-3 col-form-label">Nama Teknisi </label>
                    <div class="col-xs-9">
                      <select name="engineer" class="form-control" id="engineer">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                          <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>DATA ALAT</h3>
                    </div>
                    <br>
                  </center>
                  <div class="form-group row">
                    <label for="idInv_pemantauan" class="col-xs-3 col-form-label">ID Aset 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="idInv_pemantauan" type="text" class="form-control" id="idInv_pemantauan" 
                      placeholder="Masukan id lewat qr scanner / ketik disini" style="cursor: pointer;"
                      data-toggle="tooltip" data-placement="top" title="klik untuk load data">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat_pemantauan" class="col-xs-3 col-form-label">Nama Alat 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_pemantauan" type="text" class="form-control" id="nama_alat_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_pemantauan" class="col-xs-3 col-form-label">Serial Number 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number_pemantauan" type="text" class="form-control" id="serial_number_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_pemantauan" class="col-xs-3 col-form-label">Merek 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_pemantauan" type="text" class="form-control" id="merek_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type_pemantauan" class="col-xs-3 col-form-label">Type 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_pemantauan" type="text" class="form-control" id="type_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ruangan_pemantauan" class="col-xs-3 col-form-label">Ruangan 
                    <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ruangan_pemantauan" type="text" class="form-control" id="ruangan_pemantauan" 
                      placeholder="Terisi Otomatis" readonly>
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PERSIAPAN</h3>
                    </div>
                    <br>
                  </center>
                    <div class="row">
                    @php
                    $check1 = [
                      'hand_hygiene' => 'Hand Hygiene',
                      'menyiapkan_alat_dan_bahan' => 'Menyiapkan alat dan bahan',
                      'alat_pelindung_diri' => 'Alat pelindung diri',
                      'mengoprasikan_alat_kalibrasi' => 'Mengiorasikan alat kalibrasi',
                      'ktd' => 'KTD',
                      'mengoprasikan_alat' => 'Mengoprasikan alat',
                      'identifikasi_bahaya' => 'Identifikasi bahaya',
                      ];
                    @endphp
                    @foreach($check1 as $name => $label)
                    <div class="col">
                      <label for="{{ $name }}" class="col-xs-6 col-form-label">{{ $label }}</label>
                      <input name="persiapan[{{ $name }}]" class="form-check-input" type="hidden" value="Tidak">
                      <input name="persiapan[{{ $name }}]" class="form-check-input" type="checkbox" value="Ya" checked>
                    </div>
                    @endforeach
                    </div>
                    <br>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>PEMANTAUAN FISIK DAN FUNGSI</h3>
                    </div>
                  </center>

                <table class="table table-hover table-bordered" style="width:100%">
                    <tr>
                        <td align="center"><label for="label">Part Alat</label></td>
                        <td align="center"><label for="fisik">Fisik</label></td>
                        <td align="center"><label for="fungsi">Fungsi</label></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="badan/selungkup">Badan / Selungkup</label></td>
                        <td align="center"><input name="pemantauan[badan_selungkup1]" class="form-check-input" type="checkbox" value="Baik" checked id="badan_selungkup1"></td>
                        <td align="center"><input name="pemantauan[badan_selungkup2]" class="form-check-input" type="checkbox" value="Baik" checked id="badan_selungkup2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="kabel_kelenturan">Kabel Kelenturan </label></td>
                        <td align="center"><input name="pemantauan[kabel_kelenturan1]" class="form-check-input" type="checkbox" value="Baik" checked id="kabel_kelenturan1"></td>
                        <td align="center"><input name="pemantauan[kabel_kelenturan2]" class="form-check-input" type="checkbox" value="Baik" checked id="kabel_kelenturan2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="tombol_saklar">Tombol Saklar</label></td>
                        <td align="center"><input name="pemantauan[tombol_saklar1]" class="form-check-input" type="checkbox" value="Baik" checked id="tombol_saklar1"></td>
                        <td align="center"><input name="pemantauan[tombol_saklar2]" class="form-check-input" type="checkbox" value="Baik" checked id="tombol_saklar2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="display_layar">Display Layar</label></td>
                        <td align="center"><input name="pemantauan[display_layar1]" class="form-check-input" type="checkbox" value="Baik" checked id="display_layar1"></td>
                        <td align="center"><input name="pemantauan[display_layar2]" class="form-check-input" type="checkbox" value="Baik" checked id="display_layar2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="indikator_bunyi">Indikator Bunyi</label></td>
                        <td align="center"><input name="pemantauan[indikator_bunyi1]" class="form-check-input" type="checkbox" value="Baik" checked id="indikator_bunyi1"></td>
                        <td align="center"><input name="pemantauan[indikator_bunyi2]" class="form-check-input" type="checkbox" value="Baik" checked id="indikator_bunyi2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="alarm_sistem_interlock">Alarm Sistem Interlock </label></td>
                        <td align="center"><input name="pemantauan[alarm_sistem_interlock1]" class="form-check-input" type="checkbox" value="Baik" checked id="alarm_sistem_interlock1"></td>
                        <td align="center"><input name="pemantauan[alarm_sistem_interlock2]" class="form-check-input" type="checkbox" value="Baik" checked id="alarm_sistem_interlock2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="sistem_pengunci"> Sistem Pengunci</label></td>
                        <td align="center"><input name="pemantauan[sistem_pengunci1]" class="form-check-input" type="checkbox" value="Baik" checked id="sistem_pengunci1"></td>
                        <td align="center"><input name="pemantauan[sistem_pengunci2]" class="form-check-input" type="checkbox" value="Baik" checked id="sistem_pengunci2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="label_penandaan">Label Penandaan</label></td>
                        <td align="center"><input name="pemantauan[label_penandaan1]" class="form-check-input" type="checkbox" value="Baik" checked id="label_penandaan1"></td>
                        <td align="center"><input name="pemantauan[label_penandaan2]" class="form-check-input" type="checkbox" value="Baik" checked id="label_penandaan2"></td>
                    </tr>
                    <tr>
                        <td align="center"><label for="aksesoris">Aksesoris</label></td>
                        <td align="center"><input name="pemantauan[aksesoris1]" class="form-check-input" type="checkbox" value="Baik" checked id="aksesoris1"></td>
                        <td align="center"><input name="pemantauan[aksesoris2]" class="form-check-input" type="checkbox" value="Baik" checked id="aksesoris2"></td>
                    </tr>   
                </table>
                <br>
                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>TINDAKAN </h3>
                    </div>
                    <br>
                  </center>

                  <div class="form-group row">
                    <label for="cek_alat" class="col-xs-3 col-form-label">Cek Alat</label>
                    <div class="col-xs-9">
                      <textarea name="cek_alat" class="form-control" placeholder="Cek Alat" id="cek_alat" maxlength="255" rows="5"></textarea>
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>SUKU CADANG </h3>
                    </div>
                    <br>
                  </center>

                  <div class="form-group row">
                    <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sukucadang</label>
                    <div class="col-xs-9">
                      <input name="nama_sukucadang" type="text" class="form-control" id="nama_sukucadang" placeholder="Nama Sukucadang">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="volume" class="col-xs-3 col-form-label">Volume</label>
                    <div class="col-xs-9">
                      <input name="volume" type="text" class="form-control" id="volume" placeholder="Volume">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan</label>
                    <div class="col-xs-9">
                      <input name="harga_satuan" type="text" class="form-control" id="harga_satuan" placeholder="Harga Satuan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga</label>
                    <div class="col-xs-9">
                      <input name="jumlah_harga" type="text" class="form-control" id="jumlah_harga" placeholder="Jumlah Harga"
                      readonly>
                    </div>
                  </div>

                  <center>
                    <div class="row" style="border-style: groove;">
                      <h3>EVALUASI & REKOMENDASI</h3>
                    </div>
                    <br>
                  </center>

                  <div class="form-group row">
                    <label for="evaluasi" class="col-xs-3 col-form-label">Evaluasi</label>
                    <div class="col-xs-9">
                      <textarea name="evaluasi" class="form-control" placeholder="Evaluasi" id="evaluasi" maxlength="255" rows="5"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="status" class="col-xs-3 col-form-label">Status</label>
                    <div class="col-xs-9">
                      <select name="status" class="form-control" id="status">
                        <option value="Selesai Bisa Digunakan">Selesai Bisa Digunakan</option>
                        <option value="Dalam Proses Pengerjaan">Dalam Proses Pengerjaan</option>
                      </select>
                      <input name="status1" type="text" class="form-control" id="status1" placeholder="Keterangan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="foto_pendukung" class="col-xs-3 col-form-label">Foto Pendukung </label>
                    <div class="col-xs-9">
                      <input name="foto_pendukung" class="form-control" type="file" id="foto_pendukung">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="panel panel-default thumbnail">
            <div class="panel-body panel-form">
              <!--TABEL-->
              <table class="datatable table table-striped table-bordered" id="scollDatatable" style="width:100%">
                <thead class="table-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Pemeliharaan</th>
                    <th scope="col">Id Aset</th>
                    <th scope="col">Nama Alat</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Tombol Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($invPemantauan as $index => $item)
                  <tr>
                    <td align="center">{{ $index + 1 }}</td>
                    <td align="center">{{ $item->tanggal }}</td>
                    <td align="center">{{ $item->idInv_pemantauan }}</td>
                    <td align="center">{{ $item->nama_alat_pemantauan }}</td>
                    <td align="center">{{ $item->merek_pemantauan }}</td>
                    <td align="center">{{ $item->type_pemantauan }}</td>
                    <td align="center">{{ $item->serial_number_pemantauan }}</td>
                    <td align="center">{{ $item->ruangan_pemantauan }}</td>
                    <td>
                      <a data-toggle="tooltip" data-placement="right" title="View Detail" href="/dashboard/ppm/pemantauan/{{ $item->id_pemantauan }}" class="btn btn-xs btn-primary" target="_blank"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
            </div>
        </div>
      </div>
    </div>
    <!--TABEL-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color:white; background-color:#042a4a;">
        <h5 class="modal-title" id="exampleModalLabel">Camera</h5>
      </div>
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">
          <!-- Area scanner -->
          <div id="qr-reader" style="width: 300px; display: none;"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
@push('addon-script')
<script>
  // *Function autofill form perbaikan* //
  $(document).ready(function() {
    $('#idInv_pemantauan').on('click', function() {
      let idAset = $(this).val().trim(); //masukin nilai id yang dipilih ke variabel 
      console.log("ID yang dimasukan :", idAset); // cek id 

      if (!idAset) return; //Kalo kosong proses berhenti

      //Ambil data pake API dan kirim ke masing-masing field / input        
      fetch(`/dashboard/ppm/getPemantauan/${encodeURIComponent(idAset)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server: ", data);
          let item = Array.isArray(data) ? data[0] : data || {};
          $('#nama_alat_pemantauan').val(item.nama_alat || '');
          $('#serial_number_pemantauan').val(item.serial_number || '');
          $('#merek_pemantauan').val(item.merek || '');
          $('#type_pemantauan').val(item.type || '');
          $('#ruangan_pemantauan').val(item.lokasi_alat || '');
        })
        .catch(error => console.error("Error AJAX:", error));
    });
  });
  // *Function autofill form perbaikan* //
</script>
<script src="https://unpkg.com/html5-qrcode"></script>
<script>
  //FUNGSI CAMERA
  document.addEventListener("DOMContentLoaded", function() {
    const qrScanner = document.getElementById("qr-reader");
    const inputField = document.getElementById("idInv_pemantauan");
    const startScanButton = document.getElementById("startScan");

    let scannerActive = false;
    let html5QrCode;

    startScanButton.addEventListener("click", function() {
      if (!scannerActive) {
        qrScanner.style.display = "block"; // Tampilkan scanner
        scannerActive = true;

        html5QrCode = new Html5Qrcode("qr-reader");
        Html5Qrcode.getCameras().then(devices => {
          if (devices.length > 0) {
            let backCamera = devices.find(device => device.label.toLowerCase().includes("back")) || devices[0];

            html5QrCode.start(
              backCamera.id, // Pilih kamera belakang jika tersedia
              {
                fps: 10,
                qrbox: {
                  width: 250,
                  height: 250
                },
                rememberLastUsedCamera: true
              },
              function(decodedText) {
                inputField.value = decodedText; // Isi input dengan hasil scan
                html5QrCode.stop(); // Hentikan scanner setelah berhasil scan
                qrScanner.style.display = "none"; // Sembunyikan scanner
                scannerActive = false;
              },
              function(errorMessage) {
                console.log(errorMessage); // Debug jika gagal scan
              }
            ).catch(err => {
              console.log("Error memulai scanner: ", err);
            });
          }
        }).catch(err => {
          console.log("Tidak dapat mengakses kamera: ", err);
        });
      }
    });
  });
  //FUNGSI CAMERA
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const hargaInput = document.getElementById("harga_satuan");

    hargaInput.addEventListener("input", function(e) {
        let value = e.target.value.replace(/[^0-9]/g, ""); // Hanya angka
        if (value) {
            e.target.value = formatRupiah(value);
        } else {
            e.target.value = "";
        }
    });

    function formatRupiah(angka) {
        return "Rp " + angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
});
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const volumeInput = document.getElementById("volume");
    const hargaSatuanInput = document.getElementById("harga_satuan");
    const jumlahHargaInput = document.getElementById("jumlah_harga");

    const formatRupiah = (angka) => "Rp " + angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    const cleanRupiah = (angka) => angka.replace(/[^0-9]/g, "");

    const hitungJumlahHarga = () => {
        const volume = parseFloat(volumeInput.value) || 0;
        const hargaSatuan = parseFloat(cleanRupiah(hargaSatuanInput.value)) || 0;
        jumlahHargaInput.value = volume * hargaSatuan ? formatRupiah((volume * hargaSatuan).toString()) : "";
    };

    [hargaSatuanInput, volumeInput].forEach(input => {
        input.addEventListener("input", () => {
            if (input === hargaSatuanInput) input.value = formatRupiah(cleanRupiah(input.value));
            hitungJumlahHarga();
        });
    });
});
</script>
@endpush
@endsection