<!doctype html>
<html lang="en" />

<head>
  <!-- Required meta tags -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <style type="text/css">
    #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #174C93;
}

#zoom {
  zoom: 100%;
      }
  </style>
  
  <title>@yield('title')</title>

  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
</head>

<body class="hold-transition sidebar-mini" id="zoom">
  <div class="wrapper">
    @include('includes.topnav')
    @include('includes.sidebar')

    @yield('content')

    @include('includes.footer')
  </div>
  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')

</body>

</html>