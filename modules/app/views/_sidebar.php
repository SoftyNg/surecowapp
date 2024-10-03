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
                <img src='<?= BASE_URL?>images/loggline.png'>
                </div>
                <div class="sidebar-brand-text mx-3"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i> 
                    <span>My clients</span></a>
                    
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clients:</h6>
                        <a class="collapse-item" href="add_client">Add ckient</a>
                        <a class="collapse-item" href="cards.html">View client</a>
                    </div>
                </div>
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