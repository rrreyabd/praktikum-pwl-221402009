<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-lock"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Nav Item - Postingan -->
    <li class="nav-item {{ request()->is('admin/postingan') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/postingan">
    <i class="fas fa-fw fa-folder"></i>
            <span>Semua Postingan</span></a>
    </li>
    
    <!-- Nav Item - Arsip -->
    <li class="nav-item {{ request()->is('admin/arsip') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/arsip">
            <i class="fas fa-fw fa-table"></i>
            <span>Arsip</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/akun') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/akun">
            <i class="fa fa-fw fa-user" aria-hidden="true"></i>
            <span>Pengguna</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/peta') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/peta">
            <i class="fa-solid fa-map"></i>
            <span>Peta</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/statistic') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/statistic">
            <i class="fa-solid fa-chart-simple"></i>
            <span>Statistik</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/task') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/task">
            <i class="fa-solid fa-list-check"></i>
            <span>Task</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/time') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/time">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Time</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>