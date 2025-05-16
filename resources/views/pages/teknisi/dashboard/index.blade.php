@extends('layouts.teknisi')
@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Dashboard</h1>
        <small>Dashboard PPM Teknisi</small>
      </div>
    </div>
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="row">
      <!-- Box Jumlah Alat -->
        <?php
        //if ($this->permission->method('appointment_list', 'read')->access()) {
        ?>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-olive">
          <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><?= "JUMLAH ALAT TERGESITRASI" ?></span>
              <span class="info-box-number">{{ $registrasi }}</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
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
      <!-- Box Jumlah Alat end -->

      <!-- Box Jumlah Aset Perbaikan Regis -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class=" info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">
                <a href="dashboard_teknisi/view_tabelT" style="color: white"><?= "JUMLAH ASSET PERBAIKAN TERGESITRASI" ?></a>
              </span>
              <span class="info-box-number">{{ $perbaikanRegistrasi }} / {{ $registrasi }}</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
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
      <!-- Box Jumlah Aset Perbaikan Regis End -->

      <!-- Box Jumlah Aset Perbaikan Unregis -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-navy-blue">
          <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">
                <a href="dashboard_teknisi/view_tabelT2" style="color: white"><?= "JUMLAH ASSET PERBAIKAN UNRGESITRASI" ?></a>
              </span>
              <span class="info-box-number">KOSONG</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
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
      <!-- Box Jumlah Aset Perbaikan Unregis end  -->

      <!-- Box Jumlah Aset Terkalibrasi -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-light-green">
            <span class="info-box-icon"><i class="fa fa-cogs"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">
                <a href="dashboard_teknisi/view_tabelT3" style="color: white"><?= "JUMLAH ALAT TERKALIBRASI"?></a>
              </span>
              <span class="info-box-number">{{ $alatTerkalibrasi }} / {{ $registrasi }} </span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
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
      <!-- Box Jumlah Aset Terkalibrasi end  -->
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

<!-- <script>
    const firebaseConfig = {
        apiKey: "{{ config('app.api_key') }}",
        authDomain: "{{ config('app.auth_domain') }}",
        projectId: "{{ config('app.project_id') }}",
        storageBucket: "{{ config('app.storage_bucket') }}",
        messagingSenderId: "{{ config('app.message_sender_id') }}",
        appId: "{{ config('app.app_id') }}",
        measurementId: "{{ config('app.measurement_id') }}"
    };

    firebase.initializeApp(firebaseConfig);

    const messaging = firebase.messaging();
    messaging.requestPermission()
        .then(function() {
            getRegToken();
        })
        .catch(function(err) {
            console.log('Tidak dapat mendapatkan izin untuk memberi notifikasi.');
        });

    function getRegToken() {
        messaging.getToken()
            .then(function(currentToken) {
                console.log(currentToken)
                if (currentToken) {
                    setTokenSentToServer(true);
                    const userCode = "{{ Auth::user()->kode_rs . 'user'}}";
                    subscribeTokenToTopic(currentToken, userCode)
                    console.log("Notifikasi Di Aktifkan")
                } else {
                    setTokenSentToServer(false);
                }
            })
            .catch(function(err) {
                console.log('Terjadi kesalahan saat mengambil token.');
                setTokenSentToServer(false);
            });
    }

    function subscribeTokenToTopic(token, topic) {
        fetch('https://iid.googleapis.com/iid/v1/' + token + '/rel/topics/' + topic, {
            method: 'POST',
            headers: new Headers({
                'Authorization': 'key=AAAAatkICYs:APA91bGcQtde2KpTOZEmKmzYJU_VrfBuYeCw79SElSS2QRkyl0XTIro0wJBnhE1kJvHllpzWSS8doQQRS1OLPV6cnhZOJW8Z2S97RAApwUPusTji6VQpYjpzYXjyqCVjMAFHHojxMK0b',
            })
        }).then(response => {
            if (response.status < 200 || response.status >= 400) {
                throw 'Error subscribing to topic: ' + response.status + ' - ';
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
</script> -->
@endpush