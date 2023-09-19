<div role="tabpanel" class="tab-pane" id="dopler">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Fetal Dopler</h1>
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
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No Label</b></td>
                        <td><input name="no_label" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>

                  </table>

                  <h3>C. Alat Yang digunakan</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Electrical Safety Analyzer</b>
                        </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Thermohygrometer</b> </td>
                        <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Fetal Simulator</b> </td>
                        <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
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
                        <td class="table-info" colspan="1" align="left"><b>Badan/Permukaan</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kotak Kontak Alat</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kabel Catu Utama</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Sekering Pengaman</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>5</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kabel Tranduser</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>6</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tombol Saklar dan Kontrol</b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_6" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_6" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>7</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tampilan dan indikator</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_7" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_7" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_7" type="text" style="border: 0" placeholder="-"></td>
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

                  <h5>a. Heart Rate (bpm)</h5>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="2" align="center"><b>No</b></td>
                        <td class="table-info" colspan="" rowspan="2" align="center"><b>Parameter</b></td>
                        <td class="table-info" colspan="" rowspan="2" align="center"><b>Setting</b></td>
                        <td class="table-info" colspan="5" rowspan="" align="center"><b>Hasil Pengukuran
                            (bpm)</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>3</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>4</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>5</b></td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="6" align="left"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="6" align="left"><b>Heart Rate (bpm)</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>60</b></td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>90</b></td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>120</b></td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>150</b></td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>180</b></td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>210</b></td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>