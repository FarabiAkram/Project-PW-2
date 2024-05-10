<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
        <img src="../dist/img/ALFARABI.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Alfarabi CHC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-2 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../dist/img/avatar5.png" class="img-rounded elevation-2 mt-3" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Muhammad Farabi<br>Akram Dzikrika</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                    <a href="../index.php" class="nav-link">
                    <i class="fa-solid fa-house-circle-check"></i>
                        <p>
                            Halaman Utama
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../pasien" class="nav-link">
                    <i class="fa-solid fa-bed-pulse"></i>
                        <p>
                            Table Pasien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../paramedik" class="nav-link">
                    <i class="fa-solid fa-hospital"></i>
                        <p>
                            Table Paramedik
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../periksa" class="nav-link">
                    <i class="fa-solid fa-check-to-slot"></i>
                        <p>
                            Table Periksa
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                        <p>
                            Table Lainnya
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Kelurahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../unit_kerja" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Unit Kerja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../users" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../login.php" class="nav-link">
                    <i class="fa-solid fa-person-hiking"></i>
                        <p> Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>