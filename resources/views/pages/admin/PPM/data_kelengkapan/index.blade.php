@extends('layouts.admin')
@section('title', 'Data Kelengkapan')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-server"></i></div>
      <div class="header-title">
        <h1>Menu Data Kelengkapan PPM</h1>
        <small>Form Pengisian</small>
      </div>
    </div>
  </section>

  <div class="content">
    <div id="demoModeEnable"></div>

    <!-- Row Gedung -->
    <div class="row">
      <div class="col-sm-12">
        <!--Form Gedung-->
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-primary" onclick="hiddenTab('tab1')">
                <i class="fa fa-list"></i> Daftar Gedung
              </a>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/gedung') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf

                  <div class="form-group row">
                    <label for="id_gedung" class="col-xs-3 col-form-label">ID Gedung</label>
                    <div class="col-xs-9">
                      <input name="id_gedung" type="text" class="form-control" id="id_gedung" placeholder="id gedung" value="{{ $kodeGedung }}" readonly />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_gedung" class="col-xs-3 col-form-label">Nama Gedung
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_gedung" type="text" class="form-control" id="nama_gedung" placeholder="Nama Gedung " required />
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">
                          Reset
                        </button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">
                          Save
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Form Gedung end-->

        <!--Tabel Gedung-->
        <div id="tab1" style="display: none;">
          <div class="panel panel-default thumbnail">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <table class="datatable table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Gedung</th>
                        <th scope="col">Tombol Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($gedung as $item)
                      <tr>
                        <td scope="row">{{ $item->id_gedung }}</td>
                        <td scope="row">
                          {{ $item->nama_gedung }}
                        </td>
                        <td scope="row" style=" display: flex; flex-direction: row; ">
                          <a href="{{ route('gedung.edit', $item->id_gedung) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                          <form action="{{ route('gedung.destroy', $item->id_gedung) }}" method="POST" style="display: inline">
                            @csrf @method('DELETE')
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
                  <!--Tabel Gedung END-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Tabel Gedung end-->
      </div>
    </div>
    <!-- Row Gedung end-->

    <!-- Row Alat -->
    @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs !== "RS0020")
    <div class="row">
      <div class="col-sm-12">
        <!-- Form Alat -->
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-primary" onclick="hiddenTab('tab2')">
                <i class="fa fa-list"></i> Daftar Alat
              </a>
            </div>
          </div>
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/alat') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <input type="hidden" name="kode_rs" />

                  <div class="form-group row">
                    <label for="id_alat" class="col-xs-3 col-form-label">ID Alat
                    </label>
                    <div class="col-xs-9">
                      <input name="id_alat" type="text" class="form-control" id="id_alat" placeholder="id alat" value="{{ $kodeAlat }}" readonly />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_alat" class="col-xs-3 col-form-label">Nama Alat
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_alat" type="text" class="form-control" id="nama_alat" placeholder="Nama Alat" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">
                          Reset
                        </button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">
                          Save
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
        <!-- Form Alat end-->

        <!--Tabel Alat-->
        <div id="tab2" style="display: none">
          <div class="panel panel-default thumbnail">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <table class="datatable table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama_Alat</th>
                        <th scope="col">Tombol_Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($alat as $item)
                      <tr>
                        <td scope="row">{{ $item->id_alat }}</td>
                        <td scope="row">{{ $item->nama_alat }}</td>
                        <td scope="row">
                          <a href="{{ route('alat.edit', $item->id_alat) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                          <form action="{{ route('alat.destroy', $item->id_alat) }}" method="POST" style="display: inline">
                            @csrf @method('delete')
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
                </div>
              </div>
            </div>
            <!--Tabel Alat END-->
          </div>
        </div>
        <!--Tabel Alat end-->
      </div>
    </div>
    @endif
    <!-- Row Alat end-->

    <!-- Row Nomklatur -->
    @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0020")
    <div class="row">
      <div class="col-sm-12">
        <!-- Form Nomklatur -->
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-primary" onclick="hiddenTab('tab5')">
                <i class="fa fa-list"></i> Daftar Alat Nomklatur
              </a>
            </div>
          </div>
          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ route('nomklatur.store') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <input type="hidden" name="kode_rs" />

                  <div class="form-group row">
                    <label for="id_nomklatur" class="col-xs-3 col-form-label">ID Alat
                    </label>
                    <div class="col-xs-9">
                      <input name="id_nomklatur" type="text" class="form-control" id="id_nomklatur" placeholder="id alat" value="{{ $kodeAlat2 }}" readonly />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_nomklatur" class="col-xs-3 col-form-label">Nama Alat
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_nomklatur" type="text" class="form-control" id="nama_nomklatur" placeholder="Nama Alat" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kode_nomklatur" class="col-xs-3 col-form-label">Kode Nomklatur
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="kode_nomklatur" type="text" class="form-control" id="kode_nomklatur" placeholder="Nama Alat" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">
                          Reset
                        </button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">
                          Save
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
        <!-- Form Nonklatur end-->

        <!--Tabel Nomklatur-->
        <div id="tab5" style="display: none">
          <div class="panel panel-default thumbnail">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <table class="datatable table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Alat</th>
                        <th scope="col">Nama Alat</th>
                        <th scope="col">Kode Nomklatur</th>
                        <th scope="col">Tombol Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($nomklatur as $index => $item)
                      <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td scope="row">{{ $item->id_nomklatur }}</td>
                        <td scope="row">{{ $item->nama_nomklatur }}</td>
                        <td scope="row">{{ $item->kode_nomklatur }}</td>
                        <td scope="row">
                          <a href="{{ route('nomklatur.edit', $item ->id)  }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                          <form action="{{ route('nomklatur.destroy', $item ->id)  }}" method="POST" style="display: inline">
                            @csrf @method('delete')
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
                </div>
              </div>
            </div>
            <!--Tabel Nomklatur END-->
          </div>
        </div>
        <!--Tabel Nomklatur end-->
      </div>
    </div>
    @endif
    <!-- Row Nomklatur end-->

    <!--Row Teknisi -->
    <div class="row">
      <div class="col-sm-12">
        <!-- Form Teknisi -->
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-primary" onclick="hiddenTab('tab3')">
                <i class="fa fa-list"></i> Daftar Teknisi
              </a>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/teknisi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf

                  <input type="hidden" name="kode_rs" value="asd" />

                  <div class="form-group row">
                    <label for="id_teknisi" class="col-xs-3 col-form-label">ID teknisi</label>
                    <div class="col-xs-9">
                      <input name="id_teknisi" type="text" class="form-control" id="id_teknisi" placeholder="id teknisi" value="{{ $kodeTeknisi }}" readonly />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_teknisi" class="col-xs-3 col-form-label">Nama Teknisi
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nama_teknisi" type="text" class="form-control" id="nama_teknisi" placeholder="Nama Teknisi" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">
                          Reset
                        </button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">
                          Save
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>

          </div>
        </div>
        <!-- Form Teknisi end-->

        <!--Tabel Teknisi-->
        <div id="tab3" style="display: none">
          <div class="panel panel-default thumbnail">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <table class="datatable table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Teknisi</th>
                        <th scope="col">Tombol Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($teknisi as $item)
                      <tr>
                        <td scope="row">{{ $item->id_teknisi }}</td>
                        <td scope="row">
                          {{ $item->nama_teknisi }}
                        </td>
                        <td scope="row">
                          <a href="{{ route('teknisi.edit', $item->id_teknisi) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                          <form action="{{ route('teknisi.destroy', $item->id_teknisi) }}" method="POST" style="display: inline">
                            @csrf @method('delete')
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
                </div>
              </div>
            </div>
            <!--Tabel Gedung END-->
          </div>
        </div>
        <!--Tabel Teknisi end-->
      </div>
    </div>
    <!-- Row Teknisi end-->

    <!--Row Lokasi Alat-->
    <div class="row">
      <div class="col-sm-12">
        <!--Form Lokasi Alat-->
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print">
            <div class="btn-group">
              <a class="btn btn-primary" onclick="hiddenTab('tab4')">
                <i class="fa fa-list"></i> Daftar Ruangan
              </a>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-9 col-sm-12">
                <form action="{{ url('/dashboard/ppm/ruangan') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="form-group row">
                    <label for="id_ruangan" class="col-xs-3 col-form-label">ID Ruangan
                    </label>
                    <div class="col-xs-9" readonly>
                      <input name="id_ruangan" type="text" class="form-control" id="id_ruangan" placeholder="id ruangan" value="{{ $kodeLokasi }}" readonly />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="gedung" class="col-xs-3 col-form-label">Gedung
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="ruangan" class="form-control" id="gedung">
                        <option>-- Pilih Gedung --</option>
                        @forelse ($gedung as $gedung)
                        <option value="<?= $gedung['nama_gedung'] ?>">
                          <?= $gedung['nama_gedung'] ?>
                        </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ruangan_alat" class="col-xs-3 col-form-label">Ruangan Alat
                      <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="ruangan_alat" type="text" class="form-control" id="ruangan_alat" placeholder="Ruangan Alat" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kepala_ruangan" class="col-xs-3 col-form-label">Kepala Ruangan<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="kepala_ruangan" type="text" class="form-control" id="kepala_ruangan" placeholder="Kepala Ruangan" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">
                          Reset
                        </button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">
                          Save
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
        <!--Form Lokasi Alat end-->

        <!--Tabel Lokasi Alat-->
        <div id="tab4" style="display: none ">
          <div class="panel panel-default thumbnail">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <table class="datatable table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Ruangan</th>
                        <th scope="col">Gedung</th>
                        <th scope="col">Kepala Ruangan</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tombol Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($lokasi as $item)
                      <tr>
                        <td scope="row">{{ $item->id_ruangan }}</td>
                        <td scope="row">
                          {{ $item->ruangan_alat }}
                        </td>
                        <td scope="row">{{ $item->ruangan }}</td>
                        <td scope="row">
                          {{ $item->kepala_ruangan }}
                        </td>
                        <td scope="row">
                          {{ $item->ruangan_alat }},
                          {{ $item->ruangan }}
                        </td>
                        <td scope="row">
                          <a href="{{ route('ruangan.edit', $item->id_ruangan) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                          <form action="{{ route('ruangan.destroy', $item->id_ruangan) }}" method="POST" style="display: inline">
                            @csrf @method('delete')
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
                </div>
              </div>
            </div>
            <!--Tabel Gedung END-->
          </div>
        </div>
        <!--Tabel Lokasi Alat end-->
      </div>
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div>
    <!-- Row Lokasi Alat end-->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function hiddenTab(tabId) {
    var tab = document.getElementById(tabId);
    tab.style.display = (tab.style.display === "none") ? "block" : "none";
  }
</script>

<script>
  $(document).ready(function() {
    $('select[name="ruangan"]').on('change', function() {
      var lokasi = document.getElementById('gedung').value;
      document.getElementById('ruangan_alat').value = lokasi
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    @if(session('success'))
    Swal.fire({
      icon: 'success',
      title: 'Sukses!',
      text: '{{ session("success") }}',
      showConfirmButton: false,
      timer: 2000
    });
    @endif
  });
</script>
@endpush