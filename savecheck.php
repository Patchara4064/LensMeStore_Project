<?php
include "connectdb.php";
    $sql = mysqli_query($connector,'select * from user where user_nick = "'.$_SESSION['nick'].'"');
    $num = mysqli_num_rows($sql);
    $n = 1; 
    while($row = mysqli_fetch_array($sql)){
    $user_id =  $row['user_id'];
    $user_name = $row['user_name'];
    $n++;
    }
  $Total = 0;
  $SumTotal = 0;

    $strSQL = "INSERT INTO orders (orderdate,user_id) VALUES('".date("Y-m-d H:i:s")."','".$user_id."')";

    mysqli_query($connector,$strSQL) or die(mysqli_error());
    $strOrderID = mysqli_insert_id($connector);

    for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
    {
        if($_SESSION["strProductID"][$i] != "")
        {
        $updateorder = "update product set amount = amount - ".$_SESSION["strQty"][$i]." where product_id = '".$_SESSION["strProductID"][$i]."'";
        mysqli_query($connector,$updateorder) or die(mysqli_error()); 
        }
    }
    
    for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
    {
        if($_SESSION["strProductID"][$i] != "")
        {
            $strSQL = "SELECT * FROM product WHERE product_id = '".$_SESSION["strProductID"][$i]."' ";
            $objQuery = mysqli_query($connector,$strSQL)  or die(mysql_error());
            $objResult = mysqli_fetch_array($objQuery);
            $Total = $_SESSION["strQty"][$i] * $objResult["price"];
            $strSQL1 = "insert into order_datail (order_id,product_id,quantity,total)
                      values('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."','".$Total."') ;";
            mysqli_query($connector,$strSQL1) or die(mysql_error());
        }
          
    }
    
    unset($_SESSION['product_id']);     /*  ลบ session ที่เกี่ยวกับการเลือกสินค้าแต่ละครั้ง */
    unset($_SESSION['intLine']);
    unset($_SESSION['strProductID']);
    unset($_SESSION['strQty']);

     header("location: main.php"); 
?>
