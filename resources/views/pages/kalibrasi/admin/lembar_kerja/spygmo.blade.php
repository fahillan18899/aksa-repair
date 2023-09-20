<div role="tabpanel" class="tab-pane active" id="home">

  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default thumbnail">

        <div class="panel-heading no-print">
          <h1>Lembar Kerja Pengujian dan Kalibrasi Sphygmomanometer</h1>
        </div>

        <div class="panel-body panel-form">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <form action="{{ url('/kalibrasi/sphygmomanometer') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                @method('POST')
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
                      <td class="table-info" colspan="1" align="left">Digital Manometer </td>
                      <td><select name="" class="form-control" style="border:0">
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
                      <td class="table-info" colspan="1" align="left">Rigid Silinder </td>
                      <td><select name="" class="form-control" style="border:0">
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
                      <td class="table-info" colspan="1" align="left">Stopwatch </td>
                      <td><select name="" class="form-control" style="border:0">
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
                      <td><select name="" class="form-control" style="border:0">
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
                        <select name="" class="form-control" style="border:0">
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
                      <td class="table-info" colspan="1" align="left"><b>Badan dan Permukaan</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_1" id="hasil_fisik_1">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_1">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Balon Tensi, Tabung, Selang</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_2">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_2">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Bantalan/Rem</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_3">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_3">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Filter</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_4">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_4">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Gauge/Tabung</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_5">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_5">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>6</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Indikator</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_6">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_6">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_6" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>7</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Konektor</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_7">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_7">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_7" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>8</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Label</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_8">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_8">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_8" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>9</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Manset</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_9">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_9">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_9" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>10</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Pengaturan Titik 0</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_10">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_10">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_10" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>11</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Pengencang</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_11">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_11">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_11" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>12</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Valve Penutup</b></td>
                      <td>
                        <select style="border: 0" name="hasil_fisik_12">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td>
                        <select style="border: 0" name="hasil_fungsi_12">
                          <option value="Tidak">Tidak</option>
                          <option value="Baik">Baik</option>
                        </select>
                      </td>
                      <td><input class="form-control input-number" name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                  </tbody>
                </table>

                <h3>PENGUKURAN KINERJA </h3>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>No</b></td>
                      <td class="table-info" colspan="1" rowspan="2" align="center"><b>titik setting</b>
                      </td>
                      <td class="table-info text-center" colspan="6" align="left"><b>Pengukuran</b></td>
                      <td class="table-info" colspan="1" rowspan="2" align="center"><b>Toleransi</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>No</b></td>
                      <td class="table-info" colspan="1" align="left"><b>1</b></td>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>6</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>1</b></td>
                      <td class="table-info" colspan="1" align="left"><b>50</b></td>
                      <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_50_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_50_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_50_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_50_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_50_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="5" class="text-center">± 5 mmHg</td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>100</b></td>
                      <td><input class="form-control input-number-100" name="pengukuran_100_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_100_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_100_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_100_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_100_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_100_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>150</b></td>
                      <td><input class="form-control input-number-150" name="pengukuran_150_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_150_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_150_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_150_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_150_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_150_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>200</b></td>
                      <td><input class="form-control input-number-200" name="pengukuran_200_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_200_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_200_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_200_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_200_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_200_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>250</b></td>
                      <td><input class="form-control input-number-250" name="pengukuran_250_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_250_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_250_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_250_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_250_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_250_5" type="number" min="1" max="999" id="input" placeholder="-">
                      </td>
                    </tr>
                  </tbody>
                </table>


                <h3>LAJU BUANG CEPAT </h3>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>No</b></td>
                      <td class="table-info" colspan="1" rowspan="2" align="center"><b>Setting mmHg</b>
                      </td>
                      <td class="table-info text-center" colspan="6" align="left"><b>Pengukuran</b></td>
                      <td class="table-info" colspan="1" rowspan="2" align="center"><b>Toleransi</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>No</b></td>
                      <td class="table-info" colspan="1" align="left"><b>1</b></td>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>6</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>1</b></td>
                      <td class="table-info" colspan="1" align="left"><b>260</b></td>
                      <td><input class="form-control input-number-260" name="pengukuran_260_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-260" name="pengukuran_260_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-260" name="pengukuran_260_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-260" name="pengukuran_260_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-260" name="pengukuran_260_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-260" name="pengukuran_260_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="5" class="text-center">± 5 mmHg</td>
                    </tr>
                  </tbody>
                </table>
                <h3>Akurasi Tekanan </h3>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>No</b></td>
                      <td class="table-info" colspan="2" rowspan="2" align="center"><b>titik setting</b>
                      </td>
                      <td class="table-info text-center" colspan="6" align="left"><b>Pengukuran</b></td>
                      <td class="table-info" colspan="1" rowspan="2" align="center"><b>Toleransi</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>No</b></td>
                      <td class="table-info" colspan="1" align="left"><b>1</b></td>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>6</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" rowspan="6" align="left"><b>1</b></td>
                      <td class="table-info" colspan="1" rowspan="6" align="left"><b>Naik </b></td>
                      <td rowspan="1" class="text-center">0</td>
                      <td><input class="form-control input-number" name="pengukuran_naik_0_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_naik_0_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_naik_0_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_naik_0_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_naik_0_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_naik_0_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">50</td>
                      <td><input class="form-control input-number-50" name="pengukuran_naik_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_naik_50_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_naik_50_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_naik_50_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_naik_50_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_naik_50_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">100</td>
                      <td><input class="form-control input-number-100" name="pengukuran_naik_100_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_naik_100_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_naik_100_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_naik_100_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_naik_100_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_naik_100_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">150</td>
                      <td><input class="form-control input-number-150" name="pengukuran_naik_150_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_naik_150_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_naik_150_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_naik_150_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_naik_150_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_naik_150_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">200</td>
                      <td><input class="form-control input-number-200" name="pengukuran_naik_200_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_naik_200_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_naik_200_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_naik_200_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_naik_200_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_naik_200_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">250</td>
                      <td><input class="form-control input-number-250" name="pengukuran_naik_250_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_naik_250_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_naik_250_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_naik_250_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_naik_250_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_naik_250_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" rowspan="6" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" rowspan="6" align="left"><b>Turun </b></td>
                      <td rowspan="1" class="text-center">0</td>
                      <td><input class="form-control input-number" name="pengukuran_turun_0_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_turun_0_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_turun_0_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_turun_0_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_turun_0_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number" name="pengukuran_turun_0_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">50</td>

                      <td><input class="form-control input-number-50" name="pengukuran_turun_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_turun_50_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_turun_50_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_turun_50_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_turun_50_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-50" name="pengukuran_turun_50_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">100</td>

                      <td><input class="form-control input-number-100" name="pengukuran_turun_100_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_turun_100_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_turun_100_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_turun_100_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_turun_100_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-100" name="pengukuran_turun_100_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">150</td>

                      <td><input class="form-control input-number-150" name="pengukuran_turun_150_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_turun_150_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_turun_150_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_turun_150_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_turun_150_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-150" name="pengukuran_turun_150_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">200</td>

                      <td><input class="form-control input-number-200" name="pengukuran_turun_200_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_turun_200_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_turun_200_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_turun_200_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_turun_200_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-200" name="pengukuran_turun_200_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
                    </tr>
                    <tr>
                      <td rowspan="1" class="text-center">250</td>
                      <td><input class="form-control input-number-250" name="pengukuran_turun_250_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_turun_250_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_turun_250_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_turun_250_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_turun_250_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td><input class="form-control input-number-250" name="pengukuran_turun_250_6" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      <td rowspan="1" class="text-center">± 5 mmHg </td>
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
                      <td>
                        <p id="nilai"></p>
                      </td>
                      <td rowspan="4">Tidak Laik</td>
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

@push('addon-script')
<script>
  let hasil_fungsi_1 = document.getElementsByName("hasil_fungsi_1")[0].options[0].value;
  let hasil_fungsi_2 = document.getElementsByName("hasil_fungsi_2")[0].options[0].value;
  let hasil_fungsi_3 = document.getElementsByName("hasil_fungsi_3")[0].options[0].value;
  let hasil_fungsi_4 = document.getElementsByName("hasil_fungsi_4")[0].options[0].value;
  let hasil_fungsi_5 = document.getElementsByName("hasil_fungsi_5")[0].options[0].value;
  let hasil_fungsi_6 = document.getElementsByName("hasil_fungsi_6")[0].options[0].value;
  let hasil_fungsi_7 = document.getElementsByName("hasil_fungsi_7")[0].options[0].value;
  let hasil_fungsi_8 = document.getElementsByName("hasil_fungsi_8")[0].options[0].value;
  let hasil_fungsi_9 = document.getElementsByName("hasil_fungsi_9")[0].options[0].value;
  let hasil_fungsi_10 = document.getElementsByName("hasil_fungsi_10")[0].options[0].value;
  let hasil_fungsi_11 = document.getElementsByName("hasil_fungsi_11")[0].options[0].value;
  let hasil_fungsi_12 = document.getElementsByName("hasil_fungsi_12")[0].options[0].value;

  let hasil_fisik_1 = document.getElementsByName("hasil_fisik_1")[0].options[0].value;
  let hasil_fisik_2 = document.getElementsByName("hasil_fisik_2")[0].options[0].value;
  let hasil_fisik_3 = document.getElementsByName("hasil_fisik_3")[0].options[0].value;
  let hasil_fisik_4 = document.getElementsByName("hasil_fisik_4")[0].options[0].value;
  let hasil_fisik_5 = document.getElementsByName("hasil_fisik_5")[0].options[0].value;
  let hasil_fisik_6 = document.getElementsByName("hasil_fisik_6")[0].options[0].value;
  let hasil_fisik_7 = document.getElementsByName("hasil_fisik_7")[0].options[0].value;
  let hasil_fisik_8 = document.getElementsByName("hasil_fisik_8")[0].options[0].value;
  let hasil_fisik_9 = document.getElementsByName("hasil_fisik_9")[0].options[0].value;
  let hasil_fisik_10 = document.getElementsByName("hasil_fisik_10")[0].options[0].value;
  let hasil_fisik_11 = document.getElementsByName("hasil_fisik_11")[0].options[0].value;
  let hasil_fisik_12 = document.getElementsByName("hasil_fisik_12")[0].options[0].value;

  let h1 = hasil_fungsi_1 = 'Baik' ? 0.4 : 0;
  let h2 = hasil_fungsi_2 = 'Baik' ? 0.4 : 0;
  let h3 = hasil_fungsi_3 = 'Baik' ? 0.4 : 0;
  let h4 = hasil_fungsi_4 = 'Baik' ? 0.4 : 0;
  let h5 = hasil_fungsi_5 = 'Baik' ? 0.4 : 0;
  let h6 = hasil_fungsi_6 = 'Baik' ? 0.4 : 0;
  let h7 = hasil_fungsi_7 = 'Baik' ? 0.4 : 0;
  let h8 = hasil_fungsi_8 = 'Baik' ? 0.4 : 0;
  let h9 = hasil_fungsi_9 = 'Baik' ? 0.4 : 0;
  let h10 = hasil_fungsi_10 = 'Baik' ? 0.4 : 0;
  let h11 = hasil_fungsi_11 = 'Baik' ? 0.4 : 0;
  let h12 = hasil_fungsi_12 = 'Baik' ? 0.4 : 0;

  let hf1 = hasil_fisik_1 = 'Baik' ? 0.4 : 0;
  let hf2 = hasil_fisik_2 = 'Baik' ? 0.4 : 0;
  let hf3 = hasil_fisik_3 = 'Baik' ? 0.4 : 0;
  let hf4 = hasil_fisik_4 = 'Baik' ? 0.4 : 0;
  let hf5 = hasil_fisik_5 = 'Baik' ? 0.4 : 0;
  let hf6 = hasil_fisik_6 = 'Baik' ? 0.4 : 0;
  let hf7 = hasil_fisik_7 = 'Baik' ? 0.4 : 0;
  let hf8 = hasil_fisik_8 = 'Baik' ? 0.4 : 0;
  let hf9 = hasil_fisik_9 = 'Baik' ? 0.4 : 0;
  let hf10 = hasil_fisik_10 = 'Baik' ? 0.4 : 0;
  let hf11 = hasil_fisik_11 = 'Baik' ? 0.4 : 0;
  let hf12 = hasil_fisik_12 = 'Baik' ? 0.4 : 0;

  const jumlah = h1 + h2 + h3 + h4 + h5 + h6 + h7 + h8 + h9 + h10 + h11 + h12 + hf1 + hf2 + hf3 + hf4 + hf5 + hf6 + hf7 + hf8 + hf9 + hf10 + hf11 + hf12;
  const nilai = document.getElementById('nilai').textContent = jumlah;
</script>
@endpush