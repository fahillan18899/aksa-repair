@extends('layouts.monitoring')

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
  <div class="content container-fluid">
    <div class="row">
      <!-- Pie Chart Perbaikan -->
      <div class="col-md-6">
        <div class="panel panel-bd">
          <div class="panel-heading">
            <h4>Status Alat Rumah Sakit Bulan {{ $namaBulan }}</h4>
          </div>
          <div class="panel-body">
            <div class="text-center m-b-15">
              <h3>{{ $totalAlat }}</h3>
              <small>Total Alat Terdaftar</small>
            </div>
            <canvas id="alatChart"></canvas>
          </div>
        </div>
      </div>
      <!-- Pie Chart Pemeliharaan -->
      <div class="col-md-6">
        <div class="panel panel-bd">
          <div class="panel-heading">
              <h4>Status Preventive Maintenance Bulan {{ $namaBulan }}</h4>
          </div>
          <div class="panel-body">
            <div class="text-center m-b-15">
              <h3>{{ $alatDipelihara }}</h3>
              <small>Alat Sudah Dipelihara</small>
            </div>
            <canvas id="peliharaChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      {{-- Ringkasan Perbaikan --}}
      <div class="col-md-6">
        <div class="panel panel-bd">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-8">
                <h4>Perbaikan Bulan Ini</h4>
                <h2 class="text-primary" style="font-size: 32px; font-weight: bold;">{{ $alatDiperbaiki }} </h2>
                <p class="text-muted"> Aktivitas perbaikan pada {{ $namaBulan }} </p>
              </div>
              <div class="col-xs-4 text-right">
                <div style="display: inline-flex; align-items: center; justify-content: center; width: 65px; height: 65px; border-radius: 15px; background-color: #e8f1ff; color: #0d6efd;">
                  <i class="fa fa-wrench" style="font-size: 30px;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Ringkasan Pemeliharaan --}}
      <div class="col-md-6">
        <div class="panel panel-bd">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-8">
                <h4>Pemeliharaan Bulan Ini</h4>
                <h2 class="text-info" style="font-size: 32px; font-weight: bold;"> {{ $alatDipelihara }} </h2>
                <p class="text-muted"> Aktivitas pemeliharaan pada {{ $namaBulan }} </p>
              </div>
              <div class="col-xs-4 text-right">
                <div style="display: inline-flex; align-items: center; justify-content: center; width: 65px; height: 65px; border-radius: 15px; background-color: #e0f7fa; color: #17a2b8;">
                  <i class="fa fa-calendar-check-o" style="font-size: 30px;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Chart Perbaikan
    new Chart(document.getElementById('alatChart'), {
        type: 'pie',
        data: {
            labels: ['Normal', 'Sedang Diperbaiki'],
            datasets: [{
                data: [
                    {{ $alatNormal }},
                    {{ $alatDiperbaiki }}
                ],
                backgroundColor: [
                    '#28a745',
                    '#dc3545'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });

    // Chart Pemeliharaan
      new Chart(document.getElementById('peliharaChart'), {
          type: 'pie',
          data: {
              labels: ['Sudah Dipelihara', 'Belum Dipelihara'],
              datasets: [{
                  data: [
                      {{ $alatDipelihara }},
                      {{ $alatBelumDipelihara }}
                  ],
                  backgroundColor: [
                      '#17a2b8',
                      '#ffc107'
                  ]
              }]
          },
          options: {
              responsive: true,
              plugins: {
                  legend: {
                      position: 'bottom'
                  }
              }
          }
      });
  });
</script>
@endpush
