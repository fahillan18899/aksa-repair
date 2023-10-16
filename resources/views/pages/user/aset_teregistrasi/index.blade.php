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
                    @forelse ($registrasis as $index => $item)
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
                        <a data-toggle="tooltip" data-placement="top" title="Edit" href="/dashboard_user/qr_qode/{{ $item->id_aset }}" target="_blank"><button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" title="Buat QR">Buat</button></a>
                      </td>
                      <td scope="row">
                        <a data-toggle="tooltip" data-placement="top" title="Print" href="/dashboard/ppm/data_inventaris/cetak_aset/{{ $item->id_aset }}" target="_blank"><button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Buat QR"><i class="fa fa-print"></i> print</button></a>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="7">Data Kosong</td>
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
                      <input name="tanggal_perbaikan_reg" type="text" class="form-control" id="Tanggal_Perbaikan_reg" placeholder="Tanggal Perbaikan" value="<?php echo date(now()) ?>" readonly>
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
                    <label for="Ka_Instalasi_reg" class="col-xs-3 col-form-label">Ka Instalasi</label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="Ka_Instalasi_reg" placeholder="Ka Instalasi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="teknisi_1_reg" class="form-control" id="Teknisi_1_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach($teknisis as $teknisi)
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
                        @foreach($teknisis as $teknisi)
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
                        @foreach($teknisis as $teknisi)
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
        <th scope="col">Tombol_Eksekusi</th>
        <th scope="col">Tombol_Eksekusi</th>
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
          <td><?php echo $item['kode_rs'] ?></td>
          <td>
            <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('update_perbaikan.edit', $item->id_perbaikan_reg) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

            <a data-toggle="tooltip" data-placement="top" title="Print" href="/dashboard/ppm/aset_teregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_reg }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
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
  </div> <!-- /.content -->




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