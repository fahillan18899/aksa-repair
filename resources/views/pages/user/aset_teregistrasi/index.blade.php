@extends('layouts.user')

@section('content')
@section('title', 'Aset Teregistrasi')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>MENU FORM TEREGISTRASI</h1>
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
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <table id="table-inventaris-user" class="datatable table table-striped table-bordered" style="width:100%">
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
                    <th class="none">Jadwal</th>
                    <th>Tombol_Aksi_Tabel</th>
                  </thead>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3">
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <h2 class="text-center">Scan QR Code</h2>
          </div>
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div id="app">
                  <div class="preview-container">
                    <video id="preview"></video>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Perbaikan Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard_user/perbaikan_teregistrasi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf


                  <div class="form-group row">
                    <label for="ID_Aset_reg" class="col-xs-3 col-form-label">ID Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_reg" type="text" class="form-control" id="id_aset_reg" placeholder="ID Aset" onkeyup="autofill()">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_perbaikan_reg" type="text" class="form-control" id="Id_Perbaikan_reg" placeholder="Id Perbaikan" value="{{ $kode_aset }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="Tanggal_Perbaikan_reg" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                                                                                              echo date(now()) ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat_reg" type="text" class="form-control" id="Nama_Alat_reg" placeholder="Nama Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek_alat_reg" type="text" class="form-control" id="Merek_Alat_reg" placeholder="Merek Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type_alat_reg" type="text" class="form-control" id="Type_Alat_reg" placeholder="Type Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="serial_number_reg" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="Serial_Number_reg" type="text" class="form-control" id="Serial_Number_reg" placeholder="Serial Number" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lokasi_alat_reg" type="text" class="form-control" id="Lokasi_Alat_reg" placeholder="Lokasi Alat" value="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor</label>
                    <div class="col-xs-9">
                      <input name="pelapor_reg" type="text" class="form-control" id="Pelapor_reg" placeholder="Pelapor">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keterangan_Kondisi_Alat_reg" class="col-xs-3 col-form-label">Keterangan Kondisi Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="keterangan_kondisi_alat_reg" class="form-control" id="keterangan_kondisi_alat_reg">
                        <option>-- Pilih Keterangan --</option>
                        <option value="Selesai, Alat Dikembalikan">Selesai, Alat Dikembalikan</option>
                        <option value="Alat Dalam Perbaikan">Alat Dalam Perbaikan</option>
                        <option value="Alat Dilanjutkan Perbaikan Kerekanan">Alat Dilanjutkan Perbaikan Kerekanan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Ka_Instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan</label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="Ka_Instalasi_reg" placeholder="Kepala Ruangan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="teknisi_1_reg" class="form-control" id="Teknisi_1_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi']; ?>"><?= $teknisi['nama_teknisi']; ?></option>
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
                        <option value="<?= $teknisi['nama_teknisi']; ?>"><?= $teknisi['nama_teknisi']; ?></option>
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
                        <option value="<?= $teknisi['nama_teknisi']; ?>"><?= $teknisi['nama_teknisi']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Keluhan_Dari_alat_reg" class="col-xs-3 col-form-label">Keluhan Dari Alat</label>
                    <div class="col-xs-9">
                      <input name="keluhan_dari_alat_reg" type="text" class="form-control" id="Keluhan_Dari_alat_reg" placeholder="Keluhan Dari Alat">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Korektif_reg" class="col-xs-3 col-form-label">Korektif</label>
                    <div class="col-xs-9">
                      <input name="korektif_reg" type="text" class="form-control" id="Korektif_reg" placeholder="Korektif">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
                        <div class="or"></div>
                        <button type="reset" class="ui button" type="submit">Reset</button>
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
        <th scope="col">No</th>
        <th scope="col">Id_Perbaikan</th>
        <th scope="col">ID Aset</th>
        <th scope="col">Tanggal Perbaikan</th>
        <th scope="col">Nama Alat</th>
        <th scope="col">Merek Alat</th>
        <th scope="col">Type Alat</th>
        <th scope="col">Serial Number</th>
        <th scope="col">Lokasi Alat</th>
        <th scope="col">Pelapor</th>
        <th scope="col">Keterangan Kondisi Alat</th>
        <th scope="col">Kepala Ruangan</th>
        <th scope="col">Teknisi 1</th>
        <th scope="col">Teknisi 2</th>
        <th scope="col">Teknisi 3</th>
        <th scope="col">Keluhan Dari alat</th>
        <th scope="col">Korektif</th>
        <!--<th scope="col">Tombol Eksekusi</th>
        <th scope="col">Tombol Eksekusi</th>-->
      </thead>
      <tbody>
        @forelse ($items as $index => $item)
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
          <!--<td><?php echo $item['kode_rs'] ?></td>
          <td>
            <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('update_perbaikan.edit', $item->id_perbaikan_reg) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

            <a data-toggle="tooltip" data-placement="top" title="Print" href="/dashboard/ppm/aset_teregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_reg }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
          </td>-->
        </tr>

        @empty
        <tr>
          <td class="text-center" colspan="7">Data Kosong</td>
        </tr>
        @endforelse
      </tbody>
    </table>
    <!--TABEL-->
  </div> <!-- /.content -->
  <script type="text/javascript">
      $(document).ready(function() {
        $('#table-inventaris-user').DataTable({
          processing: true,
          responsive: true,
          serverSide: true,
          ajax: '{{ url('/dashboard_user/aset') }}',
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
                return `<a href=\"/dashboard_user/qr_qode/${data}"\"  target=\"_blank\"><button type=\"button\" class=\"btn btn-outline-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Print\"><i class=\"fa fa-print\"></i> Cetak QR</button></a>`
              }

            },

          ],
        });
      })
    </script>



</div> <!-- /.content-wrapper -->

<!-- <script src="./assets/js/bs-5.js"></script>
<script src="../js/scripts.js"></script>
<script src="./assets/libraries/jquery.min.js"></script> -->
@endsection

@push('addon-script')

<script type="text/javascript">
  function autofill() {
    let idars = $("#id_aset_reg").val();


    $.ajax({
      url: '{{ url("/dashboard_user/autofill/") }}/' + idars,
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        $("#Nama_Alat_reg").val(data.nama_alat_reg);
        $("#Merek_Alat_reg").val(data.merek_alat_reg);
        $("#Serial_Number_reg").val(data.serial_number_reg);
        $("#Lokasi_Alat_reg").val(data.lokasi_alat_reg);
        $("#Type_Alat_reg").val(data.type);
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
@endpush