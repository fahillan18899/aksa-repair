@extends('layouts.admin_kalibrasi')

@section('content')
@section('title', 'Teknisi')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Teknisi</h1>
        <small>Teknisi</small>
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
              <a class="btn btn-primary"> <i class="fa fa-list"></i> Daftar Teknisi </a>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/kalibrasi/teknisi_k') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf

                  <input type="hidden" name="kode_rs" value="" />

                  <div class="form-group row">
                    <label for="nama_teknisi" class="col-xs-3 col-form-label">Nama Teknisi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_teknisi" type="text" class="form-control" id="nama_teknisi" placeholder="Nama Teknisi">
                    </div>
                  </div>

                  <div class=" form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-primary"> <i class="fa fa-list"></i> Daftar Teknisi </a>
            </div>
          </div>


          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12">
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <th>No</th>
                    <th>Nama Teknisi</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    @forelse ($items as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $item->nama_teknisi }}</td>
                      <td scope="row">
                        <a href="{{ route('teknisi_k.edit',$item->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('teknisi_k.destroy',$item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-xs">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>

                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="3">Data Kosong</td>
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