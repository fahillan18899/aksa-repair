@extends('layouts.admin')

@section('content')
@section('title', 'Human Resource')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Human Resources</h1>
        <small>Employees List</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <br>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <br>


    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-success" href="{{ url('/dashboard/human_resource/create') }}"> <i class="fa fa-plus"></i> Add Employee </a>
            </div>
          </div>

          <div class="panel-body">
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-12">
                    <table width="100%" class="datatable table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                          <th>Jenis Kelamin</th>
                          <th>Action</th>
                          <th>User Role</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($items as $index => $row)
                        <tr>
                          <td><?php echo $index + 1  ?></td>
                          <td><?php echo $row['firstname'] ?></td>
                          <td><?php echo $row['lastname'] ?></td>
                          <td><?php echo $row['username'] ?></td>
                          <td><?php echo $row['sex'] ?></td>
                          <td class="center">
                            <a href="{{ route('human_resource.show', $row->user_id) }}" class="btn btn-xs btn-success"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a>
                            <a href="{{ route('human_resource.edit', $row->user_id) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit "></i></a>
                            <a href="{{ route('human_resource.destroy', $row->user_id) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are You Sure ? ')"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
                          </td>
                          <td><?php echo $row['user_role'] ?></td>
                        </tr>
                        @endforeach


                      </tbody>
                    </table> <!-- /.table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection