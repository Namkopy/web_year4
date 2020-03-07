<?php 
include_once 'models/system/db.php';
$con= new Dbconn();   
 $conn=$con->DbConnect();
    
    $phonefood=$_GET['phonefood'];


    $sql1="UPDATE tbl_perorderfood SET  status=2 WHERE phone='".$phonefood."' ";
    $sql_query1=$conn->query($sql1);
    if($sql_query1){
        echo "<script> location.href='custorderfood.php'; </script>";
       
    }
    else{
        echo "<script> location.href='processfood.php'; </script>";
      
    }



?>