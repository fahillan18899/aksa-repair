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
              <div class="card-body">

                <table width="100%" class=" table text-center" border="0">
                  <tbody>
                    <tr>
                      <th width="50%"><br><br></th>
                      <th width="50%"><br><br></th>
                    </tr>
                    <tr>
                      <th width="7%" colspan="2">
                        <h3 class="text-center ">Data Alat</h3>
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
                      <td><?php echo $data['id_aset'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Jenis Alat</th>
                      <td><?php echo $data['jenis_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nama Alat</th>
                      <td><?php echo $data['nama_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Merek</th>
                      <td><?php echo $data['merek'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Type</th>
                      <td><?php echo $data['type'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Serial Number</th>
                      <td><?php echo $data['serial_number'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Lokasi</th>
                      <td><?php echo $data['lokasi_alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Tanggal Kalibrasi</th>
                      <td><?php echo $data['tanggal_kalibrasi'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nomer Sertifikat Kalibrasi</th>
                      <td><?php echo $data['no_sertifikat_kalibrasi'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Kerusakan Alat</th>
                      <td><?php echo $kerusakan ?></td>
                    </tr>
                    <tr>
                      <th width="50%"><br></th>
                      <th width="50%"><br></th>
                    </tr>
                    <tr>
                      <th width="50%">Teknisi</th>
                      <th width="50%">KA Instalasi</th>
                    </tr>
                    <tr>
                      <th width="50%"><br><br><br><br></th>
                      <th width="50%"><br><br><br><br></th>
                    </tr>
                    <tr>
                      <td><?php echo $data['teknisi_ppm'] ?></td>
                      <td><?php echo $data['No_Sertifikat_Kalibrasi'] ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div> <!-- /.content -->
@endsection