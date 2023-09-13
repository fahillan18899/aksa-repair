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
          {{ Auth::user()->user_role}} </a>
      </div>
    </div>

    <!-- sidebar menu -->
    <ul class="sidebar-menu">

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
          <li class=""><a href="{{ url('/kalibrasi/hasil_ukur_kalibrasi') }}">Formulir Lembar Kerja</a></li>
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


    </ul>
  </div> <!-- /.sidebar -->
</aside>