@extends('layouts.admin')

@section('content')
@section('title', 'Edit Registrasi')
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
    <!-- alert message -->




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
                <form action="{{ url('dashboard/ppm/registrasi',$item->id_aset) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">ID Aset <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input type="text" class="form-control" id="firstname" placeholder="ID Aset" value="{{ $item->id_aset }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jenis alat" class="col-xs-3 col-form-label">Jenis Alat </label>
                    <div class="col-xs-9">
                      <select name="jenis_alat" class="form-control" id="Jenis_Alat">
                        <option value="">Pilih Jenis Alat</option>
                        <option value="Medis" <?php if ($item['jenis_alat'] == 'Medis') echo "selected" ?>>Medis</option>
                        <option value="Non Medis" <?php if ($item['jenis_alat'] == 'Non Medis') echo "selected" ?>>Non Medis</option>
                        <option value="Milik KSO" <?php if ($item['jenis_alat'] == 'Milik KSO') echo "selected" ?>>Milik KSO</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat </label>
                    <div class="col-xs-9">
                      <select name="nama_alat" class="form-control" id="Nama_Alat">
                        @foreach($alats as $alat)
                        <option value="<?= $alat['nama_alat']; ?>"><?= $alat['nama_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class=" form-group row">
                    <label for="Merek" class="col-xs-3 col-form-label">Merek <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek" class="form-control" type="text" placeholder="Merek" id="Merek" value="<?= $item['merek'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type" class="form-control" type="text" placeholder="Type" id="Type" value="<?= $item['type'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number" class="col-xs-3 col-form-label">Serial Number <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number" class="form-control" type="text" placeholder="Serial Number" id="Serial_Number" value="<?= $item['serial_number'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat" class="form-control" id="lokasi_alat">
                        @foreach($ruangans as $ruangan)
                        <option value="<?= $ruangan['lokasi_alat']; ?>"><?= $ruangan['lokasi_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Kalibrasi" class="col-xs-3 col-form-label">Tanggal Kalibrasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_kalibrasi" type="date" class="form-control" id="Tanggal_Kalibrasi" placeholder="Tanggal_Kalibrasi" value="<?= $item['tanggal_kalibrasi'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jadwal_pemeliharaan" class="col-xs-3 col-form-label">jadwal pemeliharaan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="jadwal_pemeliharaan" type="date" class="form-control" id="jadwal_pemeliharaan" placeholder="jadwal_pemeliharaan" value="<?= $item['jadwal_pemeliharaan'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Distributor" class="col-xs-3 col-form-label">Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="distributor" type="text" class="form-control" id="Distributor" placeholder="Distributor" value="<?= $item['distributor'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Alamat_Distributor" class="col-xs-3 col-form-label">Alamat Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="alamat_distributor" type="text" class="form-control" id="Alamat_Distributor" placeholder="Alamat Distributor" value="<?= $item['alamat_distributor'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="TLP_Distributor" class="col-xs-3 col-form-label">Telphone_Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tlp_distributor" type="text" class="form-control" id="TLP_Distributor" placeholder="Telphone Distributor" value="<?= $item['tlp_distributor'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Email_Distributor" class="col-xs-3 col-form-label">Email Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="email_distributor" type="text" class="form-control" id="Email_Distributor" placeholder="Email Distributor" value="<?= $item['email_distributor'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_Distributor" class="col-xs-3 col-form-label">Teknisi Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_distributor" type="text" class="form-control" id="Teknisi_Distributor" placeholder="Teknisi Distributor" value="<?= $item['teknisi_distributor'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="TLP_T_Distributor" class="col-xs-3 col-form-label">Telephone Teknisi Distributor <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tlp_t_distributor" type="text" class="form-control" id="TLP_T_Distributor" placeholder="Telephone Teknisi Distributor" value="<?= $item['tlp_t_distributor'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="No_Sertifikat_Kalibrasi" class="col-xs-3 col-form-label">No Sertifikat Kalibrasi<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="no_sertifikat_kalibrasi" type="text" class="form-control" id="No_Sertifikat_Kalibrasi" placeholder="No Sertifikat Kalibrasi" value="<?= $item['no_sertifikat_kalibrasi'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_PPM" class="col-xs-3 col-form-label">Teknisi PPM <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="teknisi_ppm" type="text" class="form-control" id="Teknisi_PPM" placeholder="Teknisi PPM" value="<?= $item['teknisi_ppm'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Harga_Perolehan" class="col-xs-3 col-form-label">Harga Perolehan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="harga_perolehan" type="text" class="form-control" id="Harga_Perolehan" placeholder="Harga Perolehan" value="<?= $item['harga_perolehan'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Sumber_Dana" class="col-xs-3 col-form-label">Sumber Dana <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="sumber_dana" type="text" class="form-control" id="Sumber_Dana" placeholder="Sumber Dana" value="<?= $item['sumber_dana'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tahun_perolehan" class="col-xs-3 col-form-label">Tahun Perolehan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Tahun_Perolehan" type="text" class="form-control" id="Tahun_Perolehan" placeholder="Tahun Perolehan" value="<?= $item['tahun_perolehan'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="umur_alat" class="col-xs-3 col-form-label">umur alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="umur_alat" type="text" class="form-control" id="umur_alat" placeholder="umur alat" value="<?= $item['umur_alat'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_inventaris_1" class="col-xs-3 col-form-label">no inventaris 1 <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="no_inventaris_1" type="text" class="form-control" id="no_inventaris_1" placeholder="no inventaris 1" value="<?= $item['no_inventaris_1'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="no_inventaris_2" class="col-xs-3 col-form-label">no inventaris 2 <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="no_inventaris_2" type="text" class="form-control" id="no_inventaris_2" placeholder="no inventaris 2" value="<?= $item['no_inventaris_2'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penyusutan_aset" class="col-xs-3 col-form-label">penyusutan aset <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penyusutan_aset" type="text" class="form-control" id="penyusutan_aset" placeholder="penyusutan aset" value="<?= $item['penyusutan_aset'] ?>">
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
    <script type="text/javascript">

    </script>

  </div> <!-- /.content -->
</div>
@endsection