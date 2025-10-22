@extends('layouts.admin')

@section('content')
@section('title', 'Input Data')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Input Pekerjaan</h1>
        <small>Daftar Input Pekerjaan</small>
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
            <h1>Daftar Input Pekerjaan</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Marketing</th>
                      <th scope="col">Nama Alat</th>
                      <th scope="col">Merk</th>
                      <th scope="col">Type</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Instansi</th>
                      <th scope="col">Tombol Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($data as $datas)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $datas->created_at->timezone('Asia/Jakarta')->format('d-m-Y / H:i') }}</td>
                      <td>{{ $datas->user }}</td>
                      <td>{{ $datas->nama_alat }}</td>
                      <td>{{ $datas->merek }}</td>
                      <td>{{ $datas->type }}</td>
                      <td>{{ $datas->no_seri }}</td>
                      <td>{{ $datas->instansi }}</td>
                      <td>
                        <a href="{{ route('monitoring_marketing.edit', $datas->id) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                          <form action="{{ route('monitoring_marketing.destroy', $datas->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
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
  </div>
</div> <!-- /.content -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection