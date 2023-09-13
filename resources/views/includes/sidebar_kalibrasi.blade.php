<aside class="main-sidebar">
  <!-- sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel text-center">
      <div class="image">
        <img src="{{ url('assets_web/img/placeholder/profile.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="info">
        <p>{{ Auth::user()->username }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i>
          {{ Auth::user()->user_role = "1" ? "Admin" : ""  }} </a>
      </div>
    </div>

    <!-- sidebar menu -->
    <ul class="sidebar-menu">

      <li class="active">
        <a href="{{ url('/kalibrasi/home') }}"><i class="fa fa ti-home"></i> Dashboard</a>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-sitemap"></i> <span>Pesanan Masuk</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('/kalibrasi/pesanan') }}">Formulir Pesanan Masuk</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-user-md"></i> <span>Alat Ukur</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('/kalibrasi/alat_ukur') }}">Formulir Alat Ukur</a></li>
        </ul>
      </li>

      <!-- patient info -->

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-wheelchair"></i> <span>Lembar Kerja</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">

          <li class=""><a href="{{ url('/kalibrasi/lembar_kerja') }}">Formulir Lembar Kerja</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa ti-calendar"></i> <span>Hasil Ukur Kalibrasi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('/kalibrasi/lembar_kerja') }}">Hasil Ukur Kalibrasi</a></li>

        </ul>
      </li>



      <li class="treeview ">
        <a href="#">
          <i class="fa fa-arrow-circle-right"></i> <span>Berita Acara </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('/kalibrasi/berita_acara') }}">Formulir Lembar Kerja</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-arrow-circle-right"></i> <span>Sertifikat Kalibrasi </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('/kalibrasi/berita_acara') }}">Formulir Lembar Kerja</a></li>
        </ul>
      </li>


    </ul>
  </div> <!-- /.sidebar -->
</aside>