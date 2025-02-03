@extends('layouts.admin')

@section('content')
@section('title', 'Lembar Kerja Inspeksi')

<!-- Content Wrapper. Contains page content -->
 <style>
    input.form-check-input {
    width: 30px;
    height: 30px;
}
 </style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-cogs"></i></div>
      <div class="header-title">
        <h1>LK inspeksi</h1>
        <small>Form LK inspeksi</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print" id="formp1">
            <h1>Form LK inspeksi</h1>
          </div>

            <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-md-12">
                    <form action="{{ url('/dashboard/ppm/lk_inspeksi') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      @csrf
                      @method('POST')

                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN -->
                        <div class="form-group row">
                            <label for="bulan_tahun" class="col-sm-2 col-form-label">Bulan / Tahun :</label>
                            <div class="col-sm-2">
                              <input name="bulan_tahun" type="text" class="form-control" id="bulan_tahun" placeholder="Bulan / Tahun" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="lokasi_alat" class="col-xs-3 col-form-label">Lokasi Alat <i class="text-danger">*</i></label>
                          <div class="col-xs-9">
                            <select name="lokasi_alat" class="form-control" id="lokasi_alat">
                              <option value="">Pilih Lokasi Alat</option>
                              @foreach ($states as $key => $value)
                              <option value="{{ $value }}">{{ $value }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <table class="table table-hover table-bordered"  style="width:100%">
                          <thead>
                          <tr>
                            <td rowspan="2" align="center"><b>No</b></td>
                            <td style="width: 20%;" rowspan="2" align="center"><b>Nama Alat</b></td>
                            <td style="width: 20%;" rowspan="2" align="center"><b>No Seri</b></td>
                            <td style="width: 10%;" align="center"><b>Pemeriksaan Fisik</b></td>
                            <td style="width: 10%;" align="center"><b>Kelengkapan Alat</b></td>
                            <td style="width: 10%;" align="center"><b>Fungsi Alat</b></td>
                            <td rowspan="2" align="center"><b>Catatan</b></td>
                          </tr>
                          <tr>
                            <td align="center"><b>Baik / Rusak</b></td>
                            <td align="center"><b>Lengkap / Kurang Lengkap</b></td>
                            <td align="center"><b>Baik / Rusak</b></td>
                          </tr>
                          </thead>
                          <tbody id="optionA">
                            <!---->
                            <tr>
                              <td>1</td>
                              <td align="center">
                                <input name="kode_rs" id="kode_rs" type="hidden" class="form-control" value="{{ Auth::user()->kode_rs }}"></input>
                                <select name="nama_alat_1" id="nama_alat" type="text" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_1" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                               <td align="center">
                                <input name="periksa_fisik_1" class="form-check-input" type="checkbox" value="Ya" checked id="">
                              <td align="center">
                                <input name="lengkap_alat_1" class="form-check-input" type="checkbox" value="Ya" checked id="">
                              <td align="center">
                                <input name="fungsi_alat_1" class="form-check-input" type="checkbox" value="Ya" checked id="">
                              <td align="center"><input name="catatan_1" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>2</td>
                              <td align="center">
                                <select name="nama_alat_2" id="nama_alat" type="text" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_2" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_2" class="form-check-input" type="checkbox" value="Ya" checked id="">
                              <td align="center">
                                <input name="lengkap_alat_2" class="form-check-input" type="checkbox" value="Ya" checked id="">
                              <td align="center">
                                <input name="fungsi_alat_2" class="form-check-input" type="checkbox" value="Ya" checked id="">
                              <td align="center"><input name="catatan_2" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>3</td>
                              <td align="center">
                                <select name="nama_alat_3" id="nama_alat" type="text" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_3" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_3" class="form-check-input" type="checkbox" value="Ya" checked id="">
                              <td align="center">
                                <input name="lengkap_alat_3" class="form-check-input" type="checkbox" value="Ya" checked id="">
                              <td align="center">
                                <input name="fungsi_alat_3" class="form-check-input" type="checkbox" value="Ya" checked id="">
                              <td align="center"><input name="catatan_3" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>4</td>
                              <td align="center">
                                <select name="nama_alat_4" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_4" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_4" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_4" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_4" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_4" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>5</td>
                              <td align="center">
                                <select name="nama_alat_5" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_5" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_5" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_5" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_5" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_5" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>6</td>
                              <td align="center">
                                <select name="nama_alat_6" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_6" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_6" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_6" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_6" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_6" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>7</td>
                              <td align="center">
                                <select name="nama_alat_7" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_7" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_7" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_7" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_7" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_7" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>8</td>
                              <td align="center">
                                <select name="nama_alat_8" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_8" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_8" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_8" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_8" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_8" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>9</td>
                              <td align="center">
                                <select name="nama_alat_9" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_9" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_9" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_9" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_9" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_9" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>10</td>
                              <td align="center">
                                <select name="nama_alat_10" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_10" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_10" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_10" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_10" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_10" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>11</td>
                              <td align="center">
                                <select name="nama_alat_11" id="nama_alat" class="form-control">\</select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_11" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_11" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_11" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_11" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_11" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>12</td>
                              <td align="center">
                                <select name="nama_alat_12" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_12" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_12" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_12" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_12" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_12" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>13</td>
                              <td align="center">
                                <select name="nama_alat_13" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_13" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_13" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_13" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_13" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_13" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>14</td>
                              <td align="center">
                                <select name="nama_alat_14" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_14" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_14" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_14" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_14" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_14" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                            <!---->
                            <tr>
                              <td>15</td>
                              <td align="center">
                                <select name="nama_alat_15" id="nama_alat" class="form-control"></select>
                              </td>
                              <td align="center">
                                <select name="nomer_seri_15" id="nomer_seri" class="form-control form-control-sm"></select>
                              </td>
                              <td align="center">
                                <input name="periksa_fisik_15" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="lengkap_alat_15" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center">
                                <input name="fungsi_alat_15" class="form-check-input" type="checkbox" value="Ya" checked id=""></td>
                              <td align="center"><input name="catatan_15" class="form-control form-control-sm" type="text"></td>
                            </tr>
                            <!---->
                          </tbody>
                        </table>
                      <!-- ALAT UKUR DAN BAHAN AYANG DIGUNAKAN N-->
                      <div class="form-group row">
                        <div class="col-sm-offset-3 col-sm-6">
                          <div class="ui buttons">
                            <button type="reset" class="ui button">Reset</button>
                            <div class="or"></div>
                            <button class="ui positive button" type="submit">Save</button>
                            <div class="or"></div>
                            <a class="btn btn-primary" href="/dashboard/ppm/lk_inspeksi/data"> View Data </a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </div> <!-- /.content -->
</div> <!-- /.content-wrapper -->
@push('addon-script')
<script type="text/javascript">
  $(document).ready(function() {
    $('select[id="lokasi_alat"]').on('change', function() {
      var stateID = $(this).val();
      if (stateID) {
        $.ajax({
          url: '/dashboard/ppm/lk_inspeksi/' + stateID,
          type: "GET",
          dataType: "json",
          success: function(data) {
            $('select[id="nama_alat"]').empty();
            $('select[id="nomer_seri"]').empty();
            $.each(data, function(key, value) {
              $('select[id="nama_alat"]').append('<option value="' + value.id_aset +'_'+ value.nama_alat +'">' + value.id_aset +'_'+ value.nama_alat +'</option>');
              $('select[id="nomer_seri"]').append('<option value="' + value.id_aset +'_'+ value.serial_number +'">' + value.id_aset +'_'+ value.serial_number +'</option>');
            });
            console.log(key)
          }
        });
      } else {
        $('select[name="nama_alat"]').empty();
      }
    });
  });
</script>

@endpush
@endsection