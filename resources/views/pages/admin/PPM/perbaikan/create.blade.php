@extends('layouts.ppm')

@section('content')
@section('title', 'Perbaikan')
<style>
  .panel {
    border-radius: 12px;
  }

  .panel-heading h1 {
    margin: 0;
    font-size: 22px;
    font-weight: 600;
  }

  .form-control {
    height: 45px;
    font-size: 14px;
  }

  textarea.form-control {
    height: auto;
  }

  .btn-mobile {
    width: 100%;
    height: 48px;
    font-size: 16px;
    font-weight: 600;
  }

  .input-rounded {
    border-radius: 12px;
    padding: 10px 14px;
    height: 45px;
    font-size: 14px;
    border: 1px solid #ddd;
    box-shadow: none;
    transition: all 0.2s ease-in-out;
}

/* efek saat fokus */
.input-rounded:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 3px rgba(40,167,69,0.15);
    outline: none;
}

/* optional: tombol juga dibikin rounded */
.btn-rounded {
    border-radius: 12px;
}

  @media (max-width: 768px) {

    .content-header {
      text-align: center;
    }

    .header-title h1 {
      font-size: 24px;
    }

    .header-title small {
      font-size: 14px;
    }

    .form-group.row {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      width: 100%;
      margin-bottom: 5px;
      text-align: left;
      font-weight: 600;
    }

    .form-group .col-xs-9,
    .form-group .col-sm-9,
    .form-group .col-md-9 {
      width: 100%;
    }

    .form-group .col-xs-3 {
      width: 100%;
    }

    .panel-body {
      padding: 15px;
    }

    .table {
      font-size: 12px;
    }

    .table img {
      width: 60px !important;
    }
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"></div>
      <div class="header-title">
        <h1></h1>
        <small></small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <!--Form Perbaikan-->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print" id="form1">
              <h1>Form Perbaikan</h1>
            </div>

            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-9 col-sm-12">
                  <form action="{{route('perbaikan.store')}}" class="form-inner" enctype="multipart/form-data" method="post">
                      @csrf

                      <input type="hidden" name="id_alat" id="id_alat" value="{{ $qr }}">

                      <!-- Nama Alat -->
                      <div class="form-group">
                          <label>Nama Alat <i class="text-danger">*</i></label>
                          <input name="nama_alat" id="nama_alat" type="text" class="form-control input-rounded" value="{{ $alat->nama_alat }}" required>
                      </div>

                      <!-- Merek -->
                      <div class="form-group">
                          <label>Merek <i class="text-danger">*</i></label>
                          <input name="merek" id="merek" type="text" class="form-control input-rounded" value="{{ $alat->merek }}" required>
                      </div>

                      <!-- Type -->
                      <div class="form-group">
                          <label>Type <i class="text-danger">*</i></label>
                          <input name="type" id="type" type="text" class="form-control input-rounded" value="{{ $alat->type }}" required>
                      </div>

                      <!-- No Seri -->
                      <div class="form-group">
                          <label>No Seri <i class="text-danger">*</i></label>
                          <input name="seri" id="seri" type="text" class="form-control input-rounded" value="{{ $alat->seri }}" required>
                      </div>

                      <!-- Lokasi -->
                      <div class="form-group">
                          <label>Lokasi <i class="text-danger">*</i></label>
                          <input name="lokasi" id="lokasi" type="text" class="form-control input-rounded" value="{{ $alat->lokasi }}" required>
                      </div>

                      <!-- Kepala Ruang -->
                      <div class="form-group">
                          <label>Kepala Ruang <i class="text-danger">*</i></label>
                          <input name="kepala" id="kepala" type="text" class="form-control input-rounded" required>
                      </div>

                      <!-- Teknisi -->
                      <div class="form-group">
                        <label>Teknisi</label>
                        <input name="teknisi" id="teknisi" type="text" class="form-control input-rounded" required>
                      </div>

                      <!-- Korektif -->
                      <div class="form-group">
                          <label>Korektif <i class="text-danger">*</i></label>
                          <input name="korektif" id="korektif" type="text" class="form-control input-rounded" required>
                      </div>

                      <!-- Catatan -->
                      <div class="form-group">
                          <label>Catatan <i class="text-danger">*</i></label>
                          <input name="catatan" id="catatan" type="text" class="form-control input-rounded" required>
                      </div>

                      <!-- Foto -->
                      <div class="form-group">
                          <label>Foto Pendukung <i class="text-danger">*</i></label>
                          <input name="foto" id="foto" type="file" class="form-control input-rounded" required>
                      </div>

                      <!-- Button -->
                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-block btn-mobile btn-rounded">
                              <i class="fa fa-save"></i> Tambah
                          </button>
                          <a href="{{ route('qr.menu', ['id' => $qr]) }}"
                            class="btn btn-primary btn-block btn-mobile btn-rounded">
                              Kembali
                          </a>
                      </div>

                  </form>
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--Form Perbaikan end-->

    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Daftar Perbaikan</h1>
            </div>
          </div>
          <div class="table-responsive">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th>Id</th>
                      <th>Date</th>
                      <th>Nama</th>
                      <th>Merek</th>
                      <th>Type</th>
                      <th>Serial Number</th>
                      <th>Lokasi</th>
                      <th>Kepala Ruang</th>
                      <th>Teknisi</th>
                      <th>Korektif</th>
                      <th>Catatan</th>
                      <th>Foto</th>
                      <th>Tombol Aksi</th>
                    </thead>
                    <tbody>
                      @forelse($items as $item)
                      <tr>
                        <td>{{ $item->id_alat }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->merek }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->seri }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->kepala }}</td>
                        <td>{{ $item->teknisi }}</td>
                        <td>{{ $item->korektif }}</td>
                        <td>{{ $item->catatan }}</td>
                        <td>
                          @if($item->foto)
                          <img src="{{ asset('storage/' . $item->foto) }}"
                              class="img-thumbnail"
                              style="width:90px">
                          @endif
                        </td>
                         <td>
                           <a href="{{ route('perbaikan.edit', $item->id) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                         <form action="{{ route('perbaikan.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash-o" aria-hidden="hidden"></i>
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
    <!--Tabel Perbaikan-->
  </div>
</div>
@endsection
@push('addon-script')
<script>
</script>
@endpush