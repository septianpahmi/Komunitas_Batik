<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link{{ request()->routeIs('dashboard') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">MAIN DATA</li>
                @if (Auth::user()->role == 'superadmin')
                    <li class="nav-item">
                        <a href="{{ route('galeri') }}"
                            class="nav-link{{ request()->routeIs('galeri') ? ' active' : '' }}">
                            <i class="nav-icon fas fa-image"></i>
                            <p>Galeri</p>
                        </a>
                    </li>
                @endif
                {{-- @if (Auth::user()->role == 'dahlia' || Auth::user()->role == 'viena' || Auth::user()->role == 'rajava') --}}
                <li class="nav-item">
                    <a href="{{ route('kegiatan') }}"
                        class="nav-link{{ request()->routeIs('kegiatan') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Kegiatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('team') }}" class="nav-link{{ request()->routeIs('team') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Team</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produk') }}" class="nav-link{{ request()->routeIs('produk') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>Produk</p>
                    </a>
                </li>
                {{-- @endif --}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
