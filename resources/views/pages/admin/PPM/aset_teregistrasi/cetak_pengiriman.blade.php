@extends('layouts.admin')
@section('title', 'Cetak Pengiriman Reg')
@push('addon-style')
  <style>
    .td-custom {
      padding: 5px 0 5px 80px; 
      text-align: left;
      border-color: #b8b4b4;
    }
  </style>
@endpush
@section('content')<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="card"  id="PrintMe">
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
                      <h3 class="text-center">Laporan Formulir Pengiriman Aset</h3>
                    </th>
                    <th width="7%" colspan="2">
                    </th>
                  </tr>
                  <tr>
                    <th width="50%"><br><br></th>
                    <th width="50%"><br><br></th>
                  </tr>

                  <tr>
                    <td class="td-custom" width="50%">Id Perbaikan</td>
                    <td class="td-custom"><?php echo $item->id_perbaikan_reg ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Tanggal Perbaikan </td>
                    <td class="td-custom"><?php echo $item['tanggal_perbaikan_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Tanggal Pengiriman </td>
                    <td class="td-custom"><?php echo $item['tanggal_pengiriman_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Id Alat</td>
                    <td class="td-custom"><?php echo $item['id_aset_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Nama Alat</td>
                    <td class="td-custom"><?php echo $item['nama_alat_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Merek Alatr</td>
                    <td class="td-custom"><?php echo $item['merek_alat_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Type Alat</td>
                    <td class="td-custom"><?php echo $item['type_alat_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Serial Number</td>
                    <td class="td-custom"><?php echo $item['seri_number_reg'] ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Lokasi Alat</td>
                    <td class="td-custom"> <?php echo $item['lokasi_alat_reg']; ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%">Waktu Pelaporan</td>
                    <td class="td-custom"><?php date_default_timezone_set('Asia/Jakarta');
                        echo date('h:i:s a'); ?></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="50%"><br></td>
                    <td class="td-custom" width="50%"><br></td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="25%">Teknisi Rekanan</td>
                    <td class="td-custom" width="25%">Pelapor</td>
                  </tr>
                  <tr>
                    <td class="td-custom" width="25%"><br><br><br><br><br><br><br><br></td>
                    <td class="td-custom" width="25%"><br><br><br><br><br><br><br><br></td>
                  </tr>
                  <tr>
                    <td class="td-custom"><?php echo $item['teknisi_rekanan_reg']; ?></td>
                    <td class="td-custom"><?php echo $item['pelapor_reg']; ?></td>
                  </tr>
                </tbody>
              </table>
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