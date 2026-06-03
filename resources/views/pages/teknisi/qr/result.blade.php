<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>QR Preventive Maintenance</title>

    <style>
        * {
            box-sizing: border-box;
        }

        @page {
            size: A4 portrait;
            margin: 5mm;
        }

        body {
            margin: 10px;
            font-family: "Times New Roman", serif;
        }

        .wrapper {
            display: grid;
            grid-template-columns: repeat(3, 6cm);
            gap: 3mm;
            justify-content: center;
        }

        .card {
            width: 6cm;
            height: 2.26cm;
            position: relative;

            background-image: url('{{ url("assets/images/qr_aksa2.png") }}');
            background-size: 100% 100%;
            background-repeat: no-repeat;

            page-break-inside: avoid;
        }

        .qr {
            position: absolute;
            left: 0.37cm;
            top: 0.93cm;
        }

        .qr-number {
            position: absolute;

            left: 0.42cm;
            top: 1.85cm;

            width: 0.9cm;
            text-align: center;

            font-size: 7px;
            font-weight: bold;
            color: #000;
        }

        @media print {
            body {
                margin: 0;
            }

            .wrapper {
                gap: 3mm;
            }
        }
    </style>
</head>

<body>

    <div class="wrapper">

        @foreach ($qrNumbers as $number)

            <div class="card">

                <div class="qr">
                    {!! QrCode::size(35)->margin(1)->generate(url('qr-menu/' . $number)) !!}
                </div>

                <div class="qr-number">
                    {{ str_pad($number, 3, '0', STR_PAD_LEFT) }}
                </div>

            </div>

        @endforeach

    </div>

</body>

</html>