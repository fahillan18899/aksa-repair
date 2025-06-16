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
        <small>Dashboard Repair</small>
      </div>
    </div>
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content container-fluid">
    <div class="row">
      <!--Box Jumlah Alat -->
        <div class="col-12 col-md-6 mb-4">
          <div class="info-box bg-olive">
            <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">
                <a href="data_inventaris" style="color :white"><?= "JUMLAH BARANG SELESAI REPAIR" ?></a></span>
              <span class="info-box-number">0</span>
              <!-- {{ $registrasi }} -->
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
          </div>
        </div>
      <!--Box Jumlah Alat end-->

      <!--Box Jumlah Aset Perbaikan Regis -->
        <div class="col-12 col-md-6 mb-4">
          <div class=" info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">
                <a href="view_tabel"
                  style="color :white"><?= "JUMLAH BARANG PROSES REPAIR" ?></a>
              </span>
              <span class="info-box-number" id="count_perbaikan">0</span>
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
      <!--Box Jumlah Aset Perbaikan Regis end-->

      <!--Box Jumlah Permintaan Perbaikan -->
        <!-- <div class="col-12 col-md-6 mb-4">
          <div class="info-box bg-navy-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><a href="view_tabel2" style="color : white"><?= "JUMLAH PERMINTAAN PERBAIKAN USER" ?></a></span>
              <span class="info-box-number" id="count_permintaan">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
          </div>
        </div> -->
      <!--Box Jumlah Permintaan Perbaikan -->

      <!--Box Jumlah Aset Terkalibrasi -->
        <!-- <div class="col-12 col-md-6 mb-4">
          <div class="info-box bg-light-green">
            <span class="info-box-icon"><i class="fa fa-cogs"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><a href="view_tabel3" style="color: white"><?= "JUMLAH ALAT TERKALIBRASI" ?></a></span>
              <span class="info-box-number">0</span>
               {{ $registrasiKalBar }} / {{ $registrasi }} 
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
          </div>
        </div> -->
      <!--Box Jumlah Aset Terkalibrasi end-->

      <!-- Card Tabel Permintaan Perbaikan -->
       <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">
            <div class="panel-heading no-print">
              <div class="row">
                <div class="col-md-4">
                  <!-- <div class="btn-group">
                    <a class="btn btn-success" href="/dashboard/ppm/pesanan"> <i class="fa fa-plus"></i> Request Perbaikan </a>
                  </div> -->
                </div>
                <div class="col-md-5">
                  <h2>Daftar Barang Selesai Repair</h2>
                </div>
              </div>
            </div>
            <div class="overflow-x:auto">
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12 table-responsive">
                    <!-- TABEL -->
                     <table class="datatable table table-striped table-bordered">
                      <thead class="table-light">
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Type</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Kerusakan</th>
                        <th scope="col">Pelapor</th>
                        <th scope="col">Tanggal</th>
                      </thead>
                      <tbody id="permintaanBody">
                        <!-- DATA AJAX -->
                      </tbody>
                     </table>
                    <!-- TABEL -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
      <!-- Card Tabel Permintaan Perbaikan -->

      <!--Card Tabel Perbaikan-->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">

              <div class="panel-heading no-print">
                <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-5">
                    <h2>Daftar Barang Proses Repair</h2>
                  </div>
                </div>
              </div>
              <div style="overflow-x:auto;">
                <div class="panel-body panel-form">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 table-responsive">
                      <!--TABEL-->
                      <table class="datatable table table-striped table-bordered">
                        <thead class="table-light">
                          <th scope="col">Tanggal</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Serial_Number</th>
                          <th scope="col">Lokasi</th>
                          <th scope="col">Status</th>
                          <th scope="col">Keterangan</th>
                        </thead>
                        <tbody id="perbaikanBody">
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
        </div>
      <!--Card Tabel Perbaikan-->
    </div>
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection
@push('addon-script')
<!-- PERBAIKAN -->
  <!-- <script>
    function loadPerbaikan() {
      // console.log("Memulai loadPerbaikan()"); //Debug fungsi berjalan / tidak

      $.ajax({
        url: '{{ route("perbaikan.data") }}',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          // console.log("Data berhasil diterima:", data); //Debug tampilkan data yang di get oleh ajax

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
                    ${item.keterangan_kondisi_alat_reg == 0 ? 'Selesai, dikembalikan' : 'Dalam perbaikan'}
                  </button>
                </td>
              </tr>
            `;
          });

          $('#perbaikanBody').html(rows);
          // console.log("Tabel berhasil diperbaharui"); //Debug konfirmasi update
        },
        error: function(xhr, status, error){
          // console.error("Gagal memuat data", error);
        }
      });
    }

    $(document).ready(function(){
      // console.log("Dokumen siap, mulai polling....");
      loadPerbaikan(); // Pertama kali load
      setInterval(loadPerbaikan, 3000);
    });
  </script> -->
<!-- PERBAIKAN -->

<!-- PEMELIHARAAN -->
  <!-- <script>
    function loadPemeliharaan() {
      // console.log("Memulai loadPemeliharaan()"); //Debug fungsi berjalan / tidak

      $.ajax({
        url: '{{ route("pemeliharaan.data") }}',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          // console.log("Data berhasil diterima:", data) //Debug tempilkan data yang di get oleh ajax

          let rows ='';
          data.forEach(item => {
            // console.log(item);
            rows += `
            <tr>
              <td>${item.tanggal}</td>
              <td>${item.id_aset}</td>
              <td>${item.nama_alat}</td>
              <td>${item.merek}</td>
              <td>${item.tipe}</td>
              <td>${item.serial_number}</td>
              <td>${item.ruangan}</td>
            </tr>
            `;
          });

          $('#pemeliharaanBody').html(rows);
          // console.log("Tabel berhasil diperbaharui"); //Debug konfirmasi update
        },
        error: function(xhr, status, error){
          // console.log("Gagal memuat data", error);
        }
      });
    }

    $(document).ready(function(){
      // console.log("Dokument siap, mulai polling....");
      loadPemeliharaan(); //Petama kali load
      setInterval(loadPemeliharaan, 3000);
    });
  </script> -->
<!-- PEMELIHARAAN N-->

<!-- PERMINTAAN PERBAIKAN -->
  <!-- <script>
    function loadPermintaan(){
      // console.log("Memulai loadPermintaan()"); //Debug fungsi berjalan / tidak

      $.ajax({
        url: '{{ route("permintaan.data") }}',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          // console.log("Data berhasil diterima:", data);  //Debug tampilkan data yang di get ileh ajax

          let rows ='';
          data.forEach(item => {
            console.log(item);
            rows += `
              <tr>
                <td>${item.id_req}</td>
                <td>${item.nama_req}</td>
                <td>${item.merek_req}</td>
                <td>${item.type_req}</td>
                <td>${item.sn_req}</td>
                <td>${item.lokasi_req}</td>
                <td>${item.kerusakan_req}</td>
                <td>${item.pelapor_req}</td>
                <td>${item.tanggal_req}</td>
              </tr>
            `;
          });

          $('#permintaanBody').html(rows);
          //console.log("Tabel berhasil diperbaharui"); //Debug konfirmasi update
        },
        error: function(xhr, status, error){
          console.log("Gagal memuat data", error);
        }
      });
    }

    $(document).ready(function(){
      //console.log("Dokumen siap, mulai poling...");
      loadPermintaan(); //Pertama kali load
      setInterval(loadPermintaan, 3000);
    });
  </script> -->
<!-- PERMINTAAN PERBAIKAN N-->

<!-- COUNT PERMINTAAN -->
  <!-- <script>
    function jumlahPermintaan() {
      $.ajax({
        url: '{{ route("permintaan.count") }}',
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
      jumlahPermintaan();
      setInterval(jumlahPermintaan, 3000);
    })
  </script> -->
<!-- COUNT PERMINTAAN N-->

<!-- COUNT PERBAIKAN -->
 <!-- <script>
  function jumlahPerbaikan() {
    $.ajax({
      url: '{{ route("perbaikan.count") }}',
      method: 'GET',
      success: function(response) {
        $('#count_perbaikan').text(response.countPerbaikan);
      },
      error: function(xhr, status, error) {
        console.log("Gagal menganbil data perbaikan:", error);
      }
    });
  }

  $(document).ready(function() {
    jumlahPerbaikan();
    setInterval(jumlahPerbaikan, 3000);
  })
 </script> -->
<!-- COUNT PERBAIKAN N-->
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
</script>
@endpush