<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Alat - Wyasa PPM</title>

  <!-- Bootstrap CSS -->
  <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet" />

  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', sans-serif;
    }

    .content-wrapper {
      padding: 50px 0;
    }

    .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      background-color: #ffffff;
    }

    .card h3 {
      font-weight: 600;
      margin-bottom: 10px;
      color: #2c3e50;
    }

    .table th {
      width: 40%;
      background-color: #f0f2f5;
      color: #333;
      font-weight: 500;
      vertical-align: middle;
      border-top: 1px solid #dee2e6;
    }

    .table td {
      background-color: #ffffff;
      border-top: 1px solid #dee2e6;
    }

    .table tr:hover td {
      background-color: #f9f9f9;
      transition: 0.2s;
    }
  </style>
</head>

<body>
  <div class="container content-wrapper">
    <div class="row">
      <div class="col-md-10 col-lg-8 mx-auto">
        <div class="card p-4">
          <h3 class="text-center" style="padding-top: 5px;">Data Alat</h3>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th class="text-center">ID</th>
                <td class="text-center">{{ $data->id }}</td>
              </tr>
              <tr>
                <th class="text-center">Nama Alat</th>
                <td class="text-center">{{ $data->nama_alat }}</td>
              </tr>
              <tr>
                <th class="text-center">No Seri</th>
                <td class="text-center">{{ $data->no_seri }}</td>
              </tr>
              <tr>
                <th class="text-center">Type</th>
                <td class="text-center">{{ $data->type }}</td>
              </tr>
              <tr>
                <th class="text-center">Kerusakan Alat</th>
                <td class="text-center">{{ $data->kerusakan_alat }}</td>
              </tr>
              <tr>
                <th class="text-center">Instansi</th>
                <td class="text-center">{{ $data->instansi }}</td>
              </tr>
              <tr>
                <th class="text-center">Tanggal</th>
                <td class="text-center">{{ $data->created_at }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
