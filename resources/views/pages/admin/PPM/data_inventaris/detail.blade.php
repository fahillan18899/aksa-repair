@extends('layouts.admin')

@section('title', 'Detail Aset')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->




    <!-- content -->
    <div class="item justify-content-center mt-5">
      <div class="col-sm-12" id="PrintMe">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="btn-group">
            <h3>Data Detail Alat</h3>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="align-center mt-5">
                <img src="" alt="Kop Surat" width="100%">
              </div>
              <div class="card-body">
                  <br>
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">ID Aset</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['id_aset'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Jenis Alat</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['jenis_alat'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Nama Alat</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['nama_alat'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Merek Alat</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['merek'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Type Alat</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['type'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Serial Numner Alat</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['serial_number'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Lokasi Alat</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['lokasi_alat'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Penyusutan Aset</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['penyusutan_aset'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Tanggal Kalibrasi</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['tanggal_kalibrasi'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">No Sertifikat Kalibrasi</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemData['no_sertifikat_kalibrasi'] ?></p>
                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Kerusakan</label>
                    <div class="col-xs-9">
                      <p>: <?php echo $itemKerusakan ?></p>
                    </div>
                  </div>
                  <!---->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div> <!-- /.content -->
@endsection