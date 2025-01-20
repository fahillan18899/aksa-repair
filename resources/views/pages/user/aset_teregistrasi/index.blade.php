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
        <!-- Scanner QR -->
            <!-- <div class="row">
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
                                            <video id="preview_user"></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- Scanner QR end -->

        <!-- Tabel Permintaan Perbaikan -->
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
                                                    <td title="klik untuk copy ke form" onclick="copy(this)"><span>{{ $item->id }}<span></td>
                                                    <td>{{ $item->nama_req }}</td>
                                                    <td>{{ $item->merek_req }}</td>
                                                    <td>{{ $item->type_req }}</td>
                                                    <td>{{ $item->sn_req }}</td>
                                                    <td>{{ $item->pelapor_req }}</td>
                                                    <td>{{ $item->tanggal_req }}</td>
                                                    <td>
                                                        <form
                                                            action="{{ url('/dashboard_user/perbaikan_teregistrasi', $item->id) }}"
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
        <!-- Tabel Permintaan Perbaikan end -->

        <!-- Form Perbaikan -->
            <!-- <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">
                        <div class="panel-heading no-print">
                            <h1>Form Perbaikan Alat Teregistrasi</h1>
                        </div>
                        <div class="panel-body panel-form">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <form action="{{ url('/dashboard_user/perbaikan_teregistrasi') }}" class="form-inner"
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        @csrf


                                        <div class="form-group row">
                                            <label for="ID_Aset_reg" class="col-xs-3 col-form-label">ID Aset<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9">
                                                <input name="id_aset_reg" type="text" class="form-control" readonly 
                                                id="id_aset_reg" placeholder="klik id aset untuk copy ke sini"
                                                data-toggle="tooltip" data-placement="top" title="klik disini untuk load data alat">
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
                                                    id="Tanggal_Perbaikan_reg" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                    echo date(now()); ?>" readonly>
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
                                                    id="Pelapor_reg" placeholder="Pelapor" value="{{ Auth::user()->username }}" readonly>
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
            </div> -->
        <!-- Form Perbaikan end -->

        <!-- Tabel Perbaikan -->
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
                                            <th class="">Id_Perbaikan</th>
                                            <th class="">ID Aset</th>
                                            <th class="">Tanggal Perbaikan</th>
                                            <th class="">Nama Alat</th>
                                            <th class="">Status</th>
                                            <th class="none">Merek Alat</th>
                                            <th class="none">Type Alat</th>
                                            <th class="none">Serial Number</th>
                                            <th class="none">Lokasi Alat</th>
                                            <th class="none">Pelapor</th>
                                            <th class="none">Keterangan Kondisi Alat</th>
                                            <th class="none">Kepala Ruangan</th>
                                            <th class="none">Teknisi 1</th>
                                            <th class="none">Teknisi 2</th>
                                            <th class="none">Teknisi 3</th>
                                            <th class="none">Keluhan Dari alat</th>
                                            <th class="none">Korektif</th>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $index => $item)
                                                <tr class="odd gradeX">
                                                    <td><?php echo $index + 1; ?></td>
                                                    <td><?php echo $item['id_perbaikan_reg']; ?></td>
                                                    <td><?php echo $item['id_aset_reg']; ?></td>
                                                    <td><?php echo $item['tanggal_perbaikan_reg']; ?></td>
                                                    <td><?php echo $item['nama_alat_reg']; ?></td>
                                                    <td>
                                                        <form action="" class="form-inner" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button
                                                                class="btn btn-{{ $item->status == 0 ? 'warning' : 'danger' }}"
                                                                type="submit"
                                                                disabled>{{ $item->status == 0 ? 'Sudah di Setujui' : 'Belum di Setujui' }}</button>
                                                        </form>
                                                    </td>
                                                    <td><?php echo $item['merek_alat_reg']; ?></td>
                                                    <td><?php echo $item['type_alat_reg']; ?></td>
                                                    <td><?php echo $item['serial_number_reg']; ?></td>
                                                    <td><?php echo $item['lokasi_alat_reg']; ?></td>
                                                    <td><?php echo $item['pelapor_reg']; ?></td>
                                                    <td><?php echo $item['keterangan_kondisi_alat_reg']; ?></td>
                                                    <td><?php echo $item['ka_instalasi_reg']; ?></td>
                                                    <td><?php echo $item['teknisi_1_reg']; ?></td>
                                                    <td><?php echo $item['teknisi_2_reg']; ?></td>
                                                    <td><?php echo $item['teknisi_3_reg']; ?></td>
                                                    <td><?php echo $item['keluhan_dari_alat_reg']; ?></td>
                                                    <td><?php echo $item['korektif_reg']; ?></td>
                                                    <!--<td><?php echo $item['kode_rs']; ?></td>-->
                                                </tr>
                                            @empty
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
        <!-- Tabel perbaikan end -->

    </div> <!-- /.content -->
</div>
@endsection

@push('addon-script')
<script type="text/javascript">
// *Function scanner camera* // 
    let scanner_user = new Instascan.Scanner({
        video: document.getElementById('preview_user'),
        mirror: false
    });
    scanner_user.addListener('scan', function(content) {
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
            scanner_user.start(cameras[1]);
        } else {
            console.error("Please enable Camera!");
        }
    });
// *Function scanner camera end* //

// *Function autofill form perbaikan* //
    $('#id_aset_reg').mouseup(function(){
        if($(this).val().length > 0 ) {
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
    })
// *Function autofill form perbaikan end* //
</script>

<script>
// *Function copy id aset* // 
    function copy(that){
        var inp =document.createElement('input');
        document.body.appendChild(inp)
        inp.value =that.textContent
        inp.select();
        document.execCommand('copy',false);
        inp.remove();
        document.getElementById('id_aset_reg').value = inp.value = that.textContent;
    }
// *Function copy id aset* // 
</script>
@endpush
