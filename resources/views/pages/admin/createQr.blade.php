@extends('layouts.admin')

@section('content')
@section('title', 'Generate QR')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">

  <div class="p-l-30 p-r-30">
   <div class="header-icon"><i class="pe-7s-world"></i></div>
   <div class="header-title">
    <h1>Generate QR</h1>
    <small>Add Generate QR</small>
   </div>
  </div>
 </section>
 <!-- Main content -->
 <div class="content">
  <!-- demo mode enable alert -->
  <div id="demoModeEnable"></div>
  <!-- alert message -->

<!-- display when error in laravel -->
@if ($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach ($errors->all() as $error)
  <li>{{ $error }}
  @endforeach
 </ul>
</div>
@endif



  <!-- content -->
  <div class="row">
   <div class="col-sm-12">
    <div class="panel panel-default thumbnail">
     <div class="panel-body panel-form">
      <div class="row">
       <div class="col-md-9 col-sm-12">
        <form action="{{ url('/dashboard/create-generete-qr') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
         @csrf

         <div class="form-group row">
          <label for="kode" class="col-xs-3 col-form-label">Kode Rumah Sakit <i class="text-danger">* digunakan di QR</i></label>
          <div class="col-xs-9">
           <input name="kode" class="form-control" type="text" placeholder="Kode Rumah Sakit" id="kode" max="2" style="text-transform:uppercase">
          </div>
         </div>

         <div class="form-group row">
          <label for="angka_awal" class="col-xs-3 col-form-label">Angka Awal </label>
          <div class="col-xs-9">
           <input name="angka_awal" class="form-control" type="number" placeholder="Angka Awal" id="angka_awal">
          </div>
         </div>

         <div class="form-group row">
          <label for="angka_akhir" class="col-xs-3 col-form-label">Angka Akhir </label>
          <div class="col-xs-9">
           <input name="angka_akhir" type="number" class="form-control" id="angka_akhir" placeholder="First Name">
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