<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Wyasa PPM</title>

  <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- 7 stroke css -->
  <link href="{{ url('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css" />
  <!-- style css -->
  <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
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
  ];
  @endphp

  <div class="login-wrapper">
    <div class="container-center">
      <div class="panel panel-bd">
        <div class="panel-heading">
          <div class="view-header">
            <div class="header-icon">
              <i class="pe-7s-unlock"></i>
            </div>
            <div class="header-title">
              <h3>Wyasa PPM</h3>
              <small>Silahkan Isi data anda dengan Sesuai <small>
            </div>
          </div>
          <div class="">
            <br>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

          </div>
        </div>


        <div class="panel-body">
          <p class="login-box-msg text-center"></p>
          <form action="{{ route('login-proccess') }}" id="loginForm" novalidate method="post" accept-charset="utf-8">
            @csrf
            @method('POST')
            <div class="form-group">
              <label class="control-label" for="username">Username</label>
              <input type="username" placeholder="Username" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label" for="password">Password</label>
              <input type="password" placeholder="Password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label" for="kode_rs">Fasilitas Kesehatan</label>
              <select name="kode_rs" class="form-control" id="kode_rs">
                @foreach($hospitals as $hospital)
                <option value="{{ $hospital[1] }} ">{{ $hospital[0] }} </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="user_role">Peran Pengguna</label>
              <select name="user_role" class="form-control" id="user_role">
                <option value="">Pilih Peran Pengguna</option>
                <option value="admin">Admin</option>
                <option value="teknisi">Teknisi</option>
                <option value="user">User </option>
              </select>
            </div>

            <div style="display: inline-block;">
              <button type="submit" class="btn btn-success">Log In</button>
              <button type="button" class="btn btn-secondary"><a href="{{ url('/register') }}">Register</a></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ url('assets/js/jquery.min.js') }}" type="text/javascript"></script>
  <!-- bootstrap js -->
  <script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>

</html>