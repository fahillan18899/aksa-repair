<style>
  .main-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    /* Agar sidebar penuh tinggi */
    width: 250px;
    /* Atur lebar sidebar */
    overflow-y: auto;
    /*Tambahkan scroll jika konten melebihi tinggi */
    background-color: #FFB20E;
    /* Warna background sesuai tema */
    z-index: 1000;
    /* Pastikan sidebar di atas konten lain */
    font-family: 'Alegreya Sans', sans-serif;
    -webkit-transition: -webkit-transform 0.3s ease-in-out, width 0.3s ease-in-out;
    -webkit-transition: width 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
    transition: width 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out, width 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
  }
</style>
<aside class="main-sidebar">
  <!-- sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel text-center">
      @if(Auth::user()->user_role == 'master_ppm')
      @php
        $logoRs = [
          "RS0000" =>  "profile.png",];
      @endphp
      @if(isset($logoRs[Auth::user()->kode_rs]))
      <div class="image" style="margin-top: 60px;">
        <img src="{{ url('assets_web/img/placeholder/' . $logoRs[Auth::user()->kode_rs]) }}" class="img-circle" alt="Logo Rs">
      </div>
      @endif
      @endif
      <div class="info" style="margin-top: 10px;">
        @if(Auth::user()->user_role == 'master_ppm')
        @php
          $rumahSakit = [
            "RS0000" => "AKSA",];
        @endphp
        @if(isset($rumahSakit[Auth::user()->kode_rs]))
        <p>{{ $rumahSakit[Auth::user()->kode_rs] }}</p>
        @endif
        @endif
        <p>{{ Auth::user()->username }}</p>
        <a href="#"><i class="fa fa-circle text-danger"></i>
          {{ Auth::user()->user_role }} </a>
      </div>
    </div>
    <!-- SIDE BAR MENU -->
    <ul class="sidebar-menu">
      <li class="{{ request()->is('dashboard_master/dashboard_master') ? 'active' : '' }}">
        <a href="{{ route('master.dashboardMaster') }}"><i class="fa fa-pie-chart"></i>
            <span>Dashboard</span>
        </a>
      </li>
      <!---->
      <li class="{{ request()->is('dashboard_master/rumah_sakit') ? 'active' : '' }}">
        <a href="{{ route('master.rumahSakit') }}"><i class="fa fa-hospital-o"></i>
            <span>Rumah Sakit</span>
        </a>
      </li>
      <!---->
      <li class="{{ request()->is('dashboard_master/inventaris_rs') ? 'active' : '' }}">
        <a href="{{ route('master.invRs') }}"><i class="fa fa-archive"></i>
            <span>Inventaris Rumah Sakit</span>
        </a>
      </li>
      <!---->
      <li class="{{ request()->is('dashboard_master/perbaikan_rs') ? 'active' : '' }}">
        <a href="{{ route('master.perbaikanRs') }}"><i class="fa fa-wrench"></i>
            <span>Perbaikan Rumah Sakit</span>
        </a>
      </li>
    </ul>
    <!-- SIDE BAR MENU -->
  </div> <!-- /.sidebar -->
</aside>