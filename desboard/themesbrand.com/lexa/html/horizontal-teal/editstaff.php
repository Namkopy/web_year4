
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/aa.png"><!-- DataTables -->
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
   $id=$_GET['id'];
   $sql = "SELECT * FROM tbl_staff WHERE code=$id";
   $sqlQry = $conn->query($sql);   
   if($sqlQry->num_rows > 0){
     $result = $sqlQry->fetch_array();
   }
   $name = '';
   $gender = '';
    $dob = '';
   $address = '';
   $type = '';
   if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $gender=$_POST['gender'];       
    $dob=$_POST['dob']; 
    $address=$_POST['address']; 
    $type=$_POST['type']; 
       if(!empty($_FILES['img'])){
         
        $img=basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'],"upload/staff/".$img);
       
     }
        if($img==''){

            $img=$result['image'];            
            $sqlupdate="UPDATE tbl_staff set name='".$name."',gender='".$gender."',DOB='".$dob."',type='".$type."',address='".$address."',image='".$img."' WHERE code=$id";
         
        }
        else{
            $sqlupdate="UPDATE tbl_staff set name='".$name."',gender='".$gender."',DOB='".$dob."',type='".$type."',address='".$address."',image='".$img."' WHERE code=$id";}
        $sqlQry1 = $conn->query($sqlupdate);
        if(!$sqlQry1){
            echo '<script>alert("hii")</script>';
            // exit();
        }
        else{
            echo "<script> location.href='staff.php'; </script>";
            // $print_r($_FILES);
        }
     
    }
?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-20">
                        <div class="card-body">                            
                            <h4 class="mt-0 header-title"> Edit Cafe</h4>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group"><input type="text" class="form-control"
                                        required value="<?php echo $result['name'] ?>" name="name">
                                </div>
                                <div class="form-group">
                                <div class="form-group row" id="type">
                                    <div class="col-sm-12">
                                        <select class="form-control"  name="gender">
                                            <?php
                                            if($result['gender']=='Male'){
                                                echo "<option value='Male'>Male</option>
                                                <option value='Famale '>Famale</option>";
                                            }
                                            else{
                                                echo "
                                                <option value='Famale '>Famale</option>
                                                <option value='Male'>Male</option>
                                                ";
                                            }
                                            ?>                                         
                                        </select> 
                                    </div>
                                </div>                               
                                <div class="form-group"><input type="text" class="form-control"
                                        required value="<?php echo $result['DOB'] ?>" name="dob">
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="form-group row" id="type">
                                    <div class="col-sm-12">
                                        <select class="form-control"  name="type">
                                            <?php
                                            if($result['type']=='CEO'){
                                            echo "<option value='CEO' >CEO</option>";
                                            echo "<option value='Manager' >Manager</option>";
                                            echo "<option value='Staff' >Staff</option>";
                                            }
                                            else if($result['type']=='Manager'){
                                                echo "<option value='Manager' >Manager</option>";
                                                echo "<option value='Staff' >Staff</option>";
                                                echo "<option value='CEO' >CEO</option>";
                                                
                                            }
                                            else{
                                                echo "<option value='Staff' >Staff</option>";
                                                echo "<option value='CEO' >CEO</option>";
                                                echo "<option value='Manager' >Manager</option>";
                                            }

                                            ?>                                                  
                                        </select> 
                                    </div>
                                </div> 
                   
                            <div class="form-group">
                                <input type="file" class="filestyle" data-buttonname="btn-secondary" name="img">
                        </div>          
                                                      
                        <div class="form-group">
                        <div><textarea required class="form-control" rows="5" placeholder="Address Of Satff" name="address"><?php echo $result['address'] ?></textarea></div>
                    </div>
                                <div class="form-group mb-0">
                                    <div><button type="submit" name="submit"
                                            class="btn btn-primary waves-effect waves-light mr-1">Submit</button>
                                        <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div> 
                 </div><!-- end col -->      
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end wrapper -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">© 2018 - 2019 Lexa <span class="d-none d-sm-inline-block">- Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.</div>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- Parsley js -->
    <script src="../plugins/parsleyjs/parsley.min.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="../plugins/select2/js/select2.min.js"></script>
    <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
    <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script><!-- Plugins Init js -->
    <script src="assets/pages/form-advanced.js"></script><!-- App js -->
    <script>$(document).ready(function () {
            $('form').parsley();
        });</script>
</body>
<!-- </html> -->
