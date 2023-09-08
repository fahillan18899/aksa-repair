@extends('layouts.admin')

@section('content')
@section('title', 'Aset Unregistrasi')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">

     <div class="p-l-30 p-r-30">
       <div class="header-icon"><i class="fa fa-wrench"></i></div>
       <div class="header-title">
         <h1>MENU FORM UNREGISTRASI</h1>
         <small>Form Unregistrasi</small>
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
     <!-- content -->
     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-default thumbnail">

           <div class="panel-heading no-print">
             <h1>Form Perbaikan Alat Unregistrasi</h1>
           </div>

           <div class="panel-body panel-form">

             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ url('/dashboard/ppm/tambah_unregistrasi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                 @csrf
                  @method('post')

                   <div class="form-group row">
                     <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un" placeholder="Id Perbaikan" value="{{ $kode_aset }}" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_perbaikan_un" type="date" class="form-control" id="tanggal_perbaikan_un" placeholder="Tanggal Perbaikan" value="<?php echo date('Y-m-d') ?>" readonly>
                     </div>
                   </div>

                   <!--<div class="form-group row">
                     <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un" placeholder="Nama Alat" value="">
                     </div>
                   </div>-->

                   <div class="form-group row">
                    <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="nama_alat_un" class="form-control" id="nama_alat_un">
                        <option>Pilih Alat</option>
                        @foreach($alats as $alat)
                        <option value="<?= $alat['nama_alat']; ?>"><?= $alat['nama_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                   <div class="form-group row">
                     <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un" placeholder="Merek Alat" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="type_alat_un" type="text" class="form-control" id="type_alat_un" placeholder="Type Alat" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="serial_number_un" type="text" class="form-control" id="serial_number_un" placeholder="Serial Number" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat</label>
                     <div class="col-xs-9">
                       <select name="lokasi_alat_un" class="form-control" id="lokasi_alat_un">
                         <option value="" selected="selected">Pilih Lokasi</option>
                        @foreach($ruangans as $alat)
                          <option value="<?= $alat['lokasi_alat']; ?>"><?= $alat['lokasi_alat']; ?></option>
                        @endforeach
                       </select>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="pelapor_un" type="text" class="form-control" id="pelapor_un" placeholder="Pelapor" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan Kondisi Alat</label>
                     <div class="col-xs-9">
                       <select name="keterangan_un" class="form-control" id="keterangan_un">
                         <option value="" selected="selected">Select Keterangan</option>
                         <option value="Selesai Alat Dikembalikan">Selesai Alat Dikembalikan</option>
                         <option value="Alat Dalam Perbaikan" >Alat Dalam Perbaikan</option>
                         <option value="Alat Dilanjutkan Ke Rekanan" >Alat Dilanjutkan Ke Rekanan</option>
                       </select>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="ka_instalasi_un" class="col-xs-3 col-form-label">Ka Instalasi<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un" placeholder="Ka Instalasi" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1 <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <select name="teknisi_1_un" class="form-control" id="teknisi_1_un">
                         <option value="" selected="selected">Select Teknisi </option>
                         @foreach($teknisis as $teknisi)
                          <option value="<?= $teknisi['nama_teknisi']; ?>"><?= $teknisi['nama_teknisi']; ?></option>
                        @endforeach
                       </select>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                     <div class="col-xs-9">
                       <select name="teknisi_2_un" class="form-control" id="teknisi_2_un">
                         <option value="" selected="selected">Select Teknisi</option>
                        @foreach($teknisis as $teknisi)
                          <option value="<?= $teknisi['nama_teknisi']; ?>"><?= $teknisi['nama_teknisi']; ?></option>
                        @endforeach
                       </select>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                     <div class="col-xs-9">
                       <select name="teknisi_3_un" class="form-control" id="teknisi_3_un">
                         <option value="" selected="selected">Select Teknisi</option>
                        @foreach($teknisis as $teknisi)
                          <option value="<?= $teknisi['nama_teknisi']; ?>"><?= $teknisi['nama_teknisi']; ?></option>
                        @endforeach
                       </select>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="keluhan_dari_alat_un" class="col-xs-3 col-form-label">Keluhan Dari Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="keluhan_dari_alat_un" type="text" class="form-control" id="keluhan_dari_alat_un" placeholder="Keluhan Dari Alat" value="">
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
         <th scope="col">Tanggal_Perbaikan</th>
         <th scope="col">Nama_Alat</th>
         <th scope="col">Merek_Alat</th>
         <th scope="col">Type_Alat</th>
         <th scope="col">Serial_Number</th>
         <th scope="col">Lokasi_Alat</th>
         <th scope="col">Pelapor</th>
         <th scope="col">Keterangan</th>
         <th scope="col">KA_Instalasi</th>
         <th scope="col">Teknisi_1</th>
         <th scope="col">Teknisi_2</th>
         <th scope="col">Teknisi_3</th>
         <th scope="col">Keluhan_Dari_Alat</th>
         <th scope="col">Tombol_Aksi</th>
       </thead>
       <tbody>
       @forelse ($perbaikan as $index => $item)
       <tr>
        <td>{{ $index + 1 }}</td>
         <td><?php echo $item ['id_perbaikan_un'] ?></td>
         <td><?php echo $item ['tanggal_perbaikan_un'] ?></td>
         <td><?php echo $item ['nama_alat_un'] ?></td>
         <td><?php echo $item ['merek_alat_un'] ?></td>
         <td><?php echo $item ['type_alat_un'] ?></td>
         <td><?php echo $item ['serial_number_un'] ?></td>
         <td><?php echo $item ['lokasi_alat_un'] ?></td>
         <td><?php echo $item ['pelapor_un'] ?></td>
         <td><?php echo $item ['keterangan_un'] ?></td>
         <td><?php echo $item ['ka_instalasi_un'] ?></td>
         <td><?php echo $item ['teknisi_1_un'] ?></td>
         <td><?php echo $item ['teknisi_2_un'] ?></td>
         <td><?php echo $item ['teknisi_3_un'] ?></td>
         <td><?php echo $item ['keluhan_dari_alat_un'] ?></td>
         <td>
            <a href="/dashboard/ppm/aset_unregistrasi/edit_perbaikan/{{ $item->id_perbaikan_un }}/edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

            <a href="/dashboard/ppm/aset_unregistrasi/cetak_perbaikan/{{ $item->id_perbaikan_un }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
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

     <!-- content -->
     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-default thumbnail">

           <div class="panel-heading no-print">
             <h1>Form Pengiriman Alat Unregistrasi</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ url('/dashboard/ppm/tambah_pengiriman_un') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                 @csrf

                   <div class="form-group row">
                     <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un1" placeholder="Id Perbaikan" value="" onkeyup="autofill_Pengiriman_un()">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_perbaikan_un" type="text" class="form-control" id="tanggal_perbaikan_un1" placeholder="Tanggal Perbaikan" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="tanggal_pengiriman_un" class="col-xs-3 col-form-label">Tanggal Pengiriman<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_pengiriman_un" type="date" class="form-control" id="tanggal_pengiriman_un" placeholder="Tanggal Pengiriman" value="<?php echo date('Y-m-d') ?>" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un1" placeholder="Nama Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un1" placeholder="Merek Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="type_alat_un" type="text" class="form-control" id="type_alat_un1" placeholder="Type Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="serial_number_un" class="col-xs-3 col-form-label">Seri Number<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="serial_number_un" type="text" class="form-control" id="serial_number_un1" placeholder="Seri Number" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="lokasi_alat_un" type="text" class="form-control" id="lokasi_alat_un1" placeholder="Lokasi Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="pelapor_un" type="text" class="form-control" id="pelapor_un1" placeholder="Teknisi 1" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="keterangan_un" type="text" class="form-control" id="keterangan_un1" placeholder="Pelapor" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="teknisi_1_un" type="text" class="form-control" id="teknisi_1_un1" placeholder="Teknisi 2" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                     <div class="col-xs-9">
                       <input name="teknisi_2_un" type="text" class="form-control" id="teknisi_2_un1" placeholder="Teknisi 2" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                     <div class="col-xs-9">
                       <input name="teknisi_3_un" type="text" class="form-control" id="teknisi_3_un1" placeholder="Teknisi 3" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="nama_rekanan_un" class="col-xs-3 col-form-label">Nama Rekan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_rekanan_un" type="text" class="form-control" id="nama_rekanan_un" placeholder="Nama Rekan" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="alamat_rekanan_un" class="col-xs-3 col-form-label">Alamat Rekan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="alamat_rekanan_un" type="text" class="form-control" id="alamat_rekanan_un" placeholder="Alamat Rekan" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_rekanan_un" class="col-xs-3 col-form-label">Teknisi Rekanan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="teknisi_rekanan_un" type="text" class="form-control" id="teknisi_rekanan_un" placeholder="Teknisi Rekanan" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="telphone_teknisi_rek_un" class="col-xs-3 col-form-label">Telp_Teknisi_Rekanan_reg<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="telphone_teknisi_rek_un" type="text" class="form-control" id="telphone_teknisi_rek_un" placeholder="Telp_Teknisi_Rekanan_reg" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="ka_instalasi_un" class="col-xs-3 col-form-label">KA Instalasi<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un1" placeholder="KA Instalasi" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <div class="col-sm-offset-3 col-sm-6">
                       <div class="ui buttons">
                         <button class="ui positive button">Tambah</button>
                         <div class="or"></div>
                         <button type="reset" class="ui button">Reset</button>
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
         <th scope="col">Id_perbaikan</th>
         <th scope="col">Tanggal_Perbaikan</th>
         <th scope="col">Tanggal_Pengiriman</th>
         <th scope="col">Nama_Alat</th>
         <th scope="col">Merek_Alat</th>
         <th scope="col">Type_Alat</th>
         <th scope="col">Serial_Number</th>
         <th scope="col">Lokasi_Alat</th>
         <th scope="col">Pelapor</th>
         <th scope="col">Keterangan</th>
         <th scope="col">Teknisi_1</th>
         <th scope="col">Teknisi_2</th>
         <th scope="col">Teknisi_3</th>
         <th scope="col">Nama_Rekanan</th>
         <th scope="col">Alamat_Rekanan</th>
         <th scope="col">Teknisi_Rekanan</th>
         <th scope="col">Telphone_Teknisi_REK</th>
         <th scope="col">KA_Instalasi</th>
         <th scope="col">Tombol_Aksi_Tabel</th>
       </thead>
       <tbody>
       @forelse ($pengiriman as $index => $item)
       <tr>
        <td>{{ $index + 1 }}</td>
         <td><?php echo $item ['id_perbaikan_un'] ?></td>
         <td><?php echo $item ['tanggal_perbaikan_un'] ?></td>
         <td><?php echo $item ['tanggal_pengiriman_un'] ?></td>
         <td><?php echo $item ['nama_alat_un'] ?></td>
         <td><?php echo $item ['merek_alat_un'] ?></td>
         <td><?php echo $item ['type_alat_un'] ?></td>
         <td><?php echo $item ['serial_number_un'] ?></td>
         <td><?php echo $item ['lokasi_alat_un'] ?></td>
         <td><?php echo $item ['pelapor_un'] ?></td>
         <td><?php echo $item ['keterangan_un'] ?></td>
         <td><?php echo $item ['teknisi_1_un'] ?></td>
         <td><?php echo $item ['teknisi_2_un'] ?></td>
         <td><?php echo $item ['teknisi_3_un'] ?></td>
         <td><?php echo $item ['nama_rekanan_un'] ?></td>
         <td><?php echo $item ['alamat_rekanan_un'] ?></td>
         <td><?php echo $item ['teknisi_rekanan_un'] ?></td>
         <td><?php echo $item ['telphone_teknisi_rek_un'] ?></td>
         <td><?php echo $item ['ka_instalasi_un'] ?></td>
         <td>
            <a href="/dashboard/ppm/aset_unregistrasi/edit_pengiriman/{{ $item->id_perbaikan_un }}/edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

            <a href="/dashboard/ppm/aset_unregistrasi/cetak_pengiriman/{{ $item->id_perbaikan_un }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
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

     <!-- content -->
     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-default thumbnail">

           <div class="panel-heading no-print">
             <h1>Form Pengembalian Alat Unregistrasi</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ url('/dashboard/ppm/tambah_pengembalian_un') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                 @csrf

                   <div class="form-group row">
                     <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un2" placeholder="Id Perbaikan" value="" onkeyup="autofill_Pengembalian_un()">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_perbaikan_un" type="text" class="form-control" id="tanggal_perbaikan_un2" placeholder="Tanggal Perbaikan" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="tanggal_pengembalian_un" class="col-xs-3 col-form-label">Tanggal Pengembalian<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_pengembalian_un" type="text" class="form-control" id="tanggal_pengembalian_un2" placeholder="Tanggal Pengembalian" value="<?php echo date('Y-m-d') ?>" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un2" placeholder="Nama Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="peneriama_alat_un" class="col-xs-3 col-form-label">Peneriama Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="peneriama_alat_un" type="text" class="form-control" id="peneriama_alat_un" placeholder="Peneriama Alat" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un2" placeholder="Merek" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="ka_instalasi_un" class="col-xs-3 col-form-label">Ka Instalasi<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un2" placeholder="Ka Instalasi" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="type_alat_un" type="text" class="form-control" id="type_alat_un2" placeholder="Type Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="teknisi_1_un" type="text" class="form-control" id="teknisi_1_un2" placeholder="Teknisi 1" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="serial_number_un" type="text" class="form-control" id="serial_number_un2" placeholder="Serial Number" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                     <div class="col-xs-9">
                       <input name="teknisi_2_un" type="text" class="form-control" id="teknisi_2_un2" placeholder="Teknisi 2" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                     <div class="col-xs-9">
                       <input name="teknisi_3_un" type="text" class="form-control" id="teknisi_3_un2" placeholder="Teknisi 3" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="lokasi_alat_un" type="text" class="form-control" id="lokasi_alat_un2" placeholder="Lokasi Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="keterangan_un" class="col-xs-3 col-form-label">Keterangan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="keterangan_un" type="text" class="form-control" id="keterangan_un2" placeholder="Keterangan" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="pelapor_un" type="text" class="form-control" id="pelapor_un2" placeholder="Pelapor" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="harga_perbaikan_un" class="col-xs-3 col-form-label">Harga Perbaikan <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="harga_perbaikan_un" type="text" class="form-control" id="harga_perbaikan_un" placeholder="Harga Perbaikan" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="penyebab_kerusakan_un" class="col-xs-3 col-form-label">Penyebab Kerusakan <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="penyebab_kerusakan_un" type="text" class="form-control" id="penyebab_kerusakan_un" placeholder="Penyebab Kerusakan" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="pengujian_suku_cadang_un" class="col-xs-3 col-form-label">Pengujian Suku Cadang<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="pengujian_suku_cadang_un" type="text" class="form-control" id="pengujian_suku_cadang_un" placeholder="Pengujian Suku Cadang" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="uji_fungsi_setelah_perbaikan_un" class="col-xs-3 col-form-label">Uji Fungsi Setelah Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="uji_fungsi_setelah_perbaikan_un" type="text" class="form-control" id="uji_fungsi_setelah_perbaikan_un" placeholder="Uji Fungsi Setelah Perbaikan" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="solusi_perbaikan_un" class="col-xs-3 col-form-label">Solusi Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="solusi_perbaikan_un" type="text" class="form-control" id="solusi_perbaikan_un" placeholder="Solusi Perbaikan" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="penggantian_suku_cadang_un" class="col-xs-3 col-form-label">Penggantian Suku Cadang<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="penggantian_suku_cadang_un" type="text" class="form-control" id="penggantian_suku_cadang_un" placeholder="Penggantian Suku Cadang" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="hasil_verifikasi_un" class="col-xs-3 col-form-label">Hasil Verifikasi<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="hasil_verifikasi_un" type="text" class="form-control" id="hasil_verifikasi_un" placeholder="Hasil Verifikasi" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <div class="col-sm-offset-3 col-sm-6">
                       <div class="ui buttons">
                         <button class="ui positive button" type="submit">Tambah</button>
                         <div class="or"></div>
                         <button type="reset" class="ui button">Reset</button>
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
         <th scope="col">Tanggal_Perbaikan</th>
         <th scope="col">Tanggal_Pengembalian</th>
         <th scope="col">Nama_Alat</th>
         <th scope="col">Peneriama_Alat</th>
         <th scope="col">Merek_Alat</th>
         <th scope="col">Ka_Instalasi</th>
         <th scope="col">Type_Alat</th>
         <th scope="col">Teknisi_1</th>
         <th scope="col">Serial_Number</th>
         <th scope="col">Teknisi_2</th>
         <th scope="col">Teknisi_3</th>
         <th scope="col">Lokasi_Alat</th>
         <th scope="col">Keterangan</th>
         <th scope="col">Pelapor</th>
         <th scope="col">Harga_Perbaikan</th>
         <th scope="col">Penyebab_Kerusakan</th>
         <th scope="col">Pengujian_Suku_cadang</th>
         <th scope="col">Uji_Fungsi_Setelah_Perbaikan</th>
         <th scope="col">Solusi_Perbaikan</th>
         <th scope="col">Penggantian_Suku_cadang</th>
         <th scope="col">Hasil_Verifikasi</th>
         <th scope="col">Tombol_Aksi_Tabel</th>
       </thead>
       <tbody>
       @forelse ($pengembalian as $index => $item)
       <tr>
        <td>{{ $index + 1 }}</td>
         <td><?php echo $item ['id_perbaikan_un']  ?></td>
         <td><?php echo $item ['tanggal_perbaikan_un']  ?></td>
         <td><?php echo $item ['tanggal_pengembalian_un']  ?></td>
         <td><?php echo $item ['nama_alat_un']  ?></td>
         <td><?php echo $item ['peneriama_alat_un']  ?></td>
         <td><?php echo $item ['merek_alat_un']  ?></td>
         <td><?php echo $item ['ka_instalasi_un']  ?></td>
         <td><?php echo $item ['type_alat_un']  ?></td>
         <td><?php echo $item ['teknisi_1_un']  ?></td>
         <td><?php echo $item ['serial_number_un']  ?></td>
         <td><?php echo $item ['teknisi_2_un']  ?></td>
         <td><?php echo $item ['teknisi_3_un']  ?></td>
         <td><?php echo $item ['lokasi_alat_un']  ?></td>
         <td><?php echo $item ['keterangan_un']  ?></td>
         <td><?php echo $item ['pelapor_un']  ?></td>
         <td><?php echo $item ['harga_perbaikan_un']  ?></td>
         <td><?php echo $item ['penyebab_kerusakan_un']  ?></td>
         <td><?php echo $item ['pengujian_suku_cadang_un']  ?></td>
         <td><?php echo $item ['uji_fungsi_setelah_perbaikan_un']  ?></td>
         <td><?php echo $item ['solusi_perbaikan_un']  ?></td>
         <td><?php echo $item ['penggantian_suku_cadang_un']  ?></td>
         <td><?php echo $item ['hasil_verifikasi_un']  ?></td>
         <td>
            <a href="/dashboard/ppm/aset_unregistrasi/edit_pengembalian/{{ $item->id_perbaikan_un }}/edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

            <a href="/dashboard/ppm/aset_unregistrasi/cetak_pengembalian/{{ $item->id_perbaikan_un }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
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

     <!-- content -->
     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-default thumbnail">

           <div class="panel-heading no-print">
             <h1>Form Penghapusan Alat Unregistrasi</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ url('/dashboard/ppm/tambah_penghapusan_un') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                 @csrf

                   <div class="form-group row">
                     <label for="id_perbaikan_un" class="col-xs-3 col-form-label">Id Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="id_perbaikan_un" type="text" class="form-control" id="id_perbaikan_un3" placeholder="Id Perbaikan" value="" onkeyup="autofill_Penghapusan_un()">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="tanggal_perbaikan_un" class="col-xs-3 col-form-label">Tanggal Perbaikan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_perbaikan_un" type="text" class="form-control" id="tanggal_perbaikan_un3" placeholder="Tanggal Perbaikan" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="nama_alat_un" class="col-xs-3 col-form-label">Nama Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_alat_un" type="text" class="form-control" id="nama_alat_un3" placeholder="Nama Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="merek_alat_un" class="col-xs-3 col-form-label">Merek Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="merek_alat_un" type="text" class="form-control" id="merek_alat_un3" placeholder="Merek Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="type_alat_un" class="col-xs-3 col-form-label">Type Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="type_alat_un" type="text" class="form-control" id="type_alat_un3" placeholder="Type Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="serial_number_un" class="col-xs-3 col-form-label">Serial Number<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="serial_number_un" type="text" class="form-control" id="serial_number_un3" placeholder="Serial Number" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="lokasi_alat_un" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="lokasi_alat_un" type="text" class="form-control" id="lokasi_alat_un3" placeholder="Lokasi Alat" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="pelapor_un" class="col-xs-3 col-form-label">Pelapor<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="pelapor_un" type="text" class="form-control" id="pelapor_un3" placeholder="Pelapor" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_1_un" class="col-xs-3 col-form-label">Teknisi 1<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="teknisi_1_un" type="text" class="form-control" id="teknisi_1_un3" placeholder="Teknisi 1" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_2_un" class="col-xs-3 col-form-label">Teknisi 2</label>
                     <div class="col-xs-9">
                       <input name="teknisi_2_un" type="text" class="form-control" id="teknisi_2_un3" placeholder="Teknisi 2" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="teknisi_3_un" class="col-xs-3 col-form-label">Teknisi 3</label>
                     <div class="col-xs-9">
                       <input name="teknisi_3_un" type="text" class="form-control" id="teknisi_3_un3" placeholder="Teknisi 3" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="tanggal_penggudangan_un" class="col-xs-3 col-form-label">Tanggal Penggudangan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_penggudangan_un" type="text" class="form-control" id="tanggal_penggudangan_un" placeholder="Tanggal Penggudangan" value="<?php echo date('Y-m-d') ?>" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="ka_instalasi_un" class="col-xs-3 col-form-label">KA Instalasi<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="ka_instalasi_un" type="text" class="form-control" id="ka_instalasi_un3" placeholder="KA Instalasi" value="" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="keterangan_penggudangan_un" class="col-xs-3 col-form-label">Keterangan<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="keterangan_penggudangan_un" type="text" class="form-control" id="keterangan_penggudangan_un" placeholder="Keterangan" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <div class="col-sm-offset-3 col-sm-6">
                       <div class="ui buttons">
                         <button class="ui positive button" type="submit">Tambah</button>
                         <div class="or"></div>
                         <button type="reset" class="ui button">Reset</button>
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
         <th scope="col">Tanggal_Perbaikan</th>
         <th scope="col">Nama_Alat</th>
         <th scope="col">Merek_Alat</th>
         <th scope="col">Type_Alat</th>
         <th scope="col">Serial_Number</th>
         <th scope="col">Lokasi_Alat</th>
         <th scope="col">Pelapor</th>
         <th scope="col">Teknisi_1</th>
         <th scope="col">Teknisi_2</th>
         <th scope="col">Teknisi_3</th>
         <th scope="col">Tanggal_Penggudangan</th>
         <th scope="col">KA_Instalasi</th>
         <th scope="col">Keterangan</th>
         <th scope="col">Tombol_Aksi_Tabel</th>
       </thead>
       <tbody>
       @forelse ($penghapusan as $index => $item)
       <tr>
        <td>{{ $index + 1 }}</td>
         <td><?php echo $item ['id_perbaikan_un'] ?></td>
         <td><?php echo $item ['tanggal_perbaikan_un'] ?></td>
         <td><?php echo $item ['nama_alat_un'] ?></td>
         <td><?php echo $item ['merek_alat_un'] ?></td>
         <td><?php echo $item ['type_alat_un'] ?></td>
         <td><?php echo $item ['serial_number_un'] ?></td>
         <td><?php echo $item ['lokasi_alat_un'] ?></td>
         <td><?php echo $item ['pelapor_un'] ?></td>
         <td><?php echo $item ['teknisi_1_un'] ?></td>
         <td><?php echo $item ['teknisi_2_un'] ?></td>
         <td><?php echo $item ['teknisi_3_un'] ?></td>
         <td><?php echo $item ['tanggal_penggudangan_un'] ?></td>
         <td><?php echo $item ['ka_instalasi_un'] ?></td>
         <td><?php echo $item ['keterangan_penggudangan_un'] ?></td>
         <td>
            <a href="/dashboard/ppm/aset_unregistrasi/edit_penghapusan/{{ $item->id_perbaikan_un }}/edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

            <a href="/dashboard/ppm/aset_unregistrasi/cetak_penggudangan/{{ $item->id_perbaikan_un }}" class="btn btn-xs btn-primary"><i class="fa fa-print"></i></a>
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
 @endsection