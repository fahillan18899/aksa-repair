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
        <small>Dashboard Kalibrasi Monitoring</small>
      </div>
    </div>
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content container-fluid">
    <div class="row">
      <!--Box Kalibrasi Selesai -->
      <div class="col-12 col-md-6 mb-4">
        <div class="info-box bg-olive">
          <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">
              <a href="data_inventaris" style="color :white"><?= "JUMLAH INSTANSI SELESAI KALIBRASI" ?></a></span>
            <span class="info-box-number" id="count1">0</span>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <?= date('j F, Y'); ?>
            </span>
          </div>
        </div>
      </div>
      <!--Box Selesai end-->

      <!--Box Proses -->
      <div class="col-12 col-md-6 mb-4">
        <div class=" info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">
              <a href="view_tabel"
                style="color :white"><?= "JUMLAH INSTANSI PROSES KALIBRASI" ?></a>
            </span>
            <span class="info-box-number" id="count2">0</span>
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
      <!--Box Proses end-->

      <!-- Card Tabel Permintaan Perbaikan -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">
            <div class="panel-heading no-print">
              <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-5">
                  <h2>Daftar Instansi Selesai Kalibrasi</h2>
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
                        <tr>
                        <th>Marketing</th>
                        <th>Instansi</th>
                        <th>Jumlah alat</th>
                        <th>Nominal</th>
                        <th>Tanggal bayar</th>
                        <th>System pembayaran</th>
                        <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="id_selesai">
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
                  <h2>Daftar Instansi Proses Kalibrasi</h2>
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
                        <tr>
                          <th>Instansi</th>
                          <th>Jadwal</th>
                          <th>Proses</th>
                        </tr>
                      </thead>
                      <tbody id="id_repair2">
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
<script>
  function countSelesai() {
    //  console.log("Memulai countSelesai()"); //Debig fungsi berjalan / tidak
    $.ajax({
      url: '{{ route("count.selesai") }}',
      method: 'GET',
      success: function(response) {
        // console.log("Data berhasil diterima:", response); //Debug data yang di get oleh ajax
        $('#count1').text(response.count1)
      },
      error: function(xhr, status, error) {
        console.log("Gagal mengambil data permintaan:", error);
      }
    });
  }
  $(document).ready(function() {
    countSelesai();
    setInterval(countSelesai, 3000);
  })
</script>

<script>
  function countProses() {
    $.ajax({
      url: '{{ route("count.proses") }}',
      method: 'GET',
      success: function(response) {
        $('#count2').text(response.count2)
      },
      error: function(xhr, status, error) {
        console.log("Gagal mengambil data :", error);
      }
    });
  }
  $(document).ready(function() {
    countProses();
    setInterval(countProses, 3000);
  })
</script>

<script>
  function api1() {
    // console.log("Memulai api1()"); //Debig fungsi berjalan / tidak
    $.ajax({
      url: '{{ route("api1") }}',
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        // console.log("Data berhasil diterima:", data); //Debug data yang di get oleh ajax
        let rows = '';
        data.forEach(item => {
          // console.log(item);
          rows += `
          <tr>
            <td>${item.marketing}</td>
            <td>${item.instansi}</td>
            <td>${item.jumlah}</td>
            <td>${item.nominal}</td>
            <td>${item.tanggal}</td>
            <td>${item.sistem}</td>
            <td>
              <button class="btn btn-sm ${item.status == 0 ? 'btn-danger' : 'btn-success'}" disabled>
                ${item.status == 0 ? 'Proses / Termin' : 'Selesai  / Lunas'}
              </button>
            </td>
          </tr>
          `;
        });

        $('#id_selesai').html(rows);
        // console.log("Table berhasil diperbaharui"); //Debug konfirmasi update
      },
      error: function(xhr, status, error) {
        console.log("Gagal memuat data", error);
      }
    });
  }

  $(document).ready(function() {
    // console.log("Dokumen siap, mulai polling....");
    api1(); //Pertamakali load
    setInterval(api1, 3000);
  })
</script>
<script>
  function api2() {
    $.ajax({
      url: '{{ route("api2") }}',
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        let rows = '';
        data.forEach(item => {
          rows += `
        <tr>
        <td>${item.instansi}</td>
        <td>${item.jadwal}</td>
        <td>
          <button class="btn btn-sm ${item.pengerjaan == 0 ? 'btn-success' : 'btn-danger'}" disabled>
            ${item.status == 0 ? 'Selesai' : 'Pengerjaan'}
          </button>
        </td>
        </tr>
        `;
        });
        $('#id_repair2').html(rows);
      },
      error: function(xhr, status, error) {
        console.log("Gagal memuat data", error);
      }
    });
  }

  $(document).ready(function() {
    api2();
    setInterval(api2, 3000);
  })
</script>

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