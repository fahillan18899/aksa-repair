@extends('layouts.admin_kalibrasi')

@section('content')
@section('title', 'Lembar Kerja')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Lembar Kerja</h1>
        <small>Form Lembar Kerja Alat</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Timbangan Bayi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-10 col-sm-12">
                <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')

                  <h3>A. DATA ALAT PELANGGAN</h3>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b> Nama Alat</b></td>
                        <td><input name="nama_alat" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                        <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
                        <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nomor Seri</b></td>
                        <td><input name="no_seri" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Rentang Ukur</b></td>
                        <td><input name="rentang_ukur" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Resolusi</b></td>
                        <td><input name="resolusi" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>


                  <h3>B. PELAKSANA KALIBRASI</h3>

                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nama Instansi</b></td>
                        <td><input name="nama_instansi" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                        <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tanggal diterima</b></td>
                        <td><input name="tanggal1" type="date" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tanggal Kalibrasi</b></td>
                        <td><input name="tanggal2" type="date" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                        <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>C. KONDISI RUANG</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                        <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>D. ALAT YANG DIGUNAKAN</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Nama Alat</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                        <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                      </tr>
                      <tr>

                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 10Kg </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20Kg </td>
                        <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20Kg </td>
                        <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20Kg </td>
                        <td><input name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20Kg </td>
                        <td><input name="merek_5" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_5" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_5" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_5" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left">Termohygrometer </td>
                        <td><input name="merek_6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>





                  <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT PELANGGAN</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>

                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b></td>
                        <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Badan dan Permukaan</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tampilan dan Indikator</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>F. HASIL PENGUKURAN KINERJA ALAT</h3>

                  <h4>1. <b>Daya ulang pembacaan</b></h4>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Beban / Load Kg</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Standar Devisia Kg</b></td>
                      </tr>
                      <tr>
                        <td><input name="beban_load1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="standar_devisia1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                      <td><input name="beban_load2" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="standar_devisia2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h4>2. <b>Penyimpangan Penunjukan</b></h4>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nilai Referensi Kg</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Pembacaan Timbangan Kg</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Koreksi</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Ketidak pastian (95% CL, k=2)</b></td>
                      </tr>
                      <tr>
                        <td><input name="nilai_referensi1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_timbangan1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="ketidakpastian1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                      <td><input name="nilai_referensi2" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="pembacaan_timbangan2" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="koreksi2" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="ketidakpastian2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="nilai_referensi3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_timbangan3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="ketidakpastian3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                      <td><input name="nilai_referensi4" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="pembacaan_timbangan4" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="koreksi4" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="ketidakpastian4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="nilai_referensi5" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_timbangan5" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi5" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="ketidakpastian5" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                      <td><input name="nilai_referensi6" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="pembacaan_timbangan6" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="koreksi6" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="ketidakpastian6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="nilai_referensi7" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_timbangan7" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi7" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="ketidakpastian7" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                      <td><input name="nilai_referensi8" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="pembacaan_timbangan8" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="koreksi8" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="ketidakpastian8" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="nilai_referensi9" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_timbangan9" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi9" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="ketidakpastian9" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                      <td><input name="nilai_referensi10" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="pembacaan_timbangan10" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="koreksi10" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="ketidakpastian10" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                      <td><input name="nilai_referensi11" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="pembacaan_timbangan11" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="koreksi11" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="ketidakpastian11" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">Save</button>
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
      <div class="col">
        <div class="panel panel-default thumbnail">
          <div class="panel-body panel-form">
            <table class="table table-hover table-bordered " id="scollDatatable" style="width:100%">
              <thead class="table-light">
                <tr>
                  <td class="table-primary" rowspan="3"><b>No</b></td>
                  <td class="table-primary" rowspan="3"><b>Tanggal_Pemeliharaan</b></td>
                  <td class="table-primary" rowspan="3"><b>Kegiatan</b></td>
                  <td class="table-primary" rowspan="3"><b>Engineer</b></td>
                  <td class="table-info" colspan="6" align="center"><b>Data_Alat</b></td>
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

            </table>
          </div>

        </div>
      </div>
    </div>
    <!--TABEL-->



  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection