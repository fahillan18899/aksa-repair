<div role="tabpanel" class="tab-pane" id="Audiometer">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Audiometer</h1>
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
                        <td class="table-info" colspan="1" align="left">Audiometer Analayzer </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left">Electro Safety Analyzer </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
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
                        <td class="table-info" colspan="1" align="left"><b> Badan dan permukaan</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kotak kontak alat </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Kabel catu utama </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Sekering pengaman </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Tombol,saklar dan kontrol </b>
                        </td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>eriksa tombol tombol </b></td>
                        <td><input name="hasil_pemeriksaan_fisik_12" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_12" type="text" style="border: 0"
                            placeholder="-">
                        </td>
                        <td><input name="keterangan_12" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
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
                  <h3> 1. Elektroda helical</h3>
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td colspan="2"><b>Setting </b></td>
                        <td colspan="2"><b>Earphone Kiri </b></td>
                        <td colspan="1"><b>Target</b></td>
                        <td colspan="2"><b>Earphone Kanan</b></td>
                      </tr>
                      <tr>
                        <td><b> Freq (Hz)</b></td>
                        <td><b>HL (dB)</b></td>
                        <td><b>Hearing Level</b></td>
                        <td><b>Koreksi</b></td>
                        <td><b>Hearing Level</b></td>
                        <td><b>Hearing Level</b></td>
                        <td><b>Koreksi </b></td>
                      </tr>
                      <tr>
                        <td><b>125 </b></td>
                        <td><b>50</b></td>
                        <td><input class="form-control input-number-125" name="pengukuran_125_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-125" name="pengukuran_125_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-125" name="pengukuran_125_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-125" name="pengukuran_125_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-125" name="pengukuran_125_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>250 </b></td>
                        <td><b>70</b></td>
                        <td><input class="form-control input-number-250" name="pengukuran_250_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-250" name="pengukuran_250_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-250" name="pengukuran_250_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-250" name="pengukuran_250_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-250" name="pengukuran_250_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>500 </b></td>
                        <td><b>70</b></td>
                        <td><input class="form-control input-number-500" name="pengukuran_500_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-500" name="pengukuran_500_2" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-500" name="pengukuran_500_3" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-500" name="pengukuran_500_4" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-500" name="pengukuran_500_5" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>750 </b></td>
                        <td><b>70</b></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>1000 </b></td>
                        <td><b>70</b></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>1500 </b></td>
                        <td><b>70</b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0"  placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0"  placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0"  placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0"  placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0"  placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>2000 </b></td>
                        <td><b>70</b></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td><b>3000 </b></td>
                        <td><b>70</b></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td><b>4000 </b></td>
                        <td><b>70</b></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td><b>6000 </b></td>
                        <td><b>70</b></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td><b>8000 </b></td>
                        <td><b>70</b></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                        <td><input class="form-control input-number-50" name="pengukuran_50_1" type="number" min="1" max="999" id="input" placeholder="-"></td>
                      </tr>

                    </tbody>
                  </table>
                  <h3>1. Elektroda helical</h3>
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td colspan="1"><b>Setting </b></td>
                        <td colspan="2"><b>Earphone Kiri </b></td>
                        <td colspan="1"><b>Target</b></td>
                        <td colspan="2"><b>Earphone Kanan</b></td>
                      </tr>
                      <tr>
                        <td><b> Freq (Hz)</b></td>
                        <td><b>Hearing Level</b></td>
                        <td><b>Koreksi</b></td>
                        <td><b>Hearing Level</b></td>
                        <td><b>Hearing Level</b></td>
                        <td><b>Koreksi </b></td>
                      </tr>
                      <tr>
                        <td><b>125 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>250 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>500 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>750 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>1000 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>1500 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><b>2000 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td><b>3000 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td><b>4000 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td><b>6000 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                      <tr>
                        <td><b>8000 </b></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" size="6" type="text" style="border: 0" placeholder="-"></td>
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