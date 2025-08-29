<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Monitoring Kalibrasi</title>

  <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right,rgba(6, 205, 240, 1),rgba(6, 167, 236, 1));
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
      color:rgba(98, 210, 235, 1);
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-success {
      width: 100%;
      border-radius: 8px;
      font-weight: 600;
      background-color:rgba(33, 153, 218, 1);
      border-color:rgba(11, 116, 172, 1);
    }

    .btn-success:hover {
      background-color:rgba(69, 200, 232, 1);
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

  <div class="login-box">
    <h2 class="login-title">Monitoring Kalibrasi Login</h2>

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

      <div class="mt-4">
        <button type="submit" class="btn btn-success">Login</button>
        <button type="button" class="btn btn-secondary"><a href="{{ url('/register') }}">Register</a></button>
        <!-- <button type="button" class="btn btn-secondary"><a href="{{ url('/scan') }}">Scan</a></button> -->
      </div>
    </form>
  </div>

  <script src="{{ url('assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>