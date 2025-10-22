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
      @if(Auth::user()->user_role == 'teknisi')
      @php
        $logoRs = [
          "RS0000" => "profile.png"];
      @endphp
      @if(isset($logoRs[Auth::user()->kode_rs]))
      <div class="image" style="margin-top: 60px;">
        <img src="{{ url('assets_web/img/placeholder/' . $logoRs[Auth::user()->kode_rs]) }}" class="img-circle" alt="Logo Rs">
      </div>
      @endif
      @endif
      <div class="info">
        @if(Auth::user()->user_role == 'teknisi')
        @php
          $rumahSakit = [
            "RS0000" => "AKSA"];
        @endphp
        @if(isset($rumahSakit[Auth::user()->kode_rs]))
        <p>{{ $rumahSakit[Auth::user()->kode_rs] }}</p>
        @endif
        @endif
        <p>{{ Auth::user()->username }}</p>
        <a href="#"><i class="fa fa-circle text-primary"></i>
          {{ Auth::user()->user_role }} </a>
      </div>
    </div>
    <!-- sidebar menu -->
    <ul class="sidebar-menu">
      <li class="{{ request()->is('dashboard_teknisi/link_dashboard_teknisi') ? 'active' : '' }}">
        <a href="{{ route('teknisi.dashboard') }}"><i class="fa fa ti-home"></i> Dashboard</a>
      </li>
      <li class="{{ request()->is('dashboard_teknisi/repair') ? 'active' : '' }}">
        <a href="{{ route('teknisi.repair.index') }}">
          <i class="fa fa-wrench" aria-hidden="true"></i><span>Repair</span>
        </a>
      </li>
      <li class="{{ request()->is('dashboard_teknisi/surat_terima') ? 'active' : '' }}">
        <a href="{{ route('teknisi.surat_terima.index') }}"><i class="fa fa-file-text"></i>Surat Terima</a>
      </li>
      <li class="{{ request()->is('dashboard_teknisi/informasi') ? 'active' : '' }}">
        <a href="{{ route('teknisi.informasi.index') }}">
          <i class="fa fa-info-circle"></i> <span>Informasi</span>
        </a>
      </li>
      <li class="{{ request()->is('dashboard_teknisi/link_ba') ? 'active' : '' }}">
        <a href="{{ route('teknisi.data.ba') }}">
          <i class="fa fa-file-text-o"></i> <span>Berita Acara</span>
        </a>
      </li>
      <li class="{{ request()->is('dashboard_teknisi/link_qr') ? 'active' : '' }}">
        <a href="{{ route('teknisi.data.qr') }}">
          <i class="fa fa-qrcode"></i><span>QR Code</span>
        </a>
      </li>
    </ul>
  </div> <!-- /.sidebar -->
</aside>