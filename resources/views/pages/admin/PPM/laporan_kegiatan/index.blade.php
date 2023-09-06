
@extends('layouts.admin')

@section('content')
@section('title', 'Laporan Kegiatan')
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
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <th scope="col">No</th>
                      <th scope="col">Id_Perbaikan</th>
                      <th scope="col">ID_Aset</th>
                      <th scope="col">Tanggal_Perbaikan</th>
                      <th scope="col">Nama_Alat</th>
                      <th scope="col">Merek_Alat</th>
                      <th scope="col">Type_Alat</th>
                      <th scope="col">Serial_Number</th>
                      <th scope="col">Lokasi_Alat</th>
                      <th scope="col">Pelapor</th>
                      <th scope="col">Keterangan_Kondisi_Alat</th>
                      <th scope="col">Instalasi</th>
                      <th scope="col">Teknisi_1</th>
                      <th scope="col">Teknisi_2</th>
                      <th scope="col">Teknisi_3</th>
                      <th scope="col">Keluhan_Dari_alat</th>
                      <th scope="col">Korektif</th>
                    </thead>
                    <tbody>
                      @forelse ($regsitrasi as $index => $item)
                      <tr class="odd gradeX">
                        <td><?php echo $index  + 1 ?></td>
                        <td><?php echo $item['id_perbaikan_reg'] ?></td>
                        <td><?php echo $item['id_aset_reg'] ?></td>
                        <td><?php echo $item['tanggal_perbaikan_reg'] ?></td>
                        <td><?php echo $item['nama_alat_reg'] ?></td>
                        <td><?php echo $item['merek_alat_reg'] ?></td>
                        <td><?php echo $item['type_alat_reg'] ?></td>
                        <td><?php echo $item['serial_number_reg'] ?></td>
                        <td><?php echo $item['lokasi_alat_reg'] ?></td>
                        <td><?php echo $item['pelapor_reg'] ?></td>
                        <td><?php echo $item['keterangan_kondisi_alat_reg'] ?></td>
                        <td><?php echo $item['ka_instalasi_reg'] ?></td>
                        <td><?php echo $item['teknisi_1_reg'] ?></td>
                        <td><?php echo $item['teknisi_2_reg'] ?></td>
                        <td><?php echo $item['teknisi_3_reg'] ?></td>
                        <td><?php echo $item['keluhan_dari_alat_reg'] ?></td>
                        <td><?php echo $item['korektif_reg'] ?></td>
                      </tr>
                      @empty
                      <tr>
                        <td class="text-center" colspan="7">Data Kosong</td>
                      </tr>
                      @endforelse
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
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                   <thead class="table-light">
                     <th scope="col">No</th>
                     <th scope="col">Id_Perbaikan</th>
                     <th scope="col">Tanggal_Perbaikan</th>
                     <th scope="col">Nama_Alat</th>
                     <th scope="col">Merek_Alat</th>
                     <th scope="col">Type_Alat</th>
                     <th scope="col">Serial_Number</th>
                     <th scope="col">Lokasi_Alat</th>
                     <th scope="col">Pelapor</th>
                     <th scope="col">Keterangan</th>
                     <th scope="col">KA_Instalasi</th>
                     <th scope="col">Teknisi_1</th>
                     <th scope="col">Teknisi_2</th>
                     <th scope="col">Teknisi_3</th>
                     <th scope="col">Keluhan_Dari_Alat</th>
                   </thead>
                   <tbody>
                   @forelse ($unregsitrasi as $index => $item)
                   <tr>
                    <td>{{ $index + 1 }}</td>
                     <td><?php echo $item ['id_perbaikan_un'] ?></td>
                     <td><?php echo $item ['tanggal_perbaikan_un'] ?></td>
                     <td><?php echo $item ['nama_alat_un'] ?></td>
                     <td><?php echo $item ['merek_alat_un'] ?></td>
                     <td><?php echo $item ['type_alat_un'] ?></td>
                     <td><?php echo $item ['serial_number_un'] ?></td>
                     <td><?php echo $item ['lokasi_alat_un'] ?></td>
                     <td><?php echo $item ['pelapor_un'] ?></td>
                     <td><?php echo $item ['keterangan_un'] ?></td>
                     <td><?php echo $item ['ka_instalasi_un'] ?></td>
                     <td><?php echo $item ['teknisi_1_un'] ?></td>
                     <td><?php echo $item ['teknisi_2_un'] ?></td>
                     <td><?php echo $item ['teknisi_3_un'] ?></td>
                     <td><?php echo $item ['keluhan_dari_alat_un'] ?></td>
                   </tr>
                   @empty
                   <tr>
                     <td class="text-center" colspan="7">Data Kosong</td>
                   </tr>
                   @endforelse
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
                  <table class="table table-hover table-bordered " id="scollDatatable" style="width:100%">
              <thead class="table-light">
                <tr>
                  <td class="table-primary" rowspan="3"><b>No</b></td>
                  <td class="table-primary" rowspan="3"><b>Tanggal_Pemeliharaan</b></td>
                  <td class="table-primary" rowspan="3"><b>Kegiatan</b></td>
                  <td class="table-primary" rowspan="3"><b>Engineer</b></td>
                  <td class="table-info" colspan="7" align="center"><b>Data_Alat</b></td>
                  <td class="table-success" colspan="7" align="center"><b>Persiapan</b></td>
                  <td class="table-active" colspan="18" align="center"><b>pemantauan_fisik_&_fungsi</b></td>
                  <td class="table-danger" colspan="5" align="center"><b>pemeliharaan_preventife</b></td>
                  <td class="table-info" rowspan="3" align="center"><b>tindakan</b></td>
                  <td class="table-warning" colspan="4" align="center"><b>Suku_Cadang</b></td>
                  <td class="table-primary" rowspan="3"><b>Evaluasi_Dan_Rekomendasi</b></td>
                  <td class="table-primary" rowspan="3"><b>Status</b></td>
                  <td class="table-primary" rowspan="3"><b>Status2</b></td>
                  <td class="table-primary" rowspan="3"><b>Mulai_Bekerja</b></td>
                  <td class="table-primary" rowspan="3"><b>Selesai_Kerja</b></td>
                  <td class="table-primary" rowspan="3"><b>Durasi</b></td>
                  <td class="table-primary" rowspan="3"><b>User</b></td>
                  <td class="table-primary" rowspan="3"><b>Engineer</b></td>

                </tr>

                <tr>
                  <td class="table-info" rowspan="2"><b>Id_Aset_Registrasi</b></td>
                  <td class="table-info" rowspan="2"><b>Nama_Alat</b></td>
                  <td class="table-info" rowspan="2"><b>Serial_Number</b></td>
                  <td class="table-info" rowspan="2"><b>Merek</b></td>
                  <td class="table-info" rowspan="2"><b>Instalasi</b></td>
                  <td class="table-info" rowspan="2"><b>Tipe</b></td>
                  <td class="table-info" rowspan="2"><b>Ruangan</b></td>
                  <td class="table-success" rowspan="2"><b>Hand_Hygiene</b></td>
                  <td class="table-success" rowspan="2"><b>Menyiapkan_Alat_&_Bahan_Kerja</b></td>
                  <td class="table-success" rowspan="2"><b>Alat_Pelindung_Diri</b></td>
                  <td class="table-success" rowspan="2"><b>Mengoprasikan_Alat_Kalibrasi</b></td>
                  <td class="table-success" rowspan="2"><b>KTD</b></td>
                  <td class="table-success" rowspan="2"><b>Mengoprasikan_Alat</b></td>
                  <td class="table-success" rowspan="2"><b>Idntifikasi_Bahaya</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Badan/Selungkup</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Alarm_&_Sistem_Interlock</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Kabel_&_Kelenturannya</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Sistem_Pengunci</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Tombol_&_Saklar</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Label/Penandaan</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Display/Layar</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Aksesoris</b></td>
                  <td class="table-dark" colspan="2" align="center"><b>Indikator_Bunyi</b></td>
                  <td class="table-danger" rowspan="2"><b>Pembersihan</b></td>
                  <td class="table-danger" rowspan="2"><b>Pengencangan_Bagian_Alat</b></td>
                  <td class="table-danger" rowspan="2"><b>Pelumasan</b></td>
                  <td class="table-danger" rowspan="2"><b>Kalibrasi_Berkala</b></td>
                  <td class="table-danger" rowspan="2"><b>Penggantian_Bahan_Habis_Pakai</b></td>
                  <td class="table-warning" rowspan="2"><b>Nama_Suku_Cadang</b></td>
                  <td class="table-warning" rowspan="2"><b>Volume</b></td>
                  <td class="table-warning" rowspan="2"><b>Harga_Satuan</b></td>
                  <td class="table-warning" rowspan="2"><b>Jumlah_Harga</b></td>
                </tr>

                <tr class="text-center">
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                  <td class="light"><b>Fisik</b></td>
                  <td class="light"><b>Fungsi</b></td>
                </tr>
              </thead>
              <tbody>
              @forelse ($lembarpemeliharaan as $index => $item)
                <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $item->tanggal }}</td>
                  <td>{{ $item->kegiatan }}</td>
                  <td>{{ $item->engineer }}</td>
                  <td>{{ $item->id_aset }}</td>
                  <td>{{ $item->nama_alat }}</td>
                  <td>{{ $item->serial_number }}</td>
                  <td>{{ $item->merek }}</td>
                  <td>{{ $item->instalasi }}</td>
                  <td>{{ $item->tipe }}</td>
                  <td>{{ $item->ruangan }}</td>
                  <td>{{ $item->hand_hygiene }}</td>
                  <td>{{ $item->menyiapkan_alat_dan_bahan }}</td>
                  <td>{{ $item->alat_pelindung_diri }}</td>
                  <td>{{ $item->mengoprasikan_alat_kalibrasi }}</td>
                  <td>{{ $item->ktd }}</td>
                  <td>{{ $item->mengoprasikan_alat }}</td>
                  <td>{{ $item->identifikasi_bahaya }}</td>
                  <td>{{ $item->badan_selungkup1 }}</td>
                  <td>{{ $item->badan_selungkup2 }}</td>
                  <td>{{ $item->alat_sistem_interlock1 }}</td>
                  <td>{{ $item->alat_sistem_interlock2 }}</td>
                  <td>{{ $item->kabel_kelenturan1 }}</td>
                  <td>{{ $item->kabel_kelenturan2 }}</td>
                  <td>{{ $item->sistem_pengunci1 }}</td>
                  <td>{{ $item->sistem_pengunci2 }}</td>
                  <td>{{ $item->tombol_saklar1 }}</td>
                  <td>{{ $item->tombol_saklar2 }}</td>
                  <td>{{ $item->label_penandaan1 }}</td>
                  <td>{{ $item->label_penandaan2 }}</td>
                  <td>{{ $item->display_layar1 }}</td>
                  <td>{{ $item->display_layar2 }}</td>
                  <td>{{ $item->aksesoris1 }}</td>
                  <td>{{ $item->aksesoris2 }}</td>
                  <td>{{ $item->indikator_bunyi1 }}</td>
                  <td>{{ $item->indikator_bunyi2 }}</td>
                  <td>{{ $item->pembersihan }}</td>
                  <td>{{ $item->pengencangan_bagian_alat }}</td>
                  <td>{{ $item->pelumasan }}</td>
                  <td>{{ $item->kalibrasi_berkala }}</td>
                  <td>{{ $item->penggantian_bahan_habis_pakai }}</td>
                  <td>{{ $item->cek_alat }}</td>
                  <td>{{ $item->nama_sukucadang }}</td>
                  <td>{{ $item->volume }}</td>
                  <td>{{ $item->harga_satuan }}</td>
                  <td>{{ $item->jumlah_harga }}</td>
                  <td>{{ $item->evaluasi }}</td>
                  <td>{{ $item->status }}</td>
                  <td>{{ $item->status1 }}</td>
                  <td>{{ $item->mulai_bekerja }}</td>
                  <td>{{ $item->selesai_kerja }}</td>
                  <td>{{ $item->durasi }}</td>
                  <td>{{ $item->user }}</td>
                  <td>{{ $item->engginer }}</td>

                </tr>
                @empty
                <tr>
                  <td class="text-center" colspan="7">Data Kosong</td>
                </tr>
                @endforelse
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