<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Alat</title>

    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body{
            background:#f5f7fa;
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:15px;
        }

        .menu-card{
            width:100%;
            max-width:420px;
            background:#fff;
            border-radius:15px;
            padding:25px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
        }

        .menu-title{
            text-align:center;
            margin-bottom:25px;
        }

        .menu-title h3{
            margin:0;
            font-weight:600;
        }

        .menu-title small{
            color:#6c757d;
        }

        .btn-menu{
            height:60px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:16px;
            font-weight:600;
            border-radius:12px;
            margin-bottom:12px;
        }

        .btn-menu i{
            margin-right:10px;
            font-size:18px;
        }

        @media (max-width:576px){

            .menu-card{
                padding:20px;
            }

            .btn-menu{
                height:55px;
                font-size:15px;
            }

        }
    </style>
</head>
<body>

<div class="menu-card">

    <div class="menu-title">
        <h3>Menu Alat</h3>
        <small>ID QR : {{ $id }}</small>
    </div>

    @if($inv)

    <button class="btn btn-secondary btn-menu btn-block" disabled>
        <i class="fa-solid fa-box"></i>
        Sudah Terdaftar
    </button>

    @else

    <a href="{{ route('ppm.inventaris.create', ['qr' => $id]) }}"
    class="btn btn-primary btn-menu btn-block">
        <i class="fa-solid fa-box"></i>
        Inventaris Alat
    </a>

    @endif

    <a href="{{ route('ppm.perbaikan.create', ['qr' => $id]) }}"
       class="btn btn-warning btn-menu btn-block">
        <i class="fa-solid fa-screwdriver-wrench"></i>
        Perbaikan Alat
    </a>

    <a href="{{ route('ppm.pelihara.create', ['qr' => $id]) }}"
       class="btn btn-success btn-menu btn-block">
        <i class="fa-solid fa-gears"></i>
        Maintenance Alat
    </a>

    <a href="{{ route('ppm.scan') }}"
       class="btn btn-info btn-menu btn-block">
        <i class="fa-solid fa-qrcode"></i>
        Scan QR
    </a>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('error'))
<script>

Swal.fire({
    icon: 'warning',
    title: 'Tidak Bisa Dilanjutkan',
    imageUrl: "{{ asset('assets/images/teknisi.jpg') }}",
    imageWidth: 180,
    imageHeight: 180,
    text: @json(session('error')),
    confirmButtonColor: '#f0ad4e'
});

</script>
@endif
</body>
</html>