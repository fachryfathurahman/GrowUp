<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Grow Up <sup>TM</sup></div>
    </a>

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

    <!-- Heading -->
    <div class="sidebar-heading">
        Information
    </div>

    <!-- Nav Item - Stunting -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Apa itu Stunting?</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Stunting :</h6>
                <a class="collapse-item" href="/definition">Data Stunting</a>
                <a class="collapse-item" href="cards.html">Stunting di Indonesia</a>
            </div>
        </div>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link" href="/definition">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Definisi Stunting</span></a>
    </li>


    <!-- Nav Item - Dampak Stunting -->
    <li class="nav-item">
        <a class="nav-link" href="/impact">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Dampak Buruk Stunting</span></a>
    </li>


    <!-- Nav Item - Penyebab Stunting -->
    <li class="nav-item">
        <a class="nav-link" href="/cause">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Penyebab Stunting</span></a>
    </li>

    <!-- Nav Item - Mencegah Stunting -->
    <li class="nav-item">
        <a class="nav-link" href="/prevention">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Cara Mencegah Stunting</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a> --}}
        {{-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <form action="{{ route('logout') }}", method="POST">
                    @csrf
                    <button type="submit" class="collapse-item">logout</button>
                </form>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div> --}}
    {{-- </li> --}}

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        {{-- <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a> --}}
    </li>



    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        {{-- <button class="rounded-circle border-0" id="sidebarToggle"></button> --}}
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex"> --}}
        {{-- <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and
            more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a> --}}
    {{-- </div> --}}

</ul>
<!-- End of Sidebar -->
