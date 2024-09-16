<style>
        span > .cart-count{

}
    </style>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL?>">
                <div class="sidebar-brand-icon">
                <img src='<?= THEME_DIR?>img//meat247-logo-01-1.png'>
                </div>
                <div class="sidebar-brand-text mx-3"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE_URL?>users/dashboard">
                    <i class="fas fa-fw fa-users"></i>
                    <span>My clients</span></a>
            </li>
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="<?= BASE_URL?>users/products_page">
                    <i class="fas fa-fw fa-clipboard"></i>
                    <span>My quotes</span></a>
            </li>
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="<?= BASE_URL?>users/order">
                    <i class="fas fa-fw fa-wallet"></i>
                    <span>Billing</span> <span><?php// $num_total_sales; ?></span></a>
            </li>
            
          

            <li class="nav-item ">
                <a class="nav-link" href="<?= BASE_URL?>users/butcheries">
                    <i class="fas fa-fw fa-file-lines"></i>
                    <span>Reports </span></a>
            </li>


      
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <li class="nav-item ">
                <a class="nav-link" href="<?= BASE_URL?>users/settings">
                    <i class="fas fa-fw fa-network-wired"></i>
                    <span>Refferals</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>logout</span></a>
            </li>
          

        </ul>
        <!-- End of Sidebar -->