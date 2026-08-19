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
                <h1>Inventaris Rumah Sakit</h1>
                <small>Daftar Inventaris Rumah Sakit</small>
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
                        <h4> Daftar Inventaris Rumah Sakit </h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="table-inv" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
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
        $('#table-inv').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,

            ajax: "{{ route('master.invRs.data') }}",

            columns: [
                {
                    data: 'id_alat',
                    name: 'id_alat'
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
                }
            ],
            order: [[1, 'asc']]
        });
    });
</script>
@endpush