@extends('layouts.teknisi')
@section('title', 'Cetak Pemeliharaan')
@push('addon-style')
  <style>
    .td-custom {
      padding: 3px 0 3px 80px; 
      text-align: left;
      border-color: #b8b4b4;
    }
  </style>
@endpush
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="row justify-content-center mt-5">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">
                      <div class="card" id="PrintMe">
                          <div class="align-center mt-5">
                            <img src="{{ url('assets/kop-surat/kop_surat_demo.png') }}" alt="Kop Surat" width="100%">
                          </div>
                          <div class="card-body">

                            <table width="84%" border="1px dot yellow" cellspacing="10" style="margin: 5% 0 0 8%">
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
                                          <td class="td-custom" width="50%"><br><br></td>
                                          <td class="td-custom" width="50%"><br><br></td>
                                      </tr>

                                      <tr>
                                          <td class="td-custom" width="50%">Tanggal Pemeliharaan</td>
                                          <td class="td-custom"><?php echo $item['tanggal']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Kegiatan</td>
                                          <td class="td-custom"><?php echo $item['kegiatan']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Nama Teknisi</td>
                                          <td class="td-custom"><?php echo $item['engineer']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">ID Aset</td>
                                          <td class="td-custom"><?php echo $item['id_aset']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Nama Alat</td>
                                          <td class="td-custom"><?php echo $item['nama_alat']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Serial Number</td>
                                          <td class="td-custom"><?php echo $item['serial_number']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Merek</td>
                                          <td class="td-custom"><?php echo $item['merek']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Type</td>
                                          <td class="td-custom"><?php echo $item['tipe']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Ruangan</td>
                                          <td class="td-custom"><?php echo $item['ruangan']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Hand Hygiene</td>
                                          <td class="td-custom"><?php echo $item['hand_hygiene']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Menyiapkan Alat & Bahan</td>
                                          <td class="td-custom"><?php echo $item['menyiapkan_alat_dan_bahan']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Alat Pelindung Diri</td>
                                          <td class="td-custom"><?php echo $item['alat_pelindung_diri']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Mengoprasikan Alat Kalibrasi</td>
                                          <td class="td-custom"><?php echo $item['mengoprasikan_alat_kalibrasi']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">KTD</td>
                                          <td class="td-custom"><?php echo $item['ktd']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Mengoprasikan Alat</td>
                                          <td class="td-custom"><?php echo $item['mengoprasikan_alat']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Identifikasi Bahaya</td>
                                          <td class="td-custom"><?php echo $item['identifikasi_bahaya']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" style="border:1px;" width="50%">Badan / Selungkup</td>
                                          <td class="td-custom"><?php echo $item['']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fisik</td>
                                          <td class="td-custom"><?php echo $item['badan_selungkup1']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fungsi</td>
                                          <td class="td-custom"><?php echo $item['badan_selungkup2']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Alat Sistem Interlock</td>
                                          <td class="td-custom"><?php echo $item['']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fisik</td>
                                          <td class="td-custom"><?php echo $item['alat_sistem_interlock1']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fungsi</td>
                                          <td class="td-custom"><?php echo $item['alat_sistem_interlock2']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Kabel Kelenturan</td>
                                          <td class="td-custom"><?php echo $item['']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fisik</td>
                                          <td class="td-custom"><?php echo $item['kabel_kelenturan1']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fungsi</td>
                                          <td class="td-custom"><?php echo $item['kabel_kelenturan2']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Sistem Pengunci</td>
                                          <td class="td-custom"><?php echo $item['']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fisik</td>
                                          <td class="td-custom"><?php echo $item['sistem_pengunci1']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fungsi</td>
                                          <td class="td-custom"><?php echo $item['sistem_pengunci2']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Tombol Saklar</td>
                                          <td class="td-custom"><?php echo $item['']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fisik</td>
                                          <td class="td-custom"><?php echo $item['tombol_saklar1']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fungsi</td>
                                          <td class="td-custom"><?php echo $item['tombol_saklar2']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Label Penandaan</td>
                                          <td class="td-custom"><?php echo $item['']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fisik</td>
                                          <td class="td-custom"><?php echo $item['label_penandaan1']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fungsi</td>
                                          <td class="td-custom"><?php echo $item['label_penandaan2']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Display Layar</td>
                                          <td class="td-custom"><?php echo $item['']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fisik</td>
                                          <td class="td-custom"><?php echo $item['display_layar1']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fungsi</td>
                                          <td class="td-custom"><?php echo $item['display_layar2']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Aksesoris</td>
                                          <td class="td-custom"><?php echo $item['']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fisik</td>
                                          <td class="td-custom"><?php echo $item['aksesoris1']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fungsi</td>
                                          <td class="td-custom"><?php echo $item['aksesoris2']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Indikator Bunyi</td>
                                          <td class="td-custom"><?php echo $item['']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fisik</td>
                                          <td class="td-custom"><?php echo $item['indikator_bunyi1']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Fungsi</td>
                                          <td class="td-custom"><?php echo $item['indikator_bunyi2']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Pembersihan</td>
                                          <td class="td-custom"><?php echo $item['pembersihan']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Pengencangan Bagian Alat</td>
                                          <td class="td-custom"><?php echo $item['pengencangan_bagian_alat']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Pelumasan</td>
                                          <td class="td-custom"><?php echo $item['pelumasan']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Kalibrasi Berkala</td>
                                          <td class="td-custom"><?php echo $item['kalibrasi_berkala']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Penggantian Bahan Habis Pakai</td>
                                          <td class="td-custom"><?php echo $item['penggantian_bahan_habis_pakai']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Cek Alat</td>
                                          <td class="td-custom"><?php echo $item['cek_alat']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Nama Sukucadang</td>
                                          <td class="td-custom"><?php echo $item['nama_sukucadang']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Volume</td>
                                          <td class="td-custom"><?php echo $item['volume']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Harga Satuan</td>
                                          <td class="td-custom"><?php echo $item['harga_satuan']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Jumlah Harga</td>
                                          <td class="td-custom"><?php echo $item['jumlah_harga']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Evaluasi</td>
                                          <td class="td-custom"><?php echo $item['Evaluasi']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Status</td>
                                          <td class="td-custom"><?php echo $item['status']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Mulai Bekerja</td>
                                          <td class="td-custom"><?php echo $item['mulai_bekerja']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Selesai Bekerja</td>
                                          <td class="td-custom"><?php echo $item['selesai_kerja']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%">Durasi</td>
                                          <td class="td-custom"><?php echo $item['durasi']; ?></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="50%"><br></td>
                                          <td class="td-custom" width="50%"><br></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom" width="25%">User</td>
                                          <td class="td-custom" width="25%">Teknisi</td>
                                      </tr>

                                      <tr>
                                          <td class="td-custom" width="25%"><br><br><br><br></td>
                                          <td class="td-custom" width="25%"><br><br><br><br></td>
                                      </tr>
                                      <tr>
                                          <td class="td-custom"><?php echo $item['user']; ?></td>
                                          <td class="td-custom"><?php echo $item['engginer']; ?></td>
                                      </tr>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                        <div class="panel-footer no-print text-center">
                            <div class="btn-group">
                                <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger"><i
                                        class="fa fa-print"></i> Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- /.content -->
@endsection
