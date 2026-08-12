@extends('layouts.master')
@section('title', 'Detail Rumah Sakit')
@section('content')
<div class="content-wrapper">
    {{-- HEADER --}}
    <section class="content-header">
        <div class="p-l-30 p-r-30">
            <div class="header-icon">
                <i class="pe-7s-hospital"></i>
            </div>
            <div class="header-title">
                <h1>Detail Rumah Sakit</h1>
                <small>{{ $rs }}</small>
            </div>
        </div>
    </section>
    {{-- CONTENT --}}
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('master.dashboardMaster') }}" class="btn btn-default">
                    <i class="fa fa-arrow-left"></i>
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4>{{ $rs }}</h4>
                    </div>
                    <div class="panel-body">
                        <p style="margin:0;">
                            Menampilkan seluruh data alat, perbaikan dan pemeliharaan rumah sakit ini.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- INVENTARIS --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4> Data Inventaris Alat </h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Seri</th>
                                        <th>Lokasi</th>
                                        <th>Jadwal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($inventaris as $index => $alat)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $alat->nama_alat }}</td>
                                            <td>{{ $alat->merek }}</td>
                                            <td>{{ $alat->type }}</td>
                                            <td>{{ $alat->seri }}</td>
                                            <td>{{ $alat->lokasi }}</td>
                                            <td>{{ $alat->jadwal }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                Belum ada data inventaris.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- PERBAIKAN  --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4>Data Perbaikan Alat</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Seri</th>
                                        <th>Lokasi</th>
                                        <th>Teknisi</th>
                                        <th>Status</th>
                                        <th>Korektif</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($perbaikan as $index => $alat)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $alat->nama_alat }}</td>
                                            <td>{{ $alat->merek }}</td>
                                            <td>{{ $alat->type }}</td>
                                            <td>{{ $alat->seri }}</td>
                                            <td>{{ $alat->lokasi }}</td>
                                            <td>{{ $alat->teknisi }}</td>
                                            <td>{{ $alat->status }}</td>
                                            <td>{{ $alat->korektif }}</td>
                                            <td>{{ $alat->catatan }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center">
                                                Belum ada data perbaikan.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- PEMELIHARAAN  --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4>Data Pemeliharaan Alat</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat</th>
                                        <th>Seri</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Lokasi</th>
                                        <th>Teknisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($pelihara as $index => $alat)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $alat->nama_alat }}</td>
                                            <td>{{ $alat->seri }}</td>
                                            <td>{{ $alat->merek }}</td>
                                            <td>{{ $alat->type }}</td>
                                            <td>{{ $alat->lokasi }}</td>
                                            <td>{{ $alat->teknisi }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                Belum ada data pemeliharaan.
                                            </td>
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