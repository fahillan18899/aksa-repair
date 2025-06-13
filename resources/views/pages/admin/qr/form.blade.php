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
        <h2>Generate QR dari ID Aset</h2>
        <form method="POST" action="{{ route('qr.generate') }}">
        @csrf
        <label for="start_id">ID Awal:</label>
        <input type="text" name="start_id" id="start_id" required>
        <br><br>

        <label for="end_id">ID Akhir:</label>
        <input type="text" name="end_id" id="end_id" required>
        <br><br>

        <button type="submit">Generate QR</button>
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
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection




