
<?php require_once ("_sidebar.php"); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                  <h3>SureCow</h3>

                  <?php require_once ("_navigation.php"); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    


                   

                    <div class="row">

                      
                        <div class="col-xl-12 col-lg-12">
                             <!-- Content Row -->
                    <div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class=" col-md-4 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">All Total sales
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">₦ 
<?php//$total_amount; ?></div>
                        </div>
                      
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-md-4 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Total Premiums this month</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //$num_total_sales; ?></div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Total Clients</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // $all_visits; ?></div>
                </div>
               
            </div>
        </div>
    </div>
</div>

</div>

<!-- Content Row -->

                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            
                            
                        </div>
                    </div>

                    <!-- Content Row -->




                    <div class="row">                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                                 <!-- Begin Page Content -->
                <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Clients</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Farm/Ranch name</th>
                        <th>Coverages</th>
                        <th>Expiration</th>
                        <th>Premium</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Client</th>
                        <th>Farm/Ranch name</th>
                        <th>Coverages</th>
                        <th>Expiration</th>
                        <th>Premium</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php foreach ($list_order as $orders) {
                        $location = $orders->location_id;
                        $order_url = BASE_URL.'users/orders/'.$orders->id;
                    ?>
                    <tr>
                        <td><?= $orders->order_number; ?></td>
                        <td><?= $orders->email; ?><br><span style='color:#0EAD69'><?= $orders->phone_number; ?></span></td>
                        <td><?= date('d-M-Y',$orders->date_checkout);
                          ?></td>
                        <td><i class="fa-circle fa-solid" <?php switch($orders->status) {
                            case "Pending":
                                echo "style='color:#FC3131'";
                                break;
                            case "Ready":
                                echo "style='color:#FF9B00'";
                                break;
                                case "Delivered":
                                    echo "style='color:##0EAD69'";
                                    break;
                                    case "In transit":
                                        echo "style='color:#0009A2'";
                                        break;
                                        case "Preparing":
                                            echo "style='color:#006ED4'";
                                            break;
                           
                            default:
                                echo "style='color:#006ED4'";
                        }?>></i> <?= $orders->status; ?></td>
                        <td><?php
                          switch($location) {
                            case 1:
                                echo "Lagos Island";
                                break;
                            case 2:
                                echo "Apata";
                                break;
                                case 11:
                                    echo "Koshofe";
                                    break;
                                    case 14:
                                        echo "Lagos Mainland";
                                        break;
                                        case 15:
                                            echo "Apapa";
                                            break;
                           
                            default:
                                echo "No location.";
                        }
                      
                        ?></td>
                        <td> <a href="<?= $order_url?>">View orders</a></td>
                    </tr>
                    <?php
                }
                ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

                           
                           

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <?php require_once ("_footer.php"); ?>
