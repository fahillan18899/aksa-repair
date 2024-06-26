@extends('layouts.admin')

 @section('content')
 @section('title', 'Tambah Distributor')
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">

     <div class="p-l-30 p-r-30">
       <div class="header-icon"><i class="pe-7s-plus"></i></div>
       <div class="header-title">
         <h1>Form Tambah Distributor</h1>
         <small>Tambah Distributor</small>
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
             <h1>Form Distributor</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ route('tambah_distributor.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                   @csrf

                   <div class="form-group row">
                     <label for="nama_distributor_p" class="col-xs-3 col-form-label">Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="nama_distributor_p" type="text" class="form-control" id="nama_distributor_p" placeholder="Nama Distributor" value="" required>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="alamat_distributor_p" class="col-xs-3 col-form-label">Alamat Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="alamat_distributor_p" type="text" class="form-control" id="alamat_distributor_p" placeholder="Alamat Distributor" value="" required>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="telphone_distributor_p" class="col-xs-3 col-form-label">Telphone Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="telphone_distributor_p" type="text" class="form-control" id="telphone_distributor_p" placeholder="Telphone Distributor" value="" required>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="email_distributor_p" class="col-xs-3 col-form-label">Email Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="email_distributor_p" type="text" class="form-control" id="email_distributor_p" placeholder="Email Distributor" value="" required>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="teknisi_distributor_p" class="col-xs-3 col-form-label">Teknisi Distributor <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="teknisi_distributor_p" type="text" class="form-control" id="teknisi_distributor_p" placeholder="Teknisi Distributor" value="" required>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="telphone_teknisi_dis_p" class="col-xs-3 col-form-label">Telphone Teknisi <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="telphone_teknisi_dis_p" type="text" class="form-control" id="telphone_teknisi_dis_p" placeholder="Telphone Teknisi" value="" required>
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
                       <th scope="col">Nama Distributor</th>
                       <th scope="col">Alamat Distributor</th>
                       <th scope="col">Telphone Distributor</th>
                       <th scope="col">Email Distributor</th>
                       <th scope="col">Teknisi Distributor</th>
                       <th scope="col">Telphone Teknisi Distributor</th>
                       <th scope="col">Tombol_Aksi_Table</th>
                     </tr>
                   </thead>
                   <tbody>
                     @forelse ($items as $index => $item)
                     <tr>
                       <td>{{ $index + 1 }}</td>
                       <td>{{ $item->nama_distributor_p }}</td>
                       <td>{{ $item->alamat_distributor_p }}</td>
                       <td>{{ $item->telphone_distributor_p }}</td>
                       <td>{{ $item->email_distributor_p }}</td>
                       <td>{{ $item->teknisi_distributor_p }}</td>
                       <td>{{ $item->telphone_teknisi_dis_p }}</td>
                       <td>
                         <a href="{{ route('tambah_distributor.edit' ,$item->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>

                         <form action="{{ route('tambah_distributor.destroy' ,$item->id) }}" method="POST" class="d-inline">
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