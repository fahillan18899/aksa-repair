<div role="tabpanel" class="tab-pane" id="ventilator">

  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default thumbnail">

        <div class="panel-heading no-print">
          <h1>Lembar Kerja Pengujian dan Kalibrasi Ventilator</h1>
        </div>

        <div class="panel-body panel-form">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <form action="{{ url('/kalibrasi/sphygmomanometer') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                @method('POST')

                <h5>PENDATAAN ALAT</h5>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                  <tr>
                      <td class="table-info" colspan="1" align="left"><b>Nama Alat</b></td>
                      <td><input class="form-control input-number" name="nama_alat" type="text" style="border: 0" placeholder="-"></td>
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
                      <td class="table-info" colspan="1" align="left"><b>Nomor Seri</b></td>
                      <td><input class="form-control input-number" name="no_seri" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Alamat</b></td>
                      <td><input class="form-control input-number" name="alamat" type="text" style="border: 0" placeholder="-"></td>
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
                
                
                <h5>DAFTAR ALAT YANG DIGUNAKAN</h5>
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
                      <td class="table-info" colspan="1" align="left">Safety Analyzer</td>
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
                      <td class="table-info" colspan="1" align="left">Thermohygrometer</td>
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
                      <td class="table-info" colspan="1" align="left">Flow Analyzer</td>
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
                      <td class="table-info" colspan="1" align="left"><b>Badan Dan permukaan </b></td>
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
                      <td class="table-info" colspan="1" align="left"><b>Kotak kotak alat</b></td>
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
                      <td class="table-info" colspan="1" align="left"><b>Kabel catu utama</b></td>
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
                      <td class="table-info" colspan="1" align="left"><b>Sekering (Fuse)</b></td>
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
                      <td class="table-info" colspan="1" align="left"><b>Tombol, Saklar dan kontrol</b></td>
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
                      <td class="table-info" colspan="1" align="left"><b>Baterai/Charger</b></td>
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
                      <td class="table-info" colspan="1" align="left"><b>Selang pernapasan</b></td>
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
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>8</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Konektor gas</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_8" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_8" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_8" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>9</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Keberlangsungnan Catu Daya</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_9" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_9" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_9" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>10</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Alarm</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_10" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_10" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_10" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>11</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Pelabelan dan Aksesoris</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_11" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_11" id="">
                          <option value="Baik">Baik</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_11" type="text" style="border: 0" placeholder="-"></td>
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
                      <td class="table-info" colspan="" rowspan="2" align="left"><b>No</b></td>
                      <td class="table-info" colspan="" rowspan="2" align="center"><b>Diskripsi</b></td>
                      <td class="table-info" colspan="" rowspan="2"align="left"><b>Satuan</b></td>
                      <td class="table-info" colspan="" rowspan="2" align="left"><b>Setting Alat</b></td>
                      <td class="table-info" colspan="3" rowspan="" align="center"><b>Pembacaan Alat</b></td>
                      <td class="table-info" colspan="3" rowspan=""align="left"><b>Pembacaan Standar</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>III</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="left"><b>III</b></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="10" colspan="" align="left"><b>1</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Tidal Volume</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>mL</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Minute Volume</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>LPM</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Breath Rate</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>brpm</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>I : E Ratio</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>PEEP</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>cmH2O</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>PIP</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>cmH2O</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Ti</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Te</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>PIF</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>FiO2</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>%</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="10" colspan="" align="left"><b>2</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Tidal Volume</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>mL</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Minute Volume</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>LPM</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Breath Rate</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>brpm</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>I : E Ratio</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>PEEP</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>cmH2O</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>PIP</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>cmH2O</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Ti</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Te</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>PIF</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>FiO2</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>%</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="10" colspan="" align="left"><b>3</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Tidal Volume</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>mL</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Minute Volume</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>LPM</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Breath Rate</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>brpm</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>I : E Ratio</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>PEEP</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>cmH2O</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>PIP</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>cmH2O</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Ti</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>Te</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>PIF</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>sec</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>FiO2</b></td>
                        <td class="table-info" rowspan="" colspan="" align="left"><b>%</b></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
                        <td><input class="form-control" name="" type="text" placeholder="-"></td>
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