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
                  @csrf
                  @method('PUT')

                  <div class="form-group row">
                    <label for="user_role" class="col-xs-3 col-form-label">User Role <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name='user_role' class="form-control" id="user_role">
                        <option value="admin">Admin</option>
                        <option value="dokter">Dokter</option>
                        <option value="akuntan">Akuntan</option>
                        <option value="laboratoris">Laboratoris</option>
                        <option value="perawat">Perawat</option>
                        <option value="apoteker">Apoteker</option>
                        <option value="resepsionis">Resepsionis</option>
                        <option value="wakil_manajer">Wakil Manajer</option>
                        <option value="kasus_kantor">Kasus Kantor</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-xs-3 col-form-label">Username <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="username" class="form-control" type="text" placeholder="Username" id="email" value="<?= $item['username'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">Nama Depan <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name" value="<?= $item['firstname'] ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="lastname" class="col-xs-3 col-form-label">Nama Belakang <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name" value="<?= $item['lastname'] ?>">
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
</div> <!-- /.content -->
@endsection