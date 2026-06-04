@extends('layouts.ppm')

@section('title', 'Detail Pemeliharaan')

@section('content')

<style>
.content-wrapper{
    padding:10px;
}

.detail-card{
    background:#fff;
    border-radius:14px;
    padding:15px;
    margin-bottom:15px;
    box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.section-title{
    font-size:18px;
    font-weight:700;
    text-align:center;
    margin-bottom:15px;
}

.info-row{
    margin-bottom:12px;
}

.info-label{
    font-weight:600;
    color:#666;
    margin-bottom:4px;
}

.info-value{
    background:#f8f9fa;
    border-radius:10px;
    padding:10px;
}

.status-baik{
    color:#28a745;
    font-weight:bold;
}

.status-tidak{
    color:#dc3545;
    font-weight:bold;
}

.foto-preview{
    width:100%;
    max-width:400px;
    border-radius:12px;
}

.table td,
.table th{
    vertical-align:middle !important;
}

@media(max-width:768px){
    .content-wrapper{
        padding:5px;
    }
}
</style>

<div class="content-wrapper">
<div class="content">

<br><br><br>

    <!-- HEADER -->
    <div class="detail-card">
        <div class="section-title">
            Detail Pemeliharaan
        </div>

        <div class="info-row">
            <div class="info-label">Tanggal</div>
            <div class="info-value">
                {{ $item->created_at }}
            </div>
        </div>

        <div class="info-row">
            <div class="info-label">Teknisi</div>
            <div class="info-value">
                {{ $item->teknisi }}
            </div>
        </div>
    </div>

    <!-- DATA ALAT -->
    <div class="detail-card">

        <div class="section-title">
            Data Alat
        </div>

        <div class="info-row">
            <div class="info-label">Nama Alat</div>
            <div class="info-value">{{ $item->nama_alat }}</div>
        </div>

        <div class="info-row">
            <div class="info-label">Serial Number</div>
            <div class="info-value">{{ $item->seri }}</div>
        </div>

        <div class="info-row">
            <div class="info-label">Merek</div>
            <div class="info-value">{{ $item->merek }}</div>
        </div>

        <div class="info-row">
            <div class="info-label">Type</div>
            <div class="info-value">{{ $item->type }}</div>
        </div>

        <div class="info-row">
            <div class="info-label">Lokasi</div>
            <div class="info-value">{{ $item->lokasi }}</div>
        </div>

    </div>

    <!-- PERSIAPAN -->
    <div class="detail-card">

        <div class="section-title">
            Persiapan
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Item</th>
                    <th width="100">Status</th>
                </tr>
            </thead>
            <tbody>

                @forelse($item->persiapan as $nama => $nilai)
                <tr>
                    <td>{{ ucwords(str_replace('_', ' ', $nama)) }}</td>
                    <td>
                        @if($nilai == 'Ya')
                            <span class="status-baik">✔ Ya</span>
                        @else
                            <span class="status-tidak">✘ Tidak</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="text-center">
                        Tidak ada data
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>

    </div>

    <!-- PEMANTAUAN -->
    <div class="detail-card">

        <div class="section-title">
            Pemantauan Fisik & Fungsi
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Atribut</th>
                    <th width="120">Hasil</th>
                </tr>
            </thead>
            <tbody>

                @forelse($item->pemantauan as $nama => $nilai)
                <tr>
                    <td>{{ ucwords(str_replace('_', ' ', $nama)) }}</td>
                    <td>
                        @if($nilai == 'Baik')
                            <span class="status-baik">✔ Baik</span>
                        @else
                            <span class="status-tidak">✘ Tidak</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="text-center">
                        Tidak ada data
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>

    </div>

    <!-- TINDAKAN -->
    <div class="detail-card">

        <div class="section-title">
            Tindakan
        </div>

        <div class="info-value">
            {{ $item->cek_alat }}
        </div>

    </div>

    <!-- EVALUASI -->
    <div class="detail-card">

        <div class="section-title">
            Evaluasi
        </div>

        <div class="info-value">
            {{ $item->evaluasi }}
        </div>

    </div>

    <!-- FOTO -->
    @if($item->foto_pendukung)

    <div class="detail-card">

        <div class="section-title">
            Foto Pendukung
        </div>

        <center>
            <img src="{{ asset('storage/' . $item->foto_pendukung) }}"
                 class="foto-preview">
        </center>

    </div>

    @endif

    <!-- BUTTON -->
    <div class="detail-card">

        <a href="{{ url()->previous() }}"
           class="btn btn-primary btn-block"
           style="border-radius:12px;">
            Kembali
        </a>

    </div>

</div>
</div>

@endsection