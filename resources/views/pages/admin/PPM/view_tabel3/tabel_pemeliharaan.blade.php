@extends('layouts.admin')

@section('content')
@section('title', 'Data Aset Perbaikan')
<?php

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-note2"></i></div>
      <div class="header-title">
        <h1>Aset Perbaikan</h1>
        <small>Tabel Aset Perbaikan</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!--Tabel Perbaikan aset regis-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">

            <div class="panel-heading no-print">
              <div class="">
                <h1>Tabel Perbaikan Aset Teregistrasi</h1>
              </div>
            </div>
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
                          @forelse ($asetPemeliharaan as $index => $item)
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
    <!--Tabel Perbaikan aset regis end-->

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection