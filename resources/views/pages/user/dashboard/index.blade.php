@extends('layouts.user')

@section('content')
@push('prepend-style')
<!-- xzoom -->
<!--Boostrap5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@section('title', 'Dashboard')
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
        <small>Dashboard PPM USER</small>
      </div>
    </div>
  </section>

  <!--Slide-->
  @if (Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0004" )
  <div class="mb-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src=" {{ url('assets/images/cilegon4.png') }}" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="{{ url('assets/images/cilegon3.png') }}" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="{{ url('assets/images/cilegon7.png') }}" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="{{ url('assets/images/cilegon2.png') }}" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="{{ url('assets/images/cilegon6.png') }}" class="d-block w-100 c-img" alt="...">
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
  @endif
  <!--Slide-->
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="row">

      <?php
      //if ($this->permission->method('appointment_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="info-box bg-olive">
          <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>
          <!-- <span class="info-box-icon"><i class="fa fa-edit"></i></span> -->

          <div class="info-box-content">
            <span class="info-box-text"><?= "JUMLAH ALAT TERGESITRASI" ?></span>
            <span class="info-box-number">{{ $registrasi }}</span>

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
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class=" info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
          <!-- <span class="info-box-icon"><i class="fa fa-wheelchair"></i></span> -->

          <div class="info-box-content">
            <span class="info-box-text"><?= "JUMLAH ASSET PERBAIKAN TERGESITRASI" ?></span>
            <span class="info-box-number">{{ $perbaikanRegistrasi }}</span>

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
      // if ($this->permission->method('bed_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="info-box bg-navy-blue">
          <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
          <!-- <span class="info-box-icon"><i class="fa fa-bed"></i></span> -->

          <div class="info-box-content">
            <span class="info-box-text"><?= "JUMLAH ASSET PERBAIKAN UNRGESITRASI" // display('free_bed_list') 
                                        ?></span>
            <span class="info-box-number">{{ $perbaikanUnregistrasi }}</span>

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
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="info-box bg-light-green">
          <span class="info-box-icon"><i class="fa fa-cogs"></i></span>
          <!-- <span class="info-box-icon"><i class="fa fa-sign-out"></i></span> -->

          <div class="info-box-content">
            <span class="info-box-text"><?= "JUMLAH ALAT TERKALIBRASI" // display('discharged') 
                                        ?></span>
            <span class="info-box-number">{{ $lembarPemeliharaan }}</span>

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
    </div>
  </div>

  <?php
  // if ($this->permission->method('graph', 'read')->access()) {
  ?>
  <script type="text/javascript">
    $(window).on('load', function() {
      //line chart
      var ctx = document.getElementById("lineChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
              label: "<?= 'patient' ?>",
              borderColor: "#3498DB",
              borderWidth: "1",
              //backgroundColor: "rgba(0,0,0,.07)",
              pointHighlightStroke: "rgba(52,152,219)",
              data: [<?php //echo $allPatient; 
                      ?>]
            },
            {
              label: "<?= 'appointment' ?>",
              borderColor: "#37a000",
              borderWidth: "1",
              //backgroundColor: "#73BC4D",
              pointHighlightStroke: "rgba(55,160,0)",
              data: [<?php [1, 2] // echo $allAppoint; 
                      ?>]
            },
            {
              label: "<?= 'prescription'  ?>",
              borderColor: "#FFB61E",
              borderWidth: "1",
              //backgroundColor: "#1ABC9C",
              pointHighlightStroke: "rgba(130, 224, 170,1)",
              data: [<?php // echo $allPrescrip; 
                      ?>]
            }
          ]
        },
        options: {
          responsive: true,
          tooltips: {
            mode: 'index',
            intersect: false
          },
          hover: {
            mode: 'nearest',
            intersect: true
          }

        }
      });

    });
  </script>
  <?php // } 
  ?>


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
      //   if (isTokenSentToServer()) {
      //     console.log('Token telah disimpan.');
      //   subscribeTokenToTopic("cTyR5spvB78nwUrQ_L5t-5:APA91bEuWPNZW99bB_gUOVVxnVlDt8OytcQdmaDZIVd06VskdDaf1jTTCeSD1mX3Xdwuyq-4TYV9snMeXvSkh5bDt9lHHO3bbcEqV__Oy6nihbxYkz091lPPdvi918o6XRNUu7w3HUpP", "userRS0001");
      //   } else {
      getRegToken();
      //   }
    })
    .catch(function(err) {
      console.log('Tidak dapat mendapatkan izin untuk memberi notifikasi.', err);
    });

  function getRegToken() {
    messaging.getToken()
      .then(function(currentToken) {
        console.log(currentToken)
        if (currentToken) {
          setTokenSentToServer(true);
          const userCode = "{{ Auth::user()->kode_rs . Auth::user()->user_role;}}";
          console.log(userCode);
          subscribeTokenToTopic(currentToken, userCode)
        } else {
          console.log('Tidak ada token Instance ID yang tersedia. Meminta izin untuk menghasilkan satu.');
          setTokenSentToServer(false);
        }
      })
      .catch(function(err) {
        console.log('Terjadi kesalahan saat mengambil token. ', err);
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
      console.log('Subscribed to "' + topic + '"');
    }).catch(error => {
      console.error(error);
    })
  }

  function setTokenSentToServer(sent) {
    window.localStorage.setItem('sentToServer', sent ? 1 : 0);
  }

  function isTokenSentToServer() {
    return window.localStorage.getItem('sentToServer') == 1;
  }
</script>