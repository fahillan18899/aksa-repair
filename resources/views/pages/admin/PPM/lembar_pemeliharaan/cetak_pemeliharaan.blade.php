@extends('layouts.admin')
@section('title', 'Cetak Pemeliharaan')
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
            <div class="card-body">
            <center><h3 style="margin-top: 20px;">Laporan Formulir Pemeliharaan Aset</h3></center>
            <!--TABEL-->
            <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="3" scope="col">PEMELIHARA</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">Tanggal Pemeliharaan</th>
                    <th class="text-center" scope="col">Kegiatan</th>
                    <th class="text-center" scope="col">Teknisi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item1)
                  <tr>
                    <td align="center">{{ $item1->tanggal }}</td>
                    <td align="center">{{ $item1->kegiatan }}</td>
                    <td align="center">{{ $item1->engineer }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="6" scope="col">DATA ALAT</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">ID ASET</th>
                    <th class="text-center" scope="col">Nama Alat</th>
                    <th class="text-center" scope="col">Serial Number</th>
                    <th class="text-center" scope="col">Merek</th>
                    <th class="text-center" scope="col">Tipe</th>
                    <th class="text-center" scope="col">Ruangan</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item2)
                  <tr>
                    <td align="center">{{ $item2->id_aset }}</td>
                    <td align="center">{{ $item2->nama_alat }}</td>
                    <td align="center">{{ $item2->serial_number }}</td>
                    <td align="center">{{ $item2->merek }}</td>
                    <td align="center">{{ $item2->tipe }}</td>
                    <td align="center">{{ $item2->ruangan }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="7" scope="col">PERSIAPAN</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">Hand Hygiene</th>
                    <th class="text-center" scope="col">Menyipkan alat & bahan</th>
                    <th class="text-center" scope="col">Alat pelindung diri</th>
                    <th class="text-center" scope="col">Mengoprasikan alat kalibrasi</th>
                    <th class="text-center" scope="col">KTD</th>
                    <th class="text-center" scope="col">Mengoprasikan alat</th>
                    <th class="text-center" scope="col">Identifikasi bahaya</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item2)
                  <tr>
                    <td align="center">{{ $item2->persiapan['hand_hygiene'] }}</td>
                    <td align="center">{{ $item2->persiapan['menyiapkan_alat_dan_bahan'] }}</td>
                    <td align="center">{{ $item2->persiapan['alat_pelindung_diri'] }}</td>
                    <td align="center">{{ $item2->persiapan['mengoprasikan_alat_kalibrasi'] }}</td>
                    <td align="center">{{ $item2->persiapan['ktd'] }}</td>
                    <td align="center">{{ $item2->persiapan['mengoprasikan_alat'] }}</td>
                    <td align="center">{{ $item2->persiapan['identifikasi_bahaya'] }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="10" scope="col">PEMANTAUAN FISIK & FUNGSI</th>
                  </tr>
                  <tr>
                    <th class="text-center" colspan="2" scope="col">Badan / Selungkup</th>
                    <th class="text-center" colspan="2" scope="col">Alat Sistem Interlock</th>
                    <th class="text-center" colspan="2" scope="col">Kabel Kelenturan</th>
                    <th class="text-center" colspan="2" scope="col">Sistem Pengunci</th>
                    <th class="text-center" colspan="2" scope="col">Tombol Saklar</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item3)
                  <tr>
                    <td align="center">{{ $item3->pemantauan['badan_selungkup1'] }}</td>
                    <td align="center">{{ $item3->pemantauan['badan_selungkup2'] }}</td>
                    <td align="center">{{ $item3->pemantauan['alat_sistem_interlock1'] }}</td>
                    <td align="center">{{ $item3->pemantauan['alat_sistem_interlock2'] }}</td>
                    <td align="center">{{ $item3->pemantauan['kabel_kelenturan1'] }}</td>
                    <td align="center">{{ $item3->pemantauan['kabel_kelenturan2'] }}</td>
                    <td align="center">{{ $item3->pemantauan['sistem_pengunci1'] }}</td>
                    <td align="center">{{ $item3->pemantauan['sistem_pengunci2'] }}</td>
                    <td align="center">{{ $item3->pemantauan['tombol_saklar1'] }}</td>
                    <td align="center">{{ $item3->pemantauan['tombol_saklar2'] }}</td>
                  </tr>
                  <tr>
                    <td align="center">{{ $item3->pemantauan['catatan1'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan2'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan3'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan4'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan5'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan6'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan7'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan8'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan9'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan10'] }}</td>
                  </tr>
                  <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="2" scope="col">Label Penandaan</th>
                    <th class="text-center" colspan="2" scope="col">Display Layar</th>
                    <th class="text-center" colspan="2" scope="col">Aksesoris</th>
                    <th class="text-center" colspan="4" scope="col">Indikator Bunyi</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" colspan="2" scope="col">Fisik</th>
                    <th class="text-center" colspan="2" scope="col">Fungsi</th>
                  </tr>
                </thead>
                <tr>
                    <td align="center">{{ $item3->pemantauan['label_penandaan1'] }}</td>
                    <td align="center">{{ $item3->pemantauan['label_penandaan2'] }}</td>
                    <td align="center">{{ $item3->pemantauan['display_layar1'] }}</td>
                    <td align="center">{{ $item3->pemantauan['display_layar2'] }}</td>
                    <td align="center">{{ $item3->pemantauan['aksesoris1'] }}</td>
                    <td align="center">{{ $item3->pemantauan['aksesoris2'] }}</td>
                    <td colspan="2" align="center">{{ $item3->pemantauan['indikator_bunyi1'] }}</td>
                    <td colspan="2" align="center">{{ $item3->pemantauan['indikator_bunyi2'] }}</td>
                  </tr>
                  <tr>
                    <td align="center">{{ $item3->pemantauan['catatan11'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan12'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan13'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan14'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan15'] }}</td>
                    <td align="center">{{ $item3->pemantauan['catatan16'] }}</td>
                    <td colspan="2" align="center">{{ $item3->pemantauan['catatan17'] }}</td>
                    <td colspan="2" align="center">{{ $item3->pemantauan['catatan18'] }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="7" scope="col">TINDAKAN</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">KEGIATAN</th>
                    <th class="text-center" scope="col">KETERANGAN</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item4)
                  <tr>
                    <td align="center"><b>Cek alat</b></td>
                    <td align="center">{{ $item4->cek_alat }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="2" scope="col">SUKU CADANG</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">KETERANGAN</th>
                    <th class="text-center" scope="col">DATA</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item5)
                  <tr>
                    <td align="center"><b>Nama suku cadang</b></td>
                    <td align="center">{{ $item5->nama_sukucadang }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Volume</b></td>
                    <td align="center">{{ $item5->volume }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Harga satuan</b></td>
                    <td align="center">{{ $item5->harga_satuan }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Jumlah harga</b></td>
                    <td align="center">{{ $item5->jumlah_harga }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="2" scope="col">EVALUASI & REKOMENDASI</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">KETERANGAN</th>
                    <th class="text-center" scope="col">DATA</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item6)
                  <tr>
                    <td align="center"><b>Evaluasi</b></td>
                    <td align="center">{{ $item6->evaluasi }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Status</b></td>
                    <td align="center">{{ $item6->status }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Mulai bekerja</b></td>
                    <td align="center">{{ $item6->mulai_bekerja }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Selsai bekerja</b></td>
                    <td align="center">{{ $item6->selesai_kerja }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Durasi</b></td>
                    <td align="center">{{ $item6->durasi }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Tanggal selesai</b></td>
                    <td align="center">{{ $item6->tanggal_selesai }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>User</b></td>
                    <td align="center">{{ $item6->user }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Teknisi</b></td>
                    <td align="center">{{ $item6->engginer }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 40px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" scope="col">TTD USER</th>
                    <th class="text-center" scope="col">TTD TEKNISI</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item7)
                  <tr>
                    <td align="center"><img style="margin-left: 50px;" id="ttd_image1" src="" alt="Tanda tangan akan muncul disini" /></td>
                    <td align="center"><img style="margin-left: 50px;" id="ttd_image2" src="" alt="Tanda tangan akan muncul disini" /></td>
                  </tr>
                  <tr>
                    <td align="center">{{ $item7->user }}</td>
                    <td align="center">{{ $item7->engginer }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
            </div>
          </div>
          <div class="panel-footer no-print text-center">
            <div class="btn-group">
              <button type="button" class="btn btn-info mb-3" style="margin-right: 10px;"
              data-toggle="modal"data-target="#exampleModal">TTD</button>
              <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger">
              <i class="fa fa-print"></i> Print</button>
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
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
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
  // FUNGSI TTD DIGITAL END
</script>
@endpush
@endsection