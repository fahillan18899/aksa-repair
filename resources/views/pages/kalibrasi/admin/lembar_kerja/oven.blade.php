<div role="tabpanel" class="tab-pane" id="oven">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Oven</h1>
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
                        <td class="table-info" colspan="1" align="left"> <b>Safety Analyzer</b> </td>
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
                        <td class="table-info" colspan="1" align="left"> <b>Thermo Couple</b> </td>
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
                        <td class="table-info" colspan="1" align="left"><b>Body</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kontrol/Indikator</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Asesoris</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                    </tbody>
                  </table>

                  <h3>F. Hasil Pengukuran Keselamatan Listrik</h3>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Terukur</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Toleransi </b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Mains Voltage</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Protective Eart Resistance</b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Insulation Resistance</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Earth Leakage Current Normal
                            Polarity</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>5</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Earth Leakage Current Reserse
                            Polarity</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>6</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Enclosure Leakage Current Normal
                            Polarity Leakage Current Normal Polarity</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_6" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_6" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>7</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Enclosure Leakage Current Normal
                            Polarity Leakage Current NormalPolarity no Earth</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_7" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_7" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>8</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Enclosure Leakage Current Normal
                            Polarity Leakage Reserse Polarity</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_8" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_8" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>9</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Enclosure Leakage Current Normal
                            Polarity Leakage Reserse Polarity no Earth</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_9" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_9" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>G. Hasil Pengukuran Akurasi Suhu </h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="2" align="center"><b>Setting pada UUT</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="2" align="center"><b>Posisi Sensor</b>
                        </td>
                        <td class="table-info" colspan="5" rowspan="" align="center"><b>Perhitungan</b></td>
                        <td class="table-info" colspan="2" rowspan="" align="center"><b>Terukur pada
                            standar</b></td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>t Max</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>t Min</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Diff</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Mid</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>K.std</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Max</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Min</b></td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="8" align="center"><b>111,0 °C</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>t1</b></td>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>

                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>t2</b></td>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>t3</b></td>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>t4</b></td>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>t5</b></td>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>t6</b></td>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>t7</b></td>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b></b></td>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="2" rowspan="" align="center"><b>Indikator</b></td>
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
                        <td class="table-info" colspan="2" rowspan="" align="center"><b>Ruangan</b></td>
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