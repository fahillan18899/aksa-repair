@extends('layouts.admin')

 @section('content')
 @section('title', 'Edit Jenis Alat')
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">

     <div class="p-l-30 p-r-30">
       <div class="header-icon"><i class="pe-7s-add-user"></i></div>
       <div class="header-title">
         <h1>Form Edit Jenis Alat</h1>
         <small>Edit Jenis Alat</small>
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
             <h1>Form Edit Jenis Alat</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ route('tambah_jenis_alat.update' , $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                 @csrf
                 @method('PUT')

                   <div class="form-group row">
                     <label for="jenis alat" class="col-xs-3 col-form-label">Jenis Alat <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_jenis_alat" type="text" class="form-control" id="nama_jenis_alat" placeholder="Jenis Alat" value="{{ $item->nama_jenis_alat }}">
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