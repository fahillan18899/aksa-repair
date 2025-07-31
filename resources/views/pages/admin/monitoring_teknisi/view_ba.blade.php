@extends('layouts.admin')

@section('content')
@section('title', 'Berita Acara')
<style>
  .table-striped {
    width: 100%;
    border-collapse: collapse;
  }

  .table-striped th,
  .table-striped td {
    border: 2px solid black;
    padding: 8px;
  }

  .panel {
    border: 1px solid black;
  }

  #ttd_canvas1 {
    border: 2px dotted rgb(21, 20, 20);
    border-radius: 15px;
    cursor: crosshair;
  }

  #ttd_canvas2 {
    border: 2px dotted rgb(21, 20, 20);
    border-radius: 15px;
    cursor: crosshair;
  }

  #ttd_canvas3 {
    border: 2px dotted rgb(21, 20, 20);
    border-radius: 15px;
    cursor: crosshair;
  }

  .modal-dialog {
    width: 100%;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-content {
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .modal-body {
    flex: 1;
    overflow-y: auto;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Berita Acara</h1>
        <small>Daftar Berita Acara</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!-- content -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>BERITA ACARA BEKERJAAN</h1>
          </div>

          <div class="panel-body panel-form" id="print_me">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{ url('assets/images/ba_aksa.png') }}" alt="kop" style="width: 300px;"><br>
                <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <!-- Berita Acara -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b style="color: blue;">No.Berita Acara</b></td>
                        <td class="text-center">{{ $item->ba[1] ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>No.Urut dari</b></td>
                        <td class="text-center">{{ $item->ba[2] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Tanggal BA</b></td>
                        <td class="text-center">{{ $item->ba[3] ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>No.Referensi</b></td>
                        <td class="text-center">{{ $item->ba[4] ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Berita Acara -->
                  <!-- Rs -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b style="color: blue;">Nama Instansi</b></td>
                        <td class="text-center" colspan="3">{{ $item->rs[1] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" rowspan="3" width="20%"><b>Alamat</b></td>
                        <td class="text-center" rowspan="3">{{ $item->rs[2] ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>Jenis Instansi</b></td>
                        <td class="text-center">{{ $item->rs[3] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Telepon</b></td>
                        <td class="text-center">{{ $item->rs[4] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Email</b></td>
                        <td class="text-center">{{ $item->rs[5] ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Rs -->
                  <!-- Kontak -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b style="color: blue;">Nama Kontak</b></td>
                        <td class="text-center" colspan="3">{{ $item->kontak[1] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Bagian</b></td>
                        <td class="text-center">{{ $item->kontak[2] ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>No.HP</b></td>
                        <td class="text-center">{{ $item->kontak[3] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Jabatan</b></td>
                        <td class="text-center">{{ $item->kontak[4] ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>Email</b></td>
                        <td class="text-center">{{ $item->kontak[5] ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Kontak -->
                  <!-- Alat -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b style="color: blue;">Nama Alat</b></td>
                        <td class="text-center" colspan="3">{{ $item->alat[1] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Merk</b></td>
                        <td class="text-center">{{ $item->alat[2] ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>Lokasi</b></td>
                        <td class="text-center">{{ $item->alat[3] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>Tipe</b></td>
                        <td class="text-center">{{ $item->alat[4] ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>Tahun</b></td>
                        <td class="text-center">{{ $item->alat[5] ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>No.Seri</b></td>
                        <td class="text-center">{{ $item->alat[6] ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>Vendor</b></td>
                        <td class="text-center">{{ $item->alat[7] ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Alat -->
                  <!-- Jenis -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Jenis Panggilan</b></td>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Jenis Layanan</b></td>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Lokasi Pekerjaan</b></td>
                      </tr>
                      <tr>
                        <td class="text-center">{{ $item->jenis[1] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Kontrak Servis/PPM</b></td>
                        <td class="text-center">{{ $item->jenis[2] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Pemeliharaan / Perbaikan</b></td>
                        <td class="text-center">{{ $item->jenis[3] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>di tempat instansi</b></td>
                      </tr>
                      <tr>
                        <td class="text-center">{{ $item->jenis[4] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Panggilan (on call)</b></td>
                        <td class="text-center">{{ $item->jenis[5] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Instalasi / Uji Fungsi</b></td>
                        <td class="text-center">{{ $item->jenis[6] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>di Workshop kantor</b></td>
                      </tr>
                      <tr>
                        <td class="text-center">{{ $item->jenis[7] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Garansi</b></td>
                        <td class="text-center">{{ $item->jenis[8] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Kalibrasi</b></td>
                        <td class="text-center">{{ $item->jenis[9] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Pihak ke-3</b></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- Jenis -->
                  <!-- SKC -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td colspan="4" class="text-center" width="20%"><b style="color: blue;">SKC</b></td>
                      </tr>
                      <tr>
                        <td class="text-center">{{ $item->skc[1] ?? '-' }}</td>
                        <td class="text-center">{{ $item->skc[2] ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <!-- SKC -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b>Keluhan / Kondisi Sekarang</b></td>
                      </tr>
                      <tr>
                        <td class="text-center">{{ $item->keluhan ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b>Aksi / Tindakan</b></td>
                      </tr>
                      <tr>
                        <td class="text-center">{{ $item->aksi ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b>Hasil / Kondisi Akhir</b></td>
                      </tr>
                      <tr>
                        <td class="text-center">{{ $item->hasil ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" colspan="2"><img src="{{ url('assets/images/aksa.png') }}" id="ttd_image1" width="20%" alt="Ttd"></td>
                        <td class="text-center" colspan="2"><img src="{{ url('assets/images/aksa.png') }}" id="ttd_image2" width="20%" alt="Ttd"></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>PJ ALAT / RUANGAN</b></td>
                        <td class="text-center">{{ $item->pj ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>TEKNISI AJS</b></td>
                        <td class="text-center">{{ $item->teknisi ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>TANGGAL</b></td>
                        <td class="text-center">{{ $item->tanggal_1 ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>TANGGAL</b></td>
                        <td class="text-center">{{ $item->tanggal_2 ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-offset-3 col-sm-6">
              <button type="button" class="btn btn-info mb-3" style="margin-right: 10px;"
              data-toggle="modal" data-target="#exampleModal">TTD</button>
              <button type="button" onclick="printMy('print_me')"
                class="btn btn-primary" style="margin-left: 180px;"><i class="fa fa-print"></i> Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- /.content -->
<!-- Modal  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color:white; background-color:#042a4a;">
        <h5 class="modal-title" id="exampleModalLabel">View Data</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <table>
            <tr>
              <!-- ttd 1-->
              <!-- Content -->
              <td>
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                    <p>Tanda tangan Kepala Ruangan</p>
                  </div>
                </div>
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                    <canvas id="ttd_canvas1" width="150" height="100">
                      Get a better browser, bro.
                    </canvas>
                  </div>
                </div>
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                    <button class="btn btn-primary" id="ttd_submitBtn1">Submit Signature</button>
                    <button class="btn btn-default" id="ttd_clearBtn1">Clear Signature</button>
                  </div>
                </div>
                <br />
                <div class="row hidden">
                  <div class="col-md-12">
                    <textarea id="ttd_dataUrl1" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
                  </div>
                </div>
                <br />
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                  </div>
                </div>
              </td>
              <!-- ttd 1N-->
              <!-- ttd 2-->
              <!-- Content -->
              <td>
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                    <p>Tanda tangan Teknisi</p>
                  </div>
                </div>
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                    <canvas id="ttd_canvas2" width="150" height="100">
                      Get a better browser, bro.
                    </canvas>
                  </div>
                </div>
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                    <button class="btn btn-primary" id="ttd_submitBtn2">Submit Signature</button>
                    <button class="btn btn-default" id="ttd_clearBtn2">Clear Signature</button>
                  </div>
                </div>
                <br />
                <div class="row hidden">
                  <div class="col-md-12">
                    <textarea id="ttd_dataUrl2" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
                  </div>
                </div>
                <br />
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">

                  </div>
                </div>
              </td>
              <!-- ttd 2N-->
            </tr>
          </table>
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
<script>
  // FUNGSI PRINT
  function printMy(print_me) {
    var printContent = document.getElementById("print_me").outerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML =
      `<html>
          <head>
            <title>Print Table</title>
          </head>
          <style>
            .table-striped {
            width: 100%;
            border-collapse: collapse;
            }

            .table-striped th,
            .table-striped td {
            border: 1px solid black;
            padding: 8px;
            }
            .panel { border: 1px solid black }
          </style>
          <body>
          <h1>SURAT BERITA ACARA</h1>
              ${printContent}
          </body>
        </html>`;
    window.print();
    document.body.innerHTML = originalContent;
  }
  // FUNGSI PRINT END
</script>

<script>
  // FUNGSI TTD DIGITAL
  // ttd 1
  (function() {
    window.requestAnimFrame = (function(callback) {
      return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimaitonFrame ||
        function(callback) {
          window.setTimeout(callback, 1000 / 60);
        };
    })();

    var canvas = document.getElementById("ttd_canvas1");
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#222222";
    ctx.lineWidth = 4;

  // Gambar background aksa.png
  var bgImage = new Image();
  bgImage.src = "{{ url('assets/images/aksa.png') }}"; // Blade syntax
  bgImage.onload = function () {
    drawBackground();
  };

  function drawBackground() {
    ctx.globalAlpha = 0.3; // transparansi
    ctx.drawImage(bgImage, 0, 0, canvas.width, canvas.height);
    ctx.globalAlpha = 1.0; // reset untuk signature
  }

  function clearCanvas() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBackground();
  }

    var drawing = false;
    var mousePos = {
      x: 0,
      y: 0
    };


    // --
    var lastPos = mousePos;

    canvas.addEventListener("mousedown", function(e) {
      drawing = true;
      lastPos = getMousePos(canvas, e);
    }, false);

    canvas.addEventListener("mouseup", function(e) {
      drawing = false;
    }, false);

    canvas.addEventListener("mousemove", function(e) {
      mousePos = getMousePos(canvas, e);
    }, false);
    // --

    // Add touch event support for mobile
    canvas.addEventListener("touchstart", function(e) {

    }, false);

    canvas.addEventListener("touchmove", function(e) {
      var touch = e.touches[0];
      var me = new MouseEvent("mousemove", {
        clientX: touch.clientX,
        clientY: touch.clientY
      });
      canvas.dispatchEvent(me);
    }, false);

    canvas.addEventListener("touchstart", function(e) {
      mousePos = getTouchPos(canvas, e);
      var touch = e.touches[0];
      var me = new MouseEvent("mousedown", {
        clientX: touch.clientX,
        clientY: touch.clientY
      });
      canvas.dispatchEvent(me);
    }, false);

    canvas.addEventListener("touchend", function(e) {
      var me = new MouseEvent("mouseup", {});
      canvas.dispatchEvent(me);
    }, false);

    function getMousePos(canvasDom, mouseEvent) {
      var rect = canvasDom.getBoundingClientRect();
      return {
        x: mouseEvent.clientX - rect.left,
        y: mouseEvent.clientY - rect.top
      }
    }

    function getTouchPos(canvasDom, touchEvent) {
      var rect = canvasDom.getBoundingClientRect();
      return {
        x: touchEvent.touches[0].clientX - rect.left,
        y: touchEvent.touches[0].clientY - rect.top
      }
    }

    function renderCanvas() {
      if (drawing) {
        ctx.moveTo(lastPos.x, lastPos.y);
        ctx.lineTo(mousePos.x, mousePos.y);
        ctx.stroke();
        lastPos = mousePos;
      }
    }
    // Add touch event support for mobile N

    // Prevent scrolling when touching the canvas
    document.body.addEventListener("touchstart", function(e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);
    document.body.addEventListener("touchend", function(e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);
    document.body.addEventListener("touchmove", function(e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);

    (function drawLoop() {
      requestAnimFrame(drawLoop);
      renderCanvas();
    })();

    function clearCanvas() {
      canvas.width = canvas.width;
    }
    // Prevent scrolling when touching the canvas N

    // Set up the UI
    var sigText = document.getElementById("ttd_dataUrl1");
    var sigImage = document.getElementById("ttd_image1");
    var clearBtn = document.getElementById("ttd_clearBtn1");
    var submitBtn = document.getElementById("ttd_submitBtn1");
    clearBtn.addEventListener("click", function(e) {
      clearCanvas();
      sigText.innerHTML = "Data URL for your signature will go here!";
      sigImage.setAttribute("src", "");
    }, false);
    submitBtn.addEventListener("click", function(e) {
      var dataUrl = canvas.toDataURL();
      sigText.innerHTML = dataUrl;
      sigImage.setAttribute("src", dataUrl);
    }, false);

  })();
  // ttd S 1

  // ttd 2
  (function() {
    window.requestAnimFrame = (function(callback) {
      return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimaitonFrame ||
        function(callback) {
          window.setTimeout(callback, 1000 / 60);
        };
    })();

    var canvas = document.getElementById("ttd_canvas2");
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#222222";
    ctx.lineWidth = 4;

  // Gambar background aksa.png
  var bgImage = new Image();
  bgImage.src = "{{ url('assets/images/aksa.png') }}"; // Blade syntax
  bgImage.onload = function () {
    drawBackground();
  };

  function drawBackground() {
    ctx.globalAlpha = 0.3; // transparansi
    ctx.drawImage(bgImage, 0, 0, canvas.width, canvas.height);
    ctx.globalAlpha = 1.0; // reset untuk signature
  }

  function clearCanvas() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBackground();
  }

    var drawing = false;
    var mousePos = {
      x: 0,
      y: 0
    };


    // --
    var lastPos = mousePos;

    canvas.addEventListener("mousedown", function(e) {
      drawing = true;
      lastPos = getMousePos(canvas, e);
    }, false);

    canvas.addEventListener("mouseup", function(e) {
      drawing = false;
    }, false);

    canvas.addEventListener("mousemove", function(e) {
      mousePos = getMousePos(canvas, e);
    }, false);
    // --

    // Add touch event support for mobile
    canvas.addEventListener("touchstart", function(e) {

    }, false);

    canvas.addEventListener("touchmove", function(e) {
      var touch = e.touches[0];
      var me = new MouseEvent("mousemove", {
        clientX: touch.clientX,
        clientY: touch.clientY
      });
      canvas.dispatchEvent(me);
    }, false);

    canvas.addEventListener("touchstart", function(e) {
      mousePos = getTouchPos(canvas, e);
      var touch = e.touches[0];
      var me = new MouseEvent("mousedown", {
        clientX: touch.clientX,
        clientY: touch.clientY
      });
      canvas.dispatchEvent(me);
    }, false);

    canvas.addEventListener("touchend", function(e) {
      var me = new MouseEvent("mouseup", {});
      canvas.dispatchEvent(me);
    }, false);

    function getMousePos(canvasDom, mouseEvent) {
      var rect = canvasDom.getBoundingClientRect();
      return {
        x: mouseEvent.clientX - rect.left,
        y: mouseEvent.clientY - rect.top
      }
    }

    function getTouchPos(canvasDom, touchEvent) {
      var rect = canvasDom.getBoundingClientRect();
      return {
        x: touchEvent.touches[0].clientX - rect.left,
        y: touchEvent.touches[0].clientY - rect.top
      }
    }

    function renderCanvas() {
      if (drawing) {
        ctx.moveTo(lastPos.x, lastPos.y);
        ctx.lineTo(mousePos.x, mousePos.y);
        ctx.stroke();
        lastPos = mousePos;
      }
    }
    // Add touch event support for mobile N

    // Prevent scrolling when touching the canvas
    document.body.addEventListener("touchstart", function(e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);
    document.body.addEventListener("touchend", function(e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);
    document.body.addEventListener("touchmove", function(e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);

    (function drawLoop() {
      requestAnimFrame(drawLoop);
      renderCanvas();
    })();

    function clearCanvas() {
      canvas.width = canvas.width;
    }
    // Prevent scrolling when touching the canvas N

    // Set up the UI
    var sigText = document.getElementById("ttd_dataUrl2");
    var sigImage = document.getElementById("ttd_image2");
    var clearBtn = document.getElementById("ttd_clearBtn2");
    var submitBtn = document.getElementById("ttd_submitBtn2");
    clearBtn.addEventListener("click", function(e) {
      clearCanvas();
      sigText.innerHTML = "Data URL for your signature will go here!";
      sigImage.setAttribute("src", "");
    }, false);
    submitBtn.addEventListener("click", function(e) {
      var dataUrl = canvas.toDataURL();
      sigText.innerHTML = dataUrl;
      sigImage.setAttribute("src", dataUrl);
    }, false);

  })();
  // ttd S 2
  // FUNGSI TTD DIGITAL END
</script>

@endpush