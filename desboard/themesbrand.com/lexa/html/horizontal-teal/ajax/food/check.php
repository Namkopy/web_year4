 <?php
     include_once '../../models/system/db.php'; 
    $con= new Dbconn(); 
    $conn=$con->DbConnect();
    $id=$_GET['q'];
    date_default_timezone_set("America/New_York");
    $date = date("yy/m/d h:i:s");
    mysqli_select_db($con,"ajax_demo");
    $conn->query("UPDATE tbl_food set status='1', approveDate='".$date."'  where id='".$id."'");
    
   
?>