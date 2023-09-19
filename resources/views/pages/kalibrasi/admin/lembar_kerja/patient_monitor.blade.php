
<div role="tabpanel" class="tab-pane" id="patient_monitor">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Patient Monitor</h1>
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
                        <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tipe/Model</b></td>
                        <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tertelusur</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"> Safety Analyzer with ECG Simulator
                        </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left">Thermohygrometer, Merk: Sanfix</td>
                        <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left">NIBP Simulator</td>
                        <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left">SPO2 Simulator</td>
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
                        <td class="table-info" colspan="1" align="left"><b> Badan dan Permukaan Alat</b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Kotak Kontak Alat</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Kabel Catu Utama</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Sekering Pengaman</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Kabel Tranduser</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Tombol Saklar dan Kontrol</b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_6" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_6" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Tampilan dan indikator</b></td>
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

                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td><b>Parameter</b></td>
                        <td><b>Setting Standar </b></td>
                        <td><b>Rata-rata Hasil Ukur</b></td>
                        <td><b>Koreksi</b></td>
                        <td><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                      </tr>
                      <tr>
                        <td rowspan="12" colspan=""><b>Saturasi Oksigen ( % ) O2 </b></td>
                        <td><b>98 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_1" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                        <td><b><input name="koreksi_1" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_1" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>93 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_2" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                        <td><b><input name="koreksi_2" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_2" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>92 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_3" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                        <td><b><input name="koreksi_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>85 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_4" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                        <td><b><input name="koreksi_4" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_4" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>30 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_5" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                        <td><b><input name="koreksi_5" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_5" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>90 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_6" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                        <td><b><input name="koreksi_6" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_6" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>70 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_7" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                        <td><b><input name="koreksi_7" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_7" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>88 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_8" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                        <td><b><input name="koreksi_8" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_8" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>90 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_9" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                        <td><b><input name="koreksi_9" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_9" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>

                    </tbody>
                    <tbody>
                      <tr>
                        <td rowspan="6" colspan=""><b>Respirasi (BrPM)</b></td>
                        <td><b>30 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_brmp_1" type="text" style="border: 0"
                              placeholder="-"></b></td>
                        <td><b><input name="koreksi_brmp_1" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_brmp_1" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>60 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_brmp_2" type="text" style="border: 0"
                              placeholder="-"></b></td>
                        <td><b><input name="koreksi_brmp_2" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_brmp_2" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>80 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_brmp_3" type="text" style="border: 0"
                              placeholder="-"></b></td>
                        <td><b><input name="koreksi_brmp_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_brmp_3" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>120 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_brmp_4" type="text" style="border: 0"
                              placeholder="-"></b></td>
                        <td><b><input name="koreksi_brmp_4" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_brmp_4" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>180 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_brmp_5" type="text" style="border: 0"
                              placeholder="-"></b></td>
                        <td><b><input name="koreksi_brmp_5" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_brmp_5" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>240 </b></td>
                        <td><b><input name="rata-rata_hasil_ukur_brmp_6" type="text" style="border: 0"
                              placeholder="-"></b></td>
                        <td><b><input name="koreksi_brmp_6" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="ketidakpastian_brmp_6" type="text" style="border: 0"
                              placeholder="-"></b>
                        </td>
                      </tr>

                      <h4>1. 1. Irradiance pada jarak 200 cm* </h4>

                      <table class="table table-hover table-bordered">
                        <tbody>
                          <tr>
                            <td><b>Parameter</b></td>
                            <td><b>Setting Standar </b></td>
                            <td><b>Rata-rata Hasil Ukur</b></td>
                            <td><b>Koreksi</b></td>
                            <td><b>Pengukuran Ketidakpastian</b></td>
                          </tr>
                          <tr>
                            <td rowspan="12" colspan=""><b>Heart Rate </b></td>
                            <td><b>30 </b></td>
                            <td><b><input name="heart_rate30_1" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate30_2" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate30_3" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>60 </b></td>
                            <td><b><input name="heart_rate60_1" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate60_2" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate60_3" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>120 </b></td>
                            <td><b><input name="heart_rate120_1" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate120_2" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate120_3" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>180 </b></td>
                            <td><b><input name="heart_rate180_1" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate180_2" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate180_3" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>240 </b></td>
                            <td><b><input name="heart_rate240_1" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate240_2" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="heart_rate240_3" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table table-hover table-bordered">
                        <tbody>
                          <tr>
                            <td><b>Parameter</b></td>
                            <td><b>Setting Standar </b></td>
                            <td><b>Rata-rata Hasil Ukur</b></td>
                            <td><b>Koreksi</b></td>
                            <td><b>Pengukuran Ketidakpastian</b></td>
                          </tr>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>120 </b></td>
                            <td><b><input name="systole120_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole120_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole120_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>93 </b></td>
                            <td><b><input name="mean93_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean93_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean93_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>80 </b></td>
                            <td><b><input name="diastole80_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="diastole80_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="diastole80_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>150 </b></td>
                            <td><b><input name="systole150_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole150_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole150_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>116 </b></td>
                            <td><b><input name="mean116_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean116_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean116_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>100 </b></td>
                            <td><b><input name="diastole100_1" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="diastole100_2" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="diastole100_3" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>200 </b></td>
                            <td><b><input name="systole200_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole200_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole200_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>166 </b></td>
                            <td><b><input name="mean160_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean160_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean160_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>150 </b></td>
                            <td><b><input name="diastole150_1" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="diastole150_2" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="diastole150_3" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>255 </b></td>
                            <td><b><input name="systole255_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole255_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole255_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>215 </b></td>
                            <td><b><input name="mean215_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean215_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean215_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>195 </b></td>
                            <td><b><input name="diastole195_1" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="diastole195_2" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                            <td><b><input name="diastole195_3" type="text" style="border: 0"
                                  placeholder="-"></b></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>60 </b></td>
                            <td><b><input name="systole60_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole60_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole60_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>40 </b></td>
                            <td><b><input name="mean40_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean40_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean40_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>30 </b></td>
                            <td><b><input name="diastole30_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="diastole30_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="diastole30_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>80 </b></td>
                            <td><b><input name="systole80_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole80_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole80_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>60 </b></td>
                            <td><b><input name="mean60_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean60_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean60_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>50 </b></td>
                            <td><b><input name="diastole50_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="diastole50_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="diastole50_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>100 </b></td>
                            <td><b><input name="systole100_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole100_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="systole100_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>76 </b></td>
                            <td><b><input name="mean76_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean76_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="mean76_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>65 </b></td>
                            <td><b><input name="diastole65_1" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="diastole65_2" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                            <td><b><input name="diastole65_3" type="text" style="border: 0" placeholder="-"></b>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table table-hover table-bordered">
                        <tbody>
                          <tr>
                            <td><b>Parameter</b></td>
                            <td><b>Setting Standar </b></td>
                            <td><b>Rata-rata Hasil Ukur</b></td>
                            <td><b>Koreksi</b></td>
                            <td><b>Pengukuran Ketidakpastian</b></td>
                          </tr>
                          <tr>
                            <td rowspan="12" colspan=""><b>Heart Rate </b></td>
                            <td><b>30 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>60 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>120 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>180 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>240 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table table-hover table-bordered">
                        <tbody>
                          <tr>
                            <td><b>Parameter</b></td>
                            <td><b>Setting Standar </b></td>
                            <td><b>Rata-rata Hasil Ukur</b></td>
                            <td><b>Koreksi</b></td>
                            <td><b>Pengukuran Ketidakpastian</b></td>
                          </tr>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>120 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>93 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>80 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>150 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>116 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>100 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>200 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>166 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>150 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>255 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>215 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>195 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>60 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>40 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>30 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>80 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>60 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>50 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><b>Systole </b></td>
                            <td><b>100 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>mean </b></td>
                            <td><b>76 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                          </tr>
                          <tr>
                            <td><b>Diastole </b></td>
                            <td><b>65 </b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
                            <td><b><input name="" type="text" style="border: 0" placeholder="-"></b></td>
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