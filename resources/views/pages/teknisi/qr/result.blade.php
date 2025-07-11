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
        @foreach ($alat as $alats)
            <div class="qr-item">
                {!! QrCode::size(120)->generate($alats->no_urut) !!}
                <p> <strong>NO URUT:</strong> {{ $alats->no_urut }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
