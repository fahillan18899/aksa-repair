@extends('layouts.teknisi')

@section('content')
@section('title', 'Generate QR')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-qrcode"></i></div>
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
                <h2>Generate QR</h2>
                <form method="POST" action="">
                  @csrf
                  <div class="form-group row">
                    <label for="no_urut_awal" class="col-xs-3 form-label">No Urut Awal</label>
                    <div class="col-xs-4">
                      <input name="no_urut_awal" id="no_urut_awal" class="form-control" type="text" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="no_urut_akhir" class="col-xs-3 form-label">No Urut Akhir</label>
                    <div class="col-xs-4">
                      <input name="no_urut_akhir" id="no_urut_akhir" class="form-control" type="text" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button" type="submit">Generate QR</button>
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
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection