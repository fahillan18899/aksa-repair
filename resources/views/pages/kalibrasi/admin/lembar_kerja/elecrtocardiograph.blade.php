 <div role="tabpanel" class="tab-pane" id="language">
   <div class="row">
     <div class="col-sm-12">
       <div class="panel panel-default thumbnail">

         <div class="panel-heading no-print">
           <h1>Lembar Kerja Pengujian dan Kalibrasi Electrocardiograph</h1>
         </div>

         <div class="panel-body panel-form">
           <div class="row">
             <div class="col-md-10 col-sm-12">
               <form action="{{ route('lembar_kerja.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                 @csrf
                 @method('POST')
                 <h3>Pelaksanaan Kalibrasi</h3>

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
                       <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                       <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                       <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                   </tbody>

                 </table>

                 <h3>Data Alat Pelanggan</h3>
                 <table class="table table-hover table-bordered" style=" width:100%">
                   <tbody>
                     <tr>
                       <td class="table-info" colspan="1" align="left"><b> Nama Alat</b></td>
                       <td><input name="nama_alat" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                       <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" align="left"><b>Merek/Tipe</b></td>
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


                 <h3>Alat yang digunakan</h3>
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
                       <td class="table-info" colspan="1" align="left">1. Safety Analyzer with ECG
                         Simulator, Merek : Fluke, Model/Type : 615,S/N 2463004 ( tertelusur ke LK-172-IDN)
                       </td>
                       <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" align="left"><b>2</b></td>
                       <td class="table-info" colspan="1" align="left">2. Thermohygrometer, Merk: Sunroud ,
                         Model/Type: -, S/N - (Tertelusur ke LK-031-IDN) </td>
                       <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" align="left"><b>3</b></td>
                       <td class="table-info" colspan="1" align="left">3. Digital Caliper, Merk: Krisbow ,
                         Model/Type: KW06-422, S/N kw 0600422 (Tertelusur ke LK-032-IDN) </td>
                       <td><input name="merek_3" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="tipe_3" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="no_seri_3" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="tertelusur_3" type="text" style="border: 0" placeholder="-"></td>
                   </tbody>
                 </table>


                 <h3>PENGUKURAN KONDISI LINGKUNGAN</h3>
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
                       <td class="table-info" colspan="1" align="left"><b> Power Cord</b></td>
                       <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" align="left"><b>2</b></td>
                       <td class="table-info" colspan="1" align="left"><b>Switch On/Off</b></td>
                       <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="keterangan_2" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" align="left"><b>3</b></td>
                       <td class="table-info" colspan="1" align="left"><b>LED/Back Light</b></td>
                       <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="keterangan_3" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" align="left"><b>4</b></td>
                       <td class="table-info" colspan="1" align="left"><b>Lead Cable/Patient Cable</b></td>
                       <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="keterangan_4" type="text" style="border: 0" placeholder="-"></td>
                     </tr>


                     <tr>
                       <td class="table-info" colspan="1" align="left"><b>5</b></td>
                       <td class="table-info" colspan="1" align="left"><b>Printer</b></td>
                       <td><input name="hasil_pemeriksaan_fisik_5" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="hasil_pemeriksaan_fungsi_5" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="keterangan_5" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                   </tbody>
                 </table>


                 <h3>Hasil Pengukuran Keselamatan Listrik</h3>
                 <table class="table table-hover table-bordered" style=" width:100%">
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
                 <h4>1. Lead</h4>
                 <table class="table table-hover table-bordered style=" width:"100%">
                   <tr>
                     <td class="table-info" colspan="1" rowspan="6" align="left"><b>1</b></td>
                     <td class="table-info" colspan="1" rowspan="6" align="left"><b>12 Lead </b></td>
                     <td rowspan="1" colspan="5" class="text-center">Hasil Perekaman Lead (Perhatikan
                       Vibrasi pada setiap Lead)</td>
                   </tr>
                   <tr>
                     <td rowspan="1" class="text-center"><b>II</b></td>
                     <td rowspan="1" class="text-center"><b>III</b></td>
                     <td rowspan="1" class="text-center"><b>aVr</b></td>
                     <td rowspan="1" class="text-center"><b>aVR</b></td>
                     <td rowspan="1" class="text-center"><b>aVL</b></td>
                   </tr>
                   <tr>
                     <td><input name="II" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                     </td>
                     <td><input name="III" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                     <td><input name="aVr" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                     <td><input name="aVR" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                     <td><input name="aVL" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                   </tr>
                   <tr>
                     <td rowspan="1" class="text-center"><b>V2</b></td>
                     <td rowspan="1" class="text-center"><b>V3</b></td>
                     <td rowspan="1" class="text-center"><b>V4</b></td>
                     <td rowspan="1" class="text-center"><b>V5</b></td>
                     <td rowspan="1" class="text-center"><b>V6</b></td>
                   </tr>
                   <tr>
                     <td><input name="V2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                     </td>
                     <td><input name="V3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                     </td>
                     <td><input name="V4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                     </td>
                     <td><input name="V5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                     </td>
                     <td><input name="V6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                     </td>
                   </tr>

                   </tbody>
                 </table>
                 <h4>2. Hasil Pengukuran Kinerja ECG*</h4>
                 <table class="table table-hover table-bordered style=" width:100%">
                   <tbody>
                     <tr>
                       <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Setting Pada Standar</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Terukur Rata Rata Pada
                           Standar</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Koreksi</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Kesalahan Maksimal Yang
                           Diijinkan</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran </b>
                       </td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" rowspan="3" align="center"><b>Sensitivitas ( mV
                           )</b></td>
                       <td><input name="setting_pada_standar_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="terukur_rata_rata_pada_standar_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="koreksi_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td class="table-info" colspan="1" rowspan="3" align="center"><input name="kesalahan_aksimal_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="ketidakpastian_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td><input name="setting_pada_standar_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="terukur_rata_rata_pada_standar_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="koreksi_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="ketidakpastian_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td><input name="setting_pada_standar_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="terukur_rata_rata_pada_standar_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="koreksi_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="ketidakpastian_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" rowspan="2" align="left"><b>Kecepatan Kertas
                           (mm/s)</b></td>
                       <td><input name="setting_pada_standar_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="terukur_rata_rata_pada_standar_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="koreksi_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td rowspan="2"><input name="kesalahan_aksimal_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="ketidakpastian_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                     </tr>
                     <tr>
                       <td><input name="setting_pada_standar_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="terukur_rata_rata_pada_standar_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="koreksi_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="ketidakpastian_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                     </tr>

                   </tbody>
                 </table>
                 <h4>3. Hasil Pengukuran Frekuensi Heart (BPM)*</h4>
                 <table class="table table-hover table-bordered style=" width:"100%">
                   <tbody>
                     <tr>
                       <td class="table-info" colspan="1" align="center"><b>Parameter</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Setting Pada Standar</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Terukur Rata Rata Pada
                           Standar</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Koreksi</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Kesalahan Maksimal Yang
                           Diijinkan</b></td>
                       <td class="table-info" colspan="1" align="center"><b>Ketidakpastian Pengukuran </b>
                       </td>
                     </tr>
                     <tr>
                       <td class="table-info" colspan="1" rowspan="5" align="center"><b>Frekuensi
                           Heart Rate (BPM)</b></td>
                       <td><input name="BPM_1" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_2" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_3" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td class="table-info" colspan="1" rowspan="3" align="center"><input name="BPM_4" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="BPM_5" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                     </tr>
                     <tr>
                       <td><input name="BPM_6" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_7" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_8" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_9" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                     </tr>
                     <tr>
                       <td><input name="BPM_10" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_11" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_12" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_13" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                     </tr>
                     <tr>
                       <td><input name="BPM_14" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_15" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_16" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td class="table-info" colspan="1" rowspan="2" align="center"><input name="BPM_17" maxlength="4" size="4" type="text" style="border: 0" placeholder="-"></td>
                       <td><input name="BPM_18" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                     </tr>
                     <tr>
                       <td><input name="BPM_19" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_20" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_21" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
                       </td>
                       <td><input name="BPM_22" maxlength="4" size="4" type="text" style="border: 0" placeholder="-">
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