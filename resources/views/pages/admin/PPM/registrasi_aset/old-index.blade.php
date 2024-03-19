@extends('layouts.admin')

@section('content')
@section('title', 'Registrasi')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-check"></i></div>
      <div class="header-title">
        <h1>Registrasi</h1>
        <small>Registrasi Alat</small>
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

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <!-- content -->

    <div class="row">
      <div class="col-sm-12 col-md-10">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print d-inline">
            <div class="row">
              <div class="col-md-7">

                <h1>Form Registrasi Alat</h1>
              </div>
              <div class="col-md-2">
                <a href="{{ url('/dashboard/export') }}" class="btn btn-info"> Template Import</a>
              </div>
              <div class="col-md-3">
                <form action="{{ url('/dashboard/import') }}" method="post" enctype="multipart/form-data" style="display: flex;">
                  @csrf
                  <input class="form-control" type="file" name="file">
                  <button type="submit" class="btn-primary btn">Import</button>
                </form>
              </div>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class=" col-sm-12">
                <form action="{{ url('dashboard/ppm/registrasi') }}" class="form-inner" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                  @csrf
                  @method('post')

                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">ID Aset <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset" type="text" class="form-control" id="firstname" placeholder="ID Aset" value="{{ $kodeAset }}" readonly>
                      @if ($errors->has('firstname'))
                      <span class="text-danger">{{ $errors->first('firstname') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis alat" class="col-xs-3 col-form-label">Jenis Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="jenis_alat" class="form-control" id="Jenis_Alat">
                        <option value="Medis">Medis</option>
                        <option value="Non Medis">Non Medis</option>
                        <option value="Milik KSO">Milik KSO</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="nama_alat" class="form-control" id="Nama_Alat">
                        <option>Pilih Alat</option>
                        @foreach($alats as $alat)
                        <option value="<?= $alat['nama_alat']; ?>"><?= $alat['nama_alat']; ?></option>
                        @endforeach
                      </select>
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
                    <label for="Serial_Number" class="col-xs-3 col-form-label">Serial Number <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number" class="form-control" type="text" placeholder="Serial Number" id="Serial_Number">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="gambar" class="col-xs-3 col-form-label">Gambar </label>
                    <div class="col-xs-9">
                      <input name="gambar" class="form-control" type="file" id="gambar">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat" class="form-control" id="Lokasi_Alat">
                        <option>Pilih Lokasi Alat</option>
                        @foreach($ruangans as $ruangan)
                        <option value="<?= $ruangan['lokasi_alat']; ?>"><?= $ruangan['lokasi_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Kalibrasi" class="col-xs-3 col-form-label">Tanggal Kalibrasi </label>
                    <div class="col-xs-9">
                      <input name="tanggal_kalibrasi" type="date" class="form-control" id="jadwal_pemeliharaan" placeholder="jadwal_pemeliharaan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jadwal_pemeliharaan" class="col-xs-3 col-form-label">jadwal pemeliharaan </label>
                    <div class="col-xs-9">
                      <input name="jadwal_pemeliharaan" type="date" class="form-control" id="jadwal_pemeliharaan" placeholder="jadwal_pemeliharaan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Distributor" class="col-xs-3 col-form-label">Distributor </label>
                    <div class="col-xs-9">
                      <input name="distributor" type="text" class="form-control" id="Distributor" placeholder="Distributor">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat_distributor" class="col-xs-3 col-form-label">Alamat Distributor </label>
                    <div class="col-xs-9">
                      <input name="alamat_distributor" type="text" class="form-control" id="Alamat_Distributor" placeholder="Alamat Distributor">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="TLP_Distributor" class="col-xs-3 col-form-label">Telphone_Distributor </label>
                    <div class="col-xs-9">
                      <input name="tlp_distributor" type="text" class="form-control" id="TLP_Distributor" placeholder="Telphone Distributor">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Email_Distributor" class="col-xs-3 col-form-label">Email Distributor </label>
                    <div class="col-xs-9">
                      <input name="email_distributor" type="email" class="form-control" id="Email_Distributor" placeholder="Email Distributor">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_Distributor" class="col-xs-3 col-form-label">Teknisi Distributor </label>
                    <div class="col-xs-9">
                      <input name="teknisi_distributor" type="text" class="form-control" id="Teknisi_Distributor" placeholder="Teknisi Distributor">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="TLP_T_Distributor" class="col-xs-3 col-form-label">Telephone Teknisi Distributor </label>
                    <div class="col-xs-9">
                      <input name="tlp_t_distributor" type="text" class="form-control" id="TLP_T_Distributor" placeholder="Telephone Teknisi Distributor">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="No_Sertifikat_Kalibrasi" class="col-xs-3 col-form-label">No Sertifikat Kalibrasi</label>
                    <div class="col-xs-9">
                      <input name="no_sertifikat_kalibrasi" type="text" class="form-control" id="No_Sertifikat_Kalibrasi" placeholder="No Sertifikat Kalibrasi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_PPM" class="col-xs-3 col-form-label">Teknisi PPM <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_ppm" type="text" class="form-control" id="Teknisi_PPM" placeholder="Teknisi PPM">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Harga_Perolehan" class="col-xs-3 col-form-label">Harga Perolehan </label>
                    <div class="col-xs-9">
                      <input name="harga_perolehan" type="number" class="form-control" id="Harga_Perolehan" placeholder="Harga Perolehan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="sumber_dana" class="col-xs-3 col-form-label">Sumber Dana </label>
                    <div class="col-xs-9">
                      <input name="sumber_dana" type="text" class="form-control" id="Sumber_Dana" placeholder="Sumber Dana">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="Tahun_Perolehan" class="col-xs-3 col-form-label">Tahun Perolehan </label>
                    <div class="col-xs-9">
                      <input name="tahun_perolehan" type="number" class="form-control" id="Tahun_Perolehan" placeholder="Tahun Perolehan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="akl" class="col-xs-3 col-form-label">AKL</label>
                    <div class="col-xs-9">
                      <input name="akl" type="text" class="form-control" id="AKL" placeholder="AKL">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="akd" class="col-xs-3 col-form-label">AKD </label>
                    <div class="col-xs-9">
                      <input name="akd" type="text" class="form-control" id="AKD" placeholder="AKD">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_inventaris_1" class="col-xs-3 col-form-label">no inventaris 1 </label>
                    <div class="col-xs-9">
                      <input name="no_inventaris_1" type="text" class="form-control" id="no_inventaris_1" placeholder="no inventaris 1">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_inventaris_2" class="col-xs-3 col-form-label">no inventaris 2</label>
                    <div class="col-xs-9">
                      <input name="no_inventaris_2" type="text" class="form-control" id="no_inventaris_2" placeholder="no inventaris 2">
                    </div>
                  </div>

                  <!-- if representative picture is already uploaded -->

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
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-body panel-form">
            <table id="table-register" class="datatable table table-striped table-bordered" style="width:100%">
              <thead class="table-light">
                <th>Id Aset</th>
                <th>Jenis</th>
                <th>Nama</th>
                <th>Merek</th>
                <th class="none">Type</th>
                <th class="none">Gambar</th>
                <th class="none">Serial Number</th>
                <th class="none">Ruangan</th>
                <th class="none">Tanggal_Kalibrasi</th>
                <th class="none">Distributor</th>
                <th class="none">Alamat_Distributor</th>
                <th class="none">TLP_Distributor</th>
                <th class="none">Email_Distributor</th>
                <th class="none">Teknisi_Distributor</th>
                <th class="none">TLP_T_Distributor</th>
                <th class="none">No_Sertifikat_Kalibrasi</th>
                <th class="none">Teknisi PPM</th>
                <th class="none">Harga Perolehan</th>
                <th class="none">Sumber_Dana</th>
                <th class="none">Tahun_Perolehan</th>
                <th class="none">AKL</th>
                <th class="none">AKD</th>
                <th class="none">No_Inventaris </th>
                <th class="none">umur_alat</th>
                <th  class="none">Jadwal</th>
                <th>Tombol_Aksi_Tabel</th>
                <th>QR</th>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--TABEL-->
    <script type="text/javascript">
      // create function with jquery to get api form dashboard/ppm/registrasi yajra laravel?
      $(document).ready(function() {
        $('#table-register').DataTable({
          processing: true,
          responsive: true,
          serverSide: true,
          ajax: '{{ url('/dashboard/ppm/aset') }}',
          columns: [{
              data: 0,
              name: 'Id_Aset',
              orderable: true,
              searchable: true
            },
            {
              data: 1,
              name: 'Jenis_Alat'
            },
            {
              data: 2,
              name: 'Nama_Alat'
            },
            {
              data: 3,
              name: 'Merek'
            },
            {
              data: 4,
              name: 'Type'
            },
            {
              data: 5,
              name: 'Gambar',
              render: function(data, type, full, meta) {
                return "<img src=\"/storage/" + data + "\" width=\"100\"  alt='No Image'>"
              }
            },
            {
              data: 6,
              name: 'Serial_Number'
            },
            {
              data: 7,
              name: 'lokasi_alat'
            },
            {
              data: 8,
              name: 'Tanggal_Kalibrasi'
            },
            {
              data: 9,
              name: 'Distributor'
            },
            {
              data: 10,
              name: 'Alamat_Distributor'
            },
            {
              data: 11,
              name: 'TLP_Distributor'
            },
            {
              data: 12,
              name: 'Email_Distributor'
            },
            {
              data: 13,
              name: 'Teknisi_Distributor'
            },
            {
              data: 14,
              name: 'TLP_T_Distributor'
            },
            {
              data: 15,
              name: 'No_Sertifikat_Kalibrasi'
            },
            {
              data: 16,
              name: 'teknisi_ppm'
            },
            {
              data: 17,
              name: 'harga_perolehan'
            },
            {
              data: 18,
              name: 'Sumber_Dana'
            },
            {
              data: 19,
              name: 'Tahun_Perolehan'
            },
            {
              data: 20,
              name: 'AKL'
            },
            {
              data: 21,
              name: 'AKD'
            },
            {
              data: 22,
              name: 'no_inventaris_1'
            },
            {
              data: 23,
              name: 'umur_alat'
            },
            {
              data: 24,
              name: 'jadwal_pemeliharaan'
            },
            {
              data: 0,
              render: function(data, type, full, meta) {
                return `<a href=\"/dashboard/ppm/data_inventaris/cetak_aset/${data}"\"  target=\"_blank\"><button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Print\"><i class=\"fa fa-print\"></i></button></a>
                <a href=\"/dashboard/ppm/registrasi/${data}/edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\" class=\"btn btn-info btn-sm\"> <i class=\"fa fa-edit\"></i> </a>
                <form action=\"/dashboard/ppm/registrasi/${data}\" method=\"POST\" class=\"d-inline\">
                            @csrf
                            @method('delete')
                            <button class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hapus\">
                              <i class=\"fa fa-trash\"></i>
                            </button>
                          </form>`
              }
            },
            {
              data: 0,
              render: function(data, type, full, meta) {
                return "<a href=\"/dashboard/ppm/data_inventaris/qr_qode/" + data + "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-outline-primary btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Buat QR\">Buat</button></a>"
              }
            },

          ],
        }).fnDestroy();
      })
    </script>

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->

@endsection