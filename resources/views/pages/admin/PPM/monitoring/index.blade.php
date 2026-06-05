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
                    <h4>Status Alat Rumah Sakit</h4>
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
                    <h4>Status Preventive Maintenance</h4>
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

        <div class="col-md-6">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <h4>Grafik Perbaikan Tahun {{ date('Y') }}</h4>
                </div>

                <div class="panel-body">
                    <canvas id="perbaikanBulananChart"></canvas>
                </div>
            </div>
        </div>
        {{-- - --}}
        <div class="col-md-6">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <h4>Grafik Pemeliharaan Tahun {{ date('Y') }}</h4>
                </div>

                <div class="panel-body">
                    <canvas id="peliharaBulananChart"></canvas>
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
    // Chart Batang Perbaikan
    new Chart(document.getElementById('perbaikanBulananChart'), {
        type: 'bar',
        data: {
            labels: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'Mei',
                'Jun',
                'Jul',
                'Agu',
                'Sep',
                'Okt',
                'Nov',
                'Des'
            ],
            datasets: [{
                label: 'Jumlah Perbaikan',
                data: @json($dataPerbaikanBulanan),
                backgroundColor: '#36a2eb',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
    // Chart Batang Pelihara
    new Chart(document.getElementById('peliharaBulananChart'), {
        type: 'bar',
        data: {
            labels: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'Mei',
                'Jun',
                'Jul',
                'Agu',
                'Sep',
                'Okt',
                'Nov',
                'Des'
            ],
            datasets: [{
                label: 'Jumlah Pemeliharaan',
                data: @json($dataPeliharaBulanan),
                backgroundColor: '#17a2b8',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });

  });
</script>
@endpush
