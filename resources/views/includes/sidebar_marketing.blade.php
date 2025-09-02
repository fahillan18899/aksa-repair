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
      @if(Auth::user()->user_role == 'marketing')
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
        @if(Auth::user()->user_role == 'marketing')
        @php
          $rumahSakit = [
            "RS0000" => "DHS"];
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
      <li class="{{ request()->is('dashboard_marketing/link_dashboard_marketing') ? 'active' : '' }}">
        <a href="{{ route('marketing.dashboard') }}"><i class="fa fa ti-home"></i> Dashboard</a>
      </li>
      <li class="{{ request()->is('dashboard_marketing/link_input_customer') ? 'active' : '' }}">
        <a href="{{ route('marketing.data.inputCs') }}">
          <i class="fa fa-user-plus" aria-hidden="true"></i><span>Input Customer</span>
        </a>
      </li>
      <li class="{{ request()->is('dashboard_marketing/link_data_invo') ? 'active' : '' }}">
        <a href="{{ route('marketing.data.dataInvo') }}">
          <i class="fa fa-file-text-o" aria-hidden="true"></i><span>Data Invoice</span>
        </a>
      </li>
      <li class="{{ request()->is('dashboard_marketing/link_sph') ? 'active' : '' }}">
        <a href="{{ route('marketing.data.sph') }}">
          <i class="fa fa-file-o"></i><span>Kegiatan Kalibrasi</span>
        </a>
      </li>
      <li class="{{ request()->is('dashboard_marketing/link_invoice') ? 'active' : '' }}">
        <a href="{{ route('marketing.data.invoice') }}">
          <i class="fa fa-file-text"></i><span>Pembayaran</span>
        </a>
      </li>
    </ul>
  </div> <!-- /.sidebar -->
</aside>