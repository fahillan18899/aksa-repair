 
 @extends('layouts.admin')

@section('content')
 <?php
  if (isset($_GET['hapus_user_ppm'])) {
    $sql_hapus = "DELETE FROM `users` WHERE id='{$_GET['hapus_user_ppm']}'";
    mysqli_query($db, $sql_hapus);

    $alert = "hapus";
  }

  if (isset($_POST['tambah_user'])) {
    $sql_tambah = "INSERT INTO users(`id`, `firstname`, `lastname`, `username`, `password`, `user_role`, `department_id`, `picture`, `date_of_birth`, `sex`, `blood_group`, `vacation`, `facebook`, `twitter`, `youtube`, `dribbble`, `behance`, `created_by`, `create_date`, `update_date`, `status`) VALUES ('{$_POST['id']}', '{$_POST['firstname']}', '{$_POST['lastname']}','{$_POST['username']}','{$_POST['password']}','{$_POST['user_role']}','{$_POST['department_id']}','{$_POST['picture']}','{$_POST['date_of_birth']}','{$_POST['sex']}','{$_POST['blood_group']}','{$_POST['vacation']}','{$_POST['facebook']}','{$_POST['twitter']}','{$_POST['youtube']}', '{$_POST['dribbble']}','{$_POST['behance']}','{$_POST['created_by']}','{$_POST['create_date']}','{$_POST['update_date']}','{$_POST['status']}')";
    mysqli_query($db, $sql_tambah);

    $alert = "tambah";
  }

                      if (isset($_POST['update_user_ppm'])) {
                        $sql_ubah = "UPDATE users SET 
            username='{$_POST['username']}', 
            user_role='{$_POST['user_role']}', 
            password='{$_POST['password']}'  WHERE id='{$_POST['id']}'";
                        mysqli_query($db, $sql_ubah);

                        $alert = "ubah";
                      }

                      $alert='';
  ?><!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">

     <div class="p-l-30 p-r-30">
       <div class="header-icon"><i class="pe-7s-world"></i></div>
       <div class="header-title">
         <h1>Menu Operator</h1>
         <small>Operator</small>
       </div>
     </div>
   </section>
   <!-- Main content -->
   <div class="content">
     <?php if ($alert == "tambah") { ?>
       <div class="alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5> Berhasil</h5>
         Data sudah ditambahkan.
       </div>
     <?php } else if ($alert == "hapus") { ?>
       <div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5> Berhasil</h5>
         Data sudah dihapus.
       </div>
     <?php } else if ($alert == "ubah") { ?>
       <div class="alert alert-warning alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5> Berhasil</h5>
         Data sudah diubah.
       </div>
     <?php } ?>
     <!-- demo mode enable alert -->
     <div id="demoModeEnable"></div>
     <!-- content -->
     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-default thumbnail">

           <div class="panel-heading no-print">
             <h1>Management Operator</h1>
           </div>

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-9 col-sm-12">
                 <form action="/?hal=operator&fun=index" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">



                   <input type="hidden" name="user_id" value="" />

                   <div class="form-group row">
                     <label for="username" class="col-xs-3 col-form-label">Username <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="username" type="text" class="form-control" id="username" placeholder="Username" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="password" class="col-xs-3 col-form-label">Password <i class="text-danger">*</i></label>
                     <div class="col-xs-9">
                       <input name="password" type="text" class="form-control" id="password" placeholder="Password" value="">
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="user_role" class="col-xs-3 col-form-label">Level user </label>
                     <div class="col-xs-9">
                       <select name="user_role" class="form-control" id="user_role">
                         <option value="9">User</option>
                         <option value="8">Teknisi</option>
                       </select>
                     </div>
                   </div>

                   <div class="form-group row">
                     <div class="col-sm-offset-3 col-sm-6">
                       <div class="ui buttons">
                         <button type="reset" class="ui button">Reset</button>
                         <div class="or"></div>
                         <button class="ui positive button" name="tambah_user">Save</button>
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

     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-default thumbnail">

           <div class="panel-body panel-form">
             <div class="row">
               <div class="col-md-12 col-sm-12">

                 <!--TABEL-->
                 <table class="datatable table table-striped table-bordered" style="width:100%">
                   <thead class="table-light">
                     <tr>
                       <th scope="col">No</th>
                       <th scope="col">Username</th>
                       <th scope="col">Level User</th>
                       <th scope="col">Tombol_Aksi_Table</th>
                     </tr>
                   </thead>
                   <tbody>
                   @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->username }}</td>
                      <td>{{ $item->level }}</td>
                      <td><a href="{{ url('dashboard', $item->id) }}" class="btn btn-info"> <i class="fa fa-pencil-alt"></i> </a>
                        <form action="{{ url('dashboard', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </button></td>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td class="text-center" colspan="7">Data Kosong</td>
                    </tr>
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

   </div> <!-- /.content -->
 </div> <!-- /.content-wrapper -->
 @endsection