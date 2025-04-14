@extends('layouts.admin')
@section('title', 'Detail Pemantauan')
@push('addon-style')
<style>
  .td-custom {
    padding: 3px 0 3px 80px;
    text-align: left;
    border-color: #b8b4b4;
  }

  #ttd_canvas1 {
    border: 2px dotted rgb(21, 20, 20);
    border-radius: 15px;
    cursor: crosshair;
  }

  #ttd_canvas2 {
    border: 2px dotted rgb(21, 20, 20);
    border-radius: 15px;
    cursor: crosshair;
  }

  .modal-dialog {
  width: 100%;
  max-width: none;
  height: 100%;
  margin: 0;
}

.modal-content {
  height: 100%;
  display: flex;
  flex-direction: column;
}

.modal-body {
  flex: 1;
  overflow-y: auto;
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
            <div class="card-body">
            <center><h3 style="margin-top: 20px;">Laporan Formulir Pemeliharaan Aset</h3></center>
            <!--TABEL-->
            <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="3" scope="col">PEMELIHARA</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">Tanggal Pemeliharaan</th>
                    <th class="text-center" scope="col">Kegiatan</th>
                    <th class="text-center" scope="col">Teknisi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item1)
                  <tr>
                    <td align="center">{{ $item1->tanggal }}</td>
                    <td align="center">{{ $item1->kegiatan }}</td>
                    <td align="center">{{ $item1->engineer }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="6" scope="col">DATA ALAT</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">ID ASET</th>
                    <th class="text-center" scope="col">Nama Alat</th>
                    <th class="text-center" scope="col">Serial Number</th>
                    <th class="text-center" scope="col">Merek</th>
                    <th class="text-center" scope="col">Tipe</th>
                    <th class="text-center" scope="col">Ruangan</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item2)
                  <tr>
                    <td align="center">{{ $item2->idInv_pemantauan }}</td>
                    <td align="center">{{ $item2->nama_alat_pemantauan }}</td>
                    <td align="center">{{ $item2->serial_number_pemantauan }}</td>
                    <td align="center">{{ $item2->merek_pemantauan }}</td>
                    <td align="center">{{ $item2->type_pemantauan }}</td>
                    <td align="center">{{ $item2->ruangan_pemantauan }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="7" scope="col">PERSIAPAN</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">Hand Hygiene</th>
                    <th class="text-center" scope="col">Menyipkan alat & bahan</th>
                    <th class="text-center" scope="col">Alat pelindung diri</th>
                    <th class="text-center" scope="col">Mengoprasikan alat kalibrasi</th>
                    <th class="text-center" scope="col">KTD</th>
                    <th class="text-center" scope="col">Mengoprasikan alat</th>
                    <th class="text-center" scope="col">Identifikasi bahaya</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item2)
                  <tr>
                    <td align="center">{{ $item2->persiapan['hand_hygiene'] }}</td>
                    <td align="center">{{ $item2->persiapan['menyiapkan_alat_dan_bahan'] }}</td>
                    <td align="center">{{ $item2->persiapan['alat_pelindung_diri'] }}</td>
                    <td align="center">{{ $item2->persiapan['mengoprasikan_alat_kalibrasi'] }}</td>
                    <td align="center">{{ $item2->persiapan['ktd'] }}</td>
                    <td align="center">{{ $item2->persiapan['mengoprasikan_alat'] }}</td>
                    <td align="center">{{ $item2->persiapan['identifikasi_bahaya'] }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="10" scope="col">PEMANTAUAN FISIK & FUNGSI</th>
                  </tr>
                  <tr>
                    <th class="text-center" colspan="2" scope="col">Badan / Selungkup</th>
                    <th class="text-center" colspan="2" scope="col">Kabel Kelenturan</th>
                    <th class="text-center" colspan="2" scope="col">Tombol Saklar</th>
                    <th class="text-center" colspan="2" scope="col">Display Layar</th>
                    <th class="text-center" colspan="2" scope="col">Indikator Bunyi</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item3)
                  <tr>
                    <td align="center">{{ $item3->pemantauan['badan_selungkup1'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['badan_selungkup2'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['kabel_kelenturan1'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['kabel_kelenturan2'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['tombol_saklar1'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['tombol_saklar2'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['display_layar1'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['display_layar2'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['indikator_bunyi1'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['indikator_bunyi2'] ?? 'Buruk' }}</td>
                  </tr>
                  <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="2" scope="col">Alarm Sistem Interlock</th>
                    <th class="text-center" colspan="2" scope="col">Sistem Penguncian</th>
                    <th class="text-center" colspan="2" scope="col">Label Penandaan</th>
                    <th class="text-center" colspan="4" scope="col">Aksesoris</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" scope="col">Fisik</th>
                    <th class="text-center" scope="col">Fungsi</th>
                    <th class="text-center" colspan="2" scope="col">Fisik</th>
                    <th class="text-center" colspan="2" scope="col">Fungsi</th>
                  </tr>
                </thead>
                <tr>
                    <td align="center">{{ $item3->pemantauan['alarm_sistem_interlock1'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['alarm_sistem_interlock2'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['sistem_pengunci1'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['sistem_pengunci2'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['label_penandaan1'] ?? 'Buruk' }}</td>
                    <td align="center">{{ $item3->pemantauan['label_penandaan2'] ?? 'Buruk' }}</td>
                    <td colspan="2" align="center">{{ $item3->pemantauan['aksesoris1'] ?? 'Buruk' }}</td>
                    <td colspan="2" align="center">{{ $item3->pemantauan['aksesoris2'] ?? 'Buruk' }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="7" scope="col">TINDAKAN</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">KEGIATAN</th>
                    <th class="text-center" scope="col">KETERANGAN</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item4)
                  <tr>
                    <td align="center"><b>Cek alat</b></td>
                    <td align="center">{{ $item4->cek_alat }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="2" scope="col">SUKU CADANG</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">KETERANGAN</th>
                    <th class="text-center" scope="col">DATA</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item5)
                  <tr>
                    <td align="center"><b>Nama suku cadang</b></td>
                    <td align="center">{{ $item5->nama_sukucadang }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Volume</b></td>
                    <td align="center">{{ $item5->volume }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Harga satuan</b></td>
                    <td align="center">{{ $item5->harga_satuan }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Jumlah harga</b></td>
                    <td align="center">{{ $item5->jumlah_harga }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
              <!--TABEL-->
              <table class="table table-striped table-bordered" style="width:100%; margin-top: 20px; margin-bottom: 20px;">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" colspan="2" scope="col">EVALUASI & REKOMENDASI</th>
                  </tr>
                  <tr>
                    <th class="text-center" scope="col">KETERANGAN</th>
                    <th class="text-center" scope="col">DATA</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $index => $item6)
                  <tr>
                    <td align="center"><b>Evaluasi</b></td>
                    <td align="center">{{ $item6->evaluasi }}</td>
                  </tr>
                  <tr>
                    <td align="center"><b>Status</b></td>
                    <td align="center">{{ $item6->status }}</td>
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!--TABEL-->
            </div>
          </div>
          <div class="panel-footer no-print text-center">
            <div class="btn-group">
              <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger">
              <i class="fa fa-print"></i> Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- /.content -->
@endsection