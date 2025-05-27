@extends('layouts.admin')
@section('title', 'Cetak Perbaikan Reg')
@push('addon-style')
<style>
  .td-custom {
    padding: 3px 0 3px 80px;
    text-align: left;
    border-color: #b8b4b4;
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
@endpush
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="card" id="PrintMe">
            @if(Auth::user()->user_role == 'admin')
            @php
              $kopSurat = [
                "RS0000" => "kop_surat_demo.png",
                "RS0001" => "xxx.png",
                "RS0002" => "xxx.png",
                "RS0003" => "xxx.png",
                "RS0004" => "xxx.png",
                "RS0005" => "xxx.png",
                "RS0006" => "xxx.png",
                "RS0007" => "xxx.png",
                "RS0008" => "xxx.png",
                "RS0009" => "xxx.png",
                "RS0010" => "xxx.png",
                ];
            @endphp
            @if(isset($kopSurat[Auth::user()->kode_rs]))
            <div class="align-center mt-5">
              <img src="{{ url('assets/kop-surat/' . $kopSurat[Auth::user()->kode_rs]) }}" alt="Kop Surat" width="100%">
            </div>
            @endif
            @endif
            <!-- TABEL -->
             <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px">
              <thead class="table-light">
                <tr>
                  <th class="text-center" colspan="2" scope="col">DATA PERBAIKAN ALAT</th>
                </tr>
              </thead>
              <tbody>
                @php
                $data = [
                  "ID ASET" => "id_aset_reg",
                  "TANGGAL PERBAIKAN" => "tanggal_perbaikan_reg",
                  "NAMA" => "nama_alat_reg",
                  "MEREK" => "merek_alat_reg",
                  "TYPE" => "type_alat_reg",
                  "SERIAL NUMBER" => "serial_number_reg",
                  "LOKASI" => "lokasi_alat_reg",
                  "PELAPOR" => "pelaor_reg",
                  ];
                @endphp
                @foreach($data as $label => $key)
                <tr>
                  <td class="text-center" width="50%"><b>{{ $label }}</b></td>
                  <td>{{ $item->$key ?? '-' }}</td>
                </tr>
                @endforeach
                <tr>
                  <td class="text-center" width="50%"><b>WAKTU PELAPORAN</b></td>
                  <td><?php date_default_timezone_set('Asia/Jakarta'); echo date('h:m:s a'); ?></td>
                </tr>
                <tr>
                  <td class="text-center" width="50%"><b>WAKTU TEKNISI DATANG</b></td>
                  <td></td>
                </tr>
              </tbody>
             </table>
            <!-- TABEL -->
            <!--TABEL-->
            <table class="table table-striped table-bordered" style="width:100%;">
              <thead class="table-light">
                <tr>
                  <th class="text-center" scope="col">TEKNISI 1</th>
                  <th class="text-center" scope="col">PELAPOR</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td align="center"><img style="margin-left: 50px;" id="ttd_image1" src="" alt="Tanda tangan akan muncul disini" /></td>
                  <td align="center"><img style="margin-left: 50px;" id="ttd_image2" src="" alt="Tanda tangan akan muncul disini" /></td>
                </tr>
                <tr>
                  <td align="center">{{ $item->teknisi_1_reg ?? "-" }}</td>
                  <td align="center">{{ $item->pelapor_reg ?? "-" }}</td>
                </tr>
              </tbody>
            </table>
            <!--TABEL-->
            <!--TABEL-->
            <table class="table table-striped table-bordered" style="width:100%; margin-bottom: 20px;">
              <thead class="table-light">
                <tr>
                  <th class="text-center" scope="col">KA RUANGAN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td align="center"><img style="margin-left: 50px;" id="ttd_image3" src="" alt="Tanda tangan akan muncul disini" /></td>
                </tr>
                <tr>
                  <td align="center">{{ $item->ka_instalasi_reg ?? "-" }}</td>
                </tr>
              </tbody>
            </table>
            <!--TABEL-->
          </div>
          <div class="panel-footer no-print text-center">
            <div class="btn-group">
              <button type="button" class="btn btn-info mb-3" style="margin-right: 10px;"
              data-toggle="modal" data-target="#exampleModal">TTD</button>
              <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger"><i class="fa fa-print"></i> Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
              <!-- ttd 3-->
              <!-- Content -->
              <td>
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                    <p>Tanda tangan Teknisi</p>
                  </div>
                </div>
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                    <canvas id="ttd_canvas3" width="150" height="100">
                      Get a better browser, bro.
                    </canvas>
                  </div>
                </div>
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">
                    <button class="btn btn-primary" id="ttd_submitBtn3">Submit Signature</button>
                    <button class="btn btn-default" id="ttd_clearBtn3">Clear Signature</button>
                  </div>
                </div>
                <br />
                <div class="row hidden">
                  <div class="col-md-12">
                    <textarea id="ttd_dataUrl3" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
                  </div>
                </div>
                <br />
                <div class="row" style="margin-left: 5px;">
                  <div class="col-md-12">

                  </div>
                </div>
              </td>
              <!-- ttd 3N-->
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
  // ttd 3
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

    var canvas = document.getElementById("ttd_canvas3");
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
    var sigText = document.getElementById("ttd_dataUrl3");
    var sigImage = document.getElementById("ttd_image3");
    var clearBtn = document.getElementById("ttd_clearBtn3");
    var submitBtn = document.getElementById("ttd_submitBtn3");
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
  // ttd S 3
  // FUNGSI TTD DIGITAL END
</script>
@endpush