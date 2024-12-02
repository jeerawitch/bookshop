<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $bookid = $_POST["product_id"];

    $status = $admin->deleteProduct($bookid);

    if($status){
        header("Location:../productManagement.php");
    }
}

?>