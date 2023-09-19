<div role="tabpanel" class="tab-pane" id="uv">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi UV Sterialsator</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-10 col-sm-12">
                <form action="{{ route('lembar_kerja.store') }}" class="form-inner"
                  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')
                  <h3>PELAKSANAAN KALIBRASI</h3>

                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nama Instansi</b></td>
                        <td><input name="nama_instansi" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
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

                  <h3>Data Alat Pelanggan</h3>
                  <table class="table table-hover table-bordered style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b> Nama Alat</b></td>
                        <td><input name="nama_alat" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                        <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
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

                  <h3>Alat Yang digunakan</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                        <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                      </tr>
                      <tr>

                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Digital Manometer </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left">Rigid Silinder </td>
                        <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left">Stopwatch </td>
                        <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left">Thermohygrometer </td>
                        <td><input name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>



                  <h3>Pengukuran Kondisi Ruangan</h3>
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
                        <td class="table-info" colspan="1" align="left"><b>Badan dan permukaan alat </b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kontak kontak alat/b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kabel catu utama </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tombol, Saklar dan kontrol</b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>


                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>5</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Pelabelan dan aksesoris </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>6</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Timer Waktu tunda </b></td>
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

                  <h3>G. PENGUKURAN KINERJA </h3>
                  <h4>1. 1. Irradiance pada jarak 200 cm* </h4>

                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td><b>Parameter</b></td>
                        <td><b>Pembacaan rata-rata</b></td>
                        <td><b>Presisi(%)</b></td>
                        <td><b>Toleransi</b></td>
                      </tr>
                      <tr>
                        <td>Intensitas Cahaya ( μW/cm²/nm)</td>
                        <td>45,00</td>
                        <td>0,00</td>
                        <td>> 40 μW/cm²/nm</td>
                      </tr>
                    </tbody>
                  </table>
                  <h4>2. Waktu tunda ( delay time)* </h4>

                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td><b>Parameter</b></td>
                        <td><b>Display uut</b></td>
                        <td><b>Terukur Rata-rata</b></td>
                        <td><b>Koreksi</b></td>
                        <td><b>KetidakpastianPengukuran</b></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
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