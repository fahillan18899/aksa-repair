@extends('layouts.admin')

@section('content')
@section('title', 'LK Alat Kesehatan')
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

  .scrollmenu a:hover {
    background-color: #ddd;
  }

  .scrollmenu:not(:hover) a.active {
    background-color: #ccc;
  }

  .tabcontent>.active {
    display: block;
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
    <a class="tablinks active" id="defaultOpen" onclick="openCity(event, 'Anaesthesi')">Anaesthesi</a>
    <a class="tablinks active" onclick="openCity(event, 'DentalUnit')">Dental Unit</a>
    <a class="tablinks active" onclick="openCity(event, 'Dhiatermy')">Dhiatermy</a>
    <a class="tablinks active" onclick="openCity(event, 'DoplerSimulator')">Dopler Simulator</a>
    <a class="tablinks active" onclick="openCity(event, 'BedsideMonitor')">Bedside Monitor</a>
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
    <!-- Scanner qr -->
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
    <!-- Scanner qr -->

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
                    <form action="{{ url('/dashboard/ppm/tambahAnesthesi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                      <!-- PENDATAAN ALAT -->
                        <div class="form-group row">
                          <label for="data_lkAlat" class="col-xs-3 col-form-label">Data Alat </label>
                          <div class="col-xs-9">
                            <select name="data_lkAlat" class="form-control" id="data_lkAlat">
                              <option>-- Pilih Data Alat --</option>
                              @foreach($Inv as $Inv)
                              <option value="<?= $Inv['id_aset']; ?>">
                                <?= $Inv['id_aset']; ?>_<?= $Inv['nama_alat']; ?>_<?= $Inv['serial_number']; ?>_<?= $Inv['lokasi_alat']; ?></option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <h4><b>A. PENDATAAN ALAT</b></h4>
                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="id_alat" id="id_alat" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="merek_tipe" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="merek_tipe" id="merek_tipe" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="ruangan" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="ruangan" id="ruangan" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="no_seri" class="form-label">No Seri<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="no_seri" id="no_seri" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
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
                              <input name="tanggal" id="tanggal" type="text" class="form-control"
                              value="<?php date_default_timezone_set('Asia/Jakarta');echo date(now()) ?>" readonly>
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="alat" id="alat" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
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
                        <table class="table table-hover table-bordered"  style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Gas Flow Analyzer</td>
                            <td align="center"><input name="ukur_merek1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri1" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="ukur_merek2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri2" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                      <!-- KONDISI RUANGAN -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="suhu" class="form-control form-control-sm"></td>
                          </tr>
                          <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="kelembapan" class="form-control form-control-sm"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- KONDISI RUANGAN N-->

                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
                        </table>
                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                      <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                        <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Ambang Batas</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
                        </table>
                      <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                      <!-- PENGUKURAN KINERJA -->
                        <h4><b>F. PENGUKURAN KINERJA</b></h4>
                        <table class="table table-hover table-bordered" style="width:80%">
                          <thead>
                          <tr>
                            <td align="center"><b>Jenis Gas</b></td>
                            <td align="center"><b>Setting Pada Alat</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
                        </table>
                      <!-- PENGUKURAN KINERJA N-->

                      <!-- KESIMPULAN -->
                        <h4><b>G. KESIMPULAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
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
                <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" id="scollDatatable"  style="width:100%">
                   <thead class="table-light">
                     <tr>
                       <th scope="col">ID_Alat</th>
                       <th scope="col">Ruangan</th>
                       <th scope="col">Operator</th>
                       <th scope="col">Nama_Alat</th>
                       <th scope="col">Merek/Tipe</th>
                       <th scope="col">No_Seri</th>
                       <th scope="col">Tanggal</th>
                       <th scope="col">Tombol_Aksi_Table</th>
                     </tr>
                   </thead>
                   <tbody>
                     @forelse ($items as $index => $item)
                     <tr>
                       <td align="center"> {{ $item->id_alat }}</td>
                       <td align="center"> {{ $item->ruangan }}</td>
                       <td align="center"> {{ $item->operator_alat }}</td>
                       <td align="center"> {{ $item->alat }}</td>
                       <td align="center"> {{ $item->merek_tipe }}</td>
                       <td align="center"> {{ $item->no_seri }}</td>
                       <td align="center"> {{ $item->tanggal }}</td>
                       <td>
                         <a href="/dashboard/ppm/lk_alat/edit_anestesi/{{ $item->id }}/edit" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="Left" title="Edit"> <i class="fa fa-edit"></i></a>
                         <a href="/dashboard/ppm/lk_alat/show_anestesi/{{ $item->id }}/show" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="Left" title="Detail"> <i class="fa fa-eye"></i></a>
                         <form action="{{ url('/dashboard/ppm/tambahAnesthesi', $item->id) }}" method="POST" class="d-inline">
                           @csrf
                           @method('delete')
                           <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="Bottom" title="Hapus">
                             <i class="fa fa-trash"></i>
                           </button>
                       </td>
                       </form>
                       </td>
                     </tr>
                     @empty
                     @endforelse
                   </tbody>
                 </table>
                <!--TABEL-->
              </div>
            </div>
          </div>
        </div>
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
                    <form action="{{ url('/dashboard/ppm/tambahDentalUnit') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                      <!-- PENDATAAN ALAT -->
                        <div class="form-group row">
                          <label for="data_lkAlat2" class="col-xs-3 col-form-label">Data Alat </label>
                          <div class="col-xs-9">
                            <select name="data_lkAlat2" class="form-control" id="data_lkAlat2">
                              <option>-- Pilih Data Alat --</option>
                              @foreach($Inv2 as $Inv2)
                              <option value="<?= $Inv2['id_aset']; ?>">
                                <?= $Inv2['id_aset']; ?>_<?= $Inv2['nama_alat']; ?>_<?= $Inv2['serial_number']; ?>_<?= $Inv2['lokasi_alat']; ?></option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <h4><b>A. PENDATAAN ALAT</b></h4>
                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="id_alat" id="id_alat2" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="merek_tipe" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="merek_tipe" id="merek_tipe2" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="ruangan" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="ruangan" id="ruangan2" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="no_seri" class="form-label">No Seri<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="no_seri" id="no_seri2" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="operator_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="operator_alat" id="" type="text" class="form-control">
                            </div>
                            <div class="col-sm-3">
                              <label for="tanggal" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="tanggal" id="" type="text" class="form-control"
                                value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="alat" id="alat2" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="pelaksana" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="pelaksana" id="" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                            </div>
                          </div>
                        </div>
                      <!-- PENDATAAN ALAT N-->

                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Pressure Meter</td>
                            <td align="center"><input name="ukur_merek1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri1" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Electrick Safety Analyzer</td>
                            <td align="center"><input name="ukur_merek2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri2" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="ukur_merek3" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe3" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri3" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                      <!-- KONDISI RUANGAN -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="suhu" class="form-control form-control-sm"></td>
                          </tr>
                          <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="kelembapan" class="form-control form-control-sm"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- KONDISI RUANGAN N-->

                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>1. Cek seluruh bagian badan</td>
                            <td align="center"><input name="fisik_fungsi_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_1" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>2. Cek satuan daya</td>
                            <td align="center"><input name="fisik_fungsi_2" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_2" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>3. Cek tombol / switch</td>
                            <td align="center"><input name="fisik_fungsi_3" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_3" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>4. Cek fungsi foot switch</td>
                            <td align="center"><input name="fisik_fungsi_4" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_4" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>5. Cek selang air dan udara</td>
                            <td align="center"><input name="fisik_fungsi_5" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_5" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>6. Cek kabel suplay dan sambungan</td>
                            <td align="center"><input name="fisik_fungsi_6" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_6" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>7. Cek lampu</td>
                            <td align="center"><input name="fisik_fungsi_7" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_7" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>8. Cek fungsi water jet dan hand piece</td>
                            <td align="center"><input name="fisik_fungsi_8" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_8" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>9. Cek gerakan dental cair</td>
                            <td align="center"><input name="fisik_fungsi_9" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_9" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>10. Cek composer dan tekanan</td>
                            <td align="center"><input name="fisik_fungsi_10" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" valu="baik"></td>
                            <td align="center"><input name="keterangan_10" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                      <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                        <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Ambang Batas</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
                        </table>
                      <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                      <!-- KESIMPULAN -->
                        <h4><b>G. KESIMPULAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
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
                <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" id="scollDatatable"  style="width:100%">
                   <thead class="table-light">
                     <tr>
                       <th scope="col">ID_Alat</th>
                       <th scope="col">Ruangan</th>
                       <th scope="col">Operator</th>
                       <th scope="col">Nama_Alat</th>
                       <th scope="col">Merek/Tipe</th>
                       <th scope="col">No_Seri</th>
                       <th scope="col">Tanggal</th>
                       <th scope="col">Tombol_Aksi_Table</th>
                     </tr>
                   </thead>
                   <tbody>
                     @forelse ($items2 as $index => $item)
                     <tr>
                       <td> {{ $item->id_alat }}</td>
                       <td> {{ $item->ruangan }}</td>
                       <td> {{ $item->operator_alat }}</td>
                       <td> {{ $item->alat }}</td>
                       <td> {{ $item->merek_tipe }}</td>
                       <td> {{ $item->no_seri }}</td>
                       <td> {{ $item->tanggal }}</td>
                       <td>
                         <a href="/dashboard/ppm/lk_alat/edit_dental_unit/{{ $item->id }}/edit" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="Left" title="Edit"> <i class="fa fa-edit"></i></a>
                         <a href="/dashboard/ppm/lk_alat/show_dental_unit/{{ $item->id }}/show" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="Left" title="Detail"> <i class="fa fa-eye"></i></a>
                         <form action="{{ url('/dashboard/ppm/tambahDentalUnit', $item->id) }}" method="POST" class="d-inline">
                           @csrf
                           @method('delete')
                           <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="Bottom" title="Hapus">
                             <i class="fa fa-trash"></i>
                           </button>
                       </td>
                       </form>
                       </td>
                     </tr>
                     @empty
                     @endforelse
                   </tbody>
                 </table>
                <!--TABEL-->
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
                    <form action="{{ url('/dashboard/ppm/tambahDhiatermy') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                      <!-- PENDATAAN ALAT -->
                        <div class="form-group row">
                          <label for="data_lkAlat3" class="col-xs-3 col-form-label">Data Alat </label>
                          <div class="col-xs-9">
                            <select name="data_lkAlat3" class="form-control" id="data_lkAlat2">
                              <option>-- Pilih Data Alat --</option>
                              @foreach($Inv3 as $Inv3)
                              <option value="<?= $Inv3['id_aset']; ?>">
                                <?= $Inv3['id_aset']; ?>_<?= $Inv3['nama_alat']; ?>_<?= $Inv3['serial_number']; ?>_<?= $Inv3['lokasi_alat']; ?></option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <h4><b>A. PENDATAAN ALAT</b></h4>
                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="id_alat" id="id_alat3" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="merek_tipe" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="merek_tipe" id="merek_tipe3" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="ruangan" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="ruangan" id="ruangan3" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="no_seri" class="form-label">No Seri<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="no_seri" id="no_seri3" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="operator_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="operator_alat" id="" type="text" class="form-control">
                            </div>
                            <div class="col-sm-3">
                              <label for="tanggal" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="tanggal" id="" type="text" class="form-control"
                                value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="alat" id="alat3" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="pelaksana" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="pelaksana" id="" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                            </div>
                          </div>
                        </div>
                      <!-- PENDATAAN ALAT N-->

                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Pressure Meter</td>
                            <td align="center"><input name="ukur_merek1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri1" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Electrick Safety Analyzer</td>
                            <td align="center"><input name="ukur_merek2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri2" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="ukur_merek3" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe3" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri3" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                      <!-- KONDISI RUANGAN -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="suhu" class="form-control form-control-sm"></td>
                          </tr>
                          <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="kelembapan" class="form-control form-control-sm"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- KONDISI RUANGAN N-->

                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>1. Cek seluruh bagian alat</td>
                            <td align="center"><input name="fisik_fungsi_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_1" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>2. Cek catu daya</td>
                            <td align="center"><input name="fisik_fungsi_2" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_2" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>3. Cek tombol / switch</td>
                            <td align="center"><input name="fisik_fungsi_3" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_3" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>4. Cek kabel dan elektroda</td>
                            <td align="center"><input name="fisik_fungsi_4" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_4" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>5. Cek kipas pendingin tabung</td>
                            <td align="center"><input name="fisik_fungsi_5" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_5" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>6. Cek fungsi indikator</td>
                            <td align="center"><input name="fisik_fungsi_6" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_6" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>7. Cek timer</td>
                            <td align="center"><input name="fisik_fungsi_7" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_7" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>8. Cek fungsi tuning</td>
                            <td align="center"><input name="fisik_fungsi_8" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_8" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                      <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                        <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Ambang Batas</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
                        </table>
                      <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                      <!-- KESIMPULAN -->
                        <h4><b>G. KESIMPULAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
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
                <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" id="scollDatatable"  style="width:100%">
                   <thead class="table-light">
                     <tr>
                       <th scope="col">ID_Alat</th>
                       <th scope="col">Ruangan</th>
                       <th scope="col">Operator</th>
                       <th scope="col">Nama_Alat</th>
                       <th scope="col">Merek/Tipe</th>
                       <th scope="col">No_Seri</th>
                       <th scope="col">Tanggal</th>
                       <th scope="col">Tombol_Aksi_Table</th>
                     </tr>
                   </thead>
                   <tbody>
                     @forelse ($items3 as $index => $item)
                     <tr>
                       <td align="center"> {{ $item->id_alat }}</td>
                       <td align="center"> {{ $item->ruangan }}</td>
                       <td align="center"> {{ $item->operator_alat }}</td>
                       <td align="center"> {{ $item->alat }}</td>
                       <td align="center"> {{ $item->merek_tipe }}</td>
                       <td align="center"> {{ $item->no_seri }}</td>
                       <td align="center"> {{ $item->tanggal }}</td>
                       <td align="center">
                         <a href="/dashboard/ppm/lk_alat/edit_dhiatermy/{{ $item->id }}/edit" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="Left" title="Edit"> <i class="fa fa-edit"></i></a>
                         <a href="/dashboard/ppm/lk_alat/show_dhiatermy/{{ $item->id }}/show" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="Left" title="Detail"> <i class="fa fa-eye"></i></a>
                         <form action="{{ url('/dashboard/ppm/tambahDhiatermy', $item->id) }}" method="POST" class="d-inline">
                           @csrf
                           @method('delete')
                           <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="Bottom" title="Hapus">
                             <i class="fa fa-trash"></i>
                           </button>
                       </td>
                       </form>
                       </td>
                     </tr>
                     @empty
                     @endforelse
                   </tbody>
                 </table>
                <!--TABEL-->
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
                    <form action="{{ url('/dashboard/ppm/tambahDopler') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                      <!-- PENDATAAN ALAT -->
                        <div class="form-group row">
                          <label for="data_lkAlat4" class="col-xs-3 col-form-label">Data Alat </label>
                          <div class="col-xs-9">
                            <select name="data_lkAlat4" class="form-control" id="data_lkAlat2">
                              <option>-- Pilih Data Alat --</option>
                              @foreach($Inv4 as $Inv4)
                              <option value="<?= $Inv4['id_aset']; ?>">
                                <?= $Inv4['id_aset']; ?>_<?= $Inv4['nama_alat']; ?>_<?= $Inv4['serial_number']; ?>_<?= $Inv4['lokasi_alat']; ?></option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <h4><b>A. PENDATAAN ALAT</b></h4>
                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="id_alat" id="id_alat4" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="merek_tipe" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="merek_tipe" id="merek_tipe4" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="ruangan" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="ruangan" id="ruangan4" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="no_seri" class="form-label">No Seri<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="no_seri" id="no_seri4" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="operator_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="operator_alat" id="" type="text" class="form-control">
                            </div>
                            <div class="col-sm-3">
                              <label for="tanggal" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="tanggal" id="" type="text" class="form-control"
                                value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="alat" id="alat4" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="pelaksana" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="pelaksana" id="" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                            </div>
                          </div>
                        </div>
                      <!-- PENDATAAN ALAT N-->

                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Fetal simulator</td>
                            <td align="center"><input name="ukur_merek1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri1" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Electrick Safety Analyzer</td>
                            <td align="center"><input name="ukur_merek2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri2" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Digital Caliper</td>
                            <td align="center"><input name="ukur_merek3" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe3" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri3" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="ukur_merek4" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe4" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri4" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                      <!-- KONDISI RUANGAN -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="suhu" class="form-control form-control-sm"></td>
                          </tr>
                          <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="kelembapan" class="form-control form-control-sm"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- KONDISI RUANGAN N-->

                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>1. Cek seluruh bagian alat</td>
                            <td align="center"><input name="fisik_fungsi_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="Baik"></td>
                            <td align="center"><input name="keterangan_1" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>2. Cek display</td>
                            <td align="center"><input name="fisik_fungsi_2" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="Baik"></td>
                            <td align="center"><input name="keterangan_2" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>3. Cek tombol / switch</td>
                            <td align="center"><input name="fisik_fungsi_3" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="Baik"></td>
                            <td align="center"><input name="keterangan_3" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>4. Cek fungsi probe</td>
                            <td align="center"><input name="fisik_fungsi_4" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="Baik"></td>
                            <td align="center"><input name="keterangan_4" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>5. Cek bateray</td>
                            <td align="center"><input name="fisik_fungsi_5" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="Baik"></td>
                            <td align="center"><input name="keterangan_5" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                      <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                        <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Ambang Batas</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Main Voltage / Live-Neutral</td>
                            <td align="center"><input name="listrik_1" class="form-control form-control-sm" type="text"></td>
                            <td align="center">220 ± 10% V</td>
                          </tr>
                          <tr>
                            <td>Current Amp</td>
                            <td align="center"><input name="listrik_2" class="form-control form-control-sm" type="text"></td>
                            <td align="center">-</td>
                          </tr>
                          <tr>
                            <td>Protectiv Earth Resistance</td>
                            <td align="center"><input name="listrik_3" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><u><</u> 0,2 Ω</td>
                          </tr>
                          <tr>
                            <td>Insulation Resistance / Mains-PE</td>
                            <td align="center"><input name="listrik_4" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><u>></u> 2 MΩ</td>
                          </tr>
                          <tr>
                            <td>Earth Leakage Current Normal Polarity</td>
                            <td align="center"><input name="listrik_5" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><u><</u> 500 μA</td>
                          </tr>
                          <tr>
                            <td>Earth Leakage Current Reverse Polarity</td>
                            <td align="center"><input name="listrik_6" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><u><</u> 500 μA</td>
                          </tr>
                          <tr>
                            <td>Encloser Leakage Current Normal Polarity Closed Earth</td>
                            <td align="center"><input name="listrik_7" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><u><</u> 100 μA</td>
                          </tr>
                          <tr>
                            <td>Encloser Leakage Current Normal Polarity Open Earth</td>
                            <td align="center"><input name="listrik_8" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><u><</u> 500 μA</td>
                          </tr>
                          <tr>
                            <td>Encloser Leakage Current Reverse Polarity Closed Earth</td>
                            <td align="center"><input name="listrik_9" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><u><</u> 100 μA</td>
                          </tr>
                          <tr>
                            <td>Encloser Leakage Current Reverse Polarity Open Earth</td>
                            <td align="center"><input name="listrik_10" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><u><</u> 500 μA</td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                      <!-- PENGUKURAN KINERJA -->
                        <h4><b>E. PENGUKURAN KINERJA (KUANTITATIVE TASKS)</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
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
                          </thead>
                          <tbody>
                          <tr>
                            <td rowspan="5" align="center"><b>Heart Rate (bpm)</b></td>
                            <td align="center"><b>30</b></td>
                            <td align="center"><input name="hasil_pengukuran_30_1" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_30_2" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_30_3" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_30_4" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_30_5" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_30_6" type="text" class="form-control"></td>
                            <td align="center"> ±5%</td>
                          </tr>
                          <tr>
                            <td align="center"><b>60</b></td>
                            <td align="center"><input name="hasil_pengukuran_60_1" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_60_2" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_60_3" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_60_4" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_60_5" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_60_6" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>120</b></td>
                            <td align="center"><input name="hasil_pengukuran_120_1" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_120_2" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_120_3" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_120_4" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_120_5" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_120_6" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>180</b></td>
                            <td align="center"><input name="hasil_pengukuran_180_1" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_180_2" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_180_3" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_180_4" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_180_5" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_180_6" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>240</b></td>
                            <td align="center"><input name="hasil_pengukuran_240_1" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_240_2" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_240_3" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_240_4" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_240_5" type="text" class="form-control"></td>
                            <td align="center"><input name="hasil_pengukuran_240_6" type="text" class="form-control"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- PENGUKKURAN KINERJA N -->

                      <!-- KESIMPULAN -->
                        <h4><b>G. KESIMPULAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
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
                <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" id="scollDatatable"  style="width:100%">
                   <thead class="table-light">
                     <tr>
                       <th scope="col">ID_Alat</th>
                       <th scope="col">Ruangan</th>
                       <th scope="col">Operator</th>
                       <th scope="col">Nama_Alat</th>
                       <th scope="col">Merek/Tipe</th>
                       <th scope="col">No_Seri</th>
                       <th scope="col">Tanggal</th>
                       <th scope="col">Tombol_Aksi_Table</th>
                     </tr>
                   </thead>
                   <tbody>
                     @forelse ($items4 as $index => $item)
                     <tr>
                       <td align="center"> {{ $item->id_alat }}</td>
                       <td align="center"> {{ $item->ruangan }}</td>
                       <td align="center"> {{ $item->operator_alat }}</td>
                       <td align="center"> {{ $item->alat }}</td>
                       <td align="center"> {{ $item->merek_tipe }}</td>
                       <td align="center"> {{ $item->no_seri }}</td>
                       <td align="center"> {{ $item->tanggal }}</td>
                       <td align="center">
                         <a href="/dashboard/ppm/lk_alat/edit_dopler/{{ $item->id }}/edit" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="Left" title="Edit"> <i class="fa fa-edit"></i></a>
                         <a href="/dashboard/ppm/lk_alat/show_dopler/{{ $item->id }}/show" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="Left" title="Detail"> <i class="fa fa-eye"></i></a>
                         <form action="{{ url('/dashboard/ppm/tambahDopler', $item->id) }}" method="POST" class="d-inline">
                           @csrf
                           @method('delete')
                           <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="Bottom" title="Hapus">
                             <i class="fa fa-trash"></i>
                           </button>
                       </td>
                       </form>
                       </td>
                     </tr>
                     @empty
                     @endforelse
                   </tbody>
                 </table>
                <!--TABEL-->
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
                    <form action="{{ url('/dashboard/ppm/tambahBedside') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                      <!-- PENDATAAN ALAT -->
                        <div class="form-group row">
                          <label for="data_lkAlat5" class="col-xs-3 col-form-label">Data Alat </label>
                          <div class="col-xs-9">
                            <select name="data_lkAlat5" class="form-control" id="data_lkAlat2">
                              <option>-- Pilih Data Alat --</option>
                              @foreach($Inv5 as $Inv5)
                              <option value="<?= $Inv5['id_aset']; ?>">
                                <?= $Inv5['id_aset']; ?>_<?= $Inv5['nama_alat']; ?>_<?= $Inv5['serial_number']; ?>_<?= $Inv5['lokasi_alat']; ?></option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <h4><b>A. PENDATAAN ALAT</b></h4>
                        <div class="form-group row" style="border-style: groove; padding: 15px;">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="id_alat" class="form-label">ID Alat <i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="id_alat" id="id_alat5" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="merek_tipe" class="form-label">Merek / Tipe<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="merek_tipe" id="merek_tipe5" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="ruangan" class="form-label">Nama Ruangan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="ruangan" id="ruangan5" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="no_seri" class="form-label">No Seri<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="no_seri" id="no_seri5" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="operator_alat" class="form-label">User / Operator Alat<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="operator_alat" id="" type="text" class="form-control">
                            </div>
                            <div class="col-sm-3">
                              <label for="tanggal" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="tanggal" id="" type="text" class="form-control"
                                value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(now()) ?>" readonly>
                            </div>
                          </div>
                          <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-3">
                              <label for="alat" class="form-label">Nama Alat<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="alat" id="alat5" type="text" class="form-control" readonly placeholder="Terisi Otomatis">
                            </div>
                            <div class="col-sm-3">
                              <label for="pelaksana" class="form-label">Petugas Pelaksana<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="pelaksana" id="" type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
                            </div>
                          </div>
                        </div>
                      <!-- PENDATAAN ALAT N-->

                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <h4><b>B. ALAT UKUR DAN BAHAN YANG DIGUNAKAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Nama Alat</b></td>
                            <td align="center"><b>Merek</b></td>
                            <td align="center"><b>Tipe / Model</b></td>
                            <td align="center"><b>NO Seri</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Electrical safety analyzer</td>
                            <td align="center"><input name="ukur_merek1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe1" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri1" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Vital signs simulator</td>
                            <td align="center"><input name="ukur_merek2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe2" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri2" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="ukur_merek3" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_tipe3" class="form-control form-control-sm" type="text"></td>
                            <td align="center"><input name="ukur_noseri3" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->

                      <!-- KONDISI RUANGAN -->
                        <h4><b>C. KONDISI RUANGAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Suhu</td>
                            <td align="center"><input name="suhu" class="form-control form-control-sm"></td>
                          </tr>
                          <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="kelembapan" class="form-control form-control-sm"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- KONDISI RUANGAN N-->

                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT -->
                        <h4><b>D. PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Deskripsi</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Keterangan</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>1. Chassing / Housing</td>
                            <td align="center"><input name="fisik_fungsi_1" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_1" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>2. Labeling</td>
                            <td align="center"><input name="fisik_fungsi_2" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_2" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>3. Mount</td>
                            <td align="center"><input name="fisik_fungsi_3" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_3" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>4. Alarm / Interlock</td>
                            <td align="center"><input name="fisik_fungsi_4" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_4" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>5. Indikator / Displays</td>
                            <td align="center"><input name="fisik_fungsi_5" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_5" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>6. Line Cord</td>
                            <td align="center"><input name="fisik_fungsi_6" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_6" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>7. Recorder</td>
                            <td align="center"><input name="fisik_fungsi_7" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_7" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>8. Circuit Breaker / Fuse</td>
                            <td align="center"><input name="fisik_fungsi_8" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_8" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>9. Control / Switches</td>
                            <td align="center"><input name="fisik_fungsi_9" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_9" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>10. Back up battry powered</td>
                            <td align="center"><input name="fisik_fungsi_10" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_10" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          <tr>
                            <td>11. Charging systems</td>
                            <td align="center"><input name="fisik_fungsi_11" class="form-check-input" type="checkbox" value="Baik" style="width: 80%; height: 20px;"></td>
                            <td align="center"><input name="keterangan_11" class="form-control form-control-sm" type="text"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT N-->

                      <!-- PENGUKURAN KESELAMATAN LISTRIK -->
                        <h4><b>E. PENGUKURAN KESELAMATAN LISTRIK</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Ambang Batas</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
                        </table>
                      <!-- PENGUKURAN KESELAMATAN LISTRIK N-->

                      <!-- PENGUKURAN KINERJA -->
                        <h4><b>E. PENGUKURAN KINERJA (KUANTITATIVE TASKS)</b></h4>
                        <h5><b>NIBP / TEKANAN DARAH</b></h5>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Seting standar</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td rowspan="4" align="center"><b>Tekanan Darah (mmhg)</b></td>
                            <td align="center"><b>60 / 30 (40)</b></td>
                            <td align="center"><input name="nilai_inbp_40" type="text" class="form-control"></td>
                            <td rowspan="4" align="center"><b> ± 10 mmHg</b></td>
                          </tr>
                          <tr>
                            <td align="center"><b>120 / 80 (93)</b></td>
                            <td align="center"><input name="nilai_inbp_93" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>150 / 100 (117)</b></td>
                            <td align="center"><input name="nilai_inbp_117" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>200 / 150 (167)</b></td>
                            <td align="center"><input name="nilai_inbp_167" type="text" class="form-control"></td>
                          </tr>
                          </tbody>
                        </table>
                        <!---->
                        <h5><b>HEART RATE</b></h5>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Seting standar</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td rowspan="6" align="center"><b>ECG (BPM)</b></td>
                            <td align="center"><b>30</b></td>
                            <td align="center"><input name="nilai_heart_30" type="text" class="form-control"></td>
                            <td rowspan="6" align="center"><b> ± 5%</b></td>
                          </tr>
                          <tr>
                            <td align="center"><b>60</b></td>
                            <td align="center"><input name="nilai_heart_60" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>90</b></td>
                            <td align="center"><input name="nilai_heart_90" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>120</b></td>
                            <td align="center"><input name="nilai_heart_120" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>180</b></td>
                            <td align="center"><input name="nilai_heart_180" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>240</b></td>
                            <td align="center"><input name="nilai_heart_240" type="text" class="form-control"></td>
                          </tr>
                          </tbody>
                        </table>
                        <!---->
                        <h5><b>SPO2 (plilih tipe sensor yang digunakan)</b></h5>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Seting standar</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td rowspan="5" align="center"><b>SPO2(%)</b></td>
                            <td align="center"><b>80</b></td>
                            <td align="center"><input name="nilai_spo2_80" type="text" class="form-control"></td>
                            <td rowspan="5" align="center"><b> ± 3%</b></td>
                          </tr>
                          <tr>
                            <td align="center"><b>85</b></td>
                            <td align="center"><input name="nilai_spo2_85" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>90</b></td>
                            <td align="center"><input name="nilai_spo2_90" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>95</b></td>
                            <td align="center"><input name="nilai_spo2_95" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>100</b></td>
                            <td align="center"><input name="nilai_spo2_100" type="text" class="form-control"></td>
                          </tr>
                          </tbody>
                        </table>
                        <!---->
                        <h5><b>RESPIRASI</b></h5>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Seting standar</b></td>
                            <td align="center"><b>Terukur</b></td>
                            <td align="center"><b>Toleransi</b></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td rowspan="5" align="center"><b>Respirasi (Brpm)</b></td>
                            <td align="center"><b>10</b></td>
                            <td align="center"><input name="nilai_respirasi_10" type="text" class="form-control"></td>
                            <td rowspan="5" align="center"><b> ± 5%</b></td>
                          </tr>
                          <tr>
                            <td align="center"><b>30</b></td>
                            <td align="center"><input name="nilai_respirasi_30" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>40</b></td>
                            <td align="center"><input name="nilai_respirasi_40" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>60</b></td>
                            <td align="center"><input name="nilai_respirasi_60" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>80</b></td>
                            <td align="center"><input name="nilai_respirasi_80" type="text" class="form-control"></td>
                          </tr>
                          </tbody>
                        </table>
                      <!-- PENGUKKURAN KINERJA N -->

                      <!-- KESIMPULAN -->
                        <h4><b>G. KESIMPULAN</b></h4>
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <td align="center"><b>Parameter</b></td>
                            <td align="center"><b>Hasil Pengamatan</b></td>
                          </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
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
                <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" id="scollDatatable"  style="width:100%">
                   <thead class="table-light">
                     <tr>
                       <th scope="col">ID_Alat</th>
                       <th scope="col">Ruangan</th>
                       <th scope="col">Operator</th>
                       <th scope="col">Nama_Alat</th>
                       <th scope="col">Merek/Tipe</th>
                       <th scope="col">No_Seri</th>
                       <th scope="col">Tanggal</th>
                       <th scope="col">Tombol_Aksi_Table</th>
                     </tr>
                   </thead>
                   <tbody>
                     @forelse ($items5 as $index => $item)
                     <tr>
                       <td align="center"> {{ $item->id_alat }}</td>
                       <td align="center"> {{ $item->ruangan }}</td>
                       <td align="center"> {{ $item->operator_alat }}</td>
                       <td align="center"> {{ $item->alat }}</td>
                       <td align="center"> {{ $item->merek_tipe }}</td>
                       <td align="center"> {{ $item->no_seri }}</td>
                       <td align="center"> {{ $item->tanggal }}</td>
                       <td align="center">
                         <a href="/dashboard/ppm/lk_alat/edit_bedside/{{ $item->id }}/edit" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="Left" title="Edit"> <i class="fa fa-edit"></i></a>
                         <a href="/dashboard/ppm/lk_alat/show_bedside/{{ $item->id }}/show" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="Left" title="Detail"> <i class="fa fa-eye"></i></a>
                         <form action="{{ url('/dashboard/ppm/tambahBedside', $item->id) }}" method="POST" class="d-inline">
                           @csrf
                           @method('delete')
                           <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="Bottom" title="Hapus">
                             <i class="fa fa-trash"></i>
                           </button>
                       </td>
                       </form>
                       </td>
                     </tr>
                     @empty
                     @endforelse
                   </tbody>
                 </table>
                <!--TABEL-->
              </div>
            </div>
          </div>
        </div>
        <!------>
      </div>
    <!--Bedside Monitor end-->

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@push('addon-script')
<script>
  // ** function scanner qr ** //
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
  // ** function scanner qr N ** //

  // ** function tab change ** //
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += "active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  // ** function tab change N ** //

  // ** function autofill Anesthesi ** //
    $('select[name="data_lkAlat"]').on('change', function() {
      var lkAlatInv = $(this).val();
      console.log(lkAlatInv);
      if (lkAlatInv) {
        $.ajax({
          url: '/dashboard/ppm/getLkAlat/' + lkAlatInv,
          type: "GET",
          dataType: "json",
          success: function(data) {
            console.log(data);
            $.each(data, function(key, value) {
              $('input[id="id_alat"]').val(value.id_aset);
              $('input[id="ruangan"]').val(value.lokasi_alat);
              $('input[id="alat"]').val(value.nama_alat);
              $('input[id="merek_tipe"]').val(value.merek);
              $('input[id="no_seri"]').val(value.serial_number);
            });
          }
        });
      } else {
        $('input[id="id_alat"]').empty();
        $('input[id="ruangan"]').empty();
        $('input[id="alat"]').empty();
        $('input[id="merek_tipe"]').empty();
        $('input[id="no_seri"]').empty();
      }
    });
  // ** function autofill Anesthesi N ** //

  // ** function autofill Dental Unit ** //
    $('select[name="data_lkAlat2"]').on('change', function() {
      var lkAlatInv = $(this).val();
      console.log(lkAlatInv);
      if (lkAlatInv) {
        $.ajax({
          url: '/dashboard/ppm/getLkAlat/' + lkAlatInv,
          type: "GET",
          dataType: "json",
          success: function(data) {
            console.log(data);
            $.each(data, function(key, value) {
              $('input[id="id_alat2"]').val(value.id_aset);
              $('input[id="ruangan2"]').val(value.lokasi_alat);
              $('input[id="alat2"]').val(value.nama_alat);
              $('input[id="merek_tipe2"]').val(value.merek);
              $('input[id="no_seri2"]').val(value.serial_number);
            });
          }
        });
      } else {
        $('input[id="id_alat2"]').empty();
        $('input[id="ruangan2"]').empty();
        $('input[id="alat2"]').empty();
        $('input[id="merek_tipe2"]').empty();
        $('input[id="no_seri2"]').empty();
      }
    });
  // ** function autofill Dental Unit N ** //

  // ** function autofill Dhiatermy ** //
    $('select[name="data_lkAlat3"]').on('change', function() {
      var lkAlatInv = $(this).val();
      console.log(lkAlatInv);
      if (lkAlatInv) {
        $.ajax({
          url: '/dashboard/ppm/getLkAlat/' + lkAlatInv,
          type: "GET",
          dataType: "json",
          success: function(data) {
            console.log(data);
            $.each(data, function(key, value) {
              $('input[id="id_alat3"]').val(value.id_aset);
              $('input[id="ruangan3"]').val(value.lokasi_alat);
              $('input[id="alat3"]').val(value.nama_alat);
              $('input[id="merek_tipe3"]').val(value.merek);
              $('input[id="no_seri3"]').val(value.serial_number);
            });
          }
        });
      } else {
        $('input[id="id_alat3"]').empty();
        $('input[id="ruangan3"]').empty();
        $('input[id="alat3"]').empty();
        $('input[id="merek_tipe3"]').empty();
        $('input[id="no_seri3"]').empty();
      }
    });
  // ** function autofill Dhiatermy N ** //

  // ** function autofill Dopler Simulator ** //
    $('select[name="data_lkAlat4"]').on('change', function() {
      var lkAlatInv = $(this).val();
      console.log(lkAlatInv);
      if (lkAlatInv) {
        $.ajax({
          url: '/dashboard/ppm/getLkAlat/' + lkAlatInv,
          type: "GET",
          dataType: "json",
          success: function(data) {
            console.log(data);
            $.each(data, function(key, value) {
              $('input[id="id_alat4"]').val(value.id_aset);
              $('input[id="ruangan4"]').val(value.lokasi_alat);
              $('input[id="alat4"]').val(value.nama_alat);
              $('input[id="merek_tipe4"]').val(value.merek);
              $('input[id="no_seri4"]').val(value.serial_number);
            });
          }
        });
      } else {
        $('input[id="id_alat4"]').empty();
        $('input[id="ruangan4"]').empty();
        $('input[id="alat4"]').empty();
        $('input[id="merek_tipe4"]').empty();
        $('input[id="no_seri4"]').empty();
      }
    });
  // ** function autofill Dopler Simulator N ** //

  // ** function autofill Bedside Monitor ** //
    $('select[name="data_lkAlat5"]').on('change', function() {
      var lkAlatInv = $(this).val();
      console.log(lkAlatInv);
      if (lkAlatInv) {
        $.ajax({
          url: '/dashboard/ppm/getLkAlat/' + lkAlatInv,
          type: "GET",
          dataType: "json",
          success: function(data) {
            console.log(data);
            $.each(data, function(key, value) {
              $('input[id="id_alat5"]').val(value.id_aset);
              $('input[id="ruangan5"]').val(value.lokasi_alat);
              $('input[id="alat5"]').val(value.nama_alat);
              $('input[id="merek_tipe5"]').val(value.merek);
              $('input[id="no_seri5"]').val(value.serial_number);
            });
          }
        });
      } else {
        $('input[id="id_alat5"]').empty();
        $('input[id="ruangan5"]').empty();
        $('input[id="alat5"]').empty();
        $('input[id="merek_tipe5"]').empty();
        $('input[id="no_seri5"]').empty();
      }
    });
  // ** function autofill Bedside Monitor N ** //
</script>

@endpush
@endsection