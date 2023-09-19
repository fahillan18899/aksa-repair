<div role="tabpanel" class="tab-pane" id="ENT">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi ENT Treatment</h1>
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
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Digital Pressure Meter
                          </b> </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Electro Safety Analyzer
                          </b> </td>
                        <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Termohygrometer
                          </b> </td>
                        <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>LUX Meter
                          </b> </td>
                        <td><input name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_4" type="text" style="border: 0" placeholder="-"></td>
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
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Badan dan permukaan alat </b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Kotak kontak alat </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Kabel catu utama </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Sekering pengaman </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>5</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Tombol, saklar dan kontrol </b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>6</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Tabung dan selang </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_6" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_6" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
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
                  <h4>2. Pengukuran Illumination (Klux) * </h4>


                  <h3>Akurasi Tekanan </h3>
                  <table class="table table-hover table-bordered style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                        <td class="table-info text-center" align="left"><b>Setting Alat (mmHg) </b></td>
                        <td class="table-info" colspan="1" align="center"><b>Pembacaan Standar (mmHg)</b>
                        </td>
                        <td class="table-info" colspan="1" align="center"><b>Koreksi (mmHg)</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran
                            (mmHg)</b></td>
                      </tr>
                      <tr>
                      <tr>
                        <td class="table-info" colspan="1" rowspan="5" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" rowspan="5" align="left"><b>Tekanan Naik </b>
                        </td>
                        <td><input name="pembacaan_alat_naik_0_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_0_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_0_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_0_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="pembacaan_alat_naik_50_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_50_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_50_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_50_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="pembacaan_alat_naik_100_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_100_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_100_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_100_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="pembacaan_alat_naik_150_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_150_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_150_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_150_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="pembacaan_alat_naik_200_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_200_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_200_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_200_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" rowspan="6" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" rowspan="6" align="left"><b>Tekanan Turun </b>
                        </td>
                        <td><input name="pembacaan_alat_turun_0_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_0_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_0_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_0_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>

                        <td><input name="pembacaan_alat_turun_50_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_50_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_50_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_50_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>

                        <td><input name="pembacaan_alat_turun_100_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_100_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_100_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_100_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>

                        <td><input name="pembacaan_alat_turun_150_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_150_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_150_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_150_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>

                        <td><input name="pembacaan_alat_turun_200_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_200_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_200_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_turun_200_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
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