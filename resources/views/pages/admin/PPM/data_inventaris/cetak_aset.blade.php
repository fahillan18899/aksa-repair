@extends('layouts.admin')

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
                      <td><?php echo $item['Id_Aset'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Jenis Alat</th>
                      <td><?php echo $item['Jenis_Alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nama Alat</th>
                      <td><?php echo $item['Nama_Alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Merek</th>
                      <td><?php echo $item['Merek'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Type</th>
                      <td><?php echo $item['Type'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Serial Number</th>
                      <td><?php echo $item['Serial_Number'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Lokasi</th>
                      <td><?php echo $item['Lokasi_Alat'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Tanggal Kalibrasi</th>
                      <td><?php echo $item['Tanggal_Kalibrasi'] ?></td>
                    </tr>
                    <tr>
                      <th width="50%">Nomer Sertifikat Kalibrasi</th>
                      <td><?php echo $item['No_Sertifikat_Kalibrasi'] ?></td>
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
                      <td><?php echo $item['Teknisi_Distributor'] ?></td>
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