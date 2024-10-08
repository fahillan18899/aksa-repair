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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
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
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- Box Jumlah Alat end-->

            <!-- Box Jumlah Aset Perbaikan Regis -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class=" info-box bg-blue">
                    <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><?= 'JUMLAH ASSET PERBAIKAN TERGESITRASI' ?></span>
                        <span class="info-box-number">{{ $perbaikanRegistrasi }} / {{ $registrasi }}</span>
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

            <!-- Box Jumlah Aset Perbaikan Unregis -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="info-box bg-navy-blue">
                    <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">JUMLAH ASSET PERBAIKAN UNRGESITRASI</span>
                        <span class="info-box-number">{{ $perbaikanUnregistrasi }}</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            <?= date('j F, Y') ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- Box Jumlah Aset Perbaikan Unregis end -->

            <!-- Box Jumlah Aset Terkalibrasi -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="info-box bg-light-green">
                    <span class="info-box-icon"><i class="fa fa-cogs"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><?= 'JUMLAH ALAT TERKALIBRASI' ?></span>
                        <span class="info-box-number">{{ $lembarPemeliharaan }} / {{$registrasi}}</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            <?= date('j F, Y') ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- Box Jumlah Aset Terkalibrasi end -->
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
                                            <th class="">No</th>
                                            <th class="">Id Perbaikan</th>
                                            <th class="none">ID_Aset</th>
                                            <th class="none">Tanggal_Perbaikan</th>
                                            <th class="">Nama Alat</th>
                                            <th class="">Merek Alat</th>
                                            <th class="">Type Alat</th>
                                            <th class="">Serial Number</th>
                                            <th class="">Lokasi Alat</th>
                                            <th class="none">Pelapor</th>
                                            <th class="none">Keterangan_Kondisi_Alat</th>
                                            <th class="none">Kepala Ruangan</th>
                                            <th class="none">Teknisi_1</th>
                                            <th class="none">Teknisi_2</th>
                                            <th class="none">Teknisi_3</th>
                                            <th class="none">suku Cadang</th>
                                            <th class="none">volume</th>
                                            <th class="none">Harga Satuan</th>
                                            <th class="none">Jumlah Harga</th>
                                            <th class="none">Keluhan_Dari_alat</th>
                                            <th class="none">Korektif</th>
                                        </thead>
                                        <tbody>
                                            @forelse ($dataPerbaikan as $index => $item)
                                            <tr class="odd gradeX">
                                                <td><?php echo $index  + 1 ?></td>
                                                <td><?php echo $item['id_perbaikan_reg'] ?></td>
                                                <td><?php echo $item['id_aset_reg'] ?></td>
                                                <td><?php echo $item['tanggal_perbaikan_reg'] ?></td>
                                                <td><?php echo $item['nama_alat_reg'] ?></td>
                                                <td><?php echo $item['merek_alat_reg'] ?></td>
                                                <td><?php echo $item['type_alat_reg'] ?></td>
                                                <td><?php echo $item['serial_number_reg'] ?></td>
                                                <td><?php echo $item['lokasi_alat_reg'] ?></td>
                                                <td><?php echo $item['pelapor_reg'] ?></td>
                                                <td><?php echo $item['keterangan_kondisi_alat_reg'] ?></td>
                                                <td><?php echo $item['ka_instalasi_reg'] ?></td>
                                                <td><?php echo $item['teknisi_1_reg'] ?></td>
                                                <td><?php echo $item['teknisi_2_reg'] ?></td>
                                                <td><?php echo $item['teknisi_3_reg'] ?></td>
                                                <td><?php echo $item['suku_cadang'] ?></td>
                                                <td><?php echo $item['volume'] ?></td>
                                                <td><?php echo $item['harga_satuan'] ?></td>
                                                <td><?php echo $item['jumlah_harga'] ?></td>
                                                <td><?php echo $item['keluhan_dari_alat_reg'] ?></td>
                                                <td><?php echo $item['korektif_reg'] ?></td>
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


    <!-- /.content -->
</div>
@endsection

@push('addon-script')
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
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
</script>
@endpush