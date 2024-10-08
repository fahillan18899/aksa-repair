@extends('layouts.user')

@section('content')
@section('title', 'Permintaan Barang')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-drawer"></i></div>
      <div class="header-title">
        <h1>Form</h1>
        <small>Form Permintaan Barang</small>
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
      <div class="col-sm-12 ">
        <div class="panel panel-default thumbnail">
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('permintaan_barang.store') }}" class="form-inner" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')
                  <div class="form-group row">
                    <label for="nama" class="col-xs-3 col-form-label">Nama</label>
                    <div class="col-xs-9">
                      <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek</label>
                    <div class="col-xs-9">
                      <input name="merek" type="text" class="form-control" id="merek" placeholder="Merek" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type</label>
                    <div class="col-xs-9">
                      <input name="type" type="text" class="form-control" id="type" placeholder="Type" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jumlah_masuk" class="col-xs-3 col-form-label">jumlah</label>
                    <div class="col-xs-9">
                      <input name="jumlah" class="form-control" type="number" placeholder="jumlah" id="jumlah" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="user_ruangan" class="col-xs-3 col-form-label">User Ruangan</label>
                    <div class="col-xs-9">
                    <select name="user_ruangan" class="form-control" id="user_ruangan">
                        <option> -- Pilih Gedung -- </option>
                        @forelse ($gedung as $gedung)
                        <option value="<?= $gedung['nama_gedung'] ?>">
                          <?= $gedung['nama_gedung'] ?>
                        </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">Tambah</button>
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

          <div class="panel-heading no-print">
            <h1>Tabel Permintaan Barang </h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-12 col-sm-12">

                <!--TABEL-->
                <table class="datatable table table-striped table-bordered" style="width:100%">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Type Pemakaian</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">User Ruangan</th>
                      <th scope="col">Tombol_Aksi_Table</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->merek }}</td>
                      <td>{{ $item->type }}</td>
                      <td>{{ $item->jumlah }}</td>
                      <td>{{ $item->user_ruangan }}</td>
                      <td>
                        <a href="{{ route('permintaan_barang.edit', $item->id) }}" class="btn btn-info  btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit "></i> </a>
                        <form action="{{ route('permintaan_barang.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                            <i class="fa fa-trash"></i>
                          </button>
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

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection