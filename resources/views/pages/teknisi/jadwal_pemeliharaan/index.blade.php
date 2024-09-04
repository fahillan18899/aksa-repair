@extends('layouts.teknisi')

@section('content')
@section('title', 'Jadwal Pemeliharaan')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-date"></i></div>
      <div class="header-title">
        <h1>Jadwal</h1>
        <small>Tambah Jadwal</small>
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
      <!--  form area -->
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <h4>Jadwal Pemeliharaan / Tahun</h4>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('dashboard_teknisi/jadwal_pemeliharaan') }}" class="form-inner" method="post" accept-charset="utf-8">
                  @csrf

                  <input type="hidden" name="id" value="" />
                  <input type="hidden" name="lokasi" value="" />

                  <input class="form-control" name="id" type="hidden" id="id">

                  <div class="form-group row">
                    <label for="lokasi_alat" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat" class="form-control" id="lokasi_alat">
                        <option value="">Pilih Lokasi Alat</option>
                        @foreach ($states as $key => $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat </label>
                    <div class="col-xs-9">
                      <select name="nama_alat" class="form-control">
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="slot" class="col-xs-3 col-form-label">Pemeliharaan 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input class="form-control" name="jadwal" type="date" placeholder="Waktu Jadwal" id="slot" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="slot" class="col-xs-3 col-form-label">Pemeliharaan 2<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input class="form-control" name="jadwal2" type="date" placeholder="Waktu Jadwal" id="slot" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="slot" class="col-xs-3 col-form-label">Pemeliharaan 3<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input class="form-control" name="jadwal3" type="date" placeholder="Waktu Jadwal" id="slot" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button">Save</button>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!--  form area -->
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <h1>Tabel Jadwal</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <th class="">No</th>
                    <th class="">Lokasi Alat</th>
                    <th class="">Nama Alat</th>
                    <th class="">Pemeliharaan 1</th>
                    <th class="">Pemeliharaan 2</th>
                    <th class="">Pemeliharaan 3</th>
                    <th class="">Keterangan</th>
                  </thead>
                  <tbody>
                    @forelse ($items as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $item->lokasi_alat }}</td>
                      <td>{{ $item->nama_alat }}</td>
                      <td>{{ $item->jadwal }}</td>
                      <td>{{ $item->jadwal2 }}</td>
                      <td>{{ $item->jadwal3 }}</td>
                      <td>
                        <form action="{{ url('/dashboard_teknisi/jadwal_pemeliharaan/update', $item->id) }}" class="form-inner" method="post">
                          @csrf
                          @method('PUT')
                          <button class="btn btn-{{ $item->status == 0 ? 'warning' : 'danger'}}" type="submit">{{ $item->status == 0 ? 'Sudah di Pelihara' : 'Belum di Pelihara'}}</button>
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
            </div>
          </div>
        </div>
      </div>
    </div>


  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<script type="text/javascript">
  $(document).ready(function() {
    $('select[name="lokasi_alat"]').on('change', function() {
      var stateID = $(this).val();
      if (stateID) {
        $.ajax({
          url: '/dashboard_teknisi/jadwal_pemeliharaan/' + stateID,
          type: "GET",
          dataType: "json",
          success: function(data) {
            $('select[name="nama_alat"]').empty();
            $.each(data, function(key, value) {
              $('select[name="nama_alat"]').append('<option value="' + key + '_' + value + '">' + key + '_' + value + '</option>');
            });
          }
        });
      } else {
        $('select[name="nama_alat"]').empty();
      }
    });
  });
</script>
@endsection