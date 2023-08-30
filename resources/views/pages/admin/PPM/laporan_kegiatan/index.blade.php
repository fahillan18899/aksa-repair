
@extends('layouts.admin')

@section('content')
<?php

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Laporan Kegiatan</h1>
        <small>Tabel Laporan Kegiatan</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!--Tabel Registrasi-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">
            <ul class="col-xs-12 nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tabel Perbaikan Peralatan Alat Teregistrasi
                </a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                  <!-- /.table-responsive -->
                    <table width="100%" class="datatable table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Id_Perbaikan</th>
                          <th scope="col">Tanggal_Perbaikan</th>
                          <th scope="col">Nama_Alat</th>
                          <th scope="col">Merek_Alat</th>
                          <th scope="col">Type</th>
                          <th scope="col">Serial_Number</th>
                          <th scope="col">Lokasi_Alat</th>
                          <th scope="col">Pelapor</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col">KA_Instalasi</th>
                          <th scope="col">Teknisi_1</th>
                          <th scope="col">Teknisi_2</th>
                          <th scope="col">Keluhan_Dari_alat</th>
                          <th scope="col">Korektif</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                      </tbody>
                    </table> 
                  <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">
            <ul class="col-xs-12 nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab"> Laporan Kegiatan Perbaikan Alat Unregistrasi</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                  <!-- /.table-responsive -->
                    <table width="100%" class="datatable table table-striped table-bordered table-hover">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Id_Perbaikan</th>
                          <th scope="col">Tanggal_Perbaikan</th>
                          <th scope="col">Nama_Alat</th>
                          <th scope="col">Merek_Alat</th>
                          <th scope="col">Type</th>
                          <th scope="col">Serial_Number</th>
                          <th scope="col">Lokasi_Alat</th>
                          <th scope="col">Pelapor</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col">KA_Instalasi</th>
                          <th scope="col">Teknisi_1</th>
                          <th scope="col">Teknisi_2</th>
                          <th scope="col">Keluhan_Dari_alat</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                      </tbody>
                    </table> 
                    <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- TABEL NON ALKES -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">
            <ul class="col-xs-12 nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab"> Laporan Kegiatan Perbaikan Alat Non Aset</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                    <table width="100%" class="datatable table table-striped table-bordered table-hover">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Id_Perbaikan_non</th>
                          <th scope="col">Tanggal_Perbaikan</th>
                          <th scope="col">Lokasi_Alat</th>
                          <th scope="col">Kerusakan_non</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col">Teknisi_1</th>
                          <th scope="col">Teknisi_2</th>
                          <th scope="col">KA_Instalasi</th>
                          <th scope="col">Pelapor</th>
                        </tr>
                      </thead>
                      <tbody>                       
                      </tbody>
                    </table> <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- TABEL NON PPM -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">
            <ul class="col-xs-12 nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab"> Pencarian dan Pelaporan Pemeliharaan Peralatan Teregistrasi</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                    <table width="100%" class="datatable table table-striped table-bordered table-hover">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">id_ppm</th>
                          <th scope="col">tanggal</th>
                          <th scope="col">kegiatan</th>
                          <th scope="col">engineer</th>
                          <th scope="col">id_aset</th>
                          <th scope="col">nama_alat</th>
                          <th scope="col">serial_number</th>
                          <th scope="col">merek</th>
                          <th scope="col">instalasi</th>
                          <th scope="col">tipe</th>
                          <th scope="col">ruangan</th>
                          <th scope="col">hand_hygiene</th>
                          <th scope="col">menyiapkan_alat_dan_bahan</th>
                          <th scope="col">alat_pelindung_diri</th>
                          <th scope="col">mengoprasikan_alat_kalibrasi</th>
                          <th scope="col">ktd</th>
                          <th scope="col">mengoprasikan_alat</th>
                          <th scope="col">identifikasi_bahaya</th>
                          <th scope="col">badan_selungkup1</th>
                          <th scope="col">badan_selungkup2</th>
                          <th scope="col">alat_sistem_interlock1</th>
                          <th scope="col">alat_sistem_interlock2</th>
                          <th scope="col">kabel_kelenturan1</th>
                          <th scope="col">kabel_kelenturan2</th>
                          <th scope="col">sistem_pengunci1</th>
                          <th scope="col">sistem_pengunci2</th>
                          <th scope="col">tombol_saklar1</th>
                          <th scope="col">tombol_saklar2</th>
                          <th scope="col">label_penandaan1</th>
                          <th scope="col">label_penandaan2</th>
                          <th scope="col">display_layar1</th>
                          <th scope="col">display_layar2</th>
                          <th scope="col">aksesoris1</th>
                          <th scope="col">aksesoris2</th>
                          <th scope="col">indikator_bunyi1</th>
                          <th scope="col">indikator_bunyi2</th>
                          <th scope="col">pembersihan</th>
                          <th scope="col">pengencangan_bagian_alat</th>
                          <th scope="col">pelumasan</th>
                          <th scope="col">kalibrasi_berkala</th>
                          <th scope="col">penggantian_bahan_habis_pakai</th>
                          <th scope="col">cek_alat</th>
                          <th scope="col">nama_sukucadang</th>
                          <th scope="col">harga_satuan</th>
                          <th scope="col">jumlah_harga</th>
                          <th scope="col">evaluasi</th>
                          <th scope="col">status</th>
                          <th scope="col">status1</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table> <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>






    <script type="text/javascript">
      new DataTable('#example', {
        scrollX: true
      });
      $(document).ready(function() {

        // #-------ADD OR REMOVE LANGUAGE ITEM--------#
        var languages_html = "<tr>" +
          "<td><input name=\"name[]\" class=\"form-control\" type=\"text\" placeholder=\"Language Name\"></td>" +
          "<td><input name=\"rating[]\" class=\"form-control rate\" type=\"number\" placeholder=\"Rating Out Of 10\"><br><label ><input name=\"type[]\" type=\"checkbox\" value=\"Native\"> Native</label> <label><input name=\"type[]\" type=\"checkbox\" value=\"Fluent\"> Fluent</label> <label><input name=\"type[]\" type=\"checkbox\" value=\"Beginner\"> Beginner</label></td>" +
          "<td><div class=\"btn btn-group\">" +
          "<button type=\"button\" class=\"addMore btn btn-sm btn-success\">+</button>" +
          "<button type=\"button\" class=\"remove btn btn-sm btn-danger\">-</button>" +
          "</div></td>" +
          "</tr>";

        $("#languages").append(languages_html);
        $('body').on('click', '.addMore', function() {
          $("#languages").append(languages_html);
        });


        $('body').on('click', '.remove', function() {
          $(this).parent().parent().parent().remove();
        });

        $('.rate').change(function() {
          var n = $('.rate').val();
          if (n > 10)
            $('.rate').val(1);
        });


        // show dropdown month name and previous years
        $(".dropdown-month-years").datepicker({
          dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
          yearRange: "-90:+0"
        });

      });
    </script>

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection