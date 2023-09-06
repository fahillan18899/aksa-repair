@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
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
    <!-- content -->

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Registrasi Alat</h1>
          </div>


          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('dashboard/ppm/registrasi') }}" class="form-inner" method="post" accept-charset="utf-8">
                  @csrf
                  @method('post')


                  <input type="hidden" name="kode_rs" value="KODE" />

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
                    <label for="no_inventaris_1" class="col-xs-3 col-form-label">no inventaris 1 <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="no_inventaris_1" type="text" class="form-control" id="no_inventaris_1" placeholder="no inventaris 1">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_inventaris_2" class="col-xs-3 col-form-label">no inventaris 2 <i class="text-danger">*</i></label>
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
    <!--TABEL-->
    <table class="datatable table table-striped table-bordered" style="width:100%">
      <thead class="table-light">
        <th>No</th>
        <th>Id_Aset</th>
        <th>Jenis_Alat</th>
        <th>Nama_Alat</th>
        <th>Merek</th>
        <th>Type</th>
        <th>Serial_Number</th>
        <th>Ruangan</th>
        <th>Tanggal_Kalibrasi</th>
        <th>Distributor</th>
        <th>Alamat_Distributor</th>
        <th>TLP_Distributor</th>
        <th>Email_Distributor</th>
        <th>Teknisi_Distributor</th>
        <th>TLP_T_Distributor</th>
        <th>No_Sertifikat_Kalibrasi</th>
        <th>Teknisi PPM</th>
        <th>Harga Perolehan</th>
        <th>Sumber_Dana</th>
        <th>Tahun_Perolehan</th>
        <th>No._Inventaris </th>
        <th>umur_alat</th>
        <th>Jadwal</th>
        <th>QR</th>
        <th>Tombol_Aksi_Tabel</th>
      </thead>
      <tbody>
        @forelse ($items as $index => $item)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $item->id_aset }}</td>
          <td>{{ $item->jenis_alat }}</td>
          <td>{{ $item->nama_alat }}</td>
          <td>{{ $item->merek }}</td>
          <td>{{ $item->type }}</td>
          <td>{{ $item->serial_number }}</td>
          <td>{{ $item->lokasi_alat }}</td>
          <td>{{ $item->tanggal_kalibrasi }}</td>
          <td>{{ $item->distributor }}</td>
          <td>{{ $item->alamat_distributor }}</td>
          <td>{{ $item->tlp_distributor }}</td>
          <td>{{ $item->email_distributor }}</td>
          <td>{{ $item->teknisi_distributor }}</td>
          <td>{{ $item->tlp_t_distributor }}</td>
          <td>{{ $item->no_sertifikat_kalibrasi }}</td>
          <td>{{ $item->teknisi_ppm }}</td>
          <td>{{ $item->harga_perolehan }}</td>
          <td>{{ $item->sumber_dana }}</td>
          <td>{{ $item->tahun_perolehan }}</td>
          <td>{{ $item->no_inventaris_1 }}, {{ $item->no_inventaris_2 }}</td>
          <td>{{ $item->umur_alat }}</td>
          <td>{{ $item->jadwal_pemeliharaan }}</td>
          <td>
            <a href="/dashboard/ppm/data_inventaris/qr_qode/{{ $item->id_aset }}" target="_blank"><button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" title="Buat QR">Buat</button></a>
          </td>
          <td scope="row">
            <a href="/dashboard/ppm/data_inventaris/cetak_aset/{{ $item->id_aset }}" target="_blank"><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Buat QR"><i class="fa fa-edit"></i> print</button></a>
            <a href="{{ route('registrasi',$item->id_aset) }}" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
            <form action="{{ url('/dashboard/ppm/registrasi', $item->id_aset) }}" method="POST" class="d-inline">
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
          <td class="text-center" colspan="7">Data Kosong</td>
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