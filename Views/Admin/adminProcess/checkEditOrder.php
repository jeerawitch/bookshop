<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $orderitemid = $_POST["orderitemid"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $totalprice = $quantity*$price;
    
    $status = $admin->updateOrder($orderitemid, $quantity, $totalprice);
    
    if($status){
        header("Location:../orderManagement.php");
    }

    // echo $orderitemid."<br>";
    // echo $quantity."<br>";
    // echo $price."<br>";
    // echo $totalprice."<br>";
}

?>