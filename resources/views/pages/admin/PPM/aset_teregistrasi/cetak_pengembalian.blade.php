<!-- Content Wrapper. Contains page content -->
@extends('layouts.admin')
@section('title', 'Cetak Pengembalian Reg')
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
  </style>
@endpush
@section('content')
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-12" >
        <div class="panel panel-default thumbnail">

          <div class="card" id="PrintMe">
            <div class="align-center mt-5">
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0000")
              <img src="{{ url('assets/kop-surat/kop_surat_demo.png') }}" alt="Kop Surat" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0001")
              <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop Badarudin Kasim" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0002")
              <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop Rsi Wonosobo" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0003")
              <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop Pantiwilasa" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0004")
              <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop RS Cilegon" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0005")
              <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop RS Pondok kopi" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0006")
              <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop RS Temangung" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0007")
              <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop Ja'far" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0008")
              <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop PKU Muhammadiyah Wonosobo" width="100%">
              @endif
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0017")
              <img src="{{ url('assets/kop-surat/kop_surat_kendal.png') }}" alt="Kop Darul Istiqomah Kendal" width="100%">
              @endif
            </div>
            <div class="card-body">

              <table width="84%" border="1px dot yellow" cellspacing="10" style="margin: 5% 0 0 8%">
                <tbody>
                  <tr>
                    <th width="7%" colspan="2">
                      <h3 class="text-center ">Laporan Formulir Pengembalian Aset</h3>
                    </th>
                    <th width="7%" colspan="2">
                    </th>
                  </tr>
                  <tr>
                    <th width="50%"><br><br></th>
                    <th width="50%"><br><br></th>
                  </tr>

                  <tr>
                    <td class="td-custom" width="50%">Id Perbaikan</td>
                    <td class="td-custom"><?php echo $item['id_perbaikan_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Tanggal Perbaikan</td>
                    <td class="td-custom"><?php echo $item['tanggal_perbaikan_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Tanggal Pengembalian</td>
                    <td class="td-custom"><?php echo $item['tanggal_pengembalian_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Nama Alat</td>
                    <td class="td-custom"><?php echo $item['nama_alat_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Merek Alat</td>
                    <td class="td-custom"><?php echo $item['merek_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Serial Number</td>
                    <td class="td-custom"><?php echo $item['serial_number_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Lokasi Alat</td>
                    <td class="td-custom"><?php echo $item['lokasi_alat_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Pelapor</td>
                    <td class="td-custom"><?php echo $item['pelapor_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Teknisi 1</td>
                    <td class="td-custom"> <?php echo $item['teknisi1_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Teknisi 2</td>
                    <td class="td-custom"><?php echo $item['teknisi2_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Keterangan</td>
                    <td class="td-custom"><?php echo $item['penyebab_kerusakan_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Penerima Alat</td>
                    <td class="td-custom"><?php echo $item['penerima_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Waktu Pelaporan</td>
                    <td class="td-custom" ><?php date_default_timezone_set('Asia/Jakarta');
                        echo date('h:i:s a'); ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%"><br></td>
                    <td class="td-custom" width="50%"><br></td>
                  </tr>
                  <tr>
                    <td style="text-align: center;" class="td-custom" width="25%"><b>Teknisi Rekanan</b></td>
                    <td style="text-align: center;" class="td-custom" width="25%"><b>Pelapor</b></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="25%">
                      <!-- Tandatangan -->
                      <img style="margin-left: 50px;" id="sig-image1" src="" alt="Tanda tangan akan muncul disini" />
                      <!-- Tandatangan N-->
                    </td>
                    <td class="td-custom" width="25%">
                      <!-- Tandatangan -->
                      <img style="margin-left: 50px;" id="sig-image2" src="" alt="Tanda tangan akan muncul disini" />
                      <!-- Tandatangan N-->
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: center;" class="td-custom"><?php echo $item['teknisi_rekanan_reg'] ?></td>
                    <td style="text-align: center;" class="td-custom"><?php echo $item['pelapor_reg'] ?></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>

          <div class="panel-footer no-print text-center">
            <div class="btn-group">
              <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger"><i class="fa fa-print"></i> Print</button>
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
              <p>Tanda tangan Teknisi</p>
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
              <p>Tanda tangan Pelapor</p>
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
</div> <!-- /.content -->
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