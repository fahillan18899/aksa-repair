<aside class="main-sidebar">
  <!-- sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel text-center">
      @if(Auth::user()->user_role == 'user')
      @php
        $logoRs = [
          "RS0000" => "profile.png", "RS0001" => "rs_badarudin_kasim.png", "RS0002" => "rsi_wonosobo.png", "RS0003" =>  "rs_panti_wilasa.png",
          "RS0004" => "rsud_cilegon.png", "RS0005" => "rs_pondok_kopi.png", "RS0006" => "rsud_temanggung.png",
          "RS0007" => "rsu_jafar_medika.png", "RS0008" => "rs_pku_wonosobo.png", "RS0009" => "rsud_karanganyar.png",
          "RS0010" => "labkesda_bekasi.png", "RS0011" => "rsud_ungaran.png", "RS0012" => "rs_palang_biru.png", "RS0013" => "rsud_sanggau.png",
          "RS0014" => "rs_pku_muhammadiyah_tegal.png", "RS0015" => "rs_umi_barokah.png", "RS0016" => "rsui_boyolali.png",
          "RS0017" => "rs_darul_istiqomah_kendal.png", "RS0018" => "rs_panti_nugroho.png", "RS0019" => "rs_prima_sehat_pekalongan.png", 
          "RS0020" => "rsi_klaten.png", "RS0021" => "rsi_at_tin.png", "RS0022" => "rs_harapan_ibu.png", "RS0023" => "rsjd_soedjarwadi.png",
          "RS0024" => "rsui_yakssi.png", "RS0025" => "rsui_kustati.png", "RS0026" => "rsud_soeselo.png",
          "RS0027" => "rs_amal_sehat.png", "RS0028" => "rs_ortopedi_siaga_utama.png", "RS0030" => "rs_nirmala_suri.png",
          "RS0031" => "rsud_ansarisaleh.png", "RS0032" => "rsud_sultan_suriansyah.png", "RS0033" => "rsiy_pdhi_yogya.png",
          "RS0034" => "rs_permata_kuningan.png", "RS0035" => "rs_wijaya_kusuma.png",
          ];
      @endphp
      @if(isset($logoRs[Auth::user()->kode_rs]))
      <div class="image" style="margin-top: 60px;">
        <img src="{{ url('assets_web/img/placeholder/' . $logoRs[Auth::user()->kode_rs]) }}" class="img-circle" alt="Logo Rs">
      </div>
      @endif
      @endif
      <div class="info">
        @php
          $rumahSakit = [
            "RS0000" => "RS DEMO", "RS0001" => "RS BADARUDIN KASIM", "RS0002" => "RSI WONOSOBO", "RS0003" => "RS PANTIWILASA",
            "RS0004" => "RSUD CILEGON", "RS0005" => "RS PONDOK KOPI", "RS0006" => "RSUD TEMANGGUNG",
            "RS0007" => "RSU JAFAR MEDIKA", "RS0008" => "RS PKU WONOSOBO", "RS0009" => "RSUD KARANGANYAR",
            "RS0010" => "LABKESDA BEKASI", "RS0011" => "RSUD UNGARAN", "RS0012" => "RS PALANG BIRU", "RS0013" => "RSUD M. TH. DJAMAN SANGGAU",
            "RS0014" => "RS PKU MUHAMMADIYAH TEGAL", "RS0015" => "RS UMI BAROKAH", "RS0016" => "RSUI BOYOLALI",
            "RS0017" => "RS DARUL ISTIQOMAH KENDAL", "RS0018" => "RS PANTI NUGROHO", "RS0019" => "RS PRIMA SEHAT PEKALONGAN",
            "RS0020" => "RSI KLATEN", "RS0021" => "RSI AT-TIN", "RS0022" => "RS HARAPAN IBU PURBALINGGA", "RS0023" => "RSJD DR RM SOEDJARWADI",
            "RS0024" => "RSUI YAKSSI", "RS0025" => "RSUI KUSTATI", "RS0026" => "RSUD DR SOESELO",
            "RS0027" => "RS AMAL SEHAT WONOGIRI", "RS0028" => "RS ORTOPEDI SIAGA UTAMA", "RS0030" => "RS NIRMALA SURI",
            "RS0031" => "RSUD ANSARISALEH", "RS0032" => "RSUD SULTAN SURIANSYAH", "RS0033" => "RSIY PDHI YOGYAKARTA",
            "RS0034" => "RS PERMATA KUNINGAN", "RS0035" => "RS WIJAYA KUSUMA KUNINGAN",
            ];
        @endphp
        @if(isset($rumahSakit[Auth::user()->kode_rs]))
        <p>{{ $rumahSakit[Auth::user()->kode_rs] }}</p>
        @endif
        <p>{{ Auth::user()->username }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->user_role }} </a>
      </div>
    </div>

    <!-- sidebar menu -->
    <ul class="sidebar-menu">

      <li class="{{ request()->is('dashboard_user') ? 'active' : '' }} ">
        <a href="/dashboard_user"><i class="fa fa ti-home"></i> Dashboard</a>
      </li>
      <li class="treeview {{ request()->is('dashboard_user/perbaikan_teregistrasi*') ? 'active' : '' }} {{ request()->is('dashboard_user/perbaikan_unregistrasi*') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-wrench" aria-hidden="true"></i>
          <span>Pemeliharaan Aset</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview {{ request()->is('dashboard_user/perbaikan_teregistrasi*') ? 'active' : '' }} {{ request()->is('dashboard_user/perbaikan_unregistrasi*') ? 'active' : '' }}">
            <a href="#">
              <span>Pemeliharaan Korektif</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ request()->is('dashboard_user/perbaikan_teregistrasi*') ? 'active' : '' }}"><a href="/dashboard_user/perbaikan_teregistrasi">Aset Teregistrasi</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <!---->
      <li class="{{ request()->is('dashboard_user/stock_opname_user*') ? 'active' : '' }}">
        <a href="/dashboard_user/stock_opname_user">
          <i class="fa fa-archive"></i> <span>Stock Opname</span>
        </a>
      </li>
    </ul>
  </div> <!-- /.sidebar -->
</aside>