@extends('layouts.admin')

@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
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

      <?php
      //if ($this->permission->method('appointment_list', 'read')->access()) {
      ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="info-box bg-olive">
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
          <!-- <span class="info-box-icon"><i class="fa fa-sign-out"></i></span> -->

          <div class="info-box-content">
            <span class="info-box-text"><?= "JUMLAH ALAT TERKALIBRASI" // display('discharged') 
                                        ?></span>
            <span class="info-box-number">{{ $perbaikanNonAset }}</span>

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