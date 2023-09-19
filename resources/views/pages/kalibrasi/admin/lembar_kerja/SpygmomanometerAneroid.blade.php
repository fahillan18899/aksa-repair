<div role="tabpanel" class="tab-pane" id="SpygmomanometerAneroid">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Spygmomanometer Aneroid</h1>
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
                        <td class="table-info" colspan="1" align="left"><b>Alamat pemilik</b></td>
                        <td><input name="alamat_pemilik" type="text" style="border: 0" placeholder="-"></td>
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
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No. Label</b></td>
                        <td><input name="no_label" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>

                  </table>

                  <h3>C. Alat Yang digunakan</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Digital Pressure Meter </b>
                        </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Termohygrometer </b> </td>
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
                        <td><input name="bagian_alat_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Balon Tensi, Tabung, Selang</b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Bantalan/Rem</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Filter</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Gauge/Tabung</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Indikator</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Konektor</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Label</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Manset</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Pengaturan Titik 0</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Pengencang</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Valve penutup</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>


                    </tbody>
                  </table>

                  <h3>F. PENGUKURAN KINERJA </h3>
                  <table class="table table-hover table-bordered style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" rowspan="2" align="center"><b>titik setting</b>
                        </td>
                        <td class="table-info text-center" colspan="1" align="left"><b>Pengukuran</b></td>
                        <td class="table-info" colspan="1" rowspan="2" align="center"><b>Toleransi</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>50</b></td>
                        <td><input name="pengukuran_titik_50_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td rowspan="5" class="text-center">20mmHg/300 Sec</td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>100</b></td>
                        <td><input name="pengukuran_titik_100_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>150</b></td>
                        <td><input name="pengukuran_titik_150_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>200</b></td>
                        <td><input name="pengukuran_titik_200_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>5</b></td>
                        <td class="table-info" colspan="1" align="left"><b>250</b></td>
                        <td><input name="pengukuran_titik_250_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>LAJU BUANG CEPAT </h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" align="center"><b>Setting mmHg</b></td>
                        <td class="table-info text-center" align="left"><b>Pengukuran</b></td>
                        <td class="table-info" align="center"><b>Toleransi</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>200</b></td>
                        <td><input name="pengukuran_setting_mmhg_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td rowspan="1" class="text-center">20mmHg/300 Sec</td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>Akurasi Tekanan </h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" rowspan="3" align="center"><b>Pembacaan Alat (
                            mmHg)</b></td>
                        <td class="table-info text-center" colspan="6" align="left"><b>Pembacaan Standar
                            (mmHg)</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="2" align="left"><b>Penunjukan 1</b></td>
                        <td class="table-info" colspan="2" align="left"><b>Penunjukan 2</b></td>
                        <td class="table-info" colspan="2" align="left"><b>Penunjukan 3</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>naik</b></td>
                        <td class="table-info" colspan="1" align="left"><b>turun</b></td>
                        <td class="table-info" colspan="1" align="left"><b>naik</b></td>
                        <td class="table-info" colspan="1" align="left"><b>turun</b></td>
                        <td class="table-info" colspan="1" align="left"><b>naik</b></td>
                        <td class="table-info" colspan="1" align="left"><b>turun</b></td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">0</td>
                        <td><input name="pembacaan_alat_naik_0_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_0_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_0_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_0_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_0_5" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_0_6" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">50</td>
                        <td><input name="pembacaan_alat_naik_50_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_50_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_50_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_50_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_50_5" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_50_6" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">100</td>
                        <td><input name="pembacaan_alat_naik_100_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_100_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_100_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_100_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_100_5" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_100_6" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">150</td>
                        <td><input name="pembacaan_alat_naik_150_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_150_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_150_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_150_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_150_5" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_150_6" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">200</td>
                        <td><input name="pembacaan_alat_naik_200_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_200_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_200_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_200_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_200_5" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_200_6" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td rowspan="1" class="text-center">250</td>
                        <td><input name="pembacaan_alat_naik_250_1" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_250_2" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_250_3" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_250_4" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_250_5" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
                        <td><input name="pembacaan_alat_naik_250_6" maxlength="4" size="4" type="text"
                            style="border: 0" placeholder="-"></td>
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