<header class="main-header">
  <?php // $logo = $this->session->userdata('logo'); 
  ?>
  <a href="<?php // echo base_url('dashboard/home') 
            ?>" class="logo"> <!-- Logo -->
    <span class="logo-mini">
      <img class="img-fluid" src="{{ url('assets/images/logo.png') }}" alt="">
    </span>
    <span class="logo-lg">
      <img class="img-fluid" src="{{ url('assets/images/logo.png') }}" alt="">
    </span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
      <span class="sr-only">Toggle navigation</span>
      <span class="pe-7s-menu"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- settings -->
        <li class="dropdown dropdown-user">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-angle-down-circle"></i></a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="pe-7s-close-circle"></i>
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>

          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>