@extends('layouts.master')
@section('title', 'Pemeliharaan Rumah Sakit')
@section('content')
<div class="content-wrapper">
    {{-- HEADER --}}
    <section class="content-header">
        <div class="p-l-30 p-r-30">
            <div class="header-icon">
                <i class="pe-7s-hospital"></i>
            </div>
            <div class="header-title">
                <h1>Pemeliharaan Rumah Sakit</h1>
                <small>Daftar Pemeliharaan Rumah Sakit</small>
            </div>
        </div>
    </section>
    {{-- CONTENT --}}
    <section class="content">
        {{-- PEMELIHARAAN --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4> Daftar Pemeliharaan Rumah Sakit </h4>
                    </div>
                    <a href="{{ route('master.ExPortPelihara') }}" class="btn btn-success">
                        <i class="fa fa-file-excel-o"></i>Export Excel
                    </a>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="table-pemeliharaan-rs" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
                                        <th>Tipe</th>
                                        <th>SN</th>
                                        <th>Lokasi</th>
                                        <th>Rumah Sakit</th>
                                    </tr>
                                </thead>
                                <tbody>
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
    $(document).ready(function(){
        $('#table-pemeliharaan-rs').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,

            ajax: "{{ route('master.peliharaRs.data') }}",

            columns: [
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'nama_alat',
                    name: 'nama_alat'
                },
                {
                    data: 'merek',
                    name: 'merek'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                {
                    data: 'seri',
                    name: 'seri'
                },
                {
                    data: 'lokasi',
                    name: 'lokasi'
                },
                {
                    data: 'rs',
                    name: 'rs'
                },
            ],
            order: [[1, 'asc']]
        });
    });
</script>
@endpush