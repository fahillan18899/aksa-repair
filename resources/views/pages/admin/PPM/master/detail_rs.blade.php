@extends('layouts.master')
@section('title', 'Detail Rumah Sakit')
@section('content')
<div class="content-wrapper">
    {{-- HEADER --}}
    <section class="content-header">
        <div class="p-l-30 p-r-30">
            <div class="header-icon">
                <i class="fa fa-hospital-o"></i>
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
                            <table id="table-inv" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Alat</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Seri</th>
                                        <th>Lokasi</th>
                                        <th>Jadwal</th>
                                        <th>Aksi</th>
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

        {{-- PERBAIKAN  --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4>Data Perbaikan Alat</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="table-perbaikan" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Alat</th>
                                        <th>Tanggal Perbaikan</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Seri</th>
                                        <th>Lokasi</th>
                                        <th>Kepala Ruangan</th>
                                        <th>Teknisi</th>
                                        <th>Status</th>
                                        <th>Korektif</th>
                                        <th>Catatan</th>
                                        <th>Aksi</th>
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

        {{-- PEMELIHARAAN  --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4>Data Pemeliharaan Alat</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="table-pelihara" class="table table-bordered table-striped">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
var table = $('#table-inv').DataTable({
    processing:true,
    serverSide:true,
    responsive:true,
    ajax: {
        url: "{{ route('master.detailInv.data') }}",
        data: { rs: "{{ $rs }}" }
    },
    columns:[
        {
            data:'id_alat',
            name:'id_alat'
        },
        {
            data:'nama_alat',
            name:'nama_alat'
        },
        {
            data:'merek',
            name:'merek'
        },
        {
            data:'type',
            name:'type'
        },
        {
            data:'seri',
            name:'seri'
        },
        {
            data:'lokasi',
            name:'lokasi'
        },
        {
            data:'jadwal',
            name:'jadwal'
        },
        {
            data:'aksi',
            name:'aksi',
            orderable:false,
            searchable:false
        }
    ]
});

const deleteInv = "{{ route('master.detaildeleteInv', ':id') }}";
$(document).on('click', '.btn-delete', function () {
    let id = $(this).data('id');
    Swal.fire({
        title: 'Hapus Data?',
        text: 'Data yang dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: deleteInv.replace(':id', id),
                type: 'DELETE',
                data: {_token: '{{ csrf_token() }}'},
                success: function (res) {
                    table.ajax.reload(null, false);
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: res.message,
                        timer: 1500,
                        showConfirmButton: false
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal menghapus data.'
                    });
                }
            });
        }
    });
});
</script>
<script>
var table = $('#table-perbaikan').DataTable({
    processing:true,
    serverSide:true,
    responsive:true,
    ajax:{
        url: "{{ route('master.detailPerbaikan.data') }}",
        data: { rs: "{{ $rs }}" }
    },
    columns:[
        {
            data:'id_alat',
            name:'id_alat'
        },
        {
            data: 'created_at',
            name: 'created_at'
        },
        {
            data:'nama_alat',
            name:'nama_alat'
        },
        {
            data:'merek',
            name:'merek'
        },
        {
            data:'type',
            name:'type'
        },
        {
            data:'seri',
            name:'seri'
        },
        {
            data:'lokasi',
            name:'lokasi'
        },
        {
            data:'kepala',
            name:'kepala'
        },
        {
            data:'teknisi',
            name:'teknisi'
        },
        {
            data:'status_button',
            name:'status_button',
            orderable:false,
            searchable:false
        },
        {
            data:'korektif',
            name:'korektif'
        },
        {
            data:'catatan',
            name:'catatan'
        },
        {
            data:'aksi',
            name:'aksi',
            orderable:false,
            searchable:false
        }
    ]
});
const deletePerbaikan = "{{ route('master.detaildeletePerbaikan', ':id') }}";
$(document).on('click', '.btn-delete', function () {
    let id = $(this).data('id');
    Swal.fire({
        title: 'Hapus Data?',
        text: 'Data yang dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: deletePerbaikan.replace(':id', id),
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (res) {
                    table.ajax.reload(null, false);
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: res.message,
                        timer: 1500,
                        showConfirmButton: false
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal menghapus data.'
                    });
                }
            });
        }
    });
});
</script>
<script>
var table = $('#table-pelihara').DataTable({
    processing:true,
    serverSide:true,
    responsive:true,
    ajax:{
        url: "{{ route('master.detailPelihara.data') }}",
        data: { rs: "{{ $rs }}" }
    },
    columns:[
        {
            data: 'created_at',
            name: 'created_at'
        },
        {
            data:'nama_alat',
            name:'nama_alat'
        },
        {
            data:'merek',
            name:'merek'
        },
        {
            data:'type',
            name:'type'
        },
        {
            data:'seri',
            name:'seri'
        },
        {
            data:'lokasi',
            name:'lokasi'
        },
        {
            data:'aksi',
            name:'aksi',
            orderable:false,
            searchable:false
        }
    ]
});

const deletePelihara = "{{ route('master.detaildeletePelihara', ':id') }}";
$(document).on('click', '.btn-delete', function () {
    let id = $(this).data('id');
    Swal.fire({
        title: 'Hapus Data?',
        text: 'Data yang dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: deletePelihara.replace(':id', id),
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (res) {
                    table.ajax.reload(null, false);
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: res.message,
                        timer: 1500,
                        showConfirmButton: false
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal menghapus data.'
                    });
                }
            });
        }
    });
});
</script>
@endpush