<div role="tabpanel" class="tab-pane" id="ventilator_anesthesi">

  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default thumbnail">

        <div class="panel-heading no-print">
          <h1>Lembar Kerja Pengujian dan Kalibrasi Ventilator Anesthesi</h1>
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
                      <td class="table-info" colspan="1" align="left"><b>Nomor Seri</b></td>
                      <td><input class="form-control input-number" name="no_seri" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Resolusi</b></td>
                      <td><input class="form-control input-number" name="resolusi" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
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
                      <td><input class="form-control input-number" name="ruangan_kalibrasi" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                      <td><input class="form-control input-number" name="tanggal_kalibrasi" type="date" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Alamat</b></td>
                      <td><input class="form-control input-number" name="alamat" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Pelaksana</b></td>
                      <td><input class="form-control input-number" name="nama_petugas" type="text" style="border: 0" value="{{  Auth::user()->username }}" readonly></td>
                    </tr>
                  </tbody>
                </table>

        
                <h3>PENDATAAN ALAT</h3>
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
                      <td class="table-info" colspan="1" align="left">Badan Dan permukaan </td>
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
                      <td class="table-info" colspan="1" align="left">Kotak kotak alat</td>
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
                      <td class="table-info" colspan="1" align="left">Kabel catu utama</td>
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
                      <td class="table-info" colspan="1" align="left">Kabel catu utama</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          dd
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_4" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_4" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left">Kabel catu utama</td>
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
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>6</b></td>
                      <td class="table-info" colspan="1" align="left">Kabel catu utama</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          dd
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_6" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_6" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>7</b></td>
                      <td class="table-info" colspan="1" align="left">Kabel catu utama</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          dd
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_7" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_7" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>8</b></td>
                      <td class="table-info" colspan="1" align="left">Kabel catu utama</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          dd
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_8" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_8" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>9</b></td>
                      <td class="table-info" colspan="1" align="left">Kabel catu utama</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          dd
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_9" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_9" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>10</b></td>
                      <td class="table-info" colspan="1" align="left">Kabel catu utama</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          dd
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_10" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_10" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>11</b></td>
                      <td class="table-info" colspan="1" align="left">Kabel catu utama</td>
                      <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                          dd
                          @foreach($alatUkur as $item)
                          <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                          @endforeach
                        </select></td>
                      <td><input class="form-control input-number" name="merek_11" type="text" style="border: 0" placeholder="-"></td>
                      <td><input class="form-control input-number" name="no_seri_11" type="text" style="border: 0" placeholder="-"></td>
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
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 1 g</b></td>
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
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 2 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 2 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 5 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 10 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>6</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 20 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>7</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 20 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>8</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 50 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>9</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 100 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>10</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 200 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>11</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Anak Timbangan 200 g</b></td>
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
                      <td><input class="form-control input-number" name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
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
                <h4>Pengukuran tidal Volume</h4>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan=""  rowspan="2" align="center"><b>No</b></td>
                      <td class="table-info" colspan=""  rowspan="2" align="center"><b>Diskripsi</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="center"><b>Satuan</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="center"><b>Setting Alat </b></td>
                      <td class="table-info" colspan="3"  rowspan=""align="center"><b>Pembacaan Alat</b></td>
                      <td class="table-info" colspan="3"  rowspan=""align="center"><b>Pembacaan Standar</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>III</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>III</b></td>

                    </tr>
                    <tr>
                      <td class="table-info" rowspan="14" colspan="" align="center"><b>1</b></td>
                      <td class="table-info" rowspan="5" colspan="" align="center"><b>Tidal Volume</b></td>
                      <td class="table-info" rowspan="5" colspan="" align="center"><b>mL</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Minute Volume</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>LPM</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Breath Rate</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>LPM</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I : E Ratio</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PEEP</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>cmH2O</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PIP</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>cmH2O</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Ti</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Te</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PIF</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>FiO2</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>%</b></td>
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

                <h4>Pengukuran Breath Rate</h4>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan=""  rowspan="2" align="center"><b>No</b></td>
                      <td class="table-info" colspan=""  rowspan="2" align="center"><b>Diskripsi</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="center"><b>Satuan</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="center"><b>Setting Alat </b></td>
                      <td class="table-info" colspan="3"  rowspan=""align="center"><b>Pembacaan Alat</b></td>
                      <td class="table-info" colspan="3"  rowspan=""align="center"><b>Pembacaan Standar</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>III</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>III</b></td>

                    </tr>
                    <tr>
                      <td class="table-info" rowspan="15" colspan="" align="center"><b>2</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Tidal Volume</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>mL</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Minute Volume</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>LPM</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="6" colspan="" align="center"><b>Breath Rate</b></td>
                      <td class="table-info" rowspan="6" colspan="" align="center"><b>LPM</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I : E Ratio</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PEEP</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>cmH2O</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PIP</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>cmH2O</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Ti</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Te</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PIF</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>FiO2</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>%</b></td>
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

                <h4>Pengukuran I : E Ratio</h4>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan=""  rowspan="2" align="center"><b>No</b></td>
                      <td class="table-info" colspan=""  rowspan="2" align="center"><b>Diskripsi</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="center"><b>Satuan</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="center"><b>Setting Alat </b></td>
                      <td class="table-info" colspan="3"  rowspan=""align="center"><b>Pembacaan Alat</b></td>
                      <td class="table-info" colspan="3"  rowspan=""align="center"><b>Pembacaan Standar</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>III</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>III</b></td>

                    </tr>
                    <tr>
                      <td class="table-info" rowspan="14" colspan="" align="center"><b>3</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Tidal Volume</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>mL</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Minute Volume</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>LPM</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Breath Rate</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>LPM</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="5" colspan="" align="center"><b>I : E Ratio</b></td>
                      <td class="table-info" rowspan="5" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PEEP</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>cmH2O</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PIP</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>cmH2O</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Ti</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Te</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PIF</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>FiO2</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>%</b></td>
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


                <h4>Pengukuran Positive End-Expiratory Pressure (PEEP)</h4>
                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan=""  rowspan="2" align="center"><b>No</b></td>
                      <td class="table-info" colspan=""  rowspan="2" align="center"><b>Diskripsi</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="center"><b>Satuan</b></td>
                      <td class="table-info" colspan=""  rowspan="2"align="center"><b>Setting Alat </b></td>
                      <td class="table-info" colspan="3"  rowspan=""align="center"><b>Pembacaan Alat</b></td>
                      <td class="table-info" colspan="3"  rowspan=""align="center"><b>Pembacaan Standar</b></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>III</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>II</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>III</b></td>

                    </tr>
                    <tr>
                      <td class="table-info" rowspan="15" colspan="" align="center"><b>4</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Tidal Volume</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>mL</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Minute Volume</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>LPM</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Breath Rate</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>LPM</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>I : E Ratio</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="6" colspan="" align="center"><b>PEEP</b></td>
                      <td class="table-info" rowspan="6" colspan="" align="center"><b>cmH2O</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>

                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PIP</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>cmH2O</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Ti</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>Te</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>PIF</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>sec</b></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                      <td><input class="form-control" name="" type="text" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>FiO2</b></td>
                      <td class="table-info" rowspan="" colspan="" align="center"><b>%</b></td>
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