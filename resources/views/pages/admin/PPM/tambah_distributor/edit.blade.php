@extends('layouts.admin')

 @section('content')
 @section('title', 'Edit Distributor')
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">

     <div class="p-l-30 p-r-30">
       <div class="header-icon"><i class="pe-7s-add-user"></i></div>
       <div class="header-title">
         <h1>Form Edit Distributor</h1>
         <small>Edit Distributor</small>
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
     <!-- demo mode enable alert -->
     <div id="demoModeEnable"></div>
     <!-- content -->
     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-default thumbnail">

           <div class="panel-heading no-print">
             <h1>Form Edit Distributor</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ route('tambah_distributor.update', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                 @csrf
                 @method('PUT')

                 <div class="form-group row">
                     <label for="nama_distributor_p" class="col-xs-3 col-form-label">Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_distributor_p" type="text" class="form-control" id="nama_distributor_p" placeholder="Nama Distributor" value="{{ $item->nama_distributor_p }}">
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="alamat_distributor_p" class="col-xs-3 col-form-label">Alamat Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="alamat_distributor_p" type="text" class="form-control" id="alamat_distributor_p" placeholder="Alamat Distributor" value="{{ $item->alamat_distributor_p }}">
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="telphone_distributor_p" class="col-xs-3 col-form-label">Telphone Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="telphone_distributor_p" type="text" class="form-control" id="telphone_distributor_p" placeholder="Telphone Distributor" value="{{ $item->telphone_distributor_p }}">
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="email_distributor_p" class="col-xs-3 col-form-label">Email Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="email_distributor_p" type="text" class="form-control" id="email_distributor_p" placeholder="Email Distributor" value="{{ $item->email_distributor_p }}">
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="teknisi_distributor_p" class="col-xs-3 col-form-label">Teknisi Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="teknisi_distributor_p" type="text" class="form-control" id="teknisi_distributor_p" placeholder="Teknisi Distributor" value="{{ $item->teknisi_distributor_p }}">
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="telphone_teknisi_dis_p" class="col-xs-3 col-form-label">Telphone Teknisi <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="telphone_teknisi_dis_p" type="text" class="form-control" id="telphone_teknisi_dis_p" placeholder="Telphone Teknisi" value="{{ $item->telphone_teknisi_dis_p }}">
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
   </div> <!-- /.content -->
 </div> <!-- /.content-wrapper -->
 @endsection