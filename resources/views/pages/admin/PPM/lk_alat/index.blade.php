@extends('layouts.admin')

@section('content')
@section('title', 'LK Alat Kesehatan')
<style>
  input[readonly] {
    cursor: not-allowed;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-cogs"></i></div>
      <div class="header-title">
        <h1>LK Alat Kesehatan</h1>
        <small>Form LK Alat Kesehatan</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <!--Anaesthesi-->
    <div id="Anaesthesi" class="tabcontent">
      <!------>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">

            <div class="panel-heading no-print">
              <h1>Form Pemeliharaan Alkes</h1>
            </div>

            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-md-12">
                  <form action="{{ url('/dashboard/ppm/tambahAnesthesi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    @method('POST')

                    <!--A PENDATAAN ALAT -->
                    <div class="form-group row">
                      <label for="data_lkAlat" class="col-xs-3 col-form-label">Data Alat </label>
                      <div class="col-xs-9">
                        <select name="data_lkAlat" class="form-control" id="data_lkAlat">
                          <option>-- Pilih Data Alat --</option>
                          @foreach($Inv as $Inv)
                          <option value="<?= $Inv['id_aset']; ?>">
                            <?= $Inv['id_aset']; ?>_<?= $Inv['nama_alat']; ?>_<?= $Inv['serial_number']; ?>_<?= $Inv['lokasi_alat']; ?></option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <h4><b>A. PENDATAAN ALAT</b></h4>
                    <div class="form-group row" style="border-style: groove; padding: 15px;">
                      <div class="row">
                        <div class="col-sm-3">
                          <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                        </div>
                        <div class="col-sm-3">
                          <input name="id_alat" id="id_alat" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                        </div>
                        <div class="col-sm-3">
                          <label for="merek_tipe" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                        </div>
                        <div class="col-sm-3">
                          <input name="merek_tipe" id="merek_tipe" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                        </div>
                      </div>
                      <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-3">
                          <label for="ruangan" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                        </div>
                        <div class="col-sm-3">
                          <input name="ruangan" id="ruangan" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                        </div>
                        <div class="col-sm-3">
                          <label for="no_seri" class="form-label">No Seri<i class="text-danger">*</i></label>
                        </div>
                        <div class="col-sm-3">
                          <input name="no_seri" id="no_seri" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                        </div>
                      </div>
                      <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-3">
                          <label for="operator_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                        </div>
                        <div class="col-sm-3">
                          <input name="operator_alat" id="operator_alat" type="text" class="form-control"
                          placeholder="Isi sesuai dengan data">
                        </div>
                        <div class="col-sm-3">
                          <label for="tanggal" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                        </div>
                        <div class="col-sm-3">
                          <input name="tanggal" id="tanggal" type="text" class="form-control"
                            value="<?php date_default_timezone_set('Asia/Jakarta');
                                    echo date(now()) ?>" readonly>
                        </div>
                      </div>
                      <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-3">
                          <label for="alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                        </div>
                        <div class="col-sm-3">
                          <input name="alat" id="alat" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                        </div>
                        <div class="col-sm-3">
                          <label for="pelaksana" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                        </div>
                        <div class="col-sm-3">
                          <input name="pelaksana" id="pelaksana" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                        </div>
                      </div>
                    </div>
                    <!--A PENDATAAN ALAT N-->

                    <!--B ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                      <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>
                      <a class="btn btn-primary" id="addRow" style="margin-bottom: 5px;">Tambah Baris</a>
                      <table class="table table-hover table-bordered" id="dynamicTable" style="width:100%">
                        <thead>
                          <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>Serial Number</b></td>
                            <td align="center"><b>Action</b></td>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Inputan Dinamis -->
                        </tbody>
                      </table>
                    <!--B ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                    <!--C KONDISI RUANGAN -->
                    <h4><b>C. KONDISI RUANGAN</b></h4>
                    <table class="table table-hover table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <td align="center"><b>Parameter</b></td>
                          <td align="center"><b>Terukur</b></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><b>Suhu</b></td>
                          <td align="center"><input name="suhu" type="number"
                          class="form-control form-control-sm" placeholder="Isi dengan angka"></td>
                        </tr>
                        <tr>
                          <td><b>Kelembapan nisbi</b></td>
                          <td align="center"><input name="kelembapan" type="number" 
                          class="form-control form-control-sm" placeholder="Isi dengan angka"></td>
                        </tr>
                      </tbody>
                    </table>
                    <!--C KONDISI RUANGAN N-->

                    <!--D PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                    <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>
                    <a class="btn btn-primary" id="addRow2" style="margin-bottom: 5px;">Tambah Baris</a>
                    <table class="table table-hover table-bordered" id="dynamicTable2" style="width:100%">
                      <thead>
                        <tr>
                          <td align="center"><b>Deskripsi</b></td>
                          <td align="center"><b>Baik / Rusak</b></td>
                          <td align="center"><b>Keterangan</b></td>
                          <td align="center"><b>Action</b></td>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Inputan Dinamis -->
                      </tbody>
                    </table>
                    <!--D PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                    <!--E PENGUKURAN KESELAMATAN LISTRIK -->
                    <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                    <table class="table table-hover table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <td align="center"><b>Parameter</b></td>
                          <td align="center"><b>Terukur</b></td>
                          <td align="center"><b>Ambang Batas</b></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><b>Main Voltage / Live-Neutral</b></td>
                          <td align="center"><input name="listrik_1" class="form-control form-control-sm" type="text"></td>
                          <td align="center">220 ± 10% V</td>
                        </tr>
                        <tr>
                          <td><b>Protectiv Earth Resistance</b></td>
                          <td align="center"><input name="listrik_2" class="form-control form-control-sm" type="text"></td>
                          <td align="center"><u><</u> 0,2 Ω</td>
                        </tr>
                        <tr>
                          <td><b>Insulation Resistance / Mains-PE</b></td>
                          <td align="center"><input name="listrik_3" class="form-control form-control-sm" type="text"></td>
                          <td align="center"><u>></u> 2 MΩ</td>
                        </tr>
                        <tr>
                          <td><b>Earth Leakage Current Normal Polarity Closed Neutral</b></td>
                          <td align="center"><input name="listrik_4" class="form-control form-control-sm" type="text"></td>
                          <td align="center"><u><</u> 500 μA</td>
                        </tr>
                      </tbody>
                    </table>
                    <!--E PENGUKURAN KESELAMATAN LISTRIK N-->

                    <!--F PENGUKURAN KINERJA -->
                      <!-- empty -->
                    <!--F PENGUKURAN KINERJA N-->

                    <!--F KESIMPULAN -->
                    <h4><b>F. KESIMPULAN</b></h4>
                    <table class="table table-hover table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <td align="center"><b>Parameter</b></td>
                          <td align="center"><b>Hasil Pengamatan</b></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><b>Kondisi fisik dan fungsi</b></td>
                          <td align="center"><input name="kesimpulan_fisik_fungsi" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td><b>Keselamatan Listrik</b></td>
                          <td align="center"><input name="kesimpulan_listrik" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td><b>Kinerja Alat Kesehatan</b></td>
                          <td align="center"><input name="kesimpulan_kinerja" type="text" class="form-control"></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="form-group row">
                      <label for="catatan" class="col-xs-3 col-form-label">Catatan<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <textarea name="catatan" class="form-control" placeholder="Catatan" id="catatan" maxlength="255" rows="5"></textarea>
                      </div>
                    </div>
                    <!--F KESIMPULAN -->
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
              </div>
              <!--TABEL-->
              <table class="datatable table table-striped table-bordered" id="scollDatatable" style="width:100%">
                <thead class="table-light">
                  <tr>
                    <th scope="col">ID_Alat</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Operator</th>
                    <th scope="col">Nama_Alat</th>
                    <th scope="col">Merek/Tipe</th>
                    <th scope="col">No_Seri</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Tombol_Aksi_Table</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item)
                  <tr>
                    <td align="center"> {{ $item->id_alat }}</td>
                    <td align="center"> {{ $item->ruangan }}</td>
                    <td align="center"> {{ $item->operator_alat }}</td>
                    <td align="center"> {{ $item->alat }}</td>
                    <td align="center"> {{ $item->merek_tipe }}</td>
                    <td align="center"> {{ $item->no_seri }}</td>
                    <td align="center"> {{ $item->tanggal }}</td>
                    <td>
                      <!-- <a href="/dashboard/ppm/lk_alat/edit_anestesi/{{ $item->id }}/edit" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="Left" title="Edit" style="cursor: not-allowed;"></style> <i class="fa fa-edit"></i></a> -->
                      <a href="/dashboard/ppm/lk_alat/show_anestesi/{{ $item->id }}/show" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="Left" title="Detail"> <i class="fa fa-eye"></i></a>
                      <form action="{{ url('/dashboard/ppm/tambahAnesthesi', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="Bottom" title="Hapus">
                          <i class="fa fa-trash"></i>
                        </button>
                    </td>
                    </form>
                    </td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Anaesthesi End-->

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@push('addon-script')
<script>

  // ** function autofill Anesthesi ** //
  $('select[name="data_lkAlat"]').on('change', function() {
    var lkAlatInv = $(this).val();
    console.log(lkAlatInv);
    if (lkAlatInv) {
      $.ajax({
        url: '/dashboard/ppm/getLkAlat/' + lkAlatInv,
        type: "GET",
        dataType: "json",
        success: function(data) {
          console.log(data);
          $.each(data, function(key, value) {
            $('input[id="id_alat"]').val(value.id_aset);
            $('input[id="ruangan"]').val(value.lokasi_alat);
            $('input[id="alat"]').val(value.nama_alat);
            $('input[id="merek_tipe"]').val(value.merek);
            $('input[id="no_seri"]').val(value.serial_number);
          });
        }
      });
    } else {
      $('input[id="id_alat"]').empty();
      $('input[id="ruangan"]').empty();
      $('input[id="alat"]').empty();
      $('input[id="merek_tipe"]').empty();
      $('input[id="no_seri"]').empty();
    }
  });
  // ** function autofill Anesthesi N ** //

</script>

<script>
  $(document).ready(function() {
    let rowCount = 1; // Menyimpan jumlah baris
    const maxRows = 5; // Batas maksimal baris

    // Fungsi untuk menambah baris ke tabel
    $("#addRow").click(function() {
      if(rowCount >= maxRows) {
        Swal.fire({
          icon: "warning",
          title: "Batas Masksimal",
          text: "Anda hanya bisa menambah sampai 4 baris", 
        });
        return;
      }

      let newRow = 
      `<tr>
        <td align="center"><input class="form-control form-control-sm" type="text" name="alat_ukur[${rowCount}][nama]" placeholder="Nama alat ukur"></td>
        <td align="center"><input class="form-control form-control-sm" type="text" name="alat_ukur[${rowCount}][merek]" placeholder="Merek alat ukur"></td>
        <td align="center"><input class="form-control form-control-sm" type="text" name="alat_ukur[${rowCount}][type]" placeholder="Tipe alat ukur"></td>
        <td align="center"><input class="form-control form-control-sm" type="text" name="alat_ukur[${rowCount}][noseri]" placeholder="No seri alat ukur"></td>
        <td><button type="button" class="removeRow">Hapus</button></td>
      </tr>`;

      // Menambah baris baru ke tbody
      $("#dynamicTable tbody").append(newRow);
      rowCount++; // Menambah nomor ID untuk input berikutnya
    });

    // Fungsi untuk menghapus baris
    $(document).on("click", ".removeRow", function() {
      $(this).closest("tr").remove();
    });
  });
</script>

<script>
  $(document).ready(function() {
    let rowCount = 1; // Menyimpan jumlah baris
    const rowMax = 6; // Batas maksimal baris

    // Fungsi untuk menambah baris ke tabel
    $("#addRow2").click(function() {
      if(rowCount >= rowMax){
        Swal.fire({
          icon: "warning",
          title: "Batas Maksimal",
          text: "Anda hanya bisa menambah sampai 5 baris",
        })
      }
      let newRow = 
      `<tr>
        <td align="center"><input name="pemeriksa_kondisi[${rowCount}][deskrip]" placeholder="Komponen diperiksa" class="form-control form-control-sm" type="text"></td>
        <td align="center"><input name="pemeriksa_kondisi[${rowCount}][kondisi]" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
        <td align="center"><input name="pemeriksa_kondisi[${rowCount}][keterangan]" placeholder="keterangan kondisi fisik & fungsi" class="form-control form-control-sm" type="text"></td>
        <td><button type="button" class="removeRow2">Hapus</button></td>
      </tr>`;

      // Menambah baris baru ke tbody
      $("#dynamicTable2 tbody").append(newRow);
      rowCount++; // Menambah nomor ID untuk input berikutnya
    });

    // Fungsi untuk menghapus baris
    $(document).on("click", ".removeRow2", function() {
      $(this).closest("tr").remove();
    });
  });
</script>
@endpush
@endsection