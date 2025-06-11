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
        @if(Auth::user()->user_role == 'teknisi')
        @php
          $rumahSakit = [
            "RS0000" => "RS DEMO", "RS0001" => "RS BADARUDIN KASIM", "RS0002" => "RSI WONOSOBO", "RS0003" => "RS PANTI WILASA",
            "RS0004" => "RSUD CILEGON", "RS0005" => "RS PONDOK KOPI", "RS0006" => "RSUD TEMANGGUNG",
            "RS0007" => "RSU JAFAR MEDIKA", "RS0008" => "RS PKU WONOSOBO", "RS0009" => "RSUD KARANGANYAR",
            "RS0010" => "LABKESDA BEKASI", "RS0011" => "RSUD UNGARAN", "RS0012" => "RS PALANG BIRU", "RS0013" => "RSUD M. TH. DJAMAN SANGGAU",
            "RS0014" => "RS PKU MUHAMMADIYAH TEGAL", "RS0015" => "RS UMI BAROKAH", "RS0016" => "RSUI BOYOLALI",
            "RS0017" => "RS DARUL ISTIQOMAH KENDAL", "RS0018" => "RS PANTI NUGROHO", "RS0019" => "RS PRIMA SEHAT PEKALONGAN",
            "RS0020" => "RSI KLATEN", "RS0021" => "RSI AT-TIN", "RS0022" => "RS RAHAPAN IBU PURBALINGGA", "RS0023" => "RSJD DR RM SOEDJARWADI",
            "RS0024" => "RS YAKSSI", "RS0025" => "RSUI KUSTATI", "RS0026" => "RSUD DR SOESELO",
            "RS0027" => "RS AMAL SEHAT WONOGIRI", "RS0028" => "RS ORTOPEDI SIAGA UTAMA", "RS0030" => "RS NIRMALA SURI",
            "RS0031" => "RSUD ANSARISALEH", "RS0032" => "RSUD SULTAN SURIANSYAH", "RS0033" => "RSIY PDHI YOGYAKARTA",
            "RS0034" => "RS PERMATA KUNINGAN", "RS0035" => "RS WIJAYA KUSUMA KUNINGAN", 
            ];
        @endphp
        @if(isset($rumahSakit[Auth::user()->kode_rs]))
        <p>{{ $rumahSakit[Auth::user()->kode_rs] }}</p>
        @endif
        @endif
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