@extends('layouts.monitoring')

@section('content')
@section('title', 'Rekap Perbaikan')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-archive"></i></div>
      <div class="header-title">
        <h1>Rekap Perbaikan</h1>
        <small>Perbaikan</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!-- content -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Rekap Perbaikan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table id="table-rekap" class="table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th>Id</th>
                      <th>Date</th>
                      <th>Nama</th>
                      <th>Merek</th>
                      <th>Type</th>
                      <th>Serial_Number</th>
                      <th>Lokasi</th>
                      <th>Kepala_Ruang</th>
                      <th>Teknisi</th>
                      <th>Status</th>
                      <th>Korektif</th>
                      <th>Catatan</th>
                      <th>Foto</th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <!--TABEL-->
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- /.content -->
@endsection
@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

var table = $('#table-rekap').DataTable({

    processing:true,
    serverSide:true,
    responsive:true,
    ajax:"{{ route('monitoring.rekapPerbaikan.data') }}",
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

const deleteUrl = "{{ route('monitoring.deletePerbaikan', ':id') }}";

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

                url: deleteUrl.replace(':id', id),

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

let isLoading = false;

table.on('preXhr.dt', function () {
    isLoading = true;
});

table.on('xhr.dt', function () {
    isLoading = false;
});

setInterval(function () {

    if (document.hidden) return;

    if (isLoading) return;

    table.ajax.reload(null, false);

}, 5000);

</script>
@endpush