@extends('layouts.teknisi')

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
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        
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
                                        <video id="preview_teknisi"></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default thumbnail">

                    <div class="panel-heading no-print">
                        <div class="row">
                            <div class="col-md-5">
                                <h2>Tabel Permintaan Perbaikan</h2>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">

                                <!--TABEL-->
                                <table class="datatable table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Id Aset</th>
                                            <th scope="col">Nama Alat</th>
                                            <th scope="col">Merek Alat</th>
                                            <th scope="col">Type Alat</th>
                                            <th scope="col">Serial Number</th>
                                            <th scope="col">Pelapor</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Tombol_Aksi_Table</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($itemPesanan as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td onclick="copy(this)"><span>{{ $item->id }}<span></td>
                                                <td>{{ $item->nama_req }}</td>
                                                <td>{{ $item->merek_req }}</td>
                                                <td>{{ $item->type_req }}</td>
                                                <td>{{ $item->sn_req }}</td>
                                                <td>{{ $item->pelapor_req }}</td>
                                                <td>{{ $item->tanggal_req }}</td>
                                                <td>
                                                    <form
                                                        action="{{ url('/dashboard_teknisi/perbaikan_teregistrasi', $item->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-xs"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="validasi">
                                                            Validasi perbaikan
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
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default thumbnail">

                    <div class="panel-heading no-print">
                        <h1>Form Perbaikan Alat Teregistrasi</h1>
                    </div>

                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <form action="{{ url('/dashboard_teknisi/perbaikan_teregistrasi') }}" class="form-inner"
                                    enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    @csrf


                                    <div class="form-group row">
                                        <label for="ID_Aset_reg" class="col-xs-3 col-form-label">ID Aset<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="id_aset_reg" type="text" class="form-control"
                                                id="id_aset_reg" placeholder="ID Aset" onkeyup="autofill()">
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
                                                value="<?php echo date('Y-m-d'); ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Nama_Alat_reg" class="col-xs-3 col-form-label">Nama Alat<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="nama_alat_reg" type="text" class="form-control"
                                                id="Nama_Alat_reg" placeholder="Nama Alat" value="" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Merek_Alat_reg" class="col-xs-3 col-form-label">Merek Alat<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="merek_alat_reg" type="text" class="form-control"
                                                id="Merek_Alat_reg" placeholder="Merek Alat" value="" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Type_Alat_reg" class="col-xs-3 col-form-label">Type Alat<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="type_alat_reg" type="text" class="form-control"
                                                id="Type_Alat_reg" placeholder="Type Alat" value="" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="serial_number_reg" class="col-xs-3 col-form-label">Serial Number<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="Serial_Number_reg" type="text" class="form-control"
                                                id="Serial_Number_reg" placeholder="Serial Number" value=""
                                                readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Lokasi_Alat_reg" class="col-xs-3 col-form-label">Lokasi Alat<i
                                                class="text-danger">*</i></label>
                                        <div class="col-xs-9">
                                            <input name="lokasi_alat_reg" type="text" class="form-control"
                                                id="Lokasi_Alat_reg" placeholder="Lokasi Alat" value=""
                                                readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor</label>
                                        <div class="col-xs-9">
                                            <input name="pelapor_reg" type="text" class="form-control"
                                                id="Pelapor_reg" placeholder="Pelapor">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Keterangan_Kondisi_Alat_reg"
                                            class="col-xs-3 col-form-label">Keterangan Kondisi Alat <i
                                                class="text-danger">*</i></label>
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
                                                id="Ka_Instalasi_reg" placeholder="Kepala Ruangan">
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
                                        <label for="Keluhan_Dari_alat_reg" class="col-xs-3 col-form-label">Keluhan
                                            Dari Alat</label>
                                        <div class="col-xs-9">
                                            <input name="keluhan_dari_alat_reg" type="text" class="form-control"
                                                id="Keluhan_Dari_alat_reg" placeholder="Keluhan Dari Alat">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Korektif_reg" class="col-xs-3 col-form-label">Korektif</label>
                                        <div class="col-xs-9">
                                            <input name="korektif_reg" type="text" class="form-control"
                                                id="Korektif_reg" placeholder="Korektif">
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
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default thumbnail">

                    <div class="panel-heading no-print">
                        <div class="">
                            <h1>Tabel Perbaikan</h1>
                        </div>
                    </div>
                    <div style="overflow-x:auto;">
                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <!--TABEL-->
                                <table class="datatable table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                        <th class="">No</th>
                                        <th class="">Id Perbaikan</th>
                                        <th class="none">ID_Aset</th>
                                        <th class="none">Tanggal_Perbaikan</th>
                                        <th class="">Nama Alat</th>
                                        <th class="">Merek Alat</th>
                                        <th class="">Type Alat</th>
                                        <th class="">Serial Number</th>
                                        <th class="">Lokasi Alat</th>
                                        <th class="">Status</th>
                                        <th class="none">Pelapor</th>
                                        <th class="none">Keterangan_Kondisi_Alat</th>
                                        <th class="none">Kepala Ruangan</th>
                                        <th class="none">Teknisi_1</th>
                                        <th class="none">Teknisi_2</th>
                                        <th class="none">Teknisi_3</th>
                                        <th class="none">Keluhan_Dari_alat</th>
                                        <th class="none">Korektif</th>
                                        <!--<th scope="col">Tombol_Eksekusi</th>-->
                                        <th scope="col">Tombol_Eksekusi</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $index => $item)
                                            <tr class="odd gradeX">
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $item['id_perbaikan_reg']; ?></td>
                                                <td><?php echo $item['id_aset_reg']; ?></td>
                                                <td><?php echo $item['tanggal_perbaikan_reg']; ?></td>
                                                <td><?php echo $item['nama_alat_reg']; ?></td>
                                                <td><?php echo $item['merek_alat_reg']; ?></td>
                                                <td><?php echo $item['type_alat_reg']; ?></td>
                                                <td><?php echo $item['serial_number_reg']; ?></td>
                                                <td><?php echo $item['lokasi_alat_reg']; ?></td>
                                                <td>
                                                    <form
                                                        action="{{ url('/dashboard_teknisi/perbaikan_teregistrasi/update', $item->id_perbaikan_reg) }}"
                                                        class="form-inner" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <button
                                                            class="btn btn-sm btn-{{ $item->status == 0 ? 'warning' : 'danger' }}"
                                                            type="submit">{{ $item->status == 0 ? 'Sudah di Setujui' : 'Belum di Setujui' }}</button>
                                                    </form>
                                                </td>
                                                <td><?php echo $item['pelapor_reg']; ?></td>
                                                <td><?php echo $item['keterangan_kondisi_alat_reg']; ?></td>
                                                <td><?php echo $item['ka_instalasi_reg']; ?></td>
                                                <td><?php echo $item['teknisi_1_reg']; ?></td>
                                                <td><?php echo $item['teknisi_2_reg']; ?></td>
                                                <td><?php echo $item['teknisi_3_reg']; ?></td>
                                                <td><?php echo $item['keluhan_dari_alat_reg']; ?></td>
                                                <td><?php echo $item['korektif_reg']; ?></td>
                                                <!--<td><?php echo $item['kode_rs']; ?></td>-->
                                                <td>
                                                    <a href="/dashboard_teknisi/perbaikan_teregistrasi/update_perbaikan/{{ $item->id_perbaikan_reg }}/edit" 
                                                    class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" 
                                                    title="Edit"> <i class="fa fa-edit"></i></a>

                                                    <a href="/dashboard_teknisi/perbaikan_teregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_reg }}"
                                                    class="btn btn-xs btn-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Print"><i
                                                    class="fa fa-print"></i></a>
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
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script type="text/javascript">
    let scanner_teknisi = new Instascan.Scanner({
        video: document.getElementById('preview_teknisi'),
        mirror: false
    });
    scanner_teknisi.addListener('scan', function(content) {
        const fruits = content.split(',');
        $("#id_aset_reg").val(fruits[0]);
        $("#Merek_Alat_reg").val(fruits[3]);
        $("#Nama_Alat_reg").val(fruits[2]);
        $("#Serial_Number_reg").val(fruits[5]);
        $("#Lokasi_Alat_reg").val(fruits[6]);
        $("#Type_Alat_reg").val(fruits[4]);
    });

    Instascan.Camera.getCameras().then(cameras => {
        if (cameras.length > 0) {
            scanner_teknisi.start(cameras[1]);
        } else {
            console.error("Please enable Camera!");
        }
    });
function autofill_Pengiriman() {
  let Id_Perbaikan_reg = $("#Perbaikan_reg").val();
  $.ajax({
    url: '{{ url("/dashboard/ppm/autofill_pengiriman/") }}/' + Id_Perbaikan_reg,
    method: 'GET', // HTTP method (e.g., GET, POST)
    data: {
      Id_Perbaikan_reg: Id_Perbaikan_reg
    },
    dataType: 'json',
    success: function(data) {
      console.log(data.Nama_Alat_reg)
      $("#Tanggal_Perbaikan_reg1").val(data.Tanggal_Perbaikan_reg);
      $("#Id_Aset_reg1").val(data.ID_Aset_reg);
      $("#Nama_Alat_reg1").val(data.Nama_Alat_reg);
      $("#Merek_Alat_reg1").val(data.Merek_Alat_reg);
      $("#Type_Alat_reg1").val(data.Type_Alat_reg);
      $("#Seri_Number_reg1").val(data.Serial_Number_reg);
      $("#Lokasi_Alat_reg1").val(data.Lokasi_Alat_reg);
      $("#Teknisi_1_reg1").val(data.Teknisi_1_reg);
      $("#Pelapor_reg1").val(data.Pelapor_reg);
      $("#Teknisi_2_reg1").val(data.Teknisi_2_reg);
      $("#Teknisi_3_reg1").val(data.Teknisi_3_reg);
      $("#Keterangan_Kondisi_Alat_reg1").val(data.Keterangan_Kondisi_Alat_reg);
      $("#KA_Instalasi_reg1").val(data.Ka_Instalasi_reg);
      $("#nama_sukucadang").val(data.suku_cadang);
      $("#volume").val(data.volume);
      $("#harga_satuan").val(data.harga_satuan);
      $("#jumlah_harga").val(data.jumlah_harga);

    },
    error: function(xhr, status, error) {
      console.log(xhr.responseText);
    }
  });
}

function autofill_Pengembalian() {
  let Id_Perbaikan_reg = $("#id_perbaikan_reg2").val();
  $.ajax({
    url: '{{ url("/dashboard/ppm/autofill_pengiriman/") }}/' + Id_Perbaikan_reg,
    method: 'GET', // HTTP method (e.g., GET, POST)
    data: {
      Id_Perbaikan_reg: Id_Perbaikan_reg
    },
    dataType: 'json',
    success: function(data) {
      console.log(data.Nama_Alat_reg)
      $("#tanggal_perbaikan_reg2").val(data.Tanggal_Perbaikan_reg);
      $("#Id_Aset_reg2").val(data.ID_Aset_reg);
      $("#nama_alat_reg2").val(data.Nama_Alat_reg);
      $("#merek_reg2").val(data.Merek_Alat_reg);
      $("#tipe_reg2").val(data.Type_Alat_reg);
      $("#serial_number_reg2").val(data.Serial_Number_reg);
      $("#lokasi_alat_reg2").val(data.Lokasi_Alat_reg);
      $("#teknisi1_reg2").val(data.Teknisi_1_reg);
      $("#pelapor_reg2").val(data.Pelapor_reg);
      $("#teknisi2_reg2").val(data.Teknisi_2_reg);
      $("#teknisi3_reg2").val(data.Teknisi_3_reg);
      $("#keterangan_reg2").val(data.Keterangan_Kondisi_Alat_reg);
      $("#ka_instalasi_reg2").val(data.Ka_Instalasi_reg);
      $("#nama_sukucadang2").val(data.suku_cadang);
      $("#volume2").val(data.volume);
      $("#harga_satuan2").val(data.harga_satuan);
      $("#jumlah_harga2").val(data.jumlah_harga);

    },
    error: function(xhr, status, error) {
      console.log(xhr.responseText);
    }
  });
}

function autofill_Penghapusan() {
  let Id_Perbaikan_reg = $("#Id_Perbaikan_reg3").val();
  $.ajax({
    url: '{{ url("/dashboard/ppm/autofill_pengiriman/") }}/' + Id_Perbaikan_reg,
    method: 'GET', // HTTP method (e.g., GET, POST)
    data: {
      Id_Perbaikan_reg: Id_Perbaikan_reg
    },
    dataType: 'json',
    success: function(data) {
      console.log(data.Nama_Alat_reg)
      $("#Tanggal_Perbaikan_reg3").val(data.Tanggal_Perbaikan_reg);
      $("#Nama_Alat_reg3").val(data.Nama_Alat_reg);
      $("#Merek_Alat_reg3").val(data.Merek_Alat_reg);
      $("#Type_Alat_reg3").val(data.Type_Alat_reg);
      $("#Serial_Number_reg3").val(data.Serial_Number_reg);
      $("#Lokasi_Alat_reg3").val(data.Lokasi_Alat_reg);
      $("#Teknisi_1_reg3").val(data.Teknisi_1_reg);
      $("#Pelapor_reg3").val(data.Pelapor_reg);
      $("#Teknisi_2_reg3").val(data.Teknisi_2_reg);
      $("#Teknisi_3_reg3").val(data.Teknisi_3_reg);
      $("#KA_Instalasi_reg3").val(data.Ka_Instalasi_reg);
      $("#nama_sukucadang3").val(data.suku_cadang);
      $("#volume3").val(data.volume);
      $("#harga_satuan3").val(data.harga_satuan);
      $("#jumlah_harga3").val(data.jumlah_harga);

    },
    error: function(xhr, status, error) {
      console.log(xhr.responseText);
    }
  });
}


    

    function autofill() {
        let idars = $("#id_aset_reg").val();


        $.ajax({
            url: '{{ url('/dashboard_user/autofill/') }}/' + idars,
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
<!-- <script>
    document.addEventListener('click', function(event) {
        const selectedText = window.getSelection().toString();

        if (selectedText.length === 0) {
            const clickedText = event.target.innerText.trim();

            if (clickedText.length > 0) {
                const tempInput = document.createElement('input');
                tempInput.style = 'position: absolute; left: -1000px; top: -1000px';
                tempInput.value = clickedText;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);

                // Menampilkan tooltip
                const tooltip = document.createElement('div');
                tooltip.textContent = 'Teks berhasil disalin: ' + clickedText;
                tooltip.style.position = 'absolute';
                tooltip.style.top = event.clientY + 'px';
                tooltip.style.left = event.clientX + 'px';
                tooltip.style.background = 'rgba(0, 0, 0, 0.7)';
                tooltip.style.color = '#fff';
                tooltip.style.padding = '5px 10px';
                tooltip.style.borderRadius = '5px';
                tooltip.style.zIndex = '9999';
                document.body.appendChild(tooltip);

                // Menghilangkan tooltip setelah beberapa detik
                setTimeout(() => {
                    document.body.removeChild(tooltip);
                }, 2000);
            }
        }
    });
</script> -->

<script>
function copy(that){
    var inp =document.createElement('input');
    document.body.appendChild(inp)
    inp.value =that.textContent
    inp.select();
    document.execCommand('copy',false);
    inp.remove();

    const tooltip = document.createElement('p');
    tooltip.textContent = 'Teks berhasil disalin';
    tooltip.style.position = 'absolute';
    tooltip.style.top = event.clientY + 'px';
    tooltip.style.left = event.clientX + 'px';
    tooltip.style.background = 'rgba(0, 0, 0, 0.7)';
    tooltip.style.color = '#fff';
    tooltip.style.padding = '5px 10px';
    tooltip.style.borderRadius = '5px';
    tooltip.style.zIndex = '9999';
    document.body.appendChild(tooltip);

    // Menghilangkan tooltip setelah beberapa detik
    setTimeout(() => {
        document.body.removeChild(tooltip);
    }, 2000);
}
</script>
@endpush
