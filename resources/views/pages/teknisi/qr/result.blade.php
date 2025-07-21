<!DOCTYPE html>
<html>
<head>
    <title>QR Result</title>
    <style>
        .qr-container {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }
        .qr-item {
            border: 1px solid #ccc;
            padding: 10px;
            width: 150px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Hasil QR Code</h2>
    <div class="qr-container">
        @foreach ($alat as $alats)
            <div class="qr-item">
                {!! QrCode::size(110)->generate($alats->no_urut) !!}
                <p>{{ $alats->no_urut }}</p>
                <p>{{ $alats->nama_alat }}</p>
                <p>{{ $alats->no_seri }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
