<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 05:00:02 GMT -->

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

<body style="background:#151111">
<?php
// include_once 'models/system/db.php';
// $con= new Dbconn();   
// $conn=$con->DbConnect();  
//     $sqlQry = $conn->query("SELECT * FROM tbl_accountlogin ");         
//     if ($sqlQry->num_rows > 0) {
//              while ($rows = $sqlQry->fetch_array()){
//                     $u=$rows['Username'];
//                     $p=$rows['Password'];
//              }
//         }
        
?>

    <!-- Begin page -->
    <div class="wrapper-page" >
        <div class="card" style="background: #c49b63;border-radius: 10px">
            <div class="card-body"  style="background: #c49b63;border-radius: 10px">
                <h3 class="text-center m-0"><a href="index.html" class="logo logo-admin"></a></h3>
                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center" style="color: #fff!important">RUPP Cafe</h4>
                    <p class="text-muted text-center"  style="color: #fff!important"><i class="ion-coffee"></i> Welcome To Page Admin <i class="ion-coffee"></i></p>
                    <form class="form-horizontal m-t-30" action="login.php"                 
                      method="post" id="from" >
                        <div class="form-group">
                            <label for="username"  style="color: #fff!important">Username</label> 
                            <input type="text" class="form-control" id="username" name="username" placeholder="User Name"  autofocus>
                            <p id="user" style="color:red"><p>
                        </div>
                        <div class="form-group">
                            <label for="userpassword"  style="color: #fff!important">Password</label>
                             <input type="password" class="form-control" id="userpassword" name="pwd"  placeholder="Password">
                             <p id="pwd"><p>
                            </div>
                        <div class="form-group row m-t-20">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="customControlInline"> 
                                <label class="custom-control-label" for="customControlInline"  style="color: #fff!important">Remember me</label></div>
                            </div>
                            <div class="col-6 text-right"><button class="btn  w-md waves-effect waves-light" type="submit" name="submit"  id="btn" onclick="mylogin()" style="background:#151111;border-color:#151111;color:#fff">Log In</button></div>
                        </div>
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20" ><a href="pages-recoverpw.html" class="text-muted"  style="color: #fff!important"><i class="mdi mdi-lock"></i> Forgot your password?</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="m-t-40 text-center">
            <!-- <p>Don't have an account ? <a href="pages-register.php" class="text-primary">Signup Now</a></p> -->
            <p>© <?php echo date('Y')?> RUPP cafe<i class="mdi mdi-heart text-danger"></i> by Group 1 </p>
        </div>
    </div><!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 05:00:02 GMT -->
<script>
    // function mylogin(){
    //     var u=document.getElementById('username');
    //     var p=document.getElementById('password');
    //     if(u=='null' || p=='null'){
    //          document.getElementById('user').innerHTML="sdgvdxd"
    //     }
    // }
</script>

</html>
