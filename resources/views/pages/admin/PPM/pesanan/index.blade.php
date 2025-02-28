@extends('layouts.admin')

@section('content')
@section('title', 'Request Perbaikan')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-plus"></i></div>
      <div class="header-title">
        <h1>Form Request Perbaikan</h1>
        <small>Request Perbaikan</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <!-- content -->
    <!-- Tempat menampilkan QR scanner -->
    <div id="qr-reader" style="width: 300px; display: none;"></div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Request Perbaikan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('pesanan.store')}}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs !== "RS0000")
                    <div class="form-group row">
                     <label for="id" class="col-xs-3 col-form-label">Id Aset<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                      <select name="id" class="form-control" id="id">
                      <option>Pilih Id Aset</option>
                        @foreach($dataInv as $dataInv)
                        <option value="<?= $dataInv['id_aset']; ?>">
                                       <?= $dataInv['id_aset']; ?>_<?= $dataInv['nama_alat']; ?>_<?= $dataInv['serial_number']; ?>_<?= $dataInv['lokasi_alat']; ?></option>
                        @endforeach
                      </select>
                     </div>
                    </div> 
                    @endif
                  @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0000")  
                  <!-- Tambahkan tombol dan div untuk scanner -->
                  <div class="form-group row">
                    <label for="id_req" class="col-xs-3 col-form-label">Id Aset <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_req" type="text" class="form-control" id="id_req" placeholder="Scan QR atau input manual">
                      <button type="button" class="btn btn-primary mt-2" id="startScan">Scan QR</button>
                    </div>
                  </div>
                  @endif
                  <div class="form-group row">
                    <label for="nama_req" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_req" type="text" class="form-control" id="nama_req" placeholder="Nama Alat" value="" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merek_req" class="col-xs-3 col-form-label">Merek Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_req" type="text" class="form-control" id="merek_req" placeholder="Merek Alat" value="" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type_req" class="col-xs-3 col-form-label">Type Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_req" type="text" class="form-control" id="type_req" placeholder="Type Alat" value="" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sn_req" class="col-xs-3 col-form-label">Serial Number <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="sn_req" type="text" class="form-control" id="sn_req" placeholder="Serial Number" value="" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kerusakan_req" class="col-xs-3 col-form-label">Kerusakan Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="kerusakan_req" type="text" class="form-control" id="kerusakan_req" placeholder="Kerusakan pada alat / keluhan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pelapor_req" class="col-xs-3 col-form-label">Pelapor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_req" type="text" class="form-control" id="pelapor_req" placeholder="Pelapor" value="{{ Auth::user()->username }}" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal_req" class="col-xs-3 col-form-label">Tanggal <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_req" type="text" class="form-control" id="tanggal_req" placeholder="Tanggal" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                                                                                                echo date(now()) ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button">Save</button>
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

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col" class="none">No</th>
                      <th scope="col">Id Aset</th>
                      <th scope="col">Nama Alat</th>
                      <th scope="col">Merek Alat</th>
                      <th scope="col">Type Alat</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Kerusakan Alat</th>
                      <th scope="col">Pelapor</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Tombol_Aksi_Table</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->nama_req }}</td>
                      <td>{{ $item->merek_req }}</td>
                      <td>{{ $item->type_req }}</td>
                      <td>{{ $item->sn_req }}</td>
                      <td>{{ $item->kerusakan_req }}</td>
                      <td>{{ $item->pelapor_req }}</td>
                      <td>{{ $item->tanggal_req }}</td>
                      <td>
                        <form action="{{ route('pesanan.destroy' ,$item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Validasi">
                            Validasi Perbaikan
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
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection
@push('addon-script')
<script type="text/javascript">
  $('select[name="id"]').on('change', function() {
    var stateIDInv = $(this).val();
    console.log(stateIDInv);
    if (stateIDInv) {
      $.ajax({
        url: '/dashboard/ppm/getPesanan/' + stateIDInv,
        type: "GET",
        dataType: "json",
        success: function(data) {
          console.log(data);
          $.each(data, function(key, value) {
            $('input[id="nama_req"]').val(value.nama_alat);
            $('input[id="merek_req"]').val(value.merek);
            $('input[id="type_req"]').val(value.type);
            $('input[id="sn_req"]').val(value.serial_number);
          });
        }
      });
    } else {
      $('input[id="nama_req"]').empty();
      $('input[id="merek_req"]').empty();
      $('input[id="type_req"]').empty();
      $('input[id="sn_req"]').empty();
    }
  })
</script>

<!-- Tambahkan script untuk mengaktifkan QR Scanner -->
<script src="https://unpkg.com/html5-qrcode"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const qrScanner = document.getElementById("qr-reader");
    const inputField = document.getElementById("id_req");
    const startScanButton = document.getElementById("startScan");

    let scannerActive = false;
    let html5QrCode;

    startScanButton.addEventListener("click", function() {
      if (!scannerActive) {
        qrScanner.style.display = "block"; // Tampilkan scanner
        scannerActive = true;

        html5QrCode = new Html5Qrcode("qr-reader");
        html5QrCode.start(
          { facingMode: "environment" }, // Gunakan kamera belakang
          {
            fps: 10,  // Frame per detik
            qrbox: { width: 250, height: 250 },
            rememberLastUsedCamera: true, // Ingat kamera terakhir digunakan
            supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_CAMERA],
            experimentalFeatures: { useBarCodeDetectorIfSupported: true } // Gunakan detektor barcode jika didukung
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
    });
  });
</script>
@endpush