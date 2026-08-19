@extends('layouts.master')
@section('title', 'Rumah Sakit')
@section('content')
<div class="content-wrapper">
    {{-- HEADER --}}
    <section class="content-header">
        <div class="p-l-30 p-r-30">
            <div class="header-icon">
                <i class="pe-7s-hospital"></i>
            </div>
            <div class="header-title">
                <h1>Rumah Sakit</h1>
                <small>Daftar Rumah Sakit</small>
            </div>
        </div>
    </section>
    {{-- CONTENT --}}
    <section class="content">
        {{-- RUMAH SAKIT --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4> Daftar Rumah Sakit </h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="table-rs" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Rumah Sakit</th>
                                        <th>Total Alat</th>
                                        <th>Perbaikan</th>
                                        <th>Pemeliharaan</th>
                                        <th>Normal</th>
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
        $('#table-rs').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,

            ajax: "{{route('master.rumahSakit.data')}}",

            columns: [
                {
                    data: null,
                    name: 'no',
                    orderable: false,
                    searchable: false,
                    render: function(data,type,row,meta){
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'rs',
                    name: 'rs'
                },
                {
                    data: 'total_alat',
                    name: 'total_alat',
                    className: 'text-center'
                },
                {
                    data: 'total_perbaikan',
                    name: 'total_perbaikan',
                    orderable: false,
                    searchable: false,
                    className: 'text-center'
                },
                {
                    data: 'total_pemeliharaan',
                    name: 'total_pemeliharaan',
                    orderable: false,
                    searchable: false,
                    className: 'text-center'
                },
                {
                    data: 'total_normal',
                    name: 'total_normal',
                    orderable: false,
                    searchable: false,
                    className: 'text-center'
                },
            ],
            order: [[1,'asc']]
        });
    });
</script>
@endpush