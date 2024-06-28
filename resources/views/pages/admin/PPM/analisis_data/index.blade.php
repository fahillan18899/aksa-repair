@extends('layouts.admin')

@section('content')
@section('title', 'Analisis Data')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-graph"></i></div>
      <div class="header-title">
        <h1>Analis Data</h1>
        <small>Analis Data</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    <!-- content -->
    <div class="row">
      <div class="col-lg-6">
        <div class="panel panel-default" id="js-timer">
          <div class="panel-body">
            <div class="widget-title">
              <h3><?= "Data Statistik Umur Alat"
                  ?></h3>
              <span><?= "Data Statistik Umur Alat" ?></span>
            </div>
            <div class="btn-group">
              <a class="btn btn-success" href="{{ url('dashboard/ppm/data_umur_alat') }}"><i class="fa fa-eye"></i> Lihat Data </a>
            </div>
            <canvas id="pieChart" height="170"></canvas>

          </div> <!-- /.panel-body -->
        </div>
      </div>

      <div class="col-lg-6">
        <div class="panel panel-default" id="js-timer">
          <div class="panel-body">
            <div class="widget-title">
              <h3><?= "Data Statistik Terkalibrasi"
                  ?></h3>
              <span><?= "Data Statistik Terkalibrasi" ?></span>
            </div>
            <div class="btn-group">
              <a class="btn btn-success" href="{{ url('dashboard/ppm/data_alat_terkalibrasi') }}"><i class="fa fa-eye"></i> Lihat Data </a>
            </div>
            <canvas id="pieChart2" height="170"></canvas>

          </div> <!-- /.panel-body -->
        </div>
      </div>

    </div> <!-- /.content -->

    <!-- content -->
    <div class="row">
      <div class="col-lg-6">
        <div class="panel panel-default" id="js-timer">
          <div class="panel-body">
            <div class="widget-title">
              <h3><?= "Data Statistik Pemeliharaan Korektif"
                  ?></h3>
              <span></span>
            </div>
            <div class="btn-group">
              <a class="btn btn-success" href="{{ url('dashboard/ppm/data_alat_korektif') }}"><i class="fa fa-eye"></i> Lihat Data </a>
            </div>
            <canvas id="pieChart3" height="170"></canvas>

          </div> <!-- /.panel-body -->
        </div>
      </div>
      <div class="col-lg-6">
        <div class="panel panel-default" id="js-timer">
          <div class="panel-body">
            <div class="widget-title">
              <h3><?= "Data Statistik"
                  ?></h3>
              <span><?= "Data Statistik" ?></span>

            </div>
            <canvas id="pieChart4" height="170"></canvas>

          </div> <!-- /.panel-body -->
        </div>
      </div>

    </div> <!-- /.content -->


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const ctx = document.getElementById('pieChart');

      new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ["< 5tahun", "> 5tahun", "> 10tahun"],
          datasets: [{
            label: '# of Votes',
            data: [
              <?php
              echo $t5;
              ?>,
              <?php
              echo $t5_;
              ?>,
              <?php
              echo $t10;
              ?>,

            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
    <script>
      const ctx2 = document.getElementById('pieChart2');

      new Chart(ctx2, {
        type: 'pie',
        data: {
          labels: ["Alat Terkalibrasi", "Alat Belum Terkalibrasi"],
          datasets: [{
            label: '# of Votes',
            data: [
              <?php
              echo $registered;
              ?>,
              <?php
              echo $unRegistered;
              ?>,
            ],
            borderWidth: 1,
            backgroundColor: ['#3FD01C', '#FF4F78']

          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
    <script>
      const ctx3 = document.getElementById('pieChart3');

      new Chart(ctx3, {
        type: 'pie',
        data: {
          labels: ["Alat Perbaikan Teregistrasi", "Total Alat", "Alat Perbaikan Unregistrasi"],
          datasets: [{
            label: '# of Votes',
            data: [
              <?= $perbaikan ?>,
              <?= $totalAlat ?>,
              <?= $perbaikanUn ?>
            ],
            borderWidth: 1,
            backgroundColor: ['#3FD01C', '#3FEBC5', '#EB553F']

          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
    <script>
      const ctx4 = document.getElementById('pieChart4');

      new Chart(ctx4, {
        type: 'pie',
        data: {
          labels: ["Alat Perbaikan", "Alat Terpelihara", "Alat Belum Terpelihara"],
          datasets: [{
            label: '# of Votes',
            data: [
              <?= $perbaikan ?>,
              <?= $t5_ ?>,
              <?= $perbaikanUn ?>
            ],
            borderWidth: 1,
            backgroundColor: ['#7a7a7a', '#000'],
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content-wrapper -->
</div> <!-- /.content-wrapper -->
@endsection