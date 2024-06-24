@extends('layouts.admin')

 @section('content')
 @section('title', 'Tambah Jenis Alat')
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">

     <div class="p-l-30 p-r-30">
       <div class="header-icon"><i class="pe-7s-plus"></i></div>
       <div class="header-title">
         <h1>Form Tambah Jenis Alat</h1>
         <small>Tambah Jenis Alat</small>
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
             <h1>Form Jenis Alat</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ route('tambah_jenis_alat.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                   @csrf

                   <div class="form-group row">
                     <label for="jenis alat" class="col-xs-3 col-form-label">Jenis Alat <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_jenis_alat" type="text" class="form-control" id="nama_jenis_alat" placeholder="Jenis Alat" value="">
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
                       <th scope="col">No</th>
                       <th scope="col">Jenis Alat</th>
                       <th scope="col">Tombol_Aksi_Table</th>
                     </tr>
                   </thead>
                   <tbody>
                     @forelse ($items as $index => $item)
                     <tr>
                       <td>{{ $index + 1 }}</td>
                       <td>{{ $item->nama_jenis_alat }}</td>
                       <td>
                         <a href="{{ route('tambah_jenis_alat.edit',$item->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>

                         <form action="{{ route('tambah_jenis_alat.destroy' , $item->id) }}" method="POST" class="d-inline">
                           @csrf
                           @method('delete')
                           <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                             <i class="fa fa-trash"></i>
                           </button>
                       </td>
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

   </div> <!-- /.content -->
 </div> <!-- /.content-wrapper -->
 @endsection