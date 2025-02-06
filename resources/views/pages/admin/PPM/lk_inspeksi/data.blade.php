@extends('layouts.admin')

@section('content')
@section('title', 'Lembar Kerja Inspeksi')

<!-- Content Wrapper. Contains page content -->
<style>
  input.form-check-input {
    width: 30px;
    height: 30px;
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
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-cogs"></i></div>
      <div class="header-title">
        <h1>Data inspeksi</h1>
        <small>Form Data inspeksi</small>
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

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!-- TABEL -->
                <table id="printContent" class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th colspan="8" class="text-center"><img src="{{ url('assets/kop-surat/kop surat Form Inspeksi noBorder.jpg') }}" alt="Kop Klaten" width="100%"></th>
                    </tr>
                    <tr>
                      <th style="width: 20%;" align="center" class="text-center">Bulan_/_Tahun</th>
                      <th style="width: 20%;" align="center" class="text-center">Lokasi</th>
                      <th style="width: 20%;" align="center" class="text-center">Nama_Alat</th>
                      <th style="width: 20%;" align="center" class="text-center">No_Seri</th>
                      <th style="width: 10%;" align="center" class="text-center">Pemeriksaan Fisik</th>
                      <th style="width: 10%;" align="center" class="text-center">Kelengkapan Alat</th>
                      <th style="width: 10%;" align="center" class="text-center">Fungsi Alat</th>
                      <th scope="col" align="center">Catatan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($data as $index => $data)
                    <tr class="text-center">
                      <td>{{ $data->bulan_tahun }}</td>
                      <td>{{ $data->lokasi_alat }}</td>
                      <td>{{ $data->nama_alat }}</td>
                      <td>{{ $data->nomer_seri }}</td>
                      <td>{{ $data->periksa_fisik }}</td>
                      <td>{{ $data->lengkap_alat }}</td>
                      <td>{{ $data->fungsi_alat }}</td>
                      <td>{{ $data->catatan }}</td>
                    </tr>
                    @empty
                    @endforelse
                  </tbody>
                  <thead>
                    <tr>
                      <th colspan="4">
                        
                      </th>
                      <th colspan="5">
                        
                      </th>
                    </tr>
                    <tr>
                      <th colspan="4">
                        <h5 class="text-center">Paraf Elektromedis</h5>
                      </th>
                      <th colspan="5">
                        <h5 class="text-center">Paraf Penanggung jawab / ruangan</h5>
                      </th>
                    </tr>
                    <tr>
                      <th colspan="4">
                        <!-- Tandatangan -->
                        <img style="margin-left: 100px;" id="ttd_image1" src="" alt="Tanda tangan akan muncul disini" />
                        <!-- Tandatangan N-->
                      </th>
                      <th colspan="5">
                        <!-- Tandatangan -->
                        <img style="margin-left: 100px;" id="ttd_image2" src="" alt="Tanda tangan akan muncul disini" />
                        <!-- Tandatangan N-->
                      </th>
                    </tr>
                  </thead>
                </table>
                <!-- Tombol Print -->
                <button class="btn btn-primary mb-3" onclick="printTableMonitoring()">Print</button>
                <!-- TABEL -->
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <table>
    <tr>
      <!-- ttd 1-->
      <!-- Content -->
        <td>
          <div class="row" style="margin-left: 5px;">
            <div class="col-md-12">
              <h1>E-Signature</h1>
              <p>Tanda tangan Teknisi</p>
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
              <h1>E-Signature</h1>
              <p>Tanda tangan Pelapor</p>
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
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection
@push('addon-script')
<script>
  // FUNGSI PRINT
    function printTableMonitoring() {
      var printContent = document.getElementById("printContent").outerHTML;
      var originalContent = document.body.innerHTML;
      document.body.innerHTML = 
      `<html>
        <head>
          <title>Print Table</title>
          <style>
            table {
              width: 100%;
              border-collapse: collapse;
            }
            th, td {
              border: 1px solid black;
              padding: 8px;
              text-align: center;
            }
            th {
              background-color:rgb(241, 236, 236);
              }
          </style>
        </head>
        <body>
            ${printContent}
        </body>
      </html`;
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