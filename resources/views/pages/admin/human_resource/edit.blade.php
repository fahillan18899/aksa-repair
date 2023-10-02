@extends('layouts.admin')

@section('content')
@section('title', 'Human Resource')<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Employee</h1>
        <small>Edit Employee</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->




    <!-- content -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('human_resource.update', $item->user_id) }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                  <div class="form-group row">
                    <label for="user_role" class="col-xs-3 col-form-label">User Role <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name='user_role' class="form-control" id="user_role">
                        <option value="1">Admin</option>
                        <option value="2">Doctor</option>
                        <option value="3">Accountant</option>
                        <option value="4">Laboratorist</option>
                        <option value="5">Nurse</option>
                        <option value="6" selected>Pharmacist</option>
                        <option value="7">Receptionist</option>
                        <option value="8">Representative</option>
                        <option value="9">Case Manager</option>
                        <option value="10">Duty Office</option>
                        <option value="11">test</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">First Name <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name" value="<?= $item['firstname'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lastname" class="col-xs-3 col-form-label">Last Name <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name" value="<?= $item['lastname'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-xs-3 col-form-label">Username <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="username" class="form-control" type="text" placeholder="Username" id="email" value="<?= $item['username'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-xs-3 col-form-label">Password <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="password" class="form-control" type="password" placeholder="Password" id="password">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3">Jenis Kelamin</label>
                    <div class="col-xs-9">
                      <div class="form-check">
                        <label class="radio-inline">
                          <input type="radio" name="sex" value="Male" checked="checked">Laki Laki </label>
                        <label class="radio-inline">
                          <input type="radio" name="sex" value="Female">Perempuan </label>
                      </div>
                    </div>
                  </div>

                  <!-- if employee picture is already uploaded -->

                  <div class="form-group row">
                    <label for="picture" class="col-xs-3 col-form-label">Foto</label>
                    <div class="col-xs-9">
                      <input type="file" name="picture" id="picture" value="">
                      <input type="hidden" name="old_picture" value="">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button" name="update_employee">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div> <!-- /.content -->
</div> <!-- /.content -->
@endsection