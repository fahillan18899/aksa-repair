<div role="tabpanel" class="tab-pane" id="PulseOxymetry">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Pulse Oxymetry</h1>
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
                        <td class="table-info" colspan="1" align="left"><b>Alamat Pemilik</b></td>
                        <td><input name="alamat" type="text" style="border: 0" placeholder="-"></td>
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
                        <td class="table-info" colspan="1" align="left"><b>No Label</b></td>
                        <td><input name="label" type="date" style="border: 0" placeholder="-"></td>
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
                        <td class="table-info" colspan="1" align="left">NIBP Simulator</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left">Thermohygrometer</td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left">SPO2 Simulator</td>
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
                        <td class="table-info" colspan="1" align="left"><b>Rata Rata</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Suhu Ruangan</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Kelembapan Ruangan</b></td>
                        <td><input name="kelembapan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="kelembapan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>E. SYARAT KETIDAKPASTIAN</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Nama Alat</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Ketidakpastian</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Ambang batas</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Analitical Balance</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Thermometer digital</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Hygrometer</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Barometer</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
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
                        <td class="table-info" colspan="1" align="left"><b> Kontrol/indikator</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Badan / Permukaan</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>ECG Cable</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>SPO2 Sensor</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b> Manset</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Assesoris</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>F. Pengukuran Kinerja</h3>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" rowspan="8"><b>SPO2</b></td>
                        <td class="table-info"><b>98</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>93</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>92</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>85</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>90</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>70</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>88</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>90</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>

                    </tbody>
                    <tbody>
                      <tr>
                        <td class="table-info" rowspan="8"><b>BPM</b></td>
                        <td class="table-info"><b>30</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>60</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>120</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info"><b>180</b></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" size="8" type="text" style="border: 0" placeholder="-"></td>

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