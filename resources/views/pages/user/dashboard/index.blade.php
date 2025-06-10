@extends('layouts.user')

@section('content')
@if (Auth::user()->kode_rs == 'RS0004')
@push('prepend-style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@endif
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
  @if (Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == 'RS0004')
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

      <!-- Box Jumlah Alat -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-olive">
            <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><?= 'JUMLAH ALAT TERGESITRASI' ?></span>
              <span class="info-box-number">{{ $registrasi }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y') ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Alat end-->

      <!-- Box Jumlah Aset Perbaikan Regis -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class=" info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><?= 'JUMLAH ASSET PERBAIKAN TERGESITRASI' ?></span>
              <span class="info-box-number" id="count_perbaikan">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y') ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Aset Perbaikan Regis end-->

      <!-- Box Permintaan perbaiian user -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-navy-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">JUMLAH PERMINTAAN PERBAIKAN USER</span>
              <span class="info-box-number" id="count_permintaan">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y') ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Permintaan perbaiian user end -->

      <!-- Box Jumlah Aset Terkalibrasi -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-light-green">
            <span class="info-box-icon"><i class="fa fa-cogs"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><?= 'JUMLAH ALAT TERPELIHARA' ?></span>
              <span class="info-box-number">{{ $alatTerkalibrasi }} / {{$registrasi}}</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y') ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Aset Terkalibrasi end -->

      <!-- CARD TABEL PERMINTAAN -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">

              <div class="panel-heading no-print">
                <div class="row">
                  <div class="col-md-5">
                    <div class="btn-group">
                      <a class="btn btn-success" href="/dashboard_user/pesanan_user"> <i class="fa fa-plus"></i> Request Perbaikan </a>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <h2>Tabel Perbaikan</h2>
                  </div>
                </div>
              </div>
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <!--TABEL-->
                    <table class="datatable table table-striped table-bordered" style="width:100%">
                      <thead class="table-light">
                        <th class="">Tanggal</th>
                        <th class="">Nama</th>
                        <th class="">Merek</th>
                        <th class="">Type</th>
                        <th class="">Serial_Number</th>
                        <th class="">Lokasi</th>
                        <th class="">Status</th>
                        <th class="">Keterangan</th>
                      </thead>
                      <tbody id="perbaikanUser">
                        <!-- DATA AJAX -->
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
      <!-- CARD TABEL PERMINTAAN N-->
      
      <!-- CARD TABEL PERBAIKAN -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">
              <div class="panel-heading no-print">
                <div class="row">
                  <div class="col-md-5">
                    <h2>Tabel Permintaan Perbaikan</h2>
                  </div>
                </div>
              </div>
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <!--TABEL-->
                    <table class="datatable table table-striped table-bordered" style="width:100%">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Id</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Serial Number</th>
                          <th scope="col">Pelapor</th>
                          <th scope="col">Tanggal</th>
                          <th scope="col">Tombol_Aksi_Table</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($itemPesanan as $index => $item)
                        <tr>
                          <td>{{ $index + 1 }}</td>
                          <td title="klik untuk copy ke form" onclick="copy(this)"><span>{{ $item->id_req }}<span></td>
                          <td>{{ $item->nama_req }}</td>
                          <td>{{ $item->merek_req }}</td>
                          <td>{{ $item->type_req }}</td>
                          <td>{{ $item->sn_req }}</td>
                          <td>{{ $item->pelapor_req }}</td>
                          <td>{{ $item->tanggal_req }}</td>
                          <td>
                            <form action="{{ url('/dashboard_user/perbaikan_teregistrasi', $item->id_req) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="validasi"> Validasi perbaikan </button>
                            </form>
                          </td>
                        </tr>
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
      <!-- CARD TABEL PERBAIKAN -->
    </div>
  </div>
<!-- /.content -->
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection

@push('addon-script')
<!-- <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-messaging.js"></script>

<script>
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

<!-- AJAX PERBAIKAN -->
  <script>
    function loadPerbaikanUser(){
      // console.log("Memulai loadPerbaikanUser"); //Debug fungsi berjalan / tidak

      $.ajax({
        url: '{{ route("perbaikanUser.data") }}',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          // console.log("Data berhasil diterima:", data); //Debug tampilan data yang di get oleh ajax

          let rows ='';
          data.forEach(item => {
            // console.log(item);
            rows += `
              <tr>
                <td>${item.tanggal_perbaikan_reg}</td>
                <td>${item.nama_alat_reg}</td>
                <td>${item.merek_alat_reg}</td>
                <td>${item.type_alat_reg}</td>
                <td>${item.serial_number_reg}</td>
                <td>${item.lokasi_alat_reg}</td>
                <td>
                  <button class="btn btn-sm ${item.status == 0 ? 'btn-success' : 'btn-danger'} update-status-btn"
                  data-id="${item.status}" disabled>
                  ${item.status == 0 ? 'Sudah disetujui' : 'Belum disetujui'}
                  </button>
                </td>
                <td>
                  <button class="btn btn-sm ${item.keterangan_kondisi_alat_reg == 0 ? 'btn-success' : 'btn-warning'} update-status-btn"
                  data-id="${item.id_perbaikan_reg}" disabled>
                  ${item.keterangan_kondisi_alat_reg == 0 ? 'Selesai, dikembalikan' : 'Dalam Perbaikan'}
                  </button>
                </td>
              </tr>
            `;
          });

          $('#perbaikanUser').html(rows);
          // console.log("Tabel berhasil diperbaharui"); //Debug konfirmasi update
        },
        error: function(xhr, status, error) {
          console.log("Gagal memuat data", error)
        }
      });
    }

    $(document).ready(function(){
      // console.log("Dokumen siap, mulai polling...");
      loadPerbaikanUser();
      setInterval(loadPerbaikanUser, 3000);
    });
  </script>
<!-- AJAX PERBAIKAN N-->

<!-- COUNT PERMINTAAN PERBAIKAN -->
 <script>
  function jumlahPermintaanUser() {
    $.ajax({
      url: '{{ route("permintaanUser.count") }}',
      method: 'GET',
      success: function(response) {
        $('#count_permintaan').text(response.countPermintaan);
      },
      error: function(xhr, status, error) {
        console.log("Gagal mengambil data permintaan:", error);
      }
    });
  }

  $(document).ready(function() {
    jumlahPermintaanUser();
    setInterval(jumlahPermintaanUser, 3000);
  })
 </script>
<!-- COUNT PERMINTAAN PERBAIKAN N-->

<!-- COUNT PERBAIKAN -->
 <script>
  function jumlahPerbaikanUser() {
    $.ajax({
      url: '{{ route("perbaikanUser.count") }}',
      method: 'GET',
      success: function(response) {
        $('#count_perbaikan').text(response.countPerbaikan);
      },
      error: function(xhr, status, error) {
        console.log("Gagal mengambil data perbaikan:", error);
      }
    });
  }

  $(document).ready(function() {
    jumlahPerbaikanUser();
    setInterval(jumlahPerbaikanUser, 3000);
  })
 </script>
<!-- COUNT PERBAIKAN N-->
@endpush