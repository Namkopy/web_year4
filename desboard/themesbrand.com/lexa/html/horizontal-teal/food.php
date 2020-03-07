
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Rupp cafe</title>
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
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="container" >
                                <div class="row">
                                    <div class="col-6">                                        
                                            <h4 class="mt-0 header-title">View Product Of Food</h4>                                                                          
                                    </div>                                   
                                    <?Php if($_SESSION['rule']=='save'){?>
                                    <div class="col-6" style="text-align: right; ">
                                        <div class="row" >
                                            <div class="col-12">                                                                                        <!-- Button trigger modal -->
                                                <a href="addfood.php">
                                                <button type="button" class="btn btn-primary" data-toggle="modal">
                                                            Add New
                                                </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } if($_SESSION['rule']=='edit'){ ?>
                                        <div class="col-6" style="text-align: right; ">
                                            <div class="row" >
                                                <div class="col-12">                                                                                        <!-- Button trigger modal -->
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    <?php } if($_SESSION['rule']=='admin'){ ?>
                                        <div class="col-6" style="text-align: right; ">
                                        <div class="row" >
                                            <div class="col-12">                                                                                        <!-- Button trigger modal -->
                                                <a href="addfood.php">
                                                <button type="button" class="btn btn-primary" data-toggle="modal">
                                                            Add New
                                                </button>
                                                </a>
                                            </div>
                                    </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <!-- </div>                        -->
                            
                            
                        <p class="text-muted"></p>
                        <!-- ====================Rule Save===================== -->

                        <?Php if($_SESSION['rule']=='save'){?>
                            <!-- <div id="txtHint"> -->
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr >
                                            <th>Name</th>                                        
                                            <th>Detail</th>
                                            <th>price</th>
                                            <th>Image</th>                                        
                                            <th>Status</th>
                                              
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($sqlQry->num_rows > 0){
                                        while ($rows = $sqlQry->fetch_array()) {
                                            
                                            // print_r($result);
                                            echo "<tr>";                                           
                                                // echo "<td>{$rows['id']}</td>";
                                                echo "<td>{$rows['name']}</td>";
                                                echo "<td>{$rows['detail']}</td>";                                            
                                                echo "<td>{$rows['price']} ៛</td>";   
                                                echo "<td  style='text-align: center'><img src='upload/food/{$rows['image']}' alt='' style=' height: 50px; width: 50px;text-align: center'></td>";
                                                                                        
                                                if($rows['status']=="0"){
                                                    echo "<td style='color:#e84118' id='{$rows['id']}'>Inactive</td>";
                                                }else{
                                                    echo "<td style='color:#44bd32' id='{$rows['id']}'>Active</td>";
                                                }    
                                                
                                            echo "</tr>";
                                        }

                                    }
                                    ?>
                                </tbody>
                                </table>
                        <?php }?>

                          <!-- ====================Rule edit===================== -->

                          <?Php if($_SESSION['rule']=='edit'){?>
                            <!-- <div id="txtHint"> -->
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr >
                                            <th>Name</th>                                        
                                            <th>Detail</th>
                                            <th>price</th>
                                            <th>Image</th>                                        
                                            <th>Status</th>                                           
                                            <th>Edit</th>    
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($sqlQry->num_rows > 0){
                                        while ($rows = $sqlQry->fetch_array()) {
                                            
                                            // print_r($result);
                                            echo "<tr>";                                           
                                                // echo "<td>{$rows['id']}</td>";
                                                echo "<td>{$rows['name']}</td>";
                                                echo "<td>{$rows['detail']}</td>";                                            
                                                echo "<td>{$rows['price']} ៛</td>";   
                                                echo "<td  style='text-align: center'><img src='upload/food/{$rows['image']}' alt='' style=' height: 50px; width: 50px;text-align: center'></td>";
                                                                                        
                                                if($rows['status']=="0"){
                                                    echo "<td style='color:#e84118' id='{$rows['id']}'>Inactive</td>";
                                                }else{
                                                    echo "<td style='color:#44bd32' id='{$rows['id']}'>Active</td>";
                                                }    
                                                                                                                              
                                                echo"<td style='text-align: center'>                                      
                                                <a  href='editfood.php?id={$rows['id']}'>
                                                <button type='button' class='btn btn-danger waves-effect waves-light ion-edit'></button>
                                                </a>
                                            </td>
                                                ";
                                            echo "</tr>";
                                        }

                                    }
                                    ?>
                                </tbody>
                                </table>
                        <?php }?>

                          <!-- ====================Rule admin===================== -->

                          <?Php if($_SESSION['rule']=='admin'){?>
                            <!-- <div id="txtHint"> -->
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr >
                                            <th>Name</th>                                        
                                            <th>Detail</th>
                                            <th>price</th>
                                            <th>Image</th>                                        
                                            <th>Status</th>
                                            <th>Approve</th>
                                            <th>Edit</th>    
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($sqlQry->num_rows > 0){
                                        while ($rows = $sqlQry->fetch_array()) {
                                            
                                            // print_r($result);
                                            echo "<tr>";                                           
                                                // echo "<td>{$rows['id']}</td>";
                                                echo "<td>{$rows['name']}</td>";
                                                echo "<td>{$rows['detail']}</td>";                                            
                                                echo "<td>{$rows['price']} ៛</td>";   
                                                echo "<td  style='text-align: center'><img src='upload/food/{$rows['image']}' alt='' style='height: 50px; width: 50px;text-align: center'></td>";
                                                                                        
                                                if($rows['status']=="0"){
                                                    echo "<td style='color:#e84118' id='{$rows['id']}'>Inactive</td>";
                                                }else{
                                                    echo "<td style='color:#44bd32' id='{$rows['id']}'>Active</td>";
                                                }    
                                                if($rows['status']=='1'){
                                                    echo "<td style='text-align: center'><input type='checkbox'  id='ch' checked class ='ch' name='chcktbl1' value='{$rows['id']}' onclick='myadd(this.value)' > </td>";  
                                                }
                                                else{
                                                    echo "<td style='text-align: center'><input type='checkbox'  id='ch' name='chcktbl1  class ='ch' value='{$rows['id']}' onclick='myadd(this.value)'  ></td>";  
                                                }                                                                               
                                                echo"<td style='text-align: center'>                                      
                                                <a  href='editfood.php?id={$rows['id']}'>
                                                <button type='button' class='btn btn-danger waves-effect waves-light ion-edit'></button>
                                                </a>
                                            </td>
                                                ";
                                            echo "</tr>";
                                        }

                                    }
                                    ?>
                                </tbody>
                                </table>
                        <?php }?>
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
    <script src="assets/js/app.js"></script>
    <!-- ===================== -->   
    <script >
          function myadd(str){    
            var text = document.getElementById(str);

            //   alert('Test'+text.innerText);
              if(text.innerText=='Inactive'){
                if(window.XMLHttpRequest){
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    }else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                        }
                        };
                xmlhttp.open("GET","ajax/food/check.php?q="+str,true);
                xmlhttp.send();
                // document.getElementById("bb").innerHTML="Active");
                text.innerHTML="Active";
                text.style.color = "#44bd32";
                
                }
                else if(text.innerText=='Active'){
                    if(window.XMLHttpRequest){
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    }else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                        }
                        };
                xmlhttp.open("GET","ajax/food/uncheck.php?b="+str,true);
                xmlhttp.send();
                    text.innerHTML="Inactive";
                    text.style.color = "#e84118";
                }
            
          }                   
        //   function myselect(str) {
        //         if (str == "") {
        //             document.getElementById("txtHint").innerHTML = "";
        //             return;
        //         } else { 
        //             if (window.XMLHttpRequest) {
        //                 // code for IE7+, Firefox, Chrome, Opera, Safari
        //                 xmlhttp = new XMLHttpRequest();
        //             } else {
        //                 // code for IE6, IE5
        //                 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        //             }
        //             xmlhttp.onreadystatechange = function() {
        //                 if (this.readyState == 4 && this.status == 200) {
        //                     document.getElementById("txtHint").innerHTML = this.responseText;
        //                 }
        //             };
        //             xmlhttp.open("GET","gettable/food.php?q="+str,true);
        //             xmlhttp.send();
        //         }
        // }
    </script> 
</body>
</html>

 