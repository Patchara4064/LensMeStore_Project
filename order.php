<?php
include "connectdb.php";
ob_start();
session_start();

if(empty($_SESSION['id'])){
    header("location: Login.php");
	
}else if(!isset($_SESSION["intLine"])){

        $_SESSION["intLine"] = 0;
        $_SESSION["strProductID"][0] = $_GET["product_id"];
        $_SESSION["strQty"][0] = 1;

        header("location:show.php");
    }
    else{
        
        $key = array_search($_GET["product_id"], $_SESSION["strProductID"]);
        if((string)$key != "")
        {
            $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + 1;
        }
        else
        {
            
            $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
            $intNewLine = $_SESSION["intLine"];
            $_SESSION["strProductID"][$intNewLine] = $_GET["product_id"];
            $_SESSION["strQty"][$intNewLine] = 1;
        }
        
        header("location:show.php");

    }

?>

<?/* This code download from www.ThaiCreate.Com */ ?>