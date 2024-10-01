@extends('layouts.admin')

@section('content')
@section('title', 'Data Aset Perbaikan')
<?php

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-note2"></i></div>
      <div class="header-title">
        <h1>Aset Perbaikan</h1>
        <small>Tabel Aset Perbaikan</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!--Tabel Perbaikan aset regis-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">

            <div class="panel-heading no-print">
              <div class="">
                <h1>Tabel Perbaikan Aset Teregistrasi</h1>
              </div>
            </div>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                    <!-- /.table-responsive -->
                    <table class="datatable table table-striped table-bordered" style="width:100%">
                      <thead class="table-light">
                        <th scope="col">No</th>
                        <th scope="col">Id_Perbaikan</th>
                        <th scope="col">ID_Aset</th>
                        <th scope="col">Tanggal_Perbaikan</th>
                        <th scope="col">Nama_Alat</th>
                        <th scope="col">Merek_Alat</th>
                        <th scope="col">Type_Alat</th>
                        <th scope="col">Serial_Number</th>
                        <th scope="col">Lokasi_Alat</th>
                        <th scope="col">Pelapor</th>
                        <th scope="col">Keterangan_Kondisi_Alat</th>
                        <th scope="col">Instalasi</th>
                        <th scope="col">Teknisi_1</th>
                        <th scope="col">Teknisi_2</th>
                        <th scope="col">Teknisi_3</th>
                        <th scope="col">Keluhan_Dari_alat</th>
                        <th scope="col">Korektif</th>
                      </thead>
                      <tbody>
                        @forelse ($asetPerbaikan as $index => $item)
                        <tr class="odd gradeX">
                          <td><?php echo $index  + 1 ?></td>
                          <td><?php echo $item['id_perbaikan_reg'] ?></td>
                          <td><?php echo $item['id_aset_reg'] ?></td>
                          <td><?php echo $item['tanggal_perbaikan_reg'] ?></td>
                          <td><?php echo $item['nama_alat_reg'] ?></td>
                          <td><?php echo $item['merek_alat_reg'] ?></td>
                          <td><?php echo $item['type_alat_reg'] ?></td>
                          <td><?php echo $item['serial_number_reg'] ?></td>
                          <td><?php echo $item['lokasi_alat_reg'] ?></td>
                          <td><?php echo $item['pelapor_reg'] ?></td>
                          <td><?php echo $item['keterangan_kondisi_alat_reg'] ?></td>
                          <td><?php echo $item['ka_instalasi_reg'] ?></td>
                          <td><?php echo $item['teknisi_1_reg'] ?></td>
                          <td><?php echo $item['teknisi_2_reg'] ?></td>
                          <td><?php echo $item['teknisi_3_reg'] ?></td>
                          <td><?php echo $item['keluhan_dari_alat_reg'] ?></td>
                          <td><?php echo $item['korektif_reg'] ?></td>
                        </tr>
                        @empty
                        <tr>
                          <td class="text-center" colspan="7">Data Kosong</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--Tabel Perbaikan aset regis end-->
    <!-- Form Pengisian -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Perbaikan Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/aset_teregistrasi') }}" class="form-inner"
                  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf


                  <div class="form-group row">
                    <label for="ID_Aset_reg" class="col-xs-3 col-form-label">ID Aset<i
                        class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_reg" type="text" class="form-control"
                        id="id_aset_reg" placeholder="Copy dan paste id aset di tabel ke sini" onkeyup="autofill()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-xs-3 col-form-label">Id Perbaikan<i
                        class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control"
                        id="Id_Perbaikan_reg" placeholder="Id Perbaikan"
                        value="{{ $kode_aset }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal
                      Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control"
                        id="Tanggal_Perbaikan_reg" placeholder="Tanggal Perbaikan"
                        value="<?php echo date(now()); ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i
                        class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control"
                        id="Nama_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i
                        class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_alat_reg" type="text" class="form-control"
                        id="Merek_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i
                        class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_alat_reg" type="text" class="form-control"
                        id="Type_Alat_reg" placeholder="Terisi Otomatis" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_reg" class="col-xs-3 col-form-label">Serial Number<i
                        class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Serial_Number_reg" type="text" class="form-control"
                        id="Serial_Number_reg" placeholder="Terisi Otomatis" value=""
                        readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i
                        class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_reg" type="text" class="form-control"
                        id="Lokasi_Alat_reg" placeholder="Terisi Otomatis" value=""
                        readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor</label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control"
                        id="Pelapor_reg" placeholder="Pelapor (user yang melaporkan kerusakan alat)">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keterangan_Kondisi_Alat_reg"
                      class="col-xs-3 col-form-label">Keterangan Kondisi Alat</label>
                    <div class="col-xs-9">
                      <select name="keterangan_kondisi_alat_reg" class="form-control"
                        id="keterangan_kondisi_alat_reg">
                        <option>-- Pilih Keterangan --</option>
                        <option value="Selesai, Alat Dikembalikan">Selesai, Alat Dikembalikan
                        </option>
                        <option value="Alat Dalam Perbaikan">Alat Dalam Perbaikan</option>
                        <option value="Alat Dilanjutkan Perbaikan Kerekanan">Alat Dilanjutkan
                          Perbaikan Kerekanan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Ka_Instalasi_reg" class="col-xs-3 col-form-label">Kepala
                      Ruangan</label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control"
                        id="Ka_Instalasi_reg" placeholder="Kepala Ruangan yang betanggung jawab">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i
                        class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="teknisi_1_reg" class="form-control" id="Teknisi_1_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_2_reg" class="col-xs-3 col-form-label">Teknisi 2</label>
                    <div class="col-xs-9">
                      <select name="teknisi_2_reg" class="form-control" id="Teknisi_2_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_3_reg" class="col-xs-3 col-form-label">Teknisi 3</label>
                    <div class="col-xs-9">
                      <select name="teknisi_3_reg" class="form-control" id="Teknisi_3_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sperpart</label>
                    <div class="col-xs-9">
                      <input name="suku_cadang" type="text" class="form-control"
                        id="nama_sukucadang1" placeholder="Nama Sperpart yang digunakan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart</label>
                    <div class="col-xs-9">
                      <input name="volume" type="text" class="form-control" id="volume1"
                        placeholder="Volume sperpart/ banyak yang digunakan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan Sperpart
                    </label>
                    <div class="col-xs-9">
                      <input name="harga_satuan" type="text" class="form-control"
                        id="harga_satuan1" placeholder="Harga Satuan dari sperpart">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart
                    </label>
                    <div class="col-xs-9">
                      <input name="jumlah_harga" type="text" class="form-control"
                        id="jumlah_harga1" placeholder="Jumlah Harga Sperpart">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keluhan_Dari_alat_reg" class="col-xs-3 col-form-label">Keluhan
                      Dari Alat</label>
                    <div class="col-xs-9">
                      <input name="keluhan_dari_alat_reg" type="text" class="form-control"
                        id="Keluhan_Dari_alat_reg" placeholder="Kerusakan yang ada dialat">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Korektif_reg" class="col-xs-3 col-form-label">Korektif</label>
                    <div class="col-xs-9">
                      <input name="korektif_reg" type="text" class="form-control"
                        id="Korektif_reg" placeholder="Solusi yang harus dilakukan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
                        <div class="or"></div>
                        <button type="reset" class="ui button"
                          type="submit">Reset</button>
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
    <!-- Form Pengisian end-->
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection