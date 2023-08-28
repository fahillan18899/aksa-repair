<!doctype html>
<html lang="en" />

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <title>@yield('title')</title>

  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
</head>

<body class="hold-transition sidebar-mini">
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