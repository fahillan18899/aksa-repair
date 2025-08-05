@extends('layouts.teknisi')

@section('content')
@section('title', 'Surat Terima View')
<style>
  input[readonly] {
    cursor: not-allowed;
  }

  .table-striped {
    width: 100%;
    border-collapse: collapse;
  }

  .table-striped th,
  .table-striped td {
    border: 1px solid black;
    padding: 8px;
  }

  .panel { border: 1px solid black; }

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
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>MENU PEMBUATAN SERAH TERIMA ALAT</h1>
        <small>Pembuatan serah terima alat</small>
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
            <h1>SERAH TERIMA ALAT</h1>
          </div>

          <div class="panel-body panel-form" id="print_me">
            <div class="row">
                <img src="{{ url('assets/images/aksa.png') }}" alt="Logo" style="height: 100px; margin-right: 20px;">
                <img src="{{ url('assets/images/kop_aksa.png') }}" alt="kop" style="height: 100px; margin-left: 400px;">
              <div class="col-md-9 col-sm-12">
                <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  <br>
                  <div class="row" style="margin-left: 500px;">
                    <p>Boyolali {{\Carbon\Carbon::now()->translatedFormat('d-m-y')}}</p>
                  </div>
                  <h2>PIHAK PERTAMA</h2>
                  <div class="form-group row">
                    <label for="nama_1" class="col-xs-5 form-label"><b>Nama :</b></label>
                    <div class="col-xs-5">
                      {{ $item->nama_1 }}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan_1" class="col-xs-5 form-label">Jabatan :</label>
                    <div class="col-xs-5">
                      {{ $item->jabatan_1 }}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bagian_1" class="col-xs-5 form-label">Departement / Bagian :</label>
                    <div class="col-xs-5">
                      {{ $item->bagian_1 }}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kontak_1" class="col-xs-5 form-label">Kontak :</label>
                    <div class="col-xs-5">
                      {{ $item->kontak_1 }}
                    </div>
                  </div>
                  <h2>PIHAK KEDUA</h2>
                  <div class="form-group row">
                    <label for="nama_2" class="col-xs-5 form-label">Nama :</label>
                    <div class="col-xs-5">
                      {{ $item->nama_2 }}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan_2" class="col-xs-5 form-label">Jabatan :</label>
                    <div class="col-xs-5">
                      {{ $item->jabatan_2 }}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bagian_2" class="col-xs-5 form-label">Departemen / Bagian :</label>
                    <div class="col-xs-5">
                      {{ $item->bagian_2 }}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kontak_2" class="col-xs-5 form-label">Kontak :</label>
                    <div class="col-xs-5">
                      {{ $item->kontak_2 }}
                    </div>
                  </div>
                  <h2>RINCIAN ALAT YANG DISERAHKAN</h2>
                  <table class="table-striped">
                    <thead>
                      <tr>
                        <th class="text-center"><b>Nama alat</b></th>
                        <th class="text-center"><b>Merk / Type</b></th>
                        <th class="text-center"><b>No seri</b></th>
                        <th class="text-center"><b>kondisi</b></th>
                        <th class="tex-center"><b>kelengkapan</b></th>
                        <th class="text-center"><b>jumlah</b></th>
                        <th class="tex-center"><b>keterangan</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($item->nama_alat as $index => $alat)
                      <tr>
                        <td align="center">{{ $alat }}</td>
                        <td align="center">{{ $item->merek_type[$index] ?? '-' }}</td>
                        <td align="center">{{ $item->no_seri[$index] ?? '-' }}</td>
                        <td align="center">{{ $item->kondisi[$index] ?? '-' }}</td>
                        <td align="center">{{ $item->kelengkapan[$index] ?? '-' }}</td>
                        <td align="center">{{ $item->jumlah[$index] ?? '-' }}</td>
                        <td align="center">{{ $item->keterangan[$index] ?? '-' }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <br>
                  <div class="row">
                    <div class="col-sm-12">
                      <h2>PERNYATAAN DAN KETENTUAN</h2>
                      <p>1. Kelengkapan yang tertera dengan kondisi yang sebenarnya</p>
                      <p>2. Dari pihak pertama tidak menerima kehilangan alat jikalau alat tersebut tidak tertera</p>
                      <p>3. Dari pihak kedua dapat menagih kepada pihak pertama jikalau ada kehilangan kelengkapan yang sudah tertera pada surat</p>
                    </div>
                  </div><br>
                  <div class="form-group row">
                    <div class="col-xs-6">
                      <table class="table" style="width: 60%;">
                        <thead>
                          <tr>
                            <th class="text-center">Pihak yang menyerahkan,</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td align="center"><img src="{{ url('assets/images/aksa.png') }}" id="ttd_image1" width="30%" alt="Ttd" ></td>
                          </tr>
                          <tr>
                            <td align="center"><b><u>.....................</u></b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-xs-6">
                      <table class="table" style="width: 60%; margin-left: 210px">
                        <thead>
                          <tr>
                            <th class="text-center">Pihak yang menerima,</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td align="center"><img src="{{ url('assets/images/aksa.png') }}" id="ttd_image2" width="30%" alt="Ttd" ></td>
                          </tr>
                          <tr>
                            <td align="center"><b><u>.....................</u></b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><br>
                  <p>*Catatan: Formulir ini berlaku sebagai bukti sah serah terima alat dan dibuat dalam 2(dua) rangkap,</p>
                  <p>masing masing untk pihak yang menyerahkan dan menerima</p>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-offset-3 col-sm-6">
              <div class="ui buttons">
                <button type="button" class="btn btn-info mb-3" style="margin-right: 10px;"
                data-toggle="modal" data-target="#exampleModal">TTD</button>
                <button type="button" onclick="printMy('print_me')" class="btn btn-primary" 
                style="margin-left: 180px;"><i class="fa fa-print"></i> Print</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Form Perbaikan end-->
  </div>
</div>
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
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
            font-size: large;
            }

            p{ font-size: large; }
            label{ font-size: large; }

            .panel { border: 1px solid black }
          </style>
          <body>
              <h1>SURAT SERAH TERIMA ALAT</h1>  
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
    // ctx.globalAlpha = 0.3; // transparansi
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
    // ctx.globalAlpha = 0.3; // transparansi
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