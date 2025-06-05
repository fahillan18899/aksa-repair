@extends('layouts.admin')

@section('content')
@section('title', 'Scanner QR')
<style>
  .preview-container {
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
    border: 2px solid #ccc;
  }

  #preview {
    width: 100%;
    height: auto;
    border-radius: 10px;
  }

  .modal-lg {
    max-width: 600px;
  }
</style>

<!-- Tombol Trigger Modal -->
 
<div class="text-center my-4" style="padding-top: 100px; margin-left: 150px; padding-bottom: 380px">
  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#qrModal">
    <i class="fa fa-qrcode"></i> Scan QR Code
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="qrModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">QR Code Scanner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModalBtn">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <div class="preview-container">
          <video id="preview"></video>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('addon-script')
<script src="{{ url('assets/js/instascan.min.js') }}"></script>
<script>
  let scanner = new Instascan.Scanner({
    video: document.getElementById('preview'),
    mirror: false
  });

  // Ketika berhasil scan
  scanner.addListener('scan', function (content) {
    $('#qrModal').modal('hide');
    window.location.href = "{{ url('dashboard/ppm/data_alat') }}/" + content;
  });

  // Buka kamera saat modal dibuka
  $('#qrModal').on('shown.bs.modal', function () {
    Instascan.Camera.getCameras().then(cameras => {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        alert('Kamera tidak ditemukan.');
      }
    }).catch(e => {
      alert('Gagal mengakses kamera: ' + e);
    });
  });

  // Stop kamera saat modal ditutup
  $('#qrModal').on('hidden.bs.modal', function () {
    scanner.stop();
  });
</script>
@endpush