<?php
 session_start();
include_once 'models/system/db.php';
$con= new Dbconn();   
$conn=$con->DbConnect();
$un='';
$pwd='';
// $_SESSION['username']=$_POST['username'];
// $_SESSION['pwd']=$_POST['pwd'];

if (isset($_POST['submit'])) {
// //   ====================Customer order=========================
//     $cafe=$conn->query("SELECT sum(price+4000) as total FROM tbl_perordercafe WHERE `status`='2'");
//     if($cafe->num_rows >0){
//        $Row=$cafe->fetch_array();}
//             $tcafe=$Row['total'];
        
//      $food=$conn->query("SELECT sum(price+4000) as total FROM tbl_perorderfood WHERE `status`='2'");
//     if($food->num_rows >0){
//        $Row=$food->fetch_array();}
//            $tfood= $Row['total'];
//  $drink=$conn->query("SELECT sum(price+4000) as total FROM tbl_perorderdrink WHERE `status`='2'");
//     if($drink->num_rows >0){
//        $Row=$drink->fetch_array();}
//             $tdrink=$Row['total'];

//        $total=$tcafe+$tdrink+$tfood; $_SESSION['order']=$total;
// // ============================================================


     $un=$_POST['username'] ;
    $pwd=$_POST['pwd'];
    $sqlQry = $conn->query("SELECT code,rule,Username FROM v_login where Username='".$un."' AND Password='".$pwd."' AND status=1 ");         
    
     $rows = mysqli_fetch_array($sqlQry);
   
    $r=$rows['rule'];
    $user=$rows['Username'];
    $_SESSION['rule']=$r;
    $_SESSION['name']=$user;
    $staffcode=$rows['code'];
        $sqlimage=$conn->query("SELECT `image` FROM tbl_staff WHERE code='".$staffcode."'");
        $row = mysqli_fetch_array($sqlimage);
        $img=$row['image'];
        $_SESSION['img']=$img;
   
    if ($sqlQry->num_rows > 0) {     
        // $rows = mysqli_fetch_array($result);
        // $rule=$rows['rule'];
        // $_SESSION["rule"]=$rule;

              echo "<script> location.href='index.php'</script>";
                // echo $r;
            }else{
                echo "<script> location.href='pages-login.php'</script>";

             }
                            }
                        
                
?>