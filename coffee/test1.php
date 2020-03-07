<?php
include_once "function/db.php";
$con= new Dbconn();
  $conn=$con->DbConnect();
    $fname='';
    $lanme='';
    $location='';
    $phone='';
    $email='';
    if(isset($_POST['btn'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $location=$_POST['location'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        date_default_timezone_set("America/New_York");
        $date = date("yy/m/d");
        $sql="UPDATE tbl_perorderdrink set fristname='".$fname."',lastname='".$lname."',phone='".$phone."',email='".$email."'
        ,Location='".$location."',date='".$date."',`status`=1 WHERE `status`=0";
        if($conn->query($sql)){
            echo "<script> location.href='index.php'; </script>";
        }
        else{
            exit;
        }
    }
?>