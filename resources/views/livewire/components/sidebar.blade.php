<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion bg-secondary sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('admin.dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{route('admin.category') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Category
                            </a>
                            <a class="nav-link" href="{{route('admin.tasks') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Task
                            </a>
                            <a class="nav-link" href="{{route('admin.users') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               User
                            </a>
                         </div>
                        </div>
                    <div class="sb-sidenav-footer  sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>

