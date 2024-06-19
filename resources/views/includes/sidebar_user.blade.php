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

            <li class="{{ request()->is('dashboard_user') ? 'active' : '' }} ">
                <a href="/dashboard_user"><i class="fa fa ti-home"></i> Dashboard</a>
            </li>
            <li
                class="treeview {{ request()->is('dashboard_user/perbaikan_teregistrasi*') ? 'active' : '' }} {{ request()->is('dashboard_user/perbaikan_unregistrasi*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-wrench" aria-hidden="true"></i>
                    <span>Pemeliharaan Aset</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li
                        class="treeview {{ request()->is('dashboard_user/perbaikan_teregistrasi*') ? 'active' : '' }} {{ request()->is('dashboard_user/perbaikan_unregistrasi*') ? 'active' : '' }}">
                        <a href="#">
                            <span>Pemeliharaan Korektif</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{ request()->is('dashboard_user/perbaikan_teregistrasi*') ? 'active' : '' }}"><a
                                    href="/dashboard_user/perbaikan_teregistrasi">Aset Teregistrasi</a></li>
                            <li class="{{ request()->is('dashboard_user/perbaikan_unregistrasi*') ? 'active' : '' }}"><a
                                    href="/dashboard_user/perbaikan_unregistrasi">Aset Unregistrasi</a></li>
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
