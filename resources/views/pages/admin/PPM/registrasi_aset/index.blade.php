@extends('layouts.admin')

@section('content')
@section('title', 'Registrasi')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-check"></i></div>
      <div class="header-title">
        <h1>Registrasi</h1>
        <small>Registrasi Alat</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <!-- content -->

    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print d-inline col-sm-12 col-md-12">
            <div class="row">
              <div class="col-md-7">
                <h1>Form Registrasi Alat</h1>
              </div>
              <div class="col-md-2">
                <a href="{{ url('/dashboard/export') }}" class="btn btn-info"> Template Import</a>
              </div>
              <div class="col-md-3">
                <form action="{{ url('/dashboard/import') }}" method="post" enctype="multipart/form-data" style="display: flex;">
                  @csrf
                  <input class="form-control" type="file" name="file">
                  <button type="submit" class="btn-primary btn">Import</button>
                </form>
              </div>
            </div>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class=" col-sm-12" style="padding-top: 10px;">
                <!-- Tombol Toggle hidden-->
                <button type="button" class="btn btn-primary mb-3" id="toggleForm" data-toggle="tooltip" data-placement="top" title="Form Detail"><i class="fa fa-list" aria-hidden="true"></i></button>
                <form action="{{ url('dashboard/ppm/registrasi') }}" class="form-inner" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                  @csrf
                  @method('post')

                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">ID Aset<i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="id_aset" type="text" class="form-control" id="firstname1" placeholder="Contoh: RSX1" onkeyup="keyupfill()">
                      @if ($errors->has('firstname'))
                      <span class="text-danger">{{ $errors->first('firstname') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="firstname" class="col-xs-3 col-form-label">QR Qode <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="qr_code" type="text" class="form-control" id="firstname2" placeholder="Terisi Otomatis" value="" style="cursor: not-allowed;" readonly>
                      @if ($errors->has('firstname'))
                      <span class="text-danger">{{ $errors->first('firstname') }}</span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jenis alat" class="col-xs-3 col-form-label">Jenis Alat <i class="text-danger">*</i><a href="{{ url('/dashboard/ppm/tambah_jenis_alat') }}" class="btn btn-sm btn-outline btn-success" style="margin-left:10px;" data-toggle="tooltip" data-placement="top" title="Tambah Jenis Alat"><i class="fa fa-plus-square" aria-hidden="true"></i></a></label>
                    <div class="col-xs-9">
                      <select name="jenis_alat" class="form-control" id="Jenis_Alat">
                        <option>Pilih Jenis Alat</option>
                        @foreach($jenis as $jenis)
                        <option value="<?= $jenis['nama_jenis_alat']; ?>"><?= $jenis['nama_jenis_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama alat" class="col-xs-3 col-form-label">Nama Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <select name="nama_alat" class="form-control" id="Nama_Alat">
                        @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs !== "RS0020")
                        <option>Pilih Alat</option>
                        @foreach($alats as $alat)
                        <option value="<?= $alat['nama_alat']; ?>"><?= $alat['nama_alat']; ?></option>
                        @endforeach
                        @endif
                        @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0020")
                        <option>Pilih Alat</option>
                        @foreach($nomklatur as $nomklatur)
                        <option value="<?= $nomklatur['nama_nomklatur']; ?>"><?= $nomklatur['nama_nomklatur']; ?></option>
                        @endforeach
                        @endif
                      </select>
                    </div>
                  </div>

                  @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0020")
                  <div class="form-group row">
                    <label for="nomklatur" class="col-xs-3 col-form-label">Kode Alat <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="nomklatur" class="form-control" type="text" placeholder="Nomklatur" id="nomklatur" readonly>
                    </div>
                  </div>
                  @endif

                  <div class="form-group row">
                    <label for="merek" class="col-xs-3 col-form-label">Merek <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="merek" class="form-control" type="text" placeholder="Isi sesuai data alat" id="Merek">
                      @if ($errors->has('merek'))
                      <span class="text-danger">{{ $errors->first('merek') }}</span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-xs-3 col-form-label">Type <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="type" class="form-control" type="text" placeholder="Isi sesuai data alat" id="Type">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Serial_Number" class="col-xs-3 col-form-label">Serial Number <i class="text-danger">*</i></label>
                    <div class="col-xs-9">
                      <input name="serial_number" class="form-control" type="text" placeholder="Isi sesuai data alat" id="Serial_Number">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Lokasi_Alat" class="col-xs-3 col-form-label">Lokasi Alat<i class="text-danger">*</i> </label>
                    <div class="col-xs-9">
                      <select name="lokasi_alat" class="form-control" id="Lokasi_Alat">
                        <option>Pilih Lokasi Alat</option>
                        @foreach($ruangans as $ruangan)
                        <option value="<?= $ruangan['lokasi_alat']; ?>"><?= $ruangan['lokasi_alat']; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <!-- Form (Awalnya Hidden) -->
                  <div id="formContainer" style="display: none;">
                    <div class="form-group row">
                      <label for="gambar" class="col-xs-3 col-form-label">Gambar</label>
                      <div class="col-xs-9">
                        <input name="gambar" class="form-control" type="file" id="gambar">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="Tanggal_Kalibrasi" class="col-xs-3 col-form-label">Tanggal Kalibrasi</label>
                      <div class="col-xs-9">
                        <input name="tanggal_kalibrasi" type="date" class="form-control" id="tanggal_kalibrasi">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="jadwal_pemeliharaan" class="col-xs-3 col-form-label">Jadwal Pemeliharaan</label>
                      <div class="col-xs-9">
                        <input name="jadwal_pemeliharaan" type="date" class="form-control" id="jadwal_pemeliharaan">
                      </div>
                    </div>

                    <!-- Distributor Dropdown -->
                    <div class="form-group row">
                      <label for="Distributor" class="col-xs-3 col-form-label">
                        Distributor
                        <a href="{{ url('/dashboard/ppm/tambah_distributor') }}" class="btn btn-sm btn-success btn-outline" style="margin-left:10px">
                          <i class="fa fa-plus-square" aria-hidden="true"></i>
                        </a>
                      </label>
                      <div class="col-xs-9">
                        <select name="distributor" class="form-control" id="distributor" data-url="{{ url('/dashboard/ppm/getDistributor') }}">
                          <option>Pilih Distributor</option>
                          @foreach($distribut as $item)
                          <option value="{{ $item->nama_distributor_p }}">{{ $item->nama_distributor_p }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    @php
                    $fields = [
                    'alamat_distributor' => 'Alamat Distributor',
                    'tlp_distributor' => 'Telepon Distributor',
                    'email_distributor' => 'Email Distributor',
                    'teknisi_distributor' => 'Teknisi Distributor',
                    'tlp_t_distributor' => 'Telepon Teknisi Distributor'
                    ];
                    @endphp

                    @foreach($fields as $name => $label)
                    <div class="form-group row">
                      <label for="{{ $name }}" class="col-xs-3 col-form-label">{{ $label }}</label>
                      <div class="col-xs-9">
                        <input name="{{ $name }}" type="text" class="form-control" id="{{ $name }}"
                          placeholder="Terisi Otomatis" style="cursor: not-allowed;" readonly>
                      </div>
                    </div>
                    @endforeach

                    @php
                    $fields2 = [
                    'no_sertifikat_kalibrasi' => 'No Sertifikat Kalibrasi',
                    'teknisi_ppm' => 'Teknisi PPM',
                    'sumber_dana' => 'Sumber Dana',
                    'no_inventaris_1' => 'No Inventaris 1',
                    'no_inventaris_2' => 'No Inventaris 2',
                    ];
                    @endphp

                    @foreach($fields2 as $name2 => $label2)
                    <div class="form-group row">
                      <label for="{{ $name2 }}" class="col-xs-3 col-form-label">{{ $label2 }}</label>
                      <div class="col-xs-9">
                        <input name="{{ $name2 }}" class="form-control" id="{{ $name2 }}" type="text" placeholder="Isi Sesuai Data Alat">
                      </div>
                    </div>
                    @endforeach

                    @php
                    $fields3 = [
                    'harga_perolehan' => 'Harga Perolehan',
                    'tahun_perolehan' => 'Tahun Perolehan',
                      ]
                    @endphp

                    @foreach($fields3 as $name3 => $label3)
                    <div class="form-group row">
                      <label for="{{ $name3 }}" class="col-xs-3 col-form-label">{{ $label3 }}</label>
                      <div class="col-xs-9">
                        <input name="{{ $name3 }}" class="form-control" id="{{ $name3 }}" type="text" placeholder="Isi dengan angka">
                      </div>
                    </div>
                    @endforeach

                    <div class="form-group row">
                      <label for="akl" class="col-xs-3 col-form-label">AKL</label>
                      <div class="col-xs-9">
                        <input type="radio" onclick="clickAKL()">
                        <input name="akl" type="text" class="form-control" id="AKL" placeholder="Pilih salah satu AKL / AKD" disabled>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="akd" class="col-xs-3 col-form-label">AKD</label>
                      <div class="col-xs-9">
                        <input type="radio" onclick="clickAKD()">
                        <input name="akd" type="text" class="form-control" id="AKD" placeholder="Pilih salah satu AKL / AKD" disabled>
                      </div>
                    </div>
                  </div> <!-- END Form Container -->


                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <div class="ui buttons">
                        <button type="reset" class="ui button">Reset</button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">Save</button>
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
            <table id="table-register" class="datatable table table-striped table-bordered" style="width:100%">
              <thead class="table-light">
                <th>Id Aset</th>
                <th>Jenis</th>
                @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0020")
                <th>Nomklatur</th>
                @endif
                <th>Nama</th>
                <th>Merek</th>
                <th class="none">Type</th>
                <th class="none">Gambar</th>
                <th class="none">Serial Number</th>
                <th class="">Ruangan</th>
                <th class="none">Tanggal_Kalibrasi</th>
                <th class="none">Distributor</th>
                <th class="none">Alamat_Distributor</th>
                <th class="none">TLP_Distributor</th>
                <th class="none">Email_Distributor</th>
                <th class="none">Teknisi_Distributor</th>
                <th class="none">TLP_T_Distributor</th>
                <th class="none">No_Sertifikat_Kalibrasi</th>
                <th class="none">Teknisi PPM</th>
                <th class="none">Harga Perolehan</th>
                <th class="none">Sumber_Dana</th>
                <th class="none">Tahun_Perolehan</th>
                <th class="none">AKL</th>
                <th class="none">AKD</th>
                <th class="none">No_Inventaris </th>
                <th class="none">umur_alat</th>
                <th class="none">Jadwal</th>
                <th>Tombol_Aksi_Tabel</th>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--TABEL-->
    <script type="text/javascript">
      $(document).ready(function() {
        let columns = [{
            data: '0',
            name: 'Id_Aset'
          },
          {
            data: '1',
            name: 'Jenis_Alat'
          },

          @json(Auth::user() -> user_role == 'admin' && Auth::user() -> kode_rs == "RS0020") ? {
            data: '2',
            name: 'Nomklatur'
          } : null,

          {
            data: '3',
            name: 'Nama_Alat'
          },
          {
            data: '4',
            name: 'Merek'
          },
          {
            data: '5',
            name: 'Type'
          },
          {
            data: '6',
            name: 'Gambar',
            render: function(data) {
              return `<img src="/storage/${data}" width="100" alt='No Image'>`;
            }
          },
          {
            data: '7',
            name: 'Serial_Number'
          },
          {
            data: '8',
            name: 'lokasi_alat'
          },
          {
            data: '9',
            name: 'Tanggal_Kalibrasi'
          },
          {
            data: '10',
            name: 'Distributor'
          },
          {
            data: '11',
            name: 'Alamat_Distributor'
          },
          {
            data: '12',
            name: 'TLP_Distributor'
          },
          {
            data: '13',
            name: 'Email_Distributor'
          },
          {
            data: '14',
            name: 'Teknisi_Distributor'
          },
          {
            data: '15',
            name: 'TLP_T_Distributor'
          },
          {
            data: '16',
            name: 'No_Sertifikat_Kalibrasi'
          },
          {
            data: '17',
            name: 'teknisi_ppm'
          },
          {
            data: '18',
            name: 'harga_perolehan'
          },
          {
            data: '19',
            name: 'Sumber_Dana'
          },
          {
            data: '20',
            name: 'Tahun_Perolehan'
          },
          {
            data: '21',
            name: 'AKL'
          },
          {
            data: '22',
            name: 'AKD'
          },
          {
            data: '23',
            name: 'no_inventaris_1'
          },
          {
            data: '24',
            name: 'umur_alat'
          },
          {
            data: '25',
            name: 'jadwal_pemeliharaan'
          },
          {
            data: '0',
            render: function(data) {
              return `
                <a href="/dashboard/ppm/data_inventaris/cetak_aset/${data}" target="_blank">
                  <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></button>
                </a>
                <a href="/dashboard/ppm/registrasi/${data}/edit" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                  <i class="fa fa-edit"></i>
                </a>
                <form action="/dashboard/ppm/registrasi/${data}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
              `;
            }
          }
        ].filter(item => item !== null); // 🔥 Hapus elemen `null` agar tidak error

        $('#table-register').DataTable({
          processing: true,
          responsive: true,
          serverSide: true,
          ajax: '{{ route('dataAset') }}',
          columns: columns
        });
      });
    </script>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#distributor').on('change', function() {
      let distributorName = $(this).val();
      let url = $(this).data('url') + '/' + distributorName;
      if (distributorName) {
        $.getJSON(url, function(data) {
          if (data.length) {
            let distributor = data[0]; // Ambil data pertama
            $('#alamat_distributor').val(distributor.alamat_distributor_p || '');
            $('#tlp_distributor').val(distributor.telphone_distributor_p || '');
            $('#email_distributor').val(distributor.email_distributor_p || '');
            $('#teknisi_distributor').val(distributor.teknisi_distributor_p || '');
            $('#tlp_t_distributor').val(distributor.telphone_teknisi_dis_p || '');
          }
        });
      } else {
        $('input').val('');
      }
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('select[name="nama_alat"]').on('change', function() {
      var stateID = $(this).val();
      console.log(stateID);
      if (stateID) {
        $.ajax({
          url: '/dashboard/ppm/registrasi-aset/getNomklatur/' + stateID,
          type: "GET",
          dataType: "json",
          success: function(data) {
            console.log(data);
            $.each(data, function(key, value) {
              $('input[id="nomklatur"]').val(value.kode_nomklatur);
            });
          }
        });
      } else {
        $('input[id="nomklatur"]').empty();
      }
    })
  });
</script>

<script type="text/javascript">
  let inputAKL = document.querySelector('#AKL');
  let inputAKD = document.querySelector('#AKD');

  function clickAKL() {
    inputAKL.disabled = false;
  }

  function clickAKD() {
    inputAKD.disabled = false;
  }
</script>

<script>
  function keyupfill() {
    var fill = document.getElementById('firstname1').value;
    document.getElementById('firstname2').value = fill;
  }
</script>

<script>
  $(document).ready(function() {
    $("#toggleForm").click(function() {
      $("#formContainer").fadeToggle(300); // Animasi muncul/hilang
      let buttonText = $("#formContainer").is(":visible");
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    const hargaInput = document.getElementById("harga_perolehan");

    hargaInput.addEventListener("input", function(e) {
        let value = e.target.value.replace(/[^0-9]/g, ""); // Hanya angka
        if (value) {
            e.target.value = formatRupiah(value);
        } else {
            e.target.value = "";
        }
    });

    function formatRupiah(angka) {
        return "Rp " + angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
});
</script>
@endpush
@endsection