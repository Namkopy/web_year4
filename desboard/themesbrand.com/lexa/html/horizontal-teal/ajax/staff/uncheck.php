<?php
     include_once '../../models/system/db.php'; 
    $con= new Dbconn(); 
    $conn=$con->DbConnect();
    $id=$_GET['b'];
    mysqli_select_db($con,"ajax_demo");
    $conn->query("UPDATE tbl_staff set status='0' where code='".$id."'");
    
   
?>