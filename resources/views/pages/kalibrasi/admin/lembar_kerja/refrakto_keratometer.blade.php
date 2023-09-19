<div role="tabpanel" class="tab-pane" id="refrakto_keratometer">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Refrakto Keratometer</h1>
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
                        <td class="table-info" colspan="1" align="left"><b>Badan dan Permukaan</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kotak kontak alat </b></td>
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
                        <td class="table-info" colspan="1" align="left"><b>Sekering pengaman</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>5</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tombol, saklar dan kontrol</b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
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
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>Dioptri_(D)</b></td>
                        <td class="table-info" colspan="3" rowspan="" align="left">
                          <b>Rata-rata_Pengukuran</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>Mean</b></td>
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>StDev</b></td>
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>Koreksi</b></td>
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>ketidakpastian</b>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>I</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>II</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>III</b></td>
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
                      </tr>

                    </tbody>
                  </table>

                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>Dioptri %</b></td>
                        <td class="table-info" colspan="3" rowspan="" align="left">
                          <b>Rata-rata_Pengukuran</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>Mean</b></td>
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>StDev</b></td>
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>Koreksi</b></td>
                        <td class="table-info" colspan="" rowspan="2" align="left"><b>ketidakpastian</b>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>I</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>II</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>III</b></td>
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
                      </tr>

                    </tbody>
                  </table>

                  Spesifikasi
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>No</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Spesifikasi</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Standar</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Alat</b></td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Sertifikat</b></td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="left"><b>Resolusi</b></td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="BIL_2" maxlength="4" size="4" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>

                    </tbody>
                  </table>
              </div>
            </div>

          </div>
        </div>
      </div>




      <div class="row">
        <div class="col">
          <div class="panel panel-default thumbnail">
            <div class="panel-body panel-form">
              <table class="table table-hover table-bordered " id="scollDatatable" style="width:100%">
                <thead class="table-light">
                  <tr>
                    <td class="table-primary" rowspan="3"><b>No</b></td>
                    <td class="table-primary" rowspan="3"><b>Tanggal_Pemeliharaan</b></td>
                    <td class="table-primary" rowspan="3"><b>Kegiatan</b></td>
                    <td class="table-primary" rowspan="3"><b>Engineer</b></td>
                    <td class="table-info" colspan="6" align="center"><b>Data_Alat</b></td>
                    <td class="table-success" colspan="7" align="center"><b>Persiapan</b></td>
                    <td class="table-active" colspan="18" align="center"><b>pemantauan_fisik_&_fungsi</b>
                    </td>
                    <td class="table-danger" colspan="5" align="center"><b>pemeliharaan_preventife</b></td>
                    <td class="table-info" rowspan="3" align="center"><b>tindakan</b></td>
                    <td class="table-warning" colspan="4" align="center"><b>Suku_Cadang</b></td>
                    <td class="table-primary" rowspan="3"><b>Evaluasi_Dan_Rekomendasi</b></td>
                    <td class="table-primary" rowspan="3"><b>Status</b></td>
                    <td class="table-primary" rowspan="3"><b>Status2</b></td>
                    <td class="table-primary" rowspan="3"><b>Mulai_Bekerja</b></td>
                    <td class="table-primary" rowspan="3"><b>Selesai_Kerja</b></td>
                    <td class="table-primary" rowspan="3"><b>Durasi</b></td>
                    <td class="table-primary" rowspan="3"><b>User</b></td>
                    <td class="table-primary" rowspan="3"><b>Engineer</b></td>

                  </tr>

                  <tr>
                    <td class="table-info" rowspan="2"><b>Id_Aset_Registrasi</b></td>
                    <td class="table-info" rowspan="2"><b>Nama_Alat</b></td>
                    <td class="table-info" rowspan="2"><b>Serial_Number</b></td>
                    <td class="table-info" rowspan="2"><b>Merek</b></td>
                    <td class="table-info" rowspan="2"><b>Tipe</b></td>
                    <td class="table-info" rowspan="2"><b>Ruangan</b></td>
                    <td class="table-success" rowspan="2"><b>Hand_Hygiene</b></td>
                    <td class="table-success" rowspan="2"><b>Menyiapkan_Alat_&_Bahan_Kerja</b></td>
                    <td class="table-success" rowspan="2"><b>Alat_Pelindung_Diri</b></td>
                    <td class="table-success" rowspan="2"><b>Mengoprasikan_Alat_Kalibrasi</b></td>
                    <td class="table-success" rowspan="2"><b>KTD</b></td>
                    <td class="table-success" rowspan="2"><b>Mengoprasikan_Alat</b></td>
                    <td class="table-success" rowspan="2"><b>Idntifikasi_Bahaya</b></td>
                    <td class="table-dark" colspan="2" align="center"><b>Badan/Selungkup</b></td>
                    <td class="table-dark" colspan="2" align="center"><b>Alarm_&_Sistem_Interlock</b></td>
                    <td class="table-dark" colspan="2" align="center"><b>Kabel_&_Kelenturannya</b></td>
                    <td class="table-dark" colspan="2" align="center"><b>Sistem_Pengunci</b></td>
                    <td class="table-dark" colspan="2" align="center"><b>Tombol_&_Saklar</b></td>
                    <td class="table-dark" colspan="2" align="center"><b>Label/Penandaan</b></td>
                    <td class="table-dark" colspan="2" align="center"><b>Display/Layar</b></td>
                    <td class="table-dark" colspan="2" align="center"><b>Aksesoris</b></td>
                    <td class="table-dark" colspan="2" align="center"><b>Indikator_Bunyi</b></td>
                    <td class="table-danger" rowspan="2"><b>Pembersihan</b></td>
                    <td class="table-danger" rowspan="2"><b>Pengencangan_Bagian_Alat</b></td>
                    <td class="table-danger" rowspan="2"><b>Pelumasan</b></td>
                    <td class="table-danger" rowspan="2"><b>Kalibrasi_Berkala</b></td>
                    <td class="table-danger" rowspan="2"><b>Penggantian_Bahan_Habis_Pakai</b></td>
                    <td class="table-warning" rowspan="2"><b>Nama_Suku_Cadang</b></td>
                    <td class="table-warning" rowspan="2"><b>Volume</b></td>
                    <td class="table-warning" rowspan="2"><b>Harga_Satuan</b></td>
                    <td class="table-warning" rowspan="2"><b>Jumlah_Harga</b></td>
                  </tr>

                  <tr class="text-center">
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>Fungsi</b></td>
                    <td class="light"><b>Fisik</b></td>
                    <td class="light"><b>Fungsi</b></td>
                  </tr>
                </thead>

              </table>
            </div>

          </div>
        </div>
      </div>
      <!--TABEL-->

    </div> <!-- /.content -->
</div> 