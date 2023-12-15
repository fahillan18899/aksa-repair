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
    <ul class="sidebar-menu">

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
          <!-- <li class=""><a href="?hal=department&fun=main_department">Depeartemen Utama</a></li> -->
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

      <!-- patient info -->

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

      <!-- <li class="treeview ">
        <a href="#">
          <i class="fa fa ti-pencil-alt"></i> <span>Jadwal</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="#?hal=appointment&fun=create">Tambahkan Jadwal</a></li>
          <li class=""><a href="#?hal=appointment&fun=index">Daftar Jadwal</a></li>
          <li class=""><a href="#?hal=report&fun=assign_to_me"> Ditugaskan Kepada Saya</a></li>
          <li class=""><a href="#?hal=report&fun=assign_by_me"> Ditugaskan Oleh Saya </a></li>
          <li class=""><a href="#?hal=report&fun=assign_by_all"> Ditugaskan Oleh Semua </a></li>
          <li class=""><a href="#?hal=report&fun=assign_by_all_doctor">Ditugaskan Oleh Dokter </a></li>
          <li class=""><a href="#?hal=report&fun=assign_to_all_doctor"> Ditugaskan Kepada Dokter</a></li>
          <li class=""><a href="#?hal=report&fun=assign_by_all_representative"> Ditugaskan Oleh Perwakilan </a></li>
        </ul>
      </li> -->

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

      <!-- <li class="treeview ">
        <a href="#">
          <i class="fa ti-bag"></i> <span>Manajer Akuntansi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="?hal=accounts&fun=show_tree">Bagan Akun</a></li>
          <li class=""><a href="?hal=accounts&fun=debit_voucher">Voucher Debet</a></li>
          <li class=""><a href="?hal=accounts&fun=credit_voucher">Voucher Credit</a></li>
          <li class=""><a href="?hal=accounts&fun=contra_voucher">Voucher Contra</a></li>
          <li class=""><a href="?hal=accounts&fun=journal_voucher">Voucher Journal</a></li>
          <li class=""><a href="?hal=accounts&fun=aprove_v">Voucher Persetujuan</a></li>
          <li class="treeview ">
            <a href="#">
              <span>Laporan Akun</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href="?hal=accounts&fun=voucher_report">Laporan Voucher</a></li>
              <li class=""><a href="?hal=accounts&fun=cash_book">Buku Kas</a></li>
              <li class=""><a href="?hal=accounts&fun=bank_book">Buku Bank</a></li>
              <li class=""><a href="?hal=accounts&fun=general_ledger">Jurnal Umum</a></li>
              <li class=""><a href="?hal=accounts&fun=trial_balance">Trial Saldo</a></li>
              <li class=""><a href="?hal=accounts&fun=profit_loss_report">Rugi Laba</a></li>
              <li class=""><a href="?hal=accounts&fun=cash_flow_report">Arus Kas</a></li>
              <li class=""><a href="?hal=accounts&fun=coa_print">Bagan Cetak Akun</a></li>
            </ul>
          </li>

        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-shield"></i> <span>Asuransi </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="?hal=insurance&fun=form">Tambahkan Asuransi</a></li>
          <li class=""><a href="?hal=insurance&fun=index">Daftar Asuransi</a></li>
          <li class=""><a href="?hal=insurance&fun=limit_approval_form">Tambahkan Batas Persetujuan</a></li>
          <li class=""><a href="?hal=insurance&fun=limit_approval">Daftar Batas Persetujuan</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Penagihan </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="?hal=billing&fun=service_form">Tambahkan Layanan</a></li>
          <li class=""><a href="?hal=billing&fun=service">Daftar Layanan</a></li>
          <li class=""><a href="?hal=billing&fun=package_form">Tambahkan Paket</a></li>
          <li class=""><a href="?hal=billing&fun=package">Daftar Paket</a></li>
          <li class=""><a href="?hal=billing&fun=admission_form">Tambah Penerimaan Pasien</a></li>
          <li class=""><a href="?hal=billing&fun=admission">Daftar Penerimaan Pasien</a></li>
          <li class=""><a href="?hal=billing&fun=advance_form">Tambahkan Uang Muka</a></li>
          <li class=""><a href="?hal=billing&fun=advance">Daftar Pembayaran Dimuka</a></li>
          <li class=""><a href="?hal=billing&fun=bill_form">Tambahkan Tagihan</a></li>
          <li class=""><a href="?hal=billing&fun=bill">Daftar Tagihan</a></li>
        </ul>
      </li> -->


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

      <!--<li class="treeview ">
        <a href="#">
          <i class="fa fa-bell"></i> <span>Papan Peringatan </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="?hal=noticeboard/noticeboard_form">Tambahkan Pemberitahuan</a></li>
          <li class=""><a href="?hal=noticeboard/noticeboard">Daftar Pemberitahuan</a></li>
        </ul>
      </li>-->

      <!--<li class="treeview ">
        <a href="#">
          <i class="fa fa ti-settings"></i> <span>Pengaturan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="?hal=setting&fun=index">Pengaturan Aplikasi</a></li>
          <li class=""><a href="?hal=setting&fun=language"> Pengaturan Bahasa</a></li>
        </ul>
      </li>-->


      <!--<li class="treeview ">
        <a href="#">
          <i class="fa fa-comments-o"></i> <span>Pesan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="?hal=message&fun=new_message">Pesan Baru </a></li>
          <li class=""><a href="?hal=message&fun=message"> Kotak Masuk </a></li>
          <li class=""><a href="?hal=message&fun=sent">Terkirim </a></li>
        </ul>
      </li>-->

      <li class="treeview {{ request()->is('dashboard/ppm*') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-wrench" aria-hidden="true"></i><span>PPM</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ request()->is('dashboard/ppm/home') ? 'active' : '' }}"><a href="/dashboard/ppm/home">Dashboard</a></li>
          <li class="{{ request()->is('dashboard/ppm/data_kelengkapan') ? 'active' : '' }}"><a href="/dashboard/ppm/data_kelengkapan">Data Kelengkapan PPM</a></li>
          <li class="{{ request()->is('dashboard/ppm/registrasi') ? 'active' : '' }}"><a href="/dashboard/ppm/registrasi">Registrasi Alat</a></li>
          <li class="{{ request()->is('dashboard/ppm/data_inventaris') ? 'active' : '' }}"><a href="/dashboard/ppm/data_inventaris">Data Inventaris</a></li>
          <!---->
          <li class="treeview  {{ request()->is('dashboard/ppm/aset_teregistrasi') ? 'active' : '' }} {{ request()->is('dashboard/ppm/aset_unregistrasi') ? 'active' : '' }}
{{ request()->is('dashboard/ppm/lembar_pemeliharaan') ? 'active' : '' }} {{ request()->is('dashboard/ppm/jadwal_pemeliharaan') ? 'active' : '' }}">
            <a href="#">
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
          <li class="{{ request()->is('dashboard/ppm/laporan_kegiatan') ? 'active' : '' }}"><a href="/dashboard/ppm/laporan_kegiatan">Laporan Kegiatan</a></li>
          <li class="{{ request()->is('dashboard/ppm/operator') ? 'active' : '' }}"><a href="/dashboard/ppm/operator">Operator</a></li>
          <li class="{{ request()->is('dashboard/ppm/stock_opname') ? 'active' : '' }}"><a href="/dashboard/ppm/stock_opname">Stock Opname</a></li>
          <li class="{{ request()->is('dashboard/ppm/analisis_data') ? 'active' : '' }}"><a href="/dashboard/ppm/analisis_data">Analisis Data</a></li>
        </ul>
      </li>



    </ul>
  </div> <!-- /.sidebar -->
</aside>