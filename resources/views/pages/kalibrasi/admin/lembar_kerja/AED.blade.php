<div role="tabpanel" class="tab-pane" id="AED">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi AED</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-10 col-sm-12">
                <form action="{{ route('lembar_kerja.store') }}" class="form-inner"
                  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')

                  <h3>A. DATA ALAT PELANGGAN</h3>
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
                        <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-" value="{{  Auth::user()->username }}" readonly></td>
                      </tr>
                    </tbody>

                  </table>

                  <h3>C. Alat Yang digunakan</h3>
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
                        <td class="table-info" colspan="1" align="left"> <b>Electrical Safety Analyzer</b></td>
                        <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                            @foreach($alatUkur as $item)
                            <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                            @endforeach
                            </select>
                        </td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Thermohygrometer</b> </td>
                        <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                            @foreach($alatUkur as $item)
                            <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                            @endforeach
                            </select>
                        </td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Defibrilator Analyzer</b> </td>
                        <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                            @foreach($alatUkur as $item)
                            <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                            @endforeach
                            </select>
                        </td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Stopwatch</b> </td>
                        <td><select name="" class="form-control" id="" style="border:0">
                          <option>-- Pilih ID Aset --</option>
                            @foreach($alatUkur as $item)
                            <option value="<?= $item['id_number']; ?>"> <?= $item['id_number']; ?> </option>
                            @endforeach
                            </select>
                        </td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
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
                        <td class="table-info" colspan="1" align="left"><b>Kotak Kontak Alat</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>kabel catu utama</b></td>
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
                        <td class="table-info" colspan="1" align="left"><b>Tombol ,Saklar dan Kontrol</b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>6</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Periksa tombol -tombol fungsi
                            defibrilator</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>7</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tampilan dan indikator</b></td>
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
                  <h5>a. Output</h5>

                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td class="table-info" rowspan="2" align="center"><b>Parameter</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>Setting alat</b></td>
                        <td class="table-info" colspan="6" align="center"><b>Hasil Pengukuran standar</b>
                        </td>
                        <td class="table-info" colspan="3" align="center"><b>Perhitungan</b></td>
                        <td class="table-info" colspan="17" align="center"><b>Perhitungan</b></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>I</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>II</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>III</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>IV</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>V</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>VI</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>Rata-rata</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>Koreksi</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>STDEV</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>U Repeat</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>vi</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>Sertifikat Standar</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>U Standar</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>vi</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>Resolusi Standar</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>U Resolusi Standar</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>vi</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>Resolusi alat</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>U Resolusi Alat</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>vi</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>ci</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>Uc</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>Veff</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>k</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>U 95</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>U95 dg k=2</b></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="8" align="center"><b>Energi Joule</b></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>20</b></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>30</b></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>50</b></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>100</b></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>150</b></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>200</b></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>300</b></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h5>a. Kinerja</h5>
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" rowspan="2" align="center"><b>Parameter</b></td>
                        <td class="table-info" colspan="1" rowspan="2" align="center"><b>Setting Max pada
                            alat</b></td>
                        <td class="table-info" colspan="10" align="center"><b>Pembacaan pada standar</b>
                        </td>
                        <td class="table-info" rowspan="2" align="center"><b>Terukur</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>Kesalahan</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>Kesalahan</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>Kesalahan</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>Ketidak Pastian Pengukuran</b>
                        </td>
                        <td class="table-info" rowspan="2" align="center"><b>UA</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>Res Alat b2</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>U standar b1</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>Res Standar b3</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>UC</b></td>
                        <td class="table-info" rowspan="2" align="center"><b>U95</b></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>I</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>II</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>III</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>IV</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>V</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>VI</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>VII</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>VIII</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>IX</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>X</b></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>







                  Spesifikasi
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="2" align="center"><b>Setting Energi
                            Max</b></td>
                        <td class="table-info" colspan="1" rowspan="1" align="center">
                          <b>Pembacaan_pada_standar</b>
                        </td>
                        <td class="table-info" colspan="" rowspan="2" align="center"><b>Toleransi</b></td>

                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>Detik</b></td>

                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>

                      </tr>
                    </tbody>
                  </table>


                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>No</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Spesifikasi</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Standar</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Alat</b></td>

                      </tr>

                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>1</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>Stopwatch</b></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" rowspan="1" align="center"><b>2</b></td>
                        <td class="table-info" rowspan="1" align="center"><b>Defibrilator Analyzer</b></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" rowspan="1" align="center"><input maxlength="4" size="4"
                            type="text" style="border: 0" placeholder="-"></td>
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