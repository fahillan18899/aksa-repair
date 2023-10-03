@extends('layouts.admin')
@section('title', 'Cetak Pemeliharaan')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->




    <!-- content -->
    <div class="row justify-content-center mt-5">
      <div class="col-sm-12" id="PrintMe">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="btn-group">
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="align-center mt-5">
                <img src="https://wyasaaplikasi.com/super_admin/img/64a6676d605dc.jpg" alt="Kop Surat" width="100%">
              </div>
              <div class="card-body">

                <table width="100%" class=" table text-center" border="0">
                  <tbody>
                    <tr>
                      <th width="50%"><br><br></th>
                      <th width="50%"><br><br></th>
                    </tr>
                    <tr>
                      <th width="7%" colspan="2">
                        <h3 class="text-center ">Laporan Formulir Pemeliharaan Aset</h3>
                      </th>
                      <th width="7%" colspan="2">
                      </th>
                    </tr>
                    <tr>
                      <th width="50%"><br><br></th>
                      <th width="50%"><br><br></th>
                    </tr>

                    <tr>
                      <th width="50%">Tanggal Pemeliharaan</th>
                      <td><?php echo $item['tanggal'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Kegiatan</th>
                      <td><?php echo $item['kegiatan'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nama Teknisi</th>
                      <td><?php echo $item['engineer'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">ID Aset</th>
                      <td><?php echo $item['id_aset'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nama Alat</th>
                      <td><?php echo $item['nama_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Serial Number</th>
                      <td><?php echo $item['serial_number'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Merek</th>
                      <td><?php echo $item['merek'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Type</th>
                      <td><?php echo $item['tipe'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Ruangan</th>
                      <td><?php echo $item['ruangan'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Hand Hygiene</th>
                      <td><?php echo $item['hand_hygiene'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Menyiapkan Alat & Bahan</th>
                      <td><?php echo $item['menyiapkan_alat_dan_bahan'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Alat Pelindung Diri</th>
                      <td><?php echo $item['alat_pelindung_diri'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Mengoprasikan Alat Kalibrasi</th>
                      <td><?php echo $item['mengoprasikan_alat_kalibrasi'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">KTD</th>
                      <td><?php echo $item['ktd'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Mengoprasikan Alat</th>
                      <td><?php echo $item['mengoprasikan_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Identifikasi Bahaya</th>
                      <td><?php echo $item['identifikasi_bahaya'] ?></td>
                    </tr>
                    <tr>
                      <th style="border:1px;" width="50%">Badan / Selungkup</th>
                      <td><?php echo $item[''] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fisik</th>
                      <td><?php echo $item['badan_selungkup1'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fungsi</th>
                      <td><?php echo $item['badan_selungkup2'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Alat Sistem Interlock</th>
                      <td><?php echo $item[''] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fisik</th>
                      <td><?php echo $item['alat_sistem_interlock1'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fungsi</th>
                      <td><?php echo $item['alat_sistem_interlock2'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Kabel Kelenturan</th>
                      <td><?php echo $item[''] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fisik</th>
                      <td><?php echo $item['kabel_kelenturan1'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fungsi</th>
                      <td><?php echo $item['kabel_kelenturan2'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Sistem Pengunci</th>
                      <td><?php echo $item[''] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fisik</th>
                      <td><?php echo $item['sistem_pengunci1'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fungsi</th>
                      <td><?php echo $item['sistem_pengunci2'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Tombol Saklar</th>
                      <td><?php echo $item[''] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fisik</th>
                      <td><?php echo $item['tombol_saklar1'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fungsi</th>
                      <td><?php echo $item['tombol_saklar2'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Label Penandaan</th>
                      <td><?php echo $item[''] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fisik</th>
                      <td><?php echo $item['label_penandaan1'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fungsi</th>
                      <td><?php echo $item['label_penandaan2'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Display Layar</th>
                      <td><?php echo $item[''] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fisik</th>
                      <td><?php echo $item['display_layar1'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fungsi</th>
                      <td><?php echo $item['display_layar2'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Aksesoris</th>
                      <td><?php echo $item[''] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fisik</th>
                      <td><?php echo $item['aksesoris1'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fungsi</th>
                      <td><?php echo $item['aksesoris2'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Indikator Bunyi</th>
                      <td><?php echo $item[''] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fisik</th>
                      <td><?php echo $item['indikator_bunyi1'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Fungsi</th>
                      <td><?php echo $item['indikator_bunyi2'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Pembersihan</th>
                      <td><?php echo $item['pembersihan'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Pengencangan Bagian Alat</th>
                      <td><?php echo $item['pengencangan_bagian_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Pelumasan</th>
                      <td><?php echo $item['pelumasan'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Kalibrasi Berkala</th>
                      <td><?php echo $item['kalibrasi_berkala'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Penggantian Bahan Habis Pakai</th>
                      <td><?php echo $item['penggantian_bahan_habis_pakai'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Cek Alat</th>
                      <td><?php echo $item['cek_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nama Sukucadang</th>
                      <td><?php echo $item['nama_sukucadang'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Volume</th>
                      <td><?php echo $item['volume'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Harga Satuan</th>
                      <td><?php echo $item['harga_satuan'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Jumlah Harga</th>
                      <td><?php echo $item['jumlah_harga'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Evaluasi</th>
                      <td><?php echo $item['Evaluasi'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Status</th>
                      <td><?php echo $item['status'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Mulai Bekerja</th>
                      <td><?php echo $item['mulai_bekerja'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Selesai Bekerja</th>
                      <td><?php echo $item['selesai_kerja'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Durasi</th>
                      <td><?php echo $item['durasi'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%"><br></th>
                      <th width="50%"><br></th>
                    </tr>
                    <tr>
                      <th width="25%">User</th>
                      <th width="25%">Teknisi</th>
                    </tr>

                    <tr>
                      <th width="25%"><br><br><br><br></th>
                      <th width="25%"><br><br><br><br></th>
                    </tr>
                    <tr>
                      <td><?php echo $item['user'] ?></td>
                      <td><?php echo $item['engginer'] ?></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="panel-footer no-print text-center">
            <div class="btn-group">
              <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger"><i class="fa fa-print"></i> Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div> <!-- /.content -->
@endsection