<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>QR Label 18mm</title>

    <style>
        * {
            box-sizing: border-box;
        }

        @page {
            margin: 0;
        }

        body {
            margin: 0;
            padding: 2mm;
            font-family: Arial, sans-serif;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .qr-item {
            width: 18mm;
            text-align: center;
            margin-bottom: 2mm;
            page-break-inside: avoid;
        }

        .qr {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .qr svg {
            width: 14mm;
            height: 14mm;
        }

        .qr-number {
            margin-top: 0.5mm;
            font-size: 6pt;
            font-weight: bold;
            line-height: 1;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .qr-item {
                margin-bottom: 1mm;
            }
        }
    </style>
</head>

<body>

    <div class="wrapper">

        @foreach ($qrNumbers as $number)

            <div class="qr-item">

                <div class="qr-number">
                    AKSA
                </div>

                <div class="qr">
                    {!! QrCode::size(80)->margin(1)->generate(url('qr-menu/' . $number)) !!}
                </div>

                <div class="qr-number">
                    {{ str_pad($number, 3, '0', STR_PAD_LEFT) }}
                </div>

            </div>

        @endforeach

    </div>

</body>

</html>