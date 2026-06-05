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
<style>
/* Modal scanner fullscreen mobile */
#modal1 .modal-dialog,
#modal2 .modal-dialog {
    margin: 0;
    width: 100%;
    height: 100%;
    max-width: 100%;
}

#modal1 .modal-content,
#modal2 .modal-content {
    height: 100vh;
    border-radius: 0;
    border: none;
}

.preview-container {
    position: relative;
    width: 100%;
    max-width: 450px;
    margin: auto;
}

#preview {
    width: 100%;
    min-height: 350px;
}

#preview video {
    width: 100% !important;
    height: 70vh !important;
    object-fit: cover;
    border-radius: 10px;
}

.qr-frame {
    position: absolute;
    width: 220px;
    height: 220px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
}

.corner {
    position: absolute;
    width: 40px;
    height: 40px;
    border-color: #000000;
    border-style: solid;
    border-width: 0;
}

.tl {
    top: 0;
    left: 0;
    border-top-width: 5px;
    border-left-width: 5px;
}

.tr {
    top: 0;
    right: 0;
    border-top-width: 5px;
    border-right-width: 5px;
}

.bl {
    bottom: 0;
    left: 0;
    border-bottom-width: 5px;
    border-left-width: 5px;
}

.br {
    bottom: 0;
    right: 0;
    border-bottom-width: 5px;
    border-right-width: 5px;
}

#reader {
    width: 100% !important;
}

#reader video {
    width: 100% !important;
    border-radius: 10px;
}

.modal-header {
    padding: 10px 15px;
}

.modal-body {
    padding: 10px;
}

#toggleCameraBtn,
#reader button {
    width: 100%;
    margin-top: 10px;
}

/* Khusus HP */
@media (max-width: 768px) {
    #modal1 .modal-dialog,
    #modal2 .modal-dialog {
        width: 100%;
        height: 100%;
        margin: 0;
    }

    #preview {
        width: 100%;
        height: auto;
    }

    #reader {
        width: 100%;
    }
}
</style>
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
          <!-- Font Awesome -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

          <!-- Button Android -->
          <div class="panel panel-default thumbnail">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="text-center">
                  <h5>
                    <i class="fa-brands fa-android text-success"></i>
                    Android
                  </h5>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                    <i class="fa-solid fa-qrcode"></i> Scan
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Button Android End-->

          <!-- Button iPhone -->
          <div class="panel panel-default thumbnail">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="text-center">
                  <h5>
                    <i class="fa-brands fa-apple"></i>
                    iPhone
                  </h5>
                  <button class="btn btn-primary" onclick="startScan()">
                    <i class="fa-solid fa-qrcode"></i> Scan
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Button iPhone End-->

          <!-- Button exit -->
              <div class="row">
                <div class="text-center">
                  <a href="{{ url('/') }}" class="btn btn-danger">
                    <i class="fa fa-sign-out"></i> Keluar
                  </a>
                </div>
              </div>
          <!-- Button exit End-->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal android -->
      <div class="modal fade" id="modal1" tabindex="-1">
          <div class="modal-dialog" role="document">
              <div class="modal-content">

                  <div class="modal-header">
                      <h5 class="modal-title">QR Scanner</h5>
                      <button type="button" class="close" data-dismiss="modal">
                          <span>&times;</span>
                      </button>
                  </div>

                  <div class="modal-body text-center">
                      <div class="preview-container">
                          <div id="preview"></div>
                          <div class="qr-frame">
                              <span class="corner tl"></span>
                              <span class="corner tr"></span>
                              <span class="corner bl"></span>
                              <span class="corner br"></span>
                          </div>
                      </div>

                      <button id="toggleCameraBtn" class="btn btn-primary btn-block mt-3">
                          <i class="fa-solid fa-rotate"></i>
                          Ganti Kamera
                      </button>
                  </div>

              </div>
          </div>
      </div>
    <!-- Modal android end-->

    <!-- Modal Iphone -->
      <div class="modal fade" id="modal2" tabindex="-1">
          <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header">
                      <h5 class="modal-title">QR Scanner</h5>
                      <button type="button" class="close" onclick="stopScan()">
                          <span>&times;</span>
                      </button>
                  </div>

                  <div class="modal-body">
                      <div id="reader"></div>

                      <button class="btn btn-primary btn-block mt-3"
                              onclick="switchCamera()">
                          <i class="fa-solid fa-rotate"></i>
                          Ganti Kamera
                      </button>
                  </div>

              </div>
          </div>
      </div>
    <!-- Modal Iphone end-->
    <script src="{{ url('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
  </body>
<script src="https://unpkg.com/@zxing/browser@latest"></script>
<script src="https://unpkg.com/html5-qrcode"></script>
<!-- Fungsi scanner android -->
<script>

let androidScanner = null;
let cameras = [];
let activeCameraIndex = 0;

async function startCamera(index) {

    try {

        activeCameraIndex = index;

        if (!androidScanner) {
            androidScanner = new Html5Qrcode("preview");
        }

        await androidScanner.start(

            cameras[activeCameraIndex].id,

            {
                fps: 20,

                qrbox: {
                    width: 280,
                    height: 280
                },

                aspectRatio: 1.0,

                videoConstraints: {
                    facingMode: "environment",
                    width: {
                        ideal: 1920
                    },
                    height: {
                        ideal: 1080
                    }
                }
            },

            (decodedText) => {

                stopAndroidScanner();

                $('#modal1').modal('hide');

                window.location.href = decodedText;

            },

            (errorMessage) => {
                // abaikan
            }

        );

    } catch (e) {

        console.log(e);

        alert("Gagal membuka kamera");

    }

}

async function stopAndroidScanner() {

    try {

        if (
            androidScanner &&
            androidScanner.isScanning
        ) {

            await androidScanner.stop();
            await androidScanner.clear();

        }

    } catch (e) {

        console.log(e);

    }

}

$('#modal1').on('show.bs.modal', async function() {

    try {

        cameras =
            await Html5Qrcode.getCameras();

        if (!cameras.length) {

            alert('Kamera tidak ditemukan');
            return;

        }

        let backCameraIndex =
            cameras.findIndex(camera => {

                const label =
                    (camera.label || '')
                    .toLowerCase();

                return (
                    label.includes('back') ||
                    label.includes('rear') ||
                    label.includes('environment')
                );

            });

        if (backCameraIndex >= 0) {

            await startCamera(backCameraIndex);

        } else {

            await startCamera(0);

        }

    } catch (e) {

        console.log(e);

        alert("Gagal memuat kamera");

    }

});

$('#modal1').on('hidden.bs.modal', async function() {

    await stopAndroidScanner();

});

document
.getElementById('toggleCameraBtn')
.addEventListener('click', async function() {

    if (cameras.length <= 1) {

        alert('Tidak ada kamera lain');
        return;

    }

    await stopAndroidScanner();

    activeCameraIndex =
        (activeCameraIndex + 1) % cameras.length;

    androidScanner =
        new Html5Qrcode("preview");

    await startCamera(activeCameraIndex);

});

</script>
<!-- Fungsi scanner android end -->

<!-- Fungsi scanner iphone -->
<script>

let currentCameraId = null;
let cameraList = [];
let currentCameraIndex = 0;
let qrScanner = null;

function startScan() {

    $('#modal2').modal('show');

    Html5Qrcode.getCameras()

    .then(cameras => {

        cameraList = cameras;

        if (cameraList.length === 0) {

            alert("Tidak ada kamera tersedia.");
            return;

        }

        currentCameraId =
            cameraList[currentCameraIndex].id;

        if (!qrScanner) {

            qrScanner =
                new Html5Qrcode("reader");

        }

        qrScanner.start(

            currentCameraId,

        {
            fps: 30,

            qrbox: {
                width: 200,
                height: 200
            },

            aspectRatio: 1.0,

            disableFlip: false,

            videoConstraints: {
                facingMode: {
                    ideal: "environment"
                },
                width: {
                    ideal: 1920
                },
                height: {
                    ideal: 1080
                }
            }
        },

            qrCodeMessage => {

                qrScanner.stop()

                .then(() => {

                    qrScanner.clear();

                    $('#modal2').modal('hide');

                    window.location.href =
                        qrCodeMessage;

                });

            },

            errorMessage => {
                // abaikan
            }

        );

    })

    .catch(err => {

        alert(
            "Gagal mengakses kamera: " + err
        );

    });

}

function stopScan() {

    if (qrScanner) {

        qrScanner.stop()

        .then(() => {

            qrScanner.clear();

            $('#modal2').modal('hide');

        })

        .catch(err => {

            console.log(err);

            $('#modal2').modal('hide');

        });

    } else {

        $('#modal2').modal('hide');

    }

}

function switchCamera() {

    if (cameraList.length <= 1) {

        alert("Tidak ada kamera lain");
        return;

    }

    qrScanner.stop()

    .then(() => {

        qrScanner.clear();

        currentCameraIndex =
            (currentCameraIndex + 1)
            % cameraList.length;

        startScan();

    })

    .catch(err => {

        console.log(err);

    });

}

$('#modal2').on('hidden.bs.modal', function() {

    if (qrScanner) {

        qrScanner.stop()

        .then(() => {

            qrScanner.clear();

        })

        .catch(() => {});

    }

});

</script>
<!-- Fungsi scanner iphone end -->
</html>