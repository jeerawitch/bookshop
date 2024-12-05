<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $orderid = $_POST["orderid"];
    $purchasestatus = $_POST["purchase"];

    $status = $admin->updatePurchase($orderid, $purchasestatus);
    
    if($status){
        header("Location:../purchaseManagement.php");
    }

    // echo $orderid."<br>";
    // echo $purchasestatus."<br>";
    
}

?>