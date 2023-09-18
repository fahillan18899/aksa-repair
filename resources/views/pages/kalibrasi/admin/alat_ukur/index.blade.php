@extends('layouts.admin_kalibrasi')

@section('content')
@section('title', 'ALat Ukur')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Formulir</h1>
        <small>Formulir Alat Ukur</small>
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
            <h1>Formulir Alat Ukur</h1>
          </div>


          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('kalibrasi/alat_ukur') }}" class="form-inner" method="post" accept-charset="utf-8">
                  @csrf
                  @method('post')

                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">ID Aset <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_number" type="text" class="form-control" id="firstname" placeholder="ID Aset" value="{{ $id_number }}" readonly>
                      @if ($errors->has('firstname'))
                      <span class="text-danger">{{ $errors->first('firstname') }}</span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama" type="text" class="form-control" id="firstname" placeholder="Nama Alat Ukur">

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Serial_Number" class="col-xs-3 col-form-label">Serial Number <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number" class="form-control" type="text" placeholder="Serial Number" id="Serial_Number">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek" class="form-control" type="text" placeholder="Merek" id="Merek">
                      @if ($errors->has('merek'))
                      <span class="text-danger">{{ $errors->first('merek') }}</span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type" class="form-control" type="text" placeholder="Type" id="Type">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Parameter Ukur <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="parameter_ukur" class="form-control" type="text" placeholder="Parameter Ukur" id="Type">
                    </div>
                  </div>

                  <div class="form-group row">
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
    <!--TABEL-->
    <table class="datatable table table-striped table-bordered" style="width:100%">
      <thead class="table-light">
        <th>No</th>
        <th>ID Number</th>
        <th>Nama Alat</th>
        <th>Serial Number</th>
        <th>Merek Alat</th>
        <th>Type</th>
        <th>Tombol_Aksi_Tabel</th>
      </thead>
      <tbody>
        @forelse ($items as $index => $item)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $item->id_number }}</td>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->serial_number }}</td>
          <td>{{ $item->merek }}</td>
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
    <!--TABEL-->
    <script type="text/javascript">

    </script>

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->

@endsection