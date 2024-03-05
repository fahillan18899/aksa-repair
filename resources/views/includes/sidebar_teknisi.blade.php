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
          {{ Auth::user()->user_role }} </a>
      </div>
    </div>

    <!-- sidebar menu -->
    <ul class="sidebar-menu">

      <li class="active">
        <a href="/dashboard_teknisi"><i class="fa fa ti-home"></i> Dashboard</a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-wrench" aria-hidden="true"></i><span>Kegiatan </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#">
              <span>Pemeliharaan Korektif</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href="/dashboard_teknisi/perbaikan_teregistrasi">Aset Teregistrasi</a></li>
              <li class=""><a href="/dashboard_teknisi/perbaikan_unregistrasi">Aset Unregistrasi</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <span>Pemeliharaan Preverentive</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href="/dashboard_teknisi/lembar_pemeliharaan">Lembar Pemeliharaan Alat</a></li>
              <li class=""><a href="/dashboard_teknisi/jadwal_pemeliharaan">Jadwal Pemeliharaan</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="">
        <a href="/dashboard_teknisi/stock_opname_teknisi"><i class="fa fa ti-home"></i> Stock Opname</a>
      </li>



    </ul>
  </div> <!-- /.sidebar -->
</aside>