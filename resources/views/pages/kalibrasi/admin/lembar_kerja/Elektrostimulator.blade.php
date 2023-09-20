<div role="tabpanel" class="tab-pane active" id="Elektrostimulator">

  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default thumbnail">

        <div class="panel-heading no-print">
          <h1>Lembar Kerja Pengujian dan Kalibrasi Elektrostimulator</h1>
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
                <h5>1. DAFTAR ALAT YANG DIGUNAKAN</h5>
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
                      <td class="table-info" colspan="1" align="left">Stopwatch</td>
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
                      <td class="table-info" colspan="1" align="left">Electro Safety Analyzer</td>
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
                      <td class="table-info" colspan="1" align="left">Osciloscope </td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          dd
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
                  </tbody>
                </table>

                <h5>2. DATA ALAT PELANGGAN</h5>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                      <td>
                        <select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih Instansi --</option>
                          @foreach($berita_acara as $item)
                          <option value="<?= $item['kepada']; ?>"> <?= $item['kepada']; ?> </option>
                          @endforeach
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                      <td><input class="form-control input-number" name="merek" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b> Type</b></td>
                      <td><input class="form-control input-number" name="tipe" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Nomor Seri</b></td>
                      <td><input class="form-control input-number" name="no_seri" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Rentang Ukur</b></td>
                      <td><input class="form-control input-number" name="rentang_ukur" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Resolusi</b></td>
                      <td><input class="form-control input-number" name="resolusi" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                  </tbody>
                </table>

                <h5>3. PENGUKURAN KONDISI LINGKUNGAN</h5>
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

                <h3>PEMERIKSAAN KONDISI FISIK DAN FUNGSI ALAT PELANGGAN</h3>
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
                      <td class="table-info" colspan="1" align="left"><b>Power Cord</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_1" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_1" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Timer</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_2" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_2" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Power Adjuster</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_3" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_3" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Indicator Power Meter</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_4" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_4" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Cable Electroda</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_5" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_5" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>6</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Sound Indicator</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_6" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_6" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>7</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Lamp Indicator</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_7" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_7" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_7" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                  </tbody>
                </table>

                <h3>PENGUKURAN KESELAMATAN LISTRIK </h3>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>No</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>Parameter</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>Terukur</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>Ambang batas</b></td>

                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>1</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Tegangan Jala-jala Terukur</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td class="table-info" colspan="1" align="left"><b>V ± 10%</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian Protektif</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td class="table-info" colspan="1" align="left"><b>≤200mΩ</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td class="table-info" colspan="1" align="left"><b>5000mA</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang diaplikasikan</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td class="table-info" colspan="1" align="left"><b>≤1000mA</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td class="table-info" colspan="1" align="left"><b>> 2 MΩ</b></td>
                    </tr>

                  </tbody>
                </table>


                <h3>HASIL PENGUKURAN KINERJA ALAT</h3>
                <h5>a Frekuensi(Hz)</h5>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan=""  rowspan="2" align="left"><b>Setting Alat</b></td>
                      <td class="table-info" colspan="5" rowspan="" align="center"><b>Penunjukan standar</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="left"><b>Toleransi</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>1</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>2</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>3</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>4</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>5</b></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>50</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>30%</b></td>
                    </tr>
                  </tbody>
                </table>

                <h5>b Pengukuran Tegangan(V)</h5>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan=""  rowspan="2" align="left"><b>Setting Alat</b></td>
                      <td class="table-info" colspan="5" rowspan="" align="center"><b>Penunjukan standar (V)</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="left"><b>Toleransi</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>1</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>2</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>3</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>4</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>5</b></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>20</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>30%</b></td>
                    </tr>
                  </tbody>
                </table>

                <h5>c Perhitungan Intensitas (mA)</h5>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan=""  rowspan="2" align="left"><b>Setting Alat</b></td>
                      <td class="table-info" colspan="5" rowspan="" align="center"><b>Penunjukan standar (mA)</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="left"><b>Toleransi</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>1</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>2</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>3</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>4</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>5</b></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>20</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>30%</b></td>
                    </tr>
                  </tbody>
                </table>

                <h5>d Pewaktu (s)</h5>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="2"  rowspan="" align="left"><b>Setting Alat</b></td>
                      <td class="table-info" colspan="5" rowspan="" align="center"><b>Penunjukan standar (mA)</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="left"><b>Toleransi</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>Menit</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>Detik</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>1</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>2</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>3</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>4</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>5</b></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>10</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>30%</b></td>
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