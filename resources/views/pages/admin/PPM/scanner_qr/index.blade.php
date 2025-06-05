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
        <button id="toggleCameraBtn" class="btn btn-secondary">
          Ganti Kamera
        </button>
      </div>
    </div>
  </div>
</div>
@endsection
@push('addon-script')
<script>
  let scanner = new Instascan.Scanner({
    video: document.getElementById('preview'),
    mirror: false
  });

  let cameras = [];
  let activeCameraIndex = 0;

  //Fungsi memilih kamera berdasarkan label
  function getCameraByFacing(facing) {
    facing = facing.toLowerCase();
    return cameras.find(cam =>
      cam.name.toLowerCase().includes(facing)
    );
  }

  //Fungsi untuk memulai kamera dari index atau camera object
  function startCamera(cameraOrIndex) {
    let camera = typeof cameraOrIndex === 'number' ? cameras[cameraOrIndex] : cameraOrIndex;
    if (camera) {
      scanner.start(camera);
    } else {
      alert("Kamera tidak ditemukan");
    }
  }

  // Ketika berhasil scan
  scanner.addListener('scan', function (content) {
    $('#qrModal').modal('hide');
    window.location.href = "{{ url('dashboard/ppm/data_alat') }}/" + content;
  });

  //Modal terbuka load kamera
  $('#qrModal').on('show.bs.modal', function () {
    Instascan.Camera.getCameras().then(function (availableCameras) {
      cameras = availableCameras;
      console.log("Semua kamera:", cameras);

      let frontCam = getCameraByFacing("front");
      let fallbackCam = cameras[1];

      if(frontCam) {
        activeCameraIndex = cameras.indexOf(frontCam);
        startCamera(frontCam);
      } else {
        activeCameraIndex = 1;
        startCamera(fallbackCam);
      }
    }).catch(function (e) {
      alert("Gagal memuat kamera" + e);
    });
  });

  // Stop kamera saat modal ditutup
  $('#qrModal').on('hidden.bs.modal', function () {
    scanner.stop();
  });

  //Tombol toggle kamera
  document.getElementById('toggleCameraBtn').addEventListener('click', function () {
    if(cameras.length > 1) {
      activeCameraIndex = (activeCameraIndex + 1) % cameras.length;
      startCamera(activeCameraIndex);
    } else {
      alert("Hanya ada satu kamera.")
    }
  });
</script>
@endpush