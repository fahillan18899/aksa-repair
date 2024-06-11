@extends('layouts.admin')

@section('title', 'Cetak Aset')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->




    <!-- content -->
    <div class="item justify-content-center mt-5">
      <div class="col-sm-12" id="PrintMe">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="btn-group">
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="align-center mt-5">
                <img src="" alt="Kop Surat" width="100%">
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
                        <h3 class="text-center ">Report Data Inventaris</h3>
                      </th>
                      <th width="7%" colspan="2">
                      </th>
                    </tr>
                    <tr>
                      <th width="50%"><br><br></th>
                      <th width="50%"><br><br></th>
                    </tr>

                    <tr>
                      <th width="50%">Id Aset</th>
                      <td><?php echo $item['id_aset'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Jenis Alat</th>
                      <td><?php echo $item['jenis_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nama Alat</th>
                      <td><?php echo $item['nama_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Merek</th>
                      <td><?php echo $item['merek'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Type</th>
                      <td><?php echo $item['type'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Serial Number</th>
                      <td><?php echo $item['serial_number'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Lokasi</th>
                      <td><?php echo $item['lokasi_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Penyusutan Aset</th>
                      <td><?php echo $item['penyusutan_aset'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Tanggal Kalibrasi</th>
                      <td><?php echo $item['tanggal_kalibrasi'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nomer Sertifikat Kalibrasi</th>
                      <td><?php echo $item['no_sertifikat_kalibrasi'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%"><br></th>
                      <th width="50%"><br></th>
                    </tr>
                    <tr>
                      <th width="50%">Teknisi</th>
                      <th width="50%">Kepala Ruangan</th>
                    </tr>
                    <tr>
                      <th width="50%"><br><br><br><br></th>
                      <th width="50%"><br><br><br><br></th>
                    </tr>
                    <tr>
                      <td><?php echo $item['teknisi_ppm'] ?></td>
                      <td><?php echo $item['No_Sertifikat_Kalibrasi'] ?></td>
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