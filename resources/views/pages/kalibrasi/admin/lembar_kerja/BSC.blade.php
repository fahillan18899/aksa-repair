<div role="tabpanel" class="tab-pane" id="BSC">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Bio Safety Cabinet</h1>
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
                        <td class="table-info" colspan="1" align="left"> <b>TSI Airflow Anemometer</b> </td>
                        <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Handled Particle Counter</b>
                        </td>
                        <td><input name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>5</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Smoke Generator</b> </td>
                        <td><input name="merek_5" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_5" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_5" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_5" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>6</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Lux Meter</b> </td>
                        <td><input name="merek_6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>7</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Sound Level</b> </td>
                        <td><input name="merek_7" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_7" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_7" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_7" type="text" style="border: 0" placeholder="-"></td>
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
                        <td class="table-info" colspan="1" align="left"><b>Kontrol/indikator</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Badan/permukaan</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>aksesori</b></td>
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

                  <h5>1. Aliran Udara</h5>

                  <h6>a. Kecepatan Downflow</h6>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Kiri ke Kanan /
                            Depan-Belakang (cm)</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>15</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>30</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>45</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>60</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>75</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>90</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>105</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>15</b></td>
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
                        <td class="table-info" colspan="" rowspan="" align="left"><b>29</b></td>
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
                        <td class="table-info" colspan="" rowspan="" align="left"><b>43</b></td>
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
                    </tbody>
                  </table>



                  <h6>b. Inflow</h6>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Left to Right (cm)</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>14,1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>28,2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>42,3</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>56,4</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>70,5</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>84,6</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>98,7</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>112,8</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>3,8</b></td>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <h5>2. Pengujian Perhitungan Partikel Udara</h5>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <h5>3. Intensitas Cahaya</h5>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Parameter Ukur</b></td>
                        <td class="table-info" colspan="3" rowspan="" align="left"><b>Terbaca Pada
                            Kalibrator</b></td>
                        <td class="table-info" colspan="2" rowspan="" align="left"><b>Ambang batas yang
                            dizinkan</b></td>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Intensitas Cahaya</b>
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
                        <td class="table-info" colspan="" rowspan="" align="left"><b>750</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Lux</b></td>
                      </tr>
                    </tbody>
                  </table>

                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="3" rowspan="" align="center"><b>Hasil Pengukuran
                            Pada Standar</b></td>
                        <td class="table-info" colspan="3" rowspan="" align="center"><b>Perhitungan</b></td>
                        <td class="table-info" colspan="10" rowspan="" align="center"><b>Perhitungan</b>
                        </td>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>I</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>II</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>III</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Nilai Max</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Rata2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>STDEV</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U Repeat</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Sertifikat
                            Standar</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U Standard</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Resolusi Standar</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U Resolusi
                            Standar</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Resolusi alat</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U Resolusi Alat</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>ci</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Uc</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U 95 dengan k=2</b>
                        </td>
                      </tr>
                      <tr>
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
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                    </tbody>
                  </table>







                  <h5>3. Kebisingan</h5>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Parameter Ukur</b></td>
                        <td class="table-info" colspan="3" rowspan="" align="left"><b>Terbaca Pada
                            Kalibrator</b></td>
                        <td class="table-info" colspan="2" rowspan="" align="left"><b>Ambang batas yang
                            dizinkan</b></td>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Intensitas Cahaya</b>
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
                        <td class="table-info" colspan="" rowspan="" align="left"><b>65</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>dBA</b></td>
                      </tr>
                    </tbody>
                  </table>

                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="3" rowspan="" align="center"><b>Hasil Pengukuran
                            Pada Standar</b></td>
                        <td class="table-info" colspan="3" rowspan="" align="center"><b>Perhitungan</b></td>
                        <td class="table-info" colspan="10" rowspan="" align="center"><b>Perhitungan</b>
                        </td>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>I</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>II</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>III</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Nilai Max</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Rata2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>STDEV</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U Repeat</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Sertifikat
                            Standar</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U Standard</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Resolusi Standar</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U Resolusi
                            Standar</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Resolusi alat</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U Resolusi Alat</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>ci</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Uc</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>U 95 dengan k=2</b>
                        </td>
                      </tr>
                      <tr>
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