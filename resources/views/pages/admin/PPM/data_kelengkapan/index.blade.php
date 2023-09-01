@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Menu Data Kelengkapan PPM</h1>
        <small>Form Pengisian</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->

    <!-- content -->
    <!-- content -->

    <!--Form Gedung-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Gedung</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/gedung') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf

                  <input type="hidden" name="kode_rs" value="RS0001" />

                  <div class="form-group row">
                    <label for="id_gedung" class="col-xs-3 col-form-label">id gedung <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_gedung" type="text" class="form-control" id="id_gedung" placeholder="id gedung" value="{{ $kodeGedung }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_gedung" class="col-xs-3 col-form-label">nama gedung <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_gedung" type="text" class="form-control" id="nama_gedung" placeholder="nama gedung" value="">
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
            <!--Tabel Gedung-->
            <table class="datatable table table-striped table-bordered">
              <thead class="table-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama_Gedung</th>
                  <th scope="col">Tombol_Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($gedung as $item)
                <tr>
                  <td scope="row">{{ $item->id_gedung }}</td>
                  <td scope="row">{{ $item->nama_gedung }}</td>
                  <td scope="row">
                    <a href="{{ route('gedung.edit',$item->id_gedung) }}"><button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg></button></a>

                    <form action="{{ route('gedung.destroy', $item->id_gedung) }}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
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
            <!--Tabel Gedung END-->
          </div>
        </div>
      </div>
    </div>
    <!-- /Form Gedung-->

    <!--Form Alat-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Alat</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/alat') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf



                  <input type="hidden" name="kode_rs" value="as" />

                  <div class="form-group row">
                    <label for="id_alat" class="col-xs-3 col-form-label">id alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_alat" type="text" class="form-control" id="id_alat" placeholder="id alat" value="{{ $kodeAlat }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">nama alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" type="text" class="form-control" id="nama_alat" placeholder="nama alat">
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
            <!--Tabel Gedung-->
            <table class="datatable table table-striped table-bordered">
              <thead class="table-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama_Alat</th>
                  <th scope="col">Tombol_Aksi</th>
                </tr>
              </thead>
              <tbody>

                @forelse ($alats as $item)
                <tr>
                  <td scope="row">{{ $item->id_alat }}</td>
                  <td scope="row">{{ $item->nama_alat }}</td>
                  <td scope="row">
                    <a href="{{ route('alat.edit',$item->id_alat) }}"><button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg></button></a>

                    <form action="{{ route('alat.destroy',$item->id_alat) }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
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
            <!--Tabel Gedung END-->
          </div>
        </div>
      </div>
    </div>
    <!-- /Form Alat-->

    <!--Form Teknisi-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Teknisi</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/teknisi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf



                  <input type="hidden" name="kode_rs" value="asd" />

                  <div class="form-group row">
                    <label for="id_teknisi" class="col-xs-3 col-form-label">id teknisi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_teknisi" type="text" class="form-control" id="id_teknisi" placeholder="id teknisi" value="{{ $kodeTeknisi }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_teknisi" class="col-xs-3 col-form-label">nama teknisi <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_teknisi" type="text" class="form-control" id="nama_teknisi" placeholder="nama teknisi">
                    </div>
                  </div>

                  <div class=" form-group row">
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
            <!--Tabel Gedung-->
            <table class="datatable table table-striped table-bordered">
              <thead class="table-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama_Teknisi</th>
                  <th scope="col">Tombol_Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($teknisi as $item)
                <tr>
                  <td scope="row">{{ $item->id_teknisi }}</td>
                  <td scope="row">{{ $item->nama_teknisi }}</td>
                  <td scope="row">
                    <a href="{{ route('teknisi.edit',$item->id_teknisi) }}"><button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg></button></a>

                    <form action="{{ route('teknisi.destroy',$item->id_teknisi) }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>


                  </td>
                </tr>
                @empty
                <tr>
                  <td class="text-center" colspan="7">Data Kosong</td>
                </tr>
                @endforelse
            </table>
            <!--Tabel Gedung END-->
          </div>
        </div>
      </div>
    </div>
    <!-- /Form Teknisi-->

    <!--Lokasi Alat-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Form Lokasi Alat</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/ruangan') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf



                  <input type="hidden" name="kode_rs" value="0" />

                  <div class="form-group row">
                    <label for="id_ruangan" class="col-xs-3 col-form-label">id ruangan <i class="text-danger">*</i></label>
                    <div class="col-xs-9" readonly>
                      <input name="id_ruangan" type="text" class="form-control" id="id_ruangan" placeholder="id ruangan" value="{{ $kodeLokasi }}" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ruangan_alat" class="col-xs-3 col-form-label">ruangan alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ruangan_alat" type="text" class="form-control" id="ruangan_alat" placeholder="ruangan alat">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ruangan" class="col-xs-3 col-form-label">Gedung </label>
                    <div class="col-xs-9">
                      <select name="ruangan" class="form-control" id="ruangan">
                        <option value="a">a</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kepala_ruangan" class="col-xs-3 col-form-label">kepala ruangan </label>
                    <div class="col-xs-9">
                      <select name="kepala_ruangan" class="form-control" id="kepala_ruangan">
                        <option value="a">a</option>
                      </select>
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
            <!--Tabel Gedung-->
            <table class="datatable table table-striped table-bordered">
              <thead class="table-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Ruangan</th>
                  <th scope="col">Gedung</th>
                  <th scope="col">Kepala Taknisi</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Tombol_Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($items as $item)
                <tr>
                  <td scope="row">{{ $item->id_ruangan }}</td>
                  <td scope="row">{{ $item->ruangan_alat }}</td>
                  <td scope="row">{{ $item->ruangan }}</td>
                  <td scope="row">{{ $item->kepala_ruangan }}</td>
                  <td scope="row">{{ $item->ruangan_alat}}, {{ $item->ruangan }}</td>
                  <td scope="row">
                    <a href="{{ route('ruangan.edit',$item->id_ruangan) }}"><button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg></button></a>

                    <form action="{{ route('ruangan.destroy',$item->id_ruangan) }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
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
            <!--Tabel Gedung END-->
          </div>
        </div>
      </div>
    </div>
    <!-- /Lokasi Alat-->

  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@endsection