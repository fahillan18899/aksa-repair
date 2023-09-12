@extends('layouts.admin_kalibrasi')

@section('content')
@section('title', 'Berita Acara')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Berita Acara</h1>
        <small>Berita Acara</small>
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
    <!-- content -->

    <div class="row">
      <!--  form area -->
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-primary" href=""> <i class="fa fa-list"></i> Daftar Pesanan </a>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <form action="{{ route('pesanan.store') }}" class="form-inner" method="post" accept-charset="utf-8" id="add_content">
                  @csrf


                  <div class="form-group row">
                    <label for="kepada" class="col-xs-3 col-form-label">Kepada <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="kepada" type="text" class="form-control" id="kepada" placeholder="Nama Instansi" value="">
                    </div>
                  </div>


                  <div class="form-group row">


                    <label for="nama alat" class="col-xs-3 col-form-label">Items <i class="text-danger">*</i></label>
                    <div class="col-xs-3">
                      <select name="nama[]" class="form-control" id="nama">
                        <option>Spygmomanometer</option>
                        <option>ECG</option>
                        <option>Centrifuge</option>
                        <option>Blood Presure monitor dgtal</option>
                        <option>Timbangan Bayi</option>
                      </select>
                    </div>
                    <div class="col-xs-2">
                      <input name="qyt[]" type="number" class="form-control" id="name" placeholder="Qyt">
                    </div>
                    <div class="col-xs-2">
                      <input name="harga[]" type="text" class="form-control" id="name" placeholder="Harga">
                    </div>


                    <div class="col-xs-1">
                      <button type="button" id="addButton" class="btn btn-primary btn-sm" name="add" style="font-size:11px;" onclick="addContent(3)">+</button>
                    </div>
                    <div class="col-xs-1">
                      <button type="button" id="removeButton" class="btn btn-danger btn-sm" name="remove" style="font-size:11px;" onclick="removeButton()">-</button>
                    </div>
                  </div>
                  <div class="add_content">

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

            </div>
          </div>
        </div>
      </div>

    </div>


    <!-- The below script you can call in footer or also at bottom of your page -->
    <script type="text/javascript">
      function addContent(uplimit) {
        // If you want to set the limit for adding fields you can use the below code
        // If you don't want to set limit, then use can remove or comment the below "If" condition
        if (($('.form .control-group').length + 1) > uplimit - 1) {
          alert("You can add maximum 3 .");
          return false;
        }
        // Below is the code to add the section for table
        // starting of add fields
        // Always remember that there should not be extra space when you write the code in a variable for script 

        var id = ($('.add_content .control-group').length + 0).toString();
        var ans_opt = $('.add_content .control-group').length + 1;
        $('.add_content').append(`
        <div class="form-group row">
        
                  <label for="nama alat" class="col-xs-3 col-form-label"></label>
                    <div class="col-xs-3">
                      <select name="nama_alat[]" class="form-control" id="Nama_Alat">
                        <option>Pilih Alat</option>
                        <option>Pilih Alat</option>
                        <option>Pilih Alat</option>
                        <option>Pilih Alat</option>
                      </select>
                    </div>
                    <div class="col-xs-2">
                      <input name="qyt[]" type="number" class="form-control" id="name" placeholder="Qyt">
                    </div>
                    <div class="col-xs-2">
                      <input name="harga[]" type="text" class="form-control" id="name" placeholder="Harga">
                    </div>
                    </div>
`);

      };

      //ending of add fields
      //starting for remove fields

      $(document).ready(function() {
        $("#removeButton").click(function() {
          if ($('.add_content .form-group').length == 0) {
            alert("No more textbox to remove");
            return false;
          }
          $(".add_content .form-group:last").remove();
        });
      });

      // ending for remove fields code
    </script>



    <!--TABEL-->


  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->

@endsection