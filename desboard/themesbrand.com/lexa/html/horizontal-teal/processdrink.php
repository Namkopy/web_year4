<?php 
include_once 'models/system/db.php';
$con= new Dbconn();   
 $conn=$con->DbConnect();

    $phone=$_GET['phone'];
    

    $sql="UPDATE tbl_perorderdrink SET  status=2 WHERE phone='".$phone."' ";
    $sql_query=$conn->query($sql);
    if($sql_query){
        echo "<script> location.href='custorderdrink.php'; </script>";
       
    }
    else{
        echo "<script> location.href='processdrink.php'; </script>";
      
    }

   



?>