@extends('layouts.admin_kalibrasi')

@section('content')
@section('title', 'Berita Acara')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Berita Acara</h1>
        <small>Berita Acara</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <!-- content -->


    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-primary"> <i class="fa fa-list"></i> Daftar Berita Acara </a>
            </div>
          </div>


          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12">
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <th>No</th>
                    <th>Nama Alat</th>
                    <th>Jumlah</th>
                    <th>Tombol_Aksi_Tabel</th>
                  </thead>
                  <tbody>
                    @forelse ($berita_acara as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $item->id_number }}</td>
                      <td>{{ $item->type }}</td>
                      <td scope="row">
                        <a href="/dashboard/ppm/data_inventaris/cetak_aset/{{ $item->id_number }}" target="_blank"><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Buat QR"><i class="fa fa-edit"></i> print</button></a>
                        <a href="{{ route('registrasi',$item->id_number) }}" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
                        <form action="{{ url('/dashboard/ppm/registrasi', $item->id_number) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="12">Data Kosong</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--TABEL-->


  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->

@endsection