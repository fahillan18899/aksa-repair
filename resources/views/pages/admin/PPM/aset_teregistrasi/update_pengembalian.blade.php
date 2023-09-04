@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>FORM EDIT PENGEMBALIAN REGISTRASI</h1>
        <small>Form Teregistrasi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    <!-- content -->

    <!-- content -->
    <div class="row">
      <div class="col-sm-3">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Pengembalian Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('update_pengembalian.update' ,$item->id_perbaikan_reg) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="kode_rs" value="asd" />

                  <div class="form-group row">
                    <label for="id_perbaikan_reg" class="col-xs-3 col-form-label">id perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="id_perbaikan_reg2" placeholder="id perbaikan" value="<?php echo $item['id_perbaikan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Id_Aset_reg" class="col-xs-3 col-form-label">Id Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_reg" type="text" class="form-control" id="Id_Aset_reg2" placeholder="Id Aset" value="<?= $item['id_aset_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat_reg" class="col-xs-3 col-form-label">nama alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control" id="nama_alat_reg2" placeholder="nama alat" value="<?= $item['nama_alat_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_perbaikan_reg" class="col-xs-3 col-form-label">tanggal perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="tanggal_perbaikan_reg2" placeholder="tanggal perbaikan" value="<?= $item['tanggal_perbaikan_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek_reg" class="col-xs-3 col-form-label">merek<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_reg" type="text" class="form-control" id="merek_reg2" placeholder="merek" value="<?= $item['merek_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tipe_reg" class="col-xs-3 col-form-label">Type<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tipe_reg" type="text" class="form-control" id="tipe_reg2" placeholder="Type" value="<?= $item['tipe_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_pengembalian_reg" class="col-xs-3 col-form-label">tanggal pengembalian<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_pengembalian_reg" type="text" class="form-control" id="tanggal_pengembalian_reg2" placeholder="tanggal pengembalian" value="<?= $item['tanggal_pengembalian_reg'] ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_reg" class="col-xs-3 col-form-label">serial number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number_reg" type="text" class="form-control" id="serial_number_reg2" placeholder="serial number" value="<?= $item['serial_number_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pelapor_reg" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="pelapor_reg2" placeholder="Pelapor" value="<?= $item['pelapor_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lokasi_alat_reg" class="col-xs-3 col-form-label">Lokasi Alat </label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat_reg" class="form-control" id="lokasi_alat_reg">
                        <option>Pilih Lokasi Alat</option>
                        @foreach($ruangans as $ruangan)
                        <option value="<?= $ruangan['lokasi_alat']; ?>"
                        <?php if ($ruangan['lokasi_alat'] == $ruangan['lokasi_alat']) echo "selected" ?>
                        ><?= $ruangan['lokasi_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="keterangan_reg" class="col-xs-3 col-form-label">keterangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="keterangan_reg" type="text" class="form-control" id="keterangan_reg2" placeholder="keterangan" value="<?= $item['keterangan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penerima_reg" class="col-xs-3 col-form-label">peneriman<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penerima_reg" type="text" class="form-control" id="penerima_reg2" placeholder="penerima" value="<?= $item['penerima_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_perbaikan_reg" class="col-xs-3 col-form-label">harga perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="harga_perbaikan_reg" type="text" class="form-control" id="harga_perbaikan_reg2" placeholder="harga perbaikan" value="<?= $item['harga_perbaikan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi1_reg" class="col-xs-3 col-form-label">Teknisi 1</label>
                    <div class="col-xs-9">
                      <select name="teknisi1_reg" class="form-control" id="teknisi1_reg">
                      @foreach($teknisis as $teknisi)
                        <option>-- Pilih Teknisi --</option>
                        <option value="<?= $teknisi['nama_teknisi']; ?>"
                        <?php if ($teknisi['nama_teknisi'] == $teknisi['nama_teknisi']) echo "selected" ?>
                        ><?= $teknisi['nama_teknisi']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <select name="teknisi2_reg" class="form-control" id="teknisi2_reg">
                      @foreach($teknisis as $teknisi)
                        <option>-- Pilih Teknisi --</option>
                        <option value="<?= $teknisi['nama_teknisi']; ?>"
                        <?php if ($teknisi['nama_teknisi'] == $teknisi['nama_teknisi']) echo "selected" ?>
                        ><?= $teknisi['nama_teknisi']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="teknisi3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9">
                      <select name="teknisi3_reg" class="form-control" id="teknisi3_reg">
                      @foreach($teknisis as $teknisi)
                        <option>-- Pilih Teknisi --</option>
                        <option value="<?= $teknisi['nama_teknisi']; ?>"
                        <?php if ($teknisi['nama_teknisi'] == $teknisi['nama_teknisi']) echo "selected" ?>
                        ><?= $teknisi['nama_teknisi']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ka_instalasi_reg" class="col-xs-3 col-form-label">KA Instalasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="ka_instalasi_reg2" placeholder="KA Instalasi" value="<?= $item['ka_instalasi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penyebab_kerusakan_reg" class="col-xs-3 col-form-label">Penyebab Kerusakan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penyebab_kerusakan_reg" type="text" class="form-control" id="penyebab_kerusakan_reg2" placeholder="Penyebab Kerusakan" value="<?= $item['penyebab_kerusakan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="solusi_perbaikan_reg" class="col-xs-3 col-form-label">Solusi_Perbaikan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="solusi_perbaikan_reg" type="text" class="form-control" id="solusi_perbaikan_reg2" placeholder="Solusi_Perbaikan" value="<?= $item['solusi_perbaikan_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="penguji_suku_cadang_reg" class="col-xs-3 col-form-label">Penguji Suku Cadang <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="penguji_suku_cadang_reg" type="text" class="form-control" id="penguji_suku_cadang_reg2" placeholder="Penguji Suku Cadang" value="<?= $item['penguji_suku_cadang_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hasil_verifikasi_reg" class="col-xs-3 col-form-label">Hasil Verifikasi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="hasil_verifikasi_reg" type="text" class="form-control" id="hasil_verifikasi_reg2" placeholder="Hasil_Verifikasi" value="<?= $item['hasil_verifikasi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hasil_fungsi_reg" class="col-xs-3 col-form-label">Hasil Fungsi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="hasil_fungsi_reg" type="text" class="form-control" id="hasil_fungsi_reg2" placeholder="Hasil Fungsi" value="<?= $item['hasil_fungsi_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pengganti_suku_cadang_reg" class="col-xs-3 col-form-label"> Pengganti_Suku_Cadang<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="pengganti_suku_cadang_reg" type="text" class="form-control" id="pengganti_suku_cadang_reg2" placeholder="Pengganti_Suku_Cadang" value="<?= $item['pengganti_suku_cadang_reg'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button" type="submit">Edit</button>
                        <div class="or"></div>
                        <a href=""><button type="button" class="ui button">Kembali</button></a>
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



  </div> <!-- /.content -->




</div> <!-- /.content-wrapper -->

@endsection