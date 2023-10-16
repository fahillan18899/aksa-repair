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

    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-lg-7">
                <div class="btn-group">
                  <a class="btn btn-success" href="/dashboard/ppm/registrasi"> <i class="fa fa-plus"></i> Add Alat </a>
                </div>
              </div>

            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <th>No</th>
                    <th>Id_Aset</th>
                    <th>Jenis_Alat</th>
                    <th>Nama_Alat</th>
                    <th>Merek</th>
                    <th>Type</th>
                    <th>Gambar</th>
                    <th>Serial_Number</th>
                    <th>Ruangan</th>
                    <th>Tanggal_Kalibrasi</th>
                    <th>Distributor</th>
                    <th>Alamat_Distributor</th>
                    <th>TLP_Distributor</th>
                    <th>Email_Distributor</th>
                    <th>Teknisi_Distributor</th>
                    <th>TLP_T_Distributor</th>
                    <th>No_Sertifikat_Kalibrasi</th>
                    <th>Teknisi PPM</th>
                    <th>Harga Perolehan</th>
                    <th>Sumber_Dana</th>
                    <th>Tahun_Perolehan</th>
                    <th>No._Inventaris </th>
                    <th>umur_alat</th>
                    <th>Jadwal</th>
                    <th>QR</th>
                    <th>Tombol_Aksi_Tabel</th>
                  </thead>
                  <tbody>
                    @forelse ($items as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $item->id_aset }}</td>
                      <td>{{ $item->jenis_alat }}</td>
                      <td>{{ $item->nama_alat }}</td>
                      <td>{{ $item->merek }}</td>
                      <td>{{ $item->type }}</td>
                      <td><img src="{{ url('storage/' . $item->gambar) }}" width="100px" /></td>
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
                      <td>{{ $item->no_inventaris_1 }}, {{ $item->no_inventaris_2 }}</td>
                      <td>{{ $item->umur_alat }}</td>
                      <td>{{ $item->jadwal_pemeliharaan }}</td>
                      <td>
                        <a href="/dashboard/ppm/data_inventaris/qr_qode/{{ $item->id_aset }}" target="_blank"><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Buat QR">Buat</button></a>
                      </td>
                      <td scope="row">
                        <a href="/dashboard/ppm/data_inventaris/cetak_aset/{{ $item->id_aset }}" target="_blank"><button type="button" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i> print</button></a>
                        <a href="{{ route('registrasi',$item->id_aset) }}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
                        <form action="{{ url('/dashboard/ppm/registrasi', $item->id_aset) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="7">Data Kosong</td>
                    </tr>
                    @endforelse
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
    <script type="text/javascript">
      new DataTable('#example', {
        scrollX: true
      });
    </script>

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection