@extends('layouts.admin')

@section('title', 'Cetak Aset')
@push('addon-style')
<style>
  .td-custom {
    padding: 5px 0 5px 80px;
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
</style>
@endpush

@section('content')
<!-- Content Wrapper -->
<div class="content-wrapper">
  <div class="content">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="card" id="PrintMe">
            <div class="align-center mt-5">

            </div>

            <div class="card-body">
              <table id="printContent" width="100%" border="1px dot yellow" cellspacing="10" style="margin-top: 10px;">
                <thead>
                  <tr>
                    <td colspan="2">
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
                      "RS0017" => "kop_surat_kendal.png",
                      ];
                      @endphp

                      @if(isset($kopSurat[Auth::user()->kode_rs]))
                      <img src="{{ url('assets/kop-surat/' . $kopSurat[Auth::user()->kode_rs]) }}"
                        alt="Kop Surat" width="100%">
                      @endif
                      @endif
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center" colspan="2">
                      <h3>Report Data Inventaris</h3>
                    </td>
                  </tr>

                  @php
                  $fields = [
                  "Id Aset" => "id_aset",
                  "Jenis Alat" => "jenis_alat",
                  "Nama Alat" => "nama_alat",
                  "Merek" => "merek",
                  "Type" => "type",
                  "Serial Number" => "serial_number",
                  "Lokasi" => "lokasi_alat",
                  "Penyusutan Aset" => "penyusutan_aset",
                  "Tanggal Kalibrasi" => "tanggal_kalibrasi",
                  "Nomor Sertifikat Kalibrasi" => "no_sertifikat_kalibrasi",
                  ];
                  @endphp

                  @foreach($fields as $label => $key)
                  <tr>
                    <td width="50%" class="td-custom">{{ $label }}</td>
                    <td class="td-custom">{{ $item[$key] ?? '-' }}</td>
                  </tr>
                  @endforeach

                  <tr>
                    <td class="td-custom"><br></td>
                    <td class="td-custom"><br></td>
                  </tr>

                  <tr>
                    <td class="text-center">Teknisi</td>
                    <td class="text-center">Kepala Ruangan</td>
                  </tr>

                  <tr>
                    <td>
                      <!-- Tanda Tangan -->
                      <img style="margin-left: 100px;" id="ttd_image1" src="" alt="Tanda tangan akan muncul di sini" />
                      <!-- Tandatangan N-->
                    </td>
                    <td>
                      <!-- Tanda Tangan -->
                      <img style="margin-left: 100px;" id="ttd_image2" src="" alt="Tanda tangan akan muncul di sini" />
                      <!-- Tandatangan N-->
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center">{{ $item['teknisi_ppm'] ?? '-' }}</td>
                    <td class="text-center">.................................</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="panel-footer no-print text-center">
            <button class="btn btn-primary mb-3" onclick="printTableMonitoring()">Print</button>
            <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#exampleModal">TTD</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal  -->
<!-- Button trigger modal  -->
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
              <!-- Area Tanda Tangan -->
              <div class="row" style="margin-left: 5px;">
                <div class="col-md-12">
                  <p>Tanda tangan Teknisi</p>
                  <canvas id="ttd_canvas1" width="150" height="100"></canvas>
                  <div class="mt-2">
                    <button class="btn btn-primary" id="ttd_submitBtn1">Submit</button>
                    <button class="btn btn-default" id="ttd_clearBtn1">Clear</button>
                  </div>
                </div>
              </div>
              <!-- ttd 1N-->
              <!-- ttd 2-->
              <!-- Area Tanda Tangan -->
              <div class="row" style="margin-left: 5px;">
                <div class="col-md-12">
                  <p>Tanda tangan Teknisi</p>
                  <canvas id="ttd_canvas2" width="150" height="100"></canvas>
                  <div class="mt-2">
                    <button class="btn btn-primary" id="ttd_submitBtn2">Submit</button>
                    <button class="btn btn-default" id="ttd_clearBtn2">Clear</button>
                  </div>
                </div>
              </div>
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
                
              @media print {
                .actionColumn {
                display: none !important;
                }
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
  document.addEventListener("DOMContentLoaded", function() {
    const canvas = document.getElementById("ttd_canvas1");
    const ctx = canvas.getContext("2d");
    const sigImage = document.getElementById("ttd_image1");
    const clearBtn = document.getElementById("ttd_clearBtn1");
    const submitBtn = document.getElementById("ttd_submitBtn1");

    ctx.strokeStyle = "#222";
    ctx.lineWidth = 4;

    let drawing = false;
    let lastPos = {
      x: 0,
      y: 0
    };

    function getPos(e) {
      const rect = canvas.getBoundingClientRect();
      return {
        x: (e.touches ? e.touches[0].clientX : e.clientX) - rect.left,
        y: (e.touches ? e.touches[0].clientY : e.clientY) - rect.top,
      };
    }

    function startDraw(e) {
      drawing = true;
      lastPos = getPos(e);
    }

    function draw(e) {
      if (!drawing) return;
      const pos = getPos(e);
      ctx.beginPath();
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(pos.x, pos.y);
      ctx.stroke();
      lastPos = pos;
    }

    function stopDraw() {
      drawing = false;
    }

    function clearCanvas() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      sigImage.src = "";
    }

    function saveSignature() {
      sigImage.src = canvas.toDataURL();
    }

    canvas.addEventListener("mousedown", startDraw);
    canvas.addEventListener("mousemove", draw);
    canvas.addEventListener("mouseup", stopDraw);
    canvas.addEventListener("mouseleave", stopDraw);

    canvas.addEventListener("touchstart", startDraw);
    canvas.addEventListener("touchmove", draw);
    canvas.addEventListener("touchend", stopDraw);

    clearBtn.addEventListener("click", clearCanvas);
    submitBtn.addEventListener("click", saveSignature);
  });
  // ttd S 1
  // ttd 2
  document.addEventListener("DOMContentLoaded", function() {
    const canvas = document.getElementById("ttd_canvas2");
    const ctx = canvas.getContext("2d");
    const sigImage = document.getElementById("ttd_image2");
    const clearBtn = document.getElementById("ttd_clearBtn2");
    const submitBtn = document.getElementById("ttd_submitBtn2");

    ctx.strokeStyle = "#222";
    ctx.lineWidth = 4;

    let drawing = false;
    let lastPos = {
      x: 0,
      y: 0
    };

    function getPos(e) {
      const rect = canvas.getBoundingClientRect();
      return {
        x: (e.touches ? e.touches[0].clientX : e.clientX) - rect.left,
        y: (e.touches ? e.touches[0].clientY : e.clientY) - rect.top,
      };
    }

    function startDraw(e) {
      drawing = true;
      lastPos = getPos(e);
    }

    function draw(e) {
      if (!drawing) return;
      const pos = getPos(e);
      ctx.beginPath();
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(pos.x, pos.y);
      ctx.stroke();
      lastPos = pos;
    }

    function stopDraw() {
      drawing = false;
    }

    function clearCanvas() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      sigImage.src = "";
    }

    function saveSignature() {
      sigImage.src = canvas.toDataURL();
    }

    canvas.addEventListener("mousedown", startDraw);
    canvas.addEventListener("mousemove", draw);
    canvas.addEventListener("mouseup", stopDraw);
    canvas.addEventListener("mouseleave", stopDraw);

    canvas.addEventListener("touchstart", startDraw);
    canvas.addEventListener("touchmove", draw);
    canvas.addEventListener("touchend", stopDraw);

    clearBtn.addEventListener("click", clearCanvas);
    submitBtn.addEventListener("click", saveSignature);
  });
  // ttd S 2
  // FUNGSI TTD DIGITAL END
</script>
@endpush