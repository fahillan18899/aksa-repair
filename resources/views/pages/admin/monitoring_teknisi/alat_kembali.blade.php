@extends('layouts.admin')

@section('content')
@section('title', 'Alat Kembali')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Alat Kembali</h1>
        <small>Daftar Alat Kembali</small>
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
            <h1>Daftar Alat Kembali</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">No Urut</th>
                      <th scope="col">Nama</th>
                      <th scope="col">No Seri</th>
                      <th scope="col">Type</th>
                      <th scope="col">Kerusakan</th>
                      <th scope="col">Instansi</th>
                      <th scope="col">Tombol Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($data as $datas)
                    <tr>
                      <td>{{ $datas->no_urut }}</td>
                      <td>{{ $datas->nama_alat }}</td>
                      <td>{{ $datas->no_seri }}</td>
                      <td>{{ $datas->type }}</td>
                      <td>{{ $datas->kerusakan_alat }}</td>
                      <td>{{ $datas->instansi }}</td>
                      <td>
                        <button class="btn btn-sm btn-{{ $datas->status == 0 ? 'danger' : 'success' }}" disabled>
                          {{ $datas->status == 0 ? 'Kembali' : 'Approve' }}
                        </button>
                      </td>
                      <td>
                          @php
                            $class = 'btn-light';
                            $label = 'Tidak diketahui';

                            switch($datas->ket) {
                              case 1: $class = 'btn-danger'; $label = 'Trouble'; break;
                              case 2: $class = 'btn-warning'; $label = 'Proses'; break;
                              case 3: $class = 'btn-info'; $label = 'Dalam Perbaikan'; break;
                              case 4: $class = 'btn-secondary'; $label = 'Rusak'; break;
                              case 5: $class = 'btn-success'; $label = 'Selesai'; break;
                            }
                          @endphp
                          <button class="btn btn-sm {{ $class }}" disabled>{{ $label }}</button>
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
  </div>
</div> <!-- /.content -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection