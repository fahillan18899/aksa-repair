@extends('layouts.admin')

@section('content')
@section('title', 'Request Perbaikan')
<style>
  .modal-body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    /* Pastikan modal body penuh */
  }
</style>
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
                  <!-- Tambahkan tombol dan div untuk scanner -->
                  <div class="form-group row">
                    <i class="text-danger">*</i><label for="note" class="col-xs-12 col-form-label">Klik Colom Pengisian id aset untuk load data setelah id aset muncul atau ada</label>
                  </div>
                  <div class="form-group row">
                    <label for="id" class="col-xs-3 col-form-label">Id Aset <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id" type="text" class="form-control" id="id"
                        placeholder="id alat muncul setelah scan qr / ketik manual id aset alat" style="cursor: pointer;"
                        data-toggle="tooltip" data-placement="top" title="Klik disini untuk load data">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_req" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_req" type="text" class="form-control" id="nama_req" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merek_req" class="col-xs-3 col-form-label">Merek Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_req" type="text" class="form-control" id="merek_req" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type_req" class="col-xs-3 col-form-label">Type Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_req" type="text" class="form-control" id="type_req" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sn_req" class="col-xs-3 col-form-label">Serial Number <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="sn_req" type="text" class="form-control" id="sn_req" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi_req" class="col-xs-3 col-form-label">Lokasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_req" type="text" class="form-control" id="lokasi_req" placeholder="Terisi Otomatis" value="" readonly>
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
                      <input name="tanggal_req" type="text" class="form-control" id="tanggal_req" placeholder="Tanggal"
                        value="<?php date_default_timezone_set('Asia/Jakarta');
                                echo date(now()) ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="button" class="btn btn-primary mt-2" id="startScan" data-toggle="modal" data-target="#exampleModal">Scan QR</button>
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
          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-md-5">
              </div>
              <div class="col-md-5">
                <h2>Tabel Perbaikan</h2>
              </div>
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
                        <th scope="col">No</th>
                        <th scope="col">Id Aset</th>
                        <th scope="col">Nama Alat</th>
                        <th scope="col">Merek Alat</th>
                        <th scope="col">Type Alat</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Lokasi</th>
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
                        <td>{{ $item->lokasi_req }}</td>
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
    </div>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
@endsection
@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(document).ready(function() {
    $('#id').on('click', function() {
      let stateIDInv = $(this).val().trim();
      console.log("ID yang dimasukkan:", stateIDInv);

      if (!stateIDInv) return; // Jika kosong, hentikan proses

      fetch(`/dashboard/ppm/getPesanan/${encodeURIComponent(stateIDInv)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server:", data);
          let alat = Array.isArray(data) ? data[0] : data || {};
          $('#nama_req').val(alat.nama_alat || '');
          $('#merek_req').val(alat.merek || '');
          $('#type_req').val(alat.type || '');
          $('#sn_req').val(alat.serial_number || ''); 
          $('#lokasi_req').val(alat.lokasi_alat || ''); 
        })
        .catch(error => console.error("Error AJAX:", error));
    });
  });
</script>

<!-- Tambahkan script untuk QR Scanner -->
<script src="https://unpkg.com/html5-qrcode"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const qrScanner = document.getElementById("qr-reader");
    const inputField = document.getElementById("id");
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
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    @if(session('success'))
    Swal.fire({
      icon: 'success',
      title: 'Sukses!',
      text: '{{ session("success") }}',
      showConfirmButton: false,
      timer: 2000
    });
    @endif
  });
</script>
@endpush