<div role="tabpanel" class="tab-pane" id="inkubator">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default thumbnail">

        <div class="panel-heading no-print">
          <h1>Lembar Kerja Pengujian dan Kalibrasi Incubator</h1>
        </div>

        <div class="panel-body panel-form">
          <div class="row">
            <div class="col-md-10 col-sm-12">
              <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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
                      <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
                      <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Model</b></td>
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


                <h3>B. Pelaksana Kalibrasi</h3>

                <table class="table table-hover table-bordered" style=" width:100%">
                  <tbody>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Nama Instansi</b></td>
                      <td><input name="nama_instansi" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                      <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-">
                      </td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Tanggal diterima</b></td>
                      <td><input name="tanggal1" type="date" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Tanggal Kalibrasi</b></td>
                      <td><input name="tanggal2" type="date" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                      <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                  </tbody>
                </table>

                <h3>C. Kondisi Ruang</h3>
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

                <h3>D. ALAT YANG DIGUNAKAN</h3>
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
                      <td class="table-info" colspan="1" align="left"><b>Electrical Safety Analyzer </b>
                      </td>
                      <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Thermohygrometer </b></td>
                      <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Incubator Analyzer </b></td>
                      <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                  </tbody>
                </table>

                <h3>E. Pemeriksaan Kondisi Fisik dan Fungsi Alat</h3>
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
                      <td class="table-info" colspan="1" align="left"><b>Kabel Power</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Tombol On/Off</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Panel Kontrol</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Temperature Display</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Skin Temperature Probe</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>6</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Air Temperature Probe</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>7</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Canopy/Hood (Baby Box)</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>8</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Troley</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
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
                      <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>2</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Resistansi Pembumian
                          Protektif</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>3</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Arus bocor Peralatan</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>4</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Arus bocor bagian yang
                          diaplikasikan</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                    </tr>


                    <tr>
                      <td class="table-info" colspan="1" align="left"><b>5</b></td>
                      <td class="table-info" colspan="1" align="left"><b>Resistansi Isolasi</b></td>
                      <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                      <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                    </tr>
                  </tbody>
                </table>

                <h3>G. Hasil Pengukuran Kinerja Alat</h3>

                <h3>1. Kalibrasi Suhu Udara</h3>
                <table class="table table-hover table-bordered">
                  <tbody>
                    <tr>
                      <td rowspan="2"><b>Parameter</b></td>
                      <td rowspan="2"><b>Setting Standar </b></td>
                      <td colspan="6"><b>Pembacaan Pada Standar</b></td>
                      <td rowspan="2"><b>Rata-rata Hasil Ukur</b></td>
                      <td rowspan="2"><b>Koreksi</b></td>
                      <td rowspan="2"><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                    </tr>
                    <tr>
                      <td><b>I</b></td>
                      <td><b>II</b></td>
                      <td><b>III</b></td>
                      <td><b>IV</b></td>
                      <td><b>V</b></td>
                      <td><b>VI</b></td>
                    </tr>
                    <tr>
                      <td rowspan="2"><b>Suhu T1 ( ºC)</b></td>
                      <td><b>32 </b></td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td><b>36 </b></td>
                      <td><b><input size="5" name="frekuensi60_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="2"><b> Suhu T2 ( ºC)</b></td>
                      <td><b>32 </b></td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td><b>36 </b></td>
                      <td><b><input size="5" name="frekuensi60_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="2"><b> Suhu T3 ( ºC)</b></td>
                      <td><b>32 </b></td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td><b>36 </b></td>
                      <td><b><input size="5" name="frekuensi60_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>

                    </tr>
                    <tr>
                      <td rowspan="2"><b> Suhu T4 ( ºC) </b></td>
                      <td><b>32 </b></td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td><b>36 </b></td>
                      <td><b><input size="5" name="frekuensi60_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="2"><b> Suhu T5 ( ºC)</b></td>
                      <td><b>32 </b></td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td><b>36 </b></td>
                      <td><b><input size="5" name="frekuensi60_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi60_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">Kebisingan (db) </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">Aliran Udara (m/s) </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">Kelembaban (%) </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                  </tbody>

                </table>

                <h4>2. <b>2. kalibrasi Sensor temperatur kulit</b></h4>
                <table class="table table-hover table-bordered">
                  <tbody>
                    <tr>
                      <td rowspan="2"><b>Parameter</b></td>
                      <td rowspan="2"><b>Setting Standar </b></td>
                      <td colspan="6"><b>Pembacaan Pada Standar</b></td>
                      <td rowspan="2"><b>Rata-rata Hasil Ukur</b></td>
                      <td rowspan="2"><b>Koreksi</b></td>
                      <td rowspan="2"><b>Ketidakpastian ( 95% CL, k=2) </b></td>
                    </tr>
                    <tr>
                      <td><b>I</b></td>
                      <td><b>II</b></td>
                      <td><b>III</b></td>
                      <td><b>IV</b></td>
                      <td><b>V</b></td>
                      <td><b>VI</b></td>
                    </tr>
                    <tr>
                      <td><b>Akurasi temperatur Kulit Bayi dengan temperatur kontrol ( ºC)"</b></td>
                      <td><b>36 </b></td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Sensor temperatur Kulit Bayi</b></td>
                      <td><b>32 </b></td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_1" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_2" type="text" style="border: 0" placeholder="-"></b>
                      </td>
                      <td><b><input size="5" name="frekuensi40_3" type="text" style="border: 0" placeholder="-"></b>
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