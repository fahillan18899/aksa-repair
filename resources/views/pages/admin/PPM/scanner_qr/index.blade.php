@extends('layouts.admin')

@section('content')
@section('title', 'Scanner QR')
<style>
  .preview-container {
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
    border: 2px solid #ccc;
    margin-bottom: 1rem;
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
<!-- Tambahkan dari CDN -->
<script src="https://unpkg.com/html5-qrcode"></script>

<!-- Tombol -->
<div class="text-center" style="padding-top: 500px;">
  <button class="btn btn-primary" onclick="startScan()">Scan QR</button>
</div>

<!-- Modal -->
<div id="qrModal" class="modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h5 class="modal-title">QR Scanner</h5>
        <button type="button" class="close" onclick="stopScan()">&times;</button>
      </div>
      <div class="modal-body">
        <div id="reader" style="width:100%"></div>
        <button class="btn btn-secondary mt-2" onclick="switchCamera()">Ganti Kamera</button>
      </div>
    </div>
  </div>
</div>

@endsection
@push('addon-script')
<script>
  let currentCameraId = null;
  let cameraList = [];
  let currentCameraIndex = 0;
  let qrScanner;

  function startScan() {
    $('#qrModal').modal('show');

    Html5Qrcode.getCameras().then(cameras => {
      cameraList = cameras;
      if (cameras.length === 0) {
        alert("Tidak ada kamera tersedia.");
        return;
      }

      currentCameraId = cameras[currentCameraIndex].id;

      qrScanner = new Html5Qrcode("reader");
      qrScanner.start(
        currentCameraId,
        {
          fps: 10,
          qrbox: 250
        },
        qrCodeMessage => {
          console.log(`QR Code: ${qrCodeMessage}`);
          qrScanner.stop().then(() => {
            $('#qrModal').modal('hide');
            window.location.href = "{{ url('dashboard/ppm/data_alat') }}/" + qrCodeMessage;
          });
        },
        errorMessage => {
          // console.log(`Scan error: ${errorMessage}`);
        }
      );
    }).catch(err => {
      alert("Gagal mengakses kamera: " + err);
    });
  }

  function stopScan() {
    if (qrScanner) {
      qrScanner.stop().then(() => {
        qrScanner.clear();
        $('#qrModal').modal('hide');
      });
    }
  }

  function switchCamera() {
    if (cameraList.length > 1) {
      stopScan();
      currentCameraIndex = (currentCameraIndex + 1) % cameraList.length;
      startScan();
    } else {
      alert("Tidak ada kamera lain.");
    }
  }
</script>

@endpush