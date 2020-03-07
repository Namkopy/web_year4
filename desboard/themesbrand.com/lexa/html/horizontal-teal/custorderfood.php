<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Rupp Cafe</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/cafe.jpg"><!-- DataTables -->
    <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"><!-- Responsive datatable examples -->
    <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
   include_once 'navbarheader.php';
   include_once 'models/system/db.php';
   $con= new Dbconn();   
 $conn=$con->DbConnect();


  $sqlQry = $conn->query("SELECT * FROM tbl_perorderfood where status=1 group by phone ");
       
   ?>
    <div class="wrapper">
        <div class="container-fluid">          

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">                                        
                                            <h4 class="mt-0 header-title">View Customer order Food</h4>                                                                          
                                    </div>
                                    <div class="col-6" style="text-align: right; ">
                                        <div class="row" >
                                        <div class="col-12">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>                         
                            
                            
                        <p class="text-muted"></p>
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Frist Name</th>
                                        <th>Lest Name</th>
                                        <th>Location</th>
                                        <th>Phone</th>
                                        <th>Email</th>                                        
                                        <th>Date</th>                                       
                                        <th>datail</th>                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if($sqlQry->num_rows > 0){
                                    while ($rows = $sqlQry->fetch_array()) {
                                        
                                       
                                        echo "<tr>";                                           
                                           
                                            echo "<td>{$rows['fristname']}</td>";
                                            echo "<td>{$rows['lastname']}</td>";
                                            echo "<td>{$rows['Location']}</td>";
                                            echo "<td>{$rows['phone']}</td>";
                                            echo "<td>{$rows['email']}</td>";
                                            echo "<td>{$rows['date']}</td>";
                                            echo"<td style='text-align: center'>                                      
                                            <a  href='viewfood.php?id={$rows['phone']}'>
                                            <button type='button' class='btn btn-info waves-effect ion-eye'></button>
                                            </a>
                                        </td>
                                            ";
                                           
                                        echo "</tr>";
                                    }

                                }
                                ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->
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
    </footer><!-- End Footer -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- Required datatable js -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script><!-- Buttons examples -->
    <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="../plugins/datatables/vfs_fonts.js"></script>
    <script src="../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/buttons.print.min.js"></script>
    <script src="../plugins/datatables/buttons.colVis.min.js"></script><!-- Responsive examples -->
    <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script><!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:50 GMT -->

</html>