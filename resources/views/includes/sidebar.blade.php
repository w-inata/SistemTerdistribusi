<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Rental kamera</div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item mt-3">
                <a class="nav-link" href="{{route('products.index')}}">
                    <i class="fas fa-fw fa-camera"></i>
                    <span>Products</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('rental.index')}}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Riwayat rental saya</span></a>
            </li>

           


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>