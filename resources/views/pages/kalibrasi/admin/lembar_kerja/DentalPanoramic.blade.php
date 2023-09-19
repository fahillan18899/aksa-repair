<div role="tabpanel" class="tab-pane" id="DentalPanoramic">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi X-Ray Dental Panoramic</h1>
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
                        <td class="table-info" colspan="1" align="left"><b>Alamat</b></td>
                        <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-">
                        </td>
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
                        <td class="table-info" colspan="1" align="left">Multimeter X-Ray Non Invasive </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left">Loaded radiographic </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left">Isolatif </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left">Meteran </td>
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


                  <h3>E. Pengujian Kinerja Alat</h3>
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="3" align="left"><b>Pengaturan</b></td>
                        <td class="table-info" colspan="1" rowspan="2" align="left"><b>kV hasil ukur</b>
                        </td>
                        <td class="table-info" colspan="1" rowspan="2" align="left"><b>Kesalahan relatif
                            (%)</b></td>
                        <td class="table-info" colspan="1" rowspan="2" align="left"><b>Nilai lolos uji
                            (%)</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>kV</b></td>
                        <td class="table-info" colspan="1" align="left"><b>mA</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Waktu (s)</b></td>
                      </tr>
                      <tr>
                        <td><input size="4" name="" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="5"><input size="4" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="5"><input size="4" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td rowspan="5"><input name="" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input size="4" name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input size="4" name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input size="4" name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input size="4" name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td colspan="5"><b>Keterangan</b></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="3"><b>Pengaturan</b></td>
                        <td class="table-info" colspan="3"><b>Hasil Pengukuran</b></td>
                      </tr>
                      <tr>
                        <td class="table-info"><b>KV</b></td>
                        <td class="table-info"><b>mA</b></td>
                        <td class="table-info"><b>Waktu (s)</b></td>
                        <td class="table-info"><b>kV</b></td>
                        <td class="table-info"><b>Waktu (s)</b></td>
                        <td class="table-info"><b>Kerma udara (mGy)</b></td>
                      </tr>
                      <tr>
                        <td rowspan="5"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="5"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="5"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="3"><b>Rerata</b></td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="3"><b>Standar deviasi</b></td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="3"><b>Koefisien variasi (CV)</b></td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="3"><b>Nilai lolos uji</b></td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                        <td rowspan="1"><input size="7" name="" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="5"><b>Keterangan</b></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
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