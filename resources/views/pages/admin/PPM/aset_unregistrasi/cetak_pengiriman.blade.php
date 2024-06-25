@extends('layouts.admin')

@section('title', 'Cetak Pengeriman Un')

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
        <!-- Main content -->
        <div class="content">
            <div class="row justify-content-center mt-5">
                <div class="col-sm-12">
                    <div class="panel panel-default thumbnail">
                        <div class="card" id="PrintMe">
                            <div class="align-center mt-5">
                            @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0000")
                            <img src="{{ url('assets/kop-surat/kop_surat_demo.png') }}" alt="Kop Surat" width="100%">
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
                                            <th width="50%"><br><br></th>
                                            <th width="50%"><br><br></th>
                                        </tr>
                                        <tr>
                                            <th width="7%" colspan="2">
                                                <h3 class="text-center ">REPORT FORM PENGIRIMAN UNREGISTRASI</h3>
                                            </th>
                                            <th width="7%" colspan="2">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th width="50%"><br><br></th>
                                            <th width="50%"><br><br></th>
                                        </tr>

                                        <tr>
                                            <td class="td-custom" width="50%">Id Perbaikan </td>
                                            <td class="td-custom"><?php echo $item['id_perbaikan_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Tanggal Perbaikan </td>
                                            <td class="td-custom"><?php echo $item['tanggal_perbaikan_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Tanggal Pengiriman </td>
                                            <td class="td-custom"><?php echo $item['tanggal_pengiriman_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Nama Alat</td>
                                            <td class="td-custom"><?php echo $item['nama_alat_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Merek Alat</td>
                                            <td class="td-custom"><?php echo $item['merek_alat_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Type Alat</td>
                                            <td class="td-custom"><?php echo $item['type_alat_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Serial Number</td>
                                            <td class="td-custom"><?php echo $item['serial_number_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Lokasi Alatr</td>
                                            <td class="td-custom"><?php echo $item['lokasi_alat_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Nama Rekanan</td>
                                            <td> <?php echo $item['nama_rekanan_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Alamat Rekanan </td>
                                            <td class="td-custom"><?php echo $item['alamat_rekanan_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Teknisi Rekanan</td>
                                            <td> <?php echo $item['teknisi_rekanan_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Telp Teknisi Rekanan </td>
                                            <td> <?php echo $item['telphone_teknisi_rek_un']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%">Waktu Pelaporan</td>
                                            <td class="td-custom" > <?php date_default_timezone_set('Asia/Jakarta');
                                            echo date('h:i:s a'); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="50%"><br></td>
                                            <td class="td-custom" width="50%"><br></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="25%">Teknisi Rekanan</td>
                                            <td class="td-custom" width="25%">Pelapor</td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom" width="25%"><br><br><br><br></td>
                                            <td class="td-custom" width="25%"><br><br><br><br></td>
                                        </tr>
                                        <tr>
                                            <td class="td-custom"><?php echo $item['teknisi_rekanan_un']; ?></td>
                                            <td class="td-custom"><?php echo $item['pelapor_un']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="panel-footer no-print text-center">
                            <div class="btn-group">
                                <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger"><i
                                        class="fa fa-print"></i> Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- /.content -->
@endsection
