<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-bus"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AO Shuttle</div>
    </a>

    @if(auth()->user()->role== "leader")
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    @endif
    @if(auth()->user()->role == "admin")
    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('admin*') ? 'active' : '' }}" href="/admin">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Laporan Admin</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('admin*') ? 'active' : '' }} collapsed" href="#" data-toggle="collapse"
            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Data Karyawan</span></a>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/driver">Driver</a>
                <a class="collapse-item" href="/admin/codriver">Co-Driver</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/armada*') ? 'active' : '' }}" href="/admin/armada">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Data Armada</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    @endif
    @if(auth()->user()->role == "checker")
    <div class="sidebar-heading">
        Checker
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/checker">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Laporan Checker</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    @endif

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>