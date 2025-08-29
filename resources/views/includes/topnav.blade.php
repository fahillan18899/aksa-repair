<style>
  .main-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #222d32; /* Sesuaikan dengan tema */
    z-index: 1030; /* Pastikan header ada di atas elemen lain */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan agar terlihat lebih menarik */
}

.navbar {
    margin-bottom: 0;
    border-radius: 0;
}

.content-wrapper {
    margin-top: 60px; /* Pastikan konten tidak tertutup header */
    transition: margin-top 0.3s ease-in-out;
}

</style>
<header class="main-header">
  <a href="" class="logo">
    <span class="logo-mini">
      <img class="img-fluid" src="{{ url('assets/images/logo dhs.png') }}" alt="">
    </span>
    <span class="logo-lg">
      <img class="img-fluid" src="{{ url('assets/images/logo dhs.png') }}" alt="">
    </span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
      <span class="sr-only">Toggle navigation</span>
      <span class="pe-7s-keypad"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- settings -->
        <li class="dropdown dropdown-user">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-angle-down-circle"></i></a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item logout-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="pe-7s-close-circle"></i>{{ __('Logout') }}
              </a>
              {{-- <a href="firebase/messagingfirebase/messaging{{ url('dashboard/logout_n') }}">Matikan Notifikasi</a> --}}
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