
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
   $sql = "SELECT * FROM tbl_drink WHERE id=$id";
   $sqlQry = $conn->query($sql);   
   if($sqlQry->num_rows > 0){
     $result = $sqlQry->fetch_array();
   }
   $name = '';
   $type = '';
   $size = '';
   $price = '';
   // $status = '';
   $des = '';
   if (isset($_POST['submit'])) {
       $name=$_POST['name'];
       $type=$_POST['type'];
       $size=$_POST['size'];
       $price=$_POST['price'];
       // $img=$_POST['img'];
       // $status=$_POST['status'];
       $des=$_POST['detail'];
       if(!empty($_FILES['img'])){
         
        $img=basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'],"upload/drink/".$img);
        // if()){
        //     echo '<script>alert("hii")</script>';
        //     // echo "<script> location.href='drink.php'; </script>";
        //     // exit ();
        // }else{
        //     echo '<script>alert("hello")</script>';
        // }
     }
        if($img==''){

            $img=$result['image'];            
            $sqlupdate="UPDATE tbl_drink set name='".$name."',type='".$type."',detail='".$des."',image='".$img."',price='".$price."' WHERE id=$id";
         
        }
        else{
            $sqlupdate="UPDATE tbl_drink set name='".$name."',type='".$type."',detail='".$des."',image='".$img."',price='".$price."' WHERE id=$id";
          }
        $sqlQry1 = $conn->query($sqlupdate);
        if(!$sqlQry1){
            echo '<script>alert("hii")</script>';
            // exit();
        }
        else{
            echo "<script> location.href='drink.php'; </script>";
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
                            
                            <h4 class="mt-0 header-title"> Edit drink</h4>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group"><input type="text" class="form-control"
                                        required placeholder="Name Of Drink" name="name"
                                         value="<?php echo $result['name'] ?>">
                                        </div>
                                
                                <div class="form-group">
                                <div class="form-group row" id="type">
                                    <div class="col-sm-12">
                                        <select class="form-control"  name="type">
                                            <?php 
                                            if($result['type']=='Cans'){
                                                echo "<option value='Cans'>Cans</option>"; 
                                                echo "<option value='Bottles'>Bottles</option>";
                                            }
                                            else{
                                                echo "<option value='Bottles'>Bottles</option>";
                                                echo "<option value='Cans'>Cans</option>"; 
                                            }
                                             ?>
                                        </select> 
                                    </div>
                                </div>
                                </div> 
                                <div class="form-group">
                        <input type="text" class="form-control"required placeholder="Price" id="price" name="price" value="<?php echo $result['price'] ?>">
                    </div>
                   
                    <div class="form-group">
                     <input type="file" class="filestyle" data-buttonname="btn-secondary" name="img" value="" laceholder="Detail" >
                    </div>                                        
                    <div class="form-group">
                        <div><textarea required class="form-control" rows="5" placeholder="Detail" name="detail"><?php echo $result['detail'] ?></textarea></div>
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
