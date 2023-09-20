@extends('layouts.admin_kalibrasi')

@section('content')
@section('title', 'Sertifikat')
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
      <div class="col-sm-10">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-primary"> <i class="fa fa-list"></i> Daftar Berita Acara </a>
            </div>
          </div>

          <!-- <div class="panel-body panel-form">
            <div class="row justify-content-center">

              <div class="col-md-12 ">
                <h1 class="text-center">Sertifikat Kalibrasi</h1>
                <p class="text-center"><b>No. Order : Lab.Kal-064-110523</b></p>
                <div class="row">
                  <div class="col-md-6">
                    No. Sertifikat
                  </div>
                  <div class="col-md-6">
                    UK-DHS-II-31-40103
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Merek
                  </div>
                  <div class="col-md-6">
                    ABN
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Tipe
                  </div>
                  <div class="col-md-6">
                    Spectrum
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    No. Seri
                  </div>
                  <div class="col-md-6">
                    00466726
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Nama Pemilik
                  </div>
                  <div class="col-md-6">
                    KLINIK UTAMA RB.NUR ANNISA
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Alamat Pemilik
                  </div>
                  <div class="col-md-6">
                    Jln. Diponegoro No. 102 Bulusari, Bulusulur
                    Wonogiri - Jawa Tengah
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Nama Ruang
                  </div>
                  <div class="col-md-6">
                    Rawat Inap
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Tanggal Kalibrasi
                  </div>
                  <div class="col-md-6">
                    11 May 2023
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Sertifikat ini terdiri dari
                  </div>
                  <div class="col-md-6">
                    03 Halaman
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Tanggal Kalibrasi
                  </div>
                  <div class="col-md-6">
                    Diterbitkan Tanggal
                    Senin, 15 Mei 2023
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Kepala Laboratorium Kalibrasi
                    PT. DARYA HARJA SENTOSA
                  </div>
                  <div class="col-md-6">
                    Nur Aini Susilawati
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="panel-body panel-form">
            <div class="row" style="margin:5%;">
              <div class="col-md-12">
                <table class="datatable table table-borderless" border="0">
                  <thead class="table-light">
                    <th colspan="3" class="text-center">
                      <h2>Sertifikat Kalibrasi</h2>
                      <p>No. Order : Lab.Kal-064-110523</p>
                      <p> No. Sertifikat:UK-DHS-II-31-40103</p>
                    </th>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="50%">
                        <b></b>
                      </td>
                      <td>

                      </td>
                    </tr>
                    <tr style="outline: thin solid">
                      <td> <b> Nama Alat</b></td>
                      <td><b>Tensimeter Jarum</b></td>
                    </tr>
                    <tr>
                      <td> <b> Merek</b></td>
                      <td>ABN</td>
                    </tr>
                    <tr>
                      <td> <b> Tipe</b></td>
                      <td>Spectrum</td>
                    </tr>
                    <tr>
                      <td> <b> No. Seri</b></td>
                      <td>00466726</td>
                    </tr>
                    <tr style="outline: thin solid">
                      <td> <b> Nama Pemilik</b></td>
                      <td><b>KLINIK UTAMA RB.NUR ANNISA</b></td>
                    </tr>
                    <tr>
                      <td> <b> Alamat Pemilik</b></td>
                      <td>Jln. Diponegoro No. 102 Bulusari, Bulusulur
                        Wonogiri - Jawa Tengah</td>
                    </tr>
                    <tr>
                      <td> <b> Nama Ruang</b></td>
                      <td>Rawat Inap</td>
                    </tr>
                    <tr>
                      <td> <b> Tanggal Kalibrasi</b></td>
                      <td>11 May 2023</td>
                    </tr>
                    <tr>
                      <td><b>Sertifikat ini terdiri dari</b></td>
                      <td>03 Halaman</td>
                    </tr>
                    <tr>
                      <td><b>Diterbitkan Tanggal</b></td>
                      <td>Senin, 15 Mei 2023</td>
                    </tr>
                    <tr>
                      <th><br>
                      <th><br>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <b>Kepala Laboratorium Kalibrasi <br>
                          PT. DARYA HARJA SENTOSA</b>
                      </td>
                    </tr>
                    <tr>
                      <th><br><br><br><br></th>
                      <th><br><br><br><br></th>
                    </tr>
                    <tr>
                      <td></td>
                      <td> <b>Nur Aini Susilawati </b></td>
                    </tr>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--TABEL-->


  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->


@endsection