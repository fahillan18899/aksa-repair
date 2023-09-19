<div role="tabpanel" class="tab-pane" id="SuctionPumpKpa">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Suction Pump Kpa</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-10 col-sm-12">
                <form action="{{ route('lembar_kerja.store') }}" class="form-inner"
                  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')

                  <h3>A. Data Alat Pelanggan</h3>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                        <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                        <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
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

                  <h3>B. PELAKSANAAN KALIBRASI</h3>

                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                        <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                        <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                        <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>

                  </table>

                  <h3>C. Alat Yang digunakan</h3>
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
                        <td class="table-info" colspan="1" align="left">Digital Pressure Meter</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Electro Safety Analyzer</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Termohygrometer</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                    </tbody>
                  </table>

                  <h3>D. Pengukuran Kondisi Ruangan</h3>
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


                  <h3>E. PEMERIKSAAN KONDISI FISIK DAN FUNGSI KOMPONEN ALAT PELANGGAN</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>

                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fisik</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Hasil Pemeriksaan Fungsi </b>
                        </td>
                        <td class="table-info" colspan="1" align="left"><b>Keterangan </b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>12</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Badan dan permukaan alat </b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>12</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kotak kontak alat </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>12</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kabel catu utama </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>12</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Sekering pengaman </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>12</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tombol, saklar dan kontrol </b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>12</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tabung dan selang </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                    </tbody>
                  </table>

                  <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Bagian Alat</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Hasil Ukur</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Tegangan Jala-jala Terukur</b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian
                            Protektif</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang
                            diaplikasikan</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>


                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>5</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                        <td class="table-info text-center" align="left"><b>Setting Alat </b></td>
                        <td class="table-info" colspan="1" align="center"><b>Pembacaan Standar</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Koreksi</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran</b>
                        </td>
                      </tr>
                      <tr>
                      <tr>
                        <td class="table-info" colspan="1" rowspan="5" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" rowspan="5" align="left"><b>Tekanan Naik (-)
                            InHg</b></td>
                        <td><input name="setting_alat_1" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_1" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="setting_alat_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="setting_alat_3" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_3" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="setting_alat_4" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_4" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="setting_alat_5" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_5" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_5" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_5" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" rowspan="5" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" rowspan="5" align="left"><b>Tekanan Turun (-)
                            InHg</b></td>
                        <td><input name="setting_alat_6" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_6" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_6" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_6" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="setting_alat_7" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_7" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_7" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_7" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="setting_alat_8" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_8" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_8" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_8" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="setting_alat_9" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_9" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_9" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_9" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="setting_alat_10" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_10" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_10" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="ketidakpastian_pengukuran_10" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>H. Akurasi Tekanan Hisap Maksimum</h3>

                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                        <td class="table-info text-center" align="left"><b>Setting Alat </b></td>
                        <td class="table-info" colspan="1" align="center"><b>Pembacaan Standar</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Koreksi</b></td>
                      </tr>
                      <tr>
                      <tr>
                        <td class="table-info" colspan="1" rowspan="5" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" rowspan="5" align="left"><b>Tekanan Max (-)</b>
                        </td>
                        <td><input name="setting_alat_1" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="pembacaan_standar_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="koreksi_1" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-"></td>
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
  </div>