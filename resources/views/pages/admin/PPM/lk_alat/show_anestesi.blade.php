@extends('layouts.admin')

@section('title', 'Cetak Perbaikan Un')
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
              @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0020")
              <img src="{{ url('assets/kop-surat/kop_surat_klaten1.png') }}" alt="Kop Klaten" width="100%">
              @endif
            </div>
            <h3><center>LAPORAN PEMELIHARAAN ANESTESI</center></h3>
            <div class="card-body" style="padding: 25px;">
            <!-- A. PENDATAAN ALAT -->
              <h4><b>A. PENDATAAN ALAT</b></h4>
              <div class="form-group row" style="border-style: groove; padding: 15px;">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="id_alat" class="form-label">ID Alat </label>
                </div>
                  <div class="col-sm-3">
                    <?php echo $item['id_alat'] ?>
                </div>
                  <div class="col-sm-3">
                    <label for="merek_tipe" class="form-label">Merek / Tipe</label>
                </div>
                  <div class="col-sm-3">
                    <?php echo $item['merek_tipe'] ?>
                </div>
              </div>
                <div class="row" style="margin-top: 10px;">
                  <div class="col-sm-3">
                    <label for="ruangan" class="form-label">Nama Ruangan</label>
                </div>
                  <div class="col-sm-3">
                    <?php echo $item['ruangan'] ?>
                </div>
                  <div class="col-sm-3">
                    <label for="no_seri" class="form-label">No Seri</label>
                </div>
                  <div class="col-sm-3">
                    <?php echo $item['no_seri'] ?>
                </div>
              </div>
                <div class="row" style="margin-top: 10px;">
                  <div class="col-sm-3">
                    <label for="operator_alat" class="form-label">User / Operator Alat</label>
                </div>
                  <div class="col-sm-3">
                    <?php echo $item['operator_alat'] ?>
                </div>
                  <div class="col-sm-3">
                    <label for="tanggal" class="form-label">Tanggal Pelaksanaan</label>
                </div>
                  <div class="col-sm-3">
                    <?php echo $item['tanggal'] ?>
                </div>
              </div>
                <div class="row" style="margin-top: 10px;">
                  <div class="col-sm-3">
                    <label for="alat" class="form-label">Nama Alat</label>
                </div>
                  <div class="col-sm-3">
                    <?php echo $item['alat'] ?>
                </div>
                  <div class="col-sm-3">
                    <label for="pelaksana" class="form-label">Petugas Pelaksana</label>
                </div>
                  <div class="col-sm-3">
                    <?php echo $item['pelaksana'] ?>
                </div>
              </div>
              </div>
            <!-- A. PENDATAAN ALAT N-->

            <!-- B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN -->
              <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>
              <table class="table table-hover table-bordered"  style="width:100%">
                <thead>
                <tr>
                  <td align="center"><b>Nama Alat</b></td>
                  <td align="center"><b>Merek</b></td>
                  <td align="center"><b>Tipe / Model</b></td>
                  <td align="center"><b>NO Seri</b></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Gas Flow Analyzer</td>
                  <td align="center"><?php echo $item['ukur_merek1'] ?></td>
                  <td align="center"><?php echo $item['ukur_tipe1'] ?></td>
                  <td align="center"><?php echo $item['ukur_noseri1'] ?></td>
                </tr>
                <tr>
                  <td>Thermohygrometer</td>
                  <td align="center"><?php echo $item['ukur_merek2'] ?></td>
                  <td align="center"><?php echo $item['ukur_tipe2'] ?></td>
                  <td align="center"><?php echo $item['ukur_noseri2'] ?></td>
                </tr>
                </tbody>
              </table>
            <!-- B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN N-->
            <br>
            <br>
            <br>
            <br>
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
                  <td>Suhu</td>
                  <td align="center"><?php echo $item['suhu'] ?></td>
                </tr>
                <tr>
                  <td>Kelembapan nisbi</td>
                  <td align="center"><?php echo $item['kelembapan'] ?></td>
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
                <tr>
                  <td>1. Chasingss / Housing</td>
                  <td align="center"><?php echo $item['fisik_fungsi_1'] ?></td>
                  <td align="center"><?php echo $item['keterangan_1'] ?></td>
                </tr>
                <tr>
                  <td>2. Mount / Fastener</td>
                  <td align="center"><?php echo $item['fisik_fungsi_2'] ?></td>
                  <td align="center"><?php echo $item['keterangan_2'] ?></td>
                </tr>
                <tr>
                  <td>3. Breathing circuit termasuk filter</td>
                  <td align="center"><?php echo $item['fisik_fungsi_3'] ?></td>
                  <td align="center"><?php echo $item['keterangan_3'] ?></td>
                </tr>
                <tr>
                  <td>4. AC plug / Receptacles</td>
                  <td align="center"><?php echo $item['fisik_fungsi_4'] ?></td>
                  <td align="center"><?php echo $item['keterangan_4'] ?></td>
                </tr>
                <tr>
                  <td>5. Line Cord</td>
                  <td align="center"><?php echo $item['fisik_fungsi_5'] ?></td>
                  <td align="center"><?php echo $item['keterangan_5'] ?></td>
                </tr>
                <tr>
                  <td>6. Battery / Charger</td>
                  <td align="center"><?php echo $item['fisik_fungsi_6'] ?></td>
                  <td align="center"><?php echo $item['keterangan_6'] ?></td>
                </tr>
                <tr>
                  <td>7. Circuit Breaker / Fuse</td>
                  <td align="center"><?php echo $item['fisik_fungsi_7'] ?></td>
                  <td align="center"><?php echo $item['keterangan_7'] ?></td>
                </tr>
                <tr>
                  <td>8. Labeling</td>
                  <td align="center"><?php echo $item['fisik_fungsi_8'] ?></td>
                  <td align="center"><?php echo $item['keterangan_8'] ?></td>
                </tr>
                <tr>
                  <td>9. Indicator / Displays</td>
                  <td align="center"><?php echo $item['fisik_fungsi_9'] ?></td>
                  <td align="center"><?php echo $item['keterangan_9'] ?></td>
                </tr>
                <tr>
                  <td>10. Alarm / Interlock</td>
                  <td align="center"><?php echo $item['fisik_fungsi_10'] ?></td>
                  <td align="center"><?php echo $item['keterangan_10'] ?></td>
                </tr>
                <tr>
                  <td>11. Bellows</td>
                  <td align="center"><?php echo $item['fisik_fungsi_11'] ?></td>
                  <td align="center"><?php echo $item['keterangan_11'] ?></td>
                </tr>
                <tr>
                  <td>12. Controls / Switches</td>
                  <td align="center"><?php echo $item['fisik_fungsi_12'] ?></td>
                  <td align="center"><?php echo $item['keterangan_12'] ?></td>
                </tr>
                <tr>
                  <td>13. Bellows</td>
                  <td align="center"><?php echo $item['fisik_fungsi_13'] ?></td>
                  <td align="center"><?php echo $item['keterangan_13'] ?></td>
                </tr>
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
                  <td>Main Voltage / Live-Neutral</td>
                  <td align="center"><?php echo $item['listrik_1'] ?></td>
                  <td align="center">220 ± 10% V</td>
                </tr>
                <tr>
                  <td>Protectiv Earth Resistance</td>
                  <td align="center"><?php echo $item['listrik_2'] ?></td>
                  <td align="center"><u><</u> 0,2 Ω</td>
                </tr>
                <tr>
                  <td>Insulation Resistance / Mains-PE</td>
                  <td align="center"><?php echo $item['listrik_3'] ?></td>
                  <td align="center"><u>></u> 2 MΩ</td>
                </tr>
                <tr>
                  <td>Earth Leakage Current Normal Polarity Closed Neutral</td>
                  <td align="center"><?php echo $item['listrik_4'] ?></td>
                  <td align="center"><u><</u> 500 μA</td>
                </tr>
                </tbody>
              </table>
            <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

            <!-- PENGUKURAN KINERJA -->
              <h4><b>F. PENGUKURAN KINERJA</b></h4>
              <table class="table table-hover table-bordered" style="width:80%">
                <thead>
                <tr>
                  <td align="center"><b>Jenis Gas</b></td>
                  <td align="center"><b>Setting Pada Alat</b></td>
                  <td align="center"><b>Terukur</b></td>
                  <td align="center"><b>Toleransi</b></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td align="center" rowspan="7"><?php echo $item['jenis_gas'] ?></td>
                  <td align="center"><?php echo $item['seting_alat_1'] ?></td>
                  <td align="center"><?php echo $item['terukur_1'] ?></td>
                  <td align="center" rowspan="7">± 10%</td>
                </tr>

                <tr>
                  <td align="center"><?php echo $item['seting_alat_2'] ?></td>
                  <td align="center"><?php echo $item['terukur_2'] ?></td>
                </tr>
                <tr>
                  <td align="center"><?php echo $item['seting_alat_3'] ?></td>
                  <td align="center"><?php echo $item['terukur_3'] ?></td>
                </tr>
                <tr>
                  <td align="center"><?php echo $item['seting_alat_4'] ?></td>
                  <td align="center"><?php echo $item['terukur_4'] ?></td>
                </tr>
                <tr>
                  <td align="center"><?php echo $item['seting_alat_5'] ?></td>
                  <td align="center"><?php echo $item['terukur_5'] ?></td>
                </tr>
                <tr>
                  <td align="center"><?php echo $item['seting_alat_6'] ?></td>
                  <td align="center"><?php echo $item['terukur_6'] ?></td>
                </tr>
                <tr>
                  <td align="center"><?php echo $item['seting_alat_7'] ?></td>
                  <td align="center"><?php echo $item['terukur_7'] ?></td>
                </tr>
                </tbody>
              </table>
            <!-- PENGUKURAN KINERJA N-->

            <!-- KESIMPULAN -->
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
                  <td>Kondisi fisik dan fungsi</td>
                  <td align="center"><?php echo $item['kesimpulan_fisik_fungsi'] ?></td>
                </tr>
                <tr>
                  <td>Keselamatan Listrik</td>
                  <td align="center"><?php echo $item['kesimpulan_listrik'] ?></td>
                </tr>
                <tr>
                  <td>Kinerja Alat Kesehatan</td>
                  <td align="center"><?php echo $item['kesimpulan_kinerja'] ?></td>
                </tr>
                </tbody>
              </table>
              <div class="form-group row">
                <label for="catatan" class="col-xs-3 col-form-label">Catatan<i class="text-danger">*</i></label>
                <div class="col-xs-9">
                <textarea class="form-control" name="" id="" maxlength="255" rows="5" cols="50" readonly><?php echo $item['catatan'] ?></textarea>
                </div>
              </div>
            <!-- KESIMPULAN -->

            <!-- KESIMPULAN -->
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
                  <td align="center"><?php echo $item['pelaksana']; ?></td>
                  <td align="center"><?php echo $item['operator_alat']; ?></td>
                </tr>
                </tbody>
              </table>
            <!-- KESIMPULAN -->

              <!-- <table width="84%" border="1px dot yellow" cellspacing="10" style="margin: 5% 0 0 8%">
                <tbody>
                  <tr>
                    <th width="7%" colspan="2">
                  
                    </th>
                  </tr>
                
                  <tr>
                    <td style="text-align: center;" class="td-custom" width="25%"><b>Teknisi 1</b></td>
                    <td style="text-align: center;" class="td-custom" width="25%"><b>Pelapor</b></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="25%">
                       Tandatangan 
                      <img style="margin-left: 50px;" id="sig-image1" src="" alt="Tanda tangan akan muncul disini" />
                       Tandatangan N 
                    </td>
                    <td class="td-custom" width="25%">
                       Tandatangan 
                      <img style="margin-left: 50px;" id="sig-image2" src="" alt="Tanda tangan akan muncul disini" />
                       Tandatangan N 
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: center;" class="td-custom"></td>
                    <td style="text-align: center;" class="td-custom"></td>
                  </tr>
                  <tr>
                    <td style="text-align: center; padding: 5px 0 5px 0;" width="7%" colspan="2"> <b>Kepala Ruangan</b></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="25%">
                       Tandatangan 
                      <img style="margin-left: 230px;" id="sig-image3" src="" alt="Tanda tangan akan muncul disini" />
                       Tandatangan N 
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: center; padding: 5px 0 5px 0;" width="7%" colspan="2">
                      <?php echo $item['ka_instalasi_un']; ?>
                    </td>
                  </tr>
                </tbody>
              </table> -->
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