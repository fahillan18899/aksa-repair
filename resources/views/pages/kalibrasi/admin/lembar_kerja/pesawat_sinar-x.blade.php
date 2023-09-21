<div role="tabpanel" class="tab-pane" id="pesawat_sinar-x">

  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default thumbnail">

        <div class="panel-heading no-print">
          <h1>Lembar Kerja Pengujian dan Kalibrasi Pesawat Sinar x</h1>
        </div>

        <div class="panel-body panel-form">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <form action="{{ url('/kalibrasi/sphygmomanometer') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                @method('POST')

                <h3>DATA ALAT PELANGGAN</h3>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                        <td><select name="" class="form-control" style="border:0">
                          <option>-- Pilih Instansi --</option>
                          @foreach($berita_acara as $item)
                          <option value="<?= $item['kepada']; ?>"> <?= $item['kepada']; ?> </option>
                          @endforeach
                        </select></td>
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

                <h3>PELAKSANA KALIBRASI</h3>

                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Nama Instansi</b></td>
                      <td><input class="form-control input-number" name="nama_instansi" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                      <td><input class="form-control input-number" name="ruangan_kalibrasi" type="text" style="border: 0" placeholder="-">
                      </td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                      <td><input class="form-control input-number" name="tanggal_kalibrasi" type="date" style="border: 0" placeholder="-">
                      </td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                      <td><input class="form-control input-number" name="nama_petugas" type="text" style="border: 0" value="{{  Auth::user()->username }}" readonly></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>No Label</b></td>
                      <td><input class="form-control input-number" name="no_label" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                  </tbody>

                </table>

                <h3>PENDATAAN ALAT</h3>
                <h5> DAFTAR ALAT YANG DIGUNAKAN</h5>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>No</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Nama Alat</b></td>
                      <td class="table-info" colspan="1" align="left"><b>ID Alat</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                      <td class="table-info" colspan="1" align="left"><b>No. Seri</b></td>
                    </tr>
                    <tr>

                      <td class="table-info" colspan="1" align="left"><b>1</b></td>
                      <td class="table-info" colspan="1" align="left">Multimeter X-Ray Non Invasive</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left">Loaded radiographic</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left">Isolatif </td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left">Thermohygrometer </td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left">Meteran</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          dd
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_5" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_5" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    
                  </tbody>
                </table>

                <h5>PENGUKURAN KONDISI LINGKUNGAN</h5>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Sebelum Kalibrasi</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Sesudah Kalibrasi</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Suhu</b></td>
                      <td><input class="form-control input-number" name="suhu_sebelum" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="suhu_sesudah" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Kelembapan</b></td>
                      <td><input class="form-control input-number" name="kelembapan_sebelum" type="text" style="border: 0" placeholder="-">
                      </td>
                      <td><input class="form-control input-number" name="kelembapan_sesudah" type="text" style="border: 0" placeholder="-">
                      </td>
                    </tr>
                  </tbody>
                </table>

                

                


                <h3>HASIL PENGUKURAN KINERJA ALAT</h3>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="3" rowspan="" align="left"><b>Pengaturan</b></td>
                      <td class="table-info" colspan="" rowspan="2" align="center"><b>kV hasil ukur</b></td>
                      <td class="table-info" colspan="" rowspan="2"align="left"><b>Kesalahan relatif (%)</b></td>
                      <td class="table-info" colspan="" rowspan="2"align="left"><b>Nilai lolos uji (%)</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>kV</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>mA</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>Waktu (s)</b></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td rowspan="5"><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td rowspan="5"><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td class="table-info" rowspan="5" colspan="" align="left"><b>D > 6 %</b></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="5" align="left"><b>Keterangan: Jarak detektor dari titik fokus (SDD) = ..... cm</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Sesuai/Tidak Sesuai</b></td>
                    </tr>

                  </tbody>
                </table>
                

                <h3>Reproduksibilitas</h3>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="3" rowspan="" align="left"><b>Pengaturan</b></td>
                      <td class="table-info" colspan="3" rowspan="" align="center"><b>Hasil Pengukuran</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>kV</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>mA</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>Waktu (s)</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>kV</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>Waktu (s)</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>Kerma udara (mGy)</b></td>
                    </tr>
                    <tr>
                      <td rowspan="5"><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td rowspan="5"><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td rowspan="5"><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                    <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="3" rowspan="" align="left"><b>Rerata</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="3" rowspan="" align="left"><b>Standar deviasi</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="3" rowspan="" align="left"><b>Koefisien variasi (CV)</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="3" rowspan="" align="left"><b>Nilai lolos uji</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="5" rowspan="" align="left"><b>Keterangan: Jarak detektor dari titik fokus (SDD) = ..... cm</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>Sesuai/Tidak Sesuai</b></td>
                    </tr>

                  </tbody>
                </table>

                <h3>Intra oRAL</h3>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="" rowspan="" align="left"><b>kVp</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>HVL (mmAl)</b></td>
                    </tr>
                    
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    
                  </tbody>
                </table>

                <h3>Panoramic & Cephalometric</h3>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="" rowspan="" align="left"><b>kVp</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>HVL (mmAl)</b></td>
                    </tr>
                    
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    
                  </tbody>
                </table>

                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr colspan="4">
                      <td><b>Kesimpulan</b></td>
                    </tr>
                    <tr>
                      <td>No</td>
                      <td>Parameter</td>
                      <td>NILAI</td>
                      <td>HASIL</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Pemeriksaan</td>
                      <td>9</td>
                      <td rowspan="4">Laik</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Kebocoran Tekanan </td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Laju Buang Cepat </td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Akurasi Tekanan </td>
                      <td>50</td>
                    </tr>
                  </tbody>
                </table>


                <div class="form-group row">
                  <div class="col-sm-offset-3 col-sm-6">
                    <div class="ui buttons">
                      <button type="reset" class="ui button">Reset</button>
                      <div class="or"></div>
                      <button class="ui positive button" type="submit">Save</button>
                      <div class="or"></div>
                      <button class="ui button">Print</button>
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