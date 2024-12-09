<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $shippingid = $_POST["shippingid"];

    $status = $admin->deleteOrder($shippingid);

    if($status){
        header("Location:../shippingManagement.php");
    }

    // echo $shippingid."<br>";
}

?>