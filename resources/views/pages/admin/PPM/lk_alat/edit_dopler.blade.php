@extends('layouts.admin')

@section('title', 'Edit Data AnDoplerestesi')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-add-user"></i></div>
      <div class="header-title">
        <h1>Edit LK</h1>
        <small>Dopler</small>
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
            <h1>Lembar Kerja Dopler</h1>
          </div>

          <div class="panel-body panel-form">
          <div class="row">
                  <div class="col-md-12 col-md-12">
                    <form action="{{ route('update_dopler.update', $item->id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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
                            <td>Fetal simulator</td>
                            <td align="center"><input name="ukur_merek1" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_merek1'] ?>" ></td>
                            <td align="center"><input name="ukur_tipe1" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_tipe1'] ?>" ></td>
                            <td align="center"><input name="ukur_noseri1" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_noseri1'] ?>" ></td>
                          </tr>
                          <tr>
                            <td>Digital Caliper</td>
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
                          <tr>
                            <td>Electrick Safety Analyzer</td>
                            <td align="center"><input name="ukur_merek4" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_merek4'] ?>" ></td>
                            <td align="center"><input name="ukur_tipe4" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_tipe4'] ?>" ></td>
                            <td align="center"><input name="ukur_noseri4" class="form-control form-control-sm" type="text" value="<?php echo $item['ukur_noseri4'] ?>" ></td>
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
                            <td>1. Cek seluruh bagian alat</td>
                            <td align="center"><input name="fisik_fungsi_1" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_1" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_1'] ?>"></td>
                          </tr>
                          <tr>
                            <td>2. Cek display</td>
                            <td align="center"><input name="fisik_fungsi_2" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_2" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_2'] ?>"></td>
                          </tr>
                          <tr>
                            <td>3. Cek tombol / switch</td>
                            <td align="center"><input name="fisik_fungsi_3" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_3" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_3'] ?>"></td>
                          </tr>
                          <tr>
                            <td>4. Cek fungsi probe</td>
                            <td align="center"><input name="fisik_fungsi_4" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_4" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_4'] ?>"></td>
                          </tr>
                          <tr>
                            <td>5. Cek bateray</td>
                            <td align="center"><input name="fisik_fungsi_5" class="form-check-input" type="checkbox" style="width: 80%; height: 20px;" value="baik"></td>
                            <td align="center"><input name="keterangan_5" class="form-control form-control-sm" type="text" value="<?php echo $item['keterangan_5'] ?>"></td>
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
                            <td>Current Amp</td>
                            <td align="center"><input name="listrik_2" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_2'] ?>"></td>
                            <td align="center">-</td>
                          </tr>
                          <tr>
                            <td>Protectiv Earth Resistance</td>
                            <td align="center"><input name="listrik_3" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_3'] ?>"></td>
                            <td align="center"><u><</u> 0,2 Ω</td>
                          </tr>
                          <tr>
                            <td>Insulation Resistance / Mains-PE</td>
                            <td align="center"><input name="listrik_4" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_4'] ?>"></td>
                            <td align="center"><u>></u> 2 MΩ</td>
                          </tr>
                          <tr>
                            <td>Earth Leakage Current Normal Polarity</td>
                            <td align="center"><input name="listrik_5" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_5'] ?>"></td>
                            <td align="center"><u><</u> 500 μA</td>
                          </tr>
                          <tr>
                            <td>Earth Leakage Current Reverse Polarity</td>
                            <td align="center"><input name="listrik_6" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_6'] ?>"></td>
                            <td align="center"><u><</u> 500 μA</td>
                          </tr>
                          <tr>
                            <td>Encloser Leakage Current Normal Polarity Closed Earth</td>
                            <td align="center"><input name="listrik_7" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_7'] ?>"></td>
                            <td align="center"><u><</u> 100 μA</td>
                          </tr>
                          <tr>
                            <td>Encloser Leakage Current Normal Polarity Open Earth</td>
                            <td align="center"><input name="listrik_8" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_8'] ?>"></td>
                            <td align="center"><u><</u> 500 μA</td>
                          </tr>
                          <tr>
                            <td>Encloser Leakage Current Reverse Polarity Closed Earth</td>
                            <td align="center"><input name="listrik_9" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_9'] ?>"></td>
                            <td align="center"><u><</u> 100 μA</td>
                          </tr>
                          <tr>
                            <td>Encloser Leakage Current Reverse Polarity Open Earth</td>
                            <td align="center"><input name="listrik_10" class="form-control form-control-sm" type="text" value="<?php echo $item['listrik_10'] ?>"></td>
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
                            <td align="center"><input name="hasil_pengukuran_30_1" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_30_1'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_30_2" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_30_2'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_30_3" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_30_3'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_30_4" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_30_4'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_30_5" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_30_5'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_30_6" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_30_6'] ?>"></td>
                            <td align="center"> ±5%</td>
                          </tr>
                          <tr>
                            <td align="center"><b>60</b></td>
                            <td align="center"><input name="hasil_pengukuran_60_1" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_60_1'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_60_2" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_60_2'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_60_3" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_60_3'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_60_4" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_60_4'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_60_5" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_60_5'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_60_6" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_60_6'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>120</b></td>
                            <td align="center"><input name="hasil_pengukuran_120_1" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_120_1'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_120_2" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_120_2'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_120_3" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_120_3'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_120_4" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_120_4'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_120_5" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_120_5'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_120_6" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_120_6'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>180</b></td>
                            <td align="center"><input name="hasil_pengukuran_180_1" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_180_1'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_180_2" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_180_2'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_180_3" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_180_3'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_180_4" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_180_4'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_180_5" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_180_5'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_180_6" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_180_6'] ?>"></td>
                          </tr>
                          <tr>
                            <td align="center"><b>240</b></td>
                            <td align="center"><input name="hasil_pengukuran_240_1" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_240_1'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_240_2" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_240_2'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_240_3" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_240_3'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_240_4" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_240_4'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_240_5" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_240_5'] ?>"></td>
                            <td align="center"><input name="hasil_pengukuran_240_6" type="text" class="form-control" value="<?php echo $item['hasil_pengukuran_240_6'] ?>"></td>
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