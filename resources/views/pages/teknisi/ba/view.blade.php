@extends('layouts.teknisi')

@section('content')
@section('title', 'Berita Acara')
<style>
  .table-striped {
    width: 100%;
    border-collapse: collapse;
  }

  .table-striped th,
  .table-striped td {
    border: 2px solid black;
    padding: 3px;
  }

  .panel {
    border: 1px solid black;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-text-o"></i></div>
      <div class="header-title">
        <h1>Berita Acara</h1>
        <small>Daftar Berita Acara</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!-- content -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>SURAT BERITA ACARA</h1>
          </div>

          <div class="panel-body panel-form" id="print_me">
            <table>
              <tr>
                <td style="width: 70%"><h1>SURAT BERITA ACARA</h1></td>
                <td><img src="{{ url('assets/images/kop_ba.png') }}" alt="kop" class="invoice-bg" style="width: 100%"></td>
              </tr>
            </table>
            <div class="row">
              <div class="col-sm-12">
                <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <!-- Berita Acara -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td width="20%"><div class="group-form row"><label style="color: blue;" for="noBeritaAcara" class="from-lable col-xs-6">No.Berita Acara :</label><div class="col-xs-5">{{ $item->ba[1] ?? '-' }}</div></div></td>
                        <td width="20%"><div class="group-form row"><label for="No.Urut dari" class="from-lable col-xs-6">No.Urut dari :</label><div class="col-xs-5">{{ $item->ba[2] ?? '-' }}</div></div></td>
                      </tr>
                      <tr>
                        <td width="20%"><div class="group-form row"><label for="Tanggal BA" class="from-lable col-xs-6">Tanggal BA :</label><div class="col-xs-5">{{ $item->ba[3] ?? '-' }}</div></div></td>
                        <td width="20%"><div class="group-form row"><label for="No.Referensi" class="from-lable col-xs-6">No.Referensi :</label><div class="col-xs-5">{{ $item->ba[4] ?? '-' }}</div></div></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- Berita Acara -->
                  <!-- Rs -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                         <td width="20%" colspan="4"><div class="group-form row"><label for="Nama Instansi" class="from-lable col-xs-3" style="color: blue;">Nama Instansi :</label><div class="col-xs-5">{{ $item->rs[1] ?? '-' }}</div></div></td>
                      </tr>
                      <tr>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Alamat" class="from-lable col-xs-5">Alamat :</label><div class="col-xs-5">{{ $item->rs[2] ?? '-' }}</div></div></td>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Jenis Instansi" class="from-lable col-xs-5">Jenis Instansi :</label><div class="col-xs-5">{{ $item->rs[3] ?? '-' }}</div></div></td>
                      </tr>
                      <tr>
                         <td width="20%" colspan="2"><div class="group-form row"><label for="Telepon" class="from-lable col-xs-5">Telepon :</label><div class="col-xs-5">{{ $item->rs[4] ?? '-' }}</div></div></td>
                         <td width="20%" colspan="2"><div class="group-form row"><label for="Email" class="from-lable col-xs-5">Email :</label><div class="col-xs-5">{{ $item->rs[5] ?? '-' }}</div></div></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- Rs -->
                  <!-- Kontak -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td width="20%" colspan="4"><div class="group-form row"><label for="Nama Kontak" class="from-lable col-xs-3" style="color: blue;">Nama Kontak :</label><div class="col-xs-5">{{ $item->kontak[1] ?? '-' }}</div></div></td>
                      </tr>
                      <tr>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Bagian" class="from-lable col-xs-4">Bagian :</label><div class="col-xs-5">{{ $item->kontak[2] ?? '-' }}</div></div></td>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="No.HP" class="from-lable col-xs-4">No.HP :</label><div class="col-xs-5">{{ $item->kontak[3] ?? '-' }}</div></div></td>
                      </tr>
                      <tr>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Jabatan" class="from-lable col-xs-4">Jabatan :</label><div class="col-xs-5">{{ $item->kontak[4] ?? '-' }}</div></div></td>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Email" class="from-lable col-xs-4">Email :</label><div class="col-xs-5">{{ $item->kontak[5] ?? '-' }}</div></div></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- Kontak -->
                  <!-- Alat -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td width="20%" colspan="4"><div class="group-form row"><label for="Nama Alat" class="from-lable col-xs-2" style="color: blue;">Nama Alat :</label><div class="col-xs-5">{{ $item->alat[1] ?? '-' }}</div></div></td>
                      </tr>
                      <tr>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Merk" class="from-lable col-xs-3">Merk :</label><div class="col-xs-5">{{ $item->alat[2] ?? '-' }}</div></div></td>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Lokasi" class="from-lable col-xs-3">Lokasi :</label><div class="col-xs-5">{{ $item->alat[3] ?? '-' }}</div></div></td>
                      </tr>
                      <tr>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Tipe" class="from-lable col-xs-3">Tipe :</label><div class="col-xs-5">{{ $item->alat[4] ?? '-' }}</div></div></td>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Tahun" class="from-lable col-xs-3">Tahun :</label><div class="col-xs-5">{{ $item->alat[5] ?? '-' }}</div></div></td>
                      </tr>
                      <tr>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="No.Seri" class="from-lable col-xs-3">No.Seri :</label><div class="col-xs-5">{{ $item->alat[6] ?? '-' }}</div></div></td>
                        <td width="20%" colspan="2"><div class="group-form row"><label for="Vendor" class="from-lable col-xs-3">Vendor :</label><div class="col-xs-5">{{ $item->alat[7] ?? '-' }}</div></div></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- Alat -->
                  <!-- Jenis -->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Jenis Panggilan</b></td>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Jenis Layanan</b></td>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Lokasi Pekerjaan</b></td>
                      </tr>
                      <tr>
                        <td class="text-center" width="15%"><b>Servis/PPM</b></td>
                        <td class="text-center">{{ $item->jenis[1] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Maintenance/Repair</b></td>
                        <td class="text-center">{{ $item->jenis[2] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>di tempat instansi</b></td>
                        <td class="text-center">{{ $item->jenis[3] ?? 'Tidak' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="15%"><b>Panggilan (on call)</b></td>
                        <td class="text-center">{{ $item->jenis[4] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Instalasi / Uji Fungsi</b></td>
                        <td class="text-center">{{ $item->jenis[5] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>kantor</b></td>
                        <td class="text-center">{{ $item->jenis[6] ?? 'Tidak' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="15%"><b>Garansi</b></td>
                        <td class="text-center">{{ $item->jenis[7] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Kalibrasi</b></td>
                        <td class="text-center">{{ $item->jenis[8] ?? 'Tidak' }}</td>
                        <td class="text-center" width="15%"><b>Pihak ke-3</b></td>
                        <td class="text-center">{{ $item->jenis[9] ?? 'Tidak' }}</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- Jenis -->
                  <!-- KELUHAN-->
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" width="20%"><b style="color: blue;">Keluhan</b></td>
                        <td class="text-center" width="20%"><b style="color: blue;">Tindakan</b></td>
                      </tr>
                      <tr>
                        <td><pre style="text-align: left; background-color: white; color: black; border: none; font-family: Arial, sans-serif;">{{ $item->keluhan ?? '-' }}</pre></td>
                        <td><pre style="text-align: left; background-color: white; color: black; border: none; font-family: Arial, sans-serif;">{{ $item->aksi ?? '-' }}</pre></td>
                      </tr>
                      <tr>
                        <td colspan="2" class="text-center" width="20%"><b style="color: blue;">Hasil</b></td>
                      </tr>
                      <tr>
                        <td colspan="2"><pre style="text-align: left; background-color: white; color: black; border: none; font-family: Arial, sans-serif;">{{ $item->hasil ?? '-' }}</pre></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <table class="table-striped" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-center" colspan="2"></td>
                        <td class="text-center" colspan="2"><img src="{{ url('assets/images/aksa.png') }}" id="ttd_image2" width="10%" alt="Ttd"></td>
                      </tr>
                      <tr>
                        <td class="text-center"><b>PJ ALAT</b></td>
                        <td class="text-center">{{ $item->pj ?? '-' }}</td>
                        <td class="text-center"><b>TEKNISI AJS</b></td>
                        <td class="text-center">{{ $item->teknisi ?? '-' }}</td>
                      </tr>
                      <tr>
                        <td class="text-center" width="20%"><b>TANGGAL</b></td>
                        <td class="text-center">{{ $item->tanggal_1 ?? '-' }}</td>
                        <td class="text-center" width="20%"><b>TANGGAL</b></td>
                        <td class="text-center">{{ $item->tanggal_2 ?? '-' }}</td>
                      </tr>
                    </tbody>
                  </table><br>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-offset-3 col-sm-6">
              <!-- <button type="button" class="btn btn-info mb-3" style="margin-right: 10px;" data-toggle="modal" data-target="#exampleModal">TTD</button> -->
              <button type="button" onclick="printMy('print_me')"
                class="btn btn-primary" style="margin-left: 180px;"><i class="fa fa-print"></i> Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- /.content -->
@endsection
@push('addon-script')
<script>
  // FUNGSI PRINT
  function printMy(print_me) {
    var printContent = document.getElementById("print_me").outerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML =
      `<html>
          <head>
            <title>Print Table</title>
          </head>
          <style>
            .table-striped {
            width: 100%;
            border-collapse: collapse;
            }

            .table-striped th,
            .table-striped td {
            border: 1px solid black;
            padding: 3px;
            }
            .panel { border: 1px solid black }
          </style>
          <body>
              ${printContent}
          </body>
        </html>`;
    window.print();
    document.body.innerHTML = originalContent;
  }
  // FUNGSI PRINT END
</script>
@endpush