<?php
    include_once "../function/db.php";
    $q = intval($_GET['q']);
    $con= new Dbconn();
    $conn=$con->DbConnect();
    $sqlQry = $conn->query("SELECT * FROM tbl_cafe WHERE status='1' AND id='".$q."' ");

        while ($rows = $sqlQry->fetch_array()) {
            $str=" <tr class='text-center'>
                    <td class='product-remove'><a href='#'><span class='icon-close'></span></a></td>            
                    <td class='image-prod'><div class='img' style='background-image:url(../desboard/themesbrand.com/lexa/html/horizontal-teal/upload/cafe/{$rows['image']});'></div></td>
                    <td class='product-name'>
                        <h3>{$rows['name']}</h3>
                        <p>{$rows['detail']}</p>
                    </td>
                    <td class='price'>{$rows['price']} ៛</td>
                    <td class='price'>1</td>                        
                    <td class='total'>{$rows['price']} ៛</td>
                </tr>
            ";
        }
        $str.=$str;
    
   
    echo $str;
