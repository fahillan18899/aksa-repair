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
    background-color: #3ab3feff;
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
      @if(Auth::user()->user_role == 'akuntan')
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
        @if(Auth::user()->user_role == 'akuntan')
        @php
        $rumahSakit = [
        "RS0000" => "DHS"];
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
      <li class="{{ request()->is('dashboard_akuntan/link_dashboard_akuntan') ? 'active' : '' }}">
        <a href="{{ route('akuntan.dashboard') }}"><i class="fa fa ti-home"></i> Dashboard</a>
      </li>
      <li class="{{ request()->is('dashboard_akuntan/link_dataCs_keuangan') ? 'active' : '' }}">
        <a href="{{ route('akuntan.data.CsKeuangan') }}">
          <i class="fa fa-address-book-o" aria-hidden="true"></i><span>Data Customer</span>
        </a>
      </li>
      <li class="{{ request()->is('dashboard_akuntan/link_pembuatan_invoice') ? 'active' : '' }}">
        <a href="{{ route('akuntan.data.pembuatanInvo') }}">
          <i class="fa fa-book" aria-hidden="true"></i> <span>Pembuatan Invoice</span>
        </a>
      </li>
      <li class="{{ request()->is('dashboard_akuntan/link_alur_pembayarann') ? 'active' : '' }}">
        <a href="{{ route('akuntan.data.alurPembayaran') }}">
          <i class="fa fa-arrow-right" aria-hidden="true"></i> <span>Alur Pembayaran</span>
        </a>
      </li>
      <li class="{{ request()->is('dashboard_akuntan/link_upload_fakture') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-upload"></i> <span>Chas Back</span>
        </a>
      </li>
    </ul>
  </div> <!-- /.sidebar -->
</aside>