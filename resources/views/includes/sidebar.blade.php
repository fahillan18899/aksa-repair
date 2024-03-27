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
          {{ Auth::user()->user_role  }} </a>
      </div>
    </div>

    <!-- sidebar menu -->
    <!-- <ul class="sidebar-menu">

      <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a href="/dashboard/home"><i class="fa fa ti-home"></i> Dashboard</a>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-sitemap"></i> <span>Depeartemen</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="#?hal=department&fun=create">Tambahkan Depeartemen</a></li>
          <li class=""><a href="#?hal=department&fun=index">Daftar Depeartemen</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-user-md"></i> <span>Dokter</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="#?hal=doctor&fun=create">Tambahkan Dokter</a></li>

          <li class=""><a href="#?hal=doctor&fun=index">Daftar Dokter</a></li>

          <li class=""><a href="#?hal=doctor&fun=portfolio">Tambahkan Portfolio</a></li>
          <li class=""><a href="#?hal=doctor&fun=create_language">Bahasa</a></li>
        </ul>
      </li>


      <li class="treeview ">
        <a href="#">
          <i class="fa fa-wheelchair"></i> <span>Pasien</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">

          <li class=""><a href="#?hal=patient&fun=create">Tambahkan Pasien</a></li>
          <li class=""><a href="#?hal=patient&fun=index">Daftar Pasien</a></li>
          <li class=""><a href="#?hal=patient&fun=import_csv_data">Import Data CSV </a></li>
          <li class=""><a href="#?hal=patient&fun=document_form">Tambahkan Dokumen</a></li>
          <li class=""><a href="#?hal=patient&fun=document">Daftar Dokumen</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa ti-calendar"></i> <span>Jadwal</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="#?hal=schedule&fun=create_slot">Tambahkan Time Slot</a></li>
          <li class=""><a href="#?hal=schedule&fun=create">Tambahkan Jadwal</a></li>
          <li class=""><a href="#?hal=schedule&fun=index">Daftarkan Jadwal</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-arrow-circle-right"></i> <span>Farmasi </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          <li class=""><a href="#?hal=pharmacy&fun=category_form"> Tambahkan Jenis Obat</a></li>
          <li class=""><a href="#?hal=pharmacy&fun=category_index">Daftar Jenis Obat</a></li>
          <li class=""><a href="#?hal=pharmacy&fun=medicine_form"> Tambahkan Obat</a></li>
          <li class=""><a href="#?hal=pharmacy&fun=medicine_index">Daftar Obat</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa ti-book"></i><span>Resep</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          <li class=""><a href="#?hal=prescription&fun=case_study_create">Tambahkan Studi kasus Pasien</a></li>
          <li class=""><a href="#?hal=prescription&fun=case_study">Daftar Studi kasus Pasien</a></li>
          <li class=""><a href="#?hal=prescription&fun=create">Tambahkan Resep</a></li>
          <li class=""><a href="#?hal=prescription&fun=index">Daftar Resep</a></li>
        </ul>
      </li>

      <li class="treeview {{ request()->routeIs('human_resource.*') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-users"></i> <span>Sumber Daya Manusia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          <li class="{{ request()->routeIs('human_resource.create') ? 'active' : '' }}"><a href="{{ url('/dashboard/human_resource/create') }}">Tambahkan Karyawan</a></li>
          <li class="{{ request()->routeIs('human_resource.index') ? 'active' : '' }}"><a href="{{ url('/dashboard/human_resource') }}">Daftar Karyawan</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-bed"></i> <span>Manajer Tempat Tidur </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="#?hal=bed_manager&fun=room_form">Tambahkan Kamar</a></li>
          <li class=""><a href="#?hal=bed_manager&fun=room">Daftar Kamar</a></li>
          <li class=""><a href="#?hal=bed_manager&fun=bed_form">Tambahkan Tempat Tidur</a></li>
          <li class=""><a href="#?hal=bed_manager&fun=bed">Daftar Tempat Tidur</a></li>
          <li class=""><a href="#?hal=bed_manager&fun=bed_assign_create">Tugaskan Tempat Tidur</a></li>
          <li class=""><a href="#?hal=bed_manager&fun=bed_assign">Daftar Tempat Tidur</a></li>
          <li class=""><a href="#?hal=bed_manager&fun=report">Laporan</a></li>
          <li><a href="#?hal=bed_manager&fun=bed_assign_bed_transfer_list">Daftar Transfer Tempat Tidur</a></li>
        </ul>
      </li>


      <li class="treeview ">
        <a href="#">
          <i class="fa fa-hospital-o"></i> <span>Pengobatan Dan Kunjungan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="#?hal=medication_visit&fun=medications_create">Tambahkan Obat Pasien</a></li>
          <li class=""><a href="#?hal=medication_visit&fun=medications">Daftar Obat Pasien</a></li>
          <li class=""><a href="#?hal=medication_visit&fun=visits_create">Tambahkan Kunjungan Pasien</a></li>
          <li class=""><a href="#?hal=medication_visit&fun=visits">Kunjungan Pasien List</a></li>
          <li class=""><a href="#?hal=medication_visit&fun=medications_report">Laporan Obat</a></li>
          <li class=""><a href="#?hal=medication_visit&fun=visits_report">Laporan Kunjungan</a></li>
          <li class=""><a href="#?hal=medication_visit&fun=medications_filtering">Laporan</a></li>
        </ul>
      </li>
    </ul> -->
    <ul class="sidebar-menu">
      <li class="{{ request()->is('dashboard/ppm/home') ? 'active' : '' }}"><a href="/dashboard/ppm/home"><i class="fa fa-home"></i>Dashboard</a></li>
      <li class="{{ request()->is('dashboard/ppm/data_kelengkapan') ? 'active' : '' }}"><a href="/dashboard/ppm/data_kelengkapan"><i class="fa fa-database"></i>Data Kelengkapan PPM</a></li>
      <li class="{{ request()->is('dashboard/ppm/registrasi') ? 'active' : '' }}"><a href="/dashboard/ppm/registrasi"><i class="fa fa-check-square-o"></i>Registrasi Alat include QR</a></li>
      <li class="{{ request()->is('dashboard/ppm/registrasi-aset') ? 'active' : '' }}"><a href="/dashboard/ppm/registrasi-aset"><i class="fa fa-check-square"></i>Registrasi Alat tanpa QR<b style="color: red">(NEW)</b></a></li>
      <li class="{{ request()->is('dashboard/ppm/data_inventaris') ? 'active' : '' }}"><a href="/dashboard/ppm/data_inventaris"><i class="fa fa-archive" aria-hidden="true"></i>Data Inventaris</a></li>
      <!---->
      <li class="treeview  {{ request()->is('dashboard/ppm/aset_teregistrasi') ? 'active' : '' }} {{ request()->is('dashboard/ppm/aset_unregistrasi') ? 'active' : '' }}
                        {{ request()->is('dashboard/ppm/lembar_pemeliharaan') ? 'active' : '' }} {{ request()->is('dashboard/ppm/jadwal_pemeliharaan') ? 'active' : '' }}">
        <a href="#" ><i class="fa fa-tasks" aria-hidden="true"></i>
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
              <li class="{{ request()->is('dashboard/ppm/aset_unregistrasi') ? 'active' : '' }}"><a href="/dashboard/ppm/aset_unregistrasi">Aset Unregistrasi</a></li>
              <!-- <li class=""><a href="/dashboard/ppm/aset_non_alkes">Non-Aset</a></li> -->
            </ul>
          </li>

          <li class="treeview {{ request()->is('dashboard/ppm/lembar_pemeliharaan') ? 'active' : '' }} {{ request()->is('dashboard/ppm/jadwal_pemeliharaan') ? 'active' : '' }}">
            <a href="#">
              <span>Pemeliharaan Preverentive</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ request()->is('dashboard/ppm/lembar_pemeliharaan') ? 'active' : '' }}"><a href="/dashboard/ppm/lembar_pemeliharaan">Lembar Pemeliharaan Alat</a></li>
              <li class="{{ request()->is('dashboard/ppm/jadwal_pemeliharaan') ? 'active' : '' }}"><a href="/dashboard/ppm/jadwal_pemeliharaan">Jadwal Pemeliharaan</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <!---->
      <li class="{{ request()->is('dashboard/ppm/laporan_kegiatan') ? 'active' : '' }}"><a href="/dashboard/ppm/laporan_kegiatan"><i class="fa fa-book" aria-hidden="true"></i>Laporan Kegiatan</a></li>
      <li class="{{ request()->is('dashboard/ppm/operator') ? 'active' : '' }}"><a href="/dashboard/ppm/operator"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Operator</a></li>
      <li class="{{ request()->is('dashboard/ppm/stock_opname') ? 'active' : '' }}"><a href="/dashboard/ppm/stock_opname"><i class="fa fa-cubes" aria-hidden="true"></i>Stock Opname</a></li>
      <li class="{{ request()->is('dashboard/ppm/analisis_data') ? 'active' : '' }}"><a href="/dashboard/ppm/analisis_data"><i class="fa fa-pie-chart" aria-hidden="true"></i>Analisis Data</a></li>
      <li class="{{ request()->is('dashboard/create-generete-qr') ? 'active' : '' }} only-lg"><a href="/dashboard/create-generete-qr"><i class="fa fa-qrcode" aria-hidden="true"></i>Generate QR</a></li>
      <li class="{{ request()->is('dashboard/ppm/scanner_qr') ? 'active' : '' }}"><a href="/dashboard/ppm/scanner_qr"><i class="fa fa-qrcode" aria-hidden="true"></i>Scanner QR</a></li>
      @if (Auth::user()->user_role == 'admin' && Auth::user()->kode_rs == "RS0006" )
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
      @endif
    </ul>
  </div> <!-- /.sidebar -->
</aside>