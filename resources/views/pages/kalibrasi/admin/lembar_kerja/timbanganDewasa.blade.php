<div role="tabpanel" class="tab-pane" id="timbanganDewasa">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Timbangan Dewasa</h1>
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
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 10 Kg</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20 Kg</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20 Kg</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20 Kg</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20 Kg</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20 Kg</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Anak Timbangan 20 Kg</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left">Termohygrometer </td>
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
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Badan dan Permukaan Alat</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tampilan dan indikator</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>


                    </tbody>
                  </table>


                  <h3>F. HASIL PENGUKURAN KINERJA ALAT </h3>
                  <h3>1. Daya Ulang Pembacaan</h3>
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td><b>No</b></td>
                        <td><b>z1</b></td>
                        <td><b>m1</b></td>
                        <td><b>r=m1-z1</b></td>
                      </tr>
                      <tr>
                        <td><b>1</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>2</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>3</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>4</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>5</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>6</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>7</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>8</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>9</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>10</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  <h3>1. Penyimpangan Ulang Pembacaan</h3>
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td colspan="1" rowspan="2"><b>Beban</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>

                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td colspan="1" rowspan="2"><b>No</b></td>
                        <td colspan="1" rowspan="2"><b>Massa (Kg)</b></td>
                        <td colspan="4"><b>Penunjukan Standar (Kg) </b></td>
                      </tr>
                      <tr>
                        <td><b>No</b></td>
                        <td><b>z1</b></td>
                        <td><b>m1</b></td>
                        <td><b>r=m1-z1</b></td>
                      </tr>
                      <tr>
                        <td><b>1</b></td>
                        <td><b>10</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>2</b></td>
                        <td><b>20</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>3</b></td>
                        <td><b>30</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>4</b></td>
                        <td><b>40</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>5</b></td>
                        <td><b>50</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>6</b></td>
                        <td><b>60</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>7</b></td>
                        <td><b>70</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>8</b></td>
                        <td><b>80</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>9</b></td>
                        <td><b>90</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                      </tr>
                      <tr>
                        <td><b>10</b></td>
                        <td><b>100</b></td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
                        <td><b><input name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                        </td>
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