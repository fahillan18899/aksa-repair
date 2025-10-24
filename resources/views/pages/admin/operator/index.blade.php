@extends('layouts.admin')

@section('content')
@section('title', 'Repair')
<style>
  input[readonly] {
    cursor: not-allowed;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-wrench"></i></div>
      <div class="header-title">
        <h1>MENU FORM OPERATOR</h1>
        <small>Form operator</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <!--Form Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="form1">
            <h1>Form Operator</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('operator.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <label for="username" class="col-xs-3 col-form-label">Username<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="username" id="username" type="text" class="form-control" placeholder="isi dengan nama user" required >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-xs-3 form-label">Password <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="password" id="password" class="form-control" type="text" placeholder="buat password yang gampang di ingat" required >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="rs_divisi" class="col-xs-3 form-label">Kode Divisi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="rs_divisi" id="rs_divisi" class="form-control" type="text" placeholder="kode divisi minta dari admin" required >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="user_role" class="col-xs-3 form-label">Divisi</label>
                    <div class="col-xs-9">
                      <select name="user_role" id="user_role" class="form-control">
                        <option>Pilih Divisi</option>
                        <option value="admin">Admin</option>
                        <option value="marketing">Marketing</option>
                        <option value="teknisi">Teknisi</option>
                        <option value="akuntan">Akuntan</option>
                      </select>
                    </div>
                  </div> 
                  <input name="divisi" type="hidden" value="-" >
                  <input name="rs" type="hidden" value="aksa">
                  <input name="kode_rs" type="hidden" value="RS0000">

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
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
    <!--Form Perbaikan end-->
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Daftar User Aksa Repair</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <tr>
                        <th>Username</th>
                        <th>Divisi</th>
                        <th>Kode Divis</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse($item as $items)
                      <tr>
                        <td>{{ $items->username }}</td>
                        <td>{{ $items->user_role }}</td>
                        <td>{{ $items->rs_divisi }}</td>
                        <td>
                          <a href="{{ route('operator.edit', $items->user_id) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          <form action="{{ route('operator.destroy', $items->user_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    @empty
                    @endforelse
                    </tbody>
                  </table>
                  <!--TABEL-->
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tabel Perbaikan-->
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection