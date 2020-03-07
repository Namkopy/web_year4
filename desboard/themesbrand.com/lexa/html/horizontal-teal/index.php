
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title> Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/aa.png"><!-- DataTables -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
   <?php
   
   include_once 'navbarheader.php';
   // ============================staff=============================
   session_start();
   include_once 'models/system/db.php';
   $con= new Dbconn();   
   $conn=$con->DbConnect();
    $staff=$conn->query("SELECT COUNT(*) as count FROM tbl_staff ");
    if($staff->num_rows >0){
    $Row=$staff->fetch_array();}
            $st=$Row['count'];
       $_SESSION['staff']=$st;


       $table=$conn->query("SELECT COUNT(*) as `table` FROM tbl_custbooking ");
       if($table->num_rows >0){
       $Row1=$table->fetch_array();}
               $st1=$Row1['table'];
          $_SESSION['table']=$st1;

// ============================end staff=============================
// /   ====================Customer order=========================
    $cafe=$conn->query("SELECT sum(price+4000) as total FROM tbl_perordercafe WHERE `status`='2'");
    if($cafe->num_rows >0){
       $Row=$cafe->fetch_array();}
            $tcafe=$Row['total'];
        
     $food=$conn->query("SELECT sum(price+4000) as total FROM tbl_perorderfood WHERE `status`='2'");
    if($food->num_rows >0){
       $Row=$food->fetch_array();}
           $tfood= $Row['total'];
 $drink=$conn->query("SELECT sum(price+4000) as total FROM tbl_perorderdrink WHERE `status`='2'");
    if($drink->num_rows >0){
       $Row=$drink->fetch_array();}
            $tdrink=$Row['total'];

       $total=$tcafe+$tdrink+$tfood; $_SESSION['order']=$total;
// ============================================================
   ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6" >
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img"  style="background: #4cd137">
                            <div class="mini-stat-icon">
                                <i class="mdi  mdi-eye float-right">

                                </i></div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Customer Visiter </h6>
                                
                                <h4 class="mb-4">1,587</h4>
                                <hr style="border-top: 2px dotted  #fff ">
                                <!-- <span class="badge badge-info">+11% </span>
                                <span class="ml-2">Update </span> -->
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img"  style="background: #f9ca24">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-calendar-check float-right"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Booking Table</h6>
                                <h4 class="mb-4"><?php echo $_SESSION['table'] ?></h4>
                                <hr style="border-top: 2px dotted  #fff ">
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img" style="background: #7ed6df">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-cart-outline float-right"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Order</h6>
                                <h4 class="mb-4"><?php echo $_SESSION['order']  ?>៛</h4>
                                <hr style="border-top: 2px dotted  #fff ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img" style="background:#e84118">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-account-multiple float-right"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Staff</h6>
                                <h4 class="mb-4"><?php echo $_SESSION['staff'] ?></h4>
                                <hr style="border-top: 2px dotted  #fff ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Line Chart</h4>
                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                <li class="list-inline-item">
                                    <h5 class="mb-0">86541</h5>
                                    <p class="text-muted">Activated</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="mb-0">2541</h5>
                                    <p class="text-muted">Pending</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="mb-0">102030</h5>
                                    <p class="text-muted">Deactivated</p>
                                </li>
                            </ul><canvas id="lineChart" height="300"></canvas>
                        </div>
                    </div>
                </div><!-- end col -->
                
            </div>
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">© 2020 - 2021 Class E6
                    <span class="d-none d-sm-inline-block">- Crate 
                        <i class="mdi mdi-heart text-danger">

                        </i> by Group 1
                    </span>.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js">
    </script>
    <script src="assets/js/jquery.slimscroll.js">
    </script>
    <script src="assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael-min.js"></script>
    <script src="assets/pages/dashboard.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
   <!--Chartist Chart-->
   <script src="../plugins/chartist/js/chartist.min.js"></script>
    <script src="../plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/pages/chartist.init.js"></script><!-- App js -->   
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    
   <!-- Chart JS -->
    <script src="../plugins/chart.js/chart.min.js"></script>
    <script src="assets/pages/chartjs.init.js"></script><!-- App js -->
    
</body>
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:25 GMT -->

</html>