@extends('layouts.admin')

@section('title', 'Cetak Aset')
@push('addon-style')
  <style>
    .td-custom {
      padding: 5px 0 5px 80px; 
      text-align: left;
      border-color: #b8b4b4;
    }
  </style>
@endpush
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content" >
            <div class="row justify-content-center mt-5">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">
                      <div class="card"  id="PrintMe">
                        <div class="align-center mt-5">
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0000")
                            <img src="{{ url('assets/kop-surat/kop_surat_demo.png') }}" alt="Kop Demo" width="100%">
                            @endif
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0001")
                            <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop Badarudin Kasim" width="100%">
                            @endif
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0002")
                            <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop Rsi Wonosobo" width="100%">
                            @endif
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0003")
                            <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop Pantiwilasa" width="100%">
                            @endif
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0004")
                            <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop RS Cilegon" width="100%">
                            @endif
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0005")
                            <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop RS Pondok kopi" width="100%">
                            @endif
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0006")
                            <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop RS Temangung" width="100%">
                            @endif
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0007")
                            <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop Ja'far" width="100%">
                            @endif
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0008")
                            <img src="{{ url('assets/kop-surat/xxx.png') }}" alt="Kop PKU Muhammadiyah Wonosobo" width="100%">
                            @endif
                        </div>
                        <div class="card-body">
                            <table width="84%" border="1px dot yellow" cellspacing="10" style="margin: 5% 0 0 8%">
                                <tbody>
                                    <tr>
                                        <td class="td-custom" width="7%" colspan="2">
                                            <h3 class="text-center ">Report Data Inventaris</h3>
                                        </td>
                                        <td width="7%" colspan="2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%"><br><br></td>
                                        <td width="50%"><br><br></td>
                                    </tr>

                                    <tr>
                                        <td class="td-custom" width="50%">Id Aset</td>
                                        <td class="td-custom"><?= $item['id_aset']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Jenis Alat</td>
                                        <td class="td-custom"><?= $item['jenis_alat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Nama Alat</td>
                                        <td class="td-custom"><?= $item['nama_alat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Merek</td>
                                        <td class="td-custom"><?= $item['merek']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Type</td>
                                        <td class="td-custom"><?= $item['type']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Serial Number</td>
                                        <td class="td-custom"><?= $item['serial_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Lokasi</td>
                                        <td class="td-custom"><?= $item['lokasi_alat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Penyusutan Aset</td>
                                        <td class="td-custom"><?= $item['penyusutan_aset']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Tanggal Kalibrasi</td>
                                        <td class="td-custom"><?= $item['tanggal_kalibrasi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Nomer Sertifikat Kalibrasi</td>
                                        <td class="td-custom"><?= $item['no_sertifikat_kalibrasi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%"><br></td>
                                        <td class="td-custom" width="50%"><br></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%">Teknisi</td>
                                        <td class="td-custom" width="50%">Kepala Ruangan</td>
                                    </tr>
                                    <tr>
                                        <td width="50%"><br><br><br><br><br><br></td>
                                        <td width="50%"><br><br><br><br><br><br></td>
                                    </tr>
                                    <tr>
                                        <td class="td-custom" width="50%"><?= $item['teknisi_ppm']; ?></td>
                                        <td class="td-custom" width="50%"><?= $item['No_Sertifikat_Kalibrasi']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                        <div class="panel-footer no-print text-center">
                            <div class="btn-group">
                                <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger">
                                    <i class="fa fa-print"></i> Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- /.content -->
@endsection
