@extends('layouts.admin')

@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-home"></i></div>
      <div class="header-title">
        <h1>Dashboard</h1>
        <small>Dashboard PPM</small>
      </div>
    </div>
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="row">
      <!--Box Jumlah Alat -->
      <?php
      //if ($this->permission->method('appointment_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="info-box bg-olive">
          <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>
          <!-- <span class="info-box-icon"><i class="fa fa-edit"></i></span> -->

          <div class="info-box-content">
            <span class="info-box-text">
              <a href="data_inventaris" style="color :white"><?= "JUMLAH ALAT TEREGISTRASI" ?></a></span>
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
      <!--Box Jumlah Alat end-->

      <!--Box Jumlah Aset Perbaikan Regis -->
      <?php
      // if ($this->permission->method('patient_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class=" info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">
              <a href="view_tabel"
                style="color :white"><?= "JUMLAH ASSET PERBAIKAN TEREGISTRASI" ?></a>
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
      <!--Box Jumlah Aset Perbaikan Regis end-->

      <!--Box Jumlah Aset Perbaikan Unregis -->
      <?php
      // if ($this->permission->method('bed_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="info-box bg-navy-blue">
          <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
          <div class="info-box-content">
            <span class="info-box-text"><a href="view_tabel2" style="color : white"><?= "JUMLAH ASSET PERBAIKAN UNREGISTRASI" ?></a></span>
            <span class="info-box-number">{{ $perbaikanUnregistrasi }} </span>
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
      <!--Box Jumlah Aset Perbaikan Unregis -->

      <!--Box Jumlah Aset Terkalibrasi -->
      <?php
      //if ($this->permission->method('bed_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="info-box bg-light-green">
          <span class="info-box-icon"><i class="fa fa-cogs"></i></span>
          <div class="info-box-content">
            <span class="info-box-text"><a href="view_tabel3" style="color: white"><?= "JUMLAH ALAT TERKALIBRASI" ?></a></span>
            <span class="info-box-number">{{ $registrasiKalBar }} / {{ $registrasi }}</span>
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
      <!--Box Jumlah Aset Terkalibrasi end-->

      <!--Card Tabel Perbaikan-->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print">
              <div class="row">
                <div class="col-md-5">
                  <div class="btn-group">
                    <a class="btn btn-success" href="/dashboard/ppm/pesanan"> <i class="fa fa-plus"></i> Request Perbaikan </a>
                  </div>
                </div>
                <div class="col-md-5">
                  <h2>Tabel Perbaikan</h2>
                </div>
              </div>
            </div>
            <div style="overflow-x:auto;">
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <!--TABEL-->
                    <table class="datatable table table-striped table-bordered" style="width:100%">
                      <thead class="table-light">
                        <th scope="col">No</th>
                        <th scope="col">Id_Perbaikan</th>
                        <th scope="col">ID_Aset</th>
                        <th scope="col">Tanggal_Perbaikan</th>
                        <th scope="col">Nama_Alat</th>
                        <th scope="col" class="none">Merek_Alat</th>
                        <th scope="col" class="none">Type_Alat</th>
                        <th scope="col" class="none">Serial_Number</th>
                        <th scope="col" class="none">Lokasi_Alat</th>
                      </thead>
                      <tbody>
                        @forelse ($dataPerbaikan as $index => $item)
                        <tr class="odd gradeX">
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $item['id_perbaikan_reg'] }}</td>
                          <td>{{ $item['id_aset_reg'] }}</td>
                          <td>{{ $item['tanggal_perbaikan_reg'] }}</td>
                          <td>{{ $item['nama_alat_reg'] }}</td>
                          <td>{{ $item['merek_alat_reg'] }}</td>
                          <td>{{ $item['type_alat_reg'] }}</td>
                          <td>{{ $item['serial_number_reg'] }}</td>
                          <td>{{ $item['lokasi_alat_reg'] }}</td>
                          @empty
                          @endforelse
                      </tbody>
                    </table>
                    <!--TABEL-->
                  </div>
                  <div class="col-md-3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Card Tabel Perbaikan-->
  </div>

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
</div>
@endsection


@push('addon-script')
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-messaging.js"></script>

<script>
  $('.datatable').DataTable({
    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "All"]
    ],
    buttons: [{
        extend: 'copy',
        className: 'btn-sm'
      },
      {
        extend: 'csv',
        title: 'ExampleFile',
        className: 'btn-sm'
      },
      {
        extend: 'excel',
        title: 'ExampleFile',
        className: 'btn-sm',
        title: 'exportTitle'
      },
      {
        extend: 'pdf',
        title: 'ExampleFile',
        className: 'btn-sm'
      },
      {
        extend: 'print',
        className: 'btn-sm'
      }
    ]
  });


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
      console.log('Izin notifikasi diberikan.');
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
          const userCode = "{{ Auth::user()->kode_rs . Auth::user()->user_role }}";
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
        throw 'Error subscribing to topic: ' + response.status + ' - ' + response.text();
      }
      console.log('Subscribed to ' + topic);
      console.log("Notifikasi Di Aktifkan")
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