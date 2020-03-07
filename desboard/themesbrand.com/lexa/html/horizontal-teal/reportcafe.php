
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
    <link rel="shortcut icon" href="assets/images/aa.png"><!-- DataTables -->
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

   $sqlQry = $conn->query("SELECT * FROM tbl_food");       

   
   ?>
    <div class="wrapper">
        <div class="container-fluid">          

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20" >
                        <div class="card-body">
                            <div class="container" >
                                <div class="row">
                                    <div class="col-3">                                        
                                            <h4 class="mt-0 header-title">Report Cafe </h4>                                                                          
                                    </div>                                
                                    <div class="col-6">
                                    <div class="form-group">
                                            <div class="form-group row" id="type">
                                                <div class="col-sm-12">
                                                    <select class="form-control"  name="type" onchange="mytotal(this.value)">                                        
                                                        <option value="">---- Total of Price ----</option>     
                                                        <option value="2">Total</option>     
                                                    </select> 
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-3" style="text-align: right; ">
                                        <div class="form-group">
                                            <div class="form-group row" id="type">
                                                <div class="col-sm-12">
                                                    <select class="form-control"  name="type" onchange="myselect(this.value)">                                        
                                                        <option value="1">Active </option>
                                                        <option value="0">Inactive</option>                                        
                                                        <option value="2">All</option>                                        
                                                    </select> 
                                                </div>
                                            </div>
                                        </div> 
                                    </div>                                    
                                </div>
                            <!-- </div>                        -->
                            
                            
                        <p class="text-muted"></p>    
                            <div id="txtHint">
                            </div>
                        </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->

<!-- Modal -->


<
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
   
    <!-- ===================== -->   
    <script >
                        
          function myselect(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else { 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","gettable/cafe.php?q="+str,true);
                    xmlhttp.send();
                }
        }
         function mytotal(str){
            if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else { 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","gettable/percafe.php?per="+str,true);
                    xmlhttp.send();
                }
         }
    </script> 
</body>
</html>

 