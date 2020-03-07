<?php 
include_once 'models/system/db.php';
$con= new Dbconn();   
 $conn=$con->DbConnect();
    
    $phonecafe=$_GET['phonecafe'];


    $sql1="UPDATE tbl_perordercafe SET  status=2 WHERE phone='".$phonecafe."' ";
    $sql_query1=$conn->query($sql1);
    if($sql_query1){
        echo "<script> location.href='custordercafe.php'; </script>";
       
    }
    else{
        echo "<script> location.href='processcafe.php'; </script>";
      
    }



?>