@extends('layouts.admin')

@section('content')
@section('title', 'LK Autoclave')
<style>
  div.scrollmenu {
    background-color: #f1f1f1;
    overflow: auto;
    white-space: nowrap;
    border: 1px solid #ccc;
    box-sizing: inherit;
    margin-top: -20px;
  }

  div.scrollmenu a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px;
    text-decoration: none;
    cursor: pointer;
  }

  div.scrollmenu a:hover {
    background-color: #777;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-cogs"></i></div>
      <div class="header-title">
        <h1>LK Alat Kesehatan</h1>
        <small>Form LK Alat Kesehatan</small>
      </div>
    </div>
  </section>
  <div class="scrollmenu ">
    <a class="tablinks" id="defaultOpen" onclick="openCity(event, 'Anaesthesi')">Anaesthesi</a>
    <a class="tablinks" onclick="openCity(event, 'DentalUnit')">Dental Unit</a>
    <a class="tablinks" onclick="openCity(event, 'Dhiatermy')">Dhiatermy</a>
    <a class="tablinks" onclick="openCity(event, 'DoplerSimulator')">Dopler Simulator</a>
    <a class="tablinks" onclick="openCity(event, 'BedsideMonitor')">Bedside Monitor</a>
  </div>
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
      <div class="col-sm-3">
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <h2 class="text-center">Scan QR Code</h2>
          </div>
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div id="app">
                  <div class="preview-container">
                    <video id="preview_lembar_admin"></video>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Anaesthesi-->
        <div id="Anaesthesi" class="tabcontent">
        <!------>
        <div class="row">
            <div class="col-sm-12">
            <div class="panel panel-default thumbnail">

                <div class="panel-heading no-print">
                <h1>Form Pemeliharaan Anaesthesi</h1>
                </div>

                <div class="panel-body panel-form">
                <div class="row">
                    <div class="col-md-12 col-md-12">
                    <form action="{{ route('lk_alat.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        @csrf
                        @method('POST')

                    <!-- PENDATAAN ALAT -->
                        <h4><b>A. PENDATAAN ALAT</b></h4>

                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                            <div class="row">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_alat" type="text" class="form-control" onkeyup="autofillPemelihara()">
                                </div>
                                <div class="col-sm-3">
                                <label for="merek_tipe" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="merek_tipe" id="merek_tipe" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="ruangan" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="ruangan" id="ruangan" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="no_seri" class="form-label">No Seri<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="no_seri" id="no_seri" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="operator_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="operator_alat" id="operator_alat" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="tanggal" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="tanggal" id="tanggal" type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="alat" id="alat" type="text" class="form-control" >
                                </div>
                                <div class="col-sm-3">
                                <label for="pelaksana" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="pelaksana" id="pelaksana" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                                </div>
                            </div>
                        </div>
                    <!-- PENDATAAN ALAT N-->
                    
                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                        </tr>
                        <tr>
                            <td>Gas Flow Analyzer</td>
                            <td align="center"><input name="ukur_merek1"  class="form-control form-control-sm" type="text" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="ukur_tipe1"   class="form-control form-control-sm" type="text" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="ukur_noseri1" class="form-control form-control-sm" type="text" style="width: 80%; height: 20px;"></td>
                        </tr>
                        <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="ukur_merek2" class="form-control form-control-sm" type="text" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="ukur_tipe2" class="form-control form-control-sm" type="text" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="ukur_noseri2" class="form-control form-control-sm" type="text" style="width: 80%; height: 20px;"></td>
                        </tr>
                        </table>
                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                    <!-- KONDISI RUANGAN -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                        </tr>
                        <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="suhu" class="form-control form-control-sm" ></td>
                        </tr>
                        <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="kelembapan" class="form-control form-control-sm" ></td>
                        </tr>
                        </table>
                    <!-- KONDISI RUANGAN N-->

                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                        </tr>
                        <tr>
                            <td>1. Chasingss / Housing</td>
                            <td align="center"><input name="fisik_fungsi_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>2. Mount / Fastener</td>
                            <td align="center"><input name="fisik_fungsi_2" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_2" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>3. Breathing circuit termasuk filter</td>
                            <td align="center"><input name="fisik_fungsi_3" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_3" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>4. AC plug / Receptacles</td>
                            <td align="center"><input name="fisik_fungsi_4" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_4" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>5. Line Cord</td>
                            <td align="center"><input name="fisik_fungsi_5" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_5" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>6. Battery / Charger</td>
                            <td align="center"><input name="fisik_fungsi_6" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_6" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>7. Circuit Breaker / Fuse</td>
                            <td align="center"><input name="fisik_fungsi_7" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_7" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>8. Labeling</td>
                            <td align="center"><input name="fisik_fungsi_8" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_8" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>9. Indicator / Displays</td>
                            <td align="center"><input name="fisik_fungsi_9" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_9" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>10. Alarm / Interlock</td>
                            <td align="center"><input name="fisik_fungsi_10" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_10" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>11. Bellows</td>
                            <td align="center"><input name="fisik_fungsi_11" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_11" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>12. Controls / Switches</td>
                            <td align="center"><input name="fisik_fungsi_12" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_12" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>13. Bellows</td>
                            <td align="center"><input name="fisik_fungsi_13" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_13" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        </table>
                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->
                    
                    <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                        <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                            <tr>
                                <td align="center"><b>Parameter</b></td>
                                <td align="center"><b>Terukur</b></td>
                                <td align="center"><b>Ambang Batas</b></td>
                            </tr>
                            <tr>
                                <td>Main Voltage / Live-Neutral</td>
                                <td align="center"><input name="listrik_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center">220 ± 10% V</td>
                            </tr>
                            <tr>
                                <td>Protectiv Earth Resistance</td>
                                <td align="center"><input name="listrik_2" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 0,2 Ω</td>
                            </tr>
                            <tr>
                                <td>Insulation Resistance / Mains-PE</td>
                                <td align="center"><input name="listrik_3" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u>></u> 2 MΩ</td>
                            </tr>
                            <tr>
                                <td>Earth Leakage Current Normal Polarity Closed Neutral</td>
                                <td align="center"><input name="listrik_4" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 500 μA</td>
                            </tr>
                            </table>
                    <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                    <!-- PENGUKURAN KINERJA -->
                        <h4><b>F. PENGUKURAN KINERJA</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:80%">
                        <tr>
                            <td align="center"><b>Jenis Gas</b></td>
                            <td align="center"><b>Setting Pada Alat</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                        </tr>
                        <tr>
                            <td align="center" rowspan="7"><input name="jenis_gas" class="form-control form-control-sm" type="text" style="width: 50%;"></td>
                            <td align="center"><input name="seting_alat_1" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                            <td align="center"><input name="terukur_1" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                            <td align="center" rowspan="7">± 10%</td>
                        </tr>

                        <tr>
                        <td align="center"><input name="seting_alat_2" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        <td align="center"><input name="terukur_2" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        </tr>
                        <tr>
                        <td align="center"><input name="seting_alat_3" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        <td align="center"><input name="terukur_3" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        </tr>
                        <tr>
                        <td align="center"><input name="seting_alat_4" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        <td align="center"><input name="terukur_4" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        </tr>
                        <tr>
                        <td align="center"><input name="seting_alat_5" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        <td align="center"><input name="terukur_5" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        </tr>
                        <tr>
                        <td align="center"><input name="seting_alat_6" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        <td align="center"><input name="terukur_6" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        </tr>
                        <tr>
                        <td align="center"><input name="seting_alat_7" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        <td align="center"><input name="terukur_7" class="form-control form-control-sm" type="text" style="width: 80%;"></td>
                        </tr>
                        </table>
                    <!-- PENGUKURAN KINERJA N-->

                    <!-- KESIMPULAN -->
                        <h4><b>G. KESIMPULAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                        </tr>
                        <tr>
                            <td>Kondisi fisik dan fungsi</td>
                            <td align="center"><input name="kesimpulan_fisik_fungsi" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Keselamatan Listrik</td>
                            <td align="center"><input name="kesimpulan_listrik" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Kinerja Alat Kesehatan</td>
                            <td align="center"><input name="kesimpulan_kinerja" type="text" class="form-control"></td>
                        </tr>
                        </table>
                        
                        <div class="form-group row">
                        <label for="catatan" class="col-xs-3 col-form-label">Catatan<i class="text-danger">*</i></label>
                        <div class="col-xs-9">
                            <textarea name="catatan" class="form-control" placeholder="Catatan" id="catatan" maxlength="255" rows="5"></textarea>
                        </div>
                        </div>
                    <!-- KESIMPULAN -->
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
                </div>
                </div>
            </div>
            </div>
        </div>
        <!------>
        </div> 
    <!--Anaesthesi End-->

    <!--Dental Unit-->
      <div id="DentalUnit" class="tabcontent">
        <!------>
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">

              <div class="panel-heading no-print">
                <h1>Form Pemeliharaan Dental Unit</h1>
              </div>

              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                    <!-- PENDATAAN ALAT -->
                        <h4><b>A. PENDATAAN ALAT</b></h4>
                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                            <div class="row">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" onkeyup="autofillPemelihara()">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">No Seri<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" >
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                                </div>
                            </div>
                        </div>
                    <!-- PENDATAAN ALAT N-->

                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                        </tr>
                        <tr>
                            <td>Pressure Meter</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>Electrick Safety Analyzer</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        </table>
                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                    <!-- KONDISI ALAT -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                        </tr>
                        <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" ></td>
                        </tr>
                        <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" ></td>
                        </tr>
                        </table>
                    <!-- KONDISI ALAT N-->

                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                        </tr>
                        <tr>
                            <td>1. Cek seluruh bagian badan</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>2. Cek satuan daya</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>3. Cek tombol / switch</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>4. Cek fungsi foot switch</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>5. Cek selang air dan udara</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>6. Cek kabel suplay dan sambungan</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>7. Cek lampu</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>8. Cek fungsi water jet dan hand piece</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>9. Cek gerakan dental cair</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>10. Cek composer dan tekanan</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        </table>
                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                    <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                        <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                            <tr>
                                <td align="center"><b>Parameter</b></td>
                                <td align="center"><b>Terukur</b></td>
                                <td align="center"><b>Ambang Batas</b></td>
                            </tr>
                            <tr>
                                <td>Main Voltage / Live-Neutral</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center">220 ± 10% V</td>
                            </tr>
                            <tr>
                                <td>Protectiv Earth Resistance</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 0,2 Ω</td>
                            </tr>
                            <tr>
                                <td>Insulation Resistance / Mains-PE</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u>></u> 2 MΩ</td>
                            </tr>
                            <tr>
                                <td>Earth Leakage Current Normal Polarity Closed Neutral</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 500 μA</td>
                            </tr>
                            </table>
                    <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                    <!-- KESIMPULAN -->
                        <h4><b>F. KESIMPULAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                        </tr>
                        <tr>
                            <td>Kondisi fisik dan fungsi</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        <tr>
                            <td>Keselamatan Listrik</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        <tr>
                            <td>Kinerja Alat Kesehatan</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        </table>
                        
                        <div class="form-group row">
                        <label for="catatan" class="col-xs-3 col-form-label">Catatan<i class="text-danger">*</i></label>
                        <div class="col-xs-9">
                            <textarea name="catatan" class="form-control" placeholder="Catatan" id="catatan" maxlength="255" rows="5"></textarea>
                        </div>
                        </div>
                    <!-- KESIMPULAN -->
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!------>
      </div>
    <!--Dental Unit end-->

    <!--Dhiatermy-->
      <div id="Dhiatermy" class="tabcontent">
        <!------>
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">

              <div class="panel-heading no-print">
                <h1>Form Pemeliharaan Dhiatermy</h1>
              </div>

              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                    <!-- PENDATAAN ALAT -->
                        <h4><b>A. PENDATAAN ALAT</b></h4>
                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                            <div class="row">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" onkeyup="autofillPemelihara()">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">No Seri<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" >
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                                </div>
                            </div>
                        </div>
                    <!-- PENDATAAN ALAT N-->

                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                        </tr>
                        <tr>
                            <td>Pressure Meter</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>Electrick Safety Analyzer</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        </table>
                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                    <!-- KONDISI RUANGAN -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                        </tr>
                        <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" ></td>
                        </tr>
                        <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" ></td>
                        </tr>
                        </table>
                    <!-- KONDISI RUANGAN N-->

                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                        </tr>
                        <tr>
                            <td>1. Cek seluruh bagian alat</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>2. Cek catu daya</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>3. Cek tombol / switch</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>4. Cek kabel dan elektroda</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>5. Cek kipas pendingin tabung</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>6. Cek fungsi indikator</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>7. Cek timer</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>8. Cek fungsi tuning</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        </table>
                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                    <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                        <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                            <tr>
                                <td align="center"><b>Parameter</b></td>
                                <td align="center"><b>Terukur</b></td>
                                <td align="center"><b>Ambang Batas</b></td>
                            </tr>
                            <tr>
                                <td>Main Voltage / Live-Neutral</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center">220 ± 10% V</td>
                            </tr>
                            <tr>
                                <td>Protectiv Earth Resistance</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 0,2 Ω</td>
                            </tr>
                            <tr>
                                <td>Insulation Resistance / Mains-PE</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u>></u> 2 MΩ</td>
                            </tr>
                            <tr>
                                <td>Earth Leakage Current Normal Polarity Closed Neutral</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 500 μA</td>
                            </tr>
                            </table>
                    <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                    <!-- KESIMPULAN -->
                        <h4><b>F. KESIMPULAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                        </tr>
                        <tr>
                            <td>Kondisi fisik dan fungsi</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        <tr>
                            <td>Keselamatan Listrik</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        <tr>
                            <td>Kinerja Alat Kesehatan</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        </table>
                        
                        <div class="form-group row">
                        <label for="catatan" class="col-xs-3 col-form-label">Catatan<i class="text-danger">*</i></label>
                        <div class="col-xs-9">
                            <textarea name="catatan" class="form-control" placeholder="Catatan" id="catatan" maxlength="255" rows="5"></textarea>
                        </div>
                        </div>
                    <!-- KESIMPULAN -->
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!------>
      </div>
    <!--Dhiatermy end-->

    <!--Dopler simulator-->
      <div id="DoplerSimulator" class="tabcontent">
        <!------>
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">

              <div class="panel-heading no-print">
                <h1>Form Pemeliharaan Dopler Simulator</h1>
              </div>

              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                    <!-- PENDATAAN ALAT -->
                        <h4><b>A. PENDATAAN ALAT</b></h4>
                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                            <div class="row">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" onkeyup="autofillPemelihara()">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">No Seri<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" >
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                                </div>
                            </div>
                        </div>
                    <!-- PENDATAAN ALAT N-->

                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                        </tr>
                        <tr>
                            <td>Fetal simulator</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>Electrick Safety Analyzer</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>Digital Caliper</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        </table>
                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                    <!-- KONDISI RUANGAN -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                        </tr>
                        <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" ></td>
                        </tr>
                        <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" ></td>
                        </tr>
                        </table>
                    <!-- KONDISI RUANGAN N-->

                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                        </tr>
                        <tr>
                            <td>1. Cek seluruh bagian alat</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>2. Cek display</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>3. Cek tombol / switch</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>4. Cek fungsi probe</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>5. Cek bateray</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        </table>
                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                    <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                        <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                            <tr>
                                <td align="center"><b>Parameter</b></td>
                                <td align="center"><b>Terukur</b></td>
                                <td align="center"><b>Ambang Batas</b></td>
                            </tr>
                            <tr>
                                <td>Main Voltage / Live-Neutral</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center">220 ± 10% V</td>
                            </tr>
                            <tr>
                                <td>Current Amp</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center">-</td>
                            </tr>
                            <tr>
                                <td>Protectiv Earth Resistance</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 0,2 Ω</td>
                            </tr>
                            <tr>
                                <td>Insulation Resistance / Mains-PE</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u>></u> 2 MΩ</td>
                            </tr>
                            <tr>
                                <td>Earth Leakage Current Normal Polarity</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 500 μA</td>
                            </tr>
                            <tr>
                                <td>Earth Leakage Current Reverse Polarity</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 500 μA</td>
                            </tr>
                            <tr>
                                <td>Encloser Leakage Current Normal Polarity Closed Earth</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 100 μA</td>
                            </tr>
                            <tr>
                                <td>Encloser Leakage Current Normal Polarity Open Earth</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 500 μA</td>
                            </tr>
                            <tr>
                                <td>Encloser Leakage Current Reverse Polarity Closed Earth</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 100 μA</td>
                            </tr>
                            <tr>
                                <td>Encloser Leakage Current Reverse Polarity Open Earth</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 500 μA</td>
                            </tr>
                            </table>
                    <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                    <!-- PENGUKURAN KINERJA -->
                        <h4><b>E. PENGUKURAN KINERJA (KUANTITATIVE TASKS)</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td rowspan="2" align="center"><b>Parameter</b></td>
                            <td rowspan="2" align="center"><b>Seting standar</b></td>
                            <td colspan="6" align="center"><b>Hasil pengukuran (bpm)</b></td>
                            <td rowspan="2" align="center"><b>Toleransi(bpm)</b></td>
                        </tr>
                        <tr>
                            <td align="center"><b>1</b></td>
                            <td align="center"><b>2</b></td>
                            <td align="center"><b>3</b></td>
                            <td align="center"><b>4</b></td>
                            <td align="center"><b>5</b></td>
                            <td align="center"><b>6</b></td>
                        </tr>
                        <tr>
                            <td rowspan="5" align="center"><b>Heart Rate (bpm)</b></td>
                            <td align="center"><b>30</b></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"> ±5%</td>
                        </tr>
                        <tr>
                            <td align="center"><b>60</b></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="center"><b>120</b></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="center"><b>180</b></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td align="center"><b>240</b></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        </table>
                    <!-- PENGUKKURAN KINERJA N -->

                    <!-- KESIMPULAN -->
                        <h4><b>F. KESIMPULAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                        </tr>
                        <tr>
                            <td>Kondisi fisik dan fungsi</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        <tr>
                            <td>Keselamatan Listrik</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        <tr>
                            <td>Kinerja Alat Kesehatan</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        </table>
                        
                        <div class="form-group row">
                        <label for="catatan" class="col-xs-3 col-form-label">Catatan<i class="text-danger">*</i></label>
                        <div class="col-xs-9">
                            <textarea name="catatan" class="form-control" placeholder="Catatan" id="catatan" maxlength="255" rows="5"></textarea>
                        </div>
                        </div>
                    <!-- KESIMPULAN -->
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!------>
      </div>
    <!--Dopler simulator end-->

    <!--Bedside Monitor-->
      <div id="BedsideMonitor" class="tabcontent">
        <!------>
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">

              <div class="panel-heading no-print">
                <h1>Form Pemeliharaan Bedside Monitor</h1>
              </div>

              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <form action="" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                    <!-- PENDATAAN ALAT -->
                        <h4><b>A. PENDATAAN ALAT</b></h4>
                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                            <div class="row">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" onkeyup="autofillPemelihara()">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">No Seri<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" >
                                </div>
                                <div class="col-sm-3">
                                <label for="id_alat" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                                </div>
                                <div class="col-sm-3">
                                <input name="id_alat" id="id_ase1t" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                                </div>
                            </div>
                        </div>
                    <!-- PENDATAAN ALAT N-->

                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                        </tr>
                        <tr>
                            <td>Electrical safety analyzer</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>Vital signs simulator</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        </table>
                    <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                    <!-- KONDISI RUANGAN -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                        </tr>
                        <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" ></td>
                        </tr>
                        <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" ></td>
                        </tr>
                        </table>
                    <!-- KONDISI RUANGAN N-->

                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                        </tr>
                        <tr>
                            <td>1. Chassing / Housing</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>2. Labeling</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>3. Mount</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>4. Alarm / Interlock</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>5. Indikator / Displays</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>6. Line Cord</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>7. Recorder</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>8. Circuit Breaker / Fuse</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>9. Control / Switches</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>10. Back up battry powered</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>11. Charging systems</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        <tr>
                            <td>11. Accessories</td>
                            <td align="center"><input name="cek_a_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                        </tr>
                        </table>
                    <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                    <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                      <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                            <tr>
                                <td align="center"><b>Parameter</b></td>
                                <td align="center"><b>Terukur</b></td>
                                <td align="center"><b>Ambang Batas</b></td>
                            </tr>
                            <tr>
                                <td>Main Voltage / Live-Neutral</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center">220 ± 10% V</td>
                            </tr>
                            <tr>
                                <td>Protectiv Earth Resistance</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 0,2 Ω</td>
                            </tr>
                            <tr>
                                <td>Insulation Resistance / Mains-PE</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u>></u> 2 MΩ</td>
                            </tr>
                            <tr>
                                <td>Earth Leakage Current Normal Polarity Closed Neutral</td>
                                <td align="center"><input name="cek_a_1" class="form-control form-control-sm" type="text"></td>
                                <td align="center"><u><</u> 500 μA</td>
                            </tr>
                            </table>
                    <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                    <!-- PENGUKURAN KINERJA -->
                        <h4><b>E. PENGUKURAN KINERJA (KUANTITATIVE TASKS)</b></h4>
                        <h5><b>NIBP / TEKANAN DARAH</b></h5>
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Seting standar</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                        </tr>
                        <tr>
                            <td rowspan="4" align="center"><b>Tekanan Darah (mmhg)</b></td>
                            <td align="center"><b>60 / 30 (40)</b></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td rowspan="4" align="center"><b> ± 10 mmHg</b></td>
                        </tr>
                        <tr>
                          <td align="center"><b>120 / 80 (93)</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>150 / 100 (117)</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>200 / 150 (167)</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        </table>

                        <h5><b>HEART RATE</b></h5>
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Seting standar</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                        </tr>
                        <tr>
                            <td rowspan="6" align="center"><b>ECG (BPM)</b></td>
                            <td align="center"><b>30</b></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td rowspan="6" align="center"><b> ± 5%</b></td>
                        </tr>
                        <tr>
                          <td align="center"><b>60</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>90</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>120</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>180</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>240</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        </table>

                        <h5><b>SPO2 (plilih tipe sensor yang digunakan)</b></h5>
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Seting standar</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                        </tr>
                        <tr>
                            <td rowspan="5" align="center"><b>SPO2(%)</b></td>
                            <td align="center"><b>80</b></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td rowspan="5" align="center"><b> ± 3%</b></td>
                        </tr>
                        <tr>
                          <td align="center"><b>85</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>90</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>95</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>100</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        </table>

                        <h5><b>RESPIRASI</b></h5>
                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Seting standar</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                        </tr>
                        <tr>
                            <td rowspan="5" align="center"><b>Respirasi (Brpm)</b></td>
                            <td align="center"><b>10</b></td>
                            <td align="center"><input type="text" class="form-control"></td>
                            <td rowspan="5" align="center"><b> ± 5%</b></td>
                        </tr>
                        <tr>
                          <td align="center"><b>30</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>40</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>60</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td align="center"><b>80</b></td>
                          <td align="center"><input type="text" class="form-control"></td>
                        </tr>
                        </table>
                    <!-- PENGUKKURAN KINERJA N -->

                    <!-- KESIMPULAN -->
                        <h4><b>F. KESIMPULAN</b></h4>

                        <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                        <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                        </tr>
                        <tr>
                            <td>Kondisi fisik dan fungsi</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        <tr>
                            <td>Keselamatan Listrik</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        <tr>
                            <td>Kinerja Alat Kesehatan</td>
                            <td align="center"><b style="color: red;">Tidak Laik</b></td>
                        </tr>
                        </table>
                        
                        <div class="form-group row">
                        <label for="catatan" class="col-xs-3 col-form-label">Catatan<i class="text-danger">*</i></label>
                        <div class="col-xs-9">
                            <textarea name="catatan" class="form-control" placeholder="Catatan" id="catatan" maxlength="255" rows="5"></textarea>
                        </div>
                        </div>
                    <!-- KESIMPULAN -->
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!------>
      </div>
    <!--Bedside Monitor end-->

    <!--TABEL-->
    <!-- <div class="row">
      <div class="col">
        <div class="panel panel-default thumbnail">
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <table class="table table-hover table-bordered" id="scollDatatable" style="width:100%">
                <thead class="table-light">
                  <tr>
                    <td class="table-primary" rowspan="3"><b>No</b></td>
                    <td class="table-primary" rowspan="3"><b>Tanggal_Pemeliharaan</b></td>
                    <td class="table-primary" rowspan="3"><b>Kegiatan</b></td>
                    <td class="table-primary" rowspan="3"><b>Engineer</b></td>
                    <td class="table-info" colspan="6" align="center"><b>Data_Alat</b></td>
                    <td class="table-success" colspan="7" align="center"><b>Persiapan</b></td>
                    <td class="table-active" colspan="36" align="center">
                      <b>pemantauan_fisik_&_fungsi</b>
                    </td>
                    <td class="table-danger" colspan="5" align="center">
                      <b>pemeliharaan_preventife</b>
                    </td>
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
                    <td class="table-primary" rowspan="3"><b>Tombol_Aksi</b></td>
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
                    <td class="table-dark" colspan="4" align="center"><b>Badan/Selungkup</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Alarm_&_Sistem_Interlock</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Kabel_&_Kelenturannya</b>
                    </td>
                    <td class="table-dark" colspan="4" align="center"><b>Sistem_Pengunci</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Tombol_&_Saklar</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Label/Penandaan</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Display/Layar</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Aksesoris</b></td>
                    <td class="table-dark" colspan="4" align="center"><b>Indikator_Bunyi</b></td>
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
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>catatan</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>catatan</b></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td> </td>
                    <td>
                      <a><i class="fa fa-print"></i></a>
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--TABEL-->


    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@push('addon-script')
<script>
  let scanner_teknisi = new Instascan.Scanner({
    video: document.getElementById('preview_lembar_admin'),
    mirror: false
  });
  scanner_teknisi.addListener('scan', function(content) {
    const fruits = content.split(',');
    $("#id_aset_reg").val(fruits[0]);
    $("#Merek_Alat_reg").val(fruits[3]);
    $("#Nama_Alat_reg").val(fruits[2]);
    $("#Serial_Number_reg").val(fruits[5]);
    $("#Lokasi_Alat_reg").val(fruits[6]);
    $("#Type_Alat_reg").val(fruits[4]);
  });

  Instascan.Camera.getCameras().then(cameras => {
    if (cameras.length > 0) {
      scanner_teknisi.start(cameras[1]);
    } else {
      console.error("Please enable Camera!");
    }
  });

  function autofillPemelihara() {
    let idars = $("#id_ase1t").val();
    $.ajax({
      url: '{{ url(' / dashboard / ppm / autofill / ') }}/' + idars,
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        idars: idars
      },
      dataType: 'json',
      success: function(data) {
        $("#nama_alat1").val(data.nama_alat_reg);
        $("#merek1").val(data.merek_alat_reg);
        $("#serial_number1").val(data.serial_number_reg);
        $("#tipe1").val(data.type);
        $("#ruangan1").val(data.lokasi_alat_reg);

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }

  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>

@endpush
@endsection