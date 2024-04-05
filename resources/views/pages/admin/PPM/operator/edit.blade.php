@extends('layouts.admin')

 @section('title', 'Edit Operator')
 @section('content')
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">

     <div class="p-l-30 p-r-30">
       <div class="header-icon"><i class="pe-7s-add-user"></i></div>
       <div class="header-title">
         <h1>Menu Operator</h1>
         <small>Operator</small>
       </div>
     </div>
   </section>
   <!-- Main content -->
   <div class="content">

     <!-- demo mode enable alert -->
     <div id="demoModeEnable"></div>
     <!-- content -->
     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-default thumbnail">

           <div class="panel-heading no-print">
             <h1>Management Operator</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="{{ route('operator.update', $item->user_id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                   @csrf
                   @method('PUT')

                   <div class="form-group row">
                     <label for="username" class="col-xs-3 col-form-label">Username </label>
                     <div class="col-xs-9">
                       <input name="username" type="text" class="form-control" id="username" placeholder="Username" value="{{ $item->username }}">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="user_role" class="col-xs-3 col-form-label">Level user </label>
                     <div class="col-xs-9">
                       <select name="user_role" class="form-control" id="user_role">
                         <option value="user">User</option>
                         <option value="teknisi">Teknisi</option>
                       </select>
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