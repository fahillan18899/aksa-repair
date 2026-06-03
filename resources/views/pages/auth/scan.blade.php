<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Wyasa PPM</title>
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- 7 stroke css -->
    <link href="{{ url('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css" />
    <!-- style css -->
    <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div class="login-wrapper">
      <div class="container-center">
        <div class="panel panel-bd">
          <div class="panel-heading">
            <div class="view-header">
              <div class="header-icon">
                <i class="pe-7s-camera" aria-hidden="true"></i>
              </div>
              <div class="header-title">
                <h3>Scanner Qr</h3>
                <small>Tekan tombol untuk scan / aktifkan camera</small>
              </div>
            </div>
            <div class="">
              <br>
              <!-- alert message -->
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
            </div>
          </div>


          <div class="panel-body">
            <!-- Button Android -->
            <div class="pane panel-default thumbnail">
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="text-center">
                    <h5>Android</h5>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal1">Scan</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Button Android End-->
            <!-- Button Iphone -->
            <div class="panel panel-default thumbnail">
              <div class="panel-heading no-print">
                <div class="text-center">
                  <h2>Scanner</h2>
                </div>
              </div>
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="text-center">
                    <h5>Iphone</h5>
                    <button class="btn btn-primary" onclick="startScan()">Scan</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Button Iphone End-->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal android -->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="qrModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">QR Scanner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModalBtn">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <div class="preview-container">
              <video id="preview"></video>
            </div>
            <button id="toggleCameraBtn" class="btn btn-secondary">
              Ganti Camera
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal android end-->
    <!-- Modal Iphone -->
    <div id="modal2" class="modal" tabindex="-1">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title">Qr Scanner</h5>
          <button type="button" class="close" onclick="stopScan()">&times;</button>
        </div>
        <div class="modal-body">
          <div id="reader">
            <button class="btn btn-secondary mt-2" onclick="switchCamera()">Ganti Kamera</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Iphone end-->
    <script src="{{ url('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
  </body>
  <script src="{{ url('assets/js/instascan.min.js') }}"></script>
  <!-- Fungsi scanner android -->
    <script>
      let scanner = new Instascan.Scanner({
        video: document.getElementById('preview'),
        mirror: false
      });

      let cameras = [];
      let activeCameraIndex = 0;

      //Saat berhasil scan qr
      scanner.addListener('scan', function(content) {
        $('#modal1').modal('hide');
        window.location.href = content;
      });

      //Fungsi untuk memulai kamera tertentu
      function startCamera(index) {
        if (cameras.length > 0) {
          activeCameraIndex = index;
          scanner.start(cameras[activeCameraIndex]);
        }
      }

      //Load camera list dan mulai kamera default saat modal muncul
      $('#modal1').on('show.bs.modal', function() {
        Instascan.Camera.getCameras().then(function(availableCameras) {
          cameras = availableCameras;
          if (cameras.length > 0) {
            startCamera(0) //Default: kamera belakang
          }
        }).catch(function(e) {
          alert("Gagal memuat kamera: " + e);
        });
      });

      //Stop kamera saat modal ditutup
      $('#modal1').on('hidden.ns.modal', function() {
        scanner.stop();
      });

      //Tombol switch kamera
      document.getElementById('toggleCameraBtn'), addEventListener('click', function() {
        if (cameras.length > 1) {
          activeCameraIndex = (activeCameraIndex + 1) % cameras.length;
          startCamera(activeCameraIndex);
        }
      });
    </script>
  <!-- Fungsi scanner android end-->
  <!-- Fungsi scanner iphone -->
    <script>
      let currentCameraId = null;
      let cameraList = [];
      let currentCameraIndex = 0;
      let qrScanner;

      function startScan() {
        $('#modal2').modal('show');

        Html5Qrcode.getCameras().then(cameras => {
          cameraList = cameras;
          if (cameras.length === 0) {
            alert("Tidak ada kamera tersedia.");
            return;
          }

          currentCameraId = cameras[currentCameraIndex].id;

          qrScanner = new Html5Qrcode("reader");
          qrScanner.start(
            currentCameraId, {
              fps: 10,
              qrbox: 250
            },
            qrCodeMessage => {
              console.log(`QR code: ${qrCodeMessage}`);
              qrScanner.stop().then(() => {
                $('#modal2').modal('hidden');
                window.location.href = qrCodeMessage;
              });
            },
            errorMessage => {
              //console.log(`Scan error: ${errorMessage}`);
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
            $('#modal2').modal('hide');
          });
        }
      }

      function switchCamera() {
        if (cameraList.length > 1) {
          stopScan();
          currentCameraIndex = (currentCameraIndex + 1) % cameraList.length;
          startScan();
        } else {
          alert("Tidak ada kamera lain");
        }
      }
    </script>
  <!-- Fungsi scanner iphone end-->
</html>