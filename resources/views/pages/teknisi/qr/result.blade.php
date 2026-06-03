<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>QR Preventive Maintenance</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 10px;
            font-family: "Times New Roman", serif;
        }

        .wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 5mm;
        }

        .card {
            width: 8cm;
            height: 3.01cm;

            position: relative;

            background-image: url('{{ url("assets/images/qr_aksa.jpeg") }}');
            background-size: 100% 100%;
            background-repeat: no-repeat;

            page-break-inside: avoid;
        }

        /* QR */

        .qr {
            position: absolute;

            left: 0.44cm;
            top: 1.25cm;
        }

        @media print {

            body {
                margin: 0;
            }

            .wrapper {
                gap: 2mm;
            }

            .card {
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>

    <div class="wrapper">

        @foreach ($qrNumbers as $number)

            <div class="card">

                <div class="qr">
                    {!! QrCode::size(60)->margin(1)->generate(url('qr-menu/'.$number)) !!}
                </div>

            </div>

        @endforeach

    </div>

</body>

</html>