@extends('layouts.admin')

@section('content')
@section('title', 'Scanner QR')
<style>
  /* Ubah warna border input yang tidak valid menjadi merah */
  .form-control.is-invalid {
    border-color: red;
  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text"></i></div>
      <div class="header-title">
        <h1>Scanner QR</h1>
        <small>Scanner QR</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <div class="row" style="display: flex; justify-content: center;">
      <div class="col-md-6">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">
            <div class="panel panel-default thumbnail">
              <div class="panel-heading no-print">
                <h2 class="text-center">Scan QR Code</h2>
              </div>
              <div class="panel-body panel-form">
                <div id="app">
                  <div class="preview-container">
                    <video id="preview"></video>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ url('assets/js/instascan.min.js') }}"></script>

<script>
  let scanner = new Instascan.Scanner({
    video: document.getElementById('preview'),
    mirror: false
  });
  scanner.addListener('scan', function(content) {

    function convertBase(num, fromBase, toBase) {
      let decimal = parseInt(num, fromBase);
      let result = decimal.toString(toBase);
      let width = 4;
      let hasil = result.padStart(width, '0');
      return hasil;
    }

    const convertBaseReturn = convertBase(content, 36, 10);
    window.location.href = "{{ url('dashboard/ppm/data_alat') }}/" + content;
    if (String(convertBaseReturn).substring(0, 2) == "24") {
    }
  });

  Instascan.Camera.getCameras().then(cameras => {
    if (cameras.length > 0) {
      scanner.start(cameras[1]);
    } else {
      console.error("Please enable Camera!");
    }
  });
  
  
</script>
@endsection