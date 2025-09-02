@extends('layouts.marketing')

@section('content')
@section('title', 'SPH')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>SPH</h1>
        <small>Daftar SPH</small>
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
            <h1>Daftar Document SPH</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Link Download</th>
                      <th>Tanggal Upload</th>
                      <th>Tombol</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($item as $index => $items)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $items->nama }}</td>
                      <td><a href="{{ URL::asset('storage/'.$items->path) }}" target="_blank">Download</a></td>
                      <td>{{ $items->created_at->format('d-m-Y') }}</td>
                      <td>
                        <form action="{{ route('marketing.delete.sph_old', $items->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-xs btn-danger" data-toggle="tooltip" data-placemnet="top" title="Hapus">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
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