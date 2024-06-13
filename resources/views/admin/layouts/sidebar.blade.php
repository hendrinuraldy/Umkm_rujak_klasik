<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center"
        style="text-decoration: none; pointer-events: none;
    cursor: default;">
        <span class="brand-text font-weight-normal">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image mt-1">
                <i class="bi bi-person-workspace ml-2" style="color: white"></i>
            </div>
            <div class="info">
                <a href="#" class="d-block"
                    style="text-decoration: none; pointer-events: none;
                cursor: default;">{{ Auth::user()->username }}</a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>
                            Website
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('menu.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Tambah Menu
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.review') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    List Review
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.testimoni.show') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    List Testimoni
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.promo') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    List Promo
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.testimoni.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Tambah Testimoni
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.promo.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Tambah Promo
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
