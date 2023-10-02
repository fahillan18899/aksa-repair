@extends('layouts.admin')

@section('content')
@section('title', 'Data Inventaris')<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Sumber Daya Manusia</h1>
        <small>Employee Information</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->




    <!-- content -->
    <div class="item">
      <div class="col-sm-12" id="PrintMe">
        <div class="panel panel-default thumbnail">

          <!-- <div class="panel-heading no-print">
             <div class="btn-group">
               <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger"><i class="fa fa-print"></i></button>
             </div>
           </div> -->

          <div class="panel-body">
            <div class="item">
              <div class="col-sm-12" align="center">
                <h1>Employee Information</h1>
                <br>
              </div>

              <div class="col-sm-4" align="center">
                <img alt="Picture" src="/assets/images/no-img.png" class="img-thumbnail img-responsive">
                <h3><?= $item['username'] ?></h3>

              </div>

              <div class="col-sm-8">
                <dl class="dl-horizontal">
                  <dt>Designation</dt>
                  <dd><?= $item['desination'] ?></dd>
                  <dt>Specialist</dt>
                  <dd><?= $item['desination'] ?></dd>
                  <dt>Email Address</dt>
                  <dd><?= $item['username'] ?></dd>
                  <dt>Mobile No</dt>
                  <dd><?= $item['mobile'] ?></dd>
                  <dt>Sex</dt>
                  <dd><?= $item['sex'] ?></dd>
                  <dt>Address</dt>
                  <dd><?= $item['address'] ?></dd>
                  <dt>Create Date</dt>
                  <dd><?= $item['desination'] ?></dd>
                  <dt>
                    User Role
                  </dt>
                  <dd>
                    <button class="btn btn-info"><?= $item['user_role'] ?></button>
                  </dd>
                  <dt>Status</dt>
                  <dd><?= $item['status'] ?></dd>
                </dl>
              </div>
            </div>
          </div>

        </div>

        <div class="panel panel-default thumbnail">

          <div class="panel-body">
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="item">
                  <div class="col-md-12">
                    <table width="100%" class="datatable table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>SL</th>
                          <th>Aktifitas</th>
                          <th>Poin</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $item['id'] ?></td>
                          <td><?php echo $item['firstname'] ?></td>
                          <td><?php echo $item['username'] ?></td>
                        </tr>

                      </tbody>
                    </table> <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div> <!-- /.content -->
  </div> <!-- /.content-wrapper -->
</div> <!-- /.content-wrapper -->
@endsection