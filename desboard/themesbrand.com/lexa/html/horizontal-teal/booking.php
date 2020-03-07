<?php
 echo "Hello";
 include_once 'models/system/db.php';
 $con= new Dbconn();   
  $conn=$con->DbConnect();
  $fname='';
  $lname='' ;
  $date='';
  $time='';
  $phone='';
  $message='';
  if(isset($_POST['btn'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $sql = "INSERT INTO tbl_custbooking (`fristname`,`lestname`,`date`,`time`,`phone`,`message`) VALUES ('".$fname."','".$lname."','".$date."','".$time."','".$phone."','".$message."')";
        // echo $sql;exit();
        $sqlQry = $conn->query($sql);
        if(!$sqlQry){
        echo "NO";
        }
        else{
            echo "<script> location.href='../../../../../coffee/index.php'; </script>";
            // $print_r($_FILES);
        }
  }
?>