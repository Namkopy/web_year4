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
    $phone=$_GET['id'];

    $sqlQry = $conn->query("SELECT *  FROM tbl_perorderfood WHERE phone='".$phone."'  and status=1 ");
       
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
                                            <h4 class="mt-0 header-title">Detail Product of customer order</h4>                                                                          
                                    </div>
                                    <div class="col-6" style="text-align: right; ">
                                        <div class="row" >
                                        <div class="col-12">
                                            <?php 
                                                $sqlQry = $conn->query("SELECT *  FROM tbl_perorderfood WHERE phone='".$phone."'  and status=1 ");
                                                if ($sqlQry->num_rows > 0) {
                                                    $rows = $sqlQry->fetch_array();
                                                }
                                            ?>
                                            <a href="processfood.php?phonefood=<?php echo $rows['phone']?>">
                                            <button type="button" class="btn btn-primary" data-toggle="modal">
                                                            Process 
                                            </button>
                                         </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                         
                            
                            
                        <p class="text-muted"></p>
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>                                      
                                                                             
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $sqlQry = $conn->query("SELECT *  FROM tbl_perorderfood WHERE phone='".$phone."'  and status=1 ");
                                 if($sqlQry->num_rows > 0){
                                    while ($rows = $sqlQry->fetch_array()) {
                                        echo "<tr>";           
                                            echo "<td>{$rows['name']}</td>";
                                            echo "<td  style='text-align: center'><img src='upload/food/{$rows['image']}' alt='' style=' height: 30px; width: 70px;text-align: center'></td>";
                                            echo "<td style='text-align: center'>{$rows['price']} ៛</td>";      
                                        echo "</tr>";
                                    }
                                }
                                    $sum = $conn->query("SELECT sum(price)+4000 total FROM tbl_perorderfood WHERE phone='".$phone."' and status=1 ");
                                    if($sum->num_rows > 0){
                                       $rows = $sum->fetch_array();}

                                    echo "<tr style='text-align: right'>
                                        <td colspan='2' style='text-align: right;color:#44bd32;font-weight: bold' >   Total :   </td>
                                        <td colspan='3' style='text-align: center;color:red'>  {$rows['total']} ៛ </td>

                                    </tr>";
                              
                                
                                ?>
                            </tbody>
                            <tr style="text-align: left; font-weight: bold"  ></tr>
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