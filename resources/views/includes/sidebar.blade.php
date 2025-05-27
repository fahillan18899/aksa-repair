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
    background-color: #042a4a;
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
      <div class="image" style="margin-top: 60px;">
        <img src="{{ url('assets_web/img/placeholder/profile.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="info" style="margin-top: 10px;">
        <p>{{ Auth::user()->username }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i>
          {{ Auth::user()->user_role }} </a>
      </div>
    </div>
    <!-- SIDE BAR MENU -->
    <ul class="sidebar-menu">
      <li class="{{ request()->is('dashboard/ppm/home') ? 'active' : '' }}"><a href="/dashboard/ppm/home"><i class="fa fa-home"></i>Dashboard</a></li>
      <li class="{{ request()->is('dashboard/ppm/data_kelengkapan') ? 'active' : '' }}"><a href="/dashboard/ppm/data_kelengkapan"><i class="fa fa-database"></i>Data Kelengkapan PPM</a></li>
      <li class="{{ request()->is('dashboard/ppm/registrasi-aset') ? 'active' : '' }}"><a href="/dashboard/ppm/registrasi-aset"><i class="fa fa-check-square"></i>Registrasi Alat</a></li>
      <li class="{{ request()->is('dashboard/ppm/data_inventaris') ? 'active' : '' }}"><a href="/dashboard/ppm/data_inventaris"><i class="fa fa-archive" aria-hidden="true"></i>Data Inventaris</a></li>
      <!---->
      <li class="treeview  {{ request()->is('dashboard/ppm/aset_teregistrasi') ? 'active' : '' }} {{ request()->is('dashboard/ppm/aset_unregistrasi') ? 'active' : '' }} {{ request()->is('dashboard/ppm/lembar_pemeliharaan') ? 'active' : '' }} {{ request()->is('dashboard/ppm/pemantauan') ? 'active' : '' }} {{ request()->is('dashboard/ppm/jadwal_pemeliharaan') ? 'active' : '' }}">
        <a href="#"><i class="fa fa-tasks" aria-hidden="true"></i>
          <span>Kegiatan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview  {{ request()->is('dashboard/ppm/aset_teregistrasi') ? 'active' : '' }} {{ request()->is('dashboard/ppm/aset_unregistrasi') ? 'active' : '' }}">
            <a href="#">
              <span>Pemeliharaan Korektif</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ request()->is('dashboard/ppm/aset_teregistrasi') ? 'active' : '' }}"><a href="/dashboard/ppm/aset_teregistrasi">Aset Teregistrasi</a></li>
            </ul>
          </li>
          @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs !== "RS0020")
          <li class="treeview {{ request()->is('dashboard/ppm/lembar_pemeliharaan') ? 'active' : '' }} {{ request()->is('dashboard/ppm/pemantauan') ? 'active' : '' }} {{ request()->is('dashboard/ppm/jadwal_pemeliharaan') ? 'active' : '' }}">
            <a href="#">
              <span>Pemeliharaan Preverentive</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ request()->is('dashboard/ppm/lembar_pemeliharaan') ? 'active' : '' }}"><a href="/dashboard/ppm/lembar_pemeliharaan">Lembar Pemeliharaan Alat</a></li>
              <li class="{{ request()->is('dashboard/ppm/pemantauan') ? 'active' : '' }}"><a href="/dashboard/ppm/pemantauan">Pemantauan Alat</a></li>
              <li class="{{ request()->is('dashboard/ppm/jadwal_pemeliharaan') ? 'active' : '' }}"><a href="/dashboard/ppm/jadwal_pemeliharaan">Jadwal Pemeliharaan</a></li>
            </ul>
          </li>
          @endif
          <!-- RSI KLATEN -->
          @if(Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0020")
          <li class="treeview {{ request()->is('dashboard/ppm/lembar_pemeliharaan') ? 'active' : '' }} {{ request()->is('dashboard/ppm/jadwal_pemeliharaan') ? 'active' : '' }}">
            <a href="#">
              <span>Preventif</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ request()->is('dashboard/ppm/lk_alat') ? 'active' : '' }}"><a href="/dashboard/ppm/lk_alat">Pemeliharaan ALKES</a></li>
              <li class="{{ request()->is('dashboard/ppm/lk_inspeksi') ? 'active' : '' }}"><a href="/dashboard/ppm/lk_inspeksi">Inspeksi ALKES</a></li>
            </ul>
          </li>
          @endif
          <!-- RSI KLATEN END-->
        </ul>
      </li>
      <!---->
      <li class="{{ request()->is('dashboard/ppm/laporan_kegiatan') ? 'active' : '' }}"><a href="/dashboard/ppm/laporan_kegiatan"><i class="fa fa-book" aria-hidden="true"></i>Laporan Kegiatan</a></li>
      <li class="{{ request()->is('dashboard/ppm/operator') ? 'active' : '' }}"><a href="/dashboard/ppm/operator"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Operator</a></li>
      <li class="{{ request()->is('dashboard/ppm/stock_opname') ? 'active' : '' }}"><a href="/dashboard/ppm/stock_opname"><i class="fa fa-cubes" aria-hidden="true"></i>Stock Opname</a></li>
      <li class="{{ request()->is('dashboard/ppm/analisis_data') ? 'active' : '' }}"><a href="/dashboard/ppm/analisis_data"><i class="fa fa-pie-chart" aria-hidden="true"></i>Analisis Data</a></li>
      <li class="{{ request()->is('dashboard/create-generete-qr') ? 'active' : '' }} only-lg"><a href="/dashboard/create-generete-qr"><i class="fa fa-qrcode" aria-hidden="true"></i>Generate QR</a></li>
      <li class="{{ request()->is('dashboard/ppm/scanner_qr') ? 'active' : '' }}"><a href="/dashboard/ppm/scanner_qr"><i class="fa fa-qrcode" aria-hidden="true"></i>Scanner QR</a></li>
      @can(['RSUD_TEMANGGUNG', 'admin'])
      <li class="treeview ">
        <a href="#">
          <i class=""></i> <span>SOP</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="/dashboard/ppm/sop_pemakaian">SOP Pemakaian</a></li>
          <li class=""><a href="/dashboard/ppm/sop_pemeliharaan">SOP Pemeliharaan</a></li>
          <li class=""><a href="/dashboard/ppm/sop_perbaikan">SOP Perbaikan</a></li>
          <li class=""><a href="/dashboard/ppm/sop_administrasi">SOP Administrasi</a></li>
        </ul>
      </li>
      @endcan
    </ul>
    <!-- SIDE BAR MENU -->
  </div> <!-- /.sidebar -->
</aside>