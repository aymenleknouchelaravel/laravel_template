<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="../dashboard/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{auth()->user()->name}} {{auth()->user()->surname}}</span>
                    <span class="text-secondary text-small">{{auth()->user()->role}}</span>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/home">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/Users">
                <span class="menu-title">Sale Page</span>
                <i class="mdi mdi-point-of-sale menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/Users">
                <span class="menu-title">Sales</span>
                <i class="mdi mdi-history menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-gesture-double-tap menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/buttons.html">Add Product</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/typography.html">All Products</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-shape menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/buttons.html">Add Category</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/typography.html">All Categories</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/Users">
                <span class="menu-title">Sellers</span>
                <i class="mdi mdi-account-group menu-icon"></i>
            </a>
        </li>
        
    
    </ul>
</nav>