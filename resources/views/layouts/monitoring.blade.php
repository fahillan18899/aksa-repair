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
    @include('includes.sidebar_monitoring')

    @yield('content')

    @include('includes.footer')
  </div>
  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')

</body>

</html>