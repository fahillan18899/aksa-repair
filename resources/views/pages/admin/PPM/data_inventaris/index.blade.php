@extends('layouts.admin')

@section('content')
@section('title', 'Data Inventaris')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-albums"></i></div>
      <div class="header-title">
        <h1>Data Inventaris</h1>
        <small>Inventaris</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-md-6">
                <div class="btn-group">
                  <a class="btn btn-success" href="/dashboard/ppm/registrasi"> <i class="fa fa-plus"></i> Add Alat </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-primary" href="/dashboard/ppm/data_inventaris/qr_qode/1"> <i class="fa fa-qrcode"></i> Buat QR </a>
                </div>
              </div>
              <div class="col-md-2">
                <a href="{{ url('/dashboard/export') }}" class="btn btn-info"> Template Import</a>
              </div>
              <div class="col-md-4">

                <form action="{{ url('/dashboard/import') }}" method="post" enctype="multipart/form-data" style="display: flex;">
                  @csrf
                  <input class="form-control" type="file" name="file">
                  <button type="submit" class="btn-primary btn">Import</button>
                </form>
              </div>
            </div>
          </div>

          <div class="panel-body panel-form">
            <table id="table-register" class="datatable table table-striped table-bordered" style="width:100%">
              <thead class="table-light">
                <th>Id Aset</th>
                <th>Jenis</th>
                <th>Nama</th>
                <th>Merek</th>
                <th class="none">Type</th>
                <th class="none">Gambar</th>
                <th class="none">Serial Number</th>
                <th class="none">Ruangan</th>
                <th class="none">Tanggal_Kalibrasi</th>
                <th class="none">Distributor</th>
                <th class="none">Alamat_Distributor</th>
                <th class="none">TLP_Distributor</th>
                <th class="none">Email_Distributor</th>
                <th class="none">Teknisi_Distributor</th>
                <th class="none">TLP_T_Distributor</th>
                <th class="none">No_Sertifikat_Kalibrasi</th>
                <th class="none">Teknisi PPM</th>
                <th class="none">Harga Perolehan</th>
                <th class="none">Sumber_Dana</th>
                <th class="none">Tahun_Perolehan</th>
                <th class="none">AKL</th>
                <th class="none">AKD</th>
                <th class="none">No_Inventaris </th>
                <th class="none">umur_alat</th>
                <th  class="none">Jadwal</th>
                <th>Tombol_Aksi_Tabel</th>
                <!-- <th>QR</th> -->
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--TABEL-->
    <script type="text/javascript">
      $(document).ready(function() {
        $('#table-register').dataTable({
          processing: true,
          responsive: true,
          serverSide: true,
          ajax: '{{ url('/dashboard/ppm/aset') }}',
          columns: [{
              data: 0,
              name: 'Id_Aset',
              orderable: true,
              searchable: true
            },
            {
              data: 1,
              name: 'Jenis_Alat'
            },
            {
              data: 2,
              name: 'Nama_Alat'
            },
            {
              data: 3,
              name: 'Merek'
            },
            {
              data: 4,
              name: 'Type'
            },
            {
              data: 5,
              name: 'Gambar',
              render: function(data, type, full, meta) {
                return "<img src=\"/storage/" + data + "\" width=\"100\"  alt='No Image'>"
              }
            },
            {
              data: 6,
              name: 'Serial_Number'
            },
            {
              data: 7,
              name: 'lokasi_alat'
            },
            {
              data: 8,
              name: 'Tanggal_Kalibrasi'
            },
            {
              data: 9,
              name: 'Distributor'
            },
            {
              data: 10,
              name: 'Alamat_Distributor'
            },
            {
              data: 11,
              name: 'TLP_Distributor'
            },
            {
              data: 12,
              name: 'Email_Distributor'
            },
            {
              data: 13,
              name: 'Teknisi_Distributor'
            },
            {
              data: 14,
              name: 'TLP_T_Distributor'
            },
            {
              data: 15,
              name: 'No_Sertifikat_Kalibrasi'
            },
            {
              data: 16,
              name: 'teknisi_ppm'
            },
            {
              data: 17,
              name: 'harga_perolehan'
            },
            {
              data: 18,
              name: 'Sumber_Dana'
            },
            {
              data: 19,
              name: 'Tahun_Perolehan'
            },
            {
              data: 20,
              name: 'AKL'
            },
            {
              data: 21,
              name: 'AKD'
            },
            {
              data: 22,
              name: 'no_inventaris_1'
            },
            {
              data: 23,
              name: 'umur_alat'
            },
            {
              data: 24,
              name: 'jadwal_pemeliharaan'
            },
            {
              data: 0,
              render: function(data, type, full, meta) {
                return `<a href=\"/dashboard/ppm/data_inventaris/cetak_aset/${data}"\"  target=\"_blank\"><button type=\"button\" class=\"btn btn-outline-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Print\"><i class=\"fa fa-print\"></i> print</button></a>
                <a href=\"/dashboard/ppm/registrasi/${data}/edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\" class=\"btn btn-info btn-sm\"> <i class=\"fa fa-edit\"></i> </a>
                <form action=\"/dashboard/ppm/registrasi/${data}\" method=\"POST\" class=\"d-inline\">
                            @csrf
                            @method('delete')
                            <button class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hapus\">
                              <i class=\"fa fa-trash\"></i>
                            </button>
                          </form>`
              }
              
            },
            
            /*{
              data: 'id_aset',
              name: 'QR',
              render: function(data, type, full, meta) {
                return "<a href=\"/dashboard/ppm/data_inventaris/qr_qode/" + data + "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-outline-primary btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Buat QR\">Buat</button></a>"
              }
            },*/

          ],
        }).fnDestroy();
      })
    </script>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection