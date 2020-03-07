<?php
$q = intval($_GET['q']);

include_once '../models/system/db.php'; 
    $con= new Dbconn(); 
    $conn=$con->DbConnect();

    mysqli_select_db($conn,"ajax_demo");
if($q=='1' || $q=='0'){
    $sql="SELECT * FROM tbl_food WHERE status= '".$q."'";
}
else{
    $sql="SELECT * FROM tbl_food ";
}
   


$result = mysqli_query($conn,$sql);

echo "<table id='datatable-buttons' class='table table-striped table-bordered dt-responsive nowrap' style='border-collapse: collapse; border-spacing: 0; width: 100%;'>
<thead>
    <tr >
        <th>Name</th>                                        
        <th>Detail</th>
        <th>Image</th>                                        
        <th>Price</th>                                        
        <th>Status</th>      
            
        
    </tr>
</thead>
<tbody>";
    while($rows = mysqli_fetch_array($result)) {
   
        echo "<tr>";                                           
        // echo "<td>{$rows['id']}</td>";
        echo "<td>{$rows['name']}</td>";
        echo "<td>{$rows['detail']}</td>";   
        echo "<td  style='text-align: center'><img src='upload/food/{$rows['image']}' alt='' style=' height: 30px; width: 70px;text-align: center'></td>";
        echo "<td>{$rows['price']}</td>";                                            
                                                
        if($rows['status']=="0"){
            echo "<td style='color:#e84118' id='{$rows['id']}'>Inactive</td>";
        }else{
            echo "<td style='color:#44bd32' id='{$rows['id']}'>Active</td>";
        }    
        
    echo "</tr>";
}
echo " </tbody></table>";
mysqli_close($conn);
?>