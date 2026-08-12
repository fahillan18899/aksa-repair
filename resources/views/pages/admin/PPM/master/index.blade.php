@extends('layouts.master')
@section('title', 'Dashboard Master')
@section('content')

    <div class="content-wrapper">
        {{-- ============ HEADER ============ --}}
        <section class="content-header">
            <div class="p-l-30 p-r-30">
                <div class="header-icon">
                    <i class="pe-7s-home"></i>
                </div>
                <div class="header-title">
                    <h1>Dashboard Master</h1>
                    <small>Monitoring PPM Seluruh Rumah Sakit</small>
                </div>
            </div>
        </section>


        {{-- ============ CONTENT ============ --}}
        <section class="content">
            <div class="row">
                {{-- STATUS ALAT --}}
                <div class="col-md-6">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <h4>Status Alat Rumah Sakit</h4>
                        </div>
                        <div class="panel-body">
                            <div class="text-center m-b-15">
                                <h3>{{ $totalAlat }}</h3>
                                <small>
                                    Total Alat Terdaftar
                                    <br>
                                    <span style="color:#777;">
                                        Semua Rumah Sakit
                                    </span>
                                </small>
                            </div>
                            <canvas id="alatChart"></canvas>
                        </div>
                    </div>
                </div>
                {{-- STATUS PEMELIHARAAN --}}
                <div class="col-md-6">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <h4>Status Preventive Maintenance</h4>
                        </div>
                        <div class="panel-body">
                            <div class="text-center m-b-15">
                                <h3>{{ $alatDipelihara }}</h3>
                                <small>
                                    Alat Sudah Dipelihara
                                    <br>
                                    <span style="color:#777;">
                                        Semua Rumah Sakit
                                    </span>
                                </small>
                            </div>
                            <canvas id="peliharaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- GRAFIK PERBAIKAN --}}
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
                {{-- GRAFIK PEMELIHARAAN --}}
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

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <h4>Rekap Alat Berdasarkan Rumah Sakit</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width:60px;" class="text-center">No</th>
                                            <th>Rumah Sakit</th>
                                            <th style="width:130px;" class="text-center">Total Alat</th>
                                            <th style="width: 130px;" class="text-center">Perbaikan</th>
                                            <th style="width: 150px;" class="text-center">Pemeliharaan</th>
                                            <th style="width: 130px;" class="text-center">Normal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($rumahSakit as $index => $rs)
                                            <tr>
                                                <td class="text-center">{{ $index + 1 }}</td>
                                                <td><a href="{{ route('master.detailRs', ['rs' => $rs->rs]) }}" style="font-weight: bold">{{ $rs->rs }}</a></td>
                                                <td class="text-center"> <span class="label label-primary" style="font-size:13px;"> {{ $rs->total_alat }}</span></td>
                                                <td class="text-center"><span class="label label-danger" style="font-size: 13px;">{{ $rs->total_perbaikan }}</span></td>
                                                <td class="text-center"><span class="label label-warning" style="font-size: 13px;">{{ $rs->total_pemeliharaan }}</span></td>
                                                <td class="text-center"><span class="label label-success" style="font-size: 13px;">{{$rs->total_normal }}</span></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Belum ada data alat.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('addon-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ============= CHART STATUS ALAT ============= // 
            new Chart(
                document.getElementById('alatChart'), {
                    type: 'pie',
                    data: {
                        labels: [
                            'Normal',
                            'Sedang Diperbaiki'
                        ],
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
                }
            );

            // ============= CHART STATUS PEMELIHARAAN ============= // 
            new Chart(
                document.getElementById('peliharaChart'), {
                    type: 'pie',
                    data: {
                        labels: [
                            'Sudah Dipelihara',
                            'Belum Dipelihara'
                        ],
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
                }
            );


            // ============= GRAFIK PERBAIKAN BULANAN ============= // 
            new Chart(
                document.getElementById('perbaikanBulananChart'), {
                    type: 'bar',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
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
                }
            );

            // ============= GRAFIK PEMELIHARAAN BULANAN ============= //
            new Chart(
                document.getElementById('peliharaBulananChart'), {
                    type: 'bar',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
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
                }
            );
        });
    </script>
@endpush
