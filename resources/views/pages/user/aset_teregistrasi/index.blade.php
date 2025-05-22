@extends('layouts.user')

@section('content')
@section('title', 'Aset Teregistrasi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>MENU FORM TEREGISTRASI</h1>
        <small>Form Teregistrasi</small>
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
    <!-- Tabel Permintaan Perbaikan -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-md-5">
                <h2>Tabel Permintaan Perbaikan</h2>
              </div>
            </div>
          </div>
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Id</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Type</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Pelapor</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Tombol_Aksi_Table</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($itemPesanan as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td title="klik untuk copy ke form" onclick="copy(this)"><span>{{ $item->id }}<span></td>
                      <td>{{ $item->nama_req }}</td>
                      <td>{{ $item->merek_req }}</td>
                      <td>{{ $item->type_req }}</td>
                      <td>{{ $item->sn_req }}</td>
                      <td>{{ $item->pelapor_req }}</td>
                      <td>{{ $item->tanggal_req }}</td>
                      <td>
                        <form
                          action="{{ url('/dashboard_user/perbaikan_teregistrasi', $item->id) }}"
                          method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-xs"
                            data-toggle="tooltip" data-placement="top"
                            title="validasi">
                            Validasi perbaikan
                          </button>
                        </form>
                      </td>
                    </tr>
                    @empty
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
    <!-- Tabel Permintaan Perbaikan end -->

    <!-- Tabel Perbaikan -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Tabel Perbaikan</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th class="">No</th>
                      <th class="none">Id_Perbaikan</th>
                      <th class="none">ID Aset</th>
                      <th class="">Tanggal</th>
                      <th class="">Nama</th>
                      <th class="">Merek</th>
                      <th class="">Type</th>
                      <th class="">Serial_Number</th>
                      <th class="">Lokasi</th>
                      <th class="">Status</th>
                      <th class="none">Pelapor</th>
                      <th class="">Keterangan</th>
                      <th class="none">Kepala Ruangan</th>
                      <th class="none">Teknisi 1</th>
                      <th class="none">Teknisi 2</th>
                      <th class="none">Teknisi 3</th>
                      <th class="none">Keluhan Dari alat</th>
                      <th class="none">Korektif</th>
                    </thead>
                    <tbody>
                      @forelse ($items as $index => $item)
                      <tr class="odd gradeX">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->id_perbaikan_reg }}</td>
                        <td>{{ $item->id_aset_reg }}</td>
                        <td>{{ $item->tanggal_perbaikan_reg }}</td>
                        <td>{{ $item->nama_alat_reg }}</td>
                        <td>{{ $item->merek_alat_reg }}</td>
                        <td>{{ $item->type_alat_reg }}</td>
                        <td>{{ $item->serial_number_reg }}</td>
                        <td>{{ $item->lokasi_alat_reg }}</td>
                        <td>
                          <form action="" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button
                              class="btn btn-{{ $item->status == 0 ? 'warning' : 'danger' }}"
                              type="submit"
                              disabled>{{ $item->status == 0 ? 'Sudah di Setujui' : 'Belum di Setujui' }}</button>
                          </form>
                        </td>
                        <td>{{ $item->pelapor_reg }}</td>
                        <td>
                          <form
                            action="{{ route('kondisi_alat', $item->id_perbaikan_reg) }}" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-{{ $item->keterangan_kondisi_alat_reg == 0 ? 'success' : 'warning' }}"
                              type="submit" disabled>{{ $item->keterangan_kondisi_alat_reg == 0 ? 'Selesai, dikembalikan' : 'Dalam perbaikan' }}</button>
                          </form>
                        </td>
                        <td>{{ $item->ka_instalasi_reg }}</td>
                        <td>{{ $item->teknisi_1_reg }}</td>
                        <td>{{ $item->teknisi_2_reg }}</td>
                        <td>{{ $item->teknisi_3_reg }}</td>
                        <td>{{ $item->keluhan_dari_alat_reg }}</td>
                        <td>{{ $item->korektif_reg }}</td>
                      </tr>
                      @empty
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
    </div>
    <!-- Tabel perbaikan end -->
  </div> <!-- /.content -->
</div>
@endsection