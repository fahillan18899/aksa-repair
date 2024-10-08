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
            <span class="info-box-text"><a href="view_tabel2" style="color : white"><?= "JUMLAH ASSET PERBAIKAN UNREGISTRASI"?></a></span>
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
            <span class="info-box-text"><a href="view_tabel3" style="color: white"><?= "JUMLAH ALAT TERKALIBRASI"?></a></span>
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
                        <!-- <th scope="col">Status</th> -->
                        <th scope="col" class="none">Merek_Alat</th>
                        <th scope="col" class="none">Type_Alat</th>
                        <th scope="col" class="none">Serial_Number</th>
                        <th scope="col" class="none">Lokasi_Alat</th>
                        <th scope="col" class="none">Pelapor</th>
                        <th scope="col" class="none">Keterangan_Kondisi_Alat</th>
                        <th scope="col" class="none">Kepala Ruangan</th>
                        <th scope="col" class="none">Teknisi_1</th>
                        <th scope="col" class="none">Teknisi_2</th>
                        <th scope="col" class="none">Teknisi_3</th>
                        <th scope="col" class="none">suku Cadang</th>
                        <th scope="col" class="none">volume</th>
                        <th scope="col" class="none">Harga Satuan</th>
                        <th scope="col" class="none">Jumlah Harga</th>
                        <th scope="col" class="none">Keluhan_Dari_alat</th>
                        <th scope="col" class="none">Korektif</th>
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
    <!--Card Tabel Perbaikan-->
    <!-- Tabel Pemeliharaan -->
      <div class="row">
        <div class="col">
          <div class="panel panel-default thumbnail">
            <div class="panel-heading no-print">
              <div class="">
                <h1>Tabel Pemeliharaan</h1>
              </div>
            </div>
            <div class="panel-body panel-form">
              <table class=" table table-hover table-bordered" id="scollDatatable" style="width:100%">
                <thead class="table-light">
                  <tr>
                    <td class="table-primary" rowspan="3"><b>No</b></td>
                    <td class="table-primary" rowspan="3"><b>Tanggal_Pemeliharaan</b></td>
                    <td class="table-primary" rowspan="3"><b>Kegiatan</b></td>
                    <td class="table-primary" rowspan="3"><b>Engineer</b></td>
                    <td class="table-info" colspan="6" align="center"><b>Data_Alat</b></td>
                    <td class="table-success" colspan="7" align="center"><b>Persiapan</b></td>
                    <td class="table-active" colspan="36" align="center"><b>pemantauan_fisik_&_fungsi</b></td>
                    <td class="table-danger" colspan="5" align="center"><b>pemeliharaan_preventife</b></td>
                    <td class="table-info" rowspan="3" align="center"><b>tindakan</b></td>
                    <td class="table-warning" colspan="4" align="center"><b>Suku_Cadang</b></td>
                    <td class="table-primary" rowspan="3"><b>Evaluasi_Dan_Rekomendasi</b></td>
                    <td class="table-primary" rowspan="3"><b>Status</b></td>
                    <td class="table-primary" rowspan="3"><b>Status2</b></td>
                    <td class="table-primary" rowspan="3"><b>Mulai_Bekerja</b></td>
                    <td class="table-primary" rowspan="3"><b>Selesai_Kerja</b></td>
                    <td class="table-primary" rowspan="3"><b>Durasi</b></td>
                    <td class="table-primary" rowspan="3"><b>User</b></td>
                    <td class="table-primary" rowspan="3"><b>Engineer</b></td>
                    <td class="table-primary" rowspan="3"><b>Tombol_Aksi</b></td>

                  </tr>

                  <tr>
                    <td class="table-info" rowspan="2"><b>Id_Aset_Registrasi</b></td>
                    <td class="table-info" rowspan="2"><b>Nama_Alat</b></td>
                    <td class="table-info" rowspan="2"><b>Serial_Number</b></td>
                    <td class="table-info" rowspan="2"><b>Merek</b></td>
                    <td class="table-info" rowspan="2"><b>Tipe</b></td>
                    <td class="table-info" rowspan="2"><b>Ruangan</b></td>
                    <td class="table-success" rowspan="2"><b>Hand_Hygiene</b></td>
                    <td class="table-success" rowspan="2"><b>Menyiapkan_Alat_&_Bahan_Kerja</b></td>
                    <td class="table-success" rowspan="2"><b>Alat_Pelindung_Diri</b></td>
                    <td class="table-success" rowspan="2"><b>Mengoprasikan_Alat_Kalibrasi</b></td>
                    <td class="table-success" rowspan="2"><b>KTD</b></td>
                    <td class="table-success" rowspan="2"><b>Mengoprasikan_Alat</b></td>
                    <td class="table-success" rowspan="2"><b>Idntifikasi_Bahaya</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Badan/Selungkup</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Alarm_&_Sistem_Interlock</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Kabel_&_Kelenturannya</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Sistem_Pengunci</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Tombol_&_Saklar</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Label/Penandaan</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Display/Layar</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Aksesoris</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Indikator_Bunyi</b></td>
                    <td class="table-danger" rowspan="2"><b>Pembersihan</b></td>
                    <td class="table-danger" rowspan="2"><b>Pengencangan_Bagian_Alat</b></td>
                    <td class="table-danger" rowspan="2"><b>Pelumasan</b></td>
                    <td class="table-danger" rowspan="2"><b>Kalibrasi_Berkala</b></td>
                    <td class="table-danger" rowspan="2"><b>Penggantian_Bahan_Habis_Pakai</b></td>
                    <td class="table-warning" rowspan="2"><b>Nama_Suku_Cadang</b></td>
                    <td class="table-warning" rowspan="2"><b>Volume</b></td>
                    <td class="table-warning" rowspan="2"><b>Harga_Satuan</b></td>
                    <td class="table-warning" rowspan="2"><b>Jumlah_Harga</b></td>
                  </tr>

                  <tr class="text-center">
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($dataKalibrasi as $index => $item)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->kegiatan }}</td>
                    <td>{{ $item->engineer }}</td>
                    <td>{{ $item->id_aset }}</td>
                    <td>{{ $item->nama_alat }}</td>
                    <td>{{ $item->serial_number }}</td>
                    <td>{{ $item->merek }}</td>
                    <td>{{ $item->tipe }}</td>
                    <td>{{ $item->ruangan }}</td>
                    <td>{{ $item->hand_hygiene }}</td>
                    <td>{{ $item->menyiapkan_alat_dan_bahan }}</td>
                    <td>{{ $item->alat_pelindung_diri }}</td>
                    <td>{{ $item->mengoprasikan_alat_kalibrasi }}</td>
                    <td>{{ $item->ktd }}</td>
                    <td>{{ $item->mengoprasikan_alat }}</td>
                    <td>{{ $item->identifikasi_bahaya }}</td>
                    <td>{{ $item->badan_selungkup1 }}</td>
                    <td>{{ $item->catatan1 }}</td>
                    <td>{{ $item->badan_selungkup2 }}</td>
                    <td>{{ $item->catatan2 }}</td>
                    <td>{{ $item->alat_sistem_interlock1 }}</td>
                    <td>{{ $item->catatan3 }}</td>
                    <td>{{ $item->alat_sistem_interlock2 }}</td>
                    <td>{{ $item->catatan4 }}</td>
                    <td>{{ $item->kabel_kelenturan1 }}</td>
                    <td>{{ $item->catatan5 }}</td>
                    <td>{{ $item->kabel_kelenturan2 }}</td>
                    <td>{{ $item->catatan6 }}</td>
                    <td>{{ $item->sistem_pengunci1 }}</td>
                    <td>{{ $item->catatan7 }}</td>
                    <td>{{ $item->sistem_pengunci2 }}</td>
                    <td>{{ $item->catatan8 }}</td>
                    <td>{{ $item->tombol_saklar1 }}</td>
                    <td>{{ $item->catatan9 }}</td>
                    <td>{{ $item->tombol_saklar2 }}</td>
                    <td>{{ $item->catatan10 }}</td>
                    <td>{{ $item->label_penandaan1 }}</td>
                    <td>{{ $item->catatan11 }}</td>
                    <td>{{ $item->label_penandaan2 }}</td>
                    <td>{{ $item->catatan12 }}</td>
                    <td>{{ $item->display_layar1 }}</td>
                    <td>{{ $item->catatan13 }}</td>
                    <td>{{ $item->display_layar2 }}</td>
                    <td>{{ $item->catatan14 }}</td>
                    <td>{{ $item->aksesoris1 }}</td>
                    <td>{{ $item->catatan15 }}</td>
                    <td>{{ $item->aksesoris2 }}</td>
                    <td>{{ $item->catatan16 }}</td>
                    <td>{{ $item->indikator_bunyi1 }}</td>
                    <td>{{ $item->catatan17 }}</td>
                    <td>{{ $item->indikator_bunyi2 }}</td>
                    <td>{{ $item->catatan18 }}</td>
                    <td>{{ $item->pembersihan }}</td>
                    <td>{{ $item->pengencangan_bagian_alat }}</td>
                    <td>{{ $item->pelumasan }}</td>
                    <td>{{ $item->kalibrasi_berkala }}</td>
                    <td>{{ $item->penggantian_bahan_habis_pakai }}</td>
                    <td>{{ $item->cek_alat }}</td>
                    <td>{{ $item->nama_sukucadang }}</td>
                    <td>{{ $item->volume }}</td>
                    <td>{{ $item->harga_satuan }}</td>
                    <td>{{ $item->jumlah_harga }}</td>
                    <td>{{ $item->evaluasi }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->status1 }}</td>
                    <td>{{ $item->mulai_bekerja }}</td>
                    <td>{{ $item->selesai_kerja }}</td>
                    <td>{{ $item->durasi }}</td>
                    <td>{{ $item->user }}</td>
                    <td>{{ $item->engginer }}</td>
                    <td>
                      <a data-toggle="tooltip" data-placement="right" title="Cetak" href="/dashboard/ppm/lembar_pemeliharaan/cetak_pemeliharaan/{{ $item->id_ppm }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
                    </td>

                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    <!-- Tabel Pemeliharaan -->
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