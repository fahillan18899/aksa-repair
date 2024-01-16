@extends('layouts.admin')

@section('content')
@section('title', 'SOP Pemeliharaan')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-check"></i></div>
      <div class="header-title">
        <h1>SOP Pemeliharaan</h1>
        <small>SOP Pemeliharaan</small>
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
    <!-- content -->

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print d-inline">
            <div class="row">
              <div class="col-md-7">

                <h1>SOP Pemeliharaan</h1>
              </div>
              <div class="col-md-2">
                <a href="{{ url('/dashboard/export') }}" class="btn btn-info"> Template Import</a>
              </div>
              <div class="col-md-3">
                <form action="{{ url('/dashboard/import') }}" method="post" enctype="multipart/form-data" style="display: flex;">
                  @csrf
                  <input class="form-control" type="file" name="file">
                  <button type="submit" class="btn-primary btn">Import</button>
                </form>
              </div>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <div class="row">
                  <!--  form area -->
                  <div class="col-sm-12">
                    <embed type="application/pdf" src="{{ url('storage/lap20240109032337.pdf') }}" width="100%" height="1000"></embed>
                  </div>
                </div>
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