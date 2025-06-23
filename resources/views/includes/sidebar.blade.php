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
      @if(Auth::user()->user_role == 'admin')
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
        @if(Auth::user()->user_role == 'admin')
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
      <li class="{{ request()->is('dashboard/ppm/home') ? 'active' : '' }}"><a href="/dashboard/ppm/home"><i class="fa fa-home"></i>Dashboard</a></li>
      <!---->
      <li class="treeview  {{ request()->is('dashboard/ppm/link_input_pekerjaan') ? 'active' : '' }} {{ request()->is('dashboard/ppm/link_data_barang') ? 'active' : '' }} {{ request()->is('dashboard/ppm/link_sph') ? 'active' : '' }} {{ request()->is('dashboard/ppm/link_invoice') ? 'active' : '' }}">
        <a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i>
          <span>Monitoring Marketing</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ request()->is('dashboard/ppm/link_input_pekerjaan') ? 'active' : '' }}"><a href="{{ route('inputPekerjaan.data') }}">Input Pekerjaan</a></li>
          <li class="{{ request()->is('dashboard/ppm/link_data_barang') ? 'active' : '' }}"><a href="{{ route('dataBarang.data') }}">Data Barang</a></li>
          <li class="{{ request()->is('dashboard/ppm/link_sph') ? 'active' : '' }}"><a href="{{ route('sph.data') }}">SPH</a></li>
          <li class="{{ request()->is('dashboard/ppm/link_invoice') ? 'active' : '' }}"><a href="{{ route('invoice.data') }}">Invoice</a></li>
        </ul>
      </li>
      <!---->
      <!---->
      <li class="treeview  {{ request()->is('dashboard/ppm/link_approval') ? 'active' : '' }} {{ request()->is('dashboard/ppm/link_alat_kembali') ? 'active' : '' }} {{ request()->is('dashboard/ppm/link_informasi') ? 'active' : '' }} {{ request()->is('dashboard/ppm/link_cetak_qr') ? 'active' : '' }}">
        <a href="#"><i class="fa fa-wrench" aria-hidden="true"></i>
          <span>Monitoring Teknisi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ request()->is('dashboard/ppm/link_approval') ? 'active' : '' }}"><a href="{{ route('approval.data') }}">Approval</a></li>
          <li class="{{ request()->is('dashboard/ppm/link_alat_kembali') ? 'active' : '' }}"><a href="{{ route('alatKembali.data') }}">Alat Kembali</a></li>
          <li class="{{ request()->is('dashboard/ppm/link_informasi') ? 'active' : '' }}"><a href="{{ route('informasi.data') }}">Informasi</a></li>
          <li class="{{ request()->is('dashboard/ppm/link_cetak_qr') ? 'active' : '' }}"><a href="{{ route('qrGenerate.data') }}">Cetak QR</a></li>
        </ul>
      </li>
      <!---->
      <!---->
      <li class="treeview  {{ request()->is('dashboard/ppm/link_invoice_akun') ? 'active' : '' }} {{ request()->is('dashboard/ppm/link_vakture') ? 'active' : '' }} ">
        <a href="#"><i class="fa fa-balance-scale" aria-hidden="true"></i>
          <span>Monitoring Akuntan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ request()->is('dashboard/ppm/link_invoice_akun') ? 'active' : '' }}"><a href="{{ route('invoiceAkuntan.data') }}">Invoice</a></li>
          <li class="{{ request()->is('dashboard/ppm/link_vakture') ? 'active' : '' }}"><a href="{{ route('vakture.data') }}">Upload Vakture</a></li>
        </ul>
      </li>
      <!---->
      <!-- <li class="{{ request()->is('dashboard/ppm/data_kelengkapan') ? 'active' : '' }}"><a href="/dashboard/ppm/data_kelengkapan"><i class="fa fa-database"></i>Data Kelengkapan PPM</a></li>
      <li class="{{ request()->is('dashboard/ppm/registrasi-aset') ? 'active' : '' }}"><a href="/dashboard/ppm/registrasi-aset"><i class="fa fa-check-square"></i>Registrasi Alat</a></li>
      <li class="{{ request()->is('dashboard/ppm/data_inventaris') ? 'active' : '' }}"><a href="/dashboard/ppm/data_inventaris"><i class="fa fa-archive" aria-hidden="true"></i>Data Inventaris</a></li> -->
      
      <!-- <li class="{{ request()->is('dashboard/ppm/laporan_kegiatan') ? 'active' : '' }}"><a href="/dashboard/ppm/laporan_kegiatan"><i class="fa fa-book" aria-hidden="true"></i>Laporan Kegiatan</a></li>
      <li class="{{ request()->is('dashboard/ppm/operator') ? 'active' : '' }}"><a href="/dashboard/ppm/operator"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Operator</a></li>
      <li class="{{ request()->is('dashboard/ppm/stock_opname') ? 'active' : '' }}"><a href="/dashboard/ppm/stock_opname"><i class="fa fa-cubes" aria-hidden="true"></i>Stock Opname</a></li>
      <li class="{{ request()->is('dashboard/ppm/analisis_data') ? 'active' : '' }}"><a href="/dashboard/ppm/analisis_data"><i class="fa fa-pie-chart" aria-hidden="true"></i>Analisis Data</a></li>
      <li class="{{ request()->is('dashboard/create-generete-qr') ? 'active' : '' }} only-lg"><a href="/dashboard/create-generete-qr"><i class="fa fa-qrcode" aria-hidden="true"></i>Generate QR</a></li> -->
      <!-- <li class=""><a href="{{ route('qr.form') }}"><i class="fa fa-qrcode" aria-hidden="true"></i>QR GENERATE</a></li> -->
      <!-- <li class="{{ request()->is('dashboard/ppm/scanner_qr') ? 'active' : '' }}"><a href="/dashboard/ppm/scanner_qr"><i class="fa fa-qrcode" aria-hidden="true"></i>Scanner QR</a></li> -->
    </ul>
    <!-- SIDE BAR MENU -->
  </div> <!-- /.sidebar -->
</aside>