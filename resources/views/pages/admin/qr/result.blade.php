<!DOCTYPE html>
<html>
<head>
    <title>QR Result</title>
    <style>
        .qr-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .qr-item {
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Hasil QR Code</h2>
    <div class="qr-container">
        @foreach ($alatList as $alat)
            <div class="qr-item">
                {!! QrCode::size(120)->generate($alat->id_aset) !!}
                <p> {{ $alat->id_aset }}</p>
                <p> {{ $alat->nama_alat }}</p>
                <p><strong>Serial:</strong> {{ $alat->serial_number }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
