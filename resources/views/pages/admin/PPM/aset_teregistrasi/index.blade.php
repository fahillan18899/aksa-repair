@extends('layouts.admin')

@section('content')
@section('title', 'Aset Teregistrasi')
<style>
  .modal-body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    /* Pastikan modal body penuh */
  }
  
  .modal-dialog2 {
  width: 100%;
  max-width: none;
  height: 100%;
  margin: 0;
}

.modal-content2 {
  height: 100%;
  display: flex;
  flex-direction: column;
}

.modal-body2 {
  flex: 1;
  overflow-y: auto;
  color:black; 
  background-color:white;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>MENU FORM ASET TEREGISTRASI</h1>
        <small>Form Aset Teregistrasi</small>
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

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <!--Tabel Permintaan Perbaikan-->
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
                      <th scope="col">ID</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Type</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Pelapor</th>
                      <th scope="col">Kerusakan</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Tombol_Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($itemPesanan as $index => $item)
                    <tr>
                      <td title="klik untuk copy ke form" onclick="copy(this)" style="cursor: pointer;">{{ $item->id_req }}</td>
                      <td>{{ $item->nama_req }}</td>
                      <td>{{ $item->merek_req }}</td>
                      <td>{{ $item->type_req }}</td>
                      <td>{{ $item->sn_req }}</td>
                      <td>{{ $item->pelapor_req }}</td>
                      <td>{{ $item->kerusakan_req }}</td>
                      <td>{{ $item->tanggal_req }}</td>
                      <td>
                        <form action="{{ route('pesanan.destroy', $item->id_req) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Validasi">
                            Validasi Perbaikan
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
    <!--Tabel Permintaan Perbaikan end-->
    <!--Form Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>Form Perbaikan Alat Teregistrasi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('perbaikan.create') }}" class="form-inner"
                  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="from-group row">
                  <div class="col-xs-9 mt-2">
                    <button type="button" class="btn btn-warning btn-sm" id="unregisterBtn">
                      UNREGISTERED
                    </button>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="ID Aset reg" class="col-xs-3 col-form-label">ID Aset
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_reg" type="text" class="form-control"
                        id="id_aset_reg" placeholder="Klik id aset alat atau Scan Qr code"
                        readonly data-toggle="tooltip" data-placement="top"
                        title="Klik disini untuk load data" style="cursor: pointer;">
                    </div>
                  </div>

                  @php
                  $field = [
                    'nama_alat_reg'     => 'Nama Alat',
                    'merek_alat_reg'    => 'Merek',
                    'type_alat_reg'     => 'Type',
                    'serial_number_reg' => 'Serial Number',
                    'lokasi_alat_reg'   => 'Lokasi Alat',
                    ]
                  @endphp
                  
                  @foreach($field as $name => $label)
                  <div class="form-group row">
                    <label for="{{ $name }}" class="col-xs-3 col-form-label">{{ $label }}
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="{{ $name }}" type="text" class="form-control"
                        id="{{ $name }}" placeholder="Terisi Otomatis" readonly
                        style="cursor: not-allowed;">
                    </div>
                  </div>
                  @endforeach
                  
                  <div class="form-group row">
                    <label for="Ka_Instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan</label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="Ka_Instalasi_reg"
                        placeholder="Kepala Ruangan yang betanggung jawab">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-5">
                      <select name="teknisi_1_reg" class="form-control" id="Teknisi_1_reg">
                        <option>-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="<?= $teknisi['nama_teknisi'] ?>">
                          <?= $teknisi['nama_teknisi'] ?></option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-xs-3">
                      <button type="button" class="btn btn-primary mt-2" id="btnTambahTeknisi"
                        data-toggle="tooltip" data-placement="top" title="Tambah Teknisi"
                        style="cursor: pointer;">+</button>
                    </div>
                  </div>

                  @for ($i = 2; $i <= 5; $i++)
                    <div class="form-group row teknisi-field" id="teknisi_{{ $i }}" style="display: none;">
                    <label for="Teknisi_{{ $i }}_reg" class="col-xs-3 col-form-label">Teknisi {{ $i }}</label>
                    <div class="col-xs-5">
                      <select name="teknisi_{{ $i }}_reg" class="form-control" id="Teknisi_{{ $i }}_reg">
                        <option value="-">-- Pilih Teknisi --</option>
                        @foreach ($teknisis as $teknisi)
                        <option value="{{ $teknisi['nama_teknisi'] }}">{{ $teknisi['nama_teknisi'] }}</option>
                        @endforeach
                      </select>
                    </div>
                    </div>
                  @endfor

                  <div class="form-group row">
                    <label for="Korektif_reg" class="col-xs-3 col-form-label">Korektif</label>
                    <div class="col-xs-9">
                      <input name="korektif_reg" type="text" class="form-control" id="Korektif_reg" 
                      placeholder="Solusi yang harus dilakukan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="foto_perbaikan" class="col-xs-3 col-form-label">Foto Pendukung </label>
                    <div class="col-xs-9">
                      <input name="foto_perbaikan" class="form-control" type="file" id="foto_perbaikan">
                    </div>
                  </div>

                  @php
                  $fieldHiden1 = [
                    'pelapor_reg', 'keluhan_dari_alat_reg', 'suku_cadang',
                    'volume', 'harga_satuan', 'jumlah_harga',
                    ]
                  @endphp
                  @foreach($fieldHiden1 as $hidden1)
                  <input name="{{ $hidden1 }}" type="hidden" class="form-control" id="{{ $hidden1 }}" readonly>
                  @endforeach
                  <input name="id_perbaikan_reg" type="hidden" class="form-control" id="Id_Perbaikan_reg" placeholder="Id Perbaikan" value="{{ $kode_aset }}" readonly style="cursor: not-allowed;">
                  <input name="tanggal_perbaikan_reg" type="hidden" class="form-control" id="Tanggal_Perbaikan_reg" placeholder="Tanggal Perbaikan" value="<?php echo date(now()); ?>" readonly style="cursor: not-allowed;">

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-warning mt-2" data-toggle="modal" data-target="#exampleModal2">Penggantian Sperpart</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-info mt-2" id="startScan" data-toggle="modal" data-target="#exampleModal">Scan QR</button>
                        <div class="or"></div>
                        <a class="btn btn-primary" onclick="hiddenPerbaikan()"> Daftar Perbaikan </a>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-md-3"></div>
            <!--Tabel Perbaikan-->
            <div class="col-md-12 col-sm-12" id="tabPerbaikan" style="display: none;">
              <!--TABEL-->`
              <table class="datatable table table-striped table-bordered" style="width:100%">
                <thead class="table-light">
                  <th scope="col" class="">No</th>
                  <th scope="col" class="">ID Perbaikan</th>
                  <th scope="col" class="none">ID Aset :</th>
                  <th scope="col" class="none">Tanggal Perbaikan :</th>
                  <th scope="col" class="">Nama</th>
                  <th scope="col" class="">Merek</th>
                  <th scope="col" class="">Type</th>
                  <th scope="col" class="">Serial_Number</th>
                  <th scope="col" class="none">Lokasi</th>
                  <th scope="col" class="">Status</th>
                  <th scope="col" class="none">Pelapor :</th>
                  <th scope="col" class="">Keterangan</th>
                  <th scope="col" class="none">Kepala Ruangan :</th>
                  <th scope="col" class="none">Teknisi 1 :</th>
                  <th scope="col" class="none">Teknisi 2 :</th>
                  <th scope="col" class="none">Teknisi 3 :</th>
                  <th scope="col" class="none">Teknisi 4 :</th>
                  <th scope="col" class="none">Teknisi 5 :</th>
                  <th scope="col" class="none">Nama Sperpart :</th>
                  <th scope="col" class="none">Volume Sperpart :</th>
                  <th scope="col" class="none">Harga Satuan Sperpart :</th>
                  <th scope="col" class="none">Jumlah Harga Sperpart :</th>
                  <th scope="col" class="none">Keluhan Dari alat :</th>
                  <th scope="col" class="none">Korektif :</th>
                  <th scope="col" class="none">Foto Perbaikan :</th>
                  <th scope="col" class="">Tombol</th>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item)
                  <tr class="odd gradeX">
                    <td>{{ $index + 1 }}</td>
                    <td title="klik disini untuk copy id ke form" onclick="copy2(this)" style="cursor: pointer;">{{ $item->id_perbaikan_reg }}</td>
                    <td>{{ $item->id_aset_reg }}</td>
                    <td>{{ $item->tanggal_perbaikan_reg }}</td>
                    <td>{{ $item->nama_alat_reg }}</td>
                    <td>{{ $item->merek_alat_reg }}</td>
                    <td>{{ $item->type_alat_reg }}</td>
                    <td>{{ $item->serial_number_reg }}</td>
                    <td>{{ $item->lokasi_alat_reg }}</td>
                    <td>
                      <form
                        action="{{ route('status_perbaikan', $item->id_perbaikan_reg) }}" class="form-inner" method="post">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-sm btn-{{ $item->status == 0 ? 'success' : 'danger' }}"
                          type="submit" disabled>{{ $item->status == 0 ? 'Sudah di Setujui' : 'Belum di Setujui' }}</button>
                      </form>
                    </td>
                    <td>{{ $item->pelapor_reg }}</td>
                    <td>
                      <form
                        action="{{ route('kondisi_alat', $item->id_perbaikan_reg) }}" class="form-inner" method="post">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-sm btn-{{ $item->keterangan_kondisi_alat_reg == 0 ? 'success' : 'warning' }}"
                          type="submit" disabled>{{ $item->keterangan_kondisi_alat_reg == 0 ? 'Selesai, dikembalikan' : 'Dalam perbaikan' }}</button>
                      </form>
                    </td>
                    <td>{{ $item->ka_instalasi_reg }}</td>
                    <td>{{ $item->teknisi_1_reg }}</td>
                    <td>{{ $item->teknisi_2_reg }}</td>
                    <td>{{ $item->teknisi_3_reg }}</td>
                    <td>{{ $item->teknisi_4_reg }}</td>
                    <td>{{ $item->teknisi_5_reg }}</td>
                    <td>{{ $item->suku_cadang }}</td>
                    <td>{{ $item->volume }}</td>
                    <td>{{ $item->harga_satuan }}</td>
                    <td>{{ $item->jumlah_harga }}</td>
                    <td>{{ $item->keluhan_dari_alat_reg }}</td>
                    <td>{{ $item->korektif_reg }}</td>
                    <td><img style="width: 80px; height: 80px;" alt='No Image' src="{{ URL::asset('storage/'.$item->foto_perbaikan) }}"></td>
                    <td>
                      <a href="{{ route('update_perbaikan.edit', $item->id_perbaikan_reg) }}"
                        class="btn btn-xs btn-success" data-toggle="tooltip"
                        data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                      <a href="{{ route('perbaikan.cetak', $item->id_perbaikan_reg) }}"
                        class="btn btn-xs btn-primary" target="_blank"
                        data-toggle="tooltip" data-placement="top"
                        title="Cetak"><i class="fa fa-print"></i></a>

                      <form
                        action="{{ route('perbaikan.destroy', $item->id_perbaikan_reg) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-xs"
                          data-toggle="tooltip" data-placement="top" title="Hapus">
                          <i class="fa fa-trash "></i>
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
            <!--Tabel Perbaikan end-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Form Perbaikan end-->
  <!--Form Pengiriman-->
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default thumbnail">

        <div class="panel-heading no-print">
          <h1>Form Pengiriman Alat Teregistrasi</h1>
        </div>

        <div class="panel-body panel-form">
          <div class="row">
            <div class="col-md-9 col-sm-12">
              <form action="{{ route('pengiriman.store') }}" class="form-inner"
                enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf

                <div class="form-group row">
                  <label for="Id_Perbaikan_reg" class="col-xs-3 col-form-label">ID Perbaikan
                    <i class="text-danger">*</i></label>
                  <div class="col-xs-9">
                    <input name="id_perbaikan_reg" type="text" class="form-control"
                      id="Perbaikan_reg" placeholder="Klik id perbaikan di tabel untuk copy kesini" readonly
                      data-toggle="tooltip" data-placement="top" title="klik disini untuk load data"
                      style="cursor: pointer;">
                  </div>
                </div>
                @php
                  $field2 = [
                    'nama_alat_reg'   => 'Nama Alat',
                    'merek_alat_reg'  => 'Merek',
                    'type_alat_reg'   => 'Type',
                    'seri_number_reg' => 'Serial Number',
                    'lokasi_alat_reg' => 'Lokasi Alat'
                    ]
                @endphp
                
                @for($i = 2; $i <= 2; $i++)
                @foreach($field2 as $name2 => $label2)
                <div class="form-group row">
                  <label for="{{ $name2 }}" class="col-xs-3 col-form-label">{{ $label2 }}
                  <i class="text-danger">*</i></label>
                  <div class="col-xs-9">
                    <input name="{{ $name2 }}" type="text" class="form-control"
                    id="{{ $name2 }}_{{$i}}" placeholder="Terisi Otomatis" readonly
                    style="cursor: not-allowed;">
                  </div>
                </div>
                @endforeach
                @endfor
                <div class="form-group row">
                  <label for="Nama_Rekan_reg" class="col-xs-3 col-form-label">Nama Rekan</label>
                  <div class="col-xs-9">
                    <input name="nama_rekan_reg" type="text" class="form-control"
                      id="Nama_Rekan_reg" placeholder="Nama PT / Perusahaan rekanan / pihak ke-3">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Alamat_Rekan_reg" class="col-xs-3 col-form-label">Alamat Rekan </label>
                  <div class="col-xs-9">
                    <input name="alamat_rekan_reg" type="text" class="form-control"
                      id="Alamat_Rekan_reg" placeholder="Alamat PT / Perusahaan rekanan / pihak ke-3">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Teknisi_Rekanan_reg" class="col-xs-3 col-form-label">Teknisi Rekanan </label>
                  <div class="col-xs-9">
                    <input name="teknisi_rekanan_reg" type="text" class="form-control"
                      id="Teknisi_Rekanan_reg" placeholder="Teknisi PT / Perusahaan rekanan / pihak ke-3">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Telp_Teknisi_Rekanan_reg"
                    class="col-xs-3 col-form-label">Telp_Teknisi_Rekanan_reg </label>
                  <div class="col-xs-9">
                    <input name="telp_teknisi_rekanan_reg" type="text"
                      class="form-control" id="Telp_Teknisi_Rekanan_reg"
                      placeholder="Telp Teknisi PT / Perusahaan rekanan / pihak ke-3">
                  </div>
                </div>
                @php
                $fieldHiden2 = [
                  'tanggal_perbaikan_reg' => 'tanggal_perbaikan_reg',
                  'id_aset_reg' => 'id_aset_reg',
                  'pelapor_reg' => 'pelapor_reg',
                  'teknisi_1_reg' => 'teknisi_1_reg',
                  'teknisi_2_reg' => 'teknisi_2_reg',
                  'teknisi_3_reg' => 'teknisi_3_reg',
                  'teknisi_4_reg' => 'teknisi_4_reg',
                  'teknisi_5_reg' => 'teknisi_5_reg',
                  'ka_instalasi_reg' => 'ka_instalasi_reg',
                  'suku_cadang' => 'suku_cadang',
                  'volume' => 'volume',
                  'harga_satuan' => 'harga_satuan',
                  'jumlah_harga' => 'jumlah_harga',
                  ]
                @endphp
                @for($i = 2; $i <=2; $i++)
                @foreach($fieldHiden2 as $hidden2 => $id2)
                <input name="{{ $hidden2 }}" id="{{ $id2 }}_{{$i}}" type="hidden" class="form-control" readonly>
                @endforeach
                @endfor
                <input name="tanggal_pengiriman_reg" type="hidden" class="form-control" id="Tanggal_Pengiriman_reg" placeholder="Tanggal Pengiriman" value="<?php echo date('Y-m-d'); ?>" readonly style="cursor: not-allowed;">


                <div class="form-group row">
                  <div class="col-sm-offset-3 col-sm-6">
                    <div class="ui buttons">
                      <button class="ui positive button">Tambah</button>
                      <div class="or"></div>
                      <button type="reset" class="ui button" type="submit">Reset</button>
                      <div class="or"></div> id
                      <a class="btn btn-primary" onclick="hiddenPengiriman()"> Daftar Pengiriman </a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
            <!--Tabel Pengiriman-->
            <div class="col-md-12 col-sm-12" id="tabPengiriman" style="display: none">
              <!--TABEL-->
              <table class="datatable table table-striped table-bordered" style="width:100%">
                <thead class="table-light">
                  <th scope="col">No</th>
                  <th scope="col" class="">ID_Perbaikan</th>
                  <th scope="col" class="none">Tanggal_Perbaikan :</th>
                  <th scope="col" class="none">Tanggal_Pengiriman :</th>
                  <th scope="col" class="none">ID Aset</th>
                  <th scope="col" class="">Nama</th>
                  <th scope="col" class="">Merek</th>
                  <th scope="col" class="">Type</th>
                  <th scope="col" class="">Seri Number</th>
                  <th scope="col" class="">Lokasi</th>
                  <th scope="col" class="none">Teknisi 1 :</th>
                  <th scope="col" class="none">Teknisi 2 :</th>
                  <th scope="col" class="none">Teknisi 3 :</th>
                  <th scope="col" class="none">Teknisi 4 :</th>
                  <th scope="col" class="none">Teknisi 5 :</th>
                  <th scope="col" class="none">Nama Sperpart :</th>
                  <th scope="col" class="none">Volume Sperpart :</th>
                  <th scope="col" class="none">Harga Satuan Sperpart :</th>
                  <th scope="col" class="none">Jumlah Harga Sperpart :</th>
                  <th scope="col" class="none">Pelapor :</th>
                  <th scope="col" class="none">Kepala Ruangan :</th>
                  <th scope="col" class="none">Nama Rekan :</th>
                  <th scope="col" class="none">Alamat Rekan :</th>
                  <th scope="col" class="none">Teknisi Rekanan :</th>
                  <th scope="col" class="none">Telp Teknisi Rekanan :</th>
                  <th scope="col" class="">Tombol</th>
                </thead>
                <tbody>
                  @forelse ($result_pengiriman as $index => $item)
                  <tr class="odd gradeX">
                    <td>{{ $index + 1 }}</td>
                    <td title="klik disini untuk copy id ke form"
                      onclick="copy3(this)" style="cursor: pointer;">{{ $item->id_perbaikan_reg }}</td>
                    <td>{{ $item->tanggal_perbaikan_reg }}</td>
                    <td>{{ $item->tanggal_pengiriman_reg }}</td>
                    <td>{{ $item->id_aset_reg }}</td>
                    <td>{{ $item->nama_alat_reg }}</td>
                    <td>{{ $item->merek_alat_reg }}</td>
                    <td>{{ $item->type_alat_reg }}</td>
                    <td>{{ $item->seri_number_reg }}</td>
                    <td>{{ $item->lokasi_alat_reg }}</td>
                    <td>{{ $item->teknisi_1_reg }}</td>
                    <td>{{ $item->teknisi_2_reg }}</td>
                    <td>{{ $item->teknisi_3_reg }}</td>
                    <td>{{ $item->teknisi_4_reg }}</td>
                    <td>{{ $item->teknisi_5_reg }}</td>
                    <td>{{ $item->suku_cadang }}</td>
                    <td>{{ $item->volume }}</td>
                    <td>{{ $item->harga_satuan }}</td>
                    <td>{{ $item->jumlah_harga }}</td>
                    <td>{{ $item->pelapor_reg }}</td>
                    <td>{{ $item->ka_instalasi_reg }}</td>
                    <td>{{ $item->nama_rekan_reg }}</td>
                    <td>{{ $item->alamat_rekan_reg }}</td>
                    <td>{{ $item->teknisi_rekanan_reg }}</td>
                    <td>{{ $item->telp_teknisi_rekanan_reg }}</td>
                    <td>
                      <a href="{{ route('update_pengiriman.edit', $item->id_perbaikan_reg) }}"
                        data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-xs btn-success">
                        <i class="fa fa-edit"></i></a>

                      <a href="{{ route('pengiriman.cetak', $item->id_perbaikan_reg) }}"
                        data-toggle="tooltip" data-placement="top" title="Cetak" target="_blank"
                        class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>

                      <form
                        action="{{ route('pengiriman.destroy', $item->id_perbaikan_reg) }}"
                        method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-xs"
                          data-toggle="tooltip" data-placement="top"
                          title="Hapus">
                          <i class="fa fa-trash "></i>
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
            <!--Tabel Pengiriman end-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Form Pengiriman end-->
  <!--Form Pengembalian-->
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default thumbnail">

        <div class="panel-heading no-print">
          <h1>Form Pengembalian Alat Teregistrasi</h1>
        </div>

        <div class="panel-body panel-form">
          <div class="row">
            <div class="col-md-9 col-sm-12">
              <form action="{{ route('pengembalian.store') }}" class="form-inner"
                enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf

                <div class="form-group row">
                  <label for="id_perbaikan_reg" class="col-xs-3 col-form-label">ID Perbaikan
                    <i class="text-danger">*</i></label>
                  <div class="col-xs-9">
                    <input name="id_perbaikan_reg" type="text" class="form-control"
                      id="id_perbaikan_reg2" placeholder="Klik id perbaikan di tabel untuk copy id kesini" readonly
                      data-toggle="tooltip" data-placement="top" title="klik disini untuk load data"
                      style="cursor: pointer;">
                  </div>
                </div>
                @php
                  $field3 = [
                    'nama_alat_reg'     => 'Nama Alat',
                    'merek_reg'         => 'Merek',
                    'tipe_reg'          => 'Type',
                    'serial_number_reg' => 'Serial Number',
                    'lokasi_alat_reg'   => 'Lokasi Alat'
                    ]
                @endphp
                
                @for($i = 3; $i <= 3; $i++)
                @foreach($field3 as $name3 => $label3)
                <div class="form-group row">
                  <label for="{{ $name3 }}" class="col-xs-3 col-form-label">{{ $label3 }}
                  <i class="text-danger">*</i></label>
                  <div class="col-xs-9">
                    <input name="{{ $name3 }}" type="text" class="form-control"
                    id="{{ $name3 }}_{{$i}}" placeholder="Terisi Otomatis" readonly
                    style="cursor: not-allowed;">
                  </div>
                </div>
                @endforeach
                @endfor

                <div class="form-group row">
                  <label for="penerima_reg" class="col-xs-3 col-form-label">Penerima</label>
                  <div class="col-xs-9">
                    <input name="penerima_reg" type="text" class="form-control"
                      id="penerima_reg2" placeholder="penerima barang kembali">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="harga_perbaikan_reg" class="col-xs-3 col-form-label">Harga Perbaikan</label>
                  <div class="col-xs-9">
                    <input name="harga_perbaikan_reg" type="text" class="form-control"
                      id="harga_perbaikan_reg2" placeholder="Biaya yang dihabiskan / yang digunakan">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="penyebab_kerusakan_reg" class="col-xs-3 col-form-label">Penyebab Kerusakan </label>
                  <div class="col-xs-9">
                    <input name="penyebab_kerusakan_reg" type="text" class="form-control"
                      id="penyebab_kerusakan_reg2" placeholder="Penyebab rusaknya alat">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="solusi_perbaikan_reg" class="col-xs-3 col-form-label">Solusi Perbaikan </label>
                  <div class="col-xs-9">
                    <input name="solusi_perbaikan_reg" type="text" class="form-control"
                      id="solusi_perbaikan_reg2" placeholder="Solusi yang diambil">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="penguji_suku_cadang_reg" class="col-xs-3 col-form-label">Penguji Sperpart </label>
                  <div class="col-xs-9">
                    <input name="penguji_suku_cadang_reg" type="text" class="form-control"
                      id="penguji_suku_cadang_reg2" placeholder="Penguji Pada Sperpart">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="hasil_verifikasi_reg" class="col-xs-3 col-form-label">Hasil Verifikasi</label>
                  <div class="col-xs-9">
                    <input name="hasil_verifikasi_reg" type="text" class="form-control"
                      id="hasil_verifikasi_reg2" placeholder="Hasil Dari Verifikasi">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="hasil_fungsi_reg" class="col-xs-3 col-form-label">Hasil Fungsi </label>
                  <div class="col-xs-9">
                    <input name="hasil_fungsi_reg" type="text" class="form-control"
                      id="hasil_fungsi_reg2" placeholder="Hasil Fungsi Dari Alat">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="pengganti_suku_cadang_reg" class="col-xs-3 col-form-label"> Pengganti Sperpart</label>
                  <div class="col-xs-9">
                    <input name="pengganti_suku_cadang_reg" type="text"
                      class="form-control" id="pengganti_suku_cadang_reg2"
                      placeholder="Penggantian sperpart yang digunakan dialat">
                  </div>
                </div>
                @php
                $fieldHiden3 = [
                  'id_aset_reg' => 'id_aset_reg',
                  'tanggal_perbaikan_reg' => 'tanggal_perbaikan_reg',
                  'pelapor_reg' => 'pelapor_reg',
                  'teknisi1_reg' => 'teknisi1_reg',
                  'teknisi2_reg' => 'teknisi2_reg',
                  'teknisi3_reg' => 'teknisi3_reg',
                  'teknisi4_reg' => 'teknisi4_reg',
                  'teknisi5_reg' => 'teknisi5_reg',
                  'ka_instalasi_reg' => 'ka_instalasi_reg',
                  'suku_cadang' => 'suku_cadang',
                  'volume' => 'volume',
                  'harga_satuan' => 'harga_satuan',
                  'jumlah_harga' => 'jumlah_harga',
                  ]
                @endphp
                @for($i = 3; $i <=3; $i++)
                @foreach($fieldHiden3 as $hidden3 => $id3)
                <input name="{{ $hidden3 }}" id="{{ $id3 }}_{{$i}}" type="hidden" class="form-control" readonly>
                @endforeach
                @endfor
                <input name="tanggal_pengembalian_reg" type="hidden" class="form-control" id="tanggal_pengembalian_reg2" placeholder="tanggal pengembalian" value="<?php echo date('Y-m-d'); ?>" readonly style="cursor: not-allowed;">
                
                <div class="form-group row">
                  <div class="col-sm-offset-3 col-sm-6">
                    <div class="ui buttons">
                      <button class="ui positive button">Tambah</button>
                      <div class="or"></div>
                      <button type="reset" class="ui button" type="submit">Reset</button>
                      <div class="or"></div>
                      <a class="btn btn-primary" onclick="hiddenPengembalian()"> Daftar Pengmbalian </a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
            <!--Tabel Pengembalian-->
            <div class="col-md-12 col-sm-12" id="tabPengembalian" style="display: none;">
              <!--TABEL-->
              <table class="datatable table table-striped table-bordered" style="width:100%">
                <thead class="table-light">
                  <th scope="col" class="">No</th>
                  <th scope="col" class="">ID_Perbaikan</th>
                  <th scope="col" class="">Nama</th>
                  <th scope="col" class="none">Tanggal Perbaikan :</th>
                  <th scope="col" class="">Merek</th>
                  <th scope="col" class="none">ID Aset :</th>
                  <th scope="col" class="">Type</th>
                  <th scope="col" class="none">Tanggal Pengembalian :</th>
                  <th scope="col" class="">Serial Number</th>
                  <th scope="col" class="none">Pelapor :</th>
                  <th scope="col" class="">Lokasi</th>
                  <th scope="col" class="none">Penerima :</th>
                  <th scope="col" class="none">Harga Perbaikan :</th>
                  <th scope="col" class="none">Teknisi 1 :</th>
                  <th scope="col" class="none">Teknisi 2 :</th>
                  <th scope="col" class="none">Teknisi 3 :</th>
                  <th scope="col" class="none">Teknisi 4 :</th>
                  <th scope="col" class="none">Teknisi 5 :</th>
                  <th scope="col" class="none">Nama Sperpart :</th>
                  <th scope="col" class="none">Volume Sperpart :</th>
                  <th scope="col" class="none">Harga Satuan Sperpart :</th>
                  <th scope="col" class="none">Jumlah Harga Sperpart :</th>
                  <th scope="col" class="none">Kepala Ruangan :</th>
                  <th scope="col" class="none">Penyebab Kerusakan :</th>
                  <th scope="col" class="none">Solusi Perbaikan :</th>
                  <th scope="col" class="none">Penguji Suku Cadang :</th>
                  <th scope="col" class="none">Hasil Verifikasi :</th>
                  <th scope="col" class="none">Hasil Fungsi :</th>
                  <th scope="col" class="none">Pengganti Suku Cadang :</th>
                  <th scope="col" class="">Tombol</th>
                </thead>
                <tbody>
                  @forelse ($result_pengembalian as $index => $item)
                  <tr class="odd gradeX">
                    <td><?php echo $index + 1; ?></td>
                    <td title="klik disini untuk copy id ke form"
                      onclick="copy4(this)" style="cursor: pointer;">{{ $item->id_perbaikan_reg }}</td>
                    <td>{{ $item->nama_alat_reg }}</td>
                    <td>{{ $item->tanggal_perbaikan_reg }}</td>
                    <td>{{ $item->merek_reg }}</td>
                    <td>{{ $item->id_aset_reg }}</td>
                    <td>{{ $item->tipe_reg }}</td>
                    <td>{{ $item->tanggal_pengembalian_reg }}</td>
                    <td>{{ $item->serial_number_reg }}</td>
                    <td>{{ $item->pelapor_reg }}</td>
                    <td>{{ $item->lokasi_alat_reg }}</td>
                    <td>{{ $item->penerima_reg }}</td>
                    <td>{{ $item->harga_perbaikan_reg }}</td>
                    <td>{{ $item->teknisi1_reg }}</td>
                    <td>{{ $item->teknisi2_reg }}</td>
                    <td>{{ $item->teknisi3_reg }}</td>
                    <td>{{ $item->teknisi4_reg }}</td>
                    <td>{{ $item->teknisi5_reg }}</td>
                    <td>{{ $item->suku_cadang }}</td>
                    <td>{{ $item->volume }}</td>
                    <td>{{ $item->harga_satuan }}</td>
                    <td>{{ $item->jumlah_harga }}</td>
                    <td>{{ $item->ka_instalasi_reg }}</td>
                    <td>{{ $item->penyebab_kerusakan_reg }}</td>
                    <td>{{ $item->solusi_perbaikan_reg }}</td>
                    <td>{{ $item->penguji_suku_cadang_reg }}</td>
                    <td>{{ $item->hasil_verifikasi_reg }}</td>
                    <td>{{ $item->hasil_fungsi_reg }}</td>
                    <td>{{ $item->pengganti_suku_cadang_reg }}</td>
                    <td>
                      <a href="{{ route('update_pengembalian.edit', $item->id_perbaikan_reg) }}"
                        data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-xs btn-success">
                        <i class="fa fa-edit"></i></a>

                      <a href="{{ route('pengembalian.cetak', $item->id_perbaikan_reg)}}"
                        data-toggle="tooltip" data-placement="top" title="Cetak" target="_blank"
                        class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>

                      <form
                        action="{{ route('pengembalian.destroy', $item->id_perbaikan_reg) }}"
                        method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-xs"
                          data-toggle="tooltip" data-placement="top"
                          title="Hapus">
                          <i class="fa fa-trash "></i>
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
            <!--Tabel Pengembalian end-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Form Pengembalian end-->
  <!--Form Penghapusan-->
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default thumbnail">

        <div class="panel-heading no-print">
          <h1>Form Penghapusan Alat Teregistrasi</h1>
        </div>

        <div class="panel-body panel-form">
          <div class="row">
            <div class="col-md-9 col-sm-12">
              <form action="{{ route('penghapusan.store') }}" class="form-inner"
                enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf

                <div class="form-group row">
                  <label for="Id_Perbaikan_reg" class="col-xs-3 col-form-label">ID Perbaikan
                    <i class="text-danger">*</i></label>
                  <div class="col-xs-9">
                    <input name="id_perbaikan_reg" type="text" class="form-control"
                      id="Id_Perbaikan_reg3" placeholder="Klik id perbaikan di tabel untuk copy id ke sini" readonly
                      data-toggle="tooltip" data-placement="top" title="klik disini untuk load data"
                      style="cursor: pointer;">
                  </div>
                </div>

                @php
                  $field4 = [
                    'nama_alat_reg'     => 'Nama Alat',
                    'merek_alat_reg'    => 'Merek',
                    'type_alat_reg'     => 'Type',
                    'serial_number_reg' => 'Serial Number',
                    'lokasi_alat_reg'   => 'Lokasi Alat'
                    ]
                @endphp
                
                @for($i = 4; $i <= 4; $i++)
                @foreach($field4 as $name4 => $label4)
                <div class="form-group row">
                  <label for="{{ $name4 }}" class="col-xs-3 col-form-label">{{ $label4 }}
                  <i class="text-danger">*</i></label>
                  <div class="col-xs-9">
                    <input name="{{ $name4 }}" type="text" class="form-control"
                    id="{{ $name4 }}_{{$i}}" placeholder="Terisi Otomatis" readonly
                    style="cursor: not-allowed;">
                  </div>
                </div>
                @endforeach
                @endfor

                <div class="form-group row">
                  <label for="Keterangan_Pengguna_reg" class="col-xs-3 col-form-label">Keterangan Pengguna</label>
                  <div class="col-xs-9">
                    <input name="keterangan_pengguna_reg" type="text"
                      class="form-control" id="Keterangan_Pengguna_reg3"
                      placeholder="Keterangan Pengguna terhadap alat, contoh : mati total">
                  </div>
                </div>
                @php
                $fieldHiden4 = [
                  'tanggal_perbaikan_reg' => 'tanggal_perbaikan_reg',
                  'pelapor_reg' => 'pelapor_reg',
                  'teknisi_1_reg' => 'teknisi_1_reg',
                  'teknisi_2_reg' => 'teknisi_2_reg',
                  'teknisi_3_reg' => 'teknisi_3_reg',
                  'teknisi_4_reg' => 'teknisi_4_reg',
                  'teknisi_5_reg' => 'teknisi_5_reg',
                  'suku_cadang' => 'suku_cadang',
                  'volume' => 'volume',
                  'harga_satuan' => 'harga_satuan',
                  'jumlah_harga' => 'jumlah_harga',
                  'ka_instalasi_reg' => 'ka_instalasi_reg',
                  ]
                @endphp
                @for($i = 4; $i <= 4; $i++)
                @foreach($fieldHiden4 as $hidden4 => $id4)
                <input name="{{ $hidden4 }}" id="{{ $id4 }}_{{$i}}" type="hidden" class="form-control" placeholder="Terisi Otomatis" readonly style="cursor: not-allowed;">
                @endforeach
                @endfor
                <input name="tanggal_penggudangan_reg" type="hidden" class="form-control" id="Tanggal_Penggudangan_reg3" 
                placeholder="Tanggal Penggudangan" value="<?php echo date('Y-m-d'); ?>" readonly style="cursor: not-allowed;">
                
                <div class="form-group row">
                  <div class="col-sm-offset-3 col-sm-6">
                    <div class="ui buttons">
                      <button class="ui positive button">Tambah</button>
                      <div class="or"></div>
                      <button type="reset" class="ui button" type="submit">Reset</button>
                      <div class="or"></div>
                      <a class="btn btn-primary" onclick="hiddenPenghapusan()"> Daftar Penghapusan </a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
            <!--Tabel Penghapusan-->
            <div class="col-md-12 col-sm-12" id="tabPenghapusan" style="display: none;">
              <!--TABEL-->
              <table class="datatable table table-striped table-bordered" style="width:100%">
                <thead class="table-light">
                  <th scope="col">No</th>
                  <th class="">ID_Perbaikan</th>
                  <th class="none">Tanggal_Perbaikan :</th>
                  <th class="none">Tanggal_Penggudangan :</th>
                  <th class="">Nama</th>
                  <th class="">Merek</th>
                  <th class="">Type</th>
                  <th class="">Serial Number</th>
                  <th class="">Lokasi</th>
                  <th class="none">Pelapor :</th>
                  <th class="none">Teknisi_1 :</th>
                  <th class="none">Teknisi_2 :</th>
                  <th class="none">Teknisi_3 :</th>
                  <th class="none">Teknisi_4 :</th>
                  <th class="none">Teknisi_5 :</th>
                  <th class="none">Nama Sperpart :</th>
                  <th class="none">Volume Sperpart :</th>
                  <th class="none">Harga Satuan Sperpart :</th>
                  <th class="none">Jumlah Harga Sperpart :</th>
                  <th class="none">Kepala Ruangan :</th>
                  <th class="none">Keterangan_Pengguna :</th>
                  <th class="">Tombol</th>
                </thead>
                <tbody>
                  @forelse ($result_penghapusan as $index => $item)
                  <tr class="odd gradeX">
                    <td><?php echo $index + 1; ?></td>
                    <td>{{ $item->id_perbaikan_reg }}</td>
                    <td>{{ $item->tanggal_perbaikan_reg }}</td>
                    <td>{{ $item->tanggal_penggudangan_reg }}</td>
                    <td>{{ $item->nama_alat_reg }}</td>
                    <td>{{ $item->merek_alat_reg }}</td>
                    <td>{{ $item->type_alat_reg }}</td>
                    <td>{{ $item->serial_number_reg }}</td>
                    <td>{{ $item->lokasi_alat_reg }}</td>
                    <td>{{ $item->pelapor_reg }}</td>
                    <td>{{ $item->teknisi_1_reg }}</td>
                    <td>{{ $item->teknisi_2_reg }}</td>
                    <td>{{ $item->teknisi_3_reg }}</td>
                    <td>{{ $item->teknisi_4_reg }}</td>
                    <td>{{ $item->teknisi_5_reg }}</td>
                    <td>{{ $item['suku_cadang'] }}</td>
                    <td>{{ $item['volume'] }}</td>
                    <td>{{ $item['harga_satuan'] }}</td>
                    <td>{{ $item['jumlah_harga'] }}</td>
                    <td>{{ $item->ka_instalasi_reg }}</td>
                    <td>{{ $item->keterangan_pengguna_reg }}</td>
                    <td>
                      <a href="{{ route ('penghapusan.edit', $item->id_perbaikan_reg) }}"
                        data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-xs btn-success">
                        <i class="fa fa-edit"></i></a>

                      <a href="{{ route ('penghapusan.cetak', $item->id_perbaikan_reg) }}"
                        data-toggle="tooltip" data-placement="top" title="Cetak"
                        target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>

                      <form
                        action="{{ route ('penghapusan.destroy', $item->id_perbaikan_reg) }}"
                        method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-xs"
                          data-toggle="tooltip" data-placement="top"
                          title="Hapus">
                          <i class="fa fa-trash "></i>
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
            <!--Tabel Penghapusan end-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Form Penghapusan end-->
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</div>
</div> <!-- /.content-wrapper -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color:white; background-color:#042a4a;">
        <h5 class="modal-title" id="exampleModalLabel">Camera</h5>
      </div>
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">
          <!-- Area scanner -->
          <div id="qr-reader" style="width: 300px; display: none;"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog2" role="document">
    <div class="modal-content2">
      <div class="modal-header" style="color:white; background-color:#042a4a;">
        <h5 class="modal-title" id="exampleModalLabel">Form Perbaikan ganti sperpart</h5>
      </div>
      <div class="modal-body2">
      <!--Tabel Permintaan Perbaikan-->
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
                        <th scope="col">ID Aset</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Type</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Pelapor</th>
                        <th scope="col">Kerusakan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Tombol Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($itemPesanan as $index => $item)
                      <tr>
                        <td title="klik untuk copy ke form" onclick="copy5(this)" style="cursor: pointer;">{{ $item->id_req }}</td>
                        <td>{{ $item->nama_req }}</td>
                        <td>{{ $item->merek_req }}</td>
                        <td>{{ $item->type_req }}</td>
                        <td>{{ $item->sn_req }}</td>
                        <td>{{ $item->pelapor_req }}</td>
                        <td>{{ $item->kerusakan_req }}</td>
                        <td>{{ $item->tanggal_req }}</td>
                        <td>
                          <form action="{{ route('pesanan.destroy', $item->id_req) }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Validasi">
                              Validasi Perbaikan
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
      <!--Tabel Permintaan Perbaikan end-->
        <div class="panel-body panel-form">
          <div class="row">
            <div class="col-md-9 col-sm-12">
              <form action="{{ route('perbaikan.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              @csrf
              <div class="form-group row">
                <label for="ID Aset reg" class="col-xs-3 col-form-label">ID Aset
                <i class="text-danger">*</i></label>
                <div class="col-xs-9">
                  <input name="id_aset_reg" type="text" class="form-control"
                  id="id_aset_reg_5" placeholder="Klik id aset alat atau Scan Qr code"
                  readonly data-toggle="tooltip" data-placement="top"
                  title="Klik disini untuk load data" style="cursor: pointer;">
                </div>
              </div>
              @php
              $field5 = [
                'nama_alat_reg'     => 'Nama Alat',
                'merek_alat_reg'    => 'Merek',
                'type_alat_reg'     => 'Type',
                'serial_number_reg' => 'Serial Number',
                'lokasi_alat_reg'   => 'Lokasi Alat',
                ]
              @endphp
              @for ($i = 5; $i <= 5; $i++)    
              @foreach($field5 as $name5 => $label5)
              <div class="form-group row">
                <label for="{{ $name5 }}" class="col-xs-3 col-form-label">{{ $label5 }}
                  <i class="text-danger">*</i></label>
                <div class="col-xs-9">
                  <input name="{{ $name5 }}" type="text" class="form-control"
                    id="{{ $name5 }}_{{$i}}" placeholder="Terisi Otomatis" readonly
                    style="cursor: not-allowed;">
                </div>
              </div>
              @endforeach
              @endfor

              <div class="form-group row">
                <label for="Ka_Instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan</label>
                <div class="col-xs-9">
                  <input name="ka_instalasi_reg" type="text" class="form-control" id="Ka_Instalasi_reg"
                    placeholder="Kepala Ruangan yang betanggung jawab">
                </div>
              </div>

              <div class="form-group row">
                <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1
                  <i class="text-danger">*</i></label>
                <div class="col-xs-5">
                  <select name="teknisi_1_reg" class="form-control" id="Teknisi_1_reg">
                    <option>-- Pilih Teknisi --</option>
                    @foreach ($teknisis as $teknisi)
                    <option value="<?= $teknisi['nama_teknisi'] ?>">
                      <?= $teknisi['nama_teknisi'] ?></option>
                    @endforeach
                  </select>
                </div>
                <div class="col-xs-3">
                  <button type="button" class="btn btn-primary mt-2" id="btnTambahTeknisi2"
                    data-toggle="tooltip" data-placement="top" title="Tambah Teknisi"
                    style="cursor: pointer;">+</button>
                </div>
              </div>

              @for ($i = 2; $i <= 5; $i++)
                <div class="form-group row teknisi-field" id="teknisi2_{{ $i }}" style="display: none;">
                <label for="Teknisi_{{ $i }}_reg" class="col-xs-3 col-form-label">Teknisi {{ $i }}</label>
                <div class="col-xs-5">
                  <select name="teknisi_{{ $i }}_reg" class="form-control" id="Teknisi_{{ $i }}_reg">
                    <option value="-">-- Pilih Teknisi --</option>
                    @foreach ($teknisis as $teknisi)
                    <option value="{{ $teknisi['nama_teknisi'] }}">{{ $teknisi['nama_teknisi'] }}</option>
                    @endforeach
                  </select>
                </div>
                </div>
              @endfor

              <div class="form-group row">
                <label for="Korektif_reg" class="col-xs-3 col-form-label">Korektif</label>
                <div class="col-xs-9">
                  <input name="korektif_reg" type="text" class="form-control" id="Korektif_reg" 
                  placeholder="Solusi yang harus dilakukan">
                </div>
              </div>

              <div class="form-group row">
                <label for="foto_perbaikan" class="col-xs-3 col-form-label">Foto Pendukung </label>
                <div class="col-xs-9">
                  <input name="foto_perbaikan" class="form-control" type="file" id="foto_perbaikan">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="nama_sukucadang" class="col-xs-3 col-form-label">Nama Sperpart</label>
                  <div class="col-xs-9">
                  <select name="suku_cadang" class="form-control" id="nama_sukucadang1">
                  <option>-- Pilih Item --</option>
                    @foreach ($itemSperpart as $part)
                    <option value="<?= $part['nama'] ?>">
                      <?= $part['nama'] ?></option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="volume" class="col-xs-3 col-form-label">Volume Sperpart</label>
                  <div class="col-xs-9">
                    <input name="volume" type="text" class="form-control" id="volume_part" 
                    placeholder="Volume sperpart/ banyak yang digunakan">
                </div>
              </div>

              <div class="form-group row">
                <label for="harga_satuan" class="col-xs-3 col-form-label">Harga Satuan Sperpart </label>
                  <div class="col-xs-9">
                    <input name="harga_satuan" type="text" class="form-control" id="harga_satuan_part" 
                    placeholder="Harga Satuan dari sperpart">
                </div>
              </div>

              <div class="form-group row">
                <label for="jumlah_harga" class="col-xs-3 col-form-label">Jumlah Harga Sperpart</label>
                  <div class="col-xs-9">
                    <input name="jumlah_harga" type="text" class="form-control" id="jumlah_harga_part" 
                    placeholder="Jumlah Harga Sperpart" readonly>
                </div>
              </div>
              <!-- <div class="form-group row">
                <label for="Pelapor_reg" class="col-xs-3 col-form-label">Pelapor</label>
                  <div class="col-xs-9"> -->
                  <input name="pelapor_reg" type="hidden" class="form-control" id="Pelapor_reg_5"
                  placeholder="Terisi Otomatis" readonly>
                <!-- </div>
              </div> -->

              <!-- <div class="form-group row">
                <label for="Keluhan_Dari_alat_reg" class="col-xs-3 col-form-label">Keluhan Dari Alat</label>
                  <div class="col-xs-9"> -->
                    <input name="keluhan_dari_alat_reg" type="hidden" class="form-control" id="Keluhan_Dari_alat_reg_5"
                    placeholder="Terisi Otomatis" readonly>
                <!-- </div>
              </div> -->

              <!-- <div class="form-group row">
                <label for="" class="col-xs-3 col-form-label">ID Perbaikan
                <i class="text-danger">*</i></label>
                <div class="col-xs-9"> -->
                    <input name="id_perbaikan_reg" type="hidden" class="form-control"
                    id="Id_Perbaikan_reg" placeholder="Id Perbaikan" value="{{ $kode_aset }}" readonly
                    style="cursor: not-allowed;">
                <!-- </div>
              </div> -->

              <!-- <div class="form-group row">
                <label for="Tanggal_Perbaikan_reg" class="col-xs-3 col-form-label">Tanggal Perbaikan
                  <i class="text-danger">*</i></label>
                  <div class="col-xs-9"> -->
                    <input name="tanggal_perbaikan_reg" type="hidden" class="form-control"
                    id="Tanggal_Perbaikan_reg" placeholder="Tanggal Perbaikan"
                    value="<?php echo date(now()); ?>" readonly
                    style="cursor: not-allowed;">
                <!-- </div>
              </div> -->
              <div class="form-group row">
                <div class="col-sm-offset-3 col-sm-6">
                  <div class="ui buttons">
                    <button class="ui positive button">Tambah</button>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer" style="color:black; background-color:#042a4a;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
@endsection

@push('addon-script')

<!-- Tambahkan script untuk QR Scanner -->
<script src="https://unpkg.com/html5-qrcode"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const qrScanner = document.getElementById("qr-reader");
    const inputField = document.getElementById("id_aset_reg");
    const startScanButton = document.getElementById("startScan");

    let scannerActive = false;
    let html5QrCode;

    startScanButton.addEventListener("click", function() {
      if (!scannerActive) {
        qrScanner.style.display = "block"; // Tampilkan scanner
        scannerActive = true;

        html5QrCode = new Html5Qrcode("qr-reader");
        Html5Qrcode.getCameras().then(devices => {
          if (devices.length > 0) {
            let backCamera = devices.find(device => device.label.toLowerCase().includes("back")) || devices[0];

            html5QrCode.start(
              backCamera.id, // Pilih kamera belakang jika tersedia
              {
                fps: 10,
                qrbox: {
                  width: 250,
                  height: 250
                },
                rememberLastUsedCamera: true
              },
              function(decodedText) {
                inputField.value = decodedText; // Isi input dengan hasil scan
                html5QrCode.stop(); // Hentikan scanner setelah berhasil scan
                qrScanner.style.display = "none"; // Sembunyikan scanner
                scannerActive = false;
              },
              function(errorMessage) {
                console.log(errorMessage); // Debug jika gagal scan
              }
            ).catch(err => {
              console.log("Error memulai scanner: ", err);
            });
          }
        }).catch(err => {
          console.log("Tidak dapat mengakses kamera: ", err);
        });
      }
    });
  });
</script>
<script>

// *Function autofill form perbaikan_part* //
$(document).ready(function() {
    $('#id_aset_reg_5').on('click', function() {
      let idPart = $(this).val().trim(); //masukin nilai id yang dipilih ke variabel 
      console.log("ID yang dimasukan :", idPart); // cek id 

      if (!idPart) return; //Kalo kosong proses berhenti

      //Ambil data pake API dan kirim ke masing-masing field / input        
      fetch(`/dashboard/ppm/autofillpart/${encodeURIComponent(idPart)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server: ", data);
          let item = Array.isArray(data) ? data[0] : data || {};
          $('#nama_alat_reg_5').val(item.nama_req || '');
          $('#merek_alat_reg_5').val(item.merek_req || '');
          $('#serial_number_reg_5').val(item.sn_req || '');
          $('#lokasi_alat_reg_5').val(item.lokasi_req || '');
          $('#type_alat_reg_5').val(item.type_req || '');
          $('#Pelapor_reg_5').val(item.pelapor_req || '');
          $('#Keluhan_Dari_alat_reg_5').val(item.kerusakan_req || '');
        })
        .catch(error => console.error("Error AJAX:", error));
    });
  });
  // *Function autofill form perbaikan_part* //

  // *Function autofill form perbaikan* //
  $(document).ready(function() {
    $('#id_aset_reg').on('click', function() {
      let idAset = $(this).val().trim(); //masukin nilai id yang dipilih ke variabel 
      console.log("ID yang dimasukan :", idAset); // cek id 

      if (!idAset) return; //Kalo kosong proses berhenti

      //Ambil data pake API dan kirim ke masing-masing field / input        
      fetch(`/dashboard_user/autofill/${encodeURIComponent(idAset)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server: ", data);
          let item = Array.isArray(data) ? data[0] : data || {};
          $('#nama_alat_reg').val(item.nama_req || '');
          $('#merek_alat_reg').val(item.merek_req || '');
          $('#serial_number_reg').val(item.sn_req || '');
          $('#lokasi_alat_reg').val(item.lokasi_req || '');
          $('#type_alat_reg').val(item.type_req || '');
          $('#pelapor_reg').val(item.pelapor_req || '');
          $('#keluhan_dari_alat_reg').val(item.kerusakan_req || '');
        })
        .catch(error => console.error("Error AJAX:", error));
    });
  });
  // *Function autofill form perbaikan* //

  // *Fuction autofill form pengiriman* //
  $(document).ready(function() {
    $('#Perbaikan_reg').on('click', function() {
      let idPerbaikan = $(this).val().trim(); //masukin nilai id yang dipilih ke variabel
      console.log("ID yang dimasukan :", idPerbaikan); // cek id

      if (!idPerbaikan) return; //Kalo kosong proses berhenti

      //Ambil data pake API dan kirim ke masing-masing field / input 
      fetch(`/dashboard/ppm/autofill_pengiriman/${encodeURIComponent(idPerbaikan)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server: ", data);
          let item2 = Array.isArray(data) ? data[0] : data || {};
          $('#tanggal_perbaikan_reg_2').val(item2.tanggal_perbaikan_reg || '');
          $('#id_aset_reg_2').val(item2.id_aset_reg || '');
          $('#nama_alat_reg_2').val(item2.nama_alat_reg || '');
          $('#merek_alat_reg_2').val(item2.merek_alat_reg || '');
          $('#type_alat_reg_2').val(item2.type_alat_reg || '');
          $('#seri_number_reg_2').val(item2.serial_number_reg || '');
          $('#lokasi_alat_reg_2').val(item2.lokasi_alat_reg || '');
          $('#pelapor_reg_2').val(item2.pelapor_reg || '');
          $('#teknisi_1_reg_2').val(item2.teknisi_1_reg || '');
          $('#teknisi_2_reg_2').val(item2.teknisi_2_reg || '');
          $('#teknisi_3_reg_2').val(item2.teknisi_3_reg || '');
          $('#teknisi_4_reg_2').val(item2.teknisi_4_reg || '');
          $('#teknisi_5_reg_2').val(item2.teknisi_5_reg || '');
          $('#ka_instalasi_reg_2').val(item2.ka_instalasi_reg || '');
          $('#suku_cadang_2').val(item2.suku_cadang || '');
          $('#volume_2').val(item2.volume || '');
          $('#harga_satuan_2').val(item2.harga_satuan || '');
          $('#jumlah_harga_2').val(item2.jumlah_harga || '');
        })
        .catch(error => console.log("ERROR AJAX:", error));
    });
  });
  // *Fuction autofill form pengiriman end* //

  // *Fuction autofill form pengembalian* //
  $(document).ready(function() {
    $('#id_perbaikan_reg2').on('click', function() {
      let idPerbaikan2 = $(this).val().trim();
      console.log("ID yang dimasukan :", idPerbaikan2);

      if (!idPerbaikan2) return;

      fetch(`/dashboard/ppm/autofill_pengiriman/${encodeURIComponent(idPerbaikan2)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server: ", data);
          let item3 = Array.isArray(data) ? data[0] : data || {};
          $('#tanggal_perbaikan_reg_3').val(item3.tanggal_perbaikan_reg || '');
          $('#id_aset_reg_3').val(item3.id_aset_reg || '');
          $('#nama_alat_reg_3').val(item3.nama_alat_reg || '');
          $('#merek_reg_3').val(item3.merek_alat_reg || '');
          $('#tipe_reg_3').val(item3.type_alat_reg || '');
          $('#serial_number_reg_3').val(item3.serial_number_reg || '');
          $('#pelapor_reg_3').val(item3.pelapor_reg || '');
          $('#lokasi_alat_reg_3').val(item3.lokasi_alat_reg || '');
          $('#teknisi1_reg_3').val(item3.teknisi_1_reg || '');
          $('#teknisi2_reg_3').val(item3.teknisi_2_reg || '');
          $('#teknisi3_reg_3').val(item3.teknisi_3_reg || '');
          $('#teknisi4_reg_3').val(item3.teknisi_4_reg || '');
          $('#teknisi5_reg_3').val(item3.teknisi_5_reg || '');
          $('#ka_instalasi_reg_3').val(item3.ka_instalasi_reg || '');
          $('#suku_cadang_3').val(item3.suku_cadang || '');
          $('#volume_3').val(item3.volume || '');
          $('#harga_satuan_3').val(item3.harga_satuan || '');
          $('#jumlah_harga_3').val(item3.jumlah_harga || '');
        })
        .catch(error => console.log("ERROR AJAX : ", error))
    })
  })
  // *Fuction autofill form pengembalian end* //

  // *Fuction autofill form penghapusan* //
  $(document).ready(function() {
    $('#Id_Perbaikan_reg3').on('click', function() {
      let idPerbaikan3 = $(this).val().trim();
      console.log("ID yang dimasukan : ", idPerbaikan3);

      if (!idPerbaikan3) return;

      fetch(`/dashboard/ppm/autofill_pengiriman/${encodeURIComponent(idPerbaikan3)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server : ", data);
          let item4 = Array.isArray(data) ? data[0] : data || {};
          $('#tanggal_perbaikan_reg_4').val(item4.tanggal_perbaikan_reg || '');
          $('#nama_alat_reg_4').val(item4.nama_alat_reg || '');
          $('#merek_alat_reg_4').val(item4.merek_alat_reg || '');
          $('#type_alat_reg_4').val(item4.type_alat_reg || '');
          $('#serial_number_reg_4').val(item4.serial_number_reg || '');
          $('#lokasi_alat_reg_4').val(item4.lokasi_alat_reg || '');
          $('#pelapor_reg_4').val(item4.pelapor_reg || '');
          $('#teknisi_1_reg_4').val(item4.teknisi_1_reg || '');
          $('#teknisi_2_reg_4').val(item4.teknisi_2_reg || '');
          $('#teknisi_3_reg_4').val(item4.teknisi_3_reg || '');
          $('#teknisi_4_reg_4').val(item4.teknisi_4_reg || '');
          $('#teknisi_5_reg_4').val(item4.teknisi_5_reg || '');
          $('#ka_instalasi_reg_4').val(item4.ka_instalasi_reg || '');
          $('#suku_cadang_4').val(item4.suku_cadang || '');
          $('#volume_4').val(item4.volume || '');
          $('#harga_satuan_4').val(item4.harga_satuan || '');
          $('#jumlah_harga_4').val(item4.jumlah_harga || '');
        })
        .catch(error => console.log("ERROR AJAX : ", error))
    })
  })
  // *Fuction autofill form penghapusan end* //
</script>

<script>
  // *function copy id aset* //
  function copy(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
    document.getElementById('id_aset_reg').value = inp.value = that.textContent;
  }
  // *function copy id aset end* //

  // *function copy id perbaikan untuk pengiriman* //
  function copy2(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
    document.getElementById('Perbaikan_reg').value = inp.value = that.textContent;
  }
  // *function copy id perbaikan untuk pengiriman end* //

  // *function copy id perbaikan untuk pengembalian* //
  function copy3(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
    document.getElementById('id_perbaikan_reg2').value = inp.value = that.textContent;
  }
  // *function copy id perbaikan untuk pengembalian end* //

  // *function copy id perbaikan untuk penghapusan* //
  function copy4(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
    document.getElementById('Id_Perbaikan_reg3').value = inp.value = that.textContent;
  }
  // *function copy id perbaikan untuk penghapusan end* //

  // *function copy id perbaikan untuk penghapusan* //
  function copy5(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
    document.getElementById('id_aset_reg_5').value = inp.value = that.textContent;
  }
  // *function copy id perbaikan untuk penghapusan end* //
</script>

<script>
  // *hidden Daftar Sperpart* //
  function hiddenSperpart() {
    var tabSperpart = document.getElementById('tabSperpart');
    if (tabSperpart.style.display === "none") {
      tabSperpart.style.display = "block";
    } else {
      tabSperpart.style.display = "none"
    }
  }
  // *hidden Daftar Sperpart end* //

  // *hidden daftar perbaikan* //
  function hiddenPerbaikan() {
    var tabPerbaikan = document.getElementById('tabPerbaikan');
    if (tabPerbaikan.style.display === "none") {
      tabPerbaikan.style.display = "block";
    } else {
      tabPerbaikan.style.display = "none"
    }
  }
  // *hidden daftar perbaikan end* //

  //*hidden daftar pengiriman* //
  function hiddenPengiriman() {
    var tabPengiriman = document.getElementById('tabPengiriman');
    if (tabPengiriman.style.display === "none") {
      tabPengiriman.style.display = "block";
    } else {
      tabPengiriman.style.display = "none"
    }
  }
  //*hidden daftar pengiriman end* //    

  // *hidden daftar pengembalian* //
  function hiddenPengembalian() {
    var tabPengembalian = document.getElementById('tabPengembalian');
    if (tabPengembalian.style.display === "none") {
      tabPengembalian.style.display = "block";
    } else {
      tabPengembalian.style.display = "none"
    }
  }
  // *hidden daftar pengembalian end* //

  // *hidden daftar penghapusan* //
  function hiddenPenghapusan() {
    var tabPenghapusan = document.getElementById('tabPenghapusan');
    if (tabPenghapusan.style.display === "none") {
      tabPenghapusan.style.display = "block"
    } else {
      tabPenghapusan.style.display = "none"
    }
  }
  // *hidden daftar penghapusan end* //
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    let count = 2;
    document.getElementById("btnTambahTeknisi").addEventListener("click", function() {
      if (count <= 5) {
        document.getElementById("teknisi_" + count).style.display = "flex";
        count++;
        if (count > 5) {
          this.style.display = "none";
        }
      }
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let count = 2;
    document.getElementById("btnTambahTeknisi2").addEventListener("click", function() {
      if (count <= 5) {
        document.getElementById("teknisi2_" + count).style.display = "flex";
        count++;
        if (count > 5) {
          this.style.display = "none";
        }
      }
    });
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const hargaInput = document.getElementById("harga_satuan_part");

    hargaInput.addEventListener("input", function(e) {
        let value = e.target.value.replace(/[^0-9]/g, ""); // Hanya angka
        if (value) {
            e.target.value = formatRupiah(value);
        } else {
            e.target.value = "";
        }
    });

    function formatRupiah(angka) {
        return "Rp " + angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
});
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const volumeInput = document.getElementById("volume_part");
    const hargaSatuanInput = document.getElementById("harga_satuan_part");
    const jumlahHargaInput = document.getElementById("jumlah_harga_part");

    const formatRupiah = (angka) => "Rp " + angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    const cleanRupiah = (angka) => angka.replace(/[^0-9]/g, "");

    const hitungJumlahHarga = () => {
        const volume = parseFloat(volumeInput.value) || 0;
        const hargaSatuan = parseFloat(cleanRupiah(hargaSatuanInput.value)) || 0;
        jumlahHargaInput.value = volume * hargaSatuan ? formatRupiah((volume * hargaSatuan).toString()) : "";
    };

    [hargaSatuanInput, volumeInput].forEach(input => {
        input.addEventListener("input", () => {
            if (input === hargaSatuanInput) input.value = formatRupiah(cleanRupiah(input.value));
            hitungJumlahHarga();
        });
    });
});
</script>
<script>
  document.getElementById('unregisterBtn').addEventListener('click', function() {
    // Atur nilai dari id_aset_reg
    const idInput = document.getElementById('id_aset_reg');
    idInput.value = 'UNREGISTERED';

    //Jadikan input enable
    const inputFields = [

      'nama_alat_reg',
      'merek_alat_reg',
      'type_alat_reg',
      'serial_number_reg',
      'lokasi_alat_reg',
    ]; 

    inputFields.forEach(function (id) {
      const input = document.getElementById(id);
      input.removeAttribute('readonly');
      input.style.cursor = 'text';
      input.placeholder = 'Wajib terisi';
    });
  });
</script>
@endpush