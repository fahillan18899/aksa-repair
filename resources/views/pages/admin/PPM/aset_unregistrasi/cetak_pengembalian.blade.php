@extends('layouts.admin')
@section('title', 'Cetak Pengembalian Un')
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
                <img src="{{ url('/assets/images/kop.png') }}" alt="Kop Surat" width="100%">
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
                        <h3 class="text-center ">REPORT FORM PENGEMBALIAN UNREGISTRASI</h3>
                      </th>
                      <th width="7%" colspan="2">
                      </th>
                    </tr>
                    <tr>
                      <th width="50%"><br><br></th>
                      <th width="50%"><br><br></th>
                    </tr>

                    <tr>
                      <th width="50%">Id Perbaikan</th>
                      <td><?php echo $item ['id_perbaikan_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Tanggal Perbaikan</th>
                      <td><?php echo $item ['tanggal_perbaikan_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Tanggal Pengembalian </th>
                      <td><?php echo $item ['tanggal_pengembalian_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nama Alat</th>
                      <td><?php echo $item ['nama_alat_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Merek Alat</th>
                      <td><?php echo $item ['merek_alat_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Type Alat</th>
                      <td><?php echo $item ['type_alat_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Serial Number</th>
                      <td><?php echo $item ['serial_number_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Lokasi Alat</th>
                      <td><?php echo $item ['lokasi_alat_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Pelapor</th>
                      <td> <?php echo $item ['pelapor_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Teknisi 1 </th>
                      <td><?php echo $item ['teknisi_1_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Teknisi 2 </th>
                      <td><?php echo $item ['teknisi_2_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Keterangan</th>
                      <td><?php echo $item ['keterangan_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Penerima Alat</th>
                      <td><?php echo $item ['peneriama_alat_un'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Waktu Pelaporan</th>
                      <td><?php date_default_timezone_set('Asia/Jakarta');
                          echo date('h:i:s a'); ?></td>
                    </tr>
                    <tr>
                      <th width="50%"><br></th>
                      <th width="50%"><br></th>
                    </tr>
                    <tr>
                      <th width="25%">Teknisi 1</th>
                      <th width="25%">Kepala Ruangan</th>
                    </tr>
                    <tr>
                      <th width="25%"><br><br><br><br></th>
                      <th width="25%"><br><br><br><br></th>
                    </tr>
                    <tr>
                      <td><?php echo $item ['teknisi_1_un'] ?></td>
                      <td><?php echo $item ['ka_instalasi_un']; ?></td>
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