@extends('layouts.admin')

@section('content')
@section('title', 'Data Inventaris')
<style>
  .table-modal td:first-child {
        width: 50%;
    }
</style>
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
                <th class="none">Jenis</th>
                <th>Nama</th>
                <th>Merek</th>
                <th>Type</th>
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
                  <td>{{ $item->id_aset }}</td>
                  <td>{{ $item->jenis_alat }}</td>
                  <td>{{ $item->nama_alat }}</td>
                  <td>{{ $item->merek }}</td>
                  <td>{{ $item->type }}</td>
                  <td><img style="width: 80px; height: 80px;" alt='No Image' src="{{ URL::asset('storage/'.$item->foto_pendukung) }}"></td>
                  <td>{{ $item->serial_number }}</td>
                  <td>{{ $item->lokasi_alat }}</td>
                  <td>{{ $item->tanggal_kalibrasi }}</td>
                  <td>{{ $item->distributor }}</td>
                  <td>{{ $item->alamat_distributor }}</td>
                  <td>{{ $item->tlp_distributor }}</td>
                  <td>{{ $item->email_distributor }}</td>
                  <td>{{ $item->teknisi_distributor }}</td>
                  <td>{{ $item->tlp_t_distributor }}</td>
                  <td>{{ $item->no_sertifikat_kalibrasi }}</td>
                  <td>{{ $item->teknisi_ppm }}</td>
                  <td>{{ $item->harga_perolehan }}</td>
                  <td>{{ $item->sumber_dana }}</td>
                  <td>{{ $item->tahun_perolehan }}</td>
                  <td>{{ $item->akl }}</td>
                  <td>{{ $item->akd }}</td>
                  <td>{{ $item->no_inventaris_1 }}</td>
                  <td>{{ $item->umur_alat }}</td>
                  <td>{{ $item->jadwal_pemeliharaan }}</td>
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
                      data-target="#exampleModal{{ $item->id_aset }}">
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
                                <table class="datatable table table-bordered table-hover table-modal" style="width:96%; margin-left:10px;">
                                  <tr><td>Id Aset</td><td>{{ $item->id_aset }}</td></tr>
                                  <tr><td>Nama Alat</td><td>{{ $item->nama_alat }}</td></tr>
                                  <tr><td>Jenis Alat</td><td>{{ $item->jenis_alat }}</td></tr>
                                  <tr><td>Merek</td><td>{{ $item->merek }}</td></tr>
                                  <tr><td>Type</td><td>{{ $item->type }}</td></tr>
                                  <tr><td>Serial Number</td><td>{{ $item->serial_number }}</td></tr>
                                  <tr><td>Ruangan</td><td>{{ $item->lokasi_alat }}</td></tr>
                                  <tr><td>Tanggal Kalibrasi</td><td>{{ $item->tanggal_kalibrasi }}</td></tr>
                                  <tr><td>Umur Alat</td><td>{{ $item->umur_alat }}</td></tr>
                                  <tr><td>Penyusutan Aset</td><td>{{ $item->penyusutan_aset }}%</td></tr>
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