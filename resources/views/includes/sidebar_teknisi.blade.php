<style>
  .main-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh; /* Agar sidebar penuh tinggi */
    width: 250px; /* Atur lebar sidebar */
    overflow-y: auto; /*Tambahkan scroll jika konten melebihi tinggi */
    background-color: #042a4a; /* Warna background sesuai tema */
    z-index: 1000; /* Pastikan sidebar di atas konten lain */
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
      <div class="image" style="margin-top: 60px;">
        <img src="{{ url('assets_web/img/placeholder/profile.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="info">
        <p>{{ Auth::user()->username }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i>
          {{ Auth::user()->user_role }} </a>
      </div>
    </div>
    <!-- sidebar menu -->
    <ul class="sidebar-menu">
      <li class="{{ request()->is('dashboard_teknisi') ? 'active' : '' }}">
        <a href="/dashboard_teknisi"><i class="fa fa ti-home"></i> Dashboard</a>
      </li>
      <li class="{{ request()->is('dashboard_teknisi/perbaikan_teknisi') ? 'active' : '' }} {{ request()->is('dashboard_teknisi/lembar_pemeliharaan') ? 'active' : '' }} {{ request()->is('dashboard_teknisi/jadwal_pemeliharaan') ? 'active' : '' }} treeview">
        <a href="#">
          <i class="fa fa-wrench" aria-hidden="true"></i><span>Pemeliharaan Aset </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ request()->is('dashboard_teknisi/perbaikan_teknisi') ? 'active' : '' }} treeview">
            <a href="#">
              <span>Pemeliharaan Korektif</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ request()->is('dashboard_teknisi/perbaikan_teknisi') ? 'active' : '' }}"><a href="/dashboard_teknisi/perbaikan_teknisi">Aset Teregistrasi</a></li>
            </ul>
          </li>
          <li class="{{ request()->is('dashboard_teknisi/lembar_pemeliharaan') ? 'active' : '' }} {{ request()->is('dashboard_teknisi/jadwal_pemeliharaan') ? 'active' : '' }} treeview">
            <a href="#">
              <span>Pemeliharaan Preverentive</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ request()->is('dashboard_teknisi/lembar_pemeliharaan') ? 'active' : '' }}"><a href="/dashboard_teknisi/lembar_pemeliharaan">Lembar Pemeliharaan Alat</a></li>
              <li class="{{ request()->is('dashboard_teknisi/jadwal_pemeliharaan') ? 'active' : '' }}"><a href="/dashboard_teknisi/jadwal_pemeliharaan">Jadwal Pemeliharaan</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="{{ request()->is('dashboard_teknisi/stock_opname_teknisi') ? 'active' : '' }}">
        <a href="/dashboard_teknisi/stock_opname_teknisi">
          <i class="fa fa-archive"></i> <span>Stock Opname</span>
        </a>
      </li>
    </ul>
  </div> <!-- /.sidebar -->
</aside>