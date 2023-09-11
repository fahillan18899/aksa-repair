<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Wyasa SIMRS</title>

  <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- 7 stroke css -->
  <link href="{{ url('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css" />
  <!-- style css -->
  <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="login-wrapper">
    <div class="container-center">
      <div class="panel panel-bd">
        <div class="panel-heading">
          <div class="view-header">
            <div class="header-icon">
              <i class="pe-7s-unlock"></i>
            </div>
            <div class="header-title">
              <h3>RS Cilegon Wyasa</h3>
              <small><strong>Please Log In</strong></small>
            </div>
          </div>
          <div class="">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
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
              <input type="hidden" name="kode_rs" value="RSC">
            </div>
            <div class="form-group">
              <label class="control-label" for="user_role">Peran Pengguna</label>
              <select name="user_role" class="form-control" id="user_role">
                <option value="">Select Peran Pengguna</option>
                <option value="1">Admin</option>
                <option value="2">Teknisi</option>
                <option value="2">User</option>
              </select>
            </div>

            <div>
              <button type="submit" class="btn btn-success">Log In</button>
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