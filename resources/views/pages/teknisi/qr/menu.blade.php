<!DOCTYPE html>
<html>
<head>
    <title>Menu Alat</title>

    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="text-center">

        <h3>Menu Alat #{{ $id }}</h3>

        <hr>

        <a href="{{ url('data_alat/'.$id) }}"
           class="btn btn-primary btn-lg btn-block mb-3">
            Inventaris Alat
        </a>

        <a href="{{ url('perbaikan/'.$id) }}"
           class="btn btn-warning btn-lg btn-block mb-3">
            Perbaikan Alat
        </a>

        <a href="{{ url('maintenance/'.$id) }}"
           class="btn btn-success btn-lg btn-block">
            Maintenance Alat
        </a>

    </div>

</div>

</body>
</html>