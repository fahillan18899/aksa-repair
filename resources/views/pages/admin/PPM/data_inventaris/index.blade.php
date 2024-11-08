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
                  <a class="btn btn-success" href="/dashboard/ppm/registrasi-aset"> <i class="fa fa-plus"></i> Add Alat </a>
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
                <th>Serial Number</th>
                <th>Ruangan</th>
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
                <th class="none">Jadwal</th>
                <th>Tombol_Aksi_Tabel</th>
              </thead>
              <tbody>
                @forelse ($items as $index => $item)
                <tr class="odd gradeX">
                  <td><?php echo $item['id_aset']; ?></td>
                  <td><?php echo $item['jenis_alat']; ?></td>
                  <td><?php echo $item['nama_alat']; ?></td>
                  <td><?php echo $item['merek']; ?></td>
                  <td><?php echo $item['type']; ?></td>
                  <td><img style="width: 80px; height: 80px;"  alt='No Image' src="{{ URL::asset('storage/'.$item->foto_pendukung) }}"></td>
                  <td><?php echo $item['serial_number']; ?></td>
                  <td><?php echo $item['lokasi_alat']; ?></td>
                  <td><?php echo $item['tanggal_kalibrasi']; ?></td>
                  <td><?php echo $item['distributor']; ?></td>
                  <td><?php echo $item['alamat_distributor']; ?></td>
                  <td><?php echo $item['tlp_distributor']; ?></td>
                  <td><?php echo $item['email_distributor']; ?></td>
                  <td><?php echo $item['teknisi_distributor']; ?></td>
                  <td><?php echo $item['tlp_t_distributor']; ?></td>
                  <td><?php echo $item['no_sertifikat_kalibrasi']; ?></td>
                  <td><?php echo $item['teknisi_ppm']; ?></td>
                  <td><?php echo $item['harga_perolehan']; ?></td>
                  <td><?php echo $item['sumber_dana']; ?></td>
                  <td><?php echo $item['tahun_perolehan']; ?></td>
                  <td><?php echo $item['akl']; ?></td>
                  <td><?php echo $item['akd']; ?></td>
                  <td><?php echo $item['no_inventaris_1']; ?></td>
                  <td><?php echo $item['umur_alat']; ?></td>
                  <td><?php echo $item['jadwal_pemeliharaan']; ?></td>
                  <td>
                    <a href="{{ route('registrasi', $item->id_aset) }}"
                      class="btn btn-xs btn-success" data-toggle="tooltip"
                      data-placement="top" title="Edit"><i
                        class="fa fa-edit"></i></a>

                    <a href="/dashboard/ppm/data_inventaris/cetak_aset/{{ $item->id_aset }}"
                      class="btn btn-xs btn-primary" target="_blank"
                      data-toggle="tooltip" data-placement="top"
                      title="Cetak"><i class="fa fa-print"></i></a>

                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal"
                    data-target="#exampleModal<?php echo $item['id_aset'] ?>">
                    <i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="view" aria-hidden="true"></i>
                    </button>

                    <form
                      action="/dashboard/ppm/registrasi/{{ $item->id_aset }}"
                      method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-xs"
                        data-toggle="tooltip" data-placement="top"
                        title="Hapus">
                        <i class="fa fa-trash "></i>
                      </button>

                                          <!-- modal  -->
                    <!-- Button trigger modal  -->
                    <!-- Modal  -->
                    <div class="modal fade" id="exampleModal<?php echo $item['id_aset'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header" style="color:white; background-color:#042a4a;">
                            <h5 class="modal-title" id="exampleModalLabel">View Data</h5>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <table class="datatable table table-bordered table-hover" style="width:96%; margin-left:10px;">
                                <tr>
                                  <td style="width: 50%;">Id Aset</td>
                                  <td><?php echo $item['id_aset'] ?></td>
                                </tr>
                                <tr>
                                  <td style="width: 50%;">Nama Alat</td>
                                  <td><?php echo $item['nama_alat'] ?></td>
                                </tr>
                                <tr>
                                  <td style="width: 50%">Jenis Alat</td>
                                  <td><?php echo $item['jenis_alat'] ?></td>
                                </tr>
                                <tr>
                                  <td style="width: 50%">Merek</td>
                                  <td><?php echo $item['merek'] ?></td>
                                </tr>
                                <tr>
                                  <td style="width: 50%">Type</td>
                                  <td><?php echo $item['type'] ?></td>
                                </tr>
                                <tr>
                                  <td style="width: 50%">Serial Number</td>
                                  <td><?php echo $item['serial_number'] ?></td>
                                </tr>
                                <tr>
                                  <td style="width: 50%">Ruangan</td>
                                  <td><?php echo $item['lokasi_alat'] ?></td>
                                </tr>
                                <tr>
                                  <td style="width: 50%">Tanggal Kalibrasi</td>
                                  <td><?php echo $item['tanggal_kalibrasi'] ?></td>
                                </tr>
                                <tr>
                                  <td style="width: 50%">Umur Alat</td>
                                  <td><?php echo $item['umur_alat'] ?></td>
                                </tr>
                                <tr>
                                  <td style="width: 50%">Penyusutan Aset</td>
                                  <td><?php echo $item['penyusutan_aset'] ?>%</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a href="/dashboard/ppm/data_inventaris/tabel_perbaikan/{{ $item['id_aset'] }}" type="button" class="btn btn-warning">Lihat Kerusakan Alat</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- modal -->
                    </form>
                  </td>
                </tr>
                @empty
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection

@push('addon-script')
<!--TABEL-->
<!-- <script type="text/javascript">
      $(document).ready(function() {
        $('#table-register').DataTable({
          processing: true,
          responsive: true,
          serverSide: true,
          ajax: '{{ url('/dashboard/ppm/aset') }}',
          dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        buttons: [
            { extend: 'copy', className: 'btn-sm' },
            { extend: 'csv', title: 'ExampleFile', className: 'btn-sm' },
            { extend: 'excel', title: 'ExampleFile', className: 'btn-sm' },
            { extend: 'pdf', title: 'ExampleFile', className: 'btn-sm' },
            { extend: 'print', className: 'btn-sm' }
        ],
          columns: [{
              data: 0,
              name: 'Id_Aset',
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
                return `<a href=\"/dashboard/ppm/data_inventaris/cetak_aset/${data}"\"  target=\"_blank\"><button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Print\"><i class=\"fa fa-print\"></i></button></a>
                <a href=\"/dashboard/ppm/registrasi/${data}/edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\" class=\"btn btn-info btn-sm\"> <i class=\"fa fa-edit\"></i> </a>
                <a href=\"/dashboard/ppm/data_inventaris/detail/${data}\""  target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Detail\" class=\"btn btn-success btn-sm\"> <i class=\"fa fa-eye\"></i> </a>
                <form action=\"/dashboard/ppm/registrasi/${data}\" method=\"POST\" class=\"d-inline\">
                            @csrf
                            @method('delete')
                            <button class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hapus\">
                              <i class=\"fa fa-trash\"></i>
                            </button>
                          </form>`
              }

            },



          ],
        });
      })
      
    </script> -->

<!-- modal  -->
<!-- Button trigger modal  -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

 Modal 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            Id Aset <br>
            Jenis <br>
            Nama <br>
            Merek <br>
            Ruangan <br>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
<!-- modal -->
@endpush