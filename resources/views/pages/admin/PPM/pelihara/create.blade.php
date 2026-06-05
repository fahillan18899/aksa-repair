@extends('layouts.ppm')

@section('title', 'Pemeliharaan')

@section('content')

<style>
.content-wrapper{
    padding:10px;
}

.form-card{
    background:#fff;
    border-radius:14px;
    padding:15px;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
    margin-bottom:15px;
}

.simple-header{
    font-size:18px;
    font-weight:600;
    margin-bottom:15px;
    text-align:center;
}

.form-group{
    margin-bottom:12px;
}

.form-group label{
    font-weight:600;
    margin-bottom:5px;
    display:block;
}

.form-control{
    border-radius:12px;
    height:44px;
    font-size:14px;
}

textarea.form-control{
    height:auto;
}

.btn-scan{
    width:100%;
    height:45px;
    border-radius:12px;
    background:#007bff;
    color:#fff;
    border:none;
    font-weight:600;
}

.btn-save{
    width:100%;
    height:48px;
    border-radius:12px;
    background:#28a745;
    color:#fff;
    border:none;
    font-weight:600;
    font-size:16px;
}

h3{
    font-size:16px;
    font-weight:700;
    text-align:center;
    margin:15px 0;
}

.table-responsive{
    border-radius:12px;
    overflow-x:auto;
    background:#fff;
}

table{
    font-size:12px;
}

table th, table td{
    white-space:nowrap;
    padding:8px;
}

@media (max-width:768px){
    .content{
        padding:5px;
    }

    .form-card{
        padding:12px;
    }

    .content-wrapper{
        padding:5px;
    }
}
</style>

<div class="content-wrapper">

    <div class="content">

        <!-- ERROR -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
<br><br><br>
        <!-- FORM -->
        <div class="form-card">

            <form action="{{route('pelihara.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <h3>Pemeliharaan Alat</h3>

                <input type="hidden" name="id_alat" value="{{ $qr }}">

                <div class="form-group">
                    <label>Teknisi</label>
                    <input name="teknisi" type="text" class="form-control" required>
                </div>

                <h3>DATA ALAT</h3>

                <div class="form-group">
                    <label>Nama Alat</label>
                    <input name="nama_alat" class="form-control" value="{{ $alat->nama_alat }}" readonly>
                </div>

                <div class="form-group">
                    <label>Serial Number</label>
                    <input name="seri" class="form-control" value="{{ $alat->seri }}" readonly>
                </div>

                <div class="form-group">
                    <label>Merek</label>
                    <input name="merek" class="form-control" value="{{ $alat->merek }}" readonly>
                </div>

                <div class="form-group">
                    <label>Type</label>
                    <input name="type" class="form-control" value="{{ $alat->type }}" readonly>
                </div>

                <div class="form-group">
                    <label>Ruangan</label>
                    <input name="lokasi" class="form-control" value="{{ $alat->lokasi }}" readonly>
                </div>
                @php
                $check1 = ['hand_hygiene' => 'Hand Hygiene','menyiapkan_alat_dan_bahan' => 'Menyiapkan alat dan bahan',
                          'alat_pelindung_diri' => 'Alat pelindung diri','mengoprasikan_alat_kalibrasi' => 'Mengiorasikan alat kalibrasi',
                          'ktd' => 'KTD','mengoprasikan_alat' => 'Mengoprasikan alat','identifikasi_bahaya' => 'Identifikasi bahaya',];
                @endphp
                <!-- PERSIAPAN -->
                <h3>PERSIAPAN</h3>

                <table class="table table-striped table-bordered">
                    <tbody>
                        @foreach($check1 as $name => $label)
                        <tr>
                            <td>{{ $label }}</td>
                            <td align="center">
                                <input type="checkbox" name="persiapan[{{ $name }}]" value="Ya" checked>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- PEMANTAUAN -->
                <h3>PEMANTAUAN FISIK & FUNGSI</h3>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Atribut</th>
                            <th>Fisik</th>
                            <th>Fungsi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Badan / Selungkup</td>
                                <td><input type="checkbox" name="pemantauan[badan1]" checked></td>
                                <td><input type="checkbox" name="pemantauan[badan2]" checked></td>
                            </tr>
                            <tr>
                                <td>Kabel Kelenturan</td>
                                <td><input type="checkbox" name="pemantauan[kabel_kelenturan1]" checked></td>
                                <td><input type="checkbox" name="pemantauan[kabel_kelenturan2]" checked></td>
                            </tr>
                            <tr>
                                <td>Tombol Saklar</td>
                                <td><input type="checkbox" name="pemantauan[tombol_saklar1]" checked></td>
                                <td><input type="checkbox" name="pemantauan[tombol_saklar2]" checked></td>
                            </tr>
                            <tr>
                                <td>Display Layar</td>
                                <td><input type="checkbox" name="pemantauan[display_layar1]" checked></td>
                                <td><input type="checkbox" name="pemantauan[display_layar2]" checked></td>
                            </tr>
                            <tr>
                                <td>Indikator Bunyi</td>
                                <td><input type="checkbox" name="pemantauan[indikator_bunyi1]" checked></td>
                                <td><input type="checkbox" name="pemantauan[indikator_bunyi2]" checked></td>
                            </tr>
                            <tr>
                                <td>Alarm Sistem</td>
                                <td><input type="checkbox" name="pemantauan[alarm_sistem_interlock1]" checked></td>
                                <td><input type="checkbox" name="pemantauan[alarm_sistem_interlock2]" checked></td>
                            </tr>
                            <tr>
                                <td>Sistem Pengunci</td>
                                <td><input type="checkbox" name="pemantauan[sistem_pengunci1]" checked></td>
                                <td><input type="checkbox" name="pemantauan[sistem_pengunci2]" checked></td>
                            </tr>
                            <tr>
                                <td>Label Penandaan</td>
                                <td><input type="checkbox" name="pemantauan[label_penandaan1]" checked></td>
                                <td><input type="checkbox" name="pemantauan[label_penandaan2]" checked></td>
                            </tr>
                            <tr>
                                <td>Aksesoris</td>
                                <td><input type="checkbox" name="pemantauan[aksesoris1]" checked></td>
                                <td><input type="checkbox" name="pemantauan[aksesoris2]" checked></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- TINDAKAN -->
                <div class="form-group">
                    <label>TINDAKAN</label>
                    <textarea class="form-control" name="cek_alat" rows="3"></textarea>
                </div>

                <!-- EVALUASI -->
                <div class="form-group">
                    <label>EVALUASI</label>
                    <textarea class="form-control" name="evaluasi" rows="3"></textarea>
                </div>

                <!-- FOTO -->
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto_pendukung">
                </div>

                <!-- Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block btn-mobile btn-rounded">
                        <i class="fa fa-save"></i> Tambah
                    </button>
                    <a href="{{ route('qr.menu', ['id' => $qr]) }}"
                    class="btn btn-primary btn-block btn-mobile btn-rounded">
                        Kembali
                    </a>
                </div>

            </form>

        </div>

        <!-- TABLE -->
        <div class="form-card">

            <h3>Daftar Alat Terpelihara</h3>

                <table class="datatable table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Merek</th>
                            <th>Tombol Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($items as $item)
                      <tr>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->merek }}</td>
                        <td>
                            <a href="{{ route('pelihara.show', $item->id) }}"
                            class="btn btn-success btn-xs">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                      </tr>
                      @empty
                      @endforelse
                    </tbody>
                </table>

        </div>

    </div>

</div>

@endsection