@extends('layouts.master')
@section('title', 'Perbaikan Rumah Sakit')
@section('content')
<div class="content-wrapper">
    {{-- HEADER --}}
    <section class="content-header">
        <div class="p-l-30 p-r-30">
            <div class="header-icon">
                <i class="fa fa-wrench"></i>
            </div>
            <div class="header-title">
                <h1>Perbaikan Rumah Sakit</h1>
                <small>Daftar Perbaikan Rumah Sakit</small>
            </div>
        </div>
    </section>
    {{-- CONTENT --}}
    <section class="content">
        {{-- PERBAIKAN --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4> Daftar Perbaikan Rumah Sakit </h4>
                    </div>
                    <a href="{{ route('master.ExPortPerbaikan') }}" class="btn btn-success">
                        <i class="fa fa-file-excel-o"></i>
                        Export Excel
                    </a>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="table-perbaikan-rs" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Rumah Sakit</th>
                                        <th>Nama Alat</th>
                                        <th>Teknisi</th>
                                        <th>Status</th>
                                        <th>Korektif</th>
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
        $('#table-perbaikan-rs').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,

            ajax: "{{ route('master.perbaikanRs.data') }}",

            columns: [
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'rs',
                    name: 'rs'
                },
                {
                    data: 'nama_alat',
                    name: 'nama_alat'
                },
                {
                    data: 'teknisi',
                    name: 'teknisi'
                },
                {
                    data: 'status_button',
                    name: 'status_button',
                    orderable: false,
                    searchable: false,
                },
                {
                    data: 'korektif',
                    name: 'korektif'
                },
            ],

            order: [[0, 'desc']]
        });
    });
</script>
@endpush