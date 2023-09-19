<div role="tabpanel" class="tab-pane" id="TermometerDigital">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Termometer Digital</h1>
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
                        <td class="table-info" colspan="1" align="left"> <b> Thermohygrometer</b> </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Water Bath</b> </td>
                        <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
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
                        <td class="table-info" colspan="1" align="left"><b>Panel Kontrol</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Temperature Display</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                    </tbody>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>1</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Temperature Probe</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-">
                      </td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                          placeholder="-"></td>
                      <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    </tbody>
                  </table>
                  <h3>G. HASIL PENGUKURAN KINERJA ALAT </h3>
                  <table class="table table-hover table-bordered style=" width:"100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Setting Pada Standar</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Terukur Rata Rata Pada
                            Standar</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Koreksi</b></td>
                        <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran </b>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" rowspan="5" align="center"><b>Suhu Udara ( ºC)*
                          </b></td>
                        <td><input name="BPM_1" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BPM_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BPM_3" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BPM_5" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td><input name="BPM_6" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BPM_7" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BPM_8" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BPM_9" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td><input name="BPM_10" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BPM_11" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BPM_12" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BPM_13" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      x
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