@extends('layouts.admin')
@if (Auth::user()->kode_rs == "RS0004")
@push('prepend-style')
<!-- xzoom -->
<!--Boostrap5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@endif
@section('content')
<style>
  .c-item {
    height: 480px;
  }

  .c-img {
    height: 100%;
    object-fit: cover;
    filter: brightness(0.6);
  }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Dashboard</h1>
        <small>Home</small>
      </div>
    </div>
  </section>
  <!-- /.content-header -->
  @if( Auth::user()->kode_rs == "RS0004")
  <!--Slide-->
  <div class="mb-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="{{asset('/assets/images/rsc/cilegon7.png') }}" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="{{ asset('/assets/images/rsc/cilegon3.png') }}" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="{{ asset('/assets/images/rsc/cilegon4.png') }}" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="{{asset('/assets/images/rsc/cilegon2.png') }}" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="{{ asset('/assets/images/rsc/cilegon6.png') }}" class="d-block w-100 c-img" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!--Slide-->
  @endif
  <!-- Main content -->
  <div class="content">
    <div class="row">
      <!-- welcome message -->
      <?php if (isset($_SESSION['welcome'])) { ?>
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo "Selamat Datang" ?>
        </div>
      <?php } ?>

      <?php
      //if ($this->permission->method('appointment_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="info-box bg-olive">
          <span class="info-box-icon"><i class="fa fa-edit"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><?= "Janji Temu" ?></span>
            <span class="info-box-number"><?php echo number_format((!empty($notify[0]->total_app) ? $notify[0]->total_app : null)) ?></span>

            <div class="progress">
              <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
              <?= date('j F, Y'); ?>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <?php //} 
      ?>

      <?php
      // if ($this->permission->method('patient_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class=" info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-wheelchair"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><?= "Pasien" ?></span>
            <span class="info-box-number"><?php echo number_format((!empty($notify[1]->total_patient) ? $notify[1]->total_patient : null)) ?></span>

            <div class="progress">
              <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
              <?= date('j F, Y'); ?>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <?php // } 
      ?>

      <?php
      // if ($this->permission->method('prescription_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class=" info-box bg-yellow">
          <span class="info-box-icon"><i class="ti-book"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><?= "Resep"  //display('prescription') 
                                        ?></span>
            <span class="info-box-number"><?php echo number_format((!empty($notify[3]->total_prescription) ? $notify[3]->total_prescription : null)) ?></span>

            <div class="progress">
              <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
              <?= date('j F, Y'); ?>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <?php // } 
      ?>

      <?php
      //if ($this->permission->method('doctor_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="fa fa-user-md"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><?= "Dokter" // display('doctor') 
                                        ?></span>
            <span class="info-box-number"><?php echo number_format((!empty($notify[2]->total_doctor) ? $notify[2]->total_doctor : null)) ?></span>

            <div class="progress">
              <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
              <?= date('j F, Y'); ?>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <?php //} 
      ?>

      <?php
      // if ($this->permission->method('bed_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="info-box bg-navy-blue">
          <span class="info-box-icon"><i class="fa fa-bed"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><?= "Daftar Tempat Tidur Kosong" // display('free_bed_list') 
                                        ?></span>
            <span class="info-box-number"><?php echo number_format((!empty($notify[4]->total_freebed) ? $notify[4]->total_freebed : null)) ?></span>

            <div class="progress">
              <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
              <?= date('j F, Y'); ?>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <?php // } 
      ?>

      <?php
      //if ($this->permission->method('bed_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="info-box bg-light-green">
          <span class="info-box-icon"><i class="fa fa-sign-out"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><?= "Boleh Pulang" // display('discharged') 
                                        ?></span>
            <span class="info-box-number"><?php echo number_format((!empty($notify[5]->total_discharged) ? $notify[5]->total_discharged : null)) ?></span>

            <div class="progress">
              <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
              <?= date('j F, Y'); ?>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <?php // } 
      ?>
    </div> <!-- /.row -->

    <div class="row">

      <div class="col-lg-8">
        <div class="panel panel-default" style="height: 505px !important;">
          <div class="panel-heading">
            <h3>Daftar pasien hari ini</h3>
          </div>
          <div class="panel-body">
            <div class="table-wrapper-scroll-y">
              <!-- today patient list -->
              <table width="100%" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>idno</th>
                    <th>Nama Depan</th>
                    <th>Nama Belkang</th>
                    <th>Nomor Ponsel</th>
                    <th>Jenis Kelamin</th>
                    <th>Golongan Darah</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $lastPatient = [
                    [
                      "patient_id" => "1",
                      "firstname" => "John",
                      "lastname" => "Doe",
                      "mobile" => "1234567890",
                      "sex" => "L",
                      "blood_group" => "A+"
                    ],
                    [
                      "patient_id" => "2",
                      "firstname" => "John",
                      "lastname" => "Doe",
                      "mobile" => "1234567890",
                      "sex" => "L",
                      "blood_group" => "A+"
                    ],
                    [
                      "patient_id" => "3",
                      "firstname" => "John",
                      "lastname" => "Doe",
                      "mobile" => "1234567890",
                      "sex" => "L",
                      "blood_group" => "O"
                    ],
                  ]
                  ?>
                  <?php if (!empty($lastPatient)) { ?>
                    <?php $sl = 1; ?>
                    <?php foreach ($lastPatient as $patient) { ?>
                      <tr class="<?php echo ($sl & 1) ? "odd gradeX" : "even gradeC" ?>">
                        <td><?php echo $patient['patient_id']; ?></td>
                        <td><?php echo $patient['firstname']; ?></td>
                        <td><?php echo $patient['lastname']; ?></td>
                        <td><?php echo $patient['mobile']; ?></td>
                        <td><?php echo $patient['sex']; ?></td>
                        <td><?php echo $patient['blood_group']; ?></td>
                        <td class="center">
                          <a href="" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                        </td>

                      </tr>
                      <?php $sl++; ?>
                    <?php } ?>
                  <?php } else { ?>
                    <tr>
                      <td colspan="7">data not available</td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table> <!-- /.table-responsive -->
            </div>
          </div> <!-- /.panel-body -->
        </div>
      </div>
      <?php // } 
      ?>

      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="widget-title">
              <h3>Tautan Langsung</h3>
            </div>
            <div class="fancy-collapse-panel">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-primary">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#billing" aria-expanded="true" aria-controls="billing"><?php echo "Penagihan" // display('billing') 
                                                                                                                                      ?>
                      </a>
                    </h4>
                  </div>
                  <div id="billing" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <ul class="quick-menu">
                        <li><a class="btn bg-green btn-block" href="?hal=billing&fun=service"><?php echo "Daftar Layanan" ?>
                        <li><a class="btn bg-olive btn-block" href="?hal=billing&fun=package"><?php echo "Daftar Paket" ?></a></li>
                        <li><a class="btn bg-blue btn-block" href="?hal=billing&fun=admission"><?php echo "Daftar Penerimaan Pasien" ?></a></li>
                        <li><a class="btn bg-primary btn-block" href="?hal=billing&fun=bill"><?php echo "Daftar Tagihan" ?></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-info">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#hactivity" aria-expanded="false" aria-controls="hactivity">Aktifitas Rumah Sakit ?></a>
                    </h4>
                  </div>
                  <div id="hactivity" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <ul class="quick-menu">
                        <li><a class="btn bg-green btn-block" href="">Laporan Kelahiran</a></li>
                        <li><a class="btn bg-red btn-block" href="">Laporan Kematian</a></li>
                        <li><a class="btn bg-yellow btn-block" href="">Laporan Operasi</a></li>
                        <li><a class="btn bg-primary btn-block" href="">Laporan Investigasi</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-success">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#account" aria-expanded="false" aria-controls="account">Menajer Akuntansi</a>
                    </h4>
                  </div>
                  <div id="account" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      <ul class="quick-menu">
                        <li><a class="btn bg-primary btn-block" href="?hal=billing&fun=bill">Bagan Akun</a></li>
                        <li><a class="btn bg-olive btn-block" href="?hal=billing&fun=general_ledger">Jurnal Umum</a></li>
                        <li><a class="btn bg-blue btn-block" href="?hal=billing&fun=trial_balance">Trial Saldo</a></li>
                        <li><a class="btn bg-green btn-block" href="?hal=billing&fun=profit_loss_report">Rugi Laba</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-warning">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#insurance" aria-expanded="false" aria-controls="insurance"><?php echo "Asuransi" //display('insurance') 
                                                                                                                                                              ?>
                      </a>
                    </h4>
                  </div>
                  <div id="insurance" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      <ul class="quick-menu">
                        <?php
                        // if ($this->permission->method('add_insurance', 'create')->access()) {
                        ?>
                        <li><a class="btn bg-green btn-block" href="?hal=insurance&fun=form"><?php echo "Tambahkan Asuransi" // display('add_insurance') ?></a></li>
                        <li><a class="btn bg-blue btn-block" href="?hal=insurance&fun=index"><?php echo "Daftar Asuransi" // display('insurance_list')  ?></a></li>
                        <li><a class="btn bg-olive btn-block" href="?hal=insurance&fun=limit_approval_form"><?php echo "Tambahkan Batas Persetujuan" // display('add_limit_approval') ?></a></li>
                        <li><a class="btn bg-yellow btn-block" href="?hal=insurance&fun=limit_approval"><?php echo "Daftar Batas Persetujuan" // display('limit_approval_list') ?></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>


  <!-- /.content -->
</div>

@endsection

@push('addon-script')
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-messaging.js"></script>
<link rel="manifest" href="manifest.json">

<script>
  // Initialize Firebase
  /*Update this config*/
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBm2XN6ywRUb408SuoN960m-Or3-FzRAAY",
    authDomain: "wyasa-simrs-notification.firebaseapp.com",
    projectId: "wyasa-simrs-notification",
    storageBucket: "wyasa-simrs-notification.appspot.com",
    messagingSenderId: "1011976405810",
    appId: "1:1011976405810:web:25247a63f17c7dac88cd2b",
    measurementId: "G-HL1GLJM4SW"
  };

  firebase.initializeApp(firebaseConfig);

  const messaging = firebase.messaging();
  messaging.requestPermission()
    .then(function() {
      console.log('Izin notifikasi diberikan.');
      getRegToken();
    })
    .catch(function(err) {
      console.log('Tidak dapat mendapatkan izin untuk memberi notifikasi.');
    });

  function getRegToken() {
    messaging.getToken()
      .then(function(currentToken) {
        if (currentToken) {
          console.log(currentToken)
          setTokenSentToServer(true);
          const userCode = "{{ Auth::user()->kode_rs . Auth::user()->user_role;}}";
          subscribeTokenToTopic(currentToken, userCode)
        } else {
          console.log('Tidak ada token Instance ID yang tersedia. Meminta izin untuk menghasilkan satu.');
          setTokenSentToServer(false);
        }
      })
      .catch(function(err) {
        console.log('Terjadi kesalahan saat mengambil token. ');
        setTokenSentToServer(false);
      });
  }

  function subscribeTokenToTopic(token, topic) {
    fetch('https://iid.googleapis.com/iid/v1/' + token + '/rel/topics/' + topic, {
      method: 'POST',
      headers: new Headers({
        'Authorization': 'key=' +
          'AAAA655-gzI:APA91bGRVjsxkopYiQp_v1nQjASeYsyjBEhXKRkRC766APSytX9Evc6d5Noz1seTF3irwqi5rzbIDE2utWgld_Yr3Or1IZI67WPurKfvU9epaoaZg8v0fDspsXu5HicWWdJjVvf-YPAl',
      })
    }).then(response => {
      if (response.status < 200 || response.status >= 400) {
        throw 'Error subscribing to topic: ' + response.status + ' - ' + response.text();
      }
      console.log('Subscribed to ' + topic);
    }).catch(error => {
      console.error("error");
    })
  }

  function setTokenSentToServer(sent) {
    window.localStorage.setItem('sentToServer', sent ? 1 : 0);
  }

  function isTokenSentToServer() {
    return window.localStorage.getItem('sentToServer') == 1;
  }
</script>

@endpush