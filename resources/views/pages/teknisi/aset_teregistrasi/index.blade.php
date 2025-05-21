@extends('layouts.teknisi')

@section('content')
@section('title', 'Aset Teregistrasi')
<style>
    input[readonly] {
    cursor: not-allowed;
  }

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
                      <th scope="col">No</th>
                      <th scope="col">Id</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Type</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Pelapor</th>
                      <th scope="col">Kerusakan</th>
                      <th scope="col">Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($itemPesanan as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td title="klik untuk copy ke form" style="cursor: pointer;" onclick="copy(this)"><span>{{ $item->id }}<span></td>
                      <td>{{ $item->nama_req }}</td>
                      <td>{{ $item->merek_req }}</td>
                      <td>{{ $item->type_req }}</td>
                      <td>{{ $item->sn_req }}</td>
                      <td>{{ $item->pelapor_req }}</td>
                      <td>{{ $item->kerusakan_req }}</td>
                      <td>{{ $item->tanggal_req }}</td>
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
                <form action="{{ route('teknisi.perbaikan_teknisi.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="from-group row">
                  <div class="col-xs-9 mt-2">
                    <button type="button" class="btn btn-warning btn-sm" id="unregisterBtn">
                      UNREGISTERED
                    </button>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="ID_Aset_reg" class="col-xs-3 col-form-label">ID Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset_reg" type="text" class="form-control" id="id_aset_reg" 
                      placeholder="Klik id aset untuk copy ke sini" readonly data-toggle="tooltip" 
                      data-palcement="top" title="klik disini untuk load data alat" style="cursor: pointer;">
                    </div>
                  </div>

                  @php
                  $field = [
                    'nama_alat_reg' => 'Nama Alat',
                    'merek_alat_reg' => 'Merek',
                    'type_alat_reg' => 'Tipe',
                    'serial_number_reg' => 'Serial Number',
                    'lokasi_alat_reg' => 'Lokasi Alat',
                    ]
                  @endphp
                  @foreach($field as $name => $label)
                    <div class="form-group row">
                      <label for="{{ $name }}" class="col-xs-3 col-form-label">{{ $label }}<i class="text-danger">*</i></label>
                      <div class="col-xs-9">
                        <input name="{{ $name }}" id="{{ $name }}" type="text" class="form-control" placeholder="Terisi Otomatis" readonly>
                      </div>
                    </div>
                  @endforeach

                  <div class="form-group row">
                    <label for="ka_instalasi_reg" class="col-xs-3 col-form-label">Kepala Ruangan</label>
                    <div class="col-xs-9">
                      <input name="ka_instalasi_reg" type="text" class="form-control" id="ka_instalasi_reg" placeholder="Kepala Ruangan yang betanggung jawab">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Teknisi_1_reg" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
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
                      <button type="button" class="btn btn-primary mt-2" id="btn_tambah_teknisi"
                      data-toggle="tooltip" data-placement="top" title="Tambah Teknisi"
                      style="cursor: pointer">+</button>
                    </div>
                  </div>
                  
                  @for ($i = 2; $i <= 5; $i++)
                    <div class="form-group row teknisi-field" id="teknisi_{{ $i }}" style="display: none;" >
                    <label for="Teknisi_{{ $i }}_reg" class="col-xs-3 col-form-label">Teknisi {{ $i }}</label>
                    <div class="col-xs-5">
                      <select name="teknisi_{{ $i }}_reg" id="Teknisi_{{ $i }}_reg" class="form-control">
                        <option value="-">--Pilih Teknisi --</option>
                        @foreach($teknisis as $teknisi)
                        <option value="{{ $teknisi['nama_teknisi'] }}">{{ $teknisi['nama_teknisi'] }}</option>
                        @endforeach
                      </select>
                    </div>
                    </div>
                  @endfor

                  <div class="form-group row">
                    <label for="korektif_reg" class="col-xs-3 col-form-label">Korektif</label>
                    <div class="col-xs-9">
                      <input name="korektif_reg" type="text" class="form-control" id="korektif_reg" placeholder="Korektif">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="foto_perbaikan" class="col-xs-3 col-form-label">Foto Pendukung </label>
                    <div class="col-xs-9">
                      <input name="foto_perbaikan" class="form-control" type="file" id="foto_perbaikan">
                    </div>
                  </div>
                  
                  @php
                  $fieldHidden = [
                    'pelapor_reg', 'keluhan_dari_alat_reg', 'suku_cadang',
                    'volume', 'harga_satuan', 'jumlah_harga',
                    ]
                  @endphp
                  @foreach($fieldHidden as $hidden)
                  <input name="{{ $hidden }}" id="{{ $hidden }}" type="hidden" class="form-control" readonly>
                  @endforeach
                  <input name="id_perbaikan_reg" id="Id_Perbaikan_reg" type="hidden" class="form-control" value="{{ $kode_aset }}" readonly>
                  <input name="tanggal_perbaikan_reg" id="tanggal_perbaikan_reg" type="hidden" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-warning mt-2" data-toggle="modal" data-target="#exampleModal2">Penggantian Sperpart</button>
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
    <!--Form Perbaikan end-->
    <!--Tabel Perbaikan-->
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
                      <th class="none">Id Perbaikan</th>
                      <th class="none">ID_Aset :</th>
                      <th class="none">Tanggal_Perbaikan :</th>
                      <th class="">Nama</th>
                      <th class="">Merek</th>
                      <th class="">Type</th>
                      <th class="">Serial Number</th>
                      <th class="">Lokasi</th>
                      <th class="">Status</th>
                      <th class="">Kondisi Alat </th>
                      <th class="none">Pelapor :</th>
                      <th class="none">Kepala Ruangan :</th>
                      <th class="none">Teknisi 1 :</th>
                      <th class="none">Teknisi 2 :</th>
                      <th class="none">Teknisi 3 :</th>
                      <th class="none">Teknisi 4 :</th>
                      <th class="none">Teknisi 5 :</th>
                      <th class="none">Nama Sperpart :</th>
                      <th class="none">Volume Sperpart :</th>
                      <th class="none">Harga Satuan Sperpart :</th>
                      <th class="none">Jumlah Harga Sperpart :</th>
                      <th class="none">Keluhan Dari alat :</th>
                      <th class="none">Korektif :</th>
                      <th scope="col" class="none">Foto Perbaikan :</th>
                      <th class="">Tombol Eksekusi</th>
                    </thead>
                    <tbody>
                      @forelse ($items as $index => $item)
                      <tr class="odd gradeX">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->id_perbaikan_reg }}</td>
                        <td>{{ $item->id_aset_reg }}</td>
                        <td>{{ $item->tanggal_perbaikan_reg }}</td>
                        <td>{{ $item->nama_alat_reg }}</td>
                        <td>{{ $item->merek_alat_reg }}</td>
                        <td>{{ $item->type_alat_reg }}</td>
                        <td>{{ $item->serial_number_reg }}</td>
                        <td>{{ $item->lokasi_alat_reg }}</td>
                        <td>
                          <form action="{{ url('/dashboard_teknisi/perbaikan_teknisi/update', $item->id_perbaikan_reg) }}" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-{{ $item->status == 0 ? 'warning' : 'danger' }}" type="submit">{{ $item->status == 0 ? 'Sudah di Setujui' : 'Belum di Setujui' }}</button>
                          </form>
                        </td>
                        <td>
                          <form
                            action="{{ url('/dashboard_teknisi/perbaikan_teknisi/kondisi', $item->id_perbaikan_reg) }}" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-{{ $item->keterangan_kondisi_alat_reg == 0 ? 'success' : 'warning' }}"
                              type="submit">{{ $item->keterangan_kondisi_alat_reg == 0 ? 'Selesai, dikembalikan' : 'Dalam perbaikan' }}</button>
                          </form>
                        </td>
                        <td>{{ $item->pelapor_reg }}</td>
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
                          <a href="/dashboard_teknisi/perbaikan_teknisi/update_perbaikan/{{ $item->id_perbaikan_reg }}/edit" 
                          class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="fa fa-edit"></i>
                        </a>
                          <a target="_blank" href="/dashboard_teknisi/perbaikan_teregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_reg }}" 
                          class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Print">
                          <i class="fa fa-print"></i>
                        </a>
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
    </div>
    <!--Tabel Perbaikan-->
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
                        <th scope="col">Nama Alat</th>
                        <th scope="col">Merek Alat</th>
                        <th scope="col">Type Alat</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Pelapor</th>
                        <th scope="col">Kerusakan Alat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Tombol Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($itemPesanan as $index => $item)
                      <tr>
                        <td title="klik untuk copy ke form" onclick="copy5(this)" style="cursor: pointer;">{{ $item->id }}</td>
                        <td>{{ $item->nama_req }}</td>
                        <td>{{ $item->merek_req }}</td>
                        <td>{{ $item->type_req }}</td>
                        <td>{{ $item->sn_req }}</td>
                        <td>{{ $item->pelapor_req }}</td>
                        <td>{{ $item->kerusakan_req }}</td>
                        <td>{{ $item->tanggal_req }}</td>
                        <td>
                          <form action="{{ route('pesanan.destroy', $item->id) }}" method="POST" class="d-inline">
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
              <form action="{{ route('teknisi.perbaikan_teknisi.create') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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
                  <button type="button" class="btn btn-primary mt-2" id="btn_tambah_teknisi5"
                    data-toggle="tooltip" data-placement="top" title="Tambah Teknisi"
                    style="cursor: pointer;">+</button>
                </div>
              </div>

              @for ($i = 2; $i <= 5; $i++)
                <div class="form-group row teknisi-field" id="teknisi5_{{ $i }}" style="display: none;">
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
              <input name="pelapor_reg" type="hidden" class="form-control" id="pelapor_reg"placeholder="Terisi Otomatis" readonly>
              <input name="keluhan_dari_alat_reg" type="hidden" class="form-control" id="keluhan_dari_alat_reg" placeholder="Terisi Otomatis" readonly>
              <input name="id_perbaikan_reg" type="hidden" class="form-control" id="Id_Perbaikan_reg" placeholder="Id Perbaikan" value="{{ $kode_aset }}" readonly style="cursor: not-allowed;">
              <input name="tanggal_perbaikan_reg" type="hidden" class="form-control" id="Tanggal_Perbaikan_reg" placeholder="Tanggal Perbaikan" value="<?php echo date(now()); ?>" readonly style="cursor: not-allowed;">

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
<script type="text/javascript">
  // *Function scanner camera* //
    //  - //
  // *Function scanner camera* //

  // *Function autofill form perbaikan* // 
    $(document).ready(function() {
      $('#id_aset_reg').on('click', function() {
        let idAset = $(this).val().trim(); // mmemasukan nilai id yang dipilih ke variabel
        console.log("ID yang dimasukan : ", idAset); // cek id

        if (!idAset) return; // Kalo bukan nilai id, proses berhenti

        //Ambil data pake API dan kirim ke masing-masing field
        fetch(`/dashboard_teknisi/autofill/${encodeURIComponent(idAset)}`)
        .then(response => response.json())
        .then(data => {
          console.log("Data dari server : ", data);
          let item = Array.isArray(data) ? data[0] : data || {};
          $('#nama_alat_reg').val(item.nama_req || '');
          $('#merek_alat_reg').val(item.merek_req || '');
          $('#type_alat_reg').val(item.type_req || '');
          $('#serial_number_reg').val(item.sn_req || '');
          $('#lokasi_alat_reg').val(item.lokasi_req || '');
          $('#pelapor_reg').val(item.pelapor_req || '');
          $('#keluhan_dari_alat_reg').val(item.kerusakan_req || '');
        })
        .catch(error => console.error("Error AJAX:", error));
      })
    })
  // *Function autofill form perbaikan end* //    

  // *Function autofill from sperpart* //
  $(document).ready(function() {
    $('#id_aset_reg_5').on('click', function() {
      let idPart = $(this).val().trim();
      console.log("ID yang dimasukan :", idPart);

      if(!idPart) return;

      fetch(`/dashboard_teknisi/autofill/${encodeURIComponent(idPart)}`)
      .then(response => response.json())
      .then(data => {
        console.log("Data dari server: ", data);
        let item = Array.isArray(data) ? data[0] : data || {};
        $('#nama_alat_reg_5').val(item.nama_req || '');
        $('#merek_alat_reg_5').val(item.merek_req || '');
        $('#type_alat_reg_5').val(item.type_req || '');
        $('#serial_number_reg_5').val(item.sn_req || '');
        $('#lokasi_alat_reg_5').val(item.lokasi_req || '');
        $('#pelapor_reg_5').val(item.pelapor_req || '');
        $('#keluhan_dari_alat_reg_5').val(item.kerusakan_req || '');
      })
      .catch(error => console.error("Error AJAX:", error));
    })
  })
  // *Function autofill from sperpart end* //   
</script>

<script>
  // *fucntion copy id aset* //
  function copy(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
    document.getElementById('id_aset_reg').value = inp.value = that.textContent;
    // *fucntion copy id aset end* //
  }

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
  document.addEventListener("DOMContentLoaded", function() {
    let count = 2;
    document.getElementById("btn_tambah_teknisi").addEventListener("click", function() {
      if (count <= 5) {
        document.getElementById("teknisi_" + count).style.display = "flex";
        count++;
        if (count > 5) {
          this.style.display = "none";
        }
      }
    })
  })
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let count = 2;
    document.getElementById("btn_tambah_teknisi5").addEventListener("click", function() {
      if (count <= 5) {
        document.getElementById("teknisi5_" + count).style.display = "flex";
        count++;
        if (count > 5) {
          this.style.display = "none";
        }
      }
    })
  })
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