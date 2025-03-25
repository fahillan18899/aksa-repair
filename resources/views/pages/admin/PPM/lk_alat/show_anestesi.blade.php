@extends('layouts.admin')

@section('title', 'Lembar Kerja Pemeliharaan')
@push('addon-style')
<style>
  .td-custom {
    padding: 5px 0 5px 80px;
    text-align: left;
    border-color: #b8b4b4;
  }

  #sig-canvas1 {
    border: 2px dotted #CCCCCC;
    border-radius: 15px;
    cursor: crosshair;
  }

  #sig-canvas2 {
    border: 2px dotted #CCCCCC;
    border-radius: 15px;
    cursor: crosshair;
  }

  #sig-canvas3 {
    border: 2px dotted #CCCCCC;
    border-radius: 15px;
    cursor: crosshair;
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
            <div class="align-center mt-3">
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0000")
              <img src="{{ url('assets/kop-surat/kop_surat_demo.png') }}" alt="Kop Surat" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0020")
              <img src="{{ url('assets/kop-surat/kop-surat-anesthesi3.png') }}" alt="Kop Klaten" width="100%">
              @endif
            </div>
            <h3>
              <center>LAPORAN PEMELIHARAAN ALAT KESEHATAN</center>
            </h3>
            <div class="card-body" style="padding: 25px;">
              <!-- A. PENDATAAN ALAT -->
              <div class="form-group row" style="border-style: groove; padding: 15px;">
                <table class="table" style="width:100%">
                  <tr>
                    <td style="width: 20%;"><b>ID Alat</b></td>
                    <td style="width: 20%;">{{ $item['id_alat'] }}</td>
                    <td style="width: 20%;"><b>Merek / Tipe</b></td>
                    <td style="width: 20%;">{{ $item['merek_tipe'] }}</td>
                  </tr>
                  <tr>
                    <td style="width: 20%;"><b>Nama Ruangan</b></td>
                    <td style="width: 20%;">{{ $item['ruangan'] }}</td>
                    <td style="width: 20%;"><b>No Seri</b></td>
                    <td style="width: 20%;">{{ $item['no_seri'] }}</td>
                  </tr>
                  <tr>
                    <td style="width: 20%;"><b>User / Operator Alat</b></td>
                    <td style="width: 20%;">{{ $item['operator_alat'] }}</td>
                    <td style="width: 20%;"><b>Tanggal Pelaksanaan</b></td>
                    <td style="width: 20%;">{{ $item['tanggal'] }}</td>
                  </tr>
                  <tr>
                    <td style="width: 20%;"><b>Nama Alat</b></td>
                    <td style="width: 20%;">{{ $item['alat'] }}</td>
                    <td style="width: 20%;"><b>Petugas Pelaksana</b></td>
                    <td style="width: 20%;">{{ $item['pelaksana'] }}</td>
                  </tr>
                </table>
              </div>
              <!-- A. PENDATAAN ALAT N-->

              <!-- B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN -->
              <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>
              <table class="table table-hover table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <td align="center"><b>Nama Alat</b></td>
                    <td align="center"><b>Merek</b></td>
                    <td align="center"><b>Tipe / Model</b></td>
                    <td align="center"><b>NO Seri</b></td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($item->alat_ukur as $alat)
                  <tr>
                    <td align="center">{{ $alat['nama'] ?? '-' }}</td>
                    <td align="center">{{ $alat['merek'] ?? '-' }}</td>
                    <td align="center">{{ $alat['type'] ?? '-' }}</td>
                    <td align="center">{{ $alat['noseri'] ?? '-' }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN N-->

              <!-- C. KONDISI RUANGAN -->
              <h4><b>C. KONDISI RUANGAN</b></h4>
              <table class="table table-hover table-bordered" style="width:80%">
                <thead>
                  <tr>
                    <td align="center"><b>Parameter</b></td>
                    <td align="center"><b>Terukur</b></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b>Suhu</b></td>
                    <td align="center">{{ $item['suhu'] }}</td>
                  </tr>
                  <tr>
                    <td><b>Kelembapan nisbi</b></td>
                    <td align="center">{{ $item['kelembapan'] }}</td>
                  </tr>
                </tbody>
              </table>
              <!-- C. KONDISI RUANGAN N-->

              <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
              <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>
              <table class="table table-hover table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <td align="center"><b>Deskripsi</b></td>
                    <td align="center"><b>Baik / Rusak</b></td>
                    <td align="center"><b>Keterangan</b></td>
                  </tr>
                </thead>
                <tbody>
                @foreach($item->pemeriksa_kondisi as $chek)
                  <tr>
                    <td align="center">{{ $chek['deskrip'] ?? '-' }}</td>
                    <td align="center">{{ $chek['kondisi'] ?? 'Rusak' }}</td>
                    <td align="center">{{ $chek['keterangan'] ?? '-' }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

              <!-- PENGUKURAN KESELAMATAN LISTRIK -->
              <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
              <table class="table table-hover table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <td align="center"><b>Parameter</b></td>
                    <td align="center"><b>Terukur</b></td>
                    <td align="center"><b>Ambang Batas</b></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b>Main Voltage / Live-Neutral</b></td>
                    <td align="center">{{ $item['listrik_1'] }}</td>
                    <td align="center"><b>220 ± 10% V</b></td>
                  </tr>
                  <tr>
                    <td><b>Protectiv Earth Resistance</b></td>
                    <td align="center">{{ $item['listrik_2'] }}</td>
                    <td align="center"><b><u><</u> 0,2 Ω</b></td>
                  </tr>
                  <tr>
                    <td><b>Insulation Resistance / Mains-PE</b></td>
                    <td align="center">{{ $item['listrik_3'] }}</td>
                    <td align="center"><b><u>></u> 2 MΩ</b></td>
                  </tr>
                  <tr>
                    <td><b>Earth Leakage Current Normal Polarity Closed Neutral</b></td>
                    <td align="center">{{ $item['listrik_4'] }}</td>
                    <td align="center"><b><u><</u> 500 μA</b></td>
                  </tr>
                </tbody>
              </table>
              <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

              <!-- PENGUKURAN KINERJA -->
              <!-- empty -->
              <!-- PENGUKURAN KINERJA N-->

              <!-- KESIMPULAN -->
              <br>
              <br>
              <h4><b>G. KESIMPULAN</b></h4>
              <table class="table table-hover table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <td align="center"><b>Parameter</b></td>
                    <td align="center"><b>Hasil Pengamatan</b></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b>Kondisi fisik dan fungsi</b></td>
                    <td align="center">{{ $item['kesimpulan_fisik_fungsi'] }}</td>
                  </tr>
                  <tr>
                    <td><b>Keselamatan Listrik</b></td>
                    <td align="center">{{ $item['kesimpulan_listrik'] }}</td>
                  </tr>
                  <tr>
                    <td><b>Kinerja Alat Kesehatan</b></td>
                    <td align="center">{{ $item['kesimpulan_kinerja'] }}</td>
                  </tr>
                </tbody>
              </table>
              <div class="form-group row">
                <label for="catatan" class="col-xs-3 col-form-label">Catatan<i class="text-danger">*</i></label>
                <div class="col-xs-9">
                  <textarea class="form-control" name="" id="" maxlength="255" rows="5" cols="50" readonly><?php echo $item['catatan'] ?></textarea>
                </div>
              </div>
              <!-- KESIMPULAN N-->

              <!-- TTD -->
              <table class="table table-hover table-bordered" style="width:50%">
                <thead>
                  <tr>
                    <td align="center"><b>Ttd. Pelaksana</b></td>
                    <td align="center"><b>Ttd. User</b></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img style="margin-left: 50px;" id="sig-image1" src="" alt="Tanda tangan akan muncul disini" /></td>
                    <td><img style="margin-left: 50px;" id="sig-image2" src="" alt="Tanda tangan akan muncul disini" /></td>
                  </tr>
                  <tr>
                    <td align="center">{{ $item['pelaksana'] }}</td>
                    <td align="center">{{ $item['operator_alat'] }}</td>
                  </tr>
                </tbody>
              </table>
              <!-- TTD -->
            </div>
          </div>
          <div class="panel-footer no-print text-center">
            <div class="btn-group">
              <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger"><i
                  class="fa fa-print"></i> Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <table>
    <tr>
      <!-- ttd 1-->
      <!-- Content -->
      <td>
        <div class="row" style="margin-left: 5px;">
          <div class="col-md-12">
            <h1>E-Signature</h1>
            <p>Tanda tangan Pelaksana</p>
          </div>
        </div>
        <div class="row" style="margin-left: 5px;">
          <div class="col-md-12">
            <canvas id="sig-canvas1" width="150" height="100">
              Get a better browser, bro.
            </canvas>
          </div>
        </div>
        <div class="row" style="margin-left: 5px;">
          <div class="col-md-12">
            <button class="btn btn-primary" id="sig-submitBtn1">Submit Signature</button>
            <button class="btn btn-default" id="sig-clearBtn1">Clear Signature</button>
          </div>
        </div>
        <br />
        <div class="row hidden">
          <div class="col-md-12">
            <textarea id="sig-dataUrl1" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
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
            <p>Tanda tangan User</p>
          </div>
        </div>
        <div class="row" style="margin-left: 5px;">
          <div class="col-md-12">
            <canvas id="sig-canvas2" width="150" height="100">
              Get a better browser, bro.
            </canvas>
          </div>
        </div>
        <div class="row" style="margin-left: 5px;">
          <div class="col-md-12">
            <button class="btn btn-primary" id="sig-submitBtn2">Submit Signature</button>
            <button class="btn btn-default" id="sig-clearBtn2">Clear Signature</button>
          </div>
        </div>
        <br />
        <div class="row hidden">
          <div class="col-md-12">
            <textarea id="sig-dataUrl2" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
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
</div> <!-- /.content -->\
@endsection
@push('addon-script')
<script>
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

    var canvas = document.getElementById("sig-canvas1");
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
    var sigText = document.getElementById("sig-dataUrl1");
    var sigImage = document.getElementById("sig-image1");
    var clearBtn = document.getElementById("sig-clearBtn1");
    var submitBtn = document.getElementById("sig-submitBtn1");
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
</script>

<script>
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

    var canvas = document.getElementById("sig-canvas2");
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
    var sigText = document.getElementById("sig-dataUrl2");
    var sigImage = document.getElementById("sig-image2");
    var clearBtn = document.getElementById("sig-clearBtn2");
    var submitBtn = document.getElementById("sig-submitBtn2");
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
</script>

@endpush