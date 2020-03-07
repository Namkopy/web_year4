<?php
 session_start();
include_once 'models/system/db.php';
$con= new Dbconn();   
$conn=$con->DbConnect();
$un='';
$pwd='';
// $_SESSION['username']=$_POST['username'];
// $_SESSION['pwd']=$_POST['pwd'];


  
$staff=$conn->query("SELECT COUNT(*) as count FROM tbl_staff ");
if($staff->num_rows >0){
    $Row=$staff->fetch_array();}
        $st=$Row['count'];
echo $st;
    ?>