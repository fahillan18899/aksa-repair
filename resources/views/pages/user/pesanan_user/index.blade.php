@extends('layouts.user')

 @section('content')
 @section('title', 'Request Perbaikan')
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">

     <div class="p-l-30 p-r-30">
       <div class="header-icon"><i class="pe-7s-plus"></i></div>
       <div class="header-title">
         <h1>Form Request Perbaikan</h1>
         <small>Request Perbaikan</small>
       </div>
     </div>
   </section>
   <!-- Main content -->
   <div class="content">
     <!-- demo mode enable alert -->
     <div id="demoModeEnable"></div>
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
     <!-- Scanner QR -->
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
                            <video id="preview_user"></video>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
       </div>
     <!-- Scanner QR end -->
     <!-- content -->
     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-default thumbnail">

           <div class="panel-heading no-print">
             <h1>Form Request Perbaikan</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ route('pesanan_user.store')}}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                   @csrf

                   <div class="form-group row">
                     <label for="id" class="col-xs-3 col-form-label">Id Aset<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                      <select name="id" class="form-control" id="id">
                      <option>Pilih Id Aset</option>
                        @foreach($dataInv as $dataInv)
                        <option value="<?= $dataInv['id_aset']; ?>">
                                       <?= $dataInv['id_aset']; ?>_<?= $dataInv['nama_alat']; ?>_<?= $dataInv['serial_number']; ?>_<?= $dataInv['lokasi_alat']; ?></option>
                        @endforeach
                      </select>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="id" class="col-xs-3 col-form-label">ID<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="id" type="text" class="form-control" id="id_qr" placeholder="ID" value="">
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="nama_req" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_req" type="text" class="form-control" id="nama_req" placeholder="Nama Alat" value="" readonly>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="merek_req" class="col-xs-3 col-form-label">Merek Alat <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="merek_req" type="text" class="form-control" id="merek_req" placeholder="Merek Alat" value="" readonly>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="type_req" class="col-xs-3 col-form-label">Type Alat <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="type_req" type="text" class="form-control" id="type_req" placeholder="Type Alat" value="" readonly>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="sn_req" class="col-xs-3 col-form-label">Serial Number <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="sn_req" type="text" class="form-control" id="sn_req" placeholder="Serial Number" value="" readonly>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="kerusakan_req" class="col-xs-3 col-form-label">Kerusakan Alat<i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="kerusakan_req" type="text" class="form-control" id="kerusakan_req" placeholder="Kerusakan Pada Alat" required>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="pelapor_req" class="col-xs-3 col-form-label">Pelapor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="pelapor_req" type="text" class="form-control" id="pelapor_req" placeholder="Pelapor" value="{{ Auth::user()->username }}" readonly>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="tanggal_req" class="col-xs-3 col-form-label">Tanggal <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="tanggal_req" type="text" class="form-control" id="tanggal_req" placeholder="Tanggal" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                     </div>
                   </div>

                   <div class="form-group row">
                     <div class="col-sm-offset-3 col-sm-6">
                       <div class="ui buttons">
                         <button type="reset" class="ui button">Reset</button>
                         <div class="or"></div>
                         <button class="ui positive button">Save</button>
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

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-12 col-sm-12">
                
                 <!--TABEL-->
                 <table class="datatable table table-striped table-bordered" style="width:100%">
                   <thead class="table-light">
                     <tr>
                       <th scope="col" class="none">No</th>
                       <th scope="col">Id Aset</th>
                       <th scope="col">Nama Alat</th>
                       <th scope="col">Merek Alat</th>
                       <th scope="col">Type Alat</th>
                       <th scope="col">Serial Number</th>
                       <th scope="col">Kerusakan Alat</th>
                       <th scope="col">Pelapor</th>
                       <th scope="col">Tanggal</th>
                       <th scope="col">Tombol_Aksi_Table</th>
                     </tr>
                   </thead>
                   <tbody>
                     @forelse ($items as $index => $item)
                     <tr>
                       <td>{{ $index + 1 }}</td>
                       <td>{{ $item->id }}</td>
                       <td>{{ $item->nama_req }}</td>
                       <td>{{ $item->merek_req }}</td>
                       <td>{{ $item->type_req }}</td>
                       <td>{{ $item->sn_req }}</td>
                       <td>{{ $item->kerusakan_req }}</td>
                       <td>{{ $item->pelapor_req }}</td>
                       <td>{{ $item->tanggal_req }}</td>
                       <td>
                         <form action="{{ route('pesanan_user.destroy' ,$item->id) }}" method="POST" class="d-inline">
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
   </div> <!-- /.content -->
 </div> <!-- /.content-wrapper -->
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
        $("#id_qr").val(fruits[0]);
    });

    Instascan.Camera.getCameras().then(cameras => {
        if (cameras.length > 0) {
            scanner_user.start(cameras[1]);
        } else {
            console.error("Please enable Camera!");
        }
    });
// *Function scanner camera end* //
</script>
<script type="text/javascript">
  $('select[name="id"]').on('change', function(){
    var stateIDInv = $(this).val();
    console.log(stateIDInv);
    if (stateIDInv) {
      $.ajax({
        url: '/dashboard_user/getPesanan_user/' + stateIDInv,
        type: "GET",
        dataType: "json",
        success: function(data) {
          console.log(data);
          $.each(data, function(key, value){
            $('input[id="id_qr"]').val(value.id_aset);
            $('input[id="nama_req"]').val(value.nama_alat);
            $('input[id="merek_req"]').val(value.merek);
            $('input[id="type_req"]').val(value.type);
            $('input[id="sn_req"]').val(value.serial_number);
          });
              }
            });
    } else {
            $('input[id="nama_req"]').empty();
            $('input[id="merek_req"]').empty();
            $('input[id="type_req"]').empty();
            $('input[id="sn_req"]').empty();
          }
  })
</script>
<script type="text/javascript">
  $('#id_qr').mouseup(function(){
    var stateIDInv = $(this).val();
    console.log(stateIDInv);
    if (stateIDInv) {
      $.ajax({
        url: '/dashboard_user/getPesanan_user/' + stateIDInv,
        type: "GET",
        dataType: "json",
        success: function(data) {
          console.log(data);
          $.each(data, function(key, value){
            $('input[id="nama_req"]').val(value.nama_alat);
            $('input[id="merek_req"]').val(value.merek);
            $('input[id="type_req"]').val(value.type);
            $('input[id="sn_req"]').val(value.serial_number);
          });
              }
            });
    } else {
            $('input[id="nama_req"]').empty();
            $('input[id="merek_req"]').empty();
            $('input[id="type_req"]').empty();
            $('input[id="sn_req"]').empty();
          }
  })
</script>
@endpush