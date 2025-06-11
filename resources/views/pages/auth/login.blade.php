<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Wyasa PPM</title>

  <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #43cea2, #185a9d);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background: #fff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 420px;
    }

    .login-title {
      text-align: center;
      margin-bottom: 25px;
      font-size: 28px;
      font-weight: 600;
      color: #185a9d;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-success {
      width: 100%;
      border-radius: 8px;
      font-weight: 600;
      background-color: #185a9d;
      border-color: #185a9d;
    }

    .btn-success:hover {
      background-color: #1572b6;
    }

    .alert {
      font-size: 14px;
    }

    label {
      margin-bottom: 5px;
      font-weight: 500;
    }
  </style>
</head>

<body>
  @php
  $hospitals = [
    ['RS DEMO', 'RS0000'],
    ['RS BADARUDIN KASIM', 'RS0001'],
    ['RSI WONOSOBO', 'RS0002'],
    ['RS PANTI WILASA', 'RS0003'],
    ['RSUD CILEGON', 'RS0004'],
    ['RS PONDOK KOPI', 'RS0005'],
    ['RSUD TEMANGGUNG', 'RS0006'],
    ['RSU JAFAR MEDIKA', 'RS0007'],
    ['RS PKU WONOSOBO', 'RS0008'],
    ['RSUD KARANGANYAR', 'RS0009'],
    ['LABKESDA BEKASI', 'RS0010'],
    ['RSUD UNGARAN', 'RS0011'],
    ['RS PALANG BIRU', 'RS0012'],
    ['RSUD M. TH. DJAMAN SANGGAU', 'RS0013'],
    ['RS PKU MUHAMMADIYAH TEGAL', 'RS0014'],
    ['RS UMI BAROKAH', 'RS0015'],
    ['RSUI BOYOLALI', 'RS0016'],
    ['RS DARUL ISTIQOMAH KENDAL', 'RS0017'],
    ['RS PANTI NUGROHO', 'RS0018'],
    ['RS PRIMA SEHAT PEKALONGAN', 'RS0019'],
    ['RSI KLATEN', 'RS0020'],
    ['RSI AT-TIN', 'RS0021'],
    ['RS HARAPAN IBU PURBALINGGA', 'RS0022'],
    ['RSJD DR RM SOEDJARWADI', 'RS0023'],
    ['RSUI YAKSSI', 'RS0024'],
    ['RSUI KUSTATI', 'RS0025'],
    ['RSUD DR SOESELO', 'RS0026'],
    ['RS AMAL SEHAT WONOGIRI', 'RS0027'],
    ['RS ORTOPEDI SIAGA UTAMA', 'RS0028'],
    ['RS NIRMALA SURI', 'RS0030'],
    ['RSUD ANSARISALEH', 'RS0031'],
    ['RSUD SULTAN SURIANSYAH', 'RS0032'],
    ['RSIY PDHI YOGYAKARTA', 'RS0033'],
    ['RS PERMATA KUNINGAN', 'RS0034'],
    ['RS WIJAYA KUSUMA KUNINGAN', 'RS0035'],
  ];
  @endphp

  <div class="login-box">
    <h2 class="login-title">Wyasa PPM Login</h2>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">{{ $message }}</div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('login-proccess') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" class="form-control" required>
      </div>
      <div class="form-group mt-3">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Masukkan Password" class="form-control" required>
      </div>

      <!-- Optional: Jika ingin kembali menambahkan Fasilitas & Role -->
      <!--
      <div class="form-group mt-3">
        <label for="kode_rs">Fasilitas Kesehatan</label>
        <select name="kode_rs" class="form-control">
          @foreach($hospitals as $hospital)
          <option value="{{ $hospital[1] }}">{{ $hospital[0] }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group mt-3">
        <label for="user_role">Peran Pengguna</label>
        <select name="user_role" class="form-control">
          <option value="">Pilih Peran Pengguna</option>
          <option value="admin">Admin</option>
          <option value="teknisi">Teknisi</option>
          <option value="user">User</option>
        </select>
      </div>
      -->

      <div class="mt-4">
        <button type="submit" class="btn btn-success">Login</button>
        <button type="button" class="btn btn-secondary"><a href="{{ url('/register') }}">Register</a></button>
      </div>
    </form>
  </div>

  <script src="{{ url('assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>