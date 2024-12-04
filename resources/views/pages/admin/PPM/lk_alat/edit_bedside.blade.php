@extends('layouts.admin')

@section('title', 'Edit Data Bedside Monitor')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-add-user"></i></div>
      <div class="header-title">
        <h1>Edit LK</h1>
        <small>Bedside Monitor</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">

    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Bedside Monitor</h1>
          </div>

          <div class="panel-body panel-form">
          <div class="row">
                  <div class="col-md-12 col-md-12">
                    <form action="{{ route('update_bedside.update', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('PUT')

                      <!-- PENDATAAN ALAT -->
                        <div class="form-group row">
                          <label for="data_lkAlat" class="col-xs-3 col-form-label">Data Alat </label>
                          <div class="col-xs-9">
                            <select name="" class="form-control" id="data_lkAlat">
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
                              <input name="operator_alat" id="operator_alat" type="text" class="form-control" value="<?php echo $item['operator_alat'] ?>">
                            </div>
                            <div class="col-sm-3">
                              <label for="tanggal" class="form-label">Tanggal Pelaksanaan<i class="text-danger">*</i></label>
                            </div>
                            <div class="col-sm-3">
                              <input name="tanggal" id="tanggal" type="text" class="form-control"
                              value="<?php echo $item['tanggal'] ?>" readonly>
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
                            <td>Electrical safety analyzer</td>
                            <td align="center"><input name="ukur_merek1" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_merek1'] ?>" ></td>
                            <td align="center"><input name="ukur_tipe1" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_tipe1'] ?>" ></td>
                            <td align="center"><input name="ukur_noseri1" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_noseri1'] ?>" ></td>
                          </tr>
                          <tr>
                            <td>Vital signs simulator</td>
                            <td align="center"><input name="ukur_merek2" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_merek2'] ?>" ></td>
                            <td align="center"><input name="ukur_tipe2" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_tipe2'] ?>" ></td>
                            <td align="center"><input name="ukur_noseri2" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_noseri2'] ?>" ></td>
                          </tr>
                          <tr>
                            <td>Thermohygrometer</td>
                            <td align="center"><input name="ukur_merek3" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_merek3'] ?>" ></td>
                            <td align="center"><input name="ukur_tipe3" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_tipe3'] ?>" ></td>
                            <td align="center"><input name="ukur_noseri3" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_noseri3'] ?>" ></td>
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
                            <td align="center"><input name="suhu" class="form-control form-control-sm" value="<?php echo $item['suhu'] ?>"></td>
                          </tr>
                          <tr>
                            <td>Kelembapan nisbi</td>
                            <td align="center"><input name="kelembapan" class="form-control form-control-sm" value="<?php echo $item['kelembapan'] ?>"></td>
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
                            <td align="center"><input name="fisik_fungsi_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_1" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_1'] ?>"></td>
                          </tr>
                          <tr>
                            <td>2. Labeling</td>
                            <td align="center"><input name="fisik_fungsi_2" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_2" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_2'] ?>"></td>
                          </tr>
                          <tr>
                            <td>3. Mount</td>
                            <td align="center"><input name="fisik_fungsi_3" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_3" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_3'] ?>"></td>
                          </tr>
                          <tr>
                            <td>4. Alarm / Interlock</td>
                            <td align="center"><input name="fisik_fungsi_4" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_4" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_4'] ?>"></td>
                          </tr>
                          <tr>
                            <td>5. Indikator / Displays</td>
                            <td align="center"><input name="fisik_fungsi_5" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_5" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_5'] ?>"></td>
                          </tr>
                          <tr>
                            <td>6. Line Cord</td>
                            <td align="center"><input name="fisik_fungsi_6" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_6" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_6'] ?>"></td>
                          </tr>
                          <tr>
                            <td>7. Recorder</td>
                            <td align="center"><input name="fisik_fungsi_7" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_7" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_7'] ?>"></td>
                          </tr>
                          <tr>
                            <td>8. Circuit Breaker / Fuse</td>
                            <td align="center"><input name="fisik_fungsi_8" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_8" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_8'] ?>"></td>
                          </tr>
                          <tr>
                            <td>9. Control / Switches</td>
                            <td align="center"><input name="fisik_fungsi_9" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_9" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_9'] ?>"></td>
                          </tr>
                          <tr>
                            <td>10. Back up battry powered</td>
                            <td align="center"><input name="fisik_fungsi_10" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_10" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_10'] ?>"></td>
                          </tr>
                          <tr>
                            <td>11. Charging systems</td>
                            <td align="center"><input name="fisik_fungsi_11" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_11" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_11'] ?>"></td>
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
                            <td align="center"><input name="listrik_1" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_1'] ?>"></td>
                            <td align="center">220 ± 10% V</td>
                          </tr>
                          <tr>
                            <td>Protectiv Earth Resistance</td>
                            <td align="center"><input name="listrik_2" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_2'] ?>"></td>
                            <td align="center"><u><</u> 0,2 Ω</td>
                          </tr>
                          <tr>
                            <td>Insulation Resistance / Mains-PE</td>
                            <td align="center"><input name="listrik_3" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_3'] ?>"></td>
                            <td align="center"><u>></u> 2 MΩ</td>
                          </tr>
                          <tr>
                            <td>Earth Leakage Current Normal Polarity Closed Neutral</td>
                            <td align="center"><input name="listrik_4" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_4'] ?>"></td>
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
                            <td align="center"><input name="nilai_inbp_40" type="text" class="form-control" value="<?php echo $item['nilai_inbp_40'] ?>"></td>
                            <td rowspan="4" align="center"><b> ± 10 mmHg</b></td>
                          </tr>
                          <tr>
                            <td align="center"><b>120 / 80 (93)</b></td>
                            <td align="center"><input name="nilai_inbp_93" type="text" class="form-control" value="<?php echo $item['nilai_inbp_93'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>150 / 100 (117)</b></td>
                            <td align="center"><input name="nilai_inbp_117" type="text" class="form-control" value="<?php echo $item['nilai_inbp_117'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>200 / 150 (167)</b></td>
                            <td align="center"><input name="nilai_inbp_167" type="text" class="form-control" value="<?php echo $item['nilai_inbp_167'] ?>"></td>
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
                            <td align="center"><input name="nilai_heart_30" type="text" class="form-control" value="<?php echo $item['nilai_heart_30'] ?>"></td>
                            <td rowspan="6" align="center"><b> ± 5%</b></td>
                          </tr>
                          <tr>
                            <td align="center"><b>60</b></td>
                            <td align="center"><input name="nilai_heart_60" type="text" class="form-control" value="<?php echo $item['nilai_heart_60'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>90</b></td>
                            <td align="center"><input name="nilai_heart_90" type="text" class="form-control" value="<?php echo $item['nilai_heart_90'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>120</b></td>
                            <td align="center"><input name="nilai_heart_120" type="text" class="form-control" value="<?php echo $item['nilai_heart_120'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>180</b></td>
                            <td align="center"><input name="nilai_heart_180" type="text" class="form-control" value="<?php echo $item['nilai_heart_180'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>240</b></td>
                            <td align="center"><input name="nilai_heart_240" type="text" class="form-control" value="<?php echo $item['nilai_heart_240'] ?>"></td>
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
                            <td align="center"><input name="nilai_spo2_80" type="text" class="form-control" value="<?php echo $item['nilai_spo2_80'] ?>"></td>
                            <td rowspan="5" align="center"><b> ± 3%</b></td>
                          </tr>
                          <tr>
                            <td align="center"><b>85</b></td>
                            <td align="center"><input name="nilai_spo2_85" type="text" class="form-control" value="<?php echo $item['nilai_spo2_85'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>90</b></td>
                            <td align="center"><input name="nilai_spo2_90" type="text" class="form-control" value="<?php echo $item['nilai_spo2_90'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>95</b></td>
                            <td align="center"><input name="nilai_spo2_95" type="text" class="form-control" value="<?php echo $item['nilai_spo2_95'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>100</b></td>
                            <td align="center"><input name="nilai_spo2_100" type="text" class="form-control" value="<?php echo $item['nilai_spo2_100'] ?>"></td>
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
                            <td align="center"><input name="nilai_respirasi_10" type="text" class="form-control" value="<?php echo $item['nilai_respirasi_10'] ?>"></td>
                            <td rowspan="5" align="center"><b> ± 5%</b></td>
                          </tr>
                          <tr>
                            <td align="center"><b>30</b></td>
                            <td align="center"><input name="nilai_respirasi_30" type="text" class="form-control" value="<?php echo $item['nilai_respirasi_30'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>40</b></td>
                            <td align="center"><input name="nilai_respirasi_40" type="text" class="form-control" value="<?php echo $item['nilai_respirasi_40'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>60</b></td>
                            <td align="center"><input name="nilai_respirasi_60" type="text" class="form-control" value="<?php echo $item['nilai_respirasi_60'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>80</b></td>
                            <td align="center"><input name="nilai_respirasi_80" type="text" class="form-control" value="<?php echo $item['nilai_respirasi_80'] ?>"></td>
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
                            <td align="center"><input name="kesimpulan_fisik_fungsi" type="text" class="form-control" value="<?php echo $item['kesimpulan_fisik_fungsi'] ?>"></td>
                          </tr>
                          <tr>
                            <td>Keselamatan Listrik</td>
                            <td align="center"><input name="kesimpulan_listrik" type="text" class="form-control" value="<?php echo $item['kesimpulan_listrik'] ?>"></td>
                          </tr>
                          <tr>
                            <td>Kinerja Alat Kesehatan</td>
                            <td align="center"><input name="kesimpulan_kinerja" type="text" class="form-control" value="<?php echo $item['kesimpulan_kinerja'] ?>"></td>
                          </tr>
                          </tbody>
                        </table>
                        <div class="form-group row">
                          <label for="catatan" class="col-xs-3 col-form-label">Catatan<i class="text-danger">*</i></label>
                          <div class="col-xs-9">
                            <input name="catatan" class="form-control" placeholder="Catatan" id="catatan" maxlength="255" rows="5" value="<?php echo $item['catatan'] ?>"></input>
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

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection
@push('addon-script')
<script>
  // ** function autofill Anesthesi ** //
  $('select[id="data_lkAlat"]').on('change', function() {
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
</script>
@endpush