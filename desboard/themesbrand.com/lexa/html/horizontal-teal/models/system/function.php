<?php
 require_once ('db.php');

 function InsertRecord(){
     global $conn;
     $name=$_POST['Uname'];
    //  $type=$_POST['Utype'];
     $detali=$_POST['Udetail'];
     $image=$_POST['Uimg'];
     $price=$_POST['Uprice'];
     $status=$_POST['Ustatus']; 
    //  if($conn){
    //      echo "sfvdv";
    //  }
     echo $name,$detali,$image,$price,$status;
    // $query="insert into tbl_drink (name,type,image,price,status)  values('$name','$type','$detali','$image','$price','$status')";
    //  $result=mysqli_query($conn,$query);
    //  if($result){
    //      echo 'SuccessFull Add';
    //  }
    //  else{
    //      echo "File";
    //  }
 }
?>