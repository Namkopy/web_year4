<?php
$q = intval($_GET['per']);

include_once '../models/system/db.php'; 
    $con= new Dbconn(); 
    $conn=$con->DbConnect();

    mysqli_select_db($conn,"ajax_demo");

    
   




echo "<table id='datatable-buttons' class='table table-striped table-bordered dt-responsive nowrap' style='border-collapse: collapse; border-spacing: 0; width: 100%;'>
<thead>
    <tr >
        <th>Customer Name</th>                                        
        <th>Phone</th>
        <th>Prduct Name</th>
        <th>Size</th>                                        
        <th>Price</th>    
    </tr>
</thead>
<tbody>";
        $sql="SELECT * FROM tbl_perordercafe WHERE status= '".$q."'";
        $result = mysqli_query($conn,$sql);
    if ($result->num_rows>0) {
        while ($rows = mysqli_fetch_array($result)) {
            echo "<tr>";
            // echo "<td>{$rows['id']}</td>";
            echo "<td>{$rows['lastname']}</td>";
            echo "<td>{$rows['phone']}</td>";
            echo "<td>{$rows['name']}</td>";
            echo "<td>{$rows['size']}</td>";
            echo "<td>{$rows['price']} ៛</td>";
            echo "</tr>";
        }
    }
    $sql1="SELECT sum(price) total FROM tbl_perordercafe WHERE status= '".$q."'";
        $result = mysqli_query($conn,$sql1);
    if ($result->num_rows>0) {
        $rows = mysqli_fetch_array($result);}
    echo "<tr>
            <td colspan='4' style='text-align: right;color:#44bd32;font-weight: bold' >   Total :   </td>
            <td colspan='5' style='text-align: center;color:red'>  {$rows['total']} ៛ </td>
        </tr>";
echo " </tbody></table>";
mysqli_close($conn);
?>