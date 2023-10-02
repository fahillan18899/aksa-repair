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
        <h1>Employee</h1>
        <small>Add Employee</small>
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
                <form action="{{ url('/dashboard/human_resource') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf

                  <div class="form-group row">
                    <label for="user_role" class="col-xs-3 col-form-label">User Role <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name='user_role' class="form-control" id="user_role">
                        <option value="1">Admin</option>
                        <option value="2">Doctor</option>
                        <option value="3">Accountant</option>
                        <option value="4">Laboratorist</option>
                        <option value="5">Nurse</option>
                        <option value="6">Pharmacist</option>
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
                      <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lastname" class="col-xs-3 col-form-label">Last Name <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-xs-3 col-form-label">Username <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="username" class="form-control" type="text" placeholder="Username" id="email">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-xs-3 col-form-label">Password <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="password" class="form-control" type="password" placeholder="Password" id="password">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3">Gender<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <div class="form-check">
                        <label class="radio-inline">
                          <input type="radio" name="sex" value="Male">Male </label>

                        <label class="radio-inline">
                          <input type="radio" name="sex" value="Female">Female </label>

                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="designation" class="col-xs-3 col-form-label">Designation <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="designation" type="text" class="form-control" id="designation" placeholder="Designation">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="address" class="col-xs-3 col-form-label">Address <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <textarea name="address" class="form-control" placeholder="Address" maxlength="140" rows="7" id="address"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-xs-3 col-form-label">Phone No </label>
                    <div class="col-xs-9">
                      <input name="phone" class="form-control" type="number" placeholder="Phone No" id="phone">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="mobile" class="col-xs-3 col-form-label">Mobile No <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="mobile" class="form-control" type="number" placeholder="Mobile No" id="mobile">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="career_title" class="col-xs-3 col-form-label">Career Title <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <textarea name="career_title" class="form-control" placeholder="Career Title" id="career_title" maxlength="255" rows="5"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="short_biography" class="col-xs-3 col-form-label">Short Biography</label>
                    <div class="col-xs-9">
                      <textarea name="short_biography" class="tinymce form-control" placeholder="Address" id="short_biography" rows="7"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="specialist" class="col-xs-3 col-form-label">Specialist</label>
                    <div class="col-xs-9">
                      <input type="text" name="specialist" class="form-control" placeholder="Specialist" id="specialist">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="degree" class="col-xs-3 col-form-label">Education/Degree</label>
                    <div class="col-xs-9">
                      <textarea name="degree" class="tinymce form-control" placeholder="Education/Degree" id="degree" maxlength="140" rows="7"></textarea>
                    </div>
                  </div>

                  <!-- if employee picture is already uploaded -->
                  <div class="form-group row">
                    <label for="picture" class="col-xs-3 col-form-label">Picture</label>
                    <div class="col-xs-9">
                      <input type="file" name="picture" id="picture">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button">Save</button>
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
</div> <!-- /.content-wrapper -->
@endsection